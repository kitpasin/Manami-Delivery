<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexPage() {
        return view('pages.index');
    }
    public function loginPage()
    {
        return view('pages.login');
    }
    public function forgotPage()
    {
        return view('pages.forgot');
    }
    public function registerPage()
    {
        return view('pages.register');
    }
    public function homePage()
    {
        return view('pages.home');
    }
    public function termofservicePage()
    {
        return view('pages.termofservice');
    }
    public function privacypolicyPage()
    {
        return view('pages.privacypolicy');
    }
    public function washNdryPage()
    {
        return view('pages.wash&dry');
    }
    public function mapPage()
    {
        return view('pages.map');
    }
    public function washingPage()
    {
        return view('pages.washing');
    }
    public function dryingPage()
    {
        return view('pages.drying');
    }
    public function washNdrycartPage()
    {
        return view('pages.wash&drycart');
    }
    public function washNdrypaymentPage()
    {
        return view('pages.wash&drypayment');
    }
    public function vendingNcafePage()
    {
        return view('pages.vending&cafe');
    }
    public function foodNdrinkPage()
    {
        return view('pages.food&drink');
    }
    public function foodPage()
    {
        return view('pages.food');
    }
    public function drinkPage()
    {
        return view('pages.drink');
    }
    public function snackPage()
    {
        return view('pages.snack');
    }
    public function bottlePage()
    {
        return view('pages.bottle');
    }
    public function vendingNcafecartPage()
    {
        return view('pages.vending&cafecart');
    }
    public function vendingNcafepaymentPage()
    {
        return view('pages.vending&cafepayment');
    }
    public function profilePage()
    {
        return view('pages.profile');
    }
    public function infoPage()
    {
        return view('pages.information');
    }
    public function infoeditPage()
    {
        return view('pages.informationedit');
    }
    public function orderhistoryPage()
    {
        return view('pages.orderhistory');
    }
    public function orderdetailwashNdryPage()
    {
        return view('pages.orderdetailwash&dry');
    }
    public function orderdetailwashNdryreceiptPage()
    {
        return view('pages.orderdetailwash&dryreceipt');
    }
    public function orderdetailwashNdryevidencePage()
    {
        return view('pages.orderdetailwash&dryevidence');
    }
    public function orderdetailvendingNcafePage()
    {
        return view('pages.orderdetailvending&cafe');
    }
    public function orderdetailvendingNcafereceiptPage()
    {
        return view('pages.orderdetailvending&cafereceipt');
    }
    public function orderdetailvendingNcafeevidencePage()
    {
        return view('pages.orderdetailvending&cafeevidence');
    }
}

