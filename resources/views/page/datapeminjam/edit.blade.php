@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Pengembalian Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active">Pengembalian Page</li>
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

        <form action="{{ route('datapeminjam.update', ['datapeminjam' => $datapeminjam->id]) }}" method="POST">
            @method('patch')
                @csrf

                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" value="{{ $datapeminjam->code }}" readonly="true">
                </div>
                <div class="form-group">
                    <label for="id_peminjam">Id Peminjam</label>
                    <input type="text" class="form-control @error('id_peminjam') is-invalid @enderror" id="id_peminjam" value="{{ $datapeminjam->id_peminjam }}" readonly="true">
                </div>
                
                <div class="form-group">
                    <label for="jumlah_pinjam">Jumlah Pinjam</label>
                    <input type="number" class="form-control @error('jumlah_pinjam') is-invalid @enderror" id="jumlah_pinjam" value="{{ $datapeminjam->jumlah_pinjam }}" readonly="true">
                </div>

                <div class="form-group">
                    <label for="tanggal_pengembalian">Waktu Pengembalian</label>
                    <input type="date" class="form-control @error('tanggal_pengembalian') is-invalid @enderror" id="tanggal_pengembalian" name="tanggal_pengembalian" value="{{ $datapeminjam->tanggal_kembali }}">
                </div>

                <div class="form-group">
                    <label for="denda">Denda</label>
                    <input type="text" class="form-control @error('denda') is-invalid @enderror" name='denda' id="denda" value="{{ $datapeminjam->denda }}">
                </div>

                <button type="submit" class="btn btn-primary my-3">Kembali Buku!</button>
            </form>
        </div>
    </div>
</div>
@endsection