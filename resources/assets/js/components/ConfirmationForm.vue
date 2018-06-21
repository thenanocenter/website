<template>
<form>
<slot></slot>
</form>
</template>

<script>
    export default {
        props:['message'],
        data() {
            return {
              open: true
            }
        },
        mounted() {
            this.$el.addEventListener('submit', (e) => {
                if (!confirm(this.message)){
                    e.preventDefault();
                }
            });
        }
    }
</script>
