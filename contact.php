<?php
$PageTitle = "Contact";
$PageClass = "contact";
$HeaderImage = "contact-header.jpg";
include "header.php";

function HeaderContent() { ?>
  <div id="header-header">Contact Us</div>

  To contact Every Day Hope please fill out the form below or contact us directly.
<?php } ?>

<div id="contact-content">
  <div class="site-width">
    <div class="left">
      If you are with a university or reseach group and are interested in Micro-Enterprise please contact us directly at: <a href="mailto:info@everydayhope.org">info@everydayhope.org</a>
    </div>
    
    <div class="right">
      <strong>Our Mailing Address is:</strong><br>
      Every Day Hope<br>
      PO. Box 232<br>
      Cloquet, MN 55720
    </div>

    <div style="clear: both;"></div>

    <script type="text/javascript">
      $(document).ready(function() {
        var form = $('#contact-form');
        var formMessages = $('#contact-form-messages');
        $(form).submit(function(event) {
          event.preventDefault();

          function formValidation() {
            var error = "no";

            $("#name, #email, #interest, #comment").each(function() {
              if ($(this).val() === "") {
                if ($(this).is("#interest")) {
                  $(".select").addClass("error");
                  $(this).prepend('<option value="" selected class="error">REQUIRED</option>');
                } else {
                  $(this).addClass("error");
                  $(this).attr("placeholder", $(this).data("ph")+" REQUIRED");
                }

                error = "yes";
              }
            });

            return (error === "no") ? true : false;
          }

          if (formValidation()) {
            var formData = $(form).serialize();
            formData += '&src=ajax';

            $.ajax({
              type: 'POST',
              url: $(form).attr('action'),
              data: formData
            })
            .done(function(response) {
              $(formMessages).html(response);
              $(form).find('input:text, textarea, #interest').val('');
              $('input:checkbox').removeAttr('checked');
              $('#email').val('');
            })
            .fail(function(data) {
              if (data.responseText !== '') {
                $(formMessages).html(data.responseText);
              } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
              }
            });
          }
        });

        $("INPUT, TEXTAREA").change(function() {
          if ($(this).val().length > 0) {
            $(this).removeClass("error");
            $(this).attr("placeholder", $(this).data("ph"));
          }
        });

        $("#interest").change(function() {
          if ($(this).val().length > 0) {
            $(".select").removeClass("error");
            $("#interest .error").remove();
          }
        });
      });
    </script>

    <?php
    // Settings for randomizing form field names
    $ip = $_SERVER['REMOTE_ADDR'];
    $timestamp = time();
    $salt = "EveryDayHopeContactForm";
    ?>

    <form action="form-contact.php" method="POST" id="contact-form">
      <div>
        <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="Name" data-ph="Name">

        <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email" data-ph="Email">

        <div class="select">
          <select name="interest" id="interest">
            <option value="">I am interested in</option>
            <option value="General">General</option>
            <option value="Micro-Enterprise">Micro-Enterprise</option>
            <option value="Volunteering">Volunteering</option>
            <option value="More Information">More Information</option>
          </select>
        </div>

        <textarea name="<?php echo md5("comment" . $ip . $salt . $timestamp); ?>" id="comment" placeholder="Comment" data-ph="Comment"></textarea>

        <input type="checkbox" name="mailinglist" id="mailinglist" value="yes">
        <label for="mailinglist">Subscribe to the Every Day Hope Newsletter</label>

        <div id="contact-form-messages"></div>

        <input type="submit" name="submit" value="SEND MESSAGE">

        <input type="text" name="confirmationCAP" style="display: none;">
        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
      </div>
    </form>
  </div>
</div>

<div id="contact-footer">
  <div class="site-width">For People. For Good.</div>
</div>

<?php include "footer.php"; ?>