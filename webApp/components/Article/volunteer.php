<?php (function(){ ob_start(); ?>
 <article style="background:url('/Media/images/kids-background.png') center center/cover ;" class="av-article-v1 column-1x sp av-padding-2x volunteer">
        <div class="container">
            <section class="main-shadow">
            <h2>Volunteer</h2>
                    <form action="">
                        <legend>MHI relies on volunteers in every aspect of our organization and values
the time, talents, and passions volunteers contribute to achieving of our mission, through leadership,
programs, special projects and serving the public.</legend>
                       <h4>Volunteer Information</h4>
                        <fieldset>
                            <label>First Name</label>
                            <input type="text"/>
                        </fieldset>
                        <fieldset>
                            <label>Last Name</label>
                            <input type="text"/>
                        </fieldset>
                        <fieldset>
                            <label>Email</label>
                            <input type="email"/>
                        </fieldset>
                        <h4>Volunteer Address</h4>
                        <fieldset>
                            <label>Address </label>
                            <input type="text"/>
                        </fieldset>
                        <fieldset>
                            <label>Address Line 2</label>
                            <input type="text"/>
                        </fieldset>
                        <fieldset>
                            <label>City</label>
                            <input type="text"/>
                        </fieldset>
                        <fieldset>
                            <label>State/Province/Region</label>
                            <input type="text"/>
                        </fieldset>
                        <fieldset>
                            <label>Postal / Zip Code</label>
                            <input type="text"/>
                        </fieldset>
                        <fieldset>
                            <label>Reason for volunteering</label>
                            <input type="text"/>
                        </fieldset>
                        <h4>Volunteer Skills</h4>
                        <fieldset>
                            <label>Special Skills</label>
                            <input type="text"/>
                        </fieldset>
                        <button class="second-btn">Submit</button>
                    </form>
            </section>
        </div>
    </article>
 <?php echo ob_get_clean(); })(); ?>