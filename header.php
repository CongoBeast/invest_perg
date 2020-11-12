<?php if (isset($_SESSION['username'])): ?>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper purple darken-1">
        <a href="index.php" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="admin/dashboard.php">Dashboard <?php echo $_SESSION['username'] ?></a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contacts">Contacts</a></li>
          <li><a href="#modal1" class="modal-trigger">About Us</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="admin/dashboard.php">Dashboard</a></li>
    <li><a href="login.php">Logout</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#contacts">Contacts</a></li>
    <li><a href="#modal1" class="modal-trigger">About Us</a></li>
  </ul>

<?php else: ?>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper purple darken-1">
        <a href="index.php" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="login.php">Login</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contacts">Contacts</a></li>
          <li><a href="#modal1" class="modal-trigger">About Us</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="login.php">Login</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#contacts">Contacts</a></li>
    <li><a href="#modal1" class="modal-trigger">About Us</a></li>
  </ul>

<?php endif; ?>
