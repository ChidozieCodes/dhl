<?php include 'header.php'?>


  <div class="hero_page">
     <img src="img/2.jpg" alt="" class="hero_bg">
      <article id="hero_inner">
        <h1 class="shipment">Shipment Tracker</h1>
          <form action="tracking.php" method="post"  enctype="multipart/form-data" id="trackingForm">
              <div class="form-group">
                  <label for="trackingNumber">Enter Tracking Number:</label>
                  <input type="text" class="form-control" id="trackingNumber" name="trackingNumber">
              </div>
              <button type="submit" name="submittrackbtn"class="btn btn-primary trek">Track Shipment</button>
          </form>
          <div id="shipmentStatus"></div>
          <div class="yellow">
            <img src="img/company.png" alt="">
            <h2>BJS for Business</h2>
            <h5>
              Shipping regulary? Request a buisness accont and profit from <br>
              exclusive benefits
            </h5>
        </div>
      </article>
    </div> 
    </div>
    <section id="sec2">
      <article id="sec2_inner">
        <div>
          <h3 class="cull">Our Services</h3>
          <p class="cul">We offer a wide range of personalized and professional services for you!</p><br>
          <article id="ser_wrapper">
            <section>
                <article class="circle">
                    <li class="cycle">
                      <img src="img/truck.png" alt="">
                    </li>
                </article><br>
                <h6>Inland Freight</h6><br>
                <p>
                  In today's dynamic business landscape, efficient logistics
                  operations are pivotal for companies to stay...
                </p>
                <a href="inland.php"><button type="button" class="btn btn-info">Read more</button></a> 
            </section>
            <section>
              <article class="circle">
                <li class="cycle">
                  <img class="cent" src="img/PLANES.png" alt="">
                </li>
              </article><br>
              <h6>Air Freight</h6><br>
              <p>In the intricate web of global trade, the efficiency of logistics 
                operations plays ....</p>
              
              <a href="air.php"><button type="button" class="btn btn-info">Read more</button></a> 
            </section>
            <section>
              <article class="circle">
                <li class="cycle">
                  <img class="cent" src="img/ship.png" alt="">
                </li>
              </article><br>
              <h6>Ocean Freight</h6>
              <p>In the vast expanse of global trade, ocean freight serves as the backbone of transportation
                facilitating the... 
              </p>
              <a href="ocean.php"><button type="button" class="btn btn-info">Read more</button></a> 
            </section>
            <section>
              <article class="circle">
                <li class="cycle">
                  <img class="cent" src="img/icons8-warehouse-50.png" alt="">
                </li>
              </article><br>
              <h6>Ware Housing</h6><br>
              <p class="p-1">In the dynamic realm of global commerce, efficient warehousing plays a pivotal role in ensuring ..</p>
              <a href="warehousing.php"> <button type="button" class="btn btn-info">Read more</button></a> 
            </section>
            <section>
              <article class="circle">
                <li class="cycle">
                  <img class="cent" src="img/box.png" alt="">
                </li>
              </article><br>
              <h6>Logistics Services</h6><br>
              <p class="p-1">
                In the intricate landscape of global trade, the seamless movement of goods from 
                one point to ....
              </p>
              <a href="logistics.php"> <button type="button" class="btn btn-info">Read more</button></a> 
            </section>
            <section>
              <article class="circle">
                <li class="cycle">
                  <img class="cent" src="img/icons8-agent-50.png" alt="">
                </li>
              </article><br>
              <h6>Custom Broker</h6><br>
              <p class="p-1">In the intricate world of international trade, navigating customs regulations
                and compliance...</p>
              <a href="custombroker.php"><button type="button" class="btn btn-info">Read more</button></a> 
            </section>
          </article>
        </div>
        <div>
          <img src="img/bjs.png" alt="" class="reduce">
        </div>
      </article>
        
    </section>
      
    <section id="sec3">
      <div class="animate"> GALLERY </div>
      <article id="sec3_inner">
        <marquee behavior="alternate" direction="left" id="marq">
          <div><img src="img/img1.jpg" alt=""></div>
          <div><img src="img/img2.jpg" alt=""></div>
          <div><img src="img/img3.jpg" alt=""></div>
          <div><img src="img/img4.jpg" alt=""></div>
          <div><img src="img/img5.jpg" alt=""></div>
        </marquee>
      </article>
    </section>
    
    <section id="sec4">
      <p class="our"> OUR TEAM</p>
      <article id="sec4_inner">
        <div><img src="img/team1.webp" alt=""></div>
        <div><img src="img/team2.jpeg" alt=""></div>
        <div><img src="img/team3.jpeg" alt=""></div>
        <div><img src="img/team4.webp" alt=""></div>
      </article>
    </section>
    <sectionn id="testimony_wrapper">
      <p class="testimonial">TESTIMONIALS</p>
      <article id="testi_inner">
        <div>
          <article id="testi_img_holder">
            <img src="img/customer3.png" alt="">
          </article>
          <article id="testi_descr">
            <h6 class="text-info">peggy xen </h6>
            <span class="text-dark">
              Bjs has stand out, thier global shipping solutions are top-notch,
              and their team is always responsive and helpful.
            </span>
          </article>
        </div>
        <div>
          <article id="testi_img_holder">
            <img src="img/customer2.png" alt="">
          </article>
          <article id="testi_descr">
            <h6 class="text-info"> Sarah Thompson</h6>
            <span class="text-dark">
              Bjs has been our go-to transportation partner for years
              .Their team's expertise and attention to detail have helped us making life easier.
            </span>  
          </article>
        </div>
      </article>
    </sectionn>

<?php include 'footer.php' ?>   