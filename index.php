<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="php/index.css">
    <style></style>
</head>
 
<body>    
  
<section id="page_margin">

        <section id="header">
            <div>
                <img  src="image/logo4.png" class="logo">
            </div>
            <div> 
                <ul class="navigate">
                    <li><a class="active" href="index.php" > HOME </a></li>
                    <li><a href="php/user_signup.php" > Sign up </a></li>
                     
                    
                    <!-- <li><a href="myaccount.html"> My Acount </a></li>
                    <li><a href="admin_login.php"> Admin </a></li>
                     -->
                </ul>
            </div>
        </section>
        
        <section id="header_next">
            <div > 
                <h1>Book your flight now</h1>
            </div>  
        </section>
 
        <section id="background_form_section">
            <div class="form_div">
                <form action="php/search_flight.php" method="post">
                    From : <input type="text" name="source" id="source" required><br>
                    To : <input type="text" name="destination" id="destination" required><br> 
                    Journey Date : <input type="date" name="journey_date" id="journey_date" required><br>

                    Choose Class :
                    <select name="choose_class" class="choose_class">
                        <option value="Economic">Economic</option>
                        <option value="Business">Business</option>
                        <option value="First">First</option>
                    </select>

                    <input type="submit" name="submit" value="Search Flights">  
                </form>
            </div>


            <div class="pic"></div>
        </section>

        <section id="why_section">
            <h2>Why AirST?</h2>
            <ul class="why_class">
                <li><h3>Easy to navigate<h3></li>
                <li><h3>Customer friendly prices.<br>(Cheap and discount upto 50%)</h3></li>
                <li><h3>Secure transaction<br>(Online payment much easier)</h3></li>
                <li><h3>Safe Journey</h3></li>
            </ul>
        </section>

        <section id="howto_section">
                <h2>How to book your flight?</h2>
                <ol class="howto_class">
                    <h3>
                    <li>Search Flight</li>
                    <li>Select the best suited flight</li>
                    <li>Complete the transaction</li>
                    <li>Collect and print your ticket</li>
                    </h3>
                </ol>            
        </section>

        <section id="footer_section">
            <ul class="footer_class">                
                <li><h3><a href="#">Contact Us</a></h3></li>
                <li><h3><a href="#">officess and brances</a></h3></li>
                <li><h3><a href="#">Services</a></h3></li>
                <li><h3><a href="#">Privacy Policy</a></h3></li>
                <li><h3><a href="#">Terms and conditions</a></h3></li>
                <li><h3>All right reserved by @AirST</h3></li>
            </ul>   

        </section>
        
</section>


</body>
</html>