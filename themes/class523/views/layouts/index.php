<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo Yii::t('index_title', '网站翻译'); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/reset.css" />
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
		$(function(){
    		$('.sel_item').click(function(e){
        		e.stopPropagation();
        		$(this).parent().next('.sel_child').slideToggle(200);
        		$(this).parent().next('.sel_child').children('a').click(function(){
            		var _val = $(this).html();
            		$(this).parent().prev('p').children('input').val(_val);
            		$(this).parent().hide();
        		});
    		});

    		//点击空白处隐藏弹出层
     		$(document).click(function(e){
        		var target  = $(e.target);
        		if(target.closest(".sel_child").length == 0){
            		$(".sel_child").slideUp(300);
        		}
    		});
		});
		</script>
	</head>

	<body>
		<div id="top"> 
			<div class="logo">
				<!-- <a href="index.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/logo.png" /></a> -->
				<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . "/css/images/logo.png"), array('site/index')); ?>
			</div>
			<div class="login_info">
				<a>heli@transn.com</a><i>|</i>
				<a>账户管理</a><i>|</i>
				<a>翻译记录</a><i>|</i>
				<a>退出</a>
			</div>
		</div>

		<?php echo $content; ?>

		<div style="clear:both"></div>
		<div id="footer">
			<p>© 2005-2013 电商翻译平台  |  京ICP备08001822号</p>
	    	<p>客服热线：400-050607-1    客服QQ：1436681558    客服邮箱：kefu@yeedt.com  </p>
		</div>
	</body>
</html>
