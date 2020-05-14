@extends('layouts.front')
@section('content')
    <div class="content" style="margin-top: 5%;">
        <div class="container">
            <div class="filter-content-4">
                <h1 class="title-uppercase">Our Services</h1>
                <ul class="filter js-filter" style="font-size: 14px;">
                    <li class="active"><a href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".fire">Fire & Life Safety Services </a></li>
                    <li><a href="#" data-filter=".security">Security & ELV solutions</a></li>
                    <li><a href="#" data-filter=".water">Water Treatment Solutions</a></li>
                    <li><a href="#" data-filter=".facility">Facilities Management Solutions</a></li>
                </ul>
            </div>
            <div class="js-isotope">
                <div class="fire card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/se-2.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/se-2.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Fire Fighting System</div>
                        <h4 class="card-title">Active Fire Protection</h4>
                        <div class="card-text">The Fire Protection Division is one of the primary divisions of the group,
                            certified by the Civil Defense authority. We are distributors for serveral international manufacturers
                            with quality and innovative products.We offer tailored Fire Protection and Preventative solutions for
                            clients in our core markets – Public Sector, Hospitality,Commercial and Residential sectors.
                            We bring a variety of engineering expertise and decades of experience to every project. Our project managers,
                            project controllers, resident engineers and specialty inspectors have proven experience. We also draw on environmental
                            scientists and other technical specialists with years of expertise.
                            <h3>Our Solutions</h3>
                            <p>• CO2 Extinguishing System<br>

                                • Foam Extinguishing System<br>

                                • FM200 Extinguishing System<br>

                                • Inert Gas Extinguishing System<br>

                                • Water Sprinkler System<br>

                                • Dry Powder Extinguishing System<br>

                                • Wet and Dry Riser System</p>
                        </div>
                    </div>
                </div>
                <div class="fire card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/active-protection.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/active-protection.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">ACTIVE FIRE PROTECTION</div>
                        <h4 class="card-title">ACCESSORIES</h4>
                        <div class="card-text">Our Active systems are in the form of fire suppression, extinguishers,
                            sprinkler, alarm and extract ventilation.The overall aim of active systems is to extinguish
                            the fire by detecting the fire early and evacuating the building, alerting emergency services
                            at an early stage of the fire, Controlling the movement of smoke and fire. and suppressing and/or starving the fire of oxygen and fuel.
                            We offer tailored Fire Protection and Preventative solutions for clients in our core markets
                            – Public Sector, Hospitality, Commercial and Residential sectors. We bring a variety of engineering
                            expertise and decades of experience to every project. Our project managers, project controllers,
                            resident engineers and specialty inspectors have proven experience.
                            <h3>Our Solutions</h3>
                            <p>•  Conventional Fire Alarm Systems<br>

                                •  Addressable Fire Alarm Systems<br>

                                •  Stand Alone Detector<br>

                                •  Wireless Fire Alarm Systems<br>

                                •  Air Aspirating Detection<br>

                                •  Linear Heat Detection</p>
                        </div>
                    </div>
                </div>
                <div class="fire card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/facades.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/facades.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">PASSIVE FIRE PROTECTION Interiors</div>
                        <h4 class="card-title">Facades & Cladding</h4>
                        <div class="card-text">Passive systems come in the form of fire rated doors, barrier, ceilings and structural
                            fire protection.  We use fire rated partitions and doors to prevent the fire and smoke from moving from one
                            compartment to another. The overall aim of passive systems is to contain the fire by delaying the collapse of
                            the building structure,delaying the growth of the fire for both the exterior and the interior integrity of the structure.
                            We provide passive fire protection systems from an industry leading and third-party certified vendor SIDERISE. Our extensive
                            experience in architectural acoustics further compliments our range enabling us to offer complete solutions that encompass insulation,
                            integrity in terms of fire and noise control.Our technical team not only holds strong expertise in providing acoustic and fire safety
                            advice but also the practical ‘hands on’ knowledge with respect to installation.
                            <h3>Our Solutions</h3>
                            <p>•  ‘Open State’ Cavity Barriers – External Envelope<br>

                                •  Perimeter Barriers&  Firestops for Curtain Walling<br>

                                •  Mullion & Transom Inserts for Curtain Walling<br>

                                •  Acoustic Void Barriers – Facades<br>

                                •  Acoustic Barrier Overlay – Facades<br>

                                • Window Reveal Liner<br>

                                •  Linear Gap Seal – Facades<br>

                                •  NXS Firesafe Spandrel Insulation<br>

                                •  Nexus Lamella Boards – Curtain Walling<br>

                                •  Rockwool® Slabs<br>

                                •  Ancillaries<br></p>
                        </div>
                    </div>
                </div>
                <div class="fire card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/facades.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/facades.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">PASSIVE FIRE PROTECTION Facades</div>
                        <h4 class="card-title">Facades & Cladding</h4>
                        <div class="card-text">Passive systems come in the form of fire rated doors, barrier, ceilings and structural
                            fire protection.  We use fire rated partitions and doors to prevent the fire and smoke from moving from one
                            compartment to another. The overall aim of passive systems is to contain the fire by delaying the collapse of
                            the building structure,delaying the growth of the fire for both the exterior and the interior integrity of the structure.
                            We provide passive fire protection systems from an industry leading and third-party certified vendor SIDERISE. Our extensive
                            experience in architectural acoustics further compliments our range enabling us to offer complete solutions that encompass insulation,
                            integrity in terms of fire and noise control.Our technical team not only holds strong expertise in providing acoustic and fire safety
                            advice but also the practical ‘hands on’ knowledge with respect to installation.
                            <h3>Our Solutions</h3>
                            <p>•  ‘Open State’ Cavity Barriers – External Envelope<br>

                                •  Perimeter Barriers&  Firestops for Curtain Walling<br>

                                •  Mullion & Transom Inserts for Curtain Walling<br>

                                •  Acoustic Void Barriers – Facades<br>

                                •  Acoustic Barrier Overlay – Facades<br>

                                • Window Reveal Liner<br>

                                •  Linear Gap Seal – Facades<br>

                                •  NXS Firesafe Spandrel Insulation<br>

                                •  Nexus Lamella Boards – Curtain Walling<br>

                                •  Rockwool® Slabs<br>

                                •  Ancillaries<br></p>
                        </div>
                    </div>
                </div>
                <div class="security card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/elv.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/elv.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">30+ Years of expertise</div>
                        <h4 class="card-title">ELV SOLUTIONS</h4>
                        <div class="card-text">Our Security and Automation Division is one of the primary divisions of the group
                            certified by the competent authorities. We are distributors for serveral international manufacturers
                            with quality and innovative products.We deliver world class automation and advance security, surveillance
                            solutions, which are agile, connected and IOT ready by partnering with best technology vendors.
                            Our industry-leading solutions come from an unflagging dedication to provide customized solutions.
                            This unique entity caters to the growing needs of ELV market in the market. We strive to build long
                            term relationships based on mutual trust resulting from meeting and exceeding customer expectations.
                            <h3>Our Solutions</h3>
                            <p>•  Video Intercom (Indoor & Outdoor)<br>

                                •  In-Building Structured Cabling<br>

                                •  Indoor & Outdoor Fiber Optic Cabling<br>

                                •  Multi-pair Telephone Cabling<br>

                                •  Technical Room Accessories and Setting up<br>

                                •  Wireless LAN Installations<br>

                                •  Active Equipment installations
                            </p>
                        </div>
                    </div>
                </div>
                <div class="security card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/security.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/security.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Better safe than sorry</div>
                        <h4 class="card-title">SECURITY SOLUTIONS</h4>
                        <div class="card-text">Our Security and Automation Division is one of the primary divisions of the group
                            certified by the competent authorities. We are distributors for serveral international manufacturers
                            with quality and innovative products. We deliver world class automation and advance security, surveillance
                            solutions, which are agile, connected and IOT ready by partnering with best technology vendors.
                            We bring a variety of technical expertise and decades of experience to every project. Our project managers,
                            project controllers, resident engineers and specialty inspectors have proven experience. We also draw on environmental
                            scientists and other technical specialists with years of expertise.
                            <h3>Our Solutions</h3>
                            <p>•  CCTV & Video Monitoring<br>

                                •  Access Control Systems<br>

                                •  Displays and Alarm Systems<br>

                                •  Gate Barriers<br>

                                •  Bollards<br>

                                •  Road Blockers<br>

                                •  Centralized Monitoring Systems<br>

                                •  Guard Tour Systems<br>

                                •  Physical Security Information Management<br>

                                •  Video Intercom (Indoor & Outdoor)<br>

                                •  Intrusion Detection Systems
                            </p>
                        </div>
                    </div>
                </div>
                <div class="security card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/hotel.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/hotel.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Enabling Exciting Customer Experience</div>
                        <h4 class="card-title">AUTOMATION & INTEGRATION</h4>
                        <div class="card-text">At General International Group, we introduce the automation solutions that integrate with technology.
                            Our automation and control solutions for buildings and businesses let people control entire environments with the push of a button,
                            integrating systems such as A/V, lighting, shading, IT, security, BMS, and HVAC to provide greater comfort, convenience, and security.
                            All our solutions are designed and built to work together as a complete system, enabling you to monitor, manage, and control everything from one platform.
                            We bring a variety of technical expertise and decades of experience to every project. Our project managers, project controllers, resident engineers and specialty
                            inspectors have proven experience. We also draw on environmental scientists and other technical specialists with years of expertise.Deliver an exciting experience
                            for your customers and guests and increase the efficiency of your business with us.
                            <h3>Our Solutions</h3>
                            <p>•  Audio / Video<br>

                                •  Collaboration<br>

                                •  Lighting Control<br>

                                •  Shading<br>

                                •  Control Devices<br>

                                •  Systems Management<br>

                                •  Video on Demand<br>

                                •  Guest Room Management<br>

                                •  Mobile Applications<br>

                                •  Room Automation
                            </p>
                        </div>
                    </div>
                </div>
                <div class="security card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/building.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/building.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Save energy and money</div>
                        <h4 class="card-title">BUILDING MANAGEMENT SOLUTION</h4>
                        <div class="card-text">Today, buildings account for 41 percent of energy consumption worldwide, and produce a third of greenhouse
                            gas emissions. As public opinion calls for more environmental transparency and accountability from public and commercial organizations,
                            improving your buildings’ efficiency is a necessary move. But it is also a smart one, with energy accounting
                            for up to 30 percent of a building’s life-cycle cost, performance optimization is a critical step in not just
                            meeting sustainability expectations and emissions reduction targets – but a key lever to improve financial, regulatory
                            and reputation standing. Our project managers, project controllers, resident engineers and specialty inspectors have proven experience.
                            Find out more about energy efficiency, sustainable buildings and how to turn your buildings into true assets.
                            <h3>Our Solutions</h3>
                            <p>•  Building Management Systems<br>

                                •  Energy Saving Systems<br>

                                •  Building Automation<br>

                                •  Electric power control<br>

                                •  Heating, ventilation and air-conditioning (HVAC)<br>

                                •  Security and observation<br>

                                •  Access control<br>

                                •  Fire alarm systems<br>

                                •  Lifts, elevators etc<br>

                                •  Plumbing<br>

                                •  Closed-circuit television (CCTV)<br>

                                •  Other engineering systems<br>

                                •  Control Panel<br>

                                •  PA systems<br>

                                •  Closed-circuit television (CCTV)<br>

                                •  Alarm Monitor<br>

                                •  Security Automation
                            </p>
                        </div>
                    </div>
                </div>
                <div class="water card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/plants.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/plants.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Clean Water Is Key For Green Initiative. We are the Experts at Clean Water Subjects.</div>
                        <h4 class="card-title">WATER TREATMENT PLANTS</h4>
                        <div class="card-text">The decision to enter this line of business was based on the management’s vision that providing
                            quality water will become of high demand over time particularly given our geographical location.
                            Our experience in Water Treatment spawns from our initial involvement in providing solutions for various
                            facilities requiring Water Treatment Chiller for their systems. The division has since grown to provide various
                            solutions to end users & traders such as Filtration Plants, Waste Water Treatment Plants, Recycling Plants & Desalination Plants.
                            <h3>Our Solutions</h3>
                            <p>•GREY WATER RECYCLING<br>

                                • CAR WASH RECYCLING<br>

                                •WASTE WATER TREATMENT<br>

                                • REVERSE OSMOSIS / DESALINATION
                            </p>
                        </div>
                    </div>
                </div>
                <div class="water card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/checmicals.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/chemicals.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Water chemicals for industrial and commercial use.</div>
                        <h4 class="card-title">WATER TREATMENT CHEMICALS</h4>
                        <div class="card-text">We deliver and distribute high performance chemical treatment products and specialty additives that are used
                            successfully around the world in many of the most demanding commercial, municipal and industrial process environments where they
                            help to improve productivity, optimize performance and reduce equipment life-cycle costs.
                            Our full range of scientifically formulated water additives and chemical treatment products includes high performance water treatment
                            chemicals for steam boilers, cooling water systems, cooling towers and closed circuits; wastewater and effluent treatment chemicals,
                            high performance industrial chemicals, reverse osmosis membrane products, eco-friendly biological formulations, advanced polymers and much more.
                            For further details on any of our water treatment products simply connect with our team.
                            <h3>Our Solutions</h3>
                            <p>
                                •  Chemical for Chillers<br>

                                •  Chemicals for Cooling Towers<br>

                                •  Chemicals for Steam Boilers<br>

                                •  Chemicals for desalination plants<br>

                                •  Chemicals for Swimming Pools
                            </p>
                        </div>
                    </div>
                </div>
                <div class="water card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/equip.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/equip.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Water needs to flow and contained</div>
                        <h4 class="card-title">COMPONENTS & EQUIPMENT</h4>
                        <div class="card-text">The decision to enter this line of business was based on the management’s vision that
                            providing quality water will become of high demand over time particularly given our geographical location.
                            Our experience in Water Treatment spawns from our initial involvement in providing solutions for various facilities.
                            We distribute various components and equipment from well reputed manufacturers and suppliers to meet the demand of our
                            customers’ projects and requirements.
                            We have earned a great reputation  due to our commitment to consistently provide our customers with prompt, courteous
                            service and the highest quality products. We represent Clack in the region, they are the  leading Wisconsin based  blow
                            molding and water treatment products. They  manufacture high quality control valves and blow molded plastics.
                            <h3>Our Solutions</h3>
                            <p>
                                •  Filter Vessel – (Park Pentair – Model)<br>

                                •   Filter Controller – Clack Valves<br>

                                •   Chemical Dosing & Instrumentation<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="water card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/filter.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/filter.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Keep water clean</div>
                        <h4 class="card-title">WATER FILTRATION SYSTEMS</h4>
                        <div class="card-text">Water filtration and purification technology serves industrial,
                            residential, commercial, and municipal customers.Our team delivers products  and solutions
                            to facilitate pure, filtered water on demand for critical functions ranging from food service
                            to aquaculture. Our capabilities include making safe drinking water more accessible, treating
                            and purifying water for reuse, and desalination. We have partnered with trusted brands to offer a
                            comprehensive line of compatible water filtration and purification products including pumps, filters,
                            membranes, housings, valves, meters, and controls.<br>
                            Our range is an American manufactory creates a seamless polyethylene
                            shell that is wound continuously with fiberglass roving and sealed with
                            epoxy resin. This process results in a corrosion-resistant, leak-free vessel.
                            These equipments are used to produce a tank that offers outstanding performance and durability.
                            Composite Pressure Vessels are used for large commercial and industrial applications such as FILTRATION.<br>
                            Filtration systems are classified into the followings:<br>
                            Sand median Filter (rough filtration).<br>
                            Glass median Filters (fine filtration).<br>
                            Cartridge Filters (Fine filtration)<br>
                            Multi Median Filter (Odour + Colour + Taste filtration).<br>
                            Note that all types are available in both horizontal and vertical shapes depending on application.
                            An addition, automatic and manual heads are adapted as well upon site requirement.
                            While backwashing is the cleaning mechanism of such filters.
                            <h3>Our Solutions</h3>
                            <p>
                                •  Domestic Filter<br>

                                •  Sand Filter<br>

                                •  Multimedia Filter<br>

                                •  Activated Filter<br>

                                •  Water Softener<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="water card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/pool.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/pool.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">We keep people safe while swimming</div>
                        <h4 class="card-title">POOL MAINTENANCE SERVICES</h4>
                        <div class="card-text">The decision to enter this line of business was based on the management’s vision that providing
                            quality water will become of high demand over time particularly given our geographical location. Our experience in Water
                            Treatment spawns from our initial involvement in providing solutions for various facilities requiring Water Treatment Chiller
                            for their systems. The division has since grown to provide various solutions to end users & traders such as Filtration Plants,
                            Waste Water Treatment Plants, Recycling Plants & Desalination Plants.<br>
                            As for Pool maintenance and service:<br>
                            Our service is literally incentive, as we do pay attention to our client swimming pool and related electrical and electromechanical components.<br>
                            The typical application of each swimming pool is consisting of:<br>
                            Swimming pool pumps.<br>
                            Filtration vessels.<br>
                            Circulation piping system and network.<br>
                            Electrical equipments (Underwater lights + Connection box + Cables + Insulation material + Cascade transformer).<br>
                            Pool Side equipments ( Ladders + Ladder Grip + Handrails + shower kit….ets).<br>
                            Pool Cleaning equipments (Leaf skimmer + Brushes + floating hoses ….ets).<br>
                            Chemical Products ( Chlorine + Flocculants + pH stabilizer + Algaecide).<br>
                            Dosing System.<br>
                            UV Disinfection units.<br>
                            Pool Lining ( All type of profiles).<br>
                            Tiles.<br>
                            Temperature control units ( cooling & heating Chillers + Heat exchangers).<br>
                            Features ( Jacuzzi + Sauna + Steam Rooms).<br>
                            Its obligatory to maintain all related components for durability and functionality
                            of the swimming pool to avoid unnecessary accidental injuries while, during or after using.
                            <h3>Our Solutions</h3>
                            <p>
                                •  DOSING SYSTEMS & INSTRUMENTATION<br>

                                •  FILTERATION & MEDIA<br>

                                •  STERILIZATION<br>

                                •  UV<br>

                                •  COPPER SILVER IONIZAITON
                            </p>
                        </div>
                    </div>
                </div>
                <div class="facility card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/facility.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/facility.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Building Confidence Based on a Foundation of Trust.</div>
                        <h4 class="card-title">FACILITIES MANAGEMENT SERVICES</h4>
                        <div class="card-text">The Facilities Maintenance Division came as a realization for the need to focus on complete
                            maintenance works (Electrical, HVAC, Mechanical & Civil) given the growing number of Towers & Home owners in the Emirates,
                            and the lack of professional organizations with a qualified team of engineers and technicians to handle complex repair issues.
                            Works in Ventilation, Air Condition and Cooling systems was launched in 1989 in GENINT. It is considered as one of the primary lines
                            of the activity that falls under our Electro-Mechanical Division. From there, spawned our engineering capabilities on the Plumbing systems
                            followed afterwards by the development of our Electrical team. Our key strength stems from the fact that we can provide all the necessary MEP
                            services along with servicing the key specialized services IN HOUSE. Thus, providing a holistic / turnkey approach for our customers.
                            <h3>Our Solutions</h3>
                            <p>
                                •  MANAGEMENT<br>

                                •  CAFM,<br>

                                •   ASSET TAGGING,<br>

                                •   LABELING<br>

                                •    BAR CODING<br>

                                •    ENERGY SAVING
                            </p>
                        </div>
                    </div>
                </div>
                <div class="facility card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/electrical.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/electrical.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Delivering results with quality in a short time</div>
                        <h4 class="card-title">ELECTRICAL SYSTEMS</h4>
                        <div class="card-text">Our qualified & experienced MEP staff meet
                            s the standard conditions in providing supply, installation and maintenance work for the following systems.
                            The Facilities Maintenance Division came as a realization for the need to focus on complete maintenance works
                            (Electrical, HVAC, Mechanical & Civil) given the growing number of Towers & Home owners in the Emirates, and the lack
                            of professional organizations with a qualified team of engineers and technicians to handle complex repair issues.It is
                            considered as one of the primary lines of activity that falls under our Electro-Mechanical Division. From there, spawned our
                            engineering capabilities on the Plumbing systems followed afterwards by the development of our Electrical team.
                            <h3>Our Solutions</h3>
                            <p>
                                •  Energy saving solutions<br>

                                •  Capacitor bank<br>

                                •  Tranformer<br>

                                •  LV Panles<br>

                                •  Electrical DBS<br>

                                •  Switch gear<br>

                                •  Generator<br>

                                •  Electrical installation<br>

                                •  Lighting and lighting control<br>

                                •  Lighting protection<br>

                                •  Control panels<br>

                                •  Soft starter<br>

                                •  Frequency convertor<br>

                                •  VFD control<br>

                                •  MCC<br>

                                •  Lighting control<br>

                                •  UPS<br>

                                •  CCTV<br>

                                •  Puplic adress system<br>

                                •  Gate barriers<br>

                                •  Sliding doors<br>

                                •  Dish and satellite system<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="facility card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/soft.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/soft.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Building Confidence Based on a Foundation of Trust.</div>
                        <h4 class="card-title">SOFT SERVICES</h4>
                        <div class="card-text">The facilities management department has responsibilities for the day-to-day running of the building,
                            these tasks may be outsourced or carried out by directly employed staff. This is a policy issue, but due to the immediacy of
                            the response required in many of the activities involved, the facilities manager will often require daily reports or an escalation procedure.
                            Some issues require more than just periodic maintenance, for example those that can stop or hamper the productivity of the business or that
                            have safety implications. Many of these are managed by the facilities management “help desk” that staff are able to be contacted either by telephone or email.
                            The response to help desk calls are prioritized but may be as simple as too hot or too cold, lights not working, photocopier jammed, coffee spills, or vending machine problems.
                            Help desks may be used to book meeting rooms, car parking spaces and many other services, but this often depends on how the facilities department is organized.
                            Facilities may be split into two sections, often referred to as “soft” services such as reception and post room, and “hard” services, such as the mechanical,
                            fire and electrical services.
                            <h3>Our Solutions</h3>
                            <p>
                                •  CLEANING<br>

                                •  LANDSCAPING<br>

                                •  SECURITY & LIFE GUARD<br>

                                •  PEST CONTROL<br>

                                •  WASTE MANAGEMENT
                            </p>
                        </div>
                    </div>
                </div>
                <div class="facility card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/hvac.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/hvac.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Building Confidence Based on a Foundation of Trust.</div>
                        <h4 class="card-title">HVAC MAINTENACE SERVICES</h4>
                        <div class="card-text">The Facilities Maintenance Division came as a realization for the need to focus on complete maintenance works (Electrical,
                            HVAC, Mechanical & Civil) given the growing number of Towers & Home owners in the Emirates, and the lack off professional organizations with a
                            qualified team of engineers and technicians to handle complex repair issues.
                            Works in Ventilation, Air Condition and Cooling systems was launched in 1989 in GENINT.
                            It is considered as one of the primary lines of activity that falls under our Electro-Mechanical Division. From there,
                            spawned our engineering capabilities on the Plumbing systems followed afterwards by the development of
                            our Electrical team.
                            Our key strength stems from the fact that we can provide all the necessary MEP services along with servicing the key specialized services IN HOUSE.
                            Thus, providing a holistic / turnkey approach for our customers.
                            <h3>Our Solutions</h3>
                            <p>
                                •  Maintenance of HVAC Systems<br>

                                •  Water chillers<br>

                                •  Air cooled chillers<br>

                                •  Air handling units<br>

                                •  Fan coil units<br>

                                •  Package units<br>

                                •  Split units<br>

                                •  Air curtains<br>

                                •  Ventilation and Extract fans<br>

                                •  Duct work<br>

                                •  All type of HVAC dampers<br>

                                •  BMS<br>

                                •  CCU<br>

                                •  Cooling towers<br>

                                •  Cold stores<br>

                                •  Mist cooling system<br>

                                •  Terminal units
                            </p>
                        </div>
                    </div>
                </div>
                <div class="facility card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/civil.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/civil.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Use us to maintain your operations</div>
                        <h4 class="card-title">CIVIL & MINOR ANCILLARY MAINTENANCE SERVICES</h4>
                        <div class="card-text">The Facilities Maintenance Division came as a realization for the need to focus on complete maintenance works
                            (Electrical, HVAC, Mechanical & Civil) given the growing number of Towers & Home owners in the Emirates, and the lack off professional
                            organizations with a qualified team of engineers and technicians to handle complex repair issues.
                            Works in Ventilation, Air Condition and Cooling systems was launched in 1989 in GENINT. It is considered as one of the primary lines of
                            activity that falls under our Electro-Mechanical Division. From there, spawned our engineering capabilities on the Plumbing systems followed afterwards by the development of
                            our Electrical team.
                            Our key strength stems from the fact that we can provide all the necessary MEP services along with servicing the key specialized services IN HOUSE.
                            Thus, providing a holistic / turnkey approach for our customers.
                            <h3>Our Solutions</h3>
                            <p>
                                •  Mechanical system<br>

                                •  Air compressor<br>

                                •  Air dryer<br>

                                •  Motoring air<br>

                                •  Cranes<br>

                                •  Teleplatform<br>

                                •  All type of pumps<br>

                                •  Water tank<br>

                                •  Pressure vessel<br>

                                •  Hanger door<br>

                                •  Shutter door<br>

                                •  Vacuum system<br>

                                •  Motorized doors<br>

                                •  Pneumatic doors<br>

                                •  Filtration system<br>

                                •  Laundry equipments<br>

                                •  Kitchen equipments<br>

                                •  Calorifier heater<br>

                               <strong>Civil works</strong><br>
                                • Painting work<br>

                                •   Excavation<br>

                                •   Tiles and ceramic work<br>

                                •   Mason and plastring<br>

                                •    Concrete foundations<br>

                                •     Water proofing
                            </p>
                        </div>
                    </div>
                </div>
                <div class="facility card-row js-isotope-item">
                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{asset('public/assets/front/images/plumb.jpg')}})"></div>
                    <img class="visible-sm visible-xs img-responsive" alt="" src="{{asset('public/assets/front/images/plumb.jpg')}}">
                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                        <div class="card-posted">Call us to tell you how can we help</div>
                        <h4 class="card-title">PLUMBING MAINTENANCE SERVICES</h4>
                        <div class="card-text">The Facilities Maintenance Division came as a realization for the need to focus on complete maintenance works
                            (Electrical, HVAC, Mechanical & Civil) given the growing number of Towers & Home owners in the Emirates, and the lack of professional
                            organizations with a qualified team of engineers and technicians to handle complex repair issues.
                            Works in Ventilation, Air Condition and Cooling systems was launched in 1989 in GENINT. It is considered as one of the primary lines of
                            activity that falls under our Electro-Mechanical Division. From there, spawned our engineering capabilities on the Plumbing systems followed afterwards by the development of
                            our Electrical team.
                            Our key strength stems from the fact that we can provide all the necessary MEP services along with servicing the key specialized services IN HOUSE.
                            Thus, providing a holistic / turnkey approach for our customers.
                            <h3>Our Solutions</h3>
                            <p>
                                •  Mechanical system<br>

                                •  Air compressor<br>

                                •  Air dryer<br>

                                •  Motoring air<br>

                                •  Cranes<br>

                                •  Teleplatform<br>

                                •  Access control<br>

                                •  All type of pumps<br>

                                •  Lifts, elevators etc<br>

                                •  Plumbing<br>

                                •  Closed-circuit television (CCTV)<br>

                                •  Other engineering systems<br>

                                •  Control Panel<br>

                                •  PA system<br>

                                •  Closed-circuit television (CCTV)<br>

                                •  Alarm Monitor<br>

                                •  Security Automation
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
