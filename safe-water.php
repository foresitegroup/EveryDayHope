<?php
$PageTitle = "Safe Water";
$PageClass = "safewater";
$HeaderImage = "safewater-header.jpg";
include "header.php";

function HeaderContent() { ?>
  <div id="header-header">Safe Water Systems</div>

  Our programs allow for people to build and grow their communities away from poverty through safe water systems and education on health &amp; hygiene.

  <div id="header-links">
    <a href="#giving" class="button togiving">Take Action</a>
  </div>
<?php } ?>

<script type="text/javascript">
  $(document).ready(function() {
    $(".togiving").click(function(e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: $("#giving").offset().top }, 500);
    });
  });
</script>

<div id="overview">
  <div class="site-width">
    <div class="text">
      Disease is among the top contributors to the perpetuation of poverty with water borne diseases being one of the highest contributing in developing nations. Each person's occupation is necessary for the survival of a community and any absence casued by sickness or death can become a serious threat to the community's survival as a whole.

      <div class="links">
        <a href="#giving" class="button togiving">Take Action</a>
        <a href="https://www.youtube.com/watch?v=fiapGVp6y4o" class="swipebox-video">Learn More <i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>

  <img src="images/icon-safewater.png" alt="" class="icon">
  <img src="images/safewater-overview1.jpg" alt="" class="image1">

  <div class="image2" style="background-image: url(images/safewater-overview2.jpg);"></div>
</div>

<div id="for-life">Livestock for Life</div>

<div id="details">
  <div class="images cf">
    <div class="image1" style="background-image: url(images/livestock-details1.jpg);"></div>
    <div class="image2" style="background-image: url(images/livestock-details2.jpg);"></div>
  </div>

  <div class="site-width">
    <div class="text">
      Every Day Hope will provide families with goats or pigs that they will raise for reproduction, consumption and or income. The family will donate the first born to Every Day Hope, which will then provide another family with livestock. The program is designed to multiply in order to keep on giving.<br>
      <br>

      The individual must go through an application process to demonstrate ability to raise the given livestock on their property and what their strategy/plan is. There is a mandatory set of workshops they must attend on the subject of animal care and husbandry. We are empowering them to make a living for themselves and to be a blessing to another community member. It keeps giving, while the participants are given a hope for an economic future.<br>
      <br>

      With your investment, we can see individuals, families and communities thrive.<br>

      <a href="#giving" class="button togiving">Take Action</a>
    </div>
  </div>
</div>

<div id="giving-header">
  <div class="right">
    <img src="images/for-people-for-good-inverse.png" alt="">
  </div>

  <div class="left">
    <img src="images/icon-hands-white.png" alt="" class="icon">

    <div>Make a Difference</div>
  </div>
</div>

<div id="giving">
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