<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name='keywords' content="<?php echo $title;?>
	">
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

	

<body>
	<div>
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
	    
	    <!-- 中间确认框 -->
	    <div style='background-color: rgb(246, 246, 246);'>
		    <div class='font-size-16 container'>
		    	<div style="margin-top: 40px;">
		    		<div class='col-xs-12' style="background: white;padding-top: 46px;padding-bottom: 32px;">
		    			<div class='text-center' style="margin-bottom:40px;">
		    				<img src="./Img/done.png" alt="" width='71' height='80'>
		    				<div style="margin-top:24px;margin-bottom:10px;" class="font-size-14">
		    					支付成功，您已经成功付款
		    					<span class='rgb225'><?php echo isset($order_arr["totalAmount"]) ? $order_arr["totalAmount"]: ""; ?>元</span>！
		    				</div>
		    				<div class="font-size-16 rgb225">
		    					<span>
		    						订单号
		    					</span>
		    					<span style="margin-left:10px;">
		    						<?php echo isset($order_arr["orderId"]) ? $order_arr["orderId"]: ""; ?>
		    					</span>
		    				</div>
		    			</div>
		    			<div style="margin-bottom:80px;" class="font-size-16"> 
		    				我们将通过短信和邮件，把预订信息发送给您，请确保您的通信方式正常，并妥善保存预定信息。建议您添加我们的微信服务号，我们的客服人员将竭诚为你服务，感谢您的预定，祝您旅途愉快
		    			</div>
		    			<div class="row">
		    				<!-- <div class='col-sm-6' style="margin-bottom:10px;">
		    					<div style="border:1px solid rgb(225, 112, 114);color:rgb(225, 112, 114);padding:16px 16%;" class="comment-more font-size-20">
		    						确定
		    					</div>
		    				</div> -->
		    				<div class='col-sm-6'>
		    					<div style="background-color: rgb(225, 112, 114);color:white;padding:16px 16%;" class="comment-more font-size-20" onclick="call_info()">
		    						返回详情
		    					</div>
		    				</div>
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
	                            <!-- <li>
	                                <a href="#https://de.vizeat.com/pages/geschaeftsbedingungen">Geschäftsbedingungen</a>
	                            </li> -->
	                        </ul>
	                    </div>
	                </div>

	                <div class="col-md-4 col-sm-4 widget padding-bottom">
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
	</div>

	<script>
		//paypal支付
	function call_info() {
		location.href = '<?php echo isset($order_arr["info_url"]) ? $order_arr["info_url"]:  $host_url; ?>';
	}
	</script>
</body>
</html>