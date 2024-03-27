<?php 
                $senha = $_REQUEST['senha'];
                
                if ($senha == 'Dinfo2024') {
                    session_start();
                    $_SESSION['logado'] = true;
                    header('Location: ../../View/home.php');
                } 
?>