<!DOCTYPE html>
<html>

<head>

	<title>Sportska oprema</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css" >
	body{
		background-color: #F0F8FF;
	}

	.zag{
		background-color: #A52A2A;
	}
	
	.link{
		color: white;
	}

	h1, h2{
		color:  black;
		text-align: center;
		font-family: Georgia;
	}


	.container {
		position: relative;
		max-width: 800px; /* Maximum width */
		margin: 0 auto; /* Center it */
	}

	.container .content {
		position: absolute; /* Position the background text */
		bottom: 0; /* At the bottom. Use top:0 to append it to the top */
		background: rgb(0, 0, 0); /* Fallback color */
		background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
		color: #f1f1f1; /* Grey text */
		width: 100%; /* Full width */
		padding: 20px; /* Some padding */
		}


	h3, p.mi{
		text-align: justify;
		color: white;
		text-align-last: center;
	}


	.gallery{
		margin: 15px;
		float: left;
		width: 260px;
		padding-right: 70px;
		padding-left: 70px;
	}


	.gallery_hover{
		border: 3px solid #777;
	}

	.gallery_img{
		width: 100%;
		height: auto;
	}

	.desc{
		padding-top: 15px;
		padding-left: 0px;
		padding-right: 50px;
		text-align: center;
	}


	</style>

</head>

<body>

<div class="zag">
	<header>
         <table cellspacing="50" width="100%">
			<thead>
			<th><img src="img/logo.jpg" width="300" height="150"></th>
			<th><a href="#m__naslovnica" rel="noreferrer" class="link">Naslovnica</a></th>
			<th><a href="#m__o_nama" rel="noreferrer" class="link">O nama</a></th>
			<th><a href="#m__proizvodi" rel="noreferrer" class="link">Proizvodi</a></th>
			<th><a href="#m__kontakt" rel="noreferrer" class="link">Kontakt</a></th>
			<th><a href="#m__admin" rel="noreferrer" class="link">Admin</a></th>
			<th><button style="color:black"><a href="/login" style="color:black" rel="noreferrer">Prijava</a></button></th>
			<th><button style="color:black"><a href="/register" style="color:black" rel="noreferrer">Registracija</a></button></th>
			</thead>
		</table>
	</header>
</div>

	<div>
		<h1 align ="center">SportAMA </h1>
		<h2 align="center">Prodaja sportske opreme</h2>
	</div>
       
		<div class="container">
			<img style="width:840px" src="img/naslovna.png" alt="Naslovna">
				<div class="content">
					<h3 style="text-align:center" id="m__o_nama">O nama</h3>
					<p class="mi"> 
						SportAMA je najve??i online prodajni lanac na svijetu za djecu i odrasle. U ponudi ima vi??e od 200 000 proizvoda koje prodaje 250+ prodava??a-partnera 
						iz BiH i EU. Cilj nam je obu??i svakog ??ovjeka u najljep??u i najkvalitetniju robu, te nam je na prvom mjestu udobnost proizvoda i zadovoljstvo kupca.
						Na jednom mjestu imate sve, od fitnes opreme, sportske odje??e, do opreme za razli??ite sportove: karate, kickboks, skijanje, tenis, golf, 
						odbojka, itd.
						<br>
						Cilj nam je i motivirati ljude da se pokrenu, ne sutra, ne prekosutra,vec sada-POKRENI SE ! <br>
						Sve je na jednom mjestu, tvoje je samo da se pokrene??.<br>
					
						Pokretaci projekta su studentice Matematika-Informatika. Kako su zamislile svoj projekt, koji im je cilj, motivacija te koje tehnologije ??e
						koristiti mo??ete pogledati <a href="https://drive.google.com/file/d/1AzCOWvu4cP3ff1GAM3K9SlSWbpbVIo95/view?usp=sharing" target="_blank" rel="noreferrer" class="link">ovdje</a>. 
						<br><br>
						Izaberi za sebe najbolji proizvod iz na??eg asortimana i iznenadi svoju budu??nost!
					</p>
				</div>
        </div>
 
<div class="gallery" id="m__admin">
	<a target="_blank" href="img/Ana.jpg">
		<img style=" height: 270px; width: 230px;" src="img/Ana.jpg" alt="Ana Ljubi?? slika">
	</a>
	<div class="desc">
		<p class="ime">Ana Ljubi??</p>
		<p> Ro??ena 01.11.1999.</br>SS?? ??iroki Brijeg, smjer Ra??unalni tehni??ar za strojarstvo</br>2018. FPMOZ,smjer Matematika-Informatika</br>
		<a href="mailto:ana.ljubic1@fpmoz.sum.ba">ana.ljubic1@fpmoz.sum.ba</a></p>
	</div>
</div>

<div class = "gallery">
	<a target="_blank" href="img/AnaB.jpg"> 
		<img style=" height: 240px; width: 300px;" src="img/AnaB.jpg" alt="Ana Braovac slika"> 
	</a>
	<div class="desc">
		<p class="ime">Ana Braovac</p></td>
		<p> Ro??ena 08.11.1998.</br>SS?? Livno, smjer Ekonomija</br>2018. FPMOZ,smjer Matematika-Informatika</br>
		<a href="mailto:ana.braovac@fpmoz.sum.ba">ana.braovac@fpmoz.sum.ba</a></p>
	</div>
</div>

<div class="gallery">
	<a target="_blank" href="img/Matea.jpg">
		<img style=" height: 290px; width: 180px;" src="img/Matea.jpg" alt="Matea D??anki?? slika">
	</a>
	<div class="desc">
		<p class="ime">Matea D??anki??</p>
		<p> Ro??ena 10.03.2000.</br>S?? Prozor, smjer Op??a gimnazija</br>2018. FPMOZ,smjer Matematika-Informatika</br>
		<a href="mailto:matea.dzankic@fpmoz.sum.ba">matea.dzankic@fpmoz.sum.ba</a></p>
	</div>
</div>
	
</body>

</html>