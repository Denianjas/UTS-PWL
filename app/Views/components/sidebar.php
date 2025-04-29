<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar bg-secondary">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="/produk">
                <i class="bi bi-cart-check"></i>
                <span>produk</span>
            </a>
        </li><!-- End produk Nav --> 
       
            <?php
        if (session()->get('role') == 'admin') {
        ?>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'grafik') ? "" : "collapsed" ?>" href="/grafik">
                    <i class="bi bi-receipt"></i>
                    <span>grafik</span>
                </a>
            </li><!-- End grafik Nav -->
        <?php
        }
        ?>
    </ul>

</aside><!-- End Sidebar-->