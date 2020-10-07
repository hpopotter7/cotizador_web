<?php
ob_start();
session_start();
date_default_timezone_set('America/Mexico_City');
require_once ("../../../config/conexion.php");
?>
<style>
    h2{
        padding:5px;
        margin:0px;
    }
h4{
    padding:1px;
    margin:1px;
    color: black;
    font-size:14px;
}
h5{
    padding:1px;
    margin:1px;
    font-size:10px;
}
label{
    color: black;
}
i{
    font-size:10px;
}

#encabezado {padding:5px 0; width:100%;margin:auto;border:none}
#encabezado .fila .col_1 {width: 15%; text-align: left;}
#encabezado .fila .col_2 {text-align:left; width: 50%}
#encabezado .fila .col_3 {text-align:left; width: 33%}

#encabezado .fila .col_2 #span1{font-size: 20px;}
#encabezado .fila .col_2 #span2{font-size: 15px; color: #ccc;}

#footer {padding-bottom:5px 0;border-top: 2px solid #1EA1F2; width:90%; margin:auto;}
#footer .fila td {text-align:center; width:100%;}
#footer .fila td span {font-size: 10px; color: #000;}

#fecha {margin-top:100px; width:100%;}
#fecha tr td {text-align: right; width:100%;}

#datos { margin:auto; width:100%;}

.col-3{
    width:30%;
}

.derecha{
    text-align:right;
}
.arriba{
    vertical-align:top;
}

.para{
    border-radius:10px;
    background-color:#EEE;
    width: 50%;
    padding: 6px;
}

.color_azul{
    color:#1EA1F2;
}

.fila{
    background-color:#FFF;
}
tbody tr td{
    border-bottom: 1px thin #ddd;
    padding: 7px;
}
thead tr td{
    border: 2px solid #1EA1F2;
    
}
thead tr {
    border: 2px solid #1EA1F2;
}

#encabezado{
    color:#1EA1F2;
    margin:1px;
}




</style>
<page backtop=60mm" backbottom="10mm" backleft="5mm" backright="10mm">
   
    <page_header>
        <table id="encabezado">
            <tr class="fila">
                <td class="col_2" >
                <img src="../../images/logo.png" width="60" height=60><span style='font-size:25px;vertical-align:top;'>Nombre de la empresa</span>
                </td>
                <td class="col_2" style='text-align:right'>
                    <h2>Cotización</h2>
                </td>
            </tr>
            <tr >
                <td class='para'>
                    <div>
                    <h2>Nombre del cliente</h2>
                    <h4>Nombre de contacto</h4>
                    <h4>Dirección</h4>
                    <h4>emal@demo.com</h4>
                    <h4>celular</h4>
                    </div>
                </td>
                <td class='derecha arriba'>
                    <h4 class='color_azul'>Cotización #:<label>22</label></h4>
                    <h4 class='color_azul' >Fecha: <label>06/10/2020</label></h4>
                </td>
            </tr>
            <tr>
                
            </tr>
        </table>
        <div style='margin:10px;'>A continuación presentamos nuestra oferta que esperamos sea de su conformidad:</div>
    </page_header>
        
    <page_footer> 
        <table style='width:100%;padding-bottom:5px 0;border-top: 2px solid #1EA1F2; margin:auto;'>
            <tr>
                <td style='width:33%;text-align:center'>
                    <h5>Telefono</h5>
                    <h5><i>555555555</i></h5>
                </td>
                <td style='width:33%;text-align:center'>
                    <h5>Correo electrónico</h5>
                    <h5><i>correo@demo.com</i></h5>
                </td>
                <td style='width:33%;text-align:center'>
                    <h5>Dirección</h5>
                    <h5><i>Luis Pasteur #555, Col. Linda Vista, Querétaro Qro.</i></h5>
                </td>
            </tr>
        </table>
    </page_footer>

           
            <?php
            /*
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
            echo " <p align="right">Fecha: ".$dia." de ".$m." de ".$anio;
            */
            ?>
            
    <table  style="width: 100%; border-spacing: 0;border-collapse: collapse;background-color:#fff">
        <thead>
          <tr style='color:white; background-color:#1EA1F2'> 
            <td style="padding: 4px;width:20%;height:auto;" align="center"><b>CANT.</b></td>
            <td style="padding: 4px;width:20%;height:auto;" align="center"><b>COMPONENTE</b></td>
            <td style="padding: 4px;width:20%;height:auto;" align="center"><b>MATERIALES</b></td>
            <td style="padding: 4px;width:20%;height:auto;" align="center"><b>EXTRAS</b></td>
            <td style="padding: 4px;width:20%;height:auto;" align="center"><b>FLETE</b></td>
        </tr>
        </thead>
        <tbody>
        <?php
            $sumador_total=0;
            $i=1;
            $sql=mysqli_query($con, "select * from monedas");
            while ($row=mysqli_fetch_array($sql))
            {
            $nombre=$row['Nombre'];
            $simbolo=$row['Simbolo'];
            $nombre_producto=$row['nombre_producto'];
            $id_marca_producto=$row['id_marca_producto'];
            
        ?>
        
        <tr>           
            <td style="width:20%;height:auto;" align="center"><?php  echo $i;?></td>
            <td style="width:20%;height:auto;" align="center"><?php  echo $nombre?></td>
            <td style="width:20%;height:auto;" align="center"><?php  echo $simbolo?></td>
            <td style="width:20%;height:auto;" align="center"><?php  echo '$ 2,231.123'?></td>
            <td style="width:20%;height:auto;" align="center"><?php  echo '$ 2,231.123'?></td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </tbody>
        <tfoot>
            <tr style='height:30px;'><td style='height:30px;'colspan='5'></td></tr>
            <tr style="height:10px;" class='fila derecha'>
                <td colspan="3"></td>
                <td>SUBTOTAL:</td>
                <td align="center">$ 2,123.12</td>
            </tr>
            <tr style="height:10px" class='fila derecha'>
                <td colspan="3"></td>
                <td>IVA 16%:</td>
                <td align="center">$ 2,123.12</td>
            </tr>
            <tr style="height:10px" class='fila derecha'>
                <td colspan="3"></td>
                <td>TOTAL:</td>
                <td align="center">$ 2,123.12</td>
            </tr>
        </tfoot>
    </table>
    <div style='margin:10px;'>Comentarios o notas adicionales</div>
    <p></p><br>
    <table>
        <tr>
            <td style='margin-left:15px;border-left:5px #1EA1F2 solid'>
                <h3 class='color_azul'>CONDICIONES Y FORMA DE PAGO</h3>
                <h5>Tipo de pago: Contado</h5>
                <h5>Moneda: Los precios de esta cotización son en Pesos Mexicanos</h5>
                <h5>Tiempo de validez: 1 semana</h5>
                <h5>Tiempo de entrega: 2 semanas <i>(Corre a partir de la aceptación de la presente cotización)</i></h5>
                
            </td>
        </tr>
    </table>
</page>
<?php
    $content = ob_get_clean();
    require_once(dirname(__FILE__).'/../html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', 3); 
        $html2pdf->pdf->SetDisplayMode('fullpage'); 
        $html2pdf->writeHTML($content);
        $html2pdf->Output('productos.pdf'); 
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>
