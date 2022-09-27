<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
    <link rel="stylesheet" type="text/css" href="ticket.css" >
</head>

<body>
    
<?php 
    session_start();

    include "connection.php";

    $sql = " SELECT * FROM ticket ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();


    foreach($result=$stmt->fetchall() as $key=>$val){
        $plane_name=$val['plane_name'];    
        $source = $val['source'];
        $destination = $val['destination'];
        $choose_class = $val['choose_class'];
        $journey_date = $val['journey_date'];
        $departure=$val['departure'];
        $arrival=$val['arrival'];
        $boarding=$val['boarding'];
        $ticket_price=$val['ticket_price'];
        
    }



    echo ' 
    <section id="ticket_margin">
        <section id="header_section">
            <div>
                <img  src="../image/logo4.png" class="logo">
            </div>
            <div class="gap">
                <h2>AirST</h2>                      
            </div>
            
            <div>
                <h2>Boarding pass</h2>

            </div>
            
            
        </section>

        <section>
            <div id="ticket">
                <div class="columns">

                    <div>
                        <h3>Flight </br>'.$plane_name.'</br></h3>
                    </div>
                    <div>
                        <h3>Frome </br>'.$source.'</br></h3>
                    </div>
                    <div>
                        <h3>To </br> '.$destination.'</br></h3>
                    </div>
                                               
                </div>


                <div class="columns">
                    <div>
                        <h3>Date </br>'.$journey_date.'</br></h3>
                    </div>

                    <div>
                        <h3>Class </br>'.$choose_class.'</br></h3>
                    </div>

                    <div>
                        <h3>Ticket Fare </br>'.$ticket_price.'</br></h3>
                    </div>
                </div>


                <div  class="columns">
                    <div>
                        <h3>Departure </br>'.$departure.'</br></h3>
                    </div>

                    <div>
                        <h3>Arrival </br>'.$arrival.'</br></h3>
                    </div>
                        

                    <div>
                        <h3>Boarding </br>'.$boarding.'</br></h3>
                    </div>
                                     
                </div>

                <div  class="columns">
                
                <div>
                    <h3>User </br>'.$_SESSION["name"].'</br></h3>
                </div>

                <div>
                    <h3>Phone </br>'.$_SESSION["phone"].'</br></h3>
                </div>                   

                <div>
                    <h3>Ticket No </br>'.rand(1,200).'</br></h3>
                </div>
                                 
            </div>
                     

        </section>  
         
        <section id="footer_section">
            <h3>Happy Journey</h3>       
        </section>   

    </section>
    
    ';
 


?>

</body>
</html>
