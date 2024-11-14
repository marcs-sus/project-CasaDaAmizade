<?php

namespace App\Estrutura;

class Principal {
   private static $instance = null;
   private $filePath;

   private function __construct() {
      $this->filePath = __DIR__ . '/arquivo_texto.txt';
   }

   public static function getInstance() {
      if (self::$instance === null) {
         self::$instance = new Principal();
      }
      return self::$instance;
   }

   public function criaArquivoTexto($conteudo, $limpar = true) {
      $modo = $limpar ? 'w' : 'a';
      $arquivo = fopen($this->filePath, $modo);
      
      if (is_array($conteudo) || is_object($conteudo)) {
         ob_start();  
         print_r($conteudo);  
         $conteudoDump = ob_get_clean();  
         fwrite($arquivo, $conteudoDump . PHP_EOL);
      } 
      else {
         fwrite($arquivo, $conteudo . PHP_EOL);
      }
      fclose($arquivo);
   }

   /**
    * Realiza o require da script js
    * @param string $sScript
    */
   public function requireJS($sScript){
      echo "<script>{$sScript}</script>";
   }

   /**
    * Realiza o require da script css
    * @param mixed $sScript
    */
   public function requireCSS($sScript){
      echo "<link rel=\"stylesheet\" href=\"{$sScript}\">";
   }
}
