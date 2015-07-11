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
        var SELF='/jiumu/xyhai.php?s=/Rbac/node';
        var PUBLIC='/jiumu/App/Manage/View/Public';
        //-->
</script>
</head>
<body>
<div class="main">
    <div class="pos">节点列表</div>    
    <div class="operate">
        <div class="left"><input type="button" onclick="goUrl('<?php echo U('Rbac/addNode');?>')" class="btn_blue" value="添加应用(节点)"></div>
        <div class="left" style="line-height:30px; padding:0px 10px;">节点：应用(level:1)->控制器(level:2)->方法(level:3) </div>
    </div>
    <div class="list">    
        <div id="wrap">
        <?php if(is_array($node)): foreach($node as $key=>$app): ?><div class="app">
        <p><strong <?php if($app['status'] == 0): ?>class="disable"<?php endif; ?>><?php echo ($app["title"]); ?></strong>[<a href="<?php echo U('Rbac/addNode',array('pid' => $app['id'],'level' => 2));?>">添加控制器</a>]
        [<a href="<?php echo U('Rbac/editNode',array('id' => $app['id']));?>">修改</a>]
        <?php if(!$app['child']): ?>[<a href="<?php echo U('Rbac/delNode',array('id' => $app['id']));?>" onclick="del('<?php echo U('Rbac/delNode',array('id' => $app['id']));?>'); return false;">删除</a>]<?php endif; ?>
        </p>


        <?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
            <dt><strong <?php if($action['status'] == 0): ?>class="disable"<?php endif; ?>><?php echo ($action["title"]); ?></strong>[<a href="<?php echo U('Rbac/addNode',array('pid' => $action['id'],'level' => 3));?>">添加方法</a>]
            [<a href="<?php echo U('Rbac/editNode',array('id' => $action['id']));?>">修改</a>]
            <?php if(!$action['child']): ?>[<a href="<?php echo U('Rbac/delNode',array('id' => $action['id']));?>" onclick="del('<?php echo U('Rbac/delNode',array('id' => $action['id']));?>'); return false;">删除</a>]<?php endif; ?>

            </dt>

            <?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd><span <?php if($method['status'] == 0): ?>class="disable"<?php endif; ?>><?php echo ($method["title"]); ?></span>[<a href="<?php echo U('Rbac/editNode',array('id' => $method['id']));?>">修改</a>][<a href="<?php echo U('Rbac/delNode',array('id' => $method['id']));?>" onclick="del('<?php echo U('Rbac/delNode',array('id' => $method['id']));?>'); return false;">删除</a>]</dd><?php endforeach; endif; ?>
        </dl><?php endforeach; endif; ?>

        </div><?php endforeach; endif; ?>
        </div>   

    </div>
</div>
</body>
</html>