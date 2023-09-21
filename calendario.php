<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body, html{
            background-color: #ccc;
            font-size: x-large;
        }
        div.main_container{
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            gap: 2;
        }
        div.container1{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        div.container2{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
    <title><?php
    date_default_timezone_set('America/Sao_Paulo'); 
    echo date('d');
    ?>
    </title>
</head>
<body>
    <div class="main_container">
        <?php
        function linha($semana){
            echo "
            <tr>
                <td>{$semana[0]}</td>
                <td>{$semana[1]}</td>
                <td>{$semana[2]}</td>
                <td>{$semana[3]}</td>
                <td>{$semana[4]}</td>
                <td>{$semana[5]}</td>
                <td>{$semana[6]}</td>
            </tr>";
        }
        ?>
        <?php
        function calendario(){
            $dia = 1;
            $semana = array();
            while($dia <= 31){
                array_push($semana, $dia);
                if(count($semana) == 7){
                    linha($semana);
                    $semana = array();
                }
                $dia++;
            }
            linha($semana);
        }
        ?>
        <div class="container2">
            <h1>
                Estamos em <?php echo date('Y')?>
            </h1>
            <p>
                Agora são <?php echo date('H')?> horas e <?php echo date('i')?> minutos e <?php
                echo date('s')?>
            </p>
        </div>
        <div class="container1">
            <table border="1">
            <tr>
                <th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sab</th>
            </tr>
            <?php
            @calendario();
            ?>
            </table>
        </div>
    </div>
</body>
</html>