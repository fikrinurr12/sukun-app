@extends('layout.layout_sign')
@section('title','Sign Up')

@section('content')
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Masukkan data diri anda</p>
                </div>
                <div class="card-body">
                  <form role="form">
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="Nama Lengkap" aria-label="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                      <select class="form-select form-select-lg" aria-label="Divisi" required>
                        <option value="">Pilih Divisi</option>
                        <option value="1">HRD</option>
                        <option value="2">Produksi</option>
                        <option value="3">Gudang</option>
                        <option value="4">Security</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" required>
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" required>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Log In</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Log In</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('{{ asset('assets/img/curved-images/curved-6.jpg') }}');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection