@extends('front.master-sasema')
@section('content')
<div class="body">
    @include('front.website.header')
  


    <div role="main" class="main">
        {{-- <section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>Meet Our Team</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Meet Our Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}
       
        <div role="main" class="main">
            <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{asset('theme/img/page-header/page-header-background-transparent-2.jpg')}});">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-12 font-weight-semibold">Meet our Team</h1>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb breadcrumb-light d-block text-center">
                                <li><a href="#">Home</a></li>
                                <li><a href="{{url('/')}}/about-us">About Us</a></li>
                                <li class="active">Meet Our Team</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        
            <div class="container py-4">
        
                <div class="row">
                    <div class="col-md-7 order-2 content-area">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Phil N. Gutsche </h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Founder & Managing Director</p>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Phil has spent 25+ years living and working in Africa and Asia, working primarily in the FMCG sector, as well being a co-founder shareholder/director of the KFC & the News Café franchises in EA. Phil remains closely connected to the Coke system, as well as shareholder of various SMEs based in Kenya. His executive focus is Sasema Management Company, which he established in 2008. Sasema provides Investment Management, Family Business and M&A/Transaction advisory services to clients. Phil and his family live in Nairobi and are all active in sports and enjoy exploring Kenya.</p>
                        {{-- <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p> --}}
                        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                                <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                            </div>
                            <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                                <ul class="social-icons float-lg-end">
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                        <img src="{{asset('uploads/teams/gutsche.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <img src="{{asset('uploads/teams/odeke.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Odeke Ekirapa </h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Head of Advisory</p>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Odeke is an experienced business analyst who holds a BS/BA in Business Management with minors in Economics and East Asian Studies from Bucknell University, PA, USA. Prior to joining Sasema in 2021, Odeke worked for Ekco Investments Limited as the Finance Director managing all financial aspects of the company’s investments portfolio with a focus on project management. At Sasema, Odeke is a member of the M&A and transaction advisory team at Sasema overseeing the capital raising process. Odeke is a native of Kenya, fluent in English, Kiswahili & Kiteso.</p>
                        
                        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                                <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                            </div>
                            <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                                <ul class="social-icons float-lg-end">
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-7 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Reuben Kagichu</h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Head of Finance & Operations</p>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">As part of the Senior Leadership Team (SLT), Reuben contributes financial and operational expertise in the development and implementation of organizational strategies, policies, practices, funding proposals and applications.
                            He is a graduate from Egerton University and a CPA Finalist.</p>
                        
                        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                                <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                            </div>
                            <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                                <ul class="social-icons float-lg-end">
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                        <img src="{{asset('uploads/teams/reuben.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
        
                {{--  --}}
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
                {{--  --}}
        
                {{--  --}}
                <div class="row">
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <img src="{{asset('uploads/teams/aurore.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Aurore Imena  </h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Associate</p>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Aurore is an experienced Investment analyst, she holds a Master of Science in Finance & Investment management from Salford University, Manchester and a Bachelor of Finance from the Catholic University of Eastern Africa. Prior to joining Sasema in 2018, Aurore worked for BBDO- Media Edge as an Account executive, serving the client needs and conducting designs & marketing of products. At Sasema, Aurore is a member of the M&A and transaction advisory team at Sasema overseeing the capital raising process. . Aurore is a native of Rwanda, fluent in English, French, Kinyarwanda & Kirundi.</p>
                        
                        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                                <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                            </div>
                            <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                                <ul class="social-icons float-lg-end">
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-7 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Naftaly Ndungú </h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Junior Associate</p>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Naftaly is actively involved in the entire deal cycle of the capital raising process; from client engagement, industry & market research, financial analysis & valuation, due diligence support, and final closing procedures and facilitation. Naftaly holds a Bachelor’s degree in Real Estate from the University of Nairobi. He is a registered and licensed Estate Agent, a certified Financial Modeling & Valuation Analyst, Commercial Banking and Credit Analyst and currently pursuing the CFA Charter. </p>
                        
                        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                                <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                            </div>
                            <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                                <ul class="social-icons float-lg-end">
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                        <img src="{{asset('uploads/teams/ndungu.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
        
                {{--  --}}
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
                {{--  --}}
              
                {{--  --}}
                <div class="row">
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <img src="{{asset('uploads/teams/lorraine.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300"> Lorraine Makanga   </h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">HR & Admin</p>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorraine is an experienced HR professional. She is currently taking her Masters in Business Administration from Kenya Methodist University and holds a Bachelors Degree in Human Resource Management also from the Kenya Methodist University. She has worked in the financial services as an HR & Admin for over 5 years. At Sasema, Lorraine participates in the development, coordination, implementation and administration of hr policies, procedures and programs; as well as oversee administrative functions. She is always working towards sustainable performance and enjoys the challenge of working in a complex and ever changing environment.
                        </p>
                        
                        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                                <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                            </div>
                            <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                                <ul class="social-icons float-lg-end">
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-7 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300"> Moreen Kaguru </h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Analyst</p>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Moreen holds a Bachelor’s Degree in Economics from the University of Nairobi . She is also a Certified Public Accountant(CPA).Prior to joining Sasema, Moreen worked as an Accounts Assistant at an insurance agency assisting in the Finance department. At Sasema, Moreen is a member of the M&A and transaction advisory overseeing and managing the analytical data and investor documentation that supports client transactions. Moreen is a native of Kenya, fluent in English and Kiswahili, with a basic comprehension of French .</p>
                        
                        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                                <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                            </div>
                            <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                                <ul class="social-icons float-lg-end">
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                        <img src="{{asset('uploads/teams/moreen.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
        
                {{--  --}}
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
                {{--  --}}
        
                {{--  --}}
                <div class="row">
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <img src="{{asset('uploads/teams/marie.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300"> Marie Akanga   </h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Accountant</p>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Marie Akanga is an accountant with a Bachelor’s degree in Commerce from The University of Nairobi where she did a major in Finance and a minor in Human Resource Management. She is also a CPA and a Master’s of Commerce holder from Strathmore University. Prior to Sasema Management Marie worked with Kenya Civil Aviation Authority in the finance department. She also doubles as a writer on the blog called The Corporette Chic on topics around Finance, career, mental health and Lifestyle. At Sasema Marie is a part of the Finance team working as the company’s accountant. She oversees the billing process from Invoicing to payment as well as all things compliance with Kenya Revenue Authority and other regulatory bodies. Marie also assists to manage both the company accounts as well as the director’s accounts. 
                        </p>
                        
                        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                                <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                            </div>
                            <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                                <ul class="social-icons float-lg-end">
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        
           
        
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-7 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300"> Catherine Waringa </h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Personal Assistant</p>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Catherine has over six years of experience working as a personal assistant to various directors. She holds a CPA qualification of part two. She oversees the daily management and administrative support as the office administrator. She is proficient in maintaining a professional and confidential working environment for all our esteemed clients.</p>
                        
                        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                                <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                            </div>
                            <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                                <ul class="social-icons float-lg-end">
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                        <img src="{{asset('uploads/teams/catherine.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
        
                {{--  --}}
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
                {{--  --}}
        
                <div class="row">
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <img src="{{asset('uploads/teams/team-2.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300"> William Wamalwa   </h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Intern</p>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">William is currently a sophomore at USIU, studying International Business Administration (IBA), concentration in Finance. Over the past 5 years, he has worked at China Gansu International Corporation for Economic and Technical Cooperation and Info Trak Research and Consultancy Company. At Sasema, William supports the Advisory team managing the financial compilation and analysis of the client’s portfolio leading up to a market launch. William is a native of Kenya, fluent in English and Kiswahili. 
                        </p>
                        
                        <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                                <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                            </div>
                            <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                                <ul class="social-icons float-lg-end">
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
        
            </div>
        
            <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-9">
                            <div class="call-to-action-content">
                                <h2 class="font-weight-normal text-6 mb-0"><strong class="font-weight-extra-bold">Sasema Management Company </strong> is an investment advisory, mergers and acquisitions and family business consulting firm </h2>
                                <p class="mb-0">Behind SASEMA’s success is a dedicated professional team with a successful track record.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="call-to-action-btn">
                                <a href="{{url('/')}}/contact-us" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Contact Us</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    
       

    </div>

  

    @include('front.website.footer')
</div>
@endsection