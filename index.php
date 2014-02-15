<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <form name="matriculaForm" id="matriculaForm" action="virtualAdvisor.php" method="post">
            <label>Matrícula: </label>
            <input type="text" id="matriculaIn" name="matriculaIn"></input>
            <br/>
            
            <p id="loginInfo">*Ingrese su número de  matrícua ESPOL.</p>
            <br/>
            <input type="submit" id="consultButton" value="Consultar"/>
        </form>
        
        
        <?php
        // put your code here
//        try {
//            $wsdl_url = 'https://ws.espol.edu.ec/saac/wsSAAC.asmx?WSDL';
//            $client = new SOAPClient($wsdl_url);
//            $params = array(
//                'matricula' => "",
//            );
//            $return = $client->MateriasPorTomarEstudiante($params);
//            print_r($return);
//        } catch (Exception $e) {
//            echo "Exception occured: " . $e;
//        }
        ?>
    </body>
</html>
