<section id="portfolio" class="md:px-8 px-4 instagram bg-no-repeat bg-cover bg-center contact flex flex-col justify-center w-full md:text-left text-center md:my-[100px] my-[50px]">
    <h1 class=" font-medium text-[2.8rem] text-center w-full">
        <a target="_blank" href="https://instagram.com/martinitattoo">Portifolio</a>
    </h1>
    <div @click="gallery" class="buttons_portfolio flex md:flex-row flex-col justify-around font-semibold text-[1rem] my-10 mx-4 md:mx-0">
        <div @click="$wire.getCategory('ALL')"  class="<?php echo e($cat === 'ALL'  ? 'cursor-pointer md:my-0 my-2 px-10 py-4 bg-[#1cdfbc] text-black border-2 border-black rounded-[4rem] hover:ring-2 hover:ring-offset-2' : 'md:my-0 my-2 hover:ring-2 border-2 border-black hover:ring-offset-2 hover:bg-[#1cdfbc] cursor-pointer hover:text-black  px-10 py-4 bg-[#333333] rounded-[4rem]'); ?>">Todos</div>
        <div @click="$wire.getCategory('VIDEOS')" id="cat" class="<?php echo e($cat === 'VIDEOS'   ? 'cursor-pointer md:my-0 my-2 px-10 py-4 bg-[#1cdfbc] text-black border-2 border-black rounded-[4rem] hover:ring-2 hover:ring-offset-2' : 'md:my-0 my-2 hover:ring-2 border-2 border-black hover:ring-offset-2 hover:bg-[#1cdfbc] cursor-pointer hover:text-black  px-10 py-4 bg-[#333333] rounded-[4rem]'); ?>">Vídeos</div>
        <div @click="$wire.getCategory('IMAGES')" id="cat" class="<?php echo e($cat === 'IMAGES'  ? 'cursor-pointer md:my-0 my-2 px-10 py-4 bg-[#1cdfbc] text-black border-2 border-black rounded-[4rem] hover:ring-2 hover:ring-offset-2' : 'md:my-0 my-2 hover:ring-2 border-2 border-black hover:ring-offset-2 hover:bg-[#1cdfbc] cursor-pointer hover:text-black  px-10 py-4 bg-[#333333] rounded-[4rem]'); ?>">Imagens</div>
    </div>
    <div id="instagram" class="grid md:grid-cols-4 grid-cols-2 row-auto md:gap-8 gap-4 cursor-pointer">
        <!--[if BLOCK]><![endif]--><?php if($status === 'success'): ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $insta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--[if BLOCK]><![endif]--><?php if($insta['media_type'] === "VIDEO"): ?>
                    <video class="gfade grayscale hover:grayscale-0 h-[350px] object-cover rounded-[25px]" width="100%" height="100%" controls poster="<?php echo e($insta['thumbnail_url']); ?>">
                        <source src="<?php echo e($insta['media_url']); ?>" type="video/mp4">
                        <source src="<?php echo e($insta['media_url']); ?>" type="video/ogg">                    
                    </video>
                <?php elseif($insta['media_type'] === "IMAGE"): ?>
                <div id="images" class="gfade">
                    <figure class="object-cover grayscale hover:grayscale-0 h-[350px]" data-src="<?php echo e($insta['media_url']); ?>">
                        <img class="rounded-[25px] h-full" src="<?php echo e($insta['media_url']); ?>" alt="">
                    </figure>
                </div>
                <?php elseif(isset($insta['carrousel'])): ?>
                    <div class="gfade carrousel_instagram overflow-hidden h-full w-full">
                        <div id='gallery_carrousel' class="swiper-wrapper">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $insta['carrousel']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrousel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide grayscale hover:grayscale-0" data-src="<?php echo e($carrousel['media_url']); ?>">
                                <figure class="object-cover h-[350px]">
                                    <img class="rounded-[25px] h-full" src="<?php echo e($carrousel['media_url']); ?>" alt="">
                                </figure>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</section>
<?php /**PATH /var/www/html/resources/views/livewire/instagram-gallery.blade.php ENDPATH**/ ?>