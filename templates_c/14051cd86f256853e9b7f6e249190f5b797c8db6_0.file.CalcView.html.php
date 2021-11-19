<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-17 00:00:37
  from 'C:\xampp\htdocs\PHP_6\app\views\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61943815aef1e1_60889083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14051cd86f256853e9b7f6e249190f5b797c8db6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_6\\app\\views\\CalcView.html',
      1 => 1637103635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61943815aef1e1_60889083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105238306661943815adedd9_05905681', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74423157361943815adfae4_09794992', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'footer'} */
class Block_105238306661943815adedd9_05905681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_105238306661943815adedd9_05905681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_74423157361943815adfae4_09794992 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_74423157361943815adfae4_09794992',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h1>Prosty kalkulator kredytowy</h1>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
    <fieldset>
      
	
	<label for="x"><br>Kwota kredytu:</br> </label>
        <input id="id_x" type="number" name="x" min = "0" placeholder="25000" value='<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
' />
	<label for="id_y"><br>Okres spłaty w miesiącach: </br> </label>
	<input id="id_y" type="number" name="y" min = "0" placeholder ="48" value='<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
'/>
        <label for="id_z"><br>Oprocentowanie:</br> </label>
        <input id="id_z" type="number" name="z" step = "0.01" min = "0" max ="100" placeholder="5" value='<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
' />
	
     
    
    </fieldset> 
       <button type="submit" name="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>	


<div class="messages">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
