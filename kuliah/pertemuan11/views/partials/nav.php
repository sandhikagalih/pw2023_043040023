<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">PW2023</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link <?= uriIs(BASE_URL); ?>" aria-current="page" href="<?= BASE_URL; ?>">Home</a>
        <a class="nav-link <?= uriIs(BASE_URL . '/about.php'); ?>" href="about.php">About</a>
        <a class="nav-link" href="contact.php">Contact</a>
      </div>
    </div>
  </div>
</nav>