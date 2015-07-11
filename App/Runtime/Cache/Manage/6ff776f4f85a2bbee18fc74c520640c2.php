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
        var URL = '/jiumu/xyhai.php?s=/Member';
        var APP	 = '/jiumu/xyhai.php?s=';
        var SELF='/jiumu/xyhai.php?s=/Member/index';
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
            <input type="button" onclick="goUrl('<?php echo U('Member/add');?>')" class="btn_blue" value="添加会员">
            <input type="button" onclick="doConfirmBatch('<?php echo U('Member/del', array('batchFlag' => 1));?>', '确实要删除选择项吗？')" class="btn_blue" value="删除">      
        </div>
        <?php if(ACTION_NAME == "index"): ?><div class="left_pad">
            <form method="post" action="<?php echo U('Member/index');?>">
                <input type="text" name="keyword" title="关键字" class="inp_default" value="<?php echo ($keyword); ?>">
                <input type="submit" class="btn_blue" value="查  询">
            </form>
        </div><?php endif; ?>
    </div>
    <div class="list">    
    <form action="<?php echo U('Member/delAll');?>" method="post" id="form_do" name="form_do">
        <table width="100%">
            <tr>
                <th><input type="checkbox" id="check"></th>
                <th>编号</th>
                <th>邮箱</th>
                <th>昵称</th>
                <th>会员组</th>
                <th>登录时间</th>
                <th>登录ip</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
			<?php if(is_array($vlist)): foreach($vlist as $key=>$v): ?><tr>
                <td><input type="checkbox" name="key[]" value="<?php echo ($v["id"]); ?>"></td>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["email"]); ?></td>
                <td><?php echo ($v["nickname"]); ?></td>
                <td><?php echo ($v["groupname"]); ?></td>
                <td><?php echo (date('Y-m-d H:i:s',$v["logintime"])); ?></td>
                <td><?php echo ($v["loginip"]); ?></td>
                <td><?php if($v['islock']): ?>锁定<?php else: ?>正常<?php endif; ?></td>
                <td>
                    <a href="<?php echo U('Member/person',array('id' => $v['id']), '');?>">详情</a>
                    <a href="<?php echo U('Member/edit',array('id' => $v['id']), '');?>">编辑</a>
                    <a href="javascript:;" onclick="toConfirm('<?php echo U('Member/del',array('id' => $v['id']), '');?>', '确实要删除吗？')">删除</a>
				</td>
            </tr><?php endforeach; endif; ?>
        </table>
        <div class="page" style="clear: both;"><?php echo ($page); ?></div>
    </form>
    </div>
</div>
</body>
</html>