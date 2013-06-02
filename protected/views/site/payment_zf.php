<!--用户中心开始 -->
<div class="custom_wrap">
	<!--支付开始 -->
    <div class="payment_content">
    	<div class="payment_money">
        	<div class="payment_money_l">
                <h3 class="payment_title"><?php echo Yii::t('t2b', '请输入支付金额'); ?></h3>
                <p><?php echo Yii::t('t2b', '订单金额'); ?>：<span class="txt_red">618.72</span><?php echo Yii::t('t2b', '元'); ?> &nbsp;&nbsp;&nbsp;<?php echo Yii::t('t2b', '账户余额'); ?>：<span class="txt_red">151.28</span><?php echo Yii::t('t2b', '元'); ?> </p>
                <p><label><?php echo Yii::t('t2b', '还需要支付金额'); ?>：</label><input class="input_01" /> <?php echo Yii::t('t2b', '元'); ?></p>
                <span class="pay_error"><?php echo Yii::t('t2b', '支付金额小于订单金额，请重新输入'); ?></span>
			</div>
            <div class="payment_money_r">
                <b><?php echo Yii::t('t2b', '提示：一次充值，多次支付'); ?> </b>
                <p><?php echo Yii::t('t2b', '1、当支付金额大于订单金额， 余额会保存在您的专业翻译账户。<br />2、余额可以下次直接支付，省去多次充值的不便。<br />3、所剩余额，均可电话申请退款。'); ?></p>
            </div>
        </div>
    </div>
    <!--支付结束 -->
</div>
<!--用户中心结束 -->
