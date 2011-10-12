<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Calculo de Impuestos</title>
    </head>
    <body>
        <h1>Ingresa tus ingresos mensuales para el calculo de impuestos</h1>
        <form method="get" action="home.php">
        <table border="1" >
            <tr>
                <td>Mes</td>
                <td>Ingresos</td>
                <td>Impuestos</td>
            </tr>
            <tr>
                <td>Enero</td>
                <td><input type="text" name="ingreso1" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[1];
                    }?></td>
            </tr>
            <tr>
                <td>Febrero</td>
                <td><input type="text" name="ingreso2" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[2];
                    }?></td>
            </tr>
            <tr>
                <td>Marzo</td>
                <td><input type="text" name="ingreso3" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[3];
                    }?></td>
            </tr>
            <tr>
                <td>Abril</td>
                <td><input type="text" name="ingreso4" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[4];
                    }?></td>
            </tr>
            <tr>
                <td>Mayo</td>
                <td><input type="text" name="ingreso5" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[5];
                    }?></td>
            </tr>
            <tr>
                <td>Junio</td>
                <td><input type="text" name="ingreso6" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[6];
                    }?></td>
            </tr>
            <tr>
                <td>Julio</td>
                <td><input type="text" name="ingreso7" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[7];
                    }?></td>
            </tr>
            <tr>
                <td>Agosto</td>
                <td><input type="text" name="ingreso8" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[8];
                    }?></td>
            </tr>
            <tr>
                <td>Setiembre</td>
                <td><input type="text" name="ingreso9" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[9];
                    }?></td>
            </tr>
            <tr>
                <td>Octubre</td>
                <td><input type="text" name="ingreso10" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[10];
                    }?></td>
            </tr>
            <tr>
                <td>Noviembre</td>
                <td><input type="text" name="ingreso11" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[10];
                    }?></td>
            </tr>
            <tr>
                <td>Diciembre</td>
                <td><input type="text" name="ingreso12" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $impuestos[11];
                    }?></td>
            </tr>
            <tr>
                <td>Total:</td>
                <td><input type="text" name="ingreso12" value="0"></td>
                <td><?php if(isset ($impuestos)){
                        echo $suma;
                    }?></td>
            </tr>

        </table>
            <input type="submit" value="Calcular" >
        </form>


        <?php
        // put your code here
        ?>
    </body>
</html>

