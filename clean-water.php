<?php
$PageTitle = "Clean Water";
$PageClass = "safewater";
$HeaderImage = "cleanwater-header.jpg";
include "header.php";

function HeaderContent() { ?>
  <div id="header-flex">
    <div id="header-header">Clean Water Systems</div>

    <div id="header-video">
      <div id="header-video-wrap">
        <iframe src="https://player.vimeo.com/video/323827886?title=0&byline=0&portrait=0" width="820" height="349" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  
  <div id="header-flex-bottom">
    Our programs allow for people to build and grow their communities away from poverty through safe water systems and education on health &amp; hygiene.

    <div id="header-links">
      <a href="#giving" class="button togiving">Give Now</a>
    </div>
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
      Disease is among the top contributors to the perpetuation of poverty with water borne diseases being one of the highest contributing in developing nations. Each person's occupation is necessary for the survival of a community and any absence casued by sickness or death can become a serious threat to the community's survival as a whole.

      <div class="links">
        <a href="#giving" class="button togiving">Give Now</a>
        <a href="https://vimeo.com/219036131" class="swipebox-video">Play Video <i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>

  <img src="images/icon-safewater.png" alt="" class="icon">
  <img src="images/safewater-overview1.jpg" alt="" class="image1">

  <div class="image2" style="background-image: url(images/safewater-overview2.jpg);"></div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $("#details-header .button").click(function(){
      $("#details-header .button, #details .text, #details .images").removeClass("current");
      $(this).add("#"+$(this).data("tab")).addClass("current");
      $(this).add("."+$(this).data("tab")).addClass("current");
    });
  });
</script>

<div id="details-header">
  <div class="site-width">
    How We Help:
    <span></span>
    <div class="button current" data-tab="tab1">Water Stations</div>
    <div class="button" data-tab="tab2">Wellness Campaigns</div>
  </div>
</div>

<div id="details">
  <div class="site-width">
    <div class="text current" id="tab1">
      <h2>Every Day Hope Water Stations</h2>

      Clean running water is not available to all of the Dominican Republic's population. Rural communities face the most challenges, as many people obtain their water from sources that are unprotected and contaminated. Others must use contaminated canal water or rain water collected from contaminated rooftop systems which are often without water during the dry season. Utilizing contaminated water for domestic use, leads to disease. Disease leads to loss of time, money, work and quality of life.<br>
      <br>

      Every Day Hope believes that clean water changes lives. To bring hope to this situation, EDH is collaborating with international partners, local organizations and communities to drill safe wells and build water stations. The water stations implements either a hand pump or electric pump depending on the community's demographics and daily water usage.<br>
      <br>

      In addition to installing the pumps, Every Day Hope establishes community cooperatives. The cooperatives consist of a council of people who live in the community and oversee, direct, and manage the water stations in their area. The cooperatives are also educated on proper usage, regulations, and the maintenance of the pumps. These cooperatives help raise funds and collect a minimal monthly usage fee from the community members in order to maintain the wells for generations. This promotes sustainability and a positive approach to being the change. But they need our help to begin.<br>
      <br>

      There are two types of Clean Water Stations that bring clean (non potable water) to communities. The relative costs are as follows:<br>
      <br>

      <div class="pumps">
        <div>Well Drilling, Reserve Tank and Electric Pump</div>
        $6,000-$9,000
      </div>

      <div class="pumps right">
        <div>Well Drilled, Hand Pump Station</div>
        $3,000-$5,000
      </div>

      <a href="#giving" class="button togiving">Give Now</a>
    </div>

    <div class="text" id="tab2">
      <h2>Clean Water Also Involves Education</h2>

      Access to clean water can protect and save lives, just because it's there. Many people are without clean water for daily living in the Dominican Republic as there are not even water lines to carry usable water to their communities. Every Day Hope partners with local communities to establish wells that provide safe daily use water with the purpose of seeing communities thrive.<br>
      <br>

      We believe water is one of the ways to break the cycle of poverty, to protect and save lives, and to bring hope. Provision of clean water alone however, will not improve health as there is an educational and awareness component that must be addressed. Community wide "Health and Hygiene Campaigns" are a vital part of a water supply project. Knowledge and behavior change as well as community involvement and commitment are crucial for transformation.<br>
      <br>

      <a href="#giving" class="button togiving">Give Now</a>
    </div>
  </div>

  <div class="tab1 images cf current">
    <div class="image1" style="background-image: url(images/safewater-details1.jpg);"></div>
    <div class="image2" style="background-image: url(images/cleanwater-details2.jpg);"></div>
  </div>

  <div class="tab2 images cf">
    <div class="image1" style="background-image: url(images/cleanwater-tab2-details1.jpg);"></div>
    <div class="image2" style="background-image: url(images/cleanwater-tab2-details2.jpg);"></div>
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

<script type="text/javascript">
  $(document).ready(function() {
    $(window).on('load resize', function(){
      if (window.innerWidth > 700) {
        var highestBox = 0;
        $(".donate").each(function(){
          if($(this).height() > highestBox) { highestBox = $(this).height(); }
        });
        $(".donate").height(highestBox);
      } else {
        $(".donate").height("auto");
      }
    });
  });
</script>

<div class="giving">
  <div class="site-width">
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

<div id="giving-footer">
  <div class="site-width">For People. For Good.</div>
</div>

<?php include "footer.php"; ?>