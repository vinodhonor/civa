<?php
error_reporting(0);
include('config.php');
session_start();
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
	  <link rel="stylesheet" href="css/jquery-ui.css" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     
</head>	 

<body>
<div class="container">
	<?php
	if(isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) != '')) 
	{
	?>
	<h4>WELCOM</h4><a href="logout.php" style="float:right;"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
	<div class="well">
	<h2>Name:<?php echo $_SESSION['SESS_NAME'];?> </h2>
	<h2>Email:<?php echo $_SESSION['SESS_EMAIL'];?></h2>
	<h2>Password:<?php echo $_SESSION['SESS_PASSWORD'];?></h2>
	</div>
	<?php } ?>
	<div class="col-md-6 col-lg-12 col-sm-6 col-xs-6">
		<h3>Products</h3>
		<?php
		$query = "SELECT * from product";
			$result = mysql_query($query);
			if(!$result)
			{
			 echo 'Query Failed ';
			}
			if (mysql_num_rows($result) >= 1)//if Query is successfull 
			{
				$count=1;
				while($row = mysql_fetch_array($result))
				{
					if($count%1==0 && $count%6)
					{
					echo '<div class="col-md-12 col-sm-12 col-xs-12 col-lg-4 pull-left well ">';
					echo '<ul>';
					}
					?>
					<li><?php echo $row['product_name'];?></li>
					<?php
					if($count%1==0 && $count%6)
					{
					echo '</ul>';
					echo '</div>';
					}
				}
			}
			
		?>
	</div>
	<div class="col-md-6 col-lg-12 col-sm-6 col-xs-6">
		<h3>Items</h3>
		<?php
		$query = "SELECT * from list_items";
			$result = mysql_query($query);
			if(!$result)
			{
			 echo 'Query Failed ';
			}
			if (mysql_num_rows($result) >= 0)//if Query is successfull 
			{
				$count=1;
				while($row = mysql_fetch_array($result))
				{
					if($count%5==1 && $count%15)
					{
					echo '<div class="col-md-12 col-sm-12 col-xs-12 col-lg-4 pull-left well ">';
					echo '<ul>';
					}
					?>
					<li><?php echo $row['item_name'];?></li>
					<?php
					$count=$count+1;
					if($count%5==1 && $count%15)
					{
					echo '</ul>';
					echo '</div>';
					}
				}
			}
			
		?>
	</div>
	<div class="col-md-6 col-lg-12 col-sm-6 col-xs-6">
		<h3>Contents On Click</h3>
		<ul>
			<li id="1"><a href="#">Who we are</a></li>
			<li id="2"><a href="#">Our Philosophy</a></li>
			<li id="3"><a href="#">Our Approach</a></li>
			<li id="4"><a href="#">Services</a></li>
			<li id="5"><a href="#">Contact details</a></li>
		</ul>
	</div>
	<div class="col-md-6 col-lg-12 col-sm-6 col-xs-6" id="con1">
	<h3>Who we are</h3>
<p>Ours is a fervent digital agency that specializes in creating smart and easy-to-use services for the thriving digital world. We provide services that are exclusively designed and developed for customers of all domains. Our core competency is to create a modern and engaging websites; alongside we also excel in company branding and to identity design and development. We believe that pleasure in the job puts perfection to the work, and we really love what we do. Some of our customers contact us with a clear action plan, while others just have a wild idea on a napkin. Whether you have either of those or something in between, give us a call; we would love to shape your ideas into reality! Our goal is to produce digital solutions that look great and most of all help your business grow.</p>

<p>Our determination doesn’t vary with the size of the project, massiveness or atomicity; we try to reach success at every project to make our customers proud of choosing us. We are content enough to be proud of the smaller projects, and also house the expertise to take on challenging projects of almost any size. And we always look forward in working with our customers.</p>

	</div>
	<div class="col-md-6 col-lg-12 col-sm-6 col-xs-6 " id="con1">
	<h3>Our Philosophy</h3>
<p>We believe that our Clients come to us for effective ideas. Our sole purpose is to make an impact on each client’s business. We believe in quality design and innovative thinking and passionately taking a unique and creative approach to every project.</p>

	</div>
	<div class="col-md-6 col-lg-12 col-sm-6 col-xs-6 " id="con1">
	<h3>Our Approach</h3>

<p>We believe that working together is the key in making things better, and that is the approach we follow with our clients we “Get Involved”, we take ownership, responsibility and above all, take pride while working with our clients, we make sure we ask questions and find new ways to surprise, excite and delight them.</p>

	</div>
	<div class="col-md-6 col-lg-12 col-sm-6 col-xs-6 " id="con1">
	<h3>Services</h3>
<p>We produce services for companies of all sizes. New technology is the key element in our approach to design, and we enjoy developing innovative and easy to use digital solutions for Websites, Branding, Animation, Print; you name it.
1.	Web
a.	Websites
b.	E-mailers
c.	Social Media Banners
2.	Animation
a.	Business Explainer Video
b.	Product Demo
c.	Promotional Video
3.	Branding
a.	Logo
b.	Identity
c.	Stationary
d.	Packaging
4.	Print
a.	Infographics
b.	Publication

	</div>
	<div class="col-md-6 col-lg-12 col-sm-6 col-xs-6 " id="con1">
	Contact details
Civa Studios1st Floor,'Shami Parna',
Next to Jain International School, Lokappanhakkal, Vidyanagar, Hubli, Karnataka, India - 580029
(+91) 836-425-0460 hello@civastudios.com

	</div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/jquery-1.10.2.min.js"></script>
      <script src="js/jquery-ui.js"></script>
       <script src="js/bootstrap.min.js"></script>
    
      <script>
	  $(document).ready(function(){
	  
	  
	  
	  });
	  
	  </script>  
  </body>
  
 
</html>