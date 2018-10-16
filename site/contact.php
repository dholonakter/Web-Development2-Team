<?php include "header.php"; ?>
  
<div class="imageconatainer">
     <img class="img" src="images/amsterdam-winter-netherlands-skating-canals-ice.jpg" />
    <div class="content"> 
    <h3>CONTACT US</h3>
    <p>We are always here to provide you best service</p>
        <p>+0987654389</p>
    </div>  
</div>
    
     <!-- below this is the contact information -->
        
<div class="maincontainer">

    <div class="row">
  <div class="column">
      <h4>Contact Info</h4>
           <p>Email:dholonakter@gmail.com</p>
           <p>Contact:+3100000</p>

  </div>
  <div class="column">
      <h3>Got a query? Pick up the phone or email to ask us.</h3>
    <form action="action_page.php">
        <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="info" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="info" id="lname" name="email" placeholder="Your Email  address..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="send" value="Submit">
    </div>


    </form>
  </div>
  </div>
    </div>
<?php include "footer.php" ?>


      
