@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('m.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('m.index') }}" />
@endsection

@push('css')
@endpush

@push('js')
@endpush
<x-mobile>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 p-t-15 p-b-15 intro-mobile">
                <div class="intro-less-box">
                    <img style="float: left;height: 80px;margin-right: 10px;" src="{{asset('images/nandini-icon.png')}}">
                    <p style="text-align: justify;">A dramatic hideaway nestled in the heart of rainforest Payangan - Ubud, Nandini Jungle Resort and Spa is a captivating destination resort that blends smoothly with its natural surroundings, Situated on the mystical Ayung River, each villa enjoys the embrace of the lush rainforest and offers stunning views from private balcony of the breathtaking Ayung gorge, Reconnect with nature, rekindle your spirit and reignite your Soul in this serene nature haven </p>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container check-rates-container">
        <div class="row">
            <div class="col-xs-7 check-rates-col-price">
                <div class="col-price-item">
                    <span class="check-rates-price-span">OFFICIAL WEBSITE</span>
                    <p class="check-rates-price" style="font-size: 17px!important;">LAST MINUTE DEALS</p>
                </div>
            </div>
            <div class="col-xs-5 check-rates-col-btn">
                <div class="col-price-item" style="color: #fff; width: 100%;">
                    <a href="https://nandinibali.com/m/offer" class="check-rates-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container m-t-5">
        <div class="row">
            <div class="col-xs-7 col-image-masonry p-l-5">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="https://nandinibali.com/m/accommodation" class="d-block">
                            <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(https://nandinibali.com/storage/app/uploads/public/613/d93/1f6/613d931f6f1ea768188253.jpg) center no-repeat" class="villas-image-mry">
                                <h4 class="title-mry">Accommodation</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 p-t-5">
                        <a href="https://nandinibali.com/m/experiences" class="d-block">
                            <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(https://nandinibali.com/storage/app/uploads/public/613/d97/394/613d973943727029908570.jpg) center no-repeat" class="info-hotel-image-mry">
                                <h4 class="title-mry">Experiences</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-5 col-image-masonry p-r-5">
                <div class="row m-0">
                    <div class="col-xs-12 p-r-0 p-l-0">
                        <a href="https://nandinibali.com/m/offer" class="d-block">
                            <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(https://nandinibali.com/storage/app/uploads/public/615/543/189/6155431899321602764895.jpg) center no-repeat" class="info-hotel-image-mry">
                                <h4 class="title-mry">Special Offers</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 p-t-5 p-r-0 p-l-0">
                        <a href="https://g.page/nandinijungleresort?share" target="_blank" class="d-block">
                            <div style="background: #5d940f" class="villas-image-mry"><i class="fa fa-map-marker m-r-5"></i>
                                <h4 class="title-mry"> Map</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-5 col-image-masonry p-t-5 p-r-2_5">
                <div class="row m-0">
                    <div class="col-xs-12 p-r-0 p-l-2_5">
                        <a href="https://nandinibali.com/m/dining" class="d-block">
                            <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(https://nandinibali.com/storage/app/uploads/public/613/e00/ec4/613e00ec4ecc4735986800.jpg) center no-repeat" class="info-hotel-image-mry-horizontal">
                                <h4 class="title-mry">Dining</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-7 col-image-masonry p-t-5 p-r-5">
                <div class="row m-0">
                    <div class="col-xs-12 p-r-0 p-l-0">
                        <a href="https://nandinibali.com/m/spa" class="d-block">
                            <div style=" background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(https://nandinibali.com/storage/app/uploads/public/62d/4ee/751/62d4ee7514987199127417.jpg) center no-repeat" class="info-hotel-image-mry">
                                <h4 class="title-mry">SPA</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-mobile>