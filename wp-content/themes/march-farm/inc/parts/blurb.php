<!-- Blurb Section -->
<div class="gray-section">
 <?php if (have_rows('blurb')):?>
  <section class="container blurbhold" >
        <?php while (have_rows('blurb')) : the_row();
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            $content = get_sub_field('content');
            $picture = get_sub_field('picture');
            $anchor = get_sub_field('anchor');
        ?>
    <a style="height: 0px;" name="<?= $anchor; ?>"></a>
    <div class="row blurb mb-3">
      <div class="col-lg-8">
        <h1 class="blurb-header"><?= $title; ?></h1>
        <h6 class=""><?= $subtitle; ?></h6>
        <p><?= $content; ?></p>
      </div>
      <div class="col-lg-4">
        <img class="picture" src="<?= $picture; ?>" alt="">
      </div>
    </div>
        <?php endwhile; ?>
  </section>
<?php endif; ?>
</div>
<!-- /blurb -->
