<div class="soundseeker-header pt-2 pb-2 d-flex" style="background-color:#D9D9D9">
    <div class="">
        <div class="">
            <a href={{route('HomepageUser')}}>
                <img src="image/logonama.png" alt="" width="25%">
            </a>
        </div>
    </div>
    <div class="">
        <a href={{ route('transactionHistory') }}>CART</a>
    </div>
    {{-- <a class="dropdown-item" href={{route('Logout')}}><i class="bi bi-box-arrow-right"></i>LOG OUT</a></li> --}}

    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">{{Auth::user()->username}}</a>
          <div class="dropdown-divider bg-black"></div>
          <li><a class="dropdown-item" href={{ route('Logout') }}><i class="bi bi-box-arrow-right"></i>LOG OUT</a></li></a></li>
        </div>
    </div>
</div>
