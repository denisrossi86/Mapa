<?php
	include("dados.php");
	//var_dump($tutoriais);//utilizei para testar o conteúdo recebido
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
                <li><a href="#" title="Localização" alt="Localização">Localização</a></li>
				<li><a href="#" title="Cardapio" alt="Cardapio">Cardapio</a></li>
				<li><a href="#" title="Sobre" alt="Sobre">Sobre</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Nossas Deliciosas Marmitas</h1>
				<p>Aproveite nossa deliciosas e saboras marmitas, feitas especialmente para você!</p>
			</header>
			<?php
                $id = $_GET['id'];
                //echo "id = " . $id;

				foreach($tutoriais as $key => $value){
                    if($value['id'] == $id){
			?>
			<article>
				<a href="#"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['descricao'];?></p>
                <p><?=$value['valor'];?></p>
			</article>
			<?php
                    }
				}
			?>
			
		</section>


		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber o nosso cardapio todo dia por e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<h3>Denis Francisco Rossi - RA 21033200-5</h3>
	</footer>
</body>
</html>