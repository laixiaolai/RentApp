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
	    <div style="height:700px;width:100%;"></div>
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
	<div style="background-color: rgba(0, 0, 0, 0.5);width:100%;height:100%;position:fixed;top:0;left:0;z-index:20;"></div>
	<div class='font-size-16 container' style="position:fixed;z-index:100;top:20%;height:76%;width:50%;left:25%">
		<div class='row' style="height:100%;overflow: scroll;">
			<div class='bg-rgb225' style="padding:18px 24px;color:white;"> 
				<div style="line-height:30px;">产品名：东半球第二好吃的清迈米粉大餐</div>
				<div style="line-height:30px;">订单号：201609100001</div>
			</div>
			<ul style="list-style: none;padding:0;margin:0;color: rgb(125,125,125);" class='confirm-items'>
				<li class="rgb234 confirm-item">
					<div class='col-sm-6 col-xs-12'>
						预定时间
					</div>
					<div class='col-sm-6 col-xs-12 text-right'>
						<span>2016/09/20</span>
						<span style="margin-left:14px">19:00</span>
					</div>
				</li>
				<li class="confirm-item">
					<div class='col-sm-6 col-xs-12'>
						预定姓名
					</div>
					<div class='col-sm-6 col-xs-12 text-right'>
						<span>xiaowang</span>
					</div>
				</li>
				<li class="rgb234 confirm-item">
					<div class='col-sm-6 col-xs-12'>
						联系电话
					</div>
					<div class='col-sm-6 col-xs-12 text-right'>
						<span>1234567890</span>
					</div>
				</li>
				<li class="confirm-item">
					<div class='col-sm-6 col-xs-12'>
						联系邮箱
					</div>
					<div class='col-sm-6 col-xs-12 text-right'>
						<span>xxxx@xxx.com</span>
					</div>
				</li>
				<li class="rgb234 confirm-item">
					<div class='col-sm-6 col-xs-12'>
						预定人数
					</div>
					<div class='col-sm-6 col-xs-12 text-right'>
						<span>2人</span>
					</div>
				</li>
				<li class="confirm-item">
					<div class='col-sm-6 col-xs-12'>
						单价
					</div>
					<div class='col-sm-6 col-xs-12 text-right'>
						<span>&yen;96/人</span>
					</div>
				</li>
				<li class="rgb234 confirm-item">
					<div class='col-sm-6 col-xs-12'>
						支付方式
					</div>
					<div class='col-sm-6 col-xs-12 text-right'>
						<span>微信支付</span>
					</div>
				</li>
				<li class="confirm-item" style="line-height: 30px;">
					<div class='col-sm-6 col-xs-12'>
						订单金额
					</div>
					<div class='col-sm-6 col-xs-12 text-right'>
						<span class='font-size-30 rgb225'>&yen;192</span>
					</div>
				</li>
				<li class="confirm-item" style="padding:24px 13px 44px;">
					<div class='col-sm-6' style="margin-bottom:10px;">
						<div style="border:1px solid rgb(225, 112, 114);color:rgb(225, 112, 114);padding:16px 16%;" class="comment-more">
							返回修改
						</div>
					</div>
					<div class='col-sm-6'>
						<div style="background-color: rgb(225, 112, 114);color:white;padding:16px 16%;" class="comment-more" >
							立即支付
						</div>
					</div>
					
				</li>
			</ul>
		</div>
		
	</div>
	
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
                info_type: 0,
                info_id: 0,
                info_wait: 100,
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
                	if(this.info_type == 1){
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
						    }else if(_arr.paymentStatus == "Paid"){
						    	location.href = "./index.php?a=BuyOk";
						    }
						}
					}, function(response){
						// 响应错误回调
					});
                },
            	//列表渲染
                fetchUser: function () { 
                	
                	//计时器轮询
                	// setTimeout(this.$options.methods.lunxun(), 1000);

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
                this.fetchUser();
                this.lunxun();
               
            }
        });

    });


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
							location.href = "./index.php?a=BuyOk";
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