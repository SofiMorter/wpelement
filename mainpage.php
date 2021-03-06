<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
<div class="container">
<div class="row">
    <section class="sec-hat col-sm-12">
        <div class="block">
            <div class="block-bg"></div>
            <div class="block-content">
                <h2>
                    <?php the_field('заголовок_главной'); ?>
                </h2>

                <p>
                    <?php the_field('описание2_главной'); ?>
                </p>
            </div>
        </div>
        <div class="fotorama interior-block" data-width="1200" data-height="650" data-autoplay="true" data-loop="true" data-arrows="false" data-click="true" data-swipe="true" nav: 'false' data-fit="cover">
            <img src="<?php echo get_field('image1')['url']; ?>" alt="">
            <img src="<?php echo get_field('image2')['url']; ?>" alt="">
            <img src="<?php echo get_field('image3')['url']; ?>" alt="">
            <img src="<?php echo get_field('image4')['url']; ?>" alt="">
            <img src="<?php echo get_field('image5')['url']; ?>" alt="">
        </div>
    </section>
</div>
<!-- row -->
</div>

    <section class="ourmaterials-grid">
        <h2 id="h2">Использование наших материалов в стилях интерьера</h2>
        <div class="grid-wrapper" id="grid-wrapper">
            <div class="material-grid-item">
                <img src="<?php echo get_field('style_img1')['url']; ?>" class="" id="materialsImg">
                <div class="label-top"><?php the_field('style1'); ?></div>
                <div class="label-bottom"><?php the_field('style_desc1'); ?></div>
            </div>
            <div class="material-grid-item">
                <img src="<?php echo get_field('style_img2')['url']; ?>" class="" id="materialsImg">
                <div class="label-top"><?php the_field('style2'); ?></div>
                <div class="label-bottom"><?php the_field('style_desc2'); ?></div>
            </div>
            <div class="material-grid-item">
                <img src="<?php echo get_field('style_img3')['url']; ?>" class="" id="materialsImg">
                <div class="label-top"><?php the_field('style3'); ?></div>
                <div class="label-bottom"><?php the_field('style_desc3'); ?></div>
            </div>
            <div class="material-grid-item">
                <img src="<?php echo get_field('style_img4')['url']; ?>" class="" id="materialsImg">
                <div class="label-top"><?php the_field('style4'); ?></div>
                <div class="label-bottom"><?php the_field('style_desc4'); ?></div>
            </div>
            <div class="material-grid-item">
                <img src="<?php echo get_field('style_img5')['url']; ?>" class="" id="materialsImg">
                <div class="label-top"><?php the_field('style5'); ?></div>
                <div class="label-bottom"><?php the_field('style_desc5'); ?></div>
            </div>
            <div class="material-grid-item">
                <img src="<?php echo get_field('style_img6')['url']; ?>" class="" id="materialsImg">
                <div class="label-top"><?php the_field('style6'); ?></div>
                <div class="label-bottom"><?php the_field('style_desc6'); ?></div>
            </div>
            <div style="background: url(<?php echo get_field('style_img1')['url']; ?>);" class="lightbox"></div>
            <div style="background: url(<?php echo get_field('style_img2')['url']; ?>);" class="lightbox"></div>
            <div style="background: url(<?php echo get_field('style_img3')['url']; ?>);" class="lightbox"></div>
            <div style="background: url(<?php echo get_field('style_img4')['url']; ?>);" class="lightbox"></div>
            <div style="background: url(<?php echo get_field('style_img5')['url']; ?>);" class="lightbox"></div>
            <div style="background: url(<?php echo get_field('style_img6')['url']; ?>);" class="lightbox"></div>
        </div>
    </section>




        <section class="sec-cat">
            <h2 id="sec-cat">Имитация различных эффектов в интерьере</h2>

            <!-- Левая часть -->
            <div class="sec-sat-row-wrap" id="sec-cat-row-wrap">
                <!-- чтобы список и грид встали горизонтально -->
                <div class="cat-list-wrap">
                    <!-- чтобы выровнять список с кнопкой -->
                    <div class="tab">
                        <input type="radio" id="tab1" name="qwe" checked />
                        <label for="tab1" class="tab-title">Декоративные штукатурки</label>
                        <div class="tab-content">
                            <p><?php the_field('imitation1'); ?></p>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab2" name="qwe" />
                        <label for="tab2" class="tab-title">Венецианские штукатурки</label>
                        <div class="tab-content">
                            <p><?php the_field('imitation2'); ?></p>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab3" name="qwe" />
                        <label for="tab3" class="tab-title">Декоративные краски</label>
                        <div class="tab-content">
                            <p><?php the_field('imitation3'); ?></p>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab4" name="qwe" />
                        <label for="tab4" class="tab-title">Фасадные штукатурки</label>
                        <div class="tab-content">
                            <p><?php the_field('imitation4'); ?></p>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab5" name="qwe" />
                        <label for="tab5" class="tab-title">Паркет из России</label>
                        <div class="tab-content">
                            <p><?php the_field('imitation5'); ?></p>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab6" name="qwe" />
                        <label for="tab6" class="tab-title">Выключатели Jung</label>
                        <div class="tab-content">
                            <p><?php the_field('imitation6'); ?></p>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab7" name="qwe" />
                        <label for="tab7" class="tab-title">Каменный шпон</label>
                        <div class="tab-content">
                            <p><?php the_field('imitation7'); ?></p>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <a href="../catalog/"><button type="button" name="button">В каталог</button></a>
                </div>
                <!-- /.cat-list-wrap -->

                <!-- Правая часть -->

                <div class="item-grid">
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img1')['url']; ?>)">
                        <div class="item-label">Бетон</div>
                    </div>
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img2')['url']; ?>)">
                        <div class="item-label">Травертин</div>
                    </div>
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img3')['url']; ?>)">
                        <div class="item-label">Камень</div>
                    </div>
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img4')['url']; ?>)">
                        <div class="item-label">Металл</div>
                    </div>
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img5')['url']; ?>)">
                        <div class="item-label">Старина</div>
                    </div>
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img6')['url']; ?>)">
                        <div class="item-label">Дерево</div>
                    </div>
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img7')['url']; ?>)">
                        <div class="item-label">Рельеф</div>
                    </div>
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img8')['url']; ?>)">
                        <div class="item-label">Кожа</div>
                    </div>
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img9')['url']; ?>)">
                        <div class="item-label">Бархат</div>
                    </div>
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img10')['url']; ?>)">
                        <div class="item-label">Шелк</div>
                    </div>
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img11')['url']; ?>)">
                        <div class="item-label">Перламутр</div>
                    </div>
                    <div class="item" style="background-image: url(<?php echo get_field('imitation_img12')['url']; ?>)">
                        <div class="item-label">Лофт</div>
                    </div>
                </div>
            </div>
            <!-- /.se-sat-row-wrap -->
        </section>
    

    <section class="sec-pref">
        <!-- <div class="block-pref"> -->
        <div class="block-desc_img">
            <div class="block-desc_label">Что делает нас <br />уникальными</div>
        </div>
        <!-- </div> -->
        <div class="block-desc">
            <ul>
                <li>Официальный дистрибьютор San Marco</li>
                <li>Предоставляем консультации мастера</li>
                <li>Все покрытия гипоаллергенны</li>
                <li>Гарантия на долговечность покрытия</li>
                <li>Покрытия устойчивы к огню и влаге</li>
                <li>Маскируют дефекты поверхностей</li>
            </ul>
        </div>
    </section>


    <section class="sec-blog">
        <h2 id="blogH2">Полезные статьи и советы мастеров</h2>
        <div class="blog-grid" id="blogGrid">
            <div class="blog-item item1">
                <h3>Как использовать штукатурку на бетонных стенах</h3>
            </div>
            <div class="blog-item item2">
                <h3>Как использовать штукатурку на бетонных стенах</h3>
            </div>
            <div class="blog-item item3">
                <h3>Как использовать штукатурку на бетонных стенах</h3>
            </div>
            <div class="blog-item item4">
                <h3>Как использовать штукатурку на бетонных стенах</h3>
            </div>
            <div class="blog-item item5">
                <h3>Как использовать штукатурку на бетонных стенах</h3>
            </div>
            <div class="blog-item item6">
                <h3>Как использовать штукатурку на бетонных стенах</h3>
            </div>
            <div class="blog-item item7">
                <h3>Как использовать штукатурку на бетонных стенах</h3>
            </div>
            <div class="blog-item item8">
                <h3>Как использовать штукатурку на бетонных стенах</h3>
            </div>
        </div>
        <!-- blog-grid -->
    </section>

<?php get_footer(); ?>