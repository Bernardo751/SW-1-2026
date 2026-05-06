<?php
$menuItems = ['index.php' => 'Home', 'sobre.php' => 'Sobre', 'experiencia.php' => 'Aliens', 'projetos.php' => 'Vilões', 'contato.php' => 'Contato'];
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ben 10 | Séries e Filmes</title>
    <style>
        :root { --green: #39FF14; --dark: #0a0a0a; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: var(--dark); color: #fff; line-height: 1.6; }
        header { padding: 30px; border-bottom: 1px solid #222; background: var(--dark); }
        nav ul { list-style: none; display: flex; justify-content: center; gap: 35px; }
        nav ul li a { color: #666; text-decoration: none; font-size: 13px; letter-spacing: 2px; font-weight: bold; text-transform: uppercase; transition: 0.3s; }
        nav ul li a:hover, .active { color: var(--green); }
        
        main { padding: 60px 20px; max-width: 850px; margin: auto; }
        h1 { font-size: 2.2rem; color: var(--green); margin-bottom: 30px; text-transform: uppercase; }
        
        .serie-item { margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid #222; }
        .serie-item h2 { color: #fff; font-size: 1.2rem; margin-bottom: 10px; text-transform: uppercase; }
        .serie-item p { color: #888; font-size: 1rem; }
        .serie-item strong { color: var(--green); }
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
        <h1>Cronologia de Séries e Filmes</h1>

        <div class="serie-item">
            <h2>Ben 10 (Clássico)</h2>
            <p>A série original onde Ben encontra o <strong>Omnitrix</strong> aos 10 anos e começa sua jornada combatendo Vilgax.</p>
        </div>

        <div class="serie-item">
            <h2>Ben 10: Força Alienígena</h2>
            <p>Cinco anos depois, Ben volta a usar o relógio para enfrentar a invasão dos <strong>Soberanos</strong> e encontrar o Vovô Max.</p>
        </div>

        <div class="serie-item">
            <h2>Ben 10: Supremacia Alienígena</h2>
            <p>Ben agora possui o <strong>Superomnitrix</strong>, que permite evoluir seus aliens para as formas Supremas.</p>
        </div>

        <div class="serie-item">
            <h2>Ben 10: Omniverse</h2>
            <p>Com um novo parceiro, Rook Blonko, Ben explora a cidade alienígena subterrânea <strong>Baixo Bellwood</strong>.</p>
        </div>

        <div class="serie-item">
            <h2>Filmes de Destaque</h2>
            <p>Inclui <strong>O Segredo do Omnitrix</strong>, <strong>Corrida Contra o Tempo</strong> (Live Action) e <strong>Invasão Alienígena</strong>.</p>
        </div>
    </main>
</body>
</html>