<?php include("header.php"); ?>

<!--Page Title-->

<section class="page-title" style="background-image:url(images/background/7.jpg);">
    <div class="auto-container">
        <h1>Products Details</h1>
        <div class="text">What We Actually Do?</div>
        <ul class="bread-crumb clearfix">
            <li><a href="index.php"><span class="fas fa-home"></span> Home </a></li>
            <li>Products</li>
        </ul>
    </div>
</section>

<!--End Page Title-->

   <div class="sec-title centered pt-5">
		<h2>Products Details</h2>
		<div class="separator"></div><br>
	</div>

	<!--Sidebar Page Container-->

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <?php
                    require ('connection/connect.php');

                    $Product_Name=$_GET['Product_Name'];
                    $sql = "SELECT * FROM `productdetails`WHERE Product_Name='$Product_Name'";
                    $result = mysqli_query($con,$sql);
                    $check_crud = mysqli_num_rows($result) > 0;

                    if($check_crud)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            ?>

                    <!--Content Side-->
                    <div class="content-side col-lg-12 col-md-12 col-sm-12">
                        <div class="shop-single">
                            <div class="product-details">

                                <!--Basic Details-->
                                <div class="basic-details">
                                    <div class="row clearfix">
                                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                            <figure class="image-box">
                                              <?php echo '<img class="card-img-top" src="./admin/product_images/'.$row['Product_Image'].'" width="250px"; height="300px"; alt=" ">' ?>
                                            </figure>
                                        </div>
                                        <div class="info-column col-lg-6 col-md-12 col-sm-12" style="padding: 50px; background-color: aliceblue;">
                                            <div class="details-header">
                                                <h4><?php echo $row['Product_Name']; ?></h4><br>
                                                <h5>Product Chemical:</h5>  <h6 style="color:#ed6f1e;"><?php echo $row['Product_Chemical']; ?></h6><br>
                                                <h5>Product Form:  <h6 style="color:#ed6f1e;"><?php echo $row['Product_Form']; ?></h6></h5><br>
                                                <h5>Company Name:  <h6 style="color:#ed6f1e;"><?php echo $row['Company_Name']; ?></h6></h5><br>
                                                <h5>Product Storage:  <h6 style="color:#ed6f1e;"><?php echo $row['Product_Storage']; ?></h6></h5><br>
                                                <h5>Product Packing:  <h6 style="color:#ed6f1e;"><?php echo $row['Product_Packing']; ?></h6></h5><br>
                                                <h5>Product Category:  <h6 style="color:#ed6f1e;"><?php echo $row['category_name']; ?></h6></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Basic Details-->
                            </div>
                        </div>

                        <!-- <div class="related-products">
                            <div class="sec-title">
                                <h2>Related Products</h2>
                                <div class="separator"></div>
                            </div>
                            <div class="row clearfix">

                                </ Shop Item--/>
                                <div class="product-block col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="images/resource/products/1.jpg" alt="" />
                                            <ul class="options clearfix">
                                                <li><a href="shop-single.html">Quick View</a></li>
                                                <li><a href="shop-single.html"><span class="icon flaticon-shopping-cart"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="lower-box">
                                            <div class="content">
                                                <h3><a href="shop-single.html">Chair One</a></h3>
                                                <div class="price">$42.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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

    <!-- End Sierbar Container -->



<?php include("footer.php"); ?>