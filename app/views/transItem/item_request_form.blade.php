@extends('layouts.master')

@section('content')
      <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Transaction <small>  </small>
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Transaction</a></li>
                 <li class="active"></li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Request Item</h3>
                  <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->

                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                   
                    <div class="col-md-6">
                     <div class="well">
                     <span class="label label-primary"><h7>Requestor Details</h7></span><br><br>
                        
                        <div class="form-group">
                          <label>Type*</label>&nbsp;&nbsp;&nbsp;
                          <label><input type="radio" class="flat-red" checked>Resident</label>&nbsp;&nbsp;&nbsp;
                          <label><input type="radio" class="flat-red">Nonresident</label>  
                        </div>

                        <div class="form-group">
                          <label>Name*</label>
                          <div class="row">
                            
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="#" placeholder="Last Name">
                            </div>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="#" placeholder="Given Name">
                            </div>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="#" placeholder="Middle Name">
                            </div>
                          
                          </div>
                        </div>

                        <div class="form-group">
                          <label>Address*</label>
                          <input type="text" class="form-control" id="#" placeholder="Address">
                        </div>

                        <div class="form-group">
                          <label>Civil Status*</label>
                          <label style="margin-left: 185px">Mobile No*</label>
                          
                          <div class="row">

                            <div class="col-xs-6">
                              <input type="text" class="form-control" id="#" placeholder="Mobile No">
                            </div>

                            <div class="col-xs-6">
                              <!-- Date mm/dd/yyyy -->
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                </div><!-- /.input group -->
                              </div><!-- /.form group -->   
                            </div>

                        </div>
                      </div>

                    
                        <span class="label label-primary"><h7>Request Details</h7></span><br><br>

                        <div class="form-group">
                          <label>Date of Reservation*</label>
                          
                          <div class="row">

                            <div class="col-xs-4">
                              <!-- Date mm/dd/yyyy -->
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                </div><!-- /.input group -->
                              </div><!-- /.form group -->   
                            </div>


                            <div class="col-xs-4">
                              <!-- time Picker -->
                              <div class="bootstrap-timepicker">
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                        From
                                    </div>
                                    <input type="text" class="form-control timepicker">
                                  </div><!-- /.input group -->
                                </div><!-- /.form group -->
                              </div>
                            </div>

                            <div class="col-xs-4">
                              <!-- time Picker -->
                              <div class="bootstrap-timepicker">
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                        To
                                    </div>
                                    <input type="text" class="form-control timepicker">
                                  </div><!-- /.input group -->
                                </div><!-- /.form group -->
                              </div>
                            </div>

                          </div>
                        </div>

                        <div class="form-group">
                          <label>Purpose*</label>
                          <input type="text" class="form-control" id="#" placeholder="Purpose">
                        </div>

                        
                        
                      
                      </div><!--well-->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                     <div class="well">
                      <span class="label label-primary"><h7>Item Details</h7></span><br><br>
                        
                        <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Item</th>
                          <th>Available</th>
                          <th>Quantity</th>

                        </tr>
                      </thead>
                      
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="flat-red" ></td>
                          <td>Plastic Chair</td>
                          <td>100</td>
                          <td>
                          <input type="number" >
                      
                          </td>
                          
                        </tr>

                        <tr>
                          <td><input type="checkbox" class="flat-red" ></td>
                          <td>Plastic Table</td>
                          <td>100</td>
                          <td>
                          <input type="number" >
                      
                          </td>
                          
                        </tr>

                        <tr>
                          <td><input type="checkbox" class="flat-red" ></td>
                          <td>Nebulizer</td>
                          <td>100</td>
                          <td>
                          <input type="number" >
                      
                          </td>
                          
                        </tr>

                        <tr>
                          <td><input type="checkbox" class="flat-red" ></td>
                          <td>Tent</td>
                          <td>100</td>
                          <td>
                          <input type="number" >
                      
                          </td>
                          
                        </tr>

                        <tr>
                          <td><input type="checkbox" class="flat-red" ></td>
                          <td>Basketball (ball)</td>
                          <td>100</td>
                          <td>
                          <input type="number" >
                      
                          </td>
                          
                        </tr>

                        <tr>
                          <td><input type="checkbox" class="flat-red" ></td>
                          <td>Volleyball (ball)</td>
                          <td>100</td>
                          <td>
                          <input type="number" >
                      
                          </td>
                          
                        </tr>

                        <tr>
                          <td><input type="checkbox" class="flat-red" ></td>
                          <td>Badminton Racket</td>
                          <td>100</td>
                          <td>
                          <input type="number" >
                      
                          </td>
                          
                        </tr>

                        <tr>
                          <td><input type="checkbox" class="flat-red" ></td>
                          <td>Tennis Racket</td>
                          <td>100</td>
                          <td>
                          <input type="number" >
                      
                          </td>
                          
                        </tr>

                        <tr>
                          <td><input type="checkbox" class="flat-red" ></td>
                          <td>Table Tennis Racket</td>
                          <td>100</td>
                          <td>
                          <input type="number" >
                      
                          </td>
                          
                        </tr>

                        <tr>
                          <td><input type="checkbox" class="flat-red" ></td>
                          <td>Pingpong</td>
                          <td>100</td>
                          <td>
                          <input type="number" >
                      
                          </td>
                          
                        </tr>





                      </tbody>
                    </table>

                        
                        
                      
                      </div><!--well-->
                    </div><!-- /.col -->

                  </div><!-- /.box-body -->

                  <center><div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                  </div></center>

                </form>
              </div><!-- /.box -->
                
              </div><!-- /.col -->

             

          </div><!--row -->


          
      </section>
      <!-- /.content -->

@stop
