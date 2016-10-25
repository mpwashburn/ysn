<footer class="container-fluid footer">
  <div class="row">
    <div class="col-sm-4 text-center">
      <p>YSN
      <br>12655 W. Jefferson Blvd.
      <br>Los Angeles, CA 90066
      </p>
    </div>
    <div class="col-sm-4 text-center">
      <h6>Footer Content 2</h6>
    </div>
    <div class="col-sm-4 text-center">
      <div class="header-social">
          <a href="http://www.facebook.com/mcleandermatology/" onclick="target='newwindow'"><i class="fa fa-fw fa-facebook"></i></a>
          <a href="https://twitter.com/McLeanDerm/" onclick="target='newwindow'"><i class="fa fa-fw fa-twitter"></i></a>
          <a href="http://instagram.com/mclean_dermatology?ref=badge" onclick="target='newwindow'"><i class="fa fa-fw fa-instagram"></i></a>
        </div>
    </div>
  </div>
</footer>
<script>
function menuToggle() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<?php wp_footer(); ?>
</body>
</html>
