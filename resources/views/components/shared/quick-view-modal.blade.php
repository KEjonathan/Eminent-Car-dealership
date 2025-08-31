<!-- Quick View Modal -->
<div class="modal fade" id="QuickViewModal" tabindex="-1" aria-labelledby="QuickViewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-0">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold" id="QuickViewModalLabel">Quick View</h5>
        <div class="d-flex align-items-center gap-2">
          <button type="button" class="btn btn-sm btn-outline-secondary" id="fullscreenBtn" title="Fullscreen">
            <i class="bi bi-arrows-fullscreen"></i>
          </button>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      </div>
      
      <div class="modal-body">
        <div class="row g-4">
          <!-- Vehicle Images Section -->
          <div class="col-12 col-xl-7">
            <div class="quick-view-slideshow">
              <!-- Main Image Display -->
              <div class="main-image-container">
                <div class="slideshow-wrapper">
                  <div class="slideshow-container" id="slideshowContainer">
                    <!-- Dynamic images will be loaded here -->
                    <div class="slide active">
                      <img src="{{ asset('assets/images/placeholder-vehicle.svg') }}" alt="Vehicle" class="main-image">
                    </div>
                  </div>
                  
                  <!-- Navigation Arrows -->
                  <button class="slideshow-nav prev" id="prevBtn" aria-label="Previous image">
                    <i class="bi bi-chevron-left"></i>
                  </button>
                  <button class="slideshow-nav next" id="nextBtn" aria-label="Next image">
                    <i class="bi bi-chevron-right"></i>
                  </button>
                  
                  <!-- Play/Pause Button -->
                  <button class="slideshow-control" id="playPauseBtn" title="Play/Pause slideshow">
                    <i class="bi bi-pause-fill"></i>
                  </button>
                  
                  <!-- Image Counter -->
                  <div class="image-counter">
                    <span id="currentImage">1</span> / <span id="totalImages">1</span>
                  </div>
                </div>
              </div>

              <!-- Thumbnail Navigation -->
              <div class="thumbnail-container">
                <div class="thumbnail-wrapper" id="thumbnailWrapper">
                  <!-- Dynamic thumbnails will be loaded here -->
                  <div class="thumbnail active">
                    <img src="{{ asset('assets/images/placeholder-vehicle.svg') }}" alt="Vehicle thumbnail">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Vehicle Details Section -->
          <div class="col-12 col-xl-5">
            <div class="product-info">
              <!-- Vehicle Title -->
              <h4 class="product-title fw-bold mb-1" id="quickViewVehicleTitle">Vehicle Title</h4>
              <p class="mb-0 text-muted" id="quickViewVehicleSubtitle">Vehicle description will appear here</p>
              
              <!-- Rating Section -->
              <div class="product-rating">
                <div class="hstack gap-2 border p-1 mt-3 width-content">
                  <div><span class="rating-number" id="quickViewRating">4.8</span><i class="bi bi-star-fill ms-1 text-warning"></i></div>
                  <div class="vr"></div>
                  <div id="quickViewRatingCount">162 Ratings</div>
                </div>
              </div>
              
              <hr>
              
              <!-- Price Section -->
              <div class="product-price d-flex align-items-center gap-3">
                <div class="h4 fw-bold text-primary" id="quickViewPrice">UGX 0</div>
                <div class="h5 fw-light text-muted text-decoration-line-through" id="quickViewOriginalPrice" style="display: none;">UGX 0</div>
                <div class="h6 fw-bold text-danger" id="quickViewDiscount" style="display: none;">(0% off)</div>
              </div>
              <p class="fw-bold mb-0 mt-1 text-success">inclusive of all taxes</p>

              <!-- Vehicle Specifications -->
              <div class="vehicle-specs mt-3">
                <h6 class="fw-bold mb-3">Vehicle Specifications</h6>
                <div class="row g-2">
                  <div class="col-6">
                    <div class="d-flex justify-content-between">
                      <span class="text-muted">Year:</span>
                      <span class="fw-bold" id="quickViewYear">-</span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-flex justify-content-between">
                      <span class="text-muted">Mileage:</span>
                      <span class="fw-bold" id="quickViewMileage">-</span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-flex justify-content-between">
                      <span class="text-muted">Fuel Type:</span>
                      <span class="fw-bold" id="quickViewFuelType">-</span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-flex justify-content-between">
                      <span class="text-muted">Transmission:</span>
                      <span class="fw-bold" id="quickViewTransmission">-</span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-flex justify-content-between">
                      <span class="text-muted">Engine:</span>
                      <span class="fw-bold" id="quickViewEngine">-</span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-flex justify-content-between">
                      <span class="text-muted">Status:</span>
                      <span class="fw-bold" id="quickViewStatus">-</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Available Colors (if applicable) -->
              <div class="available-colors mt-3" id="quickViewColors" style="display: none;">
                <h6 class="fw-bold mb-3">Available Colors</h6>
                <div class="d-flex align-items-center gap-2 flex-wrap">
                  <div class="color-box bg-red"></div>
                  <div class="color-box bg-primary"></div>
                  <div class="color-box bg-yellow"></div>
                  <div class="color-box bg-purple"></div>
                  <div class="color-box bg-green"></div>
                </div>
              </div>

              <!-- Action Buttons -->
              <div class="cart-buttons mt-4">
                <div class="buttons d-flex flex-column gap-3">
                  <a href="javascript:;" class="btn btn-lg btn-primary btn-ecomm px-5 py-3 flex-grow-1" id="quickViewDetailsBtn">
                    <i class="bi bi-eye me-2"></i>View Details
                  </a>
                </div>
              </div>
              
              <hr class="my-3">
              
              <!-- Share Section -->
              <div class="product-share">
                <h6 class="fw-bold mb-3">Share This Vehicle</h6>
                <div class="d-flex align-items-center gap-2 flex-wrap">
                  <div class="">
                    <button type="button" class="btn-social bg-twitter"><i class="bi bi-twitter"></i></button>
                  </div>
                  <div class="">
                    <button type="button" class="btn-social bg-facebook"><i class="bi bi-facebook"></i></button>
                  </div>
                  <div class="">
                    <button type="button" class="btn-social bg-linkden"><i class="bi bi-linkedin"></i></button>
                  </div>
                  <div class="">
                    <button type="button" class="btn-social bg-youtube"><i class="bi bi-youtube"></i></button>
                  </div>
                  <div class="">
                    <button type="button" class="btn-social bg-pinterest"><i class="bi bi-pinterest"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Fullscreen Modal for Slideshow -->
<div class="modal fade" id="fullscreenSlideshowModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark">
      <div class="modal-header border-0 bg-dark">
        <h5 class="modal-title text-white" id="fullscreenVehicleTitle">Vehicle Slideshow</h5>
        <div class="d-flex align-items-center gap-2">
          <button type="button" class="btn btn-sm btn-outline-light" id="fullscreenPlayPauseBtn" title="Play/Pause">
            <i class="bi bi-pause-fill"></i>
          </button>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-center">
        <div class="fullscreen-slideshow">
          <div class="fullscreen-image-container">
            <img src="" alt="Vehicle" class="fullscreen-image" id="fullscreenImage">
          </div>
          <button class="fullscreen-nav prev" id="fullscreenPrevBtn">
            <i class="bi bi-chevron-left"></i>
          </button>
          <button class="fullscreen-nav next" id="fullscreenNextBtn">
            <i class="bi bi-chevron-right"></i>
          </button>
          <div class="fullscreen-counter">
            <span id="fullscreenCurrentImage">1</span> / <span id="fullscreenTotalImages">1</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
/* Quick View Slideshow Styles */
.quick-view-slideshow {
  position: relative;
}

.main-image-container {
  position: relative;
  border-radius: 10px;
  overflow: hidden;
  background: #f8f9fa;
}

.slideshow-wrapper {
  position: relative;
  width: 100%;
  height: 400px;
}

.slideshow-container {
  width: 100%;
  height: 100%;
  position: relative;
}

.slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}

.slide.active {
  opacity: 1;
}

.main-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}

/* Navigation Arrows */
.slideshow-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  z-index: 10;
}

.slideshow-nav:hover {
  background: rgba(0, 0, 0, 0.8);
  transform: translateY(-50%) scale(1.1);
}

.slideshow-nav.prev {
  left: 15px;
}

.slideshow-nav.next {
  right: 15px;
}

/* Play/Pause Button */
.slideshow-control {
  position: absolute;
  top: 15px;
  right: 15px;
  background: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  z-index: 10;
}

.slideshow-control:hover {
  background: rgba(0, 0, 0, 0.8);
}

/* Image Counter */
.image-counter {
  position: absolute;
  bottom: 15px;
  right: 15px;
  background: rgba(0, 0, 0, 0.7);
  color: white;
  padding: 5px 10px;
  border-radius: 15px;
  font-size: 12px;
  font-weight: 500;
}

/* Thumbnail Container */
.thumbnail-container {
  margin-top: 15px;
}

.thumbnail-wrapper {
  display: flex;
  gap: 10px;
  overflow-x: auto;
  padding: 5px 0;
  scrollbar-width: thin;
  scrollbar-color: #ccc transparent;
}

.thumbnail-wrapper::-webkit-scrollbar {
  height: 6px;
}

.thumbnail-wrapper::-webkit-scrollbar-track {
  background: transparent;
}

.thumbnail-wrapper::-webkit-scrollbar-thumb {
  background: #ccc;
  border-radius: 3px;
}

.thumbnail {
  flex-shrink: 0;
  width: 80px;
  height: 60px;
  border-radius: 8px;
  overflow: hidden;
  cursor: pointer;
  border: 2px solid transparent;
  transition: all 0.3s ease;
  position: relative;
}

.thumbnail:hover {
  border-color: #007bff;
  transform: scale(1.05);
}

.thumbnail.active {
  border-color: #007bff;
  box-shadow: 0 0 10px rgba(0, 123, 255, 0.3);
}

.thumbnail img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Fullscreen Modal Styles */
.fullscreen-slideshow {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.fullscreen-image-container {
  max-width: 90%;
  max-height: 90%;
  position: relative;
}

.fullscreen-image {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
  border-radius: 10px;
}

.fullscreen-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255, 255, 255, 0.2);
  color: white;
  border: none;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 20px;
}

.fullscreen-nav:hover {
  background: rgba(255, 255, 255, 0.3);
}

.fullscreen-nav.prev {
  left: 30px;
}

.fullscreen-nav.next {
  right: 30px;
}

.fullscreen-counter {
  position: absolute;
  bottom: 30px;
  right: 30px;
  background: rgba(0, 0, 0, 0.7);
  color: white;
  padding: 10px 15px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 500;
}

/* Responsive Design */
@media (max-width: 768px) {
  .slideshow-wrapper {
    height: 300px;
  }
  
  .slideshow-nav {
    width: 35px;
    height: 35px;
  }
  
  .thumbnail {
    width: 70px;
    height: 50px;
  }
  
  .fullscreen-nav {
    width: 40px;
    height: 40px;
    font-size: 16px;
  }
}

@media (max-width: 576px) {
  .slideshow-wrapper {
    height: 250px;
  }
  
  .slideshow-nav {
    width: 30px;
    height: 30px;
  }
  
  .thumbnail {
    width: 60px;
    height: 45px;
  }
}

/* Existing Styles */
.color-box {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  cursor: pointer;
  border: 2px solid #ddd;
  transition: border-color 0.3s;
}

.color-box:hover {
  border-color: #007bff;
}

.btn-social {
  width: 40px;
  height: 40px;
  border: none;
  border-radius: 50%;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: opacity 0.3s;
}

.btn-social:hover {
  opacity: 0.8;
}

.bg-twitter { background-color: #1DA1F2; }
.bg-facebook { background-color: #4267B2; }
.bg-linkden { background-color: #0077B5; }
.bg-youtube { background-color: #FF0000; }
.bg-pinterest { background-color: #E60023; }

.width-content {
  width: fit-content;
}

/* Loading Animation */
.slideshow-loading {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 400px;
  background: #f8f9fa;
  border-radius: 10px;
}

.slideshow-loading .spinner-border {
  color: #007bff;
}

/* Fade Animation */
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

.slide.fade-in {
  animation: fadeIn 0.5s ease-in-out;
}
</style>
