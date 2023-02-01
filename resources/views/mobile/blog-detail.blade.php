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
    .pb-3 {
        padding-bottom: 3rem;
    }

    .pt-3 {
        padding-top: 3rem;
    }

    .one-img {
        width: 100%;
        height: auto;
    }

    .blog-section img {
        width: 100%;
        height: auto;
    }

    .two-img {
        display: flex;
        justify-content: space-between;
    }

    .two-img img {
        width: 45%;
        height: auto;
    }

    .share-article {
        display: flex;
        padding-top: 10px;
        font-size: 14px;
        padding-bottom: 10px;
    }

    .share-article a {
        padding: 0 5px
    }

    .share-article i {
        font-size: 24px;
    }

    .share-article a:hover i {
        color: #cc9930;
    }

    .sticky-position {
        position: sticky;
        top: 180px;
    }

    .blog-img {
        padding-bottom: 20px;
    }

    .blog-img img {
        width: 100%;
        object-fit: cover;
    }

    .btn-primary {
        background-color: #6ea027;
        border: 0 none;
        border-radius: 0px;
        color: #fff;
        font-size: 13px;
        margin-left: auto;
        margin-right: auto;
        padding: 10px;
        cursor: pointer;
    }

</style>
@endpush

@push('js')
@endpush

<x-mobile>
    <section>
        <div class="container blog-section">
            <div class="row">
                <div class="col-xs-12">
                    <h1 style="font-size: 21px; margin-bottom: 10px; text-transform: uppercase;">{{$blog_detail->title}}</h1>
                    <div class="d-flex share-article">
                        <p>Share this article : </p>
                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//www.facebook.com/sharer/sharer.php?u={{route('mblog.show',[$blog_detail->slug])}}" target="_blank"><i style="color: #3b5998" class="fab fa-facebook-square"></i></a>
                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//twitter.com/intent/tweet?text={{route('mblog.show',[$blog_detail->slug])}}" target="_blank"><i style="color: #00acee;" class="fab fa-twitter-square"></i></a>
                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="https://api.whatsapp.com/send?text={{route('mblog.show',[$blog_detail->slug])}}" target="_blank"><i style="color: #25d366;" class="fab fa-whatsapp-square"></i></a>
                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="https://www.linkedin.com/sharing/share-offsite/?url={{route('mblog.show',[$blog_detail->slug])}}" target="_blank"><i style="color: #0e76a8;" class="fab fa-linkedin"></i></a>
                        <a href="mailto:?subject={{route('mblog.show',[$blog_detail->slug])}}" target="_blank"><i style="color: #00ffff;" class="fas fa-envelope-square" aria-hidden="true"></i></a>
                    </div>
                    <div class="blog-img">
                        <img src="{{asset('storage/'.$blog_detail->cover_image)}}">
                    </div>
                    {!! $blog_detail->description !!}
                </div>
            </div>
        </div>
    </section>


</x-mobile>