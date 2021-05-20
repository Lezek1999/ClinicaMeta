<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"> 
	<title>Clinica Meta</title>

<style>
@import url('https://fonts.googleapis.com/css?family=Oswald:500');
.back{
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background:url(https://pp.userapi.com/c841122/v841122831/327e/nHt-92F6yc4.jpg) no-repeat top center #efeff1;
  background-size:cover;
}
.thx{
  position: fixed;
  left:50%;
  transform:translateX(-50%);
  bottom: 15px;
}

	nav a{
	font-family: 'Oswald', sans-serif;
	font-weight:500;
	text-transform:uppercase;
	text-decoration:none;
	color:#16151b;
	margin:0 20px;
	font-size:16px;
	letter-spacing:1px;
	position:relative;
	display:inline-block;
	}
nav a:before{
  content:'';
  position: absolute;
  width: 100%;
  height: 3px;
  background:#16151b;
  top:47%;
  animation:out 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
}
nav a:hover:before{
  animation:in 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;

}
@keyframes in{
  0%{
    width: 0;
    left:0;
    right:auto;
  }
  100%{
    left:0;
    right:auto;
    width: 100%;
  }
}
@keyframes out{
  0%{
    width:100%;
    left: auto;
    right: 0;
  }
  100%{
    width: 0;
    left: auto;
    right: 0;
  }
}
@keyframes show{
  0%{
    opacity:0;
    transform:translateY(-10px);
  }
  100%{
    opacity:1;
    transform:translateY(0);
  }
}

@for $i from 1 through 5 {
  nav a:nth-child(#{$i}){
    animation:show .2s #{$i*0.1+1}s ease 1 both;
  }
}
	

	header
	{
padding:0;
margin:0;
width:100%; 
background: #808080;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #3fada78c, #80808088), url("img/med.jpg");  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #3fada78c, #80808088), url("img/med.jpg"); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
height: 225px;
background-position: center;
background-size: cover;
font-family: 'Signika', sans-serif;
position: relative;
margin: auto;
text-align: center;

	}
	nav
	{
position: relative;
margin: auto;
width:100%;
height: auto;
background: #36D1DC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}
	nav ul
	{
position: relative;
margin:auto;
width:75%;
text-align: center;
	}
	nav ul li
	{
    display: inline-block;
		width: 19%;
		line-height: 50px;
		list-style: none;
	}
nav ul li a
{
	color: white;
	text-decoration: none;
}
section
{
  position: relative;
	padding: 20px;
}

</style>


 


</head>
<body>

	<header>

		<img src="img/CN1.png" alt="logo Clinica Meta" width="800" height="200">

		<br>
	</header>	
	
	<?php

		include "modulos/menu.php";

	?>


	
	<section>

		
		<?php

		$control1 = new controladores();
		$control1-> enlacesPaginasControlador();

		?>

	</section>


</body>
</html>



