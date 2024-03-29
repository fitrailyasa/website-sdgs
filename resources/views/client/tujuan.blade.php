@extends('layouts.client.app')

@section('title', 'Tujuan')

@section('style')
<style>
    @media (min-width: 768px) {
    .d-md-flex {
        display: flex !important;
    }
    .d-md-none {
        display: none !important;
    }
}

</style>
@endsection

@section('content')

<h1 class="text-center">17 Indikator SDGs</h1>
<div class="text-center">
    <div class="row d-none d-md-flex">
        @foreach ($indikators as $indikator)
        <div class="col-md-3 mb-4">
            <a href="/indikator/{{$indikator->id}}">
                <div class="card bg-white">
                    <div class="card-body d-flex justify-content-center align-items-center mb-3" style="height: 100px">
                        <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="70" alt="">
                    </div>
                    <h4 class="card-title text-center">{{$indikator->nama_indikator}}</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div class="row d-md-none">
        <div class="col-md-12">
            <div id="indikatorCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($indikators->chunk(2) as $chunk)
                    <div class="carousel-item @if ($loop->first) active @endif">
                        <div class="row">
                            @foreach ($chunk as $indikator)
                            <div class="col-md-3 mb-4">
                                <a href="/indikator/{{$indikator->id}}">
                                    <div class="card bg-white">
                                        <div class="card-body d-flex justify-content-center align-items-center mb-3" style="height: 100px">
                                            <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="70" alt="">
                                        </div>
                                        <h4 class="card-title text-center">{{$indikator->nama_indikator}}</h4>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#indikatorCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-blue" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#indikatorCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-blue" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')

<script>
    $(document).ready(function(){
        $('#indikatorCarousel').carousel({
            interval: 5000 // Mengatur waktu interval pada carousel
        });
    });
</script>

@endsection