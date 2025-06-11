<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li><!-- End Keranjang Nav -->
        <?php
        if (session()->get('role') == 'admin') {
        ?>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            </li><!-- End Produk Nav -->
        <?php
        }
        ?>
          <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'Contact') ? "" : "collapsed" ?>" href="contact">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Contact Nav -->
         <?php
        if (session()->get('role') == 'admin') 
        ?>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'ProdukCategory') ? "" : "collapsed" ?>" href="ProdukCategory">
                    <i class="bi bi-receipt"></i>
                    <span>ProdukCategory</span>
                </a>
            </li><!-- End ProdukCategory Nav -->
    </ul>

</aside><!-- End Sidebar-->