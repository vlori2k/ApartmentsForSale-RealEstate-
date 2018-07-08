<?php include'header.php';?>    <!-- Include the header.php file.. -->


<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Contact Us</span>
    <h2>Contact Us</h2>
</div>
</div>



<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">

      <form name="contactform" method="post" action='../src/classes/RealEstate/send_form_email.php'>
          <table width="450px">
              <tr>
                  <td valign="top">
                      <label for="first_name">First Name *</label>
                  </td>
                  <td valign="top">
                      <input  type="text" name="first_name" maxlength="50" size="30">
                  </td>
              </tr>
              <tr>
                  <td valign="top"">
                  <label for="last_name">Last Name *</label>
                  </td>
                  <td valign="top">
                      <input  type="text" name="last_name" maxlength="50" size="30">
                  </td>
              </tr>
              <tr>
                  <td valign="top">
                      <label for="email">Email Address *</label>
                  </td>
                  <td valign="top">
                      <input  type="text" name="email" maxlength="80" size="30">
                  </td>
              </tr>
              <tr>
                  <td valign="top">
                      <label for="telephone">Telephone Number</label>
                  </td>
                  <td valign="top">
                      <input  type="text" name="telephone" maxlength="30" size="30">
                  </td>
              </tr>
              <tr>
                  <td valign="top">
                      <label for="comments">Comments *</label>
                  </td>
                  <td valign="top">
                      <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                  </td>
              </tr>
              <tr>
                  <td colspan="2" style="text-align:center">
                      <input type="submit" value="Submit">
                  </td>
              </tr>
          </table>
      </form>

                
        </div>
  <div class="col-lg-6 col-sm-6 ">
      <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=gladengveien%2015d+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Create Google Map</a></iframe></div><br />
  </div>
</div>
</div>
</div>

<?php include'footer.php';?>  <!-- includes the footer.php file -->