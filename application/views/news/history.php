<body class="hold-transition skin-blue sidebar-mini">
<div class="container">
<center>
    <p class="login-box-msg"><h3>Historial de cambios monetarios</h3></p>
    </center>
    <br>    
    <br>
    <br>
<?php
//usar esto para llamada de datos en la bd
$link = new PDO('mysql:host=localhost;dbname=ccambio', 'miguel', 'psymeg18'); 

?>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="lista_monedas" class="table table-bordered table-hover">
                <thead>
		<tr>
            <th>FECHA</th>
            <th>ID CLIENTE</th>
			<th>NOMBRE DEL CLIENTE</th>
            <th>MONEDA DE ORIGEN</th>
            <th>MONEDA DE CAMBIO</th>
            <th>CANTIDAD</th>
			<th>TOTAL</th>
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from clientes') as $row){ ?> 
<tr>
    <td><?php echo $row['fecha'] ?></td>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['nombre_completo'] ?></td>
    <td><?php echo $row['moneda_origen'] ?></td>
    <td><?php echo $row['moneda_cambio'] ?></td>
    <td><?php echo $row['cantidad'] ?></td>
    <td><?php echo $row['total'] ?></td>
 </tr>
<?php
	}
?>
</table>
</div>
<div style="text-align: left">
<a class="btn btn-info btn-sm" href="http://localhost/CasaCambio/index.php/news/"><span class="glyphicon glyphicon-chevron-left">Regresar</span></a>
</div>
<div style="text-align: right">
<a class="btn btn-primary btn-xs" href="http://localhost/CasaCambio/index.php/news/cambiospdf/" method="post"><span class="glyphicon glyphicon-print"> Imprimir PDF</span></a>
<a class="btn btn-primary btn-xs" href="http://localhost/CasaCambio/index.php/news/cambiosexcel/" method="post"><span class="glyphicon glyphicon-list-alt"> Imprimir Excel</span></a>
</div></body>
</html>