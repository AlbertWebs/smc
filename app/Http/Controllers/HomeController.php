<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use DB;
use Newsletter;


class HomeController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle('Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/');
        SEOTools::setCanonical('https://www.sasemagroup.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        return view('front.welcome',compact('page_title'));
    }

    public function about()
    {
        SEOTools::setTitle('About us | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/about-us');
        SEOTools::setCanonical('https://www.sasemagroup.com/about-us');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        return view('front.about',compact('page_title'));
    }

    public function services()
    {
        SEOTools::setTitle('Our Services | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/our-services');
        SEOTools::setCanonical('https://www.sasemagroup.com/our-services');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/our-services');
        $page_title = "Sasema Management Company";
        return view('front.services',compact('page_title'));
    }

    public function contact()
    {
        SEOTools::setTitle('Contact us | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/contact-us');
        SEOTools::setCanonical('https://www.sasemagroup.com/contact-us');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        return view('front.contact',compact('page_title'));
    }

    public function terms()
    {
        SEOTools::setTitle('Contact us | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/terms-and-conditions');
        SEOTools::setCanonical('https://www.sasemagroup.com/terms-and-conditions');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        return view('front.terms',compact('page_title'));
    }

    public function privacy()
    {
        SEOTools::setTitle('Contact us | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/privacy-policy');
        SEOTools::setCanonical('https://www.sasemagroup.com/privacy-policy');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        return view('front.privacy',compact('page_title'));
    }

    public function copyright()
    {
        SEOTools::setTitle('Contact us | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/copyright');
        SEOTools::setCanonical('https://www.sasemagroup.com/copyright');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        return view('front.copyright',compact('page_title'));
    }
    


}
