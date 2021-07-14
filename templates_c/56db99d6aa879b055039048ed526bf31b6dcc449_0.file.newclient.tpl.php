<?php
/* Smarty version 3.1.39, created on 2021-07-14 02:47:38
  from 'C:\xampp\htdocs\Store\templates\newclient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ee342a434dd4_98429607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56db99d6aa879b055039048ed526bf31b6dcc449' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\newclient.tpl',
      1 => 1626223657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ee342a434dd4_98429607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114075057360ee342a42a4c8_72523423', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43860323960ee342a42b752_03038753', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_114075057360ee342a42a4c8_72523423 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_114075057360ee342a42a4c8_72523423',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
New Client<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_43860323960ee342a42b752_03038753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_43860323960ee342a42b752_03038753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Regist form</h1>


    <form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=register" method="post">
        <h3>Insert your data</h3>
        <p>Name:<input type="text" name="name">
        <p>Username:<input type="text" name="username">
        <p>Email:<input type="email" name="email">
        <p>Password:<input type="password" name="password">
        <p>Address:<input type="address" name="address">
            <input type="submit" value="Register">
    </form>
</div

<?php
}
}
/* {/block 'body'} */
}
