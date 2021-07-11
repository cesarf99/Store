<?php
/* Smarty version 3.1.39, created on 2021-07-11 22:09:25
  from 'C:\xampp\htdocs\Store\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60eb4ff58d75a7_79299374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2afd2f8b62e9fadfd9477009eba90e544dd6c412' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\index.tpl',
      1 => 1626013044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60eb4ff58d75a7_79299374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39001251560eb4ff58d5c34_17467525', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42788476560eb4ff58d6db2_42946771', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_39001251560eb4ff58d5c34_17467525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_39001251560eb4ff58d5c34_17467525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_42788476560eb4ff58d6db2_42946771 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_42788476560eb4ff58d6db2_42946771',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Logged In</h1>
    
    <h1>Items in Cart:</h1>
    
    
    



<?php
}
}
/* {/block 'body'} */
}
