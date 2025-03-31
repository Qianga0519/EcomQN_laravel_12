 <!-- User Stats -->
 <div class="row g-3 g-md-4 mb-4">
     <div class="col-6 col-md-3">
         <div class="card border-0 shadow-sm">
             <div class="card-body">
                 <div class="d-flex justify-content-between align-items-center">
                     <div>
                         <h6 class="card-subtitle mb-1 text-muted">Total Users</h6>
                         <h2 class="card-title mb-0 fs-4 fs-md-2">8,549</h2>
                     </div>
                     <div class="bg-primary bg-opacity-10 p-2 p-md-3 rounded">
                         <i class="bi bi-people text-primary fs-4"></i>
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
                         <i class="bi bi-person-plus text-success fs-4"></i>
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
                         <h6 class="card-subtitle mb-1 text-muted">Active Users</h6>
                         <h2 class="card-title mb-0 fs-4 fs-md-2">6,842</h2>
                     </div>
                     <div class="bg-info bg-opacity-10 p-2 p-md-3 rounded">
                         <i class="bi bi-person-check text-info fs-4"></i>
                     </div>
                 </div>
                 <div class="mt-3 small">
                     <span class="text-success">
                         <i class="bi bi-arrow-up"></i> 3.7%
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
                         <h6 class="card-subtitle mb-1 text-muted">Inactive Users</h6>
                         <h2 class="card-title mb-0 fs-4 fs-md-2">1,707</h2>
                     </div>
                     <div class="bg-warning bg-opacity-10 p-2 p-md-3 rounded">
                         <i class="bi bi-person-dash text-warning fs-4"></i>
                     </div>
                 </div>
                 <div class="mt-3 small">
                     <span class="text-danger">
                         <i class="bi bi-arrow-up"></i> 5.2%
                     </span>
                     <span class="text-muted ms-2">Since last month</span>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- User Management Tools -->
 <div class="row g-3 g-md-4 mb-4">
     <!-- User List with Filters -->
     <div class="col-12">
         <div class="card border-0 shadow-sm">
             <div
                 class="card-header bg-white border-0 d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 gap-sm-0">
                 <h5 class="card-title mb-0">User List</h5>
                 <div class="d-flex flex-column flex-sm-row gap-2">
                     <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#addUserModal">
                         <i class="bi bi-person-plus me-1"></i> Add User
                     </button>
                     <div class="dropdown">
                         <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                             id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                             <i class="bi bi-funnel me-1"></i> Filter
                         </button>
                         <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="filterDropdown">
                             <li><a class="dropdown-item" href="#">All Users</a></li>
                             <li><a class="dropdown-item" href="#">Active Users</a></li>
                             <li><a class="dropdown-item" href="#">Inactive Users</a></li>
                             <li><a class="dropdown-item" href="#">Admins</a></li>
                             <li><a class="dropdown-item" href="#">Customers</a></li>
                         </ul>
                     </div>
                     <div class="dropdown">
                         <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                             id="exportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                             <i class="bi bi-download me-1"></i> Export
                         </button>
                         <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="exportDropdown">
                             <li><a class="dropdown-item" href="#">Export as CSV</a></li>
                             <li><a class="dropdown-item" href="#">Export as Excel</a></li>
                             <li><a class="dropdown-item" href="#">Export as PDF</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="card-body p-0">
                 <div class="table-responsive">
                     <table class="table table-hover align-middle mb-0">
                         <thead class="bg-light">
                             <tr>
                                 <th>
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" id="selectAll">
                                         <label class="form-check-label" for="selectAll"></label>
                                     </div>
                                 </th>
                                 <th>User</th>
                                 <th class="d-none d-md-table-cell">Email</th>
                                 <th class="d-none d-md-table-cell">Role</th>
                                 <th class="d-none d-lg-table-cell">Joined Date</th>
                                 <th>Status</th>
                                 <th>Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             <!-- User 1 -->
                             <tr>
                                 <td>
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" id="user1">
                                         <label class="form-check-label" for="user1"></label>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="d-flex align-items-center">
                                         <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                             class="rounded-circle me-2" width="40" height="40"
                                             alt="User">
                                         <div>
                                             <h6 class="mb-0">John Doe</h6>
                                             <small class="text-muted d-md-none">john.doe@example.com</small>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="d-none d-md-table-cell">john.doe@example.com</td>
                                 <td class="d-none d-md-table-cell"><span class="badge bg-primary">Admin</span></td>
                                 <td class="d-none d-lg-table-cell">2023-01-15</td>
                                 <td><span class="badge bg-success">Active</span></td>
                                 <td>
                                     <div class="dropdown">
                                         <button class="btn btn-sm btn-light" type="button"
                                             data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="bi bi-three-dots"></i>
                                         </button>
                                         <ul class="dropdown-menu dropdown-menu-end">
                                             <li><a class="dropdown-item" href="#"><i
                                                         class="bi bi-eye me-2"></i>View</a>
                                             </li>
                                             <li><a class="dropdown-item" href="#"><i
                                                         class="bi bi-pencil me-2"></i>Edit</a></li>
                                             <li><a class="dropdown-item text-danger" href="#"><i
                                                         class="bi bi-trash me-2"></i>Delete</a></li>
                                         </ul>
                                     </div>
                                 </td>
                             </tr>

                             <!-- User 2 -->
                             <tr>
                                 <td>
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" id="user2">
                                         <label class="form-check-label" for="user2"></label>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="d-flex align-items-center">
                                         <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                             class="rounded-circle me-2" width="40" height="40"
                                             alt="User">
                                         <div>
                                             <h6 class="mb-0">Jane Smith</h6>
                                             <small class="text-muted d-md-none">jane.smith@example.com</small>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="d-none d-md-table-cell">jane.smith@example.com</td>
                                 <td class="d-none d-md-table-cell"><span class="badge bg-info">Editor</span>
                                 </td>
                                 <td class="d-none d-lg-table-cell">2023-02-22</td>
                                 <td><span class="badge bg-success">Active</span></td>
                                 <td>
                                     <div class="dropdown">
                                         <button class="btn btn-sm btn-light" type="button"
                                             data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="bi bi-three-dots"></i>
                                         </button>
                                         <ul class="dropdown-menu dropdown-menu-end">
                                             <li><a class="dropdown-item" href="#"><i
                                                         class="bi bi-eye me-2"></i>View</a>
                                             </li>
                                             <li><a class="dropdown-item" href="#"><i
                                                         class="bi bi-pencil me-2"></i>Edit</a></li>
                                             <li><a class="dropdown-item text-danger" href="#"><i
                                                         class="bi bi-trash me-2"></i>Delete</a></li>
                                         </ul>
                                     </div>
                                 </td>
                             </tr>

                             <!-- User 3 -->
                             <tr>
                                 <td>
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" id="user3">
                                         <label class="form-check-label" for="user3"></label>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="d-flex align-items-center">
                                         <img src="https://randomuser.me/api/portraits/men/67.jpg"
                                             class="rounded-circle me-2" width="40" height="40"
                                             alt="User">
                                         <div>
                                             <h6 class="mb-0">Robert Johnson</h6>
                                             <small class="text-muted d-md-none">robert.j@example.com</small>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="d-none d-md-table-cell">robert.j@example.com</td>
                                 <td class="d-none d-md-table-cell"><span class="badge bg-secondary">Customer</span>
                                 </td>
                                 <td class="d-none d-lg-table-cell">2023-03-10</td>
                                 <td><span class="badge bg-warning text-dark">Pending</span></td>
                                 <td>
                                     <div class="dropdown">
                                         <button class="btn btn-sm btn-light" type="button"
                                             data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="bi bi-three-dots"></i>
                                         </button>
                                         <ul class="dropdown-menu dropdown-menu-end">
                                             <li><a class="dropdown-item" href="#"><i
                                                         class="bi bi-eye me-2"></i>View</a>
                                             </li>
                                             <li><a class="dropdown-item" href="#"><i
                                                         class="bi bi-pencil me-2"></i>Edit</a></li>
                                             <li><a class="dropdown-item text-danger" href="#"><i
                                                         class="bi bi-trash me-2"></i>Delete</a></li>
                                         </ul>
                                     </div>
                                 </td>
                             </tr>

                             <!-- User 4 -->
                             <tr>
                                 <td>
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" id="user4">
                                         <label class="form-check-label" for="user4"></label>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="d-flex align-items-center">
                                         <img src="https://randomuser.me/api/portraits/women/28.jpg"
                                             class="rounded-circle me-2" width="40" height="40"
                                             alt="User">
                                         <div>
                                             <h6 class="mb-0">Emily Davis</h6>
                                             <small class="text-muted d-md-none">emily.d@example.com</small>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="d-none d-md-table-cell">emily.d@example.com</td>
                                 <td class="d-none d-md-table-cell"><span class="badge bg-info">Editor</span>
                                 </td>
                                 <td class="d-none d-lg-table-cell">2023-01-30</td>
                                 <td><span class="badge bg-danger">Inactive</span></td>
                                 <td>
                                     <div class="dropdown">
                                         <button class="btn btn-sm btn-light" type="button"
                                             data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="bi bi-three-dots"></i>
                                         </button>
                                         <ul class="dropdown-menu dropdown-menu-end">
                                             <li><a class="dropdown-item" href="#"><i
                                                         class="bi bi-eye me-2"></i>View</a>
                                             </li>
                                             <li><a class="dropdown-item" href="#"><i
                                                         class="bi bi-pencil me-2"></i>Edit</a></li>
                                             <li><a class="dropdown-item text-danger" href="#"><i
                                                         class="bi bi-trash me-2"></i>Delete</a></li>
                                         </ul>
                                     </div>
                                 </td>
                             </tr>

                             <!-- User 5 -->
                             <tr>
                                 <td>
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" id="user5">
                                         <label class="form-check-label" for="user5"></label>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="d-flex align-items-center">
                                         <img src="https://randomuser.me/api/portraits/men/41.jpg"
                                             class="rounded-circle me-2" width="40" height="40"
                                             alt="User">
                                         <div>
                                             <h6 class="mb-0">Michael Wilson</h6>
                                             <small class="text-muted d-md-none">michael.w@example.com</small>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="d-none d-md-table-cell">michael.w@example.com</td>
                                 <td class="d-none d-md-table-cell"><span class="badge bg-secondary">Customer</span>
                                 </td>
                                 <td class="d-none d-lg-table-cell">2023-04-05</td>
                                 <td><span class="badge bg-success">Active</span></td>
                                 <td>
                                     <div class="dropdown">
                                         <button class="btn btn-sm btn-light" type="button"
                                             data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="bi bi-three-dots"></i>
                                         </button>
                                         <ul class="dropdown-menu dropdown-menu-end">
                                             <li><a class="dropdown-item" href="#"><i
                                                         class="bi bi-eye me-2"></i>View</a>
                                             </li>
                                             <li><a class="dropdown-item" href="#"><i
                                                         class="bi bi-pencil me-2"></i>Edit</a></li>
                                             <li><a class="dropdown-item text-danger" href="#"><i
                                                         class="bi bi-trash me-2"></i>Delete</a></li>
                                         </ul>
                                     </div>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
             <div class="card-footer bg-white py-3">
                 <div class="row align-items-center">
                     <div class="col-md-6 mb-3 mb-md-0">
                         <p class="mb-0 text-muted">Showing <strong>1</strong> to <strong>5</strong> of
                             <strong>100</strong> entries
                         </p>
                     </div>
                     <div class="col-md-6">
                         <nav aria-label="Page navigation">
                             <ul class="pagination justify-content-md-end justify-content-center mb-0">
                                 <li class="page-item disabled">
                                     <a class="page-link" href="#" tabindex="-1"
                                         aria-disabled="true">Previous</a>
                                 </li>
                                 <li class="page-item active"><a class="page-link" href="#">1</a>
                                 </li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item">
                                     <a class="page-link" href="#">Next</a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- User Activity and Analytics -->
 <div class="row g-3 g-md-4 mb-4">
     <!-- User Activity Chart -->
     <div class="col-12 col-lg-8">
         <div class="card border-0 shadow-sm">
             <div
                 class="card-header bg-white border-0 d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 gap-sm-0">
                 <h5 class="card-title mb-0">User Activity</h5>
                 <div class="dropdown">
                     <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                         id="activityDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                         Last 30 Days
                     </button>
                     <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="activityDropdown">
                         <li><a class="dropdown-item" href="#">Today</a></li>
                         <li><a class="dropdown-item" href="#">Last 7 Days</a></li>
                         <li><a class="dropdown-item" href="#">Last 30 Days</a></li>
                         <li><a class="dropdown-item" href="#">Last 90 Days</a></li>
                     </ul>
                 </div>
             </div>
             <div class="card-body">
                 <div class="chart-container" style="height: 300px;">
                     <!-- Chart will be rendered here by JavaScript -->
                     <div class="d-flex justify-content-center align-items-center h-100 text-muted">
                         <p>User activity chart will be displayed here</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- User Demographics -->
     <div class="col-12 col-lg-4">
         <div class="card border-0 shadow-sm">
             <div class="card-header bg-white border-0">
                 <h5 class="card-title mb-0">User Demographics</h5>
             </div>
             <div class="card-body">
                 <div class="mb-4">
                     <h6 class="mb-3">User Roles</h6>
                     <div class="progress mb-2" style="height: 10px;">
                         <div class="progress-bar bg-primary" role="progressbar" style="width: 15%;"
                             aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                         <div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                         <div class="progress-bar bg-secondary" role="progressbar" style="width: 60%;"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <div class="d-flex justify-content-between small text-muted">
                         <div><i class="bi bi-square-fill text-primary me-1"></i> Admin (15%)</div>
                         <div><i class="bi bi-square-fill text-info me-1"></i> Editor (25%)</div>
                         <div><i class="bi bi-square-fill text-secondary me-1"></i> Customer (60%)</div>
                     </div>
                 </div>

                 <div class="mb-4">
                     <h6 class="mb-3">User Status</h6>
                     <div class="progress mb-2" style="height: 10px;">
                         <div class="progress-bar bg-success" role="progressbar" style="width: 80%;"
                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                         <div class="progress-bar bg-warning" role="progressbar" style="width: 10%;"
                             aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                         <div class="progress-bar bg-danger" role="progressbar" style="width: 10%;"
                             aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <div class="d-flex justify-content-between small text-muted">
                         <div><i class="bi bi-square-fill text-success me-1"></i> Active (80%)</div>
                         <div><i class="bi bi-square-fill text-warning me-1"></i> Pending (10%)</div>
                         <div><i class="bi bi-square-fill text-danger me-1"></i> Inactive (10%)</div>
                     </div>
                 </div>

                 <div>
                     <h6 class="mb-3">Registration Source</h6>
                     <div class="progress mb-2" style="height: 10px;">
                         <div class="progress-bar bg-primary" role="progressbar" style="width: 45%;"
                             aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                         <div class="progress-bar bg-success" role="progressbar" style="width: 30%;"
                             aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                         <div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <div class="d-flex justify-content-between small text-muted">
                         <div><i class="bi bi-square-fill text-primary me-1"></i> Direct (45%)</div>
                         <div><i class="bi bi-square-fill text-success me-1"></i> Social (30%)</div>
                         <div><i class="bi bi-square-fill text-info me-1"></i> Referral (25%)</div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Recent User Activity -->
 <div class="card border-0 shadow-sm mb-4">
     <div
         class="card-header bg-white border-0 d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 gap-sm-0">
         <h5 class="card-title mb-0">Recent User Activity</h5>
         <button class="btn btn-sm btn-outline-primary">View All Activities</button>
     </div>
     <div class="card-body p-0">
         <ul class="list-group list-group-flush">
             <li class="list-group-item px-3 px-md-4 py-3">
                 <div class="d-flex">
                     <div class="flex-shrink-0">
                         <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle"
                             width="40" height="40" alt="User">
                     </div>
                     <div class="flex-grow-1 ms-3">
                         <div class="d-flex flex-column flex-md-row justify-content-between">
                             <h6 class="mb-1">John Doe updated his profile picture</h6>
                             <small class="text-muted">2 hours ago</small>
                         </div>
                         <p class="mb-0 text-muted small">User ID: #1001 | IP: 192.168.1.1</p>
                     </div>
                 </div>
             </li>
             <li class="list-group-item px-3 px-md-4 py-3">
                 <div class="d-flex">
                     <div class="flex-shrink-0">
                         <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle"
                             width="40" height="40" alt="User">
                     </div>
                     <div class="flex-grow-1 ms-3">
                         <div class="d-flex flex-column flex-md-row justify-content-between">
                             <h6 class="mb-1">Jane Smith changed her password</h6>
                             <small class="text-muted">5 hours ago</small>
                         </div>
                         <p class="mb-0 text-muted small">User ID: #1002 | IP: 192.168.1.2</p>

                     </div>
                 </div>
             </li>
             <li class="list-group-item px-3 px-md-4 py-3">
                 <div class="d-flex">
                     <div class="flex-shrink-0">
                         <img src="https://randomuser.me/api/portraits/men/33.jpg" class="rounded-circle"
                             width="40" height="40" alt="User">
                     </div>
                     <div class="flex-grow-1 ms-3">
                         <div class="d-flex flex-column flex-md-row justify-content-between">
                             <h6 class="mb-1">Mark Johnson updated his profile picture</h6>
                             <small class="text-muted">1 day ago</small>
                         </div>
                         <p class="mb-0 text-muted small">User ID: #1003 | IP: 192.168.1.3</p>
                     </div>
                 </div>
             </li>
             <li class="list-group-item px-3 px-md-4 py-3">
                 <div class="d-flex">
                     <div class="flex-shrink-0">
                         <img src="https://randomuser.me/api/portraits/women/45.jpg" class="rounded-circle"
                             width="40" height="40" alt="User">
                     </div>
                     <div class="flex-grow-1 ms-3">
                         <div class="d-flex flex-column flex-md-row justify-content-between">
                             <h6 class="mb-1">Emily Davis changed her password</h6>
                             <small class="text-muted">2 days ago</small>
                         </div>
                         <p class="mb-0 text-muted small">User ID: #1004 | IP: 192.168.1.4</p>
                     </div>
                 </div>
             </li>
         </ul>
     </div>
 </div>
