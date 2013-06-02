    <div class="content">
    	<div class="order_product">
        <ul>
        	<li style="position:relative; z-index:1;">
                <label class="item_tit">目标语言：</label>
                <div class="item_parent">
                    <p><input class="input_01 sel_item" value="请选择" /></p>
                    <div class="sel_child">
                        <a href="#">名称11</a>
                        <a href="#">名称22</a>
                        <a href="#">名称11</a>
                        <a href="#" class="last">名称22</a>
                    </div>
                </div>
				<?php echo CHtml::link(CHtml::encode("查看已添加列表"), array('site/contract', 'setup' => 'list'), array('class' => 'btn_viewlist')); ?>
            </li>
          
            <li style="position:relative;">                
                <label class="item_tit">合同类型：</label>
                <div class="item_parent">
                    <p><input class="input_01 sel_item" value="请选择" /></p>
                    <div class="sel_child">
                        <a href="#">名称11</a>
                        <a href="#">名称22</a>
                        <a href="#">名称11</a>
                        <a href="#" class="last">名称22</a>
                    </div>
                </div>     
            </li>
            <li><label>上传合同：</label><a class="btn_blue w130">选择文件</a></li>
            <li><label>合同内容：</label><textarea class="input_03" rows="20"></textarea><span>字数：12</span></li>
           
        </ul>
        </div>
		<div class="order_do">
            <p class="order_money"><span>合计：<strong>3551</strong> 字</span><span>价格：<strong>890</strong> 元</span></p>
            <p class="order_save">
				<?php echo CHtml::link(CHtml::encode("保   存"), array('site/contract', 'setup' => 'list'), array('class' => 'btn_blue_big fl')); ?>
				<a class="btn_blue_big fl">保存并继续添加</a>
			</p>
        </div>      
    </div>    
</div>
