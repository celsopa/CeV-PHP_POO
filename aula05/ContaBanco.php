<?php
    
    
    class ContaBanco
    {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        
        function __construct($dono)
        {
            $this->numConta = random_int(11111, 99999);
            $this->tipo;
            $this->dono = $dono;
            $this->saldo = 0;
            $this->status = false;
            echo "Conta de {$dono} criada com sucesso!<br>";
            echo "<hr>";
            
        }
        
        function get_numConta()
        {
            return $this->numConta;
        }
        
        function set_numConta($num)
        {
            $this->numConta = $num;
        }
        
        function get_tipo()
        {
            return $this->tipo;
        }
        
        function set_tipo($tipo)
        {
            $this->tipo = $tipo;
        }
        
        function get_dono()
        {
            return $this->dono;
        }
        
        function set_dono($dono)
        {
            $this->dono = $dono;
        }
        
        function get_saldo()
        {
            return $this->saldo;
        }
        
        function set_saldo($saldo)
        {
            $this->saldo = $saldo;
        }
        
        function get_status()
        {
            return $this->status;
        }
        
        function set_status($status)
        {
            $this->status = $status;
        }
        
        public function abrirConta($tipo)
        {
            $this->set_tipo($tipo);
            $this->status = true;
            if ($this->tipo == "CP") {
                $this->saldo = 150.00;
                echo "<p>Conta-Poupança Aberta. Bônus de R$ 150,00.<br>Saldo Inicial: R$ {$this->saldo},00</p>";
            } else {
                if ($this->tipo == "CC") {
                    $this->saldo = 50.00;
                    echo "<p>Conta-Corrente Aberta. Bônus de R$ 50,00.<br>Saldo Inicial: R$ {$this->saldo},00</p>";
                }
            }
            echo "<hr>";
        }
        
        public function fecharConta()
        {
            if ($this->get_saldo() == 0) {
                $this->status = false;
                echo "<p>Conta de {$this->dono} encerrada.</p>";
            } else {
                if ($this->saldo < 0) {
                    echo "<p>Não é possível encerrar a conta de {$this->dono}, saldo NEGATIVO.<br>Saldo Atual: R$ {$this->saldo},00.</p>";
                } else {
                    if ($this->saldo > 0) {
                        echo "<p>Não é possível encerrar conta de {$this->dono}, saldo POSITIVO.<br>Saldo Atual: R$ {$this->saldo},00.</p>";
                    }
                }
            }
            echo "<hr>";
        }
        
        public function depositar($valor)
        {
            if ($this->status) {
                $this->saldo += $valor;
                echo "<p>Depósito de R$ {$valor},00 realizado na conta de {$this->dono}.<br>Novo saldo: R$ {$this->saldo},00</p>";
            } else {
                echo "<p>Conta não ativa. Depósito não realizado.</p>";
            }
            echo "<hr>";
        }
        
        public function sacar($valor)
        {
            if ($this->status && $this->saldo >= $valor) {
                $this->saldo -= $valor;
                echo "<p>Saque de R$ {$valor},00 na conta de {$this->dono} autorizado<br>Novo saldo: R$ {$this->saldo},00</p>";
            } else {
                if (!$this->status) {
                    echo "<p>Conta de {$this->dono} não ativa. Saque não pode ser realizado.</p>";
                } else {
                    if ($this->saldo < $valor) {
                        echo "<p>Saldo de {$this->dono} insufienciente.<br>Saldo Atual: R$ {$this->saldo},00</p>";
                    }
                }
            }
            echo "<hr>";
        }
        
        public function pagarMensal()
        {
            if ($this->tipo == "CC") {
                $v= 12.00;
            } else {
                $v= 20.00;
            }
            $this->set_saldo($this->get_saldo()-$v);
            echo "<p>Mensalidade de R$ {$v},00 debitada na conta de {$this->dono}.<br>Novo saldo: R$ {$this->saldo},00</p>";
            echo "<hr>";
        }
    }