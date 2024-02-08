<?php
/* Smarty version 3.1.46, created on 2024-02-01 02:15:48
  from 'C:\xampp\htdocs\pedidos\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_65baf0c4ca5f98_24595795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49ce5dfa195155167d5fc253de60c6c8f549ef7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pedidos\\view\\contato.tpl',
      1 => 1706750146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65baf0c4ca5f98_24595795 (Smarty_Internal_Template $_smarty_tpl) {
?>	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<!-- <div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					</div>
				</div>			 		
			</div>  -->  	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Formulário</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Nome completo">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="E-mail">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Assunto">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Em que podemos lhe ajudar?"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Endereço</h2>
	    				<address>
	    					<p>Baby Gut</p>
							<p>R. Ilza Jeske Dias de Oliveira, 125</p>
							<p>Azambuja - Brusque - SC</p>
							<p>CEP: 88353-466</p>
							<p>Telefone: (47) 3355-9065</p>
							<p>E-mail: comercial@babygut.com.br</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Redes Sociais</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page--><?php }
}
