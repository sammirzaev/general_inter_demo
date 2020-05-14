@extends('layouts.front')
@section('content')
    <!-- Pageheader -->
    <main class="page-header-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="title-hr"></div>
                </div>
                <div class="col-md-8 col-lg-6">
                    <h1 class="text-center">About Us</h1>
                </div>
            </div>
        </div>
    </main>
    <div class="content">
        <div class="content-entry-image" style="background-image: url('{{asset('public/assets/front/images/bg/project1.jpg')}}')"></div>
        <div class="page-inner">
            <section class="section about-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-info">
                                <div class="title-hr"></div>
                                <div class="info-title">About Us.</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="text-display-2"><p><strong class="text-dark">30+ Years in Professional Business</strong><br>
                                    We have more than 33 years of professional experience in design, supply, installation,
                                    commissioning of projects and providing maintenance services to prestigious clients of different market sectors.
                                    Our offices and warehouse facilities located in Abu Dhabi, Al Ain,
                                    Dubai & Umm Al Quwain allows us to be conveniently accessible to our customers.</p>
                                <p>As a result working with hundred of creatives all these past years, we are now
                                    delivering a theme that will be part of your toolset for a lot of time, we are totally
                                    sure about this.</p>

                                <p class="text-muted"><strong class="text-dark">We are ISO 9001:2008 certified</strong><br>
                                    We acquired ISO 9001:2008 Certification. Setting organization standards for work flows and procedures
                                    to be followed by the company, required time and effort by the management to
                                    ensure that the processes in place are truly effective and based on the experience
                                    and company method of business transactions.  The defined tasks and procedures facilitate
                                    the work and new employees’ induction hence making it easier to operate as we grow.
                                </p>
                                <p class="text-muted"><strong class="text-dark">Software & Tools</strong><br>
                                    We apply various softwares to assist us in the designing of our systems particularly for the
                                    Fire Protection and Water Treatment Systems. The use of integrated CAFM software has also been
                                    integrated in our asset management system to our maintenance program to ensure proper control
                                    & monitoring of the facilities and its equipment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section bg-dots" style="margin-top: -12%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-info">
                                <div class="title-hr"></div>
                                <div class="info-title">Engineers from Diverse Background</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row-services row">
                                <div class="col-service col-sm-12 col-lg-12">
                                    <p class="text-muted">One of the main factors of our success is our team´ qualifications,
                                        we have Engineers from various professional fields: Electrical, Mechanical,
                                        Sustainability, Occupational Health & Safety Practitioners,
                                        Environmental Management, Compliance, Fire Protection, Security
                                        & Integrated ELV as well as Society of Engineering (Civil)</p>
                                </div>
                                <div class="col-service col-sm-6 col-lg-4">
                                    <span class="text-dark icon-medium icon-power"></span>
                                    <h4>Electrical</h4>
                                </div>
                                <div class="col-service col-sm-6 col-lg-4">
                                    <span class="text-dark icon-medium icon-cog2"></span>
                                    <h4>Mechanical</h4>
                                </div>
                                <div class="col-service col-sm-6 col-lg-4">
                                    <span class="text-dark icon-medium icon-hand2"></span>
                                    <h4>Sustainability</h4>
                                </div>
                                <div class="col-service col-sm-6 col-lg-4">
                                    <span class="text-dark icon-medium icon-shield-check"></span>
                                    <h4>Occupational Health & Safety Practitioner</h4>
                                </div>
                                <div class="col-service col-sm-6 col-lg-4">
                                    <span class="text-dark icon-medium icon-surveillance"></span>
                                    <h4>Security & Integrated ELV</h4>
                                </div>
                                <div class="col-service col-sm-6 col-lg-4">
                                    <span class="text-dark icon-medium icon-home6"></span>
                                    <h4>Environmental Management Compliance</h4>
                                </div>
                                <div class="clearfix visible-sm visible-md"></div>
                                <div class="col-service col-sm-6 col-lg-4">
                                    <span class="text-dark icon-medium icon-fire"></span>
                                    <h4>Fire Protection</h4>
                                </div>
                                <div class="col-service col-sm-6 col-lg-4">
                                    <span class="text-dark icon-medium icon-construction"></span>
                                    <h4>Society of Engineering (Civil)</h4>
                                </div>
                                <div class="col-service col-sm-12 col-lg-12 text-display-2">
                                    <p class="text-muted"><strong class="text-dark">Certifications & Accreditations</strong><br>
                                        We are accredited and approved for various entities from Commercial,
                                        Aviation, Government, Industrial and OIL & GAS and Power Stations.
                                        We passed the requirement and currently an approved Supplier & Service Provider.</p>
                                </div>
                                <div class="col-service col-sm-12 col-lg-12 text-display-2">
                                    <p class="text-muted"><strong class="text-dark">Serving 200+ Customers delivered 500+ projects in UAE</strong><br>
                                        We received recommendation letters and approval from our clients highlighting our capability to handle any
                                        kind of installation and maintenance work in recognition of our quality works, good performance and
                                        professional and we get high remarks on our customer feedback.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="section-news section col-md-12">
                        <div class="container">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="news-item col-md-3">
                                      <img alt="" src="{{asset('public/assets/front/images/fire-safety-icon.png')}}" style="width: 270px; height: 270px;">
                                      <div class="news-hover">
                                          <div class="hover-border hover-border-fire"><div></div></div>
                                          <div class="content">
                                              <h3 class="news-title">Our Mission</h3>
                                              <p class="news-description" style="font-size: 12px!important;"> Providers of exceptional
                                                  end to end specialized engineering solutions
                                                  across MEEA region
                                          </div>
                                      </div>
                                  </div>
                                  <div class="news-item col-md-3">
                                      <img alt="" src="{{asset('public/assets/front/images/security-elv-icon.jpg')}}" style="width: 270px; height: 270px;">
                                      <div class="news-hover">
                                          <div class="hover-border hover-border-cctv"><div></div></div>
                                          <div class="content">
                                              <h3 class="news-title">Our Vision</h3>
                                              <p class="news-description" style="font-size: 12px!important;">To render effective & Reliable
                                                  specialized engineering solutions as a collaborative and valued partner</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="news-item col-md-3">
                                      <img alt="" src="{{asset('public/assets/front/images/water_GIG-01.png')}}" style="width: 270px; height: 270px;">
                                      <div class="news-hover">
                                          <div class="hover-border hover-border-water"><div></div></div>
                                          <div class="content">
                                              <h3 class="news-title">Our Approach</h3>
                                              <p class="news-description" style="font-size: 12px!important;">Address the client's needs and offer the right
                                                  solution for their requirement. Be transparent and set
                                                  realistic goals and timelines in order to meet or hopefully
                                                  exceed the stakeholder's expectations.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="news-item col-md-3">
                                      <img alt="" src="{{asset('public/assets/front/images/facilities.png')}}" style="width: 270px; height: 270px;">
                                      <div class="news-hover">
                                          <div class="hover-border"><div></div></div>
                                          <div class="content">
                                              <h3 class="news-title">Our Values</h3>
                                              <p class="news-description" style="font-size: 12px!important;">Act with dignity and integrity when dealing with existing
                                                  and potential customers. Given that our success, comes as a natural result of effectively and
                                                  responsibly serving their interests.</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </section>
                </div>
            </section>
            <section class="section about-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-info">
                                <div class="title-hr"></div>
                                <div class="info-title">Solving Complex Engineering Challenges</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="text-display-2"><p><strong class="text-dark"></strong><br>
                                    General International Group established its operation in 1982 in Abu Dhabi,
                                    with a focus on Fire Protection Services. Shortly afterwards, the management
                                    realized the importance of having proper MEP maintenance services and expanded
                                    its operations accordingly. Years later, came the addition of the Water Treatment
                                    services to capitalize on the region’s focus on Water Treatment. Today our offices
                                    are strategically located throughout the UAE, to enable us to better serve our
                                    clients. Our product offering has expanded, yet we maintained our focus on
                                    offering specialized solutions that requires technical expertise.  Our focus is to
                                    demonstrate our engineering abilities and product range offered within the Group.
                                    We offer engineering solutions from design to installation and maintenance of Fire
                                    Protection Systems & Integrated ELV Systems, Water Treatment & Waste Water Treatment
                                    Systems and Integrated Facilities Management Systems.</p>

                                <p class="text-muted"><strong class="text-dark">Compliance Management Systems</strong><br>
                                    General International Group complies with all applicable standards and implements policies
                                    as guidance for establishing, developing, implementing, evaluating, maintaining and improving
                                    an effective and responsive compliance management system within our organization. It is our
                                    commitment to ensure that our management systems are continuously monitored and see where
                                    improvements are essentials.
                                </p>
{{--   ==================================================================================================--}}
                            <!-- Start Tabs -->
                                <div class="container my-4">
                                    <div class="row">
                                        <!-- Grid column -->
                                        <div class="col-xl-6 mb-4 mb-xl-0">
                                            <!-- Section: Live preview -->
                                            <section>
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link active" id="corporate-tab" data-toggle="tab" href="#corporate" role="tab" aria-controls="corporate" aria-selected="true">Corporate Compliance</a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" id="quality-tab" data-toggle="tab" href="#quality" role="tab" aria-controls="quality" aria-selected="false">Quality Management</a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" id="safety-tab" data-toggle="tab" href="#safety" role="tab" aria-controls="safety" aria-selected="false">Health, Safety & Enviromental Management</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade" id="corporate" role="tabpanel" aria-labelledby="corporate-tab">
                                                        <p><strong class="text-dark">General International Group’s</strong>
                                                            corporate compliance program is designed
                                                            to detect and prevent violations of laws by the agents,
                                                            employees, officers and directors within our operations.
                                                            We are dedicated to comply with the social aspect of the society
                                                            and rights of our employees.  We put strong emphasis in complying
                                                            with our code of responsibilities under human and ethical requirements
                                                            to ensure that we comply with laws and regulations in conducting the operations.
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane fade" id="quality" role="tabpanel" aria-labelledby="quality-tab">
                                                            <p>General International Group aims to enhance customer satisfaction
                                                                through the effective application of the quality management system,
                                                                including processes for improvement of the system and the assurance
                                                                of conformity to customer and applicable statutory and regulatory requirements.
                                                                We are committed to provide quality service and products and an
                                                                innovative solution that will satisfy the requirements of our
                                                                customers in conducting works related to Fire Protection & Integrated ELV Systems,
                                                                Water Treatment services and Facilities Management. We will continuously
                                                                improve the effectiveness of our management systems through regular audits,
                                                                continuous training, identifying the risk and re-evaluating our work flows.
                                                            </p>
                                                    </div>
                                                    <div class="tab-pane fade" id="safety" role="tabpanel" aria-labelledby="safety-tab">
                                                        <p><strong class="text-dark">General International Group</strong>
                                                            complies with all applicable laws, regulations and other regulatory requirements
                                                            in providing services and resources necessary for operations and strictly identifying
                                                            potential risks on the environment to ensure that all staff is implementing a paramount
                                                            of safety while conducting their work at all time.  Our goal is to protect our employees,
                                                            the public, the environment and to comply with applicable laws and protect our reputation.
                                                            Part of our general objectives is prevention of incidents or accidents that might result from
                                                            abnormal operating conditions on the one hand and reduction of adverse effects that result from
                                                            normal operating conditions on the other hand.  In addition, we will comply, eliminate, minimize
                                                            and control pollution in all aspects and ensure proper risk identification, monitoring and control
                                                            are in place in order to eliminate, reduce or isolate associated risks on the environment for
                                                            continuous safety of our employees and all our stakeholders.
                                                        </p>
                                                    </div>
                                                </div>

                                            </section>
                                            <!-- Section: Live preview -->
                                        </div>
                                        <!-- Grid column -->
                                    </div>
                                </div>
{{--   ==================================================================================================--}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-info">
                                <div class="title-hr"></div>
                                <div class="info-title">Team of Engineers from Diverse Background</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>With respect to our employees, we promote, empower our staff in the decision making processes,
                                and encourage continuous learning and creativity. Imagine if a team of 300 experts were to put
                                together to work for 8 hours a day, 5 days a week, the combined workforce man hours in 1 year
                                shall translate into 65 years of lifespan of a normal human being. 300+ industry experts from
                                engineering,technical, support and commercial background.</p>
                            <div class="row-team row">
                                <div class="col-team col-xs-6 col-md-4">
                                    <div class="team-profile">
                                        <img alt="" src="{{asset('public/assets/front/images/about-us.jpeg')}}" style="height: 270px; width: 260px;">
                                        <div class="team-hover">
                                            <div class="team-content">
                                                <div class="team-name">
                                                    <h6>Solving Complex Engineering Challenges</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-team col-xs-6 col-md-4">
                                    <div class="team-profile">
                                        <img alt="" src="{{asset('public/assets/front/images/ab-6.jpg')}}" style="height: 270px; width: 260px;">
                                        <div class="team-hover">
                                            <div class="team-content">
                                                <div class="team-name">
                                                    <h6>Compliance Management Systems</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-team col-xs-6 col-md-4">
                                    <div class="team-profile">
                                        <img alt="" src="{{asset('public/assets/front/images/ab-7.jpg')}}" style="height: 270px; width: 260px;">
                                        <div class="team-hover">
                                            <div class="team-content">
                                                <div class="team-name">
                                                    <h6>Team of Engineers from Diverse Background</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <hr>
@stop

