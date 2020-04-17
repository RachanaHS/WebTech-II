<html>
<head>
<style>
body {
  background-image: url('man4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  var btn = document.createElement("p");
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
<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td>
<div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo(100*round($yes/($no+$yes),2)); ?>%">
    </div>
  </div>
</td>
</tr>
<tr>
<td>No:</td>
<td>
<div class="progress">
    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo(100*round($no/($no+$yes),2)); ?>%">
      <span class="sr-only">70% Complete</span>
    </div>
  </div>
</td>
</tr>
</table>
<div id="poll">
<h3>Did you enjoy your stay at the hotel?</h3>
<form>
Yes:
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>No:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>

  <h2>Basic Progress Bar</h2>

  
</div>
<input type="text" id="fname" name="fname"><br><br>
<input type="submit" value="Submit" onclick="myFunction()">
</body>
</html>