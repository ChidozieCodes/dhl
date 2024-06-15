<?php include 'header.php' ?>
<?php 
if(isset($_POST['submittrackbtn'])){
    $trackingCode = htmlspecialchars($_POST['trackingNumber']);

    $sql = "SELECT * FROM shipping_details WHERE `trackingcode` = '$trackingCode'";
    $result = $conn->query($sql);

    if($result){
        if($result->num_rows > 0){
            foreach($result as $row){
                $status = $row['status'];

                if($status === 'in-transit'){
                    echo '
                    <div class="dasht">
                        <div class="shipment-update">
                            <div class="updates">
                                <h5 class="shipping">Shipment status</h5>
                                <div class="update">
                                    <div class="timestamp">April 21,2024 -10:00am</div>
                                    <p><div class="location">Asaba</div></p>
                                    <div class="message"><p>Your shipment is in transit to the destination</p></div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }elseif($status == 'on-hold'){
                    echo '
                    <div class="dasht">
                        <div class="shipment-update">
                            <div class="updates">
                                <h5 class="shipping">Shipment status</h5>
                                <div class="update">
                                    <div class="timestamp">April 21,2024 -10:00am</div>
                                    <p><div class="location">Asaba</div></p>
                                    <div class="message"><p>Your shipment is on hold due to custom charge</p></div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }elseif($status == 'arrived'){
                    echo '
                    <div class="dasht">
                        <div class="shipment-update">
                            <div class="updates">
                                <h5 class="shipping">Shipment status</h5>
                                <div class="update">
                                    <div class="timestamp">April 21,2024 -10:00am</div>
                                    <p><div class="location">Asaba</div></p>
                                    <div class="message"><p>Your shipment has arrived at the destination</p></div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }elseif($status == 'out-for-delivery'){
                    echo '
                    <div class="dasht">
                        <div class="shipment-update">
                            <div class="updates">
                                <h5 class="shipping">Shipment status</h5>
                                <div class="update">
                                    <div class="timestamp">April 21,2024 -10:00am</div>
                                    <p><div class="location">Asaba</div></p>
                                    <div class="message"><p>Your shipment has been picked up from the warehouse</p></div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }elseif($status == 'delivered'){
                    echo '
                    <div class="dasht">
                        <div class="shipment-update">
                            <div class="updates">
                                <h5 class="shipping">Shipment status</h5>
                                <div class="update">
                                    <div class="timestamp">April 21,2024 -10:00am</div>
                                    <p><div class="location">Asaba</div></p>
                                    <div class="message"><p>Your shipment has been delivered</p></div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }elseif($status == 'warehouse'){
                    echo '
                    <div class="dasht">
                        <div class="shipment-update">
                            <div class="updates">
                                <h5 class="shipping">Shipment status</h5>
                                <div class="update">
                                    <div class="timestamp">April 21,2024 -10:00am</div>
                                    <p><div class="location">Asaba</div></p>
                                    <div class="message"><p>Your shipment has been delivered</p></div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            }
        }else{
            echo 'no result found';
        }    
       
    }
}
// <option value="warehouse">Picked Up from Warehouse</option>
// <option value="in-transit">In-Transit</option>
// <option value="on-hold">On-Hold</option>
// <option value="arrived">Arrived Destination</option>
// <option value="out-for-delivery">Out for Delivery</option>
// <option value="delivered">Shipment Delivered</option>


?>
<?php include 'footer.php' ?> 
<!-- <div class="dasht">
 <div class="shipment-update">
        <div class="row">
            <div class="col-lg-4">
                <div class="updates">
                    <h5 class="shipping">Shipment status</h5>
                    <div class="update">
                        <div class="timestamp">April 21,2024 -10:00am</div>
                        <p><div class="location">Asaba</div></p>
                        <div class="message"><p>Your shipment has been picked up from the warehouse</p></div>
                    </div>
                    <div class="update">
                        <div class="timestamp">April 22,2024 -8:00am</div>
                        <p><div class="location">nnewi</div></p>
                        <div class="message"><p>Your shipment is in transit to the destination</p></div>
                    </div>
                    <div class="update">
                        <div class="timestamp">April 23,2021 -10:00am</div>
                        <p><div class="location">Aba</div></p>
                        <div class="message"><p>Your shipment is on hold due to custom charge</p></div>
                    </div>
                    <div class="update">
                        <div class="timestamp">April 24,2024 -3:00pm</div>
                        <p><div class="location">port harcourt</div></p>
                        <div class="message"><p>Your shipment has arrived at the destination</p></div>
                    </div>
                    <div class="update">
                        <div class="timestamp">April 25,2024 -9:00am</div>
                        <p><div class="location">port harcourt</div></p>
                        <div class="message"><p>Your shipment has been delivered</p></div>
                    </div>
                </div>
            </div>
        </div>
           
    </div>
</div> -->
        
<!-- 
<div class="dasht">
    <div class="shipment-update">
        <div class="row">
            <div class="col-lg-4">
                <div class="updates">
                    <h5 class="shipping">Shipment status</h5>
                    <div class="update">
                        <div class="timestamp">April 21,2024 -10:00am</div>
                        <p><div class="location">Asaba</div></p>
                        <div class="message"><p>Your shipment has been picked up from the warehouse</p></div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div> -->