<?php
  require_once("partials/header1.php");
?>
    <div class="row first firstRow">
        <div class="col-md-12">
             <!-- section for the map showing nearby SafeFix locations -->

        <h2>Nearby SafeFix Locations</h2>
        <p>Add map here</p>
        <!-- add map here -->
      
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h1>Request Repair</h1>
      <!-- form for submitting a repair request -->
      <form>
        <label for="device-type">Device Type:</label>
        <input type="text" id="device-type" name="device-type" class="form-control mb-3">
        <label for="device-model">Device Model:</label>
        <input type="text" id="device-model" name="device-model" class="form-control mb-3">
        <label for="problem-description">Problem Description:</label>
        <textarea id="problem-description" name="problem-description" class="form-control mb-3"></textarea>
        <label for="preferred-location">Preferred Location:</label>
        <input type="text" id="preferred-location" name="preferred-location" class="form-control mb-3">
        <input type="submit" value="Submit Request" class="btn btn-primary btn-lg">
      </form>
        </div>
        <div class='col-md-6'>
                   <!-- section for the confirmation page -->
      
        <h2>Confirmation</h2>
        <p>Thank you for submitting your repair request. Here are the details:</p>
        <ul>
          <li>Device Type: <span id="device-type-display"></span></li>
          <li>Device Model: <span id="device-model-display"></span></li>
          <li>Problem Description: <span id="problem-description-display"></span></li>
          <li>Preferred Location: <span id="preferred-location-display"></span></li>
        </ul>
        <p>The estimated cost of repair is ₦<span id="estimated-cost"></span><p>
        <button id="confirm-button" class="btn btn-primary btn-lg">Confirm and Pay</button>
        </div>
    
    </div>


    <?php
      require_once("partials/footer.php");
    ?>