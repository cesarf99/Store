<?php
/* Smarty version 3.1.39, created on 2021-07-15 23:37:46
  from 'C:\xampp\htdocs\Store\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f0aaaa5cafe1_77642135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347338435fee9efa037ba948d977d83fbae1fe6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\header.tpl',
      1 => 1626385065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f0aaaa5cafe1_77642135 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/style.css" type="text/css">

<div class="topnav">
    <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=index">Home</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=contact">Contact</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=about">About</a>
    

    <div class="topnav-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=registerform">Register</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=loginform">Login</a>
    </div>

</div>

<?php }
}
