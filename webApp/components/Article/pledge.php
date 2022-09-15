<?php (function(){ ob_start(); ?>
 <article class="av-article-v1 sp av-padding-2x">
        <div class="container">
            <section >
                    <h2>Take The Pledge</h2>
                    <h3>How you can help?</h3>
                    <p>We would love for you to join us in making a difference in the lives of the children in Haiti. We welcome any support that helps our purpose. Get started by clicking the link below.</p>
                    <?php mount("Button","button",["Donate","/donate","main-btn",null])?>
                </section>
                <figure >
                   <img src="Media/images/mhi-teams.png" ?>
                </figure>
        </div>
    </article>
 <?php echo ob_get_clean(); })(); ?>