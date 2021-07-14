<?php
/* Smarty version 3.1.39, created on 2021-07-14 02:26:41
  from 'C:\xampp\htdocs\Store\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ee2f41361714_38784357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d9f3570548adaf44b7a38b01f46d38b38bff63d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\contact.tpl',
      1 => 1626222399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ee2f41361714_38784357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195257255060ee2f4135ec47_62272758', 'body');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_195257255060ee2f4135ec47_62272758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_195257255060ee2f4135ec47_62272758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Contact us</h1>

    <div class="align-center">
        <form action="" method="post">
            <h3>Any questions? We would love to hear from you:</h3>
            <p>Name:
            <input type="name" id="name">
            <p>
                Email:  
                <input type="email" id="email">
            <p>
                Message:
                <br>
                <textarea id="message" name="txt_comments" rows="10" cols="35">
                </textarea>
                <br>
                <br>
                <input type="submit" value="NOT WORKING">
        </form>
    </div>
<?php
}
}
/* {/block 'body'} */
}
