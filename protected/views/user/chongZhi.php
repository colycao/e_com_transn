<!--用户中心开始 -->
<div class="custom_wrap">
	<!--充值开始 -->
    <div class="payment_content">
    	<div class="payment_money">
        	<div class="payment_money_l">
        		<h3 class="payment_title"><?php echo Yii::t('t2b', '账户充值'); ?></h3>
            	<p><label><?php echo Yii::t('t2b', '当前余额'); ?>：</label><strong class="txt_red">151.88</strong> <?php echo Yii::t('t2b', '元'); ?></p>
            	<p><label><?php echo Yii::t('t2b', '充值金额'); ?>：</label><input class="input_01" /> <?php echo Yii::t('t2b', '元'); ?></p>
                <span class="pay_error"><?php echo Yii::t('t2b', '元'); ?>支付金额小于订单金额，请重新输入</span>
			</div>
            <div class="payment_money_r">
            	<b><?php echo Yii::t('t2b', '提示：一次充值，多次支付'); ?> </b>
                <p><?php echo Yii::t('t2b', '如果您所充金额超过当次消费金额，所剩余额会存储在您的账户中，之后每次翻译消费都可使用账户中余额直接进行付费，省去了每次充值的麻烦。所剩余额，均可电话申请退款。'); ?></p>
            </div>
        </div>
    </div>
    <!--充值结束 -->
</div>
<!--用户中心结束 -->
