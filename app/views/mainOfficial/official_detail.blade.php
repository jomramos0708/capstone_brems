@extends('layouts.master')

@section('content')
      <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Maintenance
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li><a href="#">Official</a></li>
              <li class="active">Official Details</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
            <div class="col-md-3">
                <!-- general form elements -->
                  <div class="box box-warning">
                    <div class="box-header with-border">
                      <h3 class="box-title">Official Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" onsubmit = "return false ">
                      <div class="box-body">


                        <div class="form-group" >
                          <br />
                          <img class="img img-thumbnail"  
                              id="uploadPreview1" 
                              src="" />
                          <!--><p class="help-block">Picture of Official (from resident maint)</p><!-->
                        </div>
                      

                        <div class="form-group">
                          <label for="exampleInputEmail1">Last Name*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtLName" 
                                 name="txtLName" 
                                 placeholder="Last Name"
                                 required="required">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">First Name*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtFName" 
                                 name="txtFName" 
                                 placeholder="Given Name"
                                 required="required">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Middle Name</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtMName" 
                                 name="txtMName" 
                                 placeholder="Middle Name"
                                 >
                        </div>

                        <div class="form-group">
                          <label>Position</label>
                          <select class="form-control"
                                  id = "txtPosition"
                                  name = "txtPosition">
                                  @foreach($oPosition as $op)
                                      <option value = "{{ $op -> OfficialPositionID}}"> {{ $op -> OfficialPosition}}</option>
                                  @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Start of Term</label>
                          <input type="date" 
                                 class="form-control" 
                                 id="txtStart" 
                                 name="txtStart" 
                                 >
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">End of Term</label>
                          <input type="date" 
                                 class="form-control" 
                                 id="txtEnd" 
                                 name="txtEnd" 
                                 >
                        </div>

                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        <center><button type="submit" class="btn btn-warning btn-flat" id = "btnSubmit">Submit</button></center>
                      </div>
                    </form>
                  </div><!-- /.box -->
              </div>

              <div class="col-md-9">
                <div class="box box-warning">
                  <div class="box-header">
                    <h3 class="box-title">Official Details Table</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Official Name</th>
                          <th>Position</th>
                          <th>Start of Term</th>
                          <th>End of Term</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($oDetails as $od)
                          <tr>
                            <td>{{ $od -> OfficialID }}</td>
                            <td>{{ $od -> OfficialLName }}, {{ $od -> OfficialFName }} {{ $od -> OfficialMName }}</td>
                            <td>{{ $od -> OfficialPosition }}</td>
                            <td>{{ $od -> OfficialTermStart }}</td>
                            <td>{{ $od -> OfficialTermEnd }}</td>
                            <td><button class="btn btn-xs btn-success btn-flat" 
                                        data-toggle="modal" 
                                        data-target="#edit"
                                        value = "{{$od -> OfficialID}}"
                                        onclick = "modalEdit(this)">
                                          <i class="fa fa-pencil"></i>
                                </button>
                                <button class="btn btn-xs btn-danger btn-flat" 
                                        data-toggle="modal" 
                                        data-target="#delete"                                        
                                        value = "{{$od -> OfficialID}}"
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
                    <h4 class="modal-title">Edit Official Position</h4>
                  </div>
                <!-- modal content -->
                  <div class="modal-body">
                      <div class="box-body">

                        <div class="form-group">
                          <label  class="col-sm-3 control-label">ID:</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id = "etxtID" name = "etxtID" readonly>
                          </div>
                        </div>


                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Last Name:</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id = "etxtLName" name = "etxtLName" >
                          </div>
                        </div>


                        <div class="form-group">
                          <label  class="col-sm-3 control-label">First Name:</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id = "etxtFName" name = "etxtFName" >
                          </div>
                        </div>


                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Middle Name:</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id = "etxtMName" name = "etxtMName" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Position:</label>

                          <div class="col-sm-9">
                            <select class="form-control"
                                  id = "etxtPosition"
                                  name = "etxtPosition">
                                  @foreach($oPosition as $op)
                                      <option value = "{{ $op -> OfficialPositionID}}"> {{ $op -> OfficialPosition}}</option>
                                  @endforeach
                          </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Start of Term:</label>

                          <div class="col-sm-9">
                            <input type="date" class="form-control" id = "etxtStart" name = "etxtStart" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-sm-3 control-label">End of Term:</label>

                          <div class="col-sm-9">
                            <input type="date" class="form-control" id = "etxtEnd" name = "etxtEnd" >
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
          
              <form class="form-horizontal" >
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Are you sure you want to DELETE this OFFICIAL DETAILS ?</h4>
                  </div>
                <!-- modal content -->
                  <div class="modal-body">
                      <div class="box-body">

                        <div class="form-group">
                          <label  class="col-sm-3 control-label">ID:</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id = "dtxtID" name = "dtxtID" readonly>
                          </div>
                        </div>


                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Last Name:</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id = "dtxtLName" name = "dtxtLName" readonly>
                          </div>
                        </div>


                        <div class="form-group">
                          <label  class="col-sm-3 control-label">First Name:</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id = "dtxtFName" name = "dtxtFName" readonly>
                          </div>
                        </div>


                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Middle Name:</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id = "dtxtMName" name = "dtxtMName" readonly>
                          </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Position:</label>

                          <div class="col-sm-9">
                            <input type="text"
                                  class="form-control"
                                  id = "dtxtPosition"
                                  name = "dtxtPosition"
                                  readonly>
                          </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Start of Term:</label>

                          <div class="col-sm-9">
                            <input type="date" class="form-control" id = "dtxtStart" name = "dtxtStart" readonly>
                          </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-sm-3 control-label">End of Term:</label>

                          <div class="col-sm-9">
                            <input type="date" class="form-control" id = "dtxtEnd" name = "dtxtEnd" readonly>
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
              </form>
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->




          <script type="text/javascript" src="{{ asset ('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

          <script type="text/javascript">
            $(document).ready(function(){

              var tbl = $('#example1').DataTable();

              $('#btnSubmit').click(function(){
                var txtLName = $('#txtLName').val();
                var txtFName = $('#txtFName').val();
                var txtMName = $('#txtMName').val();
                var txtPosition = $('#txtPosition').val();
                var txtStart = $('#txtStart').val();
                var txtEnd = $('#txtEnd').val();

                $.ajax({
                  type: 'POST',
                  url: 'addOfficialDetails',
                  data: {txtLName: txtLName,
                          txtFName: txtFName,
                          txtMName: txtMName,
                          txtPosition: txtPosition,
                          txtStart: txtStart,
                          txtEnd: txtEnd},
                  dataType: 'JSON',
                  success: function(data){
                    tbl.clear().draw();
                    $.each(data.oDetails, function(key, val){
                      tbl.row.add([
                        val.OfficialID,
                        val.OfficialLName + ', ' + val.OfficialFName + ' ' + val.OfficialMName,
                        val.OfficialPosition,
                        val.OfficialTermStart,
                        val.OfficialTermEnd,
                        '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" value = "'+ val.OfficialID +'" onclick = "modalEdit(this)"> <i class="fa fa-pencil"></i> </button> ' +
                                '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" value = "'+ val.OfficialID +'" onclick = "modalDelete(this)"> <i class="fa fa-remove"></i> </button>'
                      ]).draw(false);
                    });
                  }
                });
              });

              $('#btnUpdate').click(function(){
                var etxtID = $('#etxtID').val();
                var etxtLName = $('#etxtLName').val();
                var etxtFName = $('#etxtFName').val();
                var etxtMName = $('#etxtMName').val();
                var etxtPosition = $('#etxtPosition').val();
                var etxtStart = $('#etxtStart').val();
                var etxtEnd = $('#etxtEnd').val();

                $.ajax({
                  type: 'POST',
                  url: 'updateOfficialDetails',
                  data: { etxtID: etxtID,
                          etxtLName: etxtLName,
                          etxtFName: etxtFName,
                          etxtMName: etxtMName,
                          etxtPosition: etxtPosition,
                          etxtStart: etxtStart,
                          etxtEnd: etxtEnd},
                  dataType: 'JSON',
                  success: function(data){
                    tbl.clear().draw();
                    $.each(data.oDetails, function(key, val){
                      tbl.row.add([
                        val.OfficialID,
                        val.OfficialLName + ', ' + val.OfficialFName + ' ' + val.OfficialMName,
                        val.OfficialPosition,
                        val.OfficialTermStart,
                        val.OfficialTermEnd,
                        '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" value = "'+ val.OfficialID +'" onclick = "modalEdit(this)"> <i class="fa fa-pencil"></i> </button> ' +
                                '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" value = "'+ val.OfficialID +'" onclick = "modalDelete(this)"> <i class="fa fa-remove"></i> </button>'
                      ]).draw(false);
                    });
                  }
                });
              });

              $('#btnDelete').click(function(){
                var dtxtID = $('#dtxtID').val();

                $.ajax({
                  type: 'POST',
                  url: 'deleteOfficialDetails',
                  data: { dtxtID: dtxtID },
                  dataType: 'JSON',
                  success: function(data){
                    tbl.clear().draw();
                    $.each(data.oDetails, function(key, val){
                      tbl.row.add([
                        val.OfficialID,
                        val.OfficialLName + ', ' + val.OfficialFName + ' ' + val.OfficialMName,
                        val.OfficialPosition,
                        val.OfficialTermStart,
                        val.OfficialTermEnd,
                        '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" value = "'+ val.OfficialID +'" onclick = "modalEdit(this)"> <i class="fa fa-pencil"></i> </button> ' +
                                '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" value = "'+ val.OfficialID +'" onclick = "modalDelete(this)"> <i class="fa fa-remove"></i> </button>'
                      ]).draw(false);
                    });
                  }
                });
              });
            });
          </script>

          <script type="text/javascript">
            function modalEdit(x)
            {
              $.ajax({
                type: 'POST',
                url: 'getOfficialDetails',
                data: {id: x.value},
                dataType: 'JSON',
                success: function(data){
                  $.each(data.oDetails, function(key, val){
                    $('#etxtID').val(val.OfficialID);
                    $('#etxtLName').val(val.OfficialLName);
                    $('#etxtFName').val(val.OfficialFName);
                    $('#etxtMName').val(val.OfficialMName);
                    $('#etxtPosition').val(val.OfficialPositionID);
                    $('#etxtStart').val(val.OfficialTermStart);
                    $('#etxtEnd').val(val.OfficialTermEnd);
                  });
                }
              });
            }

            function modalDelete(x)
            {
              $.ajax({
                type: 'POST',
                url: 'getOfficialDetails',
                data: {id: x.value},
                dataType: 'JSON',
                success: function(data){
                  $.each(data.oDetails, function(key, val){
                    $('#dtxtID').val(val.OfficialID);
                    $('#dtxtLName').val(val.OfficialLName);
                    $('#dtxtFName').val(val.OfficialFName);
                    $('#dtxtMName').val(val.OfficialMName);
                    $('#dtxtPosition').val(val.OfficialPosition);
                    $('#dtxtStart').val(val.OfficialTermStart);
                    $('#dtxtEnd').val(val.OfficialTermEnd);
                  });
                }
              });
            }
          </script>

              
      </section>
      <!-- /.content -->
@stop