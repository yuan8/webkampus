<html>
<head>
	<title></title>
<script type="text/javascript" src="disk/js/jq.js"></script>
<link rel="stylesheet" type="text/css" href="font-aw/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="disk/css/nav.css">
<style type="text/css">
*{
	margin: 0px;
}
body{
	background-color: rgb(241, 241, 241);
	margin-left: auto;
	margin-right:auto; 
}
@font-face{
	font-family: yuan;
	src: url(font-aw/fonts/alternate.ttf);
}
@font-face{
	font-family: yuanbebas;
	src: url(font-aw/fonts/bebas.ttf);
}
input{
	padding: 7px;
}
nav{
	float: left;
	position: fixed;
	z-index: 10;
	width: 1349px;
	height: 80px;
	background-color: #fff;
	border-bottom: 1px solid #D8D8D8;
}
#ver-nav{
	width: 200px;
	float: right;
	min-height:666px;
	background-color: #fff;
	border-left: 1px solid #D8D8D8;  
}
#log-menu{
	width: 87px;
	border-left: 1px solid #D8D8D8; 
	height: 80px;
	float: right;
}
#con-index{
	margin-left:95px;
    width: 950px;
    float: left;
    padding: 7px;
    border: 1px solid #D8D8D8;
    background-color: #fff;
    height: 666px;
    margin-top: 90px;

}
.col-left-10{
	float: left;
	width: 100%;
}
.col-left-7{
	float: left;
	width: 70%
}
.col-left-5{
	float: left;
	width: 50%;
}
.col-left-4{
	float: left;
	width: 47%;
}
.col-left-2{
	float: left;
	width: 25%;
}
.col-left-x{
	padding: 0px;
	float: left;
	width: 78.5%;
	margin-bottom: 10px;
	
}
input{

	border: 1px solid #D8D8D8;
}
.input-search{
	padding-right: 40px;
	width: 768px;
	font-style: italic;
}
.search{
	margin-left: -5px;
	outline: none;
	padding: 7px;
	}
.center{
	float: none;
	margin-right: auto;
	margin-left: auto;

}
.btn{
	background-color: #fff;
	border: 1px solid #D8D8D8;
	height: 31px;
	border-top: 3px solid #d8d8d8;
	
}
p{
	font-size: 13px;
	color: #777;
}
.btn:hover{
	background-color: #D8D8D8;
}
.logo{
	width: 100%;
}

.h-center{
	width: 1059px;
	height: 75px;
	margin-top: 5px;	


}

/*nav hr 2*/
.ul-ver{
	list-style: none;
	height: 20px;
	margin-left:-40px;
	margin-top: 7px;

}
.pic-fix{
	width: 103%;
	height: 103%;

}

.ul-ver .ul-ver-in{
	display: inline;
	float: left;
	padding-top: 7px;
	padding-bottom: 7px;
	width: 20%;
	font-family: arial;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	
}


a{
	color:#424242;
}
.ul-ver .ul-ver-in:hover{
	
	border-bottom: 2px solid #0B2161;
}
.ul-ver .ul-ver-in a{
	text-decoration: none;
}
.pic-header{
	overflow: hidden;
	height: 300px;
	background-color:#D8D8D8 ;
	border-bottom: 2px solid #0B2161;
}
.font-yuan{
	font-family: arial;
}
.menu-entity{
	position: absolute;
	margin: auto;
	height: 50px;
	float: left;
	bottom: 0px;
	top:0;
	width: 450px;
	opacity: 0.5;
	z-index: 9;

}

.r-head{
height: 300px;


}
.menu-entity button{
	width: 40px;
	height: 40px;
	border-radius: 20px;
	margin: 5px;
	background-color: red;
	float: left;
	outline: none;
}
.menu-entity button i{
	color:#fff;
}
.row-1{
	width:1059px;
	height: 37px;
	border-bottom: 1px solid #D8D8D8;     
}
.row-2{
	width:1059px;
	height: 20px;
	     
}
.h-1{
	width: 800px;
	height: 37px;
}
.h-2{
	width: 800px;
	height: 37px;
}
</style>

</head>
<body>
<!-- nav -->
	<nav>
		<div id="ver-nav">
			<header class="col-left-10">
				<img src="img/default/logo.png" class="logo cross-container">
			</header>	

		</div>
		<!-- log  menu -->
		<div id="log-menu">



		</div>
		<!-- hr menu -->
		
		<div class="col-left-x  h-center">
			<div class="row-1"> 
				<div class="center col-left-10 h-1">
				<!-- serch -->
					<input type="text" class="input-search ">
					<button class="btn search"><i class="fa fa-search fa-lg"></i></button>
				</div>
			</div>
		

		<!-- hr menu 2 -->
		<div class="row-2">
			<div class="center h-2">
				<ul class="ul-ver menu">
				
					<li class="ul-ver-in"><a href="#">Home</a>
						<li class="ul-ver-in"><a href="#">Sema</a>
					 <ul class="submenu" id="sub1">
                        <li><a href="#">Submenu a</a></li>
                        <li><a href="#">Submenu b</a></li>
                        <li><a href="#">Submenu c</a></li>
                        <li><a href="#">Submenu d</a></li>
                        <li><a href="#">Submenu e</a></li>
                        <li><a href="#">Submenu f</a></li>
                        <li><a href="#">Submenu g</a></li>
                        <li><a href="#">Submenu h</a></li>
                    </ul>
                	</li></li>
					<li class="ul-ver-in"><a href="#">HIMA</a></li>
					<li class="ul-ver-in"><a href="#">UKM</a></li>
					<li class="ul-ver-in"><a href="#">Komunitas</a></li>
				</ul>


			</div>
		</div>
		</div>
	</nav>
	<!-- container -->
	<div id="con-index">

	<!-- others is diferend value-->

	<!-- header pic -->
	<div class="col-left-5 pic-header">
		<img src="img/unduhan.jpg" class="cross-container pic-fix" >
	</div>

	<div class="col-left-4 font-yuan r-head">
		<h4>TI Mentayangi kucing</h4>
		<br>
		<p>nelknlk elnflkenl klenl fenlkc ele jne jejcljenclec en clenc eniem eljnj lnjenjc 
		 neknkle e vjlel kne cjl cnejl e em ej jlcjeclenflne kleknfke jkele jnklen e
		 ej je cj em jne jjekjeihm jicec
		 wenewncewni jiec ehie eicbe cencineinel enciew ciheiodjqk cnqlkcnqj cqc cbevje
		 wwe ejnjewk</p>

		<!--menu entity -->
		<div class=" menu-entity">
			<a href="http://www.youtube.com"><button href="" class=""> <i class="fa fa-youtube fa-lg"></i></button></a>
			<a hreff="#"><button href="" class=""> <i class="fa fa-twitter fa-lg"></i></button></a>
			<a hreff="#"><button href="" class=""> <i class="fa fa-facebook fa-lg"></i></button></a>
			<a hreff="#"><button href="" class=""> <i class="fa fa-flickr fa-lg"></i></button></a>

		</div>

	</div>






	</div> 
	<!-- close con index -->



</body>
</html>