@extends('layouts.master')

@section('content')
      <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Maintenance
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li><a href="#">Event</a></li>
              <li class="active">Event Details</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
           <div class="col-md-3">
                <!-- general form elements -->
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Event Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">

                        <div class="form-group">
                          <label for="exampleInputEmail1">Event Name*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtEvent" 
                                 name="txtEvent" 
                                 placeholder="Name"
                                 required="required">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Event Description*</label>
                          <input type="text"
                                 class="form-control" 
                                 id="txtEventDesc"
                                 name="txtEventDesc" 
                                 placeholder="Name">
                        </div><br>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Event Organizer*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtEventOrg" 
                                 name="txtEventOrg" 
                                 placeholder="Name">
                        </div>

                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        <center><button type="submit" 
                                        class="btn btn-danger btn-flat"
                                        id="btnSubmit">Submit</button></center>
                      </div>
                    </form>
                  </div><!-- /.box -->
              </div>

              <div class="col-md-9">
                <div class="box box-danger">
                  <div class="box-header">
                    <h3 class="box-title">Event Details Table</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Event Name</th>
                           <th>Event Description</th>
                          <th>Event Organizer</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($eDetails as $ed)
                          <tr>
                            <td>{{ $ed -> EventID }}</td>
                            <td>{{ $ed -> EventName }}</td>
                            <td>{{ $ed -> EventDescription }}</td>
                            <td>{{ $ed -> EventOrganizer }}</td>
                            <td><button class="btn btn-xs btn-success btn-flat"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-xs btn-danger btn-flat"><i class="fa fa-remove"></i></button></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <script src="{{ asset ('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
              
      </section>
      <!-- /.content -->
@stop