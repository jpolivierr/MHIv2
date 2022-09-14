<?php (function(){ ob_start(); ?>
 <article class="av-article-v1 columns-reverse sp" >
        <div class="container">
            <section >
                    <h2>Our Mission</h2>
                    <h3>To educate and inspire</h3>
                    <p>Our mission is to provide a free high quality academic and vocational education for Haitian children to empower them to attain self-sufficiency and to become leaders in their communities. Show your support by contributing to the cause.</p>
                    <?php mount("Button","button",["Donate","/donate","main-btn",null])?>
                </section>
                <figure >
                   <img src="Media/images/mhikid.png" ?>
                </figure>
        </div>
    </article>
    
 <?php echo ob_get_clean(); })(); ?>
