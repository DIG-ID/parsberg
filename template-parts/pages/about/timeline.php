<section class="about_timeline-section grid gird-cols-1 lg:grid-cols-12 pb-20 lg:pb-40 px-8 xl:px-0 overflow-hidden">
        <div class="col-span-1 lg:col-span-5 xl:col-start-2 xl:col-span-3 lg:ml-7 lg:mr-20"></div>
        <div class="col-span-1 lg:col-span-7 xl:col-span-8">
            <p class="flex items-center text-2xl main-green font-bold mb-8 leading-8"><?php the_field('timeline_section_title'); ?></p>
        </div>

        <div class="col-span-1 lg:col-span-5 xl:col-start-2 xl:col-span-3 lg:ml-7 lg:mr-20">
            <p class="mb-8 leading-8"><?php the_field('timeline_section_description'); ?></p>
        </div>
        <div class="col-span-1 lg:col-span-7 xl:col-span-8 border-l border-l-[#707070]">
        <?php
        if( have_rows('timeline_section_timeline_list') ):
        while( have_rows('timeline_section_timeline_list') ) : the_row(); ?>
            <div class="row grid grid-cols-1 lg:grid-cols-11 mb-6">
                <div class="col-span-1 lg:col-span-10 lg:col-start-2">
                    <?php 
                    $image = get_sub_field('image');
                    if( $image ) {
                        echo wp_get_attachment_image( $image, 'full' );
                    } ?>
                </div>
            </div>
            <div class="row mb-6 lg:mb-14">
                <p class="flex items-center font-light text-main-green mb-10 lg:mb-0"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_sub_field( 'label_caption' ); ?></p>
            </div>
        <?php
        endwhile;
        endif; ?>
        </div>
</section>