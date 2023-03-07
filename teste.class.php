<?php
    require_once("pessoa.class.php");

        class Teste{
            private $pessoa;

                public function __construct(){
                    $pessoa = new Pessoa();
                    
                        $pessoa ->setNome($_POST['nome']."<br>" ."<br>") ;
                        echo $pessoa -> getNome();
            
                        $pessoa->setEndereco($_POST['endereco']."<br>" ."<br>") ;
                        echo $pessoa -> getEndereco();
                
                        $pessoa->setBairro($_POST['bairro']."<br>" ."<br>") ;
                        echo $pessoa -> getbairro();

                        $pessoa->setCep($_POST['cep']."<br>" ."<br>") ;
                        echo $pessoa -> getcep();
                
                        $pessoa->setCidade($_POST['cidade']."<br>" ."<br>") ;
                        echo $pessoa -> getcidade();

                        $pessoa->setEstado($_POST['estado']."<br>" ."<br>") ;
                        echo $pessoa -> getestado();
                
                    }

            }new Teste
?>