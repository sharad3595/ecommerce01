<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ecommerce Site</title>

        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet"> 

       {{--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> --}}
        
        {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">--}}
         <link href="{{asset('css/all.css')}}" rel="stylesheet"> <!--load all styles -->
         
      
         <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
         <script src="{{asset('js/all.js')}}"></script> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">        <!-- Styles -->
       
    </head>
    <body>             
      <!--top contact section row starts-->
      <div class="container-fluid top-header">
        <div class="row">       
          <div class="col-sm-8 col-md-12  header-content" >
            <ul style="float:left">
              <li>Connect with us:</li>
              <li><i class="fab fa-twitter"></i></li>
              <li><i class="fab fa-facebook"></i></li>
              <li><i class="fab fa-instagram"></i></li>  
              <li><span>| For support call us at: +977-9851260328</span></li> 
            </ul>
          </div>
        </div>
      </div>

      <!--################### Search Bar #################-->  
      <div class="container-fluid search-wrapper">
        <div class="row">
          <div class="col-md-3 logo-wrapper" >
             <a href="#"> <img src="{{asset('images/ecom_logo.jpg')}}"></a>
          </div>
          <div class="col-md-6 search-box">
            <form class="search-form" action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search icon-search"></i></button>
            </form>
          </div> 
          <div class="col-md-3 login-cart-wrapper">
            <div class="row ">
                  <div class="col-md-6" style="border-right:lightgrey solid 1px">
                    <i class="fas fa-user"></i> 
                    <span>My Account</span>                    
                    <i class="fas fa-caret-down"></i>
                  </div>               
                  <div class="col-md-6">
                    <i class="fas fa-shopping-cart "></i>                     
                    <span>My Cart</span>
                    <i class="fas fa-caret-down"></i>
                  </div>
                </div>
          </div>                     
        </div><!--Main Row Ends-->
      </div>
      <!--################### Search Bar Ends #################--> 

      <!--################### Nav Bar Ends #################--> 
      <div class="container-fluid nav-wrapper">
        <div class="row">
          {{-- f --}}
          <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-default" >
            <button class="navbar-toggler hidden-lg-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">    
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">Feedback</a>
                </li>
              </ul>
              
            </div>
          </nav>
        </div>
        </div><!--row ends-->
      </div>
      <!--################### Nav Bar Ends #################--> 

      <!--################### Carouse Slider #############################-->
      <div class="container-fluid main-slider">
        <div class="row">
          <div class="col-md-12">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/slider1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('images/slider2.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('images/slider3.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('images/slider4.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('images/slider5.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('images/slider6.png')}}" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
          </div><!--col-md-12 ends-->
        </div>
      </div>
      <!--################### Carouse Slider Ends########################-->

      <!--################## Service Ribbon #############################-->
      <div class="container-fluid services-wrapper">
        <div class="row">          
           <div class="col-md-12" style="text-align: center;padding-top:10px;">
             <ul>
               <li><i class="fas fa-shipping-fast"></i></li>
               <li><strong>Fast Delivery and Installation</strong></li>|
               <li><i class="fas fa-award"></i></li> 
               <li><strong>Higher Quality Equipments</strong></li>|
               <li><i class="fas fa-thumbs-up "></i></li>
               <li><strong>Reliable System and Services</strong></li>|
               <li><i class="fas fa-headset "></i></li> 
               <li><strong>24 x 7 Call Support</strong></li>
             </ul>
           </div>
        </div><!--row ends-->
      </div>
      
      <!--################ Service Ribbon Ends  ##########################-->


      <!--################ Product Details ###############################-->
      <div class="container-fluid category-wrapper">
        <div class="row">
          <div class="col-md-12 title"><h5>Access Control Devices</h5></div>
        </div><!--row 1 ends-->
        <div class="row">
           <div class="col-2 category-item-wrapper">
              <img src="{{asset('images/main-pg-images/ac22.png') }}" >
              <h5>180 kg EM Lock</h5>
              <p>Rs.3200</p><hr>
              <div class="view-addcart">
                 <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
                 <a href="#" > <i class="far fa-eye"></i></a>
              </div>
            </div>
            <div class="col-2 category-item-wrapper">
              <img src="{{asset('images/main-pg-images/ac11.png')}}">
              <h5>180 kg EM Lock</h5>
              <p>Rs.3200</p><hr>
               <div class="view-addcart">
               <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
               <a href="#"> <i class="far fa-eye"></i></a>
              </div>                            
            </div>
            <div class="col-2 category-item-wrapper" >
              <img src="{{asset('images/main-pg-images/ac44.png')}}">
              <h5>180 kg EM Lock</h5>
              <p>Rs.3200</p><hr>
              <div class="view-addcart">
               <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
               <a href="#" > <i class="far fa-eye"></i></a>
              </div> 
            </div>
            <div class="col-2 category-item-wrapper" >
              <img src="{{asset('images/main-pg-images/ac33.png')}}">
              <h5>180 kg EM Lock</h5>
              <p>Rs.3200</p><hr>
               <div class="view-addcart">
               <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
               <a href="#" > <i class="far fa-eye"></i></a>
              </div>
            </div>
            <div class="col-2 category-item-wrapper" >
              <img src="{{asset('images/main-pg-images/ac44.png')}}">
              <h5>180 kg EM Lock</h5>
              <p>Rs.3200</p><hr>
               <div class="view-addcart">
               <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
               <a href="#" > <i class="far fa-eye"></i></a>
              </div>
             </div>
          </div><!--row 2 end-->
        </div>        
     
      <!--################ Product Details Ends###########################-->
      <!--################ Monitors/TVs ###############################-->
      <div class="container-fluid category-wrapper">
        <div class="row">
          <div class="col-md-12 title"><h5>Monitors and Tvs</h5></div>  
        </div> <!--row 1 ends-->
        <div class="row">
          <div class="col-2 category-item-wrapper" >
            <img src="{{asset('images/main-pg-images/m111.png')}}">
            <h5>180 kg EM Lock</h5>
            <p>Rs.3200</p><hr>
             <div class="view-addcart">
             <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
             <a href="#" > <i class="far fa-eye"></i></a>
            </div>
          </div>
          <div class="col-2 category-item-wrapper" >
            <img src="{{asset('images/main-pg-images/m222.png')}}">
            <h5>180 kg EM Lock</h5>
            <p>Rs.3200</p><hr>
             <div class="view-addcart">
             <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
             <a href="#" > <i class="far fa-eye"></i></a>
            </div>
          </div>
          <div class="col-2 category-item-wrapper" >
            <img src="{{asset('images/main-pg-images/m333.png')}}">
            <h5>180 kg EM Lock</h5>
            <p>Rs.3200</p><hr>
             <div class="view-addcart">
             <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
             <a href="#" > <i class="far fa-eye"></i></a>
            </div>
          </div>
          <div class="col-2 category-item-wrapper" >
            <img src="{{asset('images/main-pg-images/m444.png')}}">
            <h5>180 kg EM Lock</h5>
            <p>Rs.3200</p><hr>
             <div class="view-addcart">
             <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
             <a href="#" > <i class="far fa-eye"></i></a>
            </div>
          </div>
          <div class="col-2 category-item-wrapper" >
            <img src="{{asset('images/main-pg-images/m111.png')}}">
            <h5>180 kg EM Lock</h5>
            <p>Rs.3200</p><hr>
             <div class="view-addcart">
             <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
             <a href="#" > <i class="far fa-eye"></i></a>
            </div>
          </div>
        </div><!--row 2 ends-->
      </div>
      
      <!--################ Monitors/TVs Ends ########################-->

 <!--################ CCTV Camera and Accessories ########################-->
      <div class="container-fluid category-wrapper">
        <div class="row">
          <div class="col-md-12 title"><h5>CCTV Camera and Accessories</h5></div>  
        </div> <!--row 1 ends-->
        <div class="row">
          <div class="col-2 category-item-wrapper" >
            <img src="{{asset('images/main-pg-images/m111.png')}}">
            <h5>180 kg EM Lock</h5>
            <p>Rs.3200</p><hr>
             <div class="view-addcart">
             <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
             <a href="#" > <i class="far fa-eye"></i></a>
            </div>
          </div>
          <div class="col-2 category-item-wrapper" >
            <img src="{{asset('images/main-pg-images/m222.png')}}">
            <h5>180 kg EM Lock</h5>
            <p>Rs.3200</p><hr>
             <div class="view-addcart">
             <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
             <a href="#" > <i class="far fa-eye"></i></a>
            </div>
          </div>
          <div class="col-2 category-item-wrapper" >
            <img src="{{asset('images/main-pg-images/m333.png')}}">
            <h5>180 kg EM Lock</h5>
            <p>Rs.3200</p><hr>
             <div class="view-addcart">
             <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
             <a href="#" > <i class="far fa-eye"></i></a>
            </div>
          </div>
          <div class="col-2 category-item-wrapper" >
            <img src="{{asset('images/main-pg-images/m444.png')}}">
            <h5>180 kg EM Lock</h5>
            <p>Rs.3200</p><hr>
             <div class="view-addcart">
             <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
             <a href="#" > <i class="far fa-eye"></i></a>
            </div>
          </div>
          <div class="col-2 category-item-wrapper" >
            <img src="{{asset('images/main-pg-images/m111.png')}}">
            <h5>180 kg EM Lock</h5>
            <p>Rs.3200</p><hr>
             <div class="view-addcart">
             <a href="#" ><i class="fas fa-shopping-cart "></i></a>&nbsp;&nbsp;&nbsp;
             <a href="#" > <i class="far fa-eye"></i></a>
            </div>
          </div>
        </div><!--row 2 ends-->
      </div>
      
      <!--################ CCTV Camera and Accessories ########################-->



      <!--################## Marquee #################################-->
      <div class="container-fluid brand-marquee">          
        <div class="row">
          <div class="col-md-12 title">
            <h5>Popular Brands</h5>
          </div>
          <div class="col-md-12 marquee">
            <ul class="marquee-content">
              <li><img src="{{asset('images/small_brand_logo1.png')}}"></li>
              <li><img src="{{asset('images/small_brand_logo2.png')}}"></li>
              <li><img src="{{asset('images/small_brand_logo3.png')}}"></li>
              <li><img src="{{asset('images/small_brand_logo4.png')}}"></li>
              <li><img src="{{asset('images/small_brand_logo5.png')}}"></li>
              <li><img src="{{asset('images/small_brand_logo6.png')}}"></li>
              <li><img src="{{asset('images/small_brand_logo7.png')}}"></li>
            </ul>                  
          </div>                
        </div>                   
      </div>

      <!--################## Marquee Ends#################################-->

      <!--################## Footer #######################################-->
      <div class="footer" >
              <div class="container" >
                <div class="row">
                  <div class="col-md-4" style="color:white">
                    <span><h4> Contact Information</h4> </span>
                   <table class="contact-info">
                     <tr>
                       <td><i class="fas fa-map-marked "></i></td>
                       <td>Sitapaila, Ward No:7, Kathmandu</td>
                     </tr>
                     <tr>
                       <td><i class="fas fa-mobile-alt "></i></td>
                       <td>9851260328,9841785729</td>
                     </tr>
                     <tr>
                       <td><i class="far fa-envelope "></i></td>
                       <td>sharad.krb@gmail.com</td>
                     </tr>
                   </table>
                  </div>
                  <div class="col-md-4 " style="color:white">
                    <table  style="text-align: justify"> 
                      <th>
                        <h4>About Company</h4>
                      </th>
                      <tr><td><p>This company has a history of more than 20 years.Since its establishment,it deals in electronic equipments and has been offering its services in India and Nepal. With an intention to extend its reachibility in Nepali market, it has started to sell its products online since the year 2015.</p></td></tr>
                    </table>
                  </div>
                  <div class="col-md-3 offset-md-1" style="color:white">
                    <table class="tbl-follow"style="width:100%">
                      <th><h4>Follow Us</h4></th>
                      <tr>  
                          <td>
                            <ul>  
                              <li><i class="fab fa-twitter fa-2x "></i></li>
                              <li> <i class="fab fa-facebook fa-2x"></i></li>
                              <li><i class="fab fa-instagram fa-2x"></i></li>
                            </ul>                      
                          
                          </td>
                          
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>

      <!--################## Footer #######################################-->
    </body>
</html>
