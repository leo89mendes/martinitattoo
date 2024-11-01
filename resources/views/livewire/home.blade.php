<div class="container-xl mx-auto h-[700px] text-white" style="font-family:'Hepta Slab'">
    <header class="md:grid grid-cols-5 py-[1.5rem] md:px-[13rem] text-[0.8rem]" >
        <div class="px-4 grid grid-cols-2 col-span-2 gap-2 text-center items-center font-semibold uppercase">
            <div>Sobre</div>
            <div>Portifolio</div>
        </div>
        <div class="flex justify-center">
            <a href="{{ url('/') }}"><img class="rounded-[25px] md:h-full h-[100px]" src="{{ asset('storage/' . $setting[0]->logo) }}" alt=""></a>
        </div>
        <div class="px-4 grid grid-cols-3 col-span-2 gap-2 text-center items-center font-semibold uppercase">
            <div>Contato</div>
            <div class="text-center pl-4 col-span-2 md:flex hidden">
                <a href="https://wa.me/{{ $setting[0]->telephone }}" target="_blank" class='border-2 border-black text-black px-4 py-4 hover:ring-2 hover:ring-offset-2  bg-[#1cdfbc] rounded-[4rem]'>
                    FAÇA UM ORÇAMENTO
                </a> 
            </div>
        </div>
    </header>
    <div class="flex flex-col w-full justify-center items-center md:py-[8rem] md:pr-[5rem] text-center bg-no-repeat bg-cover" style="background-image: url({{ asset('storage/assets/img/bannerHome.png') }});">
        <div class="md:ml-[45rem] py-10 px-5">
            <h2 class="text-[4rem]">{{$banners[0]['title']}}</h2>
            <h4>{!! $banners[0]['subtitle'] !!}</h4>
            <div class="flex justify-center text-[1rem] ">
                <a href="https://wa.me/{{ $setting[0]->telephone }}" class='hover:border-2 hover:border-black hover:ring-2 hover:ring-offset-2  text-black h-[60px]  p-4 mt-4 bg-[#1cdfbc] rounded-[4rem]'>
                    {{$banners[0]['btn_text']}}
                </a> 
            </div>
        </div>
    </div>
    <section class="bg-black md:px-8 about grid md:grid-cols-2 grid-rows-2 md:text-left text-center gap-4 md:my-[100px] my-[50px] md:h-[20rem]">
        <div class="about_me flex flex-col px-8 md:py-0 py-8">
            <h1 class=" font-medium text-[2.8rem] mb-4">{{$aboutme[0]['title']}}</h1>
            {!! $aboutme[0]['description'] !!}
            <div class="text-center flex">
                <a href="https://wa.me/{{ $setting[0]->telephone }}" target="_blank" class='hover:ring-2 hover:ring-offset-2 border-2 border-black text-black p-4 mt-4 bg-[#1cdfbc] rounded-[4rem] '>
                    {{$aboutme[0]['btn_text']}}
                </a> 
            </div>
        </div>
        <div class="pb-[20px] md:h-[350px] h-[250px] md:px-0 px-4 block">
            <iframe class="rounded-[25px] block" width="100%" height="100%" src="{{$aboutme[0]['link_video']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>
    <section class="video_background bg-no-repeat bg-cover bg-center md:h-[600px] h-[350px] flex items-center justify-center w-full md:text-left text-center md:my-[100px] my-[50px]">
        <iframe class="flex grayscale" width="100%" height="100%" src="{{$video[0]['link']}}" controls="0" autoplay="1" title="YouTube video player" frameborder="0"  allow="autoplay;" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            <button>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="114px" height="150px" viewBox="0 0 114 150" enable-background="new 0 0 114 150" xml:space="preserve">
                    <polygon fill="none" stroke="#fff" stroke-width="2" stroke-miterlimit="10" points="3.166,3.67 110.5,74.608 3.007,145.307 "></polygon>
                </svg>
            </button>
        </iframe>
    </section>
    <livewire:portfolio />
    <section class="testimonials bg-no-repeat bg-cover bg-center contact flex flex-col justify-center w-full md:text-left text-center md:my-[100px] my-[50px] py-8" style="background-image: url({{ asset('storage/assets/img/bg_testimonials.jpg') }})">
        <span class="font-medium text-[#1cdfbc] text-center">Testimoniais</span>
        <h1 class=" font-medium text-[2.8rem] text-center w-full">
            Clientes Feedback
        </h1>
        <div class="js-flickity flex flex-wrap overflow-hidden">
            @foreach($testimonials as $testi)
                <div class="testimonial-content">
                    <div class="py-4 flex justify-center align-center gap-4">
                        <div class="testimonial-image max-w-[5rem]">
                            <img class="cover rounded-full" src="{{ asset('storage/' . $testi->image)}}" alt="">
                        </div>
                        <cite class="flex flex-col justify-center items-center">
                            <p class="testimonial-author text-[#9f9f9f]">{{ $testi->name }}</p>
                            <span>{{ $testi->position }}</span>
                        </cite>
                    </div>
                    <div class="px-[5rem] text-[#9f9f9f] text-center">
                        {!! $testi->description !!}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="contact px-4 grid md:grid-flow-row md:grid-cols-2 md:grid-rows-1 grid-rows-2 grid-flow-col  md:px-8">
        <div class="flex flex-col items-center justify-center">
            <ul class="address-blocks list-unstyled px-4">
                <li> 
                    <a target="_blank" class="address hover:text-[#1cdfbc] inline-flex items-center my-4" href="https://maps.app.goo.gl/pPxLLXccaLmX4ZcY7">
                        <span class="contact-icons text-[#1cdfbc] px-8">
                            <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1174_857)">
                                    <path d="M12.691 0C12.987 0.0343691 13.2835 0.0654872 13.5796 0.103107C15.6518 0.365985 17.3924 1.26005 18.7965 2.76532C19.9954 4.05045 20.7153 5.56223 20.9301 7.29276C21.2228 9.64984 20.5946 11.7519 19.0793 13.6041C17.6138 15.3955 16.156 17.1925 14.6796 18.9755C13.5492 20.341 11.4584 20.3424 10.3241 18.9746C8.77694 17.1084 7.23404 15.239 5.72203 13.3459C4.66998 12.0287 4.12638 10.5119 4.01709 8.83798C3.75432 4.80007 6.54931 1.1992 10.4952 0.270309C10.9746 0.157448 11.4745 0.12633 11.9649 0.0561982C12.0809 0.0394781 12.1958 0.0185779 12.3118 0C12.4382 0 12.5646 0 12.691 0ZM19.2047 8.34706C19.1406 7.87472 19.113 7.39494 19.007 6.93189C18.2297 3.53538 14.8549 1.25215 11.2056 1.95068C7.83514 2.5958 5.4488 5.69135 5.88739 9.14266C6.03897 10.3358 6.48564 11.4073 7.24925 12.3469C8.7185 14.155 10.1977 15.9552 11.6722 17.7591C12.1569 18.3522 12.8483 18.3508 13.3344 17.7558C14.7053 16.0787 16.06 14.3881 17.4551 12.7301C18.5323 11.4496 19.1653 10.0256 19.2052 8.34706H19.2047Z" fill="currentcolor"></path>
                                    <path d="M12.4937 22.2582C14.0568 22.236 15.5762 22.0195 17.0267 21.4381C17.6213 21.1998 18.1794 20.8992 18.6401 20.4523C19.3003 19.8113 19.3416 19.2152 18.7318 18.5332C18.3442 18.1001 18.4197 17.4444 18.8629 17.1572C19.2386 16.9138 19.732 16.9572 20.0512 17.2865C21.2756 18.5494 21.3288 20.2071 20.13 21.5148C19.3236 22.3944 18.2829 22.9148 17.1616 23.2999C16.1314 23.6536 15.0694 23.8831 13.9789 23.9408C13.1221 23.9861 12.2582 24.0276 11.4037 23.9764C9.56945 23.8669 7.7993 23.4832 6.19538 22.5592C5.35899 22.0776 4.64894 21.4667 4.24855 20.5769C3.709 19.3787 4.08564 18.1144 5.0137 17.2287C5.33809 16.9194 5.88286 16.93 6.22531 17.2232C6.55777 17.5076 6.62949 18.0179 6.38347 18.3767C6.3222 18.4658 6.24668 18.5452 6.17734 18.6288C5.71948 19.1815 5.69906 19.7541 6.20441 20.268C6.53213 20.6009 6.92159 20.8983 7.3329 21.1273C8.40202 21.7221 9.58275 21.9954 10.7977 22.1294C11.361 22.1912 11.9285 22.2162 12.4942 22.2582H12.4937Z" fill="currentcolor"></path>
                                    <path d="M7 8.5034C7.04942 5.97185 8.98932 3.99864 11.5082 4C14.0388 4.00136 16.005 5.9832 16 8.50794C15.995 11.0222 14.0433 12.9936 11.515 13C8.99884 13.0063 7.0544 11.0395 7 8.5034ZM11.4995 11.2369C13.0264 11.2374 14.2174 10.0377 14.2446 8.52382C14.2714 7.01906 12.9947 5.76396 11.5236 5.75488C10.0311 5.7458 8.76944 7.00817 8.76355 8.48842C8.75765 9.98637 10.0239 11.276 11.4995 11.2374V11.2369Z" fill="currentcolor"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1174_857">
                                    <rect width="24" height="24" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <div class="details-wrapper">  
                            <h6 class="contact-heading font-semibold">Endereço</h6> 
                            <address>{{ $setting[0]->address }}</address>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="address hover:text-[#1cdfbc] inline-flex items-center my-4" href="mailto:{{ $setting[0]->email }}@martinitattoo.com">
                        <span class="contact-icons  text-[#1cdfbc] px-8">
                            <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1174_850)">
                                    <path d="M24 16.5518C23.9516 16.8595 23.9154 17.1705 23.852 17.4754C23.368 19.8132 21.5622 21.547 19.2282 21.9113C18.9129 21.9603 18.592 21.9943 18.2734 21.9948C14.0838 22.0005 9.89426 22.0019 5.70422 21.9972C3.02535 21.9943 0.791009 20.2454 0.172159 17.6523C0.064083 17.1993 0.0128645 16.7222 0.0100452 16.256C-0.00546131 13.7515 0.00111719 11.2467 0.00299677 8.74227C0.00534624 5.95189 1.8431 3.67919 4.56567 3.11668C4.93735 3.03976 5.32501 3.00673 5.70516 3.00626C9.89473 2.9987 14.0843 2.9987 18.2743 3.00248C21.0519 3.00484 23.3144 4.86226 23.8717 7.59224C23.9295 7.87443 23.9577 8.1623 24 8.4478V16.5518ZM11.9848 20.1515C14.1186 20.1515 16.2524 20.153 18.3862 20.1496C18.5958 20.1496 18.8072 20.1322 19.0144 20.1015C20.7408 19.8472 22.1383 18.2318 22.1406 16.4811C22.1449 13.8275 22.1425 11.1735 22.1397 8.52C22.1397 8.35672 22.1214 8.19156 22.0955 8.02969C21.8014 6.18596 20.2441 4.84905 18.3876 4.84858C14.12 4.84716 9.85244 4.8481 5.58439 4.84858C5.45141 4.84858 5.31749 4.84291 5.18593 4.85754C3.29742 5.06518 1.84216 6.69326 1.84075 8.6007C1.83887 11.1995 1.83887 13.7983 1.84075 16.3971C1.84216 18.4682 3.5178 20.1492 5.58205 20.1515C7.71583 20.1539 9.84962 20.152 11.9834 20.152L11.9848 20.1515Z" fill="currentcolor"></path>
                                    <path d="M12.4222 13.9969C11.3295 14.037 10.0621 13.6906 8.95112 12.898C7.44568 11.8236 5.95127 10.7358 4.45303 9.65208C3.93282 9.27538 3.85267 8.7266 4.25387 8.32359C4.59652 7.97988 5.10953 7.94822 5.54576 8.25984C6.44365 8.90135 7.33578 9.55 8.23031 10.196C8.81003 10.6146 9.39023 11.0318 9.9685 11.4518C11.4706 12.5418 13.3484 12.5485 14.8721 11.4674C16.3747 10.4015 17.8768 9.33512 19.3784 8.26742C19.6313 8.08731 19.8919 7.94956 20.2326 8.01777C20.6136 8.094 20.8584 8.30085 20.9615 8.64457C21.0695 9.00433 20.9462 9.30971 20.6405 9.53439C20.0214 9.98956 19.3899 10.4305 18.7622 10.8758C17.8432 11.5285 16.9246 12.1816 16.0032 12.8316C14.9532 13.5725 14.0433 13.8886 12.4217 13.9964L12.4222 13.9969Z" fill="currentcolor"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1174_850">
                                        <rect width="24" height="24" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <div class="details-wrapper">  
                            <h6 class="contact-heading font-semibold">E-mail</h6>  
                            <span>{{ $setting[0]->email }}@martinitattoo.com</span>
                        </div> 
                    </a>   
                </li>
                <li>   
                    <a target="_blank" class="phone hover:text-[#1cdfbc] inline-flex items-center my-4" href="https://wa.me/{{ $setting[0]->telephone }}">
                        <span class="contact-icons text-[#1cdfbc] px-8">
                            <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1174_840)">
                                    <path d="M15.0822 24C14.8287 23.9662 14.5757 23.9276 14.3218 23.8999C12.6453 23.7146 11.0769 23.1772 9.61061 22.3672C6.0671 20.4104 3.33811 17.6384 1.44809 14.0563C0.751145 12.7357 0.278521 11.329 0.0904123 9.84471C-0.313552 6.65944 0.63828 3.92175 2.90358 1.65234C3.35269 1.2024 3.83895 0.754818 4.38541 0.441698C5.73462 -0.33076 7.37493 -0.0641844 8.48336 1.03926C9.04863 1.60203 9.60308 2.17655 10.142 2.76424C11.7522 4.52119 11.1855 7.22409 9.01007 8.20482C8.71097 8.33976 8.41564 8.48268 8.11326 8.60915C7.32038 8.94108 6.83177 9.97259 7.06455 10.8875C7.26395 11.6708 7.66321 12.3454 8.15841 12.9651C9.21793 14.2909 10.3903 15.5025 11.8369 16.4141C12.4115 16.7761 13.0304 17.0441 13.7344 16.9774C14.4281 16.9115 14.9891 16.6031 15.3334 15.9811C15.5106 15.6614 15.6498 15.3191 15.7942 14.9825C16.7282 12.8052 19.5211 12.219 21.2475 13.8433C21.7883 14.3525 22.3164 14.8758 22.8507 15.3915C23.4808 16.0004 23.8655 16.7291 23.9445 17.6097C23.9492 17.6605 23.9807 17.7094 24 17.7588V18.1339C23.9802 18.1913 23.9478 18.2477 23.9426 18.3065C23.8951 18.8627 23.7282 19.3841 23.4023 19.8321C23.114 20.2285 22.789 20.6027 22.4467 20.9539C20.8534 22.5872 18.9544 23.6309 16.6623 23.8984C16.4164 23.9271 16.1718 23.9657 15.9268 23.9995H15.0822V24ZM15.4815 22.1485C15.4852 22.1692 15.489 22.1899 15.4923 22.2111C16.13 22.1142 16.7785 22.062 17.403 21.9121C19.1487 21.4922 20.5148 20.4687 21.6656 19.1269C22.3587 18.3187 22.3169 17.4118 21.5518 16.6671C21.0528 16.1819 20.5524 15.6981 20.0511 15.2157C19.1948 14.3911 17.9156 14.6506 17.4458 15.7399C17.2944 16.0911 17.1279 16.4357 16.9699 16.7841C16.3835 18.0752 14.5405 19.086 12.8846 18.755C12.1063 18.5994 11.3859 18.3098 10.7336 17.8697C8.90379 16.636 7.37305 15.0958 6.14893 13.2608C5.67349 12.5485 5.36123 11.7639 5.22673 10.904C4.9803 9.33177 5.92414 7.64111 7.12522 7.07928C7.50002 6.90392 7.87295 6.72526 8.24964 6.55506C9.32421 6.07128 9.58051 4.81645 8.77164 3.95607C8.2628 3.41493 7.74692 2.88037 7.22538 2.35145C6.56935 1.68619 5.6227 1.63353 4.92575 2.25178C4.471 2.65517 4.02706 3.08018 3.63486 3.54375C2.44789 4.94621 1.83089 6.56729 1.8229 8.41874C1.81678 9.87574 2.14268 11.2589 2.75686 12.5622C4.58339 16.4372 7.44171 19.3112 11.3003 21.1702C12.6128 21.8025 14.0095 22.1565 15.481 22.1485H15.4815Z" fill="currentcolor"></path>
                                    <path d="M23.9995 5.68712C23.9521 5.98822 23.9166 6.29209 23.8549 6.59042C23.381 8.88052 21.6144 10.5717 19.3255 10.9328C16.3384 11.4043 13.5332 9.34371 13.0671 6.36044C12.6098 3.43165 14.534 0.643262 17.4787 0.0950968C20.5851 -0.483086 23.4345 1.64261 23.8968 4.6402C23.9318 4.86603 23.9655 5.09231 24 5.31814V5.68666L23.9995 5.68712ZM18.491 1.79686C16.4729 1.74837 14.79 3.47922 14.778 5.47746C14.7656 7.51449 16.4636 9.2084 18.4642 9.2181C20.4906 9.2278 22.1818 7.52881 22.1887 5.51579C22.196 3.49215 20.5049 1.75576 18.491 1.79686Z" fill="currentcolor"></path>
                                    <path d="M18.7305 4.96983C18.8959 4.96983 19.0274 4.9584 19.1571 4.97191C19.6322 5.02022 19.9869 5.4135 19.9997 5.9481C20.0111 6.43333 19.7363 6.9274 19.2603 6.96585C18.7587 7.00585 18.2492 7.01832 17.7503 6.96117C17.2875 6.90818 17.0175 6.49464 17.0083 5.94446C16.9977 5.31479 16.9968 4.68461 17.0083 4.05494C17.0193 3.45749 17.419 2.98628 17.8782 3.00031C18.3418 3.01433 18.7106 3.46476 18.7287 4.05338C18.738 4.34484 18.7305 4.63681 18.7305 4.97087V4.96983Z" fill="currentcolor"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1174_840">
                                        <rect width="24" height="24" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <div class="details-wrapper">  
                            <h6 class="contact-heading font-semibold">What's App</h6> 
                            +55 {{ $setting[0]->telephone }}
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="contact bg-[#292b2e] md:py-8 px-4 rounded-[25px]">
            <form method="post" action="/contact#ContactForm" id="ContactForm" accept-charset="UTF-8" class="isolate"><input type="hidden" name="form_type" value="contact"><input type="hidden" name="utf8" value="✓"><div class="contact__fields">
                <div class="field ">
                    <input class=" focus:outline-[#1cdfbc] focus:ring-[#1cdfbc] my-4 w-full rounded-3xl px-8 py-4 font-medium bg-black text-white border-0" autocomplete="name" type="text" id="ContactForm-name" name="contact[Name]" value="" placeholder="Nome" required="">
                </div>
                <div class="field">
                    <input class="focus:outline-[#1cdfbc] focus:ring-[#1cdfbc] my-4 w-full rounded-3xl px-8 py-4 font-medium bg-black text-white border-0" autocomplete="email" type="email" id="ContactForm-email"  name="contact[email]" spellcheck="false" autocapitalize="off" value="" aria-required="true" placeholder="E-mail " required="">
                </div>
                <div class="field">
                    <input class="focus:outline-[#1cdfbc] focus:ring-[#1cdfbc] my-4 w-full rounded-3xl px-8 py-4 font-medium bg-black text-white border-0" type="tel" id="ContactForm-phone"  autocomplete="tel" name="contact[Phone number]" pattern="[0-9\-]*" value="" placeholder="Celular" required="">
                </div> 
                <div class="field ">
                    <textarea class="focus:outline-[#1cdfbc] focus:ring-[#1cdfbc] my-4 w-full rounded-3xl px-8 py-4 font-medium bg-black text-white border-0" rows="3" id="ContactForm-body"  name="contact[Comment]" placeholder="Sua Pergunta" required=""></textarea>
                </div>
                <div class="contact__button my-4 md:my-0">
                    <button class="text-black py-4 md:mx-4 bg-[#1cdfbc] rounded-[4rem] w-[12rem]" type="submit" class="button">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </section>
    <section class="md:px-8 instagram bg-no-repeat bg-cover bg-center contact flex flex-col justify-center w-full md:text-left text-center md:my-[100px] my-[50px] py-8">
        <span class="font-medium text-[#1cdfbc] text-center">Siga no Instagram</span>
        <h1 class=" font-medium text-[2.8rem] text-center w-full my-4">
            <a href="https://instagram.com/martinitattoo">@MartiniTattoo</a>
        </h1>
        <div class="grid md:grid-cols-4 grid-cols-1 md:gap-8 gap-4">
        </div>
    </section>
    <section class="footer py-8 md:grid-cols-4 grid-rows-4 md:grid-rows-1 grid-cols-1  text-center md:text-left grid md:grid-flow-rows bg-cover bg-no-repeat w-full" style="background-image: url({{ asset('storage/assets/img/bg_footer.png') }})">
        <div class="flex flex-col items-center gap-4">
            <img class="rounded-[25px] h-[160px]" src="{{ asset('storage/' . $setting[0]->logo) }}" alt=""> 
            <cite class="mx-8 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</cite>
            <ul class="list-social inline-flex gap-4" role="list">
                <li class="list-social__item">
                    <a href="https://twitter.com/" class="link text-social__link hover:text-[#1cdfbc]">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" class="icon icon-twitter" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.0462914 0L7.3819 9.92811L0 18H1.66179L8.1253 10.9338L13.3464 18H19L11.2522 7.51415L18.1236 0.00146392H16.4618L10.5102 6.50992L5.70131 0.00146392H0.0477214L0.0462914 0ZM2.48907 1.23845H5.08663L16.5558 16.7601H13.9582L2.48907 1.23845Z" fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="https://www.facebook.com/" class="link text-social__link hover:text-[#1cdfbc]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-facebook" width="10" height="22" viewBox="0 0 10 22" fill="none">
                            <g clip-path="url(#clip0_423_5411)">
                                <path d="M0 6.23792H9.13208L8.64079 9.65017H0V6.23792ZM1.60489 4.98736C1.60489 1.52449 2.87034 0 6.36 0H9.1291V3.55815H6.45826C6.17539 3.55815 5.96399 3.66534 5.81809 3.87972C5.67219 4.0941 5.60073 4.37101 5.60073 4.71045V21.203H1.60489V4.99034V4.98736Z" fill="currentcolor"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_423_5411">
                                <rect width="9.13208" height="21.2" fill="currentcolor"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="https://www.instagram.com/" class="link text-social__link hover:text-[#1cdfbc]">
                        <svg width="20" height="20" aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram" viewBox="0 0 18 18">
                            <path fill="currentColor" d="M8.77 1.58c2.34 0 2.62.01 3.54.05.86.04 1.32.18 1.63.3.41.17.7.35 1.01.66.3.3.5.6.65 1 .12.32.27.78.3 1.64.05.92.06 1.2.06 3.54s-.01 2.62-.05 3.54a4.79 4.79 0 01-.3 1.63c-.17.41-.35.7-.66 1.01-.3.3-.6.5-1.01.66-.31.12-.77.26-1.63.3-.92.04-1.2.05-3.54.05s-2.62 0-3.55-.05a4.79 4.79 0 01-1.62-.3c-.42-.16-.7-.35-1.01-.66-.31-.3-.5-.6-.66-1a4.87 4.87 0 01-.3-1.64c-.04-.92-.05-1.2-.05-3.54s0-2.62.05-3.54c.04-.86.18-1.32.3-1.63.16-.41.35-.7.66-1.01.3-.3.6-.5 1-.65.32-.12.78-.27 1.63-.3.93-.05 1.2-.06 3.55-.06zm0-1.58C6.39 0 6.09.01 5.15.05c-.93.04-1.57.2-2.13.4-.57.23-1.06.54-1.55 1.02C1 1.96.7 2.45.46 3.02c-.22.56-.37 1.2-.4 2.13C0 6.1 0 6.4 0 8.77s.01 2.68.05 3.61c.04.94.2 1.57.4 2.13.23.58.54 1.07 1.02 1.56.49.48.98.78 1.55 1.01.56.22 1.2.37 2.13.4.94.05 1.24.06 3.62.06 2.39 0 2.68-.01 3.62-.05.93-.04 1.57-.2 2.13-.41a4.27 4.27 0 001.55-1.01c.49-.49.79-.98 1.01-1.56.22-.55.37-1.19.41-2.13.04-.93.05-1.23.05-3.61 0-2.39 0-2.68-.05-3.62a6.47 6.47 0 00-.4-2.13 4.27 4.27 0 00-1.02-1.55A4.35 4.35 0 0014.52.46a6.43 6.43 0 00-2.13-.41A69 69 0 008.77 0z"></path>
                            <path fill="currentColor" d="M8.8 4a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm0 7.43a2.92 2.92 0 110-5.85 2.92 2.92 0 010 5.85zM13.43 5a1.05 1.05 0 100-2.1 1.05 1.05 0 000 2.1z"></path>
                        </svg>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="https://www.youtube.com/" class="link text-social__link hover:text-[#1cdfbc]">
                        <svg width="25" height="25" aria-hidden="true" focusable="false" role="presentation" class="icon icon-youtube" viewBox="0 0 100 70">
                            <path d="M98 11c2 7.7 2 24 2 24s0 16.3-2 24a12.5 12.5 0 01-9 9c-7.7 2-39 2-39 2s-31.3 0-39-2a12.5 12.5 0 01-9-9c-2-7.7-2-24-2-24s0-16.3 2-24c1.2-4.4 4.6-7.8 9-9 7.7-2 39-2 39-2s31.3 0 39 2c4.4 1.2 7.8 4.6 9 9zM40 50l26-15-26-15v30z" fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex flex-col items-center gap-4">
            <ul class="p-0">
                <li class="font-medium text-[1.3rem]">Menu</li>
                <li class="py-2 hover:text-[#1cdfbc] cursor-pointer">Sobre</li>
                <li class="py-2 hover:text-[#1cdfbc] cursor-pointer">Portifolio</li>
                <li class="py-2 hover:text-[#1cdfbc] cursor-pointer">Contato</li>
                <li class="py-2 hover:text-[#1cdfbc] cursor-pointer">Marcar Horário</li>
            </ul>
        </div>
        <div class="flex flex-col items-center gap-4">
            <ul class="p-0">
                <li class="hover:text-[" class=" font-medium text-[1.3rem]">Menu</li>
                <li class="py-2 hover:text-[#1cdfbc] cursor-pointer">Sobre</li>
                <li class="py-2 hover:text-[#1cdfbc] cursor-pointer">Portifolio</li>
                <li class="py-2 hover:text-[#1cdfbc] cursor-pointer">Contato</li>
                <li class="py-2 hover:text-[#1cdfbc] cursor-pointer">Marcar Horário</li>
            </ul>
        </div>
        <div class="flex flex-col  items-center gap-4">
            <ul class="p-0">
                <li class=" font-medium text-[1.3rem]">Horários</li>
                <li class="py-2">Segunda ............. 8am-9pm</li>
                <li class="py-2">Terça ..................... 8am-9pm</li>
                <li class="py-2">Quarta ................... 8am-9pm</li>
                <li class="py-2">Quinta .................... 8am-9pm</li>
                <li class="py-2">Sexta ........................ 8am-9pm</li>
                <li class="py-2">Sábado .................... 8am-9pm</li>
            </ul>
        </div>
    </section>
</div>
