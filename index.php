<?php
include ("anti_ddos/start.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<style>
			

@media screen  and (max-width: 860px)  {		
	body {
		background: #1b1525;
	}
	.gonza {
		height: 550px;
		background-image: url('http://images.vfl.ru/ii/1560944921/74f6ba97/26937997_m.png');
		background-repeat: no-repeat;
		 -moz-background-size: 100%; /* Firefox 3.6+ */
		-webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
		-o-background-size: 100%; /* Opera 9.6+ */
		background-size: 100%; /* Современные браузеры */
		background-size: cover;
	}
	.menu {
		
		display: inline-block;
		margin-left: 6%;
		font-family: 'Montserrat', sans-serif;
		font-size: 10px;
		
	}
	.menu:hover {
		transition: all 0.5s ease-out 0.1s;
		text-decoration: underline;
		color: #8B4FC7;
		cursor: pointer;
	}
	.knopka_header {
		background: #8B4FC7;
		padding: 10px;
		padding-left: 10px;
		padding-right: 10px;
		color: white;
		border: 1px solid #8B4FC7;
		border-radius: 2px;
		margin-top: -10px;
		font-family: 'Roboto', sans-serif;
	}
	.knopka_header:hover {
		transition: all 0.5s ease-out 0.1s;
		background: #1b1525;
		color: white;
		cursor: pointer;
		border: 1px solid white;
	}
	.knopka {
		padding: 10px;
		color: #8B4FC7;
		border: 1px solid #8B4FC7;
		border-radius: 2px;
		margin-top: -6px;
	}
	.knopka:hover {
		transition: all 0.5s ease-out 0.1s;
		background: #8B4FC7;
		color: white;
		cursor: pointer;
	}
	.conteiner {
		border: 0px solid red; 
		width: 60%; 
		height: 60px;   
		padding-top: 30px;
		float: right;
		color: white;
		text-align: right;
		padding-right: 60px;
	}
	.conteiner1 {
		font-family: 'Roboto', sans-serif;
		float: left;
		border: 1px solid #1b1525; 
		height: 60px;  
		margin-left: 5%;
		font-size: 14px;
		font-weight: bold;
		padding-top: 30px;
	}
	.bigcont {
		
		border: 1px solid #1A1525; 
		width: 90%;
		margin-left: auto;
		margin-right: auto;
		height: 550px;
	}
	.conteiner2 {
		font-family: 'Montserrat', sans-serif;
		border: 0px solid black; 
		width: 90%;
		font-size: 30px;
		margin-left: auto;
		margin-right: auto;
		margin-top: 300px;
		text-align: center; 
	}
	.conteiner2_1 {
		font-family: 'Montserrat', sans-serif;
		font-size: 15px;
		padding-left: 7px;
		padding-right: 7px;
		line-height: 1.5;
		color: #A6A5AB;
	}

	.menu2 {
		display: inline-block;
		font-family: 'Roboto', sans-serif;
		width: 40%;
		float: left;
		font-size: 11px;
		text-align: center;
		padding-top: 12px;
		padding-bottom: 12px;
	}
	.menu3 {
		color: white;
		background: #7644A9;
	}
	.stroke {
		color: white;
		text-shadow: black 2px -2px 0, #8B4FC7 3px -3px 0; 
					 	 
	}
	.bigcont2 {
		
		border: 0px solid green; 
		width: 90%;
		margin-left: auto;
		margin-right: auto;
		height: 850px;
	}

	.bigcont2_table {
		border-spacing: 13px 41px;
		font-family: 'Montserrat', sans-serif;
		font-size: 13px;
		color: #A6A5AB;
	}
	.zag {
		font-weight: bold;
		font-size: 18px;
		color: white;
		
	}
	.bigcont2_table_div1 {
		border: 0px solid black; 
		width: 50px;
		height: 50px;
		float: left;
		padding-right: 10px;
	}
	.bigcont2_table_div1 img {
		margin-left: -10px;
	}
	.bigcont2_table_div2 {
		
		margin-left: 12px;
	}
	.bigcont3 {
		border: 0px solid red; 
		width: 90%;
		margin-left: auto;
		margin-right: auto;
		
		margin-top: 10px;
	}
	
	.conteiner3 {
		width: 340px; 
		margin-left: auto; 
		margin-right: auto;
		margin-top: 20px;
		align-content: center;
		border: 0px solid red;
	}
	.conteiner3 a {
		color: white;
	}
	.setka {
		display: inline-block;
		border: 0px solid white;
		width: 200px;
		height: 356px;
		float: left;
		background: #16111E;
		margin-left: 5%;
		margin-top: 3%;
		color: #A6A5AB;
		font-family: 'Montserrat', sans-serif;
		font-size: 12px;
	}
	.setka a {
		color: white;
		text-decoration: none;
	}
	.setka_zag {
		padding-left: 4%;
		padding-top: 6%;
		text-align: left;
		font-size: 22px;
		color: white;
		font-family: 'Montserrat', sans-serif;
		text-shadow: #53489A -2px 2px 0, black -3px 3px 0, #53489A -4px 4px 0; 
	}
	.knopka_setka {
		padding: 15px;
		color: white;
		border-radius: 2px;
		margin-top: -6px;
		width: 60%;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
		background: #53489A;
		border: 1px solid #53489A;
		font-family: 'Roboto', sans-serif;
	}
	.knopka_setka:hover {
		transition: all 0.5s ease-out 0.1s;
		background: #53489A;
		cursor: pointer;
		-webkit-box-shadow: 0px 0px 37px -5px rgba(83,72,154,1);
		-moz-box-shadow: 0px 0px 37px -5px rgba(83,72,154,1);
		box-shadow: 0px 0px 37px -5px rgba(83,72,154,1);
	}
	
	.shadow {
		
	box-shadow: black 7px 7px 0, #8B4FC7 8px 8px 0; 
		
	}
	.bigcont5 {
		border: 0px solid white; 
		width: 90%;
		margin-left: auto;
		margin-right: auto;	
		margin-top: 1px;
		height: 850px;
		font-family: 'Montserrat', sans-serif;
		font-size: 13px;
		color: #A6A5AB;
	}
	
	
	.shadow1 {
		
		box-shadow: black 7px 7px 0, #8B4FC7 8px 8px 0; 
		
	}
	
	.bigcont6 {
		border: 0px solid red; 
		width: 90%;
		margin-left: auto;
		margin-right: auto;	
		margin-top: 50px;
		height: 400px;
		font-family: 'Montserrat', sans-serif;
		font-size: 13px;
		color: #A6A5AB;
	}

	.setka1 {
		display: inline-block;
		border: 0px solid white;
		width: 30%;
		height: 30px;
		padding: 25px;
		float: left;
		background: #16111E;
		margin-left: 7%;
		margin-top: 3%;
		color: #A6A5AB;
		font-family: 'Montserrat', sans-serif;
		font-size: 12px;
	}
	.setka1:hover {
		cursor: pointer;
	}
	.futer {
		border-top: 1px solid black;
		background: #16111E;
		width: 101.3%;
		margin-left: -1%;
		height: 90px;
		font-family: 'Montserrat', sans-serif;
		color: #A6A5AB;
		
	}
	.content {
	  box-sizing: border-box;
	  min-height: 100%;
	  padding-bottom: -4px;
	}
	html, body, .wrapper {
	  height: 100%;
	}
	.conteiner_futer {
		border: 0px solid red; 
		width: 30%; 
		height: 60px;   
		padding-top: 30px;
		float: right;
		color: white;
	}
	.FAQ {	
		position: relative; 
		z-index: 3;
		left: -24px; 
		top: 25px; 
		padding: 23px; 
		width: 100%; 
		display: none; 
		background: #302541;  
		height: auto;
	}
	.video {
		
		display: inline-block;
		margin-left: 5%;
	}
	.bigcont_shadow {
		position: absolute; 
		z-index: -3; 
		top: 280px; 
		left: 20%; 
		right: 20%;
		text-align: center;
		width: 60%;
		color: #191221; 
		font-size: 40px; 
		font-weight: bold;
	}
	.bigcont2_shadow {
		position: relative; 
		z-index: -3; 
		top: 25px; 
		left: 25%; 
		right: 25%;
		width: 50%;
		text-align: center; 
		color: #181221; 
		font-size: 40px; 
		font-weight: bold;
	}
	.bigcont2_zagolovok {
		font-family: 'Montserrat', sans-serif;
		text-align: center; 
		font-size: 25px;
		
	}
	.bigcont3_zagolovok {
		font-family: 'Montserrat', sans-serif;
		text-align: center; 
		font-size: 25px;
	}
	.bigcont3_shadow {
		position: relative;
		z-index: -3; 
		top: 30px; 
		left: 30%; 
		right: 30%;
		width: 40%;
		text-align: center;  
		color: #181221; 
		font-size: 40px; 
		font-weight: bold;
	}
	.video_1 {
		width: 100%; 
		margin-left: auto; 
		margin-right: auto;
		
	}
	.bigcont5_zagolovok {
		font-family: 'Montserrat', sans-serif;
		text-align: center; 
		font-size: 25px; 
		margin-top: 10px;
	}
	.bigcont5_shadow {
		position: relative; 
		z-index: -3; 
		top: 30px; 
		left: 30%; 
		right: 30%;
		width: 40%;
		text-align: center;  
		color: #181221; 
		font-size: 35px;  
		font-weight: bold;
	}
	.video1_1 {
		width: 90%;
	}
	.video1_1_1 {
		text-align: center; 
		font-size: 140%; 
		margin-top: 30px;
	}
	.faqyou {
		border: 0px solid white;
		
	}
	.bigcont6_zagolovok {
		font-family: 'Montserrat', sans-serif;
		text-align: center; 
		font-size: 25px; 
		margin-top: 30px;
		
	}
	.bigcont6_shadow {
		position: relative; 
		z-index: -3; 
		top: 80px; 
		left: 10%;  
		right: 10%;
		width: 80%;
		text-align: center;
		color: #181221; 
		font-size: 35px; 
		font-weight: bold;
	}
	.nadpis {
		display: none;
	}
	.col {
		color: white;
		font-weight: bold;
	}
	.kontur {
		 text-shadow: black 1px 1px 0, black -1px -1px 0, 
                 black -1px 1px 0;
	}
	.hot {
		margin-left: 165px;
		margin-top: -20px;
		width: 35px; 
		height: 26px;
		border-radius: 30px; 
		border: 0px solid red; 
		padding: 10px; 
		padding-top: 19px; 
		font-family: 'Montserrat';
		font-style: normal; 
		font-weight: bold; 
		font-size: 14px; 
		color: white;
		background: #7544A8;
	}
	.setka_glu {
		height: 23px;
		
	}
	
.triangle_down1 {
		
		 float: right;
		  content: "";
		  display: inline-block;
		  width: 8px;
		  height: 8px;
		  border-right: 0.2em solid white;
		  border-top: 0.2em solid white;
		  transform: rotate(135deg);
		  margin-right: 0.5em;
		  margin-left: 1.0em;
	}
	 .triangle_up1 {
		margin-top: 5px;
		float: right;
	   content: "";
	   display: block;
	   width: 8px;
	   height: 8px;
	   border-right: 0.2em solid white;
	   border-top: 0.2em solid white;
	   transform: rotate(-45deg);
	   margin-right: 0.5em;
	   margin-left: 1.0em;
	 }
	 .white {
		 color: white;
	 }
	.bigcont3_podzagolovok {
		 color: #A6A5AB; 
		 font-size: 18px; 
		 text-align: center;
	 }
	  .setka_div {
		width: 80%; 
		margin-left: 4%; 
		margin-right: auto; 
		border-top: 1px solid #A6A5AB; 
		
	 }
	  .setka_div2 { 
		  width: 80%; 
		  margin-left: auto; 
		  margin-right: auto; 
		  border-top: 1px solid #A6A5AB;
	  }
	   .cennik {
		 color: white; 
		 padding-left: 4%; 
	  }
	  .conteiner1_span {
		  color: #8B4FC7;
		  margin-left: 3px;
	  }
	  .pd_left {
		  padding-left: 4%;
	  }
}	



@media screen  and (min-width: 860px)  {		
	body {
		background: #1b1525;
	}
	.gonza {
		height: 700px;
		background-image: url('http://images.vfl.ru/ii/1560944921/74f6ba97/26937997_m.png');
		background-repeat: no-repeat;
		 -moz-background-size: 100%; /* Firefox 3.6+ */
    	-webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    	-o-background-size: 100%; /* Opera 9.6+ */
    	background-size: 100%; /* Современные браузеры */
		background-size: cover;
	}
	.menu {
		
		display: inline-block;
		margin-left: 6%;
		font-family: 'Montserrat', sans-serif;
		font-size: 14px;
		
	}
	.menu:hover {
		transition: all 0.5s ease-out 0.1s;
		text-decoration: underline;
		color: #8B4FC7;
		cursor: pointer;
	}
	.knopka_header {
		background: #8B4FC7;
		padding: 10px;
		padding-left: 25px;
		padding-right: 25px;
		color: white;
		border: 1px solid #8B4FC7;
		border-radius: 2px;
		margin-top: -10px;
		font-family: 'Roboto', sans-serif;
	}
	.knopka_header:hover {
		transition: all 0.5s ease-out 0.1s;
		background: #1b1525;
		color: white;
		cursor: pointer;
		border: 1px solid white;
	}
	.knopka {
		padding: 10px;
		color: #8B4FC7;
		border: 1px solid #8B4FC7;
		border-radius: 2px;
		margin-top: -6px;
	}
	.knopka:hover {
		transition: all 0.5s ease-out 0.1s;
		background: #8B4FC7;
		color: white;
		cursor: pointer;
	}
	.conteiner {
		border: 0px solid red; 
		width: 60%; 
		height: 60px;   
		padding-top: 30px;
		float: right;
		color: white;
		text-align: right;
		padding-right: 60px;
	}
	.conteiner1 {
		font-family: 'Roboto', sans-serif;
		float: left;
		border: 0px solid #1b1525; 
		height: 60px;  
		margin-left: 5%;
		font-size: 20px;
		font-weight: bold;
		padding-top: 30px;
	}
	.bigcont {
		
		border: 1px solid #1A1525; 
		width: 90%;
		margin-left: auto;
		margin-right: auto;
		height: 650px;
	}
	.conteiner2 {
		font-family: 'Montserrat', sans-serif;
		border: 0px solid black; 
		width: 60%;
		font-size: 40px;
		margin-left: auto;
		margin-right: auto;
		margin-top: 300px;
		text-align: center; 
	}
	.conteiner2_1 {
		font-family: 'Montserrat', sans-serif;
		font-size: 20px;
		padding-left: 7px;
		padding-right: 7px;
		line-height: 1.5;
		color: #A6A5AB;
		border: 0px solid white;
		max-width: 585px;
		margin-left: auto;
		margin-right: auto;
	}
	.conteiner2_2 {
		width: 340px; 
		margin-left: auto; 
		margin-right: auto;
		margin-top: 40px;
		align-content: center;
		border: 0px solid red;
		
	}
	.conteiner2_2 a {
		color: white;
		
	}
	.menu2 {
		display: inline-block;
		font-family: 'Roboto', sans-serif;
		width: 40%;
		float: left;
		font-size: 15px;
		text-align: center;
		padding-top: 16px;
		padding-bottom: 16px;
	}
	.menu3 {
		color: white;
		background: #7644A9;
	}
	.stroke {
		font-family: 'Montserrat', sans-serif;
		color: white;
		text-shadow: black 2px -2px 0, black 3px -3px 0, #8B4FC7 4px -4px 0; 
					 	 
	}
	.bigcont2 {
		
		border: 0px solid red; 
		width: 90%;
		margin-left: auto;
		margin-right: auto;
		margin-top: 30px;
		height: 950px;
	}

	.bigcont2_table {
		border-spacing: 13px 41px;
		font-family: 'Montserrat', sans-serif;
		font-size: 14px;
		color: #A6A5AB;
		width: 90%;
		margin-left: auto;
		margin-right: auto;
	}
	.zag {
		font-weight: bold;
		font-size: 21px;
		color: white;
		
	}
	.bigcont2_table_div1 {
		border: 0px solid black; 
		width: 70px;
		height: 70px;
		float: left;
		padding-right: 6px;
	}
	.bigcont2_table_div2 {
		
	}
	.bigcont3 {
		border: 0px solid blue; 
		max-width: 1300px;
		margin-left: auto;
		margin-right: auto;
		min-height: 1240px;
		margin-top: 50px;
		text-align: center;
	}
	
	.conteiner3 {
		width: 340px; 
		margin-left: auto; 
		margin-right: auto;
		margin-top: 20px;
		align-content: center;
		border: 0px solid red;
	}
	.conteiner3 a {
		color: white;
	}
	.setka {
		display: inline-block;
		border: 0px solid white;
		width: 300px;
		height: 430px;
		float: left;
		background: #16111E;
		margin-left: 7%;
		margin-top: 3%;
		color: #A6A5AB;
		font-family: 'Montserrat', sans-serif;
		font-size: 16px;
		text-align: left;
		padding-left: 10px;
	}
	.setka a {
		color: white;
		text-decoration: none;
	}
	.setka_zag {
		padding-left: 4%;
		
		text-align: left;
		font-size: 24px;
		color: white;
		font-family: 'Montserrat', sans-serif;
		text-shadow: #53489A -2px 2px 0, black -3px 3px 0, #53489A -4px 4px 0; 
	}
	.knopka_setka {
		padding: 15px;
		color: white;
		font-size: 16px;
		border-radius: 2px;
		margin-top: -6px;
		width: 168px;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
		background: #53489A;
		border: 1px solid #53489A;
		font-family: 'Roboto', sans-serif;
		
	}
	.knopka_setka:hover {
		transition: all 0.5s ease-out 0.1s;
		background: #53489A;
		cursor: pointer;
		-webkit-box-shadow: 0px 0px 37px -5px rgba(83,72,154,1);
		-moz-box-shadow: 0px 0px 37px -5px rgba(83,72,154,1);
		box-shadow: 0px 0px 37px -5px rgba(83,72,154,1);
	}
	.shadow {
		
	box-shadow: black 7px 7px 0, #8B4FC7 8px 8px 0; 
		
	}
	.bigcont5 {
		border: 0px solid red; 
		max-width: 1300px;
		margin-left: auto;
		margin-right: auto;	
		
		height: 600px;
		font-family: 'Montserrat', sans-serif;
		font-size: 13px;
		color: #A6A5AB;
	}
	
	
	.shadow1 {
		
		box-shadow: black 7px 7px 0, #8B4FC7 8px 8px 0; 
		
	}
	
	.bigcont6 {
		border: 0px solid blue; 
		width: 90%;
		margin-left: auto;
		margin-right: auto;	
		margin-top: 0px;
		height: 700px;
		font-family: 'Montserrat', sans-serif;
		font-size: 13px;
		color: #A6A5AB;
	}

	.setka1 {
		display: inline-block;
		text-align: left;
		vertical-align: middle;
		border: 0px solid white;
		width: 35%;
		height: 30px;
		padding: 30px;
		float: left;
		background: #16111E;
		margin-left: 7%;
		margin-top: 3%;
		color: #A6A5AB;
		font-family: 'Montserrat', sans-serif;
		font-size: 15px;
	}
	.setka1:hover {
		cursor: pointer;
	}
	.futer {
		border-top: 1px solid black;
		background: #16111E;
		width: 101.3%;
		margin-left: -1%;
		margin-top: 14px;
		height: 90px;
		font-family: 'Montserrat', sans-serif;
		color: #A6A5AB;
		
	}
	.content {
	  box-sizing: border-box;
	  min-height: 100%;
	  padding-bottom: -4px;
	}
	html, body, .wrapper {
	  height: 100%;
	}
		
	.conteiner_futer {
		border: 0px solid red; 
		width: 30%; 
		height: 60px;   
		padding-top: 30px;
		float: right;
		color: white;
	}
	.FAQ {	
		position: relative; 
		z-index: 3;
		left: -30px; 
		top: 45px; 
		padding: 30px; 
		width: 100%; 
		display: none; 
		background: #302541;  
		height: auto;
	}
	.video {
		
		display: inline-block;
		margin-left: 5%;
	}
	.bigcont_shadow {
		position: absolute; 
		z-index: -3; 
		top: 280px; 
		left: 20%; 
		right: 20%;
		text-align: center;
		width: 60%;
		color: #191221; 
		font-size: 60px; 
		font-weight: bold;
	}
	.bigcont2_shadow {
		position: relative; 
		z-index: -3; 
		top: 50px; 
		left: 30%; 
		right: 30%;
		width: 40%;
		text-align: center; 
		color: #181221; 
		font-size: 60px; 
		font-weight: bold;
	}
	.bigcont2_zagolovok {
		text-align: center; 
		font-size: 40px;
		font-family: 'Montserrat', sans-serif;
	}
	.bigcont3_zagolovok {
		font-family: 'Montserrat', sans-serif;
		text-align: center; 
		font-size: 40px;
	}
	.bigcont3_shadow {
		position: relative;
		z-index: -3; 
		top: 50px; 
		left: 30%; 
		right: 30%;
		width: 40%;
		text-align: center;  
		color: #181221; 
		font-size: 60px; 
		font-weight: bold;
	}
	.video_1 {
		width: 560px; 
		margin-left: auto; 
		margin-right: auto;
		margin-top: 50px;
	}
	.bigcont5_zagolovok {
		font-family: 'Montserrat', sans-serif;
		text-align: center; 
		font-size: 40px; 
		margin-top: 30px;
	}
	.bigcont5_shadow {
		position: relative; 
		z-index: -3; 
		top: 80px; 
		left: 30%; 
		right: 30%;
		width: 40%;
		text-align: center;  
		color: #181221; 
		font-size: 60px; 
		font-weight: bold;
	}
	.video1_1 {
		width: 40%;
	}
	.video1_1_1 {
		text-align: center; 
		font-size: 140%; 
		
	}
	.bigcont6_zagolovok {
		font-family: 'Montserrat', sans-serif;
		text-align: center; 
		font-size: 40px; 
		margin-top: 30px;
		
	}
	.bigcont6_shadow {
		position: relative; 
		z-index: -3; 
		top: 80px; 
		left: 10%;  
		right: 10%;
		width: 80%;
		text-align: center;
		color: #181221; 
		font-size: 60px; 
		font-weight: bold;
	}
	.nadpis {
		font-weight: normal; 
		font-size: 14px;
	}
	.right {
		float: right;
		
	}
	.maxwidth {
		max-width: 450px;
		
	}
	.faqyou {
		max-width: 1300px;
		margin-left: auto;
		margin-right: auto;
		
	}
	.col {
		color: white;
		font-weight: bold;
	}
	.kontur {
		 text-shadow: black 1px 1px 0, black -1px -1px 0, 
                 black -1px 1px 0;
	}
	.hot {
		margin-left: 270px;
		margin-top: -20px;
		width: 33px; 
		height: 26px;
		border-radius: 30px; 
		border: 0px solid red; 
		padding: 10px; 
		padding-top: 19px; 
		padding-left: 13px;
		font-family: 'Montserrat';
		font-style: normal; 
		font-weight: bold; 
		font-size: 14px; 
		color: white;
		background: #7544A8;
	}
	.setka_glu {
		height: 56px;
	}
	.setka_glu2 {
		height: 20px;
	}
	.triangle_down1 {
		
		 float: right;
		  content: "";
		  display: inline-block;
		  width: 8px;
		  height: 8px;
		  border-right: 0.2em solid white;
		  border-top: 0.2em solid white;
		  transform: rotate(135deg);
		  margin-right: 0.5em;
		  margin-left: 1.0em;
	}
	 .triangle_up1 {
		margin-top: 5px;
		float: right;
	   content: "";
	   display: block;
	   width: 8px;
	   height: 8px;
	   border-right: 0.2em solid white;
	   border-top: 0.2em solid white;
	   transform: rotate(-45deg);
	   margin-right: 0.5em;
	   margin-left: 1.0em;
	 }
	 .sss {
		 border: 1px solid white;
		 float: right;
		 height: 20px;
		 width: 10%;
	 }
	 .sss1 {
		 width: 85%;
		 border: 1px solid white;
		 float: left;
		 height: auto;
		 
	 }
	 .white {
		 color: white;
	 }
	 .bigcont3_podzagolovok {
		 color: #A6A5AB; 
		 font-size: 18px; 
		 text-align: center;
	 }
	 .setka_div {
		width: 80%; 
		 margin-left: 4%; 
		 margin-right: auto; 
		 border-top: 1px solid #A6A5AB; 
		
	 }
	  .setka_div2 { 
	  width: 80%; 
	  margin-left: auto; 
	  margin-right: auto; 
	  border-top: 1px solid #A6A5AB;
	  }
	  .cennik {
		 color: white; 
		 padding-left: 4%; 
	  }
	  .conteiner1_span {
		  color: #8B4FC7;
		  margin-left: 3px;
	  }
	  .pd_left {
		  padding-left: 4%;
	  }
	 .conteiner0 {
		  
		  height: auto;
		  max-width: 1170px;
		  margin-left: auto;
		  margin-right: auto;
	  }
}
	</style>
	
</head>
	<body>
<script>
	if(screen.width < 480){ 
		var str = "m.php"; 
		window.location = str; 
	}; 
	
</script>
<div class="wrapper">	
	<div class="content">
	<div class="gonza">	
	<div class="bigcont_shadow">FIRST STRESS TESTING </br> &nbsp;&nbsp;BOT IN TELEGRAM!</div>
		<div class="bigcont">
		<div class="conteiner0">	
			<div class="conteiner1">
				<span class="white">SST</span><span class="conteiner1_span" >WTF</span>
			</div>
			<div class="conteiner">	
				<a href="#pricing" class="white"><div class="menu" > Pricing</div></a>
				<a href="#use" class="white"><div class="menu" > How to use </div></a>
				<a href="#faq" class="white"><div class="menu"> FAQ </div></a>
			</div>	
		</div>	
			<div class="conteiner2">
				<span class="stroke">First Stress Testing  </br>
				Bot in Telegram!</span></br></br>
				<div class="conteiner2_1">
				WebStressers era has already passed, it's time for new features! 
				We have released  our telegram bot with most powerful methods for your stress testing. Try new capacity right now!
				</div>
				<div class="conteiner2_2" >
					<a href="https://t.me/stresstestingbot"><div  class="knopka menu2" style="float: left;"><b>RUN BOT</b></div></a>
					<a href="https://shoppy.gg/@sstwtf"><div  class="knopka menu2" style="float: right;"><b>BUY PACKAGE</b></div></a>
				</div>
			</div>
		</div>
	</div>	
		
		
		
		<div class="bigcont2">
		<div class="bigcont2_shadow">OUR FEATURES</div>
			<div class="stroke bigcont2_zagolovok" >OUR FEATURES</div>
			<table class="bigcont2_table">
				<tr>
					<td >
					<div class="right" >
						<div class="bigcont2_table_div1" ><img src="http://images.vfl.ru/ii/1560944920/757ac369/26937990_m.png" /></div>
						<div class="bigcont2_table_div2" >
							<span class="zag">Dedicated servers</span></br>
							<p class="maxwidth" >We use just dedicated servers for our Layer 7 methods and our private botnet for private hub.</p>
						</div>
					</div>	
					</td>
					<td>
						<div class="bigcont2_table_div1"><img src="http://images.vfl.ru/ii/1560944920/5e218d6d/26937991_m.png" /></div>
						<div class="bigcont2_table_div2">
						<span class="zag">Instant activation</span></br>
						<p class="maxwidth">You can instantly activate your package with redeem code. All payments are automatic.</p>
						</div>
					</td>
				</tr>
				<tr>
					<td>
					<div class="right">
						<div class="bigcont2_table_div1"><img src="http://images.vfl.ru/ii/1560944920/488e86a0/26937992_m.png" /></div>
						<div class="bigcont2_table_div2">
						<span class="zag">Advanced usage</span></br>
						<p class="maxwidth">No more web panels, you can start boot directly in Telegram, it is much more convenient.</p>
						</div>
					</div>	
					</td>
					<td>
						<div class="bigcont2_table_div1"><img src="http://images.vfl.ru/ii/1560944920/ca9201e7/26937993_m.png" /></div>
						<div class="bigcont2_table_div2">
						<span class="zag">Custom methods</span></br>
						<p class="maxwidth">We dont use public methods in our hub. We use only our own methods (Bypass / Regular).</p>
						</div>
					</td>
				</tr>
				<tr>
					<td>
					<div class="right">
						<div class="bigcont2_table_div1"><img src="http://images.vfl.ru/ii/1560944920/bbb7e2a2/26937994_m.png" /></div>
						<div class="bigcont2_table_div2">
						<span class="zag">Customer care</span></br>
						<p class="maxwidth">Our team is online 24/7. You can at any time ask a help and our supports will help you.</p>
						</div>
					</div>	
					</td>
					<td>
						<div class="bigcont2_table_div1"><img src="http://images.vfl.ru/ii/1560944920/dc8f1f58/26937995_m.png" /></div>
						<div class="bigcont2_table_div2">
						<span class="zag">Secure payment</span></br>
						<p class="maxwidth">We accept only Bitcoin and Ethereum for safety our customers.</p>
						</div>
					</td>
				</tr>
			</table>
					<div class="shadow video_1" >
						<div class="shadow1" >
								<iframe   width="100%" height="300" src="https://www.youtube.com/embed/cJCVaLYXUPs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; 
									gyroscope; picture-in-picture" allowfullscreen>
								</iframe>
						</div>		
					</div>
		</div>
		
		<div class="bigcont3" id="pricing">
		<div class="bigcont3">
		<div class="bigcont3_shadow" >OUR PRICING</div>
			<div class="stroke bigcont3_zagolovok">OUR PRICING</div>
			<div class="bigcont3_podzagolovok" >We have cheapest prices on the market.</div>
			<div class="conteiner3" >
					</br></br>
					<div  class="knopka menu2" style="float: left;"><b>VIP (SOON)</b></div>
					<a href=""><div  class="knopka menu2 menu3" style="float: right;"><b>REGULAR HUB</b></div></a>
			</div>
			</br></br></br></br>
			
			<table>
				<tr>
					<td>
			
				<div class="setka">
					<div class="setka_glu"></div>
					<div class="setka_zag">STARTER</div></br>
					<span class="cennik" >$30</span> / month</br></br>
					<div class="setka_div" ></div></br></br>
					<div class="pd_left" >
					Concurrents: <span class="white">1 </span> </br></br>
					Attack duration: <span class="white">1800 seconds </span> </br></br>
					Layer 7 methods: <span class="white">Included</span> </br></br>
					VIP: <span class="white">No</span> </br>
					</div></br></br>
					<a href="https://shoppy.gg/product/OsKsQ9J"><div  class="knopka_setka" >BUY NOW</div></a>
				</div>
				<div class="setka">
					<div class="hot" >HOT</div></a>
					<div class="setka_glu2"></div>
					<div class="setka_zag">ADVANCED</div></br>
					<span class="cennik" >$55</span> / month</br></br>
					<div class="setka_div" ></div></br></br>
					<div class="pd_left" >
					Concurrents: <span class="white">2 </span></br></br>
					Attack duration:<span class="white"> 3600 seconds  </span></br></br>
					Layer 7 methods: <span class="white">Included  </span></br></br>
					VIP: <span class="white">No </span></br>
					</div>
					</br></br>
					<a href="https://shoppy.gg/product/ZYDFr4D"><div  class="knopka_setka" >BUY NOW</div></a>
				</div>
				<div class="setka">
					<div class="setka_glu"></div>
					<div class="setka_zag">PROFESSIONAL</div></br>
					<span class="cennik" >$120</span> / month</br></br>
					<div class="setka_div" ></div></br></br>
					<div class="pd_left">
					Concurrents: <span class="white">4 </span></br></br>
					Attack duration: <span class="white">5400 seconds </span></br></br>
					Layer 7 methods: <span class="white">Included </span></br></br>
					VIP: <span class="white">No</span></br>
					</div>
					</br></br>
					<a href="https://shoppy.gg/product/Mzq9DUg">	<div  class="knopka_setka" >BUY NOW</div></a>
				</div>
				<div class="setka">
					<div class="setka_glu"></div>
					<div class="setka_zag">INVINCIBLE</div></br>
					<span class="cennik" >$200</span> / month</br></br>
					<div class="setka_div" ></div></br></br>
					<div class="pd_left">
					Concurrents: <span class="white">6 </span></br></br>
					Attack duration: <span class="white">10800 seconds </span></br></br>
					Layer 7 methods: <span class="white">Included </span></br></br>
					VIP: <span class="white">Yes </span></br>
					</div></br></br>
					<a href="https://shoppy.gg/product/qbBS0eO"><div  class="knopka_setka" >BUY NOW</div></a>
				</div>	
				<div class="setka">
					<div class="setka_glu"></div>
					<div class="setka_zag">CUSTOM</div></br>
					<span class="cennik" >$?</span> / month</br></br>
					
					<div class="setka_div2" ></div>
					<div class="pd_left">
					</br></br>
					Concurrents: <span class="white">? </span></br></br>
					Attack duration: <span class="white">? </span></br></br>
					VIP: <span class="white">Yes </span></br>	
					</div></br></br>
					<br><br>
					<a href="https://t.me/sstwtf"><div  class="knopka_setka" >BUILD NOW</div></a>
				</div>
				<div class="setka">
					<div class="setka_glu"></div>
					<div class="setka_zag">GOD</div></br>
					<span class="cennik" >$300</span> / month</br></br>
					<div class="setka_div" ></div></br></br>
					<div class="pd_left">
					Concurrents: <span class="white">5 </span></br></br>
					Attack duration: <span class="white">43200 seconds </span></br></br>
					Layer 7 methods: <span class="white">Included </span></br></br>
					VIP: <span class="white">Yes</span></br>
					
					</div></br></br>
					<a href="https://shoppy.gg/product/6DIUh4c"><div  class="knopka_setka" >BUY NOW</div></a>
				</div>
				</td>
			</tr>
		</table>	
		</div>
		</div>
		
		<div class="bigcont5" id="use">
		<div class="bigcont5_shadow">HOW TO USE</div>
				<div class="stroke bigcont5_zagolovok" >HOW TO USE</div></br></br>
				<div style="text-align: center;">	
					<div class="video video1_1" >
						<div class="video1_1_1">How to buy & activate package: </div></br>
						<div class="shadow1" >
								<iframe   width="100%" height="300" src="https://www.youtube.com/embed/HHeWB8nyi6w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; 
									gyroscope; picture-in-picture" allowfullscreen>
								</iframe>
						</div>		
					</div>
					
					<div class="video video1_1" >
						<div class="video1_1_1" >How to use:</div></br>
						<div class="shadow1" >
								<iframe   width="100%" height="300" src="https://www.youtube.com/embed/0ZFMJ8fQPeE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; 
									gyroscope; picture-in-picture" allowfullscreen>
								</iframe>
						</div>			
					</div>
				</div>	
			</div>
		
		<div class="gonza">		
		<table  class="faqyou">
			<tr>
				<td>
		<div class="bigcont6_shadow" >FAQ</div>
			<div class="bigcont6" id="faq">
				<div class="stroke bigcont6_zagolovok" >FAQ</div>
				<div class="setka1" id="toggle1"  onclick="func2(this)">
						Do you accept paypal? 
						<div  class=" triangle_down1"></div>
					<div id="elem1" class="FAQ" > 
						No. We accept only BTC, ETH and BTC Cash.
					</div>
				</div>
				<div class="setka1" id="toggle2" onclick="func2(this)">
					How I can buy and activate my package? 
					<div  class=" triangle_down1"></div>	
					<div id="elem2" class="FAQ" > 
						Choose your package on <a href="#pricing" class="white">pricing</a> table and then you can pay with cryptocurrency. You can activate you package with /promo command, like /promo YOUCODE
					</div>
				</div>
					<div class="setka1" id="toggle3" onclick="func2(this)">
						Do you offer trial?  
							<div  class=" triangle_down1"></div>
						<div id="elem3" class="FAQ" > 
							No. But we provide test hits. Just ask in telegram chat. 
						</div>
					</div>
				<div class="setka1" id="toggle4" onclick="func2(this)">
					Can I get refund?
						<div  class=" triangle_down1"></div>	
					<div id="elem4" class="FAQ" > 
						No. We do not provide refund.
					</div>
				</div>
				<div class="setka1" id="toggle5" onclick="func2(this)">
					What attack methods you have?  
						<div  class=" triangle_down1"></div>	
					<div id="elem5" class="FAQ" > 
						Now we have 2 regular methods and 2 bypass methods. Our bypass methods can bypass much js/cookie-based protections. Full list you can see in our chat.
					</div>
				</div>
				<div class="setka1" id="toggle6" onclick="func2(this)">
					You have Layer 4? 
						<div  class=" triangle_down1"></div>	
				<div id="elem6" class="FAQ" > 
						No, now we have only Layer 7. Because our service focused at Layer 7. Soon we will add Layer 4 Hub and Botnet Hub.
					</div>
				</div>
			</div>	
					</td>
				</tr>
			</table>
		</div>
		<div class="futer">
			<div class="conteiner1">
				<span class="white">SST</span><span class="conteiner1_span">WTF</span><span class="nadpis" >  | Copyright 2019 © SST.WTF. All rights reserved.</span>
			</div>
			<div class="conteiner_futer">	
				<a href="#pricing" class="white"><div class="menu" > Pricing</div></a>
				<a href="#use" class="white"><div class="menu"> How to use </div></a>
				<a href="#faq" class="white"><div class="menu"> FAQ </div></a>
			</div>	
		</div>
	</div>
</div>	
<script>
		function func2(elem) {
				
			elem.firstElementChild.classList.toggle('triangle_down1');
			elem.firstElementChild.classList.toggle('triangle_up1');
			elem.parentElement.classList.toggle('color');
				
			}
			
		$('#toggle1').click(function func() {
			$('#elem1').slideToggle(700);
			
		});
		$('#toggle2').click(function func() {
			$('#elem2').slideToggle(700);
		});
		$('#toggle3').click(function func() {
			$('#elem3').slideToggle(700);
		});
		$('#toggle4').click(function func() {
			$('#elem4').slideToggle(700);
		});
		$('#toggle5').click(function func() {
			$('#elem5').slideToggle(700);
		});
		$('#toggle6').click(function func() {
			$('#elem6').slideToggle(700);
		});
	
		
	var timeOut;
	function goUp() {
		var top = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
		if (top > 0) {
			
			window.scrollBy(0, -100);
			timeOut = setTimeout('goUp()', 20);
		} else {cleatTimeout(timeOut); }
	}	


	var $page = $('html, body');
	$('a[href*="#"]').click(function() {
		$page.animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 1000);
		return false;
	});


</script>	

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d19e00e22d70e36c2a38d6a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

	</body>
</html>