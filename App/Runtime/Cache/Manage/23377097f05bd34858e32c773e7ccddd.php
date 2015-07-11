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
        var URL = '/jiumu/xyhai.php?s=/Database';
        var APP	 = '/jiumu/xyhai.php?s=';
        var SELF='/jiumu/xyhai.php?s=/Database/index';
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
            <?php if(ACTION_NAME == "index"): ?><input type="button" onclick="doGoBatch('<?php echo U('Database/backup');?>')" class="btn_blue" value="数据库备份">
                <input type="button" onclick="doGoBatch('<?php echo U('Database/optimize', array('batchFlag' => 1));?>')" class="btn_blue" value="数据表优化">
                <input type="button" onclick="doGoBatch('<?php echo U('Database/repair', array('batchFlag' => 1));?>')" class="btn_blue" value="数据表修复">
                <input type="button" onclick="goUrl('<?php echo U('Database/restore');?>')" class="btn_green" value="还原管理">
            <?php else: ?>
                <input type="button" onclick="goUrl('<?php echo U('Database/index');?>')" class="btn_blue" value="返回">
                <input type="button" onclick="doGoBatch('<?php echo U('Database/restore');?>')" class="btn_green" value="还原">
                <input type="button" onclick="doConfirmBatch('<?php echo U('Database/clear');?>', '确实要彻底删除选择项吗？')" class="btn_orange" value="彻底删除"><?php endif; ?>


            
        </div>
    </div>
    <div class="list">    
    <form action="<?php echo U('Database/backup');?>" method="post" id="form_do" name="form_do">
        <table width="100%">
            <tr>
                <th><input type="checkbox" id="check"></th>
                <th>表名</th>
                <th>表用途</th>
                <th>记录行数</th>
                <th>引擎</th>
                <th>字符集</th>
                <th>表大小</th>
                <th>操作</th>
            </tr>
			<?php if(is_array($vlist)): foreach($vlist as $key=>$v): ?><tr>
                <td><input type="checkbox" name="key[]" value="<?php echo ($v["name"]); ?>"></td>
                <td class="aleft"><?php echo ($v["name"]); ?></td>
                <td><?php echo ($v["comment"]); ?></td>
                <td><?php echo ($v["rows"]); ?></td>
                <td><?php echo ($v["engine"]); ?></td>
                <td><?php echo ($v["collation"]); ?></td>
                <td><?php echo ($v["size"]); ?></td>
                <td>
                <a href="<?php echo U('Database/optimize',array('tablename' => $v['name']), '');?>">优化</a>
                <a href="<?php echo U('Database/repair',array('tablename' => $v['name']), '');?>">修复</a>
                <!--a href="<?php echo U('Database/repair',array('tablename' => $v['name']), '');?>">结构</a-->            
				</td>
            </tr><?php endforeach; endif; ?>
        </table>
        <div class="th" style="clear: both;">数据库中共有<?php echo ($tableNum); ?>张表，共计<?php echo ($total); ?></div>
    </form>
    </div>
</div>
</body>
</html>