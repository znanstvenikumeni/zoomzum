<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zoom_ZUM
 */

?>

	</div><!-- #content -->



<div class="footer-zum">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-6">
            <p>Znanstvenik u meni projekt je <a href="https://initiative.togetherforknowledge.eu">Together for Knowledge Inicijative</a>.</p>
            <small>© 2019 Together for Knowledge Inicijativa</small><br><br>

          </div>
          <div class="col-md-6">
            <b>Resursi</b><br><br>
            <a href="/pr">Kutak za novinare</a><br>
            <a href="/privatnost">Politika privatnosti</a><br>
            <a href="https://confluence.educateam.hr/x/HQBj">Pomoć natjecateljima i mentorima</a><br>
            <a href="/o-projektu">O projektu</a><br>
            ZUM na <a href="https://instagram.com/znanstvenikumeni">Instagramu</a> i <a href="https://facebook.com/znanstvenikumeni">Facebooku</a>
        </div>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
      function jury(member){
        $('.jury-'+member).css('display', 'block');
      }
      function close(element){
        $('.'+element).css('display', 'none');
      }
    </script>
 
<?php wp_footer(); ?>

</body>
</html>
