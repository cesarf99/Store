<?php
/* Smarty version 3.1.39, created on 2021-08-04 20:10:37
  from 'C:\xampp\htdocs\Store\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610ad81d643ec0_69377687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2afd2f8b62e9fadfd9477009eba90e544dd6c412' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\index.tpl',
      1 => 1628100628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610ad81d643ec0_69377687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_662867075610ad81d391819_85226636', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_767033280610ad81d394c33_28664621', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_662867075610ad81d391819_85226636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_662867075610ad81d391819_85226636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_767033280610ad81d394c33_28664621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_767033280610ad81d394c33_28664621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Logged In</h1>
    <?php echo $_SESSION['name'];?>

    <h1>Items in Cart:</h1>
    <table border="1">
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
