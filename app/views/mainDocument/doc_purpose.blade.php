@extends('layouts.master')

@section('content')
      <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Maintenance
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li><a href="#">Document</a></li>
              <li class="active">Document Purpose</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
          <div class="col-md-3">
                <!-- general form elements -->
                  <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Document Purpose</h3>
                    </div><!-- /.box-header -->
                    <!-- form start 
                    <form role="form">-->
                      <div class="box-body">

                        <div class="form-group">
                          <label>Purpose Name*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtPurpose" 
                                 name="txtPurpose"
                                 placeholder="Purpose"
                                 required="required">
                        </div>

                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        <center><button type="submit" 
                                        class="btn btn-success btn-flat"
                                        id = "btnSubmit">Submit</button></center>
                      </div>
                    
                  </div><!-- </form>/.box -->
              </div>

              



              <div class="col-md-9">
                <div class="box box-success">
                  <div class="box-header">
                    <h3 class="box-title">Document Purpose Table</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Purpose Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($dPurpose as $dp)
                            <tr>
                              <td>{{ $dp->DocumentPurposeID }}</td>
                              <td>{{ $dp->DocumentPurpose }}</td>
                              <td>
                                <button class="btn btn-xs btn-success btn-flat" 
                                        data-toggle="modal" 
                                        data-target="#edit"
                                        value = "{{$dp -> DocumentPurposeID}}"
                                        onclick = "modalEdit(this)">
                                          <i class="fa fa-pencil"></i>
                                </button>
                                <button class="btn btn-xs btn-danger btn-flat" 
                                        data-toggle="modal" 
                                        data-target="#delete"                                        
                                        value = "{{$dp -> DocumentPurposeID}}"
                                        onclick = "modalDelete(this)">
                                          <i class="fa fa-remove"></i>
                                </button></td>

                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


          <div class="modal fade" id="edit">
            <div class="modal-dialog">
          
              <form class="form-horizontal" >
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Document Purpose</h4>
                  </div>
                <!-- modal content -->
                  <div class="modal-body">
                
                      <div class="box-body">
                        <div class="form-group">
                          <label  class="col-sm-2 control-label">ID:</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id = "etxt1" name = "etxt1" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-2 control-label">Document Purpose:</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id = "etxt2" name = "etxt2" >
                          </div>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id = "btnUpdate" data-dismiss="modal">Save Changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </form>
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->


          <div class="modal fade" id="delete">
            <div class="modal-dialog">
          
              <div class="form-horizontal" >
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Are you sure you want to DELETE this DOCUMENT PURPOSE ?</h4>
                  </div>
                <!-- modal content -->
                  <div class="modal-body">
                
                      <div class="box-body">
                        <div class="form-group">
                          <label  class="col-sm-2 control-label">ID:</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id = "dtxt1" name = "dtxt1" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-2 control-label">Document Purpose:</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id = "dtxt2" name = "dtxt2" readonly>
                          </div>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" id = "btnDelete" data-dismiss="modal">Delete</button>
                  </div>
                </div><!-- /.modal-content -->
              </div>
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->


          <script src="{{ asset ('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

          <script type="text/javascript">
            $(document).ready(function(){
              var tbl = $('#example1').DataTable();

              $('#btnSubmit').click(function(){
                var tp = $('#txtPurpose').val();

                $.ajax({
                  type: 'POST',
                  url: 'addDocumentPurpose',
                  data: {tp: tp},
                  dataType: 'JSON',
                  success: function(data){
                    tbl.clear().draw();
                    $.each(data.purpose, function(key, val){
                      tbl.row.add([
                        val.DocumentPurposeID,
                        val.DocumentPurpose,
                        '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" value = "'+ val.DocumentPurposeID +'" onclick = "modalEdit(this)"> <i class="fa fa-pencil"></i> </button> ' +
                                '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" value = "'+ val.DocumentPurposeID +'" onclick = "modalDelete(this)"> <i class="fa fa-remove"></i> </button>'
                      ]).draw(false);
                    });

                  }
                });
                $('#txtPurpose').val('');
              });

              $('#btnUpdate').click(function(){
                var etxt1 = $('#etxt1').val();
                var etxt2 = $('#etxt2').val();

                $.ajax({
                  type: 'POST',
                  url: 'updateDocumentPurpose',
                  data: {etxt1: etxt1,
                          etxt2: etxt2},
                  dataType: 'JSON',
                  success: function(data){
                    tbl.clear().draw();
                    $.each(data.purpose, function(key, val){
                      tbl.row.add([
                        val.DocumentPurposeID,
                        val.DocumentPurpose,
                        '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" value = "'+ val.DocumentPurposeID +'" onclick = "modalEdit(this)"> <i class="fa fa-pencil"></i> </button> ' +
                                '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" value = "'+ val.DocumentPurposeID +'" onclick = "modalDelete(this)"> <i class="fa fa-remove"></i> </button>'
                      ]).draw(false);
                    });
                  }
                });

              });

              $('#btnDelete').click(function(){
                var dtxt1 = $('#dtxt1').val();

                $.ajax({
                  type: 'POST',
                  url: 'deleteDocumentPurpose',
                  data: {dtxt1: dtxt1},
                  dataType: 'JSON',
                  success: function(data){
                    tbl.clear().draw();
                    $.each(data.purpose, function(key, val){
                      tbl.row.add([
                        val.DocumentPurposeID,
                        val.DocumentPurpose,
                        '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" value = "'+ val.DocumentPurposeID +'" onclick = "modalEdit(this)"> <i class="fa fa-pencil"></i> </button> ' +
                                '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" value = "'+ val.DocumentPurposeID +'" onclick = "modalDelete(this)"> <i class="fa fa-remove"></i> </button>'
                      ]).draw(false);
                    });
                  }
                });

              });


            });
          </script>

          <script type="text/javascript">
            function modalEdit(x){
              $.ajax({
                type: 'POST',
                url: 'getDocumentPurpose',
                data: {id: x.value},
                dataType: 'JSON',
                success: function(data){
                  $.each(data.purpose, function(key, val){
                    $('#etxt1').val(val.DocumentPurposeID);
                    $('#etxt2').val(val.DocumentPurpose);

                  });
                }
              });
            }

            function modalDelete(x){
              $.ajax({
                type: 'POST',
                url: 'getDocumentPurpose',
                data: {id: x.value},
                dataType: 'JSON',
                success: function(data){
                  $.each(data.purpose, function(key, val){
                    $('#dtxt1').val(val.DocumentPurposeID);
                    $('#dtxt2').val(val.DocumentPurpose);

                  });
                }
              });
            }
          </script>


      </section>
      <!-- /.content -->
@stop