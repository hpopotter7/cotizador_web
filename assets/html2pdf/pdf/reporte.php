<style>

#encabezado {padding:5px 0; border-bottom: 1px solid; width:100%;margin:auto;}
#encabezado .fila #col_1 {width: 15%; text-align: left;}
#encabezado .fila #col_2 {text-align:left; width: 65%}
#encabezado .fila #col_3 {text-align:left; width: 33%}

#encabezado .fila #col_2 #span1{font-size: 15px;}
#encabezado .fila #col_2 #span2{font-size: 15px; color: #ccc;}

#footer {padding-bottom:5px 0;border-top: 2px solid #46d; width:80%; margin:auto;}
#footer .fila td {text-align:center; width:100%;}
#footer .fila td span {font-size: 10px; color: #000;}

#fecha {margin-top:100px; width:100%;}
#fecha tr td {text-align: right; width:100%;}

#central {margin-top:20px; width:100%;}
#central tr td {padding: 0px; text-align:left; width:100%;}

#datos { margin:auto; width:100%;}
#central td{border:2px solid black;padding: 4px;}

.derecha{
    text-align:right;
}

</style>
<page backtop="28mm" backbottom="10mm" backleft="15mm" backright="10mm">
   
    <page_header>
        <table id="encabezado">
            <tr class="fila">
                <td id="col_2" >
                <img src="../../images/logo.png" width="80" height=80><h2>Nombre de la empresa</h2>
                </td>
                <td id="col_2">
                    <span id="span1" ><p align="right">Cotización</p></span>
                </td>
            </tr>
        </table>
    </page_header>
        
    <page_footer> 
        <table id="footer">
            <tr class="fila">
                <td>
                    <span>CONTROL DE PRODUCTOS</span>
                </td>
            </tr>
        </table>
    </page_footer>
            <p align="right">
            <?php
$fecha = date('Y-m-j H:i:s'); 
$nuevafecha = strtotime ( '-7 hour' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'j/m/Y  H:i:s' , $nuevafecha );
            //echo $nuevafecha." hrs<br>";
            $dia = date("j"); 
            $mes = date("n"); 
            $anio = date("Y"); 
            $m="";
            switch ($mes) {
                case 1:$m="Enero"; break;
                case 2:$m="Febrero"; break;
                case 3:$m="Marzo"; break;
                case 4:$m="Abril"; break;
                case 5:$m="Mayo"; break;
                case 6:$m="Junio"; break;
                case 7:$m="Julio"; break;
                case 8:$m="Agosto"; break;
                case 9:$m="Septiembre"; break;
                case 10:$m="Octubre"; break;
                case 11:$m="Noviembre"; break;
                case 12:$m="Diciembre"; break;
            }
            echo $dia." de ".$m." de ".$anio;
            ?></p>
            <p align="center"><b> REPORTE DE PRODUCTOS</b></p>

    <table id="central" style="width: 100%; border-collapse: collapse" border>    
        <tr style="height:10px" class="fila"> 
            <td style="width:20%;height:auto;" align="center"><b>ID</b></td>
            <td style="width:20%;height:auto;" align="center"><b>NOMBRE</b></td>
            <td style="width:20%;height:auto;" align="center"><b>PRECIO</b></td>
            <td style="width:20%;height:auto;" align="center"><b>CANTIDAD</b></td>
            <td style="width:20%;height:auto;" align="center"><b>PROVEEDOR</b></td>
        </tr>
        <?php
        $con = mysql_connect("localhost","root","");
        mysql_select_db("crudproductos", $con);
        $result = mysql_query("SELECT * FROM producto");
        $i=0;
        while($row=mysql_fetch_array($result)){
        ?>
        <tr  class="fila">           
            <td style="width:20%;height:auto;" align="center"><?php  echo $row['id'];?></td>
            <td style="width:20%;height:auto;" align="center"><?php  echo $row['nombre'];?></td>
            <td style="width:20%;height:auto;" align="center"><?php  echo $row['precio'];?></td>
            <td style="width:20%;height:auto;" align="center"><?php  echo $row['cantidad'];?></td>
            <td style="width:20%;height:auto;" align="center"><?php  echo $row['proveedor'];?></td>
        </tr>
        <?php
        $i++;
        }
        ?>
        <tr style="height:10px" class="fila">
            <td colspan="5"  align="right"><?php echo "<b>Cantidad de Productos: </b>".$i; ?></td>
        </tr>
    </table>
</page>
