<div class="pagename">
	<h1>Html <img src="img/setadownwhite.png"> </h1>
</div>
<div class="centralconteudo">
	<div class="menumid">
		<nav>
			<ul>
				<?php 
					menuHtml();
			 	?>
			</ul>			
		</nav>		
	</div>
	<div class="conteudo">
		<?php 
			if(isset($_GET['pag'])){
				include("pages/"."$_GET[pag]".".php");
			}else{
				include("pages/homehtml.php");
			}
		 ?>		
	</div>
</div>