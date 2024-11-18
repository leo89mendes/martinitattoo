<section id="portfolio" class="md:px-8 px-4 instagram bg-no-repeat bg-cover bg-center contact flex flex-col justify-center w-full md:text-left text-center md:my-[100px] my-[50px]">
    <h1 class="bebas text-[2.5rem] text-center w-full">
        <a target="_blank" href="https://instagram.com/martinitattoo">Portifolio</a>
    </h1>
   <!-- <div @click="gallery" class="buttons_portfolio flex md:flex-row flex-col justify-around font-semibold text-[1rem] my-10 mx-4 md:mx-0">
        <div @click="$wire.getCategory('ALL')"  class="{{ $cat === 'ALL'  ? 'cursor-pointer md:my-0 my-2 px-10 py-4 bg-[#1cdfbc] text-black border-2 border-black rounded-[4rem] hover:ring-2 hover:ring-offset-2' : 'md:my-0 my-2 hover:ring-2 border-2 border-black hover:ring-offset-2 hover:bg-[#1cdfbc] cursor-pointer hover:text-black  px-10 py-4 bg-[#333333] rounded-[4rem]' }}">Todos</div>
        <div @click="$wire.getCategory('VIDEOS')" id="cat" class="{{ $cat === 'VIDEOS'   ? 'cursor-pointer md:my-0 my-2 px-10 py-4 bg-[#1cdfbc] text-black border-2 border-black rounded-[4rem] hover:ring-2 hover:ring-offset-2' : 'md:my-0 my-2 hover:ring-2 border-2 border-black hover:ring-offset-2 hover:bg-[#1cdfbc] cursor-pointer hover:text-black  px-10 py-4 bg-[#333333] rounded-[4rem]' }}">Vídeos</div>
        <div @click="$wire.getCategory('IMAGES')" id="cat" class="{{ $cat === 'IMAGES'  ? 'cursor-pointer md:my-0 my-2 px-10 py-4 bg-[#1cdfbc] text-black border-2 border-black rounded-[4rem] hover:ring-2 hover:ring-offset-2' : 'md:my-0 my-2 hover:ring-2 border-2 border-black hover:ring-offset-2 hover:bg-[#1cdfbc] cursor-pointer hover:text-black  px-10 py-4 bg-[#333333] rounded-[4rem]' }}">Imagens</div>
    </div>-->
    <div x-data="{ }" x-init="
        gallery($wire.result);
    " id="instagram" class="grid md:grid-cols-4 grid-cols-2 row-auto md:gap-8 gap-4 cursor-pointer mt-[1.5rem]">
        @if($status === 'success')
            @foreach($result as $key => $insta)
                @if($insta['media_type'] === "VIDEO")
                    <video class="lazy gfade max-h-[350px] grayscale hover:grayscale-0 object-cover rounded-[25px]" data-src="{{$insta['media_url']}}"  type="video/mp4" width="100%" height="100%" controls poster="{{$insta['thumbnail_url']}}"></video>
                @elseif($insta['media_type'] === "IMAGE")
                    <div id="{{ $insta['id'] }}" class="gfade h-[350px]">
                        <figure class="object-cover grayscale hover:grayscale-0 " data-src="{{$insta['media_url']}}">
                            <img class="lazy rounded-[25px] h-full" data-src="{{$insta['media_url']}}" alt="">
                        </figure>
                    </div>
                @elseif(isset($insta['carrousel']))
                    <div  class="gfade carrousel_instagram overflow-hidden h-full w-full">
                        <div id="{{ $insta['id'] }}" class="swiper-wrapper">
                            @foreach($insta['carrousel'] as $carrousel)
                            <div class="swiper-slide grayscale h-[350px] hover:grayscale-0" data-src="{{$carrousel['media_url']}}">
                                <figure class="object-cover">
                                    <img class="lazy rounded-[25px] h-full" data-src="{{$carrousel['media_url']}}" alt="">
                                </figure>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</section>
