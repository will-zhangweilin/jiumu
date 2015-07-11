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
        var URL = '/jiumu/xyhai.php?s=/Menu';
        var APP	 = '/jiumu/xyhai.php?s=';
        var SELF='/jiumu/xyhai.php?s=/Menu/index';
        var PUBLIC='/jiumu/App/Manage/View/Public';
        //-->
        </script>
</head>
<body>
<div class="main">
    <div class="pos">菜单列表</div>    
    <div class="operate">
        <div class="left"><input type="button" onclick="goUrl('<?php echo U('Menu/add');?>')" class="btn_blue" value="添加菜单">
        <input type="button" onclick="doGoSubmit('<?php echo U('Menu/sort');?>','form_do')" class="btn_blue" value="更新排序" />
        <input type="button" onclick="doGoSubmit('<?php echo U('Menu/qk');?>','form_do')" class="btn_blue" value="更新快捷面板" />
    </div>
    </div>
    <div class="list">   
    <form action="<?php echo U('Menu/sort');?>" method="post" id="form_do" name="form_do">
        <table width="100%">
            <tr>
                <th>编号</th>
                <th>名称</th>
                <th>显示</th>
                <th>排序</th>
                <th>快捷</th>
                <th>操作</th>
            </tr>
			<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td class="aleft"><?php echo ($v["delimiter"]); if($v['pid'] != 0): ?>├─<?php endif; echo ($v["name"]); ?></td>
   				<td><?php if($v['status']): ?>是<?php else: ?>否<?php endif; ?></td>        
                <td><input type="text" name="sortlist[<?php echo ($v["id"]); ?>]" value="<?php echo ($v["sort"]); ?>" id="sortlist" size="5"></td>
                <td><input type="checkbox" name="quicklist[]" value="<?php echo ($v["id"]); ?>" <?php if(!empty($v['quick'])): ?>checked="checked"<?php endif; ?> <?php if($v['level'] != 3): ?>disabled="disabled"<?php endif; ?> /></td>
                <td>
                <?php if(in_array($v['id'],array(6,7))): ?><a class="disable">添加子菜单</a>
                    <a class="disable">修改</a>
                    <a class="disable">删除</a>
                <?php elseif($v['id'] == 1): ?>
                    <a href="<?php echo U('Menu/add',array('pid' => $v['id']));?>">添加子菜单</a>
                    <a class="disable">修改</a>
                    <a class="disable">删除</a>
                <?php else: ?>
                    <a href="<?php echo U('Menu/add',array('pid' => $v['id']));?>">添加子菜单</a>
                    <a href="<?php echo U('Menu/edit',array('id' => $v['id']));?>">修改</a>
                    <a href="javascript:;" onclick="toConfirm('<?php echo U('Menu/del', array('id' => $v['id']));?>', '确实要删除吗？')">删除</a><?php endif; ?>
				</td>
            </tr><?php endforeach; endif; ?>
        </table>
        <div class="page" style="clear: both;"> </div>
    </form>
    </div>
</div>
</body>
</html>