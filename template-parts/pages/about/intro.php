<section class="about_intro-section grid gird-cols-1 lg:grid-cols-12 pt-40 lg:pt-80 pb-24 px-8 xl:px-0 overflow-hidden">
    <div class="col-span-1 lg:col-span-5 xl:col-start-2 xl:col-span-3 lg:ml-7 lg:mr-20">
        <h2 class="about__intro-title text-5xl font-bold mb-10 lg:mb-0"><?php the_title(); ?></h2>    
    </div>
    <div class="col-span-1 lg:col-span-7 xl:col-span-7 xl:grid xl:grid-cols-2">
        <div class="col-span-1">
            <p class="mb-8 leading-8 pr-4"><?php the_field('intro_description_left'); ?></p>
        </div>
        <div class="col-span-1">
            <p class="leading-8 pr-4"><?php the_field('intro_description_right'); ?></p>
        </div>
    </div>
</section>