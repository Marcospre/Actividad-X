<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <style>
    .wrap{
    display:flex;
    flex-direction:column;
    align-items:center;
    }
    
    table,td{
        border:1px black solid;
	   border-collapse:collapse;
    }
    </style>
</head>

<body>
	<div class="wrap">
    <form action="C_insertUsuario.php" method="post">
    	<table>
    		<tr>
    			<td><label for="">Username</label></td>
    			<td><input type="text" name="username" placeholder="username"></td>
    		</tr>
            
            <tr>
    			<td><label for="">Nombre</label></td>
    			<td><input type="text" name="nombre" placeholder="nombre"></td>
    		</tr>
    		
    		 <tr>
    			<td><label for="">Apellido</label></td>
    			<td><input type="text" name="password" placeholder="password"></td>
    		</tr>
           
            
        </table>
        <input type="submit" value="Guardar">
    </form>
    </div>
</body>

</html>