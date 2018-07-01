<?php
/* Smarty version 3.1.32, created on 2018-06-21 11:29:13
  from 'C:\Users\Valerie\Desktop\ma\bewijzenmap\periode1.4\bap\MyBandMVC\private\views\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2b6fe9ec38c7_52977151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc187a30bd738071476d1f5d7f8f113ad84c849a' => 
    array (
      0 => 'C:\\Users\\Valerie\\Desktop\\ma\\bewijzenmap\\periode1.4\\bap\\MyBandMVC\\private\\views\\news.tpl',
      1 => 1529573333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2b6fe9ec38c7_52977151 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>NEWS</h1>

<a href="index.php?page=home">HOME</a>

<h3>Current Page: <?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</h3>

<?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
    <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
">PREVIOUS</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
    <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">NEXT</a>
<?php }?>

<p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <h2><?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</p>
        <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
" alt="foobar" />
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</p>

<?php }
}
