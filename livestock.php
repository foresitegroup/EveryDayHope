<?php
$PageTitle = "Livestock";
$PageClass = "livestock";
$HeaderImage = "livestock-header.jpg";
include "header.php";

function HeaderContent() { ?>
  <div id="header-header">Livestock for Life</div>

  Every Day Hope will provide families with goats or pigs that they will raise for reproduction, consumption and/or income.

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
      Every Day Hope is working in impoverished communities to bring sustainability to families. Most families in the Dominican Republic are living on less than $5.00 a day. So to help this situation, Every Day Hope has created a program called "Livestock for Life", which is designed to provide a variety of livestock that will keep reproducing for family needs.

      <div class="links">
        <a href="#giving" class="button togiving">Take Action</a>
        <a href="https://vimeo.com/196649882" class="swipebox-video">Learn More <i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>

  <img src="images/icon-livestock.png" alt="" class="icon">
  <img src="images/livestock-overview1.jpg" alt="" class="image1">

  <div class="image2" style="background-image: url(images/livestock-overview2.jpg);"></div>
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
    By investing in livestock, you are providing sustainable food and income for families in the region. The food can be consumed or sold, and the offspring can be used as a source of income or to increase food production.
  </div>
</div>

<?php include "footer.php"; ?>