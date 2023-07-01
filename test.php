<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		/* Styling the body */
		body {
			margin: 0;
			padding: 0;
		}
		/* Styling section, giving background
			image and dimensions */
		section {
			width: 100%;
			height: 100vh;
			

			
			
		}
		/* Styling the left floating section */
		section .leftBox {
			width: 50%;
			height: 100%;
			float: left;
			padding: 50px;
			box-sizing: border-box;
		}
		/* Styling the background of
			left floating section */
		section .leftBox .content {
			color: #fff;
			background: rgba(0, 0, 0, 0.5);
			padding: 40px;
			transition: .5s;
		}
		/* Styling the hover effect
			of left floating section */
		section .leftBox .content:hover {
			background: #e91e63;
		}
		/* Styling the header of left
			floating section */
		section .leftBox .content h1 {
			margin: 0;
			padding: 0;
			font-size: 50px;
			text-transform: uppercase;
		}
		/* Styling the paragraph of
			left floating section */
		section .leftBox .content p {
			margin: 10px 0 0;
			padding: 0;
		}
		/* Styling the three events section */
		section .events {
			position: relative;
			width: 50%;
			height: 100%;
			background: rgba(0, 0, 0, 0.5);
			float: right;
			box-sizing: border-box;
		}
		/* Styling the links of
		the events section */
		section .events ul {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			margin: 0;
			padding: 40px;
			box-sizing: border-box;
		}
		/* Styling the lists of the event section */
		section .events ul li {
			list-style: none;
			background: #fff;
			box-sizing: border-box;
			height: 200px;
			margin: 15px 0;
		}
		/* Styling the time class of events section */
		section .events ul li .time {
			position: relative;
			padding: 20px;
			background: #262626;
			box-sizing: border-box;
			width: 30%;
			height: 100%;
			float: left;
			text-align: center;
			transition: .5s;
		}
		/* Styling the hover effect
			of events section */
		section .events ul li:hover .time {
			background: #e91e63;
		}
		/* Styling the header of time
			class of events section */
		section .events ul li .time h2 {
			position: absolute;
			margin: 0;
			padding: 0;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			color: #fff;
			font-size: 60px;
			line-height: 30px;
		}
		/* Styling the texts of time
		class of events section */
		section .events ul li .time h2 span {
			font-size: 30px;
		}

		/* Styling the details
		class of events section */
		section .events ul li .details {
			padding: 20px;
			background: #fff;
			box-sizing: border-box;
			width: 70%;
			height: 100%;
			float: left;
		}
		/* Styling the header of the
		details class of events section */
		section .events ul li .details h3 {
			position: relative;
			margin: 0;
			padding: 0;
			font-size: 22px;
		}
		/* Styling the lists of details
		class of events section */
		section .events ul li .details p {
			position: relative;
			margin: 10px 0 0;
			padding: 0;
			font-size: 16px;
		}
		/* Styling the links of details
		class of events section */
		section .events ul li .details a {
			display: inline-block;
			text-decoration: none;
			padding: 10px 15px;
			border: 1.5px solid #262626;
			margin-top: 8px;
			font-size: 18px;
			transition: .5s;
		}
		/* Styling the details class's hover effect */
		section .events ul li .details a:hover {
			background: #e91e63;
			color: #fff;
			border-color: #e91e63;
		}
	</style>
</head>
<body bgcolor="#FAF0E6">
	<section>
		<div class="leftBox">
			<div class="content">
				<h1>
					Events
				</h1>
				<p>
					*Code Jam <br>
				    *Infothon<br>
					*Code dumb <br>
					*Pick And Code <br>
				</p>
			</div>
		</div>
		
		
		
		
		<div class="events">
			<ul>
				<li>
					<div class="time">
						<h2>
							15 <br><span>July</span>
						</h2>
					</div>
					<div class="details">
						<h3>
							Where is the event happening?
						</h3>
						<p>
							GSSSIETW, Mysore 
				            In CSE department at sharp 11:30AM  
						
						</p>
						<a href="https://online.forms.app/chitra123mp/registration-form-2">Register</a>
					</div>
					<div style="clear: both;"></div>
				</li>
				<li>
					<div class="time">
						<h2>
							27 <br><span>September</span>
						</h2>
					</div>
					<div class="details">
						<h3>
							Where is the event happening?
						</h3>
						<p>
							GSSSIETW, Mysore 
				            In ISE department at sharp 12:30AM  
						
						</p>
						<a href="https://www.jotform.com/build/231812042795455#preview">Register</a>
					</div>
					<div style="clear:both;"></div>
				</li>
				<li>
					<div class="time">
						<h2>
							12 <br><span>August</span>
						</h2>
					</div>
					<div class="details">
						<h3>
							Where is the event happening?
						</h3>
						<p>
							GSSSIETW, Mysore 
				            In AIML department at sharp 12:30AM  
						</p>
						<a href="
https://form.123formbuilder.com/6471122/aerospace-engineering-event-rsvp-form">Register</a>
					</div>
					<div style="clear:both;"></div>
				</li>
			</ul>
		</div>
	
	
</section>

<footer 
		
		
		

	

<div class="row"></div>
<div class="row">
<div class="col s6"><a href="http://localhost/dataproject/frontpage.php">HOME </a></div>
		</footer>
</body>
</html>