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
              <li class="active">Facility Schedule</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
            <div class="col-md-4">
                <!-- general form elements -->
                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Facility Schedule</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">

                      <div class="box-body">

                        <div class="form-group">
                          <label>Facility Name</label>
                          <select class="form-control">
                            <option></option>
                          </select>
                        </div>

                        <label>Facility Schedule</label> 

                          <div class="input_fields_wrap">
                            <table  style="border-spacing: 10px;border-collapse: separate;font-size: 12px">
                              <tbody>
                                <tr>
                                  <div class="checkbox">
                                    <td><label>
                                      <input type="checkbox"
                                             id=chkMon[]
                                             name=chkMon[]>
                                      Monday
                                    </label>

                                    <label>
                                      <input type="checkbox"
                                              id=chkTue[]
                                             name=chkTue[]>
                                      Tuesday
                                    </label></td>

                                    <td><label>
                                      <input type="checkbox"
                                              id=chkWed[]
                                             name=chkWed[]>
                                      Wednesday
                                    </label>

                                    <label>
                                      <input type="checkbox"
                                              id=chkThur[]
                                             name=chkThur[]>
                                      Thursday
                                    </label></td>

                                    <td><label>
                                      <input type="checkbox"
                                              id=chkFri[]
                                             name=chkFri[]>
                                      Friday
                                    </label>

                                    <label>
                                      <input type="checkbox"
                                              id=chkSat[]
                                             name=chkSat[]>
                                      Saturday
                                    </label></td>

                                    <td><label>
                                      <input type="checkbox"
                                              id=chkSun[]
                                             name=chkSun[]>
                                      Sunday
                                    </label></td>
                                  </div>
                                </tr>
                              </tbody>
                            </table>

                            <table  style="border-spacing: 10px;border-collapse: separate;font-size: 12px">
                              <tbody  style="text-align: left">
                                  <tr>
                                    <td><label>From*</label></td>
                                    <td><input type="time" 
                                           class="form-control" 
                                           id="txtFromTime" 
                                           name="txtFromTime" ></td>
        
                                    <td><label>To*</label></td>
                                    <td><input type="time" 
                                           class="form-control" 
                                           id="txtToTime" 
                                           name="txtToTime"></td>
                                  </tr>
                                </tbody>
                              </table>


                        </div>

                        <center><button  
                                    class="add_field_button btn btn-danger btn-flat" 
                                    name="addSched" 
                                    id="addSched"
                                    onclick="disable()"
                                    >
                                    <span class="glyphicon glyphicon-plus"></span>
                        </button></center>


                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        <center><button type="submit" class="btn btn-info btn-flat">Submit</button></center>
                      </div>
                    </form>
                  </div><!-- /.box -->
              </div>

              <div class="col-md-8">
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">Facility Schedule Table</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Facility Name</th>
                          <th>Day</th>
                          <th>Opening Time</th>
                          <th>Closing Time</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </section>
      <!-- /.content -->
@stop