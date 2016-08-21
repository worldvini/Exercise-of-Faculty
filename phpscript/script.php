<?php
	function menuPrincipal(){
		$menu = array(
				"Home"=> "index.php",
				"Html"=> "index.php?pagina=html",
				"PHP"=> "index.php?pagina=php",
				"Css"=> "index.php?pagina=css",
				"Contato"=> "index.php?pagina=contato"
				);
		menu($menu);
	}
	function menuHtml(){
		$menu1 = array(
				"Home"=> "index.php?pagina=html&pag=homehtml",
				"O que é Html"=> "index.php?pagina=html&pag=oqueehtml",
				"Principais Elementos"=> "index.php?pagina=html&pag=prielementoshtml"
				);
		menu($menu1);
	}
	function menuPhp(){
		$menu2 = array(
				"Home"=> "index.php?pagina=php&pag=homephp",
				"O que é Php"=> "index.php?pagina=php&pag=oqueephp",
				"Principais Elementos"=> "index.php?pagina=php&pag=prielementosphp"
				);
		menu($menu2);
	}
	function menuCss(){
		$menu3 = array(
				"Home"=>"index.php?pagina=css&pag=homecss",
				"O que é Css"=> "index.php?pagina=css&pag=oqueecss",
				"Principais Elementos"=> "index.php?pagina=css&pag=prielementocss"
			);
		menu($menu3);
	}
	function menu($menu){
		foreach ($menu as $titulo => $link) {
			echo "<li><a href=$link>$titulo</a></li>";
		}
	}

	
?>	
