<?php

/**
 * PHP发送Json对象数据
 *
 * @param $url 请求url
 * @param $jsonStr 发送的json字符串
 * @return array
 */
function http_post_json($url, $jsonStr,$header)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonStr);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$header );
  $response = curl_exec($ch);
  $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

  return array($httpCode, $response);
}


function testFunction(){
    return 'from test function';
}


function dump($data){
	echo "<pre>";
   	return var_dump($data);
}

/**
 * 抓取的url链接内容
 * @param string $url    要抓取的url链接,可以是http,https链接
 * @param int $second    设置cURL允许执行的最长秒数
 * @return mixed    
 */
function get_curl_contents($url, $second = 5)
{
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_HEADER,0);
    curl_setopt($ch,CURLOPT_TIMEOUT,$second);//设置cURL允许执行的最长秒数
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);//当此项为true时,curl_exec($ch)返回的是内容;为false时,curl_exec($ch)返回的是true/false
    
    //以下两项设置为FALSE时,$url可以为"https://login.yahoo.com"协议
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  FALSE);

    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
}


//使用方法：
/*
$_Url = "http://www.baidu.com";
$_Data = "u=admin&p=123456";
$_Cookies = "0a63b_lastvisit=176%091359981539%09%2Flogin.php; 0a63b_winduser=BlEOUFpoCgUAAgAHWlVSDQZUCgMOUQcABwgAClFXUQFfCABTVlow; 0a63b_ck_info=%2F%09; 0a63b_lastvisit=deleted";
$Proxy = array("Proxy" => "124.160.133.2:80", "UserNmae" => "Root", "PassWord" => "Root");
$Head = array("User-Agent: Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)", "Accept-Language: en-us");
 
//                         地址  访问方式 Post数据
$_Str = Get_Web_Contents($_Url, "GET", $_Data, $_Cookies, $Proxy, 30, $Head);
print_r($_Str);
*/
 
 
function Get_Web_Contents($_Get_Url, $_Method = "GET", $_Form_Data = "", $_Headers = array(), $_Cookie = "", $_Proxy = array("Proxy" => ""), $_Time_Out = 3 ){
    $ch = curl_init();    //创建cURL对象
    curl_setopt($ch, CURLOPT_URL, $_Get_Url);    //设置读取URL
    curl_setopt($ch, CURLOPT_HEADER, 1);    //是否输出头信息，0为不输出，非零则输出
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    //设置输出方式, 0为自动输出返回的内容, 1为返回输出的内容,但不自动输出.
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $_Time_Out);    // 设置超时 30秒
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    // 设置代理
    if(isset($_Proxy["Proxy"])){
        curl_setopt($ch, CURLOPT_PROXY, $_Proxy["Proxy"]);    //设置代理地址
        if(isset($_Proxy["UserNmae"]) and isset($_Proxy["PassWord"])){
            curl_setopt($ch, CURLOPT_PROXYUSERPWD, $_Proxy["UserNmae"].":".$_Proxy["PassWord"]);    // 设置代理用户名与密码
        }
    }
    // 设置 POST 数据
    if(strtoupper($_Method) == "POST"){
        curl_setopt($ch, CURLOPT_POST, 1);    //设置为 POST 提交
        curl_setopt($ch, CURLOPT_POSTFIELDS, $_Form_Data);    //设置POST数据
    }
    // 设置 Cookies 数据
    if(strlen($_Cookie)){
        curl_setopt($ch, CURLOPT_COOKIE, $_Cookie);    // 设置 Cookies
    }
    // 设置附加协议头
    if(isset($_Headers)){
        //设置 User-Agent
        if(isset($_Headers['User-Agent'])){
            curl_setopt($ch, CURLOPT_USERAGENT, $_Headers['User-Agent']);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $_Headers);    // 设置附加协议头
    }

    
 
    @$html = curl_exec($ch);  //执行
    if ($html === False) {    //获取错误,
        $ret["Error"] = curl_error($ch);
        return $ret;
    }
    $ret["Info"] = curl_getinfo($ch);    //获取详细信息
    curl_close($ch);//关闭对象
    // 区分头信息与正文
    $_wz = strpos($html,"\r\n\r\n");
    $ret["Header"] = substr($html,0,$_wz);    //截取头信息
    // 获取Cookies 信息
    if(preg_match_all("/set-cookie:\s?(.*?=.*?);/i", $ret["Header"], $cookie)){
        $cookie = $cookie[1];
    }
    $ret["Cookies"] = "";
    foreach ($cookie as $value){
        if(!is_array($value)){
            $ret["Cookies"].= $value."; ";
        }
    }
    $ret["Cookies"] = substr($ret["Cookies"],0,-1);
 
    $ret["Body"] = substr($html,$_wz+4);    //获取正文
    return $ret;
}


function phpLog($str){
    //创建日志文件
    $logfile    = 'phpLog_'.date('Ymd').'.log';
    $fs         = fopen($logfile, 'a');
    fwrite($fs, '================'.date('Y-m-d H:i:s',time()).' 日志记录 开始 ==============='.PHP_EOL.PHP_EOL);
    
    if(is_array($str)){
        dump('11111111');
        dump($str);
        fwrite($fs, print_r($str, true).PHP_EOL);
    }else{
        fwrite($fs, $str.PHP_EOL);
    }
    fwrite($fs,PHP_EOL. '================'.date('Y-m-d H:i:s',time()).' 日志记录 结束 ==============='.PHP_EOL.PHP_EOL);
    $fs and fclose($fs);
}
