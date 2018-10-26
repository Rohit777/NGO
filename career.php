<?php
include 'header.php';
?>
<div class="container">
   <div class="row">
    <div class="content col-md-12">
        <div style="padding-bottom:30px;">
            <h3 class="head">Career</h3>
                <p>Be a part of our organization and work at the grassroots level to create a space for equal opportunities in terms of 
                  education and livelihood for the marginalized sections of the society.</p>      
            </div>
            <div>       
            <h3 class="head">Social Work Trainee &amp; Volunteer</h3>
                 <p>The organizational environment present at Kanshiram Welfare Foundation allows for the
exchange of ideas and provides space for theory and community practice. While the Social Work
Trainees at the organization are students from the University of Delhi and IGNOU as part of
their concurrent field work, the volunteers associated with the organization are from diverse
backgrounds. The work environment here provides for a qualitative learning opportunity for both
the organization and the learners.</p>
            </div>  
      </div>    
    </div>
</div>


<div>
<center><button style="margin:5% 40%; background-color: #8c2b00ed;border: #8c2b00ed;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Apply</button></center>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">APPLY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="apply.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" name="Email" class="form-control" id="recipient-name" placeholder="example@gmail.com">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea name="Message" class="form-control" id="message-text"></textarea>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="send" value="Send Message">
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

</div>

<?php

include 'footer.php';

?>