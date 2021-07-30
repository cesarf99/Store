<?php
/* Smarty version 3.1.39, created on 2021-07-29 19:40:32
  from 'C:\xampp\htdocs\Store\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6102e810cff001_56301422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2afd2f8b62e9fadfd9477009eba90e544dd6c412' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\index.tpl',
      1 => 1627580425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6102e810cff001_56301422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3309204686102e810cedbd0_56925272', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14289516436102e810cee902_20674155', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_3309204686102e810cedbd0_56925272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3309204686102e810cedbd0_56925272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_14289516436102e810cee902_20674155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14289516436102e810cee902_20674155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Logged In</h1>
    <?php echo $_SESSION['name'];?>

    <h1>Items in Cart:</h1>
    <table border="0">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
            <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['NAME'], ENT_QUOTES, 'UTF-8', true);?>
</td> 
                


            </tr>
        <?php
}
if ($_smarty_tpl->tpl_vars['entry']->do_else) {
?>
            <tr>
                <td>No items</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

<?php
}
}
/* {/block 'body'} */
}
