<nav class="navbar navbar-expand-md shadow-sm" id="myId" style="color: #084f5c!important;">
                <a class="navbar-brand" href="{{ route('shop.index') }}">
                  Order Pizza App
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
                    <ul class="navbar-nav mr-auto">

                    </ul>

                   
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('pizza.shoppingCart') }}"><i class="fas fa-shopping-cart"></i>Shopping Cart
                                <span class="badge badge-pill badge-dark">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                            </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     <span class="caret"><i class="fas fa-user"></i>User Menagment</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 @if(Auth::check())
                                  <a class="dropdown-item" href="{{ route('user.profile') }}">
                                  <i class="far fa-address-card"></i>
                                     User Profile  
                                </a>
                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('user.logout') }}">
                                        <i class="fas fa-sign-out-alt"></i>
                                        Logout
                                    </a>
                                </div>
                                @else 
                                <a class="dropdown-item" href="{{ route('user.signup') }}">
                                    <i class="fas fa-user-plus"></i>
                                     Sign Up 
                                </a>
                                <a class="dropdown-item" href="{{ route('user.signin') }}">
                                    <i class="fas fa-sign-in-alt"></i>
                                     Sign In
                                </a>
                                @endif 
                                  
                                    
                                </div>
                            </li>
                         
                      
                    </ul>
                </div>
         
</nav>