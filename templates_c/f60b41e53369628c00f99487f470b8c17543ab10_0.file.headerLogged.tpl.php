<?php
/* Smarty version 3.1.39, created on 2021-07-12 15:17:23
  from 'C:\xampp\htdocs\Store\templates\headerLogged.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ec40e3aa1ba7_18867002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f60b41e53369628c00f99487f470b8c17543ab10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\headerLogged.tpl',
      1 => 1626095534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ec40e3aa1ba7_18867002 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/style.css" type="text/css">

<div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=contact">Contact</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=about">About</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=products">Products</a>
    <div class="topnav-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=logout">Logout</a>
        <a>Welcome: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>    
    </div>
</div>

<?php }
}
