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
	    									<span class='col-xs-3 text-center'>区号</span>
	    									<select name="area" id="areaCode" class="col-xs-9"  v-model="info_qh">
	    										<!-- 第一页 -->
	    										<option value="86" selected="selected">中国(China)</option>
	    										<option value="93">阿富汗(Afghanistan)</option>
	    										<option value="1907">阿拉斯加(Alaska(U.S.A))</option>
	    										<option value="355">阿尔巴尼亚(Albania)</option>
	    										<option value="213">阿尔及利亚(Algeria)</option>
	    										<option value="376">安道尔(Andorra)</option>
	    										<option value="244">安哥拉(Angola)</option>
	    										<option value="1264">安圭拉岛(英)(Anguilla I.)</option>
	    										<option value="1268">安提瓜和巴布达(Antigua and Barbuda)</option>
	    										<option value="54">阿根廷(Argentina)</option>
	    										<option value="374">亚美尼亚(Armenia)</option>
	    										<option value="297">阿鲁巴岛(Aruba I.)</option>
	    										<option value="247">阿森松(英)(Ascension)</option>
	    										<option value="61">澳大利亚(Australia)</option>
	    										<option value="43">奥地利(Austria)</option>
	    										<option value="994">阿塞拜疆(Azerbaijan)</option>
	    										<option value="973">巴林(Bahrain)</option>
	    										<option value="880">孟加拉国(Bangladesh)</option>
	    										<option value="1246">巴巴多斯(Barbados)</option>
	    										<option value="375">白俄罗斯(Belarus)</option>
	    										<option value="32">比利时(Belgium)</option>
	    										<option value="501">伯利兹(Belize)</option>
	    										<option value="229">贝宁(Benin)</option>
	    										<option value="1441">百慕大群岛(英)(Bermuda Is.)</option>
	    										<option value="975">不丹(Bhutan)</option>
	    										<option value="591">玻利维亚(Bolivia)</option>
	    										<option value="387">波斯尼亚和黑塞哥维那(Bosnia And Herzegovina)</option>
	    										<option value="267">博茨瓦纳(Botswana)</option>
	    										<option value="55">巴西(Brazil)</option>
	    										<option value="359">保加利亚(Bulgaria)</option>
	    										<option value="226">布基纳法索(Burkinafaso)</option>



	    										<!-- 第二页 -->
												<option value="257">布隆迪(Burundi)</option>
	    										<option value="237">喀麦隆(Cameroon)</option>
	    										<option value="1">加拿大(Canada)</option>
	    										<option value="34">加那利群岛(Canaries Is.)</option>
	    										<option value="238">佛得角(Cape Verde)</option>
	    										<option value="1345">开曼群岛(英)(Cayman Is.)</option>
	    										<option value="236">中非(Central Africa.)</option>
	    										<option value="235">乍得(Chad)</option>
	    										<option value="56">智利(Chile)</option>
	    										<option value="61 9164">圣诞岛(Christmas I.)</option>
	    										<option value="61 9162">科科斯岛(Cocos I.)</option>
	    										<option value="57">哥伦比亚(Colombia)</option>
	    										<option value="1809">巴哈马国(Commonwealth of The Bahamas)</option>
	    										<option value="1809">多米尼克国(Commonwealth of dominica)</option>
	    										<option value="269">科摩罗(Comoro)</option>
	    										<option value="242">刚果(Congo)</option>
	    										<option value="682">科克群岛(新)(Cook IS.)</option>
	    										<option value="506">哥斯达黎加(Costa Rica)</option>
	    										<option value="385">克罗地亚(Croatian)</option>
	    										<option value="53">古巴(Cuba)</option>
	    										<option value="357">塞浦路斯(Cyprus)</option>
	    										<option value="420">捷克(Czech)</option>
	    										<option value="45">丹麦(Denmark)</option>
	    										<option value="246">迪戈加西亚岛(Diego Garcia I.)</option>
	    										<option value="253">吉布提(Djibouti)</option>
	    										<option value="1809">多米尼加共和国(Dominican Rep.)</option>
	    										<option value="593">厄瓜多尔(Ecuador)</option>
	    										<option value="20">埃及(Egypt)</option>
	    										<option value="503">萨尔瓦多(El Salvador)</option>
	    										<option value="240">赤道几内亚(Equatorial Guinea)</option>
	    										<option value="291">厄立特里亚(Eritrea)</option>
	    										<option value="372">爱沙尼亚(Estonia)</option>
	    										<option value="251">埃塞俄比亚(Ethiopia )</option>




	    										<!-- 第三页 -->
												<option value="500">福克兰群岛(Falkland Is.)</option>
	    										<option value="298">法罗群岛(丹)(Faroe Is.)</option>
	    										<option value="679">斐济(Fiji)</option>
	    										<option value="358">芬兰(Finland)</option>
	    										<option value="33">法国(France)</option>
	    										<option value="594">法属圭亚那(French Guiana)</option>
	    										<option value="689">法属波里尼西亚(French Polynesia)</option>
	    										<option value="241">加蓬(Gabon)</option>
	    										<option value="220">冈比亚(Gambia)</option>
	    										<option value="995">格鲁吉亚(Georgia)</option>
	    										<option value="49">德国(Germany)</option>
	    										<option value="233">加纳(Ghana)</option>
	    										<option value="350">直布罗陀(英)(Gibraltar)</option>
	    										<option value="30">希腊(Greece)</option>
	    										<option value="299">格陵兰岛(Greenland)</option>
	    										<option value="1809">格林纳达(Grenada)</option>
	    										<option value="590">瓜德罗普岛(法)(Guadeloupe I.)</option>
	    										<option value="671">关岛(美)(Guam)</option>
	    										<option value="502">危地马拉(Guatemala)</option>
	    										<option value="224">几内亚(Guinea)</option>
	    										<option value="245">几内亚比绍(Guinea-bissau)</option>
	    										<option value="592">圭亚那(Guyana)</option>
	    										<option value="509">海地(Haiti)</option>
	    										<option value="1808">夏威夷(Hawaii)</option>
	    										<option value="504">洪都拉斯(Honduras)</option>
	    										<option value="36">匈牙利(HunGary)</option>
	    										<option value="354">冰岛(Iceland)</option>
	    										<option value="91">印度(India)</option>
	    										<option value="62">印度尼西亚(Indonesia)</option>
	    										<option value="98">伊郎(Iran)</option>
	    										<option value="964">伊拉克(Iraq)</option>
	    										<option value="353">爱尔兰(Ireland)</option>
	    										<option value="972">以色列(Israel)</option>


	    										<!-- 第四页 -->
												<option value="39">意大利(Italy)</option>
	    										<option value="225">科特迪瓦(Ivory Coast)</option>
	    										<option value="1876">牙买加(Jamaica)</option>
	    										<option value="81">日本(Japan)</option>
	    										<option value="962">约旦(Jordan)</option>
	    										<option value="855">柬埔塞(Kampuchea)</option>
	    										<option value="7">哈萨克斯坦(Kazakhstan)</option>
	    										<option value="254">肯尼亚(Kenya)</option>
	    										<option value="686">基里巴斯(Kiribati)</option>
	    										<option value="850">朝鲜(Korea(dpr of))</option>
	    										<option value="82">韩国(Korea(republic of))</option>
	    										<option value="965">科威特(Kuwait)</option>
	    										<option value="7">吉尔吉斯斯坦(Kyrgyzstan)</option>
	    										<option value="856">老挝(Laos)</option>
	    										<option value="371">拉脱维亚(Latvia)</option>
	    										<option value="961">黎巴嫩(Lebanon)</option>
	    										<option value="266">莱索托(Lesotho)</option>
	    										<option value="231">利比里亚(Liberia)</option>
	    										<option value="218">利比亚(Libya)</option>
	    										<option value="47 75">列支敦士登(Liechtenstein)</option>
	    										<option value="370">立陶宛(Lithuania)</option>
	    										<option value="352">卢森堡(Luxembourg)</option>
	    										<option value="389">马其顿(Macedonia)</option>
	    										<option value="261">马达加斯加(Madagascar)</option>
	    										<option value="265">马拉维(Malawi)</option>
	    										<option value="60">马来西亚(Malaysia)</option>
	    										<option value="960">马尔代夫(Maldive)</option>
	    										<option value="223">马里(Mali)</option>
	    										<option value="356">马耳他(Malta)</option>
	    										<option value="670">马里亚纳群岛(Mariana Is.)</option>
	    										<option value="692">马绍尔群岛(Marshall Is.)</option>
	    										<option value="596">马提尼克(法)(Martinique)</option>
	    										<option value="222">毛里塔尼亚(Mauritania)</option>


	    										<!-- 第五页 -->
												<option value="230">毛里求斯(Mauritius)</option>
	    										<option value="269">马约特岛(Mayotte I.)</option>
	    										<option value="52">墨西哥(Mexico)</option>
	    										<option value="691">密克罗尼西亚(美)(Micronesia)</option>
	    										<option value="1808">中途岛(美)(Midway I.)</option>
	    										<option value="373">摩尔多瓦(Moldova)</option>
	    										<option value="377">摩纳哥(Monaco)</option>
	    										<option value="976">蒙古(Mongolia)</option>
	    										<option value="1664">蒙特塞拉特岛(英)(Montserrat I.)</option>
	    										<option value="212">摩洛哥(Morocco)</option>
	    										<option value="258">莫桑比克(Mozambique)</option>
	    										<option value="95">缅甸(Myanmar)</option>
	    										<option value="264">纳米比亚(Namibia)</option>
	    										<option value="674">瑙鲁(Nauru)</option>
	    										<option value="977">尼泊尔(Nepal)</option>
	    										<option value="31">荷兰(Netherlands)</option>
	    										<option value="599">荷属安的列斯群岛(Netherlandsantilles Is.)</option>
	    										<option value="687">新喀里多尼亚群岛(法)(New Caledonia Is.)</option>
	    										<option value="64">新西兰(New Zealand)</option>
	    										<option value="505">尼加拉瓜(Nicaragua)</option>
	    										<option value="227">尼日尔(Niger)</option>
	    										<option value="234">尼日利亚(Nigeria)</option>
	    										<option value="683">纽埃岛(新)(Niue I.)</option>
	    										<option value="6723">诺福克岛(澳)(Norfolk I.)</option>
	    										<option value="47">挪威(Norway)</option>
	    										<option value="968">阿曼(Oman)</option>
	    										<option value="680">帕劳(美)(Palau)</option>
	    										<option value="507">巴拿马(Panama)</option>
	    										<option value="675">巴布亚新几内亚(Papua New Guinea)</option>
	    										<option value="595">巴拉圭(Paraguay)</option>
	    										<option value="51">秘鲁(Peru)</option>
	    										<option value="63">菲律宾(Philippines)</option>
	    										<option value="48">波兰(Poland)</option>


	    										<!-- 第六页 -->
												<option value="351">葡萄牙(Portugal)</option>
	    										<option value="92">巴基斯坦(Pskistan)</option>
	    										<option value="1787">波多黎各(美)(Puerto Rico)</option>
	    										<option value="974">卡塔尔(Qatar)</option>
	    										<option value="262">留尼汪岛(Reunion I.)</option>
	    										<option value="40">罗马尼亚(Rumania)</option>
	    										<option value="7">俄罗斯(Russia)</option>
	    										<option value="250">卢旺达(Rwanda)</option>
	    										<option value="684">东萨摩亚(美)(Samoa,Eastern)</option>
	    										<option value="685">西萨摩亚(Samoa,Western)</option>
	    										<option value="378">圣马力诺(San.Marino)</option>
	    										<option value="508">圣皮埃尔岛及密克隆岛(San.Pierre And Miquelon I.)</option>
	    										<option value="239">圣多美和普林西比(San.Tome And Principe)</option>
	    										<option value="966">沙特阿拉伯(Saudi Arabia)</option>
	    										<option value="221">塞内加尔(Senegal)</option>
	    										<option value="248">塞舌尔(Seychelles)</option>
	    										<option value="65">新加坡(Singapore)</option>
	    										<option value="421">斯洛伐克(Slovak)</option>
	    										<option value="386">斯洛文尼亚(Slovenia)</option>
	    										<option value="677">所罗门群岛(Solomon Is.)</option>
	    										<option value="252">索马里(Somali)</option>
	    										<option value="27">南非(South Africa)</option>
	    										<option value="34">西班牙(Spain)</option>
	    										<option value="94">斯里兰卡(Sri Lanka)</option>
	    										<option value="1809">圣克里斯托弗和尼维斯(St.Christopher and Nevis)</option>
	    										<option value="290">圣赫勒拿(St.Helena)</option>
	    										<option value="1758">圣卢西亚(St.Lucia)</option>
	    										<option value="1784">圣文森特岛(英)(St.Vincent I.)</option>
	    										<option value="249">苏丹(Sudan)</option>
	    										<option value="597">苏里南(Suriname)</option>
	    										<option value="268">斯威士兰(Swaziland)</option>
	    										<option value="46">瑞典(Sweden)</option>
	    										<option value="41">瑞士(Switzerland)</option>


	    										<!-- 第七页 -->
												<option value="963">叙利亚(Syria)</option>
	    										<option value="7">塔吉克斯坦(Tajikistan)</option>
	    										<option value="255">坦桑尼亚(Tanzania)</option>
	    										<option value="66">泰国(Thailand)</option>
	    										<option value="971">阿拉伯联合酋长国(The United Arab Emirates)</option>
	    										<option value="228">多哥(Togo)</option>
	    										<option value="690">托克劳群岛(新)(Tokelau Is.)</option>
	    										<option value="676">汤加(Tonga)</option>
	    										<option value="1809">特立尼达和多巴哥(Trinidad and Tobago)</option>
	    										<option value="216">突尼斯(Tunisia)</option>
	    										<option value="90">土耳其(Turkey)</option>
	    										<option value="993">土库曼斯坦(Turkmenistan)</option>
	    										<option value="1809">特克斯和凯科斯群岛(Turks and Caicos Is.)</option>
	    										<option value="688">图瓦卢(Tuvalu)</option>
	    										<option value="1">美国(U.S.A)</option>
	    										<option value="256">乌干达(Uganda)</option>
	    										<option value="380">乌克兰(Ukraine)</option>
	    										<option value="44">英国(United Kingdom)</option>
	    										<option value="598">乌拉圭(Uruguay)</option>
	    										<option value="7">乌兹别克斯坦(Uzbekistan)</option>
	    										<option value="678">瓦努阿图(Vanuatu)</option>
	    										<option value="379">梵蒂冈(Vatican)</option>
	    										<option value="58">委内瑞拉(Venezuela)</option>
	    										<option value="84">越南(Vietnam)</option>
	    										<option value="1809">维尔京群岛(英)(Virgin Is.)</option>
	    										<option value="1809">维尔京群岛和圣罗克伊(Virgin Is. and St.Croix I.)</option>
	    										<option value="1808">威克岛(美)(Wake I.)</option>
	    										<option value="681">瓦里斯和富士那群岛(Wallis And Futuna Is.)</option>
	    										<option value="967">西撒哈拉(Western sahara)</option>
	    										<option value="967">也门(Yemen)</option>
	    										<option value="381">南斯拉夫(Yugoslavia)</option>
	    										<option value="243">扎伊尔(Zaire)</option>
	    										<option value="260">赞比亚(Zambia)</option>


	    										<!-- 第八页 -->
												<option value="259">桑给巴尔(Zanzibar)</option>
	    										<option value="263">津巴布韦(Zimbabwe)</option>
	    										<option value="86">中华人民共和国(P.R.C.)</option>
	    									</select>
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
    	// debug.log($("#xz_time").val());
    	// debug.log(_xz_time);
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

debug.log(dateText+" 00:00:00");
			var _tt = dateText+" 00:00:00";
    			//var d = new Date(_tt);
   //debug.log(d); 			
					//d = d.getFullYear() > 0 ? d : new Date(Date.parse(_tt.replace(/-/g, "/")));
					var _new = _tt.replace(/-/g, "/");
			debug.log(_new);
					var bbb = Date.parse(_new);  
debug.log(bbb);

    			// debug.log($("#xz_time").val());

    			// debug.log(dateText+" 00:00:00");
    			
    			var timestamp2 = Date.parse(new Date(dateText+" 00:00:00"));
    			
    			// debug.log(timestamp2);
    			
    			$('#xz_time').val(timestamp2);
    			
    			// debug.log($("#xz_time").val());
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
	                info_qh: '',
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

	                	debug.log($('#xz_time').val());
	                	this.$set('info_time',$('#xz_time').val());
	                	debug.log(this.info_time);
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
	                	this.$set('info.contactTel',this.info_qh+this.info_dh);
	                	// this.$set('info.contactTel',this.info_dh);
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