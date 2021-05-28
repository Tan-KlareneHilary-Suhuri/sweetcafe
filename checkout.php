
 
<style>
	 
body{
    font-family: 'Lato', sans-serif;
	 background: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.8)),
    url(image/about.jpg);
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	 
	color: #fff;
	
	overflow-x: hidden;
     
}

/*===================*/
 
 
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
h3 {
    font-size: 1.714rem;
    line-height: 2.5rem;
    margin-bottom: 30px;
	color: #fff;
}
h4 {
    font-size: 1.286rem;
    line-height: 2rem;
    font-weight: 500;
	color: #fff;
}

h6{
    font-size:1.000rem;
    font-weight: 500;
    line-height: 1.5rem;
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
/*========== Variety Section===========*/
.variety{
    padding-bottom: 40px;
}
.variety .card{
    border: 0;
    padding: 0 30px;
    margin-bottom: 60px;
    position: relative;
    background: transparent;
}
.variety .card-img{
    width: calc(100% + 60px);
    margin-left:-30px;
    overflow: hidden;
    z-index: 9;
    border-radius: 0;
}
.variety .card-img img{
    max-width: 100%;
    transition: all 0.3s ease-in-out;
}
.variety .card-body{
    z-index: 10;
    background: #ff9b04a6;
    border-top:4px solid #f08902;
    padding: 30px;
    box-shadow: 0px 2px 15px rgba(241, 159,5, 0.5 );
    margin-top: -60px;
    transition: 0.3s;
}
.variety .card-title{
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
}
.variety .card-title a{
    color: #000;
    transition: 0.3s;
}
.variety .card-text{
    color: #000;
}
.variety .read-more a{
    color: #000;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 12px;
    transition: 0.3s;
}
.variety .read-more a:hover{
    color: #854101;
}

.variety .card:hover img{
    transform: scale(1.1);

}
.variety .card:hover .card-body{
    border-color: #fdc134;
}
.variety .card:hover  .card-body .card-title a{
    color: #854101;
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
  
  .chef .card h6{
    color: #fff;
    text-align: left;
	 
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

.card-body {
	color: #fff;
} 

</style>
 <header class="masthead">
        <div class="container h-100 ">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end mb-4 page-title">
				<br>
				<br>
                	<h3 class="text-white">Checkout Form</h3>
                   <br>
                   <br>
				
                </div>
				
                
            </div>
			 
        </div>
    </header>
 <div class="container">  
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
	    
        <span class="text-muted">Your cart</span>
        <span class="badge badge-danger item_count">0</span>
      </h4>
	  	<?php 
        		if(isset($_SESSION['login_user_id'])){
					$data = "where c.user_id = '".$_SESSION['login_user_id']."' ";	
				}else{
					$ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
					$data = "where c.client_ip = '".$ip."' ";	
				}
				$total = 0;
				$get = $conn->query("SELECT *,c.id as cid FROM cart c inner join product_list p on p.id = c.product_id ".$data);
				while($row= $get->fetch_assoc()):
					$total += ($row['qty'] * $row['price']);
        		?>

      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6>Ordered name</h6>
            <small class="text-muted"><?php echo $row['name'] ?></small>
          </div>
          <span class="text-muted">P <?php echo number_format($row['price'],2) ?></span>
        </li>
         
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small></small>
          </div>
          <span class="text-success"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total</span>
          <strong><?php echo number_format($row['qty'] * $row['price'],2) ?></strong>
        </li>
      </ul>
  <?php endwhile; ?>
      <form action="" id="checkout-frm" class="card p-2" >
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing Information</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
		   <div class="form-group">
            <label for=""  class="control-label">First name</label>
            <input type="text" name="first_name" class="form-control" id="firstName" placeholder="" value="<?php echo $_SESSION['login_first_name'] ?>" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  </div>
          <div class="col-md-6 mb-3">
            <div class="form-group">
                        <label for="" class="control-label">Last Name</label>
                        <input type="text" name="last_name" required="" class="form-control" value="<?php echo $_SESSION['login_last_name'] ?>" required>
			            <div class="invalid-feedback">
              Valid last name is required.
            </div>
			</div>
          </div>
		    <div class="col-md-6 mb-3">
		   <div class="form-group">
                        <label for="" class="control-label">Contact Number</label>
                        <input type="text" name="mobile" required="" class="form-control" value="<?php echo $_SESSION['login_mobile'] ?>">
                    </div>
        </div>
		</div>

        <div class="mb-3">
           <div class="form-group">
	
                        <label for="" class="control-label">Email</label>
                        <input type="email" name="email" required="" class="form-control" value="<?php echo $_SESSION['login_email'] ?>">
                    </div>  
				 	
        </div>

        

        <div class="mb-3">
            <div class="form-group">
                        <label for="" class="control-label">Address</label>
                        <textarea cols="30" rows="3" name="address" required="" class="form-control"><?php echo $_SESSION['login_address'] ?></textarea>
             </div>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
		 <div class="form-group">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>
		</div>

        <div class="row">
          <div class="col-md-5 mb-3">
		  <div class="form-group">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          </div>
		  
          <div class="col-md-4 mb-3">
		  <div class="form-group">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          </div>
		  
          <div class="col-md-3 mb-3">
		  <div class="form-group">
            <label for="zip">Zip</label>
			<br>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
		
		
        <hr class="mb-4">
		
        <div class="custom-control custom-checkbox">
		 <div class="form-group">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        </div>
		
        <div class="custom-control custom-checkbox">
		 <div class="form-group">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
		 <div class="form-group">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          </div>
          <div class="custom-control custom-radio">
		   <div class="form-group">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          </div>
          <div class="custom-control custom-radio"> 
		  <div class="form-group">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
          </div>
		  <div class="custom-control custom-radio">
		   <div class="form-group">
            <input id="cod" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="cod">Cash On Delivery</label>
          </div>
        </div>
		
		
        <div class="row">
          <div class="col-md-6 mb-3">
		   <div class="form-group">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <br>
			<small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          </div>
          <div class="col-md-6 mb-3">
		   <div class="form-group">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
		   <div class="form-group">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          </div>
          <div class="col-md-3 mb-3">
		   <div class="form-group">
            <label for="cc-cvv">CVV</label>
			<br>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
         <div class="text-center">
                        <button class="btn btn-block btn-outline-primary">Place Order</button>
                    </div>
      </form>
    </div>
  </div>

   
</div>
</div>
</div>
 
</div>
</div>
 
 
 
 
 	
	<div id="fh5co-about" class="fh5co-section">
        <div class="container">
    <?php echo html_entity_decode($_SESSION['setting_about_content']) ?>        
            
        </div>
</div>        
     

    <script>
    $(document).ready(function(){
          $('#checkout-frm').submit(function(e){
            e.preventDefault()
          
            start_load()
            $.ajax({
                url:"admin/ajax.php?action=save_order",
                method:'POST',
                data:$(this).serialize(),
                success:function(resp){
                    if(resp==1){
                        alert_toast("Order successfully Placed.")
                        setTimeout(function(){
                            location.replace('index.php?page=home')
                        },1500)
                    }
                }
            })
        })
        })
    </script>