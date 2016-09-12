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
	    	<div class='font-size-30 rgb74 reserve-header-content'>{{info.groupTour.title}}——预定</div>
	    	<div>
				<span class="reviews-stars" style='margin-right: 14px;'>
	                <img src="./Img/fiveStars_empty.png" style="background-image: url('./Img/fiveStars_full.png'); background-repeat:no-repeat;background-position:{{info.groupTour.price / 500 * 100 - 98.5}}px;">
	            </span>
	            <span class='font-size-16 rgb132' style='margin-right: 24px;'>(共{{comment_num}}条评论)</span>
	    		<span style="background: url('./Img/list_location.png') no-repeat center left;padding-right:0;padding-left:20px;height:15px;" class='INFO-location font-size-16 inline-block rgb132'>{{info.groupTour.transportation}}
	    		</span>
	    	</div>
		</div>
	</div>
	<div class=' rgb246'>
		<div class='container'>
	    	<div class='reserve-content'>
	    		<div class="row">
	    			<div class='col-sm-4 col-sm-push-8 col-xs-12'>
	    				<div>
	    					<div class='your-reserve'>您预定的host</div>
		    				<div class='your-reserve-content'>
		    					<div class="single-meal event-result-box"  >
					    		  	<div class="screenshot-single-item" style="background-image:url('{{info.photo[0].photoPath}}')">
					    		    	<a href="/index.php?a=Info&id={{info.groupTour.id}}"></a>
					    		  	</div>
					    		  	<div class="media all-informations">
										<div>
											<div class='INFO-title'>
												<a href="#">
													<img src="{{info.author.avatarUrl}}" alt="" width='50' height='50' class='INFO-avatar'>
													<span class='INFO-username'>{{info.author.nickname}}</span>
												</a>
												<span style="background: url('./Img/list_location.png') no-repeat center right;" class='INFO-location'>{{info.groupTour.transportation}}
												</span>
											</div>
											<div class='INFO-description'>
												{{info.groupTour.title}}
											</div>
										</div>
					    		    	<div class="clearfix border-bottom"></div>

					    		    	<div class="media-secondary">
					    		      		<div class="host-reviews">
				    		                  	<a class="reviews-average" href="/users/profile/marie.astrid1">
				    		            			<span class="reviews-stars">
			    		                                <img src="./Img/fiveStars_empty.png" style="background-image: url('./Img/fiveStars_full.png'); background-repeat:no-repeat;background-position:{{info.groupTour.price / 500 * 100 - 98.5}}px;">
				    		                        </span>
				    		            			<span class='comment-number'>({{comment_num}})</span>
				    		          			</a>
					    		            </div>
					    		            <div class="meal-price">
					    		            	<span class='symbol'>&yen;</span>
					    		            	<span class='price'>{{info.groupTour.actualPrice}}</span>
					    		            </div>
					    		      		<div class="clearfix"></div>
					    		    	</div>
					    		  	</div>
					    		</div>
		    				</div>
	    				</div>
	    				<!-- 大屏幕显示，小屏幕隐藏 -->
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
	    			<div class='col-sm-8 col-sm-pull-4 col-xs-12 '>
	    				<!-- 进度条 -->
	    				<div>
	    					<div style="height:18px;background:rgb(152, 152, 152);border-radius:9px;">
	    						<div class='active-step active-step3'></div>
	    					</div>	
	    					<div class='row font-size-16 rgb152 container-padding' style="margin-top: 12px;margin-bottom: 30px;">
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
	    							<div class='col-xs-12 step-article'>
	    								<!-- 日历展示 -->
	    								<div class='row'>
	    									<div class='col-md-6' id='showDate'></div>
	    									<!-- 选择的日期 -->
	    									<div class='col-md-6'>
	    										<span class='font-size-16'>您选择的日期:</span>
	    										<div class='font-size-24 rgb225 checked-time' id='showTime'></div>
	    									</div>
	    								</div>
	    								
	    							</div>
	    						</div>
	    						<!-- 第二步 -->
	    						<div>
	    							<!-- 顶部 -->
	    							<div class='col-xs-12 step-header'>
	    								<span class='reserve-circle'>2</span>
	    								<span class='font-size-16 rgb74'>选择预定人数</span>
	    							</div>
	    							<div class='col-xs-12 step-article'>
	    								<div class='font-size-16 step2-title'>
	    									<span class='col-xs-3'>数量</span>
	    									<span class='col-xs-3'></span>
	    									<span class='col-xs-3'>单价</span>
	    									<span class='col-xs-3 total-price'>总价</span>
	    								</div>
	    								<div class='text-center font-size-16' style="line-height: 36px;">
	    									<div class='col-xs-6'>
	    										<select name="" id="" class="number-select" v-model="info_num">
	    											<option value="1">1</option>
	    											<option value="2">2</option>
	    											<option value="3">3</option>
	    											<option value="4">4</option>
	    											<option value="5">5</option>
	    											<option value="6">6</option>
	    											<option value="7">7</option>
	    											<option value="8">8</option>
	    											<option value="9">9</option>
	    											<option value="10">10</option>
	    										</select>
	    									</div>
	    									
	    									<span class='col-xs-3'>&yen;{{info.groupTour.actualPrice}}</span>
	    									<span class='col-xs-3 font-size-30 rgb225 total-price'>&yen;{{info.groupTour.actualPrice * this.info_num}}</span>
	    								</div>
	    							</div>
	    						</div>
	    						<!-- 第三步 -->
	    						<div>
	    							<!-- 顶部 -->
	    							<div class='col-xs-12 step-header'>
	    								<span class='reserve-circle'>3</span>
	    								<span class='font-size-16 rgb74'>填写联络人资料</span>
	    							</div>
	    							<div class='col-xs-12  step-article'>
	    								<div class='step3-content'>
	    									<span class='col-xs-3 text-center'>姓名</span>
	    									<input type="text" class='col-xs-9' placeholder="xiaoming" v-model="info_xm">
	    								</div>
	    								<div class='step3-content'>
	    									<span class='col-xs-3 text-center'>电话</span>
	    									<input type="text" class='col-xs-9' placeholder="13000000000" v-model="info_dh">
	    								</div>
	    								<div class='step3-content'>
	    									<span class='col-xs-3 text-center'>邮箱</span>
	    									<input type="email" class='col-xs-9' placeholder="xxxx@xxxx.com" v-model="info_yx">
	    								</div>
	    							</div>
	    						</div>
	    						<!-- 第四步 -->
	    						<div>
	    							<!-- 顶部 -->
	    							<div class='col-xs-12 step-header'>
	    								<span class='reserve-circle'>4</span>
	    								<span class='font-size-16 rgb74'>选择付款方式</span>
	    							</div>
	    							<div class='col-xs-12 step-article'>
	    								<div class='row'>
		    								<div class='col-md-6' style="margin-bottom: 5px;">
		    									<div class="radio eating-pay" style="background-image:url('./Img/weixin.png');background-repeat:no-repeat;background-position:48px center;">
		    										<label for="pay_way">
		    											<input type="radio" name='pay_way' value="1" v-model="info_pay">
		    										</label>
		    									</div>
		    								</div>
		    								<div class='col-md-6 ' style="margin-bottom: 5px;">
		    									<div class="radio eating-pay" style="background-image:url('./Img/pay_pal.png');background-repeat:no-repeat;background-position:48px center;">
		    										<label for="pay_way">
		    											<input type="radio" name='pay_way' value="2" v-model="info_pay">
		    										</label>
		    									</div>
		    								</div>
		    								<div class='col-md-6 ' >
		    									<div class="radio eating-pay visa-pay" style="background-image:url('./Img/visa_pay.png');background-repeat:no-repeat;background-position:12px 2px;padding-left:14px;">
		    										<label for="pay_way">
		    											<input type="radio" name='pay_way' value="3" v-model="info_pay">
		    										</label>
		    										<span style="font-size: 8px;position: absolute;left: 14px;bottom: 4px;line-height: 8px;">Processed by Paypal</span>
		    									</div>
		    								</div>
	    								</div>
	    							</div>
	    						</div>
	    						<!-- 确认提交 -->
	    						<div class='text-center col-xs-12'>
	    						    <span class='comment-more' style='background-color: rgb(225, 112, 114);color:white' @click="add_yudin">确认提交</span>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<div class='col-xs-12 visible-xs-block' style="margin-top: 20px;">
	    				<div class='service row container-padding' style="margin-right: 0;margin-left: 0;padding-left: 5px;padding-right: 5px;">
		    				<!-- 增加客服信息 -->
		    				<div class='pre-email col-xs-12'>
		    				    <div class='font-size-16 email-title'>客服信息</div>
		    				    <div class='font-size-14 email-site'>xxx@trip55.com</div>
		    				</div>
		    				<div>
		    					<div class='pre-email col-xs-6' >
		    						<div class='font-size-16 email-title'>售前咨询邮箱</div>
		    						<div class='font-size-14 email-site'>xxx@trip55.com</div>
		    					</div>
		    					<div class='after-email col-xs-6' >
		    						<div class='font-size-16 email-title'>售后服务邮箱</div>
		    						<div class='font-size-14 email-site'>xxx@trip55.com</div>
		    					</div>
		    				</div>
	    					<div>
	    						<div class='pre-weixin'>
	    							<div class='weixin-content col-xs-6' style="margin-bottom:10px;">
	    								<div class='font-size-16 weixin-number'>售前咨询微信号</div>
	    								<div class='font-size-12 weixin-text'>
	    									如果您在预定前有任何疑问请加该微信号咨询，很高兴为您解答问题。
	    								</div>
	    							</div>
	    							<div class='col-xs-6 qr_code'>
	    								<img src="./Img/yudin_pre_sale.png" class='qr_code_img'>
	    							</div>
	    						</div>
	    						<div>
	    							<div class='weixin-content col-xs-6' style="margin-bottom:10px;">
	    								<div class='font-size-16 weixin-number'>售后服务微信号</div>
	    								<div class='font-size-12 weixin-text'>
	    									如果您在预定后有任何问题，例如需要更改预定信息，退订，投诉等请加该微信号处理。
	    								</div>
	    							</div>
	    							<div class='col-xs-6'>
	    								<img src="./Img/yudin_pre_sale.png" class='qr_code_img'>
	    							</div>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
    	<input type="hidden" value='<?php echo $id; ?>' v-model="info_id">
    	<input type="hidden" id="xz_time" value='<?php echo $time; ?>' >
    	<input type="hidden" value='<?php echo $num; ?>' v-model="info_num">
    	<input type="hidden" value='<?php echo API_URL; ?>' v-model="api_url">
        <input type="hidden" value='<?php echo date("Y-m-d H:i:s"); ?>' v-model="Datetime">
        <input type="hidden" value='<?php echo isset($_SESSION["api_info"]) ? $_SESSION["api_info"]["token"]: ""; ?>' v-model="Token">
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

	
	
    <script>  
    	//初始化选择好的时间
    	function getSelectDate(time){
    		var initTime = new Date(time);
    		var year = initTime.getFullYear() + '年';
    		var month = initTime.getMonth() + 1;
    		month = month < 10 ? '0' + month + '月' : month + '月';
    		var date = initTime.getDate();
    		date = date < 10 ? '0' + date + '日': date + '日';
    		var day = initTime.getDay();
    		var a = new Array("日", "一", "二", "三", "四", "五", "六");
    		var str = "(星期"+ a[day] + ")";
    		var chooseValue = year + month + date + str;
    		$('#showTime').text(chooseValue);
    	}
    	var _xz_time = Number($("#xz_time").val());
    	getSelectDate(_xz_time);

    	$( "#showDate" ).datepicker({
    		
    		defaultDate: new Date(_xz_time),//获取毫秒数
    		onSelect: function(dateText, inst){
    			var a = new Array("日", "一", "二", "三", "四", "五", "六");
    			var week = new Date(dateText).getDay();
    			var str = "(星期"+ a[week] + ")";
    			var newDate = dateText.replace(/-/, '年').replace(/-/, '月') + '日';
    			var chooseValue = newDate + str;
    			$('#showTime').text(chooseValue);

    			var timestamp2 = Date.parse(new Date(dateText+" 00:00:00"));
    			$('#xz_time').val(timestamp2);
    			
    			//debug.log(timestamp2);
    			// var formatString = formatString || 'YYYY-MM-DD HH:mm:ss';
    			// debug.log(moment(timestamp2).format(formatString));
    		},
    		dateFormat: 'yy-mm-dd',
    		minDate: 0,
    	});

	    $(function(){

	        var vm = new Vue({
	            el: '#app', //绑定id盒子
	            data: {  //初始化内容值
	                comment_num: 0,
	                comment_but: 1,
	                comment_show: 0,
	                page_size: 2,
	                page_p: 1,
	                info_pay: 0,
	                info_id: 0,
	                info_time: 0,
	                info_num: 0,
	                info_xm: '',
	                info_dh: '',
	                info_yx: '',
	                api_url: '',
	                Datetime: '',
	                Token: '',
	                info: {},
	                tree: [],
	                comment_1: [],
	                comment_2: []
	            },
	            methods: {
	            	
	            	
	            	//预订
	                add_yudin: function () { 


	                	var z= /^[0-9]*$/;
	                	if (parseInt(this.info_id) < 1 || !z.test(this.info_id )) {
	                		layer.open({content: '参数不正确groupTourId',skin: 'msg',time: 2  });
	                		return false; 
	                	};

	                	if (parseInt(this.info_num) < 1 || !z.test(this.info_num )) {
	                		layer.open({content: '请选择预定人数',skin: 'msg',time: 2  });
	                		return false; 
	                	};

	                	
	                	this.$set('info_time',parseInt($('#xz_time').val()));
	                	if (!this.info_time) {
	                		layer.open({content: '请选择预定日期',skin: 'msg',time: 2  });
	                		return false; 
	                	};

	                	if (!this.info_xm) {
	                		layer.open({content: '请输入姓名',skin: 'msg',time: 2  });
	                		return false; 
	                	};

	                	if (!this.info_dh && !this.info_yx ) {
	                		layer.open({content: '电话跟邮箱至少输入一个',skin: 'msg',time: 2  });
	                		return false; 
	                	};

	                	var remail = /^([\w-_]+(?:\.[\w-_]+)*)@((?:[a-z0-9]+(?:-[a-zA-Z0-9]+)*)+\.[a-z]{2,6})$/i
	                	if (this.info_yx && !remail.test(this.info_yx )) {
	                		layer.open({content: '邮箱格式不正确',skin: 'msg',time: 2  });
	                		return false; 
	                	};


	                	if (!this.info_pay) {
	                		layer.open({content: '请选择付款方式',skin: 'msg',time: 2  });
	                		return false; 
	                	};



	                	this.$set('info.userId',0);
	                	this.$set('info.groupTourId',parseInt(this.info_id));
	                	this.$set('info.numOfMember',parseInt(this.info_num));
	                	this.$set('info.startDate',parseInt(this.info_time));
	                	this.$set('info.totalAmount',parseInt(this.info.groupTour.actualPrice * this.info_num));
	                	this.$set('info.contactName',this.info_xm);
	                	this.$set('info.contactTel',this.info_dh);
	                	this.$set('info.contactEmail',this.info_yx);
	                	

	                	// debug.log(parseInt(this.info.groupTour.actualPrice * this.info_num));
						//return false;
						
	                	layer.open({type: 2});
	                    var headers = {
	                    	"Content-Type":"application/json",
	                    	"X-Api-Key":"web-app","Datetime":this.Datetime,
	                    	"X-Auth-Token":this.Token
	                    }
	                    var orderwithnewuser_url = this.api_url+"orderwithnewuser";
						this.$http.post(orderwithnewuser_url, this.info,{headers: headers}).then(function(response){
							// 响应成功回调
							var _arr = response.json();
						
							//debug.log(_arr);
							if(!!_arr && !_arr.orderId){
								//提示
								layer.open({content: '对不起,未找到需要的内容',skin: 'msg',time: 2  }); 
							}else{
								layer.open({content: '订单创建'+_arr.orderId+'成功,正在跳转',skin: 'msg',time: 2  });
								location.href = "/index.php?a=Buy&order_id="+_arr.orderId+"&type="+this.info_pay;
							}
						}, function(response){
							// 响应错误回调
						});
						 layer.closeAll();

	                },	
	            	
	            	//商品详细数据
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
    </script>
</body>
</html>