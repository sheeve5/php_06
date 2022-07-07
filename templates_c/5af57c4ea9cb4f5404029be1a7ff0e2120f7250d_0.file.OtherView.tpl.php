<?php
/* Smarty version 3.1.30, created on 2022-07-06 22:36:33
  from "C:\xampp\htdocs\php_06\app\views\OtherView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62c5f25124b1a6_80769610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5af57c4ea9cb4f5404029be1a7ff0e2120f7250d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06\\app\\views\\OtherView.tpl',
      1 => 1657138651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_62c5f25124b1a6_80769610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206406803162c5f251249471_48136754', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189106372562c5f25124a833_43544840', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_206406803162c5f251249471_48136754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Ta część stopki została wpisana z drugiego szablonu<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_189106372562c5f25124a833_43544840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
		<div class="row">
        		<header class="page-header">
					<h1 class="page-title">To jest inna strona</h1>
                                        
    				</header>
                </div>		
	</div>	<!-- /container -->

<?php
}
}
/* {/block 'content'} */
}
