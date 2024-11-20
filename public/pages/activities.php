<?php
require __DIR__ . '/../../vendor/autoload.php';

use App\Estrutura\Principal;

class Atividades
{
    public function __construct()
    {
        $this->setRequiresJs();
        $this->renderiza();
    }

    private function setRequiresJs()
    {
        Principal::getInstance()->requireJS([
            '/assets/js/script.js',
            '/assets/js/calendario.js'
        ]);
    }

    private function renderiza()
    {
        $this->renderizaForm();
    }

    private function renderizaForm()
    {
        ?>
        <head>
            <meta charset="UTF-8">
            <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
            <title>Calendário</title>

            <link rel="stylesheet" href="../assets/css/normalize.css">
            <link rel="stylesheet" href="../assets/css/footer.css">
            <link rel="stylesheet" href="../assets/css/navbar.css">

            <link rel="stylesheet" href="../assets/css/calendar.css">
        </head>

        <body>
            <?php include "../includes/navbar.php" ?>

            <main>
                <div class="title">
                    <i>📅</i> AGENDA <?php echo date('Y')?> 
                </div>
                <div class="calendar-wrapper">
                    <div class="calendar-container">
                        <div id="calendar">
                            <div class="header">
                                <button id="prevMonth">Anterior</button>
                                <span id="currentMonth">Novembro 2024</span>
                                <button id="nextMonth">Próximo</button>
                            </div>
                            <div class="days"></div>
                            <div class="cells"></div>
                        </div>
                    </div>
                    <div class="events-info">
                        <h1><b>Fique por dentro! Confira nossos próximos eventos e não perca nenhuma atividade!</b></h1>
                    </div>
                </div>
            </main>

            <?php include '../includes/footer.php'; ?>
        </body>
        <?php
    }
}

$frm_atividades = new Atividades();
