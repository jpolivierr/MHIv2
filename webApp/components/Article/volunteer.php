<?php (function(){ ob_start(); ?>
 <article class="av-article-v1 sp center-content bk-light av-padding-1x ">
        <div class="container">
            <section >
            <h4>News Letter</h4>
                    <form action="">
                        <fieldset>
                            <label>Full Name</label>
                            <input type="text" placeholder="full Name"/>
                        </fieldset>
                        <fieldset>
                            <label>Email</label>
                            <input type="email" placeholder="Email"/>
                        </fieldset>
                        <button class="second-btn">Subscribe</button>
                    </form>
            </section>
        </div>
    </article>
 <?php echo ob_get_clean(); })(); ?>