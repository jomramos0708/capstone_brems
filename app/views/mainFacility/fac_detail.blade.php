@extends('layouts.master')

@section('content')
      <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Maintenance
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li><a href="#">Facility</a></li>
              <li class="active">Facility Details</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
            <div class="col-md-3">
                <!-- general form elements -->
                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Facility Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">

                        <div class="form-group">
                          <label for="exampleInputEmail1">Facility Name*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtFacility" 
                                 name="txtFacility" 
                                 placeholder="Name"
                                 required="required">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Resident's Rental Fee (per hour)*</label>
                          <input type="number" 
                                 class="form-control" 
                                 id="txtResfee"
                                 name="txtResfee"
                                 required="required">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Non-Resident's Rental Fee (per hour)*</label>
                          <input type="number" 
                                 class="form-control" 
                                 id="txtNonResFee"
                                 name="txtNonResFee"
                                 required="required">
                        </div>

                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        <center><button type="submit" 
                                        class="btn btn-info btn-flat"
                                        id="btnSubmit">Submit</button></center>
                      </div>
                    </form>
                  </div><!-- /.box -->
              </div>

              <div class="col-md-9">
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">Facility Table</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Facility Name</th>
                          <th>Rental Fee(Resident)</th>
                          <th>Rental Fee(Nonresident)</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($fDetails as $fd)
                          <tr>
                            <td>{{ $fd -> FacilityID }}</td>
                            <td>{{ $fd -> FacilityName }}</td>
                            <td>{{ $fd -> FacilityRentalR }}</td>
                            <td>{{ $fd -> FacilityRentalNR }}</td>
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