import anime from 'animejs';
import Flickity from 'flickity';
import lightbox from 'lightbox2';
import 'lightbox2/dist/css/lightbox.css';


document.addEventListener('DOMContentLoaded', () => {
    var tl = anime.timeline({
        easing: 'easeOutBounce',
        duration: 6000,
    });
    tl.add({
        targets: '.grid-item',
        scale:1,
    })

    document.getElementById('cat').onclick = function(){
        console.log(document.getElementsByClassName('grid-item').style);
        document.getElementsByClassName('grid-item').style.transform = 'scale(0)'
    }


    const flkty = new Flickity('.js-flickity', {
        // options
        contain: true,
        autoPlay: true,
        imagesLoaded: true,
        prevNextButtons: false
    });
    
});


lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'fitImagesInViewport': true,
    'albumLabel': "Image %1 of %2",
    'showImageNumberLabel': false
})



