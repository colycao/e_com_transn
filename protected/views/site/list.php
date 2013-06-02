    <div class="content">
     <div class="order_product">
    	<div class="cont_info">
    <ul class="list_tit">
      <li class="name"><?php echo Yii::t('t2b', '名称'); ?></li>
      <li><?php echo Yii::t('t2b', '字数'); ?></li>
      <li><?php echo Yii::t('t2b', '价格'); ?></li>
      <li class="opar"><?php echo Yii::t('t2b', '操作'); ?></li>
    </ul>
    <!-- lists start -->
    <div id="lists">
        <ul class="list">
            <li class="name">xx产品介绍xx产品介绍xx产品介绍xx产品介绍xx产品介绍xx产品介绍</li>
            <li>PJ002751</li>
          <li>英 - 日</li>
            <li class="opar last">
              <a class="btn_blue fl btn_wid100 btn_del w_80"><?php echo Yii::t('t2b', '删除'); ?></a>
				    <!-- <a class="btn_blue fl btn_wid100 btn_del w_80">编辑</a> -->
            <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '编辑')), array('site/goods', 'setup' => 'edit'), array('class' => 'btn_blue fl btn_wid100 btn_del w_80')); ?>
			    </li>
      </ul>

        <ul class="list">
            <li class="name">xx产品介绍xx产品介绍xx产品介绍xx产品介绍xx产品介绍xx产品介绍</li>
            <li>PJ002751</li>
          <li>英 - 日</li>
            <li class="opar last">
              <a class="btn_blue fl btn_wid100 btn_del w_80"><?php echo Yii::t('t2b', '删除'); ?></a>
				    <!-- <a class="btn_blue fl btn_wid100 btn_del w_80">编辑</a> -->
            <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '编辑')), array('site/goods', 'setup' => 'edit'), array('class' => 'btn_blue fl btn_wid100 btn_del w_80')); ?>
			    </li>
      </ul>

    </div>
    <!-- lists end -->
    <!-- pages start --><!-- pages end -->
</div>

    <div class="order_do">
    <p class="order_money"><span><?php echo Yii::t('t2b', '合计'); ?>：<strong>3551</strong> <?php echo Yii::t('t2b', '字'); ?></span><span><?php echo Yii::t('t2b', '价格'); ?>：<strong>890</strong> <?php echo Yii::t('t2b', '元'); ?></span></p>
        </div>
        <div class="form_opr">
          <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '提交翻译')), array('site/goods', 'setup' => 'submit'), array('class' => 'btn_yellow_big fl btn_upload')); ?>
          <?php echo CHtml::link(CHtml::encode(Yii::t('t2b', '继续添加')), array('site/goods'), array('class' => 'btn_blue_big fl btn_del')); ?>
        </div>

    </div>
</div>
