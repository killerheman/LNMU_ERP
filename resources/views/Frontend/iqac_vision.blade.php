@extends('Frontend.includes.layout')
@section('content')
    <!-- slider starts here -->
<section id="yt_spotlight1" class="block mb30">
    <div class="container">
        <div class="row">
        <div id="slideshow" class="col-sm-12">
            <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000" data-pause="hover">
                <!-- Carousel items -->
                <div class="slickslider-items bg-style1">
                    <div class="slickslider-item item clearfix active">
                        <div class="images-slideshow"><img alt="" src="{{asset('Frontend/images/internal%20banners/banner119.jpg')}}"/></div>
                        <div class="item-content">
                            <div class="item-content-inner">
                                <h5 class="item-title" >
                                    <a href="#" style="color:#7C0000" title="" >Home</a> | <a href="#" style="color:#7C0000" title="" >IAC Vision</a>
                                </h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- slider ends here -->

    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-3 float-left col-1 pl-0 pr-0  width" id="sidebar">
                @include('Frontend.includes.sidebar.iqac_menu')
            </div>
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Vision, Objective and Strategy</h2>
                    <h3 class="display-4 font-weight-light text-center">( As defined by NAAC )</h3>
                </div>
                <section class="alterna-col col-lg-12 col-md-12 col-sm-12 ">
                    <p><strong>VISION</strong></p>

                    <p style="text-align: justify;">To promote quality culture as the prime concern of Higher Education
                        Institutions through institutionalizing and internalizing all the quality-enhancing and sustaining
                        initiatives taken with internal and external support.</p>

                    <hr>
                    <strong>Objective: The primary aim of the IQAC is</strong>
                    <p></p>

                    <ul>
                        <li>To develop a mechanism to promote conscious, consistent and catalytic action plans to improve
                            the academic and administrative performance of the institution. </li>
                        <li>To promote institutional quality enhancement and sustenance through the internalization of
                            quality culture and institutionalization of the best practices.</li>

                    </ul>
                    <hr>
                </section>
                <p><strong>Strategies:</strong></p>
                <section class="alterna-col col-lg-12 col-md-12 col-sm-12">
                    <ul>
                        <p><strong>IQAC shall evolve a mechanism and procedures for</strong></p>
                        <section class="alterna-col col-lg-12 col-md-12 col-sm-12">
                            <ul>
                                <li>a) Ensuring timely, efficient and progressive performance of academic, administrative
                                    and financial units; </li>
                                <li>b) Adoption of relevant and quality academic and research programmes;</li>
                                <li>c) Ensuring equitable access to and affordability of academic programmes for various
                                    sections of the society;</li>
                                <li>d) Optimization and integration of modern methods of teaching and learning;</li>
                                <li>e) Ensuring credible assessment and evaluation processes;</li>
                                <li>f) Ensuring the proper allocation, adequacy and maintenance of support structure and
                                    services; and </li>
                                <li>g) Sharing of research findings and networking with other institutions in India and
                                    abroad.</li>

                            </ul>




                        </section>

                    </ul>
                </section>


                <p><strong>Functions:</strong></p>
                <section class="alterna-col col-lg-12 col-md-12 col-sm-12">
                    <ul>
                        <p><strong>Some of the functions expected of the IQAC are:</strong></p>
                        <section class="alterna-col col-lg-12 col-md-12 col-sm-12">
                            <ul>
                                <li>a) Development and application of quality benchmarks;</li>
                                <li>b) Setting parameters for various academic and administrative activities of the
                                    institution;</li>
                                <li>c) Facilitating the creation of a learner-centric environment conducive to quality
                                    education and faculty development to adopt the required knowledge and technology for
                                    participatory teaching and learning process;</li>
                                <li>d) Collection and analysis of feedback from all the stakeholders on quality-related
                                    institutional processes;</li>
                                <li>e) Dissemination of information on various quality parameters to all the stakeholders;
                                </li>
                                <li>f) Organization of intra- and inter-institutional workshops and seminars on quality-
                                    related themes and promotion of quality circles;</li>
                                <li>g) Documentation of various programmes/activities leading to quality improvement</li>
                                <li>h) Acting as a nodal agency of the institution for coordinating quality-related
                                    activities, including adoption and dissemination of the best practices;</li>
                                <li>i) Development and maintenance of institutional database through MIS for the purpose of
                                    maintaining and enhancing institutional quality;</li>
                                <li>j) Periodical conduct of Academic and Administrative Audits along with their follow-up
                                    activities; and</li>
                                <li>k) Preparation and submission of the Annual Quality Assurance Report (AQAR) as per the
                                    guidelines and parameters of NAAC. </li>

                            </ul>




                        </section>



                        <br><br><br>
                        <section class="alterna-col col-lg-12 col-md-12 col-sm-12">
                            <br>
                            <p><strong>Benefits: IQAC will facilitate / contribute to</strong></p>
                            <section class="alterna-col col-lg-12 col-md-12 col-sm-12">
                                <ul>
                                    <section class="alterna-col col-lg-12 col-md-12 col-sm-12">
                                        <ul>
                                            <li>a) Ensuring clarity and focus in the institution’s march towards quality
                                                enhancement;</li>
                                            <li>b) Ensuring internalization of quality culture;</li>
                                            <li>c) Ensuring enhancement and coordination among the various units and
                                                activities of the institution and institutionalizing all good practices;
                                            </li>
                                            <li>d) Providing a sound basis for decision-making to improve institutional
                                                functioning;</li>
                                            <li>e) Acting as a dynamic system for quality changes in HEIs; and</li>
                                            <li>f) Building a sound methodology for documentation and internal
                                                communication.</li>


                                        </ul>




                                    </section>

                                </ul>
                            </section>







                        </section>
                    </ul>
                </section>
            </main>
        </div>
    </div>
@endsection
