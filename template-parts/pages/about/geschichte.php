<section class="about_geschichte-section grid gird-cols-1 lg:grid-cols-12 pb-20 lg:pb-40 px-8 xl:px-0 overflow-hidden">
    <div class="col-span-1 lg:col-span-5 xl:col-start-2 xl:col-span-3 lg:ml-7 lg:mr-20">
        <h2 class="flex items-center text-sm font-semibold text-main-green uppercase mb-10 lg:mb-0"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_field( 'geschichte_section_ante-title' ); ?></h2>    
    </div>
    <div class="col-span-1 lg:col-span-7 xl:col-span-8">
        <p class="flex items-center text-2xl main-green font-bold mb-8 leading-8"><?php the_field('geschichte_section_title'); ?></p>
    </div>
    <div class="col-span-1 lg:col-span-5 xl:col-start-2 xl:col-span-3 lg:ml-7 lg:mr-20"></div>
    <div class="col-span-1 lg:col-span-7 xl:col-span-8 geschichte_section__img">
        <?php 
        $image = get_field('geschichte_section_image');
        if( $image ) {
            echo wp_get_attachment_image( $image, 'full' );
        } ?>
    </div>
</section>