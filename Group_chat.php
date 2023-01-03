<?php
include_once("topnav.php");
include_once("sidenav.php");
include 'config.php';

$moviename1;


if(isset($_GET['watchparty'])){
	$moviename1=$_GET['watchparty'];

	
	$sql = "SELECT * FROM `movie_info` WHERE 1";
	$result1 = mysqli_query($conn, $sql);
	$vid;
	while ($row = mysqli_fetch_array($result1) ) { 
 
	   if($row['movie_name']==$moviename1){
		   
		   $vid=$row['movie_clip'];
	   }
  

  

}

	
}


          date_default_timezone_set("Asia/Dhaka");   
          $curmin=date("i");
          $cursec=date("s");
         



		  $sql2 = "SELECT * FROM `watchparty` WHERE `moviename`='$moviename1'";
		  $result2 = mysqli_query($conn, $sql2);
		  while ($row2 = mysqli_fetch_array($result2) ) { 
	   
			
				 
				 $startmin=$row2['min'];
				 $startsec=$row2['sec'];

			 }
		
	  
		
	  
	  
















$_SESSION['Glomoviename'] = $moviename1;

if (isset($_POST['submit'])){
/* Attempt MySQL server connection. Assuming
you are running MySQL server with default
setting (user 'root' with no password) */
$link = mysqli_connect("localhost",
			"root", "", "cinephilesdb");

// Check connection
if($link === false){
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
}

// Escape user inputs for security
$un= mysqli_real_escape_string(
	$link, $_REQUEST['uname']);
$m = mysqli_real_escape_string(
	$link, $_REQUEST['msg']);
date_default_timezone_set('Asia/Kolkata');
$ts=date('y-m-d h:ia');

// Attempt insert query execution
$sql = "INSERT INTO chats (uname, msg, dt)
		VALUES ('$un', '$m', '$ts')";
if(mysqli_query($link, $sql)){
	;
} else{
	echo "ERROR: Message not sent!!!";
}
// Close connection
mysqli_close($link);
}
?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>CINEPHILES</title>
<style>
*{
	box-sizing:border-box;
}
body{
	background-color:#abd9e9;
	font-family:Arial;
}



.container-Streaming{
       
	   display: grid;
	   grid-template-columns: 2fr 1fr;
	   gap: 15px;
	   align-items: flex-start;
	   padding: 5px 5%;

   }
   .container-Streaming .main-video{
	   background: #fff;
	   border-radius: 5px;
	   padding: 10px;
   }
   .container-Streaming .main-video video{
	  width: 100%;
	   border-radius: 5px;
   }
   .container-Streaming .main-video .title{
	   color: #333;
	   font-size: 23px;
	   padding-top: 15px;
	   padding-bottom: 15px;
	  
   }



#container{
	width:500px;
	height:700px;
	background:white;
	margin:0 auto;
	margin-left:10%;
	font-size:0;
	border-radius:5px;
	overflow:hidden;
}
main{
	width:500px;
	height:700px;
	display:inline-block;
	font-size:15px;
	vertical-align:top;
}
main header{
	height:100px;
	padding:30px 20px 30px 40px;
	background-color:#622569;
}
main header > *{
	display:inline-block;
	vertical-align:top;
}
main header img:first-child{
	width:24px;
	margin-top:8px;
}
main header img:last-child{
	width:24px;
	margin-top:8px;
}
main header div{
	margin-left:90px;
	margin-right:90px;
}
main header h2{
	font-size:25px;
	margin-top:5px;
	text-align:center;
	color:#FFFFFF;
}
main .inner_div{
	padding-left:0;
	margin:0;
	list-style-type:none;
	position:relative;
	overflow:auto;
	height:500px;
	background-image:url(
https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200911064223/bg.jpg);
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;
	position: relative;
	border-top:2px solid #fff;
	border-bottom:2px solid #fff;
	
}
main .triangle{
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 8px 8px 8px;
	border-color: transparent transparent
	#58b666 transparent;
	margin-left:20px;
	clear:both;
}
main .message{
	padding:10px;
	color:#000;
	margin-left:15px;
	background-color:#58b666;
	line-height:20px;
	max-width:90%;
	display:inline-block;
	text-align:left;
	border-radius:5px;
	clear:both;
}
main .triangle1{
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 8px 8px 8px;
	border-color: transparent
	transparent #6fbced transparent;
	margin-right:20px;
	float:right;
	clear:both;
}
main .message1{
	padding:10px;
	color:#000;
	margin-right:15px;
	background-color:#6fbced;
	line-height:20px;
	max-width:90%;
	display:inline-block;
	text-align:left;
	border-radius:5px;
	float:right;
	clear:both;
}

main footer{
	height:150px;
	padding:20px 30px 10px 20px;
	background-color:#622569;
}
main footer .input1{
	resize:none;
	border:100%;
	display:block;
	width:120%;
	height:55px;
	border-radius:3px;
	padding:20px;
	font-size:13px;
	margin-bottom:13px;
}
main footer textarea{
	resize:none;
	border:100%;
	display:block;
	width:130%;
	height:55px;
	border-radius:3px;
	padding:20px;
	font-size:13px;
	margin-bottom:13px;
	margin-left:20px;
}
main footer .input2{
	resize:none;
	border:100%;
	display:block;
	width:40%;
	height:55px;
	border-radius:3px;
	padding:20px;
	font-size:13px;
	margin-bottom:13px;
	margin-left:100px;
	color:white;
	text-align:center;
	background-color:black;
	border: 2px solid white;
}

main footer textarea::placeholder{
	color:#ddd;
}

</style>
<body onload="show_func()">

<div class="container-Streaming">
       <div class="main-video">
        <div class="video">
            <video  id="video1" src="Movie_CLIP/<?php echo $vid;?>" controls autoplay></video>
            <h3 id="moviename" class="title">
			<?php if(isset($moviename1)){
                    echo  "Movie Name: ".$moviename1;
    
                    }
                    ?>
			</h3>

        </div>
       </div>





<div id="container">
	<main>
		<header>
			<img src="https://s3-us-west-2.amazonaws.com/
			s.cdpn.io/1940306/ico_star.png" alt="">
			<div>
				<h2>GROUP CHAT</h2>
			</div>
			<img src="https://s3-us-west-2.amazonaws.com/
			s.cdpn.io/1940306/ico_star.png" alt="">
		</header>

<script>


function show_func(){

var element = document.getElementById("chathist");
	element.scrollTop = element.scrollHeight;

}

setInterval(show_func,500);



</script>

<!-- <form id="myform" action="Group_chat.php" method="POST" > -->
<div class="inner_div" id="chathist">
<!-- //copy for another reload.php page -->


</div>
	<footer>
		<table>
		<tr>
		<th>
			<input style="display:none" class="input1" type="text"
					id="uname" name="uname"
					placeholder="From" value="<?php if(isset($moviename1)){
                    echo  $moviename1;
    
                    }
                    ?>">
		</th>
		<th>
			<textarea id="msg" name="msg"
				rows='3' cols='50'
				placeholder="Type your message">
			</textarea></th>
		<th>
			<input class="input2" type="submit"
			id="submit" name="submit" value="send" onclick="upComment()" >
		</th>			
		</tr>
		</table>			
	</footer>

</main>
</div>

</div>


<script>
	const upComment = () =>{

		// console.log("inside ajax");
		const msg = document.getElementById("msg").value;
		const moviename = document.getElementById("uname").value;
		// alert(moviename)

		$.post("adding_ajax.php",
  		{
    		sms: msg,
			moviename:moviename
  		},
  		function(data, status){
			

			var getValue= document.getElementById("msg");
            if (getValue.value !="") {
                   getValue.value = "";
                 }

			


  		});

	}


	function refresh_box() 
{
	

    $("#chathist").load('reload.php');
    setTimeout(refresh_box, 600);
}

$(document).ready(function(){
   refresh_box();
});

   
  

</script>


<script>
    
    const moviename = "<?php echo $moviename1; ?>";
    const curmin = "<?php echo $curmin; ?>";
    const cursec = "<?php echo $cursec; ?>";
    const smin = "<?php echo $startmin; ?>";
    const ssec = "<?php echo $startsec; ?>";

    var curTotalsec=(curmin*60)
	curTotalsec=Number(curTotalsec)+Number(cursec);
	var sTotalsec=(smin*60);
	sTotalsec=Number(sTotalsec)+Number(ssec);

	var dif=Number(curTotalsec)-Number(sTotalsec);
	var tt=20;
	// alert(curmin+" "+cursec+" "+smin+" "+ssec+" "+dif);

	

document.getElementById("video1").addEventListener("loadedmetadata", function() {
     this.currentTime = dif;
}, false);

</script>

</body>
</html>

