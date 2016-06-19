@extends('layouts.master')

@section('content')


	
		<section class="content-header">
            <h1>
              Document
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Transaction</a></li>
              
              <li class="active">Documents</li>
            </ol>
          </section>

         <section class = "content">

		<div class="row">
              
              <!--left side-->
              <div class="col-md-3">
                <a href="<?php echo 'documentRequestForm' ?>" class="btn btn-info btn-block btn-flat">New Request</a><br>
                
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">Status</h3>
                    <div class="box-tools">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                      <li class="active"><a href="#"><i class="fa fa-inbox"></i> All</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> New<span class="label label-info pull-right">8</span></a></li>
                      <li><a href="#"><i class="fa fa-clock-o"></i> Pending<span class="label label-warning pull-right">5</span></a></li>
                      <li><a href="#"><i class="fa fa-check-square-o"></i> Approved <span class="label label-success pull-right">7</span></a></li>
                      <li><a href="#"><i class="fa fa-exclamation-circle"></i> Done/Unclaimed<span class="label label-danger pull-right">5</span></a></li>
                      <li><a href="#"><i class="fa fa-upload"></i> Released<span class="label label-primary pull-right">10</span></a></li>
                      
                    </ul>
                  </div><!-- /.box-body -->
                </div><!-- /. box -->
                
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">Labels</h3>
                    <div class="box-tools">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Label 1</a></li>
                      <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Label 2</a></li>
                    </ul>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->


              </div><!-- /.col -->

              <!--right side-->
              <div class="col-md-9">
                <div class="box box-info ">
                  <div class="box-header">
                    <h3 class="box-title">All Requests</h3>
                  </div><!-- /.box-header -->
                  
                  <div class="box-body">
                    <table  id="example1" class="table table-bordered table-striped">
                <!--      <table  class="table table-bordered table-striped">-->
                        
                      <thead>
                        <tr>
                          <th>Request No.</th>
                          <th>Requestor</th>
                          <th>Date of Request</th>
                          <th>Documents</th>
                          <th>Status</th>
                          <th>Action</th>


                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Paulo Samson</td>
                          <td>01/01/2016</td>
                          <td>
                            <ul>
                              <li>Barangay Clearance</li>
                              <li>Barangay ID</li>

                            </ul>
                          </td>
                          <td><button type = "button" class = "btn btn-block btn-info btn-xs" disabled> New </button></td>
                          <td><button class="btn btn-xs btn-success btn-flat"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-xs btn-danger btn-flat"><i class="fa fa-remove"></i></button></td>
                        </tr>

                        <tr>
                          <td>2</td>
                          <td>Jomari Ramos</td>
                          <td>07/08/2015</td>
                          <td>
                            <ul>
                              <li>Barangay ID</li>
                            </ul>
                          </td>
                          <td><button type = "button" class = "btn btn-block btn-warning btn-xs" disabled> Pending </button></td>
                          <td><button class="btn btn-xs btn-success btn-flat"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-xs btn-danger btn-flat"><i class="fa fa-remove"></i></button></td>
                        </tr>

                        <tr>
                          <td>3</td>
                          <td>Joyce Bati</td>
                          <td>12/14/2015</td>
                          <td>
                            <ul>
                              <li>Certificate of Indigency</li>

                            </ul>
                          </td>
                          <td><button type = "button" class = "btn btn-block btn-success btn-xs" disabled> Approved </button></td>
                          <td><button class="btn btn-xs btn-success btn-flat"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-xs btn-danger btn-flat"><i class="fa fa-remove"></i></button></td>
                        </tr>

                        <tr>
                          <td>4</td>
                          <td>Stephanie Villaro</td>
                          <td>05/24/2015</td>
                          <td>
                            <ul>
                              <li>Barangay Clearance</li>

                            </ul>
                          </td>
                          <td><a id = "done" href="<?php echo 'summaryDocuments' ?>" class = "btn btn-block btn-danger btn-xs"> Done/Unclaimed </a></td>
                          <td><button class="btn btn-xs btn-success btn-flat"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-xs btn-danger btn-flat"><i class="fa fa-remove"></i></button></td>
                        </tr>

                        <tr>
                          <td>5</td>
                          <td>Jezza Belleza</td>
                          <td>12/25/2015</td>
                          <td>
                            <ul>
                              <li>Barangay Clearance</li>

                            </ul>
                          </td>
                          <td><button type = "button" class = "btn btn-block btn-primary btn-xs" disabled> Released </button></td>
                          <td><button class="btn btn-xs btn-success btn-flat"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-xs btn-danger btn-flat"><i class="fa fa-remove"></i></button></td>
                        </tr>

                        <tr>
                          <td>6</td>
                          <td>Arvin Gresola</td>
                          <td>08/02/2015</td>
                          <td>
                            <ul>
                              <li>Barangay Clearance</li>
                              <li>Barangay ID</li>
                              <li>Certificate of Indigency</li>

                            </ul>
                          </td>
                          <td><button type = "button" class = "btn btn-block btn-primary btn-xs" disabled> Released </button></td>
                          <td><button class="btn btn-xs btn-success btn-flat"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-xs btn-danger btn-flat"><i class="fa fa-remove"></i></button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div><!--row-->



            <script src="{{ asset ('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

            <script type = "text/javascript">
              

            $('#example1').DataTable();
              


            </script>

    </section>



@stop