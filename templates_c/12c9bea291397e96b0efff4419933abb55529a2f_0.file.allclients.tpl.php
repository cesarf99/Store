<?php
/* Smarty version 3.1.39, created on 2021-07-04 22:30:26
  from 'C:\xampp\htdocs\Store\templates\allclients.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e21a62758598_71863564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12c9bea291397e96b0efff4419933abb55529a2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\allclients.tpl',
      1 => 1625430613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e21a62758598_71863564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191601304760e21a624160c1_17985208', 'body');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_191601304760e21a624160c1_17985208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_191601304760e21a624160c1_17985208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <table border="0">
        <tr>
            <th>
                All clients(<a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=add">add</a>)</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
            <tr >
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['CLIENTID'], ENT_QUOTES, 'UTF-8', true);?>
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
                <td>No records</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php
}
}
/* {/block 'body'} */
}
