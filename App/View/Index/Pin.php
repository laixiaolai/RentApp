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

	<style type="text/css">
	html,body {height: 100%; } .box {filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff', endColorstr='#fff'); /*  IE */ background-image:linear-gradient(bottom, #fff 0%, #fff 100%); background-image:-o-linear-gradient(bottom, #fff 0%, #fff 100%); background-image:-moz-linear-gradient(bottom, #fff 0%, #fff 100%); background-image:-webkit-linear-gradient(bottom, #fff 0%, #fff 100%); background-image:-ms-linear-gradient(bottom, #fff 0%, #fff 100%); margin: 0 auto; position: relative; width: 100%; height: 100%; } .login-box {width: 100%; max-width:500px; height: 400px; position: absolute; top: 50%; margin-top: -200px; /*设置负值，为要定位子盒子的一半高度*/ } @media screen and (min-width:500px){.login-box {left: 50%; /*设置负值，为要定位子盒子的一半宽度*/ margin-left: -250px; } } .form {width: 100%; max-width:500px; height: 275px; margin: 25px auto 0px auto; padding-top: 25px; } .login-content {height: 300px; width: 100%; max-width:500px; background-color: #fff; float: left; } .input-group {margin: 0px 0px 30px 0px !important; } .form-control, .input-group {height: 40px; } .form-group {margin-bottom: 0px !important; } .login-title {padding: 20px 10px; background-color: #e5e5e5; } .login-title h1 {margin-top: 10px !important; } .login-title small {color: rgb(214, 109, 110); } .link p {line-height: 20px; margin-top: 30px; } .btn-sm {padding: 8px 24px !important; font-size: 16px !important; } 
	</style>

<body>
	<div class="box" id="app">
			<div class="login-box">
				<div class="login-title text-center">
					<h1><small>留言</small></h1>
				</div>
				
				<div class="login-content ">
				<div class="form">
				<form action="JavaScript:;" method="post">
					<div class="form-group">
						<div class="col-xs-12  ">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text"  class="form-control" placeholder="请输入:groupTourId" v-model="add_arr.groupTourId">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12  ">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="text"  class="form-control" placeholder="请输入:createBy" v-model="add_arr.createBy">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12  ">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<textarea class="form-control" rows="3" placeholder="请输入:content" v-model="add_arr.content"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12  ">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="text"  class="form-control" placeholder="请输入:location" v-model="add_arr.location">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12  ">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="text"  class="form-control" placeholder="请输入:nickname" v-model="add_arr.nickname">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12  ">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="text"  class="form-control" placeholder="请输入:avatarUrl" v-model="add_arr.avatarUrl">
							</div>
						</div>
					</div>
					<div class="form-group form-actions">
						<div class="col-xs-4 col-xs-offset-4 ">
							<button type="button" class="btn btn-sm btn-default" @click="fetchUser()"><span class="glyphicon glyphicon-off"></span> 提交</button>
						</div>
					</div>
					
				</form>
				</div>
			</div>
		</div>

		<input type="hidden" value='<?php echo API_URL; ?>' v-model="api_url">
	    <input type="hidden" value='<?php echo date("Y-m-d H:i:s"); ?>' v-model="Datetime">
	    <input type="hidden" value='<?php echo isset($_SESSION["api_info"]) ? $_SESSION["api_info"]["token"]: ""; ?>' v-model="Token">
	</div>

	
	<script>

	    $(function(){
	       
	        var vm = new Vue({
	            el: '#app', //绑定id盒子
	            data: {  //初始化内容值
	                add_arr: {
						"groupTourId": "",
						"createBy": "",
						"content": "",
						"location": "",
						"nickname": "",
						"avatarUrl": "",
						"createAt": "", //需要毫秒级
	                },
	                api_url: '',
	                Datetime: '',
	                Token: '',
	                tree: []
	            },
	            methods: {

	            	//列表渲染
	                fetchUser: function () { 
	                	var z= /^[0-9]*$/;
						
	                	if (!this.add_arr.groupTourId) {
	                		layer.open({content: '请输入:groupTourId!',skin: 'msg',time: 2  });
	                		return false; 
	                	};
	                	if (parseInt(this.add_arr.groupTourId) < 1 || !z.test(this.add_arr.groupTourId )) {
	                		layer.open({content: 'groupTourId请输入:大于0的数字!',skin: 'msg',time: 2  });
	                		return false; 
	                	};
	                	if (!this.add_arr.createBy) {
	                		layer.open({content: '请输入:createBy!',skin: 'msg',time: 2  });
	                		return false; 
	                	};

	                	if (parseInt(this.add_arr.createBy) < 1 || !z.test(this.add_arr.createBy )) {
	                		layer.open({content: 'createBy请输入:大于0的数字!',skin: 'msg',time: 2  });
	                		return false; 
	                	};
	                	if (!this.add_arr.content) {
	                		layer.open({content: '请输入:content!',skin: 'msg',time: 2  });
	                		return false; 
	                	};
	                	if (!this.add_arr.location) {
	                		layer.open({content: '请输入:location!',skin: 'msg',time: 2  });
	                		return false; 
	                	};
	                	if (!this.add_arr.nickname) {
	                		layer.open({content: '请输入:nickname!',skin: 'msg',time: 2  });
	                		return false; 
	                	};
	                	if (!this.add_arr.avatarUrl) {
	                		layer.open({content: '请输入:avatarUrl!',skin: 'msg',time: 2  });
	                		return false; 
	                	};

	                	var timestamp = (new Date()).valueOf();
	                	this.$set('add_arr.createAt',timestamp);


	                	layer.open({type: 2});
	                    var headers = {
	                    	"Content-Type":"application/json",
	                    	"X-Api-Key":"web-app","Datetime":this.Datetime,
	                    	"X-Auth-Token":this.Token
	                    }
	                    var backdoor_url = this.api_url+"grouptour/comment/backdoor";
						this.$http.post(backdoor_url, this.add_arr,{headers: headers}).then(function(response){
							// 响应成功回调
							var _arr = response.json();
							//debug.log(_arr.id);
							if(_arr.id){
								//提示
								layer.open({content: '提交成功!',skin: 'msg',time: 2  }); 
								this.$set('add_arr',{});
							}else{
								layer.open({content: '对不起,提交失败!',skin: 'msg',time: 2  }); 
							}
						}, function(response){
							// debug.log(response.json());
							// 响应错误回调
							layer.open({content: '对不起,系统错误!',skin: 'msg',time: 2  }); 
						});
						 layer.closeAll();
	                }
	             
	            },
	            ready: function() { //初始化执行的方法
	            }
	        });

	    });
	</script>

</body>
</html>