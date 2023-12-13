<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>

<div id="<?php the_field('id');?>" class="swiper mySwiperSlider-1 <?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="swiper-wrapper mb-2 lg:mb-6">
    <?php
      if( have_rows('slider') ):
          while( have_rows('slider') ) : the_row(); ?>
          <?php
          $image = get_sub_field('afbeelding');
          $image_url = isset($image['url']) ? esc_url($image['url']) : '';
          $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
          ?>
             <div class="swiper-slide">
                <div class="flex justify-center items-center w-full aspect-square h-auto <?php the_sub_field('achtergrond');?>">
                  <h4 class="text-18 leading-22 text-donkergroen font-britti font-normal lg:text-35 lg:leading-40 text-center max-w-[397px] mx-1"><?php the_sub_field('tekst');?></h4>
                </div>
                <h4 class="text-18 leading-22 text-donkergroen mt-2 lg:mt-3 lg:text-35 lg:leading-40 font-britti font-normal"><?php the_sub_field('titel');?></h4>
                <p class="text-16 leading-18 text-groen lg:text-25 lg:leading-30 mt-[15px] font-britti font-normal"><?php the_sub_field('subtitel');?></p>
              </div>
          <?php
          endwhile;
      else :
      endif;
      ?>  
    </div>
    <div class="lg:container lg:relative">
        <div class="swiper-button-next lg:flex">
            <svg id="Pijl_2_-_groen" data-name="Pijl 2 - groen" xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31">
                <g id="Rectangle_9" data-name="Rectangle 9" fill="none" stroke="#064f51" stroke-width="1">
                    <rect width="31" height="31" rx="6" stroke="none"/>
                    <rect x="0.5" y="0.5" width="30" height="30" rx="5.5" fill="none"/>
                </g>
                <g id="Group_18" data-name="Group 18" transform="translate(13.533 11.26)">
                    <g id="Group_21" data-name="Group 21" transform="translate(0 0)">
                    <path id="Path_24" data-name="Path 24" d="M3.16,4.555,0,0H1.5L4.13,3.73a1.364,1.364,0,0,1,0,1.792L1.5,9.252H0L3.16,4.7a.124.124,0,0,0,0-.142" transform="translate(-0.533 -1)" fill="#064f51" stroke="#064f51" stroke-width="1"/>
                    </g>
                </g>
            </svg>
        </div>
        <div class="swiper-button-prev lg:flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31">
                <g id="Pijl_2_-_groen" data-name="Pijl 2 - groen" transform="translate(31 31) rotate(180)">
                    <g id="Rectangle_9" data-name="Rectangle 9" fill="none" stroke="#064f51" stroke-width="1">
                    <rect width="31" height="31" rx="6" stroke="none"/>
                    <rect x="0.5" y="0.5" width="30" height="30" rx="5.5" fill="none"/>
                    </g>
                    <g id="Group_18" data-name="Group 18" transform="translate(13.533 11.26)">
                    <g id="Group_21" data-name="Group 21" transform="translate(0 0)">
                        <path id="Path_24" data-name="Path 24" d="M3.16,4.555,0,0H1.5L4.13,3.73a1.364,1.364,0,0,1,0,1.792L1.5,9.252H0L3.16,4.7a.124.124,0,0,0,0-.142" transform="translate(-0.533 -1)" fill="#064f51" stroke="#064f51" stroke-width="1"/>
                    </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="swiper-scrollbar hidden lg:flex"></div>
    </div>
  </div>
  <?php endif; ?>