<!DOCTYPE html>
<!--[if lt IE 7]><html lang="vi" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html lang="vi" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html lang="vi" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="vi" class="no-js">

<head>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src =   "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=YOUR_APP_ID";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Truyện Tranh | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important
        }
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/themes/a3manga/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/cache/minify/32d49.default.include.f9049d.css" media="all" />
    <link rel="shortcut icon" href="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/themes/a3manga/images/favicon.png.htm">
    <link rel="apple-touch-icon" href="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/themes/a3manga/images/apple-touch-icon.png.htm">

    @yield('css')

</head>

<body>
<!--[if lt IE 7]>
<p class="chromeframe">Bạn đang sử dụng trình duyệt <strong>lỗi thời</strong>. Xin hãy <a href="">nâng cấp trình duyệt</a> để trải nghiệm được tốt hơn.</p>
<![endif]-->


<header class="navbar navbar-inverse">
    <div class="ribbon"></div>
    <div class="container header-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a href="{{ url('') }}">
                <h1 class="logo pull-left">A3 Manga</h1>
            </a>
        </div>
        <div class="navbar-right navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li id="menu-item-158524" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-158524"><a href="danh-sach-truyen/index.htm">Danh sách truyện</a></li>
                <li id="menu-item-1073411" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1073411"><a href="truyen-xem-nhieu/index.htm">Truyện xem nhiều</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="index.htm" method="get" role="search" onSubmit="return false;">
                <div class="form-group search-wrapper">
                    <input type="text" name="s" placeholder="Tìm kiếm truyện..." class="search-txt">
                    <button type="submit" class="search-btn"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</header>

@section('container')
<section class="container">

    @section('top-hot')
    <div class="top-hot">
        <div id="owl-top-hot" class="owl-carousel">
            <div class="item">
                <a href="truyen-tranh/xuyen-duyet-tay-nguyen-3000/index.htm" title="Xuyên Duyệt Tây Nguyên 3000">
                    <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2017/08/XuyenDuyetTayNguyen3000A3mangazzx-400x500.jpg" alt="Xuyên Duyệt Tây Nguyên 3000">
                    <h3>Xuyên Duyệt Tây Nguyên 3000</h3> </a>
                <a href="xuyen-duyet-tay-nguyen-3000-chap-193/index.htm">
                    <p class="chap"> Chap 193-SPOILER</p>
                    <p class="chap-date"><i class="glyphicon glyphicon-time"></i> 18 giờ trước</p>
                </a>
            </div>

            <div class="item">
                <a href="truyen-tranh/xuyen-duyet-tay-nguyen-3000/index.htm" title="Xuyên Duyệt Tây Nguyên 3000"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2017/08/XuyenDuyetTayNguyen3000A3mangazzx-400x500.jpg" alt="Xuyên Duyệt Tây Nguyên 3000">
                    <h3>Xuyên Duyệt Tây Nguyên 3000</h3> </a>
                <a href="xuyen-duyet-tay-nguyen-3000-chap-193/index.htm">
                    <p class="chap"> Chap 193-SPOILER</p>
                    <p class="chap-date"><i class="glyphicon glyphicon-time"></i> 18 giờ trước</p>
                </a>
            </div>
            <div class="item">
                <a href="truyen-tranh/xuyen-duyet-tay-nguyen-3000/index.htm" title="Xuyên Duyệt Tây Nguyên 3000"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2017/08/XuyenDuyetTayNguyen3000A3mangazzx-400x500.jpg" alt="Xuyên Duyệt Tây Nguyên 3000">
                    <h3>Xuyên Duyệt Tây Nguyên 3000</h3> </a>
                <a href="xuyen-duyet-tay-nguyen-3000-chap-193/index.htm">
                    <p class="chap"> Chap 193-SPOILER</p>
                    <p class="chap-date"><i class="glyphicon glyphicon-time"></i> 18 giờ trước</p>
                </a>
            </div>
            <div class="item">
                <a href="truyen-tranh/xuyen-duyet-tay-nguyen-3000/index.htm" title="Xuyên Duyệt Tây Nguyên 3000"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2017/08/XuyenDuyetTayNguyen3000A3mangazzx-400x500.jpg" alt="Xuyên Duyệt Tây Nguyên 3000">
                    <h3>Xuyên Duyệt Tây Nguyên 3000</h3> </a>
                <a href="xuyen-duyet-tay-nguyen-3000-chap-193/index.htm">
                    <p class="chap"> Chap 193-SPOILER</p>
                    <p class="chap-date"><i class="glyphicon glyphicon-time"></i> 18 giờ trước</p>
                </a>
            </div>
            <div class="item">
                <a href="truyen-tranh/xuyen-duyet-tay-nguyen-3000/index.htm" title="Xuyên Duyệt Tây Nguyên 3000"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2017/08/XuyenDuyetTayNguyen3000A3mangazzx-400x500.jpg" alt="Xuyên Duyệt Tây Nguyên 3000">
                    <h3>Xuyên Duyệt Tây Nguyên 3000</h3> </a>
                <a href="xuyen-duyet-tay-nguyen-3000-chap-193/index.htm">
                    <p class="chap"> Chap 193-SPOILER</p>
                    <p class="chap-date"><i class="glyphicon glyphicon-time"></i> 18 giờ trước</p>
                </a>
            </div>
            <div class="item">
                <a href="truyen-tranh/xuyen-duyet-tay-nguyen-3000/index.htm" title="Xuyên Duyệt Tây Nguyên 3000"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2017/08/XuyenDuyetTayNguyen3000A3mangazzx-400x500.jpg" alt="Xuyên Duyệt Tây Nguyên 3000">
                    <h3>Xuyên Duyệt Tây Nguyên 3000</h3> </a>
                <a href="xuyen-duyet-tay-nguyen-3000-chap-193/index.htm">
                    <p class="chap"> Chap 193-SPOILER</p>
                    <p class="chap-date"><i class="glyphicon glyphicon-time"></i> 18 giờ trước</p>
                </a>
            </div>
            <div class="item">
                <a href="truyen-tranh/xuyen-duyet-tay-nguyen-3000/index.htm" title="Xuyên Duyệt Tây Nguyên 3000"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2017/08/XuyenDuyetTayNguyen3000A3mangazzx-400x500.jpg" alt="Xuyên Duyệt Tây Nguyên 3000">
                    <h3>Xuyên Duyệt Tây Nguyên 3000</h3> </a>
                <a href="xuyen-duyet-tay-nguyen-3000-chap-193/index.htm">
                    <p class="chap"> Chap 193-SPOILER</p>
                    <p class="chap-date"><i class="glyphicon glyphicon-time"></i> 18 giờ trước</p>
                </a>
            </div>
        </div>
    </div>
    @show

    <div class="row">
        @section('sidebar')
        <div class="col-md-8">
            <h2 class="org-title">Truyện mới cập nhật</h2>
            <div class="comic-list">
                <div class="row responsive-row">
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/10/ToaruOssannoVRMMOKatsudoukiA3manga-150x150.jpg" alt="Toaru Ossan no VRMMO Katsudouki"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"><h3 class="comic-title"> Toaru Ossan no VRMMO Katsudouki</h3> </a> <a href="toaru-ossan-no-vrmmo-katsudouki-chap-36/index.htm">Chap 36</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 5 giờ trước                        </span></div>
                    </div>
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer">
                                <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/07/TheGamerA3mangalrere-150x150.jpg" alt="The Gamer"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"><h3 class="comic-title"> The Gamer</h3> </a> <a href="the-gamer-chap-189/index.htm">Chap 189</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 6 giờ trước                        </span></div>
                    </div>
                </div>

                <div class="row responsive-row">
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/10/ToaruOssannoVRMMOKatsudoukiA3manga-150x150.jpg" alt="Toaru Ossan no VRMMO Katsudouki"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"><h3 class="comic-title"> Toaru Ossan no VRMMO Katsudouki</h3> </a> <a href="toaru-ossan-no-vrmmo-katsudouki-chap-36/index.htm">Chap 36</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 5 giờ trước                        </span></div>
                    </div>
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/07/TheGamerA3mangalrere-150x150.jpg" alt="The Gamer"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"><h3 class="comic-title"> The Gamer</h3> </a> <a href="the-gamer-chap-189/index.htm">Chap 189</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 6 giờ trước                        </span></div>
                    </div>
                </div>

                <div class="row responsive-row">
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/10/ToaruOssannoVRMMOKatsudoukiA3manga-150x150.jpg" alt="Toaru Ossan no VRMMO Katsudouki"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"><h3 class="comic-title"> Toaru Ossan no VRMMO Katsudouki</h3> </a> <a href="toaru-ossan-no-vrmmo-katsudouki-chap-36/index.htm">Chap 36</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 5 giờ trước                        </span></div>
                    </div>
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/07/TheGamerA3mangalrere-150x150.jpg" alt="The Gamer"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"><h3 class="comic-title"> The Gamer</h3> </a> <a href="the-gamer-chap-189/index.htm">Chap 189</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 6 giờ trước                        </span></div>
                    </div>
                </div>

                <div class="row responsive-row">
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/10/ToaruOssannoVRMMOKatsudoukiA3manga-150x150.jpg" alt="Toaru Ossan no VRMMO Katsudouki"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"><h3 class="comic-title"> Toaru Ossan no VRMMO Katsudouki</h3> </a> <a href="toaru-ossan-no-vrmmo-katsudouki-chap-36/index.htm">Chap 36</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 5 giờ trước                        </span></div>
                    </div>
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/07/TheGamerA3mangalrere-150x150.jpg" alt="The Gamer"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"><h3 class="comic-title"> The Gamer</h3> </a> <a href="the-gamer-chap-189/index.htm">Chap 189</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 6 giờ trước                        </span></div>
                    </div>
                </div>

                <div class="row responsive-row">
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/10/ToaruOssannoVRMMOKatsudoukiA3manga-150x150.jpg" alt="Toaru Ossan no VRMMO Katsudouki"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"><h3 class="comic-title"> Toaru Ossan no VRMMO Katsudouki</h3> </a> <a href="toaru-ossan-no-vrmmo-katsudouki-chap-36/index.htm">Chap 36</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 5 giờ trước                        </span></div>
                    </div>
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/07/TheGamerA3mangalrere-150x150.jpg" alt="The Gamer"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"><h3 class="comic-title"> The Gamer</h3> </a> <a href="the-gamer-chap-189/index.htm">Chap 189</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 6 giờ trước                        </span></div>
                    </div>
                </div>

                <div class="row responsive-row">
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/10/ToaruOssannoVRMMOKatsudoukiA3manga-150x150.jpg" alt="Toaru Ossan no VRMMO Katsudouki"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"><h3 class="comic-title"> Toaru Ossan no VRMMO Katsudouki</h3> </a> <a href="toaru-ossan-no-vrmmo-katsudouki-chap-36/index.htm">Chap 36</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 5 giờ trước                        </span></div>
                    </div>
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/07/TheGamerA3mangalrere-150x150.jpg" alt="The Gamer"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"><h3 class="comic-title"> The Gamer</h3> </a> <a href="the-gamer-chap-189/index.htm">Chap 189</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 6 giờ trước                        </span></div>
                    </div>
                </div>

                <div class="row responsive-row">
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/10/ToaruOssannoVRMMOKatsudoukiA3manga-150x150.jpg" alt="Toaru Ossan no VRMMO Katsudouki"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"><h3 class="comic-title"> Toaru Ossan no VRMMO Katsudouki</h3> </a> <a href="toaru-ossan-no-vrmmo-katsudouki-chap-36/index.htm">Chap 36</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 5 giờ trước                        </span></div>
                    </div>
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/07/TheGamerA3mangalrere-150x150.jpg" alt="The Gamer"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"><h3 class="comic-title"> The Gamer</h3> </a> <a href="the-gamer-chap-189/index.htm">Chap 189</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 6 giờ trước                        </span></div>
                    </div>
                </div>

                <div class="row responsive-row">
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/10/ToaruOssannoVRMMOKatsudoukiA3manga-150x150.jpg" alt="Toaru Ossan no VRMMO Katsudouki"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"><h3 class="comic-title"> Toaru Ossan no VRMMO Katsudouki</h3> </a> <a href="toaru-ossan-no-vrmmo-katsudouki-chap-36/index.htm">Chap 36</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 5 giờ trước                        </span></div>
                    </div>
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/07/TheGamerA3mangalrere-150x150.jpg" alt="The Gamer"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"><h3 class="comic-title"> The Gamer</h3> </a> <a href="the-gamer-chap-189/index.htm">Chap 189</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 6 giờ trước                        </span></div>
                    </div>
                </div>

                <div class="row responsive-row">
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki">
                                <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/10/ToaruOssannoVRMMOKatsudoukiA3manga-150x150.jpg" alt="Toaru Ossan no VRMMO Katsudouki"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"><h3 class="comic-title"> Toaru Ossan no VRMMO Katsudouki</h3> </a> <a href="toaru-ossan-no-vrmmo-katsudouki-chap-36/index.htm">Chap 36</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 5 giờ trước                        </span></div>
                    </div>
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/07/TheGamerA3mangalrere-150x150.jpg" alt="The Gamer"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"><h3 class="comic-title"> The Gamer</h3> </a> <a href="the-gamer-chap-189/index.htm">Chap 189</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 6 giờ trước                        </span></div>
                    </div>
                </div>

                <div class="row responsive-row">
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/10/ToaruOssannoVRMMOKatsudoukiA3manga-150x150.jpg" alt="Toaru Ossan no VRMMO Katsudouki"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/toaru-ossan-no-vrmmo-katsudouki/index.htm" title="Toaru Ossan no VRMMO Katsudouki"><h3 class="comic-title"> Toaru Ossan no VRMMO Katsudouki</h3> </a> <a href="toaru-ossan-no-vrmmo-katsudouki-chap-36/index.htm">Chap 36</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 5 giờ trước                        </span></div>
                    </div>
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"> <img class="img-thumbnail" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/uploads/2016/07/TheGamerA3mangalrere-150x150.jpg" alt="The Gamer"> </a>
                        </div>
                        <div class="comic-title-link"> <a href="truyen-tranh/the-gamer/index.htm" title="The Gamer"><h3 class="comic-title"> The Gamer</h3> </a> <a href="the-gamer-chap-189/index.htm">Chap 189</a> <span class="uptime"><i class="glyphicon glyphicon-time"></i> 6 giờ trước                        </span></div>
                    </div>
                </div>

                <div class="row responsive-row"></div>
            </div>
            <div class="clearfix"></div>
            <nav>
                <ul class="pager">
                    <li class="previous disabled"><a href="page/1/index.htm"><span aria-hidden="true">&larr;</span> Trước</a></li>
                    <li class="pager-note">Trang 1/42</li>
                    <li class="next "><a href="page/2/index.htm">Sau <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
            </nav>
        </div>
        @show

        <div class="sidebar col-md-4">
            <div class="widget text-center force-center more-a">

            </div>
            <div class="widget">
                <div class="fb-page" data-href="https://www.facebook.com/a3manga" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="javascript:if(confirm('https://www.facebook.com/a3manga\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.facebook.com/a3manga'"><a href="javascript:if(confirm('https://www.facebook.com/a3manga\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.facebook.com/a3manga'" target="_blank" rel="nofollow">A3 Manga</a></blockquote>
                    </div>
                </div>
            </div>
            <div id="google-badge" class="widget">
                <div class="g-page" data-width="307" data-href="https://plus.google.com/111895487585104651903" data-showtagline="false" data-rel="publisher"></div>
            </div>
            <div class="widget">
                <h3 class="green-title margin-bottom-15px">Loạt truyện</h3>
                <div class="tags"> <a href="series/hwang-mi-ri/index.htm">Hwang Mi Ri</a> <a href="series/han-yu-rang/index.htm">Han Yu-rang</a> <a href="series/dau-la/index.htm">Đấu La</a> <a href="series/phung-lam/index.htm">Phụng Lâm</a> <a href="series/thau-tinh/index.htm">Thâu Tinh</a> <a href="series/tan-tac-long-ho-mon/index.htm">Tân Tác Long Hổ Môn</a></div>
            </div>
            <div id="text-3" class="widget text-center force-center widget_text">
                <h2 class="red-title text-left margin-bottom-15px">Truyện xem nhiều</h2>
                <div class="textwidget">
                    <ul class="most-views text-left">
                        <li>
                            <p class="super-title"><a href="truyen-tranh/ky-si-hoang-tuong-da/index.htm">Kỵ Sĩ Hoang Tưởng Dạ</a></p>
                            <p class="small-title">Chương mới nhất: 161</p>
                        </li>
                        <li>
                            <p class="super-title"><a href="truyen-tranh/tam-trao-tien-the-chi-lu/index.htm">Tầm Trảo Tiền Thế Chi Lữ</a></p>
                            <p class="small-title">Chương mới nhất: 150</p>
                        </li>
                        <li>
                            <p class="super-title"><a href="truyen-tranh/xuyen-duyet-tay-nguyen-3000/index.htm">Xuyên Duyệt Tây Nguyên 3000</a></p>
                            <p class="small-title">Chương mới nhất: 192</p>
                        </li>
                        <li>
                            <p class="super-title"><a href="truyen-tranh/huyet-toc-cam-vuc/index.htm">Huyết Tộc Cấm Vực</a></p>
                            <p class="small-title">Chương mới nhất: 98</p>
                        </li>
                        <li>
                            <p class="super-title"><a href="truyen-tranh/thien-giang-hien-thuc-nam/index.htm">Thiên Giáng Hiền Thục Nam</a></p>
                            <p class="small-title">Chương 129 [HẾT]</p>
                        </li>
                        <li>
                            <p class="super-title"><a href="truyen-tranh/cau-lac-bo-ngoi-sao/index.htm">Câu Lạc Bộ Ngôi Sao</a></p>
                            <p class="small-title">Chương 149 [HẾT]</p>
                        </li>
                        <li>
                            <p class="super-title"><a href="truyen-tranh/co-len-nao-dai-ma-vuong/index.htm">Cố Lên Nào, Đại Ma Vương!</a></p>
                            <p class="small-title">Chương 172 [HẾT]</p>
                        </li>
                        <li>
                            <p class="super-title"><a href="truyen-tranh/my-hinh-yeu-tinh-dai-hon-chien/index.htm">Mỹ Hình Yêu Tinh Đại Hỗn Chiến</a></p>
                            <p class="small-title">Chương 135 [HẾT]</p>
                        </li>
                        <li>
                            <p class="super-title"><a href="truyen-tranh/phuong-nghich-thien-ha/index.htm">Phượng Nghịch Thiên Hạ</a></p>
                            <p class="small-title">Chương mới nhất: 102</p>
                        </li>
                        <li>
                            <p class="super-title"><a href="truyen-tranh/tam-nhan-hao-thien-luc/index.htm">Tam Nhãn Hao Thiên Lục</a></p>
                            <p class="small-title">Chương mới nhất: 234</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center force-center hidden-xs hidden-sm widget more-a">

    </div>
</section>
@show


<footer class="clearfix">
    <div class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="footer-links">
                        <h4 class="footer-title blue">Thể loại</h4>
                        <div class="tags"> <a href="the-loai/action/index.htm">Action</a> <a href="the-loai/comedy/index.htm">Comedy</a> <a href="the-loai/drama/index.htm">Drama</a> <a href="the-loai/fantasy/index.htm">Fantasy</a> <a href="the-loai/harem/index.htm">Harem</a> <a href="the-loai/horror/index.htm">Horror</a> <a href="the-loai/manhua/index.htm">Manhua</a> <a href="the-loai/manhwa/index.htm">Manhwa</a> <a href="the-loai/mecha/index.htm">Mecha</a> <a href="the-loai/mystery/index.htm">Mystery</a> <a href="the-loai/psychological/index.htm">Psychological</a> <a href="the-loai/romance/index.htm">Romance</a> <a href="the-loai/school-life/index.htm">School Life</a> <a href="the-loai/seinen/index.htm">Seinen</a> <a href="the-loai/shoujo/index.htm">Shoujo</a> <a href="the-loai/shounen/index.htm">Shounen</a> <a href="the-loai/shounen-ai/index.htm">Shounen Ai</a> <a href="the-loai/sports/index.htm">Sports</a> <a href="the-loai/supernatural/index.htm">Supernatural</a> <a href="the-loai/webtoons/index.htm">Webtoons</a> <a href="the-loai/xuyen-khong/index.htm">Xuyên Không</a> <a href="tron-bo/index.htm">Trọn Bộ</a></div>
                    </div>
                    <div class="footer-links">
                        <h4 class="footer-title org">Nhóm</h4>
                        <div class="tags"> <a href="nhom/a3/index.htm">A3</a> <a href="nhom/deathplace/index.htm">Deathplace</a> <a href="nhom/goc-cay/index.htm">Gốc Cây</a> <a href="nhom/ham-truyen/index.htm">Ham Truyện</a> <a href="nhom/ngon-phong/index.htm">Ngôn Phong</a> <a href="nhom/sotm/index.htm">SOTM</a> <a href="nhom/truyen-tranh-thap-cam/index.htm">Truyện Tranh Thập Cẩm</a> <a href="nhom/truyen-v1/index.htm">Truyện V1</a> <a href="nhom/tuoi-tho-du-doi/index.htm">Tuổi Thơ Dữ Dội</a> <a title="Status Hay" href="javascript:if(confirm('http://viet-status.com/status-hay\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='http://viet-status.com/status-hay'" target="_blank">Status Hay</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="note text-justify">Mọi thông tin và hình ảnh trên website đều được sưu tầm trên Internet. Chúng tôi không sở hữu hay chịu trách nhiệm bất kỳ thông tin nào trên web này. Nếu làm ảnh hưởng đến cá nhân hay tổ chức nào, khi được yêu cầu, chúng tôi sẽ xem xét và gỡ bỏ ngay lập tức.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container copyright-txt">© 2014 - 2017 <a href="index.htm">A3 Manga - Truyện Tranh Online</a>. <a href="" target="_blank" rel="nofollow">Facebook</a> &middot; <a href="" target="_blank" rel="nofollow">Twitter</a> &middot; <a href="" target="_blank" rel="publisher">Google+</a> &middot; <a href="" target="_blank" rel="nofollow">DeviantART</a> <span class="pull-right contact-email">Liên hệ: <a href="mailto:a3manga@gmail.com">a3manga@gmail.com</a></span></div>
        <div class="clearfix"></div>
    </div>
</footer>

<div id="go-to-top" class="glyphicon glyphicon-chevron-up"></div>


@yield('js')

<script type='text/javascript'>
    var uiAutocompleteL10n = {
        "noResults": "No results found.",
        "oneResult": "1 result found. Use up and down arrow keys to navigate.",
        "manyResults": "%d results found. Use up and down arrow keys to navigate.",
        "itemSelected": "Item selected."
    };
</script>
<script type='text/javascript'>
    var SearchAutocomplete = {
        "ajaxurl": "https:\/\/www.a3manga.com\/wp-admin\/admin-ajax.php",
        "fieldName": "[name=\"s\"]",
        "minLength": "1",
        "delay": "500",
        "autoFocus": "false"
    };
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/themes/a3manga/owl-carousel/owl.carousel.min.js"></script>
<script src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/themes/a3manga/js/main.min.js"></script>

<div id="sticky-footer" class="sticky-footer visible-xs">
    <div class="sticky-footer-content bg-info">
        <script type="text/javascript">
            /*<![CDATA[*/
            if (screen && screen.width < 768) {
                var _ase = [];
                _ase.push(['1496648282', '1496648746']);
                document.write('<script src="\/\/gamma.cachefly.net\/js\/ad-exchange.js" type="text\/javascript"><\/script>');
            } /*]]>*/
        </script> <span id="sticky-x-button" class="sticky-x-button">x</span></div>
</div>




<script type="text/javascript">
    $(window).load(function() {
        $('body img').not('.view-chapter img').each(function() {
            if ($(this).width() == 0 || $(this).height() == 0 || $(this).width() == 1 || $(this).height() == 1) {
                $(this).css('display', 'none');
            }
        });
        $('#sticky-footer, #masthead, .more-a').each(function() {
            if ($(this).height() == 0) {
                $(this).remove();
            }
        });
    });
</script>
<script type="text/javascript" src="{{ url('public/A3manga/www.a3manga.com') }}/wp-content/cache/minify/32d49.default.include-footer.cd85bb.js"></script>
</body>

</html>