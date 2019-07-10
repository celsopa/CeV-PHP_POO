<?php
    
    
    class Lutador
    {
        private $nome, $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria;
        private $vitorias, $derrotas, $empates;
    
        /**
         * Lutador constructor.
         * @param $nome
         * @param $nacionalidade
         * @param $idade
         * @param $altura
         * @param $peso
         * @param $vitorias
         * @param $derrotas
         * @param $empates
         */
        public function __construct(
            $nome,
            $nacionalidade,
            $idade,
            $altura,
            $peso,
            $vitorias,
            $derrotas,
            $empates
        ) {
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->setPeso($peso);
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }
    
        /**
         * @param mixed $peso
         */
        public function setPeso($peso)
        {
            $this->peso = $peso;
            $this->setCategoria();
        }
    
        /**
         * @param mixed $categoria
         */
        private function setCategoria(): void
        {
            if ($this->getPeso()<52.2){
                $this->categoria = "Inválido";
            } elseif ($this->getPeso()<=70.3){
                $this->categoria = "Leve";
            } elseif ($this->getPeso()<=83.9){
                $this->categoria = "Médio";
            } elseif ($this->getPeso()<=120.2){
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }
    
        /**
         * @return mixed
         */
        public function getPeso()
        {
            return $this->peso;
        }
    
        /**
         * @param mixed $nacionalidade
         */
        public function setNacionalidade($nacionalidade): void
        {
            $this->nacionalidade = $nacionalidade;
        }
    
        /**
         * @return mixed
         */
        public function getIdade()
        {
            return $this->idade;
        }
    
        /**
         * @param mixed $idade
         */
        public function setIdade($idade): void
        {
            $this->idade = $idade;
        }
    
        /**
         * @param mixed $altura
         */
        public function setAltura($altura): void
        {
            $this->altura = $altura;
        }
    
        public function ganharLuta()
        {
            $this->setVitorias($this->getVitorias() + 1);
        }
    
        /**
         * @return mixed
         */
        public function getVitorias()
        {
            return $this->vitorias;
        }
    
        /**
         * @param mixed $vitorias
         */
        public function setVitorias($vitorias): void
        {
            $this->vitorias = $vitorias;
        }
    
        public function perderLuta()
        {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
    
        /**
         * @param mixed $derrotas
         */
        public function setDerrotas($derrotas): void
        {
            $this->derrotas = $derrotas;
        }
    
        /**
         * @return mixed
         */
        public function getDerrotas()
        {
            return $this->derrotas;
        }
    
        public function empatarLuta()
        {
            $this->setEmpates($this->getEmpates() + 1);
        }
    
        /**
         * @param mixed $empates
         */
        public function setEmpates($empates): void
        {
            $this->empates = $empates;
        }
    
        /**
         * @return mixed
         */
        public function getEmpates()
        {
            return $this->empates;
        }
    
        public function apresentar()
        {
            $l = array("direito", "esquerdo");
            $r = rand(0,1);
            $lado = $l[$r];
            echo "No canto {$lado}, vindo do {$this->getNacionalidade()}, com {$this->getAltura()}m de altura e pesando {$this->getPeso()}kg: {$this->getNome()}!!!<br>";
            echo "Acumulando {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates.<br>";
        }
    
        /**
         * @return mixed
         */
        public function getNacionalidade()
        {
            return $this->nacionalidade;
        }
        
        /**
         * @return mixed
         */
        public function getAltura()
        {
            return $this->altura;
        }
        
        /**
         * @return mixed
         */
        public function getNome()
        {
            return $this->nome;
        }
        
        /**
         * @param mixed $nome
         */
        public function setNome($nome): void
        {
            $this->nome = $nome;
        }
        
        public function status()
        {
            echo "----------<br>{$this->getNome()} da categoria {$this->getCategoria()}:<br>{$this->getVitorias()} vitórias<br>{$this->getDerrotas()} derrotas<br>{$this->getEmpates()} empates.<br>----------<br>";
        }
        
        /**
         * @return mixed
         */
        public function getCategoria()
        {
            return $this->categoria;
        }
    }