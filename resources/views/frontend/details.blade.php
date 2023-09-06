@extends('frontend.layouts.apps')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/detail.css') }}">

<style amp-custom>


        /*# sourceMappingURL=default.css.map */
        html.lb-disable-scrolling {
          overflow: hidden;
          /* Position fixed required for iOS. Just putting overflow: hidden; on the body is not enough. */
          position: fixed;
          height: 100vh;
          width: 100vw;
        }
        
        .lightboxOverlay {
          position: absolute;
          top: 0;
          left: 0;
          z-index: 9999;
          background-color: black;
          filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
          opacity: 0.8;
          display: none;
        }

        .button-buy-fast {
            background: #ffffff;
            width: 58px;
            height: 34px;
            border: none;
            float: right;
            cursor: pointer;
            font-size: 14px;
            color: #464646;
        }



        .product_name{
                text-align: left;
        }

        .breadcrumbs{
                padding: 10px 0;
        }
        .breadcrumb{
                text-align: left;
        }

        .cls .button-buy-fast{

                margin:0;
                background: #fff;
        }
        
        .lightbox {
          position: absolute;
          left: 0;
          width: 100%;
          z-index: 10000;
          /*text-align: center;
          line-height: 0;*/
          font-weight: normal;
        }
        
        .lightbox .lb-image {
          display: block;
          height: auto;
          max-width: inherit;
          max-height: none;
          border-radius: 3px;
        
          /* Image border */
          border: 4px solid white;
        }
        
        .lightbox a img {
          border: none;
        }
        
        .lb-outerContainer {
          position: relative;
          *zoom: 1;
          width: 250px;
          height: 250px;
          margin: 0 auto;
          border-radius: 4px;
        
          /* Background color behind image.
             This is visible during transitions. */
          background-color: white;
        }
        
        .lb-outerContainer:after {
          content: "";
          display: table;
          clear: both;
        }
        
        .lb-loader {
          position: absolute;
          top: 43%;
          left: 0;
          height: 25%;
          width: 100%;
          text-align: center;
          line-height: 0;
        }
        
        .lb-cancel {
          display: block;
          width: 32px;
          height: 32px;
          margin: 0 auto;
          background: url(https://maychieuminikaw.com/libraries/jquery/lightbox2/dist/images/loading.gif) no-repeat;
        }
        
        .lb-nav {
          position: absolute;
          top: 0;
          left: 0;
          height: 100%;
          width: 100%;
          z-index: 10;
        }
        
        .lb-container > .nav {
          left: 0;
        }
        
        .lb-nav a {
          outline: none;
          background-image: url('data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
        }
        
        .lb-prev, .lb-next {
          height: 100%;
          cursor: pointer;
          display: block;
        }
        
        .lb-nav a.lb-prev {
          width: 34%;
          left: 0;
          float: left;
          background: url(https://maychieuminikaw.com/libraries/jquery/lightbox2/dist/images/prev.png) left 48% no-repeat;
          filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
          opacity: 0;
          -webkit-transition: opacity 0.6s;
          -moz-transition: opacity 0.6s;
          -o-transition: opacity 0.6s;
          transition: opacity 0.6s;
        }
        
        .lb-nav a.lb-prev:hover {
          filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
          opacity: 1;
        }
        
        .lb-nav a.lb-next {
          width: 64%;
          right: 0;
          float: right;
          background: url(https://maychieuminikaw.com/libraries/jquery/lightbox2/dist/images/next.png) right 48% no-repeat;
          filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
          opacity: 0;
          -webkit-transition: opacity 0.6s;
          -moz-transition: opacity 0.6s;
          -o-transition: opacity 0.6s;
          transition: opacity 0.6s;
        }
        
        .lb-nav a.lb-next:hover {
          filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
          opacity: 1;
        }
        
        .lb-dataContainer {
          margin: 0 auto;
          padding-top: 5px;
          *zoom: 1;
          width: 100%;
          border-bottom-left-radius: 4px;
          border-bottom-right-radius: 4px;
        }
        
        .lb-dataContainer:after {
          content: "";
          display: table;
          clear: both;
        }
        
        .lb-data {
          padding: 0 4px;
          color: #ccc;
        }
        
        .lb-data .lb-details {
          width: 85%;
          float: left;
          text-align: left;
          line-height: 1.1em;
        }
        
        .lb-data .lb-caption {
          font-size: 13px;
          font-weight: bold;
          line-height: 1em;
        }

        ._level{
                display:none;
        }
        
        .lb-data .lb-caption a {
          color: #4ae;
        }
        
        .lb-data .lb-number {
          display: block;
          clear: left;
          padding-bottom: 1em;
          font-size: 12px;
          color: #999999;
        }
        
        .lb-data .lb-close {
          display: block;
          float: right;
          width: 30px;
          height: 30px;
          background: url(https://maychieuminikaw.com/libraries/jquery/lightbox2/dist/images/close.png) top right no-repeat;
          text-align: right;
          outline: none;
          filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=70);
          opacity: 0.7;
          -webkit-transition: opacity 0.2s;
          -moz-transition: opacity 0.2s;
          -o-transition: opacity 0.2s;
          transition: opacity 0.2s;
        }
        
        .lb-data .lb-close:hover {
          cursor: pointer;
          filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
          opacity: 1;
        }
        .comments .star{width:13px;display:inline-block;color:#FF9727}.comments .reply_area{padding:10px;background:#FFF;box-sizing:border-box;margin-right:10px;margin-top:5px;border-radius:3px}.comments #comment_add_form{margin-top:20px}.comments #comment_add_form .label_form{font-weight:600;margin-bottom:15px;display:block;font-size:15px}.comments ._textarea{float:none;width:100%;padding-right:0px}.comments ._textarea textarea{display:block;overflow:hidden;background:#fff;min-height:123px;border:1px solid #EEEEEE;padding:10px;color:#333;width:100%;box-sizing:border-box}.comments .wrap_r{float:none;width:96%;padding-left:0px;position:fixed;top:130px;z-index:100;left:2%;display:none}@media only screen and (min-width: 768px){.comments .wrap_r{width:40%;left:30%}}.comments .comment_keyword_wrapper{border:1px solid #EEE;max-width:100%;color:#333;box-sizing:border-box;width:400px;margin-bottom:10px;position:relative;border-radius:3px}.comments .comment_keyword_wrapper #comment_keyword{display:block;padding:8px;font-size:14px;width:100%;border:none;box-sizing:border-box}.comments .comment_keyword_wrapper .button-search{width:42px;height:32px;position:absolute;background:#ffffff;border:none;right:0px;top:0px;border-radius:0 4px 4px 0;cursor:pointer}.comments .comment_keyword_wrapper .button-search svg{width:18px;color:var(--main-color)}.comments .wrap_loginpost{display:block;overflow:hidden;background:#fff;position:relative}.comments .wrap_loginpost ._left{float:left;overflow:hidden;width:100%;border-right:1px solid #d8d8d8}@media only screen and (min-width: 600px){.comments .wrap_loginpost ._left{width:55%}}.comments .wrap_loginpost ._left label{display:block;font-size:14px;color:#666;margin-bottom:10px;padding-right:5px}.comments .wrap_loginpost ._left a{overflow:hidden;margin-right:2px}.comments .wrap_loginpost ._left a i{background-repeat:no-repeat;display:inline-block;height:30px;width:30px;line-height:30px;vertical-align:middle}.comments .wrap_loginpost ._left a ._facebook{background-position:0 0;width:110px;height:37px}.comments .wrap_loginpost ._left a ._googleplus{background-position:0 -40px;width:110px;height:37px}.comments .wrap_loginpost ._left a ._mobileworld{background-position:0 -80px;width:130px;height:37px}.comments .wrap_loginpost ._left ._noaccount{display:block;padding:10px 0;font-size:14px;color:#999}.comments .wrap_loginpost ._left ._noaccount a{color:var(--main-color)}.comments .wrap_loginpost ._right{float:right;overflow:hidden;width:100%}.comments .wrap_loginpost ._right label{display:block;font-size:14px;color:#666;margin-bottom:10px}.comments .wrap_loginpost ._right .txt_input{display:block;padding:8px;width:96%;margin:10px 2%;height:35px;border:1px solid #dadada;background:#fff;border-radius:4px;font-size:14px;box-sizing:border-box}.comments .wrap_loginpost ._right ._btn_comment{display:block;padding:7px 10px;border:1px solid #EEE;font-size:14px;margin-bottom:10px;width:100%;color:#333;box-sizing:border-box}.comments .wrap_submit{display:block;overflow:hidden;background:#fff;position:relative;text-align:center;padding-bottom:10px}.comments .wrap_submit .userinfo{font-size:14px;color:#2a2a2a;text-align:center;font-weight:600;max-width:250px;padding:11px 0 10px;cursor:pointer;background:#fff;position:absolute;left:20px;padding-right:64px}.comments .wrap_submit .userinfo.in{right:280px}.comments .wrap_submit .userinfo .avaS{margin-top:-4px;float:left;width:25px;height:25px;margin-right:7px}.comments .wrap_submit .userinfo .uname{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:160px;float:left;text-align:left}.comments .wrap_submit .userinfo a{color:var(--main-color);font-weight:300;float:left;position:absolute;right:-3px}.comments .wrap_submit ._close_comment{background:none repeat scroll 0 0 #f1f1f1;border:none;font-size:15px;padding:8px 24px 9px;margin-left:10px;border-radius:2px;display:inline-block;cursor:pointer}.comments .wrap_submit .txt_input{width:96px;border:1px solid #B3B3B3;height:30px;padding:10px;line-height:30px;color:#333333;float:left}.comments .wrap_submit .code-view{float:left}.comments .wrap_submit ._btn_comment{display:block;width:96%;margin-left:2%;margin:0 auto 10px;padding:8px;height:40px;font-size:14px;color:#fff;text-transform:uppercase;border:1px solid var(--main-color);border-radius:4px;background:var(--main-color);cursor:pointer;-webkit-background:var(--main-color);-webkit-appearance:none}.comments ._contents ._level_0{margin-bottom:10px;margin-top:15px}.comments ._contents ._level_0 p ._avatar{float:left;width:25px;height:25px;background:#ccc;margin-right:7px;text-align:center;color:#666;text-transform:uppercase;font-size:12px;line-height:26px;font-weight:600}.comments ._contents ._level_0 p ._name{color:#22221D;font-weight:bold;float:left;line-height:28px;margin-right:20px;font-size:15px}.comments ._contents ._level_0 p ._level{float:left;background:var(--main-color);text-transform:uppercase;padding:2px 10px 0;font-size:12px;margin-top:2px;color:#fff}.comments ._contents ._level_0 ._wrap{padding-bottom:10px;padding-left:32px;word-break:break-word}.comments ._contents ._level_0 ._wrap ._content{color:#222;margin-bottom:11px;font-size:15px;line-height:24px}.comments ._contents ._level_0 ._wrap ._content a{color:#288ad6}.comments ._contents ._level_0 ._wrap ._control{font-size:13px}.comments ._contents ._level_0 ._wrap ._control .button_reply{color:#498FE1}.comments ._contents ._level_0 ._wrap ._control .dot{padding:0 5px;font-size:30px;height:6px;line-height:0;display:inline-block;color:#B3B5B2}.comments ._contents ._level_0 ._wrap ._control .favorite{display:none}.comments ._contents ._level_0 ._wrap ._control .date{color:#B3B5B2}.comments ._contents ._level_0 ._level_1{background:#f1f1f196;padding-top:10px;margin-left:35px;padding-left:10px;border-radius:4px;margin-bottom:10px}.comments ._contents ._level_0 ._level_2{padding-left:33px}.rate i,#ratings1 i{width:17px;height:17px;display:inline-flex;transition:all 0.3s ease 0s;-webkit-transition:all 0.3s ease 0s;background-repeat:no-repeat}.star_on{background:url('data:image/svg+xml;utf8,<svg aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18"><path fill="rgb(255, 151, 39)" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path></svg>');background-repeat:no-repeat}.star_off{background:url('data:image/svg+xml;utf8,<svg fill="grey" aria-hidden="true" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18"><path fill="sliver" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path></svg>');background-repeat:no-repeat}#ratings1{display:block;float:left;margin-top:5px}#ratings1 i{cursor:pointer}.rating_area{margin-bottom:14px}.rating_note{background:var(--main-color);color:#FFF;padding:4px 10px;position:relative;font-size:13px;border-radius:0 4px 4px 0;display:inline-block;float:left;margin-left:28px}.rating_note::after{content:'';display:block;clear:both;width:0;height:0;border-style:solid;border-width:13px 12px 12px 0;border-color:transparent var(--main-color) transparent transparent;position:absolute;top:0;left:-12px}.manufactory font{color:#0183BF;margin-right:13PX}.rate_count{margin-left:5px}.tab_label{margin-bottom:15px;margin-top:11px}.tab_label h3{display:inline-block}.btn-comment-mb,.btn-comment-mb-rep{background-color:var(--main-color);border:none;font-size:15px;color:#fff;padding:8px 12px 9px;cursor:pointer;margin-top:10px;display:block}@media screen and (max-width: 550px){.btn-comment-mb,.btn-comment-mb-rep{width:55%;border-radius:5px;margin:10px auto;margin-bottom:20px}}.display-open{display:block !important}.full-screen-mobile{background:#00000070;z-index:99;width:100%;height:100%;position:fixed;top:0;bottom:0;left:0;display:none}.title-mb{overflow:hidden;padding:13px 0 10px 10px;font-size:16px;color:#333;font-weight:bold;text-transform:uppercase;background:#fff;border-bottom:1px solid #e6e3e3;position:relative;display:block}.title-mb .close-md-comment{position:absolute;right:10px;top:10px;font-weight:normal;cursor:pointer}.comments_product_cat{margin:0px auto 30px;width:900px}@media screen and (max-width: 1024px){.comments_product_cat{width:100%}}.form_comment .tab-title{font-weight:bold;margin-bottom:10px}
        /*# sourceMappingURL=default.css.map */
        .search-contain{width:100%;max-width:100%;box-sizing:border-box;float:left}@media all and (max-width: 800px){.search-contain{float:none;margin:auto}}.search-contain .search-content{border-radius:4px;border:none}.search-contain input[type="text"]{background:#FFF;width:100%;height:40px;padding-left:20px;box-sizing:border-box;font-size:13px;border-radius:3px;border:none}#search_form{position:relative}.button-search{width:60px;height:40px;position:absolute;background:no-repeat;border:none;right:0;top:0px;border-radius:41px}.button-search svg{width:16px;height:40px;border-radius:24px;background:transparent;color:#7d7d7d;fill:#7d7d7d}.button-search i{width:26px;height:29px;background-position:0px 0px;display:block;margin-left:11px;margin-top:4px}.autocomplete-suggestions{position:absolute;top:4px;right:-5px;margin:6px 0 0 6px;_background:none;_margin:1px 0 0 0}.autocomplete-suggestions{border:1px solid  #ececec;background:#fff;cursor:default;overflow:auto;margin:0 0px 6px -1px;width:100%;top:31px;left:101px}@media only screen and (min-width: 1180px){.autocomplete-suggestions{width:33% !important}}@media only screen and (max-width: 1024px){.autocomplete-suggestions{top:66px;left:263px}}@media only screen and (max-width: 768px){.autocomplete-suggestions{top:56px;left:158px}}@media only screen and (max-width: 414px){.autocomplete-suggestions{top:44px;left:91px}}.autocomplete-suggestions driv{cursor:pointer;width:100%;display:inline-block;clear:both;padding:0;margin:0;margin-bottom:-5px}.autocomplete-suggestions .autocomplete-group{padding:8px 3%;width:100%;background:#f9f9f9;box-sizing:border-box}.autocomplete-suggestions div a,.autocomplete-suggestions div a:link,.autocomplete-suggestions div a:visited{display:inline-block;margin:0;padding:6px 3%;width:100%;font-size:13px;color:#333;background:#fff;clear:both;border-bottom:1px solid #eee;box-sizing:border-box}.autocomplete-suggestions div a:hover{background:#ececec}.autocomplete-suggestions div a img{width:64px;float:left;margin-right:20px}.autocomplete-suggestions div a label{font-weight:normal;cursor:pointer;margin:0;float:left;width:calc(100% - 84px)}.autocomplete-suggestions div a span{display:block;clear:both;cursor:pointer;margin:0;padding:0}.autocomplete-suggestions div a span.price{color:#fd0000;padding-top:10px}.autocomplete-suggestions div.last{border:none}.autocomplete-suggestions strong{font-weight:500;color:#0083bf}.autocomplete-suggestions::-webkit-scrollbar-track{border-radius:15px;background-color:#fff}.autocomplete-suggestions::-webkit-scrollbar{width:5px;background-color:#fff;border-radius:15px}.autocomplete-suggestions::-webkit-scrollbar-thumb{border-radius:15px;background:var(--main-color);border:1px solid #fff}@media only screen and (max-width: 450px){.search-contain{width:100%}}
        /*# sourceMappingURL=search.css.map */
        .shopcart_simple{position:relative}.shopcart_simple .buy_icon svg{width:20px;height:20px;fill:#fff;transition:0.5s;position:absolute;left:0px;top:0px}.shopcart_simple .buy_icon .text-mn{display:block}@media screen and (max-width: 760px){.shopcart_simple .buy_icon .text-mn,.shopcart_simple .buy_icon .text-c{display:none}.shopcart_simple .buy_icon svg{top:-21px;width:28px;height:28px}}@media all and (max-width: 420px){.shopcart_simple .buy_icon svg{top:-18px;width:23px;height:23px}}@media all and (max-width: 350px){.shopcart_simple .buy_icon svg{width:21px;height:22px}}.shopcart_simple .buy_icon .quality{color:#ff2244;font-size:12px;display:inline-block;width:16px;height:16px;text-align:center;border-radius:50%;transition:0.5s;position:absolute;top:-8px;left:10px;background:#ffeb3b}@media screen and (max-width: 760px){.shopcart_simple .buy_icon .quality{top:-26px;left:12px}}@media all and (max-width: 420px){.shopcart_simple .buy_icon .quality{top:-23px}}
        /*# sourceMappingURL=shopcart_simple.css.map */
        .dcjq-mega-menu #megamenu{z-index:99}.top_menu .active a{color:var(--main-color)}#megamenu .menu-sepa{display:none}.dcjq-mega-menu ul.menu li.level_0{float:left;padding-right:5px;text-align:center;box-sizing:border-box;display:flex}@media all and (max-width: 1260px){.dcjq-mega-menu ul.menu li.level_0{padding-right:30px}}@media screen and (max-width: 1110px){.dcjq-mega-menu ul.menu li.level_0{padding-right:5px}}.dcjq-mega-menu ul.menu li.level_0:hover svg{fill:var(--main-color)}.dcjq-mega-menu ul.menu li.level_0:last-child{border-right:none;padding-right:0px}.dcjq-mega-menu ul.menu li.home.mega-hover a,.dcjq-mega-menu ul.menu>li.home.activated>a,.dcjq-mega-menu ul.menu>li.home:hover>a{color:var(--main-color)}.dcjq-mega-menu ul.menu li.home.mega-hover svg,.dcjq-mega-menu ul.menu>li.home.activated>svg,.dcjq-mega-menu ul.menu>li.home:hover>svg{fill:#000000}.dcjq-mega-menu .menu_item_a{float:left;font-size:15px;padding:10px 20px 10px 0px;white-space:nowrap;position:relative;color:#fff}.dcjq-mega-menu .drop_down{color:#FFFFFF;display:flex;float:left;padding:4px 0px;position:relative;box-sizing:border-box;align-items:center;margin-top:-2px}.dcjq-mega-menu .drop_down svg{fill:#888888;width:9px;height:9px;position:unset}@media screen and (max-width: 990px){.dcjq-mega-menu .drop_down svg{fill:#fff;width:11px;height:11px}}@media all and (max-width: 990px){.dcjq-mega-menu .drop_down{display:block;float:left;padding:8px 10px;display:block;position:absolute;right:10px;top:3px;-webkit-transition:0.3s ease-in-out all;transition:0.3s ease-in-out all}}.dcjq-mega-menu .highlight{position:absolute;text-align:left;top:38px;border-top:1px solid #ededed;left:0px;width:100%;z-index:99999999;-webkit-transition:0s ease-in-out all;transition:0s ease-in-out all;opacity:0;visibility:hidden;overflow:hidden;background:#fff;padding:20px 0;height:auto}.dcjq-mega-menu .highlight .highlight1{background:#FFF;font-size:16px}.dcjq-mega-menu .highlight .highlight1 .menu-child_list{width:30%;float:left;padding-right:20px;box-sizing:border-box}.dcjq-mega-menu .highlight .highlight1 .menu-child_list .sub-menu-level1{position:relative}.dcjq-mega-menu .highlight .highlight1 .menu-child_list .sub-menu-level1 a{padding:0 25px 0 10px;line-height:35px;text-transform:uppercase;border:none;font-size:13px;border-radius:5px;transition:0s;font-weight:bold;display:block}.dcjq-mega-menu .highlight .highlight1 .wraper_item .image_sub{width:45%;float:left;box-sizing:border-box;transition:0s}.dcjq-mega-menu .highlight .highlight1 .wraper_item .image_sub a{transition:0s}.dcjq-mega-menu .highlight .highlight1 .wraper_item .image_sub img{max-width:100%;max-height:100%;object-fit:cover;display:block;margin:0 auto;width:100%;height:360px;transition:0s}.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item{width:25%;float:left;padding-left:20px;box-sizing:border-box}.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item{width:100%;float:left;margin-bottom:15px}.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item a{color:#ffffff;text-transform:uppercase;font-size:12px;line-height:20px;display:block;font-weight:bold;display:block;padding:0;border-bottom:none}.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item .frame_img_cat{width:40%;float:left;display:flex;align-items:center}.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item .frame_img_cat img{max-width:100%;max-height:100%;object-fit:cover;display:block}.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item .frame_view{width:60%;float:right}.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item .item-info{width:100%;float:left;padding-left:10px}.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item .name{font-weight:normal;font-size:14px;margin-bottom:10px;line-height:20px;color:#000;text-transform:none;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;text-overflow:ellipsis}.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item .price{font-weight:bold;color:#ff0000;font-size:16px}.dcjq-mega-menu .highlight .highlight1 .has_child{position:relative}.dcjq-mega-menu .highlight .highlight1 .has_child:after{content:"";position:absolute;right:5px;top:50%;transform:translate(0px, -50%);color:#02587b;line-height:41px;width:13px;height:13px;background:url('data:image/svg+xml;utf8,<svg width="13px" height="13px" fill="rgb(85, 85, 85)" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 284.935 284.936" style="enable-background:new 0 0 284.935 284.936;" xml:space="preserve"><g><path d="M222.701,135.9L89.652,2.857C87.748,0.955,85.557,0,83.084,0c-2.474,0-4.664,0.955-6.567,2.857L62.244,17.133 c-1.906,1.903-2.855,4.089-2.855,6.567c0,2.478,0.949,4.664,2.855,6.567l112.204,112.204L62.244,254.677 c-1.906,1.903-2.855,4.093-2.855,6.564c0,2.477,0.949,4.667,2.855,6.57l14.274,14.271c1.903,1.905,4.093,2.854,6.567,2.854 c2.473,0,4.663-0.951,6.567-2.854l133.042-133.044c1.902-1.902,2.854-4.093,2.854-6.567S224.603,137.807,222.701,135.9z"/></g></svg>');background-repeat:no-repeat;text-align:center}.dcjq-mega-menu ul.menu .level_0:hover .highlight{opacity:1;visibility:initial;transition-delay:0.6s}.dcjq-mega-menu .highlight .sub-menu-level1 a{font-size:14px}.dcjq-mega-menu .highlight .highlight1 .menu-child_list .sub-menu-level1:hover{cursor:pointer;-webkit-transition:0.15s ease-in-out all;transition:0.15s ease-in-out all}.dcjq-mega-menu .highlight .highlight1 .menu-child_list .sub-menu-level1:hover .level_0{background:var(--main-color);color:#fff}.dcjq-mega-menu .highlight .highlight1 .menu-child_list .has_child:hover:after{background:url('data:image/svg+xml;utf8,<svg width="13px" height="13px" fill="rgb(255, 255, 255)" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 284.935 284.936" style="enable-background:new 0 0 284.935 284.936;" xml:space="preserve"><g><path d="M222.701,135.9L89.652,2.857C87.748,0.955,85.557,0,83.084,0c-2.474,0-4.664,0.955-6.567,2.857L62.244,17.133 c-1.906,1.903-2.855,4.089-2.855,6.567c0,2.478,0.949,4.664,2.855,6.567l112.204,112.204L62.244,254.677 c-1.906,1.903-2.855,4.093-2.855,6.564c0,2.477,0.949,4.667,2.855,6.57l14.274,14.271c1.903,1.905,4.093,2.854,6.567,2.854 c2.473,0,4.663-0.951,6.567-2.854l133.042-133.044c1.902-1.902,2.854-4.093,2.854-6.567S224.603,137.807,222.701,135.9z"/></g></svg>');background-repeat:no-repeat}.dcjq-mega-menu .highlight .sub-menu-level1:hover a{text-decoration:none}.dcjq-mega-menu .sb-toggle-left{float:left;display:none;cursor:pointer;margin-top:2px;position:relative;margin-left:10px;z-index:99}.slide-up{-ms-transform:translateY(0);transform:translateY(0);box-shadow:0px 0px 5px #a7a7a7;transition:bottom 1s linear}.slide-up .logo_img{max-height:75px}.slide-up .logo{padding:15px 0}.slide-down{-ms-transform:translateY(0);transform:translateY(0);box-shadow:0px 0px 5px #a7a7a7;transition:bottom 1s linear}.m-slide-up{-ms-transform:translateY(0);transform:translateY(0)}@media screen and (max-width: 650px){.m-slide-up #languges .dropbtn .a-flag{padding:16px 10px 16px 23px}}.m-slide-down{-ms-transform:translateY(-100%);transform:translateY(-100%)}@media screen and (max-width: 650px){.m-slide-down #languges .dropbtn .a-flag{padding:16px 10px 16px 23px}}@media screen and (max-width: 990px){.top_menu #megamenu{position:absolute;background:var(--main-color);width:100%;left:0px;top:70px;z-index:999;border-left:1px solid #EFEFEF;border-bottom:1px solid #EFEFEF;display:none}.dcjq-mega-menu .sb-toggle-left{display:block;position:relative}}@media screen and (max-width: 990px) and (max-width: 990px){.dcjq-mega-menu .sb-toggle-left{position:unset}}@media screen and (max-width: 990px){.dcjq-mega-menu .sb-toggle-left svg{color:black;width:25px;height:25px;position:absolute;top:50%;right:10px;transform:translate(0px, -50%);fill:var(--main-color)}.dcjq-mega-menu .menu_item_a{display:block;float:none;text-align:left;padding:10px 0 10px 10px;text-transform:uppercase;text-decoration:unset}.dcjq-mega-menu ul.menu li.level_0{float:none;padding:0px;border-top:1px solid rgba(255,255,255,0.56);margin:0;display:block}.dcjq-mega-menu ul.menu li.level_0:before{display:none}.dcjq-mega-menu ul.menu li.level_0:after{display:none}.dcjq-mega-menu .highlight{background:transparent;border:none;box-shadow:none;position:relative;text-align:left;float:none;top:0px;width:auto;display:none;opacity:1;visibility:visible;left:0;padding-top:0}.dcjq-mega-menu .highlight .highlight1{background:transparent;border:none;border-top:1px solid rgba(255,255,255,0.5);text-transform:none}.dcjq-mega-menu .highlight .highlight1 a{color:#FFF}.dcjq-mega-menu .highlight .sub-menu-level1{border-top:none;padding:9px 0 9px 22px}.dcjq-mega-menu ul.menu li.mega-hover a,.dcjq-mega-menu ul.menu>li.activated>a,.dcjq-mega-menu ul.menu>li:hover>a{-webkit-transition:0.25s ease-in-out all;transition:0.25s ease-in-out all;background:var(--extra-color)}.dcjq-mega-menu .highlight .sub-menu-level1:hover{background:#9c0278}}.activated .drop_down svg{fill:var(--main-color)}#megamenu .activated svg{fill:var(--main-color)}.dcjq-mega-menu .level_0>a{display:flex;align-items:center}.dcjq-mega-menu .level_0>a span{display:flex;align-items:center;width:30px;height:30px;box-sizing:border-box;border-radius:50px;justify-content:center;margin-right:0px;position:absolute;left:0px;top:2px;display:none}.dcjq-mega-menu .level_0>a span svg{width:17px;fill:#000;height:17px;box-sizing:border-box}
        /*# sourceMappingURL=imgmenu.css.map */
        .onlinesupport_list_row{z-index:9999;position:fixed;bottom:45%;right:0px;width:46px;height:72px}@media screen and (max-width: 600px){.onlinesupport_list_row{bottom:35%}}.onlinesupport_list_row .item{margin-bottom:8px;cursor:pointer}@media screen and (max-width: 600px){.onlinesupport_list_row .item svg{width:42px}}.onlinesupport_list_row .item_map a{width:44px;height:44px;border-radius:50%;background:#1461d3;box-sizing:border-box;text-align:center;padding-top:9px}.onlinesupport_list_row .item_map a svg{width:28px;height:28px;fill:#fff}.onlinesupport_list_row .item-show a{position:relative;display:inline-block}.onlinesupport_list_row .item-show a span{position:absolute;left:calc(-100% - 82px);display:block;top:12px;width:184px;background:#fff;z-index:-1;padding-left:4px;border-radius:10px;display:none}.onlinesupport_list_row .item-show:nth-child(2) a span{left:calc(-100% - 47px)}.onlinesupport_list_row .item-show:nth-child(3) a span{left:calc(-100% - 87px)}.onlinesupport_list_row .click-open,.onlinesupport_list_row .click-off a{background:var(--main-color);border-radius:50%;width:44px;height:44px;display:block;padding:5px;box-sizing:border-box;text-align:center}.onlinesupport_list_row .click-open svg,.onlinesupport_list_row .click-off a svg{fill:#fff;width:32px;height:32px}.onlinesupport_list_row .click-off{display:none}.onlinesupport_list_row .click-off a{padding-top:11px}.onlinesupport_list_row .click-off a svg{width:20px;height:20px}
        /*# sourceMappingURL=fix_right.css.map */
        .share_column a{display:block;position:relative;margin-bottom:12px;padding-left:36px;line-height:22px}.share_column a svg{width:14px;height:14px;fill:#fff;padding:5px;background:#ccc;border-radius:50%;position:absolute;left:0px;top:0px}
        /*# sourceMappingURL=column.css.map */
        ul.menu-bottom li.level0{float:left;width:50%;box-sizing:border-box}@media screen and (max-width: 768px){ul.menu-bottom li.level0{width:100% !important;float:none}}ul.menu-bottom li.level0>a,ul.menu-bottom li.level0>span{text-transform:uppercase;margin-bottom:40px;font-size:18px;font-weight:bold;display:block;color:#000}@media screen and (max-width: 1024px){ul.menu-bottom li.level0>a,ul.menu-bottom li.level0>span{font-size:18px}}@media screen and (max-width: 500px){ul.menu-bottom li.level0>a,ul.menu-bottom li.level0>span{font-size:14px}}ul.menu-bottom li.level0:last-child a{display:block}ul.menu-bottom li.level0:last-child span{display:block}ul.menu-bottom li.level0 ul li{margin-bottom:16px}ul li.level1 a:hover,ul li.level1 span:hover{color:#0066b2}ul.menu-bottom li.level0 span.click-mobile{background:transparent url("https://maychieuminikaw.com/blocks/mainmenu/assets/images/icon-click.png") no-repeat scroll center;position:absolute;cursor:pointer;padding:0;right:8px;top:8px;display:none;content:'';width:15px;height:15px;z-index:12}ul.menu-bottom li.level0 span.click-mobile.active{background:transparent url("https://maychieuminikaw.com/blocks/mainmenu/assets/images/icon-click-active.png") no-repeat scroll center}.menu-bottom ul li.mid-sitem>span i{background-position:0px -92px;content:' ';height:36px;display:block;margin-top:11px;padding-top:12px;width:131px}@media screen and (max-width: 768px){ul.menu-bottom li.level0{float:none;width:100%;border:1px solid #e3e3e3;margin-bottom:10px;position:relative}ul.menu-bottom li.level0 span.click-mobile{display:block}ul.menu-bottom li.level0>a,ul.menu-bottom li.level0>span{display:block;padding:8px;margin-bottom:0}ul.menu-bottom li.level0 ul{display:none}ul li.level1{border-top:1px solid #f5f5f5;padding:8px 0px 7px 0px;margin-left:22px}ul.menu-bottom li.level0 ul li{margin-bottom:0px}ul li.level1.first-sitem,ul li.level1:first-child{border-top:0}}
        /*# sourceMappingURL=bottommenu.css.map */
        #icon_hot{position:absolute;left:0px;top:14px;font-size:9px;text-transform:uppercase;color:red}#dot{width:6px;height:6px;background-color:#f33;border-radius:100%;position:absolute;left:16px;top:27px;margin-top:-5px;display:block}#dot .ping{border:1px solid #f33;width:6px;height:6px;opacity:1;background-color:rgba(238,46,36,0.2);border-radius:100%;-webkit-animation-duration:1.25s;animation-duration:1.25s;-webkit-animation-name:sonar;animation-name:sonar;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-timing-function:linear;animation-timing-function:linear;display:block;margin:-1px 0 0 -1px}.megamenu_mb,.highlight{position:fixed;width:500px;height:100vh;background:#fff;z-index:999;padding:0px 0px;box-sizing:border-box;top:0;left:-100%;transition:all 0.5s}@media screen and (max-width: 768px){.megamenu_mb,.highlight{width:86%}}.megamenu_mb_show{left:0}:root{--body-color: #eee}.modal-menu-full-screen-menu{width:100%;height:100%;position:fixed;top:0;bottom:0;left:0;background:#0000008c;z-index:-99;opacity:0;transition:.5s}.show_screen{z-index:990;opacity:1}.close_all{width:30px;height:30px;border-radius:50%;background:#000;position:absolute;right:-40px;top:10px}.close_all .navicon-line{width:16px;height:1px;border-radius:1px;margin-bottom:0px;background-color:#fff;transition:.5s;position:absolute;left:0;top:0}.close_all .navicon-line:nth-child(1){transform:rotate(45deg) translate(15px, 5px)}.close_all .navicon-line:nth-child(2){transform:rotate(-45deg) translate(-5px, 15px)}.megamenu_mb .label{text-align:center;padding:15px 0;border-bottom:1px solid var(--body-color);font-size:18px;position:relative}.megamenu_mb li{position:relative;border-bottom:1px solid #eee;box-sizing:border-box}.megamenu_mb li a,.megamenu_mb li span{display:flex;align-items:center;float:none;padding:17px 10px 15px 11px;font-size:18px}.megamenu_mb li a span,.megamenu_mb li span span{padding:0px}.megamenu_mb li .check_icon{padding:17px 6px 15px 37px}.megamenu_mb li svg{width:16px;margin-right:10px;fill:var(--main-color);height:16px}.megamenu_mb .next_menu{position:absolute;right:0;top:0;padding:0;box-sizing:border-box;height:100%;width:40px;border-left:1px solid var(--body-color);z-index:99}.megamenu_mb .label:after,.megamenu_mb .label:before,.megamenu_mb .next_menu:after,.megamenu_mb .next_menu:before{width:7px;height:7px;border-right:1px solid #000;border-top:1px solid #000;position:absolute;content:'';left:calc(50% - 3px);top:50%;transform:translate(-50%, -50%) rotate(45deg)}.megamenu_mb .label:after,.megamenu_mb .label:before{left:25px;transform:translate(0, -50%) rotate(-135deg)}.megamenu_mb #menu_:after,.megamenu_mb #menu_:before{display:none}.megamenu_mb ul.menu,.megamenu_mb .highlight{height:100%;overflow:auto}.group_id_menu_23{background:#e4e4e430}@keyframes sonar{0%{opacity:1;-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(3);transform:scale(3);opacity:0}}
        /*# sourceMappingURL=megamenu_mb.css.map */

        .product_name{
                display: flex;
        }
    </style>
    <style></style>

<div class="main_wrapper   ">
    <div class=" container_main_wrapper">
        <div class="main-area main-area-1col main-area-full">
            <div class="breadcrumbs breadcrumb_detail">
                <div class="container">
                    <div class="breadcrumbs_wrapper" itemscope="" itemtype="http://schema.org/WebPage">
                        <ul class="breadcrumb" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumb__item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"> 
                                <a title="Máy chiếu mini KAW" href="{{ route('homeFe') }}" itemprop="item"> <span itemprop="name">Trang chủ</span>
                                    <meta content="1" itemprop="position">
                                </a> </li>
        
                                @if(!empty($groupLink))    
                                <li class="breadcrumb__item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"> <a title="Máy chiếu mini" href="{{ route('details', $groupLink??'') }}" itemprop="item"> <span itemprop="name">{{ @$groupName }}</span>
                                    <meta content="2" itemprop="position">
                                </a> </li>

                                @endif     
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="product" itemscope="" itemtype="https://schema.org/Product">
                    <meta itemprop="url" content="https://maychieuminikaw.com/may-chieu-mini/may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html?fbclid=IwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM">
                    <div class="product_name_share cls">
                        <div class="product_name cls">
                                <div class="title-name">
                                        <h1 itemprop="name">{{ $data->Name }} </h1> 

                                </div> 

                                <div class="title-rate">
                                        <span class="rate rate_head" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"> 
                                        <span class="star-on star"> <svg aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                            </svg> </span> <span class="star-on star"> <svg aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                            </svg> </span> <span class="star-on star"> <svg aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                            </svg> </span> <span class="star-on star"> <svg aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                            </svg> </span> <span class="star-on star"> <svg aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                            </svg> </span> <span itemprop="ratingValue" class="hide">5</span> <span itemprop="bestRating" class="hide">5</span> <a href="#prodetails_tab3" title="Đánh giá sản phẩm này" class=""> 
                                                <span itemprop="ratingCount">1</span> đánh giá / 0 lượt mua </a> 
                                        </span>    
                                </div> 
                           
                            
                        </div>
                        <div class="hit_share">
                            <!-- Load Facebook SDK for JavaScript -->
                            <div id="fb-root" class=" fb_reset">
                                <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                    <div></div>
                                </div>
                            </div> <!-- Your like button code -->
                            <div class="fb-like fb_iframe_widget" data-href="https://maychieuminikaw.com/may-chieu-mini/may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html?fbclid=IwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM" data-layout="button_count" data-action="like" data-show-faces="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=752023095723783&amp;container_width=160&amp;href=https%3A%2F%2Fmaychieuminikaw.com%2Fmay-chieu-mini%2Fmay-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html%3Ffbclid%3DIwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=true"><span style="vertical-align: bottom; width: 90px; height: 28px;"><iframe name="f52edcea72e8a" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/plugins/like.php?action=like&amp;app_id=752023095723783&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df225d7be05e4bbc%26domain%3Dmaychieuminikaw.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fmaychieuminikaw.com%252Ff389c5accc6b8%26relation%3Dparent.parent&amp;container_width=160&amp;href=https%3A%2F%2Fmaychieuminikaw.com%2Fmay-chieu-mini%2Fmay-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html%3Ffbclid%3DIwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=true" style="border: none; visibility: visible; width: 90px; height: 28px;" class=""></iframe></span></div> <!-- Your share button code -->
                            <div class="fb-share-button fb_iframe_widget" data-href="https://maychieuminikaw.com/may-chieu-mini/may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html?fbclid=IwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM" data-layout="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=752023095723783&amp;container_width=200&amp;href=https%3A%2F%2Fmaychieuminikaw.com%2Fmay-chieu-mini%2Fmay-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html%3Ffbclid%3DIwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey"><span style="vertical-align: bottom; width: 77px; height: 20px;"><iframe name="fdc36a51dcec54" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/plugins/share_button.php?app_id=752023095723783&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2003d20ee0cd78%26domain%3Dmaychieuminikaw.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fmaychieuminikaw.com%252Ff389c5accc6b8%26relation%3Dparent.parent&amp;container_width=200&amp;href=https%3A%2F%2Fmaychieuminikaw.com%2Fmay-chieu-mini%2Fmay-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html%3Ffbclid%3DIwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey" style="border: none; visibility: visible; width: 77px; height: 20px;" class=""></iframe></span></div>
                            <div class="g-plus" data-action="share" data-annotation="bubble" data-href="https://maychieuminikaw.com/may-chieu-mini/may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html?fbclid=IwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="detail_main cls">
                        <div class="detail_main_top cls">
                            <div class="frame_left frame_left_animate">
                                <div class="wrap-magiczoom">
                                    <div class="frame_img">
                                        <div class="frame_img_inner">
                                            <div class="hot_icon">-28%</div>
                                            <div class="magic_zoom_area"> <a id="Zoomer" href="javascript:void(0)" data-image="{{ asset($data->Image) }}" class="MagicZoomPlus" title=""> <img onclick="gotoGallery(1,0,0);" src="{{ asset($data->Image) }}"> </a> </div>
                                            <div id="sync1_wrapper">
                                                <div id="sync1" class="owl-carousel owl-theme owl-hidden owl-loaded">
                                                    <div class="owl-stage-outer owl-height" style="height: 0px;">
                                                        <div class="owl-stage" style="width: 700px; transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                                            <div class="owl-item active" style="width: 100px; margin-right: 0px;">
                                                                <div class="item"> <a href="javascript:void(0)" id="images/products/2023/06/28/original/k95003_1687943471.jpg" rel="image_large1" class="selected cboxElement cb-image-link" title="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc"> <img onclick="gotoGallery(1,0,0);" src="{{ asset($data->Image) }}" longdesc="https://maychieuminikaw.com/images/products/2023/06/28/large/k95003_1687943471.jpg" alt="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc" itemprop="image"> </a> </div>
                                                            </div>
                                                            <div class="owl-item" style="width: 100px; margin-right: 0px;">
                                                                <div class="item"> <a href="javascript:void(0)" class=" cboxElement cb-image-link " rel="image_large1" title="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc"> <img onclick="gotoGallery(1,0,0);" src="https://maychieuminikaw.com/images/products/2023/02/07/large/may-chieu-mini-k950p-m13_1675770727.jpg" longdesc="https://maychieuminikaw.com/images/products/2023/02/07/original/may-chieu-mini-k950p-m13_1675770727.jpg" alt="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc" class="image0" itemprop="image"> </a> </div>
                                                            </div>
                                                            <div class="owl-item" style="width: 100px; margin-right: 0px;">
                                                                <div class="item"> <a href="javascript:void(0)" class=" cboxElement cb-image-link " rel="image_large1" title="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc"> <img onclick="gotoGallery(1,0,0);" src="https://maychieuminikaw.com/images/products/2023/02/07/large/may-chieu-mini-k950p-m14_1675770727.jpg" longdesc="https://maychieuminikaw.com/images/products/2023/02/07/original/may-chieu-mini-k950p-m14_1675770727.jpg" alt="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc" class="image1" itemprop="image"> </a> </div>
                                                            </div>
                                                            <div class="owl-item" style="width: 100px; margin-right: 0px;">
                                                                <div class="item"> <a href="javascript:void(0)" class=" cboxElement cb-image-link " rel="image_large1" title="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc"> <img onclick="gotoGallery(1,0,0);" src="https://maychieuminikaw.com/images/products/2023/02/08/large/may-chieu-mini-4k_1675846782.jpg" longdesc="https://maychieuminikaw.com/images/products/2023/02/08/original/may-chieu-mini-4k_1675846782.jpg" alt="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc" class="image2" itemprop="image"> </a> </div>
                                                            </div>
                                                            <div class="owl-item" style="width: 100px; margin-right: 0px;">
                                                                <div class="item"> <a href="javascript:void(0)" class=" cboxElement cb-image-link " rel="image_large1" title="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc"> <img onclick="gotoGallery(1,0,0);" src="https://maychieuminikaw.com/images/products/2023/01/28/large/2103_923734a80d13153892d516519486b8fb_463d904410234057b46aa9b03e90c70f_f36a47e8bb5346a28dfbf42942a5dc07_master-.jpg" longdesc="https://maychieuminikaw.com/images/products/2023/01/28/original/2103_923734a80d13153892d516519486b8fb_463d904410234057b46aa9b03e90c70f_f36a47e8bb5346a28dfbf42942a5dc07_master-.jpg" alt="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc" class="image3" itemprop="image"> </a> </div>
                                                            </div>
                                                            <div class="owl-item" style="width: 100px; margin-right: 0px;">
                                                                <div class="item"> <a href="javascript:void(0)" class=" cboxElement cb-image-link " rel="image_large1" title="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc"> <img onclick="gotoGallery(1,0,0);" src="https://maychieuminikaw.com/images/products/2023/02/07/large/may-chieu-mini-k950p-mt7_1675770552.jpg" longdesc="https://maychieuminikaw.com/images/products/2023/02/07/original/may-chieu-mini-k950p-mt7_1675770552.jpg" alt="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc" class="image4" itemprop="image"> </a> </div>
                                                            </div>
                                                            <div class="owl-item" style="width: 100px; margin-right: 0px;">
                                                                <div class="item"> <a href="javascript:void(0)" class=" cboxElement cb-image-link " rel="image_large1" title="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc"> <img onclick="gotoGallery(1,0,0);" src="https://maychieuminikaw.com/images/products/2023/02/07/large/may-chieu-mini-k950p-m10_1675770633.jpg" longdesc="https://maychieuminikaw.com/images/products/2023/02/07/original/may-chieu-mini-k950p-m10_1675770633.jpg" alt="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc" class="image5" itemprop="image"> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-controls">
                                                        <div class="owl-nav">
                                                            <div class="owl-prev" style="display: none;">‹</div>
                                                            <div class="owl-next" style="display: none;">›</div>
                                                        </div>
                                                        <div class="owl-dots" style="">
                                                            <div class="owl-dot active"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbs">
                                        <div id="sync2" class="owl-carousel owl-theme owl-loaded">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="width: 602px; transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">


                                                    <div class="owl-item active current" style="width: 84px; margin-right: 2px;">
                                                        <div class="item"> <a href="javascript:void(0)" id="{{ asset($data->Image) }}" rel="image_large" class="selected" title="{{ $data->Name }}"> <img src="{{ asset($data->Image) }}" longdesc="{{ asset($data->Image) }}" alt="{{ $data->Name }}" itemprop="image"> </a> </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="owl-controls">
                                                <div class="owl-nav">
                                                    <div class="owl-prev" style="display: none;">‹</div>
                                                    <div class="owl-next" style="display: none;">›</div>
                                                </div>
                                                <div class="owl-dots" style="display: block;">
                                                    <div class="owl-dot active"><span></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide_FT"></div>
                                </div>
                               <!--  <div class="strength_related">
                                    <div class="strength_related_gid"> <a href="javascript:void(0)" title="Độ sáng lớn 8.000 Lumens" class="item cls">
                                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px" viewBox="-5.5 0 32 32" version="1.1">
                                                    <title>light</title>
                                                    <path d="M11.875 6v2.469c0 0.844-0.375 1.25-1.156 1.25s-1.156-0.406-1.156-1.25v-2.469c0-0.813 0.375-1.219 1.156-1.219s1.156 0.406 1.156 1.219zM14.219 9.25l1.438-2.031c0.469-0.625 1.063-0.75 1.656-0.313s0.656 1 0.188 1.688l-1.438 2c-0.469 0.688-1.031 0.75-1.656 0.313-0.594-0.438-0.656-0.969-0.188-1.656zM5.781 7.25l1.469 2c0.469 0.688 0.406 1.219-0.219 1.656-0.594 0.469-1.156 0.375-1.625-0.313l-1.469-2c-0.469-0.688-0.406-1.219 0.219-1.656 0.594-0.469 1.156-0.375 1.625 0.313zM10.719 11.125c2.688 0 4.875 2.188 4.875 4.875 0 2.656-2.188 4.813-4.875 4.813s-4.875-2.156-4.875-4.813c0-2.688 2.188-4.875 4.875-4.875zM1.594 11.813l2.375 0.75c0.781 0.25 1.063 0.719 0.813 1.469-0.219 0.75-0.75 0.969-1.563 0.719l-2.313-0.75c-0.781-0.25-1.063-0.75-0.844-1.5 0.25-0.719 0.75-0.938 1.531-0.688zM17.5 12.563l2.344-0.75c0.813-0.25 1.313-0.031 1.531 0.688 0.25 0.75-0.031 1.25-0.844 1.469l-2.313 0.781c-0.781 0.25-1.281 0.031-1.531-0.719-0.219-0.75 0.031-1.219 0.813-1.469zM10.719 18.688c1.5 0 2.719-1.219 2.719-2.688 0-1.5-1.219-2.719-2.719-2.719s-2.688 1.219-2.688 2.719c0 1.469 1.188 2.688 2.688 2.688zM0.906 17.969l2.344-0.75c0.781-0.25 1.313-0.063 1.531 0.688 0.25 0.75-0.031 1.219-0.813 1.469l-2.375 0.781c-0.781 0.25-1.281 0.031-1.531-0.719-0.219-0.75 0.063-1.219 0.844-1.469zM18.219 17.219l2.344 0.75c0.781 0.25 1.063 0.719 0.813 1.469-0.219 0.75-0.719 0.969-1.531 0.719l-2.344-0.781c-0.813-0.25-1.031-0.719-0.813-1.469 0.25-0.75 0.75-0.938 1.531-0.688zM3.938 23.344l1.469-1.969c0.469-0.688 1.031-0.781 1.625-0.313 0.625 0.438 0.688 0.969 0.219 1.656l-1.469 1.969c-0.469 0.688-1.031 0.813-1.656 0.375-0.594-0.438-0.656-1.031-0.188-1.719zM16.063 21.375l1.438 1.969c0.469 0.688 0.406 1.281-0.188 1.719s-1.188 0.281-1.656-0.344l-1.438-2c-0.469-0.688-0.406-1.219 0.188-1.656 0.625-0.438 1.188-0.375 1.656 0.313zM11.875 23.469v2.469c0 0.844-0.375 1.25-1.156 1.25s-1.156-0.406-1.156-1.25v-2.469c0-0.844 0.375-1.25 1.156-1.25s1.156 0.406 1.156 1.25z"></path>
                                                </svg></div>
                                            <div class="cont-l">
                                                <div class="text1"> Độ sáng lớn </div>
                                                <div class="text2"> 8.000 Lumens </div>
                                            </div>
                                        </a> <a href="javascript:void(0)" title="Tuổi thọ đèn cao Trên 30.000 giờ" class="item cls">
                                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 12a9.5 9.5 0 1 1 19 0 9.5 9.5 0 0 1-19 0zM12 .5C5.649.5.5 5.649.5 12S5.649 23.5 12 23.5 23.5 18.351 23.5 12 18.351.5 12 .5zM11 7a1 1 0 1 1 2 0v5h4a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1V7z"></path>
                                                </svg></div>
                                            <div class="cont-l">
                                                <div class="text1"> Tuổi thọ đèn cao </div>
                                                <div class="text2"> Trên 30.000 giờ </div>
                                            </div>
                                        </a> <a href="javascript:void(0)" title="Độ phân giải lớn 1080P có hỗ trợ xem 4K" class="item cls">
                                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24">
                                                    <path d="M4,3H9A1,1,0,0,1,9,5H5V9A1,1,0,0,1,3,9V4A1,1,0,0,1,4,3ZM9,19H5V15a1,1,0,0,0-2,0v5a1,1,0,0,0,1,1H9a1,1,0,0,0,0-2Zm11-5a1,1,0,0,0-1,1v4H15a1,1,0,0,0,0,2h5a1,1,0,0,0,1-1V15A1,1,0,0,0,20,14ZM20,3H15a1,1,0,0,0,0,2h4V9a1,1,0,0,0,2,0V4A1,1,0,0,0,20,3ZM7,8v8a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V8a1,1,0,0,0-1-1H8A1,1,0,0,0,7,8Z"></path>
                                                </svg></div>
                                            <div class="cont-l">
                                                <div class="text1"> Độ phân giải lớn </div>
                                                <div class="text2"> 1080P có hỗ trợ xem 4K </div>
                                            </div>
                                        </a> <a href="javascript:void(0)" title="Hệ số thu phóng Hỗ trợ lấy nét tự động" class="item cls">
                                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 10V8.125C9.93125 8.125 8.25 9.80625 8.25 11.875C8.25 12.5062 8.40625 13.1062 8.6875 13.625L7.775 14.5375C7.2875 13.7687 7 12.8562 7 11.875C7 9.1125 9.2375 6.875 12 6.875V5L14.5 7.5L12 10ZM15.3125 10.125L16.225 9.21251C16.7125 9.98126 17 10.8938 17 11.875C17 14.6375 14.7625 16.875 12 16.875V18.75L9.5 16.25L12 13.75V15.625C14.0687 15.625 15.75 13.9438 15.75 11.875C15.75 11.2438 15.5875 10.65 15.3125 10.125Z"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z"></path>
                                                </svg></div>
                                            <div class="cont-l">
                                                <div class="text1"> Hệ số thu phóng </div>
                                                <div class="text2"> Hỗ trợ lấy nét tự động </div>
                                            </div>
                                        </a> </div>
                                </div> -->



                                <div class="product_tab_content" id="tabs">
                                        

                                        {!!  $data->Detail  !!}    
                                </div>




                                <div class="rate-comment-plugin">
                                    <div class="tab-title cls">
                                        <div class="cat-title-main" id="prodetails_tab30"> <span>Đánh giá <span title="tt_main_color">sản phẩm</span></span> </div>
                                    </div>
                                    <div id="prodetails_tab3" class="prodetails_tab">
                                        <div class="tab_content_right">
                                            <script src="https://connect.facebook.net/en_US/all.js?hash=66f5d8ca885fb31f073bb22d0932adb1" async="" crossorigin="anonymous"></script>
                                            <script id="facebook-jssdk" src="//connect.facebook.net/en_US/all.js"></script>
                                            <script>
                                                function load_ajax_paginationrate($value){
                                                    $.get($value,{}, function(html){ 
                                                        $('#_info_rate').html(html);
                                                        $('html, body').animate({scrollTop:$('#_info_rate').position().top}, 'slow');
                                                    });
                                                }
                                                
                                            </script>
                                            <div class="full-screen-mobile"></div>
                                            <div id="rates_rate" class="rates_rate_product">
                                                <div class="rates">
                                                    <div class="tab_label"><span>Có <strong>0</strong> đánh giá</span> <strong>về {{ $data->Name }}</strong> </div>
                                                    <div class="toprt">
                                                        <div class="crt">
                                                            <div class="rcrt">
                                                                <div class="r"> <span class="t">5 <i></i></span>
                                                                    <div class="bgb">
                                                                        <div class="bgb-in" style="width: 0%"></div>
                                                                    </div> <span class="n" onclick="" data-buy="2"><strong>0</strong> đánh giá</span>
                                                                </div>
                                                                <div class="r"> <span class="t">4 <i></i></span>
                                                                    <div class="bgb">
                                                                        <div class="bgb-in" style="width: 0%"></div>
                                                                    </div> <span class="n" onclick="" data-buy="0"><strong>0</strong> đánh giá</span>
                                                                </div>
                                                                <div class="r"> <span class="t">3 <i></i></span>
                                                                    <div class="bgb">
                                                                        <div class="bgb-in" style="width: 0%"></div>
                                                                    </div> <span class="n" onclick="" data-buy="0"><strong>0</strong> đánh giá</span>
                                                                </div>
                                                                <div class="r"> <span class="t">2 <i></i></span>
                                                                    <div class="bgb">
                                                                        <div class="bgb-in" style="width: 0%"></div>
                                                                    </div> <span class="n" onclick="" data-buy="0"><strong>0</strong> đánh giá</span>
                                                                </div>
                                                                <div class="r"> <span class="t">1 <i></i></span>
                                                                    <div class="bgb">
                                                                        <div class="bgb-in" style="width: 0%"></div>
                                                                    </div> <span class="n" onclick="" data-buy="0"><strong>0</strong> đánh giá</span>
                                                                </div>
                                                            </div>
                                                            <div class="bcrt"> <a href="javascript:showInputRating()">Gửi đánh giá của bạn</a> </div>
                                                        </div>
                                                        <div class="clr"></div>
                                                        <form action="javascript:void(0);" method="post" name="rate_add_form" id="rate_add_form" class="form_rate hide_form cls" onsubmit="javascript: submit_rate();return false;">
                                                            <div class="rating_area cls"> <span class="label_form">Chọn đánh giá của bạn</span> <span id="ratings" class="cls"> <i class="icon_v1 star_on" id="rate_1" value="1"></i> <i class="icon_v1 star_on" id="rate_2" value="2"></i> <i class="icon_v1 star_on" id="rate_3" value="3"></i> <i class="icon_v1 star_on" id="rate_4" value="4"></i> <i class="icon_v1 star_on" id="rate_5" value="5"></i> <input type="hidden" name="rating_disable" id="rating_disable" value="0"> <input type="hidden" name="rating_value" id="rating_value" value="5"> <!-- end RATING   --> </span> <span class="rsStar hide"></span> </div>
                                                            <div class="wraper_form_rate hide">
                                                                <div class="_textarea"> <textarea name="content" id="rate_content" placeholder="Nhập đánh giá về sản phẩm(Tối thiểu 30 ký tự)" onkeyup="countTxtRating()"></textarea>
                                                                    <div class="extCt hide"> <span class="ckt"></span> </div>
                                                                    <div class="clear"></div>
                                                                    <div id="feedsImageBase"></div>
                                                                    <div class="wrapper_imagevideo"> <input type="file" id="multiFiles" name="files_cmt[]" multiple="multiple"> <label for="multiFiles" id="label_up_cmt">Chèn ảnh, video</label>
                                                                        <div id="fileQueueImageBase"></div>
                                                                    </div>
                                                                </div> <!-- <input type="button" class="btn-rate-mb" value="Gửi bình luận">   -->
                                                                <div class="wrap_rate cls">
                                                                    <div class="wrap_loginpost">
                                                                        <aside class="_right">
                                                                            <div> <input class="txt_input" required="" name="name" type="text" placeholder="Họ tên (bắt buộc)" id="rate_name" autocomplete="off" value=""> </div>
                                                                            <div> <input class="txt_input" name="email" type="email" placeholder="Email (bắt buộc)" id="rate_email" value=""> </div>
                                                                            <div class="wrap_submit mbl">
                                                                                <div class="pull-right clearfix"> <input type="submit" class="_btn_rate" value="Gửi đánh giá"> </div>
                                                                            </div>
                                                                        </aside>
                                                                    </div>
                                                                </div>
                                                                <div class="MsgRt"></div> <input type="hidden" value="rates" name="module"> <input type="hidden" value="rates" name="view"> <input type="hidden" value="products" name="type" id="_rate_type"> <input type="hidden" value="5231" name="record_id" id="record_id"> <input type="hidden" value="products" name="_rate_module" id="_rate_module"> <input type="hidden" value="product" name="_rate_view" id="_rate_view"> <input type="hidden" value="save_rate" name="task"> <input type="hidden" value="5231" name="record_id" id="_rate_record_id"> <input type="hidden" value="YWRkfDFwdTUyNWVvbjZzNTljam1oYnQ5bzFwNTRv" id="_session_upload"> <input type="hidden" value="L21heS1jaGlldS1taW5pL21heS1jaGlldS1taW5pLWFuZHJvaWQtd2lmaS10aG9uZy1taW5oLWthdy1rcDk1MC1jYW4tY2hpbmgtNC1nb2MtcDUyMzEuaHRtbD9mYmNsaWQ9SXdBUjJwSVZzNFVRNTB1TjM2UXpmVmpWdnZ4bHQxVl9rNDZCM1VMQUczZHlzVGlETV9Odzh2Qm9kWm1vTQ==" name="return" id="_rate_return"> <input type="hidden" name="linkurlall" id="linkurlall" value="https://maychieuminikaw.com/may-chieu-mini/may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html?fbclid=IwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM"> <input type="hidden" value="/index.php?module=rates&amp;view=rates&amp;type=products&amp;task=save_rate&amp;raw=1" name="return" id="link_reply_rate">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="_info_rate" class="cls"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="frame_center">
                                <div class="product_base">
                                    <meta itemprop="brand" content="KAW">
                                    
                                        <div class="price cls " itemprop="offers" itemscope="" itemtype="https://schema.org/AggregateOffer">
                                            <link itemprop="availability" href="https://schema.org/InStock">
                                            <div class="price_current " id="price" content="3449000"> {{ str_replace(',' ,'.', number_format($data->Price)) }}₫ </div>
                                            <meta itemprop="lowPrice" content="3449000">
                                            <meta itemprop="highPrice" content="3449000">
                                            <meta itemprop="itemOffered" name="itemOffered" content="10">
                                            <meta itemprop="offerCount" name="offerCount" content="999">
                                            <meta itemprop="priceCurrency" content="VND">
                                            <!-- <div class="price_old"> <span class="price_old_nb" id="price_old" content="4800000"> 4.800.000₫</span> </div> <span class="unit_data"> / Chiếc</span> -->
                                            <div class="in_stock"> <i></i>Còn hàng </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="end-product-base-top"></div>
                                        <div>
                                            <meta itemprop="mpn" content="5231">
                                            <meta itemprop="sku" content="5231">
                                        </div>
                                        <div class="_attributes"> </div>
                                        <div class="detail_button product_detail_bt cls">
                                            <div class="gift_summary">
                                               
                                            </div>
                                            <div class="wrap-btm-buy cls"> 
                                                <a href="javascript:void(0)" onclick="addToCart({{ $data->id }})">
                                                        <div type="submit" class="btn-buy-222 fl" id="buy-now-222"> 
                                                                <span> Mua ngay </span> 
                                                        </div>
                                                </a>
                                                
                                                 <a href="javascript:void(0)" onclick="addCartFast({{ $data->id }})" class="btn-dathang" data-toggle="modal">
                                                    <font>Thêm vào giỏ hàng </font>
                                                </a> </div>
                                            <div class="clear"></div>
                                        </div> <input type="hidden" name="module" value="products"> <input type="hidden" name="view" value="cart"> <input type="hidden" name="task" value="ajax_buy_product"> <input type="hidden" name="product_id" value="5231"> <input type="hidden" name="Itemid" value="10">
                                    
                                    <div class="buy_fast">
                                        <div class="title_buy_fast_bold">Đặt hàng nhanh</div>
                                        <div class="title_buy_fast">Để lại số điện thoại, chúng tôi sẽ gọi lại ngay </div>
                                        <div class="clear"></div>
                                        
                                            <div class="cls"> <input type="tel" required="" value="" placeholder="Nhập số điện thoại" id="telephone_buy_fast" name="telephone_buy_fast" class="keyword input-text"> <button type="submit" class="button-buy-fast button" onclick="addCallPhone({{ $data->id }})">Gửi</button> </div> <input type="hidden" name="module" value="products"> <input type="hidden" name="view" value="cart"> <input type="hidden" name="task" value="buy_fast_save"> <input type="hidden" name="id" value="5231"> <input type="hidden" name="Itemid" value="10"> <input type="hidden" value="L21heS1jaGlldS1taW5pL21heS1jaGlldS1taW5pLWFuZHJvaWQtd2lmaS10aG9uZy1taW5oLWthdy1rcDk1MC1jYW4tY2hpbmgtNC1nb2MtcDUyMzEuaHRtbD9mYmNsaWQ9SXdBUjJwSVZzNFVRNTB1TjM2UXpmVmpWdnZ4bHQxVl9rNDZCM1VMQUczZHlzVGlETV9Odzh2Qm9kWm1vTQ==" name="return">
                                       
                                    </div>
                                    <div class="time-word"> Gọi đặt mua: <a title="Gọi đặt mua" href="tel:0867935899">0867935899</a> </div> <!--    TAGS        --> <input type="hidden" name="record_alias" id="record_alias" value="may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc"> <input type="hidden" name="record_id" id="record_id" value="5231"> <input type="hidden" name="table_name" id="table_name" value="may_chieu">
                                </div>
                                <div class="default_characteristic_pc">
                                    <div class="tab_content_right">
                                        <div class="characteristic">
                                            <h2 class="tab-title"> <span>Thông tin sản phẩm</span> </h2>

                                            {!! $data->Specifications  !!}
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup_chose_other_compatables hide">
                            <div class="popup_chose_other_compatables_inner">
                                <div class="close_popup_chose_other_compatables">x</div>
                            </div>
                        </div> <!--  -->
                        <!-- Không có phụ kiện khuyến mãi nào đối với sản phẩm này -->
                        <div class="detail_main_bot">
                            <div class="cls">
                                <div class="frame_b_l ">
                                    <!-- Modal HTML -->
                                    <div id="modal_buy_now" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <div class="modal-title"><span>Đặt hàng ngay - thông tin đặt hàng</span></div>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" name="eshopcart_info" method="post" id="eshopcart_info">
                                                        <div class="row cls">
                                                            <div class=" col-modal-l">
                                                                <div class="media-box">
                                                                    <div class="pull-left">
                                                                        <div class="media-img "> <img class="img-responsive lazy after-lazy" alt="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc" itemprop="image" src="https://maychieuminikaw.com/images/products/2023/06/28/resized/k95003_1687943471.jpg" style="opacity: 1; display: none;" srcset="https://maychieuminikaw.com/images/products/2023/06/28/resized/k95003_1687943471.jpg.webp"> </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h2>Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc</h2>
                                                                        <div> <strong>Số lượng</strong> <input class="quantity_modal" type="text" name="quantity" value="1" id="quantity_modal"> </div>
                                                                        <div class="price_modal"> 3.449.000₫ </div>
                                                                        <div class="price_modal_new"></div>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class=" col-modal-r">
                                                                <div class="input_text_wrap"> <input type="text" name="sender_name" id="sender_name" placeholder="Họ và tên" value="" class="input_text"> </div>
                                                                <div class="input_text_wrap"> <input type="text" required="" name="sender_telephone" id="sender_telephone" placeholder="Điện thoại (10 số)" value="" class="input_text"> </div>
                                                                <div class="input_text_wrap"> <input type="text" name="sender_address" id="sender_address" placeholder="Địa chỉ" value="" class="input_text"> </div> <select class="input_text" name="city_receiver">
                                                                    <option value="0" data-price="0" data-type="species">Tỉnh/TP nhận hàng</option>
                                                                    <option value="Hà Nội">Hà Nội</option>
                                                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                                                    <option value="Hải Phòng">Hải Phòng</option>
                                                                    <option value="Bình Dương">Bình Dương</option>
                                                                    <option value="Khánh Hòa">Khánh Hòa</option>
                                                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                                                    <option value="Điện Biên">Điện Biên</option>
                                                                    <option value="Lai Châu">Lai Châu</option>
                                                                    <option value="Sơn La">Sơn La</option>
                                                                    <option value="Hà Giang">Hà Giang</option>
                                                                    <option value="Yên Bái">Yên Bái</option>
                                                                    <option value="Hòa Bình">Hòa Bình</option>
                                                                    <option value="Thái Nguyên">Thái Nguyên</option>
                                                                    <option value="Lạng Sơn">Lạng Sơn</option>
                                                                    <option value="Quảng Ninh">Quảng Ninh</option>
                                                                    <option value="Bắc Giang">Bắc Giang</option>
                                                                    <option value="Phú Thọ">Phú Thọ</option>
                                                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                                    <option value="Bắc Ninh">Bắc Ninh</option>
                                                                    <option value="Hải Dương">Hải Dương</option>
                                                                    <option value="Hưng Yên">Hưng Yên</option>
                                                                    <option value="Thái Bình">Thái Bình</option>
                                                                    <option value="Hà Nam">Hà Nam</option>
                                                                    <option value="Nam Định">Nam Định</option>
                                                                    <option value="Ninh Bình">Ninh Bình</option>
                                                                    <option value="Thanh Hóa">Thanh Hóa</option>
                                                                    <option value="Nghệ An">Nghệ An</option>
                                                                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                                                                    <option value="Quảng Bình">Quảng Bình</option>
                                                                    <option value="Quảng Trị">Quảng Trị</option>
                                                                    <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                                                    <option value="Cao Bằng">Cao Bằng</option>
                                                                    <option value="Quảng Nam">Quảng Nam</option>
                                                                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                                                                    <option value="Bình Định">Bình Định</option>
                                                                    <option value="Phú Yên">Phú Yên</option>
                                                                    <option value="Lào Cai">Lào Cai</option>
                                                                    <option value="Ninh Thuận">Ninh Thuận</option>
                                                                    <option value="Bình Thuận">Bình Thuận</option>
                                                                    <option value="Kon Tum">Kon Tum</option>
                                                                    <option value="Gia Lai">Gia Lai</option>
                                                                    <option value="Đắk Lắk">Đắk Lắk</option>
                                                                    <option value="Đắk Nông">Đắk Nông</option>
                                                                    <option value="Lâm Đồng">Lâm Đồng</option>
                                                                    <option value="Bình Phước">Bình Phước</option>
                                                                    <option value="Tây Ninh">Tây Ninh</option>
                                                                    <option value="Bắc Kạn">Bắc Kạn</option>
                                                                    <option value="Đồng Nai">Đồng Nai</option>
                                                                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                                                    <option value="Long An">Long An</option>
                                                                    <option value="Tiền Giang">Tiền Giang</option>
                                                                    <option value="Bến Tre">Bến Tre</option>
                                                                    <option value="Trà Vinh">Trà Vinh</option>
                                                                    <option value="Vĩnh Long">Vĩnh Long</option>
                                                                    <option value="Đồng Tháp">Đồng Tháp</option>
                                                                    <option value="An Giang">An Giang</option>
                                                                    <option value="Kiên Giang">Kiên Giang</option>
                                                                    <option value="Cần Thơ">Cần Thơ</option>
                                                                    <option value="Hậu Giang">Hậu Giang</option>
                                                                    <option value="Sóc Trăng">Sóc Trăng</option>
                                                                    <option value="Bạc Liêu">Bạc Liêu</option>
                                                                    <option value="Cà Mau">Cà Mau</option>
                                                                </select> <br> <select class="input_text" name="method_receiver">
                                                                    <option value="0" data-price="0" data-type="species">Hình thức nhận hàng</option>
                                                                    <option value="shop">Thanh toán trực tiếp tại cửa hàng</option>
                                                                    <option value="cod">Thanh toán khi nhận hàng (COD)</option>
                                                                </select> <br>
                                                                <div class="input_text_wrap"> <input type="text" name="sender_codesale" id="sender_codesale" placeholder="Mã giảm giá (nếu có)" class="input_text"> </div>
                                                                <!--<input type="text" name="sender_email"  id="sender_email"  value="" class="input_text" />-->
                                                                <div class="btn_area"> <a rel="nofollow" class="btn btn-default" href="javascript: void(0)" id="submitbt"> <span>Đặt hàng</span> </a> <a rel="nofollow" class="btn reset-default" href="javascript: void(0)" id="resetbt"> <span>Nhập lại</span> </a> </div> <input type="hidden" name="code_sale" id="code_sale"> <input type="hidden" name="id" value="5231"> <input type="hidden" name="price" value="3449000"> <input type="hidden" name="price_fix" value="3449000"> <input type="hidden" name="price_old" value="4800000"> <input type="hidden" name="module" value="products"> <input type="hidden" name="view" value="cart"> <input type="hidden" name="task" value="eshopcart2_save" id="task">
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="other_info">
                                                                <div class="check-square mt10">Nhận giao hàng trong <strong>60 phút</strong> tại <strong>TP.Hà Nội và TP.HCM</strong> </div>
                                                                <div class="check-square mt10">Giao hàng <strong>tận nơi</strong>, hài lòng thanh toán</div>
                                                                <div class="check-square mt10">Bảo hành <strong></strong></div>
                                                                <div class="mt10">Mọi thắc mắc xin vui lòng liên hệ theo số máy <strong style="color: #E31010;"> 0867935899</strong> để biết thêm chi tiết.</div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <input type="hidden" value="0" id="memory_curent"> <input type="hidden" value="0" id="usage_states_curent"> <input type="hidden" value="0" id="region_curent"> <input type="hidden" value="0" id="color_curent"> <input type="hidden" value="0" id="color_curent_old"> <input type="hidden" value="0" id="warranty_curent"> <input type="hidden" value="0" id="origin_curent"> <input type="hidden" value="0" id="species_curent"> <input type="hidden" value="0" id="price_extend"> <input type="hidden" value="3449000" id="basic_price"> <input type="hidden" value="4800000" id="basic_price_old"> <input type="hidden" value="5231" name="product_id" id="product_id">
                                    
                                </div>
                                <div class="frame_b_r">
                                    <div class="products-list-related">
                                        <div class="tab-title cls">
                                            <div class="cat-title-main" id="characteristic-label"> <span>Sản phẩm liên quan</span> </div>
                                        </div>
                                        <div class="product_grid">

                                        @if(isset($other_product))
                                        @foreach($other_product as  $value)
                                        @if($value->active==1 && $value->id != $data->id)     
                                            <div class="item">
                                                <figure class="product_image "> <a href="{{ route('details', $value->Link) }}" title="{{ $value->Name }}"> <img class="lazy after-lazy" alt="{{ $value->Name }}" src="{{ asset($value->Image) }}" data-srcset="{{ asset($value->Image) }}"> </a> </figure>
                                                <div> 
                                                        <a href="{{ route('details', $value->Link) }}" title="{{ $value->Name }}" class="name"> {{ $value->Name }} </a> </div>
                                                <div class="price_arae">
                                                    <div class="price_current">{{  str_replace(',' ,'.', number_format($value->Price))  }}₫</div>
                                                    <!-- <div class="price_old"><span>7.000.000₫</span></div> -->
                                                </div>
                                                <div class="gift"> </div>
                                                <div class="clear"></div>
                                            </div>
                                        @endif
                                        @endforeach
                                        @endif    
                                            
                                        </div>
                                    </div>
                                </div>
                                

                                <!-- <div id="prodetails_tab20" class="prodetails_tab">
                                    <div class="tab_content_right">
                                        <div class="full-screen-mobile"></div>
                                        <div class="comments">
                                            <div class="tab_label">
                                                <h3>Đánh giá <strong>về Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc</strong></h3> </span>
                                            </div>
                                            <form method="post" class="comment_keyword_wrapper" onsubmit="return search_comment();"> <input type="text" id="comment_keyword" name="comment_keyword" placeholder="Tìm theo nội dung, người gửi..."> <button type="submit" class="button-search button"> <svg aria-hidden="true" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16">
                                                        <path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" class=""></path>
                                                    </svg> </button> </form>
                                            <div id="_info_comment" class="cls">
                                                <div class="_contents">
                                                    <div class="_item 1 _level_0 _sub_0">
                                                        <article itemprop="review" itemscope="" itemtype="http://schema.org/Review">
                                                            <p class="clearfix cls" itemscope="" itemprop="author" itemtype="http://schema.org/Person"><span class="_avatar">TV</span><span class="_name" itemprop="name">Quản trị viên</span><span class="_level">Quản trị viên</span></p>
                                                            <div class="_wrap">
                                                                <h4 class="_content " itemprop="description"> Xin chào quý khách. Quý khách hãy để lại bình luận, chúng tôi sẽ phản hồi sớm</h4>
                                                                <div class="_control"><a class="button_reply" href="javascript: void(0)">Trả lời</a><span class="dot">.</span><time itemprop="datePublished" content="2023-01-28 00:00" datetime="2023-01-28 00:00" title="2023-01-28 00:00">7 tháng trước</time></div>
                                                                <div class="reply_area hide">
                                                                    <form action="javascript:void(0);" method="post" name="comment_reply_form_1" id="comment_reply_form_1" class="form_comment cls" onsubmit="javascript: submit_reply(1);return false;">
                                                                        <div class="_textarea"><textarea texid="txt_content_1" id="cmt_content_1" class="cmt_content" name="content" placeholder="Viết bình luận của bạn..."></textarea></div><input type="button" class="btn-comment-mb-rep" value="Gửi bình luận">
                                                                        <div class="full-screen-mobile"></div>
                                                                        <div class="wrap_r cls">
                                                                            <div class="title-mb">Thông tin người gửi<span class="close-md-comment"><svg height="16px" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
                                                                                        <g>
                                                                                            <path fill="black" d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"></path>
                                                                                        </g>
                                                                                    </svg></span></div>
                                                                            <div class="wrap_loginpost mbl">
                                                                                <aside class="_right"> <input required="" class="txt_input" name="name" id="cmt_name_1" type="text" placeholder="Họ tên (bắt buộc)" maxlength="50" autocomplete="off" value=""><input required="" class="txt_input" name="email" id="cmt_email_1" type="email" placeholder="Email (bắt buộc)" value=""></aside>
                                                                            </div>
                                                                            <div class="wrap_submit mbl"><input type="submit" class="_btn_comment" value="Gửi bình luận"></div>
                                                                        </div><input type="hidden" value="products" name="module" id="_cmt_module_1"><input type="hidden" value="product" name="view" id="_cmt_view_1"><input type="hidden" value="products" name="type" id="_cmt_type_1"><input type="hidden" value="save_reply" name="task"><input type="hidden" value="1" name="parent_id" id="cmt_parent_id_1"><input type="hidden" value="0" name="record_id" id="_cmt_record_id_1"><input type="hidden" value="" name="return" id="_cmt_return_1"><input type="hidden" value="/index.php?module=comments&amp;view=comments&amp;type=products&amp;task=save_reply&amp;raw=1" name="return" id="cmt_link_reply_form_1">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="javascript:void(0);" method="post" name="comment_add_form" id="comment_add_form" class="form_comment cls" onsubmit="javascript: submit_comment();return false;">
                                               
                                                <div class="tab-title"> <span>Bình luận <span>sản phẩm</span></span> </div>
                                                <div class="_textarea"> <textarea name="content" id="cmt_content" placeholder="Viết bình luận của bạn..."></textarea> </div> <button type="button" class="btn-comment-mb">Gửi bình luận </button>
                                                <div class="wrap_r cls">
                                                    <div class="title-mb"> Thông tin người gửi <span class="close-md-comment"><svg height="16px" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
                                                                <g>
                                                                    <path fill="black" d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"></path>
                                                                </g>
                                                            </svg></span> </div>
                                                    <div class="wrap_loginpost">
                                                        <aside class="_right">
                                                            <div> <input class="txt_input" required="" name="name" type="text" placeholder="Họ tên (bắt buộc)" id="cmt_name" autocomplete="off" value=""> </div>
                                                            <div> <input class="txt_input" required="" name="email" type="email" placeholder="Email (bắt buộc)" id="cmt_email" value=""> </div>
                                                        </aside>
                                                    </div>
                                                    <div class="wrap_submit mbl">
                                                        <div class="pull-right clearfix"> <input type="submit" class="_btn_comment" value="Gửi bình luận"> </div>
                                                    </div>
                                                </div> <input type="hidden" value="comments" name="module"> <input type="hidden" value="comments" name="view"> <input type="hidden" value="products" name="type" id="_cmt_type">  <input type="hidden" value="products" name="_cmt_module" id="_cmt_module"> <input type="hidden" value="product" name="_cmt_view" id="_cmt_view"> <input type="hidden" value="save_comment" name="task"> <input type="hidden" value="5231" name="record_id" id="_cmt_record_id"> <input type="hidden" value="" name="return" id="_cmt_return"> <input type="hidden" name="linkurlall" id="cmt_linkurlall" value="https://maychieuminikaw.com/may-chieu-mini/may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html?fbclid=IwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM"> <input type="hidden" value="/index.php?module=comments&amp;view=comments&amp;type=products&amp;task=save_comment&amp;raw=1" name="return" id="link_reply_form">
                                            </form>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div> <input type="hidden" value="5231" name="product_id" id="product_id">
                </div>
            </div>
            <script type="text/javascript">
                var product_id = '5231';
                var product_price = 3449000;
                var check_fb_viewcontent = 1;
            </script> <!-- Tiep thi lai dong adword -->
            <script type="text/javascript">
                var google_tag_params = {
                    dynx_itemid: '5231',
                    dynx_itemid2: '5231',
                    dynx_pagetype: 'offerdetail',
                    dynx_totalvalue: 3449000,
                
                };
            </script>
            <div class="wrapper_modal_alert_2"></div>
            <div class="popup-video-full">
                <div class="close" onclick="close_popup_video_full()">X</div>
                <div class="content-video">
                    <div class="video"> </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="clear"></div>
</div>
@push('script')



       

        <script type="text/javascript">
            function addToCart(id) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            
                $.ajax({
                    type: 'POST',
                    url: "{{ route('cart') }}",
                    data: {
                        product_id: id,
                        gift_check:'',
                           
                    },
                    beforeSend: function() {
                       
                        $('.loader').show();

                    },
                    success: function(result){
            
                        window.location.href = "{{ route('cart-details') }}";
                    }

                });
                   
            }

            function isValid(p) {
              var phoneRe = /(84|0[3|5|7|8|9])+([0-9]{8})\b/;
              var digits = p.replace(/\D/g, "");
              return phoneRe.test(digits);
            }

            function addCartFast(id) {
    
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            
                $.ajax({
                    type: 'POST',
                    url: "{{ route('addcartfast') }}",
                    data: {
                        product_id: id,
                           
                    },
                    success: function(result){
            
                        window.location.reload();

                    }
                });
                
            }

            function addCallPhone(id){

                if($('#telephone_buy_fast').val()==''){
                    alert('vui lòng nhập số điện thoại')
                }
                else if(!isValid($('#telephone_buy_fast').val())){
                    alert('số điện thoại không đúng định dạng');
                }
                else{
                    name = 'Khách đặt hàng bằng sđt';
                    phone = $('#telephone_buy_fast').val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('callphone') }}",
                        data: {
                            name: name,
                            phone:phone,
                            product_id:id,
                               
                        },
                        success: function(result){
                
                           

                            alert('Gửi thành công!')
                            
                        }
                    });
                }

            }

</script>

@endpush

@endsection