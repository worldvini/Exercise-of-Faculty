
<?php include "topo.php" ; ?>

	<section>
		<div>
			<p>logo</p>
		</div>
		<div>
			<?php 
				if(isset($_GET['pagina'])){
					include ("pages/". "$_GET[pagina]" . ".php");
				}else{
					include("pages/home.php");
				} /* Caso tenha algo na variavel GET, chame a pagina com esse nome, caso não tenha, chame a pagina home */
			 ?>
		</div>
	</section>
	
<?php include "footer.php" ; ?> 