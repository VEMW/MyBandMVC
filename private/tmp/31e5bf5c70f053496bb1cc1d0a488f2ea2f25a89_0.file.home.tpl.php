<?php
/* Smarty version 3.1.32, created on 2018-06-17 17:15:22
  from 'C:\Users\Valerie\Desktop\ma\bewijzenmap\periode1.4\bap\MyBandMVC\private\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b267b0abe8c76_21407534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31e5bf5c70f053496bb1cc1d0a488f2ea2f25a89' => 
    array (
      0 => 'C:\\Users\\Valerie\\Desktop\\ma\\bewijzenmap\\periode1.4\\bap\\MyBandMVC\\private\\views\\home.tpl',
      1 => 1529248519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b267b0abe8c76_21407534 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Hallo Smarty</h1>
<a href="index.php?page=news">NEWS</a>

<p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'title');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['title']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</p>
<a href="index.php?page=contact">Contact</a>

<?php }
}
