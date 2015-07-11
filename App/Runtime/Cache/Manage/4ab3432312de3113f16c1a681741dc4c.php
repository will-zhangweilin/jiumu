<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel='stylesheet' type="text/css" href="/jiumu/App/Manage/View/Public/css/style.css" />
<script type="text/javascript" src="/jiumu/App/Manage/View/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/jiumu/App/Manage/View/Public/js/common.js"></script>
<script type="text/javascript">
	$(function(){
		var validate={flag:1,code:1};
		//验证
		$("input[name='name']").blur(function(){
			checkValidate();	
		});
		$("input[name='title']").blur(function(){
			checkValidate();	
		});

		$("#form_do").submit(function(){

			checkValidate();

			if(validate.flag==0){
				return true;
			}
			
			return false;
		});

		function checkValidate() {

			var name = $("input[name='name']");
			var title = $("input[name='title']");
			if($.trim(name.val())=='' || $.trim(title.val())==''){
				validate.flag = 1;
				
				if($.trim(name.val())==''){
					name.parent().find("span").remove().end().append("<span class='error'>名称不能为空</span>");
				}else {
					name.parent().find("span").remove().end();
				}
				
				if($.trim(title.val())==''){
					title.parent().find("span").remove().end().append("<span class='error'>描述不能为空</span>");
				}else {
					title.parent().find("span").remove().end();
				}
				return ;
			
			}else {
				name.parent().find("span").remove().end();
				title.parent().find("span").remove().end();
			}	

			validate.flag = 0;	
		}

    });
</script>
</head>
<body>
<div class="main">
    <div class="pos">添加<?php echo ($type); ?></div>
	<div class="form">
		<form method='post' id="form_do" name="form_do" action="<?php echo U('Rbac/addNode');?>">
		<dl>
			<dt> <?php echo ($type); ?>名称：</dt>
			<dd>
				<input type="text" name="name" class="inp_one" />
			</dd>
		</dl>
		<dl>
			<dt> <?php echo ($type); ?>描述：</dt>
			<dd>
				<input type="text" name="title" class="inp_one" />
			</dd>
		</dl>
		<dl>
			<dt> 开启：</dt>
			<dd>
				<input type="radio" name="status" value="1" checked="checked"/>开启
				<input type="radio" name="status" value="0"/>关闭
			</dd>
		</dl>		
		<dl>
			<dt> 排序：</dt>
			<dd>
				<input type="text" name="sort" class="inp_one" value="1" />
			</dd>
		</dl>
		</div>
		<div class="form_b">
			<input type="hidden" name="pid" value="<?php echo ($pid); ?>" />
			<input type="hidden" name="level" value="<?php echo ($level); ?>" />
			<input type="submit" class="btn_blue" id="submit" value="提 交">
		</div>
	   </form>
	</div>


</body>
</html>