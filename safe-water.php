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
      $('html, body').animate({ scrollTop: $(".giving").offset().top }, 500);
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

<script type="text/javascript">
  $(document).ready(function() {
    $("#details-header .button").click(function(){
      $("#details-header .button, #details .text").removeClass("current");
      $(this).add("#"+$(this).data("tab")).addClass("current");
    });
  });
</script>

<div id="details-header">
  <div class="site-width">
    How We Help:
    <span></span>
    <div class="button current" data-tab="tab1">Domestic Water Use</div>
    <div class="button" data-tab="tab2">Handpump Water Stations</div>
  </div>
</div>

<div id="details">
  <div class="site-width">
    <div class="text current" id="tab1">
      <h2>Current Domestic Water Use in the Dominican Republic</h2>

      Safe water is not easily available to all of the Dominican Republic's population. In many of the small outlying villages, many people rely on the rain water which is collected from the run off of their rooftop. The systems are not hygienic, are contaminated and even the collection containers are tainted.<br>
      <br>

      Every Day Hope partners with communities to provide safe daily use water and it is our hope to see these communities thrive. Provision of safe water alone however, will not improve health as there is an educational and awareness component that must be addressed. Community wide "Health and Hygiene Campaigns" are a vital part of a water supply project. Knowledge and behavior change as well as community involvement and commitment are crucial.<br>

      <a href="#giving" class="button togiving">Take Action</a>
    </div>

    <div class="text" id="tab2">
      <h2>Every Day Hope Water Pump Stations</h2>

      Many communities in the Dominican Republic use canal water, rain water, or other contaminated water sources in their homes for washing clothes, cleaning house, and bathing. Every Day Hope believes that this is an injustice to any people group. To rectify this situation, EDH is working with local organizations to drill safe wells and install hand pumps or electric pumps for the village's daily water usage.<br>
      <br>

      In addition to installing the pumps, EDH is currently establishing community cooperatives. The cooperatives consist of a council of people who live in the community and oversee, direct, and manage the hand pumps in their area. The cooperatives will also be educated on proper usage, regulations, and the maintenance of the pumps. These cooperatives ask a little money or time from the community members in order to maintain the wells for generations.<br>
      <br>

      Two types of Safe Water pumps that bring clean (non potable water) and relative costs. The communities, through their water cooperatives, help raise funds and collect for regular maintenance. But they need our help!<br>
      <br>

      <div class="pumps">
        <div>Well Drilling, Reserve Tank and Electric Pump</div>
        $8,000-$10,000
      </div>
      
      <div class="pumps right">
        <div>Well Drilled, Hand Pump Station</div>
        $3,000-$5,000
      </div>

      <a href="#giving" class="button togiving">Take Action</a>
    </div>
  </div>

  <div class="images cf">
    <div class="image1" style="background-image: url(images/safewater-details1.jpg);"></div>
    <div class="image2" style="background-image: url(images/safewater-details2.jpg);"></div>
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
      <h3>One Time Gift</h3>
      Your generous gift will benefit and support the many lives impacted by Every Day Hope in the Dominican Republic.<br>

      <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&#038;hosted_button_id=N32SVVWLDYJCU" class="button">One-Time Donation</a>
    </div>

    <div class="donate right">
      <h3>Premier Partner</h3>
      Your generous monthly gift will provide an on going benefit and support for the many lives impacted by Every Day Hope in the Dominican Republic.<br>

      <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&#038;hosted_button_id=N32SVVWLDYJCU" class="button">Monthly Donation</a>
    </div>
  </div>
</div>

<div id="giving-footer">
  <div class="site-width">For People. For Good.</div>
</div>

<?php include "footer.php"; ?>