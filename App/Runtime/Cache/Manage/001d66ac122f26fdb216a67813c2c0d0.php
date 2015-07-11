<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel='stylesheet' type="text/css" href="/jiumu/App/Manage/View/Public/css/style.css" />
<script type="text/javascript" src="/jiumu/App/Manage/View/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/jiumu/App/Manage/View/Public/js/common.js"></script>
 <script language="JavaScript">
        <!--
        var URL = '/jiumu/xyhai.php?s=/Model';
        var APP	 = '/jiumu/xyhai.php?s=';
        var SELF='/jiumu/xyhai.php?s=/Model/index';
        var PUBLIC='/jiumu/App/Manage/View/Public';
        //-->
        </script>
</head>
<body>
<div class="main">
    <div class="pos">模型列表</div>    
    <div class="operate">
        <div class="left"><input type="button" onclick="goUrl('<?php echo U('Model/add');?>')" class="btn_blue" value="添加模型">
        <input type="button" onclick="document.getElementById('form_do').submit();" class="btn_blue" value="更新排序"></div>
    </div>
    <div class="list">    
    <form action="<?php echo U('Model/sort');?>" method="post" id="form_do" name="form_do">
        <table width="100%">
            <tr>
                <th><input type="checkbox" id="check"></th>
                <th>编号</th>
                <th>名称</th>
                <th>附加表</th>
                <th>启用</th>
                <th>排序</th>
                <th>操作</th>
            </tr>
			<?php if(is_array($vlist)): foreach($vlist as $key=>$v): ?><tr>
                <td><input type="checkbox" name="key[]" value="<?php echo ($v["id"]); ?>"></td>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["name"]); ?></td>
                <td><?php echo ($v["tablename"]); ?></td>
				<td><?php if($v['status']): ?>是<?php else: ?>否<?php endif; ?></td>
                <td><input type="text" name="sortlist[<?php echo ($v["id"]); ?>]" value="<?php echo ($v["sort"]); ?>" id="sortlist" size="5" /></td>
                <td>
                <a href="<?php echo U('Model/edit', array('id' => $v['id']));?>">修改</a>
                <a href="javascript:;" onclick="toConfirm('<?php echo U('Model/del', array('id' => $v['id']));?>', '确实要删除吗？')">删除</a>
				</td>
            </tr><?php endforeach; endif; ?>
        </table>
        <div class="th" style="clear: both;"> </div>
    </form>
    </div>
</div>
</body>
</html>