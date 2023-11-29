<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CONTACT -->
<section id="<?php the_field('id');?>" class="<?php the_field('achtergrond');?> py-5 lg:py-10">
    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-2 md:gap-3 lg:gap-[unset]">
        <div class="grid gap-2 md:gap-3 lg:max-w-[471px] h-fit">
            <?php if (get_field('titel')): ?>       
            <h2 class="text-40 leading-40 md:text-45 md:leading-45 lg:text-62 lg:leading-62 xl:text-65 xl:leading-65 font-britti font-normal text-donkergroen"><?php the_field('titel');?></h2>
            <?php endif; ?>
            <?php if (get_field('tekst')): ?>  
            <div class="text-18 leading-28 lg:text-22 lg:leading-47 text-donkergroen font-britti font-normal text-editor"><?php the_field('tekst');?></div>
            <?php endif; ?>
            <?php if (get_field('link')): ?> 
            <a href="<?php echo $link_url; ?>" class="w-full md:w-fit h-[45px] px-[15px] bg-transparent border-[1px] border-donkergroen rounded-[6px] flex items-center justify-between md:justify-normal font-britti font-normal md:text-19 lg:text-22 text-donkergroen hover:bg-[#95CD6C] hover:border-[#95CD6C] duration-300" target="<?php echo $link_target; ?>"><?php echo $link_text; ?> 
                <div class="ml-[15px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="22" viewBox="0 0 15 22">
                        <text id="_" data-name="→" transform="translate(15 18)" fill="#064f51" font-size="22" font-family="BrittiSans-Regular, Britti Sans"><tspan x="-14.872" y="0">→</tspan></text>
                    </svg>
                </div>
            </a>
            <?php endif; ?>
        </div>
        <div class="formulier">
            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
        </div>
    </div>
</section>
<?php endif; ?>
