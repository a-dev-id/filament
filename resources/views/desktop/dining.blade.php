@section('meta')
    <meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta name="description" content="{{ $setting->meta_description }}">
    <meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
    <title>{{ $setting->meta_title }}</title>
    <meta property="og:url" content="{{ route('dining.index') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta property="og:description" content="{{ $setting->meta_description }}">
    <meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

    <meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
    <meta name="twitter:description" content="{{ $setting->meta_description }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

    <link rel="canonical" href="{{ route('dining.index') }}" />
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
@endpush

@push('js')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $('.slider').slick({
            fade: true,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
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

    <section>
        @foreach ($dining_list as $key => $data)
            @if ($key % 2 == 0)
                <div class="py-5 bg-light-gray">
                @else
                    <div class="py-5">
            @endif
            <div class="container">
                <div class="row">

                    @if ($key % 2 == 0)
                        <div class="col-12 col-md-5 d-flex flex-column justify-content-between order-1">
                        @else
                            <div class="col-12 col-md-5 d-flex flex-column justify-content-between order-2">
                    @endif
                    <div class="pe-3">
                        <h2 class="text-uppercase mb-4">{{ $data->title }}</h2>
                        {!! $data->description !!}
                    </div>
                    <div class="pe-3">
                        <form id="enquiryForm-10" method="post" action="https://nandinibali.com/enquiry" class="w-100">
                            <input type="hidden" name="package_name" value="{{ $data->title }}">
                            <input type="hidden" name="package_excerpt" value="{{ $data->excerpt }}">
                            <input type="hidden" name="package_image" value="{{ asset('storage/' . $setting->banner_image) }}">
                            <button type="submit" class="btn btn-sm btn-primary text-uppercase py-2 px-3 rounded-0">{{ $data->button_text }}</button>
                        </form>
                    </div>
                </div>

                @if ($key % 2 == 0)
                    <div class="col-12 col-md-7 order-2">
                    @else
                        <div class="col-12 col-md-7 order-1">
                @endif
                <div class="h-100 slider">

                    @foreach ($data->images as $subdata)
                        @if ($subdata->is_active == '1')
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('storage/' . $subdata->image) }}" alt="{{ $setting->meta_title . ' - ' . $subdata->title }}" class="w-100 object-fit-cover object-position-center">
                            </div>
                        @else
                        @endif
                    @endforeach

                </div>
            </div>
            </div>
            </div>
            </div>
        @endforeach
    </section>
</x-desktop>
