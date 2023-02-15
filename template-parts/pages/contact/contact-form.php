<section class="contact_form-section pt-24 pb-24 bg-main-green">
    <div class="container grid grid-cols-4 gap-4 lg:mx-auto">
        <div class="col-span-1"></div>
        <div class="col-span-2 section-form">
            <?php echo do_shortcode( '[contact-form-7 id="82" title="Kontakt Page Form"]' ); ?>
        </div>
        <div class="col-span-1"></div>
    </div>
</section>

<section class="contact_map-section">
<?php 
$location = get_field('map');
if( $location ): ?>
    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>
<?php endif; ?>
</div>