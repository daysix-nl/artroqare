<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$link = get_field('link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- CONTENT 2 -->
<?php if (get_field('afbeelding_uitlijning') !== "afb-links"): ?>   
<!-- AFBEELDING RECHTS -->
<section id="<?php the_field('id');?>" class="overflow-hidden">
    <div class="flex flex-col md:flex-row">
        <div class="md:w-[65vw] lg:w-[50vw] lg:h-[50vw] flex items-center justify-center <?php the_field('achtergrond');?>">
            <div class="w-[337px] px-[15px] py-[40px] md:py-[unset] md:px-[unset] md:w-[441px] lg:w-[485px] xl:w-[546px] grid gap-2 md:gap-3">
                <?php if (get_field('titel')): ?>     
                <h2 class="text-40 leading-40 md:text-45 md:leading-45 lg:text-62 lg:leading-62 xl:text-65 xl:leading-65 font-britti font-normal text-donkergroen"><?php the_field('titel');?></h2>
                 <?php endif; ?>
                <?php if (get_field('tekst')): ?>  
                <div class="text-18 leading-28 lg:text-22 lg:leading-47 text-donkergroen font-britti font-normal text-editor"><?php the_field('tekst');?></div>
                <?php endif; ?>
                <?php if (get_field('link')): ?> 
                <a href="<?php echo $link_url; ?>" class="w-full md:w-fit h-[45px] px-[15px] bg-transparent border-[1px] border-donkergroen rounded-[6px] flex items-center justify-between md:justify-normal font-britti font-normal md:text-19 lg:text-22 text-donkergroen hover:bg-[#95CD6C] hover:border-[#95CD6C] duration-300" target="<?php echo $link_target; ?>"><?php echo $link_text; ?> 
                    <div class="ml-[15px]">
                        <svg width="15px" height="12.862883px" viewBox="0 0 15 12.862883" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="arrow-right-solid" fill="#064F51" fill-rule="nonzero">
                                    <path d="M14.6860874,7.18818014 C15.1046375,6.76963 15.1046375,6.08990457 14.6860874,5.67135443 L9.32864557,0.313912607 C8.91009543,-0.104637536 8.2337184,-0.104637536 7.81516826,0.313912607 C7.39661811,0.732462749 7.39326971,1.41218818 7.81181986,1.83073832 L11.3443831,5.35995312 L1.07148836,5.35995312 C0.478821363,5.35995312 0,5.83877449 0,6.43144149 C0,7.02410849 0.478821363,7.50292985 1.07148836,7.50292985 L11.3410347,7.50292985 L7.81516826,11.0321447 C7.39661811,11.4506948 7.39661811,12.1304202 7.81516826,12.5489704 C8.2337184,12.9675205 8.91344383,12.9675205 9.33199397,12.5489704 L14.6894358,7.19152855 L14.6860874,7.18818014 Z" id="Path"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="hidden md:block w-full aspect-[100/50.51] md:w-[35vw] md:aspect-[69.53/100] lg:aspect-square lg:w-[50vw] lg:h-[50vw] overflow-hidden">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover object-center">
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (get_field('afbeelding_uitlijning') !== "afb-rechts"): ?>   
<!-- AFBEELDING LINKS -->
<section id="<?php the_field('id');?>" class="overflow-hidden">
    <div class="flex flex-col md:flex-row">
        <div class="md:w-[65vw] lg:w-[50vw] lg:h-[50vw] flex items-center justify-center order-2 <?php the_field('achtergrond');?>">
            <div class="w-[337px] px-[15px] py-[40px] md:py-[unset] md:px-[unset] md:w-[441px] lg:w-[485px] xl:w-[546px] grid gap-2 md:gap-3">
                <?php if (get_field('titel')): ?>
                <h2 class="text-40 leading-40 md:text-45 md:leading-45 lg:text-62 lg:leading-62 xl:text-65 xl:leading-65 font-britti font-normal text-donkergroen"><?php the_field('titel');?></h2>
                <?php endif; ?>
                <?php if (get_field('tekst')): ?>  
                <div class="text-18 leading-28 lg:text-22 lg:leading-47 text-donkergroen font-britti font-normal text-editor"><?php the_field('tekst');?></div>
                <?php endif; ?>
                <?php if (get_field('link')): ?> 
                <a href="<?php echo $link_url; ?>" class="w-full md:w-fit h-[45px] px-[15px] bg-transparent border-[1px] border-donkergroen rounded-[6px] flex items-center justify-between md:justify-normal font-britti font-normal md:text-19 lg:text-22 text-donkergroen hover:bg-[#95CD6C] hover:border-[#95CD6C] duration-300" target="<?php echo $link_target; ?>"><?php echo $link_text; ?> 
                    <div class="ml-[15px]">
                        <svg width="15px" height="12.862883px" viewBox="0 0 15 12.862883" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="arrow-right-solid" fill="#064F51" fill-rule="nonzero">
                                    <path d="M14.6860874,7.18818014 C15.1046375,6.76963 15.1046375,6.08990457 14.6860874,5.67135443 L9.32864557,0.313912607 C8.91009543,-0.104637536 8.2337184,-0.104637536 7.81516826,0.313912607 C7.39661811,0.732462749 7.39326971,1.41218818 7.81181986,1.83073832 L11.3443831,5.35995312 L1.07148836,5.35995312 C0.478821363,5.35995312 0,5.83877449 0,6.43144149 C0,7.02410849 0.478821363,7.50292985 1.07148836,7.50292985 L11.3410347,7.50292985 L7.81516826,11.0321447 C7.39661811,11.4506948 7.39661811,12.1304202 7.81516826,12.5489704 C8.2337184,12.9675205 8.91344383,12.9675205 9.33199397,12.5489704 L14.6894358,7.19152855 L14.6860874,7.18818014 Z" id="Path"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="w-full aspect-[100/50.51] md:w-[35vw] md:aspect-[69.53/100] lg:aspect-square lg:w-[50vw] lg:h-[50vw] overflow-hidden order-1 relative">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover object-center">
            <div class="absolute top-0 left-0 right-0 bottom-0 items-center flex md:hidden">
                <div class="w-[337px] mx-auto px-2">
                    <a href="#contact" class="w-fit h-[45px] px-[15px] bg-[#FFE862] border-[1px] border-[#FFE862] rounded-[6px] flex items-center justify-between md:justify-normal font-britti font-normal md:text-19 lg:text-22 text-donkergroen hover:bg-[#95CD6C] hover:border-[#95CD6C] duration-300">Maak een afspraak 
                        <div class="ml-[15px]">
                            <svg width="15px" height="12.862883px" viewBox="0 0 15 12.862883" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="arrow-right-solid" fill="#064F51" fill-rule="nonzero">
                                        <path d="M14.6860874,7.18818014 C15.1046375,6.76963 15.1046375,6.08990457 14.6860874,5.67135443 L9.32864557,0.313912607 C8.91009543,-0.104637536 8.2337184,-0.104637536 7.81516826,0.313912607 C7.39661811,0.732462749 7.39326971,1.41218818 7.81181986,1.83073832 L11.3443831,5.35995312 L1.07148836,5.35995312 C0.478821363,5.35995312 0,5.83877449 0,6.43144149 C0,7.02410849 0.478821363,7.50292985 1.07148836,7.50292985 L11.3410347,7.50292985 L7.81516826,11.0321447 C7.39661811,11.4506948 7.39661811,12.1304202 7.81516826,12.5489704 C8.2337184,12.9675205 8.91344383,12.9675205 9.33199397,12.5489704 L14.6894358,7.19152855 L14.6860874,7.18818014 Z" id="Path"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php endif; ?>
