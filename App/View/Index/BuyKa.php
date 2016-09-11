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
	<?php View::tplInclude('Public/js'); ?></head>

	

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
		    	<div class='row' style="margin-top: 40px;">
		    		<div class="col-xs-12">
		    			<div style="border:1px solid #ddd">
				    		<div class='bg-rgb225' style="padding:37px 24px 12px 24px;color:white;"> 
				    			<div style="line-height:30px;font-size:28px;">信用卡付款信息</div>
				    			<div style="line-height:30px;font-size:20px;">使用信用卡安全支付</div>
				    			<div style="font-size:17px;text-align: right;">Processed by Paypal</div>
				    		</div>
				    		<ul style="list-style: none;padding:0;margin:0;color: rgb(125,125,125);" class='confirm-items'>
				    			<li class="confirm-item" >
				    				<div class='credits col-sm-2 col-xs-4 '>
				    					<img src="./Img/credit_union.png?imageView2/1/w/114/h/60" alt="">
				    				</div>
				    				<div style="border: 1px solid #ddd;" class='credits col-sm-2 col-xs-4'>
				    					<img src="./Img/credit_visa.png?imageView2/1/w/114/h/60" alt="" width="100%">
				    				</div>
				    				<div class='credits col-sm-2 col-xs-4'>
				    					<img src="./Img/credit_master.png?imageView2/1/w/114/h/60" alt="">
				    				</div>
				    				<div class='credits col-sm-2 col-xs-4'>
				    					<img src="./Img/credit_ae.png?imageView2/1/w/114/h/60" alt="">
				    				</div>
				    				<div class='credits col-sm-2 col-xs-4'>
				    					<img src="./Img/credit_jcb.png?imageView2/1/w/114/h/60" alt="">
				    				</div>
				    			</li>
				    			<li class="confirm-item">
				    				<div class='step3-content'>
										<span class='col-xs-3 text-center credit-num'>信用卡卡号</span>
										<input type="text" class='col-xs-9' placeholder="请输入信用卡卡号">
									</div>
				    			</li>
				    			<li class="confirm-item">
				    				<div class='step3-content row'>
				    					<div class='text-center col-sm-9 col-xs-12' style="margin-bottom: 24px;">
				    						<span class='text-center col-xs-3 col-sm-4 credit-num'>有效期&nbsp;月/年</span>
				    						<select name="month" class="col-xs-4 col-sm-4" style="height:56px;">
												<option value="">01</option>
												<option value="">02</option>
												<option value="">03</option>
												<option value="">04</option>
											</select>
											<select name="year" class="col-xs-5 col-sm-4" style="height:56px;">
												<option value="">2016</option>
												<option value="">2015</option>
												<option value="">2014</option>
												<option value="">2013</option>
											</select>
										</div>
										<div class="col-sm-3 col-xs-12">
											<span class='col-sm-6 text-center col-xs-3'>CVV</span>
											<input type="text" class='col-xs-9 col-sm-6'>
										</div>
				    				</div>
				    			</li>
				    			<li class="confirm-item" style="padding:24px 13px 44px;">
				    				<div class='row'>
				    					<div class='col-sm-6'>
				    						<div style="background-color: rgb(225, 112, 114);color:white;padding:16px 16%;margin-bottom: 10px;" class="comment-more" >
				    							确认支付
				    						</div>
				    					</div>
				    					<div class='col-sm-6' style="margin-bottom:10px;">
				    						<div style="border:1px solid rgb(225, 112, 114);color:rgb(225, 112, 114);padding:16px 16%;" class="comment-more">
				    							返回订单
				    						</div>
				    					</div>
				    				</div>
				    				
				    				
				    				
				    			</li>
				    		</ul>
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
	</div>
</body>
</html>