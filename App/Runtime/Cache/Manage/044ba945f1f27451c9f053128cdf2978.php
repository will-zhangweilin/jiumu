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
        var URL = '/jiumu/xyhai.php?s=/Membergroup';
        var APP	 = '/jiumu/xyhai.php?s=';
        var SELF='/jiumu/xyhai.php?s=/Membergroup/index';
        var PUBLIC='/jiumu/App/Manage/View/Public';
        //-->
        </script>
</head>
<body>
<div class="main">
    <div class="pos"><?php echo ($type); ?>
    </div>
    <div class="operate">
        <div class="left">
            <input type="button" onclick="goUrl('<?php echo U('Membergroup/add');?>')" class="btn_blue" value="添加会员组">
            <input type="button" onclick="doConfirmBatch('<?php echo U('Membergroup/del', array('batchFlag' => 1));?>', '确实要删除选择项吗？')" class="btn_blue" value="删除">      
        </div>
    </div>
    <div class="list">    
    <form action="<?php echo U('Membergroup/delAll');?>" method="post" id="form_do" name="form_do">
        <table width="100%">
            <tr>
                <th><input type="checkbox" id="check"></th>
                <th>编号</th>
                <th>组名</th>
                <th>级别值</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
			<?php if(is_array($vlist)): foreach($vlist as $key=>$v): ?><tr>
                <td><input type="checkbox" name="key[]" value="<?php echo ($v["id"]); ?>" <?php if($v['id'] < 4): ?>disabled="disabled"<?php endif; ?>></td>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["name"]); ?></td>
                <td><?php echo ($v["rank"]); ?></td>
                <td><?php if($v['status']): ?>禁用<?php else: ?>正常<?php endif; ?></td>
                <td>
                    <a href="<?php echo U('Membergroup/edit',array('id' => $v['id']), '');?>">编辑</a>
                    <?php if($v['id'] > 3): ?><a href="<?php echo U('Membergroup/del',array('id' => $v['id']), '');?>">删除</a><?php endif; ?>
				</td>
            </tr><?php endforeach; endif; ?>
        </table>
        <div class="page" style="clear: both;"><?php echo ($page); ?></div>
    </form>
    </div>
</div>
</body>
</html>