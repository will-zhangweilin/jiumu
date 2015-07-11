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
		var name = $("input[name='name']");
		var tablename = $("input[name='tablename']");


		//验证
		$("input[name='name']").blur(function(){
			if($.trim(name.val())==''){
				name.parent().find("span").remove().end().append("<span class='error'>名称不能为空</span>");
			}else {
				name.parent().find("span").remove().end();
			}	
		});


		tablename.blur(function(){
			if($.trim(tablename.val())==''){
				tablename.parent().find("span").remove().end().append("<span class='error'>附加表不能为空</span>");
			}else {
				tablename.parent().find("span").remove().end();
			}	
		});

		$("#form_do").submit(function(){

			if($.trim(name.val())==''){
				name.parent().find("span").remove().end().append("<span class='error'>名称不能为空</span>");
				return false;
			}else {
				name.parent().find("span").remove().end();			}

			if($.trim(tablename.val())==''){
				tablename.parent().find("span").remove().end().append("<span class='error'>附加表不能为空</span>");
				return false;
			}else {
				tablename.parent().find("span").remove().end();
			}	
			
			return true;
		});

		

    });
</script>
</head>
<body>
<div class="main">
    <div class="pos">添加内容模型</div>
	<div class="form">
		<form method='post' id="form_do" name="form_do" action="<?php echo U('Model/edit');?>">
		<dl>
			<dt> 模型名称：</dt>
			<dd>
				<input type="text" name="name" class="inp_one" value="<?php echo ($vo["name"]); ?>" />
			</dd>
		</dl>
		<dl>
			<dt> 附加表：</dt>
			<dd>
				<input type="text" name="tablename" class="inp_one" value="<?php echo ($vo["tablename"]); ?>" /> (表名小写，去掉默认表前缀)
			</dd>
		</dl>	
		<dl>
			<dt>列表模板：</dt>
			<dd>
				<select name="template_list">
					<?php if(is_array($styleListList)): foreach($styleListList as $key=>$v): ?><option value="<?php echo ($v); ?>" <?php if($v == $vo['template_list']): ?>selected="selected"<?php endif; ?>><?php echo ($v); ?></option><?php endforeach; endif; ?>
				</select>
			</dd>
		</dl>
		<dl>
			<dt>内容页模板：</dt>
			<dd>
				<select name="template_show">
					<?php if(is_array($styleShowList)): foreach($styleShowList as $key=>$v): ?><option value="<?php echo ($v); ?>" <?php if($v == $vo['template_show']): ?>selected="selected"<?php endif; ?>><?php echo ($v); ?></option><?php endforeach; endif; ?>
				</select>
			</dd>
		</dl>	
		<dl>
			<dt> 描述：</dt>
			<dd>
				<textarea name="description" class="tarea_default"><?php echo ($vo["description"]); ?></textarea>
			</dd>
		</dl>
		<dl>
			<dt> 启用：</dt>
			<dd>
				<input type="radio" name="status" value="1" <?php if($vo['status'] == 1): ?>checked="checked"<?php endif; ?> />启用
				<input type="radio" name="status" value="0" <?php if($vo['status'] == 0): ?>checked="checked"<?php endif; ?> />禁用
			</dd>
		</dl>		
		<dl>
			<dt> 排序：</dt>
			<dd>
				<input type="text" name="sort" class="inp_small"  value="<?php echo ($vo["sort"]); ?>" />
			</dd>
		</dl>
		<div class="form_b">
			<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />
			<input type="submit" class="btn_blue" id="submit" value="提 交">
		</div>
	   </form>
	</div>
</div>


</body>
</html>