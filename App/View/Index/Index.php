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
    <header id='header' class='navbar-static-top navbar'>
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id='logo' href='#'>
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
    <!-- 顶部背景图片 -->
    <div class='image-area'>
        <div class='title-text'>
            <h1>游在异乡，吃在我家</h1>
            <h3>COME，DINE WITH
                <span>THE LOCAL</span>
            </h3>
            <!-- <div>搜索框</div> -->
        </div>
    </div>
    <!-- 内容 -->
    <div class='content'>
        <div class='container'>
            <h2>热门目的地</h2>
            <!-- 图片 -->
            <div class='row'>
                <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                    <div class='discovery-card' style="background-image: url('./Img/taiwan.jpg');">
                        <div class='destination-info'>
                            <div class='collect'>
                                <div class='location'>台湾</div>
                                <div class='host-number'>
                                    <span>20</span>
                                    <span>Host</span>    
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                    <div class='discovery-card' style="background-image: url('./Img/Chiengmai.jpg');">
                        <div class='destination-info'>
                            <div class='collect'>
                                <div class='location'>清迈</div>
                                <div class='host-number'>
                                    <span>20</span>
                                    <span>Host</span>    
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                    <div class='discovery-card' style="background-image: url('./Img/Seoul.jpg');">
                        <div class='destination-info'>
                            <div class='collect'>
                                <div class='location'>首尔</div>
                                <div class='host-number'>
                                    <span>20</span>
                                    <span>Host</span>    
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                    <div class='discovery-card' style="background-image: url('./Img/Tokyo.jpg');">
                        <div class='destination-info'>
                            <div class='collect'>
                                <div class='location'>东京</div>
                                <div class='host-number'>
                                    <span>20</span>
                                    <span>Host</span>    
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div id='moreCities' class='hide'>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/taiwan.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>台湾</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Chiengmai.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>清迈</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Seoul.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>首尔</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Tokyo.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>东京</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/taiwan.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>台湾</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Chiengmai.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>清迈</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Seoul.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>首尔</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Tokyo.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>东京</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/taiwan.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>台湾</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Chiengmai.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>清迈</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Seoul.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>首尔</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Tokyo.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>东京</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/taiwan.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>台湾</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Chiengmai.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>清迈</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Seoul.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>首尔</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='col-xs-12 col-sm-6' href='./index.php?a=List'>
                        <div class='discovery-card' style="background-image: url('./Img/Tokyo.jpg');">
                            <div class='destination-info'>
                                <div class='collect'>
                                    <div class='location'>东京</div>
                                    <div class='host-number'>
                                        <span>20</span>
                                        <span>Host</span>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--  -->
            <div class='more-cities'>
                <span class='btn-more' onclick='showCities()'>更多目的地···</span>
            </div>
        </div>
    </div>
    <!-- 体验指引 -->
    <div class='how-it-works'>
        <h2 class='title'>如何体验</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center work-step">
                    <img src="./Img/search.png">                
                    <h4 class="subtitle">
                        搜索目的地               
                    </h4>
                    <p class="description">
                        Durchstöbere unsere Events sowie Gastgeber und treffe Deine perfekte Wahl.              
                    </p>
                </div>
                <div class="col-sm-4 text-center work-step">
                    <img src="./Img/reserve.png">                
                    <h4 class="subtitle">
                        预定下单               
                    </h4>
                    <p class="description">
                        Durchstöbere unsere Events sowie Gastgeber und treffe Deine perfekte Wahl.              
                    </p>
                </div>
                <div class="col-sm-4 text-center work-step">
                    <img src="./Img/cheer.png">               
                    <h4 class="subtitle">
                        赴约体验               
                    </h4>
                    <p class="description">
                        Durchstöbere unsere Events sowie Gastgeber und treffe Deine perfekte Wahl.              
                    </p>
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
       
    <!-- 微信jsdk引入 -->   
    <?php View::tplInclude('Public/weixin_jsdk'); ?>
</body>

</html>