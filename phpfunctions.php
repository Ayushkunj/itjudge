<!--phpfunctions.php Page-->

<?php

//Function To Return Lowest Price Of a Product by Comparing prices of the product from various shopping website
function lowestprice($url)	{
	
	$a = 0;
	$prodata = file_get_contents($url);
	$pro = json_decode($prodata,true);
	$count = count($pro['product'][$a]['stores']);
	$low = $pro['product'][$a]['stores'][$a]['price'];

	for($j=1;$j<$count;$j++)	{
		$p = $pro['product'][$a]['stores'][$j]['price'];
		if($low > $p)	{
			$low = $p;
		}
	}
	return $low;
}
//End Of Function lowestprice()


//Funtion to retrieve all deatils of a products 

 function searchbykeyword($category,$product)	{
	
    $a=0;
    $url = "http://api.pricecheckindia.com/feed/product/".$category."/".$product.".json?user=ayushkr0&key=FQDFLHZVYOWKKVNK";
    $itemcoded = file_get_contents($url);
    $item = json_decode($itemcoded,true);
    $counts= count($item['product'][$a]['stores']);
    if($counts<=0)   {
        echo "<div style='padding-top:170px;'><h1>No Result Found For ".$product."</h1></div>";
        
    }
    else
    {
        $img = $item['product'][$a]['stores'][$a]['image'];
        if(!$img)   {
            
            $img = "images/oos.png";

        }

        $model = $item['product'][$a]['model'];
        $brand = $item['product'][$a]['brand'];
        //$id = $item['product']['id'];
        $web = $item['product'][$a]['stores'][$a]['website'];
        $price = lowestprice($url);
        
        echo '<div class="thumbnail">';

        echo "<div class='caption'><h2>".$brand."+".$model."</h2></div>";

        echo "<img src=".$img." />";

        echo "<div class='caption' ><p><h3>Lowest Price : Rs. ".$price."</h3></p><small>Seller : ".$web."</small></div></div>";


   }
    

}
 //End Of function searchbykeyword()



//Function to retrieve products information category wish

 function categoryname($category,$no)	{

     $jsondata = file_get_contents("http://api.pricecheckindia.com/feed/product/".$category.".json?user=ayushkr0&key=FQDFLHZVYOWKKVNK");
     $json1=json_decode($jsondata,true);
     $b=0;
     $count = 0;


     for($i=0;$i<$no;$i++) {
         $count++;
         
         $model = $json1['product'][$i]['model'];
         $brand = $json1['product'][$i]['brand'];
         //$ide = $json1['product'][$i]['id'];
         $producturl = "http://api.pricecheckindia.com/feed/product/".$category."/".$brand."+".$model.".json?user=ayushkr0&key=FQDFLHZVYOWKKVNK";
         $price = lowestprice($producturl);
         $web = seller($producturl);
         $img = $json1['product'][$i]['stores'][$b]['image'];
         if(!$img)  {
             $img="images/oos.png";
         }

         echo "<a href='search2.php?category=".$category."&item=".$brand."+".$model."' ><div class='col-md-2 container' style='width:240px;height:450px;'><div class='thumbnail'><img class='img-responsive' src=".$img."  style='object-fit: cover;overflow: hidden; padding:3px;' /><div class='caption'><center><p><h4>".$brand." ".$model."</h4></p><p><h4>Rs. ".$price."</h4></p><p><small>Seller :".$web."</small></p></center></div></div></div></a>";

     }
       

 }

 //End of function categoryname



//Function to retrieve seller selling the product in lowest price compare to other

 function seller($url)	{

     $a = 0;
     $prodata = file_get_contents($url);
     $pro = json_decode($prodata,true);
     $count = count($pro['product'][$a]['stores']);
     $low = $pro['product'][$a]['stores'][$a]['price'];
     $web = $pro['product'][$a]['stores'][$a]['website'];
     for($j=1;$j<$count;$j++)	{
         $p = $pro['product'][$a]['stores'][$j]['price'];
         if($web > $p)	{
             $low= $p;
             $web = $pro['product'][$a]['stores'][$j]['website'];

         }
     }
     return $web;
 }

 //End Of seller()



?>

<!--End Of phpfunctions.php-->

