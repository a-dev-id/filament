@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mgallery') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('mgallery') }}" />
@endsection

@section('media_active', 'active')

@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<style type="text/css">
    .mdi-gallery-1 {
        height: 253px;
    }

    .mdi-gallery-2 {
        height: 125px;
    }

    .mdi-gallery-3 {
        height: 125px;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
    }

    .mdi-gallery-col-1 {
        padding-right: 3px !important;
        padding-left: 3px !important;
        padding-top: 3px !important;
    }

    .mdi-gallery-col-2 {
        padding-bottom: 3px !important;
        padding-right: 3px !important;
        padding-top: 3px !important;
    }

    .mdi-gallery-col-3 {
        padding-right: 3px !important;
    }

    .display-block {
        display: block;
    }

    .contact-deral p {
        font-size: 15px;
        margin-bottom: 20px;
    }

    .mdi-info-contact-btn {
        font-size: 16px;
        color: #666 !important;
    }

    .email-btn {
        margin-top: 20px;
        padding-bottom: 5px;
        text-decoration: underline;
    }

    .phone-btn {
        margin-bottom: 20px;
        text-decoration: underline;
    }

    .btn-view-photos {
        display: unset;
    }

    .contact-deral h1 {
        letter-spacing: -1px;
    }

    .mdi-info-photo-logo {
        width: 200px;
        margin: 20px auto;
        display: block;
    }

</style>
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" defer></script>
@endpush

<x-mobile>
    <div class="container visible-xs visible-sm m-t-20">
        <div class="row">
            <div class="col-xs-6 p-0 mdi-gallery-col-1">
                <div class="mdi-gallery-1" style="background: url(@foreach ($setting->images as $data) @if ($data->id == '14') {{asset('storage/'.$data->image)}} @endif @endforeach) no-repeat;background-size: cover;background-position: center;"></div>
            </div>
            <div class="col-xs-6 p-0">
                <div class="col-xs-12 p-0 mdi-gallery-col-2">
                    <div class="mdi-gallery-2" style="background: url(@foreach ($setting->images as $data) @if ($data->id == '13') {{asset('storage/'.$data->image)}} @endif @endforeach) no-repeat;background-size: cover;background-position: center;"></div>
                </div>
                <div class="col-xs-12 p-0 mdi-gallery-col-3">
                    <a href="@foreach ($setting->images as $data) @if ($data->id == '15') {{asset('storage/'.$data->image)}} @endif @endforeach" data-fancybox="gallery" class="btn-view-photos" data-fancybox-trigger="gallery">
                        <div class="mdi-gallery-3" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(@foreach ($setting->images as $data) @if ($data->id == '15') {{asset('storage/'.$data->image)}} @endif @endforeach) no-repeat;background-size: cover;background-position: center;">PHOTO GALLERY</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden">
        @foreach ($gallery_list as $data)
        <div href="{{asset('storage/'.$data->image)}}" data-fancybox="gallery"></div>
        @endforeach
    </div>

    <div class="container visible-xs visible-sm">
        <div class="row">
            <div class="col-xs-12 contact-deral">
                <img class="mdi-info-photo-logo" src="{{asset('images/green-logo.png')}}">
                <h1 style="margin-bottom: 5px;">Nandini Jungle Resort & Spa</h1>
                <!-- <p><strong>Please do not hesitate to contact us</strong></p> -->
                <p><i class="fa fa-map-marker"></i> Br, Jl. Susut, Buahan, Payangan, Kabupaten Gianyar, Bali</p>
                <!-- <div style="height: 150px; width: 100%;" id="map_canvas"></div> -->
                <iframe id="mobileMap" src="https://maps.google.com/maps?q=Nandini+Bali+Jungle+Resort+and+Spa&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="175" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <a class="mdi-info-contact-btn email-btn display-block" href="mailto:"><i class="fa fa-envelope"></i>info@nandinibali.com</a>
                <a class="mdi-info-contact-btn phone-btn display-block" href="tel:"><i class="fa fa-phone"></i>+62 812-3687-1170</a>
            </div>
        </div>
    </div>
</x-mobile>