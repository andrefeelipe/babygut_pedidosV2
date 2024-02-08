<?php
/* Smarty version 3.1.46, created on 2024-02-07 02:33:56
  from 'C:\xampp\htdocs\pedidos\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_65c2de049ac834_34752197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beda15ff1b41e8719b76d43304854ba7620ffe10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pedidos\\view\\produtos.tpl',
      1 => 1707269520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c2de049ac834_34752197 (Smarty_Internal_Template $_smarty_tpl) {
?>					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['imagem'];?>
" alt="" />
											<h2>$56a</h2>
											<p><?php echo $_smarty_tpl->tpl_vars['P']->value['referencia'];?>
</p>
											<p><?php echo $_smarty_tpl->tpl_vars['P']->value['nome'];?>
</p>
											<p><?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
</p>
											<a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
											    <p><?php echo $_smarty_tpl->tpl_vars['P']->value['referencia'];?>
</p>
											    <p><?php echo $_smarty_tpl->tpl_vars['P']->value['nome'];?>
</p>
												<p><?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
</p>
												<a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>	
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>					
					</div><!--features_items--><?php }
}
