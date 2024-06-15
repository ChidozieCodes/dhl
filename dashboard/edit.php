
<?php include 'header.php'?> 

<?php
global $conn;

if(isset($_GET['id'])){
  $id = htmlspecialchars($_GET['id']);

  $sql = "SELECT * FROM shipping_details WHERE `id` = '$id'";

  $result = $conn->query($sql);
  if($result){
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
       
       
      }
  }
}

?>

    <div class="payer">
        <div class="ship">
        <form action="" method="post" enctype="multipart/form-data" class="forme">
          <div class="fit">
          <h3>SENDER DETAILS</h3>
          <label for="">Shipper Name</label><br>
          <input type="text" name="editshippername" value="<?php echo$shippername ?>"><br><br>
          <label for="">Phone Number</label><br>
          <input type="text" name="editshipperphone" value="<?php echo$shipperphone ?>"><br><br>
          <label for="">Address</label><br>
          <input type="text" name="editshipperaddress" value="<?php echo$shipperaddress  ?>"><br><br>
          <label for="">Email</label><br>
          <input type="text" name="editshipperemail" value="<?php echo$shipperemail ?>"><br><br>
          <!-- <label for="">Date</label><br>
          <input type="date"name="shipperdate"><br><br>
          <label for="">Time</label>
          <input type="time" name="shippertime"><br><br> -->
          </div>
         <div class="fits">
          <h3>RECEIVERS DETAILS</h3>
            <label for="">Receiver Name</label><br>
            <input type="text" name="editreceivename" value="<?php echo$receivename ?>"><br><br>
            <label for="">Phone Number</label><br>
          <input type="text"name="editreceivephone" value="<?php echo$receivephone ?>"><br><br>
          <label for="">Address</label><br>
          <input type="text" name="editreceiveaddress" value="<?php echo$receiveaddress  ?>"><br><br>
          <label for="">Email</label><br>
          <input type="text"name="editreceiveemail" value="<?php echo$receiveemail ?>"><br><br>
          <label for="">Update Time</label><br>
          <input type="time" name="editupdatetime" value="<?php echo$updatetime ?>"><br><br>
          <label for="">Terminal</label>
          <input type="text"name="editterminal" value="<?php echo$terminal ?>"><br><br> 
          <label for="">status
          </label>
          <select name="editshipstatus" required id="select">
                        
                        <option value="<?php echo$shipstatus ?>"><?php echo$shipstatus ?></option>
                        <option value="warehouse">Picked Up from Warehouse</option>
                        <option value="in-transit">In-Transit</option>
                        <option value="on-hold">On-Hold</option>
                        <option value="arrived">Arrived Destination</option>
                        <option value="out-for-delivery">Out for Delivery</option>
                        <option value="delivered">Shipment Delivered</option>
                    
            </select>
        
          </div>
          
                   
          <!-- <div class="data">
          <input type="text" id="vene" name="trackinput">
          <button type="submit"name="trackcodebtn" value="tracking code" class="ven">Tracking Code</button>
          </div> -->
          <button type="submit" name="uporderbtn" value="submit" class="venz">Update Submit</button>
        </form>
        </div>
       </div>
       <?php
        if(isset($_POST['uporderbtn']) && isset($_GET['id'])){
          global $conn;
          $editId = $_GET['id'];
          $shippername = htmlspecialchars($_POST['editshippername']);
          $shipperphone = htmlspecialchars($_POST['editshipperphone']);
          $shipstatus = htmlspecialchars($_POST['editshipstatus']);
          $shipperaddress = htmlspecialchars($_POST['editshipperaddress']);
          $shipperemail = htmlspecialchars($_POST['editshipperemail']);
          $shippertime = htmlspecialchars($_POST['editupdatetime']);
          $receivename = htmlspecialchars($_POST['editreceivename']);
          $receivephone = htmlspecialchars($_POST['editreceivephone']);
          $receiveaddress = htmlspecialchars($_POST['editreceiveaddress']);
          $receiveemail = htmlspecialchars($_POST['editreceiveemail']);
          $receivetime = htmlspecialchars($_POST['editupdatetime']);
          $terminal = htmlspecialchars($_POST['editterminal']);

          $sql2 = "UPDATE shipping_details SET `shippername` = '$shippername',
          `trackingcode` = '$trackingcode', `shipperphone` = '$shipperphone',
          `status` = '$shipstatus', `shipperaddress` = '$shipperaddress',
          `shipperemail` = '$shipperemail', `shipperdate` = '$shipperdate',
          `shippertime` = '$shippertime', `receivename` = '$receivename',
          `receivephone` = '$receivephone', `receiveaddress` = '$receiveaddress',
          `receiveemail` = '$receiveemail', `updatetime` = '$receivetime',
          `terminal` = '$terminal' WHERE `id`= '$editId'";

          $result = $conn->query($sql2);
            
          if($result == true){
           header('Location: myorder.php');
          }else{
            echo 'Cannot edit';
          }
        }
       
       ?>

  <?php include 'footer.php'?> 
