@section('meta')
<meta name="title" content="{{$setting->meta_title}} | Nandini Jungle by Hanging Gardens">
<meta name="description" content="{{$setting->meta_description}}">
<title>{{$setting->meta_title}}</title>
<meta property="og:url" content="{{route('index')}}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{$setting->meta_title}} | Nandini Jungle by Hanging Gardens">
<meta property="og:description" content="{{$setting->meta_description}}">
<meta property="og:image" content="{{asset('storage/'.$setting->banner_image)}}">

<meta property="twitter:title" content="{{$setting->meta_title}} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{$setting->meta_description}}">
<meta name="twitter:image" content="{{asset('storage/'.$setting->banner_image)}}">
@endsection

@push('css')
@endpush

@push('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('.sliders').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		fade: true,
	});
</script>
@endpush

<x-desktop>
    <!-- Content -->
    <section class="vh-100">
        <img src="{{asset('storage/'.$setting->banner_image)}}" alt="{{$setting->title}}" class="h-100 w-100 object-fit-cover object-position-center">
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">{{$setting->title}}</h1>
                    {!! $setting->description !!}
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-center">

                @foreach ($villa_list as $data)
                @if ($data->is_active == '1')
                <div class="col-12 col-md-6  mb-4 ">
                    <div class="position-relative">
                        <div class="sliders">

                            @foreach ($data->images as $subdata)
                            @if ($subdata->is_active == '1')
                            <div class="ratio ratio-4x3">
                                <img src="{{asset('storage/'.$subdata->image)}}" class="w-100 object-fit-cover object-position-center" alt="{{$data->title.' - '.$subdata->title}}">
                            </div>
                            @else

                            @endif
                            @endforeach

                        </div>
                        <div class="position-absolute bottom-0 w-100 h-50 d-flex align-items-end pb-4 bg-black-white-gradient">
                            <div class="text-white d-flex justify-content-between align-items-center w-100 pe-4">
                                <div class="leftline position-relative ps-5">
                                    <div class="px-3">
                                        <h2 class="fs-4 fw-bold mb-3">{{$data->title}}</h2>
                                        <p class="small mb-0">{{ Str::limit($data->excerpt,100) }}</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="{{route('suites-villas.show',[$data->slug])}}" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else

                @endif
                @endforeach

            </div>
        </div>
    </section>
</x-desktop>