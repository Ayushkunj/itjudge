<!--category.php-->

<!Doctype html>

<html lang="en">


<!--Head Section-->

<head>
    <title>judgeit</title>
    <?php include 'phpfunctions.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="en" />
    <link rel="icon" href="images/icon.png" type="image/png" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<!--End Of Head Section-->


<!--Body Section-->

<body>


    <!--Including header.php file for header section-->

    <?php include 'header.php' ?>


    <!--Logic Section-->

    <?php


    //Retrieving category name and assigning to variable value

    $value = $_GET['value'];


    echo '<div style="text-align: center;width:100%;overflow:auto;background-color:white ;">';

    //Comparing value of variable $value by the category to diplay the product of required category

    //comparing with mobile category

    if($value=="mobile")
    {
        echo '<div class="container jumbotron" style="width:100%;margin-top:150px;" ><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;padding:0;"><h2>Mobile Phones</h2></div>';
        categoryname("mobile_phones",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Tablets</h2></div>';
        categoryname("tablets",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Mobile Bluetooth Headsets</h2></div>';
        categoryname("mobile_bluetooth_headsets",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Mobile Chargers</h2></div>';
        categoryname("mobile_chargers",12);
        echo '</div>';

        echo '</div>';
    }

    //comparing with camera category

    elseif($value=="camera")
    {
        echo '<div class="container jumbotron" style="width:100%;margin-top:150px;" ><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;padding:0;"><h2>Point Shoots</h2></div>';
        categoryname("point_shoots",12);
        echo '</div>';


        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Camcorders</h2></div>';
        categoryname("camcorders",12);
        echo '</div>';


        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>DSLRs</h2></div>';
        categoryname("dslrs",12);
        echo '</div>';


        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Digital Photo Frame</h2></div>';
        categoryname("digital_photo_frames",12);
        echo '</div>';

        echo '</div>';
    }

    //comparing with laptops category

    elseif($value=="laptops")
    {
        echo '<div class="container jumbotron" style="width:100%;margin-top:150px;" ><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;padding:0;"><h2>Laptops</h2></div>';
        categoryname("laptops",24);
        echo '</div>';

        echo '</div>';
    }

    //comparing with desktops category

    elseif($value=="desktops")
    {
        echo '<div class="container jumbotron" style="width:100%;margin-top:150px;" ><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;padding:0;"><h2>Desktops</h2></div>';
        categoryname("desktops",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Printer</h2></div>';
        categoryname("printers_multi",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Scanners</h2></div>';
        categoryname("scanners",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Projectors</h2></div>';
        categoryname("projectors",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Mouse</h2></div>';
        categoryname("mouse",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Keyboards</h2></div>';
        categoryname("keyboards",12);
        echo '</div>';

        echo '</div>';
    }

    //comparing with electronis category

    elseif($value=="electronics")
    {
        echo '<div class="container jumbotron" style="width:100%;margin-top:150px;" ><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;padding:0;"><h2>Pen Drives</h2></div>';
        categoryname("pen_drives",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Routers</h2></div>';
        categoryname("routers",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>External Hard Disk</h2></div>';
        categoryname("external_hard_disks",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Processor</h2></div>';
        categoryname("processors",12);
        echo '</div>';
    }

    //comparing with kitchen appliances category

    elseif($value=="kitchen")
    {
        echo '<div class="container jumbotron" style="width:100%;margin-top:150px;" ><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;padding:0;"><h2>Induction Cooktops</h2></div>';
        categoryname("induction_cooktops",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Mixer Grinder And Juicer</h2></div>';
        categoryname("mixer_grinder_juicer",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Coffee Makers</h2></div>';
        categoryname("coffee_makers",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Food Processors</h2></div>';
        categoryname("food_processors",12);
        echo '</div>';

        echo '</div>';
    }

    //comparing with printers category

    elseif($value=="printers")
    {
        echo '<div class="container jumbotron" style="width:100%;margin-top:150px;" ><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;padding:0;"><h2>Printers(Single)</h2></div>';
        categoryname("printers_single",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Printers(Multi)</h2></div>';
        categoryname("printers_multi",12);
        echo '</div>';

        echo '</div>';
    }

    //comparing with television category

    elseif($value=="television")
    {
        echo '<div class="container jumbotron" style="width:100%;margin-top:150px;" ><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;padding:0;"><h2>LCD TV</h2></div>';
        categoryname("lcd_tv",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>LED TV</h2></div>';
        categoryname("led_tv",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Plasma TV</h2></div>';
        categoryname("plasma_tv",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>CRT TV</h2></div>';
        categoryname("crt_tv",12);
        echo '</div>';

        echo '</div>';
    }

    //comparing with home category

    elseif($value=="home")
    {
        echo '<div class="container jumbotron" style="width:100%;margin-top:150px;" ><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;padding:0;"><h2>Home Theaters</h2></div>';;
        categoryname("home_theaters",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Video Players</h2></div>';
        categoryname("video_players",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Gaming Consoles</h2></div>';
        categoryname("gaming_consoles",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Washing Machine</h2></div>';
        categoryname("washing_machines",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Irons</h2></div>';
        categoryname("irons",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Water Purifiers</h2></div>';
        categoryname("water_purifiers",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Music System</h2></div>';
        categoryname("music_systems",12);
        echo '</div>';

        echo '<div class="container jumbotron" style="width:100%;"><div class="bg-primary" style="text-align: center;margin-top:0px; margin-right:0;margin-left:0;"><h2>Microwave Ovens</h2></div>';
        categoryname("microwave_ovens",12);
        echo '</div>';

        echo '</div>';
    }

    ?>

    <!--End of logic Section-->


    <!--Including footer.php file for footer section-->

    <?php include 'footer.php' ?>


</body>

<!--End Of Body Section-->

</html>

<!--End of category.php-->