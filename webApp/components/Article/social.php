<?php (function(){ ob_start(); ?>
 <article class="av-article-v1 sp center-content ">
        <div class="container">
            <section >
                    <h2>Follow Us on Social Media</h2>
                    <div class="social">
                      <a href="https://www.facebook.com/ourmhi"><i class="fa-brands fa-facebook"></i></a>
                      <a href="https://www.instagram.com/ourmhi/" ><i class="fa-brands fa-instagram"></i></a>
                      <a href="https://www.linkedin.com/company/many-hands-international-inc/about/" ><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <p>With your help, we are able to have quality professors and school supplies for our school. Become a donor today and join us as we work to build a path to a brighter future for our students</p>
                    
                    <?php mount("Button","button",["Donate","/donate","main-btn",null])?>
            </section>
        </div>
    </article>
 <?php echo ob_get_clean(); })(); ?>