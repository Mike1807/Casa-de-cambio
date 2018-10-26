<head>
<link href="~/Content/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<style>
    .bb-alert {
        position: fixed;
        top: 0;
        right: 0;
        font-size: 1.2em;
        padding: 1em 1.3em;
        z-index: 2000;
    }
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="container">
<center>
    <p class="login-box-msg"><h3>Lista de clientes</h3></p>
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
              <table id="lista_clientes" class="table table-bordered table-hover">
                <thead>
		<tr>
            <th>FECHA DE REGISTRO</th>
			<th>ID</th>
			<th>NOMBRE</th>
            <th>PAIS</th>
            <th>EMAIL</th>
            <th>PASAPORTE EXTRANJERO</th>
            <th>PASAPORTE MEXICANO</th>
			
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from clientes') as $row){ ?> 
<tr>
    <td><?php echo $row['fecha'] ?></td>
	<td><?php echo $row['id'] ?></td>
    <td><?php echo $row['nombre_completo'] ?></td>
    <td><?php echo $row['pais'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['extranjero'] ?></td>
    <td><?php echo $row['mexicano'] ?></td>
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
<a class="btn btn-primary btn-xs" href="http://localhost/CasaCambio/index.php/news/clientespdf/" method="post"><span class="glyphicon glyphicon-print"> Imprimir PDF</span></a>
<a class="btn btn-primary btn-xs" href="http://localhost/CasaCambio/index.php/news/clientesexcel/" method="post"><span class="glyphicon glyphicon-list-alt"> Imprimir Excel</span></a>
</div>

<!-- set up the modal to start hidden and fade in and out -->

<div id="myModal" class="modal fade">

<div class="modal-dialog">

  <div class="modal-content">

    <!-- dialog body -->

    <div class="modal-body">

      <button type="button" class="close" data-dismiss="modal">&times;</button>

     Selecciona la opcion deseada para imprimir tu registro de clientes!!!!

    </div>

    <!-- dialog buttons -->

    <div class="modal-footer" id="Excel"><a class="btn btn-primary btn-xs" href="http://localhost/CasaCambio/index.php/news/clientesexcel/" method="post"><span class="glyphicon glyphicon-download-alt"> Descargar Excel</span></a></div>
    <div class="modal-footer" id="PDF"><a class="btn btn-primary btn-xs" href="http://localhost/CasaCambio/index.php/news/clientespdf/" method="post"><span class="glyphicon glyphicon-download-alt"> Descargar PDF</span></a></div>
  </div>

</div>

</div>



<!-- sometime later, probably inside your on load event callback -->

<script>

  $("#myModal").on("show", function() {   

      $("#myModal a.btn").on("click", function(e) {
          console.log("button pressed");   
          $("#myModal").modal('hide');    
      });
  });

  $("#myModal").on("hide", function() {    
      $("#myModal a.btn").off("click");

  });

  $("#myModal").on("hidden", function() {  
      $("#myModal").remove();

  });

  $("#myModal").modal({                   
    "backdrop"  : "static",
    "keyboard"  : true,
    "show"      : true             

  });

</script>
</body>
</html>