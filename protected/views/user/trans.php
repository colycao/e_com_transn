<!--用户中心开始 -->

<div class="custom_wrap">

	<div class="custom_nav">

    	<div class="custom_nav_nr">

        	<ul>

            <li>

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '我的帐户')), array('user/panel')); ?>

            </li>

            <li>

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '翻译记录')), array('user/trans'), array('class' => 'custom_nav_cur')); ?>

            </li>

            <li>

                <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '交易记录')), array('user/charge')); ?>

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

            <tr><th><?php echo Yii::t('t2b', '订单编号'); ?> </th><th><?php echo Yii::t('t2b', '翻译语言'); ?> </th> <th><?php echo Yii::t('t2b', '翻译内容'); ?> </th><th><?php echo Yii::t('t2b', '字数'); ?> </th><th><?php echo Yii::t('t2b', '价格'); ?> </th><th><?php echo Yii::t('t2b', '订单状态'); ?> </th><th><?php echo Yii::t('t2b', '操作'); ?> </th><th><?php echo Yii::t('t2b', '下单时间'); ?> </th></tr>

            <tr><td><?php echo CHtml::link('3123123', array('site/export')); ?></td><td><?php echo Yii::t('t2b', '中文->阿拉伯语'); ?></td> <td><a href="###"><?php echo Yii::t('t2b', '美中深化军事关系但彼此警惕丝毫未'); ?></a></td><td>798</td><td>789.99<?php echo Yii::t('t2b', '元'); ?></td><td><?php echo Yii::t('t2b', '已付款'); ?></td><td><?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '支付')), array('site/goods', 'setup' => 'pay'), array('class' => 'btn_pay')); ?><span class="txt_grey"> | </span><a class="btn_delete"><?php echo Yii::t('t2b', '删除'); ?></a></td><td>2013-05-21

19:02:52</td></tr>

		</table>

        <div class="tab_fanye">第1页，共22页</div>

        <!--右侧内容结束 -->

    	</div>

    </div>

</div>

<!--用户中心结束 -->

