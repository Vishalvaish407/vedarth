<footer id="footer" class="footer bg-black">
  <div class="container pt-70 pb-40">
    <div class="row border-bottom-black">
      <div class="col-sm-6 col-md-3">
        <div class="widget dark"> <img class="mt-10 mb-20" alt="Vedarth Yoga" src="<?=site_url("images/logo-black.png")?>">
          <!-- <p>Bodhi Yoga Institute Registered Yoga School, Yoga Alliance USA </p> -->
          <h5 class="widget-title mb-10">Connect With Us</h5>
          <ul class="styled-icons icon-dark icon-circled icon-sm">
            <li><a href="https://www.facebook.com/BodhiYogaTrainingAcademy/"  traget="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/bodhiyogaandwellness/"  traget="_blank"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom">Useful Links</h5>
          <ul class="list-border">
            <li><a href="/">Home</a></li>
            <li><a href="<?=site_url("home/about")?>">About us</a></li>
            <!-- <li><a href="our-team.html">Our Team</a></li> -->
            <li><a href="<?=site_url("/home/gallery")?>">Gallery</a></li>
            <li><a href="<?=site_url("/home/contact")?>">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom">Contact Us :</h5>
          <div class="opening-hours">
            <ul class="list-border">
              <li class="clearfix"> 
                           <div class="value pull-right flip"> 
                
                <form  method="post" class="quotationform" action="<?=site_url("/home/contactdetail")?>">
              <div class="form-group">
            <input  data-validation="custom" data-validation-regexp="^([a-zA-Z\s]+)$"  data-validation-error-msg="Please Enter Name Accepts Alphabets and Spaces Only" type="text" class="form-control"  name="name" placeholder="Name*" >
          </div>
          <div class="form-group">
            <input data-validation="email" name="email" placeholder="Email Id*"  type="text">
          </div>
              <div class="form-group">
            <input type="text" class="form-control" data-validation="required length number" data-validation-length="10-15"  name="phone" placeholder="Enter Phone Number*" >
          </div>
           <div class="form-group">
            <!-- <select name="city" required>
            <option value="" >Select City*</option>
  			<option value="hyderabad">Rishikesh</option>
             <option value="banglore">Bengaluru</option>
				</select>  -->
          </div>
          <div class="form-group">
            <!-- <select name="center" required>
            <option value="" >Select Center</option>
  		<option value="Jubilee Hills">Jubilee Hills</option>
            <option value="Khairatabad">Khairatabad</option>
				</select>  -->
          </div> 
          <div class="form-group">
           <select name="course" required>
  			 <option value="" >Select*</option>
             <!-- <option value="morningyoga">Morning Yoga Classes</option>
            <option value="eveningyoga">Evening Yoga Classes</option> -->
  			
            <option value="2">Hatha Yoga </option>
            <option value="3">Astanga  yoga</option>
            <option value="4">Meditation</option>
            <option value="5">Pranayama</option>
            <option value="6">Yin Yoga</option>
            <option value="7">Power Yoga</option>
            <!-- <option value="YIN">YIN Yoga Yoga Teacher Training</option>
           
            <option value="8 Certificates">Meditation </option> -->
				</select> 
          </div>
              <div class="form-group">
            <input type="submit" class="btn btn-danger pull-left" value="Yes I am Interested">
          </div>
            </form>
                 </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom">Head Office</h5>
          <p>Vedarth Yoga </p>
          <ul class="list-inline mt-5">
          <li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-colored mr-5"></i> <a class="text-gray" href="#">Lane no. 12, near Triveni Ghatt, Rishikesh- 249201</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">+91 9536800007</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="mailto:kthakur00007@gamil.com">kthakur00007@gamil.com</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.vedarth.com</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <div class="footer-bottom bg-black-222">
    <div class="container pt-10 pb-0">
      <div class="row">
        <div class="col-md-6 sm-text-center">
          <!-- <p class="font-13 text-black-777 m-0">Copyright &copy;2017 Bodhiyogainstitute. All Rights Reserved</p> -->
        </div>
        <div class="col-md-6 text-right flip sm-text-center">
          <div class="widget no-border m-0">
            <ul class="styled-icons icon-dark icon-circled icon-sm">
              <li><a href="https://www.facebook.com/BodhiYogaTrainingAcademy/" traget="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/bodhiyogaandwellness/" traget="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>