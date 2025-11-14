@extends('layout.layout')
@section('title', 'Home')
@section('content')

<style>
    .judul {
        color: white;
        text-align: center;
        margin-bottom: 50px;
        text-shadow: 1px 1px 4px rgba(0,0,0,0.8);
    }
    .card {
        position: relative;
        border: none;
        overflow: hidden;
        border-radius: 15px;
    }
    .card-title {
        position: absolute;
        bottom: 10px;
        left: 15px;
        color: white;
        font-weight: 600;
        text-shadow: 1px 1px 4px rgba(0,0,0,0.8);
    }
    .img-square {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }
    .img-wide {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }
</style>

<div class="container" style="padding-top: 120px;">
    <h1 class="judul">
        Halaman ini dibuat oleh 2301040038 - MUHAMMAD ABIN
    </h1>

    @php
        $posts = is_array($posts) ? $posts : $posts->toArray();
    @endphp


    {{-- =======================================================
        BARIS 1
    ======================================================= --}}
    @if(count($posts) >= 3)
        <div class="row mb-4">

            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="img-square" src="{{ asset('image/' . $posts[0]['gambar']) }}">
                    <h5 class="card-title">{{ $posts[0]['title'] }}</h5>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="img-wide" src="{{ asset('image/' . $posts[1]['gambar']) }}">
                    <h5 class="card-title">{{ $posts[1]['title'] }}</h5>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="img-square" src="{{ asset('image/' . $posts[2]['gambar']) }}">
                    <h5 class="card-title">{{ $posts[2]['title'] }}</h5>
                </div>
            </div>

        </div>
    @endif



    {{-- =========================================
        BARIS 2
    ========================================= --}}
    @if(count($posts) >= 6)
        <div class="row mb-4">

            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="img-square" src="{{ asset('image/' . $posts[3]['gambar']) }}">
                    <h5 class="card-title">{{ $posts[6]['title'] }}</h5>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="img-wide" src="{{ asset('image/' . $posts[4]['gambar']) }}">
                    <h5 class="card-title">{{ $posts[7]['title'] }}</h5>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="img-square" src="{{ asset('image/' . $posts[5]['gambar']) }}">
                    <h5 class="card-title">{{ $posts[8]['title'] }}</h5>
                </div>
            </div>

        </div>
    @endif



    {{-- =======================================================
        BARIS 3
    ======================================================= --}}
    @if(count($posts) >= 9)
        <div class="row mb-4">

            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="img-square" src="{{ asset('image/' . $posts[6]['gambar']) }}">
                    <h5 class="card-title">{{ $posts[6]['title'] }}</h5>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="img-wide" src="{{ asset('image/' . $posts[7]['gambar']) }}">
                    <h5 class="card-title">{{ $posts[7]['title'] }}</h5>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="img-square" src="{{ asset('image/' . $posts[8]['gambar']) }}">
                    <h5 class="card-title">{{ $posts[8]['title'] }}</h5>
                </div>
            </div>

        </div>
    @endif


</div>

@endsection
