<?php /*%%SmartyHeaderCode:32320545a263021af13-58459868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d413c4f0b26e851e66aaf7128c9065c90ac6661' => 
    array (
      0 => '.\\application\\views\\home\\index.html',
      1 => 1415194624,
      2 => 'file',
    ),
    '2dac4d9817295545839369611f888869faa44b24' => 
    array (
      0 => 'E:\\amp\\wwwroot\\demo\\blog\\application\\views\\home\\common\\layout.html',
      1 => 1415194243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32320545a263021af13-58459868',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_546606132276e4_49963347',
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546606132276e4_49963347')) {function content_546606132276e4_49963347($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_modifier_date_format')) include 'E:\\amp\\wwwroot\\demo\\blog\\framework\\libraries\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>个人博客网站</title>
	
	<style type="text/css">
	#nav{width:730px; height:90px;background-color:lightblue;}
	#main{width:730px;height: 300px;background-color:pink;}
	#fool{width:730px;height: 90px;background-color:lightblue;}
	#left{width:230px;height: 300px;background-color:lightgreen; float:left;}
	#right{width:450px;height: 300px;background-color:lightgray;float:right;}
	</style>
	
</head>
<body>
	<div id='nav'>
		首页、博文、美图、分享
	</div>
	<div id='main'>
	

<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>



	</div>
	<div id='fool'>
		版权
	</div>
</body>
</html><?php }} ?>
