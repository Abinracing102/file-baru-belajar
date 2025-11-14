@extends('layout.layout')
@section('title', 'About')
@section('content')

<style>
    body {
        background: url('{{ asset("image/bckground.webp") }}') center/cover no-repeat fixed;
    }

    .judul {
        color: white;
        text-align: center;
        margin-top: 120px;
        margin-bottom: 40px;
        font-size: 32px;
        font-weight: 700;
        text-shadow: 0px 3px 10px rgba(0,0,0,0.8);
    }

    .about-card {
        background: linear-gradient(
            to bottom,
            rgba(255,255,255,0.18),
            rgba(255,255,255,0.05)
        );
        border-radius: 35px;
        padding: 40px 30px;
        padding-top: 40px;
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        color: white;
        text-align: center;
        box-shadow: 0px 8px 35px rgba(0,0,0,0.35);
        position: relative;
    }

    .profile-img-container {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .profile-img {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        object-fit: cover;
        border: 6px solid rgba(255,255,255,0.85);
        box-shadow: 0 5px 22px rgba(0,0,0,0.7);
    }

    .name {
        font-size: 20px;
        font-weight: 700;
        margin-top: 10px;
        letter-spacing: 0.5px;
    }

    .nim {
        color: #e0e0e0;
        margin-top: -4px;
        font-size: 14px;
    }

    .bio-box {
        margin-top: 25px;
        background: rgba(255, 255, 255, 0.12);
        border-radius: 15px;
        padding: 18px 20px;
        text-align: left;
        font-size: 14px;
        box-shadow: inset 0 0 10px rgba(255,255,255,0.1);
    }

    .bio-title {
        font-weight: 700;
        font-size: 13px;
        margin-bottom: 8px;
        letter-spacing: 1px;
    }
</style>

<div class="container">

    <h1 class="judul">
        Halaman ini dibuat oleh: <span style="font-weight:700;">2301040021 - GANPRA NURHADI LOSA</span>
    </h1>

    <div class="row justify-content-center">

        {{-- CARD ORANG 1 --}}
        <div class="col-md-5 mb-5">
            <div class="about-card">

                <div class="profile-img-container">
                    <img src="{{ asset('image/' . $posts[0]['gambar']) }}" class="profile-img">
                </div>

                <div class="name">{{ $posts[0]['Nama'] }}</div>
                <div class="nim">{{ $posts[0]['Nim'] ?? '' }}</div>

                <div class="bio-box">
                    <div class="bio-title">BIO</div>
                    {{ $posts[0]['bio'] ?? 'Belum ada bio.' }}
                </div>

            </div>
        </div>

        {{-- CARD ORANG 2 --}}
        <div class="col-md-5 mb-5">
            <div class="about-card">

                <div class="profile-img-container">
                    <img src="{{ asset('image/' . $posts[1]['gambar']) }}" class="profile-img">
                </div>

                <div class="name">{{ $posts[1]['Nama'] }}</div>
                <div class="nim">{{ $posts[1]['Nim'] ?? '' }}</div>

                <div class="bio-box">
                    <div class="bio-title">BIO</div>
                    {{ $posts[1]['bio'] ?? 'Belum ada bio.' }}
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
