  
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
 
.card{
  box-shadow: 0px 15px 35px -5px rgba(50, 88, 130, 0.32);
  border-radius: 15px;
  transition: transform .2s;
  color: black;
  padding-bottom: 10px;
  
}
.card img {
	width: 100%;
	height: auto;
	border-radius: 15px;
}

.card p{
  box-shadow: 0px 15px 35px -5px rgba(50, 88, 130, 0.32);
  border-radius: 15px;
  transition: transform .2s;
  color: black;
}

.card-body{
  padding: 10px;
  margin-top: -50px;
  color: black
  
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease-in-out;
  
 
 
</style>
  
  <section id="fh5co-blog" class="fh5co-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Events</h2>
					<p>Coffee shops serve coffees, teas, deserts and light lunches in bistro-like settings. Small, local coffee shops can establish a solid reputation in their communities, attracting large volumes of highly loyal, sometimes daily patrons. Marketing a coffee shop requires more subtlety than other local businesses, however, as these establishments provide a highly social experience greatly reliant on word-of-mouth advertising and personal recommendations from existing customers.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(image/cafecard.jpg);"></a>
						<div class="blog-text">
							  <span class="posted_on">
                             30 June 2021
							  </span>   
                          
                        <h3 class="heading mb-3">
                            <a href="#">
                                Loyalty Card for Vouchers
                            </a>
                        </h3>
                        <p>A loyalty card is an identification card that’s given by a cafe to its current customers as part of an incentive scheme/loyalty program, in which credits are gathered in the card at every recorded eligible transaction between the customer and the cafe to be exchanged for future rewards.</p>
                        <a href="#" class="btn-custom">Read More
                             <i class="bi bi-arrow-right-circle-fill">
							 <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
							<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
							</svg>
							 </i>
                        </a>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(image/418006_309667329095409_2114248593_n.jpeg);"></a>
						<div class="blog-text">
							 <span class="posted_on">
                             30 June 2021
							  </span>   
                          
                        <h3 class="heading mb-3">
                            <a href="#">
                                Updating Menu Products
                            </a>
                        </h3>
                         <p>When strategically executed, menu changes have the power to revitalize your business, optimize your selling power, and persuade customers to return. The key to keeping up is having the right insight to know which dishes fall into which profitability categories, and the efficiency to be able to change your menu quickly.</p>
                        <a href="#" class="btn-custom">Read More
                             <i class="bi bi-arrow-right-circle-fill">
							 <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
							<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
							</svg>
							 </i>
                        </a>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(image/coffeeart.jpeg);"></a>
						<div class="blog-text">
							 <span class="posted_on">
                             30 June 2021
							  </span>   
                          
                        <h3 class="heading mb-3">
                            <a href="#">
                                Offers Coffee Art Program
                            </a>
                        </h3>
                        <p>Art Cafe is about exploring art together, sharing our experience with different artworks. ... Anyone can organize their own Art Cafe for their community. You can meet at a public exhibition, or gather artwork made by local artists in a library, the choice of artworks and space is up to you.</p>
                        <a href="#" class="btn-custom">Read More
                             <i class="bi bi-arrow-right-circle-fill">
							 <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
							<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
							</svg>
							 </i>
                        </a>
						</div> 
					</div>
				</div>
			</div>
		</div>
	 
  <!-- Masthead-->
 
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
<div class="container">
  <!--Section heading-->
  <h1 class="align-items-left text-white font-weight-bold">Contact us</h1>
  <!--Section description-->
  <p class="section-description pb-4">We’d love to hear from you. Kindly message your thoughts about our page. We’ll gladly get back to you shortly.</p>
	 
	
  <div class="row">
<div class="row justify-content-around">
    <!--Grid column-->
    <div class="col-lg-5 mb-4">


      <!--Form with header-->
      <div class="contact">
	

        <div class="card-body">
          <!--Header-->
         
		<form name="contact-form" action="" method="post" id="contact-form">
		<div class="form-group">
		<label for="Name">Name</label>
		<input type="Name" class="form-control" name="your_name" placeholder="Name" required>
		</div>
		<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" class="form-control" name="your_email" placeholder="Email" required>
		</div>
		<div class="form-group">
		<label for="Phone">Phone</label>
		<input type="Phone" class="form-control" name="your_phone" placeholder="Phone" required>
		</div>
		<div class="form-group">
		<label for="comments">Comments</label>
		<textarea name="comments" class="form-control" rows="3" cols="28" rows="5" placeholder="Comments"></textarea> 
		</div>
		<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
		 
		</form>
		<div class="response_msg"></div>
	</div>
   </div>
      <!--Form with header-->
 
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6"  style="width: 100%;  height: 300px;">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8075482499517!2d122.05918391409539!3d6.913599520425012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x325041dd7a24816f%3A0x51af215fb64cc81a!2sWestern%20Mindanao%20State%20University!5e0!3m2!1sen!2sph!4v1621412085302!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			 
      </div>

      </div>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
          <p>Normal Rd, Baliwasan</p>
          <p>Zamboanga City</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
          <p>0935 5108 196</p>
          <p>Mon - Sat, 8:00am- 11:00pm</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
          <p>SweetBunnyCafeManagement@gmail.com</p>
          <p>SweetBunnyCafe@gmail.com</p>
        </div>
      </div>

    </div>
    <!--Grid column-->
	</div>
  </div>
    </section> 
	
  <section id="fh5co-blog" class="fh5co-section"
        <div class="container">
    <?php echo html_entity_decode($_SESSION['setting_about_content']) ?>        
            
        </div>
</section>    

<script>
$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='your_name']").val() === '')
{
$("#contact-form [name='your_name']").css("border","1px solid red");
}
else if ($("#contact-form [name='your_email']").val() === '')
{
$("#contact-form [name='your_email']").css("border","1px solid red");
}
else
{
$("#submit").css("border","1px solid red");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "get_response.php",
data: sendData,
success: function(data){
 
$(".response_msg").text("Thank you! We will contact you soon");
$(".response_msg").slideDown().fadeOut(3000);
location.replace("index.php?page=home")
}
});
}
});
$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>
 
 