  <!-- Sidebar Filters On < md -->
  <div class="offcanvas offcanvas-end d-block d-md-none offcv-filter" tabindex="-1" id="offcanvasRight"
      aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
          <h5 id="offcanvasRightLabel">Filters</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
          <div class="filter-sidebar options bg-white p-3 rounded shadow-sm overflow-auto">
              <!-- Options Filter -->
              <div class="filter-section d-flex gap-2 mb-4">
                  <button class="btn btn-sm  btn-filter-newest active">Newest</button>
                  <button class="btn btn-sm  btn-filter-bseller">Best seller</button>
                  <select class="form-select form-select-sm" style="width: auto;">
                      <option selected>Price</option>
                      <option>Low to High</option>
                      <option>Higt to Low</option>
                  </select>
              </div>
              <!-- Categories Filter -->
              <div class="filter-section mb-4">
                  <h6 class="fw-bold">Categories</h6>
                  <div class="check-filter d-flex flex-wrap">
                      <div class="form-check  w-50 py-1">
                          <input class="form-check-input" type="checkbox" value="" id="cat1">
                          <label class="form-check-label" for="cat1">
                              Smartphones
                          </label>
                      </div>
                      <div class="form-check w-50 py-1">
                          <input class="form-check-input" type="checkbox" value="" id="cat2">
                          <label class="form-check-label" for="cat2">
                              Laptops
                          </label>
                      </div>
                      <div class="form-check  w-50 py-1">
                          <input class="form-check-input" type="checkbox" value="" id="cat3">
                          <label class="form-check-label" for="cat3">
                              Tablets
                          </label>
                      </div>
                      <div class="form-check w-50 py-1">
                          <input class="form-check-input" type="checkbox" value="" id="cat4">
                          <label class="form-check-label" for="cat4">
                              Accessories
                          </label>
                      </div>
                      <div class="form-check  w-50 py-1">
                          <input class="form-check-input" type="checkbox" value="" id="cat5">
                          <label class="form-check-label" for="cat5">
                              Wearables
                          </label>
                      </div>
                  </div>

              </div>

              <!-- Price Range Filter -->
              <div class="filter-section mb-4">
                  <h6 class="fw-bold">Price Range</h6>
                  <div class="price-range pt-2 d-flex gap-1 flex-wrap">
                      <div class="input-group w-75">
                          <span class="input-group-text">Min</span>
                          <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="input-group w-75">
                          <span class="input-group-text">Max</span>
                          <input type="number" class="form-control" placeholder="10000000">
                      </div>
                  </div>
              </div>

              <!-- Brand Filter -->
              <div class="filter-section mb-4">
                  <h6 class="fw-bold">Brand</h6>
                  <div class="check-filter d-flex flex-wrap">
                      <div class="form-check w-50 py-1">
                          <input class="form-check-input" type="checkbox" value="" id="brand1">
                          <label class="form-check-label" for="brand1">
                              Samsung
                          </label>
                      </div>
                      <div class="form-check w-50 py-1">
                          <input class="form-check-input" type="checkbox" value="" id="brand2">
                          <label class="form-check-label" for="brand2">
                              Apple
                          </label>
                      </div>
                      <div class="form-check w-50 py-1">
                          <input class="form-check-input" type="checkbox" value="" id="brand3">
                          <label class="form-check-label" for="brand3">
                              Xiaomi
                          </label>
                      </div>
                      <div class="form-check w-50 py-1">
                          <input class="form-check-input" type="checkbox" value="" id="brand4">
                          <label class="form-check-label" for="brand4">
                              Oppo
                          </label>
                      </div>
                      <div class="form-check w-50 py-1">
                          <input class="form-check-input" type="checkbox" value="" id="brand5">
                          <label class="form-check-label" for="brand5">
                              Vivo
                          </label>
                      </div>
                  </div>
              </div>

              <!-- Rating Filter -->
              <div class="filter-section mb-4">
                  <h6 class="fw-bold">Rating</h6>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="rating" id="rating5">
                      <label class="form-check-label" for="rating5">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="rating" id="rating4">
                      <label class="form-check-label" for="rating4">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star text-warning"></i> & up
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="rating" id="rating3">
                      <label class="form-check-label" for="rating3">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star text-warning"></i>
                          <i class="bi bi-star text-warning"></i> & up
                      </label>
                  </div>
              </div>

              <!-- Apply Filters Button -->
              <button type="button" class="btn btn-primary w-100 text-reset" data-bs-dismiss="offcanvas"
                  aria-label="Close">Apply Filters</button>
          </div>

      </div>
  </div>
  <!-- Sidebar Filters On >= md-->
  <div class="col-md-3 d-none d-md-flex mb-4">
      <div class="filter-sidebar bg-white p-3 rounded shadow-sm">
          <h5 class="fw-bold mb-3">Filters</h5>

          <!-- Categories Filter -->
          <div class="filter-section mb-4">
              <h6 class="fw-bold">Categories</h6>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="cat1md">
                  <label class="form-check-label" for="cat1md">
                      Smartphones
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="cat2md">
                  <label class="form-check-label" for="cat2md">
                      Laptops
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="cat3md">
                  <label class="form-check-label" for="cat3md">
                      Tablets
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="cat4md">
                  <label class="form-check-label" for="cat4md">
                      Accessories
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="cat5md">
                  <label class="form-check-label" for="cat5md">
                      Wearables
                  </label>
              </div>
          </div>

          <!-- Price Range Filter -->
          <div class="filter-section mb-4">
              <h6 class="fw-bold">Price Range</h6>
              <div class="price-range">
                  <div class="input-group mb-2">
                      <span class="input-group-text">Min</span>
                      <input type="number" class="form-control" placeholder="0">
                  </div>
                  <div class="input-group">
                      <span class="input-group-text">Max</span>
                      <input type="number" class="form-control" placeholder="10000000">
                  </div>
              </div>
          </div>

          <!-- Brand Filter -->
          <div class="filter-section mb-4">
              <h6 class="fw-bold">Brand</h6>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="brand1md">
                  <label class="form-check-label" for="brand1md">
                      Samsung
                  </label>
              </div>

              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="brand2md">
                  <label class="form-check-label" for="brand2md">
                      Apple
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="brand3md">
                  <label class="form-check-label" for="brand3md">
                      Xiaomi
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="brand4md">
                  <label class="form-check-label" for="brand4md">
                      Oppo
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="brand5md">
                  <label class="form-check-label" for="brand5md">
                      Vivo
                  </label>
              </div>
          </div>

          <!-- Rating Filter -->
          <div class="filter-section mb-4">
              <h6 class="fw-bold">Rating</h6>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="rating" id="rating5md">
                  <label class="form-check-label" for="rating5md">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="rating" id="rating4md">
                  <label class="form-check-label" for="rating4md">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star text-warning"></i> & up
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="rating" id="rating3md">
                  <label class="form-check-label" for="rating3md">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star text-warning"></i>
                      <i class="bi bi-star text-warning"></i> & up
                  </label>
              </div>
          </div>

          <!-- Apply Filters Button -->
          <button class="btn btn-primary w-100">Apply Filters</button>
      </div>
  </div>
