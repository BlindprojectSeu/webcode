<div style="background-image: url('images/544.jpg');background-size: cover;background-attachment: fixed;background-repeat: no-repeat;">
	
<div style="width: 100%;  background-color:rgba(10,54,108,0.7);" >
		<div class="container-fluid" style="padding-bottom:8px;">
    		<div style="height: 30px;"></div>
    		<div class="row">
    			
    			<div class="col-md-4 col-sm-12">
    				<h3 style="color: white;">Navigation</h3>
            <ul style="list-style-type: none;">
  <li ><i class="fa fa-angle-double-right text-warning"></i>
   <a style="color: white" class=" " href="index.php"> Home</a> </li>
  <li><i class="fa fa-angle-double-right text-warning"></i> <a href=""><a style="color: white;" href="index.php#about"> About Us</a></a></li>

  <li><i class="fa fa-angle-double-right text-warning"></i>
    <a style="color: white;" href="index.php#contact"> Contact Us</a></li>

</ul>
    			</div>

    			<div class="col-md-4 col-sm-12" style="height: 240px;">
    						<h3 class="text-white">Contact Us </h3>
    				<p class="text-justify text-white">
    				
    				</p>
    				
 <span><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 20px; " class=" fa fa-phone"></i> +964 751 786 3790</a></span><br><br>

            <span style="color: white"> <i style="color:#D69B25;font-size: 20px; " class=" fab fa-whatsapp"></i> +964 751 786 3790</span><br>
            <br>

    					<span><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 20px; " class=" fab fa-whatsapp"></i> +964 751 786 3790</a></span><br><br>
    					

    					<span style="color: white"> <i style="color:#D69B25;font-size: 20px; " class=" fa fa-envelope"></i> info@BlindOrder.com</span>
    					<br>
    					<br>
    			</div>

    			<div class="col-md-4 col-sm-12">
    				<ul class="social1">
    					<h3 class="text-white">Follow Us</h3>
			<li><a href="https://www.facebook.com/Citizenships-104622184526249" style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-facebook"></i>  info@BlindOrder.com</a></li><br>
			<li><a href="https://www.twitter.com/Citizenshipsae"  style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-twitter"></i> info@BlindOrder.com</a></li><br>
			
			<li><a href="https://www.instagram.com/Citizenships.ae"  style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-instagram"></i> Blind Order</a></li><br>
			
	
		</ul>
    			</div>
    		
    		</div>
    	</div>
    </div>
</div>

<div style="height: 40px;background-color:#10305a;padding-top: 6px; ">
	<p class="text-center text-warning">All Right Reserved To BlindOrder <i class="fa fa-heart"></i> 2021</p>

</div>

 <div id="WAButton"></div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>

 </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script type="text/javascript">
	$(function() {
  $('#WAButton').floatingWhatsApp({
    phone: '009647517863790', //WhatsApp Business phone number International format-
    //Get it with Toky at https://toky.co/en/features/whatsapp.
    headerTitle: 'Chat with us on WhatsApp!', //Popup Title
    popupMessage: 'Hello, how can we help you?', //Popup Message
    showPopup: true, //Enables popup display
    buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
    //headerColor: 'crimson', //Custom header color
    //backgroundColor: 'crimson', //Custom background button color
    position: "left"    
  });
});



	$(document).ready(function(){
		$("#bb").click(function(){
			$("#xx").slideToggle(1000);
		});
	});
</script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");
var sp = document.getElementById("sp");
// When the user scrolls down 20px from the top of the document, show the button

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
     sp.style.display = "block";
      document.getElementById("navbar").style.height = "auto";
    document.getElementById("logo").style.height = "69px";
     document.getElementById("logo").style.width = "95px";
     document.getElementById("nn").style.fontSize = "20px";
  } else {
    sp.style.display = "none";
  document.getElementById("navbar").style.height = "auto";

   document.getElementById("logo").style.height = "100px";
     document.getElementById("logo").style.width = "150px";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
} 
</script>
 </body>
</html>

 <?php include'conn.php';

$name=isset($_POST['n'])?$_POST['n']:'';

$email=isset($_POST['e'])?$_POST['e']:'';
$sub=isset($_POST['s'])?$_POST['s']:'';
$msg=isset($_POST['msg'])?$_POST['msg']:'';
$dt=date("Y-m-d");
if(isset($_POST['btn']))
{
$to = "debowfadi@gmail.com,fadi.debow16@gmail.com,debowfadi@gmail.com";
$subject =$sub;
$txt = $msg;
$headers = "From:". $email . "\r\n" .
"CC: debowfadi@gmail.com";

mail($to,$subject,$txt,$headers);


$r=mysqli_query($con,"insert into msg(name,email,subject,message,dt)
  values('$name','$email','$sub','$msg','$dt')");


if(isset($r))
{
echo '<script type="text/javascript">toastr.success("Send Successfully <br> thanks for communication");</script>';

}
else{
  echo '<script type="text/javascript">toastr.error("Send failed...try again");</script>';

}
}

ob_end_flush();

?>