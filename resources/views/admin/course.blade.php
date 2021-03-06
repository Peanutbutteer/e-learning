@extends('layouts.appAdmin')

@section('content')

<div class="content-wrapper" ng-app="AdminApp">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User Management
      <small>advanced management</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Course</a></li>
      <li class="active">All Course</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content" ng-controller="CourseListController">
    <div class="row"  ng-repeat="course in course">
      <div class="col-xs-12"  >
        <div class="box box-default">
          <div class="box-header with-border">
            <a href="{{url('/admin/course/')}}/<%course.id%>"><h2 class="box-title"><%course.name%></h2></a>
            <div class="box-tools pull-right">
                  <i class="fa fa-user" ng-click="openUsers(course.id)"></i>
                  <i class="fa fa-fw fa-cog" ng-click="openEditPage(course.id)"></i>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <%course.about%>
            <div class="box-tools pull-right">
              <button ng-click="publish(course)" class="btn btn-success" ng-class="{'btn-warning':course.statusText=='unPublish','btn-success':course.statusText=='Publish'}"><%course.statusText%></button>
            <button class="btn btn-danger" ng-click="deleteCourse(course.id)">
              <i class="material-icons f18 mdl-color-text--red-400">Delete</i>
            </button>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

@endsection

@section('script')
@endsection
