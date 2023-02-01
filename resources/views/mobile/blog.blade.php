@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mblog') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('mblog') }}" />
@endsection

@section('media_active', 'active')

@push('css')
<style>
    .page-link {
        color: #000000;
    }

    .row {
        margin: 0
    }

    .border-bottom {
        border-bottom: 1px solid;
    }

    .border-top {
        border-top: 1px solid;
    }

    .gold-text-btn {
        color: #cc9930;
    }

    .justify-content-center {
        justify-content: center !important;
    }

    .text-uppercase {
        text-transform: uppercase;
    }

    .pagination {
        display: flex;
        padding-left: 0;
        list-style: none;
    }

    .mobile-article img {
        width: 100%;
        height: 140px;
        object-fit: cover;
    }

    .mobile-article h2 {
        font-size: 14px;
        margin: 0;
    }

    .mobile-article-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 110px;
    }

    .mobile-article-body p {
        color: #6ea027;
    }

    .object-fit-cover {
        object-fit: cover;
    }

    .object-position-center {
        object-position: center;
    }

    .pagination>li>a:focus,
    .pagination>li>a:hover,
    .pagination>li>span:focus,
    .pagination>li>span:hover {
        color: #ce9c35;
    }

    .pagination>li>a {
        color: #6ea027;
    }

    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        background-color: #6ea027;
        border-color: #6ea027;
    }

</style>
@endpush

@push('js')
@endpush

<x-mobile>
    <section style="padding-top: 30px" class="mobile-article">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    @foreach ($blog_list as $data)
                    <div style="padding-top: 20px; padding-bottom: 20px" class="row border-top  py-3">
                        <div class="row">
                            <a href="{{route('mblog.show',[$data->slug])}}">
                                <div class="col-xs-5">
                                    <img src="{{asset('storage/'.$data->cover_image)}}">
                                </div>
                                <div class="col-xs-7 mobile-article-body">
                                    <h2 class="text-uppercase">{{$data->title}}</h2>
                                    <div style="margin-top:8px; margin-bottom:8px;">{{Str::limit($data->excerpt, 70)}}</div>
                                    <p style="margin: 0">Read More</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach

                    <div class="row mt-3">
                        <div class="col-12 m-auto">
                            {{ $blog_list->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-mobile>