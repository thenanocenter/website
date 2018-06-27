<template>
    <div>
        <div v-if="!pay">
            <div class="form-group">
                <label for="name">Name</label>
                <input v-model="name" type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input v-model="email" type="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input v-model="amount" type="text" class="form-control" placeholder="Amount">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="currency">Currency</label>
                        <select v-model="currency" class="form-control">
                            <option value="nano">Nano</option>
                            <option value="usd">USD</option>
                        </select>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" v-on:click="pay=true">Pay</button>
        </div>
        <div v-if="pay">
            brainblocks
        </div>
    </div>
</template>

<script>
    export default {
        props:['project-uuid'],
        data() {
            return {
              name: null,
              email: null,
              amount: null,
              currency: 'nano',
              pay: false,
            }
        },
        mounted() {
            console.log('123');
            /*this.$el.addEventListener('submit', (e) => {
                if (!confirm(this.message)){
                    e.preventDefault();
                }
            });*/
        }
    }
</script>
