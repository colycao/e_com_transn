<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo Yii::t('t2b', '电商翻译平台'); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/reset.css" />
		<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery-1.8.0.min.js"></script>
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
				<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl . "/css/images/logo.png"), array('site/index')); ?>
			</div>
             <div class="ad_gg"><img src="css/images/ggc.png" /></div> 
            <div class="language">
				<?php echo CHtml::form(); ?>
					<?php echo CHtml::dropDownList('lang', Yii::app()->language, array(
						'cn' => '简体中文',
				    	'en' => 'English'						),
						array(
							"onchange"=>"this.form.submit();"
						)
					); ?>
				<?php echo CHtml::endForm(); ?>
			</div>
			<div class="login_info">
				<a>heli@transn.com</a><i>|</i>
                <a><?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '帐户管理')), array('user/panel')); ?></a>
                <i>|</i>
                <a><?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '翻译记录')), array('user/trans')); ?></a>
                <i>|</i>
                <a><?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '退出')), array('site/logout')); ?></a> 
			</div>	
        </div>
		
		
		
		<?php echo $content; ?>

		<div style="clear:both"></div>
		<div id="footer">
      <p><?php echo Yii::t('t2b', '© 2005-2013 电商翻译平台 | 京ICP备08001822号'); ?></p>
      <p><?php echo Yii::t('t2b', '客服热线：400-050607-1 客服QQ：1436681558 客服邮箱：kefu@yeedt.com'); ?></p>
		</div>
	</body>
</html>
