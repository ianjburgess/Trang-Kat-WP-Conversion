<?php
/*
Template Name: contact page
*/
get_header(); ?>

<div class="container content-container">
    <div class="row" style="padding:50px 25px 0 25px;">
        <iframe width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBUW4J_O5eFqMhUErCbtNfLfYR6aT0_0IE&q=39+sunhill+cres+ardeer&zoom=15" allowfullscreen></iframe>
    </div>
    <div class="col-md-6 contact-details">
        </br><h2>Contact</h2>
        <p>For further information on pricing or to book your session</p> 
        <p>please either call the studio or use the contact form.</p>
        <p>I will reply within 24 hours.</p></br>
        <h4>Phone:</h4>
        <p>0467 299 885</p></br>
        <h4>Email:</h4>
        <p>trangkatphotography@gmail.com</p></br>
        <h4>Studio:</h4>
        <h5>Booking Required</h5>
        <p>39 Sunhill Crescent</p>
        <p>Ardeer, 3022 VIC</p>
    </div>

    <div class="col-md-6" style="margin:auto;">
        <iframe 
            src="<?php bloginfo('template_url'); ?>/js/mailer/form.html" 
            style="min-width:260px;width:100%;height:1200px;border:none;"
            frameborder="none" 
            allowTransparency="true" >
        </iframe>
    </div>
</div>
    </div>
</div>

<?php get_footer(); ?>