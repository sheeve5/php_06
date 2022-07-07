<?php
/* Smarty version 3.1.30, created on 2022-07-07 15:31:22
  from "C:\xampp\htdocs\php_06\app\views\OtherView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62c6e02a75dec7_23175850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5af57c4ea9cb4f5404029be1a7ff0e2120f7250d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06\\app\\views\\OtherView.tpl',
      1 => 1657200680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_62c6e02a75dec7_23175850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10969143962c6e02a75d375_39106669', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100625955162c6e02a75db61_96070625', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_10969143962c6e02a75d375_39106669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Ta część stopki została wpisana z drugiego szablonu<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_100625955162c6e02a75db61_96070625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <article class="col-sm-12 maincontent">
		<div class="row">
        		<h1 class="page-title">To jest inna strona</h1>
                        <p>Opis tej strony dotyczy poprzedniego cwiczenia<p>
    				
                </div>	
    </article>
	</div>	<!-- /container -->

<?php
}
}
/* {/block 'content'} */
}
