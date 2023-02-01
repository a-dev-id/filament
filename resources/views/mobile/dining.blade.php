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

        @foreach ($dining_list as $data)
        <div class="row dining-row-item">
            <div class="col-xs-12">
                <a class="d-block" href="javascript:void(0)">
                    <div style="background: url({{asset('storage/'.$data->banner_image)}}) no-repeat center; height: 230px; background-size: cover;"></div>
                </a>
            </div>
            <div class="col-xs-12 dining-item-description">
                <div class="block-content">
                    <a href="javascript:void(0)">
                        <h1>{{$data->title}}</h1>
                    </a>
                    <div class="text-justify">
                        {!! $data->description !!}
                    </div>

                    <div class="padding-top-30">
                        <div class="col-xs-6" style="float:right">
                            <a href="{{$data->button_link}}?text=Hi, I would like to Book: *Dining - {{$data->title}}*" target="_blank" style="width:100%!important; text-transform: uppercase;" class="btn-enquire">{{$data->button_text}}</a>
                        </div>
                        {{-- <div class="col-xs-6">
                            <a target="_blank" href="" class="btn-menu">VIEW MENU</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-title">
        @endforeach

    </div>
</x-mobile>