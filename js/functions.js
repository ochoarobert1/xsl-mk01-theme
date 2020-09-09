function openMenu() {
    "use strict";
    var mobileMenuCnt = document.getElementById("mobileMenuCnt");
    mobileMenuCnt.classList.toggle("header-mobile-container-hidden");

    var mobileMenuBtn = document.getElementById("mobileBtn");
    mobileMenuBtn.classList.toggle("mobile-btn-hidden");
}

AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

function documentCustomLoad() {
    "use strict";
    var mobileBtn = document.getElementById("mobileBtn"),
        closeMenuBtn = document.getElementById("closeMenu");
    if (mobileBtn) {
        mobileBtn.addEventListener("click", openMenu, false);
        closeMenuBtn.addEventListener("click", openMenu, false);
    }

    var checkbox = document.getElementById('RegistryOthers');
    var checkboxDetails = document.getElementById('RegistryOthersDetail');
    if (checkbox) {
        checkbox.addEventListener('change', function () {
            if (this.checked) {
                if (checkboxDetails.classList.contains('d-none')) {
                    console.log('aca');
                    checkboxDetails.classList.toggle("d-none");
                }
            } else {
                checkboxDetails.classList.toggle("d-none");
            }
        });
    }



    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 80,
        slidesPerView: 4,
        loop: true,
        freeMode: true,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            0: {
                loopedSlides: 2, //looped slides should be the same
                spaceBetween: 5,
                slidesPerView: 2,
            },
            768: {
                loopedSlides: 2, //looped slides should be the same
                spaceBetween: 10,
                slidesPerView: 2,
            },
            1024: {
                loopedSlides: 3, //looped slides should be the same
                spaceBetween: 40,
                slidesPerView: 3,
            },
        }
    });

    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 0,
        loop: true,
        loopedSlides: 5, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs,
        },
        breakpoints: {
            0: {
                loopedSlides: 2, //looped slides should be the same
            },
            768: {
                loopedSlides: 2, //looped slides should be the same
            },
            1024: {
                loopedSlides: 3, //looped slides should be the same
            },
        }
    });

    jQuery('.navbar .dropdown > a').click(function () {
        location.href = this.href;
    });

}

document.addEventListener("DOMContentLoaded", documentCustomLoad, false);
