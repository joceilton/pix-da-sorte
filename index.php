<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Faz um pix da sorte</title>
</head>
<body>
  <div class="bloco">
    <h1> Faz um pix da sorte </h1>  
    <div class="img">
      imagem  
    </div>
    <p class="descricao">
      Com apenas <span class="valor">R$ 5,00</span> concorra a um Kaiak
    </p>
    
    <?php
    for ($i=1; $i>=11; $i++) {
    ?>
    
    <button type="button"> <?php echo $i; ?> </button>
    
    <?php
    }
    ?>
    
  </div>
</body>
</html>
