<?php




function testFunction(){
    return 'from test function';
}


function dump($data){
	echo "<pre>";
   	return var_dump($data);
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
