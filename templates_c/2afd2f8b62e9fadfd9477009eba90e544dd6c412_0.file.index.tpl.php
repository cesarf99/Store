<?php
/* Smarty version 3.1.39, created on 2021-07-11 16:06:08
  from 'C:\xampp\htdocs\Store\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60eafad0599617_23912231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2afd2f8b62e9fadfd9477009eba90e544dd6c412' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\index.tpl',
      1 => 1625968278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60eafad0599617_23912231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81164998660eafad05969e0_95258508', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92503722460eafad0598576_26248116', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_81164998660eafad05969e0_95258508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_81164998660eafad05969e0_95258508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_92503722460eafad0598576_26248116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_92503722460eafad0598576_26248116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Welcome to our shop , check some of the products available</h1>
    



<?php
}
}
/* {/block 'body'} */
}
