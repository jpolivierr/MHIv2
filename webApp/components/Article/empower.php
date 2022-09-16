<?php (function(){ ob_start(); ?>
 <article class="av-article-v1 sp av-padding-2x design">
        <div class="container">
            <section >
                    <h2>Empower With Education</h2>
                    <h3>Support our students in Haiti</h3>
                    <p>We are a nonprofit organization dedicated to provide not only an educational pathways for the youth in Haiti but also to enrich their lives and communities through training and education beyond school.</p>
                    <?php mount("Button","button",["Learn More","/about","main-btn",null])?>
                </section>
                <figure >
                   <img src="Media/images/students.png" ?>
                </figure>
        </div>
    </article>
    
 <?php echo ob_get_clean(); })(); ?>
