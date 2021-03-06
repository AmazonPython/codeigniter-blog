<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's Blog - 搜索结果</title>
    <meta name="msvalidate.01" content="" />
    <meta name="baidu-site-verification" content="" />
    <meta name="author" content="LunaNova">
    <meta name="keywords" content="Luna, Nova, LunaNova, Articles Search"/>
    <meta name="description" content="看看在普通上班族的博客里搜出了什么好东西？o(^・x・^)o"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body style="margin: 20px;">
<!--nav-->
<?php $this->load->view('nav');?>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="learn">
        <div class="content_text">
            <?php if (($rows)) { foreach ($rows as $row):?>
            <div class="article-title">
                <h1><?php echo $row->title;?></h1>
            </div>
                <a class="article-time">时间：<?php echo $row->date;?></a>
                <a class="article-type">分类：<?php echo $row->type;?></a>
                <strong>服务器君耗时 {elapsed_time} 秒，内存消耗 {memory_usage}</strong>
            <div class="article-content">
                <p><?php echo $row->content;?></p>
            </div>
            <?php endforeach; } else {?>
            <?php echo '<div class="article-title">' . '<h1>' . '服务器君暂时没有找到结果，请稍后再来。' . '</h1>' . '</div>';} ?>
        </div>
    </div>
    <!--end left -->
    <!--right-->
    <!--include bio-->
    <?php $this->load->view('bio');?>
</div>
<!--content end-->
<!--footer-->
<?php $this->load->view('footer');?>
</body>
</html>
