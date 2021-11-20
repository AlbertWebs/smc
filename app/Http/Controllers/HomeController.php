<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use DB;
use Newsletter;
use Illuminate\Support\Str;


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
        $page_name = "Sasema Management Company";
        $About = DB::table('abouts')->get();
        $Projects = DB::table('projects')->get();
        return view('front.website.index',compact('page_title','page_name','Projects','About'));
    }

    public function parallax()
    {
        SEOTools::setTitle('Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/');
        SEOTools::setCanonical('https://www.sasemagroup.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        return view('front.parallax',compact('page_title'));
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
        $page_name = "About Sasema Management Company";
        $About = DB::table('abouts')->get();
        return view('front.website.about',compact('page_title','page_name','About'));
    }

    public function projects()
    {
        SEOTools::setTitle('Projects | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/about-us');
        SEOTools::setCanonical('https://www.sasemagroup.com/about-us');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        $page_name = "projects";
        $Projects = DB::table('projects')->get();
        return view('front.website.projects',compact('page_title','page_name','Projects'));
    }

    

    public function team()
    {
        SEOTools::setTitle('Meet Our Team | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/about-us');
        SEOTools::setCanonical('https://www.sasemagroup.com/about-us');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        $page_name = "About Sasema Management Company";
        $Team = DB::table('teams')->get();
        return view('front.website.team',compact('page_title','page_name','Team'));
    }

    public function team_single($slung)
    {
        $Team = DB::table('teams')->where('slung',$slung)->get();
        foreach($Team as $team)
        {
            SEOTools::setTitle(' '.$team->name.' | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
            SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
            SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/about-us');
            SEOTools::setCanonical('https://www.sasemagroup.com/about-us');
            SEOTools::opengraph()->addProperty('type', 'articles');
            SEOTools::twitter()->setSite('@sasemaM');
            SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
            $page_title = "Sasema Management Company";
            $page_name = "About Sasema Management Company";
            $Team = DB::table('teams')->where('slung',$slung)->get();
            return view('front.website.team-single',compact('page_title','page_name','Team'));
        }
        
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
        $page_name = "Sasema Services";
        $Services = DB::table('services')->get();
        return view('front.services',compact('page_title','page_name','Services'));
    }

    public function service($slung)
    {
        $Services = DB::table('services')->where('slung',$slung)->get();
        foreach ($Services as $key => $value) {
            SEOTools::setTitle(' '.$value->title.' | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
            SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
            SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/our-services');
            SEOTools::setCanonical('https://www.sasemagroup.com/our-services');
            SEOTools::opengraph()->addProperty('type', 'articles');
            SEOTools::twitter()->setSite('@sasemaM');
            SEOTools::jsonLd()->addImage('https://sasemagroup.com/our-services');
            $page_title = "Sasema Management Company";
            $page_name = "Sasema Services";
            return view('front.service',compact('page_title','page_name','Services'));
        }
        
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
        $page_name = "Contact Us";
        return view('front.website.contact',compact('page_title','page_name'));
    }

    public function terms()
    {
        SEOTools::setTitle('Terms and Conditions | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/terms-and-conditions');
        SEOTools::setCanonical('https://www.sasemagroup.com/terms-and-conditions');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        $page_name = "Terms & Conditions";
        $Terms = DB::table('terms')->get();
        return view('front.website.terms',compact('page_title','page_name','Terms'));
    }

    public function privacy()
    {
        SEOTools::setTitle('Privacy Policy | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/privacy-policy');
        SEOTools::setCanonical('https://www.sasemagroup.com/privacy-policy');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        $page_name = "Terms & Conditions";
        $Privacy = DB::table('privacies')->get();
        return view('front.website.privacy',compact('page_title','page_name','Privacy'));
    }

    public function copyright()
    {
        SEOTools::setTitle('Copyright Statement | Sasema Management Company | Investment advisor in Kenya, Investment advisor in Mauritius');
        SEOTools::setDescription('Sasema Management Company is an investment advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://www.sasemagroup.com/copyright');
        SEOTools::setCanonical('https://www.sasemagroup.com/copyright');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/');
        $page_title = "Sasema Management Company";
        $page_name = "Terms & Conditions";
        $Copyright = DB::table('copyright')->get();
        return view('front.website.copyright',compact('page_title','page_name','Copyright'));
    }
    

    // Subscribe Mail Chimp
    public function news_letters(Request $request)
    {   
            if ( ! Newsletter::isSubscribed($request->user_email) ) {
                Newsletter::subscribe($request->user_email);
            }
    }

    public function slungyfy(){
        $Team = DB::table('services')->get();
        foreach($Team as $team){
            $updateDetails = array(
                'slung' => Str::slug($team->title),
            );
            DB::table('services')->where('id',$team->id)->update($updateDetails);
        }
        
        return "Done";
    }


}
