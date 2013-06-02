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
				<?php echo CHtml::link(CHtml::encode("查看已添加列表"), array('site/document', 'setup' => 'list'), array('class' => 'btn_viewlist')); ?>
            </li>
            
            <li><label>提交文档：</label><a class="btn_blue w130">选择文档</a></li>
            <li><p class="suojin">（请上传doc、docx、txt、pdf、rar、zip格式的文件。<br />如有多个文件，请打包后上传，上传文件大小不能超过20M。）</p></li>
            <li><label>其他需求：</label><textarea class="input_03" rows="10"></textarea></li>
            <li><p class="suojin">（如您对交稿时间，更多翻译语种等方面的要求）</p></li>
           
        </ul>
        </div>
		<div class="order_do">
            <p class="order_money"><span>合计：<strong>3551</strong> 字</span><span>价格：<strong>890</strong> 元</span></p>
            <p class="order_save">
				<?php echo CHtml::link(CHtml::encode("保   存"), array('site/document', 'setup' => 'list'), array('class' => 'btn_blue_big fl')); ?>
				<a class="btn_blue_big fl">保存并继续添加</a>
			</p>
        </div>      
    </div>    
</div>