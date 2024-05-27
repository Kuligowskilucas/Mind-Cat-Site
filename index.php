<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="darkreader" content="disable">
    <title>Document</title>

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/padroes.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<header>
    <div class="container-header">
        <div class="conteudo-1998">
            <div class="conteudo-header item-flex">
                <div class="quadrado-branco item-flex">
                    <img src="img/icone-gato.svg" alt="logo do gato" width="69px" height="61px">
                </div>
                <div class="botoes item-flex">
                    <div class="botao-entrar">
                        <a href=""><button>Entrar</button></a>
                    </div>
                    <div class="botao-criar">
                        <a href=""><button>Criar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="container-imagens-celular">
        <div class="conteudo-1300">
            <div class="conteudo-imagens-celular item-flex">
                <div class="escala-gatinho">
                    <img src="img/escala_gatinho.png" alt="imagem da escala gatinho">
                </div>
                <div class="abertura-app">
                    <img src="img/abertura_app.png" alt="imagem da abertura do app">
                </div>
                <div class="atividades">
                    <img src="img/atividades.png" alt="imagem da tela de atividades">
                </div>

            </div>
        </div>
    </div>
    <div class="container-terapia">
        <div class="conteudo-1162">
            <div class="conteudo-terapia item-flex">
                <?php
                $Notas = [
                    [
                        "texto" => "Nos baseamos na terapia dialétia comportamental para desenvolver atividades que auxiliam em seu tratamento",
                        "imagem-celular" => "abertura_app.png",
                        "lado-direito" => false
                    ],
                    [
                        "texto" => "Nosso gráfico de humor é preciso, podendo ser personalizada para sua terapia em particular. Tornando tudo mais confortável para você",
                        "imagem-celular" => "atividades.png",
                        "lado-direito" => true
                    ],
                ];
                foreach ($Notas as $nota) { ?>
                    <?php
                    if (!$nota["lado-direito"]) { ?>
                        <div class="nota-adesiva item-flex">
                            <div class="imagem-nota item-flex">
                                <p><?= $nota["texto"] ?></p>
                            </div>
                            <div class="imagem-celular">
                                <img src="img/<?= $nota["imagem-celular"] ?>" alt="imagem do celular">
                            </div>
                        </div>
                    <?php
                    } else { ?>
                        <div class="nota-adesiva direito item-flex">
                            <div class="imagem-nota item-flex">
                                <p><?= $nota["texto"] ?></p>
                            </div>
                            <div class="imagem-celular">
                                <img src="img/<?= $nota["imagem-celular"] ?>" alt="imagem do celular">
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>