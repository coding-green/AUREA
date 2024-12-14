<?php
include_once("header.php")
?>

<!-- breadcrumb section strats here -->
<div style="background-color:#020101;backdrop-filter: blur(30px);height:135px">

</div>
<div class="skin-care-breadcrumb-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="banner-content text-center">
                    <h1>CART PAGE</h1>
                    <ul class="breadcrumb-list">
                        <li><a href="index.html">Home</a></li>
                        <li>CART PAGE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb section ends here -->

<!-- Start Cart Page -->
<div class="cart-page pt-120 mb-120">
    <div class="container-lg container-fluid">
        <div class="row g-lg-4 gy-5">
            <div class="col-xl-8 col-lg-7">
                <div class="cart-shopping-wrapper">
                    <div class="cart-widget-title">
                        <h5 class="style-2">My Shopping</h5>
                    </div>
                    <table class="cart-table style-2">
                        <thead>
                            <tr>
                                <th>Product Info</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Product Info">
                                    <div class="product-info-wrapper">
                                        <div class="product-info-img">
                                            <img src="assets/image/beauty-spa/cart-page/cart-image.png" alt="">
                                        </div>
                                        <div class="product-info-content">
                                            <h6>opi nail envy nail strengthener</h6>
                                            <p><span>SKU: </span>D32-5H23</p>
                                            <ul>
                                                <li>remove</li>
                                                <li>
                                                    <div class="qty-btn">quantity</div>
                                                    <div class="quantity-area">
                                                        <div class="quantity">
                                                            <a class="quantity__minus"><span><i
                                                                        class="bi bi-dash"></i></span></a>
                                                            <input name="quantity" type="text"
                                                                class="quantity__input" value="01">
                                                            <a class="quantity__plus"><span><i
                                                                        class="bi bi-plus"></i></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Price"><span>$148.00</span></td>
                                <td data-label="Total">$148.00</td>
                            </tr>
                            <tr>
                                <td data-label="Product Info">
                                    <div class="product-info-wrapper">
                                        <div class="product-info-img">
                                            <img src="assets/image/beauty-spa/cart-page/cart-image2.png" alt="">
                                        </div>
                                        <div class="product-info-content">
                                            <h6>cerave hydrating facial cleanser.</h6>
                                            <p><span>SKU: </span>D32-5H23</p>
                                            <ul>
                                                <li>remove</li>
                                                <li>
                                                    <div class="qty-btn">quantity</div>
                                                    <div class="quantity-area">
                                                        <div class="quantity">
                                                            <a class="quantity__minus"><span><i
                                                                        class="bi bi-dash"></i></span></a>
                                                            <input name="quantity" type="text"
                                                                class="quantity__input" value="01">
                                                            <a class="quantity__plus"><span><i
                                                                        class="bi bi-plus"></i></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Price"><span>$200.00</span></td>
                                <td data-label="Total">$200.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="product.html" class="details-button">
                        Continue Shoping
                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 ">
                <div class="cart-order-sum-area">
                    <div class="cart-widget-title">
                        <h5 class="style-2">Order Summary</h5>
                    </div>
                    <div class="order-summary-wrap">
                        <ul class="order-summary-list style-2">
                            <li>
                                <strong>Sub Total</strong>
                                <strong>$348.00</strong>
                            </li>
                            <li>
                                Shipping
                                <div class="order-info">
                                    <p>Shipping Free*</p>
                                    <span> Pickup fee $10.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="coupon-area">
                                    <span>Coupon Code</span>
                                    <form>
                                        <div class="form-inner">
                                            <input type="text" placeholder="Your code">
                                            <button type="submit" class="apply-btn">Apply</button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <strong>Total</strong>
                                <strong>$214.00</strong>
                            </li>
                        </ul>
                        <a href="checkout.php" class="primary-btn1 mt-40">
                            Processed Checkout
                            <svg class="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart Page -->

<!-- footer section strats here -->
<?php
include_once("footer.php")
?>
<!-- footer section ends here -->


<!-- jquery js link -->
<script data-cfasync="false" src="https://demo.egenslab.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<!-- counterup js -->
<script src="assets/js/waypoints.js"></script>
<script src="assets/js/jquery.counterup.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- marquee js -->
<script src="assets/js/jquery.marquee.min.js"></script>
<!-- poper js -->
<script src="assets/js/popper.min.js"></script>
<!-- swiper js -->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- fancybox js -->
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
<script>
    $(".marquee_text2").marquee({
        direction: "left",
        duration: 25000,
        gap: 50,
        delayBeforeStart: 0,
        duplicated: true,
        startVisible: true,
    });
</script>
</body>


<!-- Mirrored from demo.egenslab.com/html/buret/preview/skin-care/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Dec 2024 12:36:56 GMT -->

</html>