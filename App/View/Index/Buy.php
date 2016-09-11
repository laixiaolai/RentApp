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

	

<body  id="app">
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
		    		<div class='col-xs-12'>
			    		<div class='bg-rgb225' style="padding:18px 24px;color:white;"> 
			    			<div style="line-height:30px;">产品名：{{info.groupTour.title}}</div>
			    			<div style="line-height:30px;">订单号：<?php echo($order_arr['orderId']); ?></div>
			    		</div>
			    		<ul style="list-style: none;padding:0;margin:0;color: rgb(125,125,125);" class='confirm-items'>
			    			<li class="rgb234 confirm-item">
			    				<div class='col-xs-6'>
			    					预定时间
			    				</div>
			    				<div class='col-xs-6 text-right'>
			    					<span><?php echo($order_arr['startDate']); ?></span>
			    					<!-- <span style="margin-left:14px">19:00</span> -->
			    				</div>
			    			</li>
			    			<li class="confirm-item">
			    				<div class='col-xs-6'>
			    					预定姓名
			    				</div>
			    				<div class='col-xs-6 text-right'>
			    					<span><?php echo($order_arr['contactName']); ?></span>
			    				</div>
			    			</li>
			    			<li class="rgb234 confirm-item">
			    				<div class='col-xs-6'>
			    					联系电话
			    				</div>
			    				<div class='col-xs-6 text-right'>
			    					<span><?php echo($order_arr['contactTel']); ?></span>
			    				</div>
			    			</li>
			    			<li class="confirm-item">
			    				<div class='col-xs-6'>
			    					联系邮箱
			    				</div>
			    				<div class='col-xs-6 text-right'>
			    					<span><?php echo($order_arr['contactEmail']); ?></span>
			    				</div>
			    			</li>
			    			<li class="rgb234 confirm-item">
			    				<div class='col-xs-6'>
			    					预定人数
			    				</div>
			    				<div class='col-xs-6 text-right'>
			    					<span><?php echo($order_arr['numOfMember']); ?>人</span>
			    				</div>
			    			</li>
			    			<li class="confirm-item">
			    				<div class='col-xs-6'>
			    					单价
			    				</div>
			    				<div class='col-xs-6 text-right'>
			    					<span>&yen;<?php echo($order_arr['totalAmount']/$order_arr['numOfMember']); ?>/人</span>
			    				</div>
			    			</li>
			    			<li class="rgb234 confirm-item">
			    				<div class='col-xs-6'>
			    					支付方式
			    				</div>
			    				<div class='col-xs-6 text-right'>
			    					<?php if ($type == 1){ ?>
			    						<span>微信支付</span>
			    					<?php }elseif($type == 2){ ?>	
			    						<span>paypal支付</span>
			    					<?php } ?>	
			    					
			    				</div>
			    			</li>
			    			<li class="confirm-item" style="line-height: 30px;">
			    				<div class='col-xs-6'>
			    					订单金额
			    				</div>
			    				<div class='col-xs-6 text-right'>
			    					<span class='font-size-30 rgb225'>&yen;<?php echo($order_arr['totalAmount']); ?></span>
			    				</div>
			    			</li>

			    			<?php if(!$is_weixin && $type == 1){ ?>
			    			<li class="confirm-item" style="line-height: 30px;text-align: center;font-size: 18px;">
		    					<p>请用微信扫码完成支付</p>
		    					<img src="<?php echo $qrcode_url;?>" alt="" width="100%">
			    			</li>
			    			<?php } ?>

			    			<li class="confirm-item" style="padding:24px 13px 44px;">
			    				<div class='col-sm-6' style="margin-bottom:10px;">
			    					<div style="border:1px solid rgb(225, 112, 114);color:rgb(225, 112, 114);padding:16px 16%;" class="comment-more" onclick="javascript:history.back(-1);">
			    						返回修改
			    					</div>
			    				</div>
			    				<div class='col-sm-6'>
				    				<?php if($type == 2 && isset($paypal_redirectUrl)){ ?>
				    					<div style="background-color: rgb(225, 112, 114);color:white;padding:16px 16%;" class="comment-more" onclick="call_paypal()"> 立即支付 </div>
				    				<?php }else if ($type == 1 && $is_weixin) { ?>
				    					<div style="background-color: rgb(225, 112, 114);color:white;padding:16px 16%;" class="comment-more" onclick="callpay()"> 立即支付 </div>
				    				<?php } ?>
			    					
			    				</div>
			    				
			    			</li>
			    		</ul>
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
	<input type="hidden" value='<?php echo $is_weixin; ?>' v-model="info_is_weixin">
	<input type="hidden" value='<?php echo $type; ?>' v-model="info_type">
	<input type="hidden" value='<?php echo($order_arr['groupTourId']); ?>' v-model="info_gid">
	<input type="hidden" value='<?php echo $order_id; ?>' id="order_id" v-model="info_id">
	<input type="hidden" value='<?php echo API_URL; ?>' v-model="api_url">
    <input type="hidden" value='<?php echo date("Y-m-d H:i:s"); ?>' v-model="Datetime">
    <input type="hidden" value='<?php echo isset($_SESSION["api_info"]) ? $_SESSION["api_info"]["token"]: ""; ?>' v-model="Token">
    <input type="hidden" value='<?php echo isset($paypal_redirectUrl) ? $paypal_redirectUrl: ""; ?>' id="paypal_url">
	
	
	<script>
	$(function(){
        var vm = new Vue({
            el: '#app', //绑定id盒子
            data: {  //初始化内容值
                comment_num: 0,
                comment_but: 1,
                comment_show: 0,
                page_size: 2,
                page_p: 1,
                info_gid: 0,
                info_type: 0,
                info_is_weixin: 0,
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
            	//轮询检测支付状态
                lunxun: function () { 
                	if(this.info_type == "1" && this.info_is_weixin == "0"){
            			var _this = this;
            			setInterval(function(){ 
            				_this.$options.methods.check_order(_this);
            		    }, 3000);
                	}
                },
                //检测订单状态
                check_order: function (_this) { 
                    var headers = {
                    	"Content-Type":"application/json",
                    	"X-Api-Key":"web-app","Datetime":_this.Datetime,
                    	"X-Auth-Token":_this.Token
                    }
                    var grouptour_url = _this.api_url+"order/"+_this.info_id;
					_this.$http.get(grouptour_url, {headers: headers}).then(function(response){
						// 响应成功回调
						var _arr = response.json();
						if(_arr && _arr.length != 0){
						    if(_arr.paymentStatus == "Unpaid"){
						        console.log("未支付");
						    }else if(_arr.paymentStatus == "Paidid"){
						    	location.href = "./index.php?a=BuyOk&order_id="+_this.info_id;
						    }
						}
					}, function(response){
						// 响应错误回调
					});
                },
            	//商品详细数据
                goods_info: function () { 
                	
                	layer.open({type: 2});

                    var headers = {
                    	"Content-Type":"application/json",
                    	"X-Api-Key":"web-app","Datetime":this.Datetime,
                    	"X-Auth-Token":this.Token
                    }
                    var grouptour_url = this.api_url+"grouptour/"+this.info_gid;
					this.$http.get(grouptour_url, {headers: headers}).then(function(response){
						// 响应成功回调
						var _arr = response.json();
						
						// debug.log(response);
						if(!!_arr && _arr.length == 0){
							//提示
							layer.open({content: '对不起,未找到需要的内容',skin: 'msg',time: 2  }); 
						}else{
							this.$set('info',response.json());
						}
					}, function(response){
						// 响应错误回调
					});
					 layer.closeAll();
                },
            	//列表渲染
                fetchUser: function () { 
                	
                	layer.open({type: 2});

                    var headers = {
                    	"Content-Type":"application/json",
                    	"X-Api-Key":"web-app","Datetime":this.Datetime,
                    	"X-Auth-Token":this.Token
                    }
                    var grouptour_url = this.api_url+"order/"+this.info_id;
					this.$http.get(grouptour_url, {headers: headers}).then(function(response){
						// 响应成功回调
						var _arr = response.json();
						
						// debug.log(response);
						if(!!_arr && _arr.length == 0){
							//提示
							layer.open({content: '对不起,未找到需要的内容',skin: 'msg',time: 2  }); 
						}else{
							this.$set('info',_arr);	  
							// debug.log(_arr);
						}
					}, function(response){
						// 响应错误回调
					});
					 layer.closeAll();
                }
            },
            ready: function() { //初始化执行的方法
                this.goods_info();
                this.lunxun();
            }
        });

    });

	//paypal支付
	function call_paypal() {
		var _paypal_url = $("#paypal_url").val();
		location.href = _paypal_url;
	}
	</script>
	
	<?php if($is_weixin){ ?>
		<script>
			//调用微信JS api 支付
			function jsApiCall()
			{
				WeixinJSBridge.invoke(
					'getBrandWCPayRequest',
					<?php echo $returnContent; ?>,
					function(res){
						if(res.err_msg == "get_brand_wcpay_request:ok"){ //成功跳转
							//alert("支付成功");
							var _order_id = $("#order_id").val();
							location.href = "./index.php?a=BuyOk&order_id="+_order_id;
						}else{
							WeixinJSBridge.log(res.err_msg);
							alert(res.err_code+res.err_desc+res.err_msg);
						}
						
					}
				);
			}

			function callpay()
			{
				if (typeof WeixinJSBridge == "undefined"){
				    if( document.addEventListener ){
				        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
				    }else if (document.attachEvent){
				        document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
				        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
				    }
				}else{
				    jsApiCall();
				}
			}
		</script>	
	<?php } ?>

</body>
</html>