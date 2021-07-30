<?php
/* Smarty version 3.1.39, created on 2021-07-29 18:52:45
  from 'C:\xampp\htdocs\Store\templates\buying.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6102dcdd44fdf9_06299842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '378211c8e9324b0b443d1587c789f9a30bdc6d2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\buying.tpl',
      1 => 1627494727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6102dcdd44fdf9_06299842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21100175136102dcdd448cd2_22140928', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7933911466102dcdd449c85_19991502', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_21100175136102dcdd448cd2_22140928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_21100175136102dcdd448cd2_22140928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Buying<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7933911466102dcdd449c85_19991502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7933911466102dcdd449c85_19991502',
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
