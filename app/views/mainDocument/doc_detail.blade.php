@extends('layouts.master')

@section('content')
          <section class="content-header">
            <h1>
              Maintenance
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li><a href="#">Document</a></li>
              <li class="active">Document Details</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
          <div class="col-md-3">
                <!-- general form elements -->
                  <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Document Details</h3>
                    </div><!-- /.box-header 
                     form start--> <form role="form"
                          enctype="multipart/form-data" 
                          id = "formform"
                          action = "{{URL::to('addDocumentDetails')}}"
                          onsubmit = "return false">
                    <!--{{Form::open(array('id' => 'formform', 'files' => true, 'url' => '/addDocumentDetails', 'onsubmit' => 'return false'))}}
                      -->
                      <div class="box-body">

                        <div class="form-group">
                          <label>Name*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtDocName" 
                                 name="txtDocName" 
                                 placeholder="Name"
                                 required="required">
                        </div>

                        <div class="form-group">
                          <label>Fee*</label>
                          <input type="number" 
                                 class="form-control" 
                                 id="txtFee"
                                 name="txtFee"
                                 required="required">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputFile">Template*</label>
                          <input type="file" 
                                  id="fileTemplate"
                                  name="fileTemplate"
                                  required="required">
                        </div>

                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        <center><button type="submit" 
                                        class="btn btn-success btn-flat"
                                        id = "btnSubmit">Submit</button></center>
                      </div>
                    </form>
                  </div><!-- {{Form::close()}}/.box -->
              </div>

              <div class="col-md-9">
                <div class="box box-success">
                  <div class="box-header">
                    <h3 class="box-title">Document Details Table</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Fee</th>
                          <th>Template</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($dDetails as $dd)
                          <tr>
                            <td>{{ $dd ->  DocumentID}}</td>
                            <td>{{ $dd ->  DocumentName}}</td>
                            <td>{{ $dd ->  DocumentFee}}</td>
                            <td>{{ $dd ->  DocumentTemplate}}</td>
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
              <script src="{{ asset ('bower_components/admin-lte/plugins/jQueryUI/jQuery-ui.min.js') }}"></script>

              <script type="text/javascript">
                $(document).ready(function(){
                  var tbl = $('#example1').DataTable();

                  $('#formform').on('submit', function(e){
                    alert($('#fileTemplate').val().split('\\').pop());  
                    e.preventDefault();

                    var txtDocName = $('#txtDocName').val();
                    var txtFee = $('#txtFee').val();
                    var fileTemplate = $('#fileTemplate');

                    $.ajax({
                      type: 'POST',
                      url: $(this).attr('action'),
                      data://{ txtDocName: txtDocName,
                              //txtFee: txtFee,
                              //fileTemplate: fileTemplate },
                              new FormData(this),
                      dataType: 'JSON',
                      cache: false,
                      contentType: false,
                      processData: false,
                      success: function(data){
                        alert('kjsdhdjf');
                      },
                      error: function (request, error) {
                        console.log(arguments);
                        alert(" Can't do because: " + error);
                    }
                    }).error(function(ts){
                      alert(ts.responseText);
                    });
                  });

                });
              </script>
              

      </section>
      <!-- /.content -->
@stop