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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>No.Telephone</th>
                          <th>Alamat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>001</td>
                          <td>Mohammad Isa</td>
                          <td>Isa@gmail.com</td>
                          <td>123</td>
                          <td>02192928282</td>
                          <td>Jl. Rindang No 14</td>
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
