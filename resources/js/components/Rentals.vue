<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Rental Record for <em>{{ user_name }}</em></h1></div>

                    <div class="card-body" >
                        <span v-if="loading"><i class="fas fa-spinner fa-spin"></i> Loading Data</span>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>MOVIE</th>
                                <th>RENTALS</th>
                                <th>DURATION</th>
                                <th>AMOUNT OWED</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr
                                v-if="rentals_data.data && rentals_data.data.length === 0 && !loading">
                                <td colspan="4">No results found</td>
                            </tr>
                            <tr v-for="(itm, idx) in rentals_data.data">
                                <td>
                                    {{ itm.name }}
                                </td>
                                <td>
                                    {{ itm.total_rentals }}
                                </td>
                                <td>
                                    {{ itm.duration }}
                                </td>
                                <td>
                                    {{ itm.individual_amount_owed }}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p>Amount owed is <em>${{ totals.total_amount_owed }}</em></p>
                        <p>Congratulations! You earned <em>{{ totals.frequent_renter_points }}</em> frequent renter points!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    window.Vue = require("vue");
    window.$ = require("jquery");

    export default {
        name: "Rentals",
        components: {

        },
        data() {
            return {
                CSRF_TOKEN: $('meta[name="csrf-token"]').attr("content"),
                app_key: $('meta[name="app-key"]').attr("content"),
                user_name: $('meta[name="user-name"]').attr("content"),
                loading: false,
                rentals_data: {
                    name: '',
                    duration: '',
                    total_rentals: '',
                    individual_amount_owed: '',
                    frequent_renter_points: '',
                    total_amount_owed: ''
                },
                totals: {
                    frequent_renter_points: '',
                    total_amount_owed: ''
                },
                page: 1
            };
        },
        watch: {

        },
        mounted() {
            const that = this;
            that.getUserRentals();
        },
        methods: {

            getUserRentals() {
                const that = this;
                that.$set(that, "loading", true);

                const headers = {
                    'X-CSRF-TOKEN'    : that.CSRF_TOKEN,
                    'X-Requested-With': 'XMLHttpRequest',
                };

                $.ajax({
                    url:'/rentals',
                    method: 'GET',
                    dataType: 'json',
                    headers: headers,
                    success: function(data){
                        that.$set(that, "rentals_data", data);
                        that.$set(that, "totals", data.totals);
                        that.$set(that, "loading", false);
                    }
                });
            },
        }
    };
</script>

<style lang="scss">

</style>
