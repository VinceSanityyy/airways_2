<template>
<div class="row">
    <div class="col-xs-12">
    <div class="box box-primary">
        <div class="box-header">
            <i class="fa fa-plane"></i>
             <h3 class="box-title">Planes</h3>

            <div class="box-body table-responsive no-padding" >
                    <!-- <input type="text" class="form-control" v-model="filter" placeholder="Filter"> -->
                    <datatable :columns="columns" :data="rows" :filter-by="filter"></datatable>
                    <div class="pull-right">
                           <datatable-pager v-model="page" type="abbreviated" :per-page="per_page"></datatable-pager>
                    </div>
                 </div>
                 <button  @click="newForm"  data-toggle="modal" data-target="#addRoadmap" class="btn btn-primary">Add New Plane</button>
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
                              <form @submit.prevent="addPlane()">
                                    <div class="form-group">
                                    <label>Description</label>
                                    <input
                                    v-model="form.plane_description"
                                    type="text" name="plane_description"
                                    placeholder="Plane Name"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('plane_description') }">
                                    <has-error :form="form" field="plane_description"></has-error>
                                    </div>
                                    <div class="form-group">
                                    <label>Status</label>
                                    <input
                                    v-model="form.status"
                                    type="text"
                                    name="status"
                                    placeholder="Status"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('status') }">
                                    <has-error :form="form" field="status"></has-error>
                                    </div>

                                     <div class="form-group">
                                    <label>Capacity</label>
                                    <input
                                    v-model="form.total_seats"
                                    type="text"
                                    name="total_seats"
                                    placeholder="Capacity"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('total_seats') }">
                                    <has-error :form="form" field="total_seats"></has-error>
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
                planes: [],
                filter: '',
                columns: [
                    {label: 'Plane ID', field: 'id', filterable: false},
                    {label: 'Description', field: 'plane_description', filterable: false},
                    {label: 'Status', field: 'status'},
                    {label: 'Capacity', field: 'total_seats'}

                ],

                rows: [],
                page: 1,
                per_page: 10,


                form: new Form({
                    plane_id: '',
                    plane_description: '',
                    status: '',
                    total_seats: ''
                }),
            }
        },

        methods: {

            newForm(){

                this.form.reset();
                $('#addRoadmap').modal('show');
            },
            addPlane(){
            this.form.post('/planes')
                    .then(()=>{
                         $("#addRoadmap").modal("hide");
                         $(".modal-backdrop").remove();
                    })
                    this.getPlanes()
        },
            getPlanes(){
                axios.get('/planes').then(function(response){
                        this.rows = response.data
                    }.bind(this))
            }
        },
        mounted:function() {
            this.getPlanes()
            // console.log('Component mounted.')
        }
    }
</script>
