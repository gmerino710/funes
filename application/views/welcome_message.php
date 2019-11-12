<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>



<div class="container mt-4">
	<h1 id="prin"><?=$tareas;?></h1>

	<button  id="nueva" ><?= img($edit_img);?></button>
	<a  id="kino" class="btn btn-dark " href= "<?=base_url();?>delete_all" >delete all</a>
	<hr>
	<?php echo form_open('Welcome/procesar',array('method'=>'POST','id'=>'formu'));?>
	<div class="form-group">
	<label for="Item" > Titutlo </label>
	<input type="text"class="form-control" id="Item" name="Item" placeholder="Escriba el titulo">	
	</div>
	<select  name ="tipo" class="custom-select custom-select-lg mb-3">
			<?php foreach($stado as $tip):?>
			<option value ="<?=$tip['Id_tipo'] ;?>"> <?= $tip['Tipo'];?></option>
			<?php endforeach;?>
	</select>


<div class="form-group">
	<label for="Descripcion" > Descripcion </label>
	<input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Escriba el descripcion">
</div>

<div class="container"><button id ="btn_todo"class="btn p-auto btn-danger" type="submit"><?=$boton1;?></button></div>


	

	<?php echo form_close();?>
	
	<div class="container mt-4">
	 	<?php if(!empty($listado)):?>
		 <?php foreach($listado as $item):?>
			<div class="jumbotron">
			
			<h2 class="display-4">
			<a href="<?= base_url();?>tarea/<?=$item['Id'];?>">
			<?= $item['Item'];?>
			</a>
			</h2>	
			<span><?= $item['Fecha'];?></span>
			<br>
			<br>
			<a class="btn btn-info"  id="cancel" href="<?=base_url();?>borrar/<?=$item['Id']?>">
			<?= img($delete_img);?>
			</a>
		
			</div>
			<?php endforeach;?>
			<?php else:?>
					<div id ="no_jay"class="alert alert-success" role="alert">
					<?php echo  'Sin datos';?>	
					</div>
					  	

	
			<?php endif;?>


		
		
	</div>
	

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
	
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  	crossorigin="anonymous"></script>

	<script type="text/javascript" src="<?= base_url()?>Assets/Js/Script01.js" ></script>
<!-- boostrap-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>