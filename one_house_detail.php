<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('Location: Login.php');
}
if(isset($_GET['property_id']))
{
    $id = $_GET['property_id'];
}
include 'connection.php';
?>
<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

</style>
    </head>
    <body>
        <?php
            include 'Tenants_Header.php';
        ?>
       <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                            
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Listing</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
     <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6 style="font-size: 30px;">Property Details</h6>
                    </div>
                </div>
                <?php
                    $edit1 = mysqli_query($con, "select * from tbl_property_detail where property_id = '".$id."'");
                    // $edit = mysqli_query($con, "select * from tbl_wishlist inner join tbl_property_detail on tbl_wishlist.property_id = tbl_property_detail.property_id where tbl_wishlist.property_id='".$email."' and tbl_wishlist.emailid='".$_SESSION['email']."'");
                    while ($edit_p = mysqli_fetch_assoc($edit1))
                    {
                ?>
                
                 <div class="card" style="width:1000px">
                <div class="row">
                    <div class="col-sm-5">
                        <br>
                        <div class="card-body">
                                                    <div class="mx-auto d-block">
                                                        <div class="container">
                                                                <div class="mySlides">
                                                                  <div class="numbertext">1 / 6</div>
                                                                  <img src="./Balcony/<?php echo $edit_p['photo']; ?>" style=" width: 350px; height: 250px;">
                                                                </div>

                                                                <div class="mySlides">
                                                                  <div class="numbertext">2 / 6</div>
                                                                  <img src="./Hall/<?php echo $edit_p['hall_photo']; ?>" style=" width: 350px; height: 250px;">
                                                                </div>

                                                                <div class="mySlides">
                                                                  <div class="numbertext">3 / 6</div>
                                                                  <img src="./Kitchen/<?php echo $edit_p['kitchen_photo']; ?>" style=" width: 350px; height: 250px;">
                                                                </div>

                                                                <div class="mySlides">
                                                                  <div class="numbertext">4 / 6</div>
                                                                  <img src="./Bedroom/<?php echo $edit_p['bedroom_photo']; ?>" style=" width: 350px; height: 250px;">
                                                                </div>

                                                                <div class="mySlides">
                                                                  <div class="numbertext">5 / 6</div>
                                                                  <img src="./Bathroom/<?php echo $edit_p['bathroom_photo']; ?>" style=" width: 350px; height: 250px;">
                                                                </div>

                                                                <div class="mySlides">
                                                                  <div class="numbertext">6 / 6</div>
                                                                  <img src="./Balcony/<?php echo $edit_p['photo']; ?>" style=" width: 350px; height: 250px;">
                                                                </div>

                                                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                                                <a class="next" onclick="plusSlides(1)">❯</a>

                                                                <div class="caption-container">
                                                                  <p id="caption"></p>
                                                                </div>

                                                                <div class="row">
                                                                  <div class="column">
                                                                    <img class="demo cursor" src="./Balcony/<?php echo $edit_p['photo']; ?>" style="width:100px" onclick="currentSlide(1)" alt="Dream House">
                                                                  </div>
                                                                  <div class="column">
                                                                    <img class="demo cursor" src="./Hall/<?php echo $edit_p['hall_photo']; ?>" style="width:100px" onclick="currentSlide(2)" alt="Hall">
                                                                  </div>
                                                                  <div class="column">
                                                                    <img class="demo cursor" src="./Kitchen/<?php echo $edit_p['kitchen_photo']; ?>" style="width:100px" onclick="currentSlide(3)" alt="Kitchen">
                                                                  </div>
                                                                  <div class="column">
                                                                    <img class="demo cursor" src="./Bedroom/<?php echo $edit_p['bedroom_photo']; ?>" style="width:100px" onclick="currentSlide(4)" alt="Bedroom">
                                                                  </div>
                                                                  <div class="column">
                                                                    <img class="demo cursor" src="./Bathroom/<?php echo $edit_p['bathroom_photo']; ?>" style="width:100px" onclick="currentSlide(5)" alt="Bathroom">
                                                                  </div>    
                                                                  <div class="column">
                                                                    <img class="demo cursor" src="./Balcony/<?php echo $edit_p['photo']; ?>" style="width:100px" onclick="currentSlide(6)" alt="Dream House">
                                                                  </div>
                                                                </div>
                                                              </div>
                                                        
                                                     </div>
                                            </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body-right">
                            <br>
                            <h4 class="card-title"><i class="fa fa-home fa-lg" style="color: #947054;"></i>&nbsp;Property Detail</h4><br>
                            <h6 class="location"><img src="img/icons/location.png" alt="">&nbsp;Address :&nbsp;<?php echo $edit_p['home_no']; ?>, <?php echo $edit_p['society_name']; ?>, <?php echo $edit_p['landmark'] ?>, <?php echo $edit_p['area'] ?>, Surat.</h6><br>
                            <h6><i class="fa fa-rupee" style="color: #947054;"></i>&nbsp;&nbsp;&nbsp;Deposit :&nbsp;&nbsp;&nbsp; <?php echo $edit_p['deposit']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-rupee" style="color: #947054;"></i>&nbsp;Rent : <?php echo $edit_p['rent'] ?></h6>
                            <h6><i class="fa fa-bed" style="color: #947054;"></i> Bedroom : <?php echo $edit_p['no_of_room']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bathtub" style="color: #947054;"></i>  Bathroom : <?php echo $edit_p['no_of_bathroom'] ?></h6>
                            <h6><i class="fa fa-cutlery" style="color: #947054;"></i>&nbsp;&nbsp;Kitchen :&nbsp;&nbsp;&nbsp;<?php echo $edit_p['no_of_kitchen']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/icons/garage.png" style="height: 15px; width: 15px;" alt="">&nbsp;Hall : <?php echo $edit_p['no_of_hall'] ?></h6>
                            <br>
                            <br>
                            <button type="button" class="btn btn-secondary mb-1"  style=" background-color: #947054; color: white;" data-toggle="modal" data-target="#staticModal"><i class="fa fa-trash"></i>&nbsp;Remove</button>
                           <button type="submit" class="btn btn-default active"  style=" background-color: #947054; color: white;" name="renthome" ><i class="fa fa-home"></i>&nbsp;Rent Home</button>    
                           
                           
                           <!-- modal static -->
			<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
			 data-backdrop="static">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticModalLabel">Remove House</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								Are you sure you want to remove this house?
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary" name="remove">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal static -->

                           
                           
                           
                        </div>
                    </div>
                 </div>
                        <br>
                 </div>
                <?php
                     }
                ?>
            
        </div>
            
     </section>
    <br>
    <br>
    <?php
        include 'Tenants_Footer.php';
        include 'script_file.php';
        
    ?>
    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    </body>
</html>
