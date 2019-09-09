<template>
<div class="row">
    <div class="col-xs-12">
    <div class="box box-primary">
        <div class="box-header">
            <i class="fa fa-plane"></i>
             <h3 class="box-title">Flight List</h3>

            <div class="box-body table-responsive no-padding" >
                    <!-- <input type="text" class="form-control" v-model="filter" placeholder="Filter"> -->
                    <datatable :columns="columns" :data="rows" :filter-by="filter"></datatable>
                    <div class="pull-right">
                           <datatable-pager v-model="page" type="abbreviated" :per-page="per_page"></datatable-pager>
                    </div>
                 </div>
                  <button  @click="newForm"  data-toggle="modal" data-target="#addRoadmap" class="btn btn-primary">Add New Flight</button>
        </div>
    </div>
    </div>
     <!-- Modal -->
                <div class="modal fade" id="addRoadmap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Add</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Vform -->
                              <form @submit.prevent="addFlight()">
                                    <div class="form-group">
                                    <label>Schedule</label>
                                    <input
                                    v-model="form.flight_schedule"
                                    type="text" name="flight_schedule"
                                    placeholder="Plane Name"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('flight_schedule') }">
                                    <has-error :form="form" field="flight_schedule"></has-error>
                                    </div>

                                       <div class="form-group">
                                    <label>Arrival</label>
                                    <input
                                    v-model="form.flight_arrival"
                                    type="text" name="flight_arrival"
                                    placeholder=""
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('flight_arrival') }">
                                    <has-error :form="form" field="flight_arrival"></has-error>
                                    </div>

                                    <div class="form-group">
                                    <label>Flight Name</label>
                                    <input
                                    v-model="form.alias"
                                    type="text"
                                    name="alias"
                                    placeholder=""
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('alias') }">
                                    <has-error :form="form" field="alias"></has-error>
                                    </div>

                                     <div class="form-group">
                                    <label>Departure from</label>
                                    <input
                                    v-model="form.flight_country_from"
                                    type="text"
                                    name="flight_country_from"
                                    placeholder="flight_country_from"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('flight_country_from') }">
                                    <has-error :form="form" field="flight_country_from"></has-error>
                                    </div>

                                       <div class="form-group">
                                    <label>Arrival to</label>
                                    <input
                                    v-model="form.flight_country_to"
                                    type="text"
                                    name="flight_country_to"
                                    placeholder="flight_country_to"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('flight_country_to') }">
                                    <has-error :form="form" field="flight_country_to"></has-error>
                                    </div>

                                       <div class="form-group">
                                    <label>Plane ID</label>
                                    <input
                                    v-model="form.plane_id"
                                    type="text"
                                    name="plane_id"
                                    placeholder="plane_id"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('plane_id') }">
                                    <has-error :form="form" field="plane_id"></has-error>
                                    </div>

                                       <div class="form-group">
                                    <label>Price</label>
                                    <input
                                    v-model="form.price"
                                    type="text"
                                    name="price"
                                    placeholder="price"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('price') }">
                                    <has-error :form="form" field="price"></has-error>
                                    </div>

                                       <div class="form-group">
                                    <label>Total Seats</label>
                                    <input
                                    v-model="form.seats_available"
                                    type="text"
                                    name="seats_available"
                                    placeholder="Seats"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('seats_available') }">
                                    <has-error :form="form" field="seats_available"></has-error>
                                    </div>

                                       <div class="form-group">
                                    <label>Status</label>
                                    <input
                                    v-model="form.status"
                                    type="text"
                                    name="status"
                                    placeholder=""
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('status') }">
                                    <has-error :form="form" field="status"></has-error>
                                    </div>
                                       <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                          <button type="submit" class="btn btn-success">Create</button>
                         </div>
                             </form>
                        <!-- vform -->
                    </div>


                    </div>

                </div>
                </div>
                <!-- Modal -->
</div>
</template>

<script>
import DatatableFactory from 'vuejs-datatable';
    export default {
         components: { DatatableFactory },

         data(){
             return {
                 filter: '',
                 columns: [
                    {label: 'Flight ID', field: 'flight_id', filterable: false},
                    {label: 'Schedule', field: 'flight_schedule', filterable: false},
                    {label: 'Arrival', field: 'flight_schedule'},
                    {label: 'Flight Name', field: 'alias'},
                    {label: 'From', field: 'flight_country_from'},
                    {label: 'To', field: 'flight_country_to'},
                    {label: 'Plane', field: 'plane_id'},
                    {label: 'Price', field: 'price'},
                    {label: 'Available Seats', field: 'seats_available'},
                ],
                rows: [],
                page: 1,
                per_page: 10,

                form: new Form({
                    flight_schedule: '',
                    flight_arrival: '',
                    alias:'',
                    flight_country_from: '',
                    flight_country_to: '',
                    plane_id: '',
                    price: '',
                    seats_available: '',
                    status: '',


                })
             }
         },
         methods: {
             getFlights(){
                 axios.get('/flights').then(function(response){
                        this.rows = response.data
                    }.bind(this))
             },

             newForm(){
                this.form.reset();
                $('#addRoadmap').modal('show');
             },

             addFlight(){
                   this.form.post('/flights')
                    .then(()=>{
                         $("#addRoadmap").modal("hide");
                         $(".modal-backdrop").remove();
                    })
                    this.getFlights()
             }
         },
        mounted: function() {
            this.getFlights()
            console.log('Component mounted.')
        }
    }
</script>
