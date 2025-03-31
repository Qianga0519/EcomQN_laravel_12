
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import Swiper from 'swiper';
import 'bootstrap-icons/font/bootstrap-icons.css';

const swiper = new Swiper('.swiperHero', {
    slidesPerView: 1,
})
const swiperCategory = new Swiper('.swiper-category', {
    slidesPerView: 2,
    // slidesPerGroup: 3,
    spaceBetween: 20,
    loop: true,
    breakpoints: {
        576: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 5,
        },
        1024: {
            slidesPerView: 6,
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

})
const swiperFlashSale = new Swiper('.swiper-flash-sale', {
    slidesPerView: 2,
    // slidesPerGroup: 2,
    spaceBetween: 15,
    loop: true,
    breakpoints: {
        576: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 6,
        },
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
// const swiperFlashSale = new Swiper('.swiper-flash-sale', {
//     slidesPerView: 2,
//     slidesPerGroup: 4,
//     spaceBetween: 20,

//     grid: {
//         rows: 2,
//         fill: 'row',
//     },

//     breakpoints: {
//         576: {
//             slidesPerView: 3,
//             slidesPerGroup: 3,
//             grid: { rows: 2 },
//         },
//         768: {
//             slidesPerView: 4,
//             slidesPerGroup: 4,
//             grid: { rows: 2 },
//         },
//         1024: {
//             slidesPerView: 5,
//             slidesPerGroup: 5,
//             grid: { rows: 2 },
//         },
//     },

//     navigation: {
//         nextEl: '.swiper-fs-button-next',
//         prevEl: '.swiper-fs-button-prev',
//     },
// });

// Initialize Swiper for product thumbnails
const thumbnailSwiper = new Swiper('.swiper-thumbnail-images', {
    slidesPerView: 5,
    spaceBetween: 10,
    draggable: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 4,
        },
        768: {
            slidesPerView: 5,
        }
    }
});

let thumbnails = document.querySelectorAll(".thumbnail-item");
let mainImage = document.getElementById("main-product-image");
let index = 0;
// Cập nhật ảnh chính và trạng thái active
function updateMainImage(newIndex) {
    if (newIndex >= 0 && newIndex < thumbnails.length) {
        thumbnails[index].classList.remove("active");
        index = newIndex;
        mainImage.src = thumbnails[index].getAttribute("data-img");
        thumbnails[index].classList.add("active");
        thumbnailSwiper.slideTo(index);
    }
}

// Xử lý sự kiện khi bấm nút prev
document.querySelector(".main-prev").addEventListener("click", function () {
    updateMainImage(index - 1);
});

// Xử lý sự kiện khi bấm nút next
document.querySelector(".main-next").addEventListener("click", function () {
    updateMainImage(index + 1);
});

// Xử lý sự kiện click vào thumbnail
thumbnails.forEach((item, i) => {
    item.addEventListener("click", function () {
        updateMainImage(i);
    });
});

// Thumbnail click handler
document.querySelectorAll('.thumbnail-item').forEach((item, index) => {
    item.addEventListener('click', function () {

        // Remove active class from all thumbnails
        document.querySelectorAll('.thumbnail-item').forEach(thumb => {
            thumb.classList.remove('active');
        });

        // Add active class to clicked thumbnail
        this.classList.add('active');
        thumbnailSwiper.slideTo(index);
        // Update main image
        const mainImage = document.getElementById('main-product-image');
        mainImage.src = this.getAttribute('data-img');
    });
});


