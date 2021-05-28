  <style>
	body{
    font-family: 'Lato', sans-serif;
	 background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)),
    url(image/about.jpg);
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	 
	
	
	
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
h5 {
    font-size: 1.286rem;
    line-height: 3.5rem;
    font-weight: 500;
	color: black;
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
	color: black;
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

 .card 
 {
	  
	  box-shadow: 0px 15px 35px -5px rgba(50, 88, 130, 0.32);
  border-radius: 15px;
  transition: transform .2s;
  
  margin: 20px;
  color: black;
}
  
 .card-body   
 {
	 color: black;
 }
 .card img{
	   border-radius: 15px;
 }
 
</style>
 <section id="fh5co-featured-menu" class="fh5co-section">
<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>SweetBunny's Menu</h2>
					<div class="row">
						<div class="col-md-6">
							<p>There’s something magical in the way that coffee can brighten our morning mood and give us the spark to seize the day.Coffee and Pastries is one of those drinks that many of us can’t do without. If you’re like most of us, you probably start your day with a cup of coffee. The brew is great for keeping us on our toes throughout the day.</p>
						</div>
					</div>
				</div>
        <div id="menu-field" >
                <?php 
                    include'admin/db_connect.php';
                    $qry = $conn->query("SELECT * FROM `product_list` ORDER BY `product_list`.`category_id` ASC");
                    while($row = $qry->fetch_assoc()):
                    ?>
                    <div class="col-lg-3">
                     <div class="card">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['name'] ?></h5>
                          <p class="card-text truncate" style="color: black";><?php echo $row['description'] ?></p>
                          <div class="text-center">
                              <button class="btn btn-sm btn-outline-primary view_prod btn-block" data-id=<?php echo $row['id'] ?>><i class="fa fa-eye"></i> View</button>
                              
                          </div>
                        </div>
                        
                      </div>
                      </div>
                    <?php endwhile; ?>
        </div>
		
	 
			
		</div>
		</div>
    </section>
		 
		 
    <script>
        
        $('.view_prod').click(function(){
            uni_modal_right('Product','view_prod.php?id='+$(this).attr('data-id'))
        })
    </script>
 
	