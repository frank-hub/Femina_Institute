<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FEMINA TRAINING INSTITUTE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <style type="text/css">
    .nav-link:hover{
      color: white;
      background-color:#01009A;
    }
    li.active{
    background-color: #17A2B8;
    }
    .my-container {
    position: relative;
    background: yellow;
    overflow: hidden;
}
.my-container:before {
    content: ' ';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0.8;
    background-image: url('../imgs/A8.jpg');
    background-repeat: no-repeat;
    background-position: 50% 0;
    -ms-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
}
.my-container h1 {
    padding: 50px;
    text-align: center;
    z-index: 2;
    position: relative;
    color: #fff;
} 
   </style>
</head>
<body>
  <?php
include('nav.php');
  ?>

<div class="my-container">
    <h1 style="color: #000000">Business Management</h1>
</div>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 1em;">
                <h4 class="text-center">
                    Why Study Business Management at Femina? 
                </h4>
                <p class="text-center" style="margin-right: 1em">Small businesses are designed to exploit the unique set of skills, knowledge and ideas of their owners to sell products and services. Education and work experience vary greatly from one entrepreneur to another, and different types of businesses require different sets of skills and expertise to succeed. While no formal business training is required to start a successful business, studying business management at Femina Institute can be beneficial to students and even entrepreneurs and those they hire.</p>
                <p class="text-center"  style="margin-right: 1em">The primary benefit of studying business management is that it can equip entrepreneurs,owners and managers with essential business skills and knowledge.Those with no formal business training might be ill-prepared to handle tasks on the business side of the venture, such as creating a business plan, accounting and negotiating. Studying business management can improve a business owner's ability to analyze data,improve financial decisions and make better predictions about the future.</p>
            </div>
            <div class="col-md-6 text-center" style="margin-bottom: 1em">
              <h4>Secret Behind Business Management</h4>
                <p>Studying business management enhances an entrepreneur's chances of launching a successful business, but it does not guarantee success.Even seasoned and successful business people can fail when creating new companies.Formal business training simply gives business owners more tools to deal with challenges and take advantage of opportunities.</p>
                <img src="../imgs/a.jpeg" class="img-fluid">
            </div>
        </div>
    </div>
</main>
<footer class="bg-info">
  <div class="container ">
  <div class="row  text-white">
    <div class="col-md-4">
      <h5>Important</h5>
      <hr class="bg-white">
      <ul>
      <li><a href="../about.html"><span style="color: #000000">About Femina</span></a></li>
      <li><a href="../contact.html"><span style="color: #000000">Contact Us</span></a></li>
      <li><a href="../fee.html"><span style="color: #000000">Fee Structure</span></a></li>
      <li><a href="../downloads.html"><span style="color: #000000">Important downloads</span></a>
      </li>
      </ul>
    </div>
    <div class="col-md-4">
      <h5>Social</h5>
      <hr class="bg-white">
     <ul>
        <p class="fab fa-facebook-f">
            <a href="www.facebook.com/feminainstitute/" class="text-blue">
            <span style="color: #FFCB99"> Facebook</span>
            </a>
          </p><br>
          <p class="fab fa-twitter">
            <a href="www.twitter.com/feminainstitute/" class="text-blue">
            <span style="color: #FFCB99"> Twitter</span>
            </a>
          </p><br>
          <p class="fab fa-instagram">
            <a href="www.instagram.com/feminainstitute/" class="text-green">
            <span style="color: #FFCB99">Instagram</span>
            </a>
          </p><br>
          <p class="fab fa-whatsapp">
            <a href="www.whatsapp.com/0722953886/" class="text-green">
            <span style="color: #FFCB99">Whatsapp</span>
            </a>
          </p>
        </ul>
    </div>
    <div class="col-md-4">
      <h5>Talk Us</h5>
      <hr class="bg-white">
      <ul>
        <p class="fa fa-envelope text-white">
          <span style="color: #000000">
          Femina Training Institute,<br>
          P.O BOX,70-60602,<br>
          Cape Corner along Livestock Market Road,
          Kianjai-Meru</span></p>
          <br>
          <p class="fa fa-phone text-white">
          <span style="color: #000000">Tel: 0722953886 or 0774038901</span></p>
          <br>
          <p class="fa fa-envelope text-white">
          <span style="color: #000000">Email Adress: feminatraining@gmail.com</span></p>
      </ul>
    </div>
  </div>
  </div>
</footer>
<footer class="text-center bg-info text-white">
  <a href="#" class="text-white">Femina Training Institute</a> 
  | All Rights Reserved &copy; 2018| Powered By 
  <a href="mtaani-tech.000webhostapp.com" class="text-white" target="_blank">Mtaani_Tech Developers</a>
</footer><script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/mdb.js"></script>
<script>
      $(function () {
        $('#myTab li:last-child a').tab('show')
      })
    </script>
</body>
</html>