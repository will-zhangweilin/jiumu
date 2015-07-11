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
        var URL = '/jiumu/xyhai.php?s=/ClearHtml';
        var APP	 = '/jiumu/xyhai.php?s=';
        var SELF='/jiumu/xyhai.php?s=/ClearHtml/home';
        var PUBLIC='/jiumu/App/Manage/View/Public';
        //-->
        </script>
</head>
<body>
<div class="main">
    <div class="pos"><?php echo ($type); ?> </div>
    <?php if(ACTION_NAME == "all"): ?><div class="sub"><span>说明：</span>
        只有开启静态缓存，才能使用此功能。 一键更新全站静态缓存(Html)。
    </div> 
    <div class="operate">
        <div class="left">
            <form action="" method="post" id="form_do" name="form_do">
                <input type="button" onclick="doGoSubmit('<?php echo U('ClearHtml/all');?>', 'form_do')" class="btn_green" value="开始更新全站">
            </form>
                   
        </div>   
    </div><?php endif; ?>


    <?php if(ACTION_NAME == "home"): ?><div class="sub"><span>说明：</span>
        只有开启静态缓存，才能使用此功能。 更新首页静态缓存(Html)。
    </div> 
    <div class="operate">
        <div class="left">
            <form action="" method="post" id="form_do" name="form_do">
                <input type="button" onclick="doGoSubmit('<?php echo U('ClearHtml/home');?>', 'form_do')" class="btn_blue" value="开始更新首页">
            </form>
                   
        </div>   
    </div><?php endif; ?>


    <?php if(ACTION_NAME == "lists"): ?><div class="sub"><span>说明：</span>
        只有开启静态缓存，才能使用此功能。 更新栏目列表静态缓存(Html)。
    </div> 
    <div class="operate">
        <div class="left">
                <input type="button" onclick="doGoBatch('<?php echo U('ClearHtml/lists');?>')" class="btn_blue" value="更新选中的栏目">
                <input type="button" onclick="doGoSubmit('<?php echo U('ClearHtml/lists', array('isall' => 1));?>', 'form_do')" class="btn_green" value="一键更新所有栏目">

        </div>   
    </div>
    <div class="list">   

    <form action="<?php echo U('ClearHtml/lists');?>" method="post" id="form_do" name="form_do">
        <table width="100%">
            <tr>
                <th width="50"><input type="checkbox" id="check"></th>
                <th class="aleft">栏目</th>
            </tr>
            <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
                <td><input type="checkbox" name="key[]" value="<?php echo ($v["id"]); ?>"></td>
                <td class="aleft"><?php echo ($v["delimiter"]); if($v['pid'] != 0): ?>├─<?php endif; echo ($v["name"]); ?></td>
            </tr><?php endforeach; endif; ?>
        </table>
        <div class="th" style="clear: both;"> </div>
    </form> 
   
    </div><?php endif; ?>


    <?php if(ACTION_NAME == "shows"): ?><div class="sub"><span>说明：</span>
        只有开启静态缓存，才能使用此功能。 更新文档(内容页)静态缓存(Html)。
    </div> 
    <div class="operate">
        <div class="left">
                <input type="button" onclick="doGoBatch('<?php echo U('ClearHtml/shows');?>')" class="btn_blue" value="更新选中的栏目下文档">
                <input type="button" onclick="doGoSubmit('<?php echo U('ClearHtml/shows', array('isall' => 1));?>', 'form_do')" class="btn_green" value="一键更新所有文档">

        </div>   
    </div>
    <div class="list">   

    <form action="<?php echo U('ClearHtml/shows');?>" method="post" id="form_do" name="form_do">
        <table width="100%">
            <tr>
                <th width="50"><input type="checkbox" id="check"></th>
                <th class="aleft">栏目</th>
            </tr>
            <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
                <td><input type="checkbox" name="key[]" value="<?php echo ($v["id"]); ?>" <?php if($v["tablename"] == 'page'): ?>disabled="disabled"<?php endif; ?></td>
                <td class="aleft"><?php echo ($v["delimiter"]); if($v['pid'] != 0): ?>├─<?php endif; echo ($v["name"]); ?></td>
            </tr><?php endforeach; endif; ?>
        </table>
        <div class="th" style="clear: both;"> </div>
    </form> 
   
    </div><?php endif; ?>


    <?php if(ACTION_NAME == "special"): ?><div class="sub"><span>说明：</span>
        只有开启静态缓存，才能使用此功能。 更新专题静态缓存(Html)。
    </div> 
    <div class="operate">
        <div class="left">
            <form action="" method="post" id="form_do" name="form_do">
                <input type="button" onclick="doGoSubmit('<?php echo U('ClearHtml/special');?>', 'form_do')" class="btn_blue" value="更新专题列表">
                <input type="button" onclick="doGoSubmit('<?php echo U('ClearHtml/special', array('isall' => 1));?>', 'form_do')" class="btn_green" value="一键更新所有专题">
            </form>
                   
        </div>   
    </div><?php endif; ?>

</div>
</body>
</html>