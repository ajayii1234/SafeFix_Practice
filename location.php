<?php
  require_once("partials/header1.php");
?>
    <div class="row firstRow">
  
        <div class="col-md-6">
            <h2>Nearby Repairers</h2>
            <ul>
              <li>
                
            
                  <h3>Repairer 1</h3>
                  <p>Rating: 4.5/5</p>
                  <p>Availability: Monday-Friday 9AM-5PM</p>
                </a>
              </li>
              <li>
                
            
                  <h3>Repairer 2</h3>
                  <p>Rating: 4.2/5</p>
                  <p>Availability: Monday-Saturday 10AM-7PM</p>
                </a>
              </li>
              <li>
                
  
                  <h3>Repairer 3</h3>
                  <p>Rating: 4.8/5</p>
                  <p>Availability: Monday-Sunday 8AM-8PM</p>
                </a>
              </li>
            </ul>
        </div>
        <div class="col-md-6">
            <form>
                <label for="location-search">Search for a location:</label>
                <input type="text" id="location-search" name="location-search" placeholder="Enter location...">
                <input type="submit" value="Search">
              </form>
              <div id="map"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 second">
            <h2>Chat with Repairer</h2>
        <div id="chat">
          <p>Please select a repairer to start chatting</p>
          <button type="cursor">Repairer 1</button>
          <button type="cursor">Repairer 2</button>
          <button type="cursor">Repairer 3</button>
        </div>
        </div>
    </div>

   
    <?php
      require_once("partials/footer.php");
    ?>