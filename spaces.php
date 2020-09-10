<?php
/*
Template Name: Пространства
*/
?>
<?php get_header(); ?>



<div class="page-content-wrapper">
  <section class="spaces-first">
    <div>
      Выберите пространство<br>для декорирования
    </div>
    <ul>
      <li><a href="http://element1.kz/spaces/gostinaya/">Гостиная</a></li>
      <li><a href="http://element1.kz/spaces/bedroom/">Спальня</a></li>
      <li><a href="http://element1.kz/spaces/detskaya/">Детская</a></li>
      <li><a href="http://element1.kz/spaces/vannaya/">Ванная комната</a></li>
      <li><a href="http://element1.kz/spaces/kuhnya/">Кухня</a></li>
      <li><a href="http://element1.kz/spaces/garazh/">Гараж</a></li>
      <li><a href="http://element1.kz/spaces/ofis/">Офис</a></li>
      <li><a href="http://element1.kz/spaces/kommercheskie-pomeshheniya/">Коммерческие помещения</a></li>
      <li><a href="http://element1.kz/spaces/fasady/">Для наружных работ</a></li>
    </ul>
  </section>
  <section class="space-grid">
    <div class="space-grid_row">
      <div class="space-grid_row-big">
        <a href="http://element1/spaces/gostinaya/" class="space-grid_a">
          <div class="box-img" style="background-image: url(<?php echo get_field('spaces_img1')['url']; ?>);">
            <span>Гостиная</span></div>
        </a>
      </div>
      <div class="space-grid_row-triple">
        <div class="space-grid_row-triple_big">
          <a href="http://element1.kz/spaces/bedroom/" class="space-grid_a">
            <div class="box-img" style="background-image: url(<?php echo get_field('spaces_img2')['url']; ?>);">
              <span>Спальня</span></div>
          </a>
        </div>
        <div class="space-grid_row-triple_smol">
          <a href="http://element1.kz/spaces/detskaya/" class="space-grid_a">
            <div class="box-img" style="background-image: url(<?php echo get_field('spaces_img3')['url']; ?>);">
              <span>Детская комната</span></div>
          </a>
        </div>
        <div class="space-grid_row-triple_smol">
          <a href="http://element1.kz/spaces/vannaya/" class="space-grid_a">
            <div class="box-img" style="background-image: url(<?php echo get_field('spaces_img4')['url']; ?>);">
              <span>Ванная комната</span></div>
          </a>
        </div>
      </div>
    </div>
    <div class="space-grid_row">
      <a href="http://element1.kz/spaces/kuhnya" class="space-grid_a">
        <div class="box-img" style="background-image: url(<?php echo get_field('spaces_img5')['url']; ?>);">
          <span>Кухня</span></div>
      </a>
    </div>
    <div class="space-grid_row">

      <div class="space-grid_row-triple">
        <div class="space-grid_row-triple_big">
          <a href="http://element1.kz/spaces/garazh/" class="space-grid_a">
            <div class="box-img" style="background-image: url(<?php echo get_field('spaces_img6')['url']; ?>);">
              <span>Гараж</span></div>
          </a>
        </div>
        <div class="space-grid_row-triple_smol">
          <a href="http://element1.kz/spaces/ofis/" class="space-grid_a">
            <div class="box-img" style="background-image: url(<?php echo get_field('spaces_img7')['url']; ?>);">
              <span>Офис</span></div>
          </a>
        </div>
        <div class="space-grid_row-triple_smol">
          <a href="http://element1.kz/spaces/kommercheskie-pomeshheniya/" class="space-grid_a">
            <div class="box-img" style="background-image: url(<?php echo get_field('spaces_img8')['url']; ?>);">
              <span>Коммерческие помещения</span></div>
          </a>
        </div>
      </div>
      <div class="space-grid_row-big">
        <a href="http://element1.kz/spaces/fasady/" class="space-grid_a">
          <div class="box-img" style="background-image: url(<?php echo get_field('spaces_img9')['url']; ?>);">
            <span>Для наружных работ</span></div>
        </a>
      </div>
    </div>
  </section>
</div>



<?php get_footer(); ?>