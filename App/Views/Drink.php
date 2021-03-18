<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link href="styles/drink.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <h1>Boisson : <?php echo $title; ?></h1>
      <nav>
        <a href="/?page=home"><h2>Accueil</h2></a>
        <a href="/?page=card"><h2>Cartes</h2></a>
        <a href="/?page=server"><h2>Serveurs</h2></a>
      </nav>
    </header>
    <?php if($drink['active'] == 1) { ?>
      <img src="img/drinks/<?php echo $drink['title']; ?>.jpg" alt="<?php echo $drink['title']; ?>">
      <p>Description : <?php echo $drink['description']; ?></p>
      <p>Prix HT : <?php echo $drink['price']; ?> €</p>
      <p>Prix : <?php echo (floatval($drink['price']) * (1 + (floatval($drink['vta']) / 100))); ?> €</p>
      <p>TVA : <?php echo $drink['vta']; ?> %</p>  
    <?php } ?>
  </body>
</html>