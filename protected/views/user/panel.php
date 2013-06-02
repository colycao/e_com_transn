<!--用户中心开始 -->

<div class="custom_wrap">

	<div class="custom_nav">

    	<div class="custom_nav_nr">

        	<ul>

            <li>

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '我的帐户')), array('user/panel'), array('class' => 'custom_nav_cur')); ?>

            </li>

            <li>

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '翻译记录')), array('user/trans')); ?>

            </li>

            <li>

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '交易纪录')), array('user/charge')); ?>

            </li>

           	<li>

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '联系方式')), array('user/info')); ?>

            </li>

            </ul>

        </div>

    </div>

    <div class="custom_content">

    	<div class="custom_main">

    	<!--用户中心右侧变动内容 -->

            <p><?php echo Yii::t('t2b', '会员'); ?>：<span class=" txt_red">coly123@qq.com</span>，<?php echo Yii::t('t2b', '欢迎您！'); ?></p>

            <p><?php echo Yii::t('t2b', '当前账户余额：'); ?><span class=" txt_red">151.88</span><?php echo Yii::t('t2b', '元'); ?> 

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '充值')), array('user/chongzhi'), array('class' => 'btn_blue w_80')); ?>

            </p>

        <!--右侧变动内容结束 -->

    	</div>

    </div>

</div>

<!--用户中心结束 -->

