@extends('layouts.admin.app')

@section('title', 'Detail Aktivitas')

@section('content')
<div class="card card-success m-2" style="width: 500px;">
    <div class="card-header">
      <h3 class="card-title">{{ __('Detail Aktivitas') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.aktivitas.show', $aktivitas->id) }}">
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.aktivitas.show', $aktivitas->id) }}">
    @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="subindikator_id">{{ __('ID Sub-Indikator Sekarang') }}</label>
          <select class="form-control col-form-label rounded-2" name="subindikator_id" id="subindikator_id" disabled>
            <option value="{{$aktivitas->subindikator_id}}">{{$aktivitas->subindikator_id}}</option>
          </select>  
            @error('subindikator_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="nama_aktivitas">{{ __('Nama aktivitas') }}</label>
          <input type="nama_aktivitas" class="form-control @error('nama_aktivitas') is-invalid @enderror" id="nama_aktivitas" value="{{$aktivitas->nama_aktivitas}}" name="nama_aktivitas" disabled>
            @error('nama_aktivitas')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_aktivitas">{{ __('Deskripsi aktivitas') }}</label>
          <input type="deskripsi_aktivitas" class="form-control @error('deskripsi_aktivitas') is-invalid @enderror" id="deskripsi_aktivitas" value="{{$aktivitas->deskripsi_aktivitas}}" name="deskripsi_aktivitas" disabled>
            @error('deskripsi_aktivitas')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="">
          @if (auth()->user()->roles_id == 1)
            <a class="btn btn-success" href="/super/aktivitas/">{{ __('Kembali') }}</a>
          @elseif (auth()->user()->roles_id == 2)  
            <a class="btn btn-success" href="/admin/aktivitas/">{{ __('Kembali') }}</a>
          @endif
        </div>
      </div>
      <!-- /.card-body -->      
    </form>
  </div>
@endsection