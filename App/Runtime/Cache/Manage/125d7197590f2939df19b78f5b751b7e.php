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
        var URL = '/jiumu/xyhai.php?s=/Rbac';
        var APP	 = '/jiumu/xyhai.php?s=';
        var SELF='/jiumu/xyhai.php?s=/Rbac/role';
        var PUBLIC='/jiumu/App/Manage/View/Public';
        //-->
        </script>
</head>
<body>
<div class="main">
    <div class="pos">用户组列表</div>    
    <div class="operate">
        <div class="left"><input type="button" onclick="goUrl('<?php echo U('Rbac/addRole');?>')" class="btn_blue" value="添加用户组">
        <input type="button" onclick="doConfirmBatch('<?php echo U('Rbac/delRole', array('batchFlag' => 1));?>','确实要删除选择项吗？')" class="btn_blue" value="删除选中"></div>
        <div class="left_pad">
            <form method="post" action="<?php echo U('Rbac/role');?>">
                <input type="text" name="keyword" title="关键字" class="inp_default" value="<?php echo ($keyword); ?>">
                <input type="submit" class="btn_blue" value="查  询">
            </form>
        </div>
    </div>
    <div class="list">    
    <form action="<?php echo U('Rbac/delRole');?>" method="post" id="form_do" name="form_do">
        <table width="100%">
            <tr>
                <th><input type="checkbox" id="check"></th>
                <th>编号</th>
                <th>用户组名称</th>
                <th>描述</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
			<?php if(is_array($role)): foreach($role as $key=>$v): ?><tr>
                <td><input type="checkbox" name="key[]" value="<?php echo ($v["id"]); ?>"></td>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["name"]); ?></td>
                <td><?php echo ($v["remark"]); ?></td>
                <td><?php if($v['status']): ?>是<?php else: ?>否<?php endif; ?></td>
                <td>
                <a href="<?php echo U('Rbac/access',array('rid' => $v['id']),'');?>">权限设置</a>
				<a href="<?php echo U('Rbac/addRole',array('id' => $v['id']),'');?>">修改</a>
				<a href="<?php echo U('Rbac/delRole',array('id' => $v['id']),'');?>" onclick="del('<?php echo U('Rbac/delRole',array('id' => $v['id']),'');?>'); return false;">删除</a>
				</td>
            </tr><?php endforeach; endif; ?>
        </table>
        <div class="page" style="clear: both;"><?php echo ($page); ?></div>
    </form>
    </div>
</div>
</body>
</html>