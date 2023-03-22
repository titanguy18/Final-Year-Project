<!DOCTYPE html>
<html lang="en">
   <head>
    <title>Car Dealership</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body
{
    padding: 0;
    margin: 0;
    background: #000000;
}
.navbar
{
    background: rgb(0, 0, 0);
    
}
.nav-link,
.navbar-brand {
    color: #fff;
    cursor: pointer;
}
.nav-link
{
    margin-right: 1em !important;
}
.nav-link:hover
{
    color: rgb(58, 58, 58);
}
.navbar-collapse
{
    justify-content: flex-end;
}
.header
{
    background-image: url('');
    background-size: cover;
    background-position: center;
    position: relative;
}
.overlay
{
    position: absolute;
    min-height: 100%;
    min-width: 100%;
    left: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.6);
}
.description
{
    left: 50%;
    position: absolute;
    top: 45%;
    transform: translate(-50%, -55%);
    text-align: center;
}
.description p
{
    color: #fff;
    font-size: 1.3rem;
    line-height: 1.5;
}
.description button
{
    border:1px solid #122a4b;
    background:#122a4b;
    border-radius: 0;
    color:#fff;
}
.description button:hover 
{
    border:1px solid #fff;
    background:#fff;
    color:#000;
}
.features 
{
    margin: 4em auto;
    padding: 1em;
    position: relative;
}
.feature-title 
{
    color: rgb(255, 255, 255);
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 20px;
    text-transform: uppercase;
}
.features img 
{
    -webkit-box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
    -moz-box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
    margin-bottom: 16px;
}
.features .form-control,
.features input
{
    border-radius: 0;
}

.features .btn:hover 
{
    background-color: rgb(0, 0, 0);
    border: 1px solid #333;
}
.background 
{
    background: #ffffff;
    padding: 4em 0;
}
.team 
{
    color: #ffffff;
    padding: 0 180px;
}
.team .card-columns 
{
    -webkit-column-count: 4;
    -moz-column-count: 4;
    column-count: 4;
}
.team .card 
{
    background:none;
    border: none;
}
.team .card-title 
{
    font-size: 1.3rem;
    margin-bottom: 0;
    text-transform: uppercase;
}
.page-footer 
{
    background-color: #222;
    color: rgb(255, 255, 255);
    padding: 60px 0 30px;
}
.footer-copyright 
{
    color: #666;
    padding: 40px 0;
}

    </style>
   </head>
   <body>
       <nav class="navbar navbar-expand-md">
       
          <a class="navbar-brand">Crown Exotic Cars Dealership</a>
          <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
           </button>
           <div class="collapse navbar-collapse" id="main-navigation">
               <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">|  Home</a>
                </li>
                <li nav class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   |  Menu</a>

                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/addCar">Add Car</a>
                        <a class="dropdown-item" href="/viewCar">Cars Inventory</a>                       
                    </div>
                </li>
                <li nav="nav-item">
                 <a class="nav-link" href=""></a>
                </li>
                  <li nav="nav-item">
                     <a class="nav-link" href=""></a>
                </li>
                  <li nav="nav-item">
                     <a class="nav-link" href=""></a>
                </li>
               
               </ul>
           </div>
       </nav>
       <header class="page-header header container-fluid">

    
                
       </header>
@yield('content')
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6>Official Website of Crown Exotic Car Dealership
                        <br>
                        Phone: 07-231 7211
                    </h6>
                    <h6></h6>
        </div>
         <div class="col-lg-4 col-md-4 col-sm-12">
            <h6>Address:</h6>
            <h6></h6>
         </div>
         <div>
        <div class="footer-copyright text-center">© 2021 Copyright</div>
        
    </footer>
       <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
       <script src="main.js"></script>
   </body>
</html>