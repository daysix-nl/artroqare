<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
    <section id="<?php the_field('id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="container lg:max-w-[754px]">
            <h2 class="text-groen text-40 leading-40 pb-2 md:pb-3 md:leading-45 font-britti font-normal lg:text-62 lg:leading-62 xl:text-65 xl:leading-65 md:text-center"><?php the_field('titel');?></h2>
            <div class="text-[#064F51] text-18 leading-28 lg:text-22 lg:leading-47 lg:text-center font-britti font-normal text-editor"><?php the_field('tekst');?></div>
        </div>
    </section>
<?php endif; ?>
