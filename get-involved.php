<?php
$PageTitle = "Get Involved";
$PageClass = "get-involved";
$HeaderImage = "get-involved-header.jpg";
include "header.php";

function HeaderContent() { ?>
  <div id="header-header">Make a Difference</div>

  By investing in livestock, safe water or the general fund you are providing a community with sustainable food and water resulting in better health and an income for families throughout the region.

  <div id="header-links">
    <span>Ways To Give</span>
  </div>
<?php } ?>

<div id="one-time">
  <div class="site-width">
    <h1>One Time</h1>
    
    Your generous gift will benefit and support the many lives impacted by Every Day Hope in the Dominican Republic.<br>
    <br>

    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&#038;hosted_button_id=N32SVVWLDYJCU" class="button">Donate</a>
  </div>
</div>

<div id="safewater-header">
  <img src="images/icon-safewater-white.png" class="icon">
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $(window).on('load resize', function(){
      if (window.innerWidth > 700) {
        var highestBox = 0;
        $(".safewater .donate").each(function(){
          if($(this).height() > highestBox) { highestBox = $(this).height(); }
        });
        $(".safewater .donate").height(highestBox);
      } else {
        $(".safewater .donate").height("auto");
      }
    });
  });
</script>

<div class="safewater">
  <div class="giving">
    <div class="site-width">
      By investing in SAFE WATER you are setting up a community for better health and sustainability. Help bring safe water to a community.<br>

      <div class="donate">
        <h3>Safe Water - One Time Gift</h3>
        Your generous gift will benefit and support the many lives impacted by Every Day Hope in the Dominican Republic.<br>

        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&#038;hosted_button_id=N32SVVWLDYJCU" class="button">One-Time Donation</a>
      </div>

      <div class="donate right">
        <h3>Safe Water - Premier Partner</h3>
        Your generous monthly gift will provide an on going benefit and support for the many lives impacted by Every Day Hope in the Dominican Republic.<br>

        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&#038;hosted_button_id=N32SVVWLDYJCU" class="button">Monthly Donation</a>
      </div>
    </div>
  </div>
</div>

<div id="livestock-header">
  <img src="images/icon-livestock-white.png" class="icon">
</div>

<div class="giving">
  <div class="site-width">
    By investing in livestock, you are providing sustainable food and income for families in the region. The food can be consumed or sold, and the offspring can be used as a source of income or to increase food production.<br>

    <div class="donate">
      <h3>A Pair of Goats</h3>

      <img src="images/goats.jpg" alt="">

      <h4>COST</h4>

      <div class="amount"><sup>$</sup> 185</div>

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="DBLV6PXKAJ59U" />
        <input type="submit" name="submit" value="DONATE LIVESTOCK">
      </form>
    </div>

    <div class="donate right">
      <h3>A Pair of Pigs</h3>

      <img src="images/pigs.jpg" alt="">

      <h4>COST</h4>

      <div class="amount"><sup>$</sup> 75</div>

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="GZG9H422BHNBL" />
        <input type="submit" name="submit" value="DONATE LIVESTOCK">
      </form>
    </div>

    <div class="donate">
      <h3>Share of Goats</h3>

      <img src="images/goats.jpg" alt="">

      <h4>COST</h4>

      <div class="amount"><sup>$</sup> 50</div>

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="4H87B2RB3QS8U" />
        <input type="submit" name="submit" value="DONATE LIVESTOCK">
      </form>
    </div>

    <div class="donate right">
      <h3>Share of Pigs</h3>

      <img src="images/pigs.jpg" alt="">

      <h4>COST</h4>

      <div class="amount"><sup>$</sup> 25</div>

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="PPBLZ9UFRW3DQ" />
        <input type="submit" name="submit" value="DONATE LIVESTOCK">
      </form>
    </div>
  </div>
</div>

<div id="giving-footer">
  <div class="site-width">For People. For Good.</div>
</div>

<?php include "footer.php"; ?>