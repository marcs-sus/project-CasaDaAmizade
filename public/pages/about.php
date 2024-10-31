<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa da Amizade - Quem Somos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Font Stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap">

    <!-- Additional Stylesheets -->
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">

    <link rel="stylesheet" href="../assets/css/about.css">
</head>

<body>
    <!-- Header section -->
    <?php include "../includes/navbar.php" ?>

    <!-- Main section -->
    <main class="about-main">
        <!-- Fundo principal -->
        <section>
            <div class="fundoprincipal">
                <h1>Quem Somos</h1>
            </div>
            <p class="legendaprincipal">Somos uma organização sem fins lucrativos, nosso objetivo é colaborar com a
                comunidade através do desenvolvimento de atividades de caráter filantrópico. </p>
        </section>

        <!-- Layout -->
        <section>
            <div class="layout">
                <div class="row">
                    <div class="voluntariado">
                        <h2>VOLUNTARIADO</h2>
                        <div class="voluntariado_imagem"><img src="../assets/img/voluntariado.jpeg" alt="Imagem de voluntários">
                        </div>
                        <p class="legendadisplay">
                            Todos os envolvidos trabalham de forma voluntária em nossas atividades, podendo ser
                            efetivos,
                            colaboradores
                            (apresentados por um associado efetivo e aprovado em AGO), ou beneméritos (título de
                            reconhecimento
                            por ações
                            significativas junto à associação).
                        </p>
                    </div>

                    <div class="quem-ajudamos">
                        <h2>QUEM AJUDAMOS</h2>
                        <div class="voluntariado_imagem"><img src="../assets/img/quemajudamos].jpeg"
                                alt="Imagem de quem foi ajudado">
                        </div>
                        <p class="legendadisplay">
                            Temos como prioridade o atendimento a crianças e idosos, pois reconhecemos a importância de
                            atender
                            suas necessidades
                            específicas. Além disso, também atendemos pessoas que sofrem em decorrência de incidentes
                            climáticos, buscando
                            oferecer suporte a quem enfrenta dificuldades em momentos desafiadores.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Members -->
        <section>
            <div class="association-members">
                <h3 class="section-title">Associadas</h3>
                <div class="member-categories">
                    <div class="member-category">
                        <h4 class="member-category-title">Associadas efetivas</h4>
                        <p class="member-names">Bruna Schulze, Etla Weiss da Costa, Jaqueline Franz, Joice Cristina
                            Teixeira F.
                            da Cruz, Juvelina Maria Kühl, Katiane de Liz Santos, Marlete Gampe Schulze, Mirian
                            Gonçalves, Pamela
                            Gabriela Schulze, Patricia Adriano Ribeiro, Silvana Sandra Vicente Marques, Silvana
                            Zucatelli Kühl.
                        </p>
                    </div>
                    <div class="member-category">
                        <h4 class="member-category-title">Associadas colaboradoras</h4>
                        <p class="member-names">Edmara Cristina Vicent Fronza Eliete Waidlich Kryzanowski, Mara Luzia de
                            Oliveira Kühl, Jaqueline Tatiana da Silva.</p>
                    </div>
                    <div class="member-category">
                        <h4 class="member-category-title">Associadas beneméritas</h4>
                        <p class="member-names">Adriani Conaco, Alvacir Tereza Carvalho Vicenti, Gisele Monique, Ilse
                            Alda
                            Reinke, Irani Pamplona Peters, Leda Knihs, Lurdes Dallabona de Abreu, Margot Hobus Wagner,
                            Riolanda
                            Conceição Fach</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer section -->
    <?php include '../includes/footer.php'; ?>

</body>

</html>