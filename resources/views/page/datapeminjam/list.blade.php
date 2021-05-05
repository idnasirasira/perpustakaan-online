@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">List Data Peminjam Page</h1>
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
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-2">
            <a href="/datapeminjam/create" class="btn btn-primary">Tambah Data</a>
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
                          <th>Id Peminjam</th>
                          <th>Jumlah Pinjam</th>
                          <th>Harga</th>
                          <th>Tanggal Pinjam</th>
                          <th>Tanggal Kembali</th>
                          <th>Denda perHari</th>
                          <th>Denda Telat</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ( $datapeminjam as $datapeminjam )
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $datapeminjam->code }}</td>
                          <td>{{ $datapeminjam->id_peminjam }}</td>
                          <td>{{ $datapeminjam->jumlah_pinjam }}</td>
                          <td>{{ $datapeminjam->total_harga }}</td>
                          <td>{{ $datapeminjam->created_at }}</td>
                          <td>{{ $datapeminjam->tanggal_kembali }}</td>
                          <td>{{ $datapeminjam->denda }}</td>
                          <td>{{ $datapeminjam->total_denda }}</td>
                          <td>
                          @if($datapeminjam->tanggal_pengembalian == 0)
                                <a href="datapeminjam/{{ $datapeminjam->id }}/edit" class="badge badge-primary">Pengembalian</a>
                            @else
                                <p class="badge badge-success">Dikembalikan</p>
                            @endif
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
