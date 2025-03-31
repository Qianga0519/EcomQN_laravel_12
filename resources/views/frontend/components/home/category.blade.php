 <!-- Category start -->
 <section class="category my-5">
     <div class="category-content container-lg border-top border-start  py-2">
         <!-- Title -->
         <div class="section-title text-left mb-2">
             <p class="fs-5 text-uppercase">category</p>
         </div>
         <!-- Swiper category -->
         <div class="swiper-category overflow-hidden">
             <div class="swiper-wrapper">
                 <!-- Swiper Item start-->
                 <div class="category-item text-center swiper-slide py-2">
                     <a href="shop.html" class="category-link text-decoration-none ">
                         <img src="./assets/images/cate-smartphone.jpg" width="100" alt="">
                         <p class="">Smart phone</p>
                     </a>
                 </div>
                 <!-- Swiper Item end-->
                 <!-- Genaral item -->
                 <script>
                     const SwiperCate = document.querySelector('.swiper-category .swiper-wrapper')
                     for (let i = 1; i < 10; i++) {
                         SwiperCate.innerHTML += `<div class="category-item text-center swiper-slide py-2">
                            <a href="shop.html" class="category-link text-decoration-none ">
                                <div
                                    class="category-icon mx-auto mb-1 d-flex align-items-center justify-content-center">
                                    <img src="./assets/images/cate-laptop.webp" width="100" alt="">
                                </div>
                                <p class="">Smart phone${i}</p>
                            </a>
                        </div>`
                     }
                 </script>
             </div>
             <!-- Button controll swiper -->
             <div class="swiper-button-prev"></div>
             <div class="swiper-button-next"></div>
         </div>
     </div>
 </section>
 <!-- Category end -->
