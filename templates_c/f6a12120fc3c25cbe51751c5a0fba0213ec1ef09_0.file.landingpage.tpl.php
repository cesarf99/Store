<?php
/* Smarty version 3.1.39, created on 2021-07-14 02:39:11
  from 'C:\xampp\htdocs\Store\templates\landingpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ee322f50adf5_56132226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6a12120fc3c25cbe51751c5a0fba0213ec1ef09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\landingpage.tpl',
      1 => 1626223150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ee322f50adf5_56132226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180020045260ee322f226af9_57992123', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75844437060ee322f228667_26709506', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_180020045260ee322f226af9_57992123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_180020045260ee322f226af9_57992123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_75844437060ee322f228667_26709506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_75844437060ee322f228667_26709506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Welcome to our shop , check some of the products available</h1>
    <div class="align-center">
        <h1><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=registerform">Register now!</a></h1>
    </div>  
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
