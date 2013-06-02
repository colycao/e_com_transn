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

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '交易纪录')), array('user/charge'), array('class' => 'custom_nav_cur')); ?>

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

        <table class="tab_custom"  border="0" cellspacing="0" cellpadding="0">

  			<tr><th>交易类型</th><th>订单编号</th> <th>交易金额</th><th>交易时间</th><th>交易方式</th></tr>

            <tr><td>充值</td><td>21323123</td><td>789.99元</td><td>2013-05-13 11:05:11</td><td>支付宝</td></tr>

            <tr><td>充值</td><td>21323123</td><td>789.99元</td><td>2013-05-13 11:05:11</td><td>支付宝</td></tr>

         	<tr><td>充值</td><td>21323123</td><td>789.99元</td><td>2013-05-13 11:05:11</td><td>支付宝</td></tr>

            <tr><td>充值</td><td>21323123</td><td>789.99元</td><td>2013-05-13 11:05:11</td><td>支付宝</td></tr>

            <tr><td>充值</td><td>21323123</td><td>789.99元</td><td>2013-05-13 11:05:11</td><td>支付宝</td></tr>

            <tr><td>充值</td><td>21323123</td><td>789.99元</td><td>2013-05-13 11:05:11</td><td>支付宝</td></tr>

            <tr><td>充值</td><td>21323123</td><td>789.99元</td><td>2013-05-13 11:05:11</td><td>支付宝</td></tr>

         	<tr><td>充值</td><td>21323123</td><td>789.99元</td><td>2013-05-13 11:05:11</td><td>支付宝</td></tr>

            <tr><td>充值</td><td>21323123</td><td>789.99元</td><td>2013-05-13 11:05:11</td><td>支付宝</td></tr>

            <tr><td>充值</td><td>21323123</td><td>789.99元</td><td>2013-05-13 11:05:11</td><td>支付宝</td></tr>

		</table>

        <div class="tab_fanye">第1页，共22页</div>

        <!--右侧内容结束 -->

    	</div>

    </div>

</div>

<!--用户中心结束 -->

