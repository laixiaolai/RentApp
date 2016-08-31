<?php
// class WeixinController extends BaseController {


//     //微信授权获取用户信息
//     public function GetCodeAction(){
        
//         // dump($_GET);
//         if(FALSE === empty($_GET['code'])){
//             //通过code获取access_token
//             $appId     = "wxc4f17ee7dc946d0a"; 
//             $appSecret = "03a7b4c63aa31ed4f141c23767cf212c";
//             $authorization_code_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appId
//                 ."&secret=".$appSecret."&code=".$_GET['code']."&grant_type=authorization_code";
//             $res = get_curl_contents($authorization_code_url);
//             $res = json_decode($res, true);
//             // dump($res);
//             if(FALSE === empty($res['access_token'])){
//                 //通过access_token获取用户信息
//                 $userinfo_url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$res['access_token']."&openid=".$res['openid']."&lang=zh_CN";
//                 $userinfo_res = get_curl_contents($userinfo_url);
//                 $userinfo_res = json_decode($userinfo_res, true);
//                 // dump($userinfo_res);
//                 if (FALSE === empty($userinfo_res["openid"])) {
//                     $_SESSION["user_info"] = $userinfo_res;
//                     header("Location:http://".$_SERVER['HTTP_HOST']);
//                     // dump($_SESSION);
//                 }
//             }
//         }
//     }

// }
