<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use DB;
use Newsletter;
use Illuminate\Support\Str;
use App\Models\SendMails;
use App\Models\Message;
use App\Models\Apply;
use App\Models\File;


class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle('Sasema Management Company | Financial Advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/');
        SEOTools::setCanonical('https://sasemagroup.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "Sasema Management Company";
        $About = DB::table('abouts')->get();
        $ProjectsComplete = DB::table('projects')->where('status','1')->get();
        $Projects = DB::table('projects')->where('status','0')->orderBy('orders','ASC')->get();
        return view('front.website.index',compact('page_title','page_name','Projects','About','ProjectsComplete'));
    }

    public function parallax()
    {
        SEOTools::setTitle('Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/');
        SEOTools::setCanonical('https://sasemagroup.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        return view('front.parallax',compact('page_title'));
    }



    public function about()
    {
        SEOTools::setTitle('About us | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/about-us');
        SEOTools::setCanonical('https://sasemagroup.com/about-us');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "About Sasema Management Company";
        $About = DB::table('abouts')->get();
        return view('front.website.about',compact('page_title','page_name','About'));
    }

    public function projects()
    {
        SEOTools::setTitle('Projects | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/projects');
        SEOTools::setCanonical('https://sasemagroup.com/projects');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "projects";
        $Projects = DB::table('projects')->where('status','0')->get();
        $Projects = DB::table('projects')->where('status','0')->orderBy('orders','ASC')->get();
        $ProjectsComplete = DB::table('projects')->where('status','1')->get();
        return view('front.website.projects',compact('page_title','page_name','Projects','ProjectsComplete'));
    }



    public function team()
    {
        SEOTools::setTitle('Meet Our Team | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/meet-our-team');
        SEOTools::setCanonical('https://sasemagroup.com/meet-our-team');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
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
            SEOTools::setTitle(' '.$team->name.' | Sasema Management Company | Financial advisor in Kenya');
            SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
            SEOTools::opengraph()->setUrl('https://sasemagroup.com/meet-our-team/'.$slung.'');
            SEOTools::setCanonical('https://sasemagroup.com/meet-our-team/'.$slung.'');
            SEOTools::opengraph()->addProperty('type', 'articles');
            SEOTools::twitter()->setSite('@sasemaM');
            SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
            $page_title = "Sasema Management Company";
            $page_name = "About Sasema Management Company";
            $Team = DB::table('teams')->where('slung',$slung)->get();
            return view('front.website.team-single',compact('page_title','page_name','Team'));
        }

    }



    public function services()
    {
        SEOTools::setTitle('Our Services | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/our-services');
        SEOTools::setCanonical('https://sasemagroup.com/our-services');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "Sasema Services";
        $Services = DB::table('services')->get();
        return view('front.services',compact('page_title','page_name','Services'));
    }

    public function service($slung)
    {
        $Services = DB::table('services')->where('slung',$slung)->get();
        foreach ($Services as $key => $value) {
            SEOTools::setTitle(' '.$value->title.' Services in Kenya | Sasema Management Company | Financial advisor in Kenya');
            SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
            SEOTools::opengraph()->setUrl('https://sasemagroup.com/our-services/'.$slung.'');
            SEOTools::setCanonical('https://sasemagroup.com/our-services/'.$slung.'');
            SEOTools::opengraph()->addProperty('type', 'articles');
            SEOTools::twitter()->setSite('@sasemaM');
            SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
            $page_title = "Sasema Management Company";
            $page_name = "Sasema Services";
            return view('front.service',compact('page_title','page_name','Services'));
        }

    }

    public function contact()
    {
        SEOTools::setTitle('Contact us | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/contact-us');
        SEOTools::setCanonical('https://sasemagroup.com/contact-us');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "Contact Us";
        return view('front.website.contact',compact('page_title','page_name'));
    }

    public function terms()
    {
        SEOTools::setTitle('Terms and Conditions | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/terms-and-conditions');
        SEOTools::setCanonical('https://sasemagroup.com/terms-and-conditions');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "Terms & Conditions";
        $Terms = DB::table('terms')->get();
        return view('front.website.terms',compact('page_title','page_name','Terms'));
    }

    public function privacy()
    {
        SEOTools::setTitle('Privacy Policy | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/privacy-policy');
        SEOTools::setCanonical('https://sasemagroup.com/privacy-policy');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "Terms & Conditions";
        $Privacy = DB::table('privacies')->get();
        return view('front.website.privacy',compact('page_title','page_name','Privacy'));
    }

    public function copyright()
    {
        SEOTools::setTitle('Copyright Statement | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/copyright');
        SEOTools::setCanonical('https://sasemagroup.com/copyright');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "Terms & Conditions";
        $Copyright = DB::table('copyright')->get();
        return view('front.website.copyright',compact('page_title','page_name','Copyright'));
    }

    public function page_careers()
    {
        SEOTools::setTitle('Careers | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/copyright');
        SEOTools::setCanonical('https://sasemagroup.com/copyright');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "Careers";
        $About = DB::table('careers')->get();
        $Abouts = DB::table('abouts')->get();
        return view('front.website.page_careers',compact('page_title','page_name','About','Abouts'));
    }

    public function sitemap()
    {
        SEOTools::setTitle('Careers | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/copyright');
        SEOTools::setCanonical('https://sasemagroup.com/copyright');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "Careers";
        $About = DB::table('careers')->get();
        $Abouts = DB::table('abouts')->get();
        return view('front.sitemap',compact('page_title','page_name','About','Abouts'));
    }




    // Subscribe Mail Chimp
    public function news_letters(Request $request)
    {
        if($request->filled('website')) {
            return response()->json(['response'=>'success']);
        }
        else
        {
            if ( ! Newsletter::isSubscribed($request->user_email) ) {
                Newsletter::subscribe($request->user_email);
            }
        }
    }

    public function submit_message(Request $request)
    {
            if($request->filled('website')) {
                return response()->json(['response'=>'success']);
            } else {
                $Message = new Message;
                $Message->name = $request->name;
                $Message->email = $request->email;
                $Message->subject = $request->subject;
                $Message->content = $request->message;
                $Message->save();
                // Send Email to Notify
                SendMails::contact_form($request->name,$request->email,$request->subject,$request->message);
                return response()->json(['response'=>'success']);
            }
    }

    public function submit_messages(Request $request)
    {
            if($request->filled('website')) {
                return response()->json(['response'=>'success']);
            } else {
                $rawSubject= $request->subject;
                $relSubject = "Call Me Back";
                $rawMessage = "Hello, My name is $request->name, Call me on <a href='tel:$request->phone'>$request->phone</a>, We Talk about $request->subject";
                $email = "mailer@sasemagroup.com";
                $Message = new Message;
                $Message->name = $request->name;
                $Message->email = $email;
                $Message->subject = $relSubject;
                $Message->content = $rawMessage;
                $Message->save();
                // Send Email to Notify
                SendMails::contact_form($request->name,$email,$relSubject,$rawMessage);
                return response()->json(['response'=>'success']);
            }
    }

    public function apply_career_post(Request $request)
    {
            if($request->filled('website')) {
                return response()->json(['response'=>'success']);
            } else {

                //
                $rawSubject= $request->subject;
                $relSubject = "Career Application";
                $rawMessage = "Hello, My name is $request->name, Call me on <a href='tel:$request->phone'>$request->phone</a>, We Talk about $request->subject.";
                $email = "mailer@sasemagroup.com";
                $Message = new Apply;

                // $Message->attachments = $image;
                $Message->subject = $request->subject;
                $Message->content = $rawMessage;
                $Message->save();
                // Send Email to Notify
                SendMails::contact_form($request->name,$email,$relSubject,$rawMessage);
                return response()->json(['response'=>'success']);
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

    public function getTables(){
        $allTables = DB::select('SHOW TABLES');
        var_dump($allTables);
    }

    public function apply_career($slung)
    {
        SEOTools::setTitle('Careers | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/copyright');
        SEOTools::setCanonical('https://sasemagroup.com/copyright');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "Careers";
        $About = DB::table('careers')->where('slung',$slung)->get();
        $Abouts = DB::table('abouts')->get();
        return view('front.website.careers',compact('page_title','page_name','About','Abouts'));
    }

    public function career_inquiry()
    {
        SEOTools::setTitle('Careers | Sasema Management Company | Financial advisor in Kenya');
        SEOTools::setDescription('Sasema Management Company is an Financial advisory,mergers and acquisitions and family business consulting firm. ');
        SEOTools::opengraph()->setUrl('https://sasemagroup.com/copyright');
        SEOTools::setCanonical('https://sasemagroup.com/copyright');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@sasemaM');
        SEOTools::jsonLd()->addImage('https://sasemagroup.com/uploads/logo/logo.png');
        $page_title = "Sasema Management Company";
        $page_name = "Careers";
        $About = DB::table('careers')->get();
        $Abouts = DB::table('abouts')->get();
        return view('front.website.career',compact('page_title','page_name','About','Abouts'));
    }


    public function post_career(Request $request){

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $education = $request->education;
        $course = $request->course;
        $institution = $request->institution;
        $experience = $request->experience;
        $position = $request->position;
        $company = $request->company;

        if($request->hasFile('resume')){
            $Resume = $request->file('resume');
            $Resume_name = str_replace(' ', '-', strtolower($Resume->getClientOriginalName()));
            $Resume->move(public_path('uploads/careers'),$Resume_name);
            $ResumePath = "https://sasemagroup.com/uploads/careers/" . $Resume_name;
        }

        if($request->hasFile('cover')){
            $Cover = $request->file('cover');
            $Cover_name = str_replace(' ', '-', strtolower($Cover->getClientOriginalName()));
            $Cover->move(public_path('uploads/careers'),$Cover_name);
            $CoverPath = "https://sasemagroup.com/uploads/careers/" . $Cover_name;
        }

        $File  = new File;
        $File->name = $name;
        $File->email = $email;
        $File->phone = $phone;
        $File->cover = $CoverPath;
        $File->resume = $ResumePath;
        $File->education = $education;
        $File->course = $course;
        $File->institution = $institution;
        $File->experience = $experience;
        $File->position = $position;
        $File->company = $company;
        $File->save();

        SendMails::sendApplication($name,$email,$phone,$education,$course,$institution,$experience,$position,$company,$ResumePath,$CoverPath);
        $message = "Your Documents Have Been Submited Successfully";
        return response()->json(['message' => $message],200);

    }

}
