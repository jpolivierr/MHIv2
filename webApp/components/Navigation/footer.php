<?php (function(){ ob_start(); ?>
 <article class="av-article-v1 sp sp-footer column-4x column-top av-padding-2x av-padding-flush-bottom" >
        <div class="container">
            <section >
                    <h4>Contact Us</h4>
                     <ul>
                        <a><li>18680 NE 2nd Ave</li></a>
                        <a><li>Miami, Fl, 33179</li></a>
                        <a><li>info@ourmhi.org</li></a>
                        <a><li>ourmhi.org</li></a>
                     </ul>
            </section>
            <section >
                    <h4>Navigation</h4>
                    <ul>
                        <a href="/"><li>Home</li></a>
                        <a href="/about"><li>About Us</li></a>
                        <a href="/faq"><li>FAQ</li></a>
                        <a href="/volunteer"><li>Volunteer</li></a>
                        <a href="/contact"><li>Contact Us</li></a>
                     </ul>
            </section>
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
            <section >
                   <figure>
                    <a href="/">
                        <img src="Media/images/mhilogos.png"/>
                    </a>
                     
                   </figure>
            </section>
        </div>
    </article>
    
 <?php echo ob_get_clean(); })(); ?>