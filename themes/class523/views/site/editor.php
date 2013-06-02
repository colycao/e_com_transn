<div class="wrap">
	
    <div class="content_editor">
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
                
            </li>
           
            <li style="position:relative;">                
                <label class="item_tit">商品分类：</label>
                <div class="item_parent">
                    <p><input class="input_01 sel_item" value="请选择" /></p>
                    <div class="sel_child">
                        <a href="#">名称11</a>
                        <a href="#">名称22</a>
                        <a href="#">名称11</a>
                        <a href="#" class="last">名称22</a>
                    </div>
                </div>
                <div class="item_parent">
                    <p><input class="input_01 sel_item" value="请选择" /></p>
                    <div class="sel_child">
                        <a href="#">名称11</a>
                        <a href="#">名称22</a>
                        <a href="#">名称11</a>
                        <a href="#" class="last">名称22</a>
                    </div>
                </div>
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
            <li><label>商品名称：</label><input class="input_01 w410" /><span>字数：12</span></li>
            <li><label>供 应 商 ：</label><input class="input_01 w410" /><span>字数：12</span></li>
            <li><label>基本信息：</label><textarea class="input_03"></textarea><span>字数：12</span></li>
            <li><label>商品描述：</label><textarea class="input_03"></textarea><span>字数：12</span></li>
            <li><label>详细参数：</label><textarea class="input_03"></textarea><span>字数：12</span></li>
            <li><label>使用说明：</label><textarea class="input_03"></textarea><span>字数：12</span></li>
            <li><label>售后信息：</label><textarea class="input_03"></textarea><span>字数：12</span></li>
            <li><label>包装清单：</label><textarea class="input_03"></textarea><span>字数：12</span></li>
            <li><label>其他内容：</label><textarea class="input_03"></textarea><span>字数：12</span></li>
        </ul>
        </div>
		<div class="order_do">
            <p class="order_money"><span>合计：<strong>3551</strong> 字</span><span>价格：<strong>890</strong> 元</span></p>
            <p class="order_save">
				<?php echo CHtml::link(CHtml::encode("完   成"), array('site/goods', 'setup' => 'list'), array('class' => 'btn_blue_big fl')); ?>
			</p>
        </div>      
    </div>    
</div>
