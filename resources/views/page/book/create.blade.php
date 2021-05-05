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
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        <form method="post" action="{{route('book.store')}}">
    @csrf

        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" 
            placeholder="Masukkan Code" name="code" value="{{ old('code') }}">
        </div>
    
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" 
            placeholder="Masukkan Judul" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="publisher">Penerbit</label>
            <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" 
            placeholder="Masukkan Penerbit" name="publisher" value="{{ old('publisher') }}">
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" 
            placeholder="Masukkan Author" name="author" value="{{ old('author') }}">
        </div>

        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" 
            placeholder="Masukkan stok" name="stok" value="{{ old('stok') }}">
        </div>
        
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" 
            placeholder="Masukkan Harga" name="price" value="{{ old('price') }}">
        </div>

        <button type="submit" class="btn btn-primary my-3">Tambah Buku!</button>
        </form>
        </div>
    </div>
</div>
@endsection