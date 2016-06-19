@extends('layouts.master')

@section('content')
      <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Transaction
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Transaction</a></li>
              <li class="active">Menu</li>
            </ol>
          </section>

      <!-- Main content -->
      <section class="content">
              <div class="row">

              <div class="col-md-3">
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-file"></i>&nbsp;&nbsp;Document</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <ul class="nav nav-stacked">
                      <li><a href="<?php echo 'documentRequest' ?>"><span class="label label-info"><i class="fa fa-envelope"></i></span>&nbsp; &nbsp; Regular Documents </a></li>
                      <li><a href="<?php echo 'documentBusiness' ?>"><span class="label label-info"><i class="fa fa-envelope-o"></i></span>&nbsp; &nbsp; Business Documents </a></li>
                    <ul>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->


              <div class="col-md-3">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-soccer-ball-o"></i>&nbsp;&nbsp;Item</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <ul class="nav nav-stacked">
                      <li><a href="<?php echo 'itemRequest'?>"><span class="label label-success"><i class="fa fa-chevron-circle-up"></i></span>&nbsp; &nbsp; Request Items </a></li>
                      <li><a href="<?php echo 'returnItems'?>"><span class="label label-success"><i class="fa fa-chevron-circle-down "></i></span>&nbsp; &nbsp; Return Items </a></li>

                      <li><a href="<?php echo 'itemInventory'?>"><span class="label label-success"><i class="fa fa-shopping-cart "></i></span>&nbsp; &nbsp; Item Inventory </a></li>
                    <ul>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->



              <div class="col-md-3">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-bank"></i>&nbsp;&nbsp;Facility</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <ul class="nav nav-stacked">
                      <li><a href="<?php echo 'facilityRequest'?>"><span class="label label-danger"><i class="fa  fa-calendar-check-o"></i></span>&nbsp; &nbsp; Reserve Facility </a></li>
                    <ul>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->

              <div class="col-md-3">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-birthday-cake"></i>&nbsp;&nbsp;Event</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <ul class="nav nav-stacked">
                      <li><a href="#"><span class="label label-primary"><i class="fa  fa-calendar-plus-o"></i></span>&nbsp; &nbsp; Schedule Event </a></li>
                      <li><a href="#"><span class="label label-primary"><i class="fa fa-info"></i></span>&nbsp; &nbsp; Event Profile </a></li>
                    <ul>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->

             

          </div><!--row -->

          
      </section>
      <!-- /.content -->
@stop