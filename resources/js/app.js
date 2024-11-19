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
var set = [];

document.addEventListener('DOMContentLoaded', () => {
    const cookieBanner = document.getElementById("cookie-banner");
    const acceptButton = document.getElementById("accept-cookies");
    const declineButton = document.getElementById("decline-cookies");
    console.log(localStorage.getItem("cookieConsent"))
    // Check if cookies consent is already given
    if (localStorage.getItem("cookieConsent") == "accepted") {
        cookieBanner.style.display = "none";
    }

    // Handle Accept Button
    acceptButton.addEventListener("click", () => {
        localStorage.setItem("cookieConsent", "accepted");
        cookieBanner.style.display = "none";
    });

    // Handle Decline Button
    declineButton.addEventListener("click", () => {
        localStorage.setItem("cookieConsent", "declined");
        cookieBanner.style.display = "none";
    });
});
//call gallery every time when categorie is clicked
function gallery(el){
    el.forEach(gallery=>{
        if(gallery.media_type == 'CAROUSEL_ALBUM' || gallery.media_type == 'IMAGE')
        {
            gallery = document.getElementById(gallery.id);
            if(gallery != null)
            {
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
                    mobileSettings:{
                        showCloseIcon: true
                    },
                    cssEasing : 'cubic-bezier(0.25, 0, 0.25, 1)'
                    // ... other settings
                });
            }
        }
    })
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
       // swiperBanner.init();
        if(document.getElementById("notification") != null)
        {
            setTimeout(() => {
                document.getElementById("notification").style.visibility = 'hidden';
            }, 8000);
        }
        const lazyImages = document.querySelectorAll("img.lazy");
        const lazyVideos = document.querySelectorAll("video.lazy")
    
        const imageObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const img = entry.target;
              img.src = img.dataset.src;
              img.classList.add("loaded");
              observer.unobserve(img);
            }
          });
        });
      
        lazyImages.forEach(img => {
          imageObserver.observe(img);
        });
        lazyVideos.forEach(video => {
            imageObserver.observe(video);
        });
        lightGallery(document.getElementById('open-google-map'), {
            selector: 'this',
            download: false,
            closeOnTap: true,
            closable:true,
            mobileSettings:{
                showCloseIcon: true
            },
            hideScrollbar: true,
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
            init:true,
        });
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
   window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
});
//END BTN scroller to top
// Attach click event listeners to menu items
document.querySelectorAll('nav a').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default anchor behavior
        scrollToSection(event.currentTarget.getAttribute('href'));
    });
});




