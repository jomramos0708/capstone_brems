@extends('layouts.master')

@section('content')
      <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Officials Schedule
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li><a href="#">Official</a></li>
              <li class="active">Official Schedule</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
                    <div class="col-md-3">
        
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">View by</h3>
              <div class="box-tools">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="{{URL::to('officialSchedule')}}" id = "off"><i class="fa fa-inbox"></i> Officials</a></li>
                <li class="active"><a href="#" id = "day"><i class="fa fa-download"></i> Days</a></li>
                
                
              </ul>
            </div><!-- /.box-body -->
          </div><!-- /. box -->


          <div class="box box-solid" id = "two">
            <div class="box-header with-border">
              <h3 class="box-title">Officials</h3>
              <div class="box-tools">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body ">
              <form>
                <div class="form-group">
                  <label>Select Official</label>
                  <select class = "form-control"
                          id = "officialName">
                    <option selected>ALL</option>
                    @foreach($oDetails as $od)
                      <option value = "{{$od->OfficialID}}">{{$od -> OfficialLName}}, {{$od -> OfficialFName}}</option>
                    @endforeach
                  </select>
                </div>
              </form>
            </div><!-- /.box-body -->
          </div><!-- /. box -->

      <!--    <div class="box box-solid" id = "three">
            <div class="box-header with-border">
              <h3 class="box-title">Official Position</h3>
              <div class="box-tools">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"> All</a></li>
                @foreach ($oPosition as $op)
                  <li><a href ="#">{{$op->OfficialPosition}}</a></li>
                @endforeach
              </ul>
            </div>
          </div> /. box -->
        
      </div>


      <div class="col-md-9">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Expandable</h3>
            
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">

              <thead>
                <tr>
                  
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <!--<tr hidden><td><table id = "example2"></table></td></tr>-->
                @foreach($oDetails as $od)
                
                  <tr>
                    
                    <td>
                      <div class="">
                        <div class="box-header with-border">


                          <label>{{$od -> OfficialID}} {{$od -> OfficialPosition}} - </label>




                          <h3 class="box-title"> {{$od -> OfficialFName}} {{$od -> OfficialLName}} </h3>
                          
                          <!-- /.box-tools -->
                          </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <button class="btn btn-md btn-success btn-flat pull-right" 
                                    data-toggle="modal" 
                                    data-target="#update"
                                    value = "{{$od -> OfficialID}}"
                                    onclick = "modalUpdate(this)">
                                      Update Schedule
                          </button>
                          <table class="table table-bordered table-striped">

                            <thead>
                              <tr>
                                <th>Day</th>
                                <th>Start</th>
                                <th>End</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($oSched as $os)
                                @if($od->OfficialID == $os->OfficialID)
                                  <tr>
                                    <td>{{ $os -> DayName }}</td>
                                    <td>{{ $os -> TimeStart }}</td>
                                    <td>{{ $os -> TimeEnd }}</td>
                                  </tr>
                                @endif
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- /.box-body -->
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>





      <div class="modal fade" id="update">
            <div class="modal-dialog" >
          
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
                          <label  class="col-sm-2 control-label">Official ID:</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id = "etxt1" name = "etxt1" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-2 control-label">Name:</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id = "etxt2" name = "etxt2" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-2 control-label">Position:</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id = "etxt3" name = "etxt3" readonly>
                          </div>
                        </div>
                        <div class = "form-group">
                          <div class = "col-sm-12">
                            <table class="table table-bordered table-striped" id = "sched">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>Days</th>
                                  <th>Start</th>
                                  <th>End</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                                    <tr>
                                      <td align="middle"><input type = "checkbox"></td>
                                      <td>Monday</td>
                                      <td>gsdfg</td>
                                      <td>gsdfg</td>
                                    </tr>
                                  
                                    
                              </tbody>
                            </table>
                          </div>
                        </div>

                        
                      </div>
                      <!-- /.box-body -->
                    
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id = "btnUpdate" data-dismiss="modal" >Save Changes</button>
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
        $('#example1').DataTable();
      

        $('#officialName').change(function(){
          var oName = $('#officialName').val();
          
            $.ajax({
              type: 'POST',
              url: 'perOfficial',
              data: {oName: oName},
              dataType: 'JSON',
              success: function(data){
                $('#example1').DataTable().clear().draw();
              $.each(data.oDetails, function(key1, val1){
                $('#example1').DataTable().row.add([
                  '<div class="">'+
                    '<div class="box-header with-border">'+


                      '<label>'+val1.OfficialID+ ' ' +val1.OfficialPosition + ' - ' +'</label>'+



                      '<h3 class="box-title">'+ val1.OfficialFName +' '+val1.OfficialLName +'</h3>'+
                      
                      
                      '</div>'+
                    '<div class="box-body">'+
                      '<button class="btn btn-md btn-success btn-flat pull-right" data-toggle="modal" data-target="#update"value = "'+val1.OfficialID+'"onclick = "modalUpdate(this)">Update Schedule</button>'+
                      '<table class="table table-bordered table-striped">'+

                        '<thead>'+
                          '<tr>'+
                            '<th>Day</th>'+
                            '<th>Start</th>'+
                            '<th>End</th>'+
                          '</tr>'+
                        '</thead>'+
                        '<tbody id="lol'+val1.OfficialID+'">'+


                        
                          
                        '</tbody>'+
                      '</table>'+
                    '</div>'+
                   
                  '</div>'
                ]).draw(false);

                $.each(data.oSched, function(key, val){
                  if(val1.OfficialID == val.OfficialID) 
                    $('#lol'+val1.OfficialID).append('<tr><td>'+val.DayName+'</td><td>'+val.TimeStart+'</td><td>'+val.TimeEnd+'</td></tr>');

                });
              });
              }
            });
          
        });
        
        $('#btnUpdate').click(function(){
          var id = $('#etxt1').val();

          //alert(id);

          var id1 = $('#1').val();
          var id2 = $('#2').val();
          var id3 = $('#3').val();
          var id4 = $('#4').val();
          var id5 = $('#5').val();
          var id6 = $('#6').val();
          var id7 = $('#7').val();

          //alert(id2);

          var ts1 = $('#ts_1').val();
          var ts2 = $('#ts_2').val();
          var ts3 = $('#ts_3').val();
          var ts4 = $('#ts_4').val();
          var ts5 = $('#ts_5').val();
          var ts6 = $('#ts_6').val();
          var ts7 = $('#ts_7').val();
          
          //alert(ts2);

          var te1 = $('#te_1').val();
          var te2 = $('#te_2').val();
          var te3 = $('#te_3').val();
          var te4 = $('#te_4').val();
          var te5 = $('#te_5').val();
          var te6 = $('#te_6').val();
          var te7 = $('#te_7').val();

          //alert(te2);

          $.ajax({
            type: 'POST',
            url: 'updateSched',
            data: {
              id : id,
              
              id1 : id1, id2 : id2,
              id3 : id3, id4 : id4,
              id5 : id5, id6 : id6,
              id7 : id7,


              ts1 : ts1, ts2 : ts2,
              ts3 : ts3, ts4 : ts4,
              ts5 : ts5, ts6 : ts6,
              ts7 : ts7,


              te1 : te1, te2 : te2,
              te3 : te3, te4 : te4,
              te5 : te5, te6 : te6,
              te7 : te7
            },
            dataType: 'JSON',
            success: function(data){
              //$('#example1 tbody tbody tr').remove();
              $('#example1').DataTable().clear().draw();
              $.each(data.oDetails, function(key1, val1){
                $('#example1').DataTable().row.add([
                          '<div class="">'+
                                  '<div class="box-header with-border">'+


                                    '<label hidden>'+val1.OfficialID+'</label>'+



                                    '<h3 class="box-title">'+ val1.OfficialFName +' '+val1.OfficialLName +'</h3>'+
                                    
                                    
                                    '</div>'+
                                  '<div class="box-body">'+
                                    '<button class="btn btn-md btn-success btn-flat pull-right" data-toggle="modal" data-target="#update"value = "'+val1.OfficialID+'"onclick = "modalUpdate(this)">Update Schedule</button>'+
                                    '<table class="table table-bordered table-striped">'+

                                      '<thead>'+
                                        '<tr>'+
                                          '<th>Day</th>'+
                                          '<th>Start</th>'+
                                          '<th>End</th>'+
                                        '</tr>'+
                                      '</thead>'+
                                      '<tbody id="lol'+val1.OfficialID+'">'+


                                      
                                        
                                      '</tbody>'+
                                    '</table>'+
                                  '</div>'+
                                 
                                '</div>'
                                ]).draw(false);

                $.each(data.oSched, function(key, val){
                  if(val1.OfficialID == val.OfficialID) 
                    $('#lol'+val1.OfficialID).append('<tr><td>'+val.DayName+'</td><td>'+val.TimeStart+'</td><td>'+val.TimeEnd+'</td></tr>');

                });
              });
              
            }
          });
          
          
        });
        

      });

      function modalUpdate(x)
      {
        $.ajax({
          type: 'POST',
          url: 'getSched',
          data: {id: x.value},
          dataType: 'JSON',
          success: function(data){
            $.each(data.oDetails, function(key, val){
              $('#etxt1').val(val.OfficialID);
              $('#etxt2').val(val.OfficialFName);
              $('#etxt3').val(val.OfficialPosition);


            });

            $('#sched tbody tr').remove();
            $.each(data.oSched, function(key, val){
              if(val.TimeStart == null && val.TimeEnd == null)
              {
                $('#sched').append(
                  '<tr><td align="middle">'+
                    '<input type = "checkbox" value = "'+ val.DayID +'"onclick = "checkSched(this)" id = "'+val.DayID+'">'
                  +'</td><td>'+
                    val.DayName
                  +'</td><td>'+
                    '<input type = "time" value = "" id = "ts_'+val.DayID+'" disabled>'
                  +'</td><td>'+
                    '<input type = "time" value = "" id = "te_'+val.DayID+'" disabled>'
                  +'</td></tr>')
              }
              else if(val.TimeStart != null && val.TimeEnd != null)
              {
                $('#sched').append(
                  '<tr><td align="middle">'+
                    '<input type = "checkbox" value = "'+ val.DayID +'"onclick = "checkSched(this)" id = "'+val.DayID+'" checked>'
                  +'</td><td>'+
                    val.DayName
                  +'</td><td>'+
                    '<input type = "time" value = "'+val.TimeStart+'" id = "ts_'+val.DayID+'">'
                  +'</td><td>'+
                    '<input type = "time" value = "'+val.TimeEnd+'" id = "te_'+val.DayID+'">'
                  +'</td></tr>')
              }
              
            });
            

          }
        });
      }

      function checkSched(x)
      {
        var ts = "ts_"+x.value;
        var te = "te_"+x.value;

        //if($('#' + x.value).is(":checked"))
        //  alert('lalala');

        if(document.getElementById(x.value).checked)
        {
          document.getElementById(ts).removeAttribute("disabled");
          document.getElementById(te).removeAttribute("disabled");

          document.getElementById(ts).value = "00:00:00";
          document.getElementById(te).value = "00:00:00";
        }
        else
        {
          document.getElementById(ts).setAttributeNode(document.createAttribute("disabled"));
          document.getElementById(te).setAttributeNode(document.createAttribute("disabled"));

          document.getElementById(ts).value = "";
          document.getElementById(te).value = "";
        }

      }

    </script>
      </section>
      <!-- /.content -->
@stop