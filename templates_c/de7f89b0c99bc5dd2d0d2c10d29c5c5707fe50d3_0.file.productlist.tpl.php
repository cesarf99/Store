<?php
/* Smarty version 3.1.39, created on 2021-07-12 01:42:06
  from 'C:\xampp\htdocs\Store\templates\productlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60eb81ce10d9c9_92431178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de7f89b0c99bc5dd2d0d2c10d29c5c5707fe50d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\productlist.tpl',
      1 => 1626046896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60eb81ce10d9c9_92431178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177979904860eb81ce050334_07423029', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131367303360eb81ce052047_13548412', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_177979904860eb81ce050334_07423029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_177979904860eb81ce050334_07423029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Product List<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_131367303360eb81ce052047_13548412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_131367303360eb81ce052047_13548412',
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
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['entry']->value['DESCRIPTION'];?>

                </h3>

                <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value['IMGPATH'];?>
" width="50%" height="50%" object-fit: contain">
                <h3>
                    Price:<?php echo $_smarty_tpl->tpl_vars['entry']->value['PRICE'];?>

                </h3>

                <div>
                    <p>Add to Cart
                        <span style="float:right;">
                            Buy
                        </span>
                    </p>
                </div>
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
