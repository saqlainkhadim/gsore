<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Contactus;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\GeneralSetting;
use App\Models\Request_quote;
use App\Models\Get_touch;
use Response;

// use response;
class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
//home page
    public function index()
    {
        
        return view('front.index.index');
    }
//shop-sidebar-grid-left
    public function shop_sidebar_grid_left()
    {
        return view('front.page.shop_sidebar_grid_left');
    }
//shop-sidebar-grid-right
    public function shop_sidebar_grid_right()
    {
        return view('front.page.shop_sidebar_grid_right');
    }
//shop-sidebar-full-width
    public function shop_sidebar_full_width()
    {
        return view('front.page.shop_sidebar_full_width');
    }
//shop-sidebar-left-list-view
    public function shop_sidebar_left_list_view()
    {
        return view('front.page.shop_sidebar_left_list_view');
    }
//cart
    public function cart()
    {
        return view('front.page.cart');
    }
//checkout
    public function checkout()
        {
            return view('front.page.checkout');
        }
//empty_cart
public function empty_cart()
    {
        return view('front.page.empty_cart');
    }
//wishlist
public function wishlist()
    {
        return view('front.page.wishlist');
    }
//my-account
public function my_account()
    {
        return view('front.page.my_account');
    }
//login
public function login()
{
    return view('front.page.login');
}
//product_single_affiliate
public function product_single_affiliate()
{
    return view('front.page.product_single_affiliate');
}
//blog-grid-sidebar-left 
public function blog_grid_sidebar_left()
{
    return view('front.page.blog_grid_sidebar_left');
} 
//blog-single-sidebar-left
public function blog_single_sidebar_left()
{
    return view('front.page.blog_single_sidebar_left');
}
//contact
public function contact()
{
    return view('front.page.contact');
}
//about
public function about()
{
    return view('front.page.about');
}
//frequently-questions
public function frequently_questions()
{
    return view('front.page.frequently_questions');
}
//privacy-policy
public function privacy_policy()
{
    return view('front.page.privacy_policy');
}
//ERROR
public function error()
{
    return view('front.page.error');
}
   
}
