<?php
  require_once("partials/header1.php");
?>
    <div class="row first firstRow">
        <div class="col-md-6">
            <h1>Leave a Review</h1>
            <form action="#" method="POST">
            <label for="feedback">Feedback:</label>
            <textarea name="feedback" id="feedback" cols="30" rows="10" class="form-control mb-3" required></textarea>
            <br>
          
            <label for="name">Your Name:</label>
            <input type="text" name="name" id="name" class="form-control mb-3" required>
            <br>
          
            <label for="email">Your Email:</label>
            <input type="email" name="email" id="email" class='form-control mb-3'required>
            <br>
          
            <input type="submit" value="Submit" class="btn btn-primary btn-lg">
          </form>
          
          <div>
            <h2>Review History</h2>
            <ul>
              <li>Review 1</li>
              <li>Review 2</li>
              <li>Review 3</li>
            </ul>
          </div>
          
        </div>
        <div class="col-md-6">
            <h3>Rate your experience</h3>
            <form action="#" method="POST">
              <label for="rating">Rating:</label>
              <input type="number" name="rating" id="rating" min="1" max="5" required>
              <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </form>
        </div>
    </div>

    <?php
      require_once("partials/footer.php");
    ?>