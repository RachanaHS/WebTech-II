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
<style>
body {
  background-image: url('manali/man4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
div.c {
  text-align: justify; /* For Edge */
  -moz-text-align-last: center; /* For Firefox prior 58.0 */
  text-align-last: center;
}
</style>
<script>
		   var xhr=new XMLHttpRequest();
var file;
var n=0;
var n1=0;
function getcontent()
{
	xhr.onreadystatechange=showContent;
	xhr.open("GET","manali/descri.txt",true);
	xhr.send();
}
function showContent()
{
	if(xhr.readyState==4 && xhr.status==200)
	{
	var res=xhr.responseText;
	var resArr=res.split(";");
	document.getElementById("descri").innerHTML=resArr[0];
	document.getElementById("img").innerHTML=resArr[1];
	//document.getElementById("imgdes").innerHTML=resArr[1];
	
setTimeout(getPic,0000)
	}
}
function getPic()
{
n=n+1;
if(n<=4)
{
        
	xhr.onreadystatechange=showPic;
	xhr.open("GET","manali/content.php?count="+n+"&flag=1",true);
	xhr.send();
}
}
function showPic()
{
	if(xhr.readyState==4 && xhr.status==200)
	{
	document.getElementById("img").innerHTML=xhr.responseText;
	setTimeout(getLinks,1000);
	console.log(xhr.readyState);
	}
}	
function getLinks()
{
n1=n1+1;
if(n1<=4)
{
        
	xhr.onreadystatechange=showLinks;
	xhr.open("GET","manali/content.php?count="+n+"&flag=2",true);
	xhr.send();
}
}
function showLinks()
{
	if(xhr.readyState==4 && xhr.status==200)
	{
	document.getElementById("imgdes").innerHTML=xhr.responseText;
	setTimeout(getPic,1000);
	console.log(xhr.readyState);
	}
}
</script>
</head>
<body onload="getcontent()">
<div class="container" style="width:200px" id="descri">
<br>
</div>
<div class="container" style="width:200px" style="height:100px">
<br>
</div>
<div class="container" style="width:1400px" style="height:300px"id="img">
</div><br>
<div class="container" style="width:1400px" style="height:300px"id="imgdes"></div>
<br>
<div class="c"><p>
<b>Manali, the very name leaves a romantic impression in every Indian traveller’s mind. A domestic honeymoon getaway that has impressed the travellers for ages, Manali exudes a laid back vibe and exhibits enough of natural elements to catch the attention of any retreat seeker. Greenery enriched landscape, snow clad mountains, quaint locales and several adventure destinations make Manali the overwhelming favourite of the travellers. Also, the availability of all the key facilities required for enhancing the comfort level of travellers make Manali suitable for family vacations. So, if you are looking to spend your much awaited holidays in one of the quintessential hill stations of India, Manali should be your first pick.</b> </p>
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
						  <?php
						if(($row["h_name"])=="Hotel Crystal"){?>
							<a href="manali/1_1.php">Ratings and Reviews</a><?php } 
						else if(($row["h_name"])=="Hotel Inn"){?>
							<a href="manali/1_2.php">Ratings and Reviews</a>
						<?php }
						else if(($row["h_name"])=="Hotel Dunes"){?>
							<a href="manali/1_3.php">Ratings and Reviews</a>
					<?php } ?>
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