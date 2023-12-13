<?php if(isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
<?php else: ?>
    <section id="<?php the_field('id');?>" class="bg-donkergroen <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container">
            <div class="w-full max-w-[310px] md:max-w-[688px] lg:max-w-[850px] mx-auto">
                <div class="text-start lg:text-center flex flex-col">
                    <h3 class="max-w-[250px] text-40 leading-39 md:text-40 md:leading-45 lg:text-62 lg:leading-60 text-white md:max-w-full pb-3 lg:pb-0"><?php the_field('titel');?></h3>
                    <p class="pt-3 text-25 leading-40 text-white hidden lg:flex pb-2 lg:pb-3 max-w-[644px] mx-auto"><?php the_field('tekst');?></p>
                </div>
                <div class="space-y-3 md:space-y-[25px] lg:space-y-3">
                    <?php
                    if( have_rows('faq') ):
                        while( have_rows('faq') ) : the_row(); ?>
                        <div class="accordion-item"> 
                            <button class="accordion text-white text-18 leading-28 lg:text-22 lg:leading-40 font-britti font-semibold pr-3 px-2 md:px-3 lg:px-4 py-2">
                                <span class="pr-4"><?php the_sub_field('vraag');?></span>
                            </button>
                            <div class="panel">
                                <div class="pb-3 px-2 md:pb-4 md:px-3 lg:pb-4 lg:pt-2 lg:px-4">
                                    <div class="text-white text-18 leading-28 lg:text-22 lg:leading-40 lg:max-w-[685px] md:max-w-[604px] max-w-[246px] font-britti font-normal text-editor"><?php the_sub_field('antwoord');?></div>
                                </div>
                            </div>
                        </div>
                        <?php
                        endwhile;
                    else :
                    endif;?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>