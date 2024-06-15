<?php include 'header.php'?> 
<?php RegisterOrder() ?>
    <div class="payer">
        <div class="ship">
        <form action="" method="post" enctype="multipart/form-data" class="forme">
          <div class="fit">
          <h3>SENDER DETAILS</h3>
          <label for="">Shipper Name</label><br>
          <input type="text" name="shippername"><br><br>
          <label for="">Phone Number</label><br>
          <input type="text" name="shipperphone"><br><br>
          <label for="">Address</label><br>
          <input type="text" name="shipperaddress"><br><br>
          <label for="">Email</label><br>
          <input type="text" name="shipperemail"><br><br>
          <label for="">Date</label><br>
          <input type="date"name="shipperdate"><br><br>
          <label for="">Time</label>
          <input type="time" name="shippertime"><br><br>
          </div>
         <div class="fits">
          <h3>RECEIVERS DETAILS</h3>
            <label for="">Receiver Name</label><br>
            <input type="text" name="receivename"><br><br>
            <label for="">Phone Number</label><br>
          <input type="text"name="receivephone"><br><br>
          <label for="">Address</label><br>
          <input type="text" name="receiveaddress"><br><br>
          <label for="">Email</label><br>
          <input type="text"name="receiveemail"><br><br>
          <label for="">Date</label><br>
          <input type="date" name="receivedate"><br><br>
          <label for="">Time</label>
          <input type="time"name="receivetime"><br><br>
          <label for="">status
          </label>
          <select name="shipstatus" required id="select">
                        
                        <option>select</option>
                        <option value="warehouse">Picked Up from Warehouse</option>
                        <option value="in-transit">In-Transit</option>
                        <option value="on-hold">On-Hold</option>
                        <option value="arrived">Arrived Destination</option>
                        <option value="out-for-delivery">Out for Delivery</option>
                        <option value="delivered">Shipment Delivered</option>
                    
                </select>
        
          </div>

          <div class="data">
          <input type="text" id="vene" name="trackinput">
          <button type="submit"name="trackcodebtn" value="tracking code" class="ven">Tracking Code</button>
          </div>
          <button type="submit" name="orderbtn" value="submit" class="venz">Submit</button>
        </form>
        </div>
       </div>  

<?php include 'footer.php'?> 