<?php

class MudarEntidade
{

    public static function show()
    {
        echo "<div class='mostrar-entidades'>";
        
        echo "<center>";
        echo "<style type='text/css' scoped>";
        echo ".button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
          }
          .button1 {background-color: #4CAF50;} /* Green */
          .button2 {background-color: #008CBA;} /* Blue */
          .button3 {background-color: #FF0000;} /* Red */

          .center {
            margin-left: auto;
            margin-right: auto;
          }

          .buttons { 
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
          }
          .buttons button { 
            width: 35%;
          }"; 

        echo "</style>";

        echo "<table class='center buttons'>";
            echo "<tr><td><button type=button class='button button1' onclick='mudarEntidade(1,1)'>Acompanhar / Criar chamado na Automação</button></td></tr>";   
            echo "<tr><td><button type=button class='button button2' onclick='mudarEntidade(1,3)'>Acompanhar / Criar chamado na Mecânica</button></td></tr>";   
            echo "<tr><td><button type=button class='button button3' onclick='mudarEntidade(1,2)'>Acompanhar / Criar chamado na Infra</button></td></tr>";   
        echo "</table>";
        echo "</center>";

        echo "</div><br><br>";

        echo "<script type='text/javascript'>";
        echo "function mudarEntidade(profile,entity)
            {
                window.location = '/front/helpdesk.public.php?newprofile='+profile;
                sleep(500);
                window.location = '/front/helpdesk.public.php?active_entity='+entity;
            }

            function sleep(milliseconds) {
                var start = new Date().getTime();
                for (var i = 0; i < 1e7; i++) {
                  if ((new Date().getTime() - start) > milliseconds){
                    break;
                  }
                }
            }";
        echo "</script>";
    }
}

?>
