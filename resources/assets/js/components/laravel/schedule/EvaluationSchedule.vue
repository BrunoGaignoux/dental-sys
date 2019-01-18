<template>
    <div class="row">
        <div class="col-md-12">
            <vc-box :title="$t('Cadastro de Clientes - Certificado Ômega')" width="100%">
                <vc-table :cols="cols" :items="response" :order-col="5" :row-callback="rowCallback" select="multi"></vc-table>
            </vc-box>
            <vc-modal ref="modalCadastraCertificado" size="md" :title="$t('Deseja realmente ') + titulo + $t(' certificado?')">
                <template slot="body">
                    <vc-button :width="2" @click.native="setCertificates(register, omega, user)" text="Sim"></vc-button>
                    <vc-button :width="2" @click.native="closeModal()" text="Não"></vc-button>
                </template>
            </vc-modal>
        </div>
    </div>
</template>

<script>
    import VcBox from '../../../components/base/VcBox.vue'
    import VcButton from '../../../components/base/VcButton.vue'
    import VcForm from '../../../components/base/VcForm.vue'
    import VcInput from '../../../components/base/VcInput.vue'
    import VcModal from '../../../components/base/VcModal.vue'
    import VcTable from '../../../components/base/VcTable.vue'

    export default {
        data() {
            return {
                response: [],
                register: '',
                omega: '',
                user: '',
                titulo: '',
                certificadosOmega: window.Laravel.apiAgvBaseUri + '/api/schedules',
                cols: [
                    {title: this.$i18n.t('Ação'), data: 'criterio'},
                    {title: this.$i18n.t('Codigo'), data: 'cliente'},
                    {title: this.$i18n.t('CNPJ'), data: 'cgc'},
                    {title: this.$i18n.t('Nome'), data: 'raz'},
                    {title: this.$i18n.t('Codigo Erp'), data: 'cod_erp_cli'},
                    {title: this.$i18n.t('Certificado'), data: 'criterio'},
                ]
            }
        },
        methods: {
            getClients() {
                Event.$emit('VcLoader', true);
                $.ajax({
                    method: 'GET',
                    headers: { 'Accept': 'application/json' },
                    url: this.certificadosOmega,
                }).done((response) => {
                    Event.$emit('VcLoader', false);
                    if(response.success) {
                        console.log(response);
                        this.response = response.data;
                        Event.$emit('VcAlert', {
                            type: 'success',
                            title: 'Resposta:',
                            text: response.message
                        });
                    } else {
                        Event.$emit('VcAlert', {
                            type: 'warning',
                            title: 'Atenção!',
                            text: response.message
                        });
                    }
                }).fail((response) => {
                    this.response = response;
                    Event.$emit('VcLoader', false);
                    Event.$emit('VcAlert', {
                        type: 'error',
                        title: 'Erro!',
                        text: response.message
                    });
                });
            },
            setCertificates(registro, omega, usuario) {
                this.closeModal();
                Event.$emit('VcLoader', true);
                $.ajax({
                    method: 'GET',
                    headers: { 'Accept': 'application/json' },
                    url: this.certificadosOmega,
                    data: {
                        type: 2,
                        register: registro,
                        omega: omega,
                        user: usuario
                    }
                }).done((response) => {
                    Event.$emit('VcLoader', false);
                    if(response.success) {
                        this.getClients();
                        Event.$emit('VcAlert', {
                            type: 'success',
                            title: 'Sucesso!',
                            text: response.return
                        });
                    } else {
                        Event.$emit('VcAlert', {
                            type: 'warning',
                            title: 'Atenção!',
                            text: response.error_messages
                        });
                    }
                }).fail((response) => {
                    this.response = response;
                    Event.$emit('VcLoader', false);
                    Event.$emit('VcAlert', {
                        type: 'error',
                        title: 'Erro!',
                        text: response.message
                    });
                });
            },
            rowCallback(row, data) {
                let act = new Vue({
                    template: `<td class="text-center">
                                   <vc-button template="table-editar" class="edit-row" width="inline"></vc-button>
                               </td>`,
                    components: {
                        VcButton
                    }
                });
                act.$mount($('td:eq(0)', row)[0]);
                $('td:eq(0)', row).on('click', '.edit-row', () => {
                    this.register = data.recnum;
                    this.user = window.Laravel.user.email;
                    if (data.criterio === ' ') {
                        this.titulo = 'criar um';
                        this.omega = 'S';
                    } else {
                        this.titulo = 'remover o';
                        this.omega = 'N';
                    }
                    this.openModal();
                    console.log(this.register,this.omega,this.user, this.titulo);
                });
            },
            openModal() {
                this.$refs.modalCadastraCertificado.show();
            },
            closeModal() {
                this.$refs.modalCadastraCertificado.hide();
            }
        },
        mounted() {
            this.getClients();
        },
        components: {
            VcBox,
            VcButton,
            VcForm,
            VcInput,
            VcTable,
            VcModal
        }
    }
</script>

<style scoped>

</style>