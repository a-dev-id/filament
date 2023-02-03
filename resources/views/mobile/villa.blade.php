@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mvilla') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Nandini Jungle by Hanging Gardens">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('mvilla') }}" />
@endsection

@push('css')
<style type="text/css">
    .amenities--icon--room {
        width: 20px !important;
    }

    .fa-angle-right {
        transform: rotate(0deg);
        transition: transform 0.25s linear;
    }

    .fa-angle-right.active {
        transform: rotate(90deg);
        transition: transform 0.25s linear;
    }

    .mdi-room-info-btn {
        border: 2px solid;
        font-size: 9px;
        padding: 5px 10px;
        width: 90px;
    }

    .panel.panel-default {
        border: .5px solid transparent;
    }

    .mdi-room-title {
        font-size: 20px;
    }

</style>
@endpush

@push('js')
@endpush

<x-mobile>
    <div class="container visible-xs visible-sm">
        <div class="bck-room">
            <div class="room-generate">
                <div class="row">
                    <div class="col-xs-12 slide-room">

                        <div id="garden-view-royal-suite-target" class="carousel-fade slide carousel" data-ride="carousel" data-interval="3000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner text-center">
                                <div class="item active">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e4/e44/6378e4e449a1f084511274.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e5/178/6378e517883d0039349919.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e5/1c5/6378e51c54362743181219.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e5/4bf/6378e54bf3c39358889146.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e5/543/6378e55433ae9409592886.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#garden-view-royal-suite-target" data-slide="prev">
                                <span class="glyphicon glyphicon-menu-left im-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#garden-view-royal-suite-target" data-slide="next">
                                <span class="glyphicon glyphicon-menu-right im-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="m-t-10 mdi-room-title">Garden View Royal Suite</h3>
                    </div>
                    <div class="col-xs-4">
                        <a class="m-t-10 mdi-room-info-btn" data-toggle="collapse" data-parent="#accordion0" href="#collapse20">ROOM INFO <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="room-view">
                <div class="row">
                    <div style="padding: 0px 6px;" class="col-xs-12">
                        <div style="color: black;" class="panel-group" id="accordion0">
                            <div class="panel panel-default">
                                <div id="collapse20" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="col-xs-12 room-amn m-b-20">

                                            <h4>Villa Facilities</h4>
                                            <ul class="padding-left-20">

                                                <li>Size: 89 m² (958 ft²)</li>

                                                <li>2 Adults 1 Child</li>

                                                <li>In-room coffee and/or tea facilities</li>

                                                <li>Private Minibar</li>

                                                <li>Luxury eco-friendly natural amenities</li>

                                                <li>Flat-screen Smart TV</li>

                                                <li>Working Desk</li>

                                                <li>Free Wi-Fi</li>

                                                <li>Choice of pillows</li>

                                                <li>King size bed</li>

                                                <li>Bathtub and Separate Shower</li>

                                                <li>Baby cot allowed</li>

                                                <li>Separate Toilet</li>
                                            </ul>

                                        </div>

                                        <div class="clr-bth"></div>
                                        <hr>
                                        <div class="container-price">
                                            <a href="https://book-directonline.com/properties/nandinibalidirect" target="_blank" class="btn-default">BOOK THIS VILLAS</a>
                                            <div class="assis-home">
                                                <a style="border-bottom: 1px solid white;" data-toggle="modal" data-target="#myassist"><i class="fa fa-question-circle" aria-hidden="true"></i> CLICK HERE FOR MORE ASSISTANCE</a>
                                            </div>
                                            <div class="contain-asis">
                                                <div class="intro-less-box">
                                                    <!-- <div>
													<p>Villa Size:  | Bed Type:  | Occupancy: </p>
												</div>
												<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <!-- The Garden Royal Suites are elegantly decorated and filled with luxurious furnishing. These opulent suites feature a master b... <a href="javascript:void(0);" class="read-more-mobile">Read More</a> -->
                                                    <p>The Garden Royal Suites are elegantly decorated and filled with luxurious furnishing. These opulent suites feature a master bedroom with a spacious terrace overlooking to the lush and green garden view. The signature bathroom makes the most of its space, with bathroom features including an outdoor bath and rain shower, complemented by a dressing facility. Wake up to the sounds of birds chirping cheerfully in the morning and in the end of the day sitting on the terrace overlooking the lush garden. Garden View Royal Suite offers a feeling of the real serenity.</p>
                                                </div>
                                                <div class="intro-more-box" style="display: none;">
                                                    <!-- <div>
					        						<p>Villa Size:  | Bed Type:  | Occupancy: </p>
					        					</div>
					        					<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <p>The Garden Royal Suites are elegantly decorated and filled with luxurious furnishing. These opulent suites feature a master bedroom with a spacious terrace overlooking to the lush and green garden view. The signature bathroom makes the most of its space, with bathroom features including an outdoor bath and rain shower, complemented by a dressing facility. Wake up to the sounds of birds chirping cheerfully in the morning and in the end of the day sitting on the terrace overlooking the lush garden. Garden View Royal Suite offers a feeling of the real serenity.</p>
                                                    <a href="#" class="read-less-mobile">Read Less</a>
                                                </div>
                                            </div>
                                            <!-- <a href="https://nandinibali.com/m/enquire" class="btn-default">SUBMIT ENQUIRY</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr-bth"></div>
        <div class="bck-room">
            <div class="room-generate">
                <div class="row">
                    <div class="col-xs-12 slide-room">

                        <div id="jungleview-royal-suite-target" class="carousel-fade slide carousel" data-ride="carousel" data-interval="3000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner text-center">
                                <div class="item active">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e7/825/6378e7825eb80086919609.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e7/0bb/6378e70bbef1f448433662.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e7/39e/6378e739effe8566195590.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e7/64e/6378e764e9217574690068.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e7/611/6378e761177eb698614443.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#jungleview-royal-suite-target" data-slide="prev">
                                <span class="glyphicon glyphicon-menu-left im-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#jungleview-royal-suite-target" data-slide="next">
                                <span class="glyphicon glyphicon-menu-right im-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="m-t-10 mdi-room-title">Jungle View Royal Suite</h3>
                    </div>
                    <div class="col-xs-4">
                        <a class="m-t-10 mdi-room-info-btn" data-toggle="collapse" data-parent="#accordion1" href="#collapse21">ROOM INFO <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="room-view">
                <div class="row">
                    <div style="padding: 0px 6px;" class="col-xs-12">
                        <div style="color: black;" class="panel-group" id="accordion1">
                            <!-- <div class="panel panel-default">
					      	<div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion1" href="#collapse11">VIEW ROOM <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div>
					      	<div id="collapse11" class="panel-collapse collapse in">
					        	<div class="panel-body">
					        							        	</div>
					      	</div>
					    </div> -->
                            <div class="panel panel-default">
                                <!-- <div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion1" href="#collapse21">ROOM AMENITIES <span><i class="fa fa-angle-right" style="font-size: 25px;margin-top: -4px;" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div> -->
                                <div id="collapse21" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="col-xs-12 room-amn m-b-20">

                                            <h4>Villa Facilities</h4>
                                            <ul class="padding-left-20">

                                                <li>Size: 89 m² (958 ft²)</li>

                                                <li>2 Adults 1 Child</li>

                                                <li>In-room coffee and/or tea facilities</li>

                                                <li>Private Minibar</li>

                                                <li>Luxury eco-friendly natural amenities</li>

                                                <li>Flat-screen Smart TV</li>

                                                <li>Working Desk</li>

                                                <li>Free Wi-Fi</li>

                                                <li>Choice of pillows</li>

                                                <li>King size bed</li>

                                                <li>Bathtub and Separate Shower</li>

                                                <li>Baby cot allowed</li>

                                                <li>Separate Toilet</li>
                                            </ul>

                                        </div>

                                        <!-- <div class="col-xs-12 room-amn">
					        			<h4>Villa Benefits</h4>
					        			<ul class="fa-ul">
					        									        		</ul>
					        		</div> -->

                                        <div class="clr-bth"></div>
                                        <hr>
                                        <div class="container-price">
                                            <a href="https://book-directonline.com/properties/nandinibalidirect" target="_blank" class="btn-default">BOOK THIS VILLAS</a>
                                            <div class="assis-home">
                                                <a style="border-bottom: 1px solid white;" data-toggle="modal" data-target="#myassist"><i class="fa fa-question-circle" aria-hidden="true"></i> CLICK HERE FOR MORE ASSISTANCE</a>
                                            </div>
                                            <div class="contain-asis">
                                                <div class="intro-less-box">
                                                    <!-- <div>
													<p>Villa Size:  | Bed Type:  | Occupancy: </p>
												</div>
												<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <!-- Our Jungle Royal Suites effortlessly combine the luxury of five star facilities with the raw beauty of the rainforest. Exclus... <a href="javascript:void(0);" class="read-more-mobile">Read More</a> -->
                                                    <p>Our Jungle Royal Suites effortlessly combine the luxury of five star facilities with the raw beauty of the rainforest. Exclusive and exceptional, there are 16 spacious suites ranging in size from 80 until 120 square metres.</p>
                                                    <p>The Jungle Royal Suites are elegantly decorated and filled with luxurious furnishings. These opulent suites feature a master bedroom with a spacious terrace overlooking a stunning jungle and garden view. Built with creativity and a quality of workmanship that highlights the beauty of this area.</p>
                                                    <p>The signature bathroom makes the most of its space, with bathroom features including an outdoor bath and rain shower, complemented by a dressing facility.</p>
                                                </div>
                                                <div class="intro-more-box" style="display: none;">
                                                    <!-- <div>
					        						<p>Villa Size:  | Bed Type:  | Occupancy: </p>
					        					</div>
					        					<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <p>Our Jungle Royal Suites effortlessly combine the luxury of five star facilities with the raw beauty of the rainforest. Exclusive and exceptional, there are 16 spacious suites ranging in size from 80 until 120 square metres.</p>
                                                    <p>The Jungle Royal Suites are elegantly decorated and filled with luxurious furnishings. These opulent suites feature a master bedroom with a spacious terrace overlooking a stunning jungle and garden view. Built with creativity and a quality of workmanship that highlights the beauty of this area.</p>
                                                    <p>The signature bathroom makes the most of its space, with bathroom features including an outdoor bath and rain shower, complemented by a dressing facility.</p>
                                                    <a href="#" class="read-less-mobile">Read Less</a>
                                                </div>
                                            </div>
                                            <!-- <a href="https://nandinibali.com/m/enquire" class="btn-default">SUBMIT ENQUIRY</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr-bth"></div>
        <div class="bck-room">
            <div class="room-generate">
                <div class="row">
                    <div class="col-xs-12 slide-room">

                        <div id="jungle-view-villa-target" class="carousel-fade slide carousel" data-ride="carousel" data-interval="3000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner text-center">
                                <div class="item active">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e8/a09/6378e8a09a0ed005649383.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e8/aa6/6378e8aa62307025838896.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e8/aa7/6378e8aa76dd7775186680.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e8/9fc/6378e89fcafbd949054872.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e8/ae4/6378e8ae4bd60463725463.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#jungle-view-villa-target" data-slide="prev">
                                <span class="glyphicon glyphicon-menu-left im-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#jungle-view-villa-target" data-slide="next">
                                <span class="glyphicon glyphicon-menu-right im-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="m-t-10 mdi-room-title">Jungle View Villa</h3>
                    </div>
                    <div class="col-xs-4">
                        <a class="m-t-10 mdi-room-info-btn" data-toggle="collapse" data-parent="#accordion2" href="#collapse22">ROOM INFO <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="room-view">
                <div class="row">
                    <div style="padding: 0px 6px;" class="col-xs-12">
                        <div style="color: black;" class="panel-group" id="accordion2">
                            <!-- <div class="panel panel-default">
					      	<div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion2" href="#collapse12">VIEW ROOM <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div>
					      	<div id="collapse12" class="panel-collapse collapse in">
					        	<div class="panel-body">
					        							        	</div>
					      	</div>
					    </div> -->
                            <div class="panel panel-default">
                                <!-- <div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion2" href="#collapse22">ROOM AMENITIES <span><i class="fa fa-angle-right" style="font-size: 25px;margin-top: -4px;" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div> -->
                                <div id="collapse22" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="col-xs-12 room-amn m-b-20">

                                            <h4>Villa Facilities</h4>
                                            <ul class="padding-left-20">

                                                <li>Size: 49 m² (527 ft²)</li>

                                                <li>2 Adults 1 Child</li>

                                                <li>In-room coffee and/or tea facilities</li>

                                                <li>Private Minibar</li>

                                                <li>Luxury eco-friendly natural amenities</li>

                                                <li>Flat-screen Smart TV</li>

                                                <li>Working Desk</li>

                                                <li>Free Wi-Fi</li>

                                                <li>Choice of pillows</li>

                                                <li>King size bed</li>

                                                <li>Bathtub and Separate Shower</li>

                                                <li>Balcony with cozy Daybed</li>

                                                <li>Baby cot allowed</li>

                                                <li>Separate Toilet</li>
                                            </ul>

                                        </div>

                                        <!-- <div class="col-xs-12 room-amn">
					        			<h4>Villa Benefits</h4>
					        			<ul class="fa-ul">
					        									        		</ul>
					        		</div> -->

                                        <div class="clr-bth"></div>
                                        <hr>
                                        <div class="container-price">
                                            <a href="https://book-directonline.com/properties/nandinibalidirect" target="_blank" class="btn-default">BOOK THIS VILLAS</a>
                                            <div class="assis-home">
                                                <a style="border-bottom: 1px solid white;" data-toggle="modal" data-target="#myassist"><i class="fa fa-question-circle" aria-hidden="true"></i> CLICK HERE FOR MORE ASSISTANCE</a>
                                            </div>
                                            <div class="contain-asis">
                                                <div class="intro-less-box">
                                                    <!-- <div>
													<p>Villa Size:  | Bed Type:  | Occupancy: </p>
												</div>
												<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <!-- The Jungle View Villa offers stunning sunrise views over the jungle. Being exactly the same size as Panoramic View Villa, Jun... <a href="javascript:void(0);" class="read-more-mobile">Read More</a> -->
                                                    <p>The Jungle View Villa offers stunning sunrise views over the jungle. Being exactly the same size as Panoramic View Villa, Jungle View Villa is also equipped with large outdoor living areas to create a sense of grandeur while maintaining a relaxed ambience.</p>
                                                    <p>Experience the sensation of luxury seclusions from the outside world.</p>
                                                    <p>Modelled on a traditional Balinese Village, Jungle View Villa is truly a Balinese experience.</p>
                                                </div>
                                                <div class="intro-more-box" style="display: none;">
                                                    <!-- <div>
					        						<p>Villa Size:  | Bed Type:  | Occupancy: </p>
					        					</div>
					        					<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <p>The Jungle View Villa offers stunning sunrise views over the jungle. Being exactly the same size as Panoramic View Villa, Jungle View Villa is also equipped with large outdoor living areas to create a sense of grandeur while maintaining a relaxed ambience.</p>
                                                    <p>Experience the sensation of luxury seclusions from the outside world.</p>
                                                    <p>Modelled on a traditional Balinese Village, Jungle View Villa is truly a Balinese experience.</p>
                                                    <a href="#" class="read-less-mobile">Read Less</a>
                                                </div>
                                            </div>
                                            <!-- <a href="https://nandinibali.com/m/enquire" class="btn-default">SUBMIT ENQUIRY</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr-bth"></div>
        <div class="bck-room">
            <div class="room-generate">
                <div class="row">
                    <div class="col-xs-12 slide-room">

                        <div id="panoramic-view-villa-target" class="carousel-fade slide carousel" data-ride="carousel" data-interval="3000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner text-center">
                                <div class="item active">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8ea/2a1/6378ea2a1a9ec330025018.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e9/da5/6378e9da5bfbe381086872.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e9/c74/6378e9c742356662258967.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e9/ba5/6378e9ba5076e740423076.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8e9/e0d/6378e9e0de8a2929333257.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#panoramic-view-villa-target" data-slide="prev">
                                <span class="glyphicon glyphicon-menu-left im-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#panoramic-view-villa-target" data-slide="next">
                                <span class="glyphicon glyphicon-menu-right im-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="m-t-10 mdi-room-title">Panoramic View Villa</h3>
                    </div>
                    <div class="col-xs-4">
                        <a class="m-t-10 mdi-room-info-btn" data-toggle="collapse" data-parent="#accordion3" href="#collapse23">ROOM INFO <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="room-view">
                <div class="row">
                    <div style="padding: 0px 6px;" class="col-xs-12">
                        <div style="color: black;" class="panel-group" id="accordion3">
                            <!-- <div class="panel panel-default">
					      	<div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion3" href="#collapse13">VIEW ROOM <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div>
					      	<div id="collapse13" class="panel-collapse collapse in">
					        	<div class="panel-body">
					        							        	</div>
					      	</div>
					    </div> -->
                            <div class="panel panel-default">
                                <!-- <div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion3" href="#collapse23">ROOM AMENITIES <span><i class="fa fa-angle-right" style="font-size: 25px;margin-top: -4px;" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div> -->
                                <div id="collapse23" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="col-xs-12 room-amn m-b-20">

                                            <h4>Villa Facilities</h4>
                                            <ul class="padding-left-20">

                                                <li>Size: 48 m² (517 ft²)</li>

                                                <li>2 Adults 1 Child</li>

                                                <li>In-room coffee and/or tea facilities</li>

                                                <li>Private Minibar</li>

                                                <li>Luxury eco-friendly natural amenities</li>

                                                <li>Flat-screen Smart TV</li>

                                                <li>Working Desk</li>

                                                <li>Free Wi-Fi</li>

                                                <li>Choice of pillows</li>

                                                <li>King size bed</li>

                                                <li>Bathtub and Separate Shower</li>

                                                <li>Balcony with cozy Daybed</li>

                                                <li>Baby cot allowed</li>

                                                <li>Separate Toilet</li>
                                            </ul>

                                        </div>

                                        <!-- <div class="col-xs-12 room-amn">
					        			<h4>Villa Benefits</h4>
					        			<ul class="fa-ul">
					        									        		</ul>
					        		</div> -->

                                        <div class="clr-bth"></div>
                                        <hr>
                                        <div class="container-price">
                                            <a href="https://book-directonline.com/properties/nandinibalidirect" target="_blank" class="btn-default">BOOK THIS VILLAS</a>
                                            <div class="assis-home">
                                                <a style="border-bottom: 1px solid white;" data-toggle="modal" data-target="#myassist"><i class="fa fa-question-circle" aria-hidden="true"></i> CLICK HERE FOR MORE ASSISTANCE</a>
                                            </div>
                                            <div class="contain-asis">
                                                <div class="intro-less-box">
                                                    <!-- <div>
													<p>Villa Size:  | Bed Type:  | Occupancy: </p>
												</div>
												<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <!-- Our Panoramic View Villa stands with stunning and uninterrupted views over the river gorge and a feeling of luxurious seclusi... <a href="javascript:void(0);" class="read-more-mobile">Read More</a> -->
                                                    <p>Our Panoramic View Villa stands with stunning and uninterrupted views over the river gorge and a feeling of luxurious seclusions from the outside world.</p>
                                                    <p>Inspired by Balinese architecture, Panoramic View Villa stands on luxury teak floors as its foundation for its comfort. At an average 48 square metres, each villa is furnished with canopied king beds, spacious bathroom and a private balcony with the perfect sight of the heart of Ubud's rainforest.</p>
                                                </div>
                                                <div class="intro-more-box" style="display: none;">
                                                    <!-- <div>
					        						<p>Villa Size:  | Bed Type:  | Occupancy: </p>
					        					</div>
					        					<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <p>Our Panoramic View Villa stands with stunning and uninterrupted views over the river gorge and a feeling of luxurious seclusions from the outside world.</p>
                                                    <p>Inspired by Balinese architecture, Panoramic View Villa stands on luxury teak floors as its foundation for its comfort. At an average 48 square metres, each villa is furnished with canopied king beds, spacious bathroom and a private balcony with the perfect sight of the heart of Ubud's rainforest.</p>
                                                    <a href="#" class="read-less-mobile">Read Less</a>
                                                </div>
                                            </div>
                                            <!-- <a href="https://nandinibali.com/m/enquire" class="btn-default">SUBMIT ENQUIRY</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr-bth"></div>
        <div class="bck-room">
            <div class="room-generate">
                <div class="row">
                    <div class="col-xs-12 slide-room">

                        <div id="sunrise-view-villa-target" class="carousel-fade slide carousel" data-ride="carousel" data-interval="3000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner text-center">
                                <div class="item active">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8f0/04a/6378f004ae06f526686536.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8f0/108/6378f01081218218764322.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8f0/0d9/6378f00d90a3d524938349.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8f0/02d/6378f002dd906835928201.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#sunrise-view-villa-target" data-slide="prev">
                                <span class="glyphicon glyphicon-menu-left im-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#sunrise-view-villa-target" data-slide="next">
                                <span class="glyphicon glyphicon-menu-right im-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="m-t-10 mdi-room-title">Sunrise View Villa</h3>
                    </div>
                    <div class="col-xs-4">
                        <a class="m-t-10 mdi-room-info-btn" data-toggle="collapse" data-parent="#accordion4" href="#collapse24">ROOM INFO <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="room-view">
                <div class="row">
                    <div style="padding: 0px 6px;" class="col-xs-12">
                        <div style="color: black;" class="panel-group" id="accordion4">
                            <!-- <div class="panel panel-default">
					      	<div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion4" href="#collapse14">VIEW ROOM <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div>
					      	<div id="collapse14" class="panel-collapse collapse in">
					        	<div class="panel-body">
					        							        	</div>
					      	</div>
					    </div> -->
                            <div class="panel panel-default">
                                <!-- <div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion4" href="#collapse24">ROOM AMENITIES <span><i class="fa fa-angle-right" style="font-size: 25px;margin-top: -4px;" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div> -->
                                <div id="collapse24" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="col-xs-12 room-amn m-b-20">

                                            <h4>Villa Facilities</h4>
                                            <ul class="padding-left-20">

                                                <li>Size: 48 m² (517 ft²)</li>

                                                <li>2 Adults 1 Child</li>

                                                <li>In-room coffee and/or tea facilities</li>

                                                <li>Private Minibar</li>

                                                <li>Luxury eco-friendly natural amenities</li>

                                                <li>Flat-screen Smart TV</li>

                                                <li>Working Desk</li>

                                                <li>Free Wi-Fi</li>

                                                <li>Choice of pillows</li>

                                                <li>King size bed</li>

                                                <li>Bathtub and Separate Shower</li>

                                                <li>Balcony with cozy Daybed</li>

                                                <li>Baby cot allowed</li>

                                                <li>Separate Toilet</li>
                                            </ul>

                                        </div>

                                        <!-- <div class="col-xs-12 room-amn">
					        			<h4>Villa Benefits</h4>
					        			<ul class="fa-ul">
					        									        		</ul>
					        		</div> -->

                                        <div class="clr-bth"></div>
                                        <hr>
                                        <div class="container-price">
                                            <a href="https://book-directonline.com/properties/nandinibalidirect" target="_blank" class="btn-default">BOOK THIS VILLAS</a>
                                            <div class="assis-home">
                                                <a style="border-bottom: 1px solid white;" data-toggle="modal" data-target="#myassist"><i class="fa fa-question-circle" aria-hidden="true"></i> CLICK HERE FOR MORE ASSISTANCE</a>
                                            </div>
                                            <div class="contain-asis">
                                                <div class="intro-less-box">
                                                    <!-- <div>
													<p>Villa Size:  | Bed Type:  | Occupancy: </p>
												</div>
												<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <!-- Surrounded by the serene Rainforest atmosphere, the Sunrise View Villa offers the majestic golden sunrise streaming into the ... <a href="javascript:void(0);" class="read-more-mobile">Read More</a> -->
                                                    <p>Surrounded by the serene Rainforest atmosphere, the Sunrise View Villa offers the majestic golden sunrise streaming into the room. The elegantly appointed 48 sqm Sunrise View Villa features a large outdoor living, canopied king beds, spacious bathroom and a private balcony with the perfect sight of the heart of Ubud's rainforest. Experience the essences of Bali, its natural beauty and warm hospitality perfectly blend in every corner of the room</p>
                                                </div>
                                                <div class="intro-more-box" style="display: none;">
                                                    <!-- <div>
					        						<p>Villa Size:  | Bed Type:  | Occupancy: </p>
					        					</div>
					        					<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <p>Surrounded by the serene Rainforest atmosphere, the Sunrise View Villa offers the majestic golden sunrise streaming into the room. The elegantly appointed 48 sqm Sunrise View Villa features a large outdoor living, canopied king beds, spacious bathroom and a private balcony with the perfect sight of the heart of Ubud's rainforest. Experience the essences of Bali, its natural beauty and warm hospitality perfectly blend in every corner of the room</p>
                                                    <a href="#" class="read-less-mobile">Read Less</a>
                                                </div>
                                            </div>
                                            <!-- <a href="https://nandinibali.com/m/enquire" class="btn-default">SUBMIT ENQUIRY</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr-bth"></div>
        <div class="bck-room">
            <div class="room-generate">
                <div class="row">
                    <div class="col-xs-12 slide-room">

                        <div id="presidential-suite-target" class="carousel-fade slide carousel" data-ride="carousel" data-interval="3000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner text-center">
                                <div class="item active">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8ed/a06/6378eda06e43a328461407.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8ed/bcc/6378edbcc8f47178734999.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8ed/c26/6378edc266ebd512547617.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8ed/dde/6378eddde748f876681512.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8f0/1cc/6378f01cca7ea920045750.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8ed/db1/6378eddb17bb3602611015.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8ed/cf2/6378edcf27ce9997635022.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://nandinibali.com/storage/app/uploads/public/637/8ee/4a7/6378ee4a7ceb4389303615.jpeg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#presidential-suite-target" data-slide="prev">
                                <span class="glyphicon glyphicon-menu-left im-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#presidential-suite-target" data-slide="next">
                                <span class="glyphicon glyphicon-menu-right im-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="m-t-10 mdi-room-title">Presidential Suite</h3>
                    </div>
                    <div class="col-xs-4">
                        <a class="m-t-10 mdi-room-info-btn" data-toggle="collapse" data-parent="#accordion5" href="#collapse25">ROOM INFO <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="room-view">
                <div class="row">
                    <div style="padding: 0px 6px;" class="col-xs-12">
                        <div style="color: black;" class="panel-group" id="accordion5">
                            <!-- <div class="panel panel-default">
					      	<div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion5" href="#collapse15">VIEW ROOM <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div>
					      	<div id="collapse15" class="panel-collapse collapse in">
					        	<div class="panel-body">
					        							        	</div>
					      	</div>
					    </div> -->
                            <div class="panel panel-default">
                                <!-- <div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion5" href="#collapse25">ROOM AMENITIES <span><i class="fa fa-angle-right" style="font-size: 25px;margin-top: -4px;" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div> -->
                                <div id="collapse25" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="col-xs-12 room-amn m-b-20">

                                            <h4>Villa Facilities</h4>
                                            <ul class="padding-left-20">

                                                <li>Size: 89 m² (958 ft²)</li>

                                                <li>2 Adults 1 Child</li>

                                                <li>In-room coffee and/or tea facilities</li>

                                                <li>Private Minibar</li>

                                                <li>Luxury eco-friendly natural amenities</li>

                                                <li>Flat-screen Smart TV</li>

                                                <li>Working Desk</li>

                                                <li>Free Wi-Fi</li>

                                                <li>Choice of pillows</li>

                                                <li>King size bed</li>

                                                <li>Bathtub and Separate Shower</li>

                                                <li>Balcony with cozy Daybed</li>

                                                <li>Baby cot allowed</li>

                                                <li>Separate Toilet</li>
                                            </ul>

                                        </div>

                                        <!-- <div class="col-xs-12 room-amn">
					        			<h4>Villa Benefits</h4>
					        			<ul class="fa-ul">
					        									        		</ul>
					        		</div> -->

                                        <div class="clr-bth"></div>
                                        <hr>
                                        <div class="container-price">
                                            <a href="https://book-directonline.com/properties/nandinibalidirect" target="_blank" class="btn-default">BOOK THIS VILLAS</a>
                                            <div class="assis-home">
                                                <a style="border-bottom: 1px solid white;" data-toggle="modal" data-target="#myassist"><i class="fa fa-question-circle" aria-hidden="true"></i> CLICK HERE FOR MORE ASSISTANCE</a>
                                            </div>
                                            <div class="contain-asis">
                                                <div class="intro-less-box">
                                                    <!-- <div>
													<p>Villa Size:  | Bed Type:  | Occupancy: </p>
												</div>
												<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <!-- Our magnificent Presidential Suite is a true definition of luxury. Elegantly decorated and filled with luxurious furnishing, ... <a href="javascript:void(0);" class="read-more-mobile">Read More</a> -->
                                                    <p>Our magnificent Presidential Suite is a true definition of luxury. Elegantly decorated and filled with luxurious furnishing, these suites feature a master bedroom with a spacious terrace overlooking to the lush and green garden view and the majestic of Ubud Rainforest. The Nandini Presidential Suite equipped commodious living room is suitable for family time. The signature bathroom makes the most of its space, with bathroom features including an outdoor bath and rain shower, complemented by a dressing facility</p>
                                                </div>
                                                <div class="intro-more-box" style="display: none;">
                                                    <!-- <div>
					        						<p>Villa Size:  | Bed Type:  | Occupancy: </p>
					        					</div>
					        					<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://nandinibali.com/themes/mindimedia/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <p>Our magnificent Presidential Suite is a true definition of luxury. Elegantly decorated and filled with luxurious furnishing, these suites feature a master bedroom with a spacious terrace overlooking to the lush and green garden view and the majestic of Ubud Rainforest. The Nandini Presidential Suite equipped commodious living room is suitable for family time. The signature bathroom makes the most of its space, with bathroom features including an outdoor bath and rain shower, complemented by a dressing facility</p>
                                                    <a href="#" class="read-less-mobile">Read Less</a>
                                                </div>
                                            </div>
                                            <!-- <a href="https://nandinibali.com/m/enquire" class="btn-default">SUBMIT ENQUIRY</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr-bth"></div>

    </div>
</x-mobile>