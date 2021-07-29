<?php
/* Smarty version 3.1.39, created on 2021-07-26 19:49:31
  from 'C:\xampp\htdocs\Store\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fef5ab767a19_48759819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc69bc4d359a9d823302a149b47bab47632af296' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\about.tpl',
      1 => 1627321733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fef5ab767a19_48759819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206160492860fef5ab764f54_89608153', 'body');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_206160492860fef5ab764f54_89608153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_206160492860fef5ab764f54_89608153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>About us</h1>
    
    <div class="row">
        <div class="column" >
        </div>
        <div class="column" >
            <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" width="50%" height="50%" object-fit: contain">
        </div>
        <div class="column" >
            <h2>company name</h2>
            <p>email:</p>
            <p></p>
        </div>
        <div class="column" >

        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
