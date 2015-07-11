<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel='stylesheet' type="text/css" href="/jiumu/App/Manage/View/Public/css/style.css" />
<script type="text/javascript" src="/jiumu/App/Manage/View/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/jiumu/App/Manage/View/Public/js/common.js"></script>
<script type="text/javascript" src="/jiumu/App/Manage/View/Public/js/jquery.form.min.js"></script>
<script type="text/javascript">
	

</script>
</head>
<body>
<div class="main">
    <div class="pos">修改数据元</div>
	<div class="form">
		<form method='post' id="form_do" name="form_do" action="<?php echo U('Meta/edit');?>">
		<dl>
			<dt>名称标识：</dt>
			<dd>
				<input type="text" name="name" class="inp_large" value="<?php echo ($vo["name"]); ?>" />（由字母、数字和"_"组成,不能重复）
			</dd>
		</dl>
		
		<dl>
			<dt>值：</dt>
			<dd>
				<textarea name="value" class="tarea_default"><?php echo ($vo["value"]); ?></textarea>
			</dd>
		</dl>
		<dl>
			<dt>分组：</dt>
			<dd>
				<input type="text" name="groupid" class="inp_small" value="<?php echo ($vo["groupid"]); ?>" /> (数字)
			</dd>
		</dl>	

		</div>
		<div class="form_b">					
			<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />
			<input type="submit" class="btn_blue" id="submit" value="保存">
			<input type="button" onclick="goUrl('<?php echo U('Meta/index');?>')" class="btn_green" value="取消" />
		</div>
	   </form>
	</div>


</body>
</html>