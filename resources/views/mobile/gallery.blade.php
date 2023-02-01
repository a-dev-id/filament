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
@endpush

<x-mobile>
    <div class="container visible-xs visible-sm m-t-20">
        <div class="row">
            <div class="col-xs-6 p-0 mdi-gallery-col-1">
                <div class="mdi-gallery-1" style="background: url(https://nandinibali.com/storage/app/uploads/public/637/9ed/374/6379ed3748187429471680.jpg) no-repeat;background-size: cover;background-position: center;"></div>
            </div>
            <div class="col-xs-6 p-0">
                <div class="col-xs-12 p-0 mdi-gallery-col-2">
                    <div class="mdi-gallery-2" style="background: url(https://nandinibali.com/storage/app/uploads/public/619/dec/74d/619dec74d60cf851793444.jpg) no-repeat;background-size: cover;background-position: center;"></div>
                </div>
                <div class="col-xs-12 p-0 mdi-gallery-col-3">
                    <a href="https://nandinibali.com/storage/app/uploads/public/637/9ed/374/6379ed3748187429471680.jpg" data-fancybox="gallery" class="btn-view-photos" data-fancybox-trigger="gallery">
                        <div class="mdi-gallery-3" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(https://nandinibali.com/storage/app/uploads/public/613/ed2/1d7/613ed21d79de4660497960.jpg) no-repeat;background-size: cover;background-position: center;">PHOTO GALLERY</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden">
        <div href="https://nandinibali.com/storage/app/uploads/public/637/9ed/390/6379ed390e699097311371.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/637/9ed/3e9/6379ed3e94820903932052.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/619/dec/74d/619dec74d60cf851793444.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/619/dec/76a/619dec76a70a8498737010.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/619/dec/784/619dec7846b56900513316.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/619/dec/78d/619dec78d35a6793941479.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/619/dec/797/619dec79754f0239410789.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/619/dec/7a3/619dec7a3b8f5508237871.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/619/dec/7aa/619dec7aa8621889288250.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/1d7/613ed21d79de4660497960.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/1d8/613ed21d8612f718453533.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/1eb/613ed21eb11a1924410810.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/1ec/613ed21ec4509659004229.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/1fb/613ed21fb033a301445533.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/204/613ed2204e0eb676808855.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/20c/613ed220c155b743167304.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/214/613ed221499d1583367725.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/5a1/613ed25a1981e745416175.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/5a6/613ed25a668e8655796354.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/5b9/613ed25b919b2353751307.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/6f1/613ed26f163cf738849750.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/b1d/613ed2b1d80bd299638825.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/b24/613ed2b24d471980785966.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/d8f/613ed2d8f32ce883550473.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/d91/613ed2d915424973878348.jpg" data-fancybox="gallery"></div>
        <div href="https://nandinibali.com/storage/app/uploads/public/613/ed2/db0/613ed2db0e848296554621.jpg" data-fancybox="gallery"></div>
    </div>

    <div class="container visible-xs visible-sm">
        <div class="row">
            <div class="col-xs-12 contact-deral">
                <img class="mdi-info-photo-logo" src="https://nandinibali.com/themes/mindimedia/assets/images/green-logo.png">
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
    <div class="container visible-xs visible-sm get-here">
        <div class="row">
            <div class="room-view">
                <div style="color: black;" class="panel-group" id="accordion">
                    <!-- <div class="panel panel-default">
    			      	<div class="panel-heading">
    			        	<h4 class="panel-title">
    			          		<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">VIEW MAP <span><i class="fa fa-angle-down" style="font-size: 25px;margin-top: -4px;" aria-hidden="true"></i></span></a>
    			        	</h4>
    			      	</div>
    			      	<div id="collapse1" class="panel-collapse collapse in">
    			        	<div class="panel-body">
    			        		<div style="height: 200px; width: 100%;" id="map_canvas"></div>
    			        		<a href="https://goo.gl/maps/RBuHHuu6zRFgp11n9" target="_blank" class="btn-default-map">
    				                Get Direction
    				            </a>
    			        	</div>
    			      	</div>
    			    </div> -->
                    <!-- <div class="panel panel-default">
    			      	<div class="panel-heading">
    			        	<h4 class="panel-title">
    			          		<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">GETTING HERE<span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    			        	</h4>
    			      	</div>
    			      	<div id="collapse2" class="panel-collapse collapse">
    			        	<div class="panel-body">
    			        					        	</div>
    			      	</div>
    			    </div>
    			    <div class="panel panel-default">
    			      	<div class="panel-heading">
    			        	<h4 class="panel-title">
    			          		<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">HOTEL FACILITIES<span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
    			        	</h4>
    			      	</div>
    			      	<div id="collapse3" class="panel-collapse collapse">
    			        	<div class="panel-body">
    			        		<div class="col-xs-12 room-amn-ph">
    			        						        		</div>
    			        	</div>
    			      	</div>
    			    </div> -->
                </div>
            </div>
        </div>
    </div>
</x-mobile>