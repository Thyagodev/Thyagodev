<?php
$arquivo = $_POST['arquivo'];


if (isset($_POST['enviar'])):

  $formatos = array("png", "jpg", "jpeg", "gif");

  //recolhe a extensão do arquivo guardado em $_POST

  $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

  //Filtra os tipos de arquivo levando em conta o array formatos

  if(in_array($extensao, $formatos)):

     $pasta = "img/";
     $temporario = $_FILES['arquivo']['tmp_name'];
     $novoNome = uniqid().".$extensao";

     if (move_uploaded_file($temporario, $pasta.$novoNome)):
     echo "sucesso";
     else: echo "erro de upload";
     endif;


  else:
    echo "envie png, jpeg, jpg ou gif";
  endif;
    

  
  
  endif;

















?>