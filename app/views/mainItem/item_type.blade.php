@extends('layouts.master')

@section('content')
      <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Maintenance
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li><a href="#">Item</a></li>
              <li class="active">Item Type</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
          <div class="col-md-3">
                <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Item Type</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">

                        <div class="form-group">
                          <label for="exampleInputEmail1">Item Type*</label>
                          <input type="text" 
                                 class="form-control" 
                                 id="txtItem" 
                                 name="txtItem" 
                                 placeholder="Type"
                                 required="required">
                        </div>

                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        <center><button type="button" 
                                        class="btn btn-primary btn-flat"
                                        id="btnSubmit">Submit</button></center>
                      </div>
                    </form>
                  </div><!-- /.box -->
              </div>

              <div class="col-md-9">
                <div class="box box-primary ">
                  <div class="box-header">
                    <h3 class="box-title">Item Table</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Item Name</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($iType as $it)
                          <tr>
                            <td>{{ $it -> ItemTypeID }}</td>
                            <td>{{ $it -> ItemType }}</td>
                            <td><button class="btn btn-xs btn-success btn-flat" 
                                        data-toggle="modal" 
                                        data-target="#edit"
                                        value = "{{ $it -> ItemTypeID }}"
                                        onclick = "modalEdit(this)">
                                          <i class="fa fa-pencil"></i>
                                </button>
                                <button class="btn btn-xs btn-danger btn-flat"
                                        data-toggle="modal" 
                                        data-target="#delete"
                                        value = "{{ $it -> ItemTypeID }}"
                                        onclick = "modalDelete(this)">
                                          <i class="fa fa-remove"></i>
                                </button>
                            </td>
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
                        <h4 class="modal-title">Edit Item Type</h4>
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
                              <label  class="col-sm-2 control-label">Item Type:</label>

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
              
                  <form class="form-horizontal" >
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Item Type</h4>
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
                              <label  class="col-sm-2 control-label">Item Type:</label>

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
                  </form>
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->



              <script src="{{ asset ('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

              <script type="text/javascript">
                $(document).ready(function(){
                  var tbl = $('#example1').DataTable();
                  $('#btnSubmit').click(function(){
                    var txtIType = $('#txtItem').val();

                    $.ajax({
                      type: 'POST',
                      url: 'addItemType',
                      data: {txtIType: txtIType},
                      dataType: 'JSON',
                      success: function(data){
                        tbl.clear().draw();
                        $.each(data.itemType, function(key, val){
                          tbl.row.add([
                            val.ItemTypeID,
                            val.ItemType,
                            '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" value = "'+val.ItemTypeID+'" onclick = "modalEdit(this)"><i class="fa fa-pencil"></i></button> ' +
                                '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" value = "'+val.ItemTypeID+'" onclick = "modalDelete(this)"> <i class="fa fa-remove"></i> </button>'
                          ]).draw(false);
                        });
                      }
                    });
                    $('txtItem').val('');
                  });

                  $('#btnUpdate').click(function(){

                    var etxt1 = $('#etxt1').val();
                    var etxt2 = $('#etxt2').val();

                    $.ajax({
                      type: 'POST',
                      url: 'updateItemType',
                      data: {etxt1:etxt1,
                              etxt2:etxt2},
                      dataType: 'JSON',
                      success: function(data){
                        tbl.clear().draw();
                        $.each(data.itemType, function(key, val){
                          tbl.row.add([
                            val.ItemTypeID,
                            val.ItemType,
                            '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" value = "'+val.ItemTypeID+'" onclick = "modalEdit(this)"><i class="fa fa-pencil"></i></button> ' +
                                '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" value = "'+val.ItemTypeID+'" onclick = "modalDelete(this)"> <i class="fa fa-remove"></i> </button>'
                          ]).draw(false);
                        });
                      }
                    });
                  });

                  $('#btnDelete').click(function(){

                    var dtxt1 = $('#dtxt1').val();

                    $.ajax({
                      type: 'POST',
                      url: 'deleteItemType',
                      data: {dtxt1:dtxt1},
                      dataType: 'JSON',
                      success: function(data){
                        tbl.clear().draw();
                        $.each(data.itemType, function(key, val){
                          tbl.row.add([
                            val.ItemTypeID,
                            val.ItemType,
                            '<button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#edit" value = "'+val.ItemTypeID+'" onclick = "modalEdit(this)"><i class="fa fa-pencil"></i></button> ' +
                                '<button class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#delete" value = "'+val.ItemTypeID+'" onclick = "modalDelete(this)"> <i class="fa fa-remove"></i> </button>'
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
                    url: 'getItemTypeInfo',
                    data: { id : x.value },
                    dataType: 'JSON',
                    success: function(data){
                      $.each(data.itemType, function(key, val){
                        $('#etxt1').val(val.ItemTypeID);
                        $('#etxt2').val(val.ItemType);

                      });
                    }
                  });
                }

                function modalDelete(x)
                {
                  $.ajax({
                    type: 'POST',
                    url: 'getItemTypeInfo',
                    data: { id : x.value },
                    dataType: 'JSON',
                    success: function(data){
                      $.each(data.itemType, function(key, val){
                        $('#dtxt1').val(val.ItemTypeID);
                        $('#dtxt2').val(val.ItemType);

                      });
                    }
                  });
                }
              </script>
      </section>
      <!-- /.content -->
@stop