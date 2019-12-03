
<!DOCTYPE html>
<html>
<head>
	<title>Pata Keja Project</title>
	<style type="text/css">
		#wrap{
			width: 60%;
		   margin: auto;
           min-width:850px;
		   }
		.items{background-color:#1589ff;
     color:#191970;
	 border-bottom:4px solid #154360;
	 text-align:center;}
	 #small{float: left;
	  width: 150px;
	  padding: 20px;
	  border-right:4px solid #154360;
	  background-color:white;
	  height:800px;
	  
	  
	  }
#small ul li a{text-decoration:none;}
#small ul{list-style-type:none;}
#small a{text-decoration:none;
         font-weight:bold;
		 color:#006600;}
		 body {background-color: #afdcec;
}	  
#large{height:800px;
       background-color:white;
       }
	</style>
</head>
<body>
<div id="wrap">
	<header class="items">
		<h1>PATA KEJA AGENCY</h1>
		<h2>Welcome to Administrator account</h2>
		<h3>The Ultimate Rental House Management </h3>
	</header>
	
   <nav id="small">
		<ul>
			<li><a href="adlogincontent.php">Home</a></li>&nbsp;
			<li><a href="houserecord.php">House Record</a></li>&nbsp;
			<li class="selected"><a href="registrationrecords.php">Registration Records</a></li>&nbsp;
			<li><a href="paymentrecords.php">Payment Records</a></li>&nbsp;
		</ul>
	</nav>
	
	<main id="large">
     <ul style="list-style-type: none;">
     	<li class="selected"><a href="tenant1.php">Winrose Njoroge</a></li>
     	<li><a href="tenant2.php">Mary Jacobs</a></li>
     	<li><a href="tenant3.php">Peter Otieno</a></li>
     </ul>
	</main>

</div>

</body>
</html>