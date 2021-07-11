<?php
/* Smarty version 3.1.39, created on 2021-07-11 03:50:27
  from 'C:\xampp\htdocs\Store\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ea4e631c12a2_01489226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9436f5ddd29034375ef35d9c1afd2acec756d155' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\layout.tpl',
      1 => 1625968206,
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
function content_60ea4e631c12a2_01489226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39080794560ea4e631aec99_53112017', 'title');
?>
</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <header>
        <?php if ((isset($_smarty_tpl->tpl_vars['logged']->value))) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:headerLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </header>

    <body class="content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_729213860ea4e631bf4e3_72191808', 'body');
?>

</body>

<footer>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</footer>

</html>
<?php }
/* {block 'title'} */
class Block_39080794560ea4e631aec99_53112017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_39080794560ea4e631aec99_53112017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_729213860ea4e631bf4e3_72191808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_729213860ea4e631bf4e3_72191808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
