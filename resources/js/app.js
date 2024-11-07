import anime from 'animejs';
import lightGallery from 'lightgallery';
import 'lightgallery/css/lightgallery-bundle.min.css'
// Plugins
import lgThumbnail from 'lightgallery/plugins/thumbnail'
import fullscreen from 'lightgallery/plugins/fullscreen'
import lgZoom from 'lightgallery/plugins/zoom'
//SWIPER
// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

var swiperBanner;

document.addEventListener('DOMContentLoaded', () => {

    lightGallery(document.getElementById('open-google-map'), {
        selector: 'this',
        download: false,
    });
    
    // init Swiper:
    const testimonials = new Swiper('.swiper', {
        // configure Swiper to use modules
        loop: true,
        speed:800,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        on:{
            init: function (){
               // document.getElementsByClassName('.swiper-slide').style.display = 'flex'
            }
        }
    });

    // init Swiper:
    const carrousel_insta = new Swiper('.carrousel_instagram', {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        }
    });

    swiperBanner = new Swiper(".mySwiper", {
        grabCursor: true,
        loop:true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        speed: 3000,
        effect: "cube",
        cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
        },
        init:false,
    });
    //call gallery for portfolio
    gallery();
});
//call gallery every time when categorie is clicked
function gallery(){
    setTimeout(() => {
        const galleries = document.querySelectorAll('#gallery_carrousel');
        galleries.forEach(gallery=>{
            lightGallery(gallery, {
                plugins: [lgZoom, lgThumbnail, fullscreen],
                licenseKey: '0000-0000-000-0000',
                speed: 500,
                controls: true,
                thumbnail: false,
                download: false,
                mode: 'lg-fade',
                closeOnTap: true,
                hideScrollbar: true,
                cssEasing : 'cubic-bezier(0.25, 0, 0.25, 1)'
                // ... other settings
            });
        })
        lightGallery(document.getElementById("images"), {
            plugins: [lgZoom, lgThumbnail, fullscreen],
            licenseKey: '0000-0000-000-0000',
            speed: 500,
            controls: true,
            thumbnail: false,
            download: false,
            mode: 'lg-fade',
            closeOnTap: true,
            hideScrollbar: true,
            cssEasing : 'cubic-bezier(0.25, 0, 0.25, 1)'
            // ... other settings
        });
    }, 800);
}
window.gallery = gallery;
// Site loader
var int;
function loading (){
    if(document.readyState === 'complete')
    {
        clearInterval(int)
        document.querySelector('body').classList.add('overflow-y-auto')
        document.querySelector('.preloader').style.display = 'none';
        swiperBanner.init();
    }
}
int = setInterval(loading, 200)
// End Site Loader
//BTN scroller to top
function scrollToSection(id) {
    if(id.includes('#'))
    {
        const section = document.querySelector(id);
        document.getElementById("drawer-navigation").classList.add('-translate-x-full')
        window.scrollTo({
            behavior: 'smooth',
            top: id == '#totop' ? 0 : section.offsetTop - 50,
        });
    }
}
addEventListener('scroll', (event)=>{
    if(window.scrollY > document.querySelector('#banner').offsetHeight)
    {
        document.querySelector('#top').classList.remove('hidden');
    }else{
        document.querySelector('#top').classList.add('hidden');
    }
})
document.querySelector('#top').addEventListener("click", function(){
    scrollToSection('#totop');
});
//END BTN scroller to top
// Attach click event listeners to menu items
document.querySelectorAll('nav a').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default anchor behavior
        scrollToSection(event.currentTarget.getAttribute('href'));
    });
});




