@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('moffer') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('moffer') }}" />
@endsection

@section('offer_active', 'active')

@push('css')
<style type="text/css">
    .fa-angle-right {
        transform: rotate(0deg);
        transition: transform 0.25s linear;
    }

    .fa-angle-right.active {
        transform: rotate(90deg);
        transition: transform 0.25s linear;
    }

    .term-modal .panel-heading {
        background-color: #fff;
        border-color: #fff;
        color: #000;
        padding-left: 0;
        padding-top: 0;
        text-decoration: underline;
    }

    .term-modal .panel-body {
        border-top: 0 !important;
        padding-top: 0;
    }

    .mdi-term-btn {
        color: #218838 !important;
        font-size: 16px;
    }

    .mdi-offer-list {
        margin-left: 23px;
    }

    .mdi-offer-list li {
        padding-bottom: 5px;
    }

    .mdi-offer-list li i.fa-li.fa-lg {
        font-size: 16px;
        top: 4px;
    }

    .term-modal .mdi-offer-list {
        margin-left: 12px;
    }

    .padding-top-20 {
        padding-top: 20px
    }

    .padding-bottom-20 {
        padding-bottom: 20px;
    }

    .btn-wa-exp {
        background-color: #26e579 !important;
        color: white !important;
    }

</style>
@endpush

@push('js')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('a').on('click', function(e) {
	  $(this).find('[class*="angle"]').toggleClass('fa-angle-down fa-angle-up')
	});

	$('.go').on('click', function(e) {
	  $(this).css({
	    transform: 'rotate(0deg)',
	    transition: 'transform .5s'
	  });
	});
</script>
@endpush

<x-mobile>
    <div class="container visible-xs visible-sm">
        <div class="row">
            <div class="background-home">
                <div class="col-md-12">
                    <div class="benefit-mobile">
                        <h1>Book Direct Benefit</h1>
                        <!-- <h2>Book on Official Site &amp; Get More Benefits</h2> -->
                        <ul class="fa-ul">
                            <li><i class="fa-li fa fa-check-circle"></i>Best online rate guaranteed</li>
                            <li><i class="fa-li fa fa-check-circle"></i>Free wi-fi in all rooms</li>
                            <li><i class="fa-li fa fa-check-circle"></i>Secure transactions</li>
                            <li><i class="fa-li fa fa-check-circle"></i>No hidden fees</li>
                            <li><i class="fa-li fa fa-check-circle"></i>Instant confirmation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 15px;" class="room-view">
        <div class="container">
            <div class="row">
                <div style="padding: 0px 6px;" class="col-xs-12">
                    <div class="panel-group" id="accordion">

                        @foreach ($offer_list as $data)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a id="btn-k" data-toggle="collapse" data-parent="#accordion" href="#{{$data->slug}}">{{$data->title}}<span><i id="icon-kj" class="fa fa-angle-up  go" aria-hidden="true" style="font-size: 25px;margin-top: -4px;"></i></span></a>
                                </h4>
                            </div>
                            <div id="{{$data->slug}}" class="panel-collapse collapse @if ($loop->first) in @else @endif">
                                <div class="panel-body">
                                    <div class="slide-room">
                                        <div id="{{$data->slug.$data->id}}" class="carousel-fade slide carousel" data-ride="carousel">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner text-center">
                                                @foreach ($data->images as $subdata)
                                                @if ($subdata->is_active == '1')
                                                <div class="item @if ($loop->first) active @else @endif">
                                                    <div style="background:url({{asset('storage/'.$subdata->image)}}) no-repeat;background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-position: center;height: 100%;"></div>
                                                </div>
                                                @else
                                                @endif
                                                @endforeach
                                            </div>
                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#{{$data->slug.$data->id}}" data-slide="prev">
                                                <span class="glyphicon glyphicon-menu-left im-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#{{$data->slug.$data->id}}" data-slide="next">
                                                <span class="glyphicon glyphicon-menu-right im-chevron-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clt-bth"></div>
                                    <div class="offer-promo">
                                        <div class="intro-less-box padding-top-20 padding-bottom-20">

                                            <b style="font-size: 18px; ">@if ($data->price == null) @else {{$data->price.' / '.$data->per}} @endif</b>
                                            <p style="margin-top: 10px">
                                                {!! $data->description !!}
                                            </p>

                                        </div>
                                        <div class="row">
                                            <div style="padding-right: 5px" class="col-xs-6">
                                            </div>
                                            <div style="padding-left: 5px" class="col-xs-6">
                                                <a href="{{$data->button_link}}?text=Hi, I would like to Book: *Experience - {{$data->title}}*" target="_blank" style="width:100%!important; text-transform: uppercase;" class="btn-default def-promo">{{$data->button_text}}</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-mobile>