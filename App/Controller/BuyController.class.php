<?php
class BuyController extends BaseController {

    
    
    // /**
    //  * 
    //  * 回调方法入口，子类可重写该方法
    //  * 注意：
    //  * 1、微信回调超时时间为2s，建议用户使用异步处理流程，确认成功之后立刻回复微信服务器
    //  * 2、微信服务器在调用失败或者接到回包为非确认包的时候，会发起重试，需确保你的回调是可以重入
    //  * @param array $data 回调解释出的参数
    //  * @param string $msg 如果回调处理失败，可以将错误信息输出到该方法
    //  * @return true回调出来完成不需要继续回调，false回调处理未完成需要继续回调
    //  */
    // public function NotifyProcess($data, &$msg)
    // {
    //     //TODO 用户基础该类之后需要重写该方法，成功的时候返回true，失败返回false
    //     return true;
    // }
    
    // /**
    //  * 
    //  * notify回调方法，该方法中需要赋值需要输出的参数,不可重写
    //  * @param array $data
    //  * @return true回调出来完成不需要继续回调，false回调处理未完成需要继续回调
    //  */
    // final public function NotifyCallBack($data)
    // {
    //     $msg = "OK";
    //     $result = $this->NotifyProcess($data, $msg);
        
    //     if($result == true){
    //         $this->SetReturn_code("SUCCESS");
    //         $this->SetReturn_msg("OK");
    //     } else {
    //         $this->SetReturn_code("FAIL");
    //         $this->SetReturn_msg($msg);
    //     }
    //     return $result;
    // }
    
    // /**
    //  * 
    //  * 回复通知
    //  * @param bool $needSign 是否需要签名输出
    //  */
    // final private function ReplyNotify($needSign = true)
    // {
    //     //如果需要签名
    //     if($needSign == true && 
    //         $this->GetReturn_code($return_code) == "SUCCESS")
    //     {
    //         WxLog::DEBUG("6");
    //         $this->SetSign();
    //     }
    //     WxLog::DEBUG("7");
    //     WxpayApi::replyNotify($this->ToXml());
    // }
   

    public function NotifyAction(){  
        ini_set('date.timezone','Asia/Shanghai');
        //error_reporting(E_ERROR);

                
                
                // $xmlObj=simplexml_load_string($GLOBALS); //解析回调数据
                // $xmlObj=simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA']); //解析回调数据
                // $appid=$xmlObj->appid;//微信appid
                // $mch_id=$xmlObj->mch_id;  //商户号
                // $nonce_str=$xmlObj->nonce_str;//随机字符串
                // $sign=$xmlObj->sign;//签名
                // $result_code=$xmlObj->result_code;//业务结果
                // $openid=$xmlObj->openid;//用户标识
                // $is_subscribe=$xmlObj->is_subscribe;//是否关注公众帐号
                // $trace_type=$xmlObj->trade_type;//交易类型，JSAPI,NATIVE,APP
                // $bank_type=$xmlObj->bank_type;//付款银行，银行类型采用字符串类型的银行标识。
                // $total_fee=$xmlObj->total_fee;//订单总金额，单位为分
                // $fee_type=$xmlObj->fee_type;//货币类型，符合ISO4217的标准三位字母代码，默认为人民币：CNY。
                // $transaction_id=$xmlObj->transaction_id;//微信支付订单号
                // $out_trade_no=$xmlObj->out_trade_no;//商户订单号
                // $attach=$xmlObj->attach;//商家数据包，原样返回
                // $time_end=$xmlObj->time_end;//支付完成时间
                // $cash_fee=$xmlObj->cash_fee;
                // $return_code=$xmlObj->return_code;

//禁止引用外部xml实体
echo "SUCCESS";  
        // libxml_disable_entity_loader(true);
        // $values = json_decode(json_encode(simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA'], 'SimpleXMLElement', LIBXML_NOCDATA)), true);    
        $arguments = file_get_contents('php://input');  
               phpLog($arguments);
            

        die;


        // //error_reporting(E_ERROR);
        require_once ROOT_PATH."/Lib/weixin/WxPay.Api.php";
        require_once ROOT_PATH."/Lib/weixin/WxPay.Notify.php";
        // require_once ROOT_PATH."/Lib/weixin/WxLog.php";

        // //初始化日志
        // $logHandler= new CLogFileHandler(ROOT_PATH."/Log/weixin_notify_".date('Y-m-d').'.log');
        // $log = WxLog::Init($logHandler, 15);

        // WxLog::DEBUG("1");
        // $xml = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA']: '';
        // dump($GLOBALS);
        phpLog(1);
        $notify = new WxPayNotify();
        phpLog(2);
        $rest = $notify->Handle(false);
        phpLog(3);
        
        //return "SUCCESS";
        // WxLog::DEBUG(dump($xml));
        // WxLog::DEBUG('9');


        // $msg = "OK";
        // //当返回false的时候，表示notify中调用NotifyCallBack回调失败获取签名校验失败，此时直接回复失败
        // $result = WxpayApi::notify(array($this, 'NotifyCallBack'), $msg);
        // WxLog::DEBUG("2");
        // if($result == false){
        //     WxLog::DEBUG("3");
        //     $this->SetReturn_code("FAIL");
        //     $this->SetReturn_msg($msg);
        //     $this->ReplyNotify(false);
        //     return;
        // } else {
        //     WxLog::DEBUG("4");
        //     //该分支在成功回调到NotifyCallBack方法，处理完成之后流程
        //     $this->SetReturn_code("SUCCESS");
        //     $this->SetReturn_msg("OK");
        // }
        // WxLog::DEBUG("5");
        // $this->ReplyNotify($needSign);







        // $WxPayApi = new WxPayApi();
        // notify($callback, &$msg)


        // $notify = new WxPayNotify();
        // $rest = $notify->Handle(false);
        // WxLog::DEBUG($rest);

        // phpLog($_GET);
        // dump($_POST);
        //dump($GLOBALS);
        // phpLog($_POST);

       /* $notify = new PayNotifyCallBack();
        $notify->Handle(false);


        //使用通用通知接口
        $notify = new \Notify_pub();
        
        //存储微信的回调
        $xml = $GLOBALS['HTTP_RAW_POST_DATA'];
        $notify->saveData($xml);
        
        //验证签名，并回应微信。
        //对后台通知交互时，如果微信收到商户的应答不是成功或超时，微信认为通知失败，
        //微信会通过一定的策略（如30分钟共8次）定期重新发起通知，
        //尽可能提高通知的成功率，但微信不保证通知最终能成功。
        if($notify->checkSign() == FALSE){
            $notify->setReturnParameter("return_code","FAIL");//返回状态码
            $notify->setReturnParameter("return_msg","签名失败");//返回信息
        }else{
            $notify->setReturnParameter("return_code","SUCCESS");//设置返回码
        }
        $returnXml = $notify->returnXml();
        echo $returnXml;
        
        //==商户根据实际情况设置相应的处理流程，此处仅作举例=======
        
        //以log文件形式记录回调信息
//         $log_ = new Log_();
        $log_name= __ROOT__."/Public/notify_url.log";//log文件路径
        
        log_result($log_name,"【接收到的notify通知】:\n".$xml."\n");
        
        if($notify->checkSign() == TRUE)
        {
            if ($notify->data["return_code"] == "FAIL") {
                //此处应该更新一下订单状态，商户自行增删操作
                log_result($log_name,"【通信出错】:\n".$xml."\n");
            }
            elseif($notify->data["result_code"] == "FAIL"){
                //此处应该更新一下订单状态，商户自行增删操作
                log_result($log_name,"【业务出错】:\n".$xml."\n");
            }
            else{
                //此处应该更新一下订单状态，商户自行增删操作
                log_result($log_name,"【支付成功】:\n".$xml."\n");
            }
        
            //商户自行增加处理流程,
            //例如：更新订单状态
            //例如：数据库操作
            //例如：推送支付完成信息
        }*/



    }

   
}
