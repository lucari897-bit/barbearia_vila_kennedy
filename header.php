<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Barbinharia | Barbearia em Vila Kennedy - Rio de Janeiro</title>
<meta name="description" content="Barbinharia — barbearia em Vila Kennedy, Rio de Janeiro. Cortes, barba e atendimento com hora marcada em ambiente familiar e climatizado.">
<meta name="theme-color" content="#080808">
<meta property="og:type" content="website">
<meta property="og:title" content="Barbinharia | Barbearia em Vila Kennedy - Rio de Janeiro">
<meta property="og:description" content="Cortes, barba e atendimento com hora marcada. Sem fila, sem espera.">
<meta property="og:image" content="assets/images/logo-640.png">
<meta property="og:locale" content="pt_BR">
<link rel="icon" type="image/png" href="assets/icons/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<a class="skip" href="#conteudo">Pular para o conteúdo</a>
<header class="header" id="topo">
  <div class="wrap bar">
    <a class="brand" href="#inicio" aria-label="Barbinharia — início"><img src="assets/images/logo-640.png" alt="Logo Barbinharia" width="123" height="80"></a>
    <nav id="menu" class="nav" aria-label="Principal">
      <a href="#inicio">Início</a><a href="#sobre">Sobre</a><a href="#servicos">Serviços</a><a href="#equipe">Nossa Equipe</a>
      <a href="#galeria">Galeria</a><a href="#localizacao">Localização</a><a href="#contato">Contato</a>
      <?php btn_agendar('AGENDAR','nav-cta'); ?>
    </nav>
    <button class="burger" aria-label="Abrir menu" aria-expanded="false" aria-controls="menu"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="conteudo">
