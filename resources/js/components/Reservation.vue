<template>

<div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-gear"></i>

              <h3 class="box-title">Navigation</h3>
            </div>
            <div class="box-body pad table-responsive">

              <table class="table table-bordered text-center">
                <tbody>
                <tr>

                  <td>
                    <button type="button" class="btn btn-block btn-warning btn-">Reservations</button>
                  </td>
                    <td>
                  <router-link to="/home" class="btn btn-block btn-warning btn " > <i class="fa fa-key "></i>  <span>Rooms</span> </router-link>
                  </td>
                     <td>
                    <button type="button" class="btn btn-block btn-warning btn"> <i class="fa fa-users "></i> Guests</button>
                  </td>
                    <td>
                    <button type="button" class="btn btn-block btn-warning btn">Options</button>
                  </td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box -->
          </div>
          <div class="box">
              <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Reservations</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Add Reservations</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">

          <div class="box">
            <div class="box-header">
                 <i class="fa fa-listgt"></i>

              <h3 class="box-title">Reservations List</h3>

            </div>
            <!-- /.box-header -->

            <div class="box-body table-responsive no-padding" >
                    <input type="text" class="form-control" v-model="filter" placeholder="Filter">
                    <datatable :columns="columns" :data="rows" :filter-by="filter"></datatable>
                    <datatable-pager v-model="page" type="abbreviated" :per-page="per_page"></datatable-pager>

                 </div>
                </div>
                 </div>
                 <div class="tab-pane" id="tab_2">
                      <form @submit.prevent="login" @keydown="form.onKeydown($event)">


                            <div class="form-group">
                            <label>Guest Id</label>
                            <select class="form-control">
                                <option v-for="guest in guests" :key="guest.guest_id">{{guest.guest_id}} - {{guest.first_name}} {{guest.last_name}}</option>
                            </select>
                            </div>

                             <div class="form-group">
                            <label>Room Id</label>
                            <select class="form-control" >
                                <option v-for="room in unavailableRooms" :key="room.room_id">{{room.room_id}} - {{room.status}}</option>
                            </select>
                            </div>

                        <button class="btn btn-success btn-block" type="submit">Book Information</button>
                        </form>
                 </div>
            </div>
          </div>
          </div>
        </div>
      </div>

</template>

<script>
    import DatatableFactory from 'vuejs-datatable';

    export default {
            components: { DatatableFactory },
      data(){
        return {
            reservations: [],
            filter: '',
            columns:[
                  {label: 'ID', field: 'reservation_id',filterable: false},
                  {label: 'Guest ID', field: 'guest_id',filterable: false},
                  {label: 'Room ID', field: 'room_id',filterable: false},
                  {label: 'Reservation Date', field: 'reservation_date'},
                  {label: 'Check in', field: 'check_in'},
                  {label: 'Check out', field: 'check_out'},
                  {label: 'Persons', field: 'persons'}
            ],
            rows: [],
            page: 1,
            per_page: 10,
            guests: [],
                rooms: [
                {status: 'Unavailable'},
                {status: 'Available'},
            ],
            form: new Form ({
                guest_id: '',
                room_id: '',
                reservation_date: '',
                check_in:'',
                check_out: '',
                persons: '',
            })
        }
      },
      methods:{
          getReservations(){
              axios.get('/reservation')
                .then(({data}) => (this.reservations = data))
          },

          getReserve(){
              axios.get('api/reservation').then(function(response){
                  this.rows = response.data
              }.bind(this))
          },

          addReservations(){
              this.form.post('api/reservation')
                .then(()=>{
                    alert('success')
                })
          },
          getGuests(){
              axios.get('api/guest')
                .then(({data}) => (this.guests = data))
          },
           getRooms(){
              axios.get('api/room')
                .then(({data}) => (this.rooms = data))
          }
      },
      computed: {
          unavailableRooms(){
             return this.rooms.filter(room => room.status !== 'Unavailable')
          },
      },
        mounted: function() {
            this.getReserve()
            this.getRooms()
            // this.getReservations()
            this.getGuests()

            // let vm = this
            // $.ajax({
            //     url: '/api/reservation',
            //     success(res){
            //         vm.reservations = res
            //     }
            // })
        }
    }
</script>
