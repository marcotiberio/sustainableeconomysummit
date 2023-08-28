<div class="alm-item post post-event">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" aria-hidden="true" tabindex="-1">
        <div class="post-inner">
            <div class="column-left post--date-time">
                <p>Date</p>
                <p>Time</p>
            </div>
            <div class="column-left post--title">
                <p><?php the_title(); ?></p>
            </div>
            <div class="column-left post--info"><p><?php echo get_field('infoPost'); ?></p></div>
            <div class="column-right post--location"><p><?php echo get_field('locationPost'); ?></p></div>
        </div>
    </a>
</div>
