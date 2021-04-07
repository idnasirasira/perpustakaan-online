@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Book Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active">Book Page</li>
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
        <a href="/book/create" class="btn btn-primary">Tambah Buku</a>
        @if (session('status'))
                      <div class="alert alert-success my-3">
                          {{ session('status') }}
                      </div>
                  @endif
            </div>
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
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
                          <th>Code</th>
                          <th>Title</th>
                          <th>Publisher</th>
                          <th>Author</th>
                          <th>Stock</th>
                          <th>Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ( $book as $book )
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $book->code }}</td>
                          <td>{{ $book->title }}</td>
                          <td>{{ $book->publisher }}</td>
                          <td>{{ $book->author }}</td>
                          <td>{{ $book->stock }}</td>
                          <td>{{ $book->price }}</td>
                          <td>
                          <a href="/book/{{ $book->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="/book/{{ $book->id }}" method="post" class="d-inline">
                                  @method('delete')
                                  @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <form action="#" method="post" class="d-inline">
                            <button type="submit" class="btn btn-warning">Pinjam</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
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
