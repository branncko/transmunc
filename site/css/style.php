
/* CONTRASTE INICIO */
/* fundos */
.contrast,
.contrast nav,
.contrast div,
.contrast li,
.contrast ol,
.contrast i,
.contrast header,
.contrast footer,
.contrast section,
.contrast main,
.contrast aside,
.contrast table td,
.contrast Contraste,
.contrast span,
.contrast center,
.contrast article {
    background: black !important;
    color: white !important;
}

/* textos */
.contrast h1,
.contrast h2,
.contrast h3,
.contrast h4,
.contrast h5,
.contrast h6,
.contrast p,
.contrast label,
.contrast strong,
.contrast em,
.contrast cite,
.contrast q,
.contrast i,
.contrast b,
.contrast u,
.contrast span {
    color: white !important;
}
/* formulários */
.contrast input[type=text],
.contrast input[type=password],
.contrast input[type=url],
.contrast input[type=search],
.contrast input[type=email],
.contrast input[type=tel],
.contrast input[type=date],
.contrast input[type=month],
.contrast input[type=week],
.contrast input[type=datetime],
.contrast input[type=datetime-local],
.contrast textarea,
.contrast input[type=number] {
    background: black !important;
    border: 1px solid white !important;
    color: white !important;
}
/* opções de ação */
.contrast a{
    color: yellow !important;
}

.contrast button,
.contrast input[type=button],
.contrast input[type=reset],
.contrast input[type=submit] {
    background: black !important;
    color: yellow !important;
    border: none !important;
}
/* imagens */
.contrast img.on-contrast-force-gray {
    filter: grayscale(100%) contrast(120%);
}

.contrast img.on-contrast-force-white {
    filter: brightness(0) invert(1);
}
/* CONTRASTE FIM */

/* LINHA DO TEMPO */

@﻿﻿font-face {
	font-family: 'ecoico';
	src:url('../fonts/timelineicons/ecoico.eot');
	src:url('../fonts/timelineicons/ecoico.eot?#iefix') format('embedded-opentype'),
		url('../fonts/timelineicons/ecoico.woff') format('woff'),
		url('../fonts/timelineicons/ecoico.ttf') format('truetype'),
		url('../fonts/timelineicons/ecoico.svg#ecoico') format('svg');
	font-weight: normal;
	font-style: normal;
} /* Made with http://icomoon.io/ */

.cbp_tmtimeline {
	margin: 10px 0 0 0;
	padding: 0;
	list-style: none;
	position: relative;
} 

/* Linha */
.cbp_tmtimeline:before {
	content: '';
	position: absolute;
	top: 0;
	bottom: -10px;
	width: 4px;
	background: #F7F7F7;
	left: 4%;
	margin-left: -7px;
}

.cbp_tmtimeline > li {
	position: relative;
}

/* The date/time */
.cbp_tmtimeline > li .cbp_tmtime {
	display: block;
	width: 25%;
	padding-right: 100px;
	position: absolute;
}

.cbp_tmtimeline > li .cbp_tmtime span {
	display: block;
	text-align: right;
}

.cbp_tmtimeline > li .cbp_tmtime span:first-child {
	font-size: 0.9em;
	color:;
}

.cbp_tmtimeline > li .cbp_tmtime span:last-child {
	font-size: 2.2em;
	color: #F79420;
}

.cbp_tmtimeline > li:nth-child(odd) .cbp_tmtime span:last-child {
	color: #F79420;
}

/* Right content */
.cbp_tmtimeline > li .cbp_tmlabel {
	margin: 0 0 15px 7%;
	background: #3594cb;
	color: #fff;
	padding: 10px;
	font-size: 1.2em;
	font-weight: 300;
	
	position: relative;
	border-radius: 5px;
}

.cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel {
	background: #F7F7F7;
}
#Span_Responsive {
    font-size: 12px;
    font-weight: 600;
    color:#303030;
}
.cbp_tmtimeline > li .cbp_tmlabel h2 { 
	margin-top: 0px;
	/*padding: 0 0 10px 0;
	border-bottom: 1px solid rgba(255,255,255,0.4);*/
        margin-bottom: 0px;
        font-size: 12px;
}

.cbp_tmtimeline > li .cbp_tmlabel p { 
	margin-bottom: 2px;
        font-size: 12px;
        color: #303030;
}

.cbp_tmtimeline > li .cbp_tmlabel td { 
	padding-left: 0;
        font-size: 12px;
        color: #303030;
}

.cbp_tmtimeline > li .cbp_tmlabel a { 
	color:#000; 
        font-size: 11px; 
        font-weight: 600;
}

/* The triangle */
.cbp_tmtimeline > li .cbp_tmlabel:after {
	right: 100%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-right-color: #F7F7F7;
	border-width: 10px;
	top: 10px;
}

.cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after {
	border-right-color: #F7F7F7;
}

/* The icons */
.cbp_tmtimeline > li .cbp_tmicon {
	width: 38px;
	height: 38px;
	font-family: 'ecoico';
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	font-size: 1.4em;
	line-height: 40px;
	-webkit-font-smoothing: antialiased;
	position: absolute;
	color: #27632F;
	background: #fff;
	border-radius: 50%;
	box-shadow: 0 0 0 4px #F7F7F7;
	text-align: center;
	left: 4%;
	top: 0;
	margin: 0 0 0 -25px;
}
/*
.cbp_tmicon-phone:before {
	content: "\e000";
}
*/
.cbp_tmicon-screen:before {
	content: "\e001";
}

.cbp_tmicon-mail:before {
	content: "\e002";
}

.cbp_tmicon-earth:before {
	content: "\e003";
}

/* Example Media Queries */
@media screen and (max-width: 65.375em) {

	.cbp_tmtimeline > li .cbp_tmtime span:last-child {
		font-size: 1.5em;
	}
}

@media screen and (max-width: 47.2em) {
	.cbp_tmtimeline:before {
		display: none;
	}

	.cbp_tmtimeline > li .cbp_tmtime {
		width: 100%;
		position: relative;
		padding: 0 0 20px 0;
	}

	.cbp_tmtimeline > li .cbp_tmtime span {
		text-align: left;
	}

	.cbp_tmtimeline > li .cbp_tmlabel {
		margin: 0 0 70px 0;
		padding: 1em;
		font-weight: 400;
		font-size: 95%;
	}

	.cbp_tmtimeline > li .cbp_tmlabel:after {
		right: auto;
		left: 20px;
		border-right-color: transparent;
		border-bottom-color: #F7F7F7;
		top: -20px;
	}

	.cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after {
		border-right-color: transparent;
		border-bottom-color: #F7F7F7;
	}
        
        .cbp_tmtimeline {
            margin: 60px 0 0 0;
        }

	.cbp_tmtimeline > li .cbp_tmicon {
		position: relative;
		float: right;
		left: auto;
		margin: -55px 86% 0 0px;
	}
        
        #Span_No_Responsive{
            display: none;
        }
        #Span_Responsive{
            display: block !important;
        }
}
/* FIM LINHA DO TEMPO */

html, body {
	height: 100%;
}

.balao {
    
    border-style:solid;
    border-size:o.5px;
    border-radius:10%;
    border-color:#ffffff;
    background-color:#34813E;
    width: 100px;
    height: 45px;
    text-align: center;
    font-size:12px;
    text-margin:-10px
    font-family:;
    padding-top:8px;
}
.image-canvas-close{
    position: absolute;
    right: -7px;
    color: #ffffff;
    margin-top: -15px;
    border-radius: 100%;
    border-color: #ffffff;
    background-color: #34813E;
    border-style: solid;
    font-size: 10px;
    border-left: none;
    border-bottom: none;
    padding-left: 4.5px;
    padding-right: 4px;
    padding-bottom: 2px;
    line-height: normal;
}

#fancybox-close{
	position: absolute;
    top: -15px;
    right: -15px;
    width: 30px;
    height: 30px;
    
    cursor: pointer;
    z-index: 1103;
    display: none;
}

body {
  background: #F7F7F7;
  font-family: "Roboto", Arial, Helvetica, sans-serif;
  color: #303030;
  //line-height: 22px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 600; 
  font-family: "Roboto", Arial, Helvetica, sans-serif;
  color:#303030;
}
a {
  color: #F79420;
  -webkit-transition: color 300ms, background-color 300ms;
  -moz-transition: color 300ms, background-color 300ms;
  -o-transition:  color 300ms, background-color 300ms;
  transition:  color 300ms, background-color 300ms;
}

a:hover, a:focus {
  color: #f39c12;
}

.img-unidade {
    background: #F79420;
    object-fit: cover;
    object-position: center;
    height: 108px;
    margin-bottom: 5px;
}

.img-unidade:hover{
    opacity: 0.5;
}

#main-slider .prev,
#main-slider .next {
  position: absolute;
  top: 50%;
  color: #F79420;
  display: inline-block;
  margin-top: -25px;
  height: 40px;
  line-height: 40px;
  width: 40px;
  line-height: 40px;
  text-align: center;
  border-radius: 4px;
  z-index: 5;
}

#main-slider .prev:hover,
#main-slider .next:hover {
  color: #f39c12;
}
.carousel-indicators {
    bottom: 5px
}
.carousel-indicators li {
    border-radius:0px;
}
#main-slider .carousel-indicators li {
  width: 30px;
  height: 5px;
  background-color: #f39c12;
  margin: 0 15px 0 0;
  position: relative;
  border: none;
}

#main-slider .carousel-indicators li:after {
  position: absolute;
  content: "";
  width: 30px;
  height: 5px;
  border-radius: 0px;
  background: #f39c12;
  border: none;
  left: -3px;
  top: 0px;
}

#main-slider .carousel-indicators .active{
  width: 30px;
  height: 5px;
  background-color: #F79420;
   margin: 0 15px 0 0;
   position: relative;
}

#main-slider .carousel-indicators .active:after {
  position: absolute;
  content: "";
  width: 30px;
  height: 5px;
  border-radius: 0px;
  background:  #F79420;
  border: none;
  left: -3px;
  top: 0px;
}

#main-slider .prev,
#main-slider .next {
  position: absolute;
  top: 50%;
  color: #F79420;
  display: inline-block;
  margin-top: -25px;
  height: 40px;
  line-height: 40px;
  width: 40px;
  line-height: 40px;
  text-align: center;
  border-radius: 4px;
  z-index: 5;
}

#myCarousel .prev:hover,
#myCarousel .next:hover {
  color: #f39c12;
}
#myCarousel .carousel-indicators {
    bottom: -30px;
}
.carousel-indicators li {
    border-radius:0px;
}
#myCarousel .carousel-indicators li {
  width: 30px;
  height: 5px;
  background-color: #f39c12;
  margin: 0 15px 0 0;
  position: relative;
  border: none;
}

#myCarousel .carousel-indicators li:after {
  position: absolute;
  content: "";
  width: 30px;
  height: 5px;
  border-radius: 0px;
  background: #f39c12;
  border: none;
  left: -3px;
  top: 0px;
}

#myCarousel .carousel-indicators .active{
  width: 30px;
  height: 5px;
  background-color: #F79420;
   margin: 0 15px 0 0;
   position: relative;
}

#myCarousel .carousel-indicators .active:after {
  position: absolute;
  content: "";
  width: 30px;
  height: 5px;
  border-radius: 0px;
  background:  #F79420;
  border: none;
  left: -3px;
  top: 0px;
}

.wet-asphalt {
  background-color: #FFFFFF;
}

.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus,
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #27632F;
}
.navbar-inverse .navbar-nav .dropdown-menu {
  background-color: #27632F;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border: 0;
  padding: 0;
  margin-top: -3px;
}

.navbar-inverse .navbar-nav > li > a:hover{
  background-color: #27632F;
  color: #fff;
}

.navbar-inverse .navbar-nav > li > a {
  padding: 5px 12px;
  margin: 0;
  border-radius: 3px;
  color: #FFFFFF;
  line-height: 24px;
  display: inline-block;
}

.emerald {
  background-color: #FCFCFC;
}
.btn-group .btn-primary{
    border-radius: 6px !important;
}
.btn-primary {
  background: #F79420;
  color: #fff;
  border:none;
  outline: none;
  box-shadow: none;
  border-radius: 6px;
}

.filtro-letras {
    margin-bottom: 4px;
}

.alfabeto{
    font-size: 15px;
}
.btn-primary:hover, 
.btn-primary:focus{
  background: #F79420;
  outline: none;
  box-shadow: none;
  opacity:0.5;
} 
.feature-wrap i{
  font-size: 48px;
  height: 110px;
  width: 110px;
  margin: 3px;
  border-radius: 100%;
  line-height: 110px;
  text-align:center;
  background: #ffffff;
  color: #F79420;
  border: 3px solid #ffffff;
  box-shadow: inset 0 0 0 5px #f2f2f2;
  -webkit-box-shadow: inset 0 0 0 5px #f2f2f2;
  -webkit-transition: 500ms;
  -moz-transition: 500ms;
  -o-transition: 500ms;
  transition: 500ms;
  float: left;
  margin-right: 25px;
}

.feature-wrap i:hover {
  background: #F79420;
  color: #fff;
  box-shadow: inset 0 0 0 5px #F79420;
  -webkit-box-shadow: inset 0 0 0 5px #F79420;
  border: 3px solid #F79420;
}
ul.social-share li a {
  display: inline-block;
  color: #fff;
  background: #F79420;
  width: 25px;
  height: 25px;
  line-height: 25px;
  text-align: center;
  border-radius: 2px;
}

ul.social-share li a:hover {
  background: #f39c12;
  color: #fff;
}
.top-number{
  color: #FFFFFF;
}

/* Rodapé bottom */
#bottom {
  color: #FFFFFF;
  background: #34813E;
   
}
#TituloBottom {
    font-size: 1.1em; 
    letter-spacing: 1px; margin-top: 10px; 
    font-weight: bold;
}

#bottom p {
  font-size: 11px;
  color: #FFFFFF;
  margin-bottom: 0;
}

#bottom p a {
  color: #FFFFFF;
  font-size: 11px;
}

#bottom p a:hover {
  color: #FFFFFF;
  border-bottom: 1px solid #303030;
}

#CardBottom {
    margin-bottom: 10px;
}

#bottom h3 {
  margin-top: 0;
  margin-bottom: 10px;
  font-size:22px;
  color: #FFFFFF;
}

/* Rodapé bottom Fim */

.media-heading{
  color: #303030}
.top-bar {
  background: #34813E;
  line-height: 30px;
}

/* Rodapé footer */
#footer {
  
  padding-bottom: 30px;
  color: #fff;
  background: #34813E;
}

#footer a {
  color: #FFFFFF}

#footer a:hover {
  color: #FFFFFF;
  border-bottom: 1px solid #303030;
}

#footer strong p {
  margin-bottom: 0;
  font-size: 12px;
}

#footer p {
  color: #FFFFFF;
  font-size: 12px;
  margin-bottom: 1px;
}


#footer h3 {
  color: #FFFFFF;
  margin-top: 0px;
}
/* Rodapé footer Fim */

.widget h3 {
  color: #FFFFFF;
  margin-bottom: 20px;
}
.linksec {
	padding:20px;
	text-align:center;
    display:block;
    color:#FFFFFF;
}
.linksec:hover {
	opacity:0.8;
	filter:alpha(opacity=20); 
    color:#FFFFFF;
}
#tablink {
    padding-top:10px;
}
#linkrow {
	padding:10px;
	background-color: #FCFCFC;
}
#rels {
  background-color: #FCFCFC;
  margin-top:10px;
  padding-bottom:10px;
}
#informes {
  background-color: #FCFCFC;
  border-radius: 6px;
  margin-top:20px;
}
#public {
  background-color: #FCFCFC;
  margin-top:30px;
}
#transp {
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: #FCFCFC;
}
#transp img{
  margin-top: 10px;
  margin-bottom: 10px;
}
#contra {
  padding-top: 20px;
  padding-bottom: 20px;
}
.navbar-inverse .navbar-nav .dropdown-menu > li:hover > a,
.navbar-inverse .navbar-nav .dropdown-menu > li:focus > a,
.navbar-inverse .navbar-nav .dropdown-menu > li.active > a {
  background: #F79420;
  color: #fff;
}
.datainf {
	margin-top:0;
    padding:5px;
    border-radius:3px;
    color:#FFF; 
    background:#F79420;
}
.datainf span {
	line-height:30px;
	font-size:30px;
}
.caixa {
    background-color: #FCFCFC;
    padding-bottom: 20px;
    border-radius: 6px;
}
.g1 {
    background-color: #FCFCFC;
    padding: 0px;
    padding-bottom:15px;
    border-radius: 6px;
}
.videotv {
	position: relative;
	height: 130px;
}
.videotv iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.videotv_mini {
	position: relative;
	width: 200px;
	height: 140px;
	
}
.videotv_p iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.videotv_p {
      position: relative;
	
	height: 400px;
       
}
.videotv_mini iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 350px;
	height: 140px;
}
.videotv2 iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.videotv2 {
        position: relative;
    	width: 500px;
	height: 300px;
}

.img_inf {
	background-color: #F79420;
}
#feature {
  background: #FCFCFC;
  padding-bottom: 40px;
}
.captcha {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
    color: #FCFCFC;
    background: #F79420;
    width: 70px;
    padding: 6px;
    font-size: 18px;
    letter-spacing:5px;
    float: left;
    text-align:center;
}
#bolsa {
	width: 100%;
	min-height: 900px;
}
#tablesemborda tr td{
	border-top:none;
}
.align_left{
    text-align:left;
}
.nav-tabs>li>a {
  background: #F7F7F7;
  color: #666;
  border-radius: 0;
  border: 0 none;
  line-height: 24px;
  margin-right:0;
  padding: 13px 15px;
}
.nav-tabs>li>a:hover{
  /*background: #1f1f20;*/
  color:#FCFCFC;
}
.nav-tabs>li>a:hover, .nav-tabs>li>a:focus:hover{
    background-color: transparent;
    -webkit-box-shadow: inset 0 -1px 0 #F79420;
    box-shadow: inset 0 -2px 0 #fcfcfc;
    color: #666;   
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus {
    background-color: #F79420;
    border-radius: 0px;
    color: #FFFFFF;
    box-shadow: inset 0 -2px 0 #fcfcfc;
}
.nav-tabs>li.active>a:hover{
    background-color: #F79420;
}


.flex-column>li>a {
  background: #F7F7F7;
  color: #666;
  border-radius: 0;
  border: 0 none;
  line-height: 24px;
  margin-right:0;
  padding: 13px 15px;
  
}
.flex-column>li>a:hover{
  /*background: #1f1f20;*/
  color:#FCFCFC;
}
.flex-column>li>a:hover, .flex-column>li>a:focus:hover{
    background-color: transparent;
    /*-webkit-box-shadow: inset 0 -1px 0 #F79420;*/
    
    color: #666;   
}
.flex-column>li.active>a, .flex-column>li.active>a:focus {
    /*background-color: #F79420;*/
    border-radius: 0px;
    color: black;
    background-color: #fff;
    border-top:1px solid #dee2e6;
    border-right:5px solid #fff;
    border-bottom:1px solid #dee2e6;
    border-left:2px solid #F79420;
}
.flex-column>li.active>a:hover{
    /*background-color: #F79420;*/
    color: black;
    
}

.tab-content.tab-space {
    border-top:2px solid #F79420;
    border-left:2px solid #F7F7F7;
    border-right:2px solid #F7F7F7;
    border-bottom:2px solid #F7F7F7;
    display: flex; 
}

#tab-flex-column {
    border-top:1px solid #F7F7F7;
    border-left:1px solid #F7F7F7;
    border-right:1px solid #F7F7F7;
    border-bottom:1px solid #F7F7F7;
    background-color: #fff;
}

.titulo_linha {
    font-size:16px; 
    border-bottom: #27632F solid 2px;
    margin-bottom:5px;
    font-family: "Roboto", Arial, Helvetica, sans-serif;
    font-weight: 600;
}
.caixa_faixa {
	height: 20px;
    padding-left:5px;
    border-left: #27632F solid 4px;
    margin-bottom:10px;
}
.caixa_faixa a{
 color:#303030;
}
.caixa_faixa a:hover, .caixa_faixa a:focus {
  color: #303030;
}
.gmaps iframe {
    width: 100%;
    height: 150px;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus {
    color: #fff;
    background-color: #27632F;
    }
.navbar {
    min-height: 10px;
}
.navbar-default {
  background: #34813E;
  -webkit-box-shadow: 0 0px 0px rgba(0,0,0,0.3); 
  box-shadow: 0 0px 0px rgba(0,0,0,0.3);
}

.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus,
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: #27632F;
  color: #FFFFFF;
}
.navbar-default .navbar-nav .dropdown-menu {
  background-color: #27632F;
  color: #FFFFFF;
}
.navbar-default .navbar-nav > li > a:hover{
  background-color: #27632F;
  color: #FFFFFF;
}
.navbar-default .navbar-nav > li > a {
  color: #FFFFFF;
  padding-top: 14px;
  padding-bottom: 14px;
}
.navbar-default .dropdown-menu>li>a {
  color: #FFFFFF;
  line-height: 30px;
}
.navbar-default .dropdown-menu>li>a:hover {
  border-bottom:1px solid #34813E;
  border-top:1px solid #34813E;
  color: #34813E;
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: #34813E;
    }
    
.redesocial{
  display: inline-block;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  color:#FFF;
  font-size:17px;
  background: #F79420;
  margin-top: 10px;
  margin-bottom: 10px;
}

.redesocial:hover {
  opacity:0.5;
  color:#FFF;
}

.redesocial1{
  display: inline-block;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  color:#FFF;
  font-size:17px;
  background: #F79420;
  margin-top: 10px;
  margin-bottom: 10px;
  border-radius: 6px;
}

.redesocial1:hover {
  opacity:0.5;
  color:#FFF;
}

.line-top {
  display: inline-block;
  width: 100%;
  background-color: #34813E;
}
#font-setting-buttons a{
  font-size:11px;
  color: #FFFFFF;
}

#font-setting-buttons a:hover {
    background-color: rgba(255,255,255,0.1);
}
select.form-control {
  font-size:13px;
}

.form-group label {
  font-weight: 600; 
}
.dropdown-menu::-webkit-scrollbar-track {
    background-color: #FFFFFF;
}
.dropdown-menu::-webkit-scrollbar {
    width: 6px;
    background: #FFFFFF;
}
.dropdown-menu::-webkit-scrollbar-thumb {
    background: #27632F;
}
.carousel .carousel-caption {
	background: rgb(52,129,62) transparent;
	background: rgba(52,129,62,0.7);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#34813E, endColorstr=##34813E);
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#34813E, endColorstr=#34813E)";
}
.carousel-caption {
	padding-top: 0px;
	padding-bottom: 10px;
}
#list {	
    position: absolute;
    z-index: 1;
    background-color: #27632F;
}
#list a{	
    color: #FFFFFF;
}
#list a:hover{
	background-color: #27632F;	
    color: #FFFFFF;
}
.nav>li>a {
    padding: 5px 10px;
}

.tree {
    min-height:20px;
    padding:19px;
    margin-bottom:20px;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.tree li {
    list-style-type:none;
    margin:0;
    padding:10px 5px 0 5px;
    position:relative
}
.tree li::before, .tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #999;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #999;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #999;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none
}
.tree li.parent_li>span {
    cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:26px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
    background:#eee;
    border:1px solid #94a0b4;
    color:#000
}
.public_index{
  background-color: #FCFCFC;
  padding-left:15px;
  padding-right:15px;
  padding-top:10px;
  padding-bottom:15px;
  width:100%;
  border-radius: 6px;
}

.public_index2{
  background-color: #FCFCFC;
  padding-left:15px;
  padding-right:15px;
  
  padding-bottom:15px;
  width:100%;
  border-radius: 6px;
}

.public_index3 {
    background-color: #FFFFFF;
    padding-bottom: 15px;
    width: 100%;
    margin-left: -15px;
    border-radius: 6px;
}

.public_paginas {
    background-color: #FCFCFC;
    padding-bottom: 15px;
    width: 100%;
    display: flow-root;
    border-radius: 6px;
}

.public_paginas1 {
    background-color: #FCFCFC;
    width: 572px;
    display: flow-root;
    border-radius: 6px;
    margin-left: auto;
    margin-right: auto;
}

.container1 {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}

.arquivo_index {
    background-color: #FFFFFF;
    padding-bottom: 10px;
    width: 100%;   
}

.card-link {
    color:  #F79420;
}
.card-link:hover {  
    
    color: #F79420;
}

#scroll {
    background-color:#F79420;
}
#scroll span {
    border-bottom-color:#FCFCFC;
}
#scroll:hover {
    background-color:rgba(39,99,47,0.6);;
}
.sticky li{
  background-color:#27632F;
}
.sticky li a:hover{
	color:#FFFFFF;
}
.sticky li a{
	color:#FFFFFF;
}

#fak {
  line-height: 3px;
  -webkit-transition: all .25s ease-in-out;
  -moz-transition: all .25s ease-in-out;
  -o-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out;
}
#fak:hover {
  margin-right: -180px;
}

#covid {
  line-height: 3px;
  -webkit-transition: all .25s ease-in-out;
  -moz-transition: all .25s ease-in-out;
  -o-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out;
}
#covid:hover {
  margin-right: -250px;
}
.box-pesq .btn-primary:focus, .box-pesq .btn-primary:hover{
	opacity:1;
}
.caixa_objetos .circulo {
	color:#F79420;
    border: #F79420 solid 3px;
}
.caixa_objetos .ativo {
	background-color:#F79420 !important;
	color:#FFF;
}
.caixa_objetos .linha {
	border-top: #F79420 solid 3px;
}
.carousel-control.right {
    left: auto;
    right: 0;
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0.0001) 0, rgba(0,0,0,0.5) 100%);
    background-image: -o-linear-gradient(left, rgba(0,0,0,0.0001) 0, rgba(0,0,0,0.5) 100%);
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(0,0,0,0.0001)), to(rgba(0,0,0,0.5)));
    background-image: none;
    background-repeat: repeat-x;
}
.carousel-control.left {
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0.5) 0, rgba(0,0,0,0.0001) 100%);
    background-image: -o-linear-gradient(left, rgba(0,0,0,0.5) 0, rgba(0,0,0,0.0001) 100%);
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(0,0,0,0.5)), to(rgba(0,0,0,0.0001)));
    background-image: none;
    background-repeat: repeat-x;
}
.table-condensed thead {
    background-color:#F7F7F7!important;
    color:#2D2D2D;
}
.nav-pills a, .nav-pills a:hover, .nav-pills a:focus {
	color:#F79420;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
	background-color:#F79420 !important;
    color:#ffffff;
}

.nav-justified {
	border-bottom:2px solid #F79420;
}
.LinkInforma {
  font-weight: 600; 
  font-family: "Roboto", Arial, Helvetica, sans-serif;
    color: #27632F;
    font-size:16px;
    line-height: 1.2;
    opacity: 0.9;
}
.LinkInforma:hover {
    color: #27632F;
     opacity: 10;
}

.LinkInformaDSE {
  font-weight: 600; 
  font-family: "Roboto", Arial, Helvetica, sans-serif;
    color: #303030;
    font-size:14px;
    line-height: 1.2;
    opacity: 0.9;
}
.LinkInformaDSE:hover {
    color: #303030;
}
.LinhaInforma {
    border-bottom: 0.5px solid #303030; 
    padding-top: 20px; 
    margin-left: 10px; 
    margin-right: 10px; 
    width: 98%; 
    clear: both;
    opacity: 0.9;
    margin-bottom: 10px;
}

.LinhaInforma2 {
    border-bottom: 0.5px solid #303030; 
    padding-bottom: 1px;
    width: 100%; 
    clear: both;
    opacity: 0.1;
    
}

.LinhaLei {
    border-bottom: 2px solid #F7F7F7;
    margin-left: 1px;
    margin-bottom: 2px;
    padding-top: 10px;
    width: 98%; 
    clear: both;
}
.LinkInforma2:hover {
    color: #F79420;
}
.LinkInforma2 {
    font-weight: 600; 
    font-family: "Roboto", Arial, Helvetica, sans-serif;
    color: #303030;
    font-size:15px;
    line-height: 1.2;
}

.DecretoDiario {
    font-weight: 600; 
    font-family: "Roboto", Arial, Helvetica, sans-serif;
    color: #303030;
    font-size:15px;
    line-height: 1.2;
    text-align: justify;
    margin-bottom: 0;
}

.DataInforma {
    margin-left: 15px; 
    margin-right: -15px; 
    position: relative; 
    padding: 0 0 2px 14px; 
    text-align: center;
    color: #27632F;
}

.DataInforma2 {
    margin-left: 29px; 
    margin-right: -15px; 
    position: relative; 
    padding: 0 0 2px 8px;
}
.DataInforma3:hover{
     color: #F79420;
}
.DataInforma3 {
    color: #303030;
    margin-right: -15px; 
    position: relative; 
    padding: 0 0 2px 14px; 
    border-left: 4px solid #F79420;
}

.DataInformaLinha {
    margin-left: 15px; 
    margin-right: -15px; 
    position: relative; 
    padding: 0 0 2px 14px; 
    text-align: center;
    border-left: 4px solid #F79420;
}

.DataInfo {
    margin-left: 0; 
    position: relative; 
    padding: 0 0 2px 8px; 
    border-left: 4px solid #F79420;
}
.DataInfo:hover{
     color: #F79420;
}
.img-obra {
    background: #F79420;   
}
.i-obra {
    float:left; 
    padding:1px 7px 1px 0px;
}
.p-obra {
    text-align: justify;
    font-size: 22px;
    margin-top: -5px;
    margin-bottom: 5px;
}

.p-bottom {       
    margin-top: 5px;
    margin-bottom: 5px;
}



.lici:hover{
   border-bottom: 2px solid #F79420; 
}
.liciT:hover{
   border-bottom: 2px solid #e6e6e6; 
}
.titulo_lici {
        font-size: 16px;
}
#i-redeP {
    padding-right: 0; 
    padding-left: 0; 
    width: 7%;
    float: left;
}
#i-redeV {
    float:right; 
    padding-right: 0; 
    padding-left: 0; 
    width: 7%;
}
.gestor_vice_texto {
    text-align:right; 
    margin-bottom: -7px;
}
.p-info { 
    font-style: normal; 
    font-weight: 400; 
    margin-top: 15px; 
    display: block;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    line-height: 1.6;
    font-size: 14px;
    color: #212121;
}

.p-abre {
    text-align:center; 
    font-style: normal; 
    font-size: 16px;
    line-height: 1.2;
    font-weight: 400;   
    margin-top: 15px; 
    display: block;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    color: #212121;
}

tbody tr:nth-child(2n+2) { 
background: #F7F7F7; 
}

#c-obra{
   width: 100%; 
   padding-left: 0; 
   padding-right: 0; 
}

#f-obra{
    position:absolute; 
    width:100%; 
    height:100%; 
    background-color: #e84b3d;
    opacity:0.10; 
    z-index:1;
}
#t-obra{
    position:relative;
}

#l-lrf{
    padding-left: 0;
    padding-right:0;
    margin-bottom: 10px;
}

#p-lrf{
    text-align:justify; 
    line-height: 1.8; 
    margin-bottom: 10px; 
    margin-left: 10px; 
    margin-right: 10px; 
    color: rgb(0,0,0,1);
}

#lei {
    margin-bottom: 15px;
    background-color: #FCFCFC;
    border-radius: 6px; 
    padding-top: 15px; 
    padding-bottom: 15px;
}

/* página index */

.BotaoArquivo {
    width:100%; 
    margin-bottom:10px;
    border-top-right-radius: 0px; 
    border-top-left-radius: 0px;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.2);
    border-bottom-right-radius: 6px; 
    border-bottom-left-radius: 6px;
}

.BotaoRodape {   
	/*border-top: 1px solid #eee;*/
    padding: 12px 24px;
    
    border-radius: 0.1875rem;
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 10px;
    font-size: 14px;
    
}
.BotaoRodape:hover {   
	
}

#SecGes{
    border: 1px solid #e6e6e6;
    box-shadow: none; 
    padding-left: 5px;
}

#ColSec {
    background-color: #fff;
    padding-left: 0px; 
    padding-top: 5px; 
    border-radius: 6px;
}

.p_index_noticia {
   font-size: 13.5px;
   margin-left: 0;
   margin-right: 1px; 
   position: relative;
   padding: 0 0 2px 8px;
   font-weight: 600;
   line-height: 1.2;
}

.p_index_noticia:hover {
    color: #F79420;
}

#index_noticia_video{
    
   padding-left: 0px; 
   padding-right: 0;
}
.index_arquivo{
  background-color: #FCFCFC;
  padding-left:15px;
  padding-right:15px;
  padding-top: 5px;
  padding-bottom:15px;
  width:100%;
  border-top-right-radius: 6px;
  border-top-left-radius: 6px;
  
}

.SecretariaGestores {
  background-color: #FCFCFC;
  padding-left:15px;
  padding-right:15px;
  padding-top:10px;
  padding-bottom:15px;
  width:100%;
  border-top-left-radius: 6px;
  border-bottom-left-radius:6px; 
  
}

.Unidades {
  background-color: #FCFCFC;  
  width:100%;
  padding-left: 10px; 
  padding-right: 10px;
  padding-top:10px;
  padding-bottom: 10px; 
  border-top-right-radius: 6px; 
  border-bottom-right-radius: 6px;
  
}

/* página informa */
.p_legenda {
    text-align: center;
    font-style: italic;
    font-size: smaller; 
    text-indent: 0; 
    font-family: Open Sans;
}
.InfoSubE {
    float:left; 
    padding:0px 0px 15px 0px; 
    width: 45%;
}

.InfoSubD {
    float: right;  
    padding: 0px 0px 0px 10px; 
    width: 45%;
}

.legenda_informaE {
    text-align: center;
    font-style: italic; 
    font-size: smaller; 
    text-indent: 0; 
    font-family: Open Sans; 
    margin-right: 18.7px; 
    margin-bottom: 0;
}
.legenda_informaD {
    text-align: center; 
    font-style: italic; 
    font-size: smaller; 
    text-indent: 0; 
    font-family: Open Sans;     
    margin-right: 18.7px; 
    margin-bottom: 0;
}
.TituloInformaE {
    font-size:18px;
    line-height: 1; 
    font-family: Open Sans; 
    margin-bottom: 0;
}
.TituloInformaD {
    font-size:18px;
    line-height: 1; 
    font-family: Open Sans; 
    margin-bottom: 0; 
    text-align: right;
}
.cardinput{
    width: 100%;
    background: #F7F7F7;
    border: 1px solid #303030 !important;
    padding: 8px 19px !important;
    /*border-radius: 50px !important;*/
    margin-bottom: 20px
  }
  ::-webkit-input-placeholder {
    font-size: 0.9em;
}
.cardinput:focus{
    border: none;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}

.hvr-sweep-to-right:before {
  background: #F79420;
}
.hvr-sweep-to-right .btn btn-primary {
    background: #27632F;
}
#ImgBarra {
    float: left;
}
.panel-group {
    padding: 0.75rem 1.25rem;
    margin-bottom: 8px;
    background-color: rgba(0, 0, 0, 0.03);
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.tabela-licitacao-1 {
    padding: 3px !important; 
    font-size: 12px; 
    background-color: #F7F7F7;
    border-top:none !important;
    text-align: right;
}

.tabela-licitacao-2 {
    padding: 3px !important; 
    font-size: 12px; 
    background-color: #ffff;
    border-top:none !important;
}

.botao-licitacao {
    width: 100%;
    font-size: 15px;
    margin-bottom: 5px;
    background: ;
}

.ProgSub {
    width: auto;
    padding: 0px 15px 10px 15px;
}

ul.pagination > li.active > a, 
ul.pagination > li:hover > a {
  background-color: #F79420 !important;
  border-color: #F79420 !important;
  color: #fff;
}

.pagination>li>a, .pagination>li>span {
    color: #F79420;
}

.botao-projeto {
  background: #F7F7F7;
  color: #5a5c5d;
  border:none;
  outline: none;
  box-shadow: none;
  border-radius: 6px;
  margin-bottom: 10px;
}

#programaProjeto {
    margin-bottom: 5px; 
    padding: 8px; 
    display: flex;
}

#btnacess a:hover {
     background-color: transparent;
}
.acessibilidade-menu {
    background-color:#27632F; 
    margin-top: -200px;
    width: 300px;
    height: auto;
    position: fixed;
    display:none;
    right: 0px;
}

.acessibilidade-botoes {
    font-size: 21px;
    padding-top: 10px; 
    padding-bottom: 10px;
    border-bottom: 1px solid #303030;
}

.evento {
    border-top:2px solid #F7F7F7;
    border-left:2px solid #F7F7F7;
    border-right:2px solid #F7F7F7;
    border-bottom:2px solid #F7F7F7;
    
}
.cartaservicos {
    float: left; 
    margin-left: 10px;
}

.cartaservicos span{
    border-radius: 50%; 
    width: 120px; 
    height: 120px; 
    font-size: 70px; 
    border: 6px solid #fff; 
    color: #fff !important; 
    padding: 20px; 
    margin-right: 10px;
}

.cartaservicosbanner {
    background-color: #f39c12; 
    display: inline;  
    color: #fff; 
    font-size: 18px; 
    font-weight: bold; 
    padding: 5px 10px 5px 10px; 
    line-height: 35px; 
    clear: both; 
    text-transform: uppercase;
}
.cartaservicosbannertexto {
    color: #fff !important; 
    display: inline; 
    font-size: 24px; 
    font-weight: bold; 
    line-height: 45px;
}
.zebrapar {
    background-color:rgba(247,247,247,0.3);;
}
.zebraimpar {
    background-color:rgba(247,247,247,1);;
}
#col3Inf {
    margin-bottom: 10px;
}
.thumbnail {
    background-color: #FCFCFC;;
}
#formTextoAviso {
    height: 60px; 
    padding-left: 1.25rem; 
    padding-right: 1.25rem; 
    border: 1px solid #707070; 
    border-radius: 0; 
    background: #fff;
}
.divrolagem {
    overflow: auto;
    height: 200px;
    width: 360px;
}
.noticia1 {
    padding-top: 15px; 
    height: 300px;
}
.p_noticia1 {
    font-size: 13.5px;
    ont-weight: 600;
    line-height: 1.2;
    margin-bottom: 0px;
}
.p_noticia1:hover {
    color: #F79420;
}
.p_noticia3 {
    font-size: 15px;
   line-height: 1.2;
   margin-bottom: 2px;
}
.data_h3 {
    margin-bottom: 2px;
    margin-top: 2px;
}
.divNoticia2 {
  height: 310px;
}
.divNoticia3 {
    padding-top: 20px; 
    height: 250px;
}
.p_noticia4 {
    font-size: 16px;
   line-height: 1.2;
   margin-bottom: 2px;
}
.data_h4 {
    margin-bottom: 2px;
    margin-top: 2px;
}
.divNoticia4 {
    padding-top: 20px; 
    height: 520px;
}
.divNoticia5 {
    height: 380px;
}

.list-group-item {
    padding: 10px;
}
.list-group {
  display: grid;
  margin-bottom: 10px;
  margin-top: 10px;
  border-left: 1px solid #F79420;
}

.list-group-item {
    padding-bottom: 5px;
    padding-top: 5px;
}

.list-group-unidades {
display: grid;
margin-bottom: 10px;
padding-left: 0;
margin-left: 15px;
margin-right: 15px;
border-left: 1px solid #F79420;
}

.list-group-item-unidades {
margin-bottom: 0;
border-bottom-right-radius: 3px;
border-bottom-left-radius: 3px;
border-top-right-radius: 3px;
border-top-left-radius: 3px;
color: #555555;
padding-bottom: 5px;
padding: 15px;
display: block;
padding: 10px 10px;
margin-bottom: -1px;
background-color: #ffffff;
border: 1px solid #dddddd;
}

.list-group-item-heading {
color: #333333;
margin-top: 0;
margin-bottom: 5px;
font-size: 16px;
}

#campanhaBanner {
  height: 240px;
  border: 1px solid #dddddd;
  text-decoration: none;
  color: #555555;
  background-color: #f5f5f5;
  cursor: pointer;
}

#campanhaBanner:hover {
  background-color: #FCFCFC !important;
}

#campanhaIcone {
  text-align: center; 
  padding-bottom: 0px;
  padding-top: 5px;
}

#campanhaIcone2 {
  font-size: 90px; 
  padding: 15px; 
  padding-top: 5px;
  padding-bottom: 5px;
}

#campanhaIcone2:hover {
  color: #555555;
}

#campanhaIcone3 {
  font-size: 60px; 
  padding: 15px; 
  padding-top: 5px;
  padding-bottom: 5px;
}

#campanhaIcone3:hover {
  color: #555555;
}

#campanha_receitas_despesas { 
    border: 1px solid #dddddd;
    text-decoration: none;   
}

#titulo_caixa_receita_despesa{
  color: #fff; 
  font-size: 12px;
}

#numero_caixa_receita_despesa {
  color: #fff; 
  margin-top: 1px;
}

#culturaBanner {
  height: 190px;
  border: 1px solid #dddddd;
  text-decoration: none;
  color: #555555;
  background-color: #f5f5f5;
  cursor: pointer;
}

#culturaBanner:hover {
  background-color: #FCFCFC !important;
}

#campanhaBannerPergunta {
  height: 240px;
  text-decoration: none;
  color: #555555;
  background-color: #f5f5f5;
}
#campanhaH4 {
  font-weight: 600;
  font-family: "Roboto", Arial, Helvetica, sans-serif;
  margin: 0px;
  margin-bottom: 5px;
  font-size: 20px;
  line-height: 1.1;
  text-transform:uppercase;
}



#campanhapergunta {
  width: 20%;
  margin-bottom: 15px;
}

#campanhaP {
  margin: 0; 
  line-height: 1.3;
}

#imgCampanhaPergunta {
  padding-bottom: 20px;
  width: 40%;
}

#campanhaH4Pergunta {
  font-weight: 600;
  font-family: "Roboto", Arial, Helvetica, sans-serif;
  margin: 0px;
  margin-bottom: 5px;
  font-size: 20px;
  line-height: 1.1;
  text-transform:uppercase;
  color: #e84b3d;
}

#menuRelatorio {
  border-top: 10px solid #27632F;
}

.menu-fixo {
    position: fixed;
    width: 100%; 
    top: 0;
    z-index: 99;
    transition: all .5s;
    background-color: #ffffff !important;
}

#secretariaBorda {
  margin-bottom: 15px;
  padding-bottom: 10px;
  border: 2px solid #dddddd;
  background-color: #FCFCFC;
}

#iconesSecre {
  width: 40px;
  height: 40px;
  float: left;
  padding: 5px;
  color: #ffff;
  margin-right: 5px;
  background-color: #F79420;
}

#iconesSecretaria {
  font-size: 20px;
  text-align: center;
  padding: 6px;
}

#img-sec {
  float: right; 
  width: 170px;
  margin-left: 5px;
  border: 5px solid #dddddd;
}

#secretariaBorda p {
  margin-bottom: 5px;
  margin-top: -5px;
}

#secretariaBorda strong {
  
}

input:-internal-autofill-selected {
    background-color: #F79420 !important;
}
/*
.form-control {
  padding: 10px !important;
  border: 1px solid #ced4da !important;
}
.form-control:hover {
  border: 1px solid #27632F !important;
  border-bottom: 1px solid #27632F !important;
}
*/
.bs-transparencia-list li {
  float: left;
  height: 120px;
  padding: 10px;
  font-size: 14px;
  line-height: 1.4;
  text-align: center;
  background-color: #27632F;
  color: #fff;
  border: 1px solid #fff;
}
.bs-transparencia-list li:hover {
  background-color: #F79420;
  transition: 0.6s;
  cursor: pointer;
}

#campanhaTitulo {
  margin-top: 5px; 
  margin-bottom: 7px; 
  text-transform:uppercase;
}

#botaoCampanhaTitulo {
  margin-top: -5px;
}

#culturaIndex {
  margin-top: -80px; 
  display: block; 
  position: relative; 
  z-index: 5;
}

#culturaH1 {
  text-transform: uppercase; 
  text-align: center; 
  margin-bottom: 5px; 
  margin-top: 30px padding: 0px; 
  margin-right: 0px; 
  margin-left: 0px;
  position: relative;
  margin-top: 5px;
  font-size: 24px;
  color: #27632F;
}

#cultura_secretaria{
  border: 1px solid #dddddd;
  text-decoration: none;
  color: #555555;
  background-color: #f5f5f5;
}

.culturaIconeTelefone {
  float: left; 
  margin-right: 10px; 
  margin-left: 5px;
}

.culturaIconeEmail {
  float: left; 
  margin-right: 10px;
}

.culturaIconeEndereco {
  float: left; 
  margin-right: 13px; 
  margin-left: 5px;
}

.culturaIconeHorario {
  float: left; 
  margin-right: 10px;
}

#main-projeto .prev:hover,
#main-projeto .next:hover {
  color: #f39c12;
}
#main-projeto .carousel-indicators {
    bottom: -30px;
}
.carousel-indicators li {
    border-radius:0px;
}
#main-projeto .carousel-indicators li {
  width: 30px;
  height: 5px;
  background-color: #f39c12;
  margin: 0 15px 0 0;
  position: relative;
  border: none;
}

#main-projeto .carousel-indicators li:after {
  position: absolute;
  content: "";
  width: 30px;
  height: 5px;
  border-radius: 0px;
  background: #f39c12;
  border: none;
  left: -3px;
  top: 0px;
}

#main-projeto .carousel-indicators .active{
  width: 30px;
  height: 5px;
  background-color: #F79420;
   margin: 0 15px 0 0;
   position: relative;
}

#main-projeto .carousel-indicators .active:after {
  position: absolute;
  content: "";
  width: 30px;
  height: 5px;
  border-radius: 0px;
  background:  #F79420;
  border: none;
  left: -3px;
  top: 0px;
}

#main-projeto .prev,
#main-projeto .next {
  position: absolute;
  top: 50%;
  color: #F79420;
  display: inline-block;
  margin-top: -25px;
  height: 40px;
  line-height: 40px;
  width: 40px;
  line-height: 40px;
  text-align: center;
  border-radius: 4px;
  z-index: 5;
}

.items-blog-tab-menu {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.items-blog-tab-menu li a {
    padding: 7px 20px 7px 20px;
    color: #3f3e50;
    background: transparent;
    margin: 0 10px;
    border-radius: 3px;
    display: block;
    border: 1px solid #e0e5f3;
}

.items-blog-tab-menu>li>a:hover{
  /*background: #1f1f20;*/
  color:#FCFCFC;
}
.items-blog-tab-menu>li>a:hover, .items-blog-tab-menu>li>a:focus:hover{
    background-color: transparent;
    -webkit-box-shadow: inset 0 -1px 0 #F79420;
    box-shadow: inset 0 -2px 0 #fcfcfc;
    color: #666;   
}
.items-blog-tab-menu>li.active>a, .items-blog-tab-menu>li.active>a:focus {
    background-color: #F79420;
    border-radius: 0px;
    color: #FFFFFF;
    box-shadow: inset 0 -2px 0 #fcfcfc;
}
.items-blog-tab-menu>li.active>a:hover{
    background-color: #F79420;
}

.slick-slider
{
    position: relative;

    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
    margin-left: auto;
    margin-right: auto;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

.slick-loading .slick-list
{
    background: #fff url('./ajax-loader.gif') center center no-repeat;
}

/* Icons */
@font-face
{
    font-family: 'slick';
    font-weight: normal;
    font-style: normal;

    src: url('./fonts/slick.eot');
    src: url('./fonts/slick.eot?#iefix') format('embedded-opentype'), url('./fonts/slick.woff') format('woff'), url('./fonts/slick.ttf') format('truetype'), url('./fonts/slick.svg#slick') format('svg');
}
/* Arrows */
.slick-prev,
.slick-next
{
    font-size: 0;
    line-height: 0;

    position: absolute;
    top: 50%;

    display: block;

    width: 20px;
    height: 20px;
    padding: 0;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);

    cursor: pointer;

    color: #F79420;
    border: none;
    outline: none;
    
}
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus
{
    color: transparent;
    outline: none;
    
}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before
{
    opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before
{
    opacity: .25;
}

.slick-prev:before,
.slick-next:before
{
    font-family: 'slick';
    font-size: 30px;
    line-height: 1;

    
    color: #F79420;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev
{
    left: -25px;
}
[dir='rtl'] .slick-prev
{
    right: -25px;
    left: auto;
}
.slick-prev:before
{
    content: '﹤';
}
[dir='rtl'] .slick-prev:before
{
    content: '﹤';
}

.slick-next
{
    right: -25px;
}
[dir='rtl'] .slick-next
{
    right: auto;
    left: -25px;
}
.slick-next:before
{
    content: '＞';
}
[dir='rtl'] .slick-next:before
{
    content: '＞';
}

/* Dots */
.slick-dotted.slick-slider
{
    margin-bottom: 30px;
}

.slick-dots
{
    position: absolute;
    bottom: -25px;

    display: block;

    width: 100%;
    padding: 0;
    margin: 0;

    list-style: none;

    text-align: center;
}
.slick-dots li
{
    position: relative;

    display: inline-block;

    width: 20px;
    height: 20px;
    margin: 0 5px;
    padding: 0;

    cursor: pointer;
}
.slick-dots li button
{
    line-height: 0;

    display: block;

    cursor: pointer;

    color: transparent;
    border: 0;
    outline: none;
    background: transparent;

    
  height: 5px;
  background-color: #f39c12;
  margin: 0 15px 0 0;
  position: relative;
  border: none;
}
.slick-dots li button:hover,
.slick-dots li button:focus
{
    outline: none;
}
.slick-dots li button:hover:before,
.slick-dots li button:focus:before
{
    opacity: 1;
}
.slick-dots li button:before
{
    font-family: 'slick';
    font-size: 6px;
    line-height: 20px;

    position: absolute;
    top: 0;
    left: 0;

    width: 20px;
    height: 20px;

    content: 'â€¢';
    text-align: center;

    opacity: .25;
    color: black;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before
{
    opacity: .75;
    color: transparent;
}
.logoestado {
  color:#f39c12;
}
.logoestado:hover {
  color:#f39c12;
}
.logoestado p {
    width: 190px;
}

.slider-principal{
  position:relative;
	content:'\A';
  top:0;
  left:0;
}

.slider-principal:after{
  content:"";
  background:rgba(0,0,0,.2);
  width:100%;
  height:100%;
  position:absolute;
  left:0;
  top:0;
  z-index:1;
}

.slider-principal p{
  text-align:center;
	color: #fff;
  position:relative;
  color: #fff;
  font-family: "Roboto", Arial, Helvetica, sans-serif;
  z-index: 10;
}

.slider-principal a {
  color: #2196f3;
}

#vacinaIcone {
  font-size: 70px; 
  padding: 15px; 
  padding-top: 5px;
  padding-bottom: 5px;
}

#vacinaIcone:hover {
  color: #555555;
}


.pager>li.active>a, .pager>li.active>a:hover, .pager>li.active>a:focus {
  background-color:#27632F !important;
  color:#ffffff;
}

.pager li>a, .pager li>span {
    display: inline-block;
    padding: 5px 14px;
    background-color: #F79420;
    color:#ffffff;
    border: 1px solid #dddddd;
    border-radius: 15px;
}

.bg-gradient-primary {
    background-color: #34813E !important;
    background-image: linear-gradient(to right, #34813E 10%, #f39c12 100%);
    /*background-repeat: repeat-x !important;*/
}