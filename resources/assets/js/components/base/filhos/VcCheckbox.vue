<template>
    <div>
        <label class="control-label input-label">
            <input type="checkbox" :autofocus="focus" :required="required" :disabled="disabled" class="i-checks"
                   ref="input" :checked="value">
            {{ label }}
        </label>
    </div>
</template>

<script>

    export default {

        data() {
            return {
                input: null
            }
        },

        props: {
            value: false,
            label: String,
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
        },

        watch: {
            disabled(value) {
                $(this.input).prop('disabled', value).iCheck('update');
            }
        },

        mounted() {
            this.input = this.$refs.input;

            $(this.input).on('ifChanged', () => {
                this.$emit('input', $(this.input).is(':checked'));
            });
        }
    }
</script>
<style scoped>
    label.label-pad {
        min-height: 1.3em !important;
        margin-bottom: 5px !important;
        display: block;
    }
</style>