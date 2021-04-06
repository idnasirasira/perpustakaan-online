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
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                      
                            </div>
                        </div>
        <form action="{{ route('book.update', ['book' => $book->id]) }}" method="post">
        @method('patch')
            @csrf
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror id="code" 
            placeholder="Masukkan Code" name="code" value="{{ $book->code }}">
        </div>
    
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" 
            placeholder="Masukkan Judul" name="title" value="{{ $book->title }}">
        </div>

        <div class="form-group">
            <label for="publisher">Penerbit</label>
            <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" 
            placeholder="Masukkan Penerbit" name="publisher" value="{{ $book->publisher }}">
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" 
            placeholder="Masukkan Author" name="author" value="{{ $book->author }}">
        </div>
        <button type="submit" class="btn btn-primary my-3">Ubah Buku!</button>
        </form>
        </div>
    </div>
</div>
@endsection