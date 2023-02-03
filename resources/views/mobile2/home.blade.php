@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mindex') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('mindex') }}" />
@endsection

@section('home_active', 'active')

@push('css')

@endpush

@push('js')

@endpush
<x-mobile2>
    <div class="wrapper ">
        <div class="position-relative">
            <div class="slider">
                <div class="ratio ratio-4x3">
                    <img src="https://elevatebali.com/storage/app/uploads/public/635/a26/129/635a26129b068712795381.jpg" class="img-fluid" alt="Elevate Bali">
                </div>
                <div class="ratio ratio-4x3">
                    <img src="https://elevatebali.com/storage/app/uploads/public/624/be5/091/624be5091f441035854308.jpg" class="img-fluid" alt="Elevate Bali">
                </div>
                <div class="ratio ratio-4x3">
                    <img src="https://elevatebali.com/storage/app/uploads/public/635/b6a/0c4/635b6a0c48702775338517.jpg" class="img-fluid" alt="Elevate Bali">
                </div>
                <div class="ratio ratio-4x3">
                    <img src="https://elevatebali.com/storage/app/uploads/public/635/b6a/065/635b6a065a1f3171115290.jpg" class="img-fluid" alt="Elevate Bali">
                </div>
                <div class="ratio ratio-4x3">
                    <img src="https://elevatebali.com/storage/app/uploads/public/624/be5/043/624be50434fed251418719.jpg" class="img-fluid" alt="Elevate Bali">
                </div>
                <div class="ratio ratio-4x3">
                    <img src="https://elevatebali.com/storage/app/uploads/public/635/b6a/02b/635b6a02b669d605988326.jpg" class="img-fluid" alt="Elevate Bali">
                </div>
                <div class="ratio ratio-4x3">
                    <img src="https://elevatebali.com/storage/app/uploads/public/624/be5/0f2/624be50f2e6b9765726059.jpg" class="img-fluid" alt="Elevate Bali">
                </div>
                <div class="ratio ratio-4x3">
                    <img src="https://elevatebali.com/storage/app/uploads/public/635/b6a/00a/635b6a00a102d119272989.jpg" class="img-fluid" alt="Elevate Bali">
                </div>
                <div class="ratio ratio-4x3">
                    <img src="https://elevatebali.com/storage/app/uploads/public/635/b6a/054/635b6a0549c15795993755.jpg" class="img-fluid" alt="Elevate Bali">
                </div>
            </div>
            <div class="button-wrapper button-wrapper-home">
                <a href="https://www.google.com/maps/dir/Current+Location/ELEVATE+BALI+by+HANGING+GARDENS+MUNDUK,+Munduk,+Kabupaten+Buleleng,+Bali" class="btn btn-outline-light border-2" target="_blank"><i class="fa fa-map-marker me-1"></i> Get Directions</a>
            </div>
            <div class="gradient-top"></div>
        </div>
        <div class="container-fluid about">
            <div class="row">
                <div class="col-12 py-3">
                    <p class="mb-0">
                        <img src="{{asset('images/green-logo.png')}}" class="float-start img-logo me-3">
                        {!! $setting->description !!}
                    </p>
                </div>
            </div>
        </div>
        <hr>
        {{-- <div class="container-fluid check-rates">
            <div class="row align-items-center my-2">
                <div class="col-7">
                    <span class="mb-0 text-uppercase">OFFICIAL WEBSITE</span>
                    <p class="mb-0 fw-bold" style="font-size:17px!important">LAST MINUTE DEALS</p>
                </div>
                <div class="col-5 button-wrapper">
                    <a href="https://elevatebali.com/m/offers" class="btn btn-custom w-100 py-2 rounded-0">Learn More</a>
                </div>
            </div>
        </div>
        <hr> --}}
        <div class="w-100 pb-2">
            <div class="container-fluid px-1">
                <div class="row g-1">
                    <div class="col-7">
                        <div class="row g-1">
                            <div class="col-12 h-90px">
                                <div class="tiles">
                                    <img src="{{asset('storage/'.$villa->banner_image)}}" alt="Elevate Bali - {{$villa->title}}">
                                    <a href="{{route('mvilla')}}">{{$villa->title}}</a>
                                </div>
                            </div>
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset('storage/'.$experience->banner_image)}}" alt="Elevate Bali - {{$experience->title}}">
                                    <a href="{{route('mexperience')}}">{{$experience->title}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row g-1">
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset('storage/'.$offer->banner_image)}}" alt="Elevate Bali - {{$offer->title}}">
                                    <a href="{{route('moffer')}}">{{$offer->title}}</a>
                                </div>
                            </div>
                            <div class="col-12 h-90px">
                                <div class="tiles">
                                    <img src="https://elevatebali.com/themes/elevate/assets/images/maps.jpg" alt="Elevate Bali Maps">
                                    <a href="https://www.google.com/maps/dir/Current+Location/ELEVATE+BALI+by+HANGING+GARDENS+MUNDUK,+Munduk,+Kabupaten+Buleleng,+Bali">Maps</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row g-1">
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset('storage/'.$dining->banner_image)}}" alt="Elevate Bali - {{$dining->title}}">
                                    <a href="{{route('mdining')}}">{{$dining->title}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="row g-1">
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset('storage/'.$wedding->banner_image)}}" alt="Elevate Bali - {{$wedding->title}}">
                                    <a href="{{route('mwedding')}}">{{$wedding->title}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="row g-1">
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset('storage/'.$blog->banner_image)}}" alt="Elevate Bali - {{$honeymoon->title}}">
                                    <a href="{{route('mhoneymoon')}}">{{$honeymoon->title}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row g-1">
                            <div class="col-12 h-150px">
                                <div class="tiles">
                                    <img src="{{asset('storage/'.$blog->banner_image)}}" alt="Elevate Bali - {{$blog->title}}">
                                    <a href="{{route('mblog')}}">{{$blog->title}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-mobile2>