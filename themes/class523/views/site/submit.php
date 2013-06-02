    <div class="content">
    	<div class="order_product">
        	<div class="order_info_do">
        		<ul><li><label>用户名：</label>leo.he@transn.com</li></ul>
        		<ul><li><label>订单号：</label>254689</li></ul>
        		<ul><li><label>字  数：</label><b class="txt_zd">3551字</b></li></ul>
        		<ul><li><label>价  格：</label><b class="txt_zd">890元</b></li></ul>
        		<ul><li><label>耗  时：</label><b class="txt_zd">10小时</b></li><input type="checkbox" />加急
             	</ul>
            </div>
            
        	<div>
            <ul>
        	<li><h3>商家信息<b class="txt_red">（必填）</b></h3></li>
            <li><label>商家名称：</label><input class="input_02" /></li>
            <li><label>联系电话：</label><input class="input_02" /></li>
            <li><label>联系电话：</label><input class="input_02" /></li> 
            <li class="check_piao"><input type="checkbox" />开发票</li>       
        	</ul>
            </div>
            
            <div class="hidden_kfp">
            <ul> 
            <li><h3>发票信息</h3></li>
            <li><label>发票抬头：</label><input class="input_02" /></li>
            <li><label>收 件 人 ：</label><input class="input_02" /></li>
            <li><label>收件地址：</label><input class="input_02" /></li> 
            </ul>
            </div>
        </div>
		<div class="order_do">
        	
            <p class="order_save">
				<?php echo CHtml::link(CHtml::encode("确认订单"), array('site/index'), array('class' => 'btn_yellow_big')); ?>
			</p>
        </div>       
    </div>
</div>
