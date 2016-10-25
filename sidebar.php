    <!-- SIDEBAR !!!!!!!!!!! MAKE INTO WIDGET OR TEMPLATE PART!!!!!!!!!!!!!! -->



        <!-- <img class="text=center img-responsive" src="http://placehold.it/265x200"> -->

      <div class="box-1-text">
<?php
    $args = array(
        'numberposts' => '1',
    );
    $recent_posts = wp_get_recent_posts( $args );
    foreach( $recent_posts as $recent ):

    $post_id        = $recent['ID'];
    $post_url       = get_permalink($recent['ID']);
    $post_title     = $recent['post_title'];
    $post_content   = $recent['post_content'];
    $post_thumbnail = get_the_post_thumbnail($recent['ID']);

    endforeach;
?>


      <h3>Read</h3>
      <p><img class="book-cover" src="<?php bloginfo('template_url'); ?>/images/secrets_young_successful_cover.jpg">
      Debitis lucilius conclusionemque mei id. An docendi detracto vivendum vis, sumo lorem ad ius. Suas mazim moderatius ad his, duo id graece explicari adolescens. Est cu fugit decore oporteat.Debitis lucilius conclusionemque mei id.</p>
      <hr>

      <h3>Stay Updated!</h3>
      <form accept-charset="UTF-8" action="https://px275.infusionsoft.com/app/form/process/14d9bb80b372af0fd75200a4763f394b" class="infusion-form" method="POST">
    <input name="inf_form_xid" type="hidden" value="14d9bb80b372af0fd75200a4763f394b" />
    <input name="inf_form_name" type="hidden" value="Newsletter Homepage Sign Up" />
    <input name="infusionsoft_version" type="hidden" value="1.58.0.59" />
    <div class="infusion-field">
        <!-- <label for="inf_field_FirstName">First Name *</label> -->
        <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" placeholder="First Name" />
    </div>
    <div class="infusion-field">
        <!-- <label for="inf_field_Email">Email *</label> -->
        <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" placeholder="Email" />
    </div>
    <div class="infusion-submit">
        <input type="submit" value="Sign me up!" />
    </div>
</form>
<script type="text/javascript" src="https://px275.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=01390847add552fdafd6729ce02c1bce"></script>

