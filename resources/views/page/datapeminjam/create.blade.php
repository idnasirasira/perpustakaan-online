@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Data Peminjam Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active">Data Peminjam Page</li>
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
            <form method="post" action="{{ route('datapeminjam.store') }}">
                @csrf
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" placeholder="Masukkan Code" name="code" value="{{ old('code') }}">
                </div>
                <div class="form-group">
                    <label for="id_peminjam">Id Peminjam</label>
                    <input type="text" class="form-control @error('id_peminjam') is-invalid @enderror" id="id_peminjam" placeholder="Masukkan Id Peminjam" name="id_peminjam" value="{{ old('id_peminjam') }}">
                </div>
                
                <div class="form-group">
                    <label for="jumlah_pinjam">Jumlah Pinjam</label>
                    <input type="number" class="form-control @error('jumlah_pinjam') is-invalid @enderror" id="jumlah_pinjam" placeholder="Masukkan Jumlah Peminjam" name="jumlah_pinjam" value="{{ old('jumlah_pinjam') }}">
                </div>

                <div class="form-group">
                    <label for="tanggal_kembali">Tanggal Kembali</label>
                    <input type="date" class="form-control @error('tanggal_kembali') is-invalid @enderror" id="tanggal_kembali" placeholder="Masukkan Id Peminjam" name="tanggal_kembali" value="{{ old('tanggal_kembali') }}">
                </div>

                <div class="form-group">
                    <label for="denda">Denda</label>
                    <input type="text" class="form-control @error('denda') is-invalid @enderror" id="denda" placeholder="Masukkan denda Perhari" name="denda" value="{{ old('denda') }}">
                </div>

                <button type="submit" class="btn btn-primary my-3">Pinjam Buku!</button>
            </form>
        </div>
    </div>
</div>
@endsection