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
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        // dump($id);
        
        $this->assign('id', $id);
        $this->assign('title', '产品详情页');
        $this->display();
    }
    public function PinAction(){
        $this->assign('title', '添加评论页');
        $this->display();
    }
    public function YudinAction(){
        $id = isset($_GET['id']) ? intval($_GET['id']) : 53;
        $num  = isset($_GET['num']) ? intval($_GET['num']) : 1;
        if (isset($_GET['time'])) {
            list($yue,$ri,$nian) = explode("/",trim($_GET['time']));
            $time = $nian."-".$yue."-".$ri." 00:00:00";
            $time = strtotime($time)*1000;
        }else{
            $time = getMillisecond();
        }
        
        // dump($time);
        // dump(getMillisecond());
        // dump($_GET);

        $this->assign('id', $id);
        $this->assign('time', $time);
        $this->assign('num', $num);
        $this->assign('title', '产品预定页面');
        $this->display();
    }

    //http://html5.3ddysj.com/index.php?a=Jsapi
    public function JsapiAction(){  
        dump("Jsapi");
    } 


    //获取微信prepayid
    public function PrepayidAction(){  
        $url     = "http://test.trip55.com:9002/charge/wechat/prepay/req?orderId=17&openId=o6dctwc7rSoW6PO54J6AtL3MoEv0";
        $jsonStr = array();

        $header = array(
            "Content-Type: application/json; charset=utf-8",
            "X-Api-Key: web-app",
            "Accept-Language: en",
            "Datetime: ".date("Y-m-d H:i:s",time()),
            "X-Auth-Token: 745f855c-215e-4934-9ef0-bfae5a64bfba"
        );
        list($returnCode, $returnContent)  = http_post_json($url, json_encode($jsonStr),$header);


// X-Api-Key: web-app
// Accept-Language: en
// Datetime: 2016-08-29 17:16:00
// X-Auth-Token: a80fb4f4-4497-4807-9028-b5fc9258f6a5
//  -- response --
// 200 OK
// Datetime:  2016-09-05 14:44:18
// Content-Type:  application/json; charset=utf-8
// Content-Language:  en
// Date:  Mon, 05 Sep 2016 14:44:18 GMT
// Content-Length:  268

        // dump($returnCode);
        dump($returnContent);

    } 


    public function BuyAction(){
        $order_id = isset($_GET['order_id']) ? intval($_GET['order_id']) : 0;
        $type     = isset($_GET['type']) ? intval($_GET['type']) : 1;
        $token    = isset($_SESSION["api_info"]["token"]) ? $_SESSION["api_info"]["token"]: '';
        $openid   = isset($_SESSION["user_info"]["openid"]) ? $_SESSION["user_info"]["openid"]: '';
        if(!$order_id){
            die('订单不存在');
        }
        // dump($order);
        //dump($jsApiParameters);
        // dump($editAddress);
        // die;
        $returnCode    = 0;
        $returnContent = '';
        $is_weixin     = 0;
        $header       = array();
        
        //检测如果是微信客户端,加载微信支付设置
        if(strpos($_SERVER["HTTP_USER_AGENT"],"MicroMessenger")){
            $is_weixin = 1;

            $url     = "http://test.trip55.com:9002/charge/wechat/prepay/req?orderId=".$order_id."&openId=".$openid;
            $jsonStr = array();
            $header = array(
                "Content-Type: application/json; charset=utf-8",
                "X-Api-Key: web-app",
                "Accept-Language: en",
                "Datetime: ".date("Y-m-d H:i:s",time()),
                "X-Auth-Token: ".$token
            );
            list($returnCode, $returnContent)  = http_post_json($url, json_encode($jsonStr),$header);
        }
        
        $this->assign('header', $header);
        $this->assign('returnCode', $returnCode);
        $this->assign('returnContent', $returnContent);
        $this->assign('order_id', $order_id);
        $this->assign('openid', $openid);
        $this->assign('token', $token);
        $this->assign('type', $type);
        $this->assign('is_weixin', $is_weixin);
        $this->assign('title', '支付页面');
        $this->display();
    }


    //微信支付备份
    // public function BuyAction(){
        


    //     // dump($order);
    //     //dump($jsApiParameters);
    //     // dump($editAddress);
    //     // die;
    //     $is_weixin = 0;
    //     $order = $jsApiParameters = $editAddress = '';

    //     //检测如果是微信客户端,加载微信支付设置
    //     if(strpos($_SERVER["HTTP_USER_AGENT"],"MicroMessenger")){
    //         $is_weixin = 1;
    //         $res_arr = $this->weixin_buy();
    //         if(FALSE === empty($res_arr['jsApiParameters'])){
    //             $order = $res_arr['order'];
    //             $jsApiParameters = $res_arr['jsApiParameters'];
    //             $editAddress = $res_arr['editAddress'];
    //         }
    //     }
        
    //     $this->assign('notify_url', "http://".$_SERVER['HTTP_HOST']."/notify");
    //     $this->assign('order', $order);
    //     $this->assign('jsApiParameters', $jsApiParameters);
    //     $this->assign('editAddress', $editAddress);
    //     $this->assign('is_weixin', $is_weixin);
    //     $this->assign('title', '支付页面');
    //     $this->display();
    // }



    
    public function weixin_buy($data = array()){
        ini_set('date.timezone','Asia/Shanghai');
        
        //error_reporting(E_ERROR);
        require_once ROOT_PATH."/Lib/weixin/WxPay.Api.php";
        require_once ROOT_PATH."/Lib/weixin/WxPay.JsApiPay.php";
        require_once ROOT_PATH."/Lib/weixin/WxLog.php";

        //初始化日志
        $logHandler = new CLogFileHandler(ROOT_PATH."/Log/weixin_".date('Y-m-d').'.log');
        $log = WxLog::Init($logHandler, 15);

        //①、获取用户openid
        $tools = new JsApiPay();
        //$openId = $tools->GetOpenid();
        $openId = (isset($_SESSION['user_info']['openid'])) ? $_SESSION['user_info']['openid']: '';

        //②、统一下单
        $input = new WxPayUnifiedOrder();
        $input->SetBody("55公里-测试");
        $input->SetAttach("test");
        $input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
        $input->SetTotal_fee("1");
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url("http://".$_SERVER['HTTP_HOST']."/notify");
        $input->SetTrade_type("JSAPI");
        $input->SetOpenid($openId);
        $res_arr = array();
        $res_arr['order'] = WxPayApi::unifiedOrder($input);
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

        
        $res_arr['jsApiParameters'] = $tools->GetJsApiParameters($res_arr['order']);

        // {
        //     "appId":"wxc4f17ee7dc946d0a",
        //     "nonceStr":"4ns23q80ffn5xbtc9v1k4qwq0akojn7z",
        //     "package":"prepay_id=wx20160902141316abd4839a690127723464",
        //     "signType":"MD5",
        //     "timeStamp":"1472796796",
        //     "paySign":"9005DC8C781649815206127AC7086A5B"
        // }

        //获取共享收货地址js函数参数
        $res_arr['editAddress'] = $tools->GetEditAddressParameters();

        return $res_arr;
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
