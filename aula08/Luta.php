<?php
    
    
    require_once "../aula07/Lutador.php";
    class Luta
    {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;
    
        /**
         * Luta constructor.
         * @param $desafiado
         * @param $desafiante
         * @param $rounds
         * @param $aprovada
         */
        public function __construct()
        {
            $this->desafiado;
            $this->desafiante;
            $this->rounds;
            $this->aprovada;
        }
    
        /**
         * @return mixed
         */
        public function getDesafiado()
        {
            return $this->desafiado;
        }
    
        /**
         * @param mixed $desafiado
         */
        public function setDesafiado($desafiado): void
        {
            $this->desafiado = $desafiado;
        }
    
        /**
         * @return mixed
         */
        public function getDesafiante()
        {
            return $this->desafiante;
        }
    
        /**
         * @param mixed $desafiante
         */
        public function setDesafiante($desafiante): void
        {
            $this->desafiante = $desafiante;
        }
    
        /**
         * @return mixed
         */
        public function getRounds()
        {
            return $this->rounds;
        }
    
        /**
         * @param mixed $rounds
         */
        public function setRounds($rounds): void
        {
            $this->rounds = $rounds;
        }
    
        /**
         * @return mixed
         */
        public function getAprovada()
        {
            return $this->aprovada;
        }
    
        /**
         * @param mixed $aprovada
         */
        public function setAprovada($aprovada): void
        {
            $this->aprovada = $aprovada;
        }
    
        public function marcarLuta($lutador1, $lutador2)
        {
            if ($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 != $lutador2)
            {
                $this->aprovada = true;
                $this->desafiado = $lutador1;
                $this->desafiante = $lutador2;
            } else {
                $this->aprovada= false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }
        
        public function lutar()
        {
            if ($this->aprovada)
            {
                echo "CHEGOU A HORA...<br>";
                $this->desafiado->apresentar();
                echo "<br>";
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor)
                {
                    case 0: //empate
                        echo "<br>Empatou!<br>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1: //desafiado vence
                        echo "<br>{$this->desafiado->getNome()} venceu!<br>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2: //desafiante vence
                        echo "<br>{$this->desafiante->getNome()} venceu!<br>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                }
                
            } else {
                echo "Luta não pode acontecer!<br>";
            }
        }
        
        
    }