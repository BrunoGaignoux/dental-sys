<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Flash;

class UserController extends Controller
{

/* Begin functions to view */

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewNewUser(){
        $roles=Role::all();
        return view("access_control.users.create")->with("roles",$roles);

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewNewRol(){
        $roles = Role::paginate(20);
        return view("access_control.roles.index")->with("roles",$roles);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewNewPermission(){
        $roles = Role::all();
        $permisos = Permission::paginate(20);
        return view("access_control.permissions.index")->with("roles",$roles)->with("permisos", $permisos);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewEditUser($id){
        $usuario = User::find($id);
        $roles = Role::all();
        return view("access_control.users.edit")->with("usuario",$usuario)
            ->with("roles",$roles);
    }

/* End functions to view */
/* Begin functions to user */

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listUser(){
        $usuarios = User::paginate(100);
        return view("access_control.users.index")->with("usuarios",$usuarios);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createUser(Request $request){

        $reglas=[  'password' => 'required|min:8',
            'email' => 'required|email|unique:users', ];

        $mensajes=[  'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
            'email.unique' => 'O email já se encontra registrado no sistema.', ];

        $validator = Validator::make( $request->all(),$reglas,$mensajes );
        if( $validator->fails() )
        {
            Flash::error('Erro de validação de Usuário.');
            return redirect(url('/index'))
                ->withErrors($validator->errors());
        }

        $usuario = new User;
        $usuario->name = strtoupper($request->input("nome")." ".$request->input("apellidos"));
        $usuario->phone = $request->input("telefone");
        $usuario->email = $request->input("email");
        $usuario->password = bcrypt( $request->input("password") );


        if($usuario->save())
        {
            Flash::success('Usuário criado com sucesso!');
            return redirect(url('/create_user'));
        }
        else
        {
            Flash::error('Erro ao criar usuário.');
            return redirect(url('/create_user'));
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function editUser(Request $request){

        $idusuario=$request->input("id_usuario");
        $usuario=User::find($idusuario);
        $usuario->name=strtoupper($request->input("nome") . ' ' . $request->input("apelido"));
        $usuario->telefone=$request->input("telefone");

        if($request->has("rol"))
        {
            $rol=$request->input("rol");
            $usuario->revokeAllRoles();
            $usuario->assignRole($rol);
        }

        if( $usuario->save())
        {
            Flash::success('Usuário atualizado com sucesso!');
            return redirect(url("/edit/user/$idusuario"));
        }
        else
        {
            Flash::error('Erro ao atualizar usuário.');
            return redirect(url("/edit/user/$idusuario"));
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchUser(Request $request){
        $dato = $request->input("dato_buscado");
        $usuarios = User::where("name","like","%".$dato."%")->orwhere("apellidos","like","%".$dato."%")                                              ->paginate(100);
        return view('access_control.users.index')->with("usuarios",$usuarios);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function eraseUser(Request $request){
        $idusuario=$request->input("id_usuario");
        $usuario=User::find($idusuario);

        if($usuario->delete())
        {
            Flash::success('Usuário deletado com sucesso!');
            return redirect(url('/index'));
        }
        else
        {
            Flash::error('Erro ao deletar usuário.');
            return redirect(url('/index'));
        }


    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function editAccess(Request $request){
        $idusuario = $request->input("id_usuario");
        if(User::where('email', $request->input("email"))->first())
        {
            $usuario = User::find($idusuario);
            if($usuario)
            {
                $usuario->email = $request->input("email");
                $usuario->password = bcrypt( $request->input("password") );
                if($usuario->save())
                {
                    Flash::success('Acesso do usuário alterado com sucesso!');
                    return redirect(url("/edit/user/$idusuario")) ;
                }
                else
                {
                    Flash::error('Erro ao alterar acesso do usuário.');
                    return redirect(url("/edit/user/$idusuario"));
                }
            }
            else
            {
                Flash::error('Erro interno no sistema.');
                return redirect(url("/edit/user/$idusuario"));
            }
        }
        else
        {
            Flash::error('Erro ao alterar acesso do usuário com o email informado, já existe um registro com o valor informado.');
            return redirect(url("/edit/user/$idusuario"));
        }
    }

/* End functions to user */
/* Begin functions to role */

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createRol(Request $request){

        $rol = new Role;
        $rol->name = $request->input("rol_nombre") ;
        $rol->slug = $request->input("rol_slug") ;
        $rol->description = $request->input("rol_descripcion") ;
        if($rol->save())
        {
            Flash::success('Tipo de Usuário criado com sucesso!');
            return redirect(url('/create_role'));
        }
        else
        {
            Flash::error('Erro ao criar tipo de usuário.');
            return redirect(url('/create_role'));
        }
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function aggregateRol(Request $request){
        $idusu = $request['id_usuario'];
        $idrol = $request['tipo'];
        $usuario = User::find($idusu);
        if ($usuario)
        {
            $usuario->assignRole($idrol);
            $roles = $usuario->getRoles();
            if(count($roles) > 0)
            {
                Flash::success('Tipo de Usuário atribuido com sucesso!');
                return redirect(url("/edit/user/$idusu"));
            }
            else
            {
                Flash::error('Erro ao atribuir tipo de usuário.');
                return redirect(url("/edit/user/$idusu"));
            }
        }
        else
        {
            Flash::error('Erro ao interno no sistema.');
            return redirect(url("/edit/user/$idusu"));
        }
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function eraseRol(Request $request){
        $idusu = $request['id_usuario'];
        $idrol = $request['tipo'];
        $usuario=User::find($idusu);
        if ($usuario)
        {
            $usuario->revokeRole($idrol);
            $roles = $usuario->getRoles();
            if(count($roles) > 0)
            {
                Flash::success('Tipo de Usuário removido com sucesso!');
                return redirect(url("/edit/user/$idusu"));
            }
            else
            {
                Flash::error('Erro ao remover tipo de usuário.');
                return redirect(url("/edit/user/$idusu"));
            }
        }
        else
        {
            Flash::error('Erro ao interno no sistema.');
            return redirect(url("/edit/user/$idusu"));
        }
    }

    /**
     * @param $idrole
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function trashRol($idrole){

        $role = Role::find($idrole);
        $role->delete();

        Flash::success('Tipo de Usuário removido com sucesso!');
        return redirect(url('/index'));
    }

/* End functions to role */
/* Begin functions to permission */

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createPermission(Request $request){

        $permiso = new Permission;
        $permiso->name=$request->input("permiso_nombre") ;
        $permiso->slug=$request->input("permiso_slug") ;
        $permiso->description=$request->input("permiso_descripcion") ;
        if($permiso->save())
        {
            Flash::success('Permissão criada com sucesso!');
            return redirect(url('/create_permission'));
        }
        else
        {
            Flash::error('Erro ao criar permissão.');
            return redirect(url('/create_permission'));
        }


    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function aggregatePermission(Request $request){

        $roleid=$request->input("rol_sel");
        $idper=$request->input("permiso_rol");
        $rol=Role::find($roleid);
        $rol->assignPermission($idper);

        if($rol->save())
        {
            Flash::success('Permissão agregada com sucesso!');
            return redirect(url('/create_permission'));
        }
        else
        {
            Flash::error('Erro ao agregar permissão.');
            return redirect(url('/create_permission'));
        }

    }

    /**
     * @param $idrole
     * @param $idper
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function erasePermission($idrole, $idper){

        $role = Role::find($idrole);
        $role->revokePermission($idper);
        $role->save();

        Flash::success('Permissão removida com sucesso!');
        return redirect(url('/index'));
    }

/* End functions to permission */

}