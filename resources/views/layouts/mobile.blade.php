<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')


    <link rel="icon" type="image/png" href="https://nandinibali.com/themes/mindimedia/assets/images/nandini-icon.png">
    <link rel="Shortcut Icon" href="https://nandinibali.com/themes/mindimedia/assets/images/favicon.png" type="image/x-icon" />
    <link rel="preload" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" as="style" onload="this.rel='stylesheet'">

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" as="font" onload="this.rel='stylesheet'" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{asset('css/mobile.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.min.css">

    @stack('css')

</head>

<body id="home" style="margin-bottom: 165px">

    <section class="slider relative">
        <div class="mdi-header-carousel owl-carousel owl-theme">
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 60%, #fff), url(https://nandinibali.com/storage/app/uploads/public/613/eab/c8e/613eabc8e2836917276657.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 60%, #fff), url(https://nandinibali.com/storage/app/uploads/public/613/eab/ce5/613eabce52ada487017133.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 60%, #fff), url(https://nandinibali.com/storage/app/uploads/public/613/eab/ce5/613eabce57d01789507161.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
        </div>
        <a target="_blank" class="mdi-map-btn" href="https://g.page/nandinijungleresort?share"><i class="fa fa-map-marker"></i> MAP</a>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="myassist" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">NEEED ASSISTANCE</h4>
                </div>
                <div class="modal-body">
                    <p>SHOULD YOU NEED FURTHER ASSISTANCE FOR THE OFFERS OR YOU WANT TO ARRANGE A COSTUMISED BOOKING, OUR RESERVATION WILL HELP YOU. PLEASE SUBMIT YOUR ENQUIRY BY CLICKING THE BUTTON BELOW </p>
                </div>
                <div class="modal-footer">
                    <a href="https://nandinibali.com/m/enquire" class="btn-default">
                        <span>CREATE ENQUIRY</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myterm" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Term of Condition</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="main">

        {{$slot}}

        <div class="container-fluid container-fixed-menu">
            <!-- <a href="#" data-toggle="modal" data-target="#modalDate" class="book-mobile-fixed"> -->
            <a href="https://book-directonline.com/properties/nandinibalidirect" class="book-mobile-fixed" target="_blank">
                <i class="fa fa-calendar"></i>Check Availability
                <i class="fa fa-angle-right pull-right angle-right-fixed"></i>
            </a>
            <a href="{{route('mindex')}}" class="menu-box">
                <div class="menu-box-item @yield('home_active')">
                    <i class="fa fa-home"></i>
                    <p>Home</p>
                </div>
            </a>
            <a href="{{route('mvilla')}}" class="menu-box">
                <div class="menu-box-item ">
                    <i class="fa fa-bed"></i>
                    <p>Accommodation</p>
                </div>
            </a>
            <a href="{{route('moffer')}}" class="menu-box">
                <div class="menu-box-item @yield('offer_active')">
                    <i class="fa fa-tags"></i>
                    <p>Offers</p>
                </div>
            </a>
            <a href="javascript:void(0)" id="media-menu" class="menu-box">
                <div class="menu-box-item @yield('media_active')">
                    <i class="fas fa-newspaper"></i>
                    <p>Media</p>
                </div>
            </a>
            <a href="javascript:void(0)" id="contact-us-menu" class="menu-box">
                <div class="menu-box-item ">
                    <i class="fa fa-envelope"></i>
                    <p>Contact Us</p>
                </div>
            </a>
            <div class="contact-us-box">
                <ul>
                    <li>
                        <div class="items">
                            <a href="tel:+6281236871170" class="items-contact-us"><i class="fa fa-phone"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="media-box">
                <ul>
                    <li>
                        <div class="items">
                            <a href="{{route('mgallery')}}" class="items-menu" style="color: #fff; font-size: 10px">Gallery</a>
                        </div>
                    </li>
                    <li>
                        <div class="items">
                            <a href="{{route('mblog')}}" class="items-menu" style="color: #fff; font-size: 10px">Blog</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <a href="https://wa.me/6281236871170" target="_blank" rel="noopener" class="whatsapp-floating"><img src="https://nandinibali.com/themes/mindimedia/assets/images/whatsapp-logo.png" alt="whatsapp"></a>

        <style type="text/css">


        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
        <script type="text/javascript" src="{{asset('js/mobile.js')}}"></script>

        @stack('js')

        <script type="text/javascript">
            <!--
            if (screen.width > 768) {
                        window.location = "{{route('index')}}";
                    }
                    //
            -->
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.mdi-header-carousel').owlCarousel({
                    items: 1,
                    nav: true,
                    dots: false,
                    loop: true,
                    autoplay: true,
                    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
                });
            });
        </script>

</body>

</html>