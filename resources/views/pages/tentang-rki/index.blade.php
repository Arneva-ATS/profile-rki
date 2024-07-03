@extends('layouts.app')

@section('content')
<section class="section-box box-about-section-1">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="padding-left-auto"><a class="btn btn-tag-black" href="#">About Us</a>
                    <h2 class="display-2 mt-15 mb-25">This is Who We Are</h2>
                    <p class="text-xl mb-45">The true secret of our success lies in people behind the screen. And with them, our culture.</p>
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
                                        <path d="M24.1537 16.8139L15.218 25.7497L13.75 24.2817L22.6847 15.3459H14.81V13.2695H26.2301V24.6897H24.1537V16.8139Z" fill="#C5FF55"></path>
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
                        <p class="text-22-bold">We facilitate the creation of strategy, design, and implementation</p>
                        <div class="box-joined">
                            <div class="box-authors">
                                <span class="item-author"><img src="{{ asset('assets/imgs/page/homepage1/author.png') }}" alt="Nivia"></span>
                                <span class="item-author"><img src="{{ asset('assets/imgs/page/homepage1/author2.png') }}" alt="Nivia"></span>
                                <span class="item-author"><img src="{{ asset('assets/imgs/page/homepage1/author3.png') }}" alt="Nivia"></span>
                                <span class="item-author"><span class="text-num-author text-md-bold color-brand-2">+2k</span></span>
                            </div>
                            <span class="text-lg d-inline-block">Join thousands of users in using<br class="d-none d-md-block">the Nivia platform!</span>
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

<section class="section-box box-prepared-section" style="background: rgb(73, 73, 73);">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 mb-30">
                <h2 class="heading-2">When you are more prepared, your future will be brighter</h2>
            </div>
            <div class="col-lg-6 mb-30">
                <h6 class="neutral-500">Since 2010 we’ve been working with amazing organisations to create meaningful impact and compelling experiences.</h6>
            </div>
        </div>
        <div class="row mt-45">
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/marketing.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold">Our philosophy</h3>
                            <p class="text-lg neutral-500">We also know that with all our wellness initiatives, customer value and service, our doors to the community.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/digital.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold">Our Mission</h3>
                            <p class="text-lg neutral-500">Our mission, and our vision, is our mission. We are here to support and encourage individuals in their journey.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-feature-2 card-feature-list">
                    <div class="card-image"><img src="{{ asset('assets/imgs/page/homepage3/product.svg') }}"></div>
                    <div class="card-info">
                        <a href="#">
                            <h3 class="text-22-bold">Our Identity</h3>
                            <p class="text-lg neutral-500">Our commitment to our clients is key to our success. We make it a point to meet with our clients to make sure.</p>
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
