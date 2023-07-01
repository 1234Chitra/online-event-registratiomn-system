<!DOCTYPE html>

<html>

<head>
	<title>Simple web Development Template</title>

	<style>
		* {
			margin: 0;
			padding: 0;
		}

		.navbar {
			display: flex;
			align-items: center;
			justify-content: center;
			position: sticky;
			top: 0;
			cursor: pointer;
		}

		.background {
			background: black;
			background-blend-mode: darken;
			background-size: cover;
		}

		.nav-list {
			width: 70%;
			display: flex;
			align-items: center;
		}

		.logo {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.logo img {
			width: 80px;
			border-radius: 40px;
		}

		.nav-list li {
			list-style: none;
			padding: 26px 30px;
		}

		.nav-list li a {
			text-decoration: none;
			color: white;
		}

		.nav-list li a:hover {
			color: grey;
		}

		.rightnav {
			width: 30%;
			text-align: right;
		}

		

		.firstsection {
			background-color:#F5FFFA ;
			height: 400px;
		}

		.secondsection {
			background-color:#FFE4E1;
			height: 400px;
		}

		.box-main {
			display: flex;
			justify-content: center;
			align-items: center;
			color: black;
			max-width: 80%;
			margin: auto;
			height: 80%;
		}

		.firsthalf {
			width: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.secondhalf {
			width: 30%;
		}

		.secondhalf img {
			width: 70%;
			border: 4px solid white;
			border-radius: 150px;
			display: block;
			margin: auto;
		}

		.text-big {
			font-family: 'Piazzolla', serif;
			font-weight: bold;
			font-size: 35px;
		}

		.text-small {
			font-size: 18px;
		}

		.btn {
			padding: 8px 20px;
			margin: 7px 0;
			border: 2px solid white;
			border-radius: 8px;
			background:#F5FFFA;
			color: white;
			cursor: pointer;
		}

		.btn-sm {
			padding: 6px 10px;
			vertical-align: middle;
		}

		.section {
			height: 400px;
			display: flex;
			align-items: center;
			justify-content: center;
			max-width: 90%;
			margin: auto;
		}

		.section-Left {
			flex-direction: row-reverse;
		}

		.paras {
			padding: 0px 65px;
		}

		.thumbnail img {
			width: 250px;
			border: 2px solid black;
			border-radius: 26px;
			margin-top: 19px;
		}

		.center {
			text-align: center;
		}

		.text-footer {
			text-align: center;
			padding: 30px 0;
			font-family: 'Ubuntu', sans-serif;
			display: flex;
			justify-content: center;
			color: white;
		}
	</style>
</head>

<body>
	<nav class="navbar background">
		<ul class="nav-list">
			<div class="logo">
				<img src= "http://localhost/dataproject/shishu%20logo.png">
			</div>
			<li> <a href="https://geethashishu.in/about/principal-s-desk">ABOUT US</a></li>
            <li><a href="https://www.geethashishu.in/departments/departments-ug/computer-science-engineering">DEPARTMENT</a></li>
			<li><a href="https://www.geethashishu.in/gallery">GALLERY</a></li>
            <li><a href="http://localhost/dataproject/test.php">EVENTS</a></li>
            <li><a href="https://geethashishu.in/contact">CONTACT</a></li>

		</ul>
        
        

		
	</nav>

	<section class="firstsection">
	<p style="background-img:url('https://images.collegedunia.com/public/college_data/images/campusimage/1627969827College%20photo_1.JPG');">
	</style>
		<div class="box-main">
			<div class="firstHalf">
				<h1 class="text-big" id="program">
				<h1 class="text-big" id="web">GSSS INSTITUTE OF ENGINEERING AND TECHNOLOGY FOR WOMEN</h1>
				<p class="text-small">
					GSSS Institute of Engineering & Technology for Women is located in Mysore, the city of Palaces, renowned as a seat of learning. Steeped in history, the city of the Wodeyars, Mysore continues to be the cultural capital of Karnataka. Experiencing moderate climatic conditions throughout the year, Mysore is located in the southern part of Karnataka with an enchanting natural environment, most suitable for educational pursuits. Managed by the WHO'S WHO of Mysore, GSSS(R) is a non-profit organization which is focused towards value addition in terms of providing best of infrastructure and services for the cause of education.
				</p>


			</div>
		</div>
	</section>

	<section class="secondsection">
		<div class="box-main">
			<div class="firstHalf">
				<h1 class="text-big" id="program">
					GEETHAYAANA 
				</h1>
				<p class="text-small">
					GSSSIETW is proud to present its annual technocultural fest GEETHAYAANA-2023, for the 20th
year, a milestone. This Annual Fest brings together
students from various colleges giving them a
platform to showcase their talent and compete to
become the best.
Geethayaana provides a platform for students to
explore their creative, artistic and aesthetic
sensibilities to provide good exposure and nurture
in building their talents. It encourages innovation
and creativity to equip students with leadership
skills
				</p>


			</div>
		</div>
	</section>

	<section class="section">
		<div class="paras">
			<h1 class="sectionTag text-big">ACHIEVEMENTS</h1>
            <a href="https://geethashishu.in/awards">https://geethashishu.in/awards</a>

			<p class="sectionSubTag text-small">
				 
			</p>


		</div>

		<div class="thumbnail">
			<img src= "http://localhost/dataproject/logo.jpg" alt="laptop image">
		</div>
	</section>

	<footer class="background">
		<p class="text-footer">
			Copyright ©-All rights are reserved
		</p>

	</footer>
</body>

</html>