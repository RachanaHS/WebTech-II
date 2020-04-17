<html>
<head>
<style>
body {
  background-image: url('back1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
p.one
{
	border-style:solid;
	border-width:3px;
}
.ridge {border-style: ridge;}
</style>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {  // 
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
function myFunction() {
  var txt=document.getElementById("fname").value;
  var btn = document.createElement("h6");
  btn.setAttribute("class", "ridge");
  btn.innerHTML = txt;
  document.body.appendChild(btn);
}
</script>
</head>
<body>
<?php
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];
?>
<div id="poll">
<h3 style="color:grey">&nbsp;&nbsp;Did you enjoy your stay at the hotel?</h3>
<form>
Yes:
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>No:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>
<h4 style="color:grey">Result:</h4>
<table>
<tr>
<td>Yes:</td>
</tr>
</table>
<div class="progress" style="width:30%">
    <div class="progress-bar bg-success" style="width:<?php echo(100*round($yes/($no+$yes),2)); ?>%">
      <span class="sr-only">70% Complete</span>
    </div>
  </div>
</div>
<table>
<tr>
<td>No:</td>
</tr>
</table>
<div class="progress" style="width:30%">
    <div class="progress-bar bg-danger" style="width:<?php echo(100*round($no/($no+$yes),2)); ?>%">
      <span class="sr-only">70% Complete</span>
    </div>
  </div>
</div>
<br/>
  <h3 style="color:grey">&nbsp;&nbsp;Write Your Review</h3>
&nbsp;&nbsp;<input type="text" id="fname" name="fname"><br><br>
&nbsp;&nbsp;<input type="submit" value="Submit" onclick="myFunction()">
<br/>
<br/>
<div id="reviews"></div>
<h6><p class="ridge">Rohan Says:<br/>
Manali is tha famouse place of india for all the tourist .Recently I visit this and it was damn beautiful.</p></h6>
<h6><p class="ridge">Aditi Says:<br/>
Manali is a beautiful hill station in himachal pradesh. I went to manali with my college friends. It was really a fun. First off all the mall road was nearby to the bus stop. And you can find accomodation and dining facilities nerby. We had no difficulties in finding the hotels </p></h6>
<h6><p class="ridge">Rita Says:<br/>
I & my family have been in Manali for last 3 days. I am extremely disappointed with the infrastructure of this place. Roads are narrow & in terrible condition. There are traffic jams everywhere 
</p></h6>
<h6><p class="ridge">Tharun Says:<br/>
Beautiful no doubt. But very much over crowded. Hotel rate is thrice or even more. Local sight seeing like solang trip takes a lot money. Too much traffic to rohtang pass. Mall road is thickly crowded. 
<br/></p></h6>
<h6><p class="ridge">Anushka Says:<br/>
Enough is truly not enough when nature wraps its arms around you - letting go is up to you though - Wonderful place to visit visit with family and friends. Best time of the year is November to January- Go places, enjoy mother nature!</p></h6>
<h6><p class="ridge">Rohan Says:<br/>
Manali is tha famouse place of india for all the tourist .Recently I visit this and it was damn beautiful.</p></h6>
<h6><p class="ridge">Rachana Says:<br/>
Manali is the most chillaxing and rejuvinating place in india. I visited Manali last year and planing to visit it this year too. One advice if u are wishing to visit goa on season kindly do the hotel or resort bookings in advance other wise they will become too costly.</p></h6>
<h6><p class="ridge">Preethi Says:<br/>
Manali is tha famouse place of india for all the tourist .Recently I visit this and it was damn beautiful.</p></h6>
</div>
</body>
</html>