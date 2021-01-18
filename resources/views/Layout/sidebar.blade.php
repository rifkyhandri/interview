<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
    <a href="{{url('dashboard')}}">{{ \App\WebNames::get_name() }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">TO</a>
    </div>
    
    <ul class="sidebar-menu">
      @if(auth()->user()->role == 'admin' || auth()->user()->role == 'ACCOUNTING' || auth()->user()->role == 'HRD' || auth()->user()->role == 'SECURITY'  )
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Profile</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('karyawan.profile')}}">Profile</a></li>
        <li><a class="nav-link" href="{{route('event.index')}}">Event</a></li>
        @if(auth()->user()->role == 'SECURITY' )
        <li><a class="nav-link" href="{{route('karyawan.izin')}}">Izin Karyawan</a></li>
        @endif
          
        {{-- <li><a class="nav-link" href="{{route('event.table')}}">Table Pendaftaran</a></li>   --}}
        </ul>
      </li>
      @endif
      
      @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'Manager' )
        <li class="menu-header">Menu Utama</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li><a class="active" href="{{url('dashboard')}}">Dashboard Utama</a></li>
          <li><a class="nav-link" href="{{route('error.index')}}">Dashboard Toko Online</a></li>
          </ul>
        </li>
      @endif
        @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'PURCHASING')
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cash-register"></i> <span>Purchasing</span></a>
          <ul class="dropdown-menu">
           
            <li><a class="nav-link" href="layout-default.html">Product Search</a></li>
            <li><a class="nav-link" href="layout-transparent.html">+ Material</a></li>


            <li class="nav-item dropdown">
            <li><a href="#" class="nav-link" data-toggle="dropdown"> <span>Purchase Order</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('purchasing.create')}}"><i class="fas fa-plus"></i>Purchase Add</a></li>
                <li><a class="nav-link" href="{{route('purchasing.index')}}"><i class="fas fa-book"></i>+ Process</a></li>
            <li><a class="nav-link" href=""><i class="fas fa-check mr-0"></i>Completed</a></li>
              </ul>
            </li>
        

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-money-check"></i> <span>Purchase Request</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Product Search</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Purchase Request</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Purchase Request</a></li>    
          </ul>
        </li>
        @endif
        {{-- warehouse --}}
        @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'production')
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-warehouse"></i> <span>WMS</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Physical Check</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Warehousing</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Warehousing Check</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Location Management</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Delivery Check</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Stock Closing</a></li>
           
          </ul>
        </li>
        @endif
        {{-- logistics & Delivery --}}
        @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'logistics')
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-shipping-fast"></i> <span>Logistics</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Check Dellivery Order</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Logistics Progress</a></li>
            
          </ul>
        </li>
        @endif
        {{-- sales --}}
        @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'sales')
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-code-branch"></i> <span>Sales Branch Shop</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Sales Entry</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Payment Collection</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Payment of Sales</a></li>    
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-american-sign-language-interpreting"></i> <span>Sales Consignment</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Sales Entry</a></li>
            <li><a class="nav-link" href="layout-transparent.html">- Sales Entry (Blank)</a></li>
            <li><a class="nav-link" href="layout-transparent.html">- Sales Entry (Grid)</a></li>  
            <li><a class="nav-link" href="layout-transparent.html">- Payment Collection</a></li>   
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-money-bill-wave"></i> <span>Sales Direct Sales</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Sales Entry</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Billing</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Payment Colletion</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">in Prc</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Paid off</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Achivement Rate </a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Rate</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Paid off</a></li>        
            <li><a class="nav-link" href="layout-transparent.html">Receivable Cases</a></li>    
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-male"></i> <span>Customer</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Customer</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Distributor</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Mailing List</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">News Laters</a></li>

          </ul>
        </li>
        @endif
        @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'HRD')
            
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-fingerprint"></i> <span>HR</span></a>
          <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('karyawan.index')}}">Karyawan</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Surat Peringatan</a></li>
          <li><a class="nav-link" href="{{route('karyawan.izin')}}">Permintaan Izin</a></li>
            <li><a class="nav-link" href="#">Absensi</a></li>
            <li><a class="nav-link" href="{{route('karir.index')}}">+ Lowongan</a></li>
            <li><a class="nav-link" href="/api/karir-index">Pelamar</a></li>
            <li><a class="nav-link" href="/event">+ Acara</a></li>
            <li><a class="nav-link" href="/api/blog-index">Blog's</a></li>

           
          </ul>
        </li>
        @endif
        @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'Accounting')
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hand-holding-usd"></i> <span>Finance</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">General expenses</a></li>
            <li><a class="nav-link" href="layout-transparent.html">+ Disbursements</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Purchase Cost</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">General Income</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Invoice</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Bill of Tax</a></li>        
            <li><a class="nav-link" href="layout-transparent.html">Income Statement</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Personal Accounts</a></li>    
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-alt"></i> <span>Reports</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Customer</a></li>
            <li><a class="nav-link" href="layout-transparent.html">HR</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Purchasing</a></li>   
            <li><a class="nav-link" href="layout-transparent.html">Inventory</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Shipment</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Marketing</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Sales Income</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Asset</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Finance</a></li>         
          </ul>
        </li>
      
        
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-globe-asia"></i> <span>CMS Website</span></a>
          <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('cms.index')}}">Menu Editor</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Contents Editor</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Banner Files</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Banner Display</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Pages stuff</a></li>    
            <li><a class="nav-link" href="layout-transparent.html">Website Layout</a></li>    
          </ul>
        </li>

        @endif

        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-comments-dollar"></i> <span>Chat Room</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Personal Chat</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Group Chat</a></li>
           
          </ul>
        </li>
        
        
        
        @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'INVENTARIS')

        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Inventory</span></a>
          <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('stock.index')}}">Stock Input</a></li>
            <li><a class="nav-link" href="{{route('stockbyitem')}}">By Item</a></li>
            <li><a class="nav-link" href="{{route('indexbygudang')}}">Warehouse</a></li>
            <li><a class="nav-link" href="bootstrap-buttons.html">Branch Shop</a></li>
            <li><a class="nav-link" href="bootstrap-card.html">Consignment Store</a></li>
            <li><a class="nav-link" href="bootstrap-carousel.html">Stock Update Online</a></li>
            <li><a class="nav-link" href="bootstrap-collapse.html">Billing</a></li>
            <li><a class="nav-link" href="bootstrap-dropdown.html">Payment Collection</a></li>
            <li><a class="nav-link" href="bootstrap-form.html">Payment</a></li>
            <li><a class="nav-link" href="bootstrap-list-group.html">Payment Confirmation</a></li>
            <li><a class="nav-link" href="bootstrap-media-object.html">Stock Output</a></li>
            <li><a class="nav-link" href="bootstrap-modal.html">Return</a></li>
            <li><a class="nav-link" href="bootstrap-nav.html">Billing Management</a></li>
            <li><a class="nav-link" href="bootstrap-navbar.html">Product Pick-up</a></li>
            <li><a class="nav-link" href="bootstrap-pagination.html">Stock Opname</a></li>
            <li><a class="nav-link" href="bootstrap-popover.html">Date Reset</a></li>
            <li><a class="nav-link" href="bootstrap-progress.html">Stock Closing</a></li>
            <li><a class="nav-link" href="bootstrap-table.html">Product Package</a></li>
            <li><a class="nav-link" href="bootstrap-tooltip.html">Product Prices</a></li>
            <li><a class="nav-link" href="bootstrap-typography.html">Installment</a></li>
            <li><a class="nav-link" href="bootstrap-typography.html">Shipment Charges</a></li>
            <li><a class="nav-link" href="bootstrap-typography.html">Product Option</a></li>
            <li><a class="nav-link" href="bootstrap-typography.html">Product Unit</a></li>
          </ul>
        </li>
        @endif
        @if (auth()->user()->role == 'super_admin')
            
     
        <li class="menu-header">System</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>System Settings</span></a>
          <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('system.index')}}">System Login</a></li> 
         
          <li><a class="nav-link" href="{{route('event.index')}}">Event</a></li>                 
          <li><a class="nav-link" href="{{route('departement.MD')}}">Setting Departements</a></li>
          <li><a class="nav-link" href="{{route('departement.index')}}">Departements</a></li>
            <li><a class="nav-link beep beep-sidebar" href="{{route('Warehouse')}}">WareHouse</a></li>
          <li><a class="nav-link" href="{{route('Warehouse_wloc')}}">- Location Category</a></li>
            <li><a class="nav-link beep beep-sidebar" href="components-hero.html">- Location Management</a></li>
          <li><a class="nav-link" href="{{route('suplier.index')}}">Suppliers</a></li>
          <li><a class="nav-link beep beep-sidebar" href="{{ route('brands1') }}">Brands</a></li>
            <li><a class="nav-link" href="{{route('index.product')}}">Kategori Produk</a></li>
            <li><a class="nav-link" href="components-tab.html">Service Category</a></li>
            <li><a class="nav-link" href="components-table.html">Consignment Group</a></li>
            <li><a class="nav-link" href="components-user.html">Regions</a></li>
            <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Shops</a></li>
            <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Consignment shop</a></li>
            <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">by Customer</a></li>
            <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Branch Shop</a></li>
            <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Online Shop</a></li>
            <li><a class="nav-link" href="components-gallery.html">Shop Manager</a></li>
            <li><a class="nav-link" href="components-gallery.html">- Consignment Store</a></li>
            <li><a class="nav-link" href="components-gallery.html">- Branch Shop</a></li>
            <li><a class="nav-link" href="forms-advanced-form.html">Discount Rates</a></li>
            <li><a class="nav-link" href="forms-editor.html">Vouchers</a></li>
            <li><a class="nav-link" href="forms-validation.html">Special pricing</a></li>
            <li><a class="nav-link" href="forms-advanced-form.html">Initial Cash</a></li>
            <li><a class="nav-link" href="forms-editor.html">Bank Accounts</a></li>
            <li><a class="nav-link" href="forms-validation.html">Credits Cards</a></li>
            <li><a class="nav-link" href="forms-advanced-form.html">Insurance Agents</a></li>
            <li><a class="nav-link" href="forms-editor.html">Cost</a></li>
            <li><a class="nav-link" href="forms-validation.html">Budget</a></li>
            <li><a class="nav-link" href="forms-editor.html">Training Category</a></li>
            <li><a class="nav-link" href="forms-validation.html">Training Course</a></li>
            <li><a class="nav-link" href="forms-editor.html">Ports</a></li>
            <li><a class="nav-link" href="forms-validation.html">Works Shift</a></li>
            <li><a class="nav-link" href="forms-editor.html">Job Class</a></li>
            <li><a class="nav-link" href="forms-validation.html">Salarry Class</a></li>
            <li><a class="nav-link" href="forms-editor.html">Yearly Payroll</a></li>
            <li><a class="nav-link" href="forms-validation.html">Incentive</a></li>
            <li><a class="nav-link" href="forms-editor.html">Currency</a></li>
            <li><a class="nav-link" href="forms-validation.html">Foreign Exchanges</a></li>
            <li><a class="nav-link" href="forms-editor.html">Accounting Category</a></li>
            <li><a class="nav-link" href="forms-validation.html">Accounting Codes</a></li>
            <li><a class="nav-link" href="forms-validation.html">Corporates</a></li>
          </ul>
        </li>
        
        @endif
        @if (auth()->user()->role == 'super_admin')
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Company</span></a>
          <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('comp_profile')}}">Profile Company</a></li>
          </ul>
        </li>
        @endif
      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="{{route('index.shop')}}" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Go to Website
        </a>
      </div>
  </aside>
</div>