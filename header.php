<!--header.php-->


<!--Navigation Header  -->

<nav class="navbar navbar-fixed-top navbar-">

    <header class="container bg-primary" style="width:100%;">
        <a class="navbar-brand" href="index.php"><h4><b style="color:white; padding-left:70px;">judgeit</b><small style="color:white"> ( A Shopping Comparison Solution )</small></h4></a>
        <form class="navbar-form navbar-right" action="search.php" method="POST">
            <select name="category" style="height:34px;max-height:initial;min-height:20px; color:black;" required="required">
                <option value="mobile_phones">Mobile</option>
                <option value="tablets">Tablets</option>
                <option value="pen_drives">Pen Drives</option>
                <option value="laptops">Laptops</option>
                <option value="desktops">Desktops</option>
                <option value="printers_multi">Printers</option>
                <option value="lcd_tv">LCD Tv</option>
                <option value="dslrs">DSLRS</option>
                <option value="irons">Irons</option>
                <option value="electric_cookers">Camera</option>
                <option value="induction_cooktops">Electronics</option>
                <option value="kitchen">Kitchen Apps.</option>
                <option value="home">Home Apps.</option>
                <option value="camera">Camera</option>
                <option value="gaming consoles">Gaming Consoles</option>
                <option value="">Camera</option>

            </select>
            <input type="text" name="item" class="form-control" placeholder="Search..." style="width:500px;color:blue" required="required">
            <input type="submit" value="Search" style="height:34px; color:black">
        </form>
    </header>
<!--End Of Navigation Header-->


<!--Navigation Menu-->

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><h3>All Categories</h3></li>
                    <li><a href="category.php?value=mobile">Mobile</a></li>
                    <li><a href="category.php?value=laptops">Laptops</a></li>
                    <li><a href="category.php?value=desktops">Desktops</a></li>
                    <li><a href="category.php?value=printers">Printers</a></li>
                    <li><a href="category.php?value=television">Televisions</a></li>
                    <li><a href="category.php?value=electronics">Electronics</a></li>
                    <li><a href="category.php?value=kitchen">Kitchen Appliances</a></li>
                    <li><a href="category.php?value=home">Home Appliances</a></li>
                    <li><a href="category.php?value=camera">Camera</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!--End Navigation Menu-->

</nav>

<!--End of header.php page-->
