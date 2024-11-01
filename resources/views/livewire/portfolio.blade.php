<section class="portfolio-section md:px-8 bg-black flex flex-col md:text-left text-center md:my-[100px] my-[20px]">
    <h1 class=" font-medium text-[2.8rem] text-center w-full">Portifolio</h1>
    <div class="buttons_portfolio flex md:flex-row flex-col justify-around font-semibold text-[1rem] my-10 mx-4 md:mx-0">
        <div wire:click="getCategory('all')"  class="cursor-pointer md:my-0 my-2 px-10 py-4 bg-[#1cdfbc] text-black border-2 border-black rounded-[4rem] hover:ring-2 hover:ring-offset-2">Todos</div>
        @foreach($category as $cat)
            <div wire:click="getCategory({{ $cat->id }})" id="cat" class="md:my-0 my-2 hover:ring-2 border-2 border-black hover:ring-offset-2 hover:bg-[#1cdfbc] cursor-pointer hover:text-black  px-10 py-4 bg-[#333333] rounded-[4rem]">{{ $cat->name }}</div>
        @endforeach  
    </div>
    <div class="grid grid-cols-1 gap-2 md:grid-cols-4 md:px-0 px-2">
        @for($i = 0; $i < count($portfa); $i++)
            @if($i == 1)
            <a class="grid md:row-span-2 cursor-pointer grid-item" href="{{ url('storage/' . $portfa[$i]->images) }}" data-lightbox="roadtrip">
                <div class=" rounded-[25px]  hover:grayscale-0 grayscale overflow-hidden bg-cover bg-center" style="background-image: url({{ asset('storage/' . $portfa[$i]->images) }})"></div>
            </a>
            @else
            <a class="grid h-[150px] md:h-[250px]" href="{{ url('storage/' . $portfa[$i]->images) }}" data-lightbox="roadtrip">
                <div class="rounded-[25px] cursor-pointer hover:grayscale-0 grayscale grid-item overflow-hidden bg-cover bg-center" style="background-image: url({{ asset('storage/' . $portfa[$i]->images) }})"></div>
            </a>
            @endif
        @endfor
    </div>
</section>
