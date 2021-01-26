<?php
$PageTitle = "Livestock";
$PageClass = "livestock";
$HeaderImage = "livestock-header.jpg";
include "header.php";

function HeaderContent() { ?>
  <div id="header-header">Livestock for Life</div>

  Every Day Hope will provide families with goats or pigs that they will raise for reproduction, consumption and/or income.

  <div id="header-links">
    <a href="#giving" class="button togiving">Give Now</a>
  </div>
<?php } ?>

<script type="text/javascript">
  $(document).ready(function() {
    $(".togiving").click(function(e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: $(".giving").offset().top }, 500);
    });
  });
</script>

<div id="overview">
  <div class="site-width">
    <div class="text">
      Every Day Hope is working in impoverished communities to bring sustainability to families. Most families in the Dominican Republic are living on less than $5.00 a day. So to help this situation, Every Day Hope has created a program called "Livestock for Life", which is designed to provide a variety of livestock that will keep reproducing for family needs.

      <div class="links">
        <a href="#giving" class="button togiving">Give Now</a>
        <a href="https://vimeo.com/196649882" class="swipebox-video">Play Video <i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>

  <img src="images/icon-livestock.png" alt="" class="icon">
  <img src="images/livestock-overview1b.jpg" alt="" class="image1">

  <div class="image2" style="background-image: url(images/livestock-overview2.jpg);"></div>
</div>

<div id="details-header"><div class="site-width">Livestock for Life</div></div>

<div id="details" class="notabs">
  <div class="images">
    <div class="image1" style="background-image: url(images/livestock-details1.jpg);"></div>
    <div class="image2" style="background-image: url(images/livestock-details2.jpg);"></div>
  </div>

  <div class="site-width">
    <div class="text">
      Every Day Hope provides families with goats or pigs that they raise for reproduction, consumption and or income. The family donates the first born to Every Day Hope, which will then provide another family with livestock. This act transforms  recipients into donors while producing a profound sense of accomplishment and dignity. The program is designed to multiply in order to keep on giving. It transforms families into participants in the growth and strengthening of their community.<br>
      <br>

      Entering the Livestock for Life program begins with the individual completing an application process to demonstrate their strategy and ability to raise the given livestock on their property. There is also a mandatory set of workshops on the subject of animal care and husbandry. Every Day Hope is empowering families to make a living for themselves and to be a blessing to other community members.<br>
      <br>

      With your investment, we can see individuals, families and communities transformed.<br>
      <br>

      <a href="#giving" class="button togiving">Give Now</a>
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

<div class="giving">
  <div class="site-width">
    By investing in livestock, you are providing sustainable food and income for families in the region. The food can be consumed or sold, and the offspring can be used as a source of income or to increase food production.<br>
    <br>

    Yes! I want to purchase a share of livestock today and give hope to families in need!<br>
    <br>
    
    <div class="donate-full">
      <h3>Goats and Pigs</h3>

      <img src="images/goats.jpg" alt=""><img src="images/pigs.jpg" alt="">

      <h4>Select Donation Amount</h4>

      <div class="donate-full-amounts">
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=GWRBSMV9EDJYS&source=url" class="button">$50</a>
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=G9XGET9NQJLQE&source=url" class="button">$75</a>
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ED3LMUY3US2JS&source=url" class="button">$100</a>
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2WQHW66HP3JWW&source=url" class="button">$250</a>
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=CVA5DK3KQ74FA&source=url" class="button">$500</a>
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=48XWDQAECMZCY&source=url" class="button">$1000</a>
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=F5JH2JT57VB3U&source=url" class="button button-last">Other</a>
      </div>
    </div>

    <!-- <div class="donate">
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
    </div> -->
  </div>
</div>

<div id="giving-footer">
  <div class="site-width">For People. For Good.</div>
</div>

<?php include "footer.php"; ?>