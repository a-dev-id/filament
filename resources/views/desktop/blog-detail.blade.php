@section('meta')
<meta name="title" content="{{ $blog_detail->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="description" content="{{ $blog_detail->meta_description }}">
<meta name="keywords" content="{{ $setting->meta_keyword }}">
<title>{{ $blog_detail->meta_title }}</title>
<meta property="og:url" content="{{ route('blog.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $blog_detail->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta property="og:description" content="{{ $blog_detail->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $blog_detail->banner_image) }}">

<meta name="twitter:title" content="{{ $blog_detail->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $blog_detail->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $blog_detail->banner_image) }}">

<link rel="canonical" href="{{ route('blog.index') }}" />
@endsection

@push('css')
@endpush

@push('js')
@endpush

<x-desktop>
    <section class="header-image">
        <img src="{{asset('storage/'.$setting->banner_image)}}" alt="{{$setting->title}}" class="w-100 vh-100">
    </section>

    <section class="py-90 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="blog-slider mb-4">
                        <img src="{{asset('storage/'.$blog_detail->cover_image)}}" alt="{{'Blog - '.$blog_detail->title}}" class="w-100 object-fit-cover object-position-center">
                    </div>
                    <h1 class="fs-3 fw-bold text-uppercase mb-4">{{$blog_detail->title}}</h1>
                    {{-- <h6 class="text-muted mb-4">Posted on Jan 11, 2023</h6> --}}
                    {!! $blog_detail->description !!}
                    @if ($blog_detail->button_link == null)

                    @else
                    <a href="{{$blog_detail->button_link}}" target="blank" class="btn btn-primary text-uppercase py-3 fw-bold rounded-0">{{$blog_detail->button_text}}</a>
                    @endif
                </div>


                <div class="col-12 col-md-4">
                    <h1 class="fs-3 fw-bold text-uppercase mb-4">Most Recent</h1>

                    @foreach ($blog_list as $data)
                    <div class="row pb-3 border-bottom ">
                        <div class="col-12 col-md-4">
                            <div class="ratio ratio-4x3">
                                <img src="{{asset('storage/'.$data->cover_image)}}" alt="{{'Blog - '.$data->title}}" class="w-100 object-fit-cover object-position-center">
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <h1 class="fs-6 fw-bold">
                                <a href="{{route('blog.show',[$data->slug])}}" class="link-dark text-decoration-none">{{$data->title}}</a>
                            </h1>
                            {{-- <h6 class="text-muted">Posted on Jan 11, 2023</h6> --}}
                            {{Str::limit($data->excerpt, 50)}}
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

</x-desktop>