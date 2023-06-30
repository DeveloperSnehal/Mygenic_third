<?php include("header.php"); ?>

<!--Page Title-->

<section class="page-title" style="background-image:url(images/background/7.jpg);">
    <div class="auto-container">
        <h1>Sub-Category</h1>
        <div class="text">What We Actually Do?</div>
        <ul class="bread-crumb clearfix">
            <li><a href="index.php"><span class="fas fa-home"></span> Home </a></li>
            <li><a href="category.php"><span class="fas fa-home"></span> Category </a></li>
            <li>Sub Category</li>
        </ul>
    </div>
</section>

<!--End Page Title-->

<div class="sec-title centered pt-5">
	<h2>SUB CATEGORY</h2>
	<div class="separator"></div>
</div>


<!--Sidebar Page Container-->

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="row clearfix">
                    <?php
                        require ('connection/connect.php');

                        $Product_Chemical=$_GET['Product_Chemical'];
                        $sql = "SELECT * FROM `productdetails` WHERE Product_Chemical='$Product_Chemical'";
                        $result = mysqli_query($con,$sql);
                        $check_crud = mysqli_num_rows($result) > 0;

                        if($check_crud)
                        {
                            while($row = mysqli_fetch_array($result))
                            {
                                ?>
                        <!--Shop Item-->
                        <div class="product-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                              <div class="lower-box">
                                    <div class="content">
                                        <h3><a href="#"><?php echo $row['Product_Name']; ?></a></h3>
                                    </div>
                                </div>

                                <div class="image">
                                   <?php echo '<img class="card-img-top img-fluid" src="./admin/product_images/'.$row['Product_Image'].'" style="height: 200px; width: 200px;"  alt=" ">' ?>
                                    <ul class="options clearfix">
                                        <li><a href="product-details.php?Product_Name=<?php echo $row['Product_Name']; ?>">View Details</a></li>
                                        <li><a href="product-details.php?Product_Name=<?php echo $row['Product_Name']; ?>"><span class="icon flaticon-eye"></span></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="lower-box">
                                    <div class="content">
                                        <h3><a href="#"><span style="color:#ed6f1e;"><?php echo $row['category_name']; ?></span></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                        }
                    else
                    {

                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Sierbar Container -->

<!-- Newsletter Section -->
<section class="newsletter-section">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Title Column -->
					<div class="title-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Have any questions?</h2>
							<div class="text">More Information about to the Mygenic.</div>
						</div>
					</div>
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Subscribe Form -->
							<div class="subscribe-form">
								<form method="post" action="http://expert-themes.com/html/meditech/contact.html">
									<div class="form-group">
										<input type="email" name="email" value="" placeholder="Your Email Address" required>
										<button type="submit" class="theme-btn btn-style-two"><span
												class="txt">Enquiry Here</span></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- End Newsletter Section -->


<?php include("footer.php"); ?>