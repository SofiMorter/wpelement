<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
<div class="container1440 mt-100">
    <section class="sec-hat">
        <div class="block">
            <div class="block-bg"></div>
            <div class="block-content">
                <h2>
                <?php the_field('заголовок_главной'); ?>
                </h2>
                <p>
                <?php the_field('описание1_главной'); ?>
                </p>
                <p>
                <?php the_field('описание2_главной'); ?>
                </p>
            </div>
        </div>
        <div class="fotorama interior-block" data-width="1200" data-height="650" data-autoplay="true" data-loop="true"
            data-arrows="false" data-click="true" data-swipe="true" nav: 'false' data-fit="cover">
            <?php if( get_field('image1') ): ?>
    <img src="<?php the_field('image1')['url']; ?>" />
<?php endif; ?>

<?php if( get_field('image2') ): ?>
    <img src="<?php the_field('image2')['url']; ?>" />
<?php endif; ?>

<?php if( get_field('image3') ): ?>
    <img src="<?php the_field('image3')['url']; ?>" />
<?php endif; ?>


            <img src="https://element1.kz/wp-content/uploads/photo-1578503439976-f0c1f7daf1cd-scaled.jpg" alt="">
            <img src="https://element1.kz/wp-content/uploads/photo-1501127122-f385ca6ddd9d-scaled.jpg" alt="">
        </div>
        <div>
        <img src="<?php the_field('image1')['url']; ?>" /></div>
    </section>
</div>
<div class="container1440">
    <section class="ourmaterials-grid">
        <h2 id="h2">Использование наших материалов в стилях интерьера</h2>
        <div class="grid-wrapper" id="grid-wrapper">
            <div class="material-grid-item">
                <img src="https://element1.kz/wp-content/uploads/blog-item.jpg" class="" id="materialsImg">
                <div class="label-top">Velature Vernicci</div>
                <div class="label-bottom">Наносится на подготовленные стены без труда. Готовое покрытие можно купить в
                    нашем салоне.</div>
            </div>
            <div class="material-grid-item">
                <img src="https://element1.kz/wp-content/uploads/blog-item.jpg" class="" id="materialsImg">
                <div class="label-top">Velature Vernicci</div>
                <div class="label-bottom">Наносится на подготовленные стены без труда. Готовое покрытие можно купить в
                    нашем салоне.</div>
            </div>
            <div class="material-grid-item">
                <img src="https://element1.kz/wp-content/uploads/blog-item.jpg" class="" id="materialsImg">
                <div class="label-top">Velature Vernicci</div>
                <div class="label-bottom">Наносится на подготовленные стены без труда. Готовое покрытие можно купить в
                    нашем салоне.</div>
            </div>
            <div class="material-grid-item">
                <img src="https://element1.kz/wp-content/uploads/blog-item.jpg" class="" id="materialsImg">
                <div class="label-top">Velature Vernicci</div>
                <div class="label-bottom">Наносится на подготовленные стены без труда. Готовое покрытие можно купить в
                    нашем салоне.</div>
            </div>
            <div class="material-grid-item">
                <img src="https://element1.kz/wp-content/uploads/blog-item.jpg" class="" id="materialsImg">
                <div class="label-top">Velature Vernicci</div>
                <div class="label-bottom">Наносится на подготовленные стены без труда. Готовое покрытие можно купить в
                    нашем салоне.</div>
            </div>
            <div class="material-grid-item">
                <img src="https://element1.kz/wp-content/uploads/blog-item.jpg" class="" id="materialsImg">
                <div class="label-top">Velature Vernicci</div>
                <div class="label-bottom">Наносится на подготовленные стены без труда. Готовое покрытие можно купить в
                    нашем салоне.</div>
            </div>
            <div style="background: url(https://element1.kz/wp-content/uploads/blog-item.jpg);" class="lightbox"></div>
            <div style="background: url(https://element1.kz/wp-content/uploads/blog-item.jpg);" class="lightbox"></div>
            <div style="background: url(https://element1.kz/wp-content/uploads/blog-item.jpg);" class="lightbox"></div>
            <div style="background: url(https://element1.kz/wp-content/uploads/blog-item.jpg);" class="lightbox"></div>
            <div style="background: url(https://element1.kz/wp-content/uploads/blog-item.jpg);" class="lightbox"></div>
            <div style="background: url(https://element1.kz/wp-content/uploads/blog-item.jpg);" class="lightbox"></div>
        </div>
    </section>
</div>
<!-- <section class="sec-desc">
          <div class="sec-desc_img"></div>
          <div class="sec-desc-txt">
            <h2>Для уникальных решений</h2>
            <p>
              В нашем магазине вы найдете все для своего ремонта. Подбериет универсальное белое покрытие и покрасьте его в <b>любой цвет</b>, сделайте
              штукатурку с эффетом мрамора или шелка. <b>Коммерческие</b> покрытия и технологически выверенные м тоды нанесения позволят вам не
              сомневаться в приобретаемом сырье.
            </p>
            <a href="#"><button type="button" name="button">Узнать</button></a>
          </div>
        </section> -->
<div class="contanier100p bg-gray">
    <div class="container1440">
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
                            <p>
                                Славятся своими широкими возможностями. Можно красить в разные цвета, делать эффекты чем
                                угодно - от валика до ножки стула.
                                Прекрасно ложатся на подготовленную поверхность.
                            </p>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab2" name="qwe" />
                        <label for="tab2" class="tab-title">Венецианские штукатурки</label>
                        <div class="tab-content">
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Далеко-далеко за словесными горами в .</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab3" name="qwe" />
                        <label for="tab3" class="tab-title">Декоративные краски</label>
                        <div class="tab-content">
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Далеко-далеко за словесными горами в .</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab4" name="qwe" />
                        <label for="tab4" class="tab-title">Фасадные штукатурки</label>
                        <div class="tab-content">
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Далеко-далеко за словесными горами в .</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab5" name="qwe" />
                        <label for="tab5" class="tab-title">Паркет из России</label>
                        <div class="tab-content">
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Далеко-далеко за словесными горами в .</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab6" name="qwe" />
                        <label for="tab6" class="tab-title">Выключатели Jung</label>
                        <div class="tab-content">
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Далеко-далеко за словесными горами в .</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <div class="tab">
                        <input type="radio" id="tab7" name="qwe" />
                        <label for="tab7" class="tab-title">Каменный шпон</label>
                        <div class="tab-content">
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Далеко-далеко за словесными горами в .</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.tab -->

                    <a href="#"><button type="button" name="button">В каталог</button></a>
                </div>
                <!-- /.cat-list-wrap -->

                <!-- Правая часть -->

                <div class="item-grid">
                    <div class="item">
                        <div class="item-label">Бетон</div>
                    </div>
                    <div class="item">
                        <div class="item-label">Травертин</div>
                    </div>
                    <div class="item">
                        <div class="item-label">Камень</div>
                    </div>
                    <div class="item">
                        <div class="item-label">Металл</div>
                    </div>
                    <div class="item">
                        <div class="item-label">Старина</div>
                    </div>
                    <div class="item">
                        <div class="item-label">Дерево</div>
                    </div>
                    <div class="item">
                        <div class="item-label">Рельеф</div>
                    </div>
                    <div class="item">
                        <div class="item-label">Кожа</div>
                    </div>
                    <div class="item">
                        <div class="item-label">Бархат</div>
                    </div>
                    <div class="item">
                        <div class="item-label">Шелк</div>
                    </div>
                    <div class="item">
                        <div class="item-label">Перламутр</div>
                    </div>
                    <div class="item">
                        <div class="item-label">Лофт</div>
                    </div>
                </div>
            </div>
            <!-- /.se-sat-row-wrap -->
        </section>
    </div>
</div>
<div class="container1440">
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
</div>
<div class="container1440 mb-100">
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
</div>
<?php get_footer(); ?>