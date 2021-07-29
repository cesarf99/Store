<?php
/* Smarty version 3.1.39, created on 2021-07-26 20:20:13
  from 'C:\xampp\htdocs\Store\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fefcdd67a758_28993872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9436f5ddd29034375ef35d9c1afd2acec756d155' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\layout.tpl',
      1 => 1627323613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerLogged.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60fefcdd67a758_28993872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105056974560fefcdd65e5c3_57410163', 'title');
?>
</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <header>
        <?php if ($_SESSION != null) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:headerLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </header>

    <body class="content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159811826060fefcdd678b98_26786443', 'body');
?>

</body>

<footer>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</footer>

</html>
<?php }
/* {block 'title'} */
class Block_105056974560fefcdd65e5c3_57410163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_105056974560fefcdd65e5c3_57410163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_159811826060fefcdd678b98_26786443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_159811826060fefcdd678b98_26786443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
