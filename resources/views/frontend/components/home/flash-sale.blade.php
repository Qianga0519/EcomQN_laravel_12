
        <!-- Flash sale start -->
        <section class="flash-sale my-5">
            <div class="flash-sale-content container-lg border-top border-start py-2">
                <div class="section-title text-left mb-2 d-flex gap-3">
                    <!-- Title -->
                    <p class="fs-5 text-uppercase">flash sale</p>
                    <!-- Time countdown -->
                    <div class="countdown-expired d-flex gap-1 fw-bold  overflow-hidden" data-time="20">
                        <span class="countdown-item">
                            <span class="countdown-slide countdown-hours">00</span>
                        </span>
                        <span class="countdown-item">
                            <span class="countdown-slide countdown-minutes">00</span>
                        </span>
                        <span class="countdown-item">
                            <span class="countdown-slide countdown-seconds">00</span>
                        </span>
                    </div>
                    <!-- View all -->
                    <a href="shop.html" class="ms-auto view-all text-decoration-none">View all<i
                            class="bi bi-chevron-right"></i></a>
                </div>
                <div class="swiper-flash-sale overflow-hidden">
                    <div class="swiper-wrapper grid-fs">
                        <!-- Flash sale item start -->
                        <a href="shop.html" class="fs-item text-center swiper-slide text-decoration-none">
                            <div class="card text-center border-0">
                                <img class="card-img-top" src="assets/images/cate-laptop.webp" alt="Title" />
                                <div class="card-body">
                                    <h4 class="card-price fs-6 fw-bold"><span>500.000</span></h4>
                                    <p class="card-success rounded-pill fw-bold overflow-hidden">
                                        <span class="process" style="width: 50%;"></span>
                                        <span class="text-white  sold">sold 50 product</span>
                                    </p>

                                </div>
                            </div>
                        </a>
                        <!-- Flash sale item end -->
                        <!-- Genaral item -->
                        <script>
                            const FSItem = document.querySelector('.grid-fs')
                            for (let i = 1; i < 18; i++) {
                                FSItem.innerHTML += `<a href="shop.html" class="fs-item text-center swiper-slide text-decoration-none">
                            <div class="card text-center border-0">
                                <img class="card-img-top" src="assets/images/cate-laptop.webp" alt="Title" />
                                <div class="card-body">
                                    <h4 class="card-price fs-6 fw-bold"><span>500.00${i}</span></h4>
                                    <p class="card-success rounded-pill fw-bold overflow-hidden">
                                        <span class="process" style="width: 50%;"></span>
                                        <span class="text-white  sold">sold 50 product</span>
                                    </p>

                                </div>
                            </div>
                        </a>`
                            }
                        </script>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>
        <!-- Flash sale  end -->
