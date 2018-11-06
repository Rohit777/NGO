<?php
$page = "try";
$title = "Team  | Kanshiram Welfare Foundation";
include 'header.php';
?>

    <section id="tracks">

        <div class="container">
        <div class="title" align="center">Team Members</div>

          <div class="row track-list mt-5 first">
            <div class="col-lg-6 team" align="center">
                  <img class="rounded-circle grabbing track-item" src="image\team\Mr. Harish Kumar.jpg" data-toggle="modal" data-target="#trackModal" data-track="harish" width="140" height="140" style="border:2px solid rgb(170, 52, 52)" >
                  <h5 class="name">Mr. Harish Kumar</h5>
                  <h6 class="name">(Secretary)</h6>
            </div>

            <div class="col-lg-6 team" align="center"> 
                  <img class="rounded-circle grabbing track-item" src="image\team\Mr. Lalit Kumar.JPG" data-toggle="modal" data-target="#trackModal" data-track="lalit" width="140" height="140" style="border:2px solid rgb(170, 52, 52)">
                  <h5 class="name">Mr. Lalit Kumar</h5>
                  <h6 class="name">(Organizing Secretary)</h6>
            </div>
            
          </div>

          <div class="row track-list mt-5 second">

            <div align="center"  class="col-lg-3 team">
                <img class="rounded-circle grabbing track-item" src="image\team\Dr. Babita Udbhav.jpg" data-toggle="modal" data-target="#trackModal" data-track="babita"  width="140" height="140" style="border:2px solid rgb(170, 52, 52)">
                <h5 class="name">Dr. Babita Udbhav</h5>
            </div>

            <div align="center"  class="col-lg-3 team">
                <img class="rounded-circle grabbing track-item" src="image\team\Ms. Punam Chandra.jpg" data-toggle="modal" data-target="#trackModal" data-track="punam"  width="140" height="140" style="border:2px solid rgb(170, 52, 52)">
                <h5 class="name">Mrs. Poonam Chandra</h5>
            </div>

            <div align="center"  class="col-lg-3 team">
                <img class="rounded-circle grabbing track-item" src="image\team\Ms. Jyotsna Sonal.jpg" data-toggle="modal" data-target="#trackModal" data-track="jyotsna"  width="140" height="140" style="border:2px solid rgb(170, 52, 52)">
                <h5 class="name">Ms. Jyotsna Sonal</h5>
            </div>

            <div align="center"  class="col-lg-3 team">
                <img class="rounded-circle grabbing track-item" src="image\team\Vidya Lakshmi.jpg" data-toggle="modal" data-target="#trackModal" data-track="lakshmi"  width="140" height="140" style="border:2px solid rgb(170, 52, 52)">
                <h5 class="name">Mrs. Vidya Lakshmi P.R.</h5>
            </div>

          </div>

          <div class="row track-list mt-5 third">

            <div align="center"  class="col-lg-3 team">
                <img class="rounded-circle grabbing track-item" src="image\team\Mr. Joel Philip Thomas.jpg" data-toggle="modal" data-target="#trackModal" data-track="joel"  width="140" height="140" style="border:2px solid rgb(170, 52, 52)">
                <h5 class="name">Mr. V. Joel Philip Thomas</h5>
            </div>

            <div align="center"  class="col-lg-3 team">
                <img class="rounded-circle grabbing track-item" src="image\team\Mr. Firoz Khan.jpg" data-toggle="modal" data-target="#trackModal" data-track="firoz"  width="140" height="140" style="border:2px solid rgb(170, 52, 52)">
                <h5 class="name">Mr. Feroz Khan</h5>
            </div>

            <div align="center"  class="col-lg-3 team">
                <img class="rounded-circle grabbing track-item" src="image\team\Mr. Shishir Kumar Singh.jpeg" data-toggle="modal" data-target="#trackModal" data-track="shishir"  width="140" height="140" style="border:2px solid rgb(170, 52, 52)">
                <h5 class="name">Mr. Shishir Kumar Singh</h5>
            </div>

            <div align="center"  class="col-lg-3 team">
                <img class="rounded-circle grabbing track-item" src="image\team\Mr. Rocky Paotei.jpg" data-toggle="modal" data-target="#trackModal" data-track="rocky"  width="140" height="140" style="border:2px solid rgb(170, 52, 52)">
                <h5 class="name">Mr. Rocky Paotei</h5>
            </div>
          </div>

        </div>

      <div class="modal fade" id="trackModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                      <div class="modal-text">
                          <div class="modal-header">
                              <span class="modal-title"></span>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div> 
                          <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img class="track-img" width="190" height="250">
                                </div>
                                <div class="col-12 col-md-8">
                                <div class="modal-name" align="center"></div>
                                <div class="modal-post" align="center"></div>
                                <div class="modal-body" align="center">Track body</div>
                                </div>
                            </div>
                          </div>
                      </div>
              </div>
          </div>
      </div>

    </section>

<?php
include 'footer.php';
?>