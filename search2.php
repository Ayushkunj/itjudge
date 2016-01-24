<!--search2.php-->

<!Doctype html>

<<html lang="en">


 <!--Head Section-->

<head>
    <title>judgeit</title>


    <!-- Links To Other Files And Scripts  -->

    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="icon" href="images/icon.png" type="image/png" />
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
    <!-- CSS for price comparison widget (Feel free to modify as per your needs) -->

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


    <!--Including phpfunction.php page -->

    <?php include 'phpfunctions.php'  ?>


</head>

 <!--End of Head Section-->


 <!--Body Section-->

<body>


    <!-- Including the header and nav part from the header.php file -->
    
    <?php include 'header.php' ?>

    
    <!--Logic for displaying product details along with lowest price-->
<div class="container">
        <cente>
          <div style="width:70%; height:300px; padding-top:130px;">
            <?php $category = $_GET['category'];
              $item = $_GET['item'];
              searchbykeyword($category,$item);    
            ?>
        </div>
    </cente>

    <!--End Of Logic Part-->


     <!--Comparison Widget-->

    <center>
        <div style="width:60%;padding-top:400px;padding-bottom:50px;">

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
    <!--End Of Comparison-->


    <!--Including Footer from footer.php file -->

    <?php include 'footer.php' ?>


</body>

 <!--End Of Body Section-->


</html>

<!--End Of search2.php-->