<?php
/* Smarty version 3.1.39, created on 2021-07-28 17:05:08
  from 'C:\xampp\htdocs\Store\templates\buying.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61017224007ea2_88329137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '378211c8e9324b0b443d1587c789f9a30bdc6d2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\buying.tpl',
      1 => 1627484705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61017224007ea2_88329137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106404936761017224004213_41409939', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_106404936761017224004213_41409939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_106404936761017224004213_41409939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h5>Product: <?php echo $_smarty_tpl->tpl_vars['data']->value['productname'];?>
</h5>
    <div class="row">
        <div class="column" >
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
" width="50%" height="50%" object-fit: contain">
        </div>
        <div class="column" >
            <p>Billing information:</p>
            <form>
                Name:<textarea type="text" name="name" rows="4" cols="50"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
 </textarea>
                <p>
                    Address: <textarea type="text" name="address" rows="4" cols="50"> <?php echo $_smarty_tpl->tpl_vars['data']->value['address'];?>
 </textarea>
                <p>
                    <input type="submit" value="Buy"  />
            </form>
        </div>
    <?php
}
}
/* {/block 'body'} */
}
