					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                        {foreach from=$PRO item=P}
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{$P.imagem}" alt="" />
											<h2>$56a</h2>
											<p>{$P.referencia}</p>
											<p>{$P.nome}</p>
											<p>{$P.id}</p>
											<a href="{$PRO_INFO}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
											    <p>{$P.referencia}</p>
											    <p>{$P.nome}</p>
												<p>{$P.id}</p>
												<a href="{$PRO_INFO}/{$P.id}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
                        {/foreach}					
					</div><!--features_items-->