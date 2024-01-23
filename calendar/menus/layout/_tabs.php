<?php if ( ! defined( 'ABSPATH' ) ) { die; } ?>

<div class="row">
    <?php if(isset($settings['define_tabs'])): ?>
    <div class="col-md-1">
        <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <?php for($x = 0; $x < count($settings['define_tabs']); $x++): ?>

                <button 
                    class="nav-link mb-3 p-3 shadow <?php if($x == 0) { echo 'active'; } ?>" 
                    id="v-pills-<?php echo $x; ?>-tab" 
                    data-bs-toggle="pill" 
                    data-bs-target="#v-pills-<?php echo $x; ?>" 
                    type="button" 
                    role="tab" 
                    aria-controls="v-pills-<?php echo $x; ?>" 
                    <?php if($x == 0) { echo 'aria-selected="true"'; }; ?> 
                >
                    <i class="<?php echo $settings['define_tabs'][$x]['icon']; ?> fa-2x"></i>
                </button>

            <?php endfor; ?>
        </div>
    </div>

    <div class="col-md-11">
        <div class="tab-content" id="v-pills-tabContent">
            <?php for($x = 0; $x < count($settings['define_tabs']); $x++): ?>

                <div 
                    class="tab-pane fade p-5 shadow rounded bg-white <?php if($x == 0) { echo 'show active'; }; ?>" 
                    id="v-pills-<?php echo $x; ?>" 
                    role="tabpanel" 
                    aria-labelledby="v-pills-<?php echo $x; ?>-tab" 
                    tabindex="<?php echo $x; ?>"
                >
                    <?php require_once LIA_PLUGIN_DIR . '/calendar/menus/templates/' . $settings['define_tabs'][$x]['filename']; ?>
                </div>

            <?php endfor; ?>
        </div>
    </div>
    <?php endif; ?>
</div>


