@extends('layouts.master')

@section('content')
      <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Maintenance
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li><a href="#">Business</a></li>
              <li class="active">Business Details</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
                            <div class="col-md-3">
                <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Business Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">

                        <div class="form-group">
                          <label>Business Name*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtBName" 
                                 name="txtBName" 
                                 placeholder="Name"
                                 required="required">
                        </div>

                        <div class="form-group">
                          <label>Business Type*</label>
                          <select class="form-control"
                                  name="txtBType"
                                  id="txtBType">
                                  @foreach($bType as $bt)
                                    <option value="{{$bt->BusinessTypeID}}">{{ $bt -> BusinessType }}</option>
                                  @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Owner Name*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtBOwnerName" 
                                 name="txtBOwnerName" 
                                 placeholder="Owner Name"
                                 required="required">
                        </div>

                        <div class="form-group">
                          <label>Address*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtBAddress" 
                                 name="txtBAddress" 
                                 placeholder="Address"
                                 required="required">
                        </div>

                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        <center><button type="submit" 
                                        class="btn btn-primary btn-flat"
                                        id="btnSubmit">Submit</button></center>
                      </div>
                    </form>
                  </div><!-- /.box -->
              </div>

              <div class="col-md-9">
                <div class="box box-primary">
                  <div class="box-header">
                    <h3 class="box-title">Business Details Table</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>BusinessName</th>
                          <th>Type</th>
                          <th>Owner Name</th>
                          <th>Address</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($bDetails as $bd)
                            <tr>
                                <td>{{ $bd -> BusinessID}}</td>
                                <td>{{ $bd -> BusinessName}}</td>
                                <td>{{ $bd -> BusinessType}}</td>
                                <td>{{ $bd -> BusinessOwnerName}}</td>
                                <td>{{ $bd -> BusinessAddress}}</td>
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
              <script type="text/javascript">
                $(document).ready(function(){
                  $('#example1').DataTable();
                });
              </script>





      </section>
      <!-- /.content -->
@stop