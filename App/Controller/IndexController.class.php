<?php
class IndexController extends BaseController {

    // public function __construct(){
    //     $_GET     = I($_GET);
    //     $_REQUEST = I($_REQUEST);
    //     $_POST    = I($_POST);
    //     if(FALSE === empty($_GET['lang'])){
    //         //设置语言cookie
    //         setCookieLanguage($_GET['lang']);
    //     }

        
    //     // dump($_GET);
    // }

    //微信授权获取用户信息
    public function GetCodeAction(){
        //$_SESSION["user_info"] = 1111;
        //dump($_SESSION);
        if(FALSE === empty($_GET['code'])){
            //通过code获取access_token
            $authorization_code_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".WX_APPID
                ."&secret=".WX_APPSECRET."&code=".$_GET['code']."&grant_type=authorization_code";
            $res = get_curl_contents($authorization_code_url);
            $res = json_decode($res, true);
            // dump($res);die;
            if(FALSE === empty($res['access_token'])){
                //通过access_token获取用户信息
                $userinfo_url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$res['access_token']."&openid=".$res['openid']."&lang=zh_CN";
                $userinfo_res = get_curl_contents($userinfo_url);
                $userinfo_res = json_decode($userinfo_res, true);
                // dump($userinfo_res);die;
                if (FALSE === empty($userinfo_res["openid"])) {
                    $_SESSION["user_info"] = $userinfo_res;
                    header("Location:http://".$_SERVER['HTTP_HOST']);
                     // dump($_SESSION);
                }
            }
        }
    }

    public function IndexAction(){
        //设置cookie
        //setCookieLanguage("zh-cn");
        // dump(getCookieLanguage());
        // L("china");
        // die;
        $this->assign('title', '首页');
        $this->display();
    }

    public function ListAction(){
        $this->assign('title', '产品列表页');
        $this->display();
    }
    public function InfoAction(){


        // $jssdk = new Jssdk("wxc4f17ee7dc946d0a", "03a7b4c63aa31ed4f141c23767cf212c");
        // $signPackage = $jssdk->GetSignPackage();
        // dump($jssdk);
        // dump($signPackage);
        
        $this->assign('title', '产品详情页');
        $this->display();
    }
    public function PinAction(){
        $this->assign('title', '添加评论页');
        $this->display();
    }
    public function YudinAction(){
        $this->assign('title', '产品预定页面');
        $this->display();
    }

    //http://html5.3ddysj.com/index.php?a=Jsapi
    public function JsapiAction(){  
        dump("Jsapi");
    } 

    public function NotifyAction(){  
        phpLog($_GET);
    }

    public function BuyAction(){
        ini_set('date.timezone','Asia/Shanghai');
        
        //error_reporting(E_ERROR);
        require_once ROOT_PATH."/Lib/weixin/WxPay.Api.php";
        require_once ROOT_PATH."/Lib/weixin/WxPay.JsApiPay.php";
        require_once ROOT_PATH."/Lib/weixin/WxLog.php";



        //初始化日志
        $logHandler= new CLogFileHandler(ROOT_PATH."/Log/weixin_".date('Y-m-d').'.log');
        $log = WxLog::Init($logHandler, 15);

        //①、获取用户openid
        $tools = new JsApiPay();
        //$openId = $tools->GetOpenid();
        $openId = (isset($_SESSION['user_info']['openid'])) ? $_SESSION['user_info']['openid']: '';

        //②、统一下单
        $input = new WxPayUnifiedOrder();
        $input->SetBody("55公里-旅游产品");
        $input->SetAttach("test");
        $input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
        $input->SetTotal_fee("1");
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url("http://".$_SERVER['HTTP_HOST']."notify");
        $input->SetTrade_type("JSAPI");
        $input->SetOpenid($openId);
        $order = WxPayApi::unifiedOrder($input);
        //echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>';
        // $this->printf_info($order);
        
// array(9) {
//   ["appid"]=>
//   string(18) "wxc4f17ee7dc946d0a"
//   ["mch_id"]=>
//   string(10) "1385539402"
//   ["nonce_str"]=>
//   string(16) "iy8CWkEuZAUsXpzs"
//   ["prepay_id"]=>
//   string(36) "wx2016090213381375e9a931880412373390"
//   ["result_code"]=>
//   string(7) "SUCCESS"
//   ["return_code"]=>
//   string(7) "SUCCESS"
//   ["return_msg"]=>
//   string(2) "OK"
//   ["sign"]=>
//   string(32) "2CAAA2A183770C2A71466953EFFBDA93"
//   ["trade_type"]=>
//   string(5) "JSAPI"
// }

        
        $jsApiParameters = $tools->GetJsApiParameters($order);




        //获取共享收货地址js函数参数
        $editAddress = $tools->GetEditAddressParameters();


dump($order);
dump($jsApiParameters);
dump($editAddress);
        die;

        $this->assign('title', '支付页面');
        $this->display();
    }
    public function BuyOkAction(){
        $this->assign('title', '支付成功页面');
        $this->display();
    }



    public function TestAction(){
        
        $ret = array(
            'result' => true,
            'data'   => 123,
        );
        $this->AjaxReturn($ret); 
    }



    public function UrlAction(){
        echo 'url测试成功';
    }
    public function RedirectAction(){
        $this->redirect('http://www.baidu.com'); //302跳转到百度
    }
    public function AjaxAction(){
        $ret = array(
            'result' => true,
            'data'   => 123,
        );
        $this->AjaxReturn($ret);                //将$ret格式化为json字符串后输出到浏览器
    }
    public function CommonAction(){
        echo testFunction();
    }
    public function AutoLoadAction(){
        $t = new Test();
        echo $t->hello();
    }
    public function WidgetAction(){
        $this->display();
    }
    public function LogAction(){
        Log::fatal('something');
        Log::warn('something');
        Log::notice('something');
        Log::debug('something');
        Log::sql('something');
        echo '请到Log文件夹查看效果。如果是SAE环境，可以在日志中心的DEBUG日志查看。';
    }


    //打印输出数组信息
    public function printf_info($data)
    {
        foreach($data as $key=>$value){
            echo "<font color='#00ff55;'>$key</font> : $value <br/>";
        }
    }
}
