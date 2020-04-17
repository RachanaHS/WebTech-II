<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Tourism Management System</title>
<style>
#outer
{
	font-size:30px;
	height:50px;
	border-top:5px solid black;
	border-bottom:5px solid black;
	border-left:transparent;
	border-right:transparent;
}
#inner
{
	position:absolute;
	white-space:nowrap;
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
function init()
{
	obj=new News();
	obj.divinner=document.getElementById("inner");
	obj.divinner.style.left=window.innerWidth-5+"px";
	obj.scroll();
	setInterval(obj.getNews,5000);//5 seconds once
}
function News()
{
	this.getNews=function()
	{
		xhr=new XMLHttpRequest();
		xhr.onreadystatechange=obj.processNews;
		xhr.open("GET","test17.php",true);
		xhr.send();
	}
	this.processNews=function()
	{
		if(xhr.readyState==4 && xhr.status==200)
		{
			root=this.responseXML.documentElement;
			item=root.getElementsByTagName("item")[0];
			title=item.getElementsByTagName("title")[0];
			link=item.getElementsByTagName("link")[0];
			anchor=	document.createElement("a");
			anchor.href=link.firstChild.nodeValue;
			anchor.innerHTML=link.firstChild.nodeValue;
			obj.divinner.innerHTML="";
			obj.divinner.appendChild(anchor);
		}
	}
	this.scroll=function()
	{
		if(obj.divinner.offsetLeft+obj.divinner.offsetWidth <2)
		{
			obj.divinner.style.left=window.innerWidth-5+"px";
		}
		else
		{
			obj.divinner.style.left=obj.divinner.offsetLeft-4+"px";
		}
		setTimeout(obj.scroll,30);
	}
}
	</script>
<!--//end-animate-->
</head>
<body>

<body onload="init()">
<?php include('includes/header.php');?>
<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Travel and Tourism </h1>
	</div>
</div>


<body onload="init()">
<div id="outer">
<div id="inner">A TRAVEL ENTHUSIAST ?? GET SOME EXCITING NEWS HERE</div>
</div>


<!--- rupes ---->
<div class="container">
	<div class="rupes">
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<img src="chatbot.png" width="70" height="70">
				<a href="chatbot.html"></a>
			</div>
			<div class="rup-rgt">
				<h3>NEED ANY SUGGESTIONS</h3>
				<h4><a href="chatbot.html">CHAT WITH OUR BOT</a></h4>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<img src="index.png" width="70" height="70">
				<a href="offers.html"></a>
			</div>
			<div class="rup-rgt">
				<h3>CHECK PLACES</h3>
				<h4><a href="https://www.google.com/maps">GOOGLE MAPS</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
	
	</div>
</div>
<!--- /rupes ---->
<h3>Top Holiday Places</h3>

					
<?php $sql = "SELECT * from tbltourpackages where PackageId in (12,7,8,11)";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Price/person: <?php echo htmlentities($result->PackagePrice);?></h6>
					<p><b>Features:</b> <?php echo htmlentities($result->PackageFetures);?></p>
					<?php
					if(($result->PackageName)=="Manali"){?>
					<a href="manali/new1.php">Know More</a><?php } 
					else if(($result->PackageName)=="Thailand"){?>
						<a href="Thailand/thailand-hotels.php">Know More</a>
					<?php }
					else if(($result->PackageName)=="Kerala"){?>
						<a href="Kerala/kerala-hotels.php">Know More</a>
					<?php }
					else if(($result->PackageName)=="Jaipur"){?>
						<a href="3.php">Know More</a>
					<?php } 
					else if(($result->PackageName)=="Goa"){?>
						<a href="Goa/goa-hotels.php">Know More</a>
					<?php } 
					else if(($result->PackageName)=="Andaman"){?>
						<a href="ladakh/ladakh-hotels.php">Know More</a>
					<?php } 
					else if(($result->PackageName)=="Ladakh"){?>
						<a href="ladakh/ladakh-hotels.php">Know More</a>
					<?php } 
					else if(($result->PackageName)=="Kashmir"){?>
						<a href="ladakh/ladakh-hotels.php">Know More</a>
					<?php } 
					?>
					
			</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
<div><a href="package-list.php" class="view">View More Packages</a></div>
</div>
			<div class="clearfix"></div>
	</div>




<!---holiday---->
<div class="container">
	<div class="holiday">
	



<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>80000</h3>
				<p>Enquiries</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1900</h3>
				<p>Regestered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,00,00,000+</h3>
				<p>Booking</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>
