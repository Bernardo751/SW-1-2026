<?php
$menuItems = ['index.php' => 'Home', 'sobre.php' => 'Sobre', 'experiencia.php' => 'Aliens', 'projetos.php' => 'Vilões', 'contato.php' => 'Contato'];
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Omnitrix | Rank de Aliens</title>
    <style>
        :root { --green: #39FF14; --dark: #0a0a0a; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: var(--dark); color: #fff; }
        
        header { padding: 30px; border-bottom: 1px solid #222; }
        nav ul { list-style: none; display: flex; justify-content: center; gap: 35px; }
        nav ul li a { color: #666; text-decoration: none; font-size: 13px; letter-spacing: 2px; font-weight: bold; text-transform: uppercase; }
        .active { color: var(--green); }
        
        main { padding: 60px 20px; max-width: 800px; margin: auto; }
        h1 { font-size: 2rem; color: var(--green); margin-bottom: 40px; text-transform: uppercase; text-align: center; }

        .rank-list { display: flex; flex-direction: column; gap: 15px; }
        .alien-row { 
            display: flex; 
            align-items: center; 
            background: #111; 
            padding: 15px 20px; 
            border-radius: 4px; 
            border-left: 3px solid #222;
            transition: 0.2s;
        }
        .alien-row:hover { border-left-color: var(--green); background: #161616; }
        
        .number { font-weight: bold; color: var(--green); width: 40px; font-size: 1.2rem; }
        .alien-name { font-weight: 600; width: 180px; color: #eee; }
        .power { color: #777; font-size: 0.95rem; }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php foreach ($menuItems as $link => $nome): ?>
                    <li><a href="<?php echo $link; ?>" target="_blank" class="<?php echo ($paginaAtual == $link) ? 'active' : ''; ?>"><?php echo $nome; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Níveis de Poder: Top 15</h1>

        <div class="rank-list">
            <div class="alien-row"><span class="number">01</span><span class="alien-name">Alien X</span><span class="power">Controle total sobre a realidade.</span></div>
            <div class="alien-row"><span class="number">02</span><span class="alien-name">Atômico</span><span class="power">Poder nuclear massivo.</span></div>
            <div class="alien-row"><span class="number">03</span><span class="alien-name">Gigante</span><span class="power">Força física e raios cósmicos.</span></div>
            <div class="alien-row"><span class="number">04</span><span class="alien-name">Feedback</span><span class="power">Absorve e devolve energia.</span></div>
            <div class="alien-row"><span class="number">05</span><span class="alien-name">Gravattack</span><span class="power">Manipulação de gravidade.</span></div>
            <div class="alien-row"><span class="number">06</span><span class="alien-name">Cromático</span><span class="power">Resistência e lasers de energia.</span></div>
            <div class="alien-row"><span class="number">07</span><span class="alien-name">Enormossauro</span><span class="power">Força bruta e aumento de tamanho.</span></div>
            <div class="alien-row"><span class="number">08</span><span class="alien-name">Friagem</span><span class="power">Gelo e intangibilidade.</span></div>
            <div class="alien-row"><span class="number">09</span><span class="alien-name">Diamante</span><span class="power">Criação e controle de cristais.</span></div>
            <div class="alien-row"><span class="number">10</span><span class="alien-name">Chama</span><span class="power">Controle total do fogo.</span></div>
            <div class="alien-row"><span class="number">11</span><span class="alien-name">Eco Eco</span><span class="power">Duplicação e ondas sonoras.</span></div>
            <div class="alien-row"><span class="number">12</span><span class="alien-name">Quatro Braços</span><span class="power">Combate corpo a corpo pesado.</span></div>
            <div class="alien-row"><span class="number">13</span><span class="alien-name">XLR8</span><span class="power">Velocidade hipersônica.</span></div>
            <div class="alien-row"><span class="number">14</span><span class="alien-name">Besta</span><span class="power">Instinto animal e rastreamento.</span></div>
            <div class="alien-row"><span class="number">15</span><span class="alien-name">Massa Cinzenta</span><span class="power">Inteligência tática superior.</span></div>
        </div>
    </main>
</body>
</html>