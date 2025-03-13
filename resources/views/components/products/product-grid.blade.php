  <div class="col-md-9" style="font-size: .775rem;">
                    <!-- Sort and View Options -->
                    <div
                        class="options d-flex justify-content-between align-items-center bg-white p-3 rounded shadow-sm mb-4">
                        <div class="results-count">
                            <span>Showing 1-24 of 120 products</span>
                        </div>
                        <div class="sort-options d-flex align-items-center gap-1">
                            <button class="btn btn-sm d-none d-md-block btn-filter-newest active">Newest</button>
                            <button class="btn btn-sm d-none d-md-block btn-filter-bseller">Best seller</button>
                            <select class="form-select form-select-sm" style="width: auto;">
                                <option selected>Price</option>
                                <option>Low to High</option>
                                <option>Higt to Low</option>
                            </select>

                            <div class="view-options ms-3 d-flex gap-1">
                                <button class="btn btn-sm btn-outline-secondary active"><i
                                        class="bi bi-grid-3x3-gap-fill"></i></button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-list"></i></button>

                            </div>
                            <button class="btn btn-sm btn-offcanvas-filter-mb d-block d-md-none" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight">Filter</button>

                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div class="row g-3 product-grid">
                        <!-- Product item 1 -->
                        <div class="col-6 col-sm-4 col-xl-3">
                            <a href="product-detail.html" class="card text-left product-item text-decoration-none">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <span class="badge bg-danger">-20%</span>
                                </div>
                                <img class="card-img-top" src="assets/images/X14-PR-Banner1708935529-0.png"
                                    alt="Samsung Galaxy S25" />
                                <div class="card-body border border-d fs-6">
                                    <p class="card-name">Samsung Galaxy S25 Ultra</p>
                                    <p class="card-price"><span>24.990.000₫</span></p>
                                    <div class="body-bottom d-flex ">
                                        <p class="card-sold">Sold <span>1240</span></p>
                                        <div class="product-rating ms-auto">
                                            <div class="stars">
                                                <span>4.5</span>
                                                <i class="bi bi-star-fill text-warning"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- Generate more product items -->
                        <script>
                            const productGrid = document.querySelector('.product-grid');
                            const productNames = [
                                'Xiaomi 14 Ultra', 'Oppo Find X7', 'Vivo X100 Pro',
                                'Google Pixel 8 Pro', 'OnePlus 12', 'Realme GT 5 Pro',
                                'Huawei P60 Pro', 'Sony Xperia 1 V', 'Asus ROG Phone 8',
                                'Motorola Edge 40 Pro', 'Nothing Phone 2', 'Honor Magic 6 Pro'
                            ];

                            const prices = [
                                '19.990.000₫', '18.490.000₫', '22.990.000₫',
                                '23.490.000₫', '16.990.000₫', '14.990.000₫',
                                '21.990.000₫', '24.990.000₫', '19.990.000₫',
                                '17.990.000₫', '15.990.000₫', '20.990.000₫'
                            ];

                            const soldCounts = [
                                '850', '720', '630', '540', '490', '380',
                                '420', '310', '290', '270', '350', '240'
                            ];

                            const ratings = [
                                '4.7', '4.5', '4.8', '4.6', '4.4', '4.3',
                                '4.5', '4.2', '4.7', '4.4', '4.1', '4.6'
                            ];

                            const reviewCounts = [
                                '87', '65', '92', '78', '56', '43',
                                '61', '38', '72', '51', '47', '59'
                            ];

                            const images = [
                                'cate-laptop.webp', 'cate-smartphone.jpg', 'file-1681987243213.webp',
                                'cate-laptop.webp', 'cate-smartphone.jpg', 'file-1681987243213.webp',
                                'cate-laptop.webp', 'cate-smartphone.jpg', 'file-1681987243213.webp',
                                'cate-laptop.webp', 'cate-smartphone.jpg', 'file-1681987243213.webp'
                            ];

                            const badges = [
                                '<span class="badge bg-danger">-15%</span>',
                                '<span class="badge bg-primary">New</span>',
                                '<span class="badge bg-success">Best Seller</span>',
                                '',
                                '<span class="badge bg-warning">Limited</span>',
                                '',
                                '<span class="badge bg-danger">-10%</span>',
                                '<span class="badge bg-primary">New</span>',
                                '<span class="badge bg-success">Best Seller</span>',
                                '',
                                '<span class="badge bg-warning">Limited</span>',
                                ''
                            ];

                            for (let i = 0; i < 12; i++) {
                                const rating = parseFloat(ratings[i]);
                                const badgeHtml = badges[i] ?
                                    `<div class="position-absolute top-0 end-0 p-2">${badges[i]}</div>` : '';

                                productGrid.innerHTML += `<div class="col-6 col-sm-4 col-xl-3">
                                <a href="product-detail.html" class="card text-left product-item text-decoration-none">
                                   ${badgeHtml}
                                    <img class="card-img-top" src="assets/images/${images[i]}"
                                        alt="${productNames[i]}" />
                                    <div class="card-body border border-d fs-6">
                                        <p class="card-name">${productNames[i]}</p>
                                        <p class="card-price "><span>${prices[i]}</span></p>
                                        <div class="body-bottom d-flex ">
                                            <p class="card-sold ">Sold <span>${soldCounts[i]}</span></p>
                                            <div class="product-rating ms-auto">
                                                <div class="stars">
                                                    <span>${ratings[i]}</span>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>`;
                            }
                        </script>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Product pagination" class="my-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
