<?php
/* Smarty version 3.1.39, created on 2021-07-06 03:06:31
  from 'C:\xampp\htdocs\Store\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e3ac97350be1_23203076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347338435fee9efa037ba948d977d83fbae1fe6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\header.tpl',
      1 => 1625533591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e3ac97350be1_23203076 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/style.css" type="text/css">

<div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="Contact">Contact</a>
    <a href="About">About</a>
    <div class="topnav-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=loginform">Login</a>
    </div>
</div>

<?php }
}
