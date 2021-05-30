<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
    $query = "
		SELECT * FROM product WHERE product_status = '1'
	";
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
        $query .= "
		 AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
    }
    if(isset($_POST["brand"]))
    {
        $brand_filter = implode("','", $_POST["brand"]);
        $query .= "
		 AND product_brand IN('".$brand_filter."')
		";
    }
    if(isset($_POST["ram"]))
    {
        $ram_filter = implode("','", $_POST["ram"]);
        $query .= "
		 AND product_ram IN('".$ram_filter."')
		";
    }
    if(isset($_POST["storage"]))
    {
        $storage_filter = implode("','", $_POST["storage"]);
        $query .= "
		 AND product_storage IN('".$storage_filter."')
		";
    }

    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output = '';
    if($total_row > 0)
    {
        foreach($result as $row)
        {
            $output .= '
			<div class="col-sm-6 col-lg-5 col-md-5">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img src="image/'. $row['product_image'] .'" alt="" class="img-responsive" >
					<p align="center"><strong><a href="https://www.coursera.org/?ranMID=40328&ranEAID=5O34HASJ60g&ranSiteID=5O34HASJ60g-IhOovQd30nGhGCKX0Sc8tw&siteID=5O34HASJ60g-IhOovQd30nGhGCKX0Sc8tw&utm_content=10&utm_medium=partners&utm_source=linkshare&utm_campaign=5O34HASJ60g">'. $row['product_name'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row['product_price'] .'</h4>
					<p> '. $row['product_camera'].' <br />
					 '. $row['product_brand'] .' <br />
					 '. $row['product_ram'] .' <br />
					 '. $row['product_storage'] .'</p>
				</div>

			</div>
			';
        }
    }
    else
    {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}

?>