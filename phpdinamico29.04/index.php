<?php
$menuItems = [
    'index.php'       => 'Home',
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ben 10</title>
    <style>
        :root { --primary: #39FF14; --bg: #0a0a0a; --text: #e0e0e0; }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body { font-family: 'Inter', sans-serif; background-color: var(--bg); color: var(--text); }

        header { background: var(--bg); padding: 30px 0; border-bottom: 1px solid #222; }

        nav ul { list-style: none; display: flex; justify-content: center; gap: 40px; }

        nav ul li a { color: #666; text-decoration: none; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; transition: 0.3s; }

        nav ul li a:hover, .active { color: var(--primary) !important; }

        main { padding: 100px 20px; max-width: 700px; margin: auto; }

        h1 { font-size: 2.5rem; margin-bottom: 1.5rem; color: #fff; }

        h1::before { content: ""; display: inline-block; width: 12px; height: 12px; background: var(--primary); margin-right: 15px; border-radius: 2px; }

        p { color: #888; font-size: 1.1rem; line-height: 1.6; }

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

<?php if ($paginaAtual == 'index.php'): ?>
<main>
    <h1>Interface Inicial</h1>
    <p>Bem-vindo ao sistema de gerenciamento Ben 10.</p>
</main>
<?php endif; ?>