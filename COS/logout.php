<?php
             session_start();
                if(isset($_SESSION['user']))
                {
                unset($_SESSION['user']);
                echo "<script> location.href='login.php'; </script>";
                }
               
?>