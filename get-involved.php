<?php
$PageTitle = "Get Involved";
$PageClass = "get-involved";
$HeaderImage = "get-involved-header.jpg";
include "header.php";

function HeaderContent() { ?>
  <div id="header-header">Make a Difference</div>

  By investing in livestock, clean water, and community educational programs you are providing people with an opportunity for sustainability, dignity and self-reliance. Give a gift that brings hope for a bright tomorrow.

  <div id="header-links">
    <span>Ways To Give</span>
  </div>
<?php } ?>

<div id="one-time">
  <div class="site-width">
    <h1>Give Hope</h1>

    When you give hope, your generous gift will be applied where it is needed most to benefit and support the lives impacted by Every Day Hope in the Dominican Republic.<br>
    <br>

    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&#038;hosted_button_id=H4F3B9QZ32DRS" class="button">Donate</a>
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
      By investing in CLEAN WATER Stations and Wellness Campaigns you are positioning a community for better health, quality of living and sustainability. Help bring clean water to a community by partnering with Every Day Hope.<br>

      <div class="donate">
        <h3>Clean Water - Give Now</h3>
        Your generous gift will change lives in communities through the availability of clean water stations and community educational programs.<br>

        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&#038;hosted_button_id=N32SVVWLDYJCU" class="button">Donate Now</a>
      </div>

      <div class="donate right">
        <h3>Clean Water - Become a Partner</h3>
        Your scheduled monthly gifts will provide ongoing support of community water projects and educational programs to support the development of sustainability.<br>

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
    By giving an animal, it is like providing a family with a small business. It produces food and income for families that can be consumed or sold. The offspring can be used as a resource to access school, medical care, food and sustainability.<br>

    <div class="donate">
      <h3>A Pair of Goats</h3>

      <img src="images/goats.jpg" alt="">

      <h4>COST</h4>

      <div class="amount"><sup>$</sup> 185</div>

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
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

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="GZG9H422BHNBL" />
        <input type="submit" name="submit" value="DONATE LIVESTOCK">
      </form>
    </div>

    <div class="donate">
      <h3>Share of Goats</h3>

      <img src="images/goats.jpg" alt="">

      <h4>COST</h4>

      <div class="amount"><sup>$</sup> 65</div>

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
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

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
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