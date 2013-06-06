  <div class="article">
    <div class="row">
      <div class="large-10 large-offset-1 columns end">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
    </div>
      <div class="row">
        <?php if (has_post_thumbnail()): ?>
          <div class="large-5 columns">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
          <div class="large-7 columns">
            <?php the_content('Read More'); ?>
            <?php the_tags('<ul><li class="tag">','</li><li class="tag">','</li></ul>'); ?>
          </div>
        <?php else: ?>
          <div class="large-12 columns">
            <?php the_content('Read More'); ?>
          </div>
        <?php endif; ?>
    </div>
    <div class="row"><div class="large-12 columns centered">
    <div class="rule"></div>
  </div></div>
  </div>
