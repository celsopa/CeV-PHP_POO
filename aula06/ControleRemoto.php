<?php
    
    require_once "interfaceControlador.php";
    
    class ControleRemoto implements Controlador
    {
        
        private $volume;
        private $ligado;
        private $tocando;
    
        /**
         * ControleRemoto constructor.
         * @param $volume
         * @param $ligado
         * @param $tocando
         */
        public function __construct()
        {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }
    
        /**
         * ControleRemoto constructor.
         */
        
        
        public function ligar()
        {
            $this->setLigado(true);
        }
        
        public function desligar()
        {
            $this->setLigado(false);
        }
        
        public function abrirMenu()
        {
            echo "<p>------ MENU ------</p>";
            echo "Está ligado? " . ($this->getLigado() ? "SIM" : "NÃO");
            echo "<br>Está tocando? " . ($this->getTocando() ? "SIM" : "NÃO");
            echo "<br>Volume: " . $this->getVolume();
            echo "<br>";
            for ($i = 0; $i < $this->getVolume(); $i += 10) {
                echo "|";
            }
            echo "<br>";
            echo "<hr>";
        }
        
        /**
         * @return mixed
         */
        private function getLigado()
        {
            return $this->ligado;
        }
        
        /**
         * @param mixed $ligado
         */
        private function setLigado($ligado): void
        {
            $this->ligado = $ligado;
        }
        
        /**
         * @return mixed
         */
        private function getVolume()
        {
            return $this->volume;
        }
        
        /**
         * @param mixed $volume
         */
        private function setVolume($volume): void
        {
            $this->volume = $volume;
        }
        
        public function fecharMenu()
        {
            echo "Fechando menu...<br>";
            echo "<hr>";
        }
        
        public function maisVolume()
        {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 10);
                echo "<br>Volume: " . $this->getVolume();
                echo "<br>";
                for ($i = 0; $i < $this->getVolume(); $i += 10) {
                    echo "|";
                }
                echo "<br>";
            } else {
                echo "<p>ERRO. Não é possível aumentar o volume.</p>";
            }
        }
        
        public function menosVolume()
        {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 10);
                echo "<br>Volume: " . $this->getVolume();
                echo "<br>";
                for ($i = 0; $i < $this->getVolume(); $i += 10) {
                    echo "|";
                }
                echo "<br>";
            } else {
                echo "<p>ERRO. Não é possível diminuir o volume.</p>";
            }
        }
        
        public function ligarMudo()
        {
            if ($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }
        
        public function desligarMudo()
        {
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }
        
        public function play()
        {
            if ($this->getLigado() && !($this->getTocando())) {
                $this->setTocando(true);
            }
        }
        
        /**
         * @return mixed
         */
        private function getTocando()
        {
            return $this->tocando;
        }
        
        /**
         * @param mixed $tocando
         */
        private function setTocando($tocando): void
        {
            $this->tocando = $tocando;
        }
        
        public function pause()
        {
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }
        
        
    }