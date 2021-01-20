<?php
session_start(); //inicio de session

setlocale(LC_MONETARY,"en_US"); // formato usa (see : http://php.net/money_format)
?>
<style type="text/css">
    .empty-cart {
  width: 50vw;
  margin: 0 auto;
  text-align: center;
  font-family: 'Maison Neue';
  font-weight: 300;
}
svg {
  max-width: 60%;
  padding: 5rem 3rem;
}
svg #oval,
svg #plus,
svg #diamond,
svg #bubble-rounded {
  -webkit-animation: plopp 4s ease-out infinite;
          animation: plopp 4s ease-out infinite;
}
svg #oval:nth-child(1),
svg #plus:nth-child(1),
svg #diamond:nth-child(1),
svg #bubble-rounded:nth-child(1) {
  -webkit-animation-delay: -240ms;
          animation-delay: -240ms;
}
svg #oval:nth-child(2),
svg #plus:nth-child(2),
svg #diamond:nth-child(2),
svg #bubble-rounded:nth-child(2) {
  -webkit-animation-delay: -480ms;
          animation-delay: -480ms;
}
svg #oval:nth-child(3),
svg #plus:nth-child(3),
svg #diamond:nth-child(3),
svg #bubble-rounded:nth-child(3) {
  -webkit-animation-delay: -720ms;
          animation-delay: -720ms;
}
svg #oval:nth-child(4),
svg #plus:nth-child(4),
svg #diamond:nth-child(4),
svg #bubble-rounded:nth-child(4) {
  -webkit-animation-delay: -960ms;
          animation-delay: -960ms;
}
svg #oval:nth-child(5),
svg #plus:nth-child(5),
svg #diamond:nth-child(5),
svg #bubble-rounded:nth-child(5) {
  -webkit-animation-delay: -1200ms;
          animation-delay: -1200ms;
}
svg #oval:nth-child(6),
svg #plus:nth-child(6),
svg #diamond:nth-child(6),
svg #bubble-rounded:nth-child(6) {
  -webkit-animation-delay: -1440ms;
          animation-delay: -1440ms;
}
svg #oval:nth-child(7),
svg #plus:nth-child(7),
svg #diamond:nth-child(7),
svg #bubble-rounded:nth-child(7) {
  -webkit-animation-delay: -1680ms;
          animation-delay: -1680ms;
}
svg #oval:nth-child(8),
svg #plus:nth-child(8),
svg #diamond:nth-child(8),
svg #bubble-rounded:nth-child(8) {
  -webkit-animation-delay: -1920ms;
          animation-delay: -1920ms;
}
svg #oval:nth-child(9),
svg #plus:nth-child(9),
svg #diamond:nth-child(9),
svg #bubble-rounded:nth-child(9) {
  -webkit-animation-delay: -2160ms;
          animation-delay: -2160ms;
}
svg #oval:nth-child(10),
svg #plus:nth-child(10),
svg #diamond:nth-child(10),
svg #bubble-rounded:nth-child(10) {
  -webkit-animation-delay: -2400ms;
          animation-delay: -2400ms;
}
svg #oval:nth-child(11),
svg #plus:nth-child(11),
svg #diamond:nth-child(11),
svg #bubble-rounded:nth-child(11) {
  -webkit-animation-delay: -2640ms;
          animation-delay: -2640ms;
}
svg #oval:nth-child(12),
svg #plus:nth-child(12),
svg #diamond:nth-child(12),
svg #bubble-rounded:nth-child(12) {
  -webkit-animation-delay: -2880ms;
          animation-delay: -2880ms;
}
svg #oval:nth-child(13),
svg #plus:nth-child(13),
svg #diamond:nth-child(13),
svg #bubble-rounded:nth-child(13) {
  -webkit-animation-delay: -3120ms;
          animation-delay: -3120ms;
}
svg #oval:nth-child(14),
svg #plus:nth-child(14),
svg #diamond:nth-child(14),
svg #bubble-rounded:nth-child(14) {
  -webkit-animation-delay: -3360ms;
          animation-delay: -3360ms;
}
svg #oval:nth-child(15),
svg #plus:nth-child(15),
svg #diamond:nth-child(15),
svg #bubble-rounded:nth-child(15) {
  -webkit-animation-delay: -3600ms;
          animation-delay: -3600ms;
}
svg #oval:nth-child(16),
svg #plus:nth-child(16),
svg #diamond:nth-child(16),
svg #bubble-rounded:nth-child(16) {
  -webkit-animation-delay: -3840ms;
          animation-delay: -3840ms;
}
svg #bg-line {
  -webkit-animation: float 20s ease infinite;
          animation: float 20s ease infinite;
}
svg #bg-line:nth-child(2) {
  -webkit-animation-delay: 1200ms;
          animation-delay: 1200ms;
  fill-opacity: 0.3;
}
svg #bg-line:nth-child(3) {
  -webkit-animation-delay: 850ms;
          animation-delay: 850ms;
  fill-opacity: 0.4;
}
h3 {
  font-size: 2rem;
  line-height: 2rem;
  margin: 0;
  padding: 0;
  font-weight: 600;
}
p {
  color: rgba(0,0,0,0.5);
  font-size: 18px;
  line-height: 24px;
  max-width: 80%;
  margin: 1.25rem auto 0 auto;
}

@-webkit-keyframes plopp {
  0% {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translate(0, -10px);
            transform: translate(0, -10px);
    opacity: 0;
  }
}
@keyframes plopp {
  0% {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translate(0, -10px);
            transform: translate(0, -10px);
    opacity: 0;
  }
}
@-webkit-keyframes float {
  0% {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
  }
  25% {
    -webkit-transform: translate(6px, 20px);
            transform: translate(6px, 20px);
  }
  50% {
    -webkit-transform: translate(25px, 10px);
            transform: translate(25px, 10px);
  }
  100% {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
  }
}
@keyframes float {
  0% {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
  }
  25% {
    -webkit-transform: translate(6px, 20px);
            transform: translate(6px, 20px);
  }
  50% {
    -webkit-transform: translate(25px, 10px);
            transform: translate(25px, 10px);
  }
  100% {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
  }
}



</style>

<?php

if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
	$total 			= 0;
	$list_tax 		= '';
	foreach($_SESSION["products"] as $product){ //Print each item, quantity and price.
		$product_name = $product["name_service"];
		$product_qty = $product["product_qty"];
		$product_price = $product["price_service"];
		$product_code = $product["id_service"];
		$product_color = $product["product_color"];
		$product_size = $product["product_size"];
		
		$item_price 	= sprintf("%01.2f",($product_price * $product_qty));  //cantidad por producto 
		
		$cart_box 		.=  " <tr> 			<td></td>
                                            <td> $product_name</td>
                                            <td> $product_qty </td>
                                            <td> $product_price </td>
                                            <td> $item_price  </td>
                                        </tr>";
		
		$subtotal 		= ($product_price * $product_qty);
		$total 			= ($total + $subtotal); // total price
	}
 $producto = $cart_box;

?>
<div class="invoice">
                        <div class="row invoice-logo">
                            <div class="col-xs-6 invoice-logo-space">
                                <img src="./img/logoc2.png" width="80px" class="img-responsive" alt=""> </div>

                            <div class="col-xs-6">
                                <h2>N° De Factura #<?php echo $idlog   ?> <?php
      
?>								
                                </h2>
                                <span style="float: right; color:red" > Factura Sin pagar </span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-4">
                                <h3>Facturado a:</h3>
                                <ul class="list-unstyled">
                                    <li><strong>Nombre:</strong> <?php  echo $nombrelog=$_SESSION['c3_nombre']; ?></li>
                                    <li><strong>Apellido:</strong><?php echo $apellidolog=$_SESSION['c3_apellido']; ?> </li>
                                    <li><strong>C.I: </strong> <?php echo   $cilog=$_SESSION['c3_ci']; ?>  </li>
                                    <li><strong>Correo:</strong>  <?php echo  $maillog=$_SESSION['c3_correo']; ?>  </li>
                                    <li><strong>Telefono:</strong>  <?php echo   $phonelog=$_SESSION['c3_phone']; ?></li>
                                    
                                </ul>
                            </div>
			 <?php 
         
         // $consulta=" ";
        $consulta="SELECT * FROM administrador INNER JOIN accounts ON administrador.id_administrador = accounts.id_admin_accound LIMIT 2;";
         $resultado =$bd-> consulta($consulta); 
         if ($bd->numeroFilas() > 0) { 
         	$bd->consulta($consulta);
      while ($pagina=$bd->mostrar_registros()) {

      		?> <div class="col-xs-4">
                                <h3><?php echo $pagina->name_bank_accounts; ?></h3>
                                <ul class="list-unstyled">
                                	
                                    <li>Titular de la cuenta:  <?php echo $pagina->name_accounts; ?></li>
                                    <li> Tipo de cuenta: <?php echo $pagina->tipe_accounts; ?></li>
                                    <li> N° de cuenta:<?php echo $pagina->num_accounts; ?> </li>
                                    <li> C.I  <?php echo $pagina->ci_accounts; ?> </li>
                                   
                                    
                                </ul>
                            </div>
       	<?php 
      }
      	
  }else{
  	echo  "no hay cuentas de banco registradas ";
  }
        
?>

                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <table class="table table-striped table-hover">
                                    <thead>

                                        <tr>
                                            <th> </th>
                                            <th class="hidden-xs"> Nombre </th>
                                            <th class="hidden-xs"> Cantidad </th>
                                            <th class="hidden-xs"> Costo </th>
                                            <th> Total </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo $producto ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="well">
                                    <address>
                                       <center> <strong>Datos del Administrador</strong></center></br>
                                 <?php
                                 echo  "<strong>Nombre: </strong>$nameadmin </br>";
                                 echo  "<strong>Direccion: </strong> $diradmin  </br>";
                                 echo  "<strong>Rif: </strong>$rifadmin	</br>";
                                 echo  "<strong>Telefono: </strong>$celadmin </br>";

                                  ?>
                                    <address>
                                        <strong>Fecha</strong>
                                        <br>
                                        <?php echo $hoy = date("F j, Y, g:i a");?>    
                                    </address>
                                </div>
                            </div>
                            <div class="col-xs-2">
                               
                            </div>
                            <div class="col-xs-6 invoice-block">
                                <ul class="list-unstyled amounts">
                                    <li>
                                        <strong>Sub - Total amount:</strong>  <?php echo $total  ?></li>
                                    <li>
                                        <strong>Iva :</strong> 11.0% </li>
                                    <li>
                                       
                                    <li>
                                        <strong>Gran Total:</strong> <?php echo 0.11/$total*100+$total  ?></li>
                                </ul>
                                <br>
                                <a class="btn btn-lg blue hidden-print margin-bottom-5" onclick="javascript:window.print();"> Imprimir
                                    <i class="fa fa-print"></i>
                                </a>

                                <form role="form" action="?mod=facturas&guarda=guarda" method="post" enctype="multipart/form-data"> 
                                    <input class="form-control" required type="hidden" name="fecha"  value="<?php echo $hoy ?>" >
                                   

                                    <button  class="btn btn-lg green hidden-print margin-bottom-5">
                                     Registrar Pago 
                                        <i class="fa fa-check"></i></button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
<?php
//guardar factura





}else{

    ?>

        <div class="empty-cart">

  <svg viewBox="656 573 264 182" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <rect id="bg-line" stroke="none" fill-opacity="0.2" fill="#FFE100" fill-rule="evenodd" x="656" y="624" width="206" height="38" rx="19"></rect>
      <rect id="bg-line" stroke="none" fill-opacity="0.2" fill="#FFE100" fill-rule="evenodd" x="692" y="665" width="192" height="29" rx="14.5"></rect>
      <rect id="bg-line" stroke="none" fill-opacity="0.2" fill="#FFE100" fill-rule="evenodd" x="678" y="696" width="192" height="33" rx="16.5"></rect>
      <g id="shopping-bag" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(721.000000, 630.000000)">
          <polygon id="Fill-10" fill="#FFA800" points="4 29 120 29 120 0 4 0"></polygon>
          <polygon id="Fill-14" fill="#FFE100" points="120 29 120 0 115.75 0 103 12.4285714 115.75 29"></polygon>
          <polygon id="Fill-15" fill="#FFE100" points="4 29 4 0 8.25 0 21 12.4285714 8.25 29"></polygon>
          <polygon id="Fill-33" fill="#FFA800" points="110 112 121.573723 109.059187 122 29 110 29"></polygon>
          <polygon id="Fill-35" fill-opacity="0.5" fill="#FFFFFF" points="2 107.846154 10 112 10 31 2 31"></polygon>
          <path d="M107.709596,112 L15.2883462,112 C11.2635,112 8,108.70905 8,104.648275 L8,29 L115,29 L115,104.648275 C115,108.70905 111.7365,112 107.709596,112" id="Fill-36" fill="#FFE100"></path>
          <path d="M122,97.4615385 L122,104.230231 C122,108.521154 118.534483,112 114.257931,112 L9.74206897,112 C5.46551724,112 2,108.521154 2,104.230231 L2,58" id="Stroke-4916" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
          <polyline id="Stroke-4917" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" points="2 41.5 2 29 122 29 122 79"></polyline>
          <path d="M4,50 C4,51.104 3.104,52 2,52 C0.896,52 0,51.104 0,50 C0,48.896 0.896,48 2,48 C3.104,48 4,48.896 4,50" id="Fill-4918" fill="#000000"></path>
          <path d="M122,87 L122,89" id="Stroke-4919" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
          <polygon id="Stroke-4922" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" points="4 29 120 29 120 0 4 0"></polygon>
          <path d="M87,46 L87,58.3333333 C87,71.9 75.75,83 62,83 L62,83 C48.25,83 37,71.9 37,58.3333333 L37,46" id="Stroke-4923" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
          <path d="M31,45 C31,41.686 33.686,39 37,39 C40.314,39 43,41.686 43,45" id="Stroke-4924" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
          <path d="M81,45 C81,41.686 83.686,39 87,39 C90.314,39 93,41.686 93,45" id="Stroke-4925" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
          <path d="M8,0 L20,12" id="Stroke-4928" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
          <path d="M20,12 L8,29" id="Stroke-4929" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
          <path d="M20,12 L20,29" id="Stroke-4930" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
          <path d="M115,0 L103,12" id="Stroke-4931" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
          <path d="M103,12 L115,29" id="Stroke-4932" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
          <path d="M103,12 L103,29" id="Stroke-4933" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
      </g>
      <g id="glow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(768.000000, 615.000000)">
          <rect id="Rectangle-2" fill="#000000" x="14" y="0" width="2" height="9" rx="1"></rect>
          <rect fill="#000000" transform="translate(7.601883, 6.142354) rotate(-12.000000) translate(-7.601883, -6.142354) " x="6.60188267" y="3.14235449" width="2" height="6" rx="1"></rect>
          <rect fill="#000000" transform="translate(1.540235, 7.782080) rotate(-25.000000) translate(-1.540235, -7.782080) " x="0.54023518" y="6.28207994" width="2" height="3" rx="1"></rect>
          <rect fill="#000000" transform="translate(29.540235, 7.782080) scale(-1, 1) rotate(-25.000000) translate(-29.540235, -7.782080) " x="28.5402352" y="6.28207994" width="2" height="3" rx="1"></rect>
          <rect fill="#000000" transform="translate(22.601883, 6.142354) scale(-1, 1) rotate(-12.000000) translate(-22.601883, -6.142354) " x="21.6018827" y="3.14235449" width="2" height="6" rx="1"></rect>
      </g>
      <polygon id="plus" stroke="none" fill="#7DBFEB" fill-rule="evenodd" points="689.681239 597.614697 689.681239 596 690.771974 596 690.771974 597.614697 692.408077 597.614697 692.408077 598.691161 690.771974 598.691161 690.771974 600.350404 689.681239 600.350404 689.681239 598.691161 688 598.691161 688 597.614697"></polygon>
      <polygon id="plus" stroke="none" fill="#EEE332" fill-rule="evenodd" points="913.288398 701.226961 913.288398 699 914.773039 699 914.773039 701.226961 917 701.226961 917 702.711602 914.773039 702.711602 914.773039 705 913.288398 705 913.288398 702.711602 911 702.711602 911 701.226961"></polygon>
      <polygon id="plus" stroke="none" fill="#FFA800" fill-rule="evenodd" points="662.288398 736.226961 662.288398 734 663.773039 734 663.773039 736.226961 666 736.226961 666 737.711602 663.773039 737.711602 663.773039 740 662.288398 740 662.288398 737.711602 660 737.711602 660 736.226961"></polygon>
      <circle id="oval" stroke="none" fill="#A5D6D3" fill-rule="evenodd" cx="699.5" cy="579.5" r="1.5"></circle>
      <circle id="oval" stroke="none" fill="#CFC94E" fill-rule="evenodd" cx="712.5" cy="617.5" r="1.5"></circle>
      <circle id="oval" stroke="none" fill="#8CC8C8" fill-rule="evenodd" cx="692.5" cy="738.5" r="1.5"></circle>
      <circle id="oval" stroke="none" fill="#3EC08D" fill-rule="evenodd" cx="884.5" cy="657.5" r="1.5"></circle>
      <circle id="oval" stroke="none" fill="#66739F" fill-rule="evenodd" cx="918.5" cy="681.5" r="1.5"></circle>
      <circle id="oval" stroke="none" fill="#C48C47" fill-rule="evenodd" cx="903.5" cy="723.5" r="1.5"></circle>
      <circle id="oval" stroke="none" fill="#A24C65" fill-rule="evenodd" cx="760.5" cy="587.5" r="1.5"></circle>
      <circle id="oval" stroke="#66739F" stroke-width="2" fill="none" cx="745" cy="603" r="3"></circle>
      <circle id="oval" stroke="#EFB549" stroke-width="2" fill="none" cx="716" cy="597" r="3"></circle>
      <circle id="oval" stroke="#FFE100" stroke-width="2" fill="none" cx="681" cy="751" r="3"></circle>
      <circle id="oval" stroke="#3CBC83" stroke-width="2" fill="none" cx="896" cy="680" r="3"></circle>
      <polygon id="diamond" stroke="#C46F82" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" points="886 705 889 708 886 711 883 708"></polygon>
      <path d="M736,577 C737.65825,577 739,578.34175 739,580 C739,578.34175 740.34175,577 742,577 C740.34175,577 739,575.65825 739,574 C739,575.65825 737.65825,577 736,577 Z" id="bubble-rounded" stroke="#3CBC83" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
  </svg>

  <h3>Tu carro de compras esta vacio</h3>
  <p>debes cargar cosas para generar una factura y realizar tu pedido correctamente.</p>
</div>

    <?php
	
}
?>

</div>
