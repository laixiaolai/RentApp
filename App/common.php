<?php




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


function phpLog($str){
    //创建日志文件
    $logfile    = 'phpLog_'.date('Ymd').'.log';
    $fs         = fopen($logfile, 'a');
    fwrite($fs, '================'.date('Y-m-d H:i:s',time()).' 日志记录 开始 ==============='.PHP_EOL.PHP_EOL);
    
    if(is_array($str)){
        fwrite($fs, print_r($str, true).PHP_EOL);
    }else{
        fwrite($fs, $str.PHP_EOL);
    }
    fwrite($fs,PHP_EOL. '================'.date('Y-m-d H:i:s',time()).' 日志记录 结束 ==============='.PHP_EOL.PHP_EOL);
    $fs and fclose($fs);
}
