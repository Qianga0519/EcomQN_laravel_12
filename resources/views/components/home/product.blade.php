 <section class="products my-5">
            <div class="container-lg product-content py-2 ">
                <!-- Title -->
                <div class="section-title text-left d-flex mb-2">
                    <p class="fs-5 text-uppercase">Product</p>

                </div>
                <div class="row g-3 grid-product">
                    <!-- Product item start -->
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 ">
                        <a href="shop.html" class="card text-left product-item text-decoration-none">
                            <img class="card-img-top" src="assets/images/X14-PR-Banner1708935529-0.png"
                                alt="Title" />
                            <div class="card-body">
                                <p class="card-name">Samsung Galaxy S25 Ultra Utimate</p>
                                <div class="body-bottom">
                                    <p class="card-price fs-5 "><span>500.000</span></p>
                                    <p class="card-sold fs-6">Sold <span>400</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Product item end -->
                    <!-- Product item start -->
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 ">
                        <a href="shop.html" class="card text-left product-item text-decoration-none">
                            <img class="card-img-top" src="assets/images/17580fa67278ff7a25e05b3c310a40e5.png"
                                alt="Title" />
                            <div class="card-body">
                                <p class="card-name">Samsung Galaxy S25 Ultra Utimate</p>
                                <div class="body-bottom">
                                    <p class="card-price fs-5 "><span>500.000</span></p>
                                    <p class="card-sold fs-6">Sold <span>400</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Product item end -->

                </div>
                <!-- Genaral product item -->
                <script>
                    const productItem = document.querySelector('.grid-product')
                    for (let i = 1; i < 17; i++) {
                        productItem.innerHTML += `<div class="col-6 col-sm-4 col-md-3 col-xl-2 ">
                          <a href="shop.html" class="card text-left product-item text-decoration-none">
                            <img class="card-img-top" src="assets/images/cate-laptop.webp" alt="Title" />
                            <div class="card-body">
                                <p class="card-name">Samsung Galaxy S2${i} Ultra Utimate</p>
                                <div class="body-bottom">
                                    <p class="card-price fs-5 "><span>500.000</span></p>
                                    <p class="card-sold fs-6">Sold <span>400</span></p>
                                </div>
                            </div>
                        </a>
                    </div>`
                    }
                </script>
                <div class="view-more-product text-center my-5">
                    <a href="shop.html" class="text-decoration-none  rounded px-5 py-2">View more</a>
                </div>
            </div>
        </section>
