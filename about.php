 
<style>
	body{
    font-family: 'Lato', sans-serif;
	 background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)),
    url(image/about.jpg);
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	color: #fff;
	
	
	
	overflow-x: hidden;
     
}

/*===================*/
 
p {
    line-height: 1.375rem;
    margin: 0 0 15px;
}
p:last-child {
    margin-bottom: 0px;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
	text-decoration: none;
}
a{
    text-decoration: none;
    outline:0;
}
a:focus{
    outline:0;
}
a:hover{
    text-decoration: none;

}
h1,
h2 {
    font-weight: 300;
    margin: 0;
    line-height: 2rem;
	color: #fff;
}
h1 {
    font-size: 2.571rem;
    line-height: 3.5rem;
    color: #fff;
}
h2 {
    font-size: 2.143rem;
    line-height: 2.5rem;
	color: #fff;
}
h6 {
    font-size: 1.714rem;
    line-height: 2.5rem;
	color: #fff;
}
h4 {
    font-size: 1.286rem;
    line-height: 3.5rem;
    font-weight: 500;
	color: #fff;
}

span{
    font-size:1.000rem;
    font-weight: 500;
    line-height: 1.5rem;
	color: black;
}

p {
    line-height: 1.375rem;
    margin: 0 0 15px;
	color: #fff;
}
 
.btn:focus, .btn.focus, .btn:active:focus, .btn:active.focus, .btn.active:focus, .btn.active.focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
    outline: 0;
	
}

.overlay{
    background: rgba(0, 0, 0, 0.65);
    position: absolute;
    left:0;
    top:0;
    width:100%;
    height: 100%;

}
/*====================*/
.cover{
    position: relative;
    z-index: 0;
    width: 100%;
    background: #e79702;
}
 
/*==========Navbar=============*/
.nav {
	 background: url(coffe2.jpeg) top center;
}
.bg-color{
    background:  rgba(0,0,0,0.2);
	display: table-cell;
    margin: 0;
    padding:0;
     
}
.navbar-brand{
    color: #fff;
    font-weight: bold;
	font-style: italic;
	margin-top:5px;
	margin-bottom:10px;
	
	 
}
.navbar-nav {
	color:#fff;
    font-weight: bold;
	font-style:bold;
	text-align: center;
	text-decoration: none;
}
.nav-link{
    font-weight: bold;
    color: #fff;
    font-size: 20px;
	text-align: center;
	text-decoration: none;
	 
	 
}
.btn-group{
    color: #fff;
}
.navbar-toggler i{
    color: black;
}
.nav-item ul {
    transition: background-color .3s;
    float: none;
    padding: 0;
    text-align: center;
	text-decoration: none;
}
.nav-item {
    height: 15%;
	text-decoration: none;
}
/*========main about===========*/

 .main_about_area{
    overflow: hidden;
	margin-top: 50px;
}

.main_about_area .single_about i{
    border:1px solid #ff9a5e;
    color:#fff;
    width:60px;
    height: 60px;
    line-height: 60px;
    font-size:2.225rem;
    border-radius: 50%;
    margin-bottom:1.875rem;
	font-weight: bold;
	
}
 
/*========End of Navbar===========*/
.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container .page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery {
    padding: 40px;
}

/* Override bootstrap column paddings */
.tz-gallery .row div {
    padding: 2px;
}

.tz-gallery img {
    width: 100%;
    border-radius: 0;
    position: relative;
}

  
 
/*==========Hero Section===========*/
#hero{
    display:table;
    width: 100%;
    height: 100vh;
    background: url(image/coffe2.jpeg) top center;
    background-size: cover;
	text-decoration: none;
	
}
@media (min-width: 1024px){
    #hero{
        background-attachment: fixed;
    }
}

#hero .hero-logo{
    margin: 50px;
    max-width: 100%;
}
#hero .hero-container{
    background: rgba(0,0,0,0.3);
    display: table-cell;
    margin: 0;
    padding:0;
    text-align: center;
    vertical-align: middle;
}
#hero .hero-container2{
    background: rgba(0,0,0,0.2);
	
    
}
#hero h1{
    margin: 30px 0 10px 0;
    font-weight: bold;
    line-height: 48px;
    text-transform: uppercase;
    color: #fff;
	text-decoration: none;
}
@media (max-width: 768px){
    #hero h1{
        font-size: 28px;
        line-height: 36px;
		text-decoration: none;
    }
}
#hero h2{
    color: #fff;
    margin-bottom: 50px;
    font-style: italic;
	text-decoration: none;
}
@media (max-width: 768px){
    #hero h2{
        font-size: 24px;
        line-height: 26px;
        margin-bottom: 30px;
		text-decoration: none;
    }
    
}
#hero .actions a{
    text-transform: uppercase;
    font-weight: bold;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 20px;
    border-radius: 2px;
    transition: 0.5s;
    margin: 10px;
	margin-bottom: 50px;
	text-decoration: none;
}
#hero .btn-get-started{
    background: #ebe703;
    border: 2px solid #a85303;
    color: #fff;
	text-decoration: none;
}
#hero .btn-get-started:hover{
    background: none;
    border: 2px solid #fff;
    color: #fff;
    text-decoration: none;
    font-style: italic;
}
/*==========End of Hero Section===========*/
/* Shop Topbar */
.shop .shop-top {
	clear: both;
	background: #f6f7fb;
	padding: 18px 20px 50px 20px;
}
.shop .shop-shorter {
	float: left;
}
.shop .single-shorter {
	display: inline-block;
	margin-right: 10px;
}
.shop .single-shorter:last-child{
	margin:0;
}
.shop .single-shorter label {
	display: inline-block;
	float: left;
	margin: 4px 5px 0 0;
	font-weight:500;
}
.shop .single-shorter option{}
.shop .nice-select {
	clear: initial;
	display: inline-block;
	margin: 0;
	border: 1px solid #e6e6e6;
	border-radius: 0px;
	height: auto;
	width: auto;
	border-radius: 0px;
}
.shop .nice-select::after{
	border-color:#888;
}
.shop .nice-select .list {
	border-radius:0px;
}
.shop .nice-select .option.selected {
	font-weight: 500;
}
.shop .nice-select .list li{
	color:#666;
	border-radius:0px;
}
.shop .nice-select .list li:hover{
	background:#F7941D;
	color:#fff;
}
.shop .view-mode {
	float: right;
}
.shop .view-mode li {
	display: inline-block;
	margin-right: 5px;
}
.shop .view-mode li:last-child{
	margin:0;
}
.shop .view-mode li a {
	width: 43px;
	height: 32px;
	background: transparent;
	border: 1px solid #77777775;
	text-align: center;
	display: block;
	line-height: 32px;
	color: #888;
	border-radius: 0px;
}
.shop .view-mode li.active a,
.shop .view-mode li:hover a {
	background: #F7941D;
	color:#fff;
	border-color:transparent;
}
.contact .card-body{
    border: 0;
    padding: 0 30px;
    margin-bottom: 60px;
    position: relative;
   
	z-index: 10;
    background: #ff9b04a6;
    border-top:4px solid #f08902;
     padding: 30px;
    box-shadow: 0px 2px 15px rgba(241, 159,5, 0.5 );
    margin-top: 4px;
    transition: 0.3s;
}
/*========== Variety Section===========*/
. 
}
/*==========End of Variety Section===========*/
/*==========Product  Section===========*/
.bg-img{
    background:#000;
  }
  .text-color{
    color: #fe9801;
  }
  .product-section h2{
    font-style: italic;
    font-size: 40px;
  }
  .product {
    width: 100%;
    display: block;
    margin-bottom: 40px;
    transition: all 0.3s ease; }

    .product .img {
      display: block;
      border-radius: 4px;
      height: 350px;
      position: relative;
      transition: all 0.3s ease;
      z-index: 0; }
      .product .img:after {
        z-index: -1;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        background: #000;
        opacity: 0;
        border-radius: 4px;
        transition: all 0.6s ease; }
      .product .img.icons {
       transition: all 0.3s ease;
        opacity: 0; }
        .product .img .icons .icon-block a {
          margin: 0 2px;
          width: 60px;
          height: 60px;
          border: 1px solid rgba(255, 255, 255, 0.5); }
          .product .img .icons .icon-block a i {
            color: #fff; }
        .product .text {
      padding: 20px;
      position: relative; }
      .product .text .out, .product .text .day, .product .text .week {
        position: absolute;
        top: 0;
        left: 4px;
        font-size: 12px;
        padding: 0 10px;
        color: #fff; }
      .product .text .out {
        background: #b7472a; }
      .product .text .day {
        background: #fe9801; }
      .product .text .week {
        background: #01d28e; }
      .product .text h2 {
        font-size: 22px;
        text-transform: capitalize;
        font-weight: 300; }
      .product .text .category {
        font-style: italic;
        color: #fe9801; }
      .product .text .price {
        font-style: italic;
        color: #fff; }
        .product:hover .img:after {
            opacity: .7; }
          .product:hover .img .icons {
            opacity: 1; }
  
  .glow {
    display: inline-block;
    vertical-align: middle;
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    transition-duration: 0.3s;
    transition-property: box-shadow;
  }
  .glow:hover, .glow:focus, .glow:active {
    box-shadow: 1px 1px 8px rgb(236, 117, 5);
  }
   .btn-prod{
       display:inline-block;
       vertical-align: middle;
       color: #fe9801!important;
       transform: perspective(1px) translateZ(0);
       box-shadow: 0 0 1px rgb(236, 117, 5);
       position: relative;
       overflow: hidden;
   }   
   .btn-prod:before{
       content:"";
       position: absolute;
       z-index: -1;
       left: 51%;
       right: 51%;
       top: 0;
       background: #fe9801;
       height: 4px;
       transition-property: left, right;
       transition-duration: 0.3s;
       transition-timing-function: ease-out;
   }

   .btn-prod:hover:before, .btn-prod:focus:before,
   .btn-prod:active:before{
       left:0;
       right: 0;
   }
/*==========End of Product Section===========*/
/*========== Team  Section===========*/
.chef h2 {
    color: #000;
  }
  
  .chef .col-sm-3 {
    padding: 0;
  }
  
  .chef .card > a {
    display: block;
  }
  
  .chef .card img {
    width: 100%;
	 
  }
  
  .card h4{
    color: black;
    text-align: center;
	 
  }
  
  .chef .card p {
    font-size: 11px;
    color: #fff;
    opacity: .75;
    margin: 20px;
    padding: 0 35px;
  }
  
  .chef .card .social-nav {
		 margin: auto;
		 padding-top: 230px;
		 position: absolute;
		 
  }
  
  .chef .card .social-nav a {
    color: none;
    font-size: 16px;
    margin: auto;
	text-decoration: none;
  }
  
  .chef .card .social-nav a:hover {
    opacity: .75;
  }
  
  .chef .card:hover .chef-over {
    opacity: 1;
    visibility: visible;
  }
  
  .chef .card:hover .card-title-wrap {
    background-color: #fe9801;
  }
  
  .chef .card:hover .card-title-wrap .card-title,
  .chef .card:hover .card-title-wrap .card-text {
    color: #fff;
  }
  
  .chef .chef-over {
    padding-top: 15px;
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    top: 0;
    left: 0;
    text-align: center;
	padding-left: 30px;
	padding-right: 30px;
    opacity: 1;
    visibility: hidden;
    transition: all 0.3s ease;
  }
  
  .chef .card-title-wrap {
    padding: 15px 25px;
    position: relative;
    z-index: 9;
    background-color: #fff;
  }
  
  .chef .card-title-wrap .card-title,
  .chef .card-title-wrap .card-text {
      display: block;
	  margin: 0;
  }
  
  .chef .card-title-wrap .card-title {
    font-size: 24px;
    color: #000;
  }
  
  .chef .card-title-wrap .card-text {
    font-size: 18px;
    color: #000;
  }
  
 
/*==========End of  Team  Section===========*/
/*==========Subscription Section===========*/
#subscribe{
    background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
    url(coffe2.jpeg);
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    clip-path: polygon(0 15%, 100% 0, 100% 85%, 0 100%);
}
#subscribe h4{
    font-size: 25px;
    font-weight: bold;
}
#subscribe .from-control{
    background: transparent;
    font-size: 20px;
}
#subscribe .form-btn{
    font-size: 20px;
    background: #e79702;
    border: 3px solid #fe9801;
}
/*==========End of  Subscription Section===========*/
/*==========Blog Section===========*/
.blog-start{
  overflow: hidden;
  width: 100%;
  position: relative;
  z-index:0;
}
@media (min-width: 768px){
  .blog-start{
    margin-bottom: 30px;
  }
}
.blog-start .img, .blog-start .text{
  width: 50%;
}
@media (max-width: 992px){
  .blog-start .img, .blog-start .text{
    width: 100%;
  }
}
@media(max-width: 768px){
  .blog-start .img{
    height: 300px;
  }
}
.blog-start .text{
  position:relative;
  margin: 0 auto;
  z-index: 0;
  text-decoration: none;
 
}
.blog-start .text .heading{
  font-size: 22px;
  margin-bottom: 0;
  font-weight: bold;
  font-style: italic;
  text-decoration: none;
   
}

.blog-start .text .heading a{
  color: #000;
  text-decoration: none;
}
.blog-start .text .heading a:hover,
.blog-start .text .heading a:focus,
.blog-start .text .heading a:active{
  color:#e79702;
}
.blog-start .des p i{
  padding-right: 10px;
  text-decoration: none;
  color: #e79702;
}
.blog-start .btn-custom{
  color: #e79702;
  font-style: italic;
  font-weight: bold;
  text-decoration: none;
   
}
.blog-start .btn-custom i{
  font-size: 12px;
}
/*=======Booking==========*/
.make-reservation{
  width: 100%;
  background: rgba(231,151,2,0.5);
}
.make-reservation .form-group label{
  font-weight: bold;
  color: #000;
}
@media (max-width: 768px){
  .make-reservation .form-group .select-wrap{
    position: relative;
  }
}
@media(max-width:768px){
  .make-reservation .form-group .btn-book{
    width: 100%;
    display: block;
  }
}
.btn-book{
  display: inline-block;
  vertical-align: center;
  color: black !important;
  background: #feb236 !important;
}

 .footer h3 h4 {
  font-weight: 600;
  padding-bottom: 10px;
  color: #fff;
}

.footer a {
  text-decoration: none;
  color: #fff;
}

.footer a:hover {
  color: #feb236;
}

.footer-rowtop {
  padding: 50px 20px;
  color: #fff;
  background: black;
}

.footer-rowbottom {
  padding: 40px 20px;
  background: black;
  color: #fff;
}

.footer-links {
  line-height: 24px;
}

.footer-social-icons {
  padding-right: 15px;
}

/* CSS for Form Field */
/* ------------------------------- */

input[type=text], select {
  width: 70%;
  padding: 8px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}

input[type=submit] {
  width: 28%;
  background-color: #feb236 !important;
  color: black;
  padding: 9px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #fff !important;
}

div .forrm {
  border-radius: 5px;
   
}

	
.bold-text {
     color: #989c9e !important
 }

 .mt-55 {
     margin-top: calc(50px + (60 - 50) * ((100vw - 360px) / (1600 - 360))) !important
 }

 h3 {
     font-size: calc(34px + (40 - 34) * ((100vw - 360px) / (1600 - 360))) !important
 }

 .social {
     font-size: 21px !important
 }

 .rights {
     font-size: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important
 }


.map-responsive{

    overflow:hidden;

    padding-bottom:40%;

    position:relative;

    height:90%;
	 

}
 
 .message{
  width: 50%;
  position: relative;
  display: table-cell;
  vertical-align: middle;
  text-align: center;
  padding-left: 70px;
  padding-right:60px;
  color: #fff;
   
}
}
@media (max-width: 768px){
  .message .form-group .select-wrap{
    position: relative;
  }
}
@media(max-width:768px){
  .message .form-group .btn-message{
    width: 100%;
    display: block;
	 
  }
}
.btn-message{
 
  border: 2px solid #a85303;
  color: #fff; 
  background: #ebe703;
  margin-top: 20px;
   
}
.btn-message:hover{
    background: none;
    border: 2px solid #fff;
    color: #fff;
    text-decoration: none;
    font-style: italic;
}	
}
.btn-message:hover{
    background: none;
    border: 2px solid #fff;
    color: #fff;
    text-decoration: none;
    font-style: italic;

}
/*==========End of  Blog Section===========*/

#loading-img{
display:none;
}
.response_msg{
margin-top:10px;
font-size:13px;
background:#E5D669;
color:#ffffff;
width:250px;
padding:3px;
display:none;
}
 
         ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}


.team-page-section{
    position:relative;
    padding-top:70px;
}

.team-page-section .team-block{
    margin-bottom:60px;
}

.sec-title{
    position:relative;
    z-index:1;
    margin-bottom:65px;
}

.sec-title .title{
    position:relative;
    font-size:18px;
    color:#bd0000;
    font-weight:700;
    margin-bottom:12px;
    text-transform:capitalize;
}

.sec-title .separator{
    position:relative;
    width:40px;
    margin-top:16px !important;
}

.sec-title .separator:before{
    position:absolute;
    content:'';
    left:0px;
    top:0px;
    width:10px;
    height:2px;
    background-color:#ff9600;
}

.sec-title .separator:after{
    position:absolute;
    content:'';
    right:0px;
    top:0px;
    width:10px;
    height:2px;
    background-color:#ff9600;
}

.sec-title .separator span{
    position:absolute;
    left:50%;
    top:-2px;
    width:10px;
    height:5px;
    margin-left:-5px;
    display:inline-block;
    background-color:#bd0000;
}

.sec-title h2{
    position:relative;
    color:#222222;
    font-weight:700;
    font-size:36px;
    line-height:1.2em;
    margin-top:35px;
}

.sec-title .text{
    position:relative;
    font-size:20px;
    line-height:1.9em;
    color:#555555;
    margin-top:10px;
}

.sec-title.centered .separator{
    margin:0 auto !important;
    float:none !important;
}

.sec-title.centered{
    text-align: center !important;
}

.sec-title.light .title{
    color:#ffffff;
}

.sec-title.light h2{
    color:#ffffff;
}

.sec-title.light .separator span{
    background-color:#ff9600;
}

.sec-title.light .separator:before,
.sec-title.light .separator:after{
    background-color:#ffffff;
}

.team-section{
    position:relative;
    padding:80px 0px 60px;
}

.team-section.style-two .pattern-layer{
    position:absolute;
    left:0px;
    top:0px;
    right:0px;
    bottom:0px;
    background-position:center center;
    background-repeat:no-repeat;
}

.team-section .title-box{
    position:relative;
    text-align:center;
}

.team-section .title-box h2{
    position: relative;
    color: #222222;
    font-size: 36px;
    font-weight: 700;
    line-height: 1.3em;
    margin-bottom: 50px;
}

.team-section .title-box h2 span{
    color: #ff9600;
}

.team-block{
    position:relative;
}

.team-block .inner-box{
    position:relative;
    padding:40px 70px 28px 0px;
}

.team-block .inner-box:before{
    position:absolute;
    content:'';
    right:0px;
    top:0px;
    left:70px;
    bottom:0px;
    border-radius:10px;
    background-color:#f5f5f5;
    -webkit-transition:all 600ms ease;
    -moz-transition:all 600ms ease;
    -ms-transition:all 600ms ease;
    -o-transition:all 600ms ease;
    transition:all 600ms ease;
}

.team-block .inner-box::after{
    position:absolute;
    content:'';
    top:0px;
    left:70px;
    bottom:0px;
    width:0%;
    border-radius:10px;
    -webkit-transition:all 600ms ease;
    -moz-transition:all 600ms ease;
    -ms-transition:all 600ms ease;
    -o-transition:all 600ms ease;
    transition:all 600ms ease;
    background-image: -ms-linear-gradient(top, #ffca08 0%, #f70067 100%);
    background-image: -moz-linear-gradient(top, #ffca08 0%, #f70067 100%);
    background-image: -o-linear-gradient(top, #ffca08 0%, #f70067 100%);
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #ffca08), color-stop(100, #f70067));
    background-image: -webkit-linear-gradient(top, #ffca08 0%, #f70067 100%);
    background-image: linear-gradient(to bottom, #ffca08 0%, #f70067 100%);
}

.team-block .inner-box:hover::after{
    width:81%;
}

.team-block .inner-box .social-icons{
    position:absolute;
    right:25px;
    top:100px;
    z-index:1;
}

.team-block .inner-box .social-icons li{
    position:relative;
    margin-bottom:20px;
}

.team-block .inner-box .social-icons li a{
    position:relative;
    color:#e40000;
    font-size:18px;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.team-block .inner-box:hover .lower-content h3 a,
.team-block .inner-box:hover .social-icons li a,
.team-block .inner-box:hover .lower-content .designation{
    color:#ffffff;
}

.team-block .inner-box .image{
    position:relative;
    z-index:1;
    border-radius:10px;
    background-color:#ffffff;
    box-shadow:inset 0px 0px 35px rgba(0,0,0,0.20);
}

.team-block .inner-box .image img{
    position:relative;
    width:100%;
    display:block;
}

.team-block .inner-box .lower-content{
    position:relative;
    text-align:left;
    z-index:1;
    padding:30px 15px 0px 110px;
}

.team-block .inner-box .lower-content h3{
    position:relative;
    color:#bd0000;
    font-size:18px;
    font-weight:700;
    line-height:1.3em;
}

.team-block .inner-box .lower-content h3 a{
    position:relative;
    color:#bd0000;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.team-block .inner-box .lower-content .designation{
    position:relative;
    margin-top:5px;
    color:#777777;
    font-size:14px;
}

.team-block.style-two .inner-box .lower-content h3 a,
.team-block.style-two .inner-box .social-icons li a{
    color:#ff9600;
}

.team-block.style-two .inner-box:hover .lower-content h3 a,
.team-block.style-two .inner-box:hover .social-icons li a{
    color:#ffffff;
}

.team-block.style-two .inner-box::after{
    background-image: -ms-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
    background-image: -moz-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
    background-image: -o-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFEB3C), color-stop(100, #ff9600));
    background-image: -webkit-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
    background-image: linear-gradient(to bottom, #FFEB3C 0%, #ff9600 100%);
}
</style>
 <section id="fh5co-testimony" class="fh5co-section">
    <section class="team-page-section">
        <div class="container">
            <!-- Sec Title -->
			<div class="row animate-box">
			 <div class="sec-title centered">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2 class="text-white">About Us</h2>
					<p>Our voyage from the sweet to the container began in year 2021. Coffee and Pastries had not set its impression and espresso was as yet thought about an extravagance. Our mission to give a genuinely global affair and mix a really Italian cuppa, drove us to make the brand SweetBunnyCafe . Leading the Filipino bistro culture, The SweetBunnyCafe was a chance to find both the espresso and the art.</p>
				</div>
			</div>
			</div>
            
            <div class="row clearfix">

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>

                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <div class="image">
                            <a href="#"><img src= "image/FB_IMG_16191530991762453.jpg"  alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Project Manager</a></h3>
                            <div class="designation">Stephanie Dumo Macalino</div>
                        </div>
                    </div>
                </div>
                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>

                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <div class="image">
                            <a href="#"><img src="image/FB_IMG_16191529886226070.jpg"  alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Backend Developer</a></h3>
                            <div class="designation">Klarene Hilary Tan</div>
                        </div>
                    </div>
                </div>
                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>

                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <div class="image">
                            <a href="#"><img src="image/FB_IMG_16191530238924496.jpg"  alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Frontend Developer </a></h3>
                            <div class="designation">Erica Ellorig Labja</div>
                        </div>
                    </div>
                </div>
                <!-- Team Block -->
                 
            </div>
        </div>
    </section>
</section>
  
 <!-- Masthead-->
      
	 
  <section id="fh5co-testimony" class="fh5co-section">
        <div class="container">
    <?php echo html_entity_decode($_SESSION['setting_about_content']) ?>        
            
        </div>
</section>    