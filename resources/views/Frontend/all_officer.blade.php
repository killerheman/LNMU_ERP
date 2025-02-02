@extends('Frontend.includes.layout')
@section('content')
    <!-- slider starts here -->

    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom: 40px;">
        <p class="text-center">Administration</p>
    </div>
    <!-- slider ends here -->

    <div class="row" style="margin-bottom:35px;">
        <div class="container" style="display:flex; align-items:center;justify-content:center;">
               <div class="col-md-4 col-sm-12" style="width:25%">
                <div class="box2">
                    <div class="box-top">
                        Chancellor
                    </div>
                    <img src="{{ asset('Frontend/images/officers/chancellor.jpg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Shri Phagu Chauhan</h3>
                        <span class="post">governorbihar@nic.in</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="container" style="display:flex; align-items:center;justify-content:center;">

            <div class="col-md-4 col-sm-12 "style="width:25%">
                <div class="box2">
                    <div class="box-top">
                        Vice-Chancellor
                    </div>
                    <img src="{{ asset('Frontend/images/officers/vc.jpeg') }}" style="height: 300px;width:500px;" />
                    <div class="box-content">
                        <h3 class="title">Prof. Surendra Pratap Singh</h3>
                        <span class="post">06272-222463, vc@lnmu.ac.in<br /> vc-lnmu-bih@nic.in</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 "style="width:25%">
                <div class="box2">
                    <div class="box-top">
                        Pro-Vice-Chancellor
                    </div>
                    <img src="{{ asset('Frontend/images/officers/pvc.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Prof. Dolly Sinha</h3>
                        <span class="post">8544513299 & pvc@lnmu.ac.in</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row container text-center" style="margin-bottom: 40px;">
        </div>
        <div class="row" style="margin-bottom: 40px;">
            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Financial Advisor
                    </div>
                    <img src="{{ asset('Frontend/images/officers/fo.jpeg') }}"
                        style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Shri Kailash Ram</h3>
                        <span class="post">8544513256 & fa@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        The Dean, Student's Welfare
                    </div>
                    <img src="{{ asset('Frontend/images/officers/estate.png') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Vijay Kumar Yadav</h3>
                        <span class="post">9430996391 & dsw@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Proctor / Sport Officer
                    </div>
                    <img src="{{ asset('Frontend/images/officers/proctor.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Ajay Nath Jha</h3>
                        <span class="post">8544513620, 8544513271<br />
                            proctor@lnmu.ac.in, sports@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Registrar
                    </div>
                    <img src="{{ asset('Frontend/images/officers/registrar.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Mushtaque Ahmad</h3>
                        <span class="post">8544513253, registrar@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="margin-bottom: 40px;">

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Inspector of Colleges <br /> (Science,
                        Arts & Commerce) 
                    </div>
                    <img src="{{ asset('Frontend/images/officers/college_inspector.jpg') }}"
                        style="height: 258px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr.Satyan Kumar</h3>
                        <span class="post">8544513267, 8544513267, ioc_arts@lnmu.ac.in, ioc_sc@lnmu.ac.in
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Finance Officer
                    </div>
                    <img src="{{ asset('Frontend/images/officers/fo.jpeg') }}"
                        style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Shri Kailash Ram</h3>
                        <span class="post">8544513256, fo@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Co-ordinator College<br />Develpoment Council (C.C.D.C.)
                    </div>
                    <img src="{{ asset('Frontend/images/officers/ccdc.jpg') }}" style="height:280px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Mahesh Prasad Sinha</h3>
                        <span class="post">7903043012, ccdc@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        IQAC Director
                    </div>
                    <img src="{{ asset('Frontend/images/officers/iqac_director.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Md.Zeya Haider </h3>
                        <span class="post">9955038455, iqac@lnmu.ac.in, iqaclnmu@gmail.com</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="margin-bottom: 40px;">


            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Development Officer
                    </div>
                    <img src="{{ asset('Frontend/images/officers/development_officer.jpg') }}"
                        style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Surendra Kumar</h3>
                        <span class="post">9430086049, do@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Controller of Examinations
                    </div>
                    <img src="{{ asset('Frontend/images/officers/coe.jpeg') }}"
                        style="height: 280px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Anand Mohan Mishra</h3>
                        <span class="post">9470730013, coe@lnmu.ac.in, controllerofexam.lnmu@gmail.com</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Pension Officer
                    </div>
                    <img src="{{ asset('Frontend/images/officers/pension_officer.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr.Suresh Paswan</h3>
                        <span class="post">7888628545, po@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Public Information Officer/DCE - I
                    </div>
                    <img src="{{ asset('Frontend/images/officers/120.jpg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr.Naveen Kumar Singh</h3>
                        <span class="post">8544205484, pio@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="margin-bottom: 40px;">
            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Deputy Registrar–I
                    </div>
                    <img src="{{ asset('Frontend/images/officers/dr1.jpeg') }}"
                        style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Kameshwar Paswan</h3>
                        <span class="post">9334415495, dr1@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Deputy Registrar–II
                    </div>
                    <img src="{{ asset('Frontend/images/officers/home science_head.jpeg') }}"
                        style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr.Divya Rani Hansda</h3>
                        <span class="post">8544513255, dr2@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Director, Department of Commerce & Busines Administration
                    </div>
                    <img src="{{ asset('Frontend/images/officers/business_administration.jpeg') }}" style="height: 280px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr.Ajit Kumar Singh</h3>
                        <span class="post">9430897379, dmba@lnmu.ac.in, mbalnmu@gmail.com</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Co-ordinator, Department of Bio-technology
                    </div>
                    <img src="{{ asset('Frontend/images/officers/botany_head.jpeg') }}" style="height: 280px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Sahnaz Jamil</h3>
                        <span class="post">8544513309, id-dbiotech@lnmu.ac.in</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 40px;">

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        NSS Co-ordinator-I
                    </div>
                    <img src="{{ asset('Frontend/images/officers/nss_binod baitha.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title"> Dr.Binod Baitha</h3>
                        <span class="post">8544513268, nss@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        NSS Co-ordinator -II<br />Prof-In-charge University Press
                    </div>
                    <img src="{{ asset('Frontend/images/officers/nss_anand gupta.jpeg') }}" style="height: 278px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Anand Prakash Gupta</h3>
                        <span class="post">8544513269, 8544513269</span>
                        <span class="post"> nss2@lnmu.ac.in, press@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Estate Officer
                    </div>
                    <img src="{{ asset('Frontend/images/officers/estate.png') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Vijay Kumar Yadav</h3>
                        <span class="post">8444513272, id-eso@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Director, Institute of Foreign Language
                    </div>
                    <img src="{{ asset('Frontend/images/officers/foreign_language.jpg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Punita Jha</h3>
                        <span class="post">8544513286, difl@lnmu.ac.in</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 40px;">
            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Law Officer
                    </div>
                    <img src="{{ asset('Frontend/images/officers/law_officer.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Sony Singh</h3>
                        <span class="post">7007338762, lo@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Medical Officer
                    </div>
                    <img src="{{ asset('Frontend/images/officers/medical_officer.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Gitendra Thakur</h3>
                        <span class="post">8544513275, medical@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Prof.-In-charge (Central Library)
                    </div>
                    <img src="{{ asset('Frontend/images/officers/library_director.jpeg') }}"
                        style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr.Daman Kumar Jha</h3>
                        <span class="post">7004760408, library@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Director, Institute of Gerontology and Geriatrics
                    </div>
                    <img src="{{ asset('Frontend/images/officers/institute of_gerontology and geriatrics.jpeg') }}" style="height: 278px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr.Shishir Kumar Verma</h3>
                        <span class="post">9431066991</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="margin-bottom: 40px;">
            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        University Engineer
                    </div>
                    <img src="{{ asset('Frontend/images/officers/university_engineer.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Er. Krishna Kumar Sinha </h3>
                        <span class="post">8544513274, kksinha.765@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Director, Directorate of Distance Education
                    </div>
                    <img src="{{ asset('Frontend/images/officers/distance_education.jpeg') }}" style="height: 278px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Ashok kumar Mehta</h3>
                        <span class="post"> 943082794, dde@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Director, Women's Institute of Technology
                    </div>
                    <img src="{{ asset('Frontend/images/officers/wit_director.jpeg') }}" style="height: 278px;width:500px;">
                    <div class="box-content">
                        <h3 class="title"> Dr. B. S. Jha</h3>
                        <span class="post">8340379501, directorwit@yahoo.co.in</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Director, Centre of
                        Advance Research in Nano
                        Science and Technology
                    </div>
                    <img src="{{ asset('Frontend/images/officers/nano science_and technology.jpeg') }}" style="height: 280px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Prem Mohan Mishra</h3>
                        <span class="post">9431691686</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 40px;">

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Director M.K.S.Institute Science and Research Library(Raj Library)/ Director,Institute of Library &
                        Information Science
                    </div>
                    <img src="{{ asset('Frontend/images/officers/central_library.jpg') }}"
                        style="height: 256px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Daman Kumar jha</h3>
                        <span class="post">7004760408, dlisc@lnmu.ac.in</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
