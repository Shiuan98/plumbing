

<?include "general-submit.php";?>

<section id="contact" class="section green">
  <div class="container">

      <h4>Contact Us</h4>
       
      <p>If you need a plumber to solve your current problems, please contact us and state that your problem
        is emergency or not emergency. Our plumber team is always on call to help you.

      </p>

    <div class="blankdivider30">
      </div>
      <div class="row">
        <div class="span12">
        <div class="cform" id="contact-form">
        <form action="" method="POST">
          <?include 'notification.php'?>
          <div class="row">
            <div class="span6">
              <div class="field your-name form-group">
                <input type="text"  class="form-control" placeholder="Name" id="name" name="name" value="<?=$name?>">
              </div>
            
            
              <div class="field your-name form-group">
                <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" value="<?=$phone?>">
              </div>
           
      
             <div class="field subject form-group">
                    <select class="select-btn" name="service" id="service" style="font-size: 18px !important;">
    <option value="<?=$keyword?>">Select Your Service:</option>
    <option value="Sewer Line Repair">Sewer Line Repair</option>
    <option value="Plumbing Installation">Plumbing Installation</option>
    <option value="Water Heater Repair">Water Heater Repair</option>
    <option value="Toilet Pump Repair">Toilet Pump Repair</option>
    <option value="Roof Leaking Repair">Roof Leaking Repair</option>
    <option value="Clogged Drain">Clogged Drain</option>
    <option value="Clogged Toilet">Clogged Toilet</option>
    <option value="Pipe Leaking">Pipe Leaking</option>
    <option value="Pipe Bursting">Pipe Bursting</option>


  </select>
                  </div>
                </div>
                <div class="span6">
          <div class="field address form-group">
            <textarea  rows="2" class="form-control" id="address" name="address" placeholder="Address" value="<?=$address?>"></textarea>
          </div>
        </div>
          <div class="span6">
                  <div class="field message form-group">
            <textarea  rows="4" class="form-control" placeholder="Message" id="message" name="message"><?if(isset($message)) echo $message;?></textarea>
            <input type="hidden" name="source" value="<?=$source?>">
          </div>
          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LfBvZsUAAAAACZWQ6p5EPZOfm5eWg0TRVVJMHoQ"></div>
            <input type="submit" name="submit-contact" class="submit-btn" value="Send Message">
          </div>
        
        </form>
      </div>
      </div>
      
    </div>

  </div>
</section>
<!-- END section -->



