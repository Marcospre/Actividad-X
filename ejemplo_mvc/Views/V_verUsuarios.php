<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Lista de usuarios</title>
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
		<div class=wrap>
    		<a href="C_mostrarInsertUsuarios.php">Insertar usuario</a>
       		<table>
       			<thead>
       				<tr>
       					<td>Usuarios</td>
       					<td>Constraseña</td>
       					<td>Nombre real</td>
       				</tr>
       			</thead>
       			<tbody>
       			<?php 
       			foreach ($usuarios as $usuario){
       			    echo "<tr>";
       			    echo "<td>" . $usuario['username'] . "</td>";
       			    echo "<td>" . $usuario['password'] . "</td>";
       			    echo "<td>" . $usuario['nombre'] . "</td>";
       			    echo "<td><a href='C_eliminarUsuario.php?username=". $usuario['username'] ."'><button>Eliminar usuario</button></a></td>";
       			    echo "<td><a href='Views/V_formModificar.php?username=". $usuario['username'] ."'><button>Modificar usuario</button></a></td>";
       			    echo "</tr>";
       			}
       			
       			?>
       			</tbody>
       		</table>
   		</div>
    </body>
</html>