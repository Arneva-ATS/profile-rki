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
                    <h5 class="modal-title" id="standardModalLabel">Choose an Option</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="row">
                        <!-- Card for Inkop -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Inkop</h5>
                                    <p class="card-text">Description for Inkop.</p>
                                    <a href="#" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card for Puskop -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Puskop</h5>
                                    <p class="card-text">Description for Puskop.</p>
                                    <a href="#" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card for Primkop -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Primkop</h5>
                                    <p class="card-text">Description for Primkop.</p>
                                    <a href="#" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.foot')
  </body>
</html>
