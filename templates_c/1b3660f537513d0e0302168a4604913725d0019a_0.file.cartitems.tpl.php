<?php
/* Smarty version 3.1.39, created on 2021-08-04 20:38:37
  from 'C:\xampp\htdocs\Store\templates\cartitems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610adead6926b8_65297870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b3660f537513d0e0302168a4604913725d0019a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\cartitems.tpl',
      1 => 1628102315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610adead6926b8_65297870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1302034323610adead67e2d5_54045248', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1238611799610adead67f2b8_24166049', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_1302034323610adead67e2d5_54045248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1302034323610adead67e2d5_54045248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Cart<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1238611799610adead67f2b8_24166049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1238611799610adead67f2b8_24166049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Items in Cart:</h1>
    <table border="1" >
        <thead>
            <tr>
                <th scope="col">TYPE</th>
                <th scope="col">NAME</th>
                <th scope="col">SIZE</th>
                <th scope="col">COLOR</th>
                <th scope="col">PRICE</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
            <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['TYPE'], ENT_QUOTES, 'UTF-8', true);?>
</td> 
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['NAME'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['SIZE'], ENT_QUOTES, 'UTF-8', true);?>
</td> 
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['COLOR'], ENT_QUOTES, 'UTF-8', true);?>
</td> 
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['PRICE'], ENT_QUOTES, 'UTF-8', true);?>
</td> 
                <td>BUY</td> 



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
