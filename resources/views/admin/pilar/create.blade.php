@extends('layouts.admin.app')

@section('title', 'Tambah Data Indikator')

@section('content')
<div class="card card-success m-2" style="width: 500px;">
    <div class="card-header">
      <h3 class="card-title">{{ __('Tambah Data Indikator') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.indikator.store') }}">
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.indikator.store') }}">
    @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="nama_indikator">{{ __('Nama Indikator') }}</label>
          <input type="nama_indikator" class="form-control @error('nama_indikator') is-invalid @enderror" id="nama_indikator" placeholder="Masukkan nama indikator" value="{{ old('nama_indikator') }}" name="nama_indikator" required autocomplete="nama_indikator" autofocus>
            @error('nama_indikator')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_indikator">{{ __('Deskripsi Indikator') }}</label>
          <input type="deskripsi_indikator" class="form-control @error('deskripsi_indikator') is-invalid @enderror" id="deskripsi_indikator" placeholder="Masukkan deskripsi indikator" name="deskripsi_indikator" required autocomplete="current-deskripsi_indikator">
            @error('deskripsi_indikator')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="">
            <button type="submit" class="btn btn-success">{{ __('Simpan') }}</</button>
          </div>
      </div>
      <!-- /.card-body -->      
    </form>
  </div>
@endsection