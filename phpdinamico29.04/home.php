<?php
$menuItems = [
    'home.php'        => 'Home',
    'sobre.php'       => 'Sobre',
    'experiencia.php' => 'Experiências',
    'projetos.php'    => 'Projetos',
    'contato.php'     => 'Contato'
];
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ben 10 | Home</title>
    <style>
        
        :root { --primary: #39FF14; --bg: #0a0a0a; --text: #e0e0e0; }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body { font-family: sans-serif; background-color: var(--bg); color: var(--text); }

        header { padding: 30px 0; border-bottom: 1px solid #222; }

        nav ul { list-style: none; display: flex; justify-content: center; gap: 40px; }

        nav ul li a { color: #666; text-decoration: none; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; }

        nav ul li a:hover, .active { color: var(--primary); }

        main { padding: 100px 20px; max-width: 700px; margin: auto; text-align: center; }

        h1 { font-size: 2.5rem; color: #fff; margin-bottom: 20px; }

        h1::before { content: ""; display: inline-block; width: 12px; height: 12px; background: var(--primary); margin-right: 15px; }

        p { color: #888; line-height: 1.6; }

    </style>
</head>
<body>

<header>
    <nav>
        <ul>
            <?php foreach ($menuItems as $link => $nome): ?>
                <li>
                    <a href="<?php echo $link; ?>" target="_blank" class="<?php echo ($paginaAtual == $link) ? 'active' : ''; ?>">
                        <?php echo $nome; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<main>
    <h1>Base de Operações</h1>
    <p>Sistema Omnitrix carregado. Selecione um módulo no menu para abrir em uma nova guia.</p>
</main>

</body>
</html>