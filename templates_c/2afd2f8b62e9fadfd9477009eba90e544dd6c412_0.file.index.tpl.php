<?php
/* Smarty version 3.1.39, created on 2021-07-05 20:14:59
  from 'C:\xampp\htdocs\Store\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e34c23853228_54645276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2afd2f8b62e9fadfd9477009eba90e544dd6c412' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\index.tpl',
      1 => 1625508898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e34c23853228_54645276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128212226560e34c23841937_53676479', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199307119260e34c23842f08_70901694', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_128212226560e34c23841937_53676479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_128212226560e34c23841937_53676479',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_199307119260e34c23842f08_70901694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_199307119260e34c23842f08_70901694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Welcome to our shop , check some of the products available</h1>

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
                So aparecer se tiver login
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
registar
</div
<?php
}
}
/* {/block 'body'} */
}
