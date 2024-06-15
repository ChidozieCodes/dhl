<?php
 ob_start();
 session_start();

 $conn = new mysqli('localhost', 'root', '','logistics');

//  if($conn){
//   echo'connected';
//  }

function RegisterOrder(){
  if(isset($_POST['orderbtn'])){
    global $conn;
   $shippername = htmlspecialchars($_POST['shippername']);
   $trackingcode = htmlspecialchars($_POST['trackinput']);
   $shipperphone = htmlspecialchars($_POST['shipperphone']);
   $shipstatus = htmlspecialchars($_POST['shipstatus']);
   $shipperaddress = htmlspecialchars($_POST['shipperaddress']);
   $shipperemail = htmlspecialchars($_POST['shipperemail']);
   $shipperdate = htmlspecialchars($_POST['shipperdate']);
   $shippertime = htmlspecialchars($_POST['shippertime']);
   $receivename = htmlspecialchars($_POST['receivename']);
   $receivephone = htmlspecialchars($_POST['receivephone']);
   $receiveaddress = htmlspecialchars($_POST['receiveaddress']);
   $receiveemail = htmlspecialchars($_POST['receiveemail']);
   $receivedate = htmlspecialchars($_POST['receivedate']);
   $receivetime = htmlspecialchars($_POST['receivetime']);
  
   $sql = "INSERT INTO shipping_details (`shippername`, `shipperphone`, `shipperaddress`, `shipperemail`, `shipperdate`,`shippertime`,
   `receivename`, `receivephone`, `receiveaddress`,`receiveemail`,`receivedate`,`receivetime`,`status`,`trackingcode`)
   VALUES('$shippername', '$shipperphone', '$shipperaddress', '$shipperemail', '$shipperdate', '$shippertime',
   '$receivename', '$receivephone','$receiveaddress','$receiveemail', '$receivedate', '$receivetime', '$shipstatus', '$trackingcode')";
   $result = $conn->query($sql);
  
   if($result == true){
    echo 'Shipping Details Registered Correctly';
   }else{
    echo 'Shipping details cannot be registered';
   }
     
}
}

function Getorders(){
  global $conn;

    //$per_page = 5;
    //if(isset($_GET['page'])){
      //$page =
      $sql = "SELECT * FROM shipping_details order by id desc limit 10";
      $result = $conn->query($sql);

      if($result == true){
        foreach($result as $row){
          $id = $row['id'];
          $shippername = $row['shippername'];
          $trackingcode = $row['trackingcode'];
          $shipperphone = $row['shipperphone'];
          $shipstatus = $row['status'];
          $shipperaddress =$row['shipperaddress'];
          $shipperemail = $row['shipperemail'];
          $shipperdate = $row['shipperdate'];
          $shippertime = $row['shippertime'];
          $receivename = $row['receivename'];
          $receivephone = $row['receivephone'];
          $receiveaddress = $row['receiveaddress'];
          $receiveemail = $row['receiveemail'];
          $receivedate = $row['receivedate'];
          $receivetime = $row['receivetime'];
          $updatetime = $row['updatetime'];
          $terminal = $row['terminal'];
         


          echo '<tbody>
          <td>'.$shippername.'</td>
          <td>'.$shipperphone.'</td>
          <td>'. $shipperaddress.'</td>
          <td>'.$shipperemail.'</td>
          <td>'.$trackingcode.'</td>
          <td>'.$shipperdate.'</td>
          <td>'.$shippertime.'</td>
          <td>'.$receivename.'</td>
          <td>'.$receivephone.'</td>
          <td>'.$receiveaddress.'</td>
          <td>'.$receiveemail.'</td>
          <td>'.$receivedate.'</td>
          <td>'.$receivetime.'</td>
          <td>'.$updatetime.'</td>
          <td>'.$terminal.'</td>
          <td>'.$shipstatus.'</td>
          <td>
            <a href="edit.php?id='.$id.'"><img src="img/edit.png" alt=""></a> <br>
            <a href="delete.php?id='.$id.'"><img src="img/delete2.png" alt=""></a>
         </td>
          </tbody>
          ';
        }
      }
    
}

function EditOrder(){
  global $conn;

  if(isset($_POST['id'])){
    $id = htmlspecialchars($_POST['id']);

    $sql = "SELECT * FROM shipping_details WHERE `id` = '$id'";
  }
}



















?>