<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | How to load Product on price change using Ajax Jquery with PHP Mysql</title>  
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="
		   https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
		   
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head> 
 
	 <body>
<?php  
 //load_product.php  
 $connect = mysqli_connect("localhost", "root", "", "tms");
 if(isset($_POST["price"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM hotels WHERE h_price <= ".$_POST['price']." ORDER BY h_price desc";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
				$img=$row["h_images"];
                $output .='  
                     <div style="border:2px solid #ccc; padding:12px; margin-bottom:16px; height:375px;width:300px;" align="center">           
                               <h3 style="color:blue">'.$row["h_name"].'</h3>				   
							    <img src="'.$row["h_images"].'" class="img-responsive" />
								<h4><b>Features:</b>'.$row["h_features"].'</h4> 
                               <h4><b>Price :</b>'.$row["h_price"].'/person</h4>  
                          </div>  
                     </div>  
                ';  
           }  
      }  
      else  
      {  
           $output = "No Product Found";  
      }  
      echo $output;
 }  
 ?>  
 </body>