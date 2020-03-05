<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wedding Invitation</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('img/fav.png')}}">
    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

</head>

<body data-spy="scroll" data-offset="55" id="page-top" class="index">
<!-- Navigation -->
<nav id="header_nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index1.html">Wedding Invitation</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="Main_Menu navbar-example collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main_nav">
                <li> <a href="#page-top">Home</a> </li>
                <li> <a href="#bride_groom_sec">Bride & Groom</a> </li>
                <li> <a href="#family">Our Family</a> </li>
                <li> <a href="#photo_gallery">Photo Gallery</a> </li>
                <li> <a href="#events">Events</a> </li>
            </ul>
        </div><!-- /.navbar-collapse -->
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div id="preloader">
    <div id="status">
        <div id="bowlG">
            <div id="bowl_ringG">
                <div class="ball_holderG">
                    <div class="ballG"><div id="heart"></div></div>
                </div>
            </div>
        </div><!--bowlG-->
        <img id="logo_n" src="{{asset('img/logo.png')}}" width=160 alt=""/>
    </div><!--status-->
</div><!--Preloader-->
<!-- Header -->
<header>
    <div class="container-fluid">
        <div class="row">
            <section id="main-slider" class="main-slider">
                <div class="flexslider two">
                    <ul class="slides">
                        <li>
                            <img src="{{ asset('img/placehold/bg5.jpeg') }}" alt="Slider Image"/>
                            <div class="slide_text_wrap">
                                <div class="slider-text">
                                    <h2 class="slider-head">{{$wedding->bname}} & {{$wedding->gname}}</h2>
                                    <p class="">Are getting married on {{$wedding->wdate}} ,{{$wedding->wplace}} </p>
                                    <input type="hidden" name="" id="webdate" value="{{$wedding->wdate}}">
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/placehold/bg2.jpg') }}" alt="Slider Image"/>
                            <div class="slide_text_wrap">
                                <div class="slider-text">
                                    <h2 class="slider-head">{{$wedding->bname}} & {{$wedding->gname}}</h2>
                                    <p class="">Are getting married on {{$wedding->wdate}} ,{{$wedding->wplace}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/placehold/bg3.jpg') }}" alt="Slider Image"/>
                            <div class="slide_text_wrap">
                                <div class="slider-text">
                                    <h2 class="slider-head">{{$wedding->bname}} & {{$wedding->gname}}</h2>
                                    <p class="">Are getting married on {{$wedding->wdate}} ,{{$wedding->wplace}} </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="countdown-wrap">
                    <div class="countdown">

                    </div>
                </div>

            </section><!--/#main-slider-->
        </div><!-- .row-->
    </div><!-- .container-fluid-->
</header>

<!--Bride Groom Section-->
<section id="bride_groom_sec" class="wedding-sec bride_groom_sec bride_groom_sec_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-head">
                    <h2 class="section-heading">{{$wedding->bname}} & {{$wedding->gname}}</h2>
                    <div class="bottom-dash"></div>
                    <p class="section-subheading text-muted">{{$wedding->bgabout}}</p>
                </div>
            </div><!-- .col-lg-12-->
        </div><!-- .row-->
    </div><!-- .container-->
    <div class="brd_grm_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-offset-1 col-md-offset-1">
                    <div class="br_grm">
                        <div class="brd_grm_wrap">
                            <div class="brd_grm_img">

                                <img src="{{ asset('storage/'.$wedding->bimage) }}" alt="" />
                                <div class="brgm_overlay"></div>
                            </div>
                            <div class="heart_frame">
                                <img class="def_frm" src="{{ asset('img/two/love_frm.png') }}" alt="" />
                                <img class="hov_frm" src="{{ asset('img/two/love_frm_hover.png') }}" alt="" />

                            </div>
                        </div>
                        <h3>{{$wedding->bname}}</h3>
                        <p>{{$wedding->bBio}}</p>
                        <p class="social_icons">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-5 nd_img">
                    <div class="br_grm">
                        <div class="brd_grm_wrap">
                            <div class="brd_grm_img">
                                <img src="{{ asset('storage/'.$wedding->gimage) }}" alt="" />
                                <div class="brgm_overlay"></div>
                            </div>
                            <div class="heart_frame">
                                <img class="def_frm" src="{{ asset('img/two/love_frm.png') }}" alt="" />
                                <img class="hov_frm" src="{{ asset('img/two/love_frm_hover.png') }}" alt="" />

                            </div>
                        </div>
                        <h3>{{$wedding->gname}}</h3>
                        <p>{{$wedding->gBio}}</p>
                        <p class="social_icons">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </p>
                    </div><!-- .br_grm -->
                </div><!-- .col-md-5 -->
            </div><!-- .row -->
        </div><!-- .container-->
    </div><!-- .brd_grm_wrapper-->
</section>
<!--Bride Groom Section End-->

<!--Parallex Section One-->
<div class="img-holder" data-image="{{ asset('img/placehold/bg4.jpg') }}" data-width="1400" data-height="1122"></div>
<!--Parallex Section One End-->

<!--Love story section-->
<section id="love_story" class="wedding-sec love_story_sec">

    <div class="love_story_wrapper">
        <div class="container">
            <div id="love_story_tab" class="love_story_tab">
                <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#story1" aria-controls="story1" role="tab" data-toggle="tab"><img src="{{ asset('img/two/meet1.png') }}" alt="" /><img src="{{ asset('img/two/meet2.png') }}" alt="" /></a></li>
                        <li role="presentation"><a href="#story3" aria-controls="story3" role="tab" data-toggle="tab"><img src="{{ asset('img/two/trip1.png') }}" alt="" /><img src=" {{ asset('img/two/trip2.png') }}" alt="" /></a></li>
                        <li role="presentation"><a href="#story4" aria-controls="story4" role="tab" data-toggle="tab"><img src="{{ asset('img/two/engage1.png') }}" alt="" /><img src=" {{ asset('img/two/engage2.png') }}" alt="" /></a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="story1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="love_story_img">
                                        <img src="{{ asset('storage/'.$wedding->mimage) }}" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="love_story_details">
                                        <p class="posting_date">{{$wedding->mdate}}</p>
                                        <h3><a href="#">Day we meet each other</a></h3>
                                        <p class="post_text">
                                            {{ $wedding->meetText }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="story3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="love_story_img">
                                        <img src="{{ asset('storage/'.$wedding->timage) }}" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="love_story_details">
                                        <p class="posting_date">{{$wedding->tdate}}</p>
                                        <h3><a href="#">our holiday trip</a></h3>
                                        <p class="post_text">
                                            {{ $wedding->tripText }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="story4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="love_story_img">
                                        <img src="{{ asset('storage/'.$wedding->engimage) }}" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="love_story_details">
                                        <p class="posting_date">{{$wedding->engdate}}</p>
                                        <h3><a href="#">get engaged</a></h3>
                                        <p class="post_text">
                                            {{$wedding->engtripText}}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Love story section End-->

<!--Parallex section 2-->
<div class="img-holder" data-image="{{ asset('img/placehold/bg6.jpg') }}" data-width="2616" data-height="1553"></div>
<!--Parallex section 2 End-->

<!--Our Family section-->
<section id="family" class="wedding-sec family_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-head">
                    <h2 class="section-heading">Our Family </h2>
            </div>
        </div>
    </div>

    <div class="family_member_wrap two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="family_mem_caro_1">
                        <h2 class="family_title">{{$wedding->bname}} Family</h2>
                        <div id="family_member1" class="family_mem_carosel">
                            <div class="item">
                                <div class="brd_grm_wrap">
                                    <div class="family_mem_img">
                                        <img src="{{ asset('storage/'.$wedding->bfimage)}}" alt="" />
                                    </div>
                                    <div class="heart_frame">
                                        <img class="def_frm" src="{{ asset('img/family/heart.png')}}" alt="" />
                                    </div>
                                </div>
                                <p class="relation">father</p>
                                <p class="family_txt_details">{{$wedding->bfText}}</p>
                            </div>
                            <div class="item Up">
                                <div class="brd_grm_wrap">
                                    <div class="family_mem_img">
                                        <img src="{{ asset('storage/'.$wedding->bmimage)}}" alt="" />
                                    </div>
                                    <div class="heart_frame">
                                        <img class="def_frm" src="{{ asset('img/family/heart.png')}}" alt="" />
                                    </div>
                                </div>
                                <p class="relation">mother</p>
                                <p class="family_txt_details">{{$wedding->bmText}}</p>
                            </div>
                            <div class="item Up">
                                <div class="brd_grm_wrap">
                                    <div class="family_mem_img">
                                        <img src="{{ asset('storage/'.$wedding->bbimage)}}" alt="" />
                                    </div>
                                    <div class="heart_frame">
                                        <img class="def_frm" src="{{ asset('img/family/family-mem-frm.png')}}" alt="" />
                                    </div>
                                </div>
                                <p class="relation">brother</p>
                                <p class="family_txt_details">{{$wedding->bbText}}</p>
                            </div>
                            <div class="item">
                                <div class="brd_grm_wrap">
                                    <div class="family_mem_img">
                                        <img src="{{ asset('storage/'.$wedding->bsimage)}}" alt="" />
                                    </div>
                                    <div class="heart_frame">
                                        <img class="def_frm" src="{{ asset('img/family/family-mem-frm.png')}}" alt="" />
                                    </div>
                                </div>
                                <p class="relation">sister</p>
                                <p class="family_txt_details">{{$wedding->bsText}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="family_mem_caro_2">
                        <h2 class="family_title">{{$wedding->gname}} Family</h2>
                        <div id="family_member2" class="family_mem_carosel">
                            <div class="item">
                                <div class="brd_grm_wrap">
                                    <div class="family_mem_img">
                                        <img src="{{ asset('storage/'.$wedding->gfimage)}}" alt="" />
                                    </div>
                                    <div class="heart_frame">
                                        <img class="def_frm" src="{{ asset('img/family/family-mem-frm.png')}}" alt="" />
                                    </div>
                                </div>
                                <p class="relation">father</p>
                                <p class="family_txt_details">{{$wedding->gfText}}</p>
                            </div>
                            <div class="item">
                                <div class="brd_grm_wrap">
                                    <div class="family_mem_img">
                                        <img src="{{ asset('storage/'.$wedding->gmimage)}}" alt="" />
                                    </div>
                                    <div class="heart_frame">
                                        <img class="def_frm" src="{{ asset('img/family/family-mem-frm.png')}}" alt="" />
                                    </div>
                                </div>
                                <p class="relation">mother</p>
                                <p class="family_txt_details">{{$wedding->gmText}}</p>
                            </div>
                            <div class="item">
                                <div class="brd_grm_wrap">
                                    <div class="family_mem_img">
                                        <img src="{{ asset('storage/'.$wedding->gbimage)}}" alt="" />
                                    </div>
                                    <div class="heart_frame">
                                        <img class="def_frm" src="{{ asset('img/family/family-mem-frm.png')}}" alt="" />
                                    </div>
                                </div>
                                <p class="relation">brother</p>
                                <p class="family_txt_details">{{$wedding->gbText}}</p>
                            </div>
                            <div class="item">
                                <div class="brd_grm_wrap">
                                    <div class="family_mem_img">
                                        <img src="{{ asset('storage/'.$wedding->gsimage)}}" alt="" />
                                    </div>
                                    <div class="heart_frame">
                                        <img class="def_frm" src="{{ asset('img/family/family-mem-frm.png')}}" alt="" />
                                    </div>
                                </div>
                                <p class="relation">sister</p>
                                <p class="family_txt_details">{{$wedding->bsText}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!--Our Family section End-->

<!--Our Photo Gallery section-->
<section id="photo_gallery" class="wedding-sec photo_gallery_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-head">
                    <h2 class="section-heading">Photo Gallery</h2>
                    <div class="bottom-dash"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="photo-container" class="row photo-container">
            @foreach($wedding->gallery as $gallery)
                <div class="mix wday Graphics">
                    <img src="{{ asset('uploads/'.$gallery)}}" alt="" />
                    <div class="overlay">
                        <div class="overlay_text">
                            <div class="inner-extra">
                                <a href="{{ asset('uploads/'.$gallery)}}" data-gal="prettyPhoto[pp_gal]"><img src="{{ asset('img/zoom.png')}}" alt="" /></a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!--Our Photo Gallery section End-->

<!--Events ans Parties section-->
<section id="events" class="wedding-sec event_party_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-head">
                    <h2 class="section-heading">Events & Parties </h2>
                    <div class="bottom-dash"></div>

                </div><!--.section-head-->
            </div><!--.col-lg-12-->
        </div><!--.row-->


        <div class="row two">
            <div class="col-md-4">
                <div class="evnt_card_container">
                    <div class="containers">
                        <div class="cards">
                            <div class="card front evnt_prt evnt_prt_1">
                                <h2>Wedding Ceremony</h2>
                                <img src="{{ asset('img/event_icon1.png')}}" alt="" />
                                <p>{{$wedding->wplace}}</p>
                                <button class="btn btn-primary btn_evnt">{{$wedding->wtime}}</button>
                            </div><!--.card .front .evnt_prt .evnt_prt_1-->
                            <div class="card back evnt_prt_back evnt_prt_back_1">
                                <h2>Wedding Ceremony</h2>
                                <div class="evnt_addres">
                                    <p>{{$wedding->wplace}}</p>
                                </div>
                            </div><!--.card .back .evnt_prt_back .evnt_prt_back_1-->
                        </div><!-- .cards-->
                    </div><!--.containers-->
                </div><!-- .evnt_card_container-->
            </div><!-- .col-md-4-->
            <div class="col-md-4">
                <div class="evnt_card_container">
                    <div class="containers">
                        <div class="cards">
                            <div class="card front evnt_prt evnt_prt_2">
                                <h2>Wedding Party</h2>
                                <img src="{{ asset('img/event_icon2.png')}}" alt="" />
                                <p>{{$wedding->wpartyplace}}r</p>
                                <button class="btn btn-primary btn_evnt">{{$wedding->wpartytime}}</button>
                            </div><!--.card .front .evnt_prt .evnt_prt_2-->
                            <div class="card back evnt_prt_back evnt_prt_back_2">
                                <h2>Wedding Party</h2>
                                <div class="evnt_addres">
                                    <p>{{$wedding->wpartyplace}}</p>
                                </div>
                            </div><!--.card .back .evnt_prt_back .evnt_prt_back_2-->
                        </div><!-- .cards-->
                    </div><!--.containers-->
                </div><!-- .evnt_card_container-->
            </div><!-- .col-md-4-->
            <div class="col-md-4">
                <div class="evnt_card_container">
                    <div class="containers">
                        <div class="cards">
                            <div class="card front evnt_prt evnt_prt_3">
                                <h2>Dinner</h2>
                                <img src="{{ asset('img/event_icon3.png')}}" alt="" />
                                <p>{{$wedding->dplace}}</p>
                                <button class="btn btn-primary btn_evnt">{{$wedding->dtime}}</button>
                            </div><!--.card .front .evnt_prt .evnt_prt_3-->
                            <div class="card back evnt_prt_back evnt_prt_back_3">
                                <h2>Dinner</h2>
                                <div class="evnt_addres">
                                    <p>{{$wedding->dplace}}</p>
                                </div>
                            </div><!--.card .back .evnt_prt_back .evnt_prt_back_3-->
                        </div><!-- .cards-->
                    </div><!--.containers-->
                </div><!-- .evnt_card_container-->
            </div><!-- .col-md-4-->
        </div><!--Parallex section 3-->
    </div><!--Parallex section 3-->
</section>
<!--Events ans Parties section End-->

<!--Parallex section 3-->
<div class="img-holder" data-image="{{ asset('img/placehold/bg3.jpg')}}" data-width="3888" data-height="2592"></div>
<!--parallex section 3 End-->
<section id="video-background" class="video_background_sec">
    <!--Hidden header for w3c validation only-->
    <h2 class="hidden">Hidden header for w3c validation only</h2>
    <!--Hidden header for w3c validation only-->
    <div class="video-bg-self"></div>
</section>


<!--Phone mail addres section-->
<section class="footer_top_sec footer_top_sec_2">
    <!--Hidden header for w3c validation only-->
    <h2 class="hidden">Hidden header for w3c validation only</h2>
    <!--Hidden header for w3c validation only-->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="phone"><img src="{{ asset('img/phone-icon.png')}}" alt="" />261-975-337</p>
            </div>
            <div class="col-md-4">
                <p class="mail"><img src="{{ asset('img/mail-icon.png')}}" alt="" />cupyay2017@gmail.com</p>
            </div>
            <div class="col-md-4">
                <p class="address"><img src="{{ asset('img/location-icon.png')}}" alt="" />UCS(Pyay),Pyay,Myanmar</p>
            </div>
        </div>
    </div>
</section>

<!--Go Top -->
<div id="toTop" class="scrollup two"><a href="#"><i class="fa fa-angle-double-up fa-lg"></i></a></div>
<!--Phone mail address section End-->
<footer id="footer" class="footer_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <span id="copyright" class="copyright"><!-- &copy; 2015 Themeonlab.com . All rights reserved. --></span>
            </div>
            <div class="col-md-6 col-xs-12">
                <ul class="list-inline social_icons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Modal -->
<div class="modal fade wed" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <div class="modal-img">
                    <img src="{{ asset('img/placehold/zoom.png')}}" alt="" />
                </div>
                <div class="modal-txt">
                    <h4 class="modal-title">Jane doe</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Sed ut
                        perspiciatis.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default cls-wed" data-dismiss="modal">Close</button> -->
                <p class="social_icons">
                    <a href="#" class=""><i class="fa fa-twitter"></i></a>
                    <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                    <a href="#" class=""><i class="fa fa-facebook"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade wed" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <div class="modal-img">
                    <img src="{{ asset('img/placehold/zoom.png')}}" alt="" />
                </div>
                <div class="modal-txt">
                    <h4 class="modal-title">Jhon doe</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Sed ut
                        perspiciatis.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default cls-wed" data-dismiss="modal">Close</button> -->
                <p class="social_icons">
                    <a href="#" class=""><i class="fa fa-twitter"></i></a>
                    <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                    <a href="#" class=""><i class="fa fa-facebook"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Modal End-->
<!-- Contact section End-->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/jquery.js') }}"><\/script>')</script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}" type="text/javascript"></script>
<!-- PrettyPhoto -->
<script src="{{ asset('js/jquery.prettyPhoto.js') }}" type="text/javascript" charset="utf-8"></script>
<!-- Nicescroll JavaScript -->
<script src=" {{ asset('js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('js/countdown.js') }}"></script>
<!-- Video Background JavaScript -->
<script src="{{ asset('js/jquery.videobackground.js') }}"></script>
<script src="{{ asset('js/jquery.imageScroll.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/site.js') }}"></script>
</body>
</html>
