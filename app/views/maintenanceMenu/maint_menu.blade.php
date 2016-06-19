@extends('layouts.master')

@section('content')

		<section class="content-header">
            <h1>
              Maintenance
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
              <li class="active">Menu</li>
            </ol>
          </section>

        <section class="content">
        	<div class="row">

              <div class="col-md-3">
                <div class="box box-warning">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-user"></i>&nbsp;&nbsp;Official</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <ul class="nav nav-stacked">
                      <li><a href="<?php echo 'officialPosition' ?>"><span class="label label-warning"><i class="fa fa-shield"></i></span>&nbsp; &nbsp; Position </a></li>
                      <li><a href="<?php echo 'officialDetails' ?>"><span class="label label-warning"><i class="fa fa-exclamation-circle"></i></span>&nbsp; &nbsp; Official Details </a></li>
                      <li><a href="<?php echo 'officialSchedule' ?>"><span class="label label-warning"><i class="fa fa-calendar-o"></i></span>&nbsp; &nbsp; Official Schedule </a></li>
                    <ul>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->


              <div class="col-md-3">
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-users"></i>&nbsp;&nbsp;Resident</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <ul class="nav nav-stacked">
                      <li><a href="<?php echo '#' ?>">Resident </a></li>
                      <li><a href="<?php echo '#' ?>">Household </a></li>
                      <li><a href="<?php echo '#' ?>">Family </a></li>
                    <ul>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->


              <div class="col-md-3">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-folder"></i>&nbsp;&nbsp;Document</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <ul class="nav nav-stacked">
                      <li><a href="<?php echo 'documentDetails' ?>"><span class="label label-success"><i class="fa fa-info"></i></span>&nbsp; &nbsp; Document Details </a></li>
                      <li><a href="<?php echo 'documentPurpose' ?>"><span class="label label-success"><i class="fa fa-question "></i></span>&nbsp; &nbsp; Document Purpose </a></li>
                    <ul>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->

              <div class="col-md-3">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-money"></i>&nbsp;&nbsp;Business</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <ul class="nav nav-stacked">
                      <li><a href="<?php echo 'businessType' ?>"><span class="label label-primary"><i class="fa fa-truck"></i></span>&nbsp; &nbsp; Business Type </a></li>
                      <li><a href="<?php echo 'businessDetails' ?>"><span class="label label-primary"><i class="fa fa-building"></i></span>&nbsp; &nbsp; Business Details </a></li>
                    <ul>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->

             

	          </div><!--row -->
	          
	          <div class="row">


	              <div class="col-md-3">
	                <div class="box box-info">
	                  <div class="box-header with-border">
	                    <h3 class="box-title"><i class="fa fa-bank"></i>&nbsp;&nbsp;Facility</h3>
	                    <div class="box-tools pull-right">
	                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                    </div><!-- /.box-tools -->
	                  </div><!-- /.box-header -->
	                  <div class="box-body">
	                    <ul class="nav nav-stacked">
	                      <li><a href="<?php echo 'facilityDetails' ?>"><span class="label label-info"><i class="fa fa-question-circle"></i></span>&nbsp; &nbsp; Facility Details </a></li>
	                      <li><a href="<?php echo 'facilitySchedule' ?>"><span class="label label-info"><i class="fa fa-calendar-o"></i></span>&nbsp; &nbsp; Facility Schedule </a></li>
	                    <ul>
	                  </div><!-- /.box-body -->
	                </div><!-- /.box -->
	              </div><!-- /.col -->
	              
	              <div class="col-md-3">
	                <div class="box box-primary">
	                  <div class="box-header with-border">
	                    <h3 class="box-title"><i class="fa fa-soccer-ball-o"></i>&nbsp;&nbsp;Item</h3>
	                    <div class="box-tools pull-right">
	                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                    </div><!-- /.box-tools -->
	                  </div><!-- /.box-header -->
	                  <div class="box-body">
	                    <ul class="nav nav-stacked">
	                      <li><a href="<?php echo 'itemType'?>"><span class="label label-primary"><i class="fa fa-flash"></i></span>&nbsp; &nbsp; Item Type </a></li>
	                      <li><a href="<?php echo 'itemDetails'?>"><span class="label label-primary"><i class="fa fa-flash"></i></span>&nbsp; &nbsp; Item Details </a></li>
	                    <ul>
	                  </div><!-- /.box-body -->
	                </div><!-- /.box -->
	              </div><!-- /.col -->



	             <div class="col-md-3">
	                <div class="box box-danger">
	                  <div class="box-header with-border">
	                    <h3 class="box-title"><i class="fa fa-flag"></i>&nbsp;&nbsp;Event</h3>
	                    <div class="box-tools pull-right">
	                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                    </div><!-- /.box-tools -->
	                  </div><!-- /.box-header -->
	                  <div class="box-body">
	                    <ul class="nav nav-stacked">
	                      <li><a href="<?php echo 'eventDetails' ?>"><span class="label label-danger"><i class="fa fa-map"></i></span>&nbsp; &nbsp; Event Details </a></li>
	                    <ul>
	                  </div><!-- /.box-body -->
	                </div><!-- /.box -->
	              </div><!-- /.col -->


	          </div><!--row -->
      	</section>

@stop