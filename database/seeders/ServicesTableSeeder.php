<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Family Business Advisory',
                'slung' => 'family-business-advisory',
                'meta' => 'Leveraging our vast experiences in Family Businesses we support family businesses to focus on addressing key issues such as; Strategic Planning, Succession Planning, Generational Transitions, Commercial decisions. Developing visions missions and goals, Growth and preserving/ enhancing founder’s legacies.',
                'content' => 'Leveraging our vast experiences in Family Businesses we support family businesses to focus on addressing key issues such as; Strategic Planning, Succession Planning, Generational Transitions, Commercial decisions. Developing visions missions and goals, Growth and preserving/ enhancing founder’s legacies.',
                'extra' => '<h3>Working Together To Build Successful Family Businesses</h3>
<p class="lead text-color-dark">
Sasema leverage’s our various family business experiences in order to support families to:</p>
<ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-0">
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Proactively solve challenges: “Solutions are better than cures”</li>
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> We offer solutions to families on alignment of all aspects of the family and business including the role and importance of various governance structures, their vision, mission, values and ownership</li>
</ul>
<p class="lead text-color-dark">We focus on addressing key issues such as succession and structuring to enable families to build successful multi-generational businesses, that will leave lasting legacies.</p>
<h3>Our Approach</h3>
<p class="lead text-color-dark">We take a holistic approach to a wide variety of activities including:</p>

<ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-0">
<li class="font-weight-semibold text-color-dark mb-3">Proactive family coaching</li>
<li class="font-weight-semibold text-color-dark mb-3">Assessments and interviews</li>
<li class="font-weight-semibold text-color-dark mb-3">Family council and board development</li>
<li class="font-weight-semibold text-color-dark mb-3">Family meeting facilitation</li>
<li class="font-weight-semibold text-color-dark mb-3">Conflict Management</li>
<li class="font-weight-semibold text-color-dark mb-3">Financial and business strategy</li>
<li class="font-weight-semibold text-color-dark mb-3">Succession planning</li>
</ul>

',
                'animate' => NULL,
                'image' => 'familybusinessAdvisory.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Mergers & Acquisitions Advisory',
                'slung' => 'mergers-acquisitions-advisory',
                'meta' => 'Sasema Management Company leverages our extensive buy side network to market companies in strict confidence to qualified buyers. We are able to execute such sell side campaigns anonymously to identify interested buyers with committed capital.',
                'content' => 'Sasema Management Company leverages our extensive buy side network to market companies in strict confidence to qualified buyers. We are able to execute such sell side campaigns anonymously to identify interested buyers with committed capital.

',
                'extra' => '<p class="lead text-color-dark">
Through our extensive local, regional and global networks, investment advisory activities and access to successful and well-established family businesses in the region, we act as the gateway for multinationals looking for a foothold in Sub-Sahara Africa.
<br>
Sasema offers transaction advise via our out-sourced M&A services as well as working with local businesses that are seeking global strategic operating partners through our sell-side M&A offering. Over the last 10 years, we have been involved in numerous transactions ranging from USD 2mm to USD 200mm.
<br>
Our experienced team will provide you with valuable insights and assist you in:
<br>
</p>
<h3>Out-sourced M&A Advisory</h3>


<ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-0">
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Leading the sell-side/buy-side transaction process</li>
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Developing and formulating M&A strategies</li>
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Identifying suitable M&A partners</li>
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Identify, screen and initiate discussions with potential acquisition targets</li>

<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Carry out commercial due diligence on potential targets</li>
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Indicative valuation of targets, structuring M&A transactions</li>
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Negotiating ideal transaction terms and ensuring a successful deal closure</li>
</ul>

<h3>Sell-side M&A advisory</h3>


<ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-0">
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Developing strategic business plan and financial modeling & analysis
</li>
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Preparing information memorandum, indicative valuations</li>
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Identifying and securing suitable investors (strategic funding partners and / or strategic operating partners)</li>
<li class="font-weight-semibold text-color-dark mb-3"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Leading the negotiation process and ensuring a timely, win-win deal closure</li>

</ul>',
                'animate' => ' data-appear-animation="fadeIn" style="animation-delay: 100ms;"',
                'image' => 'Mergers-1204743098-170667a.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Capital Raising',
                'slung' => 'capital-raising',
                'meta' => 'We help our clients prepare for and execute equity capital raising or placement transactions.',
                'content' => '  <h5>Equity Capital Raising</h5>
<p class="lead text-color-dark">We help our clients prepare for and execute equity capital raising or placement transactions. Raises capital through the issuance of equity or receives cash proceeds from the exercise of outstanding warrants or any issuance of stock options or other forms of equity. </p>


<h5>Debt Capital Raising</h5>
<p class="lead text-color-dark">We help clients raise debt capital by leveraging our relationships with a broad spectrum of lenders. Our streamlined, go-to-market process drives the best credit terms the market has to offer, saving our client’s precious time and money.</p>

',
                'extra' => '',
                'animate' => 'data-appear-animation="fadeIn" data-appear-animation-delay="250" style="animation-delay: 250ms;"',
                'image' => 'equity-capital-rising-1227074505-170667a.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}