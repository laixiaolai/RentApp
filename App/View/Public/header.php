<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="author" content="leo108">
    <title><?php echo $title;?></title>
    <meta name="description" content="SinglePHP" />



    <?php
    //加载css
    if(isset($css)) foreach($css as $path){
        echo "<link rel='stylesheet' href='$path'>";
    }

    //加载js
    if(isset($js)) foreach($js as $path){
        echo "<script src='$path'></script>";
    }
    ?>
</head>
<body >
    头部
