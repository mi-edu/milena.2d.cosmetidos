<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Loja Cosmetics Stars</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header>
  <h1>✨ Loja Cosmetics Stars ✨</h1>
</header>

<div class="container">

  <div class="card">
    <div class="card-img skincare"></div>
    <h2>Skincare</h2>
    <p>Produtos para cuidar da sua pele com carinho.</p>
  </div>

  <div class="card">
    <div class="card-img haircare"></div>
    <h2>Haircare</h2>
    <p>Cuidando dos seus cabelos todos os dias.</p>
  </div>

  <div class="card">
    <div class="card-img makes"></div>
    <h2>Makes</h2>
    <p>Maquiagem para valorizar sua beleza natural.</p>
  </div>

  <div class="card">
    <div class="card-img unhas"></div>
    <h2>Unhas</h2>
    <p>Esmaltes e cuidados para unhas perfeitas.</p>
  </div>

  <div class="card">
    <div class="card-img masculinos"></div>
    <h2>Masculinos</h2>
    <p>Produtos especiais para os cuidados do homem.</p>
  </div>

  <div class="card">
    <div class="card-img infantil"></div>
    <h2>Infantil</h2>
    <p>Cuidados delicados para os pequenos.</p>
  </div>

</div>

<footer>
  <p>© 2025 Cosmetics Stars - Todos os direitos reservados</p>
</footer>

</body>
</html>
