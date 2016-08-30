<?php
$data = array(
	'title'      => $title,
	'body_class' => 'bs-docs-home',
	'css'        => array(),
	'js'         => array("./Js/jquery.min.js","./Js/vue.min.js","./Js/vue-resource.min.js","./Js/vue-router.min.js"),
);

//载入头部
View::tplInclude('Public/header', $data); 

?>


<a href="./index.php">首页</a><br/>
<a href="./index.php?a=list">产品列表页</a><br/>
<a href="./index.php?a=info">产品详情页</a><br/>
<a href="./index.php?a=pin">添加评论页</a><br/>
<a href="./index.php?a=yudin">产品预定页面</a><br/>
<a href="./index.php?a=buy">支付页面</a><br/>
<a href="./index.php?a=buyok">支付成功页面</a><br/>
<a href="./index.php?a=test">测试列表数据</a><br/>

<h1>222这是<?php echo $title;?></h1>

<?php 
//载入底部
View::tplInclude('Public/footer'); 
?>
