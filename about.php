<?php
$PageTitle = "About";
$PageClass = "about";
$HeaderImage = "about-header.jpg";
include "header.php";

function HeaderContent() { ?>
  <div id="header-header">Our Vision &amp; Mission</div>

  Every Day Hope is committed to building safe water systems for communities and sustainable economic opportunities with livestock for impoverished families in the Dominican Republic.

  <div id="header-links" class="learnmore">
    LEARN MORE
  </div>
<?php } ?>

<div id="post-header">
  <div class="site-width">
    We believe that everyone throughout the world has something to offer for the betterment of people today and future generations. If each one of us would contribute what we are capable of, the world's atmosphere would change for people, for good.
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $(".item + DIV").hide();
    $(".item").click(function() {
      $(this).next("DIV").slideToggle(400, "linear").toggleClass("on");
    });
  });
</script>

<div id="values">
  <div class="site-width">
    <div class="left">
      <h1>Our Values</h1>

      Every Day Hope operates with the purpose of building sustainable communities that start with the individual. Our purpose is to improve the quality of life for good. For these reasons we have built and operate our organization according to the following values:
    </div>

    <div class="right">
      <img src="images/icon-hands.png" alt=""><br>

      <div class="item">+ PEOPLE</div>
      <div>
        There is an intrinsic value in each person which must be honored. People are more important than programs.
      </div>

      <div class="item">+ INTEGRITY</div>
      <div>
        Our organization's words and actions must match. Operating in integrity is good stewardship.
      </div>

      <div class="item">+ COMMUNITY</div>
      <div>
        Community represents what people can do together when unified in purpose. Within the community there are individuals represented with thoughts, beliefs and traditions of their own. Every Day Hope strives to facilitate communities to become strong and viable.
      </div>

      <div class="item">+ EDUCATION</div>
      <div>
        At the core of Every Day Hope's developments, we weave the thread of furthering education. Education empowers the individual, propels advancement, and transforms generations.
      </div>

      <div class="item">+ MOBILIZATION</div>
      <div>
        Every Day Hope stimulates communities to engage in self-activities, leading to increased self reliance. We aim to create sustainability, not dependability.
      </div>

      <div class="item">+ PURPOSE</div>
      <div>
        Every Day Hope plans and strategizes with purpose and vision for the future. Each step is part of a bigger plan.
      </div>

      <div class="item">+ EXCELLENCE</div>
      <div>
        Actions done with excellence develop confidence and hope. Hope creates an atmosphere for community empowerment.
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>