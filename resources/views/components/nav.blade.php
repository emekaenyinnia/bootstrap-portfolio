
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style='background-color:#212529'>
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="{{ URL('storage/img/navbar-logo.svg') }}" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link {{ request()->is('service')? 'active': '' }}" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->is('portfolio')? 'active' : ''}}" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : ''}}" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->is('team') ? 'active' : ''}}" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->is('contact') ? 'active' : ''}}" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>