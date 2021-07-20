<?php
/* Smarty version 3.1.39, created on 2021-07-16 19:18:41
  from 'C:\xampp\htdocs\Store\templates\newclient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f1bf71c95453_26315018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56db99d6aa879b055039048ed526bf31b6dcc449' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\newclient.tpl',
      1 => 1626455919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f1bf71c95453_26315018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102800442260f1bf71c15b99_12469458', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33245122960f1bf71c1d224_18605554', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_102800442260f1bf71c15b99_12469458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_102800442260f1bf71c15b99_12469458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
New Client<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_33245122960f1bf71c1d224_18605554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_33245122960f1bf71c1d224_18605554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Regist form</h1>

    <div class="border">
        <form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=register" method="post">
            <h3>Insert your data:</h3>
            <p>Name:<br>
                <input type="text"  style="width: 30em;" name="name" required>
            <p>Username:<br>
                <input type="text" style="width: 30em;" name="username" required>
            <p>Email:<br>
                <input type="email" style="width: 30em;" name="email" required>
            <p>Password:<br>
                <input type="password" style="width: 30em;" name="password" required>
            <p>Address:<br>
                <input type="address" style="width: 30em;" name="address" required>
            <p><input type="submit" value="Register">
        </form>
    </div>

<?php
}
}
/* {/block 'body'} */
}
