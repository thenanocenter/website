<template>
    <div class="container mx-auto" v-show="open">
        <div class="alert alert-dismissable margin5">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" @click="open = !open">&times;</button>
            <div>
              <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
              open: true
            }
        }
    }
</script>
