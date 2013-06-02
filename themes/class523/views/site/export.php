<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>翻译结果导出</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
    $('.sel_item').click(function(e){
        e.stopPropagation();
        $(this).parent().next('.sel_child').slideToggle(200);
        $(this).parent().next('.sel_child').children('a').click(function(){
            var _val = $(this).html();
            $(this).parent().prev('p').children('input').val(_val);
            $(this).parent().hide();
        });
    });

    //点击空白处隐藏弹出层
     $(document).click(function(e){
        var target  = $(e.target);
        if(target.closest(".sel_child").length == 0){
            $(".sel_child").slideUp(300);
        }
     });
});
</script>
</head>

<body>
<div id="top"> 
	<div class="logo"><a href="index.html"><img src="css/images/logo.png" /></a></div> 
    <div class="nav"><ul><li><a class="nav_01 hover" href="index.html">商品翻译</a></li><li><a class="nav_02">合同翻译</a></li><li><a class="nav_03">文档翻译</a></li></ul></div>
    <div class="login_info"><a>heli@transn.com</a><i>|</i><a>账户管理</a><i>|</i><a>翻译记录</a><i>|</i><a>退出</a></div>
</div>
<div class="wrap"> 
	
    <div class="export_content">
    	<div class="order_product">	
        	<!--左边开始 -->
        	<div class="export_content_left">
        	<p class="export_resulet_tilte">译前</p>
        	<ul>
        		<li style="position:relative; z-index:1;">
                <label class="item_tit">目标语言：</label>
                	<div class="item_parent">
                    	<p><input class="input_01" value="123" /></p>
                	</div>
            	</li>
            
            	<li style="position:relative;">                
                	<label class="item_tit">商品分类：</label>
                	<div class="item_parent">
                    	<p><input class="input_01" value="111" /></p>  
                	</div>
                	<div class="item_parent">
                    	<p><input class="input_01" value="111" /></p>            
                	</div>
                	<div class="item_parent">
                    	<p><input class="input_01" value="111" /></p>
                   
                	</div>
            	</li>
            	<li><label>商品名称：</label><input class="input_01 w410" /></li>
            	<li><label>供 应 商 ：</label><input class="input_01 w410" /></li>
            	<li><label>基本信息：</label><textarea class="input_03"></textarea></li>
            	<li><label>商品描述：</label><textarea class="input_03"></textarea></li>
            	<li><label>详细参数：</label><textarea class="input_03"></textarea></li>
            	<li><label>使用说明：</label><textarea class="input_03"></textarea></li>
            	<li><label>售后信息：</label><textarea class="input_03"></textarea></li>
            	<li><label>包装清单：</label><textarea class="input_03"></textarea></li>
            	<li><label>其他内容：</label><textarea class="input_03"></textarea></li>
        	</ul>
        </div>
        <!--左边完结 -->
        
        <!--右边开始 -->
        	<div class="export_content_right">
        	<p class="export_resulet_tilte">译后</p>
        	<ul>
        		<li style="position:relative; z-index:1;">
                <label class="item_tit">目标语言：</label>
                	<div class="item_parent">
                    	<p><input class="input_01" value="123" /></p>
                	</div>
            	</li>
            
            	<li style="position:relative;">                
                	<label class="item_tit">商品分类：</label>
                	<div class="item_parent">
                    	<p><input class="input_01" value="111" /></p>  
                	</div>
                	<div class="item_parent">
                    	<p><input class="input_01" value="111" /></p>            
                	</div>
                	<div class="item_parent">
                    	<p><input class="input_01" value="111" /></p>
                   
                	</div>
            	</li>
            	<li><label>商品名称：</label><input class="input_01 w410" /></li>
            	<li><label>供 应 商 ：</label><input class="input_01 w410" /></li>
            	<li><label>基本信息：</label><textarea class="input_03"></textarea></li>
            	<li><label>商品描述：</label><textarea class="input_03"></textarea></li>
            	<li><label>详细参数：</label><textarea class="input_03"></textarea></li>
            	<li><label>使用说明：</label><textarea class="input_03"></textarea></li>
            	<li><label>售后信息：</label><textarea class="input_03"></textarea></li>
            	<li><label>包装清单：</label><textarea class="input_03"></textarea></li>
            	<li><label>其他内容：</label><textarea class="input_03"></textarea></li>
        	</ul>
        </div>
        <!--右边完结 -->
        <div style="clear:both"></div>
        <div class="f_middle"><a class="btn_export">一键导出EXCEL</a></div>
      </div>    
    </div>    
</div>


<div id="footer">
	<p>© 2005-2013 电商翻译平台  |  京ICP备08001822号</p>
    <p>客服热线：400-050607-1    客服QQ：1436681558    客服邮箱：kefu@yeedt.com  </p>
</div>
</body>
</html>
