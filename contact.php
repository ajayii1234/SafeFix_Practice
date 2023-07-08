<?php
  require_once("partials/header1.php");
?>
    <div class="row justify-content-center first firstRow">
        <div class="col-md-9">
            
                <h1>Contact Us</h1>
                <p>If you have any questions or concerns, please feel free to get in touch with us using the form below:</p>
                <form action="#" method="post">
                  <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class='form-control mb-3'required>
                  </div>
                  <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control mb-3" required>
                  </div>
                  <div>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" class="form-control mb-3" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg">Send</button>
                </form>
                
                <div class="contact-info">
                  <h2>Our Address:</h2>
                  <p>123 Main Street<br>Ogudu, NG 12345</p>
                  
                  <h2>Phone:</h2>
                  <p>(123) 456-7890</p>
                  
                  <h2>Email:</h2>
                  <p><a href="femi:info@safefix.com" class="links">info@safefix.com</a></p>
                </div>
              
        </div>
    </div>
   

    <?php
      require_once("partials/footer.php");
    ?>