
@extends('api.Layout_Ecommerce.Master_Ecommerce')
@section('title','System ERP')
@section('bg-header','bg-gradient-primary-to-secondary navbar-dark fixed-top')
@section('navbar-brand','text-white')
@section('content')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary">
    <div class="page-header-content pt-10">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="page-header-title mb-3">Karir Express.com</h1>
                    <p class="page-header-text">Gabung bersama dengan kami mewujudkan masa depan teknologi yang indah</p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
<section class="bg-white py-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="mb-0">Administration</h2>
                    <div class="badge badge-primary-soft text-primary badge-marketing">3 Openings</div>
                </div>
                <hr class="mb-0" />
                <ul class="list-group list-group-flush list-group-careers">
                    <li class="list-group-item">
                        <a href="">Senior Manager, Risk Management</a>
                        <div class="small">Remote - US (San Francisco, CA)</div>
                    </li>
                    <li class="list-group-item">
                        <a href="#!">Operations Manager</a>
                        <div class="small">San Francisco, CA (HQ)</div>
                    </li>
                    <li class="list-group-item">
                        <a href="#!">Administrative Assistant</a>
                        <div class="small">Dallas, TX</div>
                    </li>
                </ul>
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="mb-0">Engineering</h2>
                    <div class="badge badge-primary-soft text-primary badge-marketing">5 Openings</div>
                </div>
                <hr class="mb-0" />
                <ul class="list-group list-group-flush list-group-careers">
                    <li class="list-group-item">
                    <a href="{{route('karir.view')}}">Senior Software Engineer</a>
                        <div class="small">Remote - US / Canada</div>
                    </li>
                    <li class="list-group-item">
                        <a href="#!">Software Engineer</a>
                        <div class="small">Remote - Global</div>
                    </li>
                    <li class="list-group-item">
                        <a href="#!">Data Scientist</a>
                        <div class="small">Remote - Global</div>
                    </li>
                    <li class="list-group-item">
                        <a href="#!">Front End Engineer</a>
                        <div class="small">San Francisco, CA (HQ)</div>
                    </li>
                    <li class="list-group-item">
                        <a href="#!">Technical Director</a>
                        <div class="small">San Francisco, CA (HQ)</div>
                    </li>
                </ul>
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="mb-0">Sales</h2>
                    <div class="badge badge-primary-soft text-primary badge-marketing">4 Openings</div>
                </div>
                <hr class="mb-0" />
                <ul class="list-group list-group-flush list-group-careers">
                    <li class="list-group-item">
                        <a href="#!">Sales Support Coordinator</a>
                        <div class="small">Remote - US (San Francisco, CA)</div>
                    </li>
                    <li class="list-group-item">
                        <a href="#!">Senior Sales Representative</a>
                        <div class="small">Remove - US Northeast</div>
                    </li>
                    <li class="list-group-item">
                        <a href="#!">Paid Search Specialist</a>
                        <div class="small">Remote - Global</div>
                    </li>
                    <li class="list-group-item">
                        <a href="#!">Junior Sales Representative</a>
                        <div class="small">San Francisco, CA (HQ)</div>
                    </li>
                </ul>
                <h4 class="mb-4">
                    <div class="icon-stack bg-primary text-white mr-2"><i data-feather="smile"></i></div>
                    Work happier
                </h4>
                <p class="mb-5">Build amazing things with autonomy, self-direction, and a healthy work-life balance. We offer flexible work schedules for all of our employees and unlimited PTO. We also believe that if a job allows for it, you should work wherever you’re happiest.</p>
                <h4 class="mb-4">
                    <div class="icon-stack bg-primary text-white mr-2"><i data-feather="trending-up"></i></div>
                    Keep growing
                </h4>
                <p>Learn how you learn best. From books to conferences, you’ll get a yearly budget for your individual learning and development goals. If ebooks are more your style, you’ll get a brand new Kindle on your first day.</p>
                <hr class="my-5" />
                <div class="card bg-light shadow-none">
                    <div class="card-body text-center p-5">
                        <h2>Internships</h2>
                        <p class="lead mb-4">Are you currently enrolled at a college or university and looking for hands-on experience while earning class credit? Take a look at our internship opportunities!</p>
                        <a class="btn btn-primary btn-marketing rounded-pill" href="#!">Explore Internships</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</section>

@endsection
@push('pages-scripts')
 
@endpush
  

