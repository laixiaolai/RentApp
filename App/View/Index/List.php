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
<body class='home'>
    <!-- 导航 -->
    <header id='header' class='navbar-static-top navbar' style='position: fixed;border-bottom: 1px solid #e4e4e4;background-color: #fff;'>
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
    <!-- 内容 -->
    <div>
    	<div class="container-fluid">
    		<div id="search-page" class="row">
    			<div class="col-md-12 inner-search-page">
    				<!-- 导航下部的背景图片 -->
    				<div id="top-page-container">
				        <div class="row top-page-visual" style="background-image:url('./Img/list_Chiengmai.jpg')">
				          <div class="top-page-text">
				            <h1 class="col-md-12 text-center top-page-title">清迈</h1>
				            <p class="text-center top-page-subtitle">清迈当地人家第一无二的美食体验</p>
				          </div>
				        </div>
				    </div>
				    <!-- /导航下部的背景图片 -->
				    <!-- 搜索 -->
				    <!-- <div style='background-color:#f8f8f8;' class='> -->
						<div class='search-page-filters row'>
							<div class="container">
								<div class='row'>
									<div class='col-md-4 col-sm-6 hidden-xs'>
										<div class='host-number list-host-number'>
		                                    共<span>20</span>个
		                                    <span>Host</span>    
		                                </div>
									</div>
									<div class='col-md-4'></div>
									<div class='col-md-4 col-sm-6 col-xs-12'>
										<div class='row'>
											<span class='col-sm-4 hidden-xs intelligent-filter'>智能排序</span>
											<div class="col-sm-8 col-xs-12">
												<div class="col-xs-12">
													<select class="form-control filter-option">
													  <option>价格由高到低</option>
													  <option>价格由低到高</option>
													  <option>最新上架</option>
													  <option>最受欢迎</option>
													</select>
												</div>

											</div>
											
										</div>
										
									</div>
								</div>
							</div>
						</div>
					<!-- </div> -->
				    <!-- /搜索 -->
				    <!-- 搜索结果 -->
				    <div class='container'>
				    	<div id='result-page' class="row all-research-results">
				    		<div class="col-sm-6 col-md-4 single-meal event-result-box">
				    		    <!-- <div class="hidden">
					    		    <div class="event_price">20</div>
					    		    <div class="event_place_latitude">48.858765</div>
					    		    <div class="event_place_longitude">2.274574</div>
					    		    <div class="event_title">Casual dinner in the 16th</div>
					    		    <div class="event_thumbnail_url">https://s3-eu-west-1.amazonaws.com/import.assets.vizeat/uploads/56d6ba8d-1470-49a3-804d-75b4d453810c1456913037710x420.jpg</div>
					    		    <div class="event_host_thumbnail_url">https://s3-eu-west-1.amazonaws.com/import.assets.vizeat/uploads/56e946c5-1018-459a-a241-688fd453810c1458128581120x120.jpg</div>
					    		    <div class="event_host_name"> <a href="/users/profile/marie.astrid1">Marie Astrid</a></div>
				    		  	</div> -->
				    		  	<div class="screenshot-single-item" style="background-image:url('./Img/list_host1.jpg')">
				    		    	<a href="/events/consult/casual-dinner-in-the-16th"></a>
				    		  	</div>
				    		  	<div class="media all-informations">
									<div>
										<div class='INFO-title'>
											<a href="#">
												<img src="./Img/list_user.jpg" alt="" width='50' class='INFO-avatar'>
												<span class='INFO-username'>夏风不热</span>
											</a>
											<span style="background: url('./Img/list_location.png') no-repeat center right;" class='INFO-location'>上海市
											</span>
										</div>
										<div class='INFO-description'>
											贴心的服务加上色香味俱全的菜肴，让你恍如在家的梦境中。
										</div>
									</div>
				    		    	<div class="clearfix border-bottom"></div>

				    		    	<div class="media-secondary">
				    		      		<div class="host-reviews">
			    		                  	<a class="reviews-average" href="/users/profile/marie.astrid1">
			    		            			<span class="reviews-stars">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_empty.png">
			    		                        </span>
			    		            			<span class='comment-number'>(135)</span>
			    		          			</a>
				    		            </div>
				    		            <div class="meal-price">
				    		            	<span class='symbol'>&yen;</span>
				    		            	<span class='price'>96</span>
				    		            </div>
				    		      		<div class="clearfix"></div>
				    		    	</div>
				    		  	</div>
				    		</div>
				    		<div class="col-sm-6 col-md-4 single-meal event-result-box">
				    		  	<div class="screenshot-single-item" style="background-image:url('./Img/list_host1.jpg')">
				    		    	<a href="/events/consult/casual-dinner-in-the-16th"></a>
				    		  	</div>
				    		  	<div class="media all-informations">
									<div>
										<div class='INFO-title'>
											<a href="#">
												<img src="./Img/list_user.jpg" alt="" width='50' class='INFO-avatar'>
												<span class='INFO-username'>夏风不热</span>
											</a>
											<span style="background: url('./Img/list_location.png') no-repeat center right;" class='INFO-location'>上海市
											</span>
										</div>
										<div class='INFO-description'>
											贴心的服务加上色香味俱全的菜肴，让你恍如在家的梦境中。
										</div>
									</div>
				    		    	<div class="clearfix border-bottom"></div>

				    		    	<div class="media-secondary">
				    		      		<div class="host-reviews">
			    		                  	<a class="reviews-average" href="/users/profile/marie.astrid1">
			    		            			<span class="reviews-stars">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_empty.png">
			    		                        </span>
			    		            			<span class='comment-number'>(135)</span>
			    		          			</a>
				    		            </div>
				    		            <div class="meal-price">
				    		            	<span class='symbol'>&yen;</span>
				    		            	<span class='price'>96</span>
				    		            </div>
				    		      		<div class="clearfix"></div>
				    		    	</div>
				    		  	</div>
				    		</div>
				    		<div class="col-sm-6 col-md-4 single-meal event-result-box">
				    		  	<div class="screenshot-single-item" style="background-image:url('./Img/list_host1.jpg')">
				    		    	<a href="/events/consult/casual-dinner-in-the-16th"></a>
				    		  	</div>
				    		  	<div class="media all-informations">
									<div>
										<div class='INFO-title'>
											<a href="#">
												<img src="./Img/list_user.jpg" alt="" width='50' class='INFO-avatar'>
												<span class='INFO-username'>夏风不热</span>
											</a>
											<span style="background: url('./Img/list_location.png') no-repeat center right;" class='INFO-location'>上海市
											</span>
										</div>
										<div class='INFO-description'>
											贴心的服务加上色香味俱全的菜肴，让你恍如在家的梦境中。
										</div>
									</div>
				    		    	<div class="clearfix border-bottom"></div>

				    		    	<div class="media-secondary">
				    		      		<div class="host-reviews">
			    		                  	<a class="reviews-average" href="/users/profile/marie.astrid1">
			    		            			<span class="reviews-stars">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_empty.png">
			    		                        </span>
			    		            			<span class='comment-number'>(135)</span>
			    		          			</a>
				    		            </div>
				    		            <div class="meal-price">
				    		            	<span class='symbol'>&yen;</span>
				    		            	<span class='price'>96</span>
				    		            </div>
				    		      		<div class="clearfix"></div>
				    		    	</div>
				    		  	</div>
				    		</div>
				    		<div class="col-sm-6 col-md-4 single-meal event-result-box">
				    		  	<div class="screenshot-single-item" style="background-image:url('./Img/list_host1.jpg')">
				    		    	<a href="/events/consult/casual-dinner-in-the-16th"></a>
				    		  	</div>
				    		  	<div class="media all-informations">
									<div>
										<div class='INFO-title'>
											<a href="#">
												<img src="./Img/list_user.jpg" alt="" width='50' class='INFO-avatar'>
												<span class='INFO-username'>夏风不热</span>
											</a>
											<span style="background: url('./Img/list_location.png') no-repeat center right;" class='INFO-location'>上海市
											</span>
										</div>
										<div class='INFO-description'>
											贴心的服务加上色香味俱全的菜肴，让你恍如在家的梦境中。
										</div>
									</div>
				    		    	<div class="clearfix border-bottom"></div>

				    		    	<div class="media-secondary">
				    		      		<div class="host-reviews">
			    		                  	<a class="reviews-average" href="/users/profile/marie.astrid1">
			    		            			<span class="reviews-stars">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_empty.png">
			    		                        </span>
			    		            			<span class='comment-number'>(135)</span>
			    		          			</a>
				    		            </div>
				    		            <div class="meal-price">
				    		            	<span class='symbol'>&yen;</span>
				    		            	<span class='price'>96</span>
				    		            </div>
				    		      		<div class="clearfix"></div>
				    		    	</div>
				    		  	</div>
				    		</div>
				    		<div class="col-sm-6 col-md-4 single-meal event-result-box">
				    		  	<div class="screenshot-single-item" style="background-image:url('./Img/list_host1.jpg')">
				    		    	<a href="/events/consult/casual-dinner-in-the-16th"></a>
				    		  	</div>
				    		  	<div class="media all-informations">
									<div>
										<div class='INFO-title'>
											<a href="#">
												<img src="./Img/list_user.jpg" alt="" width='50' class='INFO-avatar'>
												<span class='INFO-username'>夏风不热</span>
											</a>
											<span style="background: url('./Img/list_location.png') no-repeat center right;" class='INFO-location'>上海市
											</span>
										</div>
										<div class='INFO-description'>
											贴心的服务加上色香味俱全的菜肴，让你恍如在家的梦境中。
										</div>
									</div>
				    		    	<div class="clearfix border-bottom"></div>

				    		    	<div class="media-secondary">
				    		      		<div class="host-reviews">
			    		                  	<a class="reviews-average" href="/users/profile/marie.astrid1">
			    		            			<span class="reviews-stars">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_empty.png">
			    		                        </span>
			    		            			<span class='comment-number'>(135)</span>
			    		          			</a>
				    		            </div>
				    		            <div class="meal-price">
				    		            	<span class='symbol'>&yen;</span>
				    		            	<span class='price'>96</span>
				    		            </div>
				    		      		<div class="clearfix"></div>
				    		    	</div>
				    		  	</div>
				    		</div>
				    		<div class="col-sm-6 col-md-4 single-meal event-result-box">
				    		  	<div class="screenshot-single-item" style="background-image:url('./Img/list_host1.jpg')">
				    		    	<a href="/events/consult/casual-dinner-in-the-16th"></a>
				    		  	</div>
				    		  	<div class="media all-informations">
									<div>
										<div class='INFO-title'>
											<a href="#">
												<img src="./Img/list_user.jpg" alt="" width='50' class='INFO-avatar'>
												<span class='INFO-username'>夏风不热</span>
											</a>
											<span style="background: url('./Img/list_location.png') no-repeat center right;" class='INFO-location'>上海市
											</span>
										</div>
										<div class='INFO-description'>
											贴心的服务加上色香味俱全的菜肴，让你恍如在家的梦境中。
										</div>
									</div>
				    		    	<div class="clearfix border-bottom"></div>

				    		    	<div class="media-secondary">
				    		      		<div class="host-reviews">
			    		                  	<a class="reviews-average" href="/users/profile/marie.astrid1">
			    		            			<span class="reviews-stars">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_full.png">
		    		                                <img src="./Img/star_empty.png">
			    		                        </span>
			    		            			<span class='comment-number'>(135)</span>
			    		          			</a>
				    		            </div>
				    		            <div class="meal-price">
				    		            	<span class='symbol'>&yen;</span>
				    		            	<span class='price'>96</span>
				    		            </div>
				    		      		<div class="clearfix"></div>
				    		    	</div>
				    		  	</div>
				    		</div>
				    	</div>
				    	<div class='more-cities' style='padding-top: 0'>
				    	    <span class='btn-more' onclick='showCities()'>更多目的地···</span>
				    	</div>
				    </div>
				    <!-- /搜索结果 -->
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
                                        <option value="">德语</option>
                                        <option selected="" value="de">法语</option>                                  
                                    </select>
                                </div>
                            </div>
                            <p class="title">
                                货币                             
                            </p>
                            <div class="row">
                                <div class="col-xs-12 col-sm-9 col-md-7">
                                    <select class="form-control" id="select-currency">
                                        <option selected="" value="EUR">人民币</option>
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
    
</body>

</html>