 <header class="header">
     <nav class="navbar navbar-expand-md fixed-top custom-navbar">
         <div class="container-xl px-2">
             <!-- Logo and brand name -->
             <a class="navbar-brand d-none d-sm-flex align-items-center" href="index.html">
                 <img src="./assets/images/logo.png" width="50" alt="">
                 <span class="brand-name ms-2">ShopName</span>
             </a>

             <!-- Search form -->
             <form class="d-flex search-bar">
                 <input class="form-control" type="search" placeholder="Search for products" aria-label="Search">
                 <button class="btn search-btn" type="submit"><i class="bi bi-search"></i></button>
             </form>

             <!-- Navbar toggle button (hidden) -->
             <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <!-- Navigation links (hidden) -->
             <div class="collapse navbar-collapse " id="navbarSupportedContent">
                 <ul class="navbar-nav mx-auto d-none">
                     <li class="nav-item">
                         <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" href="product-index.html">Products</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                             aria-expanded="false">
                             Categories
                         </a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="#">Electronics</a></li>
                             <li><a class="dropdown-item" href="#">Fashion</a></li>
                             <li><a class="dropdown-item" href="#">Home & Living</a></li>
                         </ul>
                     </li>
                 </ul>
             </div>

             <!-- User account section -->
             <div class="navbar-account ">
                 <!-- Dropdown for logged-in users -->
                 <div class="account-dropdown">
                     <a href="cart.html" class="btn cart-icon border-1 bg"><i class="bi bi-cart"></i></a>

                     <a href="#" class="account-icon" id="account-toggle">
                         <img src="./assets/images/17580fa67278ff7a25e05b3c310a40e5.png" alt="User Avatar">
                     </a>
                     <ul class="dropdown-menu" id="account-menu">
                         <li><a href="profile.html">Profile</a></li>

                         <li><a href="wishlist.html">Wishlist</a></li>
                         <li><a href="#">Logout</a></li>
                     </ul>
                 </div>

                 <!-- Login/Register links (hidden) -->
                 <div class="into-account d-flex d-none gap-2">
                     <a href="">Register</a>
                     <div style="width: 2px" class="bg-dark"></div>
                     <a href="">Login</a>
                 </div>
             </div>

         </div>
         <div class="position-absolute bottom-0 bg-primary process-page" style="height: 3px;"></div>

     </nav>
 </header>
