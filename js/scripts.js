//set up variables
const banner_link = document.getElementById('banner_link');

console.log('scripts included');

//open the slideshow for The Connection by emulating click
if(banner_link){
    banner_link.addEventListener('click', function (e) {
        e.preventDefault(); // Cancel the native event
        document.getElementById('connection_ss').click();
    });
}

//top banner slideshow
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: 'fade',

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    //auto slideshow
    autoplay: {
        delay: 2000,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    /*scrollbar: {
        el: '.swiper-scrollbar',
    },*/
});

//slideshow of project elements
lightGallery(document.getElementById('lightgallery'), {
    selector: '.gallery-item'
});

//project page videos in head
lightGallery(document.getElementById('video-head'), {
    selector: '.video-item'
});
