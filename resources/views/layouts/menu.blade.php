<li class="list-menu-item treeview menu-open">
    <a href="#">
        <i class="fa fa-cube"></i> <span>Módulos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu" style="">
        <li class="list-menu-item treeview menu-open">
            <a href="#">
                <i class="fa fa-pencil-square"></i> <span>Cadastros</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="">
                <li class="list-menu-item {{ Request::is('patients*') ? 'active' : '' }}">
                    <a href="{!! route('patients.index') !!}"><span>Pacientes</span></a>
                </li>
                <li class="list-menu-item {{ Request::is('providers*') ? 'active' : '' }}">
                    <a href="{!! route('providers.index') !!}"><span>Fornecedores</span></a>
                </li>
                <li class="list-menu-item {{ Request::is('officials*') ? 'active' : '' }}">
                    <a href="{!! route('officials.index') !!}"><span>Funcionarios</span></a>
                </li>
                <li class="list-menu-item {{ Request::is('banks*') ? 'active' : '' }}">
                    <a href="{!! route('banks.index') !!}"><span>Bancos</span></a>
                </li>
            </ul>
        </li>
        <li class="list-menu-item treeview menu-open">
            <a href="#">
                <i class="fa fa-shopping-cart"></i> <span>Compras</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="">
            </ul>
        </li>
        <li class="list-menu-item {{ Request::is('schedules*') ? 'active' : '' }}">
            <a href="{!! route('schedules.index') !!}"><i class="fa fa-calendar"></i><span>Agenda de avaliação</span></a>
        </li>
    </ul>
</li>
<li class="list-menu-item treeview menu-open">
    <a href="#">
        <i class="fa fa-line-chart"></i> <span>Financeiro</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu" style="">
        <li><a href="/"> Centro de custo</a></li>
        <li><a href="/"> Factoring</a></li>
        <li><a href="/"> Controle de cheques</a></li>
        <li><a href="/"> Cheques - aditivos</a></li>
        <li><a href="/"> Bancos</a></li>
        <li><a href="/"> Contas a receber</a></li>
        <li><a href="/"> Contas a receber</a></li>
    </ul>
</li>
<hr>
<li class="list-menu-item treeview menu-open">
    <a href="#">
        <i class="fa fa-file-text-o"></i> <span>Relatórios</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu" style="">
        <li><a href="/"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
        <li><a href="/"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
    </ul>
</li>
<li class="list-menu-item treeview menu-open">
    <a href="#">
        <i class="fa fa-cog"></i> <span>Configurações</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu" style="">
        <li class="list-menu-item {{ Request::is('access.users.index') ? 'active' : '' }}">
            <a href="{!! route('access.users.index') !!}"><i class="fa fa-users"></i><span>Controle de acesso</span></a>
        </li>
        <li class="list-menu-item {{ Request::is('access.users.index') ? 'active' : '' }}">
            <a href=""><i class="fa fa-book"></i><span>Manuais</span></a>
        </li>
    </ul>
</li>