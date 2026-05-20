<?php
$menuItems = ['index.php' => 'Home', 'sobre.php' => 'Sobre', 'experiencia.php' => 'Aliens', 'projetos.php' => 'Vilões', 'contato.php' => 'Contato'];
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Omnitrix - Rank de Aliens</title>
    <style>
        :root { --green: #39FF14; --dark: #0a0a0a; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: var(--dark); color: #fff; }
        
        header { padding: 30px; border-bottom: 1px solid #222; }
        nav ul { list-style: none; display: flex; justify-content: center; gap: 35px; }
        nav ul li a { color: #666; text-decoration: none; font-size: 13px; letter-spacing: 2px; font-weight: bold; text-transform: uppercase; }
        .active { color: var(--green); }
        
        main { padding: 60px 20px; max-width: 900px; margin: auto; }
        h1 { font-size: 2rem; color: var(--green); margin-bottom: 40px; text-transform: uppercase; text-align: center; }

        .rank-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); 
            gap: 20px; 
        }
        
        .alien-card { 
            background: #111; 
            border: 1px solid #222;
            border-radius: 6px; 
            overflow: hidden;
            transition: 0.2s;
            display: flex;
            flex-direction: column;
        }
        .alien-card:hover { 
            border-color: var(--green); 
            background: #161616; 
        }
        
        .alien-img-container {
            width: 100%;
            height: 180px;
            background: #1a1a1a;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid #222;
            overflow: hidden;
        }
        
        .alien-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .alien-info {
            padding: 15px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex-grow: 1;
        }
        
        .alien-header {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .number { font-weight: bold; color: var(--green); font-size: 1.1rem; }
        .alien-name { font-weight: 600; color: #eee; font-size: 1.1rem; }
        .power { color: #777; font-size: 0.9rem; line-height: 1.4; }
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

        <div class="rank-grid">
            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="alien_x.jpg" alt="Alien X">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">01</span>
                        <span class="alien-name">Alien X</span>
                    </div>
                    <span class="power">Controle total sobre a realidade.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="atomico.webp" alt="Atômico">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">02</span>
                        <span class="alien-name">Atômico</span>
                    </div>
                    <span class="power">Poder nuclear massivo.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="Gigante.webp" alt="Gigante">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">03</span>
                        <span class="alien-name">Gigante</span>
                    </div>
                    <span class="power">Força física e raios cósmicos.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="feedback.jpg" alt="Feedback">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">04</span>
                        <span class="alien-name">Feedback</span>
                    </div>
                    <span class="power">Absorve e devolve energia.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="gravattack.webp" alt="Gravattack">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">05</span>
                        <span class="alien-name">Gravattack</span>
                    </div>
                    <span class="power">Manipulação de gravidade.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="cromatico.webp" alt="Cromático">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">06</span>
                        <span class="alien-name">Cromático</span>
                    </div>
                    <span class="power">Resistência e lasers de energia.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="Enormossauro.webp" alt="Enormossauro">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">07</span>
                        <span class="alien-name">Enormossauro</span>
                    </div>
                    <span class="power">Força bruta e aumento de tamanho.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="friagem.jpg" alt="Friagem">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">08</span>
                        <span class="alien-name">Friagem</span>
                    </div>
                    <span class="power">Gelo e intangibilidade.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="diamante.webp" alt="Diamante">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">09</span>
                        <span class="alien-name">Diamante</span>
                    </div>
                    <span class="power">Criação e controle de cristais.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="chama.webp" alt="Chama">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">10</span>
                        <span class="alien-name">Chama</span>
                    </div>
                    <span class="power">Controle total do fogo.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="ecoeco.webp" alt="Eco Eco">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">11</span>
                        <span class="alien-name">Eco Eco</span>
                    </div>
                    <span class="power">Duplicação e ondas sonoras.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="quatrobracos.webp" alt="Quatro Braços">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">12</span>
                        <span class="alien-name">Quatro Braços</span>
                    </div>
                    <span class="power">Combate corpo a corpo pesado.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="XLR8.webp" alt="XLR8">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">13</span>
                        <span class="alien-name">XLR8</span>
                    </div>
                    <span class="power">Velocidade hipersônica.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="besta.webp" alt="Besta">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">14</span>
                        <span class="alien-name">Besta</span>
                    </div>
                    <span class="power">Instinto animal e rastreamento.</span>
                </div>
            </div>

            <div class="alien-card">
                <div class="alien-img-container">
                    <img src="MassaCinzenta.webp" alt="Massa Cinzenta">
                </div>
                <div class="alien-info">
                    <div class="alien-header">
                        <span class="number">15</span>
                        <span class="alien-name">Massa Cinzenta</span>
                    </div>
                    <span class="power">Inteligência tática superior.</span>
                </div>
            </div>
        </div>
    </main>
</body>
</html>