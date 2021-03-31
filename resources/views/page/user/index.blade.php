@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">User Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active">User Page</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-2">
                <button class="btn btn-primary">Add New</button>
            </div>

            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>
    
                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>User</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Reason</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>183</td>
                          <td>John Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-success">Approved</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                          <td>
                            <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            <a href="#" class="btn btn-xs btn-success"><i class="fa fa-pencil-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>219</td>
                          <td>Alexander Pierce</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-warning">Pending</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                          <td>
                            <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            <a href="#" class="btn btn-xs btn-success"><i class="fa fa-pencil-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>657</td>
                          <td>Bob Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-primary">Approved</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                          <td>
                            <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            <a href="#" class="btn btn-xs btn-success"><i class="fa fa-pencil-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                          <td>
                            <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            <a href="#" class="btn btn-xs btn-success"><i class="fa fa-pencil-alt"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
