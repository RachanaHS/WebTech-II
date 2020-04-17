 <?php   
 $connect = mysqli_connect("localhost", "root", "", "tms");  
 $query = "SELECT * FROM hotels ORDER BY h_price desc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Hotels in Manali</title>  
		   <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
			<meta content="utf-8" http-equiv="encoding">
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="
		   https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
		   
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:300px;">  
                <br />  
                <h3 align="center">Hotels In Manali</h3>  
                <br />  
                <div align="left">  
                     <input type="range" min="6500" max="55000" step="1000" value="6500" id="min_price" name="min_price" />  
                     <span id="price_range"></span>  
                </div>  
                <br /><br /><br /> 
				 
			</div>
			<div class="container" style="width:800px;"> 
                <div id="hotels_loading">  
                <?php  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <div style="border:3px solid #ccc; padding:12px; margin-bottom:16px; height:375px;width:250px;" align="center">  
                            
                          <h3 style="color:blue"><?php echo $row["h_name"]; ?></h3>
						  <img src="<?php echo $row["h_images"];?>" class="img-responsive" />
						  <h4><b>Features:</b>  <?php echo $row["h_features"]; ?></h4> 
                          <h4><b>Price :</b><?php echo $row["h_price"]; ?>/person</h4>
                     </div> 
                </div> 	
                <?php 
                     }
                } 
                ?>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#min_price').change(function(){  
           var price = $(this).val();  
           $("#price_range").text("hotels under Price Rs." + price);  
           $.ajax({  
                url:"hotels.php",  
                method:"POST",  
                data:{price:price},  
                success:function(data){  
                     $("#hotels_loading").fadeIn(500).html(data);  
                }  
           });  
      });  
 });  
 </script>  