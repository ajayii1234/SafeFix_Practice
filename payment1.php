<?php
  require_once("partials/header1.php");
?>
    <div class="row first">
        <div class="col-md-6">
            <h1>Payment Information</h1>
            <form>
              <label for="card-number">Credit Card Number:</label>
              <input type="number" id="card-number" name="card-number" class="form-control mb-3">
              <label for="exp-date">Expiration Date:</label>
              <input type="month" id="exp-date" name="exp-date" class="form-control mb-3">
              <label for="cvv">CVV:</label>
              <input type="text" id="cvv" name="cvv" class="form-control mb-3">
              <label for="billing-address">Billing Address:</label>
              <input type="text" id="billing-address" name="billing-address" class="form-control mb-3">
              <input type="submit" value="Submit Payment" class="btn btn-primary btn-lg">
            </form>
        </div>
        <div class="col-md-6">
            <h2>Transaction History</h2>
            <table class='table table-striped table-bordered'>
              <tr>
                <th>Date</th>
                <th>Transaction Type</th>
                <th>Amount</th>
              </tr>
              <tr>
                <td>May 1, 2023</td>
                <td>Payment Received</td>
                <td>₦20,0000</td>
              </tr>
              <tr>
                <td>April 29, 2023</td>
                <td>Payment Made</td>
                <td>₦10,000</td>
              </tr>
            </table>
        </div>
    </div>

    
    <?php
      require_once("partials/footer.php");
    ?>