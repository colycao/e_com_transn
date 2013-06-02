    <div class="content">
     <div class="order_product">
    	<div class="cont_info">
    <ul class="list_tit">
        <li class="name">名称</li>
        <li>字数</li>
        <li>价格</li>
        <li class="opar">操作</li>
        
    </ul>
    <!-- lists start -->
    <div id="lists">
        <ul class="list">
            <li class="name">xx产品介绍xx产品介绍xx产品介绍xx产品介绍xx产品介绍xx产品介绍</li>
            <li>PJ002751</li>
          <li>英 - 日</li>
            <li class="opar last">
				<a class="btn_blue fl btn_wid100 btn_del w_80">删除</a>
				<!-- <a class="btn_blue fl btn_wid100 btn_del w_80">编辑</a> -->
				<?php echo CHtml::link(CHtml::encode("编辑"), array('site/edit'), array('class' => 'btn_blue fl btn_wid100 btn_del w_80')); ?>
				
			</li>
            
        </ul>
                <ul class="list">
            <li class="name">xx产品介绍xx产品介绍xx产品介绍xx产品介绍xx产品介绍xx产品介绍</li>
            <li>PJ002751</li>
          <li>英 - 日</li>
            <li class="opar last"><a class="btn_blue fl btn_wid100 btn_del w_80">删除</a><a class="btn_blue fl btn_wid100 btn_del w_80">编辑</a></li>
            
        </ul>


                   
    </div>
    <!-- lists end -->
    <!-- pages start --><!-- pages end -->
   
</div>
		<div class="order_do">
        	<p class="order_money"><span>合计：<strong>3551</strong> 字</span><span>价格：<strong>890</strong> 元</span></p>
        </div>  
        <div class="form_opr">
			<?php echo CHtml::link(CHtml::encode("提交翻译"), array('site/submit'), array('class' => 'btn_yellow_big fl btn_upload')); ?>
			<a class="btn_blue_big fl btn_del">继续添加</a>
		</div>     
    </div>
  </div> 
</div>