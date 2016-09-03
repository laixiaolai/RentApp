<?php
class BuyController extends BaseController {

    //微信支付成功异步通知
    public function NotifyAction(){  
        ini_set('date.timezone','Asia/Shanghai');
        require_once ROOT_PATH."/Lib/weixin/WxPay.Data.php";

        //接收微信数据
        $xml = file_get_contents('php://input');  
        phpLog($xml);

        //签名检测    
        try {
            $result = WxPayResults::Init($xml);
            phpLog('成功');
            phpLog($result);

            //检测是否后台有这个订单
            //检测订单价格是否一样
            //通知后台订单支付成功
            echo "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[OK]]></return_msg></xml>";
        } catch (WxPayException $e){
            $msg = $e->errorMessage();
            phpLog('失败');
            phpLog($msg);
            
            echo "<xml><return_code><![CDATA[FAIL]]></return_code><return_msg><![CDATA[签名错误]]></return_msg></xml>";
        }
    }

   
}
