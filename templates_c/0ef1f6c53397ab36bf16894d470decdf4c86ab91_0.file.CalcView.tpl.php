<?php
/* Smarty version 3.1.30, created on 2022-07-06 22:29:50
  from "C:\xampp\htdocs\php_06\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62c5f0be8326f6_17176025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef1f6c53397ab36bf16894d470decdf4c86ab91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06\\app\\views\\CalcView.tpl',
      1 => 1657138681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_62c5f0be8326f6_17176025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175925767962c5f0be81b439_44188792', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126353400462c5f0be831f42_49522257', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_175925767962c5f0be81b439_44188792 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Ta część stopki została wpisana z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_126353400462c5f0be831f42_49522257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



	<div class="container">
		<div class="row">
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Podaj parametry</h1>
				</header>
				<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="x" type="text" placeholder="Kwota" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Lata" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Procent" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->intrest;?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="btn btn-action" type="submit" value="Oblicz ratę">
							</div>
						</div>
					</form>

			</article>
		</div>
                <div class ="row">
                    <article class="col-sm-4 maincontent">
                        
                        
                        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
                                <h4>Wystąpiły błędy: </h4>
                                <ol class="err">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </ol>
                        <?php }?>

                        
                        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
                                <h4>Informacje: </h4>
                                <ol class="inf">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </ol>
                        <?php }?>

                        <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
                                <h4>Wynik</h4>
                                <p class="res">
                                <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

                                </p>
                        <?php }?>

                    </article>
                </div>
	</div>	<!-- /container -->

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/jquery.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/bootstrap.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/headroom.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/jQuery.headroom.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/template.js.pobrane"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
