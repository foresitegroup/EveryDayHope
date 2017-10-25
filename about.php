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

<div id="dr-header">
  <div class="site-width">The Dominican Republic</div>
</div>

<div id="dr">
  <div class="site-width">
    The Dominican Republic has the ninth largest economy in Latin America. Though long known for sugar production, the economy is now dominated by services. The country's current economic progress is exemplified by its advanced telecommunication system, and transportation infrastructure. Nevertheless, unemployment, government corruption, and inconsistent electric service remain major Dominican problems. The country also has "marked income inequality." Every Day Hope works to build sustainable communities, raise the standard of living for families and bring hope to the people of the DR though safe water and livestock.<br>
    <br>

    The Dominican Republic is a nation on the island of Hispaniola, part of the Greater Antilles archipelago in the Caribbean region. The western three-eighths of the island is occupied by the nation of Haiti, making Hispaniola one of two Caribbean islands, along with Saint Martin, that are shared by two countries. Both by area and population, the Dominican Republic is the second largest Caribbean nation (after Cuba), with 48,445 square kilometers (18,705 sq mi) and an estimated 10 million people, one million of which live in the capital city, Santo Domingo.<br>
    <br>

    The Dominican Republic is the most visited destination in the Caribbean. The year-round golf courses are among the top attractions on the island. As one of the region's most geographically diverse countries, the Dominican Republic boasts the Caribbean's highest mountain peak, Pico Duarte, as well as the Caribbean's largest lake and lowest elevation, Lake Enriquillo. The island has an average temperature of 26&deg;C (78.8&deg;F) and great biological diversity. The country is also home to the first cathedral, castle, monastery, and fortress in all of the Americas, located in Santo Domingo's Colonial Zone, an area declared as a World Heritage Site by UNESCO. Music and sport are of great importance in the Dominican culture, with Merengue and Bachata as the national dance and music, and baseball as the favorite sport.
  </div>
</div>

<div id="impact">
  <div class="left"></div>

  <div class="right">
    <a href="get-involved.php" class="button">Make an Impact</a>
  </div>
</div>

<div id="leadership-header">
  <div class="right">
    <img src="images/for-people-for-good.png" alt="">
  </div>

  <div class="left">
    Leadership
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $(window).on('load resize', function(){
      if (window.innerWidth > 700) {
        var highestBox = 0;
        $(".intro").each(function(){
          if($(this).height() > highestBox) { highestBox = $(this).height(); }
        });
        $(".intro").height(highestBox);
      } else {
        $(".intro").height("auto");
      }
    });

    $(".fulltext").hide();

    $(".left .readmore").click(function() {
      $(this).text(function(i, text){
        return text === "READ MORE" ? "READ LESS" : "READ MORE";
      });
      $(".left .fulltext").slideToggle(400, "linear");
    });

    $(".right .readmore").click(function() {
      $(this).text(function(i, text){
        return text === "READ MORE" ? "READ LESS" : "READ MORE";
      });
      $(".right .fulltext").slideToggle(400, "linear");
    });
  });
</script>

<div id="leadership">
  <div class="site-width">
    <div class="founder left">
      <h2>James Larson</h2>
      Every Day Hope, Co-Founder

      <img src="images/james-larson.jpg" alt="">

      <div class="intro">
        Pioneering a better way of life has always been a part of James life goals. He has exemplified this in his own story of coming to the Dominican Republic knowing no-one yet setting out to make better for those around him. James is the co-founder of Every Day Hope. He has over 20 years of managerial experience.

        <div class="readmore">READ MORE</div>
      </div>

      <div class="fulltext">
        James is the co-founder of Every Day Hope. He has over 20 years of managerial experience in the grocery industry. During his tenure, James led the company in gross profits, dollars per man hour, productivity and sales, while being promoted to oversee the training of all new management personnel. James also created, implemented and launched a health program for the company that was integrated into area public schools. This kind of proactive leadership and spearheading gained heightened trust in James' abilities that resulted in several promotions during his time with the company.<br>
        <br>

        In addition to his work, James also attended a local university as well as volunteered for several non-profit organizations. James also gained valuable experience in the construction field by designing, building and serving as general contractor for the construction of his family's personal home.<br>
        <br>

        In 2004, James and his family moved to the Dominican Republic to reside on a full-time basis. James was in charge of several programs as well as overseer and general contractor of 45 construction projects. Both James and his wife Renee hosted and coordinated numerous visiting teams from North America to help facilitate cross-cultural understanding and explore future humanitarian efforts.<br>
        <br>

        Upon seeing the great humanitarian need before them, James and Renee founded their own organization in 2006 called Every Day Ministries. James has served as the president of EDM since its inception and oversees all the daily operations. James also regularly speaks and presides over numerous conferences both in the Dominican Republic and United States.<br>
        <br>

        As if all this was not enough, James and Renee's passion for pioneering caused them to launch Every Day Hope, a nonprofit that exists to build sustainable communities in order to raise the standard of living and bring hope to the people of developing nations. EDH was created to bring safe water and  a Livestock For Life program to create sustainability in the region.<br>
        <br>

        Pioneering a better way of life has always been a part of James life goals. He has exemplified this in his own story of coming to the Dominican Republic knowing no-one yet setting out to make better for those around him. In this endeavor he has not only effected change, but brought together an amazing community for the common good. James believes, as a true pioneer spirit would, "The best work is yet to come!"
      </div>
    </div>

    <div class="founder right">
      <h2>Renee Larson</h2>
      Every Day Hope, Co-Founder

      <img src="images/renee-larson.jpg" alt="">

      <div class="intro">
        Renee has the talent, education and initiative that is required for Every Day Hope's continued success. She and James founded the non-profit Every Day Hope in answer to the growing practical needs they saw around them in the Dominican Republic.

        <div class="readmore">READ MORE</div>
      </div>

      <div class="fulltext">
        Following graduation and a degree in biology and chemistry, Renee began working for a well known paper manufacturer to oversee and maintain quality control of production. Renee then made a career move up to become a pharmaceutical representative. She launched two new drugs with success, managed her own territory, gave presentations to medical professional and trained new reps. Renee was also chosen to represent the company on a national level at several conferences.<br>
        <br>

        Following her career in pharmaceuticals, Renee home-educated their two sons from Kindergarten through High School. This called upon Renee's skills in initiative, organization and administration. She also taught in the home-school co-op as a science teacher and acted as youth leader for three different local organizations.<br>
        <br>

        Moving to the Dominican Republic in 2004, Renee worked with an organization where she oversaw a village's school and various community projects. Upon arriving in the Dominican Republic, Renee learned Spanish in the field and is now fluent in the language.<br>
        <br>

        In 2006, Renee and James founded Every Day Ministries which was launched in a geographically new area where no previous work or personnel had been established. They pioneered the new work, having gone from knowing no one to networking with 400 community leaders in business, and government officials throughout the numerous provinces EDM now resides. Renee and James have hosted numerous visiting teams to EDM where their administrative as well as cultural relations skills were paramount to the success of helping each group "cross culture".<br>
        <br>

        In 2009, Renee and James, founded a non-profit organization, Every Day Hope in answer to the growing practical needs they saw around them. Renee is the office administrator for both EDM and EDH and also serves on the board of both organizations.<br>
        <br>

        In addition, Renee launched a mentoring group for women in leadership called Deborah Generation, designed to raise up local women to assume their roles with their greatest potential. In her role as administrator, Renee has championed change by designing and implementing a multitude of training workshops. Teaching nationals on a regular basis is Renee's passion in which she hopes to empower and equip them for self-sustainability.
      </div>
    </div>
  </div>
</div>

<div id="micro-footer">
  <div class="site-width">
    Interested in Micro-Enterprise?<br>

    <a href="contact.php" class="button">Contact Us</a>
  </div>
</div>

<?php include "footer.php"; ?>