<?php
    //Passo 1 - abrir conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "teste";
            $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
    //Passo 2 - testar
    if (mysqli_connect_errno()  ){
        die("Conexão Falhou: ". mysqli_connect_errno());
    }
?>
<!doctype html>
<html>
    <head>
	<style>
	li { list-style:none;
			 margin-left:30px;
			 border:0
		    }
	    #header {
				width:800px;
				height:47px;
				margin:0 auto;
			}
		#rodape p {
			font-family: sans-serif;
			font-size: 11px;
			text-align: center
		}
	</style>
    </head>
<body> 
 <?php include_once("topo.php"); ?>
	<?php
	$sql = mysqli_query($conecta, "SELECT * FROM produtos") or die(mysqli_error($conecta) );
	
   while ($linha = mysqli_fetch_assoc($sql)){
	   ?>
	   
	   <li><?php echo $linha["nomeproduto"]?></li>
	   <li>Tempo de entrega : <?php echo $linha["tempoentrega"]?> dias</li>
	   <li>Preço unitário : R$<?php echo $linha["precovenda"]?></li>	   
	   <img src="<?php echo $linha["imagempequena"]?>"></li>
   <?php
   }
   ?>
      <?php include_once("rodape.php"); ?>
    </body>

</html>