<!-- sidebar -->
<aside class="sidebar aside-page" role="complementary">
    <section>
    <?php
        dynamic_sidebar( 'aside-frm' );
        dynamic_sidebar( 'aside-pods');
    ?>
    </section>
    <div class="did-you-know">
        <h2>Did You Know?</h2>
        <?php echo types_render_field("did-you-know", array("raw"=>"true","separator"=>";")); ?>
        <img src="<?php echo types_render_field("did-you-know-image", array("raw"=>"true","separator"=>";")); ?>" alt="" />
    </div>
</aside>
<!-- /sidebar -->
