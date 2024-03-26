<?php 
                $senha = $_REQUEST['senha'];
                
                if ($senha == 'Dinfo2024') {
                    header('Location: ../../View/home.php');
                } else {
                    header('Location: ../../View/erro-login.php');
                }            
?>