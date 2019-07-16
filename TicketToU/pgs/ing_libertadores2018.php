<?php
include "conecta.php";

$sql = "SELECT * FROM evt_libertadores2018";

$resultado = mysqli_query($conectar, $sql);
?>
<doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Ticket To U | Compra de ingressos</title>
            <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <link href="../css/main2.css" rel="stylesheet" type="text/css"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
        </head>
        <body>


            <table class="tg table table-striped" class="tabela-compra">
                <tr>
                    <th class="tg-2rp0" colspan="4">Ingressos - Final Libertadores 2018</th>
                </tr>
                <tr>
                    <td scope="col">Setor</td>
                    <td scope="col">Ingressos disp.</td>
                    <td scope="col">Preço</td>
                    <td scope="col">COMPRAR</td>
                </tr>
                <?php
                while ($ingressos = mysqli_fetch_assoc($resultado)) {
                    echo'<tr>';
                    echo'<td class="tg-0pky">Cadeira Superior</td>';
                    echo'<td class="tg-0pky">' . $ingressos['ing_cad_superior'] . '</td>';
                    echo'<td class="tg-0pky">R$ 300,00</td>';
                    echo'<td class="tg-0lax">';
                    echo'    <div class="form-group">';
                    echo'        <label for="exampleFormControlSelect1">Selecione a quantidade de ingressos</label>';
                    echo'            <select class="form-control" id="select1" onchange="test(this)">';
                    echo'                <option value="0">0</option>';
                    echo'                <option value="1">1</option>';
                    echo'                <option value="2">2</option>';
                    echo'                <option value="3">3</option>';
                    echo'                <option value="4">4</option>';
                    echo'                <option value="5">5</option>';
                    echo'            </select>';
                    echo'        </div>';
                    echo'    </td>';
                    echo'</tr>';
                    echo'<tr>';
                    echo'<td class="tg-0pky">Cadeira Inferior</td>';
                    echo'<td class="tg-0pky">' . $ingressos['ing_cad_inferior'] . '</td>';
                    echo'<td class="tg-0pky">R$ 500,00</td>';
                    echo'<td class="tg-0lax"><div class="form-group">';
                    echo'        <label for="exampleFormControlSelect1">Selecione a quantidade de ingressos</label>';
                    echo'        <select class="form-control" id="select2" onchange="test(this)">';
                    echo'            <option value="0">0</option>';
                    echo'            <option value="1">1</option>';
                    echo'            <option value="2">2</option>';
                    echo'            <option value="3">3</option>';
                    echo'            <option value="4">4</option>';
                    echo'            <option value="5">5</option>
                            </select>
                        </div></td>
                        </tr>
                        <tr>
                        <td class="tg-0pky">Camarote</td>
                        <td class="tg-0pky">' . $ingressos['ing_camarote'] . '</td>
                        <td class="tg-0pky">R$ 800,00</td>
                        <td class="tg-0lax"><div class="form-group">
                            <label for="exampleFormControlSelect1">Selecione a quantidade de ingressos</label>
                                <form method="POST" action="selecionada3">
                                         <select class="form-control" name="select3" id="select3"">
                                            <option value="0" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                       </select>
                                    </form>
                                </div></td>
                             </tr> ';
                }
                
                                
                $selecionada3 = $_POST['select3'];

                echo $selecionada3;

                

                mysqli_close($conectar);
                ?>

                    

                


            </table>
            
            
            

            

            
        </body>
    </html>
</doctype>