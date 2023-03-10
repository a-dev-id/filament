@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('virtual-tour.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('virtual-tour.index') }}" />
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
@endpush

@push('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('.sliders').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: ".box-arrows-1",
            prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center p-3' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
            nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center p-3' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
        });
</script>
@endpush

<x-desktop>
    <section class="vh-100">
        <img src="{{ asset('storage/' . $setting->banner_image) }}" alt="{{ $setting->title }}" class="h-100 w-100 object-fit-cover object-position-center">
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">{{ $setting->title }}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-12 text-center position-relative">
                    <div class="sliders overflow-hidden position-relative" style="z-index: 2;">

                        @foreach ($setting->CustomFields as $data)
                        <div class="mx-1">
                            <div class="position-relative">
                                <div class="ratio ratio-1x1">
                                    <img src="{{ asset('storage/'.$data->cover_image) }}" alt="{{ $setting->title . ' - ' . $data->title }}" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-100 d-flex align-items-center bg-hover-overlay">
                                    <div class="text-white w-100">
                                        <div class="h-100 px-5">
                                            {{-- <h2 class="fs-5 mb-5">{{ $data->title }}</h2> --}}
                                            <div class="text-center pt-4">
                                                <a href="{{ $data->button_link }}" target="_blank" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">{{ $data->button_text }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-4 mb-4 fs-5 fs-xl-4 text-uppercase">{{ $data->title }}</h4>
                        </div>
                        @endforeach

                    </div>
                    <div class="box-arrows-1 position-absolute bottom-50" style="left: -2.45rem; right: -2.45rem; z-index: 1;"></div>
                </div>
            </div>
        </div>
    </section>

</x-desktop>