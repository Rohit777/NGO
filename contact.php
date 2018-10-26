<?php
$title = "Contact  | Kanshiram Welfare Foundation";
include 'header.php';
?>
    <div class="container contact">
   <div class="row"> 
        <div class="col-md-4 col-sm-4 contact-detail" style="display:block;">
            <h2>CONTACT</h2>
            <p><span class="icon"> ADDRESS: </span>H.No.-1359, Block-E, Ground Floor Jahangir Puri, Delhi-110033</p>
            <p><span class="icon"> Email Address: </span><a style="color:white;" href="mailto:kanshiramwelfarefoundation@gmail.com">kanshiramwelfarefoundation@gmail.com</a></p>
            <p><span class="icon"> TELEPHONE: </span> 011-27634206</p>
            <a class="btn btn-lg" style="background-color:aliceblue; color:#aa3d3d;" href="https://goo.gl/KKgJ5C" target="_blank">Get Direction</a>
        </div>
        <div class="col-md-8 col-sm-8 ">
            <div id="map"></div>   
        </div>
   </div>
</div>

<div class="container-fluid" style="background-color: #3c3d41;">
    <footer class="footer-bs">
    <div class="row">
        	  <div class="col-md-3 footer-brand animated fadeInLeft">
            	<h2>Kanshiram</h2>
                <p>Kanshiram Welfare Foundation is a research and action based non-profit organization established in 2008.
                    It aims to extend the opportunities for marginalized section across various social groups within the society.</p>
                <p>© 2018, Kanshiram Welfare Foundation, All rights reserved.</p>
            </div>
        	  <div class="col-md-5 footer-nav animated fadeInUp"> 
              <div class="row">
            	  <div class="col-6">
                  <ul class="pages">
                    <li><a href="education.php">education</a></li>
                    <li><a href="liveli.php">Livelihood</a></li>
                    <li><a href="advoca.php">Advocacy</a></li>
                    <li><a href="pre.php">PERSPECTIVE on ela</a></li>
                  </ul>
                </div>
                <div class="col-6 bug">
                  <ul class="list">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="team.php">Our Team</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
        	  <div class="col-md-2 footer-social animated fadeInDown">
              <h4>Follow Us</h4>
              <ul>
                <li><a href="https://www.facebook.com/pages/Kanshiram-Welfare-Foundation/163677117162571?fref=nf" target="_blank">Facebook</a></li>
                <li><a href="https://www.youtube.com/channel/UCFxIJLpNrHBDYiPlCzVgl4A" target="_blank">You tube</a></li>
              </ul>
            </div>
            <div class="col-md-2 footer-ns animated fadeInRight">
              <div>
                <a href="https://www.facebook.com/pages/Kanshiram-Welfare-Foundation/163677117162571?fref=nf" target="_blank"><i class="fab fa-facebook-square fa-2x inline"  style="color:white"></i></a> 
                <a href="https://www.youtube.com/channel/UCFxIJLpNrHBDYiPlCzVgl4A" target="_blank"><i class="fab fa-youtube fa-2x inline" style="color:white"></i></a>      
                <a href="https://www.linkedin.com/in/kanshiram-welfare-foundation-587a71161" target = "_blank"><i class="fab fa-linkedin fa-2x inline" style="color:white"></i></a>              
                <a href="https://twitter.com/KanshiramF" target = "_blank"><i class="fab fa-twitter-square fa-2x inline" style="color: white"></i></a>
              </div>
            </div>
        </div>
    </footer>
  </div>

  <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="copyright">
                Copyright © 2018, Kanshiram Welfare Foundation, All rights reserved.
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="design">
               <a href="index.php"> Back to top</a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <script>
        function initMap() {
          var uluru = {lat: 28.732753, lng: 77.175045};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 20,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJrszfpOrF5BCH6Iw60xOnx3pbRO2891U&callback=initMap" type="text/javascript">
      </script>  
</body>
</html>