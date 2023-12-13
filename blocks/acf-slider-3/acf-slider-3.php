<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<section id="<?php the_field('id');?>" class="bg-donkergroen <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
  <div class="lg:container max-w-[308px] lg:max-w-[644px] p-0 w-full flex mx-auto">
    <h2 class="text-40 leading-10 text-white lg:text-85 lg:leading-78 font-britti font-normal"><?php the_field('titel');?></h2>
  </div>
  </div>
    <div class="swiper mySwiperSlider-2 lg:container">
    <div class="swiper-wrapper py-4 lg:pb-[108px] lg:pt-4">
       <?php
      if( have_rows('slider') ):
          while( have_rows('slider') ) : the_row(); ?>
             <div class="swiper-slide w-full">
                <div class="h-auto">
                  <div class="text-18 leading-28 text-white lg:text-22 lg:leading-47 max-w-[308px] lg:max-w-[644px] font-britti font-normal text-editor"><?php the_sub_field('tekst');?></div>
                </div>
            </div>
          <?php
          endwhile;
      else :
      endif;
      ?>  
    </div>
    <div class="lg:container relative h-[32px] max-w-[327px]  lg:max-w-[unset] w-full mx-auto">
    <div class="lg:max-w-[644px] p-0 w-full">
              <div class="swiper-button-next lg:flex">
          <svg id="Pijl_2_-_groen" data-name="Pijl 2 - groen" xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31">
            <g id="Rectangle_9" data-name="Rectangle 9" fill="none" stroke="#fff" stroke-width="1">
              <rect width="31" height="31" rx="6" stroke="none"/>
              <rect x="0.5" y="0.5" width="30" height="30" rx="5.5" fill="none"/>
            </g>
            <g id="Group_18" data-name="Group 18" transform="translate(13.533 11.26)">
              <g id="Group_21" data-name="Group 21" transform="translate(0 0)">
                <path id="Path_24" data-name="Path 24" d="M3.16,4.555,0,0H1.5L4.13,3.73a1.364,1.364,0,0,1,0,1.792L1.5,9.252H0L3.16,4.7a.124.124,0,0,0,0-.142" transform="translate(-0.533 -1)" fill="#fff" stroke="#fff" stroke-width="1"/>
              </g>
            </g>
          </svg>

        </div>
        <div class="swiper-button-prev lg:flex">
          <svg id="Pijl_2_-_groen" data-name="Pijl 2 - groen" xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31">
            <g id="Rectangle_9" data-name="Rectangle 9" fill="none" stroke="#fff" stroke-width="1">
              <rect width="31" height="31" rx="6" stroke="none"/>
              <rect x="0.5" y="0.5" width="30" height="30" rx="5.5" fill="none"/>
            </g>
            <g id="Group_18" data-name="Group 18" transform="translate(13 10.26)">
              <g id="Group_21" data-name="Group 21" transform="translate(0 0)">
                <path id="Path_24" data-name="Path 24" d="M1.306,4.555,4.466,0h-1.5L.336,3.73a1.364,1.364,0,0,0,0,1.792l2.626,3.73h1.5L1.306,4.7a.124.124,0,0,1,0-.142" transform="translate(0 0)" fill="#fff" stroke="#fff" stroke-width="1"/>
              </g>
            </g>
          </svg>
        </div>
    </div>
 <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<?php endif; ?>