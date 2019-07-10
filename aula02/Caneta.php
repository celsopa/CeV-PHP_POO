<?php

    class Caneta
    {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar()
        {
            if ($this->tampada) {
                echo "<p>[ERRO] Caneta tampada.</p>";
            } else {
                echo "<p style='color:$this->cor'>Hello World ;)</p>";
                $this->carga--;
            }
        }

        public function tampar()
        {
            $this->tampada = true;
            echo "foi tampada<br>";
        }

        public function destampar()
        {
            $this->tampada = false;
            echo "foi destampada<br>";
        }

    }