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
                    <button type="button" class="btn btn-block btn-warning btn-">Bookings</button>
                  </td>
                    <td>
                    <button type="button" class="btn btn-block btn-warning btn-">Rooms</button>
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
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Bookings</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Add bookings</a></li>


              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">

          <div class="box">
            <div class="box-header">
                 <i class="fa fa-list"></i>

              <h3 class="box-title">Reservations List</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
          