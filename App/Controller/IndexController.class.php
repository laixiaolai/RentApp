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
            $appId     = "wxc4f17ee7dc946d0a"; 
            $appSecret = "03a7b4c63aa31ed4f141c23767cf212c";
            $authorization_code_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appId
                ."&secret=".$appSecret."&code=".$_GET['code']."&grant_type=authorization_code";
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
    public function BuyAction(){
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
}
