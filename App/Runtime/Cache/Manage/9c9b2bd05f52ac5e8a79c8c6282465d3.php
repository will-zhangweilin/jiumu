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
        var URL = '/jiumu/xyhai.php?s=/Meta';
        var APP	 = '/jiumu/xyhai.php?s=';
        var SELF='/jiumu/xyhai.php?s=/Meta/index';
        var PUBLIC='/jiumu/App/Manage/View/Public';
        //-->
        </script>
</head>
<body>
<div class="main">
    <div class="pos">数据元管理
    </div>    
    <div class="operate">
        <div class="left"><input type="button" onclick="goUrl('<?php echo U('Meta/add');?>')" class="btn_blue" value="添加数据元"></div>
        <div class="left_pad">
            <form method="post" action="<?php echo U('Meta/index');?>">
                <input type="text" name="keyword" title="数据元名" class="inp_default" value="<?php echo ($keyword); ?>">
                <input type="submit" class="btn_blue" value="查  询">
            </form>
        </div>
    </div>
    <div class="list">    
    <form action="<?php echo U('Meta/sort');?>" method="post" id="form_do" name="form_do">
        <table width="100%">
            <tr>
                <th>编号</th>
                <th>名称</th>
                <th>分组</th>
                <th>操作</th>
            </tr>
			<?php if(is_array($vlist)): foreach($vlist as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td class="aleft"><?php echo ($v["name"]); ?></td>
				<td><?php echo ($v["groupid"]); ?></td>                
                <td>
                <a href="<?php echo U('Meta/edit',array('id' => $v['id']));?>">修改</a>
                <a href="javascript:;" onclick="toConfirm('<?php echo U('Meta/del', array('id' => $v['id']));?>', '确实要删除吗？')">删除</a>
				</td>
            </tr><?php endforeach; endif; ?>
        </table>
        <div class="page" style="clear: both;"><?php echo ($page); ?> </div>
    </form>
    </div>
</div>
</body>
</html>