    <div class="content">
    	<div class="order_product">
        <ul>
        	<li style="position:relative; z-index:1;">
                <label class="item_tit"><?php echo Yii::t('t2b', '目标语言'); ?>：</label>
                <div class="item_parent">
                  <p><input class="input_01 sel_item" value="<?php echo Yii::t('t2b', '请选择'); ?>" /></p>
                    <div class="sel_child">
                        <a href="#">名称11</a>
                        <a href="#">名称22</a>
                        <a href="#">名称11</a>
                        <a href="#" class="last">名称22</a>
                    </div>
                </div>
<!--
				<?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '查看已添加列表')), array('site/goods', 'setup' => 'list'), array('class' => 'btn_viewlist')); ?>
-->
            </li>
            <li style="position:relative;">
            <label class="item_tit"><?php echo Yii::t('t2b', '合同类型'); ?>：</label>
                <div class="item_parent">
                  <p><input class="input_01 sel_item" value="<?php echo Yii::t('t2b', '请选择'); ?>" /></p>
                    <div class="sel_child">
                        <a href="#">名称11</a>
                        <a href="#">名称22</a>
                        <a href="#">名称11</a>
                        <a href="#" class="last">名称22</a>
                    </div>
                </div>
            </li>
            <li><label><?php echo Yii::t('t2b', '上传合同'); ?>：</label><a class="btn_blue w130"><?php echo Yii::t('t2b', '选择文件'); ?></a></li>
            <li><label><?php echo Yii::t('t2b', '合同内容'); ?>：</label><textarea class="input_03" rows="20"></textarea><span><?php echo Yii::t('t2b', '字数'); ?>：12</span></li>
        </ul>
      </div>
		<div class="order_do">
<!--
    <p class="order_money"><span><?php echo Yii::t('t2b', '合计'); ?>：<strong>3551</strong> <?php echo Yii::t('t2b', '字'); ?></span><span><?php echo Yii::t('t2b', '价格'); ?>：<strong>890</strong> <?php echo Yii::t('t2b', '元'); ?></span></p>
-->
            <p class="order_save">
				<?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '保   存')), array('site/contract', 'setup' => 'contract_submit'), array('class' => 'btn_blue_big fl')); ?>
      <!-- <a class="btn_blue_big fl"><?php echo Yii::t('t2b', '保存并继续添加'); ?></a> -->
			</p>
        </div>
    </div>
</div>
