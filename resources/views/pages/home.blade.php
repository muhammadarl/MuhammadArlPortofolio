@extends('layouts.app')
@section('content')


<!-- Jumbotron Header -->
<section class="portofolio-gede text-center">
    <img src="{{url('frontend/img/portofolio.png')}}" alt="">
</section>
<section class="about-me">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 about-me-col">
                <h2 class="about-me-subheading">About Me</h2>
                <p class="about-me-content">
                    Hello, nice to meet you! <span style="color:#810000;font-family: 'Orelega One', cursive;font-size:21px;">I'm Muhammad Syiarul</span>
                </p>
                <p class="about-me-content">
                    i'm informatic student that have a huge interest in the world of <span style="color:#810000;font-family: 'Orelega One', cursive;font-size:21px;">Design Graphic </span>
                     and <span style="color:#810000;font-family: 'Orelega One', cursive;font-size:21px;">Web Design</span
                    >
                </p>
                <p class="about-me-content">
                    And I'm a freelancer who has a desire to always
                    learn new things, projects that I always work on
                    are <span style="color:#810000;font-family: 'Orelega One', cursive;font-size:21px;">Video Editing, Web Design, Interface Design, 
                    App UI Design, UX Design And Creative Design. </span>
                </p>
                <p class="about-me-content">
                    My dream is to get involved in the <span style="color:#810000;font-family: 'Orelega One', cursive;font-size:21px;">Creative Industry</span>
                    and <span style="color:#810000;font-family: 'Orelega One', cursive;font-size:21px;">Develop</span> myself on a more <span style="color:#810000;font-family: 'Orelega One', cursive;font-size:21px;">Advanced Level.</span> I'm
                    <span style="color:#810000;font-family: 'Orelega One', cursive;font-size:21px;">Passionate</span> about what I did and I want to get
                    more <span style="color:#810000;font-family: 'Orelega One', cursive;font-size:21px;">Opportunity</span> to show people what I can do.
                </p>
            </div>
            <div class="col-sm-6">
                <img class="foto-profil" src="{{url('frontend/img/profil.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="profil-singkat">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <img style="height:800px;width:auto;" src="{{url('frontend/img/illorang.png')}}" alt="">
            </div>
            <div class="col-sm-8">
                <h1 class="heading-nama" style="font-family: 'Orelega One', cursive; font-size:69px;">Muhammad<br>Syiarul Amrullah</h1>
                <h3 class="subheading-pekerjaan" style="color:#810000;font-family: 'Orelega One', cursive;font-size:25px;">Graphic Designer - Web Designer - Programmer</h3>
                <div class="contact" style="margin-top:20px;">
                    <h2 style="color:#810000;font-family: 'Orelega One', cursive;font-size:35px;">Get In Touch</h2>
                    <p style="color:#810000;font-family: 'Comfortaa', cursive; font-size:25px;"><b>Email</b> : Syiarul45@gmail.com</p>
                    <p style="color:#810000;font-family: 'Comfortaa', cursive; font-size:25px;margin-top:-15px;"><b>All Social Media</b> : @muhamad_arl</p>
                </div>
                <div class="contact" style="margin-top:20px;">
                    <h2 style="color:#810000;font-family: 'Orelega One', cursive;font-size:35px;">Experience</h2>
                    <p style="color:#810000;font-family: 'Comfortaa', cursive; font-size:25px;"><b>(2020)</b> Part of Commision B at MPM Politeknik Pos Indonesia</p>
                    <p style="color:#810000;font-family: 'Comfortaa', cursive; font-size:25px;margin-top:-15px;"><b>(2019-2020)</b> Co Leader of Komisi Pemilihan Umum at Politeknik Pos Indonesia</p>
                </div>
                <div class="skill" style="margin-top:20px;">
                    <h2 style="color:#810000;font-family: 'Orelega One', cursive;font-size:35px;">Skill</h2>
                    <div class="row">
                        <div class="col-sm-3">
                            <p style="color:#810000;font-family: 'Comfortaa', cursive; font-size:25px;">Photoshop</p>
                            <p style="color:#810000;font-family: 'Comfortaa', cursive; font-size:25px;">Illustrator</p>
                            <p style="color:#810000;font-family: 'Comfortaa', cursive; font-size:25px;">Javascript</p>
                        </div>
                        <div class="col-sm-3"style="margin-top:8px;">
                            <div class="photoshop" style="display:inline;">
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                            </div>
                            <br> <br>
                            <div class="Illustrator" style="display:inline;">
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle checked "></span>
                            </div>
                            <br> <br>
                            <div class="javascript" style="display:inline;">
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle checked "></span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <p style="color:#810000;font-family: 'Comfortaa', cursive; font-size:25px;">Premiere</p>
                            <p style="color:#810000;font-family: 'Comfortaa', cursive; font-size:25px;">After Effect</p>
                            <p style="color:#810000;font-family: 'Comfortaa', cursive; font-size:25px;">XD</p>
                        </div>
                        <div class="col-sm-3" style="margin-top:8px;">
                        <div class="photoshop" style="display:inline;">
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                            </div>
                            <br> <br>
                            <div class="Illustrator" style="display:inline;">
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle checked "></span>
                            </div>
                            <br> <br>
                            <div class="javascript" style="display:inline;">
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle "></span>
                                <span class="fa fa-circle  "></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portofolio-kumpulan">
    <div class="container">
        <h1 class="heading-kumpulan text-center">Personal Project</h1>
        <div class="row row-kumpulan">
            <div class="col-sm-4">
                <div class="card"">
                    <img class="card-img-top" src="{{url('frontend/img/logo.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card"">
                    <img class="card-img-top" src="https://picsum.photos/id/237/200/300" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card"">
                    <img class="card-img-top" src="https://picsum.photos/id/237/200/300" alt="Card image cap">
                    <div class="card-body bg-transparent">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection