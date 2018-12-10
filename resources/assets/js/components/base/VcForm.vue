<template>
    <form ref="form" @submit.prevent="">
        <slot :enctype="multipart ? 'multipart/form-data' : ''"></slot>
    </form>
</template>

<script>
export default {

    data() {
        return {
            form: null
        }
    },
    props: {
        multipart: {
            type: Boolean,
            default: true
        }
    },
    mounted() {
        this.form = this.$refs.form;
    }
}
</script>