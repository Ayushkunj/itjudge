<!--Index Page-->

<!Doctype html>

<html lang="en">

<!--Head Section-->
<head>
    
    <title>judgeit</title>
   

    <!-- Links To Other Files And Scripts  -->
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="icon" href="images/icon.png" type="image/png" />
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--End Of Linking Part-->
    <?php include_once 'phpfunctions.php' ?>;


    <!--Including phpfunction.php page -->
   
    
</head>
<!--End  Of Head Section-->

<!--Body Section-->
<body>
    <!-- Including the header and nav part from the header.php file -->
    <?php include 'header.php' ?>


    <!--Main Container-->
    <div class="container-fluid" style="padding-top:90px;">


       <div class="row" style="padding-top:60px;">


            <div class="col-sm-0 col-md-2 sidebar">
            <!-- Sidebar Navigation Section-->
                <ul class="nav nav-sidebar">
                    <li class="active">
                        <a href="#">
                           Categories
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li>
                        <a href="category.php?value=mobile">Mobiles</a>
                    </li>
                    <li>
                        <a href="category.php?value=laptops">Laptops</a>
                    </li>
                    <li>
                        <a href="category.php?value=desktops">Destops</a>
                    </li>
                    <li>
                        <a href="category.php?value=printers">Printers</a>
                    </li>
                    <li>
                        <a href="category.php?value=television">Television</a>
                    </li>
                    <li>
                        <a href="category.php?value=electronics">Electonics</a>
                    </li>
                    <li>
                        <a href="category.php?value=kitchen">Kitchen Appliances</a>
                    </li>
                    <li>
                        <a href="category.php?value=home">Home Appliances</a>
                    </li>
                    <li>
                        <a href="category.php?value=camera">Camera</a>
                    </li>
                </ul>
                <div data-wrid="WRID-145347328251915566" data-widgettype="productBanner" data-class="affiliateAdsByFlipkart" height="240px" width="120px"></div>
                <script async src="//affiliate.flipkart.com/affiliate/widgets/FKAffiliateWidgets.js"></script>
                        
            </div> 
                  
            <div class="col-md-10 col-sm-12" style="margin-left:0px;margin-right:0px;">


                <!-- A Slider created by using bootstrap -->

	            <div class="row container" style="width:100%; height:400px;">

                   
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/slider1.jpg" alt="Flipkart" />
                            </div>

                            <div class="item">
                                <img src="images/slider2.jpg" alt="ebay" />
                            </div>

                            <div class="item">
                                <img src="images/slider3.jpg" alt="Snapdeal" />
                            </div>

                            <div class="item">
                                <img src="images/slider4.png" alt="Amazon" />
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    


               </div>

                <!-- End Of Slider-->


                <!-- Category Wise Product Display-->
                <div style="text-align: center;padding-top:50px;width:100%;overflow:auto;background-color:white;">

                <!-- Mobile Category-->
                    <a href="category.php?value=mobile"><div class="bg-primary" style="text-align: center;margin-top:0;width:100%;">
                        <h2>Mobile Phones</h2> 
                </div></a>
                <div class="row" style="border">
                    <?php
                    categoryname("mobile_phones",10);
                    ?>
                </div>
                <!-- End Of Mobile Category-->

                <!--Camera And Optics Category-->
                    <a href="category.php?value=camera"><div class="bg-primary" style="text-align: center;margin-top:0; width:100%;">
                        <h2>Camera And Optics</h2>
                </div></a>
                <div class="row">
                    <?php
                    categoryname("camcorders",5);
                    ?>
                </div>
                <!--End Of Camera And Optics Category-->

                <!--Computer Category-->
                    <a href="category.php?value=computers"><div class="bg-primary" style="text-align: center;margin-top:0; width:100%;">
                        <h2>Computers And Peripheral</h2>
                </div></a>
                <div class="row">
                    <?php
                    categoryname("desktops",5);
                    ?>
                </div>
                <!--End Of Computer Category-->

                <!--Electronics Category-->
                    <a href="category.php?value=electronics"><div class="bg-primary" style="text-align: center;margin-top:0; width:100%;">
                        <h2>Electronics</h2>
                </div></a>
                <div class="row">
                    <?php
                    categoryname("pen_drives",5);
                    ?>
                </div>
                <!--End Of Electronics Category-->

                <!--Television Category-->
                    <a href="category.php?value=television"><div class="bg-primary" style="text-align: center;margin-top:0; width:100%;">
                        <h2>Televisions</h2>
                </div></a>
                <div class="row">
                    <?php
                    categoryname("lcd_tv",5);
                    ?>
                </div>
                <!--End Of Television category-->

                <!--Home Gaming Consoles Category-->
                    <a href="category.php?value=home"><div class="bg-primary" style="text-align: center;margin-top:0; width:100%;">
                        <h2>Gaming Consoles</h2>
                </div></a>
                <div class="row">
                    <?php
                    categoryname("gaming_consoles",5);
                    ?>
                </div>
                <!--End Of Gaming Consoles-->

                <!--Kitchen Appliances-->
                    <a href="category.php?value=kitchen"><div class="bg-primary" style="text-align: center;margin-top:0; width:100%;">
                        <h2>Kitchen Appliances</h2>
                </div></a>
                <div class="row">
                    <?php
                    categoryname("induction_cooktops",5);
                    ?>
                </div>
                <!--End Of Kitchen Appliances-->

           </div>
        </div>

        </div>
        
        <!--Including Footer from footer.php file -->

        <?php include 'footer.php' ?>

    </div>

    <!--End Of Container-->

</body>

<!--End Of Body Section-->


</html>

<!--End Of Index-->