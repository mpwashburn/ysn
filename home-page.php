<?php /*Template Name: homepage.php*/ ?>
<?php get_header(); ?>


<main id="main">
  <section class="cta">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <?php get_template_part('content', get_post_format() ); ?>
        </div><!--close col-sm-9-->
        <aside id="sidebar" class="col-sm-3 home-sidebar">
            <?php get_sidebar(); ?>
        </aside>
      <hr>

      </div> <!--close row-->
    </div><!--close container-->
  </section><!--close section-->
</main> <!--Close Main -->

<?php get_footer(); ?>


