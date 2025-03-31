 <!-- Cart Section -->
        <section class="cart my-5">
            <div class="container">
                <h2 class="mb-4 text-center">🛒 Your cart</h2>
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="./assets/images/file-1681987243213.webp" alt="Samsung Galaxy S23"
                                        class="img-fluid rounded" style="width: 80px; height: auto;">
                                </td>
                                <td class="fw-bold">Samsung Galaxy S23</td>
                                <td>
                                    <div class="quantity-control d-flex align-items-center justify-content-center">
                                        <button class="btn btn-sm btn-outline-secondary decrease-btn">-</button>
                                        <input type="number" value="2"
                                            class="form-control form-control-sm mx-2 text-center" style="width: 60px;">
                                        <button class="btn btn-sm btn-outline-secondary increase-btn">+</button>
                                    </div>
                                </td>
                                <td><span class="fw-bold text-primary">1,000,000</span> VND</td>
                                <td><span class="fw-bold text-success">2,000,000</span> VND</td>
                                <td><button class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="./assets/images/file-1681987243213.webp" alt="Samsung Galaxy S23"
                                        class="img-fluid rounded" style="width: 80px; height: auto;">
                                </td>
                                <td class="fw-bold">Samsung Galaxy S23</td>
                                <td>
                                    <div class="quantity-control d-flex align-items-center justify-content-center">
                                        <button class="btn btn-sm btn-outline-secondary decrease-btn">-</button>
                                        <input type="number" value="2"
                                            class="form-control form-control-sm mx-2 text-center" style="width: 60px;">
                                        <button class="btn btn-sm btn-outline-secondary increase-btn">+</button>
                                    </div>
                                </td>
                                <td><span class="fw-bold text-primary">1,000,000</span> VND</td>
                                <td><span class="fw-bold text-success">2,000,000</span> VND</td>
                                <td><button class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-end">
                    <h4 class="fw-bold">Total: <span id="total-price" class="text-danger">0</span> VND</h4>
                    <button class="btn btn-success btn-lg mt-3">🛍 Payment</button>
                </div>
            </div>
        </section>
