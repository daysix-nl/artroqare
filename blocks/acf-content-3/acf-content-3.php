<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
    <section id="<?php the_field('id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container lg:max-w-[645px]">
            <h3 class="text-[#064F51] font-britti font-normal text-40 leading-40 pb-2 lg:pb-3 md:leading-40  lg:text-82 lg:leading-78 xl:text-85"><?php the_field('titel');?></h3>
            <p class="text-[#064F51] font-britti font-normal text-18 leading-28 pb-2 lg:pb-3 lg:text-22 lg:leading-47 dynamic-paragraph"><?php the_field('alinae_1');?></p>
            <p class="text-[#064F51] font-britti font-normal text-18 leading-28 pb-2 lg:pb-3 lg:text-22 lg:leading-47 dynamic-paragraph"><?php the_field('alinae_2');?></p>
            <button class="text-19 h-[45px] border-[1px] text-[#064F51] border-[#064F51] rounded-[6px] px-[15px] flex items-center bg-transparent w-full justify-between md:max-w-[310px] button-lees-meer">
                <span>Lees meer</span>
                <span>→</span>
            </button>
        </div>
    </section>
<?php endif; ?>
