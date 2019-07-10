<?php

    Class Caneta
    {
        private $cor;
        private $modelo;
        private $ponta;
        private $tampada;
    
        /**
         * Caneta constructor.
         * @param $cor
         * @param $modelo
         * @param $ponta
         * @param $tampada
         */
        public function __construct($cor, $modelo, $ponta)
        {
            $this->cor = $cor;
            $this->modelo = $modelo;
            $this->ponta = $ponta;
            $this->setTampada();
        }
    
        /**
         * @return mixed
         */
        public function getCor()
        {
            return $this->cor;
        }
    
        /**
         * @param mixed $cor
         */
        public function setCor($cor)
        {
            $this->cor = $cor;
        }
    
        /**
         * @return mixed
         */
        public function getModelo()
        {
            return $this->modelo;
        }
    
        /**
         * @param mixed $modelo
         */
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;
        }
    
        /**
         * @return mixed
         */
        public function getPonta()
        {
            return $this->ponta;
        }
    
        /**
         * @param mixed $ponta
         */
        public function setPonta($ponta)
        {
            $this->ponta = $ponta;
        }
    
        /**
         * @return mixed
         */
        public function getTampada()
        {
            return $this->tampada;
        }
    
        /**
         * @param mixed $tampada
         */
        public function setTampada()
        {
            $this->tampada = 1;
        }
    
    
    }
?>