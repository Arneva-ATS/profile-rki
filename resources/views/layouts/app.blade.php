<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/Logo-color.png') }}">
    @include('layouts.partials.head')
    <title>Rumah Kesejahteraan Indonesia</title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="{{ asset('assets/imgs/template/loading.gif') }}" alt="RKI"></div>
        </div>
      </div>
    </div>
    @include('layouts.partials.navbar')
    @include('layouts.partials.mobile-navbar')
    <main class="main">
      @yield('content')
    </main>


    @include('layouts.partials.footer')

    <div class="modal fade modal-notification" id="standardModal" tabindex="-1" aria-labelledby="standardModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-3">
                        <img alt="RKI" src="{{ asset('assets/imgs/logo-koperasi-indonesia.png') }}" width="50">
                        <h5 class="modal-title" id="standardModalLabel">Pengajuan Gabung Koperasi</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="koperasiForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="namaKoperasi" class="form-label">Nama Koperasi</label>
                                    <input type="text" class="form-control" id="namaKoperasi" placeholder="Masukkan Nama Koperasi">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="emailKoperasi" class="form-label">Email Koperasi</label>
                                    <input type="email" class="form-control" id="emailKoperasi" placeholder="Masukkan Email Koperasi">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="namaKetua" class="form-label">Nama Ketua</label>
                                    <input type="text" class="form-control" id="namaKetua" placeholder="Masukkan Nama Ketua">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nomerKetua" class="form-label">Nomer Ketua</label>
                                    <input type="text" class="form-control" id="nomerKetua" placeholder="Masukkan Nomer Ketua">
                                    {{-- <div class="form-text text-danger">*Format: 0812xxxxxxx, panjang 10-13 digit.</div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tingkatanKoperasi" class="form-label">Tingkatan Koperasi</label>
                            <select class="form-select p-2" id="tingkatanKoperasi">
                                <option value="INKOP">INKOP</option>
                                <option value="PUSKOP">PUSKOP</option>
                                <option value="PRIMKOP">PRIMKOP</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger rounded-3" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary rounded-3" id="submitBtn">Submit</button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.foot')
  </body>
</html>
