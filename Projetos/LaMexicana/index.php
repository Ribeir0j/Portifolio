<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Mexicana</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <img src="./imagens/LaMexicana_transparente-removebg-preview.png" id="nav_logo" alt="Logo La Mexicana">
            <ul class="navList">
                <li class="navItem active"><a href="index.php">Início</a></li>
                <li class="navItem"><a href="#paletas">Paletas</a></li>
                <li class="navItem"><a href="#sorvetes">Sorvetes</a></li>
                <li class="navItem"><a href="#base">Bases Neutras p/ Milk Shakes</a></li>
                <li class="navItem"><a href="#parceria">Nossos parceiros</a></li>
            </ul>
            <i class="fa-brands fa-instagram"  id="icone-instagram"></i>
            <span class="instagram">  @lamexicanapaleteria</span>
        </nav>
    </header>

    <div class="left-side">
        <section id="sobre">
            <h1>Sobre nós</h1>
            <p>
                Na <strong>La Mexicana</strong>, somos especialistas na fabricação de sorvetes de 5 litros, bases para milkshake e paletas mexicanas. 
                Contamos com mais de 12 sabores, sempre prezando pela máxima qualidade e preços competitivos.
            </p>
            <p>
                Se você busca diversificar seu mix de produtos e atender a todos os públicos, temos a solução perfeita para o seu negócio, 
                com o melhor custo-benefício do mercado.
            </p>
            <p>
                Nossos produtos já estão em diversas hamburguerias, sorveterias e docerias de São José do Rio Preto e região!
            </p>
            <p>
                Quer conhecer nossos produtos? 
                <br>
                <br>
                <a href="https://wa.me/17982311036" target="_blank" class="whatsapp-link">
                    <i class="fab fa-whatsapp"></i> Clique aqui e solicite uma amostra sem compromisso!
                </a>
            </p>
        </section>
    </div>

    <div class="right-side">
    <section id="form">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h3>Confira as vantagens de comprar nossos produtos</h3>
            <label for="item">Qual dos nossos produtos você deseja comprar?<br><br>
                <div class="radio-group">
                    <label class="radio-label"><label class="radio-label">
                        Base Neutra 
                        <input type="radio" name="item" id="base">
                        <span class="checkmark"></span>
                    </label>
                        Paletas
                        <input type="radio" name="item" id="paleta">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-label">
                        Sorvetes
                        <input type="radio" name="item" id="sorvete">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </label>
        </form>
    </section>
</div>
</body>
    <footer>
       <p>&copy <?php echo date('Y')?></p>
    </footer>
</html>
