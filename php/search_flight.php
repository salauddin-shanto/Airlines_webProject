<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
    <link rel="stylesheet" type="text/css" href="search_flight.css" >
</head>

<body>

    <?php

        include "connection.php";

  
        $source=$_POST['source'];
        $destination=$_POST['destination'];
        $choose_class=$_POST['choose_class'];
        $journey_date=$_POST['journey_date'];

        $sql = " SELECT plane.plane_name,route.source,route.destination,route.departure, route.arrival, fare.class_name,fare.ticket_price
        FROM route INNER JOIN plane
            ON route.plane_id=plane.plane_id
            INNER JOIN fare
            ON plane.plane_id=fare.plane_id
        WHERE route.source='$source' AND route.destination='$destination' AND fare.class_name='$choose_class' " ;
        $stmt = $conn->prepare($sql);
        $stmt->execute();

       
		// LOOP TILL END OF DATA
		foreach($result=$stmt->fetchall() as $key=>$val){

            $plane_name=$val['plane_name'];    
            $departure=$val['departure'];
            $arrival=$val['arrival'];
            $ticket_price=$val['ticket_price'];
            $boarding_h=intdiv((strtotime($departure)-strtotime('0:20:00')),3600);
            $boarding_m=intdiv(fmod((strtotime($departure)-strtotime('0:20:00')),3600),60) ;
            $boarding=$boarding_h.":".$boarding_m.":00";
            
            
  		} 

            include "connection.php";
            $sql="UPDATE ticket SET plane_name = '$plane_name', source = '$source', destination='$destination', choose_class='$choose_class', journey_date='$journey_date', departure='$departure', arrival='$arrival', boarding='$boarding', ticket_price='$ticket_price'
            where plane_id=1";

            $conn->exec($sql);

            if($departure ==''){ 
                echo '<script>alert("Incorrect Email/Password")</script>';
                header("Location: index.php?error=Flight Unavailable");
                exit();
            }
            else{

            echo '
            <section id="page_margin">
                <section id="header_section">
                    <div>
                        <p class="header">Available flight</p>
                    </div>                    
                </section>
        
                <section id="ticket_section">
                        <div class="columns">
                            <div>
                                <h3>Flight </br>'.$plane_name.'</br></h3>
                            </div>

                            <div>
                                <h3>Frome </br>'.$source.'</br></h3>
                            </div>                                                       
                        </div>
        
        
                        <div class="columns">
                            <div>
                                <h3>To </br> '.$destination.'</br></h3>
                            </div>

                            <div>
                                <h3>Journey Date </br>'.$journey_date.'</br></h3>
                            </div>        
                        </div>
        
        
                        <div  class="columns">                            
                            <div>
                                <h3>Departure </br>'.$departure.'</br></h3>
                            </div>
        
                            <div>
                                <h3>Arrival </br>'.$arrival.'</br></h3>
                            </div>     
                        </div>

                        <div  class="columns">
                            <div>
                                <h3>Class </br>'.$choose_class.'</br></h3>
                            </div>

                            <div>
                                <h3>Ticket Fare </br>'.$ticket_price.'</br></h3>      
                            </div>             
                        </div>       
                        
 
                </section>  
                
                <section id="footer_section">
                    <form action="user_login.php" method="post">
                        <button type="submit">Book Now</button>
                    </form                          
                </section>   
        
            </section>
            
            ';
        }
        

        $conn=null;
		?>
    
</body>

</html>
