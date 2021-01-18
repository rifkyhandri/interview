<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ \App\WebNames::get_name() }}</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="{{asset('assets/sb-ui-kit-pro/dist/css/styles.css') }}" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>
                    <nav class="navbar navbar-marketing navbar-expand-lg bg-white navbar-light fix-top">
                        <div class="container">
                            <a class="navbar-brand text-dark" href="index.html">{{ \App\WebNames::get_name() }}</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto mr-lg-5">
                                    <li class="nav-item"><a class="nav-link" href="index.html">Home </a></li>
                                    <li class="nav-item dropdown dropdown-xl no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownDemos" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings<i class="fas fa-chevron-right dropdown-arrow"></i></a>
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
                                                            <h6 class="dropdown-header text-primary">Applications</h6>
                                                            <a class="dropdown-item" href="landing-app-mobile.html">Mobile App</a><a class="dropdown-item" href="landing-app-desktop.html">Desktop App</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Business</h6>
                                                            <a class="dropdown-item" href="landing-multipurpose.html">Multipurpose</a><a class="dropdown-item" href="landing-agency.html">Agency</a><a class="dropdown-item" href="landing-press.html">Press</a><a class="dropdown-item" href="landing-directory.html">Directory</a><a class="dropdown-item" href="landing-rental.html">Rental</a><a class="dropdown-item" href="landing-real-estate.html">Real Estate</a><a class="dropdown-item" href="landing-classifieds.html">Classifieds</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Lead Generation</h6>
                                                            <a class="dropdown-item" href="landing-lead-capture.html">Lead Capture</a>
                                                            <div class="dropdown-divider border-0 d-lg-none"></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h6 class="dropdown-header text-primary">Personal</h6>
                                                            <a class="dropdown-item" href="landing-resume.html">Resume</a><a class="dropdown-item" href="landing-portfolio.html">Portfolio</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Header Styles</h6>
                                                            <a class="dropdown-item" href="header-basic.html">Basic</a><a class="dropdown-item" href="header-basic-signup.html">Basic (Signup)</a><a class="dropdown-item" href="header-graphic.html">Graphic</a><a class="dropdown-item" href="header-graphic-signup.html">Graphic (Signup)</a><a class="dropdown-item" href="header-inner-page.html">Inner Page</a><a class="dropdown-item" href="header-nav-only.html">Nav Only</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown dropdown-lg no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages<i class="fas fa-chevron-right dropdown-arrow"></i></a>
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
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documentation<i class="fas fa-chevron-right dropdown-arrow"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/quickstart" target="_blank"
                                                ><div class="icon-stack bg-primary-soft text-primary mr-4"><i class="fas fa-book-open"></i></div>
                                                <div>
                                                    <div class="small text-gray-500">Documentation</div>
                                                    Usage instructions and reference
                                                </div></a
                                            >
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/components" target="_blank"
                                                ><div class="icon-stack bg-primary-soft text-primary mr-4"><i class="fas fa-code"></i></div>
                                                <div>
                                                    <div class="small text-gray-500">Components</div>
                                                    Code snippets and reference
                                                </div></a
                                            >
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/changelog" target="_blank"
                                                ><div class="icon-stack bg-primary-soft text-primary mr-4"><i class="fas fa-file"></i></div>
                                                <div>
                                                    <div class="small text-gray-500">Changelog</div>
                                                    Updates and changes
                                                </div></a
                                            >
                                        </div>
                                    </li>
                                </ul>
                                <a class="btn-primary btn rounded-pill px-4 ml-lg-4" href="https://shop.startbootstrap.com/sb-ui-kit-pro">Daftar<i class="fas fa-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    </nav>

                    <header class="page-header page-header-dark bg-img-cover overlay overlay-dark overlay-90" style='background-image: url("{{asset('assets/images/rog.jpg')}}")'>
                        <div class="page-header-content py-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 col-lg-10 text-center">
                                        <h1 class="page-header-title">Cari barang Elektronik kamu disini</h1>
                                        <p class="page-header-text mb-5">ada 10rb++ produk elektronik di Ekspres.id temukan barang impianmu disini</p>
                                        <form class="page-header-signup mb-2 mb-md-0">
                                            <div class="form-row justify-content-center">
                                                <div class="col-lg-9 col-md-8">
                                                    <div class="form-group mr-0 mr-lg-2"><label class="sr-only" for="inputSearch">Enter and address, city, state, or ZIP </label><input class="form-control form-control-solid rounded-pill" id="inputSearch" type="text" placeholder="Laptop ROG" /></div>
                                                </div>
                                                <div class="col-lg-3 col-md-4"><button class="btn btn-primary btn-block btn-marketing rounded-pill" type="submit">Search</button></div>
                                            </div>
                                        </form>
                                        <p class="page-header-text small mb-0">By signing up, you agree to our <a href="javascript:void(0);">terms of service</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="svg-border-rounded text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                        </div>
                    </header>
                    <section  class="bg-white py-10">
                        <div class="container">
                     
                            <div class="row">                            
                                @foreach ($brand as $b)
                                <div class="col-xl-3 col-lg-3 ">
                                    <a class="card lift mb-5" href="">
                                    <div class="card"  style="height:150px;">
                                        <img src="{{ url('assets/images/ecommerce/brand-cat/'.$b->avatar) }}" style="margin-top:35px;  display: block;
                                        margin-left: auto;
                                        margin-right: auto;
                                        width: 50%;" alt="">
                                    </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                           
                        </div>
                    </section>
                    <hr class="my-0" />
                    <section class="bg-white py-10">
                        <div class="container">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="mb-0">Produk Terbaru</h2>
                                <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="#!">See more<i class="ml-1" data-feather="arrow-right"></i></a>
                            </div>
                            <div class="row">
                            @foreach ($stock_sub as $item)
                                @if($item->online == 'aktif')
                                <div class="col-lg-4  mb-5">
                                    <a class="card lift h-100 " href="#!"
                                        ><div class="card-flag card-flag-dark card-flag-top-right">Gratis Ongkir</div>
                                        <img class="card-img-top" src="{{ url('assets/images/products/'.$item->avatar) }}" style="height: 230px" />
                                        <div class="card-body">
                                            <h3 class="text-primary mb-0">@currency($item->harga_jual)</h3>
                                            <div class="small text-gray-800 font-weight-500">{{$item->nama_produk}}</div>
                                            <div class="small text-gray-500">{{$item->nama_brand}}</div>
                                        </div>
                                        <div class="card-footer bg-transparent border-top d-flex align-items-center justify-content-between">
                                            <div class="small text-gray-500">Lihat disini</div>
                                            <div class="small text-gray-500"><i data-feather="arrow-right"></i></div></div
                                    ></a>
                                </div>
                                @else

                                @endif
                                @endforeach
                                
                            </div>
                        </div>
                    </section>
                    <hr class="my-0" />
                  
                    <section class="bg-white py-10">
                        <div class="container">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="mb-0">Newest Listings</h2>
                                <a class="btn btn-sm btn-primary d-inline-flex align-items-center" href="#!">See more<i class="ml-1" data-feather="arrow-right"></i></a>
                            </div>
                            <div class="row">
                                @foreach ($stock_sub as $item)
                                @if($item->online == 'aktif')
                                <div class="col-lg-4  mb-5">
                                    <a class="card lift h-100 " href="#!"
                                        ><div class="card-flag card-flag-dark card-flag-top-right">Gratis Ongkir</div>
                                        <img class="card-img-top" src="{{ url('assets/images/products/'.$item->avatar) }}" style="height: 230px"/>
                                        <div class="card-body">
                                            <h3 class="text-primary mb-0">@currency($item->harga_jual)</h3>
                                            <div class="small text-gray-800 font-weight-500">{{$item->nama_produk}}</div>
                                            <div class="small text-gray-500">{{$item->nama_brand}}</div>
                                        </div>
                                        <div class="card-footer bg-transparent border-top d-flex align-items-center justify-content-between">
                                            <div class="small text-gray-500">Lihat disini</div>
                                            <div class="small text-gray-500"><i data-feather="arrow-right"></i></div></div
                                    ></a>
                                </div>
                                @else

                                @endif
                                @endforeach
                                
                                
                            </div>
                        </div>
                        <div class="svg-border-rounded text-light">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                        </div>
                    </section>
                    <section class="bg-light py-10">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center mb-5">
                                    <h2>Discover Piscard</h2>
                                    <p class="lead mb-0">Voted the most desireable county in the region, discover what Piscard has to offer!</p>
                                </div>
                            </div>
                            <div class="card-columns card-columns-portfolio">
                                <a class="card card-portfolio" href="#!"
                                    ><img class="card-img-top" src="https://source.unsplash.com/NHPyk3hWt30/400x300" alt="..." />
                                    <div class="card-body"><div class="card-title">Outdoor Activities</div></div></a
                                ><a class="card card-portfolio" href="#!"
                                    ><img class="card-img-top" src="https://source.unsplash.com/GkZvxVsHYWw/400x500" alt="..." />
                                    <div class="card-body"><div class="card-title">Historical Downtown</div></div></a
                                ><a class="card card-portfolio" href="#!"
                                    ><img class="card-img-top" src="https://source.unsplash.com/lnsHBbBC__w/400x500" alt="..." />
                                    <div class="card-body"><div class="card-title">Town Centers</div></div></a
                                ><a class="card card-portfolio" href="#!"
                                    ><img class="card-img-top" src="https://source.unsplash.com/N_aihp118p8/400x300" alt="..." />
                                    <div class="card-body"><div class="card-title">Award Winning Schools</div></div></a
                                ><a class="card card-portfolio" href="#!"
                                    ><img class="card-img-top" src="https://source.unsplash.com/SIOdjcYotms/400x300" alt="..." />
                                    <div class="card-body"><div class="card-title">Beautiful Beaches</div></div></a
                                ><a class="card card-portfolio" href="#!"
                                    ><img class="card-img-top" src="https://source.unsplash.com/eE-ffApg7oI/400x500" alt="..." />
                                    <div class="card-body"><div class="card-title">Community Farmers Market</div></div></a
                                >
                            </div>
                        </div>
                        <div class="svg-border-rounded text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                        </div>
                    </section>
                  
                    <section class="bg-white py-10">
                        <div class="container">
                            <div class="row mb-10">
                                <div class="col-lg-6 mb-5 mb-lg-0 divider-right">
                                    <div class="testimonial p-lg-5">
                                        <div class="avatar avatar-xl mb-3"><img class="avatar-img" src="https://source.unsplash.com/QAB-WJcbgJk/96x96" /></div>
                                        <p class="testimonial-quote text-primary">"Working with the realtor's has been a true joy. They helped us purchase our home and made the whole process so easy!"</p>
                                        <div class="testimonial-name">Valerie Luna</div>
                                        <div class="testimonial-position">Jefferson, GA</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="testimonial p-lg-5">
                                        <div class="avatar avatar-xl mb-3"><img class="avatar-img" src="https://source.unsplash.com/MTZTGvDsHFY/96x96" /></div>
                                        <p class="testimonial-quote text-primary">"Selling a home has never been so easy. The real estate group helped me prepare my home, list it, and sell it, all within a few weeks!"</p>
                                        <div class="testimonial-name">Destrian Barnes</div>
                                        <div class="testimonial-position">Fayetville, NC</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <a class="card text-decoration-none h-100 lift" href="#!"
                                        ><div class="card-body py-5">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-stack icon-stack-xl bg-primary text-white flex-shrink-0"><i data-feather="home"></i></div>
                                                <div class="ml-4">
                                                    <h5 class="text-primary">Buy a home</h5>
                                                    <p class="card-text text-gray-600">Looking for your dream home? Get in touch with us now to start your search!</p>
                                                </div>
                                            </div>
                                        </div></a
                                    >
                                </div>
                                <div class="col-lg-6">
                                    <a class="card text-decoration-none h-100 lift" href="#!"
                                        ><div class="card-body py-5">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-stack icon-stack-xl bg-secondary text-white flex-shrink-0"><i data-feather="dollar-sign"></i></div>
                                                <div class="ml-4">
                                                    <h5 class="text-secondary">Sell your home</h5>
                                                    <p class="card-text text-gray-600">Our award winning real estate group is ready to take on the challenge!</p>
                                                </div>
                                            </div>
                                        </div></a
                                    >
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr class="my-0" />
                </main>
            </div>
            <div id="layoutDefault_footer">
                <footer class="footer pt-10 pb-5 mt-auto bg-white footer-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="footer-brand">SB UI Kit Pro</div>
                                <div class="mb-3">Build better websites</div>
                                <div class="icon-list-social mb-5">
                                    <a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-instagram"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-facebook"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-github"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Product</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="javascript:void(0);">Landing</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Pages</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Sections</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Documentation</a></li>
                                            <li><a href="javascript:void(0);">Changelog</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Technical</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="javascript:void(0);">Documentation</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Changelog</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Theme Customizer</a></li>
                                            <li><a href="javascript:void(0);">UI Kit</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Includes</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="javascript:void(0);">Utilities</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Components</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Layouts</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Code Samples</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Products</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Affiliates</a></li>
                                            <li><a href="javascript:void(0);">Updates</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="text-uppercase-expanded text-xs mb-4">Legal</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="javascript:void(0);">Privacy Policy</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Terms and Conditions</a></li>
                                            <li><a href="javascript:void(0);">License</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-5" />
                        <div class="row align-items-center">
                            <div class="col-md-6 small">Copyright &copy; Your Website 2020</div>
                            <div class="col-md-6 text-md-right small">
                                <a href="javascript:void(0);">Privacy Policy</a>
                                &middot;
                                <a href="javascript:void(0);">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/sb-ui-kit-pro/dist/js/scripts.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/burger/jquery-3.3.1.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('assets/burger/floating-wpp.css')}}">
        <script type="text/javascript" src="{{asset('assets/burger/floating-wpp.js')}}"></script>
        <div id="myButton"></div>
    </body>
    <script type="text/javascript">
        $(function () {
            $('#myButton').floatingWhatsApp({
                phone: '+6287717777618',
                popupMessage: 'Hallo ada yang bisa saya bantu ?',
                message: "Hai saya ingin bertanya tentang *EKSPRES.ID*",
                showPopup: true,
                showOnIE: false,
                headerTitle: 'Chat Ekspres.id',
                headerColor: 'green',
                backgroundColor: 'green',
                position : 'right'
            
            });
        });
    </script>
    </body>
</html>