<?php
include 'header.php';
?>

    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
          <li data-target="#myCarousel" data-slide-to="6"></li> 
          <li data-target="#myCarousel" data-slide-to="7"></li>
          <li data-target="#myCarousel" data-slide-to="8"></li>
          <li data-target="#myCarousel" data-slide-to="9"></li>         
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide img-fluid" src="image/slide.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="second-slide img-fluid" src="image/slide2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="third-slide img-fluid" src="image/slide3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="Fourth-slide img-fluid" src="image/slide4.jpg" alt="fourth slide">
          </div>
          <div class="carousel-item">
            <img class="fivth-slide img-fluid" src="image/slide5.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
              <img class="seventh-slide img-fluid" src="image/slide7.jpg" alt="Second slide">
            </div>
          <div class="carousel-item">
              <img class="seventh-slide img-fluid" src="image/slide8.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="seventh-slide img-fluid" src="image/slide9.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="seventh-slide img-fluid" src="image/slide10.png" alt="Second slide">
            </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
      </div>


<!-- popup
========================================================= -->
<!-- <div class="modal fade" id="onload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#8c2b00ed">
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:#fff;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <a href="https://cmdrf.kerala.gov.in/" target="_blank">
      <img src="image/kerla.jpeg" class="img-fluid" alt="Responsive image">
      </a>
      </div>
    </div>
  </div>
</div> -->




            <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/E.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Education</h2>
            <p>Education today has become the most crucial element for personal and social development. It is the driving force behind social and gender equality and has proven to</p>
            <p><a class="btn btn-secondary" href="education.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/L.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Livelihood</h2>
            <p>Livelihood is effective in improving the living conditions and economic status of the marginalized communities. It is a means of making a living and helps them evolve.</p>
            <p><a class="btn btn-secondary" href="liveli.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/A.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Advocacy</h2>
            <p>The core of advocacy is the understanding of the capacity to make changes in the policies and its practice, which caters to change on a larger scale. Advocacy thus helps</p>
            <p><a class="btn btn-secondary" href="advoca.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div>
    </main>
    <main role="main">
      <div>
        <h1 align="center">Success Story</h1>
        <div id="myCarousel" class="carousel slide container" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>        
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item story active">
            <div class="carousel-caption">
                <img class="rounded-circle" src="image/jyoti.jpg" alt="Generic placeholder image" width="130" height="130">
              <h1>Jyoti</h1>
              <p>She acquired a job in the retail sector after completing her graduation. Today, she is a self-employed and independent girl and runs her own beauty parlour.
  
                </p>
              <p><a class="btn btn-lg btn-primary" href="success.php" role="button">READ MORE</a></p>
            </div>         
           </div>
          <div class="carousel-item story">
            <div class="carousel-caption">
                <img class="rounded-circle" src="image/Rahul.jpg" alt="Generic placeholder image" width="130" height="130">
              <h1>Rahul</h1>
              <p>He enrolled in the B. Sc. Program in IGNOU. Presently he has taken up professional photography and has developed a team of his own.</p>
              <p><a class="btn btn-lg btn-primary" href="success.php" role="button">READ MORE</a></p>
            </div>          
          </div>
       </div>
        </div>
      </div>  
    </main>

<?php

include 'footer.php';

?>