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
    <title>Truyện Tranh | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(url('public/A3manga/www.a3manga.com')); ?>/wp-content/themes/a3manga/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('public/A3manga/www.a3manga.com')); ?>/wp-content/cache/minify/32d49.default.include.f9049d.css" media="all" />
    <link rel="shortcut icon" href="<?php echo e(url('public/A3manga/www.a3manga.com')); ?>/wp-content/themes/a3manga/images/favicon.png.htm">
    <link rel="apple-touch-icon" href="<?php echo e(url('public/A3manga/www.a3manga.com')); ?>/wp-content/themes/a3manga/images/apple-touch-icon.png.htm">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



    <?php echo $__env->yieldContent('css'); ?>

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
            <a href="<?php echo e(url('')); ?>">
                <h1 class="logo pull-left">A3 Manga</h1>
            </a>
        </div>
        <div class="navbar-right navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li id="menu-item-158524" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-158524">
                    <a href="<?php echo e(url('danh-sach-truyen.html')); ?>">Danh sách truyện</a>
                </li>

                <li id="menu-item-158525" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-158525">
                    <a href="<?php echo e(url('danh-sach-the-loai.html')); ?>">Thể loại</a>
                </li>

                <!-- <li id="menu-item-1073411" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1073411">
                    <a href="truyen-xem-nhieu/index.htm">Truyện xem nhiều</a>
                </li>-->
            </ul>

            <form class="navbar-form navbar-right" action="<?php echo e(url('tim-kiem')); ?>" method="get" role="search" >
                <div class="form-group search-wrapper ui-widget">
                    <input type="text" name="s" id="tags" placeholder="Tìm kiếm truyện..." class="search-txt">
                    <button type="submit" class="search-btn"><i class="glyphicon glyphicon-search"></i></button>

                </div>

            </form>



            <script>
                $( function() {
                    var availableTags = [
                        <?php
                            echo htmlspecialchars_decode("'" . implode("','",  \App\Story::where('id', '>', 0)->where('status', 1)->pluck('ten')->toArray() ) . "'")
                        ?>
                    ];
                    $( "#tags" ).autocomplete({
                        source: availableTags
                    });
                } );
            </script>



        </div>
    </div>
</header>


<section class="container">

    <?php $__env->startSection('breadcrumb'); ?>

    <?php echo $__env->yieldSection(); ?>

    <?php $__env->startSection('top-hot'); ?>
    <div class="top-hot">
        <div id="owl-top-hot" class="owl-carousel">
            <?php $__currentLoopData = \App\Chapter::where('status', 1)->orderBy('ngay_them', 'DESC')->limit(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <div class="item">
                <a href="<?php echo e(url('truyen/' . \App\Story::findOrFail($item->truyen_id)->slug . '.html')); ?>" title="<?php echo e(\App\Story::findOrFail($item->truyen_id)->ten); ?>">
                    <img class="img-thumbnail" src="<?php echo e(url('public/image/' . \App\Story::findOrFail($item->truyen_id)->image_link)); ?>" alt="<?php echo e(\App\Story::findOrFail($item->truyen_id)->ten); ?>">
                    <h3><?php echo e(\App\Story::findOrFail($item->truyen_id)->ten); ?></h3>
                </a>

                <a href="<?php echo e(url('truyen/' . \App\Story::findOrFail($item->truyen_id)->slug . '/' . $item->slug . '.html' )); ?>">
                    <p class="chap"> <?php echo e($item->ten); ?></p>

                    <?php

                        $dt = new \Carbon\Carbon($item->ngay_them);
                        $now = \Carbon\Carbon::now();

                        $diffForHuman = '';


                        $diffInMinutes = $now->diffInMinutes($dt);
                        $diffInHours = $now->diffInHours($dt);
                        $diffInDays = $now->diffInDays($dt);

                        if ($diffInMinutes >= 0 && $diffInMinutes< 60){
                            $diffForHuman = $diffInMinutes .' phút trước';
                        }elseif ($diffInHours >= 0 && $diffInHours < 24){
                             $diffForHuman = $diffInHours .' giờ trước';
                        }elseif ($diffInDays >=0 && $diffInDays<= 7){
                            $diffForHuman = $diffInDays .' ngày trước';
                        }else{
                            $diffForHuman = $dt->format('d-m-Y');
                        }

                    ?>
                    <p class="chap-date"><i class="glyphicon glyphicon-time"></i> <?php echo $diffForHuman ?></p>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </div>
    </div>
    <?php echo $__env->yieldSection(); ?>


    <div class="row">

        <?php $__env->startSection('left'); ?>
        <div class="col-md-8">
            <h2 class="org-title">Truyện mới cập nhật</h2>
            <div class="comic-list">




                <div class="row responsive-row">

                    <?php 
                    $chaps = \App\Chapter::where('status', 1)->orderBy('ngay_them', 'DESC')->paginate(20);
                     ?>
                    <?php $__currentLoopData = $chaps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chap): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <div class="col-md-6 comic-item">
                        <div class="comic-img">
                            <a href="<?php echo e(url('truyen/' . \App\Story::findOrFail($chap->truyen_id)->slug . '.html' )); ?>" title="<?php echo e(\App\Story::findOrFail($chap->truyen_id)->ten); ?>">
                                <img class="img-thumbnail" src="<?php echo e(url('public/image')); ?>/<?php echo e(\App\Story::findOrFail($chap->truyen_id)->image_link); ?>" alt="">
                            </a>
                        </div>
                        <div class="comic-title-link">
                            <a href="<?php echo e(url('truyen/' . \App\Story::findOrFail($chap->truyen_id)->slug . '.html' )); ?>" title="<?php echo e(\App\Story::findOrFail($chap->truyen_id)->ten); ?>">
                                <h3 class="comic-title">
                                    <?php echo e(\App\Story::findOrFail($chap->truyen_id)->ten); ?>

                                </h3>
                            </a>
                            <a href="<?php echo e(url('truyen/' . \App\Story::findOrFail($chap->truyen_id)->slug . '/' . $chap->slug . '.html' )); ?>"><?php echo e($chap->ten); ?></a>


                            <?php

                            $dt = new \Carbon\Carbon($chap->ngay_them);
                            $now = \Carbon\Carbon::now();

                            $diffForHuman = '';


                            $diffInMinutes = $now->diffInMinutes($dt);
                            $diffInHours = $now->diffInHours($dt);
                            $diffInDays = $now->diffInDays($dt);

                            if ($diffInMinutes >= 0 && $diffInMinutes< 60){
                                $diffForHuman = $diffInMinutes .' phút trước';
                            }elseif ($diffInHours >= 0 && $diffInHours < 24){
                                $diffForHuman = $diffInHours .' giờ trước';
                            }elseif ($diffInDays >=0 && $diffInDays<= 7){
                                $diffForHuman = $diffInDays .' ngày trước';
                            }else{
                                $diffForHuman = $dt->format('d-m-Y');
                            }

                            ?>

                            <span class="uptime">
                                <i class="glyphicon glyphicon-time"></i> <?php echo e($diffForHuman); ?>

                            </span>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </div>



            </div>
            <div class="clearfix"></div>
            <nav>
                <ul class="pager">

                    <?php if($chaps->onFirstPage()): ?>
                        <li class="previous disabled"><a href=""><span aria-hidden="true">&larr;</span> Trước</a></li>
                    <?php else: ?>
                        <li class="previous"><a href="<?php echo e($chaps->previousPageUrl()); ?>"><span aria-hidden="true">&larr;</span> Trước</a></li>
                    <?php endif; ?>

                    <li class="pager-note">Trang <?php echo e($chaps->currentPage()); ?>/<?php echo e($chaps->lastPage()); ?></li>

                    <?php if($chaps->hasMorePages()): ?>
                        <li class="next"><a href="<?php echo e($chaps->nextPageUrl()); ?>"><span aria-hidden="true">&rarr;</span> Sau</a></li>
                    <?php else: ?>
                        <li class="next disableled"><a href=""><span aria-hidden="true">&larr;</span> Sau</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
        <?php echo $__env->yieldSection(); ?>

        <?php $__env->startSection('right'); ?>
        <div class="sidebar col-md-4">
            <div class="widget text-center force-center more-a">

                <img src="<?php echo e(url('public/image/' . \App\Ads::findOrFail(1)->image_link )); ?>">
            </div>
            <div class="widget text-center">
                <div class="fb-page" data-href="https://www.facebook.com/a3manga" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="javascript:if(confirm('https://www.facebook.com/a3manga\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.facebook.com/a3manga'"><a href="javascript:if(confirm('https://www.facebook.com/a3manga\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.facebook.com/a3manga'" target="_blank" rel="nofollow">A3 Manga</a></blockquote>
                    </div>
                </div>
            </div>
            <div id="google-badge" class="widget">
                <div class="g-page" data-width="307" data-href="https://plus.google.com/111895487585104651903" data-showtagline="false" data-rel="publisher"></div>
            </div>
            
            
            <!--<div class="widget">
                <h3 class="green-title margin-bottom-15px">Loạt truyện</h3>
                <div class="tags">
                    <?php 
                    /*
                    <?php $__currentLoopData = \App\Story::where('status', 1)->limit(6)->orderBy('id', "DESC")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <a href="<?php echo e(url('truyen/' . $item->slug . '.html' )); ?>"><?php echo e($item->ten); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>*/
                         ?>

                </div>
            </div>-->
            
            
            <div id="text-3" class="widget text-center force-center widget_text">
                <h2 class="red-title text-left margin-bottom-15px">Truyện xem nhiều</h2>
                <div class="textwidget">
                    <!--<ul class="most-views text-left">
                    <?php  /*
                        <?php $__currentLoopData = \App\Story::where('status', 1)->orderBy('view', 'DESC')->limit(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <li>
                            <p class="super-title"><a href="<?php echo e(url('truyen/' . $item->slug . '.html' )); ?>"><?php echo e($item->ten); ?></a></p>

                            <?php 

                                $lastChapter = \Illuminate\Support\Facades\DB::table('chuong')->where('status', '=', 1)
                            ->where('truyen_id', '=',$item->id)
                            ->orderBy('ngay_them', 'ASC')
                            ->first();

                             ?>
                            <p class="small-title">Chương mới nhất: <?php echo e($lastChapter == null ? 'null' : $lastChapter->ten); ?></p>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                        */
                         ?>
                    </ul> -->

                    <ul class="most-views text-left">

                        <?php $__currentLoopData = \App\TopRead::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <li>
                            <p class="super-title"><a href="<?php echo e(url('truyen/' . \App\Story::findOrFail(\App\Chapter::findOrFail($item->chuong_id)->truyen_id)->slug . '.html' )); ?>"><?php echo e(\App\Story::findOrFail(\App\Chapter::findOrFail($item->chuong_id)->truyen_id)->ten); ?></a></p>

                            <p class="small-title">Chương mới nhất: <?php echo e(\App\Chapter::findOrFail($item->chuong_id)->ten); ?></p>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </ul>

                </div>
            </div>
        </div>
        <?php echo $__env->yieldSection(); ?>

    </div>

    <div class="text-center force-center hidden-xs hidden-sm widget more-a">

    </div>
</section>


<?php $__env->startSection('middle'); ?>
    <?php echo $__env->yieldSection(); ?>

<?php $__env->startSection('bottom'); ?>

    <?php echo $__env->yieldSection(); ?>



<footer class="clearfix">
    <div class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="footer-links">
                        <h4 class="footer-title blue">Thể loại</h4>
                        <div class="tags">
                            <?php $__currentLoopData = \App\Category::where('status', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <a href="<?php echo e(url('the-loai/' . $item->slug . '.html')); ?>"><?php echo e($item->ten); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="note text-justify">Mọi thông tin và hình ảnh trên website đều được sưu tầm trên Internet. Chúng tôi không sở hữu hay chịu trách nhiệm bất kỳ thông tin nào trên web này. Nếu làm ảnh hưởng đến cá nhân hay tổ chức nào, khi được yêu cầu, chúng tôi sẽ xem xét và gỡ bỏ ngay lập tức.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container copyright-txt">© 2014 - 2017 <a href="index.htm">Truyện Tranh Online</a>. <a href="" target="_blank" rel="nofollow">Facebook</a> &middot; <a href="" target="_blank" rel="nofollow">Twitter</a> &middot; <a href="" target="_blank" rel="publisher">Google+</a> &middot; <a href="" target="_blank" rel="nofollow">DeviantART</a> <span class="pull-right contact-email">Liên hệ: <a href="mailto:truyentranh@gmail.com">truyentranh@gmail.com</a></span></div>
        <div class="clearfix"></div>
    </div>
</footer>

<div id="go-to-top" class="glyphicon glyphicon-chevron-up"></div>


<?php echo $__env->yieldContent('js'); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?php echo e(url('public/A3manga/www.a3manga.com')); ?>/wp-content/themes/a3manga/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo e(url('public/A3manga/www.a3manga.com')); ?>/wp-content/themes/a3manga/js/main.min.js"></script>

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
<script type="text/javascript" src="<?php echo e(url('public/A3manga/www.a3manga.com')); ?>/wp-content/cache/minify/32d49.default.include-footer.cd85bb.js"></script>
</body>

</html>