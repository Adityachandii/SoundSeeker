<div class="soundseeker-header pt-2 pb-2 d-flex" style="background-color:#D9D9D9">
    <div class="mx-3 mr-auto"> <!-- Menambahkan kelas "mr-auto" untuk mendorong elemen ke kanan -->
        <a href="{{ route('HomepageUser') }}">
            <img src="image/logonama.png" alt="" width="25%">
        </a>
    </div>
    <div class="mx-3"> <!-- Menambahkan kelas "mx-3" untuk memberikan jarak horizontal -->
        <a href="{{ route('transactionHistory') }}" class="navbar-brand text-dark">CART</a>
    </div>

    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle navbar-brand text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">{{ Auth::user()->username }}</a>
            <div class="dropdown-divider"></div> <!-- Menghapus kelas "bg-black" yang tidak diperlukan -->
            <a class="dropdown-item" href="{{ route('Logout') }}"><i class="bi bi-box-arrow-right"></i> LOG OUT</a>
        </div>
    </div>
</div>
