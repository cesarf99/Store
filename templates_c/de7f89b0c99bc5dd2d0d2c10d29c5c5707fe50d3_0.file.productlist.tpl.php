<?php
/* Smarty version 3.1.39, created on 2021-07-27 19:12:28
  from 'C:\xampp\htdocs\Store\templates\productlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61003e7c039389_03937083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de7f89b0c99bc5dd2d0d2c10d29c5c5707fe50d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\productlist.tpl',
      1 => 1627405946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61003e7c039389_03937083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130430715661003e7c02e8d2_16978261', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139128721361003e7c02f2b2_76393065', 'body');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_130430715661003e7c02e8d2_16978261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_130430715661003e7c02e8d2_16978261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Product List<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_139128721361003e7c02f2b2_76393065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_139128721361003e7c02f2b2_76393065',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Products</h1>

    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
            <div class="column" style="border:2px solid black;">
                <form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=productdestination" method="POST">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['PRODUCTID'];?>
"/>

                    <h3><?php echo $_smarty_tpl->tpl_vars['entry']->value['DESCRIPTION'];?>
</h3>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value['IMGPATH'];?>
" width="50%" height="50%" object-fit: contain">
                    <h3>Price:<?php echo $_smarty_tpl->tpl_vars['entry']->value['PRICE'];?>
</h3>
                    <div>
                        <input type="submit" name="destination" value="Add to cart"/>
                        <input type="submit" name="destination" value="Buy" style="float:right;"/> 
                    </div>
                </form>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php
}
}
/* {/block 'body'} */
}
