<?php if ( ! defined( 'ABSPATH' ) ) { die; } ?>

<div class="container-fluid">
    <div class="lia-card card">
        <div class="card-header text-center">
            <h2><?php echo $settings['title']; ?></h2>
        </div>
        <div class="card-body">

            <?php
                require_once LIA_PLUGIN_DIR . '/calendar/menus/layout/_tabs.php';
            ?>

        </div>
        <div class="card-footer text-muted">
            <?php echo $settings['date']; ?>
        </div>
    </div>
</div>