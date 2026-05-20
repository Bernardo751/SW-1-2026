<?php
$menuItems = ['index.php' => 'Home', 'sobre.php' => 'Sobre', 'experiencia.php' => 'Aliens', 'projetos.php' => 'Vilões', 'contato.php' => 'Contato'];
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
        <style>
        :root { --green: #39FF14; --dark: #0a0a0a; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: var(--dark); color: #fff; line-height: 1.6;}
        header { padding: 30px; border-bottom: 1px solid #222; position: sticky; top: 0; background: var(--dark); z-index: 100; }
        nav ul { list-style: none; display: flex; justify-content: center; gap: 35px; }
        nav ul li a { color: #666; text-decoration: none; font-size: 13px; letter-spacing: 2px; font-weight: bold; text-transform: uppercase; transition: 0.3s; }
        nav ul li a:hover, .active { color: var(--green); }
        
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

        .transmission-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: 50vh;
            padding: 20px;
        }
        .transmission-section h1, 
        .transmission-section p {
            color: var(--green);
        }

        @media (max-width: 600px) {
            .profile-container { flex-direction: column; text-align: center; }
            .bio-section { border-left: none; padding-left: 0; text-align: center; }
        }
    </style>
</head>
<body>

    <div class="transmission-section">
        <h1>Sinal de Transmissão</h1>
        <p>Para comunicações urgentes, utilize a frequência dos Encanadores via sinal seguro.</p>
    </div>

</body>
</html>
