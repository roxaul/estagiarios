<?php 
include "usuario.php"
?>
<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <head>
        <title>Laragon</title>
        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
        <style>
        </style>
    </head>
    <body>
		<?php $usuario=new usuario();
			$usuario->setNome($_GET["nome"]);
		?>
        <div class="container">
            <div class="content">
                <div class="info"><br />
                    Bem Vindo <?php echo($usuario->getNome()) ?><br>
					Seu e-mail:
                </div>
            </div>
        </div>
    </body>
</html>