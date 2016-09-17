<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name='keywords' content="<?php echo $title;?>">
    <meta name='title' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- 为了让浏览器运行高速模式下 -->
    <meta name="renderer" content="webkit">
    <!-- 为了让 IE 浏览器运行最新的渲染模式下 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>



    <?php View::tplInclude('Public/css'); ?>
    <?php View::tplInclude('Public/js'); ?>
</head>
<body class='home' id="app" v-cloak>
    <!-- 预先加载图片 -->
    <!-- <div style="display:none;">
        <div v-for="items in info.photo">
            <img src="{{items.photoPath}}" width="100%">
        </div>
    </div> -->
    <!-- 导航 -->
    <header id='header' class='navbar-static-top navbar' style='position: relative;border-bottom: 1px solid #e4e4e4;background-color: #fff;'>
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id='logo' href='/' style="background:url('./Img/logo_list.png') no-repeat center center;">
                <!-- <span class="hidden-xs hidden-sm">Authentic Food, Authentic People</span> -->
            </a>
        </div>
        <div class='navbar-collapse collapse'>
            <ul class='header-list pull-right nav'>
                <li>
                    <a href="#" class='host'>成为Host</a>
                </li>
            </ul>
        </div>
    </header>
    <!-- 图片轮播 -->
    <div class="swiper-container">
      
        <div class="swiper-wrapper">
            <div class="swiper-slide"  v-for="items in info.photo">
                <img class='swiper-lazy' data-src="{{items.photoPath}}?imageView2/1/w/300/h/300">
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      
    </div>
    <!-- 关于host的信息 -->
    <!-- 名称、地点 -->
    <div class="titleContainer_1hsf5im" >
        <div class="container" >
            <div class="row" >
                <div class="col-md-8" >
                    <h1 class="title_s8ugf4" >{{info.groupTour.title}}</h1>
                    <div class="subtitle_axjhr0" >
                        <a class="reviews_12ulor" >
                            <div class="container_evm7h4" >
                                <span class="reviews-stars">
                                    <img src="./Img/fiveStars_empty.png" style="background-image: url('./Img/fiveStars_full.png'); background-repeat:no-repeat;background-position:{{info.groupTour.price / 500 * 100 - 98.5}}px;margin-right: 16px;">
                                </span>
                            </div>
                            <span class='total-comments'>({{comment_num}}条评论)</span>
                        </a>
                        <a class="location_lk74px" style="background: url('./Img/list_location.png') no-repeat center left;vertical-align: sub;">{{info.groupTour.transportation}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 简介 -->
    <div class="evenRowContainer_1sb29nh" style="box-shadow: 0 -1px 0 0 #e3e3e3;">
        <div class="container" >
            <div class="row" >
                <!-- 选择日期，小屏幕显示 -->
                <div class="hidden-lg hidden-md col-sm-12" >
                    <div class="container_nr3uoy container-fluid" style="margin-bottom:22px;" >
                        <div class="row_jx4vea row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                <div class="pricePerGuestContainer_7bzx9b" >
                                    <span >
                                        <span class="price_1pnuu1y">&yen;
                                        </span>
                                        <span class='price_number'>{{info.groupTour.actualPrice}}</span>
                                        <span class='price_per'>/人</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <form action="./index.php" method="get">
                            <div class="row" >
                                <div class="col-md-8" >
                                    <label class="control-label">
                                        选择日期
                                    </label>
                                    <div id='showDate2'>
                                        <input name="time" placeholder="09/01/2006" value="<?php echo date('m/d/Y',strtotime('+1 day'));?>" readonly="" type="text" class="multiple-date-picker-input form-control font-size-16" id='datepickerSmall'>
                                        <span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s" style="margin-top:-52px;margin-right:16px;"></span>
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <label class="control-label">选择数量</label>
                                    <div class="Select Select--single has-value" >
                                        <div style="font-size:16px;" >
                                            <select  id="numberSmall" name="num" class="form-control filter-option" style="height:50px;-webkit-appearance: none;">
                                                <option selected="selected">1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                            <span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s" style="margin-top:-32px;margin-right:16px;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row"  >
                                <div class="col-md-12" >	
                                	<input type="hidden" value="yudin" name="a">
                                	<input type="hidden" value="<?php echo $id; ?>" name="id">
                                    <button type="submit" class="bookNowButton_1vtsfvn btn btn-primary" id='smallScreen'>立即预定</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- 亮点等 -->
                <div class="col-md-8 col-sm-12" >
                    <!-- 四个项目 -->
                    <div class='row info4'>
                        <div class='text-center col-sm-3 col-xs-6 info_time'>
                            <div style="background: url('./Img/info_time.png') no-repeat top center;" class='info_title'>时间</div>
                            <div class='info_content'>{{info.groupTour.startDatePromotion}}</div>
                        </div>
                        <div  class='text-center col-sm-3 col-xs-6 info_person'>
                            <div style="background: url('./Img/info_number.png') no-repeat top center;" class='info_title'>可接待人数</div>
                            <div  class='info_content'>{{info.groupTour.availableUnit}}人</div>
                        </div>
                        <div  class='text-center col-sm-3 col-xs-6 info_language'>
                            <div style="background: url('./Img/info_language.png') no-repeat top center;" class='info_title'>语言</div>
                            <div class='info_content'>{{info.groupTour.language}}</div>
                        </div>
                        <div class='text-center col-sm-3 col-xs-6 info_type'>
                            <div style="background: url('./Img/info_type.png') no-repeat top center;" class='info_title'>餐饮类型</div>
                            <div class='info_content'>{{info.groupTour.refundRule}}</div>
                        </div>
                    </div>
                    <!-- 亮点 -->
                    <div class='shine'>
                        <div class="rowTitle_ese0tp shine-point">亮点</div>
                        <span class='shine-content'>{{info.groupTour.subtitle}}</span>
                    </div>
                    <hr class="separator_1u1psom" >
                    <!-- 菜单 -->
                    <div>
                        <div class="rowTitle_ese0tp menu">菜单</div>
                        <div class='menu-list'>
                            <ul >
                                <li v-for="items in info.introduction">
                                    <img src="./Img/info_blackCircle.png" width='15px'>
                                    <span>{{items.title}}</span> 
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <hr class="separator_1u1psom" >
                    <!-- 关于host -->
                    <div>
                        <div class="rowTitle_ese0tp about-host">关于Host</div>
                        <div >
                            <div class="text-center" style="margin-bottom:25px;">
                                <img src="{{info.author.avatarUrl}}" alt="" width="116px" height='116px' style="border-radius:50%;">
                                <div class='host-name'>{{info.author.nickname}}</div>
                            </div>
                            <div class='host-content'>{{info.author.personalSignature}}</div>
                        </div>
                    </div>
                    <!-- 评价 -->
                    <!-- <div class="rowTitle_ese0tp all-comments">{{comment_num}}条评价</div>
                    <hr class="separator_1u1psom">
                    <div>
                        <div class="row" v-for="items in comment_1" style="margin-top:34px;">
                            <div class="col-md-2 text-center" >
                                <img src="{{items.avatarUrl}}" class="center-block avatar img-responsive img-circle" style="width:70px;height:70px;" >
                                <div class='comment-name'>{{items.nickname}}</div>
                            </div>
                            <div class="col-md-10 col-md-offset-null info-comment" >
                                <div class='info-content'>
                                    <p class='info-content-text'>{{items.content}}</p>
                                    <div class='info-content-time'>{{items.createAt| time}}</div>
                                </div>
                            </div>
                        </div>

                         <div class="row" v-for="items in comment_2" v-show="comment_show" style="margin-top:34px;">
                            <div class="col-md-2 text-center" >
                                <img src="{{items.avatarUrl}}" class="center-block avatar img-responsive img-circle" style="width:70px;height:70px;" >
                                <div class='comment-name'>{{items.nickname}}</div>
                            </div>
                            <div class="col-md-10 col-md-offset-null info-comment" >
                                <div class='info-content'>
                                    <p class='info-content-text'>{{items.content}}</p>
                                    <div class='info-content-time'>{{items.createAt | time}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div @click="comment" v-show="comment_but"class='more-cities col-md-6 col-md-offset-6' style='margin-top: 30px;padding: 0'>
                        <span class='comment-more' >加载更多···</span>
                    </div> -->
                </div>
                <div style="margin-top:-107.5px;" class="col-md-4 hidden-sm hidden-xs">
                    <div class="sticky-outer-wrapper">
                        <div class="sticky-inner-wrapper" style="position: relative; z-index: 10; transform: translate3d(0px, 0px, 0px);">
                            <div class="container_nr3uoy container-fluid" style="box-shadow: 0 0px 10px 0 #e5e5e5;margin-bottom:20px;" >
                                <div class="row_jx4vea row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                        <div class="pricePerGuestContainer_7bzx9b" >
                                            <span >
                                                <span class="price_1pnuu1y">&yen;
                                                </span>
                                                <span class='price_number'>96</span>
                                                <span class='price_per'>/人</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <form action="./index.php" method="get">
                                    <div class="row" >
                                        <div class="col-md-8" >
                                            <label class="control-label">
                                                选择日期
                                            </label>
                                            <div id='showDate'>
                                                <input name="time" placeholder="09/01/2006" value="<?php echo date('m/d/Y',strtotime('+1 day'));?>" readonly="" type="text" class="multiple-date-picker-input form-control font-size-16" id='datepickerBig'>
                                                <span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s" style="margin-top:-33px;margin-right:16px;"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4" >
                                            <label class="control-label">选择数量</label>
                                            <div class="Select Select--single has-value" >
                                                <div style="font-size:16px;">
                                                    <select  name="num" id="numberBig" class="form-control filter-option">
                                                        <option selected="selected">1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="display:none;" class="row" >
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                            <span >Kein Datum verfügbar?</span>
                                            <span > </span>
                                            <span >
                                                <noscript ></noscript>
                                                <a href="#" >Datum anfragen</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-12" >
                                			<input type="hidden" value="yudin" name="a">
                                			<input type="hidden" value="<?php echo $id; ?>" name="id">
                                            <button type="submit" class="bookNowButton_1vtsfvn btn" id='bigScreen'>立即预定</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class='service hidden-xs col-sm-12'>
                                <!-- 增加客服信息 -->
                                <div class='pre-email'>
                                    <div class='font-size-16 email-title'>客服信息</div>
                                    <div class='font-size-14 email-site'>xxx@trip55.com</div>
                                </div>
                                <div class='row'>
                                    <div class='pre-email col-md-6' >
                                        <div class='font-size-16 email-title'>售前咨询邮箱</div>
                                        <div class='font-size-14 email-site'>xxx@trip55.com</div>
                                    </div>
                                    <div class='after-email col-md-6' >
                                        <div class='font-size-16 email-title'>售后服务邮箱</div>
                                        <div class='font-size-14 email-site'>xxx@trip55.com</div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='pre-weixin'>
                                        <div class='weixin-content col-lg-6' style="margin-bottom:10px;">
                                            <div class='font-size-16 weixin-number'>售前咨询微信号</div>
                                            <div class='font-size-12 weixin-text'>
                                                如果您在预定前有任何疑问请加该微信号咨询，很高兴为您解答问题。
                                            </div>
                                        </div>
                                        <div class='col-lg-6' style="margin-bottom:32px;">
                                            <img src="./Img/yudin_pre_sale.png" width='145' height='145' >
                                        </div>
                                    </div>
                                    <div>
                                        <div class='weixin-content col-lg-6' style="margin-bottom:10px;">
                                            <div class='font-size-16 weixin-number'>售后服务微信号</div>
                                            <div class='font-size-12 weixin-text'>
                                                如果您在预定后有任何问题，例如需要更改预定信息，退订，投诉等请加该微信号处理。
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <img src="./Img/yudin_pre_sale.png" width='145' height='145' >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 评价部分 -->
    <div class='comment-part'>
        <div class=container>
            <div class='row'>
                <div class='col-md-8'>
                    <div class="rowTitle_ese0tp all-comments">{{comment_num}}条评价</div>
                    <hr class="separator_1u1psom">
                    <div style="margin-bottom: 30px;">
                        <div class="row" v-for="items in comment_1" style="margin-top:34px;">
                            <div class="col-md-2 text-center" >
                                <img src="{{items.avatarUrl}}" class="center-block avatar img-responsive img-circle" style="width:70px;height:70px;" >
                                <div class='comment-name'>{{items.nickname}}</div>
                            </div>
                            <div class="col-md-10 col-md-offset-null info-comment" >
                                <div class='info-content'>
                                    <p class='info-content-text'>{{items.content}}</p>
                                    <div class='info-content-time'>{{items.createAt| time}}</div>
                                </div>
                            </div>
                        </div>
                         <div class="row" v-for="items in comment_2" v-show="comment_show" style="margin-top:34px;">
                            <div class="col-md-2 text-center" >
                                <img src="{{items.avatarUrl}}" class="center-block avatar img-responsive img-circle" style="width:70px;height:70px;" >
                                <div class='comment-name'>{{items.nickname}}</div>
                            </div>
                            <div class="col-md-10 col-md-offset-null info-comment" >
                                <div class='info-content'>
                                    <p class='info-content-text'>{{items.content}}</p>
                                    <div class='info-content-time'>{{items.createAt | time}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div @click="comment" v-show="comment_but" class='more-cities col-md-6 col-md-offset-6' style='margin-bottom: 30px;padding: 0'>
                        <span class='comment-more' >加载更多···</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 底部 -->
    <div class="footer">
        <div class="container">
            <div class="pt60 visible-xs"></div>
            <div class="pt100 hidden-xs"></div>
            <div class="row">
                <div class="col-md-4 col-sm-4 widget">
                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">
                            <h4 class="title hidden-xs">
                                选项                           
                            </h4>
                            <p class="title">
                                语言                             
                            </p>
                            <div class="row">
                                <div class="col-xs-12 col-sm-9 col-md-7">
                                    <select class="form-control" id="select-language">
                                        <option value="">中文</option>
                                        <option value="">英文</option>
                                        <option value="">日文</option>
                                        <option value=-"">德语</option>
                                        <option selected="selected" value="de">法语</option>                                  
                                    </select>
                                </div>
                            </div>
                            <p class="title">
                                货币                             
                            </p>
                            <div class="row">
                                <div class="col-xs-12 col-sm-9 col-md-7">
                                    <select class="form-control" id="select-currency">
                                        <option selected="selected" value="EUR">人民币</option>
                                        <option value="USD">美元</option>
                                        <option value="GBP">欧元</option>                                    
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 widget">
                    <h4 class="title hidden-xs">
                        关于我们                    
                    </h4>
                    <div class="row">
                        <ul class="col-md-4 col-xs-6 menu">
                            <li>
                                <a href="#">关于我们</a>
                            </li>
                            <li>
                                <a href="#">条件条款</a>
                            </li>
                            <li>
                                <a href="#">隐私政策</a>
                            </li>
                            <li>
                                <a href="#">联系我们</a>
                            </li>
                        </ul>
                        <ul class="col-md-4 col-xs-6 menu">
                            <li>
                                <a href="#">信任机制</a>
                            </li>
                            <li>
                                <a href="#">工作机会</a>
                            </li>
                            <li>
                                <a href="#">媒体报道</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 widget">
                    <div class="row hidden-xs">
                        <div class="col-md-8 col-sm-12">
                            <h4 class="title">
                                成为Host                             
                            </h4>
                            <div class="row">
                                <ul class="col-xs-12 menu">
                                    <li style="font-size:16px; font-weight: 300; color: rgb(108, 123, 138); opacity: 0.7; font-family: 'Open Sans'">
                                        <a href="#">成为Host的好处和机遇</a>
                                    </li>
                                    <li style="font-size:16px; font-weight: 300; color: rgb(108, 123, 138); opacity: 0.7; font-family: 'Open Sans'">
                                        <a href="#">如何成为Host</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6 copyright">
                    <div class='row'>
                        <div class="col-md-11 col-md-offset-1">
                            <img src="./Img/logo_gray.png" alt="Vizeat" width="121" height="35">
                            <span>Copyright2016</span>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-2 hidden-xs copyright">
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 copyright">
                    <span class='record'>沪ICP备xxxxxx号</span>
                </div>
            </div>
        </div>
    </div>

	<input type="hidden" value='<?php echo $id; ?>' v-model="info_id">
	<input type="hidden" value='<?php echo API_URL; ?>' v-model="api_url">
    <input type="hidden" value='<?php echo date("Y-m-d H:i:s"); ?>' v-model="Datetime">
    <input type="hidden" id="xz_time" value='<?php echo strtotime("+2 day")*1000; ?>'>
    <input type="hidden" value='<?php echo isset($_SESSION["api_info"]) ? $_SESSION["api_info"]["token"]: ""; ?>' v-model="Token">
    <script>        
        
        // window.onscroll = function(){
        //     if(document.body.scrollWidth>991){
        //         //滚动条的滚动距离
        //         var distance =document.documentElement.scrollTop||document.body.scrollTop;
        //         //最顶部的高度
        //         var headerHeight = 85;
        //         //背景图片高度
        //         var swiperHeight = $('.swiper-container').height();

        //         if(distance>(swiperHeight+85)){
        //             $('.sticky-inner-wrapper').attr('style', 'position: fixed; z-index: 10; top: 0px;');
        //         } else {
        //             $('.sticky-inner-wrapper').attr('style', 'position: relative; z-index: 10;top: 0px;');
        //         }
        //     }
            
        // };
        // window.onscroll = function(){
        //     if(document.body.scrollWidth>991){console.log(0)
        //         var datepickerBigWidth = $('.sticky-inner-wrapper').width() + 'px';
        //         //滚动条的滚动距离
        //         var distance =document.documentElement.scrollTop||document.body.scrollTop;
        //         //最顶部的高度
        //         var headerHeight = 85;
        //         //背景图片高度
        //         var swiperHeight = $('.swiper-container').height();
        //         //获取当前的高度和宽度
        //         if(distance>(swiperHeight+85)){
        //             $('.sticky-inner-wrapper').attr('style', 'position: fixed; z-index: 10; top: 0px;transform: translate3d(0px, 30px, 0px);width:' + datepickerBigWidth+';');
        //         } else {
        //             $('.sticky-inner-wrapper').attr('style', 'position: relative; z-index: 10;transform: translate3d(0px, 0px, 0px);');
        //         }
        //     }
            
        // };
        //1.当上下滚动的时候，要添加宽度和取消宽度。
        //2.当屏幕缩小的时候，要改变宽度。
        //3.宽度其实就是2个值。360px,293.33px;
        // window.onresize = function () {
        //     //当屏幕宽度在fixed状态下，变成1200的时候，宽度要变小
        //     //滚动条的滚动距离
        //     var distance =document.documentElement.scrollTop||document.body.scrollTop;
        //     //最顶部的高度
        //     var headerHeight = 85;
        //     //背景图片高度
        //     var swiperHeight = $('.swiper-container').height();

        //     if(document.body.scrollWidth>=1200){
        //         if(distance>(swiperHeight+85)){
        //             $('.sticky-inner-wrapper').attr('style', 'position: fixed; z-index: 10; top: 0px;transform: translate3d(0px, 30px, 0px);width: 360px;');
        //         } else {
        //             $('.sticky-inner-wrapper').attr('style', 'position: relative; z-index: 10;transform: translate3d(0px, 0px, 0px);');
        //         }
        //     } else if(document.body.scrollWidth>=992){
        //         if(distance>(swiperHeight+85)){
        //             $('.sticky-inner-wrapper').attr('style', 'position: fixed; z-index: 10; top: 0px;transform: translate3d(0px, 30px, 0px);width: 293px;');
        //         } else {
        //             $('.sticky-inner-wrapper').attr('style', 'position: relative; z-index: 10;transform: translate3d(0px, 0px, 0px);');
        //         }
        //     }
        // }
        $( "#datepickerBig" ).datepicker({
            minDate: 0,
        });
        $( "#datepickerSmall" ).datepicker({
            minDate: 0,
        });
        // $("#numberBig").selectmenu();
        // $("#numberSmall").selectmenu();


        var _xz_time = Number($("#xz_time").val());

    	// $( "#showDate" ).datepicker({
    		
    	// 	defaultDate: new Date(_xz_time),//获取毫秒数
    		
    	// 	dateFormat: 'yy-mm-dd',
    	// });

    	// $( "#showDate2" ).datepicker({
    		
    	// 	defaultDate: new Date(_xz_time),//获取毫秒数
    		
    	// 	dateFormat: 'yy-mm-dd',
    	// });


        $(function(){

            var vm = new Vue({
                el: '#app', //绑定id盒子
                data: {  //初始化内容值
                    comment_num: 0,
                    comment_but: 1,
                    comment_show: 0,
                    page_size: 2,
                    page_p: 1,
                    info_id: 0,
                    api_url: '',
                    Datetime: '',
                    Token: '',
                    info: {},
                    tree: [],
                    comment_1: [],
                    comment_2: []
                },
                methods: {
                	
                	//显示隐藏评论
                    comment: function () { 
						this.$set('comment_show',1);	                    	
						this.$set('comment_but',0);	                    	
                    },
                	//列表渲染
                    fetchUser: function () { 


                    	layer.open({type: 2});

                        var headers = {
                        	"Content-Type":"application/json",
                        	"X-Api-Key":"web-app","Datetime":this.Datetime,
                        	"X-Auth-Token":this.Token
                        }
                        var grouptour_url = this.api_url+"grouptour/"+this.info_id;
    					this.$http.get(grouptour_url, {headers: headers}).then(function(response){
    						// 响应成功回调
    						var _arr = response.json();
    						
    						// debug.log(response);
    						if(!!_arr && _arr.length == 0){
    							//提示
    							layer.open({content: '对不起,未找到需要的内容',skin: 'msg',time: 2  }); 
    						}else{
    							this.$set('info',response.json());

    							//重设评论列表
    							var _comment_1 = this.comment_1;
    							var _comment_2 = this.comment_2;
    							
    							var _comment_num = 0;
    							$.each(this.info.comment, function(index, value) {
    								_comment_num++;
    								if(index < 3){
    									_comment_1.push(value);
    								}else{
    									_comment_2.push(value);
    								}
    							});
    							
    							this.$set('comment_num',_comment_num);
    							this.$set('comment_1',_comment_1);
    							this.$set('comment_2',_comment_2);


    							 // debug.log(this.comment_num);
		                    	//如果没有评论不显示加载更多
		                    	if(!this.comment_num){
		                    		this.$set('comment_but',0);
		                    	}
    						}
    					}, function(response){
    						// 响应错误回调
    					});
    					 layer.closeAll();



                    }
                },
                ready: function() { //初始化执行的方法
                    this.fetchUser();
                }
            });

        });
        $(function(){
            setTimeout(function(){
                var mySwiper = new Swiper ('.swiper-container', {
                    initialSlide: 0,
                    autoplay: 1500,
                    direction: 'horizontal',
                    autoplayDisableOnInteraction: false,//用户触碰后不会停止
                    autoplayStopOnLast: false,
                    // 如果需要分页器
                    // pagination: '.swiper-pagination',
                    // paginationClickable: true,//点击分页会自动切换。
                    
                    // 如果需要前进后退按钮
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    slidesPerView: 3,
                    // preventClicks : false,//自动播放的时候不允许手动滑动
                    updateOnImagesReady : true,//当所有的内嵌图像（img标签）加载完成后Swiper会重新初始化
                    observer:true,
                    observeParents:true,
                    loop: true,
                    // preloadImages: true,
                    lazyLoading: true,
                });
            },300);
        })
        
      </script>
</body>
</html>