<?php
/* Smarty version 3.1.39, created on 2021-03-15 11:45:03
  from 'D:\xampp\htdocs\cw5\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604f3aaf48a3c6_91518469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef990e81edf0846d4cc1d6555e4e0921eccdd6ae' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cw5\\templates\\main.tpl',
      1 => 1615727517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604f3aaf48a3c6_91518469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
	</head>
	<body>

        <header id = "header">
            <h1> <strong> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
 </strong> </h1>
        </header>

        <section id = "main" class = "wrapper">
            <div class = "container">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1499047925604f3aaf489949_45622950', 'content');
?>

            </div>
        </section>

        <footer id = "footer">
            <div class="container">
                <h6>  Wykonał Klaudiusz Wjtuszek </h6> 
                <ul class="copyright">
					<li> &copy; Untitled</li>
					<li> Źródło Szablonu: <a href="http://templated.co">Templated</a></li>
					<li> Wykorzystany Szablon: <a href = "https://templated.co/spatial">Szablon</a></li> 
                </ul>
            </div>
        </footer>

    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
    
    </body>
</html><?php }
/* {block 'content'} */
class Block_1499047925604f3aaf489949_45622950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1499047925604f3aaf489949_45622950',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
}
