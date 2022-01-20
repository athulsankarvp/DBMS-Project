<?php 
   
    include('connection.php');
    $screencode = $_SESSION['screen'];
    $showcode = $_SESSION['show'];
    
    
    // $sql = "SELECT seat_id FROM bookings WHERE screencode = $screencode";
    $sql = "SELECT seat_id FROM bookings WHERE screencode = $screencode AND showcode = $showcode"; //updating show code
    $result = mysqli_query($conn,$sql);

    $seatid = mysqli_fetch_all($result);
    
    $bookedSeat = array();
    foreach($seatid as $id){
        
           $bookedSeat[] = $id[0];
           
        
    }
    $athul='';
    for($i=0;$i<count($bookedSeat);$i++){
        $athul = $athul . $bookedSeat[$i] . ",";
        }

    $athulcomma = explode(",",$athul);
    
        
    function checkme($seatidd,$athulcomma){
        $disabled='';
        
          foreach($athulcomma as $m){
              
            if($seatidd == $m)
            {
                $disabled = $disabled . "disabled";
            }
          }

         echo $disabled;
    }
?>