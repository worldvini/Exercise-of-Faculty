<div class="pagename">
	<h1>CSS <img src="img/setadownwhite.png"> </h1>
</div>
<div class="centralconteudo">
	<div class="menumid">
		<nav>
			<ul>
				<?php 
					menuCss();
			 	?>
			</ul>			
		</nav>		
	</div>
	<div class="conteudo">
		<?php 
			if(isset($_GET['pag'])){
				include("pages/"."$_GET[pag]".".php");
			}else{
				include("pages/homecss.php");
			}
		 ?>		
	</div>
</div>