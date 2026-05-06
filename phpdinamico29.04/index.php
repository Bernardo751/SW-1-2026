<?php
$menuItems = ['index.php' => 'Home', 'sobre.php' => 'Sobre', 'experiencia.php' => 'Aliens', 'projetos.php' => 'Vilões', 'contato.php' => 'Contato'];
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ben Tennyson | Biografia</title>
    <style>
        :root { --green: #39FF14; --dark: #0a0a0a; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: var(--dark); color: #fff; line-height: 1.6; }
        header { padding: 30px; border-bottom: 1px solid #222; position: sticky; top: 0; background: var(--dark); z-index: 100; }
        nav ul { list-style: none; display: flex; justify-content: center; gap: 35px; }
        nav ul li a { color: #666; text-decoration: none; font-size: 13px; letter-spacing: 2px; font-weight: bold; text-transform: uppercase; transition: 0.3s; }
        nav ul li a:hover, .active { color: var(--green); }
        
        main { padding: 60px 20px; max-width: 850px; margin: auto; }
        
        .profile-container { 
            display: flex; 
            align-items: center; 
            gap: 40px; 
            margin-bottom: 50px;
        }

        .ben-photo {
            width: 200px;
            height: 200px;
            border: 2px solid var(--green);
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(57, 255, 20, 0.2);
            object-fit: cover;
        }

        .title-group h1 { font-size: 2.5rem; color: var(--green); text-transform: uppercase; margin: 0; }
        .title-group p { color: #555; font-weight: bold; letter-spacing: 1px; }

        .bio-section { margin-bottom: 40px; border-left: 2px solid #222; padding-left: 30px; }
        h2 { font-size: 1.1rem; color: #fff; margin-bottom: 10px; text-transform: uppercase; }
        p { color: #888; font-size: 1.05rem; }
        strong { color: var(--green); }

        @media (max-width: 600px) {
            .profile-container { flex-direction: column; text-align: center; }
            .bio-section { border-left: none; padding-left: 0; text-align: center; }
        }
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
        <div class="profile-container">
            <img src="foto-do-ben.jpg" alt="Ben Tennyson" class="ben-photo">
            
            <div class="title-group">
                <h1>Ben Tennyson</h1>
                <p>PORTADOR DO OMNITRIX</p>
            </div>
        </div>
        
        <div class="bio-section">
            <h2>A Origem</h2>
            <p>Aos dez anos de idade, durante as férias de verão, Ben descobriu o <strong>Omnitrix</strong>, um dispositivo alienígena que mudou sua vida para sempre.</p>
        </div>

        <div class="bio-section">
            <h2>O Herói</h2>
            <p>O dispositivo permite que Ben transforme seu DNA em diversas espécies, tornando-o o principal defensor da Terra contra vilões como <strong>Vilgax</strong>.</p>
        </div>
    </main>
</body>
</html>