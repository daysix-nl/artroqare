<?php if(isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
<?php else: ?>
    <section class="bg-donkergroen">
        <div class="container pt-5 pb-6 md:pt-6 md:pb-5 lg:pb-[75px] lg:pt-6">
            <div class="w-full max-w-[310px] md:max-w-[688px] lg:max-w-[850px] mx-auto">
                <div class="text-start lg:text-center flex flex-col">
                    <h3 class="max-w-[250px] text-40 leading-39 md:text-40 md:leading-45 lg:text-62 lg:leading-60 text-white md:max-w-full pb-3 lg:pb-4">Veel gestelde vragen</h3>
                    <p class="pt-3 text-25 leading-40 text-white hidden lg:flex pb-5 max-w-[644px] mx-auto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut</p>
                </div>
                <div class="space-y-3 md:space-y-[25px] lg:space-y-3">
                    <!-- accordiond -->
                    <div class="accordion-item"> 
                        <button class="accordion text-white text-18 leading-28 lg:text-22 lg:leading-40 font-semibold pr-3">
                            <span class="pr-4">Hoe weet ik of ik artrose heb?</span>
                        </button>
                        <div class="panel">
                            <div class="pb-3 px-2 md:pb-4 md:px-3 lg:pb-6 lg:pt-4 lg:px-4">
                                <p class="text-white  text-18 leading-28 lg:text-22 lg:leading-40 lg:max-w-[685px] md:max-w-[604px] max-w-[246px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
                            </div>
                        </div>
                    </div>
                    <!-- accordion -->
                    <div class="accordion-item"> 
                        <button class="accordion text-white text-18 leading-28 lg:text-22 lg:leading-40 font-semibold pr-3">
                            <span class="pr-4">Hoe weet ik of ik artrose heb?</span>
                        </button>
                        <div class="panel">
                            <div class="pb-3 px-2 md:pb-4 md:px-3 lg:pb-6 lg:pt-4 lg:px-4">
                                <p class="text-white  text-18 leading-28 lg:text-22 lg:leading-40 lg:max-w-[685px] md:max-w-[604px] max-w-[246px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>