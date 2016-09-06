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
<body class='home' id="app">
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
    <!-- 预定头部信息 -->
	<div class='reserve-header'>
		<div class='container'>
	    	<div class='font-size-30 rgb74 reserve-header-content'>东半球第二好吃的清迈米粉大餐——预定</div>
	    	<div>
				<span class="reviews-stars" style='margin-right: 14px;'>
	                <img src="./Img/fiveStars_empty.png" style="background-image: url('./Img/fiveStars_full.png'); background-repeat:no-repeat;background-position:-96px;">
	            </span>
	            <span class='font-size-16 rgb132' style='margin-right: 24px;'>(共135条评论)</span>
	    		<span style="background: url('./Img/list_location.png') no-repeat center left;padding-right:0;padding-left:20px;height:15px;" class='INFO-location font-size-16 inline-block rgb132'>上海
	    		</span>
	    	</div>
		</div>
	</div>
	<div class=' rgb246'>
		<div class='container'>
	    	<div class='reserve-content'>
	    		<div class="row">
	    			<div class='col-md-8 col-xs-12'>
	    				<!-- 进度条 -->
	    				<div>
	    					<div style="height:18px;background:rgb(152, 152, 152);border-radius:9px;">
	    						<div class='active-step active-step3'></div>
	    					</div>
	    					<div class='row font-size-16 rgb152 container-padding' style="margin-top: 12px;">
	    						<div class='col-xs-3 '>选择预定日期</div>
	    						<div class='col-xs-3 active-step-text'>选择预定人数</div>
	    						<div class='col-xs-3'>填写联络人资料</div>
	    						<div class='col-xs-3'>选择付款方式支付</div>
	    					</div>
	    				</div>
	    				<!-- 第一步，第二步， 第三步， 第四步 -->
	    				<div class='reserve-step'>
	    					<div class='row container-padding'>
	    						<!-- 第一步 -->
	    						<div>
	    							<!-- 顶部 -->
	    							<div class='col-xs-12 step-header'>
	    								<span class='reserve-circle'>1</span>
	    								<span class='font-size-16 rgb74'>选择预定日期</span>
	    							</div>
	    							<div>
	    								<!-- 日历展示 -->
	    								<div class='col-xs-6' id='showDate'></div>
	    								<!-- 选择的日期 -->
	    								<div class='col-xs-6'>
	    									<span>您选择的日期:</span>
	    									<span>2016年07月17日(星期三)</span>
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
    
    <!-- 第一步 -->
    <!-- 第二步 -->
    <!-- 第三步 -->
    <!-- 第四步 -->
    <!-- 您预定的host -->
    <!-- 售前咨询 -->
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
                        <ul class="col-xs-6 menu">
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
                        <ul class="col-xs-6 menu">
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
                            <!-- <li>
                                <a href="#https://de.vizeat.com/pages/geschaeftsbedingungen">Geschäftsbedingungen</a>
                            </li> -->
                        </ul>
                        <ul class="col-xs-6 menu"></ul>
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
    <script>
    	$( "#showDate" ).datepicker({
    		defaultDate: new Date(1137075575000),//获取毫秒数
    		onSelect: function(dateText, inst){
    			console.log(dateText)
    		}
    	});
    </script>
</body>
</html>