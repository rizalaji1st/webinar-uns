@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section id="main" class="content-section d-flex align-items-center bg-light-blue-main min-vh">
    <div class="container text-white">
        <div class="row d-flex align-items-center text-md-left text-center py-5">

            <div class="col-md-7">
				{{-- <img src={{asset('image/Kids-Studying-from-Home-rafiki.svg')}} alt="" class="img-fluid w-75"> --}}
				<h2 class="mb-0">Selamat Datang di Aplikasi </h2>
                <h1 class="title-big font-weight-bold">Webinar UNS</h1>
                <p class="font-weight-bolder">Aplikasi Webinar UNS adalah aplikasi yang digunakan untuk mendaftarkan diri pada webinar yang diselenggarakan oleh UNS.</p>
                {{-- <button class="btn btn-lg btn-dark font-weight-bold rounded-pill">Getting Started</button> --}}
            </div>
            @guest
            <div class="col-md-5">
              <form class="shadow px-3 py-4 rounded bg-white" method="POST" action="{{ route('login') }}">
                  @csrf
      					<h3 class="mb-4 text-dark font-weight-bold">Login Ke Akun Anda</h3>
                <div class="form-group">
                  <input id="email" type="email" placeholder="Masukkan Alamat Email Anda" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

                <div class="form-group">
                  <input id="password" type="password" placeholder="Masukkan Password Anda"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-dark" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success font-weight-bold">
                        {{ __('Login') }}
                        <ion-icon class="align-middle ml-2" name="send"></ion-icon>
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
      				</form>
            </div>
            @endguest
		</div>
		{{-- <div class="d-flex justify-content-center mt-4">
			<a href="" class="h1 text-white" id="showMore">
				<ion-icon name="chevron-down-circle-outline"></ion-icon>
			</a>
		</div> --}}
    </div>
</section>

<section class="content-section">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-md-6">
				<img src={{asset('image/Telecommuting-pana.svg')}} alt="" class="img-fluid">
			</div>
			<div class="col-md-6">
				<h1 class="font-weight-bold">Webinar UNS untuk Semuanya</h1>
				<p>
					Selenggarakan webinar atau ikut berpartisiapasi menjadi peserta webinar yang diselenggarakan di UNS. Anda dapat mendaftarkan webinar anda dan mengelola peserta webinar anda dalam satu aplikasi. Anda juga dapat mendaftar pada webinar yang akan diselenggarakan.
				</p>
			</div>
		</div>
	</div>
</section>

<section class="content-section bg-light-blue">
    <div class="container">
        <h1 class="text-center text-white">Webinar <span class="font-weight-bold">Terbaru</span></h1>
        <div class="row mt-5">
            @if (count($webinars) > 0)
                @foreach ($webinars as $webinar)
                    <div class="col-md-3 col-6">
                        <div class="card mb-4 shadow">
                            <img src="/storage/file_pamflet/{{ $webinar->path_file_pamflet }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{ $webinar->agenda }}</h5>
                                <p class="card-text">{!! Str::limit($webinar->deskripsi, 100) !!}</p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a href="/webinar/{{ $webinar->id }}">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="font-weight-bold">Lihat</span>
                                        <ion-icon class="align-middle" name="arrow-forward-circle-outline"></ion-icon>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

{{-- <script>
	$(document).ready(function () {
		$("#showMore").click(function(e){
			e.preventDefault();
			alert('hello');
		})
);
	});
</script> --}}
@endsection
