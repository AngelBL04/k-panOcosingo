<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
	<link rel="stylesheet" href="boostrap/estilos.css">
	<link rel="stylesheet" href="boostrap/bootstrap.css">
	<link rel="stylesheet" href="boostrap/footer.css">
	<link rel="stylesheet" href="boostrap/productos.css">
	<link rel="stylesheet" href="boostrap/footer.css">
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
<div id="my-page">
    <div id="home"></div>
    <div class="header">
      <div class="container">
        <div class="logo"><a href="k-pan.html"><img src="icon/logo_white.png"></a></div>
        <div class="menu-container">
          <div class="menu"><a data-pan="" href="k-pan.html">Inicio</a></div>
          <div class="menu"><a data-pan="" href="">Quienes somos</a></div>
          <div class="menu"><a data-pan="" href="productos.html">Productos</a></div>
          <div class="menu"><a data-pan="" href="contacto.html">Contacto</a></div>
          <div class="maps"><a data-pan="" href="">Ubicación</a></div>
        </div>
        <div class="social-network-container">
          <a href="https://www.facebook.com/panaderiayreposteriakpan/" target="_blank"><img src="icon/fb_white.png"></a>
          <a href="" target="_blank"><img src="icon/instagram_white.png"></a>
        </div>
      </div>
    </div>

    <div class="wrap">
		<h1>Bienvenido a nuestra sección de productos</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="veganos">Veganos</a>
				<a href="#" class="category_item" category="tradicionales">Tradicionales</a>
				<a href="#" class="category_item" category="azucar">Sin azucar</a>
				<a href="#" class="category_item" category="saludables">Saludables</a>
			</div>
			<section class="products-list">
				<?php
				require_once 'conexion.php';
				$sql= mysql_query("SELECT * FROM 'producto'");
				while ($res = mysql_fetch_array($sql)) {
					echo $res["nombre"];
				}
				?>
				<div class="product-item" category="veganos">
					<img src="imag/productos/1.jpg" alt="" >
					<a href="#">Pan 1</a>
				</div>
				<div class="product-item" category="tradicionales">
					<img src="imag/productos/2.jpg" alt="" >
					<a href="#">Pan 2</a>
				</div>
				<div class="product-item" category="azucar">
					<img src="imag/productos/3.jpg" alt="" >
					<a href="#">Pan 3</a>
				</div>
				<div class="product-item" category="saludables">
					<img src="imag/productos/4.jpg" alt="" >
					<a href="#">Pan 4</a>
				</div>
				<div class="product-item" category="veganos">
					<img src="imag/productos/5.jpg" alt="" >
					<a href="#">Pan 5</a>
				</div>
				<div class="product-item" category="tradicionales">
					<img src="imag/productos/6.jpg" alt="" >
					<a href="#">Pan 6</a>
				</div>
				<div class="product-item" category="azucar">
					<img src="imag/productos/7.jpg" alt="" >
					<a href="#">Pan 7</a>
				</div>
				<div class="product-item" category="saludables">
					<img src="imag/productos/8.jpg" alt="" >
					<a href="#">Pan 8</a>
				</div>
				<div class="product-item" category="veganos">
					<img src="imag/productos/9.jpg" alt="" >
					<a href="#">Pan 9</a>
				</div>
				<div class="product-item" category="tradicionales">
					<img src="imag/productos/10.jpg" alt="" >
					<a href="#">Pan 10</a>
				</div>
				<div class="product-item" category="azucar">
					<img src="imag/productos/11.jpg" alt="" >
					<a href="#">Pan 11</a>
				</div>
				<div class="product-item" category="saludables">
					<img src="imag/productos/12.jpg" alt="" >
					<a href="#">Pan 12</a>
				</div>
				<div class="product-item" category="veganos">
					<img src="imag/productos/13.jpg" alt="" >
					<a href="#">Pan 13</a>
				</div>
				<div class="product-item" category="tradicionales">
					<img src="imag/productos/2.jpg" alt="" >
					<a href="#">Pan 14</a>
				</div>
				<div class="product-item" category="azucar">
					<img src="imag/productos/3.jpg" alt="" >
					<a href="#">Pan 14</a>
				</div>
				<div class="product-item" category="saludables">
					<img src="imag/productos/15.jpg" alt="" >
					<a href="#">Pan 15</a>
				</div>
				<div class="product-item" category="veganos">
					<img src="imag/productos/1.jpg" alt="" >
					<a href="#">Pan 16</a>
				</div>
				<div class="product-item" category="tradicionales">
					<img src="imag/productos/2.jpg" alt="" >
					<a href="#">Pan 17</a>
				</div>
				<div class="product-item" category="azucar">
					<img src="imag/productos/3.jpg" alt="" >
					<a href="#">Pan 18</a>
				</div>
				<div class="product-item" category="saludables">
					<img src="imag/productos/19.jpg" alt="" >
					<a href="#">Pan 19</a>
				</div>
				<div class="product-item" category="veganos">
					<img src="imag/productos/20.jpg" alt="" >
					<a href="#">Pan 20</a>
				</div>
				<div class="product-item" category="tradicionales">
					<img src="imag/productos/22.jpg" alt="" >
					<a href="#">Pan 22</a>
				</div>
				<div class="product-item" category="azucar">
					<img src="imag/productos/23.jpg" alt="" >
					<a href="#">Pan 23</a>
				</div>
				<div class="product-item" category="saludables">
					<img src="imag/productos/24.jpg" alt="" >
					<a href="#">Pan 24</a>
				</div>
		</section>
	</div>
</div>

<footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Mas informacion de la compañia</h1>

                    <p>Esta compañia se dedica a la venta de software integrado con un 
                    conjunto de cosas que no se lo que estoy escribiendo, este 
                    texto es solo para llenara informacion en el cuadro de informacion 
                    de la compañia.</p>

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="row">
                        <img src="icon/facebook.png">
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row">
                        <img src="icon/instagram.png">
                        <label>Siguenos en Instagram</label>
                    </div>
                  


                </div>

                <div class="colum3">

                    <h1>Informacion Contactos</h1>

                    <div class="row2">
                        <img src="icon/house.png">
                        <label>Ocosingo Chiapas,
					 México
					 Siglo XXI 
					 Casa # 27</label>
                    </div>
                        
                    <div class="row2">
                        <img src="icon/contact.png">
                         <label>ventaskpan@gmail.com</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2019 Todos los Derechos Reservados | <a href="">Magtimus</a>
                    </div>

                    <div class="information">
                        <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>        
    </footer>
    
</body>
</html>