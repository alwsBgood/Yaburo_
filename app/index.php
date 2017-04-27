<?php
    require 'db/data.php';
    require 'db/visits.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>

    <meta charset="utf-8">

    <title>Yaburo | Эмоциональный дизайн интерьера офисных объектов в Киеве</title>

    <meta name="description" content="Создайте мощный образ своего бренда через интерьер! Эмоциональный интерьерный дизайн для офисных и коммерческих объектов в Украине.">
    <meta name="keywords" content="дизайн интерьера, дизайн офиса, дизайн коммерческих объектов, дизайн интерьера в Киеве, дизайн интерьера в Украине">

    <meta property="og:description" content="Создайте мощный образ своего бренда через интерьер! Эмоциональный интерьерный дизайн для офисных и коммерческих объектов в Украине." />

    <meta property="og:image" content="http://lp.yaburo.design/img/OG.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />

    <meta property="og:site_name" content="YaBuro"/>
    <meta property="og:title" content="Эмоциональный дизайн интерьера офисных объектов в Киеве" />
    <meta property="og:url" content="http://lp.yaburo.design/"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- RESET -->
    <style>html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}*{box-sizing:border-box}html,body{margin:0;width:100%}.container{max-width:1200px;margin:0 auto}a,button,img,input{-webkit-transition:all .5s;transition:all .5s}button,button:active,button:focus,input,input:active,input:focus,textarea,textarea:active,textarea:focus{outline:none}button,button:hover,a,a:hover{text-decoration:none;cursor:pointer}.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:before,.clearfix:after,.container:before,.container:after{content:'.';display:block;overflow:hidden;visibility:hidden;font-size:0;line-height:0;width:0;height:0}.clearfix:after,.container:after{clear:both}.left{float:left}.right{float:right}.tl{text-align:left}.tr{text-align:right}.tc{text-align:center}.flex{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center}a,button,input,textarea{text-decoration:none;outline:0;border:0;-webkit-transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease;transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease}a:focus,button:focus,input:focus,textarea:focus{outline:0}input,textarea{-webkit-box-sizing:border-box;box-sizing:border-box}textarea{resize:none}button:hover,a:hover{cursor:pointer}</style>

<!--     <style>#page-preloader{position:fixed;left:0;top:0;right:0;bottom:0;background:#fff;z-index:300}.contpre small{font-size:25px}.contpre{width:250px;height:100px;position:absolute;left:50%;top:48%;margin-left:-125px;margin-top:-75px;color:#fff;font-size:40px;letter-spacing:-2px;text-align:center;line-height:35px}.round1,.round1:before,.round1:after{border:4px solid transparent;border-radius:50%}.round1{height:150px;width:150px;top:50%;left:50%;margin:-75px 0 0 -75px;position:absolute;border-top-color:#000;animation:spin 1s infinite linear;z-index:100}.round1:before,.round1:after{content:"";position:absolute}.round1:before{top:10px;left:10px;right:10px;bottom:10px;border-top-color:#f4e821;animation:spin 2s infinite linear}.round1:after{top:24px;left:24px;right:23px;bottom:23px;border-top-color:#000;animation:spin 3s infinite linear}@keyframes spin{from{transform:rotate(0deg)}to{transform:rotate(360deg)}}</style> -->

    <!-- GRID -->
    <style>:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.col-1,.col-sm-1,.col-md-1,.col-lg-1,.col-2,.col-sm-2,.col-md-2,.col-lg-2,.col-3,.col-sm-3,.col-md-3,.col-lg-3,.col-4,.col-sm-4,.col-md-4,.col-lg-4,.col-5,.col-sm-5,.col-md-5,.col-lg-5,.col-6,.col-sm-6,.col-md-6,.col-lg-6,.col-7,.col-sm-7,.col-md-7,.col-lg-7,.col-8,.col-sm-8,.col-md-8,.col-lg-8,.col-9,.col-sm-9,.col-md-9,.col-lg-9,.col-10,.col-sm-10,.col-md-10,.col-lg-10,.col-11,.col-sm-11,.col-md-11,.col-lg-11,.col-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12{float:left}.col-12{width:100%}.col-11{width:91.66666667%}.col-10{width:83.33333333%}.col-9{width:75%}.col-8{width:66.66666667%}.col-7{width:58.33333333%}.col-6{width:50%}.col-5{width:41.66666667%}.col-4{width:33.33333333%}.col-3{width:25%}.col-2{width:16.66666667%}.col-1{width:8.33333333%}.col-pull-12{right:100%}.col-pull-11{right:91.66666667%}.col-pull-10{right:83.33333333%}.col-pull-9{right:75%}.col-pull-8{right:66.66666667%}.col-pull-7{right:58.33333333%}.col-pull-6{right:50%}.col-pull-5{right:41.66666667%}.col-pull-4{right:33.33333333%}.col-pull-3{right:25%}.col-pull-2{right:16.66666667%}.col-pull-1{right:8.33333333%}.col-pull-0{right:auto}.col-push-12{left:100%}.col-push-11{left:91.66666667%}.col-push-10{left:83.33333333%}.col-push-9{left:75%}.col-push-8{left:66.66666667%}.col-push-7{left:58.33333333%}.col-push-6{left:50%}.col-push-5{left:41.66666667%}.col-push-4{left:33.33333333%}.col-push-3{left:25%}.col-push-2{left:16.66666667%}.col-push-1{left:8.33333333%}.col-push-0{left:auto}.col-offset-12{margin-left:100%}.col-offset-11{margin-left:91.66666667%}.col-offset-10{margin-left:83.33333333%}.col-offset-9{margin-left:75%}.col-offset-8{margin-left:66.66666667%}.col-offset-7{margin-left:58.33333333%}.col-offset-6{margin-left:50%}.col-offset-5{margin-left:41.66666667%}.col-offset-4{margin-left:33.33333333%}.col-offset-3{margin-left:25%}.col-offset-2{margin-left:16.66666667%}.col-offset-1{margin-left:8.33333333%}.col-offset-0{margin-left:0}.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}</style>

    <!-- FONTS+HEADER -->
    <style>@font-face{font-family:"AngleciaProDisplay-SemiBoldItal";font-style:normal;font-weight:400;src:url(fonts/AngleciaProDisplay-SemiBoldItal.woff2) format("woff2"),url(fonts/AngleciaProDisplay-SemiBoldItal.woff) format("woff")}@font-face{font-family:"GothamProLight";font-style:normal;font-weight:400;src:url(fonts/GothamProLight.woff2) format("woff2"),url(fonts/GothamProLight.woff) format("woff")}@font-face{font-family:"GothamProRegular";font-style:normal;font-weight:400;src:url(fonts/GothamProRegular.woff2) format("woff2"),url(fonts/GothamProRegular.woff) format("woff")}@font-face{font-family:"GothamProMedium";font-style:normal;font-weight:400;src:url(fonts/GothamProMedium.woff2) format("woff2"),url(fonts/GothamProMedium.woff) format("woff")}@font-face{font-family:"GothamProBold";font-style:normal;font-weight:400;src:url(fonts/GothamProBold.woff2) format("woff2"),url(fonts/GothamProBold.woff) format("woff")}@font-face{font-family:"GothamProBlack";font-style:normal;font-weight:400;src:url(fonts/GothamProBlack.woff2) format("woff2"),url(fonts/GothamProBlack.woff) format("woff")}body{position:relative;font:14px/24px GothamProRegular,sans-serif;color:#000;background-color:#fff;letter-spacing:.01em}body.unscroll{overflow:hidden}.main_wrap{padding:0 45px;position:relative;overflow:hidden}.md-modal.md-show{opacity:1}.md-modal{opacity:0}.text--header{font-family:"GothamProBlack",sans-serif}.text--title{font-family:"GothamProMedium",sans-serif}.text--light{font-family:"GothamProLight",sans-serif}.text--italic{font-family:"AngleciaProDisplay-SemiBoldItal",sans-serif}.text--yellow{color:#f4e821}.title{font-size:18px;line-height:23px;text-transform:uppercase;letter-spacing:0}.header{font-size:38px;line-height:44px;letter-spacing:.03em}.header_main{font-size:76px;line-height:59px;text-transform:uppercase;letter-spacing:.015em}::-webkit-scrollbar{width:10px}::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 20px rgba(0,0,0,0.3)}::-webkit-scrollbar-thumb{-webkit-border-radius:0;border-radius:0;background:#f4e821}::-webkit-scrollbar-thumb:window-inactive{background:#f4e821}#scrollup{position:fixed;right:20px;bottom:30px;width:10px;height:15px;display:none;opacity:1;cursor:pointer;z-index:101;font-size:40px;text-shadow:-2px 2px 5px rgba(0,0,0,0.3);-webkit-transition:all .5s;transition:all .5s}#scrollup svg{fill:#848484;-webkit-transition:all .5s;transition:all .5s}#scrollup:hover svg{fill:#f4e821}.hidden{height:0;width:0}.bar-long{height:5px;width:0;z-index:1000;position:fixed;top:0;left:0;background:#f4e821}.btn{width:280px;height:60px;border:3px solid #f4e821;background-color:transparent;color:#f4e821;font:12px GothamProBold,sans-serif;text-transform:uppercase;padding-top:3px;letter-spacing:.2em}.btn:hover{background:#f4e821;color:#000}.btn_white{width:280px;height:60px;background-color:#fff;color:#000;font:12px GothamProBold,sans-serif;text-transform:uppercase;padding-top:3px;letter-spacing:.2em}.btn_white:hover{background:#f4e821;color:#000}.viber{opacity:.5;-webkit-transition:all .4s;transition:all .4s;display:inline-block;margin:0 16px 0 35px}.viber:hover{opacity:1;-webkit-transform:scale(1.2);-ms-transform:scale(1.2);transform:scale(1.2)}.viber:hover rect{-webkit-transition:all .4s;transition:all .4s;fill:#7b519d}.telegram{opacity:.5;-webkit-transition:all .4s;transition:all .4s;display:inline-block}.telegram:hover{opacity:1;-webkit-transform:scale(1.2);-ms-transform:scale(1.2);transform:scale(1.2);fill:#35A6DE}#left_col{position:fixed;left:0;top:0;bottom:0;width:50px;background:#fff;z-index:100}#left_col #menu_trigger{position:absolute;top:50%;margin-top:-30px;left:-19px;cursor:pointer;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);font-family:"GothamProBold",sans-serif;font-size:12px;letter-spacing:.25em;padding:0 20px;text-transform:uppercase;color:#7f7f7f;-webkit-transition:text-shadow .3s;transition:text-shadow .3s}#left_col #menu_trigger:hover{text-shadow:0 0 8px rgba(0,0,0,0.4)}#left_col .social{position:absolute;bottom:0;left:0;width:50px;text-align:center;font-size:16px;padding-bottom:40px}#left_col .social li{display:block;line-height:28px}#left_col .social a{color:#7f7f7f}#left_col .social a:hover{color:#000}#right_col{position:fixed;right:0;top:0;bottom:0;width:50px;background:#fff;z-index:100}#right_col .portfolio_trigger,#right_col .call_back_trigger{position:absolute;cursor:pointer;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);font-family:"GothamProBold",sans-serif;font-size:12px;letter-spacing:.25em;padding:0 20px;text-transform:uppercase;color:#7f7f7f;-webkit-transition:text-shadow .3s;transition:text-shadow .3s}#right_col .portfolio_trigger:hover,#right_col .call_back_trigger:hover{text-shadow:0 0 8px rgba(0,0,0,0.4)}#right_col .portfolio_trigger{bottom:98px;right:-51px;width:160px}#right_col .call_back_trigger{top:140px;width:235px;right:-92px}#menu_modal.open{width:100%}#menu_modal{position:fixed;overflow:hidden;width:0;z-index:101;background:#fff;top:0;height:100vh;left:49px;-webkit-transition:width 1s;transition:width 1s}#menu_modal #close_menu_modal{opacity:0;z-index:10;position:absolute;top:100px;margin-top:-30px;right:-10px;cursor:pointer;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);font-family:"GothamProBold",sans-serif;font-size:12px;letter-spacing:.25em;padding:0 20px;text-transform:uppercase;color:#000;-webkit-transition:all .3s;transition:all .3s}#menu_modal #close_menu_modal:hover{text-shadow:0 0 8px rgba(0,0,0,0.4)}#menu_modal .portfolio_trigger{opacity:0;-webkit-transition:opacity .3s;transition:opacity .3s;bottom:78px;right:-7px;width:160px;position:absolute;cursor:pointer;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);font-family:"GothamProBold",sans-serif;font-size:12px;letter-spacing:.25em;padding:0 20px;text-transform:uppercase;color:#000;-webkit-transition:text-shadow .3s;transition:text-shadow .3s}#menu_modal .portfolio_trigger:hover{text-shadow:0 0 8px rgba(0,0,0,0.4)}#menu_modal .top{padding-top:10px}#menu_modal .top .phone_box{margin-top:8px;float:right}#menu_modal .top .tel{color:#000;position:relative;letter-spacing:.025em}#menu_modal .top .tel:before{content:"";position:absolute;width:0;height:1px;bottom:-4px;left:0;background:#000;-webkit-transition:width .5s;transition:width .5s}#menu_modal .top .tel:hover:before{width:100%}#menu_modal .menu_list{margin-top:160px;font-family:"GothamProBold",sans-serif;font-size:12px;padding-left:70px;-webkit-transition:all 3.3s;transition:all 3.3s;opacity:0;margin-bottom:100px;-webkit-transition:opacity .3s;transition:opacity .3s}#menu_modal .menu_list li{position:relative}#menu_modal .menu_list li a{font-size:14px;line-height:18px;color:#000;-webkit-transition:all .2s ease;transition:all .2s ease;-webkit-transition:all .3s ease;-moz-transition:all .3s ease;-o-transition:all .3s ease;-ms-transition:all .3s ease}#menu_modal .menu_list li a:before{position:absolute;content:'';width:50px;height:3px;left:-70px;top:50%;margin-top:-1.5px;background:#f4e821;-webkit-transition:opacity .3;transition:opacity .3;opacity:0}#menu_modal .menu_list li a:hover:before{opacity:1}#menu_modal .menu_list li a:hover{font-size:38px;line-height:44px}#menu_modal .menu_list li + li{margin-top:10px}#menu_modal .social{font-size:26px}#menu_modal .social a{color:#7f7f7f}#menu_modal .social a:hover{color:#000}#menu_modal .social li{display:inline-block}#menu_modal .social li + li{margin-left:10px}#menu_modal .tel{color:#000;position:relative;letter-spacing:.025em;margin-bottom:20px;display:inline-block}#menu_modal .tel:before{content:"";position:absolute;width:0;height:1px;bottom:-4px;left:0;background:#000;-webkit-transition:width .5s;transition:width .5s}#menu_modal .tel:hover:before{width:100%}#menu_modal #close_menu_modal.visible,#menu_modal .menu_list.visible,#menu_modal .portfolio_trigger.visible{opacity:1}#portfolio_modal.open{width:100%;overflow-y:scroll}#portfolio_modal{position:fixed;overflow:hidden;width:0;z-index:101;background:#fff;top:0;height:100vh;right:0;-webkit-transition:width 1s;transition:width 1s}#portfolio_modal #close_portfolio_modal{-webkit-transition:opacity .4s;transition:opacity .4s;opacity:0;opacity:1;z-index:10;position:absolute;top:140px;z-index:30;margin-top:-30px;right:-55px;cursor:pointer;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);font-family:"GothamProBold",sans-serif;font-size:12px;letter-spacing:.25em;padding:0 20px;text-transform:uppercase;color:#000;-webkit-transition:all .3s;transition:all .3s}#portfolio_modal #close_portfolio_modal:hover{text-shadow:0 0 8px rgba(0,0,0,0.4)}#portfolio_modal .top{opacity:0;-webkit-transition:opacity .4s;transition:opacity .4s;padding-top:20px;margin-bottom:55px}#portfolio_modal .portfolio_slider{-webkit-transition:opacity .4s;transition:opacity .4s;opacity:0;padding-bottom:50px}#portfolio_modal .portfolio_slider .slide{padding-bottom:50px}#portfolio_modal .content_block{padding-top:40px}#portfolio_modal .content_block .header{vertical-align:top;display:inline-block;width:40%;max-width:380px;padding-right:40px}#portfolio_modal .content_block .description_text{vertical-align:top;display:inline-block;width:55%;max-width:360px;padding-right:40px}#portfolio_modal .content_block .items_row{margin-top:100px}#portfolio_modal .content_block .items_row .item{display:inline-block;vertical-align:top;width:100%;max-width:32%;padding-right:40px}#portfolio_modal .content_block .items_row .item .title{margin-bottom:48px;position:relative;display:inline-block}#portfolio_modal .content_block .items_row .item .title:before{content:"";position:absolute;width:265px;height:3px;bottom:-17px;left:0;background-color:#000;-webkit-transition:width 2.5s;transition:width 2.5s}#portfolio_modal .mobile{display:none}#portfolio_modal .photos{max-height:481px;overflow-y:scroll;overflow-x:hidden}#portfolio_modal .photos li{position:relative}#portfolio_modal .photos li a{position:relative;display:block}#portfolio_modal .photos li a:before{position:absolute;z-index:5;content:'';width:100%;height:100%;left:0;top:0;background:rgba(0,0,0,0.3);-webkit-transition:all .4s;transition:all .4s}#portfolio_modal .photos li a:hover:before{background:rgba(0,0,0,0.7)}#portfolio_modal .photos li + li{margin-top:4px}#portfolio_modal #close_menu_modal.visible,#portfolio_modal .menu_list.visible,#portfolio_modal .portfolio_trigger.visible{opacity:1}#portfolio_modal .slick-next{top:170px;left:100px}#portfolio_modal .slick-prev{top:170px;left:0}#portfolio_modal .slide_number{position:absolute;top:160px;left:0;width:116px;text-align:center;color:#f4e821;font-family:"AngleciaProDisplay-SemiBoldItal",sans-serif;font-size:19px;letter-spacing:.025em;font-weight:100}#portfolio_modal .visible{opacity:1!important}#sec_01{position:relative;padding:9px 0 200px;color:#fff;height:100vh;overflow:hidden}#sec_01:before{position:absolute;content:'';width:100%;height:40px;left:0;bottom:0;background:#fff;z-index:1}#sec_01 .container{position:relative}#sec_01 .phone_box{margin-top:8px;float:right}#sec_01 .tel{color:#000;position:relative;letter-spacing:.025em}#sec_01 .tel:before{content:"";position:absolute;width:0;height:1px;bottom:-4px;left:0;background:#000;-webkit-transition:width .5s;transition:width .5s}#sec_01 .tel:hover:before{width:100%}#sec_01 .top{padding-bottom:7px}#sec_01 .pattern_box{position:absolute;top:50px;bottom:0;left:0;right:80px;background-repeat:repeat;background-position:top center;background-image:url(img/pattern.png)}#sec_01 .content_box{position:relative;z-index:10;padding-top:110px;margin-top:310px}#sec_01 .content_box:before{content:"";position:absolute;width:50px;height:3px;top:0;left:0;background-color:#f4e821}#sec_01 h1{margin-bottom:53px}#sec_01 .underheader{position:relative;font-family:"GothamProLight",sans-serif;font-size:18px;line-height:20px;padding-left:48px;letter-spacing:.02em}#sec_01 .underheader:before{content:"";position:absolute;width:34px;height:2px;top:50%;margin-top:-1px;left:0;background:#fff}#sec_01 .underheader + .underheader{margin-top:23px}#sec_01 .btn_block{margin-top:51px;margin-bottom:140px}#sec_01 .btn_wrap{display:inline-block}#sec_01 .btn_wrap + .btn_wrap{margin-left:25px}#sec_01 .slider_01{position:absolute;z-index:5;right:0;top:50%;-webkit-transform:translateY(-65%);-ms-transform:translateY(-65%);transform:translateY(-65%);left:48%;bottom:60px}#sec_01 .slider_01 img{width:100%}#mobile_menu_trigger{display:none;position:fixed;background:#fff;width:60px;height:60px;right:0;top:42px;z-index:100;-webkit-transition:.5s;transition:.5s}#mobile_menu_trigger .svg{width:60px;height:60px;cursor:pointer;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}#mobile_menu_trigger .path{fill:none;-webkit-transition:stroke-dashoffset .5s cubic-bezier(0.25,-0.25,0.75,1.25),stroke-dasharray .5s cubic-bezier(0.25,-0.25,0.75,1.25);transition:stroke-dashoffset .5s cubic-bezier(0.25,-0.25,0.75,1.25),stroke-dasharray .5s cubic-bezier(0.25,-0.25,0.75,1.25);stroke-width:30px;stroke-linecap:round;stroke:#222;stroke-dashoffset:0}#mobile_menu_trigger path#top,#mobile_menu_trigger path#bottom{stroke-dasharray:240px 950px}#mobile_menu_trigger path#middle{stroke-dasharray:240px 240px}#mobile_menu_trigger .cross path#top,#mobile_menu_trigger .cross path#bottom{stroke-dashoffset:-650px;stroke-dashoffset:-650px}#mobile_menu_trigger .cross path#middle{stroke-dashoffset:-115px;stroke-dasharray:1px 220px}#mobile_menu_trigger.scrolled{-webkit-transform:translateY(-42px);-ms-transform:translateY(-42px);transform:translateY(-42px)}.sec_01-slider_controll,.sec_04-slider_controll,.sec_06-slider_controll,.sec_09-slider_controll,.mobile_slider_02-slider_controll,.mobile_slider_07-slider_controll{width:100px;text-align:center;color:#f4e821;font-family:"AngleciaProDisplay-SemiBoldItal",sans-serif;font-size:19px;letter-spacing:.025em;font-weight:100}@media (max-width: 1900px){.main_wrap{padding:0 35px}#sec_01 .content_box{margin-top:200px}#left_col{width:35px}#left_col #menu_trigger{left:-25px;font-size:10px}#left_col .social{width:35px}#menu_modal{left:34px}#menu_modal #close_menu_modal{right:-20px;top:135px}#menu_modal .portfolio_trigger{right:-20px}#right_col{width:35px}#right_col .portfolio_trigger{right:-63px;font-size:10px}#right_col .call_back_trigger{right:-99px;font-size:10px}#scrollup{right:12px}}@media (max-width: 1900px) and (min-width: 1200px){#sec_01:before{height:30px}#sec_01 .content_box{margin-top:200px;padding-left:30px}#sec_01 .content_box:before{left:30px}#sec_01 .btn_block{margin-bottom:90px}#sec_01 .slider_01{left:43%;bottom:-50px}}@media (max-width: 1900px) and (min-height: 1100px){#sec_01{min-height:auto}}@media (max-width: 1400px){#sec_01 .content_box{margin-top:200px;padding-top:80px}#sec_01 .content_box .header_main{font-size:60px}}@media (max-width: 1200px){#sec_01 .underheader{font-size:16px}#sec_01 .header_main{font-size:44px;margin-bottom:20px;line-height:52px}#sec_01 .btn_white,#sec_01 .btn{width:220px;height:50px;font-size:10px}}@media (max-height: 1100px) and (min-height: 901px){#sec_01 .content_box{margin-top:200px;padding-top:80px}#sec_01 .content_box .header_main{font-size:60px}#sec_01 .slider_01{-webkit-transform:translateY(-60%);-ms-transform:translateY(-60%);transform:translateY(-60%);bottom:-60px}}@media (max-height: 900px) and (min-height: 761px){#sec_01 .content_box{margin-top:100px;padding-top:80px}#sec_01 .content_box .header_main{font-size:60px}}@media (max-height: 760px) and (min-height: 701px){#sec_01 .content_box{margin-top:150px;padding-top:60px}#sec_01 .content_box .header_main{font-size:44px;margin-bottom:20px;line-height:52px}#sec_01 .content_box .underheader{font-size:14px}#sec_01 .btn_block{margin-bottom:50px}#sec_01 .slider_01{left:50%;bottom:0}#menu_modal .menu_list{margin-top:200px}}@media (max-height: 700px){#menu_modal .menu_list{margin-top:60px}#sec_01 .content_box{margin-top:60px;padding-top:60px}#sec_01 .content_box .header_main{font-size:44px;margin-bottom:20px;line-height:52px}#sec_01 .btn_block{margin-bottom:50px}#sec_01 .slider_01{left:50%;bottom:0}}@media (min-width: 992px) and (max-width: 1200px){#portfolio_modal .container{padding:0 15px 50px}#portfolio_modal .content_block .header{font-size:30px}#portfolio_modal .content_block .items_row .item .title{display:block}#portfolio_modal .content_block .items_row .item .title:before{width:90%}}@media (min-width: 768px) and (max-width: 991px){#mobile_menu_trigger{display:block}#portfolio_modal .container{padding:0 15px 50px}#portfolio_modal .top{margin-bottom:70px}#portfolio_modal .content_block{padding-top:0}#portfolio_modal .content_block .header{font-size:28px}#portfolio_modal .content_block .items_row{margin-top:40px}#portfolio_modal .content_block .items_row .item{display:block;width:100%;max-width:100%}#portfolio_modal .content_block .items_row .item .title{margin-bottom:30px;display:inline-block}#portfolio_modal .content_block .items_row .item .title:before{width:120%}#portfolio_modal .content_block .items_row .item + .item{margin-top:40px}#portfolio_modal .photos{margin-left:-45px}#portfolio_modal .slick-prev,#portfolio_modal .slick-next{top:100px}#portfolio_modal .slide_number{top:94px}.main_wrap{padding:0}#right_col,#left_col{display:none}#menu_modal{left:0}#menu_modal #close_menu_modal{right:-45px}#menu_modal .portfolio_trigger{right:-40px}#menu_modal .top{display:none}#menu_modal .menu_list{padding-left:120px;margin-top:190px}#sec_01{height:auto;padding-bottom:120px}#sec_01:before{display:none}#sec_01 .content_box{margin-top:85px}#sec_01 .content_box .underheader{width:43%;font-size:15px}#sec_01 .content_box .header_main{font-size:50px}#sec_01 .pattern_box{right:0}#sec_01 .slider_01{right:40px;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}#sec_01 .sec_01-slider_controll{display:none}#sec_01 .btn_block{margin-bottom:0}}@media (max-width: 767px){#portfolio_modal .slide_number{display:none}#portfolio_modal .container{padding:0 15px;min-width:540px}#portfolio_modal .top{margin-bottom:40px}#portfolio_modal .content_block{padding-top:0}#portfolio_modal .content_block .description_text{width:70%}#portfolio_modal .content_block .header{display:block;margin-bottom:15px}#portfolio_modal .content_block .items_row{margin-top:40px}#portfolio_modal .content_block .items_row .item{display:block;width:100%;max-width:100%}#portfolio_modal .content_block .items_row .item .title{margin-bottom:30px;display:inline-block}#portfolio_modal .content_block .items_row .item .title:before{width:120%}#portfolio_modal .content_block .items_row .item + .item{margin-top:40px}#portfolio_modal .photos{height:92px;max-width:320px;width:100%;text-align:center;overflow:visible;margin:30px 50px 30px 30px}#portfolio_modal .photos li{margin-top:0!important}#portfolio_modal .photos li a:before{display:none}#portfolio_modal .photos .slick-prev{left:-30px;top:50%;margin-top:-5px}#portfolio_modal .photos .slick-next{left:initial;right:-30px;top:50%;margin-top:-5px}#portfolio_modal .desctop{display:none}#portfolio_modal .mobile{display:block}[class*='col-']{width:100%}.main_wrap{padding:0}#right_col,#left_col{display:none}#mobile_menu_trigger{display:block}#menu_modal{left:0}#menu_modal #close_menu_modal{right:-55px}#menu_modal .portfolio_trigger{right:-50px}#menu_modal .top{display:none}#menu_modal .menu_list{padding-left:0;margin-top:60px}#sec_01{height:auto;padding-bottom:60px}#sec_01:before{display:none}#sec_01 .content_box{padding-top:90px;margin-top:-3px}#sec_01 .content_box .header_main{font-size:50px;margin-bottom:40px}#sec_01 .pattern_box{right:0}#sec_01 .slider_01{right:0;left:0;top:51px;-webkit-transform:translateY(0%);-ms-transform:translateY(0%);transform:translateY(0%);bottom:initial;overflow:hidden;max-height:400px}#sec_01 .slider_01:before{content:"";position:absolute;width:200%;height:200%;z-index:10;top:0;left:0;bottom:0;right:0;background:rgba(0,0,0,0.6)}#sec_01 .sec_01-slider_controll{display:none}#sec_01 .btn_block{margin-top:160px;margin-bottom:0}#sec_01 .btn_block .btn_white{padding:3px 10px 0}}@media (max-width: 540px){#mobile_menu_trigger.scrolled{-webkit-transform:translateY(0px);-ms-transform:translateY(0px);transform:translateY(0px)}#mobile_menu_trigger{top:0}#portfolio_modal .slide_number{display:none}#portfolio_modal .container{padding:0 15px;min-width:300px}#portfolio_modal .top{margin-bottom:30px}#portfolio_modal .content_block .description_text{width:100%}#portfolio_modal .content_block .items_row .item + .item{margin-top:30px}#portfolio_modal .photos{width:320px}#portfolio_modal .photos img{width:152px}.title{font-size:16px;line-height:21px;letter-spacing:0}.header{font-size:30px;line-height:36px;letter-spacing:.03em}.header_main{font-size:60px;line-height:39px;letter-spacing:.015em}#sec_01{padding-bottom:80px;padding-top:0}#sec_01 .top{display:none}#sec_01 .content_box{margin-top:0;padding-top:0}#sec_01 .content_box .header_main{font-size:37px;line-height:42px;margin:0 -15px;padding:80px 15px 60px;background-image:url(img/sec_01-mob.png);background-position:top -40px center;background-repeat:no-repeat;margin-bottom:40px}#sec_01 .content_box .underheader{font-size:14px}#sec_01 .content_box:before{top:60px;width:30px}#sec_01 .btn_block{margin-bottom:0;margin-top:40px}#sec_01 .slider_01{display:none}#sec_01 .btn_wrap{vertical-align:top}#sec_01 .btn_wrap + .btn_wrap{margin-top:30px;margin-left:0}#sec_01 .btn_white,#sec_01 .btn{width:100%;max-width:100%;text-align:center;vertical-align:top}#sec_01 .btn_white{width:240px}#sec_01 .btn_block{text-align:center}#sec_01 .btn_wrap{display:block!important}}@media (max-width: 430px){#portfolio_modal .photos{max-width:155px}}.anim_cont{opacity:0}.animation .mask{width:160%;position:absolute;z-index:3;left:0;height:0;background:#222;-webkit-animation:animationFrames 1s;animation:animationFrames 1s;-webkit-animation-iteration-count:1;animation-iteration-count:1;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-transform-origin:50% 50%;-ms-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-transition:all cubic-bezier(0.68,-0.55,0.265,1.55);transition:all cubic-bezier(0.68,-0.55,0.265,1.55)}.animation .anim_cont{opacity:0;-webkit-animation:animationCont 1s;animation:animationCont 1s;-webkit-animation-iteration-count:1;animation-iteration-count:1;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-transition:all cubic-bezier(0.68,-0.55,0.265,1.55);transition:all cubic-bezier(0.68,-0.55,0.265,1.55)}.animation{overflow:hidden;position:relative}.animation_block{overflow:hidden;position:relative}.content_animation{opacity:0}.fade-in-left{-webkit-animation:fade-in-left .7s cubic-bezier(0.86,0,0.07,1) forwards;animation:fade-in-left .7s cubic-bezier(0.86,0,0.07,1) forwards}.fade-in-right{-webkit-animation:fade-in-right .7s cubic-bezier(0.755,0.05,0.855,0.06) forwards;animation:fade-in-right .7s cubic-bezier(0.755,0.05,0.855,0.06) forwards}.fade-in-bottom{-webkit-animation:fade-in-bottom .7s cubic-bezier(0.755,0.05,0.855,0.06) forwards;animation:fade-in-bottom .7s cubic-bezier(0.755,0.05,0.855,0.06) forwards}.fade-in-top{-webkit-animation:fade-in-top .7s cubic-bezier(0.755,0.05,0.855,0.06) forwards;animation:fade-in-top .7s cubic-bezier(0.755,0.05,0.855,0.06) forwards}.puff-in-hor{-webkit-animation:puff-in-hor .7s cubic-bezier(0.47,0,0.745,0.715) both;animation:puff-in-hor .7s cubic-bezier(0.47,0,0.745,0.715) both}@-webkit-keyframes puff-in-hor{0%{-webkit-transform:scaleX(2);transform:scaleX(2);-webkit-filter:blur(2px);filter:blur(2px);opacity:0}100%{-webkit-transform:scaleX(1);transform:scaleX(1);-webkit-filter:blur(0);filter:blur(0);opacity:1}}@keyframes puff-in-hor{0%{-webkit-transform:scaleX(2);transform:scaleX(2);-webkit-filter:blur(2px);filter:blur(2px);opacity:0}100%{-webkit-transform:scaleX(1);transform:scaleX(1);-webkit-filter:blur(0);filter:blur(0);opacity:1}}@-webkit-keyframes fade-in-left{0%{-webkit-transform:translateX(-120px);transform:translateX(-120px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@keyframes fade-in-left{0%{-webkit-transform:translateX(-120px);transform:translateX(-120px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@-webkit-keyframes fade-in-right{0%{-webkit-transform:translateX(120px);transform:translateX(120px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@keyframes fade-in-right{0%{-webkit-transform:translateX(120px);transform:translateX(120px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@-webkit-keyframes fade-in-bottom{0%{-webkit-transform:translateY(100px);transform:translateY(100px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes fade-in-bottom{0%{-webkit-transform:translateY(100px);transform:translateY(100px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@-webkit-keyframes fade-in-top{0%{-webkit-transform:translateY(-150px);transform:translateY(-150px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes fade-in-top{0%{-webkit-transform:translateY(-150px);transform:translateY(-150px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@-webkit-keyframes animationFrames{0%{-webkit-transform:translate(60%,0);transform:translate(60%,0);height:0;opacity:1}40%{-webkit-transform:translate(60%,0);transform:translate(60%,0);height:100%;opacity:1}99%{-webkit-transform:translate(-100%,0);transform:translate(-100%,0);height:100%;opacity:1}100%{-webkit-transform:translate(-105%,0);transform:translate(-105%,0);height:100%;opacity:0}}@keyframes animationFrames{0%{-webkit-transform:translate(60%,0);transform:translate(60%,0);height:0;opacity:1}40%{-webkit-transform:translate(60%,0);transform:translate(60%,0);height:100%;opacity:1}99%{-webkit-transform:translate(-100%,0);transform:translate(-100%,0);height:100%;opacity:1}100%{-webkit-transform:translate(-105%,0);transform:translate(-105%,0);height:100%;opacity:0}}@-webkit-keyframes animationCont{0%{-webkit-transform:translate(20%,0);transform:translate(20%,0);opacity:0}50%{-webkit-transform:translate(20%,0);transform:translate(20%,0);opacity:0}100%{-webkit-transform:translate(0,0);transform:translate(0,0);opacity:1}}@keyframes animationCont{0%{-webkit-transform:translate(20%,0);transform:translate(20%,0);opacity:0}50%{-webkit-transform:translate(20%,0);transform:translate(20%,0);opacity:0}100%{-webkit-transform:translate(0,0);transform:translate(0,0);opacity:1}}</style>

    <!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
    <script>!function(a){"use strict";function b(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)}function c(b,c){return a.localStorage&&localStorage[b+"_content"]&&localStorage[b+"_file"]===c}function d(b,d){if(a.localStorage&&a.XMLHttpRequest)c(b,d)?f(localStorage[b+"_content"]):e(b,d);else{var h=g.createElement("link");h.href=d,h.id=b,h.rel="stylesheet",h.type="text/css",g.getElementsByTagName("head")[0].appendChild(h),g.cookie=b}}function e(a,b){var c=new XMLHttpRequest;c.open("GET",b,!0),c.onreadystatechange=function(){4===c.readyState&&200===c.status&&(f(c.responseText),localStorage[a+"_content"]=c.responseText,localStorage[a+"_file"]=b)},c.send()}function f(a){var b=g.createElement("style");b.setAttribute("type","text/css"),g.getElementsByTagName("head")[0].appendChild(b),b.styleSheet?b.styleSheet.cssText=a:b.innerHTML=a}var g=a.document;a.loadCSS=function(a,b,c){var d,e=g.createElement("link");if(b)d=b;else{var f;f=g.querySelectorAll?g.querySelectorAll("style,link[rel=stylesheet],script"):(g.body||g.getElementsByTagName("head")[0]).childNodes,d=f[f.length-1]}var h=g.styleSheets;e.rel="stylesheet",e.href=a,e.media="only x",d.parentNode.insertBefore(e,b?d:d.nextSibling);var i=function(a){for(var b=e.href,c=h.length;c--;)if(h[c].href===b)return a();setTimeout(function(){i(a)})};return e.onloadcssdefined=i,i(function(){e.media=c||"all"}),e},a.loadLocalStorageCSS=function(e,f){c(e,f)||g.cookie.indexOf(e)>-1?d(e,f):b(a,"load",function(){d(e,f)})}}(this);</script>

<!-- <link rel="stylesheet" href="css/fonts.css"> -->
   <!-- <link rel="stylesheet" href="css/header.css"> -->
    <!-- Load CSS Start -->
    <script>loadCSS( "css/main.css?ver=1.0.0", false, "all" );</script>
    <!-- Load CSS End -->

    <!-- Load CSS Compiled without JS -->
    <noscript>
        <link rel="stylesheet" href="css/main.css">
    </noscript>

</head>
<body data-img="img/land.png">
<!-- <div id="page-preloader"><div class="contpre"><div class="round1"></div></div></div> -->
<div class="bar-long"></div>
<div id="scrollup"><!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.054 286.054"><path d="M143.027 0C64.04 0 0 64.04 0 143.027c0 78.996 64.04 143.027 143.027 143.027s143.027-64.03 143.027-143.027C286.054 64.05 222.014 0 143.027 0zm0 259.236c-64.183 0-116.21-52.026-116.21-116.21s52.027-116.2 116.21-116.2 116.21 52.018 116.21 116.2-52.027 116.21-116.21 116.21zm51.677-125.148h-24.86V89.392c0-4.934-3.996-8.94-8.94-8.94H125.15c-4.934 0-8.94 4.006-8.94 8.94v44.696H91.342c-9.698 0-13.667 6.463-8.822 14.338l51.686 51.096c4.845 7.884 12.783 7.884 17.637 0l51.678-51.096c4.863-7.875.894-14.338-8.814-14.338z"/></svg> -->
    <img src="img/top_btn.png" alt="">
</div>


<div class="main_wrap">
    <div id="mobile_menu_trigger">
        <div class="wrapper">
          <svg class="svg" id="menu" viewBox="0 0 800 600">
            <path class="path" d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
            <path class="path" d="M300,320 L540,320" id="middle"></path>
            <path class="path" d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
          </svg>
        </div>
    </div>
    <div id="left_col">
        <div id="menu_trigger">меню</div>

        <ul class="social">
            <li><a target="_blank" href="https://www.facebook.com/yaburodesign/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UCqVH_9JKWjRenF_TVu3_ZsA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="https://www.instagram.com/ya_buro/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <div id="right_col">
        <a class="md-trigger call_back_trigger" data-modal="modal_callback">заказать звонок</a>
        <div class="portfolio_trigger">портфолио</div>
    </div>
    <div id="menu_modal">
        <div id="close_menu_modal"><i class="fa fa-close"></i> вернуться</div>
        <div class="portfolio_trigger">портфолио</div>
        <div class="container">
            <div class="row top">
                <div class="col-12 clearfix">
                    <img src="img/logo.png" alt="" class="logo">
                    <div class="phone_box">
                        <a href="tel:+380979374715" class="tel">+380 (97) 937 47 15</a>
                        <a class="md-trigger viber" data-modal="modal_callback_viber"><svg height="16" viewBox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg"><rect height="512" rx="64" ry="64" width="512" fill="#000"/><g fill="#fff" fill-rule="evenodd"><path d="M421.915 345.457c-12.198-9.82-25.233-18.634-38.064-27.638-25.59-17.973-48.996-19.37-68.091 9.546-10.723 16.234-25.734 16.945-41.43 9.823-43.27-19.62-76.683-49.85-96.255-93.83-8.658-19.458-8.544-36.903 11.713-50.665 10.725-7.278 21.53-15.89 20.666-31.793-1.128-20.736-51.475-90.033-71.357-97.347-8.227-3.027-16.42-2.83-24.79-.017-46.62 15.678-65.93 54.019-47.437 99.417 55.17 135.442 152.26 229.732 285.91 287.282 7.62 3.277 16.085 4.587 20.371 5.763 30.428.306 66.073-29.01 76.367-58.104 9.911-27.99-11.035-39.1-27.603-52.437zM272.06 77.439c97.707 15.025 142.768 61.485 155.21 159.895 1.154 9.09-2.232 22.768 10.737 23.02 13.554.259 10.288-13.217 10.402-22.316 1.146-92.684-79.669-178.606-173.524-181.774-7.081 1.019-21.733-4.883-22.647 10.988-.609 10.7 11.727 8.942 19.822 10.187z"/><path d="M291.172 104.422c-9.398-1.132-21.805-5.56-24.001 7.48-2.293 13.687 11.535 12.297 20.42 14.286 60.346 13.487 81.358 35.451 91.294 95.311 1.451 8.727-1.432 22.31 13.399 20.059 10.991-1.674 7.021-13.317 7.94-20.118.487-57.47-48.758-109.778-109.052-117.018z"/><path d="M296.713 151.416c-6.273.155-12.43.834-14.736 7.538-3.463 10.02 3.822 12.409 11.237 13.6 24.755 3.974 37.783 18.571 40.256 43.257.668 6.7 4.92 12.129 11.392 11.365 8.969-1.07 9.78-9.053 9.505-16.634.443-27.734-30.904-59.79-57.654-59.126z"/></g></svg></a>
                        <a class="md-trigger telegram" data-modal="modal_callback_telegr"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 189.5 189.5" width="16" height="16"><path d="M152.5 179.5c-1.5 0-2.9-0.4-4.2-1.3l-47.6-32.3 -25.6 18.4c-2 1.4-4.6 1.8-6.9 1 -2.3-0.8-4.1-2.8-4.7-5.1l-12.8-48.6L4.8 93.9c-2.9-1.1-4.8-3.9-4.8-7 0-3.1 1.9-5.9 4.7-7l174.3-69.4c0.8-0.3 1.6-0.5 2.5-0.6 0.3 0 0.6 0 0.9 0 1.7 0.1 3.5 0.8 4.8 2.1 0.1 0.1 0.3 0.3 0.4 0.4 1.1 1.3 1.7 2.8 1.8 4.4 0 0.4 0 0.8 0 1.2 0 0.3-0.1 0.6-0.1 0.9L159.9 173.4c-0.5 2.5-2.2 4.6-4.5 5.5C154.5 179.3 153.5 179.5 152.5 179.5zM104.9 130.6l42.4 28.8L170.2 39.2l-82.7 79.6 17.2 11.6C104.7 130.5 104.8 130.5 104.9 130.6zM69.5 124.2l5.7 21.5 12.2-8.8 -16-10.9C70.7 125.5 70 124.9 69.5 124.2zM28.1 86.8l31.5 12c2.3 0.9 4 2.8 4.6 5.1l4 15.1c0.2-1.7 1-3.4 2.3-4.6L149.2 38.6 28.1 86.8z"/></svg></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="menu_list">
                         <li><a href="#sec_01">Вступление</a></li>
                         <li><a href="#sec_02">О эмоциях</a></li>
                         <li><a href="#sec_04">Лучшие офисы мира</a></li>
                         <li><a href="#sec_05">Ваш стиль = Ваш статус</a></li>
                         <li><a href="#sec_06">Люди дела</a></li>
                         <li><a href="#sec_07">Больше чем ремонт</a></li>
                         <li><a href="#sec_09">Гарантии</a></li>
                         <li><a href="#sec_10">Этапы работы</a></li>
                         <li><a href="#sec_11">Офис который восхищает</a></li>
                     </ul>

                     <a href="tel:+380979374715" class="tel">+380 (97) 937 47 15</a>

                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/yaburodesign/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                         <li><a target="_blank" href="https://www.youtube.com/channel/UCqVH_9JKWjRenF_TVu3_ZsA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                         <li><a target="_blank" href="https://www.instagram.com/ya_buro/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio_modal">
        <div id="close_portfolio_modal"><i class="fa fa-close"></i> вернуться</div>
        <div class="container">
            <div class="row top">
                <div class="col-12 clearfix">
                    <img src="img/logo.png" alt="" class="logo">
                </div>
            </div>
        </div>
        <div class="container portfolio_slider dark">
            <div class="slide row case-1">
                <div class="slide_number">1</div>
                <div class="col-10">
                    <div class="content_block">
                        <p class="header text--header">Razorfish</p>
                        <p class="text description_text">Digital агентство полного цикла с филиалами в Америке и Европе. Более 300 клиентов, среди которых такие бренды, как Audi, McDonalds, Mercedes-Benz.</p>
                        <ul class="photos mobile">
                            <li><a href="img/case-1/big/img-1.png" data-lightbox="set-case-1"><img src="img/case-1/img-1.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-1/big/img-2.png" data-lightbox="set-case-1"><img src="img/case-1/img-2.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-1/big/img-3.png" data-lightbox="set-case-1"><img src="img/case-1/img-3.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-1/big/img-4.png" data-lightbox="set-case-1"><img src="img/case-1/img-4.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-1/big/img-5.png" data-lightbox="set-case-1"><img src="img/case-1/img-5.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-1/big/img-6.png" data-lightbox="set-case-1"><img src="img/case-1/img-6.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-1/big/img-7.png" data-lightbox="set-case-1"><img src="img/case-1/img-7.png" alt="Portfolio YaBuro"></a></li>
                        </ul>
                        <div class="items_row">
                            <div class="item">
                                <p class="title text--title">Особенности</p>
                                <p class="text">Задача — разработать дизайн, опираясь на уже существующий брендинг компании. Кроме того, нужно было создать концепцию, которая отличалась бы от офисов Razorfish в других городах.</p>
                            </div>
                            <div class="item">
                                <p class="title text--title">Идея</p>
                                <p class="text">Сочетание эксклюзивности с чувством смутного припоминания (узнаваемости), акцент на инновации. Современное пространство для успешных людей.</p>
                            </div>
                            <div class="item">
                                <p class="title text--title">Реализация</p>
                                <p class="text">Трендовые цвета. Открытые помещения. Современные гаджеты, борды, стеклянные перегородки, на которых также можно делать заметки. Главное — не упустить идею.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <ul class="photos desctop">
                        <li><a href="img/case-1/big/img-1.png" data-lightbox="set-case-1"><img src="img/case-1/img-1.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-1/big/img-2.png" data-lightbox="set-case-1"><img src="img/case-1/img-2.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-1/big/img-3.png" data-lightbox="set-case-1"><img src="img/case-1/img-3.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-1/big/img-4.png" data-lightbox="set-case-1"><img src="img/case-1/img-4.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-1/big/img-5.png" data-lightbox="set-case-1"><img src="img/case-1/img-5.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-1/big/img-6.png" data-lightbox="set-case-1"><img src="img/case-1/img-6.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-1/big/img-7.png" data-lightbox="set-case-1"><img src="img/case-1/img-7.png" alt="Portfolio YaBuro"></a></li>
                    </ul>
                </div>
            </div>

            <div class="slide row case-2">
                <div class="slide_number">2</div>
                <div class="col-10">
                    <div class="content_block">
                        <p class="header text--header">Synevo</p>
                        <p class="text description_text">Инновационный формат клиник в Украине. Лидер медицинских лабораторий в Европе с представительствами в Германии, Польше, Румынии, Турции и других странах мира.</p>
                        <ul class="photos mobile">
                            <li><a href="img/case-2/big/img-1.png" data-lightbox="set-case-1"><img src="img/case-2/img-1.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-2/big/img-2.png" data-lightbox="set-case-1"><img src="img/case-2/img-2.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-2/big/img-3.png" data-lightbox="set-case-1"><img src="img/case-2/img-3.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-2/big/img-4.png" data-lightbox="set-case-1"><img src="img/case-2/img-4.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-2/big/img-5.png" data-lightbox="set-case-1"><img src="img/case-2/img-5.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-2/big/img-6.png" data-lightbox="set-case-1"><img src="img/case-2/img-6.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-2/big/img-7.png" data-lightbox="set-case-1"><img src="img/case-2/img-7.png" alt="Portfolio YaBuro"></a></li>
                        </ul>
                        <div class="items_row">
                            <div class="item">
                                <p class="title text--title">Особенности</p>
                                <p class="text">Международная компания со 100% отстройкой от медицинских образов. Соответствие брендингу и упоминание слоганов.</p>
                            </div>
                            <div class="item">
                                <p class="title text--title">Идея</p>
                                <p class="text">Эко-ориентированный дизайн, позитивное восприятие бренда (без нервозности и чувства страха у пациентов).</p>
                            </div>
                            <div class="item">
                                <p class="title text--title">Реализация</p>
                                <p class="text">Яркие цвета, живые фотографии и надписи, акцент на положительных эмоциях. Сопровождение каждого пациента с первого шага в здании: контуры людей на стенах идут рядом с гостем, поддерживая его. Особенно тщательная проработка детского отделения.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <ul class="photos desctop">
                        <li><a href="img/case-2/big/img-1.png" data-lightbox="set-case-1"><img src="img/case-2/img-1.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-2/big/img-2.png" data-lightbox="set-case-1"><img src="img/case-2/img-2.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-2/big/img-3.png" data-lightbox="set-case-1"><img src="img/case-2/img-3.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-2/big/img-4.png" data-lightbox="set-case-1"><img src="img/case-2/img-4.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-2/big/img-5.png" data-lightbox="set-case-1"><img src="img/case-2/img-5.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-2/big/img-6.png" data-lightbox="set-case-1"><img src="img/case-2/img-6.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-2/big/img-7.png" data-lightbox="set-case-1"><img src="img/case-2/img-7.png" alt="Portfolio YaBuro"></a></li>
                    </ul>
                </div>
            </div>

            <div class="slide row case-3">
                <div class="slide_number">3</div>
                <div class="col-10">
                    <div class="content_block">
                        <p class="header text--header">Automatization commerce</p>
                        <p class="text description_text">Яркая, динамичная и молодая команда с высокой планкой.</p>
                        <ul class="photos mobile">
                            <li><a href="img/case-3/big/img-1.png" data-lightbox="set-case-1"><img src="img/case-3/img-1.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-3/big/img-2.png" data-lightbox="set-case-1"><img src="img/case-3/img-2.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-3/big/img-3.png" data-lightbox="set-case-1"><img src="img/case-3/img-3.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-3/big/img-4.png" data-lightbox="set-case-1"><img src="img/case-3/img-4.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-3/big/img-5.png" data-lightbox="set-case-1"><img src="img/case-3/img-5.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-3/big/img-6.png" data-lightbox="set-case-1"><img src="img/case-3/img-6.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-3/big/img-7.png" data-lightbox="set-case-1"><img src="img/case-3/img-7.png" alt="Portfolio YaBuro"></a></li>
                        </ul>
                        <div class="items_row">
                            <div class="item">
                                <p class="title text--title">Особенности</p>
                                <p class="text">Необходимо было трансформировать старый, плохо спланированный и ”убитый” офис в необычное “анти-офисное” помещение в условиях ограниченного бюджета.</p>
                            </div>
                            <div class="item">
                                <p class="title text--title">Идея</p>
                                <p class="text">Создать место, где возникало бы ощущение дома. Art-space с живой, молодой атмосферой и пространством для творчества.</p>
                            </div>
                            <div class="item">
                                <p class="title text--title">Реализация</p>
                                <p class="text">Свободное пространство без деления на зоны для работы и отдыха. Панорамные окна. Светлые тона. Зона для йоги, X-Box, американская кухня “переговорного” типа. Каждый сотрудник может выбрать любую точку офиса для создания чего-то нового. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <ul class="photos desctop">
                        <li><a href="img/case-3/big/img-1.png" data-lightbox="set-case-1"><img src="img/case-3/img-1.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-3/big/img-2.png" data-lightbox="set-case-1"><img src="img/case-3/img-2.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-3/big/img-3.png" data-lightbox="set-case-1"><img src="img/case-3/img-3.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-3/big/img-4.png" data-lightbox="set-case-1"><img src="img/case-3/img-4.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-3/big/img-5.png" data-lightbox="set-case-1"><img src="img/case-3/img-5.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-3/big/img-6.png" data-lightbox="set-case-1"><img src="img/case-3/img-6.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-3/big/img-7.png" data-lightbox="set-case-1"><img src="img/case-3/img-7.png" alt="Portfolio YaBuro"></a></li>
                    </ul>
                </div>
            </div>

            <div class="slide row case-4">
                <div class="slide_number">4</div>
                <div class="col-10">
                    <div class="content_block">
                        <p class="header text--header">Safir Law&Finance</p>
                        <p class="text description_text">Лидер юридических компаний в Украине. На рынке с 2009 года, более 500 клиентов в стране. </p>
                        <ul class="photos mobile">
                            <li><a href="img/case-4/big/img-1.png" data-lightbox="set-case-1"><img src="img/case-4/img-1.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-4/big/img-2.png" data-lightbox="set-case-1"><img src="img/case-4/img-2.png" alt="Portfolio YaBuro"></a></li>
                            <li><a href="img/case-4/big/img-3.png" data-lightbox="set-case-1"><img src="img/case-4/img-3.png" alt="Portfolio YaBuro"></a></li>
                        </ul>
                        <div class="items_row">
                            <div class="item">
                                <p class="title text--title">Особенности</p>
                                <p class="text">Компания сменила позиционирование и переработала механизм работы с клиентами и внутри команды. Интерьер не отвечал новым ценностям и нуждался в существенных изменениях.</p>
                            </div>
                            <div class="item">
                                <p class="title text--title">Идея</p>
                                <p class="text">Работа с доверием и сравнение с профессиональным спортом. </p>
                            </div>
                            <div class="item">
                                <p class="title text--title">Реализация</p>
                                <p class="text">Спокойная цветовая гамма, натуральные текстуры. Разумное зонирование. Правильная проработка освещения в помещениях, стимулирующая активность бизнес-процессов.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <ul class="photos desctop">
                        <li><a href="img/case-4/big/img-1.png" data-lightbox="set-case-1"><img src="img/case-4/img-1.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-4/big/img-2.png" data-lightbox="set-case-1"><img src="img/case-4/img-2.png" alt="Portfolio YaBuro"></a></li>
                        <li><a href="img/case-4/big/img-3.png" data-lightbox="set-case-1"><img src="img/case-4/img-3.png" alt="Portfolio YaBuro"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="sec_01">
        <div class="pattern_box"></div>
        <div class="slider_01">
            <div class="slide_01">
                <div class="animation_block">
                    <div class="mask"></div>
                    <div class="anim_cont">
                        <img src="img/sec_01-slide-1.png" alt="Дизайн интерьера офиса">
                    </div>
                </div>
            </div>
<!--             <div class="slide_02">
                <div class="animation_block">
                    <div class="mask"></div>
                    <div class="anim_cont">
                        <img src="img/sec_01-slide-2.png" alt="Дизайн интерьера офиса">
                    </div>
                </div>
            </div> -->
            <div class="slide_03">
                <div class="animation_block">
                    <div class="mask"></div>
                    <div class="anim_cont">
                        <img src="img/sec_01-slide-3.png" alt="Дизайн интерьера офиса">
                    </div>
                </div>
            </div>
            <div class="slide_04">
                <div class="animation_block">
                    <div class="mask"></div>
                    <div class="anim_cont">
                        <img src="img/sec_01-slide-4.png" alt="Дизайн интерьера офиса">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row top">
                <div class="col-12 clearfix">
                    <img src="img/logo.png" alt="" class="logo">
                    <div class="phone_box">
                        <a href="tel:+380979374715" class="tel">+380 (97) 937 47 15</a>
                        <a class="md-trigger viber" data-modal="modal_callback_viber"><svg height="16" viewBox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg"><rect height="512" rx="64" ry="64" width="512" fill="#000"/><g fill="#fff" fill-rule="evenodd"><path d="M421.915 345.457c-12.198-9.82-25.233-18.634-38.064-27.638-25.59-17.973-48.996-19.37-68.091 9.546-10.723 16.234-25.734 16.945-41.43 9.823-43.27-19.62-76.683-49.85-96.255-93.83-8.658-19.458-8.544-36.903 11.713-50.665 10.725-7.278 21.53-15.89 20.666-31.793-1.128-20.736-51.475-90.033-71.357-97.347-8.227-3.027-16.42-2.83-24.79-.017-46.62 15.678-65.93 54.019-47.437 99.417 55.17 135.442 152.26 229.732 285.91 287.282 7.62 3.277 16.085 4.587 20.371 5.763 30.428.306 66.073-29.01 76.367-58.104 9.911-27.99-11.035-39.1-27.603-52.437zM272.06 77.439c97.707 15.025 142.768 61.485 155.21 159.895 1.154 9.09-2.232 22.768 10.737 23.02 13.554.259 10.288-13.217 10.402-22.316 1.146-92.684-79.669-178.606-173.524-181.774-7.081 1.019-21.733-4.883-22.647 10.988-.609 10.7 11.727 8.942 19.822 10.187z"/><path d="M291.172 104.422c-9.398-1.132-21.805-5.56-24.001 7.48-2.293 13.687 11.535 12.297 20.42 14.286 60.346 13.487 81.358 35.451 91.294 95.311 1.451 8.727-1.432 22.31 13.399 20.059 10.991-1.674 7.021-13.317 7.94-20.118.487-57.47-48.758-109.778-109.052-117.018z"/><path d="M296.713 151.416c-6.273.155-12.43.834-14.736 7.538-3.463 10.02 3.822 12.409 11.237 13.6 24.755 3.974 37.783 18.571 40.256 43.257.668 6.7 4.92 12.129 11.392 11.365 8.969-1.07 9.78-9.053 9.505-16.634.443-27.734-30.904-59.79-57.654-59.126z"/></g></svg></a>
                        <a class="md-trigger telegram" data-modal="modal_callback_telegr"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 189.5 189.5" width="16" height="16"><path d="M152.5 179.5c-1.5 0-2.9-0.4-4.2-1.3l-47.6-32.3 -25.6 18.4c-2 1.4-4.6 1.8-6.9 1 -2.3-0.8-4.1-2.8-4.7-5.1l-12.8-48.6L4.8 93.9c-2.9-1.1-4.8-3.9-4.8-7 0-3.1 1.9-5.9 4.7-7l174.3-69.4c0.8-0.3 1.6-0.5 2.5-0.6 0.3 0 0.6 0 0.9 0 1.7 0.1 3.5 0.8 4.8 2.1 0.1 0.1 0.3 0.3 0.4 0.4 1.1 1.3 1.7 2.8 1.8 4.4 0 0.4 0 0.8 0 1.2 0 0.3-0.1 0.6-0.1 0.9L159.9 173.4c-0.5 2.5-2.2 4.6-4.5 5.5C154.5 179.3 153.5 179.5 152.5 179.5zM104.9 130.6l42.4 28.8L170.2 39.2l-82.7 79.6 17.2 11.6C104.7 130.5 104.8 130.5 104.9 130.6zM69.5 124.2l5.7 21.5 12.2-8.8 -16-10.9C70.7 125.5 70 124.9 69.5 124.2zM28.1 86.8l31.5 12c2.3 0.9 4 2.8 4.6 5.1l4 15.1c0.2-1.7 1-3.4 2.3-4.6L149.2 38.6 28.1 86.8z"/></svg></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 main_col">
                    <div class="fade-in-left content_box content_animation">
                        <h1 class="text--header header_main">Интерьер <br> для бизнеса</h1>
                        <p class="text--light underheader">12 лет опыта в эмоциональном дизайне офисов</p>
                        <p class="text--light underheader">авторский надзор дизайнера и бизнес-психолога</p>
                        <div class="btn_block">
                            <div class="btn_wrap">
                                <a class="md-trigger btn_white flex" data-modal="modal_callback">Получить консультацию</a>
                            </div>
                            <div class="btn_wrap">
                                <a href="#sec_02" class="btn flex scroll"> Узнать больше</a>
                            </div>
                        </div>
                        <div class="content_animation sec_01-slider_controll">
                            <div class="slide">01</div>
                            <div class="slide">02</div>
                            <div class="slide">03</div>
<!--                             <div class="slide">04</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sec_02">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="header_block">
                        <div class="content_animation">
                            <p class="text--italic beforeheader"><span class="text--header text--yellow">[</span><span class="without">без</span><span class="text--header text--yellow">]</span></p>
                            <p class="text--header header">Эмоциональный</p>
                            <p class="text--header header_main text--yellow">дизайн</p>
                            <p class="sec_number text--italic">01</p>
                        </div>
                        <div class="mobile_slider_02-slider_controll dark">
                            <div class="slide">01</div>
                            <div class="slide">02</div>
                            <div class="slide">03</div>
                        </div>
                        <div class="mobile_slider_02">
                            <div class="item_01 item">
                                <div class="img_block slider_img-1">
                                    <div class="slide">
                                        <img src="img/sec_02-img-1-state-1.png" alt="" class="state_01">
                                    </div>
                                    <div class="slide">
                                        <img src="img/sec_02-img-1-state-2.png" alt="" class="state_02">
                                    </div>
                                    <div class="slide">
                                        <img src="img/sec_02-img-2-state-3.png" alt="" class="state_03">
                                    </div>
                                </div>
                                <p class="text--title title">Когда только оболочка…</p>
                                <p class="text"> Часто даже в своем офисе вы чувствуете себя неуютно, будто бы где-то в гостях. Сотрудники проводят на работе около <br> 40 часов в неделю, а это более 80 дней чистого времени в год. От оформления офиса зависит не только их комфорт, но и качество работы, продуктивность, результат. </p>
                            </div>

                            <div class="item_02 item">
                                <div class="img_block slider_img-2">
                                    <div class="slide">
                                        <img src="img/sec_02-img-1-state-3.png" alt="" class="state_03">
                                    </div>
                                    <div class="slide">
                                        <img src="img/sec_02-img-2-state-2.png" alt="" class="state_02">
                                    </div>
                                    <div class="slide">
                                        <img src="img/sec_02-img-2-state-1.png" alt="" class="state_01">
                                    </div>
                                </div>
                                <p class="text--title title">Окружение создает эмоции</p>
                                <p class="text">Нейромаркетологи давно доказали, что на наше настроение влияют цветовая гамма помещения, освещение, зонирование и более 25 других факторов, связанных с дизайном. Так одни и те же люди в разных помещениях могут вести себя инертно или, напротив, чувствовать бодрость и энергию.</p>
                            </div>

                            <div class="item_03 item">
                                <div class="img_block slider_img-3">
                                    <div class="slide">
                                        <img src="img/sec_02-img-3-state-2.png" alt="" class="state_02">
                                    </div>
                                    <div class="slide">
                                        <img src="img/sec_02-img-3-state-3.png" alt="" class="state_03">
                                    </div>
                                    <div class="slide">
                                        <img src="img/sec_02-img-3-state-1.png" alt="" class="state_01">
                                    </div>
                                </div>
                                <p class="text--title title">Компания которая без лица</p>
                                <p class="text">Можно ли понять, чем вы занимаетесь, заглянув к вам в гости на 5 минут? Первое впечатление о компании — это ее офис, ресепшен, переговорные. Просто возьмите остановитесь и задумайтесь, отражают ли они ценности, миссию и принципы вашего бренда? </p>
                            </div>
                        </div>

                        <div class="desctop item_01 item">
                            <div class="img_block slider_img-1">
                                <div class="slide">
                                    <img src="img/sec_02-img-1-state-1.png" alt="" class="state_01">
                                </div>
                                <div class="slide">
                                    <img src="img/sec_02-img-1-state-2.png" alt="" class="state_02">
                                </div>
                                <div class="slide">
                                    <img src="img/sec_02-img-2-state-3.png" alt="" class="state_03">
                                </div>
                            </div>
                            <p class="text--title title">Когда только оболочка…</p>
                            <p class="text"> Часто даже в своем офисе вы чувствуете себя неуютно, будто бы где-то в гостях. Сотрудники проводят на работе около <br> 40 часов в неделю, а это более 80 дней чистого времени в год. От оформления офиса зависит не только их комфорт, но и качество работы, продуктивность, результат. </p>
                        </div>
                    </div>
                </div>
                <div class="desctop col-4">
                    <div class="item_02 item">
                        <div class="img_block slider_img-2">
                            <div class="slide">
                                <img src="img/sec_02-img-1-state-3.png" alt="" class="state_03">
                            </div>
                            <div class="slide">
                                <img src="img/sec_02-img-2-state-2.png" alt="" class="state_02">
                            </div>
                            <div class="slide">
                                <img src="img/sec_02-img-2-state-1.png" alt="" class="state_01">
                            </div>
                        </div>
                        <p class="text--title title">Окружение создает эмоции</p>
                        <p class="text">Нейромаркетологи давно доказали, что на наше настроение влияют цветовая гамма помещения, освещение, зонирование и более 25 других факторов, связанных с дизайном. Так одни и те же люди в разных помещениях могут вести себя инертно или, напротив, чувствовать бодрость и энергию.</p>
                    </div>
                </div>
                <div class="desctop col-4">
                    <div class="item_03 item">
                        <div class="img_block slider_img-3">
                            <div class="slide">
                                <img src="img/sec_02-img-3-state-2.png" alt="" class="state_02">
                            </div>
                            <div class="slide">
                                <img src="img/sec_02-img-3-state-3.png" alt="" class="state_03">
                            </div>
                            <div class="slide">
                                <img src="img/sec_02-img-3-state-1.png" alt="" class="state_01">
                            </div>
                        </div>
                        <p class="text--title title">Компания которая без лица</p>
                        <p class="text">Можно ли понять, чем вы занимаетесь, заглянув к вам в гости на 5 минут? Первое впечатление о компании — это ее офис, ресепшен, переговорные. Просто возьмите остановитесь и задумайтесь, отражают ли они ценности, миссию и принципы вашего бренда? </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="sec_03">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="content_animation">
                        <p class="sec_number text--italic">02</p>
                        <p class="text--header header">В каком офисе <br> приятно находиться?</p>
                        <p class="text">Есть офис, порог которого сложно переступить. Он может быть красивым, аккуратным, со свежим ремонтом, современными переговорными комнатами…</p>
                        <p class="text">...Но заходя внутрь, испытываешь чувство неловкости: будто бы попал в пустой дом с идеально заправленной постелью, запыленной посудой и легким запахом лаванды в пустом платяном шкафу. </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="animation_block">
                        <div class="mask"></div>
                        <div class="anim_cont">
                            <img src="img/sec_03-img-1.png" alt="Интерьер офиса">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="sec_04">
        <div class="container">
            <div class="row">
                <div class="col-4 mobile">
                    <div class="content_block">
                        <p class="text--header header_main">Что</p>
                        <p class="text--header header">наполняет помещение жизнью?</p>
                        <div class="item">
                            <p class="text--title title">Индивидуальность хозяев</p>
                            <p class="text">Это работает в Google, Sony, Canon, Apple, Microsoft, Intel, Philips, Samsung, Amazon, IBM*</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="slider_04">
                        <div class="slide_01">
                            <div class="animation_block">
                                <div class="mask"></div>
                                <div class="anim_cont">
                                    <img src="img/sec_03-slide-1.png" alt="Интерьер лучших офисов мира">
                                </div>
                            </div>
                        </div>
                        <div class="slide_02">
                            <div class="animation_block">
                                <div class="mask"></div>
                                <div class="anim_cont">
                                    <img src="img/sec_03-slide-2.png" alt="Интерьер лучших офисов мира">
                                </div>
                            </div>
                        </div>
                        <div class="slide_03">
                            <div class="animation_block">
                                <div class="mask"></div>
                                <div class="anim_cont">
                                    <img src="img/sec_03-slide-3.png" alt="Интерьер лучших офисов мира">
                                </div>
                            </div>
                        </div>
                        <div class="slide_04">
                            <div class="animation_block">
                                <div class="mask"></div>
                                <div class="anim_cont">
                                    <img src="img/sec_03-slide-4.png" alt="Интерьер лучших офисов мира">
                                </div>
                            </div>
                        </div>
                        <div class="slide_05">
                            <div class="animation_block">
                                <div class="mask"></div>
                                <div class="anim_cont">
                                    <img src="img/sec_03-slide-5.png" alt="Интерьер лучших офисов мира">
                                </div>
                            </div>
                        </div>
                        <div class="slide_06">
                            <div class="animation_block">
                                <div class="mask"></div>
                                <div class="anim_cont">
                                    <img src="img/sec_03-slide-6.png" alt="Интерьер лучших офисов мира">
                                </div>
                            </div>
                        </div>
                        <div class="slide_07">
                            <div class="animation_block">
                                <div class="mask"></div>
                                <div class="anim_cont">
                                    <img src="img/sec_03-slide-7.png" alt="Интерьер лучших офисов мира">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="star_text text--italic">*ТОП-10 лучших Hi-tech и IT-компаний мира [2017 год]</p>
                    <div class="sec_04-slider_controll dark">
                        <div class="slide">01</div>
                        <div class="slide">02</div>
                        <div class="slide">03</div>
                        <div class="slide">04</div>
                        <div class="slide">05</div>
                        <div class="slide">06</div>
                        <div class="slide">07</div>
                    </div>
                </div>
                <div class="col-4 desctop">
                    <div class="content_block content_animation">
                        <p class="text--header header_main">Что</p>
                        <p class="text--header header">наполняет помещение жизнью?</p>
                        <div class="item">
                            <p class="text--title title">Индивидуальность хозяев</p>
                            <p class="text">Это работает в Google, Sony, Canon, Apple, Microsoft, Intel, Philips, Samsung, Amazon, IBM*</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sec_05">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="content_animation">
                        <p class="sec_number text--italic">03</p>
                        <p class="text--header header">Ваш стиль <br> Ваш статус </p>
                        <img class="mobile" src="img/sec_05-img-mobile.png" alt="YaBuro">
                        <p class="text--italic afterheader">Получите консультацию по созданию эмоционального образа Вашего бренда</p>
                        <a class="md-trigger btn flex" data-modal="modal_callback">Получить консультацию</a>
                    </div>
                </div>
                <div class="col-5">
                    <div class="item_01 item">
                        <p class="text--title title">индивидуальный образ</p>
                        <p class="text">В основе бренда лежат формы, цвета, фактуры, запахи. Их сочетания вызывают эмоции и создают характер компании.</p>
                    </div>
                    <div class="item_02 item">
                        <p class="text--title title">вклад в развитие компании</p>
                        <p class="text">Бизнес должен зарабатывать, а не тратить. Эмоциональный дизайн — это разумная инвестиция, она поможет вам “выстрелить” и оставить конкурентов далеко позади.</p>
                    </div>
                    <div class="item_03 item">
                        <p class="text--title title">отношение к бренду</p>
                        <p class="text">Мы профессиональные переводчики вашего бренда в дизайн-проект. Мы ваша личная команда, которая создает бизнес “с лицом”.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="sec_06">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <p class="sec_number text--italic">04</p>
                    <p class="text--header header">Люди</p>
                    <p class="text--header header_main">дела</p>
                    <p class="text afterheader">Консультанты по психологии, маркетингу, фен-шуй</p>

                    <div class="numbers_block">
                        <div class="item">
                            <p class="1_animate_number text--header number"></p>
                            <p class="text">специалистов <br> в команде</p>
                        </div>
                        <div class="item">
                            <p class="2_animate_number text--header number"></p>
                            <p class="text">кв. м. эмоционально наполненных интерьеров</p>
                        </div><br />
                        <div class="item">
                            <p class="3_animate_number text--header number"></p>
                            <p class="text">клиентов из <br> 14 стран мира</p>
                        </div>
                        <div class="item">
                            <p class="4_animate_number text--header number"></p>
                            <p class="text">авторский надзор до реализации проекта</p>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="slider_wrapper">
                        <div class="slider_06">
                            <div class="slide_01">
                                <div class="animation_block">
                                    <div class="mask"></div>
                                    <div class="anim_cont">
                                        <img src="img/sec_05-slide-1.png" alt="Команда YaBuro">
                                    </div>
                                </div>
                            </div>
                            <div class="slide_02">
                                <div class="animation_block">
                                    <div class="mask"></div>
                                    <div class="anim_cont">
                                        <img src="img/sec_05-slide-2.png" alt="Команда YaBuro">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block_years">
                        <p class="text--italic year">12</p>
                        <p class="text--title title verical_text">лет на рынке</p>
                    </div>
                    <div class="sec_06-slider_controll">
                        <div class="slide">01</div>
                        <div class="slide">02</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sec_07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content_animation content_animation_header">
                        <p class="sec_number text--italic">06</p>
                        <p class="text--header header">Больше <br> чем ремонт</p>
                        <div class="mobile_slider_07-slider_controll dark">
                            <div class="slide">01</div>
                            <div class="slide">02</div>
                            <div class="slide">03</div>
                            <div class="slide">04</div>
                            <div class="slide">05</div>
                            <div class="slide">06</div>
                        </div>
                    </div>
                    <div class="mobile_slider_07">

                        <div class="item">
                            <img src="img/sec_06-img-1.png" alt="Как работает YaBuro" class="item_img">
                            <div class="content_animation">
                                <p class="title text--title">Индивидуальная проработка бренда</p>
                                <p class="text">Создание образов, принципов, ценностей и отстройка пространства профессиональным бизнес-психологом.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/sec_06-img-2.png" alt="Как работает YaBuro" class="item_img">
                            <div class="content_animation">
                                <p class="title text--title">Составление moodboard</p>
                                <p class="text">Разработка скетча-концепции будущего проекта и эмоциональной карты.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/sec_06-img-3.png" alt="Как работает YaBuro" class="item_img">
                            <div class="content_animation">
                                <p class="title text--title">Полная визуализация интерьера</p>
                                <p class="text">Скетчинг и воплощение будущего интерьера: его цветов, фактур, меблировки, нюансов.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/sec_06-img-4.png" alt="Как работает YaBuro" class="item_img">
                            <div class="content_animation">
                                <p class="title text--title">Составление сметы</p>
                                <p class="text">Формирование бюджета, исходя из времени команды и поставленных эмоциональных задач.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/sec_06-img-5.png" alt="Как работает YaBuro" class="item_img">
                            <div class="content_animation">
                                <p class="title text--title">Авторский надзор</p>
                                <p class="text">Постоянное отслеживание ситуации специалистами и полная ответственность за сроки реализации проекта.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/sec_06-img-6.png" alt="Как работает YaBuro" class="item_img">
                            <div class="content_animation">
                                <p class="title text--title">Личный кабинет</p>
                                <p class="text">Личный кабинет, в котором вы можете отслеживать каждый этап работы команды YaBuro.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="wrap">
                <div class="mycol-4">
                    <div class="item">
                        <img src="img/sec_06-img-1.png" alt="Как работает YaBuro" class="item_img">
                        <div class="content_animation">
                            <p class="title text--title">Индивидуальная проработка бренда</p>
                            <p class="text">Создание образов, принципов, ценностей и отстройка пространства профессиональным бизнес-психологом.</p>
                        </div>
                    </div>
                </div>
                <div class="mycol-4">
                    <div class="item">
                        <img src="img/sec_06-img-2.png" alt="Как работает YaBuro" class="item_img">
                       <div class="content_animation">
                            <p class="title text--title">Составление moodboard</p>
                           <p class="text">Разработка скетча-концепции будущего проекта и эмоциональной карты.</p>
                       </div>
                    </div>
                </div>
                <div class="mycol-4">
                    <div class="item">
                        <img src="img/sec_06-img-3.png" alt="Как работает YaBuro" class="item_img">
                       <div class="content_animation">
                            <p class="title text--title">Полная визуализация интерьера</p>
                           <p class="text">Скетчинг и воплощение будущего интерьера: его цветов, фактур, меблировки, нюансов.</p>
                       </div>
                    </div>
                </div>
            <div class="mycol-4">
                <div class="item">
                    <img src="img/sec_06-img-4.png" alt="Как работает YaBuro" class="item_img">
                    <div class="content_animation">
                        <p class="title text--title">Составление сметы</p>
                        <p class="text">Формирование бюджета, исходя из времени команды и поставленных эмоциональных задач.</p>
                    </div>
                </div>
            </div>
            <div class="mycol-4">
                <div class="item">
                    <img src="img/sec_06-img-5.png" alt="Как работает YaBuro" class="item_img">
                    <div class="content_animation">
                        <p class="title text--title">Авторский надзор</p>
                        <p class="text">Постоянное отслеживание ситуации специалистами и полная ответственность за сроки реализации проекта.</p>
                    </div>
                </div>
            </div>
            <div class="mycol-4">
                <div class="item">
                    <img src="img/sec_06-img-6.png" alt="Как работает YaBuro" class="item_img">
                    <div class="content_animation">
                        <p class="title text--title">Личный кабинет</p>
                        <p class="text">Личный кабинет, в котором вы можете отслеживать каждый этап работы команды YaBuro.</p>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>


    <div id="sec_08">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="content_animation">
                        <p class="text--header header">Оставьте</p>
                        <p class="text--header header_main">заявку</p>
                        <p class="text--title title">и получите индивидуальную <br>консультацию от александра <br> Андрейка бесплатно</p>
                    </div>
                </div>
                <div class="col-7">
                    <form  method="POST" class="form-inline db-form" action="javascript:void(null);">

                        <!-- Hidden DB Fields -->

                        <input type="hidden" name="orderType" value="Zayavka">
                        <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                        <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                        <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                        <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                        <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                        <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                        <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                        <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                        <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                        <input type="hidden" name="city" value="">
                        <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                        <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                        <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                        <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                        <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">


                        <!-- END Hidden DB Fields -->

                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Yaburo">
                        <input type="hidden" name="admin_email" value="office@yaburo.com">
                        <input type="hidden" name="form_type" value="Заявка">
                        <!-- END Hidden Required Fields -->

                        <div class="input_box">
                            <span class="field">
                                <label for="name_08">Имя: <span class="required_star">*</span></label>
                                <input id="name_08" type="text" class="form-control" name="name" required=""  placeholder="Иван" />
                                <span class="bar"></span>
                                <span class="clear"></span>
                            </span>

                            <span class="field">
                                <label for="tel_08">Тел: <span class="required_star">*</span></label>
                                <input id="tel_08" placeholder="+38 (0__) ___-____" type="tel" class="form-control" name="custom_tel" required="">
                                <span class="bar"></span>
                                <span class="clear"></span>
                            </span>
                        </div>

                        <button type="submit" class="btn_white" name="send">Получить консультацию</button>

                        <div class="clear"></div>
                    </form>

                </div>
            </div>
        </div>
    </div>



    <div id="sec_09">
        <div class="container">
            <div class="row">
                <div class="content_animation col-3 anim-1">
                    <p class="header text--header">Возврат за <br> просрочку <br> ремонта</p>
                </div>
                <div class="content_animation col-4 anim-2">
                    <p class="text--italic number_perc">1%</p>
                    <p class="vertical_text text--title title">день</p>
                </div>
                <div class="content_animation col-5 anim-3">
                    <div class="item">
                        <p class="text--title title first_title">Если ваш проект не будет реализован в срок, то за каждый день просрочки мы будем платить вам 1% от его стоимости*</p>
                        <p class="text--italic star_text">*Eсли причина срыва сроков в компании YaBuro</p>
                    </div>
                </div>
            </div>
            <div class="row second_row">
                <div class="col-10 content_animation anim-4">
                    <p class="sec_number text--italic">05</p>
                    <p class="text--title title second_title">Проекты, которые вдохновляют...</p>
                </div>
                <div class="col-2">
                    <div class="sec_09-slider_controll dark anim-4">
                        <div class="slide">01</div>
                        <div class="slide">02</div>
                        <div class="slide">03</div>
                        <div class="slide">04</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider_09">
            <div class="slide_01 slide">
                <img src="img/sec_08-slide-1.png" alt="Портфолио YaBuro">
                <div class="overlay">
                    <p class="more_info"> Узнать больше</p>
                </div>
                <p style="padding-top: 40px" class="text_title header text--header">Razorfish</p>
            </div>
            <div class="slide_03 slide">
                <img src="img/sec_08-slide-3.png" alt="Портфолио YaBuro">
                <div class="overlay">
                    <p class="more_info"> Узнать больше</p>
                </div>
                <p style="padding-top: 40px" class="text_title header text--header">Synevo</p>
            </div>
            <div class="slide_02 slide">
                <img src="img/sec_08-slide-2.png" alt="Портфолио YaBuro">
                <div class="overlay">
                    <p class="more_info"> Узнать больше</p>
                </div>
                <p class="text_title header text--header">Automatization <br>commerce</p>
            </div>
            <div class="slide_04 slide">
                <img src="img/sec_08-slide-4.png" alt="Портфолио YaBuro">
                <div class="overlay">
                    <p class="more_info"> Узнать больше</p>
                </div>
                <p class="text_title header text--header">Safir <br> Law & Finance</p>
            </div>
        </div>
    </div>

    <div id="sec_10">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="content_animation">
                        <p class="sec_number text--italic">07</p>
                        <p class="text--header header">Всего несколько</p>
                        <p class="text--header header_main text--yellow">шагов</p>
                        <p class="text--title title">От 1-го эскиза и до результата</p>
                    </div>
                </div>
                <div class="col-7">
                    <div class="item anim-1">
                        <div class="svg"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="60" viewBox="7.8 892.5 140 140"><style>.a{fill:none;stroke-width:5;stroke:#000;}</style><rect x="44.9" y="908.7" width="57.2" height="106.8" class="a"/><path d="M118.1 960.1H77 118.1z" class="a"/><path d="M86.9 948.1l-12.8 14L86.9 948.1z" class="a"/><path d="M86.3 972.2l-12.2-13.4L86.3 972.2z" class="a"/><circle cx="73.5" cy="999.6" r="4.8" class="a"/></svg></div>
                        <p class="title text--title">Заявка и консультация</p>
                        <p class="text">После того, как вы оставили заявку, специалист связывается с вами, чтобы назначить удобное время для встречи или консультации.</p>
                    </div>
                    <div class="item anim-2">
                        <div class="svg"><svg xmlns="http://www.w3.org/2000/svg" width="68" height="60" viewBox="158.8 892.5 140 140"><style>.a{fill:none;stroke-width:5;stroke:#000;}</style><rect x="188.6" y="905.7" width="80.5" height="112.8" class="a"/><line x1="230.6" y1="996.2" x2="207.2" y2="996.2" class="a"/><line x1="250.5" y1="988.7" x2="207.2" y2="988.7" class="a"/><line x1="250.5" y1="969.9" x2="207.2" y2="969.9" class="a"/><line x1="250.5" y1="957.7" x2="207.2" y2="957.7" class="a"/><line x1="250.5" y1="947.2" x2="207.2" y2="947.2" class="a"/><line x1="240.2" y1="931.4" x2="217.4" y2="931.4" class="a"/></svg></div>
                        <p class="title text--title">Предложение</p>
                        <p class="text">Команда проводит аудит и составляет персональное коммерческое предложение на основе ваших же пожеланий. Вы получите бесплатный предварительный эскиз офиса, чтобы оценить качество работы YaBuro.</p>
                    </div>
                    <div class="item anim-3">
                        <div class="svg"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="306 892.5 140 140"><style>.a{fill:none;stroke-width:5;stroke:#000;}</style><rect x="316" y="916.1" width="119.9" height="95.7" class="a"/><rect x="359.2" y="927.2" width="27.4" height="19.5" class="a"/><rect x="395.3" y="927.2" width="27.4" height="19.5" class="a"/><rect x="359.2" y="953.3" width="27.4" height="19.5" class="a"/><line x1="348.9" y1="929.2" x2="331.2" y2="929.2" class="a"/><line x1="348.9" y1="936.9" x2="331.2" y2="936.9" class="a"/></svg></div>
                        <p class="title text--title">Концепция</p>
                        <p class="text">Команда составляет moodboard, психологическую и эмоциональную карту, отражающую миссию и принципы компании.</p>
                    </div>
                    <div class="item anim-4">
                        <div class="svg"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="453 892.5 140 140"><style>.a{fill:none;stroke-width:5;stroke:#000;}</style><line x1="575.6" y1="1013.8" x2="470.4" y2="1013.8" class="a"/><line x1="516" y1="914.5" x2="470.4" y2="914.5" class="a"/><line x1="575.1" y1="914.5" x2="532.2" y2="914.5" class="a"/><line x1="550.5" y1="951" x2="502.6" y2="951" class="a"/><line x1="472.3" y1="914.5" x2="472.3" y2="1015.7" class="a"/><line x1="573.6" y1="912.3" x2="573.6" y2="1015.7" class="a"/><line x1="512.9" y1="951" x2="512.9" y2="1015.7" class="a"/><line x1="484.9" y1="951" x2="471.3" y2="951" class="a"/></svg></div>
                        <p class="title text--title">Дизайн-проект</p>
                        <p class="text">Специалисты создают полный дизайн-проект с визуализацией цветовой гаммы, интерьера, материалов и фактур.</p>
                    </div>
                    <div class="item anim-5">
                        <div class="svg"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="603 892.5 140 140"><style>.a{fill:none;stroke-width:5;stroke:#000;}</style><line x1="725.2" y1="1011.8" x2="697.6" y2="984.3" class="a"/><path d="M697.6 984.3c-16.7 16.7-43.9 16.7-60.6 0 -16.7-16.7-16.7-43.9 0-60.6s43.9-16.7 60.6 0C714.3 940.4 714.3 967.5 697.6 984.3z" class="a"/></svg></div>
                        <p class="title text--title">Авторский надзор</p>
                        <p class="text">Мы лично сопровождаем каждый проект до его <br> полной реализации.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sec_11" class="content_animation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content_block">
                        <p class="sec_number text--italic">08</p>
                        <p class="header text--header">Ваш офис, <br> который восхищает</p>
                        <ul class="list_item">
                            <li>Созданный в рамках оговоренного бюджета.</li>
                            <li>Без раздувания сметы.</li>
                            <li>Ремонт, за которым не нужно следить 24/7.</li>
                            <li>С отчетами и текущим статусом в лич. кабинете.</li>
                            <li>Работа с нуля и до результата.</li>
                            <li>Никаких задержек по срокам.</li>
                            <li>И результат, который вдохновляет вас, команду <br> и ваших клиентов.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sec_12">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="content_animation">
                        <p class="text--header header">Задайте вопрос в</p>
                        <p class="text--header header_main">форме</p>
                        <p class="text--title title">и специалист ответит вам как <br> можно быстрее</p>
                    </div>
                </div>
                <div class="col-7">
                    <form  method="POST" class="form-inline db-form" action="javascript:void(null);">

                        <!-- Hidden DB Fields -->

                        <input type="hidden" name="orderType" value="Zayavka">
                        <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                        <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                        <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                        <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                        <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                        <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                        <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                        <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                        <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                        <input type="hidden" name="city" value="">
                        <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                        <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                        <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                        <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                        <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">


                        <!-- END Hidden DB Fields -->

                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Yaburo">
                        <input type="hidden" name="admin_email" value="office@yaburo.com">
                        <input type="hidden" name="form_type" value="Вопрос ">
                        <!-- END Hidden Required Fields -->

                        <div class="input_box">
                            <span class="field input_field">
                                <label for="name_12">Имя: <span class="required_star">*</span></label>
                                <input id="name_12" type="text" class="form-control" name="name" required=""  placeholder="Иван" />
                                <span class="bar"></span>
                                <span class="clear"></span>
                            </span>

                            <span class="field input_field">
                                <label for="mail_12">Mail: <span class="required_star">*</span></label>
                                <input id="mail_12" type="email" required="" placeholder="ivan@gmail.com" name="email" class="form-control">
                                <span class="bar"></span>
                                <span class="clear"></span>
                            </span>
                        </div>

                        <div class="field textarea_field">
                            <label for="question">Текст: <span class="required_star">*</span></label>
                            <textarea id="question" required="" name="question"></textarea>
                            <div class="clear"></div>
                        </div>

                        <button type="submit" class="btn_white" name="send">Получить консультацию</button>

                        <div class="clear"></div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="politics">
                        <a class="md-trigger" data-modal="modal_politics_one">Политика  конфиденциальности</a>
                        <a class="md-trigger" data-modal="modal_politics_two">Отказ от  ответственности</a>
                        <a class="md-trigger" data-modal="modal_politics_three">Согласие с  рассылкой</a>
                    </div>
                </div>
                <div class="col-2">
                    <a class="logo_rezart" target="_blank" href="http://rezart.agency/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 792"><path d="M216.8 247.3c150.2 0 147.2 0 156.1 0 50.4 0 100.2 42.1 100.4 102.3 0.1 56.2-43.8 91.1-72.4 98 0.9 0 38.4 66.8 38.4 66.8l172.2-291.2 179.5 305.3c5.4 9.9 8.8 15.6 11.3 22.7 5.3 15.3-8.8 25.6-18.7 25.7 -9.7 0.1-14.6-3.6-24.4-8.9l-108.1-62 -39.9-74.4 108.4 63L610.6 310.8c0 0-139.3 237.5-144 244.6 -8.1 12.1-13.4 21.6-28.4 21.6 -14.6 0-21.4-9.6-29-21.3 -1.7-3.4-89.8-148.9-89.8-148.9 32.1 0.1 28.9 0.1 54.8 0.1 21.1 0 54-18.6 54-55.7 0-22.2-17.1-56.4-57.9-56.4 -45.2 0-126.3 0-126.3 0L216.8 247.3z"/><path d="M217.1 351l47.7 83.4 -0.3 119.8c0 0 0.5 22.5-24.2 22.9 -0.3-0.3-23.7 1.8-23.7-22.2C216.7 530.8 217.1 351 217.1 351z"/><path d="M264.9 434.4l-0.1 119c0 0 0.4 23.3-24.3 23.7"/></svg></a>
                </div>
            </div>
        </div>
    </footer>

</div>

<div class="hidden">
    <div class="md-modal md-effect-12" id="modal_callback">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.md-modal .aaa{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="aaa"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="aaa"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="colored">Заказ обратного звонка</h2>
            </div>
            <div>
                <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
                    <!-- Hidden DB Fields -->

                    <input type="hidden" name="orderType" value="Zayavka">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="Yaburo">
                    <input type="hidden" name="admin_email" value="office@yaburo.com">
                    <input type="hidden" name="form_type" value="Обратный звонок">
                    <!-- END Hidden Required Fields -->


                    <span class="field input_field">
                        <label for="name_cb">Имя: <span class="required_star">*</span></label>
                        <input id="name_cb" type="text" class="form-control" name="name" required=""  placeholder="Иван" />
                        <span class="bar"></span>
                        <span class="clear"></span>
                    </span>

                    <span class="field">
                        <label for="tel_cb">Тел: <span class="required_star">*</span></label>
                        <input id="tel_cb" placeholder="+38 (0__) ___-____" type="tel" class="form-control" name="custom_tel" required="">
                        <span class="bar"></span>
                        <span class="clear"></span>
                    </span>

                   <!--  <span class="field input_field">
                        <label for="mail_12">Mail: <span class="required_star">*</span></label>
                        <input id="mail_12" type="email" required="" placeholder="ivan@gmail.com" name="email" class="form-control">
                        <span class="bar"></span>
                        <span class="clear"></span>
                    </span> -->


                    <button type="submit" class="btn_white" name="send" data-text="Перезвоните мне">Перезвоните мне</button>

                    <div class="clear"></div>


                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-12" id="modal_callback_telegr">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.md-modal .aaa{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="aaa"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="aaa"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="colored">Мы ответим вам в Telegram</h2>
            </div>
            <div>
                <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
                    <!-- Hidden DB Fields -->

                    <input type="hidden" name="orderType" value="Zayavka">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="Yaburo">
                    <input type="hidden" name="admin_email" value="office@yaburo.com">
                    <input type="hidden" name="form_type" value="Telegram вопрос ">
                    <!-- END Hidden Required Fields -->


                    <span class="field input_field">
                        <label for="name_t">Имя: <span class="required_star">*</span></label>
                        <input id="name_t" type="text" class="form-control" name="name" required=""  placeholder="Иван" />
                        <span class="bar"></span>
                        <span class="clear"></span>
                    </span>

                    <span class="field">
                        <label for="tel_t">Тел: <span class="required_star">*</span></label>
                        <input id="tel_t" placeholder="+38 (0__) ___-____" type="tel" class="form-control" name="custom_tel" required="">
                        <span class="bar"></span>
                        <span class="clear"></span>
                    </span>

                    <div class="field textarea_field">
                        <label for="question_t">Текст: <span class="required_star">*</span></label>
                        <textarea id="question_t" required="" name="question"></textarea>
                        <div class="clear"></div>
                    </div>

                   <!--  <span class="field input_field">
                        <label for="mail_12">Mail: <span class="required_star">*</span></label>
                        <input id="mail_12" type="email" required="" placeholder="ivan@gmail.com" name="email" class="form-control">
                        <span class="bar"></span>
                        <span class="clear"></span>
                    </span> -->


                    <button type="submit" class="btn_white" name="send" data-text="Перезвоните мне">Задать вопрос</button>

                    <div class="clear"></div>


                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-12" id="modal_callback_viber">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.md-modal .aaa{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="aaa"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="aaa"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="colored">Мы ответим вам в Viber</h2>
            </div>
            <div>
                <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
                    <!-- Hidden DB Fields -->

                    <input type="hidden" name="orderType" value="Zayavka">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="Yaburo">
                    <input type="hidden" name="admin_email" value="office@yaburo.com">
                    <input type="hidden" name="form_type" value="Viber  вопрос">
                    <!-- END Hidden Required Fields -->


                    <span class="field input_field">
                        <label for="name_v">Имя: <span class="required_star">*</span></label>
                        <input id="name_v" type="text" class="form-control" name="name" required=""  placeholder="Иван" />
                        <span class="bar"></span>
                        <span class="clear"></span>
                    </span>

                    <span class="field">
                        <label for="tel_v">Тел: <span class="required_star">*</span></label>
                        <input id="tel_v" placeholder="+38 (0__) ___-____" type="tel" class="form-control" name="custom_tel" required="">
                        <span class="bar"></span>
                        <span class="clear"></span>
                    </span>

                    <div class="field textarea_field">
                        <label for="question_v">Текст: <span class="required_star">*</span></label>
                        <textarea id="question_v" required="" name="question"></textarea>
                        <div class="clear"></div>
                    </div>

                   <!--  <span class="field input_field">
                        <label for="mail_12">Mail: <span class="required_star">*</span></label>
                        <input id="mail_12" type="email" required="" placeholder="ivan@gmail.com" name="email" class="form-control">
                        <span class="bar"></span>
                        <span class="clear"></span>
                    </span> -->


                    <button type="submit" class="btn_white" name="send" data-text="Перезвоните мне">Задать вопрос</button>

                    <div class="clear"></div>


                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>


    <div class="md-modal md-effect-8 md_large" id="modal_politics_one">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.md-modal .aaa{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="aaa"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="aaa"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Политика конфиденциальности</h2>
            </div>
            <div class="md_content tl">
                <p>Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет.</p>
                <p>Личная информация Членов, собранная при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в &laquo;Согласии с рассылкой&raquo;</p>
                <p><strong>Какие данные собираются на сайте</strong></p>
                <p>При добровольной регистрации на получение рассылки вы отправляете свое Имя и E-mail через форму регистрации.</p>
                <p><strong>С какой целью собираются эти данные</strong></p>
                <p>Имя используется для обращения лично к вам, а ваш e-mail для отправки вам писем рассылок, новостей, полезных материалов, коммерческих предложений.</p>
                <p>Ваши имя и e-mail не передаются третьим лицам, ни при каких условиях кроме случаев, связанных с исполнением требований законодательства.</p>
                <p>Вы можете отказаться от получения писем рассылки и удалить из базы данных свои контактные данные в любой момент, кликнув на ссылку для отписки, присутствующую в каждом письме.</p>
                <p><strong>Как эти данные используются</strong></p>
                <p>При помощи этих данных собирается информация о действиях посетителей на сайте с целью улучшения его содержания, улучшения функциональных возможностей сайта и, как следствие, создания качественного контента и сервисов для посетителей.</p>
                <p>Вы можете в любой момент изменить настройки своего браузера так, чтобы браузер блокировал все файлы или оповещал об отправке этих файлов. Учтите при этом, что некоторые функции и сервисы не смогут работать должным образом.</p>
                <p><strong>Как эти данные защищаются</strong></p>
                <p>Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет.</p>
                <p>Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями.</p>
                <p>Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее.</p>
                <p>Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете. Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций.</p>
                <p>В случае изменения данной политики конфиденциальности вы сможете прочитать об этих изменениях на этой странице или, в особых случаях, получить уведомление на свой e-mail.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-8 md_large" id="modal_politics_two">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.md-modal .aaa{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="aaa"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="aaa"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Отказ от ответственности</h2>
            </div>
            <div class="md_content tl">
                <p><strong>В соответствии с действующим законодательством</strong>, Администрация отказывается от каких-либо заверений и гарантий, предоставление которых может иным образом подразумеваться, и отказывается от ответственности в отношении Сайта, Содержимого и их использования.</p>
                <p>Ни при каких обстоятельствах Администрация Сайта не будет нести ответственности ни перед какой стороной за какой-либо прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется гиперссылка с нашего cайта, возникновение зависимости, снижения продуктивности, увольнения или прерывания трудовой активности, а равно и отчисления из учебных учреждений, за любую упущенную выгоду, приостановку хозяйственной деятельности, потерю программ или данных в Ваших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования Сайта, Содержимого или какого-либо связанного интернет-сайта, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в передаче, компьютерным вирусом или системным сбоем, даже если администрация будет явно поставлена в известность о возможности такого ущерба.</p>
                <p>Пользователь соглашается с тем, что все возможные споры будут разрешаться по нормам права.</p>
                <p>Пользователь соглашается с тем, что нормы и законы о защите прав потребителей не могут быть применимы к использованию им Сайта, поскольку он не оказывает возмездных услуг.</p>
                <p>Используя данный Сайт, Вы выражаете свое согласие с &laquo;Отказом от ответственности&raquo; и установленными Правилами и принимаете всю ответственность, которая может быть на Вас возложена.</p>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-8 md_large" id="modal_politics_three">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.md-modal .aaa{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="aaa"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="aaa"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Согласие с рассылкой</h2>
            </div>
            <div class="md_content tl">
                <p>Заполняя форму на нашем сайте &mdash; вы соглашаетесь с нашей политикой конфиденциальности. Также вы соглашаетесь с тем, что мы имеем право разглашать ваши личные данные в следующих случаях:</p>
                <p><strong>1) С Вашего согласия:</strong>&nbsp;Во всех остальных случаях перед передачей информации о Вас третьим сторонам наша Компания обязуется получить Ваше явное согласие. Например, наша Компания может реализовывать совместное предложение или конкурс с третьей стороной, тогда мы попросим у Вас разрешение на совместное использование Вашей личной информации с третьей стороной.</p>
                <p><strong>2) Компаниям, работающим от нашего лица:</strong>&nbsp;Мы сотрудничаем с другими компаниями, выполняющими от нашего лица функции бизнес поддержки, в связи с чем Ваша личная информация может быть частично раскрыта. Мы требуем, чтобы такие компании использовали информацию только в целях предоставления услуг по договору; им запрещается передавать данную информацию другим сторонам в ситуациях, отличных от случаев, когда это вызвано необходимостью предоставления оговоренных услуг. Примеры функций бизнес поддержки: выполнение заказов, реализация заявок, выдача призов и бонусов, проведение опросов среди клиентов и управление информационными системами. Мы также раскрываем обобщенную неперсонифицированную информацию при выборе поставщиков услуг.</p>
                <p><strong>3) Дочерним и совместным предприятиям:</strong>&nbsp;Под дочерним или совместным предприятием понимается организация, не менее 50% долевого участия которой принадлежит Компании. При передаче Вашей информации партнеру по дочернему или совместному предприятию наша Компания требует не разглашать данную информацию другим сторонам в маркетинговых целях и не использовать Вашу информацию каким-либо путем, противоречащим Вашему выбору. Если Вы указали, что не хотите получать от нашей Компании какие-либо маркетинговые материалы, то мы не будем передавать Вашу информацию своим партнерам по дочерним и совместным предприятиям для маркетинговых целей.</p>
                <p><strong>4) На совместно позиционируемых или партнерских страницах:</strong>&nbsp;Наша Компания может делиться информацией с компаниями-партнерами, вместе с которыми реализует специальные предложения и мероприятия по продвижению товара на совместно позиционируемых страницах нашего сайта. При запросе анкетных данных на таких страницах Вы получите предупреждение о передаче информации. Партнер использует любую предоставленную Вами информацию согласно собственному уведомлению о конфиденциальности, с которым Вы можете ознакомиться перед предоставлением информации о себе.</p>
                <p><strong>5) При передаче контроля над предприятием:</strong>&nbsp;Наша Компания оставляет за собой право передавать Ваши анкетные данные в связи с полной или частичной продажей или трансфертом нашего предприятия или его активов. При продаже или трансферте бизнеса наша Компания предоставит Вам возможность отказаться от передачи информации о себе. В некоторых случаях это может означать, что новая организация не сможет далее предоставлять Вам услуги или продукты, ранее предоставляемые нашей Компанией.</p>
                <p><strong>6)  При проведении мероприятий: </strong> Заполняя анкету участника на како-либо событие Компании, мы можем делиться Вашими данными с другими участниками. Это делается для удобства коммуникации между участниками мероприятия. Эти данные не будут переданы лицам, которые не являются участниками мероприятия, и которые не соответствуют пунктам в разделе «Согласие с рассылкой». </p>
                <p><strong>7) Правоохранительным органам:</strong>&nbsp;Наша Компания может без Вашего на то согласия раскрывать персональную информацию третьим сторонам по любой из следующих причин: во избежание нарушений закона, нормативных правовых актов или постановлений суда; участие в правительственных расследованиях; помощь в предотвращении мошенничества; а также укрепление или защита прав Компании или ее дочерних предприятий.</p>
                <p>Вся личная информация, которая передана Вами для регистрации на нашем сайте, может быть в любой момент изменена либо полностью удалена из нашей базы по Вашему запросу. Для этого Вам необходимо связаться с нами любым удобным для Вас способом, использую контактную информацию, размещенную в специальном разделе нашего сайта.</p>
                <p>Если Вы захотите отказаться от получения писем нашей регулярной рассылки, вы можете это сделать в любой момент с помощью специальной ссылки, которая размещается в конце каждого письма.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-4" id="modal_callback_ok">

        <div class="md-content">
                <h2>Ваше сообщение успешно отправлено.</h2>
                <div class="cb tc">
                    <a class="md-close btn flex" style="margin:0 auto;"><span>Вернуться на сайт</span></a>
                </div>
            </div>
        </div>
        <a id="call_ok" class="md-trigger hidden" data-modal="modal_callback_ok"></a>
    <div class="md-overlay"></div>
  </div>
    <!-- All modals end -->



        <!--[if lt IE 9]>
        <script src="libs/html5shiv/es5-shim.min.js"></script>
        <script src="libs/html5shiv/html5shiv.min.js"></script>
        <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="libs/respond/respond.min.js"></script>
        <![endif]-->

    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Load Scripts Start -->
    <script>var scr = {"scripts":[
        {"src" : "http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU", "async" : false},
        {"src" : "js/libs.js", "async" : false},
        {"src" : "js/common.js", "async" : false}
        ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
    </script>
    <!-- Load Scripts End -->

</body>
</html>
