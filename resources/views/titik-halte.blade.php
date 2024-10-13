@extends('layouts.second')

@section('style')
    <style>
        .bg-image {
            background-image: url("img/bg-image.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh !important;
            padding: 0;
            display: flex;
        }

        .bg-image::after {
            content: "";
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
            background-image: linear-gradient(white 50%, rgba(255, 255, 255, 0.9));
        }


        .bg-image .sidebar {
            position: relative;
            z-index: 1;
            background-color: #4E429E;
            padding-top: 70px !important;
            display: flex;
            flex-direction: column;
            /* gap: 20px; */
        }

        .bg-image .sidebar a {
            padding: 20px;
            color: white;
            text-decoration: none;
            border-top: 1px solid white;
            /* border-bottom: 1px solid white; */
        }

        .bg-image .sidebar a:last-child {
            border-bottom: 1px solid white;
        }

        .relative-content {
            flex: auto;
            position: relative;
            z-index: 99;
            padding-top: 70px !important;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .relative-content img {
            width: 60%;
        }
    </style>
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid bg-image" style="background-image: url('{{ asset('img/bg-image.png') }}')">
        <div class="sidebar">
            @foreach ($titik_halte as $th)
                <a class=""
                    href="{{ route('services.titik-halte.detail', ['titikHalte' => $th->id]) }}">{{ $th->nama_rute }}
                </a>
            @endforeach
            @if (isAdmin())
                <a class="" href="{{ route('services.titik-halte.add-page') }}">
                    <i class="fas fa-plus"></i> Tambah Rute
                </a>
            @endif

        </div>
        <div class="relative-content"></div>
    </div>
    <!-- /.container-fluid -->
@endsection
