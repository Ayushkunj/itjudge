<!--search.php-->

<!Doctype html>

<html lang="en">

<!--Head Section-->

<head lang="en">

    <title>judgeit</title>

    <!-- Links To Other Files And Scripts  -->

    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="icon" href="images/icon.png" type="image/png" />
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!--End Of Linking Part-->


    <!--Including phpfunction.php page -->

    <?php include 'phpfunctions.php'  ?>


    <!-- CSS for Price Comparison Widget -->

    <style type="text/css">
            table#priceTable {
                width: 700px;
            }

            table#priceTable #storeCol {
                width: 45%;
            }

            table#priceTable #priceCol {
                width: 30%;
            }

            table#priceTable #storeCol {
                width: 25%;
            }

            table#priceTable {
                border: 1px solid #B3B3B3;
                border-collapse: collapse;
                border-spacing: 0;
                margin-top: 3px;
                text-align: center;
            }

            table#priceTable thead tr {
                background: repeat-x scroll left bottom #EFEFEF;
                font-weight: bold;
                height: 30px;
                margin: 0;
                padding: 0;
            }

            table#priceTable td {
                border-bottom: 1px solid #D3D3D3;
            }

            table#priceTable th {
                border-bottom: 1px solid #D3D3D3;
            }

            table#priceTable tbody tr {
                height: 40px;
                padding: 4px 0;
                vertical-align: middle;
            }

            .goButton {
                background-image: linear-gradient(to bottom, #32A3FF, #0559A0);
                background-repeat: repeat-x;
                border-radius: 4px;
                color: white;
                font-weight: bold;
                text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
                padding: 2px 10px;
                text-decoration: none;
            }

            table#priceTable td img {
                 padding: 10px 0px 5px 5px;
            }

            table#priceTable .price {
                color: #004C7D;
                font-weight: bold;
                margin: 3px 0 2px;
                font-size: 18px;
            }

            .storeOffer {
                color: red;
                font-size: 12px;
                font-weight: normal;
            }

            .fStore {
                color: red;
                font-size: 10px;
                font-weight: bold;
            }

            .rupee {
                display: inline;
                font-family: "WebRupee";
                font-weight: normal;
            }

             @font-face {
                font-family: 'WebRupee';
                src: url('http://cdn.webrupee.com/WebRupee.V2.0.eot');
                src: local('WebRupee'), url('http://cdn.webrupee.com/WebRupee.V2.0.ttf') format('truetype'), url('http://cdn.webrupee.com/WebRupee.V2.0.woff') format('woff'), url('http://cdn.webrupee.com/WebRupee.V2.0.svg') format('svg');
                font-weight: normal;
                font-style: normal;
            }

            .WebRupee {
                font-family: 'WebRupee';
            }
    </style>

    <!--End Of Price Comparison Widget-->

</head>

<!--End of Head Section-->


<!--Body Section-->

<body>


    <!-- Including the header and nav part from the header.php file -->

    <?php include 'header.php' ?>



 <div class="container" style="padding-top:150px;">
    <!--<div class="container col-md-3" style="width:100%;margin-left:5px;">
            <div data-wrid="WRID-145347945549243018" data-widgettype="searchWidget" data-class="affiliateAdsByFlipkart" height="450" width="200"></div>
            <script async src="//affiliate.flipkart.com/affiliate/widgets/FKAffiliateWidgets.js"></script>

    </div>-->
    <div class="col-md-7 container">

        <center class="container">
            <div class="container" style="width:100%; ">
                <?php  
                    $item = $_POST['item'];
                    $category = $_POST['category'];
                    searchbykeyword($category,$item);
                ?>
            </div>
        
    

    <!--Comparison Widget-->
    
        
            <div style="width:100%;padding-top:40px;padding-bottom:100px;">

                <table id="priceTable"></table>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script type="text/javascript" src="http://cdn.pricecheckindia.com/compare.js"></script>
                <script type="text/javascript">
                $(document).ready(function () {
                    var item = "<?php echo $item; ?>";
                    var cate = "<?php echo $category; ?>";
	                initComparison( cate , item ,'ayushkr0','FQDFLHZVYOWKKVNK');
                });
                </script>
            </div>
        </center>

    </div>

     <!--<div class="col-md-2">
            <div data-wrid="WRID-145348677165440322" data-widgettype="staticBanner" data-responsive="yes" data-class="affiliateAdsByFlipkart" height="250" width="300"></div>
            <script async src="//affiliate.flipkart.com/affiliate/widgets/FKAffiliateWidgets.js"></script>

     </div>-->

</div>
        
        
       
    

    <!--End Of Comparison-->


    <!--Including Footer from footer.php file -->

    <?php include 'footer.php' ?>


</body>

<!--End Of Body Section-->


</html>

<!--End Of search.php-->