<?php

namespace App\Estrutura;

class Campo{
   const TEXT = 1;
   const PASSWORD = 2;
   const EMAIL = 3;
   const NUMBER = 4;
   const TEXT_AREA = 5;
   const CHECKBOX = 6;
   const RADIO = 7;
   const SELECT = 8;
   const HIDDEN = 9;
   const FILE = 10;
   const DATE = 11;
   const COLOR = 12;

   /** @var int */
   public $sTipo;

   /** @var string */
   public $sNome;

   /** @var string */
   public $sId;

   /** @var array */
   public $aAtributos = [];

   /** @var array */
   public $eventos = [];

   /** @var array */
   public $opcoes = []; // Para campos como SELECT, CHECKBOX, RADIO

   /** @var array */
   public $validacoes = [];

   public function __construct($sTipo, $sId, $sNome){
      $this->sTipo = $sTipo;
      $this->sNome = $sNome;
      $this->sId = $sId;
      $this->aAtributos['name'] = $sNome;
      $this->aAtributos['id'] = $sId;
   }

   /**
    * Define um placeholder para o campo
    * @param string $texto
    * @return $this
    */
   public function set_suggest($texto){
      $this->aAtributos['placeholder'] = $texto;
      return $this;
   }

   /**
    * Define um estilo CSS
    * @param string $sPropriedade
    * @param string $sValor
    * @return $this
    */
   public function set_style($sPropriedade, $sValor){
      $this->aAtributos['style'] = ($this->aAtributos['style'] ?? '') . "$sPropriedade: $sValor; ";
      return $this;
   }

   /**
    * Define um evento de clique
    * @param string $script
    * @return $this
    */
   public function set_onclick($script){
      $this->eventos['onclick'] = $script;
      return $this;
   }

   /**
    * Define um evento de blur
    * @param string $script
    * @return $this
    */
   public function set_blur($script){
      $this->eventos['onblur'] = $script;
      return $this;
   }

   /**
    * Define um evento de change
    * @param string $script
    * @return $this
    */
   public function set_change($script){
      $this->eventos['onchange'] = $script;
      return $this;
   }

   public function imp_campo(){
      $atributosHtml = '';
      foreach ($this->aAtributos as $key => $value) {
         $atributosHtml .= "$key=\"$value\" ";
      }

      $eventosHtml = '';
      foreach ($this->eventos as $event => $script) {
         $eventosHtml .= "$event=\"$script\" ";
      }

      // Renderização do campo com base no tipo
      switch ($this->sTipo) {
         case self::TEXT_AREA:
            echo "<textarea $atributosHtml $eventosHtml></textarea>";
            break;
         case self::TEXT:
            echo "<input type=\"text\" $atributosHtml $eventosHtml />";
            break;
         case self::PASSWORD:
            echo "<input type=\"password\" $atributosHtml $eventosHtml />";
            break;
         case self::EMAIL:
            echo "<input type=\"email\" $atributosHtml $eventosHtml />";
            break;
         case self::NUMBER:
            echo "<input type=\"number\" $atributosHtml $eventosHtml />";
            break;
         case self::HIDDEN:
            echo "<input type=\"hidden\" $atributosHtml $eventosHtml />";
            break;
         case self::FILE:
            echo "<input type=\"file\" $atributosHtml $eventosHtml />";
            break;
         case self::DATE:
            echo "<input type=\"date\" $atributosHtml $eventosHtml />";
            break;
         case self::COLOR:
            echo "<input type=\"color\" $atributosHtml $eventosHtml />";
            break;
         case self::CHECKBOX:
            break;
         case self::RADIO:
            $html = '';
            foreach ($this->opcoes as $valor => $label) {
               $html .= "<label><input type=\"" . strtolower($this->sTipo) . "\" value=\"$valor\" $atributosHtml $eventosHtml /> $label</label>";
            }
            echo $html;
            break;
         case self::SELECT:
            $html = "<select $atributosHtml $eventosHtml>";
            foreach ($this->opcoes as $valor => $label) {
               $html .= "<option value=\"$valor\">$label</option>";
            }
            $html .= "</select>";
            echo $html;
            break;
      }
   }
}
