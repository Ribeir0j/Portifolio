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
            <li class="navItem"><a href="javascript:void(0)" onclick="mostrarDescricao('Paletas')">Paletas</a></li>
            <li class="navItem"><a href="javascript:void(0)" onclick="mostrarDescricao('Sorvetes')">Sorvetes</a></li>
            <li class="navItem"><a href="javascript:void(0)" onclick="mostrarDescricao('Base Neutra')">Bases Neutras p/ Milk Shakes</a></li>
        </ul>

        <a href="https://wa.me/17982311036" target="_blank" class="whatsapp-icon">
            <i class="fab fa-whatsapp"></i>
            <span class="whatsapp-number">+55 17 98231-1036</span>
        </a>
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
                        <label class="radio-label">
                            Base Neutra 
                            <input type="radio" name="item" id="base neutra" onclick="mostrarDescricao('Base Neutra')">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-label">
                            Paletas
                            <input type="radio" name="item" id="paleta" onclick="mostrarDescricao('Paletas')">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-label">
                            Sorvetes
                            <input type="radio" name="item" id="sorvete" onclick="mostrarDescricao('Sorvetes')">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </label>
            </form>
        </section>

        <div class="descricao-produto" id="descricao">
            <p id="texto-descricao"></p>
        </div>
    </div>

    <footer>
    <p>
    <a href="https://www.instagram.com/lamexicanapaleteria/" target="_blank" class="instagram">
        <i class="fab fa-instagram" id="icone-instagram"></i>
        @lamexicanapaleteria </a> 
    
    </p>
</footer>

    <script>
        function mostrarDescricao(produto) {
            let descricao = document.getElementById("descricao");
            let textoDescricao = document.getElementById("texto-descricao");

            textoDescricao.innerHTML = "";

            if (produto === "Base Neutra") {
                textoDescricao.innerHTML = "<h3>Vantagens</h3> <ul><li>Aumente seus lucros - Faça milk shakes e sobremesas que elevam seu ticket médio;</li> <li>Rendimento - Cada caixa rende até <b>21 copos de 500ml</b> de milkshake, ideal para escalar as vendas;</li> <li>Custo-Benefício - Excelência com o melhor custo, garantindo competitividade no mercado;</li><li>Padronização do sabor e da qualidade dos seus produtos.</li></ul>";
            } else if (produto === "Paletas") {
                textoDescricao.innerHTML = "<h3>Vantagens</h3> <ul><li>Atrai Clientes - As paletas são uma tendência e garantem maior fluxo de pessoas curiosas por experimentar sobremesas diferenciadas;</li> <li>Alto valor percebido - Produto premium que aumenta o ticket médio e a lucratividade do seu negócio;</li> <li>Variedade de Sabores - Frutas naturais, combinações cremosas e sabores irresistíveis, como ferrero, ninho com nutella e oreo.</li></ul>";
            } else if (produto === "Sorvetes") {
                textoDescricao.innerHTML = "<h3>Vantagens</h3> <ul><li>Alta Rentabilidade - Perfeito para atender porções individuais até sobremesas personalizadas, maximizando seus lucros;</li><li>Versatilidade - Ideal para os mais diversos tipos de restaurantes, sorveterias e lanchonetes, complementando qualquer cardápio; <li>Custo-Benefício Imbatível - Com um rendimento excepcional, você oferece qualidade premium sem pesar no bolso.</li></ul>";
            }

            descricao.classList.add("show");
        }
    </script>

</body>  
</html>
