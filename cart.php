<?php
include_once("header.php");
include_once("config.php");
include_once("function.php");
if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];

    $query = "
        SELECT 
            c.id AS cart_id,
            c.qty AS quantity,
            p.product_id,
            p.product_name AS product_name,
            p.price AS product_price,
            p.product_image AS product_image,
            p.description AS product_description
        FROM cart c
        JOIN products p ON c.product_id = p.product_id
        WHERE c.user_id = ? AND p.status = 'active'
    ";

    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $user_id);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $products = $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $products = [];
        }

        $stmt->close();
    } else {
        echo "Error in preparing the query: " . $conn->error;
    }
    $totalPrice = 0;
    foreach ($products as $product) {
        $totalPrice = $product['product_price'] * $product['quantity'] + $totalPrice;
    }
}
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
                            <?php if (!empty($products)):
                                foreach ($products as $product): ?>
                                    <tr>
                                        <td data-label="Product Info">
                                            <div class="product-info-wrapper">
                                                <div class="product-info-img">
                                                    <img src=<?php echo $product['product_image']; ?> alt="">
                                                </div>
                                                <div class="product-info-content">
                                                    <h6><?php echo $product['product_name']; ?></h6>
                                                    <p><span>SKU: </span>D32-5H23</p>
                                                    <ul>
                                                        <li onclick="">remove</li>
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
                                        <td data-label="Price"><span><?php echo $product['product_price'] . " X " . $product['quantity'] ?></span></td>
                                        <td data-label="Total"><?php echo $product['product_price'] * $product['quantity'] . " " . strtoupper($currencyCode); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No products available at the moment.</p>
                            <?php endif; ?>

                        </tbody>
                    </table>
                    <a href="product-listing.php" class="details-button">
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
                                <strong><?php echo $totalPrice . " " . strtoupper($currencyCode); ?></strong>
                            </li>
                            <li>
                                Shipping
                                <div class="order-info">
                                    <p>Shipping Free*</p>
                                    <span>GST 18%</span>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="coupon-area">
                                    <span>Coupon Code</span>
                                    <form>
                                        <div class="form-inner">
                                            <input type="text" placeholder="Your code">
                                            <button type="submit" class="apply-btn">Apply</button>
                                        </div>
                                    </form>
                                </div>
                            </li> -->
                            <li>
                                <strong>Total</strong>
                                <strong><?php echo round($totalPrice * 0.18 + $totalPrice, 2) . " " . strtoupper($currencyCode); ?></strong>
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