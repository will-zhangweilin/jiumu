<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel='stylesheet' type="text/css" href="/jiumu/App/Manage/View/Public/css/style.css" />
<script type="text/javascript" src="/jiumu/App/Manage/View/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/jiumu/App/Manage/View/Public/js/common.js"></script>
<script type="text/javascript" src="/jiumu/App/Manage/View/Public/js/jquery.form.min.js"></script>
</head>
<body>
<div class="main">
    <div class="pos">修改联动分组</div>
	<div class="form">
		<form method='post' id="form_do" name="form_do" action="<?php echo U('Itemgroup/edit');?>">
		<dl>
			<dt>组名：</dt>
			<dd>
				<input type="text" name="remark" class="inp_one" value="<?php echo ($vo["remark"]); ?>" />
			</dd>
		</dl>
		<dl>
			<dt>英文组名：</dt>
			<dd>
				<input type="text" name="name" class="inp_one" value="<?php echo ($vo["name"]); ?>" /><span class="tip">英文字母|拼音</span>
			</dd>
		</dl>
		<dl>
			<dt> 状态：</dt>
			<dd>
				<input type="radio" name="status" value="0" <?php if($vo['status'] == 0): ?>checked="checked"<?php endif; ?> />开启
				&nbsp;&nbsp;
				<input type="radio" name="status" value="1" <?php if($vo['status'] == 1): ?>checked="checked"<?php endif; ?> />禁用
			</dd>
		</dl>
		</div>
		<div class="form_b">
			<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />		
			<input type="submit" class="btn_blue" id="submit" value="提 交">
		</div>
	   </form>
	</div>


</body>
</html>