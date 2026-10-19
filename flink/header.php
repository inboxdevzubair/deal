<style>
form {
    position: relative;
}
.search-results-box {
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    width: 100%;
    max-height: 300px;
    overflow-y: auto;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    z-index: 9999;
    display: none;
}
.search-results-box .search-item {
    padding: 8px 12px;
    border-bottom: 1px solid #eee;
    cursor: pointer;
}
.search-results-box .search-item:hover {
    background: #f5f5f5;
}
</style>

<style>
.account-dropdown {
    position: relative;
}
.account-dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    background: #ffffff !important;
    min-width: 180px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
    border-radius: 8px;
    padding: 8px 0;
    margin: 0;
    z-index: 9999;
    list-style: none;
}
.account-dropdown:hover .account-dropdown-menu {
    display: block;
}
.account-dropdown-menu li {
    list-style: none;
}
.account-dropdown-menu li a {
    display: flex !important;
    align-items: center;
    gap: 10px;
    padding: 12px 18px;
    color: #222222 !important;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
}
.account-dropdown-menu li a i {
    color: #d32f2f;
    width: 16px;
}
.account-dropdown-menu li a:hover {
    background: #f5f5f5;
    color: #d32f2f !important;
}
</style>

<style>
.trust-banner-wrap {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    width: 100vw;
    position: relative;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
}
.trust-banner-top {
    background: #2e9e3f;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 8px;
}
.trust-banner-left {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
}
.trust-banner-right {
    display: flex;
    align-items: center;
    gap: 16px;
    color: #fff;
    font-size: 13px;
}
.trust-banner-right span {
    display: flex;
    align-items: center;
    gap: 6px;
}
.trust-divider {
    opacity: 0.5;
}
.trust-banner-bottom {
    background: #f0faf1;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: 1px solid #d5f0d8;
}
.trust-banner-bottom .trust-banner-left {
    color: #2e9e3f;
    font-size: 13px;
}
.trust-view-link {
    color: #2e9e3f;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 4px;
}
.trust-view-link:hover {
    color: #237d31;
}
</style>

<style>
.news-ticker-wrap {
    width: 490px;
    overflow: hidden;
    position: relative;
    height: 28px;
    display: flex;
    align-items: center;
    align-self: center;
    margin-top: auto;
    margin-bottom: auto;
    margin-left: -230px;
}
.news-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 28px;
    opacity: 0;
    transition: opacity 0.6s ease;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.news-slide.active {
    opacity: 1;
}
.news-slide a {
    color: #ffcc00;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
}
.news-slide a:hover {
    text-decoration: underline;
}
.nav-extra-links {
    display: flex;
    align-items: center;
    gap: 20px;
    justify-content: flex-start;
    transform: translateX(-350px);
}
</style>

<style>
select {
    background-color: transparent;
    font-size: 16px;
    padding: 0;
    width: 175px;
    color: #fff;
    margin-right: 35px;
    border-radius: 4px;
    border: 0px solid #ccc;
}
select:focus {
    outline:none;
}
select option {
    font-size: 15px;
    color: #000;
    padding: 10px;
    margin-bottom: 10px;
}

/* Categories mega menu */
.mega-menu-wrap {
    position: relative;
    display: inline-block;
}
.mega-menu-trigger {
    background: transparent;
    color: #fff;
    padding: 10px 16px;
    cursor: pointer;
    font-size: 15px;
    display: flex;
    align-items: center;
    gap: 6px;
    white-space: nowrap;
}
.mega-menu-panel {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    border-radius: 8px;
    width: 700px;
    max-width: 90vw;
    z-index: 9999;
    overflow: hidden;
}
.mega-menu-panel.open {
    display: flex;
}
.mega-menu-left {
    width: 220px;
    max-height: 420px;
    overflow-y: auto;
    background: #f7f7f7;
    border-right: 1px solid #eee;
}
.mega-menu-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 11px 16px;
    font-size: 13px;
    color: #333;
    cursor: pointer;
    border-left: 3px solid transparent;
}
.mega-menu-item:hover, .mega-menu-item.active {
    background: #fff;
    border-left: 3px solid #378ADD;
    color: #378ADD;
    font-weight: 500;
}
.mega-menu-item i {
    font-size: 11px;
    color: #ccc;
}
.mega-menu-right {
    flex: 1;
    padding: 20px;
    max-height: 420px;
    overflow-y: auto;
}
.mega-menu-loading {
    color: #999;
    font-size: 13px;
    text-align: center;
    padding: 40px 0;
}
.mega-menu-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
.mega-menu-card {
    text-align: center;
    text-decoration: none;
    color: #333;
    cursor: pointer;
}
.mega-menu-card img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 1px solid #eee;
    margin-bottom: 8px;
}
.mega-menu-card span {
    font-size: 12px;
    display: block;
    line-height: 1.3;
}
.mega-menu-card:hover span {
    color: #378ADD;
}
.mega-menu-empty {
    color: #999;
    font-size: 13px;
    text-align: center;
    padding: 40px 0;
    grid-column: 1 / -1;
}
</style>

<!-- ============================================================
     MOBILE RESPONSIVE FIXES (single clean block)
     ============================================================ -->
     <style>
@media (max-width: 767px) {

    .news-ticker-wrap,
    .nav-extra-links,
    ul.navigation,
    .mega-menu-wrap,
    .trust-banner-wrap {
        display: none !important;
    }

    /* ===== MOBILE SEARCH BAR IN HEADER ===== */

    /* col-lg-8 ko mobile pe show karo */
    .header-logo-area .col-lg-8 {
        display: block !important;
    }

    /* hl-right-side ko flex column bana do:
       pehle search bar, phir social icons + cart + account */
    .hl-right-side {
        display: flex !important;
        flex-direction: column !important;
        width: 100% !important;
    }

    /* Search bar: logo ke neachay, full width */
    .header-logo-area .header-search-wrap {
        display: block !important;
        width: 100% !important;
        padding: 6px 0 4px !important;
        order: 1 !important;
    }

    .header-logo-area .header-search-wrap form {
        position: relative !important;
        width: 100% !important;
        display: flex !important;
        align-items: center;
    }

    .header-logo-area .header-search-wrap input {
        width: 100% !important;
        padding: 8px 40px 8px 14px !important;
        border-radius: 22px !important;
        border: 1px solid rgba(255,255,255,0.4) !important;
        background: rgba(255,255,255,0.15) !important;
        color: #fff !important;
        font-size: 13px !important;
        outline: none !important;
        box-sizing: border-box !important;
    }

    .header-logo-area .header-search-wrap input::placeholder {
        color: rgba(255,255,255,0.7) !important;
    }

    .header-logo-area .header-search-wrap button {
        position: absolute !important;
        right: 10px !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        background: none !important;
        border: none !important;
        padding: 0 !important;
        color: #fff !important;
        cursor: pointer !important;
    }

    /* Social icons + cart + account: search bar ke neechay */
    .hl-right-side .header-social {
        display: flex !important;
        order: 2 !important;
        width: 100% !important;
        justify-content: flex-end !important;
        align-items: center !important;
        padding: 4px 0 !important;
    }

    .hl-right-side .header-social ul.list-wrap {
        display: flex !important;
        flex-wrap: wrap !important;
        align-items: center !important;
        gap: 12px !important;
        margin: 0 !important;
        padding: 0 !important;
        list-style: none !important;
    }

    .hl-right-side .header-social ul.list-wrap li {
        margin: 0 !important;
        padding: 0 !important;
        list-style: none !important;
    }

    /* Account name text chhota karo mobile pe */
    .header-account-item .account-dropdown-toggle span {
        font-size: 12px !important;
        max-width: 60px !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        white-space: nowrap !important;
    }

    /* ===== END MOBILE SEARCH BAR ===== */

    /* ROOT FIX: theme ye poora section mobile pe hide kar deta hai - force show karo */
    .header-logo-area {
        display: block !important;
    }

    .header-logo-area .container {
        display: block !important;
        width: 100% !important;
        padding: 6px 14px !important;
    }

    .header-logo-area .row {
        display: flex !important;
        flex-direction: column !important;
        margin: 0 !important;
    }

    .header-logo-area .col-lg-4 {
        width: 100% !important;
        max-width: 100% !important;
        flex: 0 0 100% !important;
        padding: 2px 0 !important;
        order: 1 !important;
    }

    .header-logo-area .col-lg-8 {
        width: 100% !important;
        max-width: 100% !important;
        flex: 0 0 100% !important;
        padding: 2px 0 !important;
        order: 2 !important;
    }

    .header-logo-area .logo img {
        max-height: 30px !important;
    }

    .mobile-top-bar {
        display: block !important;
        width: 100%;
        padding: 4px 0;
        background: #fff;
    }

    .mobile-top-bar #mobileSearchWrap {
        width: 100%;
        margin-bottom: 8px;
    }

    .mobile-top-bar #mobileSearchWrap form {
        position: relative;
        width: 100%;
    }

    .mobile-top-bar #mobileSearchWrap input {
        width: 100%;
        padding: 8px 36px 8px 12px;
        border-radius: 20px;
        border: 1px solid #ddd;
        font-size: 13px;
    }

    .mobile-top-bar #mobileSearchWrap button {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        padding: 0;
    }

    .mobile-top-bar .header-social {
        display: flex !important;
        align-items: center;
        gap: 14px;
        padding: 6px 14px !important;
        margin: 0 !important;
    }

    .mobile-top-bar .header-social ul.list-wrap {
        display: flex !important;
        gap: 14px;
        margin: 0 !important;
        padding: 0 !important;
        list-style: none;
        align-items: center;
        line-height: 1;
    }

    .mobile-top-bar .header-social ul.list-wrap li {
        margin: 0 !important;
        padding: 0 !important;
        line-height: 1;
    }

    .mobile-top-bar .header-social ul.list-wrap li a {
        font-size: 15px !important;
        line-height: 1;
        display: flex !important;
        align-items: center;
        color: inherit;
    }

    .header-account-item .account-dropdown-toggle span {
        font-size: 13px !important;
    }


    .header-logo-area .col-lg-4 {
        width: 100% !important;
        max-width: 100% !important;
        flex: 0 0 100% !important;
        padding: 0 !important;
    }



    .header-logo-area .row.align-items-center {
        margin: 0 !important;
        padding: 0 !important;
    }

    .hl-left-side {
        display: flex !important;
        align-items: center !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .hl-left-side .logo {
        margin: 0 !important;
        padding: 0 !important;
        line-height: 0 !important;
    }

    .hl-left-side .logo img {
        margin: 0 !important;
        padding: 0 !important;
        display: block !important;
        vertical-align: top !important;
    }






    .header-logo-area {
        padding: 0 !important;
    }

    .header-logo-area .container {
        padding: 6px 14px !important;
    }

    .header-logo-area .row {
        margin: 0 !important;
    }

    .header-logo-area .col-lg-4,
    .header-logo-area .col-lg-8 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    /* Deal of the Week & Clearance Section Mobile 2-Column Grid */
    body {
        overflow-x: hidden !important;
    }

    /* Deal of the Week (2 pics in mobile view) */
    .product-grid {
        display: grid !important;
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 10px !important;
        padding: 0 10px !important;
        width: 100% !important;
        box-sizing: border-box !important;
    }

    .product-card {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        box-sizing: border-box !important;
        overflow: hidden !important;
        padding: 6px 8px 8px !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: space-between !important;
        background: #fff !important;
        border: 1px solid #eee !important;
        border-radius: 8px !important;
    }

    .product-card img,
    .product-card .product-image,
    .product-card img[style],
    .product-img-box img {
        width: 100% !important;
        max-width: 100% !important;
        height: 140px !important;
        object-fit: contain !important;
        display: block !important;
        margin: 0 auto !important;
        border-radius: 6px !important;
    }

    .product-card .product-title {
        font-size: 14.5px !important;
        font-weight: 600 !important;
        line-height: 1.3 !important;
        color: #0f172a !important;
        margin: 3px 0 2px !important;
        display: -webkit-box !important;
        -webkit-line-clamp: 2 !important;
        -webkit-box-orient: vertical !important;
        overflow: hidden !important;
        min-height: 0 !important;
        height: auto !important;
    }

    .product-card .product-price {
        font-size: 10.5px !important;
        margin: 0 !important;
        color: #888 !important;
    }

    .product-card .product-sale-price {
        font-size: 13px !important;
        font-weight: 700 !important;
        color: #183354 !important;
        margin: 1px 0 3px !important;
    }

    .product-card .product-sale-price span {
        color: #f4796c !important;
    }

    .product-card .shop-now-btn {
        width: 100% !important;
        margin: 4px 0 0 !important;
        padding: 4px 8px !important;
        font-size: 11.5px !important;
        border-radius: 5px !important;
        height: 30px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        box-sizing: border-box !important;
    }

    /* Clearance Section (2 pics in mobile view) */
    .product-col5-grid {
        display: grid !important;
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 12px !important;
        padding: 0 14px !important;
        width: 100% !important;
        box-sizing: border-box !important;
    }

    .product-col5-item {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        box-sizing: border-box !important;
        overflow: hidden !important;
    }

    .product-col5-image {
        width: 100% !important;
        max-width: 100% !important;
        overflow: hidden !important;
    }

    .product-col5-image img {
        width: 100% !important;
        max-width: 100% !important;
        height: 150px !important;
        object-fit: cover !important;
        display: block !important;
    }

    .product-col5-info {
        padding: 8px !important;
    }

    .product-col5-title {
        font-size: 13px !important;
        line-height: 1.3 !important;
    }

    .sale-price-col5 {
        font-size: 14px !important;
    }

    .price-col5 {
        font-size: 12px !important;
    }

    .product-col5-image img[style] {
        width: 100% !important;
        height: 150px !important;
    }

    .product-col5-img {
        width: 100% !important;
        height: 150px !important;
    }
    /*End Deal of Week & Clearance */

}


</style>


<header class="header-style-two">

  <div id="header-fixed-height"></div>

    <div class="header-logo-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4">
                    <div class="hl-left-side">
                        <div class="logo">
                            <a href="<?php echo DOMAINVAR;?>/"><img src="<? //php echo DOMAINVAR;?>/assets//images/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="hl-right-side">

                        <div class="header-search-wrap" id="mobileSearchWrap">
                            <form action="#">
                                <input class="typeahead" id="searchInput" type="text" placeholder="Search here Products. . .">
                                <button type="submit"><i class="flaticon-search"></i></button>
                                <div id="searchResults" class="search-results-box"></div>
                            </form>
                        </div>

                        <?php
                        if (session_status() == PHP_SESSION_NONE) { session_start(); }
                        $cartCount = 0;
                        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $item) {
                                $cartCount += $item['quantity'];
                            }
                        }
                        ?>

                        <div class="header-social">
                            <ul class="list-wrap">
                                <li><a href="<?php echo $mainscripts['facebook'];?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo $mainscripts['twitter'];?>"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?php echo $mainscripts['instagram'];?>"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="<?php echo $mainscripts['Pinterest'];?>"><i class="fab fa-Pinterest-in"></i></a></li>
                                <li>
                                    <a href="https://wa.me/<?php echo $mainscripts['w_num']; ?>" target="_blank" style="color: #25D366;">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>

                                <li class="header-cart-item">
                                    <a href="<?php echo DOMAINVAR;?>/cart.php" class="header-cart-link">
                                        <i class="fas fa-shopping-cart"></i>
                                        <?php if ($cartCount > 0): ?>
                                            <span class="cart-count-badge"><?php echo $cartCount; ?></span>
                                        <?php endif; ?>
                                    </a>
                                </li>

                                <li class="header-account-item">
                                    <?php if (isset($_SESSION['customer_id'])): ?>
                                        <div class="account-dropdown">
                                            <a href="#" class="account-dropdown-toggle">
                                                <i class="fas fa-user-circle"></i>
                                                <span><?php echo htmlspecialchars($_SESSION['customer_name']); ?></span>
                                                <i class="fas fa-chevron-down dropdown-arrow"></i>
                                            </a>
                                            <ul class="account-dropdown-menu">
                                                <li><a href="<?php echo DOMAINVAR;?>/account/orders.php"><i class="fas fa-box"></i> My Orders</a></li>
                                                <li><a href="<?php echo DOMAINVAR;?>/account/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                            </ul>
                                        </div>
                                    <?php else: ?>
                                        <div class="account-auth-links">
                                            <a href="<?php echo DOMAINVAR;?>/account/login.php"><i class="fas fa-user"></i> Login</a>
                                            <span class="auth-divider">/</span>
                                            <a href="<?php echo DOMAINVAR;?>/account/signup.php">Sign Up</a>
                                        </div>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="sticky-header" class="menu-area menu-style-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-12">

                                <div class="logo d-none">
                                    <a href="<?php echo DOMAINVAR;?>/">
                                        <img src="<?php echo DOMAINVAR;?>/assets/images/logo.png" alt="Logo">The Trust</a>
                                </div>

                                <div class="navbar-wrap main-menu d-none d-lg-flex mainMenu">

                                    <div class="mega-menu-wrap" id="megaMenuWrap">
                                        <div class="mega-menu-trigger" onmouseenter="openMegaMenu()">
                                            Categories<i class="fas fa-chevron-down"></i>
                                        </div>

                                        <div class="mega-menu-panel" id="megaMenuPanel" onmouseleave="closeMegaMenu()">
                                            <div class="mega-menu-left" id="megaMenuLeft">
                                                <?php
                                                $sqla = "select category_id, category, category_url from categories where ( status = '1' || status = 'ENA' ) and parent_id='0' order by category Limit 20";
                                                $resa = $db->ExecuteQuery($sqla);
                                                $firstCat = true;
                                                while(list($category_id, $category, $category_url) = $db->FetchAsArray($resa))
                                                {
                                                    $activeClass = $firstCat ? 'active' : '';
                                                    ?>
                                                    <div class="mega-menu-item <?php echo $activeClass; ?>"
                                                        data-catid="<?php echo $category_id; ?>"
                                                        data-caturl="<?php echo $category_url; ?>"
                                                        onmouseenter="loadSubcategories(<?php echo $category_id; ?>, this)">
                                                        <span><?php echo $category; ?></span>
                                                        <i class="fas fa-chevron-right"></i>
                                                    </div>
                                                    <?php
                                                    $firstCat = false;
                                                }
                                                ?>
                                            </div>

                                            <div class="mega-menu-right" id="megaMenuRight">
                                                <div class="mega-menu-loading">Loading...</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="news-ticker-wrap">
                                        <?php
                                        $sqla = "select n_title, n_desc, n_link from news where 1 LIMIT 5";
                                        $resa = $db->ExecuteQuery($sqla);
                                        $newsCount = 0;
                                        while(list($n_title, $n_desc, $n_link) = $db->FetchAsArray($resa))
                                        {
                                            $activeClass = ($newsCount == 0) ? 'active' : '';
                                            ?>
                                            <div class="news-slide <?php echo $activeClass; ?>">
                                                <a href="<?php echo $n_link;?>"><?php echo $n_title;?></a>
                                            </div>
                                            <?php
                                            $newsCount++;
                                        }
                                        ?>
                                    </div>

                                    <ul class="navigation"></ul>

                                </div>

                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>

                            </div>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <div class="nav-logo">
                                    <a href="<?php echo DOMAINVAR;?>/">
                                        <img src="<?php echo DOMAINVAR;?>/assets/images/logo.png" alt="Logo1">
                                    </a>
                                </div>

                                <div class="mobile-search">
                                    <form action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="flaticon-search"></i></button>
                                    </form>
                                </div>

                                <div class="menu-outer"></div>

                                <div class="social-links">
                                    <ul class="clearfix list-wrap">
                                        <li><a href="<?php echo $mainscripts['facebook'];?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo $mainscripts['twitter'];?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?php echo $mainscripts['instagram'];?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?php echo $mainscripts['pinterest'];?>"><i class="fab fa-pinterest-in"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <div class="trust-banner-wrap">
                            <div class="trust-banner-top">
                                <div class="trust-banner-left">
                                    <i class="fas fa-shield-alt"></i>
                                    <span><?php echo htmlspecialchars($mainscripts['trust_title']); ?></span>
                                </div>
                                <div class="trust-banner-right">
                                    <span><i class="fas fa-lock"></i> <?php echo htmlspecialchars($mainscripts['trust_text1']); ?></span>
                                    <span class="trust-divider">|</span>
                                    <span><i class="fas fa-credit-card"></i> <?php echo htmlspecialchars($mainscripts['trust_text2']); ?></span>
                                    <span class="trust-divider">|</span>
                                    <span><i class="fas fa-truck"></i> <?php echo htmlspecialchars($mainscripts['trust_text3']); ?></span>
                                </div>
                            </div>

                            <?php if (!empty($mainscripts['security_text'])): ?>
                            <div class="trust-banner-bottom">
                                <div class="trust-banner-left">
                                    <i class="fas fa-bell"></i>
                                    <span><?php echo htmlspecialchars($mainscripts['security_text']); ?></span>
                                </div>
                                <?php if (!empty($mainscripts['security_link'])): ?>
                                <a href="<?php echo htmlspecialchars($mainscripts['security_link']); ?>" class="trust-view-link">View <i class="fas fa-chevron-right"></i></a>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="menu-backdrop"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- header-area-end -->




<script>
document.addEventListener('DOMContentLoaded', function() {
    // News ticker rotation
    var slides = document.querySelectorAll('.news-slide');
    var currentSlide = 0;
    if (slides.length > 1) {
        setInterval(function() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 4000);
    }

    // Account dropdown (mobile tap support)
    var accountToggle = document.querySelector('.account-dropdown-toggle');
    if (accountToggle) {
        accountToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            this.closest('.account-dropdown').classList.toggle('show-dropdown');
        });
    }
    document.addEventListener('click', function() {
        var openDropdown = document.querySelector('.account-dropdown.show-dropdown');
        if (openDropdown) openDropdown.classList.remove('show-dropdown');
    });

    // Mega menu (categories) - only runs if elements exist
    var megaMenuWrap = document.getElementById('megaMenuWrap');
    if (megaMenuWrap) {
        var megaMenuTimeout;

        window.openMegaMenu = function() {
            clearTimeout(megaMenuTimeout);
            document.getElementById('megaMenuPanel').classList.add('open');
            var firstItem = document.querySelector('.mega-menu-item.active');
            if (firstItem) {
                loadSubcategories(firstItem.getAttribute('data-catid'), firstItem);
            }
        };

        window.closeMegaMenu = function() {
            megaMenuTimeout = setTimeout(function() {
                document.getElementById('megaMenuPanel').classList.remove('open');
            }, 200);
        };

        window.loadSubcategories = function(catId, el) {
            document.querySelectorAll('.mega-menu-item').forEach(function(item) {
                item.classList.remove('active');
            });
            el.classList.add('active');

            var rightPanel = document.getElementById('megaMenuRight');
            rightPanel.innerHTML = '<div class="mega-menu-loading">Loading...</div>';

            fetch('/deal/ajax/get-subcategories.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'parent_id=' + catId
            })
            .then(function(res) { return res.json(); })
            .then(function(data) {
                if (data.success && data.subcategories.length > 0) {
                    var html = '<div class="mega-menu-grid">';
                    data.subcategories.forEach(function(sub) {
                        html += '<a href="/deal/category/' + sub.category_url + '" class="mega-menu-card">';
                        html += '<img src="/deal/assets/images/products/' + sub.img + '" alt="' + sub.category + '">';
                        html += '<span>' + sub.category + '</span>';
                        html += '</a>';
                    });
                    html += '</div>';
                    rightPanel.innerHTML = html;
                } else {
                    rightPanel.innerHTML = '<div class="mega-menu-empty">No sub-categories found</div>';
                }
            });
        };

        megaMenuWrap.addEventListener('mouseleave', window.closeMegaMenu);
        megaMenuWrap.addEventListener('mouseenter', function() {
            clearTimeout(megaMenuTimeout);
        });
    }
});
</script> 

<?php include "chat-widget.php"; ?>