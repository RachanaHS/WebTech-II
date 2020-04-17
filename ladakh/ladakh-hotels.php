 <?php
error_reporting(0);
include('newindex2.php'); 
 $connect = mysqli_connect("localhost", "root", "", "tms");  
 $query = "SELECT * FROM l_hotels ORDER BY h_price desc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Hotels in Ladakh</title>  
		   <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
			<meta content="utf-8" http-equiv="encoding">
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="
		   https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
		   
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
body {
  background-image: url('back1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
div.c {
  text-align: justify; /* For Edge */
  -moz-text-align-last: center; /* For Firefox prior 58.0 */
  text-align-last: center;
}


/* Header/Logo Title */
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}
.rssitem{
            border: 1px solid black;
            padding: 20px;
	    margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 5px 10px #888888;
             box-shadow: 5px 10px #888888;
        }
        .rssTitle{
            text-decoration: underline solid;
            font-size: 30px;
	    font-weight:1000;
            color: violet ;
</style>
<script>
function start()
{
	getcontent();
	getRssFeed();
}
		   var xhr=new XMLHttpRequest();
var file;
var n=0;
var n1=0;
function getcontent()
{
	xhr.onreadystatechange=showContent;
	xhr.open("GET","descri.txt",true);
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
	xhr.open("GET","content.php?count="+n+"&flag=1",true);
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
	xhr.open("GET","content.php?count="+n+"&flag=2",true);
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
        var ttl = 2;
        
            var xml = null;
            getRssFeed =  function()
            {

                console.log("called TTL: "+ ttl);
                var divRss = document.getElementById("divRss");
                divRss.innerHTML = "";
                this.xml = new XMLHttpRequest();
                this.xml.open("GET", "ladakh.php", true);
                this.xml.onreadystatechange = this.displayRssFeed;
                this.xml.send();
            }

            function readMore(i)
            {
                console.log(i);
                console.log("i have been called");
                var desItem = document.getElementById("item"+i);
                desItem.innerHTML = localStorage.getItem("item"+i);
                var anchorItem = document.getElementById("anchor"+i);
                anchorItem.style.display="none";
            }

            displayRssFeed = function()
            {
                var divRss = document.getElementById("divRss");
                if(this.readyState == 4 && this.status == 200)
                {
                    var rootRss = this.responseXML.documentElement;
                     ttl = parseInt(rootRss.getElementsByTagName("ttl")[0].innerHTML);

                    var rssItems = rootRss.getElementsByTagName("item");
          
                    for(var i=0; i<rssItems.length; ++i)
                    {
                        item = rssItems[i];
                        title = item.getElementsByTagName("title")[0].innerHTML;
                        description = item.getElementsByTagName("description")[0].innerHTML;
                        link = item.getElementsByTagName("link")[0].innerHTML;
                        console.log(link);
                        var divItem = document.createElement("div");
                        var divTitle = document.createElement("a");
                        divTitle.href = link;
                        divTitle.innerHTML = title;
                        var divDescription = document.createElement("p");
                        divDescription.innerHTML = description;
                        divDescription.id = "item"+i;
                        divItem.className = "rssitem";
                        divTitle.className = "rssTitle";
                        divItem.appendChild(divTitle);
                        divItem.appendChild(divDescription);
                        divRss.appendChild(divItem);
                        divRss.innerHTML+="<br>";
                    }
                }
            }
</script>
</head>
<body onload="start()">
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
<b>Ladakh region witnesses summer season between the months of April and September and this is the best time to visit Ladakh. This is the time when Ladakh experiences sunny days and the temperature lies around 20 to 30 degree Celsius.  The views are lovely and clear, and the nights are very pleasant. In the summer months, the two road approaches to Ladakh, the Srinagar-Leh Highway and the Manali-Leh Highway get cleared of snow and become motorable. Ladakh is visited by tourists and trekkers alike during this time. Along with sightseeing, one can also partake in adventure activities. The rains are occasional. From November to March, the place experiences heavy snowfall and becomes inaccessible by road. However, during the winter months, Ladakh can be accessed by air and is visited by a trekking enthusiasts as it is quite popular for its winter treks. The temperature goes below zero degrees many time and the weather is extremely chilly.</b> </p>
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
						if(($row["h_name"])=="Hotel Shaolin"){?>
							<a href="1_1.php">Ratings and Reviews</a><?php } 
						else if(($row["h_name"])=="Hotel Stupa"){?>
							<a href="1_2.php">Ratings and Reviews</a>
						<?php }
						else if(($row["h_name"])=="Hotel Arya"){?>
							<a href="1_3.php">Ratings and Reviews</a>
					<?php } ?>
                     </div> 
                </div> 	
                <?php 
                     }
                } 
                ?>  
                </div>  
           </div>  
      

<div class="header">
  <button type="button"><a href="http://localhost/tms/package-details.php?pkgid=11<?php echo htmlentities($result->PackageId);?>">Book Now</a></button>
  <h1>PLACES YOU WILL ENJOY NEAR BY</h1>
</div>
    <div id="divRss">

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