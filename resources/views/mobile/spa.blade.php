@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mspa') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('mspa') }}" />
@endsection

@push('css')
<style type="text/css">
    h1 {
        font-size: 25px;
    }

    .enq-button {
        border: 1px solid #999;
        background: #000;
        color: #fff !important;
        padding: 10px 20px;
        transition: all 500ms;
        text-transform: uppercase;
        display: table;
        margin: 0 auto;
    }

    .text-justify {
        text-align: justify;
    }

    .btn-enquire {
        width: 100%;
        background-color: #fff;
        color: #6ea027;
        border: 2px solid #6ea027;
        font-weight: 700;
        display: inline-block;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-menu {
        width: 100%;
        background-color: #6ea027;
        color: #fff;
        border: 2px solid #6ea027;
        font-weight: 700;
        display: inline-block;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .padding-top-30 {
        padding-top: 30px !important
    }

</style>
@endpush

@push('js')
@endpush

<x-mobile>
    <div class="container">
        <div class="text-center">
            <h1>{{$setting->title}}</h1>
            <p class="text-justify">
                {!! $setting->description !!}
            </p>
            <br>
            <h4>BOOK OUR SPA</h4>
            <p><i>Open daily from 09:00 until 17:00</i></p>
            <div class="padding-top-30">
                <div class="col-xs-6">
                    <a href="{{$setting->button_link}}?text=Hi, I would like to Book: *Spa*" target="_blank" style="width:100%!important;text-transform: uppercase;" class="btn-enquire">{{$setting->button_text}}</a>
                </div>
                <div class="col-xs-6">
                    @foreach ($setting->CustomFields as $data)
                    @if ($data->is_active =='1' && $data->id == '40')
                    <a target="_blank" href="{{$data->button_link}}" class="btn-menu" style="text-transform: uppercase;">{{$data->button_text}}</a>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-mobile>