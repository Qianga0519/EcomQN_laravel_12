  <!-- Product Detail Section -->
  <section class="product-detail my-4">
      <!-- Product Title -->
      <div class="container-xl">
          <h5 class="product-title  fw-bold mb-4">
              Samsung Galaxy S25 Ultra
              <span class="rating-value text-warning ms-2">
                  <i class="bi bi-star-fill"></i> 4.5
              </span>
              <span class="reviews-count text-muted ms-2">(87 reviews)</span>
              <span class="sold-count text-muted ms-2">| 1240 sold</span>
          </h5>
          <div class="row">
              <!-- Product Images -->
              <div class="col-md-6 mb-4">
                  <div class="product-images">
                      <!-- Main Image -->
                      <div class="main-image mb-3 text-center">
                          <div class="swiper-button-next main-next"></div>
                          <img src="./assets/images/X14-PR-Banner1708935529-0.png" id="main-product-image"
                              class="img-fluid" alt="Samsung Galaxy S25 Ultra">
                          <div class="swiper-button-prev main-prev"></div>
                      </div>
                      <!-- Thumbnail Images -->
                      <div class="thumbnail-images">
                          <div class="swiper-thumbnail-images">
                              <div class="swiper-wrapper">
                                  <div class="swiper-slide thumbnail-item active"
                                      data-img="./assets/images/X14-PR-Banner1708935529-0.png">
                                      <img src="./assets/images/X14-PR-Banner1708935529-0.png" class="img-fluid"
                                          alt="Product Thumbnail 1">
                                  </div>
                                  <div class="swiper-slide thumbnail-item"
                                      data-img="./assets/images/file-1681987243213.webp">
                                      <img src="./assets/images/file-1681987243213.webp" class="img-fluid"
                                          alt="Product Thumbnail 4">
                                  </div>
                                  <div class="swiper-slide thumbnail-item"
                                      data-img="./assets/images/cate-smartphone.jpg">
                                      <img src="./assets/images/cate-smartphone.jpg" class="img-fluid"
                                          alt="Product Thumbnail 2">
                                  </div>
                                  <div class="swiper-slide thumbnail-item" data-img="./assets/images/cate-laptop.webp">
                                      <img src="./assets/images/cate-laptop.webp" class="img-fluid"
                                          alt="Product Thumbnail 3">
                                  </div>
                                  <div class="swiper-slide thumbnail-item"
                                      data-img="./assets/images/file-1681987243213.webp">
                                      <img src="./assets/images/file-1681987243213.webp" class="img-fluid"
                                          alt="Product Thumbnail 4">
                                  </div>
                                  <div class="swiper-slide thumbnail-item"
                                      data-img="./assets/images/17580fa67278ff7a25e05b3c310a40e5.png">
                                      <img src="./assets/images/17580fa67278ff7a25e05b3c310a40e5.png" class="img-fluid"
                                          alt="Product Thumbnail 5">
                                  </div>
                                  <div class="swiper-slide thumbnail-item"
                                      data-img="./assets/images/file-1681987243213.webp">
                                      <img src="./assets/images/file-1681987243213.webp" class="img-fluid"
                                          alt="Product Thumbnail 4">
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <!-- Product Info -->
              <div class="col-md-6">
                  <div class="product-info">
                      <!-- Product Title -->
                      <h1 class="product-title fs-3 fw-bold mb-2">Samsung Galaxy S25 Ultra</h1>

                      <!-- Product Rating -->
                      <div class="product-rating d-flex align-items-center mb-3">
                          <div class="stars me-2">
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-half text-warning"></i>
                          </div>
                          <span class="rating-value">4.5</span>
                          <span class="mx-2">|</span>
                          <span class="reviews-count">87 Reviews</span>
                          <span class="mx-2">|</span>
                          <span class="sold-count">1240 Sold</span>
                      </div>

                      <!-- Product Price -->
                      <div class="product-price mb-3">
                          <span class="current-price fs-3 fw-bold">24.990.000₫</span>
                          <span class="original-price text-decoration-line-through ms-2 text-muted">29.990.000₫</span>
                          <span class="discount-badge bg-danger text-white px-2 py-1 rounded ms-2">-20%</span>
                      </div>

                      <!-- Short Description -->
                      <div class="product-short-description mb-4">
                          <p>Flagship smartphone with 200MP camera, 6.8" Dynamic AMOLED display, Snapdragon 8 Gen
                              3 processor, and 5000mAh battery with 45W fast charging.</p>
                      </div>

                      <!-- Color Options -->
                      <div class="product-colors mb-4">
                          <h6 class="option-title fw-bold">Color:</h6>
                          <div class="color-options d-flex gap-2">
                              <div class="color-option active" style="background-color: #000000;" data-color="Black">
                              </div>
                              <div class="color-option" style="background-color: #7B68EE;" data-color="Violet">
                              </div>
                              <div class="color-option" style="background-color: #FFFFFF; border: 1px solid #ddd;"
                                  data-color="White"></div>
                              <div class="color-option" style="background-color: #2E8B57;" data-color="Green">
                              </div>
                          </div>
                          <span class="selected-color mt-1 d-inline-block">Black</span>
                      </div>

                      <!-- Storage Options -->
                      <div class="product-storage mb-4">
                          <h6 class="option-title fw-bold">Storage:</h6>
                          <div class="storage-options d-flex flex-wrap gap-2">
                              <button class="btn btn-outline-secondary active">256GB</button>
                              <button class="btn btn-outline-secondary">512GB</button>
                              <button class="btn btn-outline-secondary">1TB</button>
                          </div>
                      </div>

                      <!-- Quantity -->
                      <div class="product-quantity mb-4">
                          <h6 class="option-title fw-bold">Quantity:</h6>
                          <div class="quantity-selector d-flex align-items-center">
                              <button class="btn btn-outline-secondary quantity-btn" id="decrease-quantity">-</button>
                              <input type="number" class="form-control text-center mx-2" id="quantity"
                                  value="1" min="1" max="10" style="width: 60px;">
                              <button class="btn btn-outline-secondary quantity-btn" id="increase-quantity">+</button>
                              <span class="available-stock ms-3">Available: 48 units</span>
                          </div>
                      </div>

                      <!-- Add to Cart and Buy Now buttons -->
                      <div class="product-actions d-flex gap-3 mb-4">
                          <button
                              class="btn btn-outline-primary flex-grow-1 d-flex align-items-center justify-content-center gap-2">
                              <i class="bi bi-cart-plus"></i> Add to Cart
                          </button>
                          <button
                              class="btn btn-primary flex-grow-1 d-flex align-items-center justify-content-center gap-2">
                              <i class="bi bi-lightning-fill"></i> Buy Now
                          </button>
                      </div>

                      <!-- Delivery and Warranty Info -->
                      <div class="product-info-extra p-3 bg-light rounded mb-3">
                          <div class="delivery-info d-flex align-items-center mb-2">
                              <i class="bi bi-truck me-2"></i>
                              <span>Free shipping for orders over 2.000.000₫</span>
                          </div>
                          <div class="warranty-info d-flex align-items-center">
                              <i class="bi bi-shield-check me-2"></i>
                              <span>12 months official warranty</span>
                          </div>
                      </div>

                      <!-- Share buttons -->
                      <div class="product-share">
                          <h6 class="option-title fw-bold">Share:</h6>
                          <div class="share-buttons d-flex gap-2">
                              <a href="#" class="btn btn-sm btn-outline-primary"><i
                                      class="bi bi-facebook"></i></a>
                              <a href="#" class="btn btn-sm btn-outline-info"><i class="bi bi-twitter"></i></a>
                              <a href="#" class="btn btn-sm btn-outline-danger"><i
                                      class="bi bi-pinterest"></i></a>
                              <a href="#" class="btn btn-sm btn-outline-success"><i
                                      class="bi bi-whatsapp"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Product Details Tabs -->
  <section class="product-details-tabs my-5">
      <div class="container-xl">
          <ul class="nav nav-tabs" id="productTabs" role="tablist">
              <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                      data-bs-target="#description" type="button" role="tab" aria-controls="description"
                      aria-selected="true">Description</button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="specifications-tab" data-bs-toggle="tab"
                      data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications"
                      aria-selected="false">Specifications</button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                      type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews
                      (87)</button>
              </li>
          </ul>
          <div class="tab-content p-4 bg-white border border-top-0 rounded-bottom" id="productTabsContent">
              <!-- Description Tab -->
              <div class="tab-pane fade show active" id="description" role="tabpanel"
                  aria-labelledby="description-tab">
                  <h4>Samsung Galaxy S25 Ultra</h4>
                  <p>The Samsung Galaxy S25 Ultra represents the pinnacle of smartphone technology, combining
                      cutting-edge features with elegant design. This flagship device is designed for users who
                      demand the very best in mobile technology.</p>

                  <h5 class="mt-4">Revolutionary Camera System</h5>
                  <p>Capture life's moments with unprecedented clarity using the 200MP main camera. The advanced
                      AI-powered camera system includes:</p>
                  <ul>
                      <li>200MP wide-angle main camera with advanced night mode</li>
                      <li>50MP ultra-wide camera with 120° field of view</li>
                      <li>10MP telephoto camera with 3x optical zoom</li>
                      <li>50MP periscope telephoto with 10x optical zoom</li>
                      <li>40MP front-facing camera for stunning selfies</li>
                  </ul>

                  <h5 class="mt-4">Immersive Display</h5>
                  <p>Experience content like never before on the 6.8" Dynamic AMOLED 2X display with 120Hz
                      adaptive refresh rate and QHD+ resolution. The display features:</p>
                  <ul>
                      <li>3088 x 1440 resolution for crystal clear visuals</li>
                      <li>HDR10+ certification for vibrant colors</li>
                      <li>1750 nits peak brightness for excellent outdoor visibility</li>
                      <li>Corning Gorilla Glass Victus 2 for enhanced durability</li>
                  </ul>

                  <h5 class="mt-4">Unmatched Performance</h5>
                  <p>Powered by the latest Snapdragon 8 Gen 3 processor, the S25 Ultra delivers exceptional
                      performance for gaming, multitasking, and productivity. The device includes:</p>
                  <ul>
                      <li>12GB LPDDR5X RAM for smooth multitasking</li>
                      <li>Up to 1TB UFS 4.0 storage for all your apps and media</li>
                      <li>Advanced vapor chamber cooling system</li>
                      <li>AI-enhanced performance optimization</li>
                  </ul>

                  <div class="text-center my-4">
                      <img src="./assets/images/X14-PR-Banner1708935529-0.png" class="w-100 rounded"
                          alt="Samsung Galaxy S25 Ultra Features" style="max-width: 600px;">
                  </div>

                  <h5 class="mt-4">All-Day Battery Life</h5>
                  <p>Stay connected all day with the 5000mAh intelligent battery that adapts to your usage
                      patterns:</p>
                  <ul>
                      <li>45W super-fast charging (0-50% in just 20 minutes)</li>
                      <li>15W wireless charging support</li>
                      <li>Reverse wireless charging for accessories</li>
                      <li>AI power management for optimized battery life</li>
                  </ul>
              </div>
              <!-- Specifications Tab -->
              <div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                  <div class="table-responsive">
                      <table class="table table-striped">
                          <tbody>
                              <tr>
                                  <th scope="row" style="width: 30%;">Display</th>
                                  <td>6.8" Dynamic AMOLED 2X, 120Hz, QHD+ (3088 x 1440), HDR10+</td>
                              </tr>
                              <tr>
                                  <th scope="row">Processor</th>
                                  <td>Snapdragon 8 Gen 3 (4nm)</td>
                              </tr>
                              <tr>
                                  <th scope="row">RAM</th>
                                  <td>12GB LPDDR5X</td>
                              </tr>
                              <tr>
                                  <th scope="row">Storage</th>
                                  <td>256GB / 512GB / 1TB UFS 4.0</td>
                              </tr>
                              <tr>
                                  <th scope="row">Main Camera</th>
                                  <td>200MP, f/1.7, OIS</td>
                              </tr>
                              <tr>
                                  <th scope="row">Ultra-Wide Camera</th>
                                  <td>50MP, f/2.2, 120° FOV</td>
                              </tr>
                              <tr>
                                  <th scope="row">Telephoto Camera</th>
                                  <td>10MP, f/2.4, 3x optical zoom, OIS</td>
                              </tr>
                              <tr>
                                  <th scope="row">Periscope Telephoto</th>
                                  <td>50MP, f/4.9, 10x optical zoom, OIS</td>
                              </tr>
                              <tr>
                                  <th scope="row">Front Camera</th>
                                  <td>40MP, f/2.2, autofocus</td>
                              </tr>
                              <tr>
                                  <th scope="row">Battery</th>
                                  <td>5000mAh, 45W wired charging, 15W wireless charging</td>
                              </tr>
                              <tr>
                                  <th scope="row">Operating System</th>
                                  <td>Android 15 with One UI 7.0</td>
                              </tr>
                              <tr>
                                  <th scope="row">Dimensions</th>
                                  <td>162.3 x 77.9 x 8.6 mm</td>
                              </tr>
                              <tr>
                                  <th scope="row">Weight</th>
                                  <td>220g</td>
                              </tr>
                              <tr>
                                  <th scope="row">Water Resistance</th>
                                  <td>IP68 dust/water resistant (up to 1.5m for 30 mins)</td>
                              </tr>
                              <tr>
                                  <th scope="row">Connectivity</th>
                                  <td>5G, Wi-Fi 7, Bluetooth 5.3, NFC, USB Type-C 3.2</td>
                              </tr>
                              <tr>
                                  <th scope="row">Security</th>
                                  <td>Ultrasonic in-display fingerprint sensor, face recognition</td>
                              </tr>
                              <tr>
                                  <th scope="row">Colors</th>
                                  <td>Black, Violet, White, Green</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
              <!-- Reviews Tab -->
              <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <div class="reviews-summary mb-4">
                      <div class="row align-items-center">
                          <div class="col-md-4 text-center">
                              <div class="overall-rating mb-2">
                                  <span class="display-4 fw-bold">4.5</span>
                                  <span class="text-muted">/ 5</span>
                              </div>
                              <div class="stars mb-2">
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-half text-warning"></i>
                              </div>
                              <p class="text-muted">Based on 87 reviews</p>
                          </div>
                          <div class="col-md-8">
                              <div class="rating-bars">
                                  <div class="rating-bar d-flex align-items-center mb-1">
                                      <span class="me-2">5</span>
                                      <i class="bi bi-star-fill text-warning me-2"></i>
                                      <div class="progress flex-grow-1" style="height: 10px;">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 65%;"
                                              aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <span class="ms-2">65%</span>
                                  </div>
                                  <div class="rating-bar d-flex align-items-center mb-1">
                                      <span class="me-2">4</span>
                                      <i class="bi bi-star-fill text-warning me-2"></i>
                                      <div class="progress flex-grow-1" style="height: 10px;">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                                              aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <span class="ms-2">25%</span>
                                  </div>
                                  <div class="rating-bar d-flex align-items-center mb-1">
                                      <span class="me-2">3</span>
                                      <i class="bi bi-star-fill text-warning me-2"></i>
                                      <div class="progress flex-grow-1" style="height: 10px;">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 7%;"
                                              aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <span class="ms-2">7%</span>
                                  </div>
                                  <div class="rating-bar d-flex align-items-center mb-1">
                                      <span class="me-2">2</span>
                                      <i class="bi bi-star-fill text-warning me-2"></i>
                                      <div class="progress flex-grow-1" style="height: 10px;">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 2%;"
                                              aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <span class="ms-2">2%</span>
                                  </div>
                                  <div class="rating-bar d-flex align-items-center">
                                      <span class="me-2">1</span>
                                      <i class="bi bi-star-fill text-warning me-2"></i>
                                      <div class="progress flex-grow-1" style="height: 10px;">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 1%;"
                                              aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <span class="ms-2">1%</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="write-review-btn text-center mb-4">
                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#writeReviewModal">Write
                          a
                          Review</button>
                  </div>
                  <!-- Review Filters -->
                  <div class="review-filters d-flex flex-wrap align-items-center mb-4">
                      <span class="me-2">Filter Reviews:</span>
                      <div class="btn-group me-3">
                          <button type="button" class="btn btn-sm btn-outline-secondary active">All</button>
                          <button type="button" class="btn btn-sm btn-outline-secondary">With Photos</button>
                          <button type="button" class="btn btn-sm btn-outline-secondary">With Videos</button>
                      </div>

                      <div class="ms-auto">
                          <select class="form-select form-select-sm">
                              <option selected>Most Recent</option>
                              <option>Highest Rating</option>
                              <option>Lowest Rating</option>
                          </select>
                      </div>
                  </div>

                  <!-- Review List -->
                  <div class="review-list">
                      <!-- Review Item 1 -->
                      <div class="review-item mb-4 pb-4 border-bottom">
                          <div class="d-flex">
                              <div class="reviewer-avatar me-3">
                                  <img src="./assets/images/17580fa67278ff7a25e05b3c310a40e5.png"
                                      class="rounded-circle" width="50" height="50" alt="Reviewer">
                              </div>
                              <div class="review-content flex-grow-1">
                                  <div class="d-flex justify-content-between align-items-center mb-2">
                                      <h6 class="reviewer-name mb-0">Nguyễn Văn A</h6>
                                      <span class="review-date text-muted">2023-05-15</span>
                                  </div>
                                  <div class="review-rating mb-2">
                                      <i class="bi bi-star-fill text-warning"></i>
                                      <i class="bi bi-star-fill text-warning"></i>
                                      <i class="bi bi-star-fill text-warning"></i>
                                      <i class="bi bi-star-fill text-warning"></i>
                                      <i class="bi bi-star-fill text-warning"></i>
                                  </div>
                                  <h6 class="review-title fw-bold">Tuyệt vời, đáng đồng tiền</h6>
                                  <p class="review-text">Điện thoại đẹp, chụp ảnh sắc nét, pin trâu. Mình đã dùng
                                      được 2 tuần và rất hài lòng với hiệu năng của máy. Camera chụp đêm rất tốt,
                                      màn hình hiển thị sắc nét.</p>

                                  <div class="review-photos d-flex gap-2 mb-3">
                                      <img src="./assets/images/cate-smartphone.jpg" class="img-thumbnail"
                                          width="100" alt="Review Photo">
                                      <img src="./assets/images/cate-laptop.webp" class="img-thumbnail"
                                          width="100" alt="Review Photo">
                                  </div>

                                  <div class="review-actions d-flex align-items-center">
                                      <button class="btn btn-sm btn-outline-secondary me-2"><i
                                              class="bi bi-hand-thumbs-up"></i> Helpful (24)</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

