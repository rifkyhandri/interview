<nav class="navbar navbar-marketing navbar-expand-lg @yield('bg-header') navbar-light">
    <div class="container">
    <a class="navbar-brand @yield('navbar-brand')" href="{{route('index.shop')}}">Ekspress.com</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-lg-5">
                <li class="nav-item "><a class="nav-link" href="/api/shop">Home </a></li>
                <li class="nav-item dropdown dropdown-xl no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownDemos" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori Produk<i class="fas fa-chevron-right dropdown-arrow"></i></a>
                    <div class="dropdown-menu dropdown-menu-right animated--fade-in-up mr-lg-n15" aria-labelledby="navbarDropdownDemos">
                        <div class="row no-gutters">
                            <div class="col-lg-5 p-lg-3 bg-img-cover overlay overlay-primary overlay-70 d-none d-lg-block" style='background-image: url("https://source.unsplash.com/mqO0Rf-PUMs/500x350")'>
                                <div class="d-flex h-100 w-100 align-items-center justify-content-center">
                                    <div class="text-white text-center z-1">
                                        <div class="mb-3">Multipurpose landing pages for a variety of projects.</div>
                                        <a class="btn btn-white btn-sm text-primary rounded-pill" href="index.html">View All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 p-lg-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6 class="dropdown-header text-primary">Fitur</h6>
                                        <a class="dropdown-item" href="landing-app-mobile.html">ExpressMart</a><a class="dropdown-item" href="landing-app-desktop.html">ExpressFood</a><a class="dropdown-item" href="landing-app-desktop.html">ExpressElektronik</a>
                                        <div class="dropdown-divider border-0"></div>
                                        <h6 class="dropdown-header text-primary">Investasi</h6>
                                        <a class="dropdown-item" href="landing-multipurpose.html">Express Gold</a><a class="dropdown-item" href="landing-agency.html">Express Reksa Dana</a><a class="dropdown-item" href="landing-press.html">Press</a><a class="dropdown-item" href="landing-directory.html">Directory</a><a class="dropdown-item" href="landing-rental.html">Rental</a><a class="dropdown-item" href="landing-real-estate.html">Real Estate</a><a class="dropdown-item" href="landing-classifieds.html">Classifieds</a>
                                        <div class="dropdown-divider border-0"></div>
                                        <h6 class="dropdown-header text-primary">Tiket</h6>
                                        <a class="dropdown-item" href="landing-lead-capture.html">Tiket Pesawat</a>
                                        <a class="dropdown-item" href="landing-lead-capture.html">Tiket Kereta</a>
                                        <a class="dropdown-item" href="landing-lead-capture.html">Travel</a>
                                        <div class="dropdown-divider border-0 d-lg-none"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6 class="dropdown-header text-primary">Personal</h6>
                                        <a class="dropdown-item" href="landing-resume.html">Resume</a><a class="dropdown-item" href="landing-portfolio.html">Portfolio</a>
                                        <div class="dropdown-divider border-0"></div>
                                        <h6 class="dropdown-header text-primary">Promo</h6>
                                        <a class="dropdown-item" href="header-basic.html">Discount 99%</a><a class="dropdown-item" href="header-basic-signup.html">Cashback 3 Juta</a><a class="dropdown-item" href="header-graphic.html">Bazar Diskon</a><a class="dropdown-item" href="header-graphic-signup.html">Seller on Sale</a><a class="dropdown-item" href="header-inner-page.html">Gratis Ongkir</a><a class="dropdown-item" href="header-nav-only.html">Super Brand</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-lg no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk Virtual<i class="fas fa-chevron-right dropdown-arrow"></i></a>
                    <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="navbarDropdownPages">
                        <div class="row no-gutters">
                            <div class="col-lg-6 p-lg-5">
                                <h6 class="dropdown-header text-primary">Company</h6>
                                <a class="dropdown-item" href="page-basic.html">Basic Page</a><a class="dropdown-item" href="page-company-about.html">About</a><a class="dropdown-item" href="page-company-pricing.html">Pricing</a><a class="dropdown-item" href="page-company-contact.html">Contact</a><a class="dropdown-item" href="page-company-terms.html">Terms</a>
                                <div class="dropdown-divider border-0"></div>
                                <h6 class="dropdown-header text-primary">Support</h6>
                                <a class="dropdown-item" href="page-help-center.html">Help Center</a><a class="dropdown-item" href="page-help-knowledgebase.html">Knowledgebase</a><a class="dropdown-item" href="page-help-message-center.html">Message Center</a><a class="dropdown-item" href="page-help-support-ticket.html">Support Ticket</a>
                                <div class="dropdown-divider border-0 d-lg-none"></div>
                            </div>
                            <div class="col-lg-6 p-lg-5">
                                <h6 class="dropdown-header text-primary">Careers</h6>
                                <a class="dropdown-item" href="page-careers-overview.html">Careers List</a><a class="dropdown-item" href="page-careers-listing.html">Position Details</a>
                                <div class="dropdown-divider border-0"></div>
                                <h6 class="dropdown-header text-primary">Blog</h6>
                                <a class="dropdown-item" href="page-blog-overview.html">Overview</a><a class="dropdown-item" href="page-blog-post.html">Post</a><a class="dropdown-item" href="page-blog-archive.html">Archive</a>
                                <div class="dropdown-divider border-0"></div>
                                <h6 class="dropdown-header text-primary">Portfolio</h6>
                                <a class="dropdown-item" href="page-portfolio-grid.html">Grid</a><a class="dropdown-item" href="page-portfolio-large-grid.html">Large Grid</a><a class="dropdown-item" href="page-portfolio-masonry.html">Masonry</a><a class="dropdown-item" href="page-portfolio-case-study.html">Case Study</a><a class="dropdown-item" href="page-portfolio-project.html">Project</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog's<i class="fas fa-chevron-right dropdown-arrow"></i></a>
                    <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                        <a class="dropdown-item py-3" href="{{route('blog.index')}}" 
                            ><div class="icon-stack bg-primary-soft text-primary mr-4"><i class="fas fa-book-open"></i></div>
                            <div>
                                <div class="small text-gray-500">Blogs</div>
                                ini adalah halaman kegiatan kami
                            </div></a
                        >
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="#" 
                        {{-- target="_blank" --}}
                            ><div class="icon-stack bg-primary-soft text-primary mr-4"><i class="fas fa-code"></i></div>
                            <div>
                                <div class="small text-gray-500">Daftar Suplier</div>
                                ini adalah halaman pendaftaran suplier
                            </div></a
                        >
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="{{route('karir.index')}}"
                         {{-- target="_blank" --}}
                            ><div class="icon-stack bg-primary-soft text-primary mr-4"><i class="fas fa-file"></i></div>
                            <div>
                                <div class="small text-gray-500">Karir Express</div>
                                Jadilah bagian dari kami
                            </div></a
                        >
                    </div>
                </li>
            </ul>
            <a class="btn-outline-light btn rounded-pill px-4 ml-lg-4" href="https://shop.startbootstrap.com/sb-ui-kit-pro">Login</a>
            <a class="btn-white btn rounded-pill px-4 ml-lg-4" href="https://shop.startbootstrap.com/sb-ui-kit-pro">Daftar<i class="fas fa-arrow-right ml-1"></i></a>
        </div>
    </div>
</nav>