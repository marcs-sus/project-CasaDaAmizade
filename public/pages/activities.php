<?php
require __DIR__ . '/../../vendor/autoload.php';

use App\Estrutura\Campo;
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
            '/assets/js/script.js'
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
    <title>Calendário</title>
    <script src="/assets/js/calendario.js"></script>
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/calendar.css">
  </head>   
  <body>
  <?php include "../includes/navbar.php" ?>
  <div class="title">
      sahidu
  </div>
  <div class="calendar-container">
    <table>
        <tr>
            <td>
                <div id="calendar">
                  <div class="header">
                    <button id="prevMonth">Anterior</button>
                    <span id="currentMonth"></span>
                    <button id="nextMonth">Próximo</button>
                  </div>
                  <div class="days"></div>
                  <div class="cells"></div>
                </div>
            </td>
            <td>    
                <h1>
                    <b>
                        Fique por dentro! Confira nossos próximos eventos e não perca nenhuma atividade!
                    </b>
                </h1>
            </td>
        </tr>
    </table>
  </div>
    <?php include '../includes/footer.php'; ?>
  </body>
<?php

    }
}

$frm_atividades = new Atividades();
