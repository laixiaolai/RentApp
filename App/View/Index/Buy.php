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
	<div class="box" id="app">
		<p>订单id: <?php echo $order_id; ?></p>	
		<p>用户的openid: <?php echo $openid; ?></p>	
		<p>登陆获得的token: <?php echo $token; ?></p>	
		<p>当前是否微信中打开: <?php echo $is_weixin; ?></p>	
		<p>当前是否微信使用微信支付: <?php echo $type; ?></p>	
		<p>当前获取后端的prepay_id的url: </p>	
		<pre ><?php echo($url); ?></pre>
		<p>当前获取后端的prepay_id发送的头信息: </p>	
		<pre ><?php var_dump($header); ?></pre>
		<p>当前获取后端的prepay_id状态: <?php echo $returnCode; ?></p>	
		<p>当前获取后端的prepay_id返回: <?php echo $returnContent; ?></p>	
		<hr>
		<p >订单创建后返回的信息:</p>
		<pre >{{info | json}}</pre>
		<input type="hidden" value='<?php echo $order_id; ?>' v-model="info_id">
		<input type="hidden" value='<?php echo API_URL; ?>' v-model="api_url">
	    <input type="hidden" value='<?php echo date("Y-m-d H:i:s"); ?>' v-model="Datetime">
	    <input type="hidden" value='<?php echo isset($_SESSION["api_info"]) ? $_SESSION["api_info"]["token"]: ""; ?>' v-model="Token">
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
            }
        });

    });
	</script>

</body>
</html>