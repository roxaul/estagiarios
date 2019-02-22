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
        <div class="container">
            <div class="content">
                <div class="info"><br />
                    <form action="welcome.php" method="get">
						Nome: <input type="text" name="nome" id="nome"><br>
						<br>
						E-mail: <input type="email" name="email" id="email"><br>
						<br>
						<input type="submit" onclick="return validate()">
					</form>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
function validate(){
	var nome=$('#nome').val();
	var email=$('#email').val();
	//if(){
		//alert("Campos nome e e-mail obrigatorios");
		//return false;
	//}else{
		//return true;
	//}
}
</script>