<?php
/* Smarty version 3.1.39, created on 2021-07-06 03:20:03
  from 'C:\xampp\htdocs\Store\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e3afc304de70_01902192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cae1cfddbe3f40f166957aa75ce6bd7c67ab95c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\templates\\Login.tpl',
      1 => 1625534401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e3afc304de70_01902192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84481660960e3afc3044737_51794797', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_84481660960e3afc3044737_51794797 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_84481660960e3afc3044737_51794797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br>
    <div >
        <h1>Login</h1>
        <form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=login" method="POST">
            <div class="align-center">
                <label>Username:</label>
                <input type="text" name="username">
            </div>  
            <br>
            <div class="align-center">
                <label>Password:</label>
                <input type="password" name="password" ) >
            </div>
            <br>
            <div class="align-center">
                <input type="submit" value="Login">
                <p>Don't have an account? <a href="">Sign up now</a></p>
            </div>  
        </form>
    </div>    
<?php
}
}
/* {/block 'body'} */
}
