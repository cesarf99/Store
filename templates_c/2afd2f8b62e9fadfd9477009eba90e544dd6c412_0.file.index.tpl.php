<?php
/* Smarty version 3.1.39, created on 2021-07-05 14:41:24
  from 'C:\xampp\htdocs\Store\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e2fdf4d9e236_65751820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2afd2f8b62e9fadfd9477009eba90e544dd6c412' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\index.tpl',
      1 => 1625488883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e2fdf4d9e236_65751820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35685464860e2fdf4d89858_11856943', 'title');
?>


<link rel="stylesheet" href="css/style.css" type="text/css">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173862290860e2fdf4d8ace2_51111219', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_35685464860e2fdf4d89858_11856943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_35685464860e2fdf4d89858_11856943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_173862290860e2fdf4d8ace2_51111219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_173862290860e2fdf4d8ace2_51111219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Welcome to our shop , check some of the products available</h1>

    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
            <div class="column" style="border:1px solid black;">
                <h6>
                    <?php echo $_smarty_tpl->tpl_vars['entry']->value['DESCRIPTION'];?>

                </h6>
                <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value['IMGPATH'];?>
" width="50%" height="50%" object-fit: contain">
                <h6>
                    <tr >
                        <td>Price:<?php echo $_smarty_tpl->tpl_vars['entry']->value['PRICE'];?>
</td>  
                        <td>Add to Cart</td>      
                        <td> Buy</td>
                    </tr>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

</div
<?php
}
}
/* {/block 'body'} */
}
