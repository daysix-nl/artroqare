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
<!-- HEADER 1 -->
<section id="<?php the_field('id');?>" class="h-fit md:min-h-[512.99px] lg:min-h-[790.47px] xl:min-h-[850.47px] w-full relative overflow-hidden <?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="z-[50] relative container mt-[395px] md:mt-[96px] lg:mt-[170px] grid gap-2 md:gap-3 mb-[40px] md:mb-[unset] h-fit justify-end">
        <?php if (get_field('titel')): ?>   
        <h1 class="text-40 leading-40 md:text-45 md:leading-45 lg:text-85 lg:leading-85 font-britti font-normal md:max-w-[344px] lg:max-w-[521px] xl:max-w-[554px] text-groen"><?php the_field('titel');?></h1>
        <?php endif; ?>
        <?php if (get_field('tekst')): ?>   
        <div class="text-18 leading-28 lg:text-22 lg:leading-47 font-britti md:max-w-[344px] lg:max-w-[521px] xl:max-w-[554px] text-[#064F51] font-normal text-editor"><?php the_field('tekst');?></div>
        <?php endif; ?>
        <?php if (get_field('link')): ?>  
        <a href="<?php echo $link_url; ?>" class="w-fit h-[45px] px-[15px] bg-[#FFE863] rounded-[6px] flex items-center font-britti font-normal md:text-19 lg:text-22 text-donkergroen hover:bg-[#95CD6C] duration-300" target="<?php echo $link_target; ?>"><?php echo $link_text; ?>
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
    <div class="h-[770.65px] w-[630.06px] md:h-[712.98px] md:w-[582.91px] lg:h-[996.82px] lg:w-[895.62px] xl:h-[1030.82px] xl:w-[926.17px] bg-[#D4EAC6] absolute top-[-386px]  md:top-[-250px] left-[-60px] md:left-[-218px] lg:top-[-226px] lg:left-[-325px] xl:top-[-226px] xl:left-[-228px] rounded-[50%/50%] overflow-hidden">
        <div class="absolute bottom-0 left-0 right-[0px]">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-[380px] md:min-h-[470px] lg:min-h-[780px] xl:min-h-[820px] object-cover object-center min-w-full">
        </div>
    </div>
</section>
<?php endif; ?>
