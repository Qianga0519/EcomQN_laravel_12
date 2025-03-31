 <section class="profile">
     <div class="container-lg mt-4">
         <div class="row">
             <!-- Sidebar -->
             <aside class="col-md-3">
                 <div class="list-group">
                     <a href="#profile" class="list-group-item list-group-item-action active" data-bs-toggle="tab">
                         <i class="bi bi-person"></i> My Profile
                     </a>
                     <a href="#change-password" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                         <i class="bi bi-shield-lock"></i> Change Password
                     </a>
                     <a href="#orders" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                         <i class="bi bi-bag"></i> Orders
                     </a>
                     <a href="#account-settings" class="list-group-item list-group-item-action" data-bs-toggle="tab">
                         <i class="bi bi-gear"></i> Account Settings
                     </a>
                 </div>
             </aside>

             <!-- Content -->
             <section class="col-md-9 mt-4 mt-md-0">
                 <div class="tab-content">
                     <!-- My Profile -->
                     <div class="tab-pane fade show active" id="profile">
                         <div class="card p-4">
                             <h4 class="fw-bold mb-3">Personal Information</h4>
                             <div class="row">
                                 <div class="col-md-4 text-center d-flex flex-column profile-image">
                                     <img src="./assets/images/17580fa67278ff7a25e05b3c310a40e5.png"
                                         class="align-self-center">
                                     <button class="btn btn-outline-primary mt-2 btn-sm">Change Avatar</button>
                                 </div>
                                 <div class="col-md-8">
                                     <form>
                                         <div class="mb-3">
                                             <label class="form-label fw-bold">Full Name</label>
                                             <input type="text" class="form-control" value="John Doe">
                                         </div>
                                         <div class="mb-3">
                                             <label class="form-label fw-bold">Email</label>
                                             <input type="email" class="form-control" value="example@gmail.com"
                                                 disabled>
                                         </div>
                                         <div class="mb-3">
                                             <label class="form-label fw-bold">Phone Number</label>
                                             <input type="tel" class="form-control" value="0123 456 789">
                                         </div>
                                         <div class="mb-3">
                                             <label class="form-label fw-bold">Address</label>
                                             <input type="text" class="form-control"
                                                 value="123 ABC Street, New York">
                                         </div>
                                         <button type="submit" class="btn btn-primary">Save Changes</button>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Change Password -->
                     <div class="tab-pane fade" id="change-password">
                         <div class="card p-4">
                             <h4 class="fw-bold mb-3">Change Password</h4>
                             <form>
                                 <div class="mb-3">
                                     <label class="form-label fw-bold">Current Password</label>
                                     <input type="password" class="form-control">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label fw-bold">New Password</label>
                                     <input type="password" class="form-control">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label fw-bold">Confirm New Password</label>
                                     <input type="password" class="form-control">
                                 </div>
                                 <button type="submit" class="btn btn-primary">Update Password</button>
                             </form>
                         </div>
                     </div>

                     <!-- Orders -->
                     <div class="tab-pane fade" id="orders">
                         <div class="card p-4">
                             <h4 class="fw-bold mb-3">Order History</h4>
                             <div class="table-responsive">
                                 <table class="table table-bordered text-center align-middle">
                                     <thead class="table-light">
                                         <tr>
                                             <th>Order ID</th>
                                             <th>Order Date</th>
                                             <th>Status</th>
                                             <th>Total</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>#123456</td>
                                             <td>12/03/2025</td>
                                             <td><span class="badge bg-success">Delivered</span></td>
                                             <td>2,000,000 VND</td>
                                             <td><a href="#" class="btn btn-outline-primary btn-sm">View
                                                     Details</a></td>
                                         </tr>
                                         <tr>
                                             <td>#654321</td>
                                             <td>10/03/2025</td>
                                             <td><span class="badge bg-warning">Shipping</span></td>
                                             <td>1,500,000 VND</td>
                                             <td><a href="#" class="btn btn-outline-primary btn-sm">View
                                                     Details</a></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>

                     <!-- Account Settings -->
                     <div class="tab-pane fade" id="account-settings">
                         <div class="card p-4">
                             <h4 class="fw-bold mb-3">Account Settings</h4>
                             <form>
                                 <div class="mb-3">
                                     <label class="form-label fw-bold">Language</label>
                                     <select class="form-select">
                                         <option selected>English</option>
                                         <option>Tiếng Việt</option>
                                     </select>
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label fw-bold">Notifications</label>
                                     <div class="form-check">
                                         <input type="checkbox" class="form-check-input" id="emailNotify" checked>
                                         <label class="form-check-label" for="emailNotify">Receive notifications
                                             via
                                             email</label>
                                     </div>
                                     <div class="form-check">
                                         <input type="checkbox" class="form-check-input" id="smsNotify">
                                         <label class="form-check-label" for="smsNotify">Receive notifications
                                             via SMS</label>
                                     </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Save Changes</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </section>
         </div>
     </div>
 </section>
