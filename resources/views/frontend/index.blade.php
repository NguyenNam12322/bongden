@extends('frontend.layouts.apps')
@section('content')

<main id="main" class="">
    <div id="content" role="main" class="content-area">
        <div class="slider-wrapper relative" id="slider-92273154">
            <div class="slider slider-type-fade slider-nav-circle slider-nav-large slider-nav-light slider-style-normal" data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 4000,
            "pauseAutoPlayOnHover" : true,
            "prevNextButtons": true,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 10,
            "percentPosition": true,
            "pageDots": true,
            "rightToLeft": false,
            "draggable": true,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'>



                @if(isset($banners))

                @foreach($banners as $key =>$value)

                <div class="img has-hover x md-x lg-x y md-y lg-y image-banner" id="image_{{ $key }}">
                    <div class="img-inner dark"> <img data-lazyloaded="1" src="{{ asset($value->image) }}" class="attachment-original size-original" alt="" data-srcset="" /></div>
                    <style>
                        .image-banner {
                          width: 100%;
                        }
                    </style>
                </div>

               
               
                @endforeach
                @endif


                


            </div>
            <div class="loading-spin dark large centered"></div>
        </div>
        <div class="container section-title-container">
            <h2 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:90%;color:rgb(20, 20, 20);">Giới thiệu TLC Lighting</span><b></b></h2>
        </div>
        <div class="row align-middle home011" id="row-517170931">
            <div id="col-1071218425" class="col medium-6 small-12 large-6">
                <div class="col-inner">
                    <div class="lyte-wrapper" title="Giới thiệu doanh nghiệp - Tập đo&agrave;n TLC Việt Nam (TLC LIGHTING)" style="width:853px;max-width: 100%;margin:5px auto;">
                        <div class="lyMe hidef" id="WYL_Q3MOq68HDLE">
                            <div id="lyte_Q3MOq68HDLE" data-src="https://tlclighting.com.vn/wp-content/plugins/wp-youtube-lyte/lyteCache.php?origThumbUrl=https%3A%2F%2Fi.ytimg.com%2Fvi%2FQ3MOq68HDLE%2Fmaxresdefault.jpg" class="pL">
                                <div class="tC">
                                    <div class="tT">Giới thiệu doanh nghiệp - Tập đoàn TLC Việt Nam (TLC LIGHTING)</div>
                                </div>
                                <div class="play"></div>
                                <div class="ctrl">
                                    <div class="Lctrl"></div>
                                    <div class="Rctrl"></div>
                                </div>
                            </div><noscript><a href="https://youtu.be/Q3MOq68HDLE"><img src="wp-content/plugins/wp-youtube-lyte/lyteCacheeabb.jpg?origThumbUrl=https%3A%2F%2Fi.ytimg.com%2Fvi%2FQ3MOq68HDLE%2F0.jpg" alt="Giới thiệu doanh nghiệp - Tập đo&agrave;n TLC Việt Nam (TLC LIGHTING)" width="853" height="460" /><br />Watch this video on YouTube</a></noscript>
                        </div>
                    </div>
                    <div class="lL" style="max-width:100%;width:853px;margin:5px auto;"></div>
                </div>
            </div>
            <div id="col-42649924" class="col home013 medium-3 small-12 large-3">
                <div class="col-inner">
                    <div class="row" id="row-754715417">
                        <div id="col-1836285709" class="col home01 medium-11 small-12 large-11">
                            <div class="col-inner">
                                <div class="row" id="row-847416067">
                                    <div id="col-665372605" class="col small-10 large-12">
                                        <div class="col-inner">
                                            <div class="home011"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MSIgaGVpZ2h0PSI1MSIgdmlld0JveD0iMCAwIDUxIDUxIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" class="wp-image-6188" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/icon-tam-nhin-su-menh-50.png" alt="" width="51" height="51" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2020/09/icon-tam-nhin-su-menh-50.png 51w, https://tlclighting.com.vn/wp-content/uploads/2020/09/icon-tam-nhin-su-menh-50-31x31.png 31w" data-sizes="(max-width: 51px) 100vw, 51px" /> <a href="tam-nhin-su-menh-tlc-lighting/index.html">Tầm nhìn &#8211; Sứ mệnh</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="row-1760904380">
                                    <div id="col-2124372192" class="col small-10 large-12">
                                        <div class="col-inner">
                                            <div class="home011"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MSIgaGVpZ2h0PSI1MSIgdmlld0JveD0iMCAwIDUxIDUxIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" class="wp-image-5723" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-05.png" alt="" width="51" height="51" /> <a href="gioi-thieu/index.html" rel="">Thành tựu</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="row-1161732849">
                                    <div id="col-1178738279" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div class="home011"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MSIgaGVpZ2h0PSI1MSIgdmlld0JveD0iMCAwIDUxIDUxIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" class="wp-image-5724" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-06.png" alt="" width="51" height="51" /> <a href="gioi-thieu/index.html" rel="">Quá trình phát triển</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="col-714367896" class="col home013 medium-3 small-12 large-3">
                <div class="col-inner">
                    <div class="row" id="row-963881959">
                        <div id="col-188135512" class="col home01 small-12 large-12">
                            <div class="col-inner">
                                <div class="row" id="row-1009877497">
                                    <div id="col-1306782943" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div class="home011"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MSIgaGVpZ2h0PSI1MSIgdmlld0JveD0iMCAwIDUxIDUxIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" class="wp-image-5725" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-07.png" alt="" width="51" height="51" /> <a href="#" rel="">Văn phòng</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="row-529072457">
                                    <div id="col-854187208" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div class="home011"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MSIgaGVpZ2h0PSI1MSIgdmlld0JveD0iMCAwIDUxIDUxIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" class="wp-image-5726" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-08.png" alt="" width="51" height="51" /> <a href="gioi-thieu/index.html" rel="">Nhà máy</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="row-202244747">
                                    <div id="col-682755514" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <div class="home011"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MSIgaGVpZ2h0PSI1MSIgdmlld0JveD0iMCAwIDUxIDUxIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" class="wp-image-5727" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-09.png" alt="" width="51" height="51" /> <a href="gioi-thieu/index.html">Sơ đồ tổ chức</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section-title-container">
            <h2 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:90%;color:rgb(20, 20, 20);">Nhóm sản phẩm chính</span><b></b></h2>
        </div>


        <div class="row large-columns-4 medium-columns-3 small-columns-2 row-xsmall has-shadow row-box-shadow-1-hover slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-led-am-tran/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-am-tran-tos-300x300.jpg" alt="Đèn LED âm trần" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn LED âm trần</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-led-tuyp/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-tuyp-thuy-tinh-20w-300x300.jpg" alt="Đèn LED Tuýp" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn LED Tuýp</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-led-bup/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-bup-tru-eco-300x300.jpg" alt="Đèn LED Búp" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn LED Búp</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-led-op-tran/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-op-tran-tlc-300x300.jpg" alt="Đèn LED ốp trần" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn LED ốp trần</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-led-panel/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-panel-tam-01-1-300x300.jpg" alt="Đèn LED panel tấm" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn LED panel tấm</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-led-day/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-day-01-300x300.jpg" alt="Đèn LED dây" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn LED dây</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-led-roi/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-roi-ray-zoom-300x300.jpg" alt="Đèn LED rọi ray" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn LED rọi ray</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-tuong/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-tuong-01-300x300.jpg" alt="Đèn LED tường" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn LED tường</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-pha-led/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-pha-aeon-01-300x300.jpg" alt="Đèn pha LED" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn pha LED</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-led-xuong/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-nha-xuong-01-300x300.jpg" alt="Đèn LED nhà xưởng" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn LED nhà xưởng</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-nang-luong-mat-troi-max-eco/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-pha-nang-luong-mat-troi-01-300x300.jpg" alt="Đèn LED năng lượng mặt trời" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn LED năng lượng mặt trời</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="product-category col">
                <div class="col-inner"> <a href="danh-muc/den-exit-den-chi-dan/index.html">
                        <div class="box box-category has-hover box-default ">
                            <div class="box-image">
                                <div class="image-cover" style="padding-top:100%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/den-led-exit-01-300x300.jpg" alt="Đèn LED exit, sự cố" width="300" height="300" /></div>
                            </div>
                            <div class="box-text text-center dark" style="background-color:rgb(0, 81, 134);padding:0px 0px 9px 0px;">
                                <div class="box-text-inner">
                                    <h3 class="uppercase header-title"> Đèn LED exit, sự cố</h3>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>

        <!-- tạm thời ẩn -->
        <!-- <div class="row" id="row-1228308357">
            <div id="col-630667971" class="col medium-4 small-12 large-4">
                <div class="col-inner">
                    <div class="container section-title-container home0211">
                        <h3 class="section-title section-title-normal"><b></b><span class="section-title-main" style="font-size:75%;"><i class="icon-gift"></i>CHƯƠNG TRÌNH KHUYẾN MÃI</span><b></b><a href="category/khuyen-mai/index.html" target="">Xem thêm<i class="icon-angle-right"></i></a></h3>
                    </div>
                    <div id="row-787408613" class="home021 slider slider-auto-height row-collapse slider-nav-reveal" data-flickity-options='{"imagesLoaded": true, "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : 3000}'>
                        <div class="col post-item">
                            <div class="col-inner"> <a href="the-le-chuong-trinh-vong-quay-kim-cuong-co-hoi-so-huu-vien-kim-cuong-0-25-carat/index.html" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56.25%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMTY5IiB2aWV3Qm94PSIwIDAgMzAwIDE2OSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" width="300" height="169" data-src="https://tlclighting.com.vn/wp-content/uploads/2023/03/shutterstock_2158201619-copy-300x169.jpg" class="attachment-medium size-medium wp-post-image" alt="vong quay kim cuong 1" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2023/03/shutterstock_2158201619-copy-300x169.jpg 300w, https://tlclighting.com.vn/wp-content/uploads/2023/03/shutterstock_2158201619-copy-800x450.jpg 800w, https://tlclighting.com.vn/wp-content/uploads/2023/03/shutterstock_2158201619-copy-768x432.jpg 768w, https://tlclighting.com.vn/wp-content/uploads/2023/03/shutterstock_2158201619-copy-1536x864.jpg 1536w, https://tlclighting.com.vn/wp-content/uploads/2023/03/shutterstock_2158201619-copy-2048x1152.jpg 2048w, https://tlclighting.com.vn/wp-content/uploads/2023/03/shutterstock_2158201619-copy-31x17.jpg 31w" data-sizes="(max-width: 300px) 100vw, 300px" /></div>
                                        </div>
                                        <div class="box-text text-center" style="background-color:rgb(236, 236, 236);">
                                            <div class="box-text-inner blog-post-inner">
                                                <h3 class="post-title is-large ">Thể lệ chương trình VÒNG QUAY KIM CƯƠNG &#8211; Cơ hội sở hữu VIÊN KIM CƯƠNG 0.25 CARAT</h3>
                                                <div class="is-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="col post-item">
                            <div class="col-inner"> <a href="chuc-mung-dai-ly-dau-tien-doi-xe-tren-ung-dung-den-led-tlc/index.html" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56.25%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMjAwIiB2aWV3Qm94PSIwIDAgMzAwIDIwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" width="300" height="200" data-src="https://tlclighting.com.vn/wp-content/uploads/2022/10/chuc-mung-dai-ly-dau-tien-doi-qua-thanh-cong-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2022/10/chuc-mung-dai-ly-dau-tien-doi-qua-thanh-cong-300x200.jpg 300w, https://tlclighting.com.vn/wp-content/uploads/2022/10/chuc-mung-dai-ly-dau-tien-doi-qua-thanh-cong-31x21.jpg 31w, https://tlclighting.com.vn/wp-content/uploads/2022/10/chuc-mung-dai-ly-dau-tien-doi-qua-thanh-cong.jpg 600w" data-sizes="(max-width: 300px) 100vw, 300px" /></div>
                                        </div>
                                        <div class="box-text text-center" style="background-color:rgb(236, 236, 236);">
                                            <div class="box-text-inner blog-post-inner">
                                                <h3 class="post-title is-large ">Chúc mừng đại lý đầu tiên đổi xe trên ứng dụng Đèn Led TLC</h3>
                                                <div class="is-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="col post-item">
                            <div class="col-inner"> <a href="ctkm-tich-xu-ngay-quay-la-trung-tren-ung-dung-den-led-tlc/index.html" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56.25%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMTY5IiB2aWV3Qm94PSIwIDAgMzAwIDE2OSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" width="300" height="169" data-src="https://tlclighting.com.vn/wp-content/uploads/2022/04/Banner-TICH-XU-NGAY-1920x1080-min-300x169.jpg" class="attachment-medium size-medium wp-post-image" alt="TLC-LIGHTING-HUYEN-MAI" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2022/04/Banner-TICH-XU-NGAY-1920x1080-min-300x169.jpg 300w, https://tlclighting.com.vn/wp-content/uploads/2022/04/Banner-TICH-XU-NGAY-1920x1080-min-800x450.jpg 800w, https://tlclighting.com.vn/wp-content/uploads/2022/04/Banner-TICH-XU-NGAY-1920x1080-min-768x432.jpg 768w, https://tlclighting.com.vn/wp-content/uploads/2022/04/Banner-TICH-XU-NGAY-1920x1080-min-1536x865.jpg 1536w, https://tlclighting.com.vn/wp-content/uploads/2022/04/Banner-TICH-XU-NGAY-1920x1080-min-31x17.jpg 31w, https://tlclighting.com.vn/wp-content/uploads/2022/04/Banner-TICH-XU-NGAY-1920x1080-min.jpg 2000w" data-sizes="(max-width: 300px) 100vw, 300px" /></div>
                                        </div>
                                        <div class="box-text text-center" style="background-color:rgb(236, 236, 236);">
                                            <div class="box-text-inner blog-post-inner">
                                                <h3 class="post-title is-large ">CTKM: TÍCH XU NGAY &#8211; QUAY LÀ TRÚNG trên ứng dụng Đèn LED TLC</h3>
                                                <div class="is-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="col-1839633222" class="col medium-4 small-12 large-4">
                <div class="col-inner">
                    <div class="container section-title-container home0211">
                        <h3 class="section-title section-title-normal"><b></b><span class="section-title-main" style="font-size:75%;"><i class="icon-star"></i>Sự kiện nổi bật</span><b></b><a href="category/tin-hoat-dong/index.html" target="">Xem thêm<i class="icon-angle-right"></i></a></h3>
                    </div>
                    <div id="row-1695664023" class="home021 slider slider-auto-height row-collapse slider-nav-reveal" data-flickity-options='{"imagesLoaded": true, "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : 3000}'>
                        <div class="col post-item">
                            <div class="col-inner"> <a href="tlc-lighting-khoi-cong-xay-dung-nha-may-san-xuat-den-led-moi-tai-ha-nam/index.html" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56.25%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMjAwIiB2aWV3Qm94PSIwIDAgMzAwIDIwMCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" width="300" height="200" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/03/IMG_0344-600x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Lễ động thổ xây dựng nhà máy sản xuất đèn LED TLC Lighting" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2020/03/IMG_0344-600x400.jpg 600w, https://tlclighting.com.vn/wp-content/uploads/2020/03/IMG_0344-800x533.jpg 800w, https://tlclighting.com.vn/wp-content/uploads/2020/03/IMG_0344-768x512.jpg 768w, https://tlclighting.com.vn/wp-content/uploads/2020/03/IMG_0344-1024x683.jpg 1024w, https://tlclighting.com.vn/wp-content/uploads/2020/03/IMG_0344-scaled.jpg 2000w" data-sizes="(max-width: 300px) 100vw, 300px" /></div>
                                        </div>
                                        <div class="box-text text-center" style="background-color:rgb(236, 236, 236);">
                                            <div class="box-text-inner blog-post-inner">
                                                <h3 class="post-title is-large ">TLC Lighting khởi công xây dựng nhà máy sản xuất đèn LED mới tại Hà Nam</h3>
                                                <div class="is-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="col post-item">
                            <div class="col-inner"> <a href="tlc-lighting-ki-ket-hop-tac-cung-thuong-hieu-chip-led-osram/index.html" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56.25%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMTE3IiB2aWV3Qm94PSIwIDAgMzAwIDExNyI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" width="300" height="117" data-src="https://tlclighting.com.vn/wp-content/uploads/2019/03/IMG_0045-600x234.jpg" class="attachment-medium size-medium wp-post-image" alt="tlc-osram-thuong-hieu-san-pham-moi-cua-tlclighting" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2019/03/IMG_0045-600x234.jpg 600w, https://tlclighting.com.vn/wp-content/uploads/2019/03/IMG_0045-768x300.jpg 768w, https://tlclighting.com.vn/wp-content/uploads/2019/03/IMG_0045-1024x400.jpg 1024w, https://tlclighting.com.vn/wp-content/uploads/2019/03/IMG_0045-500x195.jpg 500w, https://tlclighting.com.vn/wp-content/uploads/2019/03/IMG_0045.jpg 2000w" data-sizes="(max-width: 300px) 100vw, 300px" /></div>
                                        </div>
                                        <div class="box-text text-center" style="background-color:rgb(236, 236, 236);">
                                            <div class="box-text-inner blog-post-inner">
                                                <h3 class="post-title is-large ">TLC Lighting kí kết hợp tác cùng thương hiệu chip LED Osram</h3>
                                                <div class="is-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="col post-item">
                            <div class="col-inner"> <a href="tlc-lighting-duoc-vinh-danh-doanh-nghiep-hang-viet-nam-chat-luong-cao-2020/index.html" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56.25%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMjAzIiB2aWV3Qm94PSIwIDAgMzAwIDIwMyI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" width="300" height="203" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/06/IMG_1127-592x400.jpg" class="attachment-medium size-medium wp-post-image" alt="“Ông Trần Mạnh Tuấn - GĐ Cty CP Đèn chiếu sáng Thiên Lộc đại diện công ty nhận Bằng khen Doanh nghiệp Hàng Việt Nam Chất lượng cao năm 2020”" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2020/06/IMG_1127-592x400.jpg 592w, https://tlclighting.com.vn/wp-content/uploads/2020/06/IMG_1127-800x540.jpg 800w, https://tlclighting.com.vn/wp-content/uploads/2020/06/IMG_1127-768x519.jpg 768w, https://tlclighting.com.vn/wp-content/uploads/2020/06/IMG_1127-1024x691.jpg 1024w, https://tlclighting.com.vn/wp-content/uploads/2020/06/IMG_1127-scaled.jpg 2000w" data-sizes="(max-width: 300px) 100vw, 300px" /></div>
                                        </div>
                                        <div class="box-text text-center" style="background-color:rgb(236, 236, 236);">
                                            <div class="box-text-inner blog-post-inner">
                                                <h3 class="post-title is-large ">TLC Lighting được vinh danh Doanh Nghiệp HÀNG VIỆT NAM CHẤT LƯỢNG CAO 2020</h3>
                                                <div class="is-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="col-1457241426" class="col medium-4 small-12 large-4">
                <div class="col-inner">
                    <div class="container section-title-container home0211">
                        <h3 class="section-title section-title-normal"><b></b><span class="section-title-main" style="font-size:75%;"><i class="icon-heart"></i>Thông tin hữu ích</span><b></b><a href="category/thong-tin-huu-ich/index.html" target="">Xem thêm<i class="icon-angle-right"></i></a></h3>
                    </div>
                    <div id="row-805320392" class="home021 slider slider-auto-height row-collapse slider-nav-reveal" data-flickity-options='{"imagesLoaded": true, "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : 3000}'>
                        <div class="col post-item">
                            <div class="col-inner"> <a href="cach-bo-tri-den-led-am-tran-phong-khach/index.html" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56.25%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMTY5IiB2aWV3Qm94PSIwIDAgMzAwIDE2OSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" width="300" height="169" data-src="https://tlclighting.com.vn/wp-content/uploads/2023/08/cach-bo-tri-den-led-am-tran-phong-khach-01-300x169.jpg" class="attachment-medium size-medium wp-post-image" alt="cách bố trí đèn led âm trần phòng khách" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2023/08/cach-bo-tri-den-led-am-tran-phong-khach-01-300x169.jpg 300w, https://tlclighting.com.vn/wp-content/uploads/2023/08/cach-bo-tri-den-led-am-tran-phong-khach-01-800x450.jpg 800w, https://tlclighting.com.vn/wp-content/uploads/2023/08/cach-bo-tri-den-led-am-tran-phong-khach-01-768x432.jpg 768w, https://tlclighting.com.vn/wp-content/uploads/2023/08/cach-bo-tri-den-led-am-tran-phong-khach-01-1536x864.jpg 1536w, https://tlclighting.com.vn/wp-content/uploads/2023/08/cach-bo-tri-den-led-am-tran-phong-khach-01-31x17.jpg 31w, https://tlclighting.com.vn/wp-content/uploads/2023/08/cach-bo-tri-den-led-am-tran-phong-khach-01.jpg 1920w" data-sizes="(max-width: 300px) 100vw, 300px" /></div>
                                        </div>
                                        <div class="box-text text-center" style="background-color:rgb(236, 236, 236);">
                                            <div class="box-text-inner blog-post-inner">
                                                <h3 class="post-title is-large ">Hướng dẫn cách bố trí đèn LED âm trần phòng khách chi tiết</h3>
                                                <div class="is-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="col post-item">
                            <div class="col-inner"> <a href="bao-gia-den-led-am-tran-thach-cao/index.html" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56.25%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMTY5IiB2aWV3Qm94PSIwIDAgMzAwIDE2OSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" width="300" height="169" data-src="https://tlclighting.com.vn/wp-content/uploads/2023/08/den-led-am-tran-thach-cao-000-300x169.jpg" class="attachment-medium size-medium wp-post-image" alt="đèn led âm trần thạch cao" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2023/08/den-led-am-tran-thach-cao-000-300x169.jpg 300w, https://tlclighting.com.vn/wp-content/uploads/2023/08/den-led-am-tran-thach-cao-000-800x450.jpg 800w, https://tlclighting.com.vn/wp-content/uploads/2023/08/den-led-am-tran-thach-cao-000-768x432.jpg 768w, https://tlclighting.com.vn/wp-content/uploads/2023/08/den-led-am-tran-thach-cao-000-1536x864.jpg 1536w, https://tlclighting.com.vn/wp-content/uploads/2023/08/den-led-am-tran-thach-cao-000-31x17.jpg 31w, https://tlclighting.com.vn/wp-content/uploads/2023/08/den-led-am-tran-thach-cao-000.jpg 1920w" data-sizes="(max-width: 300px) 100vw, 300px" /></div>
                                        </div>
                                        <div class="box-text text-center" style="background-color:rgb(236, 236, 236);">
                                            <div class="box-text-inner blog-post-inner">
                                                <h3 class="post-title is-large ">Báo giá đèn LED âm trần thạch cao giá tốt, uy tín</h3>
                                                <div class="is-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="col post-item">
                            <div class="col-inner"> <a href="nen-chon-quat-tran-bao-nhieu-w/index.html" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56.25%;"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMTY5IiB2aWV3Qm94PSIwIDAgMzAwIDE2OSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" width="300" height="169" data-src="https://tlclighting.com.vn/wp-content/uploads/2023/07/quat-tran-bao-nhieu-w-00-300x169.jpg" class="attachment-medium size-medium wp-post-image" alt="" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2023/07/quat-tran-bao-nhieu-w-00-300x169.jpg 300w, https://tlclighting.com.vn/wp-content/uploads/2023/07/quat-tran-bao-nhieu-w-00-31x17.jpg 31w, https://tlclighting.com.vn/wp-content/uploads/2023/07/quat-tran-bao-nhieu-w-00.jpg 600w" data-sizes="(max-width: 300px) 100vw, 300px" /></div>
                                        </div>
                                        <div class="box-text text-center" style="background-color:rgb(236, 236, 236);">
                                            <div class="box-text-inner blog-post-inner">
                                                <h3 class="post-title is-large ">Nên chọn quạt trần công suất bao nhiêu W? Hướng dẫn sử dụng quạt trần tiết kiệm điện</h3>
                                                <div class="is-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #row-1228308357 > .col > .col-inner {
                  padding: 50px 0px 0px 0px;
                }
            </style>
        </div> -->
        <div class="row row-full-width" id="row-1390206086">
            <div id="col-610660523" class="col home032 small-12 large-12">
                <div class="col-inner">
                    <div class="container section-title-container" style="margin-top:30px;margin-bottom:5px;">
                        <h2 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:90%;color:rgb(20, 20, 20);">Giải pháp chiếu sáng</span><b></b></h2>
                    </div>

                    <?php 
                                                
                        $post_2 = App\Models\post::where('category', 2)->select('title', 'link', 'image')->get();
                    ?>    
                    <div class="row home031 large-columns-3 medium-columns-1 small-columns-1 row-small slider row-slider slider-nav-simple slider-nav-light" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : 6000}'>
                        @if(!empty($post_2)  && $post_2->count()>0)
                        @foreach($post_2 as $value)
                        <div class="col post-item">
                            <div class="col-inner"> 
                                <a href="{{ route('details', $value->link) }}" class="plain">
                                    <div class="box box-none box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:75%;"> <img data-lazyloaded="1" src="{{ asset($value->image)  }}" width="300" height="225" data-src="{{ asset($value->image)  }}" /></div>
                                        </div>
                                        <div class="box-text text-center is-small dark" style="background-color:rgb(0, 81, 134);">
                                            <div class="box-text-inner blog-post-inner">
                                                <h3 class="post-title is-large ">{{ $value->title  }}</h3>
                                                <div class="is-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <style>
                #row-1390206086 > .col > .col-inner {
                  padding: 5px 0px 25px 0px;
                  background-color: rgb(242, 242, 242);
                }
            </style>
        </div>


        <div class="row row-full-width" id="row-65360936">
            <div id="col-405892553" class="col home032 small-12 large-12">
                <div class="col-inner">
                    <div class="container section-title-container" style="margin-top:30px;margin-bottom:5px;">
                        <h2 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:90%;color:rgb(20, 20, 20);">Dự án đã triển khai</span><b></b></h2>
                    </div>
                    <?php 

                        $post_3 = App\Models\post::where('category', 4)->select('title', 'link', 'image')->get();
                    ?>

                    @include('include.home_slide', ['data'=>$post_3])
                </div>
            </div>
            <style>
                #row-65360936 > .col > .col-inner {
                  padding: 5px 0px 25px 0px;
                }
            </style>
        </div>



        <div class="row align-center hdxh" id="row-321784340">
            <div id="col-1327078478" class="col small-12 large-12">
                <div class="col-inner text-center">
                    <h2 style="text-align: center;"><span style="color: #1d4895; font-size: 24px;"><strong>HOẠT ĐỘNG XÃ HỘI</strong></span></h2>
                    <p style="text-align: center;"><span style="color: #666666; font-size: 16px;">Thắp sáng tương lai Việt Nam &#8211; Hỗ trợ hoàn cảnh khó khăn</span></p>

                    <?php 

                        $post_4 = App\Models\post::where('category', 5)->select('title', 'link', 'image')->get();
                    ?>


                    @include('include.home_slide', ['data'=>$post_4])



                    <a href="{{ route('details', 'hoat-dong-xa-hoi') }}" target="_self" class="button primary is-outline lowercase hdxh-bt" style="border-radius:99px;"> <span>Xem thêm</span> <i class="icon-angle-right"></i></a>
                </div>
                <style>
                    #col-1327078478 > .col-inner {
                      margin: 0px 0px -15px 0px;
                    }
                </style>
            </div>
            <style>
                #row-321784340 > .col > .col-inner {
                  padding: 20px 0px 0px 0px;
                }
            </style>
        </div>
        <section class="section" id="section_1838725852">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="row row-collapse align-center hdxh" id="row-266256906">
                    <div id="col-1973828722" class="col small-11 large-12">
                        <div class="col-inner text-center">
                            <h2 style="text-align: center;"><span style="color: #1d4895; font-size: 24px;"><strong>QUỸ NHÂN ÁI &#8211; THỢ ĐIỆN TLC</strong></span></h2>
                            <p style="text-align: center;"><span style="color: #666666; font-size: 16px;">Đồng hành cùng Thợ điện Việt</span></p>


                            <?php 

                                $post_5 = App\Models\post::where('category', 6)->select('title', 'link', 'image')->get();
                            ?>


                            @include('include.home_slide', ['data'=>$post_5])


                            <a href="{{ route('details', 'quy-nhan-ai') }}" target="_self" class="button primary is-outline lowercase hdxh-bt" style="border-radius:99px;"> <span>Xem thêm chính sách Quỹ nhân ái</span> <i class="icon-angle-right"></i></a>
                        </div>
                        <style>
                            #col-1973828722 > .col-inner {
                              margin: 0px 0px -10px 0px;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <style>
                #section_1838725852 {
                  padding-top: 30px;
                  padding-bottom: 30px;
                  background-color: rgb(242, 242, 242);
                }
            </style>
        </section>
        <section class="section" id="section_1730300577">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="row row-collapse align-center hdxh" id="row-1460353247">
                    <div id="col-954726736" class="col small-12 large-12">
                        <div class="col-inner text-center">
                            <h2 style="text-align: center;"><span style="color: #1d4895; font-size: 24px;"><strong>ỨNG DỤNG “ĐÈN LED TLC”</strong></span></h2>
                            <p style="text-align: center;"><span style="color: #666666; font-size: 16px;">Tham gia vào cộng đồng Thợ điện &#8211; Nhận ưu đãi khi mua hàng<br /></span><span style="color: #666666; font-size: 15px;">Tải ứng dụng tại đây</span></p>
                            <div class="row" id="row-1938389830">
                                <div id="col-1677320066" class="col hide-for-small medium-3 small-12 large-3">
                                    <div class="col-inner"></div>
                                </div>
                                <div id="col-216923647" class="col medium-3 small-8 large-3">
                                    <div class="col-inner">
                                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1772942968"> <a class="" href="https://play.google.com/store/apps/details?id=com.icontechnic.tlclighting&amp;hl=vi" target="_blank" rel="noopener noreferrer">
                                                <div class="img-inner dark"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1NzAiIGhlaWdodD0iMTcyIiB2aWV3Qm94PSIwIDAgNTcwIDE3MiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" width="570" height="172" data-src="https://tlclighting.com.vn/wp-content/uploads/2023/03/google-play-bt2-min.png" class="attachment-large size-large" alt="" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2023/03/google-play-bt2-min.png 570w, https://tlclighting.com.vn/wp-content/uploads/2023/03/google-play-bt2-min-300x91.png 300w, https://tlclighting.com.vn/wp-content/uploads/2023/03/google-play-bt2-min-31x9.png 31w" data-sizes="(max-width: 570px) 100vw, 570px" /></div>
                                            </a>
                                            <style>
                                                #image_1772942968 {
                                                  width: 100%;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                                <div id="col-1719299921" class="col medium-3 small-8 large-3">
                                    <div class="col-inner">
                                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_168447717"> <a class="" href="https://apps.apple.com/us/app/" target="_blank" rel="noopener noreferrer">
                                                <div class="img-inner dark"> <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1NzAiIGhlaWdodD0iMTcyIiB2aWV3Qm94PSIwIDAgNTcwIDE3MiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" width="570" height="172" data-src="https://tlclighting.com.vn/wp-content/uploads/2023/03/apple-store-bt2-min.png" class="attachment-large size-large" alt="" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2023/03/apple-store-bt2-min.png 570w, https://tlclighting.com.vn/wp-content/uploads/2023/03/apple-store-bt2-min-300x91.png 300w, https://tlclighting.com.vn/wp-content/uploads/2023/03/apple-store-bt2-min-31x9.png 31w" data-sizes="(max-width: 570px) 100vw, 570px" /></div>
                                            </a>
                                            <style>
                                                #image_168447717 {
                                                  width: 100%;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                                <div id="col-1756067590" class="col hide-for-small medium-3 small-12 large-3">
                                    <div class="col-inner"></div>
                                </div>
                            </div>
                        </div>
                        <style>
                            #col-954726736 > .col-inner {
                              margin: 0px 0px -1px 0px;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <style>
                #section_1730300577 {
                  padding-top: 0px;
                  padding-bottom: 0px;
                  background-color: rgb(242, 242, 242);
                }
            </style>
        </section>
        <div class="row row-full-width align-middle align-center home041" id="row-1047039391">
            <div id="col-829840256" class="col home-center small-12 large-12">
                <div class="col-inner text-center">
                    <div class="row align-center" id="row-303929926">
                        <div id="col-211111238" class="col home-center2 small-12 large-12">
                            <div class="col-inner text-center">
                                <style>
                                    #wpls-logo-showcase-slider-1 .wpls-fix-box,
                                                #wpls-logo-showcase-slider-1 .wpls-fix-box img.wp-post-image{max-height:250px; }
                                </style>
                                <div class="wpls-logo-showcase-slider-wrp wpls-logo-clearfix ">
                                    <div class="wpls-logo-showcase logo_showcase wpls-logo-slider  wpls-design-1  sliderimage_hide_border wpls-dots-false" id="wpls-logo-showcase-slider-1">
                                        <div class="wpls-logo-cnt">
                                            <div class="wpls-fix-box"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="wp-post-image" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-44.png" title="HOME PAGE-44" alt="" /></div>
                                        </div>
                                        <div class="wpls-logo-cnt">
                                            <div class="wpls-fix-box"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="wp-post-image" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/kenh-phan-phoi-01.png" title="kenh phan phoi-01" alt="" /></div>
                                        </div>
                                        <div class="wpls-logo-cnt">
                                            <div class="wpls-fix-box"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="wp-post-image" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-46.png" title="HOME PAGE-46" alt="" /></div>
                                        </div>
                                        <div class="wpls-logo-cnt">
                                            <div class="wpls-fix-box"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="wp-post-image" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE.png" title="HOME PAGE" alt="" /></div>
                                        </div>
                                        <div class="wpls-logo-cnt">
                                            <div class="wpls-fix-box"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="wp-post-image" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-45.png" title="HOME PAGE-45" alt="" /></div>
                                        </div>
                                        <div class="wpls-logo-cnt">
                                            <div class="wpls-fix-box"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="wp-post-image" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-47.png" title="HOME PAGE-47" alt="" /></div>
                                        </div>
                                    </div>
                                    <div class="wpls-logo-showacse-slider-conf" data-conf="{&quot;slides_column&quot;:&quot;6&quot;,&quot;slides_scroll&quot;:&quot;1&quot;,&quot;dots&quot;:&quot;false&quot;,&quot;arrows&quot;:&quot;true&quot;,&quot;autoplay&quot;:&quot;true&quot;,&quot;autoplay_interval&quot;:&quot;2000&quot;,&quot;loop&quot;:&quot;true&quot;,&quot;rtl&quot;:&quot;false&quot;,&quot;speed&quot;:&quot;1000&quot;,&quot;center_mode&quot;:&quot;false&quot;,&quot;lazyload&quot;:&quot;&quot;}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section-title-container" style="margin-top:30px;margin-bottom:5px;">
            <h2 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:90%;color:rgb(20, 20, 20);">ĐỐI TÁC CHIẾN LƯỢC</span><b></b></h2>
        </div>
        <div class="row row-full-width align-middle align-center home051" id="row-1760540894">
            <div id="col-734759949" class="col home-center home-center0 small-12 large-12">
                <div class="col-inner text-center">
                    <div class="row align-center" id="row-747466470">
                        <div id="col-1993422188" class="col home-center2 home-center3 small-12 large-12">
                            <div class="col-inner text-center">
                                <style>
                                    #wpls-logo-showcase-slider-2 .wpls-fix-box,
                                                #wpls-logo-showcase-slider-2 .wpls-fix-box img.wp-post-image{max-height:250px; }
                                </style>
                                <div class="wpls-logo-showcase-slider-wrp wpls-logo-clearfix ">
                                    <div class="wpls-logo-showcase logo_showcase wpls-logo-slider  wpls-design-1  sliderimage_hide_border wpls-dots-false" id="wpls-logo-showcase-slider-2">
                                        <div class="wpls-logo-cnt">
                                            <div class="wpls-fix-box"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="wp-post-image" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-37.png" title="HOME PAGE-37" alt="" /></div>
                                        </div>
                                        <div class="wpls-logo-cnt">
                                            <div class="wpls-fix-box"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="wp-post-image" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-38.png" title="HOME PAGE-38" alt="" /></div>
                                        </div>
                                        <div class="wpls-logo-cnt">
                                            <div class="wpls-fix-box"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="wp-post-image" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-39.png" title="HOME PAGE-39" alt="" /></div>
                                        </div>
                                        <div class="wpls-logo-cnt">
                                            <div class="wpls-fix-box"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="wp-post-image" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-40.png" title="HOME PAGE-40" alt="" /></div>
                                        </div>
                                        <div class="wpls-logo-cnt">
                                            <div class="wpls-fix-box"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="wp-post-image" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-42.png" title="HOME PAGE-42" alt="" /></div>
                                        </div>
                                    </div>
                                    <div class="wpls-logo-showacse-slider-conf" data-conf="{&quot;slides_column&quot;:5,&quot;slides_scroll&quot;:&quot;1&quot;,&quot;dots&quot;:&quot;false&quot;,&quot;arrows&quot;:&quot;true&quot;,&quot;autoplay&quot;:&quot;true&quot;,&quot;autoplay_interval&quot;:&quot;2000&quot;,&quot;loop&quot;:&quot;true&quot;,&quot;rtl&quot;:&quot;false&quot;,&quot;speed&quot;:&quot;1000&quot;,&quot;center_mode&quot;:&quot;false&quot;,&quot;lazyload&quot;:&quot;&quot;}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection