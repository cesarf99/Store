<?php
/* Smarty version 3.1.39, created on 2021-07-02 13:19:52
  from 'C:\xampp\htdocs\Store\templates\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60def6586bc607_09565189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b7855efcc72baed4910edf21f4e195feb174bad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\users.tpl',
      1 => 1624548203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60def6586bc607_09565189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Store\\vendor\\smarty\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<table border="0" width="300">
    <tr>
        <th colspan="2" bgcolor="#d1d1d1">
            Guestbook Entries (<a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=add">add</a>)</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#dedede,#eeeeee",'advance'=>false),$_smarty_tpl);?>
">
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['USERID'], ENT_QUOTES, 'UTF-8', true);?>
</td>  
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['NAME'], ENT_QUOTES, 'UTF-8', true);?>
</td>      
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['USERNAME'], ENT_QUOTES, 'UTF-8', true);?>
</td>   
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['PASSWORD'], ENT_QUOTES, 'UTF-8', true);?>
</td> 
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['ADDRESS'], ENT_QUOTES, 'UTF-8', true);?>
</td> 

        </tr>

    <?php
}
if ($_smarty_tpl->tpl_vars['entry']->do_else) {
?>
        <tr>
            <td colspan="2">No records</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
