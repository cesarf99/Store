<?php
/* Smarty version 3.1.39, created on 2021-07-20 20:12:47
  from 'C:\xampp\htdocs\Store\templates\message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f7121f38d696_06551377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7842944b08a9a1280b185eeb0e30adc2bda4f5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\message.tpl',
      1 => 1626804752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f7121f38d696_06551377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37808081360f7121f38a008_76769463', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_37808081360f7121f38a008_76769463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_37808081360f7121f38a008_76769463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br>
    <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    <p><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=index">Get back</a></p>
<?php
}
}
/* {/block 'body'} */
}
