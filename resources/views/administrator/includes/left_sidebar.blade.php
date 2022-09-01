<?PHP
$url=Request::segment(2);
$url1=Request::segment(3);
$dashboardManagement=['dashboard'];
$galleryManagement=['gallery-list', 'gallery'];
$contactManagement=['contact-us', 'contact-us-list'];
$BlogsManagement=['blog-list'];
$ProductManagement=['gallery-list'];
$GeneralsettingManagement=['Generalsetting'];
$QuoteManagement=['quote-list'];
$TouchManagement=['get-in-touch-list'];
$BannerManagement=['banner-list'];
// $userData=Session::get('user_adata');
?>
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="<?PHP if(in_array($url,$dashboardManagement)) { echo "active"; } ?>" href="{{ route('admin_dashboard')}}" ><div class="pull-left"><i class="fa fa-tachometer mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>

        <li>
            <a class="<?PHP if(in_array($url,$BannerManagement)) { echo "active"; } ?>" href="{{ route('admin_banner')}}" ><div class="pull-left"><i class="fa fa-tachometer mr-20"></i><span class="right-nav-text">Banner</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li> 
        
        <li> 
            <a class="<?PHP if(in_array($url,$galleryManagement)) { echo "active"; } ?>"  href="{{route('admin_gallery')}}" ><div class="pull-left"><i class="fa fa-picture-o mr-20"></i><span class="right-nav-text">Gallery Management  </span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
       
        <li>
            <a class="<?PHP if(in_array($url,$BlogsManagement)) { echo "active"; } ?>" href="{{ route('admin_blog')}}" ><div class="pull-left"><i class="fa fa-newspaper-o mr-20"></i><span class="right-nav-text">Blogs</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>

        <li>
            <a class="<?PHP if(in_array($url,$contactManagement)) { echo "active"; } ?>" href="{{route('admin_contact_us')}}"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Contact Us</span></div><div class="pull-right"><span class="label label-success"></span></div><div class="clearfix"></div></a>

        </li>
        <li>
            <a class="<?PHP if(in_array($url,$QuoteManagement)) { echo "active"; } ?>" href="{{route('admin_quote')}}"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Quote</span></div><div class="pull-right"><span class="label label-success"></span></div><div class="clearfix"></div></a>

        </li>
        <li>
            <a class="<?PHP if(in_array($url,$TouchManagement)) { echo "active"; } ?>" href="{{route('admin_touch')}}"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Get In Touch</span></div><div class="pull-right"><span class="label label-success"></span></div><div class="clearfix"></div></a>

        </li>

        <li>
            <a class="<?PHP if(in_array($url,$GeneralsettingManagement)) { echo "active"; } ?>" href="{{route('admin_general_setting')}}"><div class="pull-left"><i class="fa fa-gear mr-20"></i><span class="right-nav-text">General Setting</span></div><div class="pull-right"><span class="label label-success"></span></div><div class="clearfix"></div></a>

        </li>

        {{-- <li>
            <a class="<?PHP if(in_array($url,$ProductManagement)) { echo "active"; } ?>" href="{{ route('admin_product')}}" ><div class="pull-left"><i class="fa fa-tachometer mr-20"></i><span class="right-nav-text"> Product</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li> --}}
        {{-- <li> 
            <a class="<?PHP if(in_array($url,$admin_as_seen_no)) { echo "active"; } ?>"  href="{{route('admin_as_seen_no')}}" ><div class="pull-left"><i class="fa fa-list mr-20"></i><span class="right-nav-text">AS SEEN NO </span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li> --}}
        <li><hr class="light-grey-hr mb-10"/></li>
    </ul>
    </div>
