<!-- Stats cards -->
<div class="row g-3 g-md-4 mb-4">
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-subtitle mb-1 text-muted">Total Sales</h6>
                        <h2 class="card-title mb-0 fs-4 fs-md-2">$24,500</h2>
                    </div>
                    <div class="bg-primary bg-opacity-10 p-2 p-md-3 rounded">
                        <i class="bi bi-currency-dollar text-primary fs-4"></i>
                    </div>
                </div>
                <div class="mt-3 small">
                    <span class="text-success">
                        <i class="bi bi-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted ms-2">Since last month</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-subtitle mb-1 text-muted">New Users</h6>
                        <h2 class="card-title mb-0 fs-4 fs-md-2">1,245</h2>
                    </div>
                    <div class="bg-success bg-opacity-10 p-2 p-md-3 rounded">
                        <i class="bi bi-people text-success fs-4"></i>
                    </div>
                </div>
                <div class="mt-3 small">
                    <span class="text-success">
                        <i class="bi bi-arrow-up"></i> 8.3%
                    </span>
                    <span class="text-muted ms-2">Since last month</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-subtitle mb-1 text-muted">Orders</h6>
                        <h2 class="card-title mb-0 fs-4 fs-md-2">854</h2>
                    </div>
                    <div class="bg-warning bg-opacity-10 p-2 p-md-3 rounded">
                        <i class="bi bi-cart text-warning fs-4"></i>
                    </div>
                </div>
                <div class="mt-3 small">
                    <span class="text-danger">
                        <i class="bi bi-arrow-down"></i> 2.7%
                    </span>
                    <span class="text-muted ms-2">Since last month</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-subtitle mb-1 text-muted">Visitors</h6>
                        <h2 class="card-title mb-0 fs-4 fs-md-2">12,589</h2>
                    </div>
                    <div class="bg-info bg-opacity-10 p-2 p-md-3 rounded">
                        <i class="bi bi-eye text-info fs-4"></i>
                    </div>
                </div>
                <div class="mt-3 small">
                    <span class="text-success">
                        <i class="bi bi-arrow-up"></i> 15.2%
                    </span>
                    <span class="text-muted ms-2">Since last month</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts and tables section -->
<div class="row g-3 g-md-4 mb-4">
    <!-- Sales chart -->
    <div class="col-12 col-lg-8">
        <div class="card border-0 shadow-sm">
            <div
                class="card-header bg-white border-0 d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 gap-sm-0">
                <h5 class="card-title mb-0">Sales Overview</h5>
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="salesDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        This Month
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="salesDropdown">
                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container" style="height: 300px;">
                    <!-- Chart will be rendered here by JavaScript -->
                    <div class="d-flex justify-content-center align-items-center h-100 text-muted">
                        <p>Sales chart will be displayed here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top products -->
    <div class="col-12 col-lg-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0">
                <h5 class="card-title mb-0">Top Products</h5>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center px-3 px-md-4 py-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-light rounded" style="width: 40px; height: 40px;"></div>
                            <div class="ms-3">
                                <h6 class="mb-0">Product A</h6>
                                <small class="text-muted">Category</small>
                            </div>
                        </div>
                        <span class="badge bg-success rounded-pill">$1,245</span>
                    </li>
                    <!-- Other list items remain the same but with px-3 px-md-4 classes -->
                    <!-- ... -->
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Recent orders table -->
<div class="card border-0 shadow-sm">
    <div
        class="card-header bg-white border-0 d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 gap-sm-0">
        <h5 class="card-title mb-0">Recent Orders</h5>
        <button class="btn btn-sm btn-primary">View All</button>
    </div>
    <div class="card-body p-2 p-md-3">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Customer</th>
                        <th scope="col" class="d-none d-md-table-cell">Product</th>
                        <th scope="col" class="d-none d-md-table-cell">Date</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#ORD-0001</td>
                        <td>John Doe</td>
                        <td class="d-none d-md-table-cell">Product A</td>
                        <td class="d-none d-md-table-cell">2023-04-15</td>
                        <td>$120.00</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">View</a></li>
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <!-- Other table rows remain the same but with d-none d-md-table-cell classes for Product and Date -->
                    <!-- ... -->
                </tbody>
            </table>
        </div>
    </div>
</div>
