  <div class="article">
    <div class="row">
      <div class="large-10 large-offset-1 columns">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
    </div>
      <div class="row">
        <?php if (has_post_thumbnail()): ?>
          <div class="large-4 large-offset-1 columns">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
          </div>
          <div class="large-6 columns end">
            <?php the_content('Read More'); ?>
            <?php the_tags('<ul><li class="tag">','</li><li class="tag">','</li></ul>'); ?>
          </div>
        <?php else: ?>
          <div class="large-10 large-offset-1 columns">
            <?php the_content('Read More'); ?>
          </div>
        <?php endif; ?>
    </div>
    <div class="row"><div class="large-10 large-offset-1 columns centered">
    <div class="rule"></div>
  </div></div>
  </div>
