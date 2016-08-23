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
				"Introdução"=> "index.php?pagina=html&pag=homehtml",
				"O esqueleto da Web"=> "index.php?pagina=html&pag=oqueehtml",
				"Principais Elementos"=> "index.php?pagina=html&pag=prielementoshtml"
				);
		menu($menu1);
	}
	function menuPhp(){
		$menu2 = array(
				"Introdução"=> "index.php?pagina=php&pag=homephp",
				"Programe agora"=> "index.php?pagina=php&pag=oqueephp",
				"Principais Elementos"=> "index.php?pagina=php&pag=prielementosphp"
				);
		menu($menu2);
	}
	function menuCss(){
		$menu3 = array(
				"Introdução"=>"index.php?pagina=css&pag=homecss",
				"Torne tudo mais bonito"=> "index.php?pagina=css&pag=oqueecss",
				"Principais Elementos"=> "index.php?pagina=css&pag=prielementoscss"
			);
		menu($menu3);
	}
	function menu($menu){
		foreach ($menu as $titulo => $link) {
			echo "<li><a href=$link>$titulo</a></li>";
		}
	}

	
?>	
