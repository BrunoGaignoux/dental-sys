<template>
    <div class="upload-btn-wrapper">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-paperclip"></i></span>
            <input type="text" class="form-control" :value="filename" :disabled="disabled" :placeholder="placeholder">
        </div>
        <input ref="input" :autofocus="focus" :disabled="disabled" :required="required" :multiple="multi" :accept="accept"
               type="file" class="form-control col-md-4 input-real" @change="updateFilename">
    </div>
</template>

<script>

    export default {

        data() {
            return {
                filename: null,
                input: null
            }
        },

        props: {
            disabled: {
                default: false,
                type: Boolean
            },
            required: {
                default: false,
                type: Boolean
            },
            focus: {
                default: false,
                type: Boolean
            },

            // Específicas
            multi: {
                type: Boolean,
                default: false
            },
            accept: String,
            placeholder: String

        },

        methods: {
            updateFilename: function (e) {
                this.filename = e.target.files[0].name;
            }
        },

        computed: {
            buttonText: function() {
                if (this.multi) {
                    return 'Upload de arquivos';
                } else {
                    return 'Upload de arquivo';
                }
            }
        },

        mounted() {
            this.input = this.$refs.input;
        }
    }
</script>
<style scoped>
    .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: block;
    }

    .input-real {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        z-index: 10;
    }

</style>