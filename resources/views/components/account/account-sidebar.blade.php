<!--start account sidebar-->
<div class="col-12 col-xl-3 filter-column">
    <nav class="navbar navbar-expand-xl flex-wrap p-0">
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarFilter" aria-labelledby="offcanvasNavbarFilterLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title mb-0 fw-bold text-uppercase" id="offcanvasNavbarFilterLabel">Account</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
                 <div class="offcanvas-body account-menu" style="min-height: 400px;">
                       <div class="list-group w-100 rounded-0">
              <!-- <a href="/account-dashboard" class="list-group-item {{ request()->is('account-dashboard') ? 'active' : '' }}">
                <i class="bi bi-house-door me-2"></i>Dashboard
              </a> -->
              <!-- <a href="/account-orders" class="list-group-item"><i class="bi bi-basket3 me-2"></i>Orders</a> -->
              <a href="/account-profile" class="list-group-item {{ request()->is('account-profile') ? 'active' : '' }}">
                <i class="bi bi-person me-2"></i>Profile
              </a>
              <a href="/account-edit-profile" class="list-group-item {{ request()->is('account-edit-profile') ? 'active' : '' }}">
                <i class="bi bi-pencil me-2"></i>Edit Profile
              </a>
              <!-- <a href="/account-saved-address" class="list-group-item {{ request()->is('account-saved-address') ? 'active' : '' }}"><i class="bi bi-pin-map me-2"></i>Saved Address</a> -->
              <!-- <a href="wishlist.html" class="list-group-item"><i class="bi bi-suit-heart me-2"></i>Wishlist</a> -->
              <a href="authentication-login.html" class="list-group-item">
                <i class="bi bi-power me-2"></i>Logout
              </a>
            </div>
         </div>
      </div>
  </nav>
</div>
<!--end account sidebar-->
