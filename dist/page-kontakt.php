<?php
get_header();

?>
<section class="contact">
  <article class="contact__wrapper">
    <div class="item__box">
      <div class="item__box--adress center">
        <h4 class="yellow">Serdecznie zapraszamy!</h4>
        <p>
          Sochaczewska 33A, Błonie<br>
          <a href="tel:+48604530134">+48 604 530 134</a><br>
          <a href="mailto:kontakt@restauracjajablonie.pl">kontakt@restauracjajablonie.pl</a>
        </p>
      </div>
      <div class="item__box--form">
        <?php echo do_shortcode('[wpforms id="254"]');?>
      </div>
    </div>
    <div class="item__opening center">
      <h4 class="yellow">
        Godziny otwarcia
      </h4>
      <div class="wrapper">
        <div class="breakfest">
          <h4>Śniadania</h4>
          6:15 – 9:00
        </div>
        <div class="restaurant">
          <h4>Restauracja</h4>
          12:00 – 21:00
        </div>
    </div>
  </article>
  <article class="contact__location center">
    <h3 class="yellow">Dojazd</h3>
    <p>
      Restauracja położona jest w Błoniu przy skrzyżowaniu drogi krajowej 92 (trasa Poznań – Sochaczew – Warszawa) oraz drogi wojewódzkiej 579 (Grodzisk – Nowy Dwór Mazowiecki).
    </p>
    <p>
      Dla gości restauracji dostępny jest bezpłatny parking z wjazdem od ulicy Targowej.
    </p>
  </article>
</section>

<?php get_footer(); ?>
</body>

</html>