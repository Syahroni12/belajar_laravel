<nav class="navbar navbar-expand-lg navbar-light success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ $title === 'home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title === 'karyawan' ? 'active' : '' }}" href="/karyawan">petugas dan karyawan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title === 'pelanggan' ? 'active' : '' }}" href="/pelanggan">pelanggan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title === 'blog' || $title==='Single post' ? 'active' : '' }}" href="/blog">Blog</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
