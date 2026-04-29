<?php
$menuItems = [
    'home'         => 'Home',
    'sobre'        => 'Sobre',
    'experiencias' => 'Experiências',
    'projetos'     => 'Projetos',
    'contato'      => 'Contato'
];

$paginaAtiva = isset($_GET['pg']) ? $_GET['pg'] : 'home';

if (!array_key_exists($paginaAtiva, $menuItems)) {
    $paginaAtiva = 'home';
}

$conteudo = [
    'home' => [
        'titulo' => 'Bem-vindo ao Meu Portfólio',
        'texto'  => 'Desenvolvedor apaixonado por criar soluções inteligentes com PHP.'
    ],
    'sobre' => [
        'titulo' => 'Sobre Mim',
        'texto'  => 'Estudante de tecnologia focado em aprendizado contínuo e código limpo.'
    ],
    'experiencias' => [
        'titulo' => 'Trajetória Profissional',
        'texto'  => 'Experiência com desenvolvimento web, suporte técnico e projetos acadêmicos.'
    ],
    'projetos' => [
        'titulo' => 'Meus Projetos',
        'texto'  => 'Confira meus repositórios no GitHub e aplicações em produção.'
    ],
    'contato' => [
        'titulo' => 'Fale Comigo',
        'texto'  => 'Disponível para parcerias e novas oportunidades: email@exemplo.com'
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio Profissional | <?php echo $menuItems[$paginaAtiva]; ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #121212; color: #e0e0e0; line-height: 1.6; }
        header { background-color: #1f1f1f; padding: 20px 0; border-bottom: 2px solid #333; position: sticky; top: 0; }
        nav ul { list-style: none; display: flex; justify-content: center; gap: 30px; }
        nav ul li a { color: #888; text-decoration: none; font-weight: 500; transition: 0.3s; text-transform: uppercase; font-size: 14px; letter-spacing: 1px; }
        nav ul li a:hover { color: #00adb5; }
        .active { color: #00adb5 !important; border-bottom: 2px solid #00adb5; padding-bottom: 5px; }
        main { padding: 80px 20px; max-width: 800px; margin: auto; text-align: center; min-height: 80vh; }
        h1 { font-size: 3rem; margin-bottom: 20px; color: #fff; }
        p { font-size: 1.2rem; color: #b0b0b0; }
        footer { text-align: center; padding: 40px; background-color: #1a1a1a; color: #666; font-size: 0.9rem; }
    </style>
</head>
<body>

    <header>
        <nav>
            <ul>
                <?php 
                foreach ($menuItems as $slug => $titulo) {
                    $classe = ($paginaAtiva == $slug) ? 'class="active"' : '';
                    echo "<li><a href='?pg=$slug' $classe>$titulo</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>

    <main>
        <h1><?php echo $conteudo[$paginaAtiva]['titulo']; ?></h1>
        <p><?php echo $conteudo[$paginaAtiva]['texto']; ?></p>
    </main>

    <footer>
        
    </footer>

</body>
</html>