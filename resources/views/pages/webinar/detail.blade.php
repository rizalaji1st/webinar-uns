@extends('layouts.app')

@section('title')
    @if ($webinar)
        {{$webinar->agenda}}
    @else
        Agenda tidak ditemukan
    @endif
@endsection

@section('content')
    <section class="content-section">
        <div class="container">
            <h2 class="font-weight-bold"> {{$webinar->agenda}} </h2>
            <div class="row no-gutters mb-4">
                <div class="col-md-8 px-2">
                    <img src="https://picsum.photos/536/354" class="img-fluid rounded shadow w-100" alt="...">
                </div>
                <div class="col-md-4 px-2">
                    <div class="bg-white rounded shadow p-4 mt-md-0 mt-4">
                        <h5 class="font-weight-bold">Periode</h5>
                        <p>{{ $webinar->tanggal_awal }} <span class="font-weight-bold">s/d</span> {{ $webinar->tanggal_akhir }}</p>
                        <h5 class="font-weight-bold">Pendaftaran</h5>
                        <p>{{ $webinar->tgl_daftar_awal }} <span class="font-weight-bold">s/d</span> {{ $webinar->tgl_daftar_akhir }}</p>
                        <div class="mt-4">
                            <button class="btn btn-block rounded btn-success font-weight-bold">Daftar Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="font-weight-bold">Deskripsi</h5>
            <p>{{ $webinar->deskripsi }}</p>
        </div>
    </section>
@endsection