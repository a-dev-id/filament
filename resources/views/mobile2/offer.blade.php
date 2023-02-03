@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('moffer') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('moffer') }}" />
@endsection

@push('css')
@endpush

@push('js')
@endpush
<x-mobile2>
    <div class="wrapper page">
        <div class="header-page fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>Offers</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid experience py-2">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm text-dark mb-2">
                        <img src="https://elevatebali.com/storage/app/uploads/public/63d/b2d/f24/63db2df2420b9484931417.jpg" class="card-img-top" alt="Valentine Package">
                        <div class="card-body p-2">
                            <h2 class="card-title mb-1">Valentine Package</h2>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#valentine-package" class="btn btn-outline-custom rounded-0 mt-1" style="font-size: 60%;">View Detail</a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="valentine-package" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Valentine Package</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Elevate your romantic moment with your beloved one at the other side of the paradise</p>

                                    <p>3 Days 2 Nights | IDR 14.907.200</p>

                                    <p><strong>Inclusion:</strong></p>

                                    <ul data-mce-style="list-style-type: disc;">
                                        <li>2 nights stay at Volcano Vista Villa</li>
                                        <li>Welcome drink and oshibori upon arrival</li>
                                        <li>Daily breakfast for two persons</li>
                                        <li>Free Shuttle to Banyumala Waterfall or Candi Kuning Traditional Market</li>
                                        <li>Free daily sunset mocktails at Clouds Bar</li>
                                        <li>1x Balinese Massage of 60 minutes for two persons</li>
                                        <li>1x Lunch for two persons</li>
                                        <li>1x Romantic Candle Light Dinner for two persons</li>
                                        <li>In-villa Coffee/Tea making facilities</li>
                                        <li>Daily fruit basket</li>
                                        <li>Daily turndown service and cookies</li>
                                        <li>Resort activities based on schedule / weather</li>
                                        <li>Free wi-fi access within the resort premises</li>
                                    </ul>

                                    <p><strong><br>Term &amp; Condition:</strong></p>

                                    <ul data-mce-style="list-style-type: disc;">
                                        <li>The price has been included 21% tax and service.</li>
                                        <li>Cancellation policy : non-refundable but amendable.</li>
                                        <li>Full payment should be received once the booking is confirmed.</li>
                                    </ul>

                                    <p>
                                        <br><strong>Booking Period :</strong>
                                        <br>Immediately - 28 February 2023
                                    </p>

                                    <p><strong>Traveling Period :</strong>
                                        <br>Immediately - 28 February 2023
                                    </p>

                                    <p>&nbsp;</p>


                                </div>
                                <div class="modal-footer button-wrapper">
                                    <button type="button" class="btn btn-outline-custom" data-bs-dismiss="modal">Close</button>
                                    <a href="" class="btn btn-custom">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow-sm text-dark mb-2">
                        <img src="https://elevatebali.com/storage/app/uploads/public/639/94f/f88/63994ff88e6c5504632072.jpg" class="card-img-top" alt="4-NIGHT COMBINATION PACKAGE">
                        <div class="card-body p-2">
                            <h2 class="card-title mb-1">4-NIGHT COMBINATION PACKAGE</h2>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#four-night-combination-package" class="btn btn-outline-custom rounded-0 mt-1" style="font-size: 60%;">View Detail</a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="four-night-combination-package" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">4-NIGHT COMBINATION PACKAGE</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Two Exclusive Options:</p>

                                    <p><strong>USD 2,492++</strong></p>

                                    <p>Begin your stay at the award-winning hotel Hanging Gardens of Bali to experience “The world’s best swimming pool”. After two days in the jungle, depart for the exclusive Elevate Bali, tucked in the Munduk mountains, surrounded by waterfalls and volcanoes. A truly enchanting experience like no other...</p>

                                    <p><strong>PACKAGE INCLUSIONS</strong></p>

                                    <ul>
                                        <li>2-Night Stay at Riverside Pool Villa - Hanging Gardens of Bali - Ubud</li>
                                        <li>2-Night Stay at Volcano Vista Villa - Elevate Bali by Hanging Gardens - Munduk</li>
                                        <li>Daily breakfast</li>
                                        <li>Daily sunset mocktail</li>
                                        <li>Daily resort activities based on resorts’ schedule</li>
                                        <li>Daily shuttle service based on resorts’ schedule</li>
                                        <li>Complimentary transfer service between the properties</li>
                                    </ul>
                                    <hr>

                                    <p><strong>USD 1,584++</strong></p>

                                    <p>Start your experience at the luxurious Elevate Bali, perched on the Munduk mountains, it overlooks volcanoes and offers endless opportunities to explore nature. Your journey continues to Nandini Jungle Resort, a hidden gem set on the mystical Ayung River, embrace lush rainforest and reach ultimate tranquillity...</p>

                                    <p><strong>PACKAGE INCLUSIONS</strong></p>

                                    <ul>
                                        <li>2-Night Stay at Volcano Vista Villa - Elevate Bali by Hanging Gardens – Munduk</li>
                                        <li>2-Night Stay at Garden View Royal Suite - Nandini Jungle Resort &amp; Spa Bali - Ubud</li>
                                        <li>Daily breakfast</li>
                                        <li>Daily sunset mocktail</li>
                                        <li>Daily resort activities based on resorts’ schedule</li>
                                        <li>Daily shuttle service based on resorts’ schedule</li>
                                        <li>Complimentary transfer service between the properties</li>
                                    </ul>
                                    <hr>

                                    <p><strong>TERMS AND CONDITIONS</strong></p>

                                    <ul>
                                        <li>Package valid for two persons</li>
                                        <li>Package valid immediately until 31st March 2023</li>
                                        <li>Package subject to 21% Government tax and Service Charge</li>
                                        <li>Advance reservation required</li>
                                    </ul>


                                    <h5 class="fw-bold mt-3 mb-0 text-end">Start from USD 1,584++</h5>
                                </div>
                                <div class="modal-footer button-wrapper">
                                    <button type="button" class="btn btn-outline-custom" data-bs-dismiss="modal">Close</button>
                                    <a href="mailto:reservations@elevatebali.com" class="btn btn-custom">Inquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow-sm text-dark mb-2">
                        <img src="https://elevatebali.com/storage/app/uploads/public/635/b75/ef9/635b75ef90bdc971226716.jpg" class="card-img-top" alt="One Day at The Other Side of Paradise">
                        <div class="card-body p-2">
                            <h2 class="card-title mb-1">One Day at The Other Side of Paradise</h2>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#one-day-other-side-paradise" class="btn btn-outline-custom rounded-0 mt-1" style="font-size: 60%;">View Detail</a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="one-day-other-side-paradise" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">One Day at The Other Side of Paradise</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Select your one day Escape in Paradise with the selection of two choices:</p>

                                    <p>
                                        <br>
                                    </p>

                                    <p><strong>Lunch&nbsp;</strong>: minimum spend of IDR. 300K++ per person</p>

                                    <p>Inclusions: Koi pond access, Restaurant access</p>

                                    <p>
                                        <br>
                                    </p>

                                    <p><strong>Swim&nbsp;</strong>: IDR. 500K++ per person</p>

                                    <p>Inclusions: IDR. 350K F&amp;B Credit, Koi Pond Acess, Restaurant Access, Pool Access, Day Bed and Cabana Access, Pool Towel,&nbsp;</p>


                                    <h6 class="fw-bold">Terms and Conditions</h6>
                                    <ul>
                                        <li>Advance reservation is preferred to ensure availability / space</li>
                                        <li>Please contact our reservation team at reservations@elevatebali.com for more details information</li>
                                        <li>Call / Whatsapp : +62 821-4566-6738</li>
                                    </ul>
                                    <h5 class="fw-bold mt-3 mb-0 text-end">Start from IDR 300K ++ / Person</h5>
                                </div>
                                <div class="modal-footer button-wrapper">
                                    <button type="button" class="btn btn-outline-custom" data-bs-dismiss="modal">Close</button>
                                    <a href="mailto:reservations@elevatebali.com" class="btn btn-custom">Inquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow-sm text-dark ">
                        <img src="https://elevatebali.com/storage/app/uploads/public/635/b74/dbe/635b74dbe7d46584064115.jpg" class="card-img-top" alt="Escape Heaven">
                        <div class="card-body p-2">
                            <h2 class="card-title mb-1">Escape Heaven</h2>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#escape-heaven" class="btn btn-outline-custom rounded-0 mt-1" style="font-size: 60%;">View Detail</a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="escape-heaven" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Escape Heaven</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>&nbsp;Take advantage of 10% discount for weekend stay.</p>

                                    <h6 class="fw-bold">Benefits</h6>
                                    <ul>
                                        <li>Daily breakfast</li>
                                        <li>Complimentary fresh fruits upon arrival</li>
                                        <li>Drinking water, Coffee and tea facility in the room</li>
                                        <li>Wi Fi throughout the resort</li>
                                        <li>Daily sunset mocktail</li>
                                    </ul>

                                    <h6 class="fw-bold">Terms and Conditions</h6>
                                    <ul>
                                        <li>10% discount for weekend stay.</li>
                                        <li>Booking and stay period : imm – 30 June 2022 </li>
                                        <li>Stay days: Friday, Saturday, Sunday</li>
                                        <li>Extra Benefits: Halfboard (breakfast and lunch)</li>
                                    </ul>
                                    <h5 class="fw-bold mt-3 mb-0 text-end">Start from IDR 3,420,000</h5>
                                </div>
                                <div class="modal-footer button-wrapper">
                                    <button type="button" class="btn btn-outline-custom" data-bs-dismiss="modal">Close</button>
                                    <a href="https://book-directonline.com/properties/elevatebalibyhanginggardendirect?locale=en&amp;items[0][adults]=2&amp;items[0][children]=0&amp;items[0][infants]=0&amp;currency=IDR&amp;checkInDate=2022-10-31&amp;checkOutDate=2022-11-01&amp;trackPage=no" class="btn btn-custom">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-mobile2>