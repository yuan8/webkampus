<html>
<head>
	<title></title>
<script type="text/javascript" src="disk/js/jq.js"></script>
<link rel="stylesheet" type="text/css" href="font-aw/css/font-awesome.css">
<style type="text/css">
*{
	margin: 0px;
}
body{
	background-color: rgb(241, 241, 241);
}
@font-face{
	font-family: yuan;
	src: url(font-aw/fonts/Aaargh.ttf);
}
@font-face{
	font-family: yuanbebas;
	src: url(font-aw/fonts/bebas.ttf);
}
nav{
	float: left;
	position: fixed;
	z-index: 10;
	width: 100%;
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
	width: 101px;
	border-left: 1px solid #D8D8D8; 
	height: 80px;
	float: right;
}
#con-index{
	margin-left:95px;
    width: 950px;
    float: left;
    border: 1px solid #D8D8D8;
    background-color: #fff;
    height: 666px;
    margin-top: 80px;

}
.col-left-10{
	padding: 7px;
	float: left;
	width: 100%;
}
.col-left-7{
	padding: 7px;
	float: left;
	width: 70%
}
.col-left-5{
	padding: 7px;
	float: left;
	width: 50%;
}
.col-left-2{
	padding: 7px;
	float: left;
	width: 25%;
}
input{

	border: 1px solid #D8D8D8;
}
.input-search{
	padding-right: 40px;
}
.search{
	margin-left: -31px;
	outline: none;
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
	
}
.btn:hover{
	background-color: #D8D8D8;
}
.h-center{
	margin-top: 5px;

}

/*nav hr 2*/
.ul-ver{
	list-style: none;

}
.ul-ver li{
	display: inline;
	padding: 7px;
	margin-left: -13px;
	float: left;
	width: 12.5%;
	margin-top: -8px;
	font-family: yuan;
	font-size: 12px;
	font-weight: bold;

	text-align: center;
	
}

a{
	color:#424242;
}
.ul-ver li:hover{
	
	border-bottom: 2px solid #00BFFF;
}
.ul-ver li a{
	text-decoration: none;
}

</style>

</head>
<body>
<!-- nav -->
	<nav>
		<div id="ver-nav">
			<header class="col-left-10">
				<img src="b.png">
			</header>	

		</div>
		<!-- log menu -->
		<div id="log-menu"></div>
		<!-- hr menu -->
		<div class="col-left-7 center h-center">
			<input type="text" class=" col-left-7 input-search ">
			<button class="btn search"><i class="fa fa-search fa-lg"></i></button>
		</div>
		<!-- hr menu 2 -->
		<div class="col-left-7 center">
			<ul class="ul-ver">
				<li><a href="#">Home</a></li>
				<li><a href="#">SEMA</a></li>
				<li><a href="#">HIMA</a></li>
				<li><a href="#">UKM</a></li>
				<li><a href="#">Komunitas</a></li>
			</ul>


		</div>

	</nav>

	<div id="con-index">




	</div>



</body>
</html>