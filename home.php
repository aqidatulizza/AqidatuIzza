<!DOCTYPE html>
<html>
<head>
    <title>	Resep Masakan</title>
    <link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<style>
*{
    margin: 0px;
    padding: 0px;
}
body {
    font-size: 14px;
    font-family: verdana;
	background-color:black;
}
</style>
<body>
<nav id="menu">
     <ul>
        <div id="heading">
            <a href="#">DapurQue</a></li>
        </div>
        <li><a href="#"><b>Home</a></li>
		<li><a href="#"><b>Category</a>
		<ul>
		<li><a href="kategoriayam.php"><b>Ayam</a></li>
		<li><a href="kategoricamilan.php"><b>Camilan</a></li>
		</ul>
		<li><a href="about.php"><b>About</a></li>
		<li><a href="#"><b>Account</a>
		<ul>
		<li><a href="index.php"><b>Log Out</a></li>
		</ul>
		</li>
		</ul>
</nav>
<div class="slideshow-container">

<div class="mySlides fade">
<div class="numbertext"></div>
<img src="img/4.jpeg" width="100%">
<div class="text"> </div>
</div>

<div class="mySlides fade">
<div class="numbertext"></div>
<img src="img/5.jpeg" width="100%">
<div class="text"> </div>
</div>


</div>
<br>

<div style="text-align:center">
<span class="dot"></span>
<span class="dot"></span></div>

</div>
	<script src="frontend.js"></script>
</div>
<div class="menu-kiri">
	<div class="kotak">
		<img src="img/tahunew.jpeg" width="100%">
		<p><center><b>Tahu Crispy</b></center></p>
		<a class="tombol tombol-lengkap" href="tahucrispy.php"><center> Resep </center></a>
		</div>
		</div>
<div class="menu-tengah">
	<div class="kotak">
		<img src="img/ayamsuwirnew.jpeg" width="100%">
		<p><center><b>Ayam Suwir</b></center></p>
		<a class="tombol tombol-lengkap" href="ayamsuwir.php"><center> Resep </center></a>
		</div>
		</div>
		
<div class="menu-tengah">
	<div class="kotak">
		<img src="img/currosnew.jpeg" width="100%">
		<p><center><b>Curros</b></center></p>
		<a class="tombol tombol-lengkap" href="curros.php"><center> Resep </center></a>
		</div>
		</div>
<div class="menu-kanan">
	<div class="kotak4">
		
	<input class="search" type="text" placeholder="Cari.." required>
	<input class="button" type="button" value="Cari">

	</div>
	</div>
<div class="menu-kanan">
	<div class="kotak">
	<h3><center> Resep Populer </center></h3>
	<nav class="menu-populer">
                    <ul>
                        <li><a href="tahucrispy.php">Tahu Crispy</a></li>
                        <li><a href="ayamsuwir.php">Ayam Suwir</a></li>
                        <li><a href="curros.php">Curros</a></li>
                    </ul>
                </nav>
            </div>
        </div>
		</form>	
</body>
</html>
</html>

