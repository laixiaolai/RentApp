	<!-- 微信jsdk -->
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script>

	  var _title =  "55KM"; //分享标题
	  var _desc =  "55KM"; //分享描述
	  var _host =  "http://"+window.location.host;//网站域名
	  var _url = "http://"+window.location.href;//当前完整url
	  var _imgUrl = _host+"/Img/0.png";//分享图标

	  
	  console.log(_url);
	  /*
	   * 注意：
	   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
	   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
	   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
	   *
	   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
	   * 邮箱地址：weixin-open@qq.com
	   * 邮件主题：【微信JS-SDK反馈】具体问题
	   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
	   */
	  wx.config({
	    debug: true,
	    appId: '<?php echo isset($_SESSION["signPackage"]) ? $_SESSION["signPackage"]["appId"]: ""; ?>',
	    timestamp: <?php echo isset($_SESSION["signPackage"]) ? $_SESSION["signPackage"]["timestamp"]: ""; ?>,
	    nonceStr: '<?php echo isset($_SESSION["signPackage"]) ? $_SESSION["signPackage"]["nonceStr"]: ""; ?>',
	    signature: '<?php echo isset($_SESSION["signPackage"]) ? $_SESSION["signPackage"]["signature"]: ""; ?>',
	    jsApiList: [
	      // 所有要调用的 API 都要加到这个列表中
	      'onMenuShareTimeline',
	      'onMenuShareAppMessage',
	      'onMenuShareQQ',
	      'onMenuShareWeibo',
	      'onMenuShareQZone',
	      'startRecord',
	      'stopRecord',
	      'onVoiceRecordEnd',
	      'playVoice',
	      'pauseVoice',
	      'stopVoice',
	      'onVoicePlayEnd',
	      'uploadVoice',
	      'downloadVoice',
	      'chooseImage',
	      'previewImage',
	      'uploadImage',
	      'downloadImage',
	      'translateVoice',
	      'getNetworkType',
	      'openLocation',
	      'getLocation',
	      'hideOptionMenu',
	      'showOptionMenu',
	      'hideMenuItems',
	      'showMenuItems',
	      'hideAllNonBaseMenuItem',
	      'showAllNonBaseMenuItem',
	      'closeWindow',
	      'scanQRCode',
	      'chooseWXPay',
	      'openProductSpecificView',
	      'addCard',
	      'chooseCard',
	      'openCard'
	    ]
	  });
	  wx.ready(function () {
	    // 在这里调用 API
	    wx.onMenuShareAppMessage({
	        title: _title, // 分享标题
	        desc: _desc, // 分享描述
	        link: _host, // 分享链接
	        imgUrl: _imgUrl, // 分享图标
	        type: '', // 分享类型,music、video或link，不填默认为link
	        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
	        success: function () { 
	            alert('分享成功');
	        },
	        cancel: function () { 
	            // 用户取消分享后执行的回调函数
	        }
	    });
	  });
	</script>
