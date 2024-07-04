@extends('layouts.app')

@section('content')
<section class="section-box box-about-section-1">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="padding-left-auto">
                    <a class="btn btn-tag-black" href="#">Tentang RKI</a>
                    <h2 class="display-2 mt-15 mb-25 px-2">Rumah Kesejahteraan Indonesia</h2>
                    <p class="text-xl mb-45 px-2">Didirikan oleh Pimpinan Paripurna Dewan Koperasi Indonesia (DEKOPIN) pada awal tahun 2020. RKI hadir sebagai jawaban atas kebutuhan untuk menjembatani peran DEKOPIN yang sebelumnya hanya sebagai katalisator pasif dalam menjalankan program edukasi, fasilitasi, dan advokasi bagi gerakan koperasi di Indonesia.</p>
                    <div class="box-buttons-feature-4">
                        <a class="btn btn-brand-4-medium mr-20" href="#">Subscribe
                            <svg width="22" height="8" viewbox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 3.99934L18.4791 0.478516V3.30642H0V4.69236H18.4791V7.52031L22 3.99934Z" fill=""></path>
                            </svg>
                        </a>

                        <a class="btn btn-learmore-2" href="#">
                            <span>
                                <svg width="39" height="38" viewbox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" width="38" height="38" rx="19" fill="#191919"></rect>
                                    <g clip-path="url(#clip0_1_376)">
                                        <path d="M24.1537 16.8139L15.218 25.7497L13.75 24.2817L22.6847 15.3459H14.81V13.2695H26.2301V24.6897H24.1537V16.8139Z" fill="#47d2fb"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_1_376">
                                            <rect width="13" height="13" fill="white" transform="translate(13.5 13)"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </span>

                            Learn More
                        </a>
                    </div>
                    <div class="box-border-left-author">
                        <p class="text-22-bold">Kesejahteraan untuk Semua, Harapan untuk Masa Depan</p>
                        <div class="box-joined">
                            <div class="box-authors">
                                <span class="item-author"><img src="{{ asset('assets/imgs/page/homepage1/author.png') }}" alt="Nivia"></span>
                                <span class="item-author"><img src="{{ asset('assets/imgs/page/homepage1/author2.png') }}" alt="Nivia"></span>
                                <span class="item-author"><img src="{{ asset('assets/imgs/page/homepage1/author3.png') }}" alt="Nivia"></span>
                                <span class="item-author"><span class="text-num-author text-md-bold color-brand-2">+2k</span></span>
                            </div>
                            <span class="text-lg d-inline-block">Bergabunglah dengan RKI<br class="d-none d-md-block">bersama wujudkan kesejahteraan!</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box-image-rect">
                    <img src="{{ asset('assets/imgs/page/about/img-about.png') }}" alt="Nivia">
                    <a class="btn btn-play popup-youtube text-lg" href="https://www.youtube.com/watch?v=SZEflIVnhH8">
                        <div class="video-play-button"><span></span></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box box-prepared-section" style="background: rgb(19 30 58);">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 mb-30">
                <h2 class="heading-2 text-white">RKI berkomitmen untuk memperkuat gerakan koperasi di Indonesia</h2>
            </div>
            <div class="col-lg-6 mb-30">
                <h6 class="text-white">Dengan pendekatan yang inklusif dan berkelanjutan, RKI berusaha menciptakan ekosistem yang mendukung kesejahteraan anggota koperasi dan masyarakat luas. Melalui kemitraan yang strategis dan program-program yang relevan, RKI siap membawa koperasi Indonesia menuju masa depan yang lebih cerah dan berdaya saing global.</h6>
            </div>
        </div>
        <div class="row mt-45">
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/marketing.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold text-white">Visi Kami</h3>
                            <p class="text-lg text-white">Mewujudkan kesejahteraan berkelanjutan bagi seluruh masyarakat Indonesia melalui penguatan dan pengembangan gerakan koperasi.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/digital.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold text-white">Misi Kami</h3>
                            <ul>
                                <li>Melaksanakan program edukasi yang komprehensif untuk meningkatkan pemahaman dan keterampilan anggota koperasi.</li>
                                <li>Menyediakan fasilitas yang mendukung operasional koperasi dalam berbagai sektor usaha.</li>
                                <li>Mengadvokasi kepentingan koperasi di tingkat nasional dan internasional untuk menciptakan lingkungan yang kondusif bagi pertumbuhan koperasi.</li>
                                <li>Mengembangkan kemitraan strategis dengan berbagai pihak untuk memperkuat ekosistem koperasi.</li>
                            </ul>
                            <p class="text-lg text-white"></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/product.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold text-white">Our Identity</h3>
                            <p class="text-lg text-white">Our commitment to our clients is key to our success. We make it a point to meet with our clients to make sure.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box wow animate__animated animate__fadeIn box-preparing-2 mt-0 mb-100">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-15">Preparing For Your Success,<br class="d-none d-lg-block">We Provide Truly Prominent IT Solutions</h2>
            <p class="text-lg neutral-700">Nivia is an independent web design studio with a rich history.<br>Founded in 1999, it gathered the best designers & developers.</p>
        </div>
        <div class="row mt-90">
            <div class="col-lg-4 col-md-6">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" src="{{ asset('assets/imgs/page/homepage1/img-prepare.png') }}" alt="Nivia"></div>
                    <div class="card-info">
                        <h5>Easy Control Panel</h5>
                        <p class="text-lg neutral-700 w-85 mx-auto">Mastering Your Domain with Effortless Control: Elevate Your Management Experience to New Heights of Ease and Efficiency.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" src="{{ asset('assets/imgs/page/homepage1/img-prepare2.png') }}" alt="Nivia"></div>
                    <div class="card-info">
                        <h5>Details Reporting</h5>
                        <p class="text-lg neutral-700 w-85 mx-auto">Achieve Business Excellence with Comprehensive Details Reporting: The Key to Informed Decision-Making and Strategic Growth</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-preparing">
                    <div class="card-image"><img class="wow fadeInUp" src="{{ asset('assets/imgs/page/homepage1/img-prepare3.png') }}" alt="Nivia"></div>
                    <div class="card-info">
                        <h5>Sales Comparison</h5>
                        <p class="text-lg neutral-700 w-85 mx-auto">Maximizing Your Data Potential: A Deep Dive into the World of Detailed Reporting for Informed, Strategic Decision-Making</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
