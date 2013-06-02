<!--用户中心开始 -->

<div class="custom_wrap">

	<div class="custom_nav">

    	<div class="custom_nav_nr">

        	<ul>

            <li>

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '我的帐户')), array('user/panel')); ?>

            </li>

            <li>

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '翻译记录')), array('user/trans')); ?>

            </li>

            <li>

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '交易纪录')), array('user/charge')); ?>

            </li>

           	<li>

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '联系方式')), array('user/info'), array('class' => 'custom_nav_cur')); ?>

            </li>

            </ul>

        </div>

    </div>

    <div class="custom_content">

    	<div class="custom_main">

    	<!--用户中心右侧变动内容 -->

        <p><label><?php echo Yii::t('t2b', '商户名称'); ?>：</label><input class="input_01 w220" /><span class="txt_red"> *</span></p>

        <p><label><?php echo Yii::t('t2b', '手机号码'); ?>：</label><input class="input_01 w220" /><span class="txt_red"> *</span></p>

        <p><label><?php echo Yii::t('t2b', '电子邮箱'); ?>：</label><input class="input_01 w220" /><span class="txt_red"> *</span></p>

        <p><label><?php echo Yii::t('t2b', '发票抬头'); ?>：</label><input class="input_01 w220" /></p>

        <p><label><?php echo Yii::t('t2b', '收 件 人 '); ?>：</label><input class="input_01 w220" /></p>

        <p><label><?php echo Yii::t('t2b', '收件地址'); ?>：</label><input class="input_01 w220" /></p>

        <div class="custom_address_btn"><a class="btn_blue w_80"><?php echo Yii::t('t2b', '保存'); ?></a></div>

        <!--右侧内容结束 -->

    	</div>

    </div>

</div>

<!--用户中心结束 -->

