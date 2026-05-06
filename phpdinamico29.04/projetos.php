<?php
$menuItems = ['index.php' => 'Home', 'sobre.php' => 'Sobre', 'experiencia.php' => 'Aliens', 'projetos.php' => 'Vilões', 'contato.php' => 'Contato'];
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Omnitrix | Database de Vilões</title>
    <style>
        :root { --green: #39FF14; --dark: #0a0a0a; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: var(--dark); color: #fff; line-height: 1.6; }
        
        header { padding: 30px; border-bottom: 1px solid #222; background: var(--dark); }
        nav ul { list-style: none; display: flex; justify-content: center; gap: 35px; }
        nav ul li a { color: #666; text-decoration: none; font-size: 13px; letter-spacing: 2px; font-weight: bold; text-transform: uppercase; }
        .active { color: var(--green); }
        
        main { padding: 60px 20px; max-width: 850px; margin: auto; }
        h1 { font-size: 2rem; color: var(--green); margin-bottom: 40px; text-transform: uppercase; border-left: 5px solid var(--green); padding-left: 15px; }

        .enemy-list { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .enemy-card { 
            background: #111; 
            padding: 25px; 
            border-radius: 8px; 
            border: 1px solid #222; 
            transition: 0.3s;
        }
        .enemy-card:hover { border-color: var(--green); transform: translateY(-5px); }
        
        .enemy-card h3 { color: var(--green); margin-bottom: 10px; font-size: 1.1rem; text-transform: uppercase; }
        .enemy-card p { color: #888; font-size: 0.95rem; }

        @media (max-width: 600px) { .enemy-list { grid-template-columns: 1fr; } }
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
        <h1>Ameaças Detectadas</h1>

        <div class="enemy-list">
            <div class="enemy-card">
                <h3>Vilgax</h3>
                <p>O maior adversário de Ben. Um conquistador que busca o Omnitrix para dominar a galáxia.</p>
            </div>
            <div class="enemy-card">
                <h3>Kevin 11</h3>
                <p>Antigo rival com poder de absorção. Hoje atua como um aliado tático importante.</p>
            </div>
            <div class="enemy-card">
                <h3>Albedo</h3>
                <p>Cientista Galvaniano que tentou copiar o relógio e ficou preso na aparência de Ben.</p>
            </div>
            <div class="enemy-card">
                <h3>Dr. Animo</h3>
                <p>Especialista em mutações genéticas que usa animais para tentar derrotar o portador.</p>
            </div>
            <div class="enemy-card">
                <h3>Aggregor</h3>
                <p>Um Osmosiano que buscou os poderes de cinco aliens para se tornar supremo.</p>
            </div>
            <div class="enemy-card">
                <h3>Khyber</h3>
                <p>O caçador que usa o Nemetrix para rastrear e combater as transformações de Ben.</p>
            </div>
        </div>
    </main>
</body>
</html>