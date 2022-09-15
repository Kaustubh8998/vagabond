@extends('frontend.includes.app')

@section('title', 'About Us | The Team | Our Story')

@section('description')
Being music lovers and travelers ourself, the aim is to take people out on a journey, bond them through adventurous experiences curated by us
@endsection

@section('content')

<div>
    <div class="container-fluid p-0">
        <img src="{{ asset('/img/Intro-Bg.jpg') }}" alt="" class="banner_image">
    </div>
    
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-center category-heading">
            <h1>Our Story</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <p class="description">
                    Vagabond started out as a project by four friends with a disdain for the ordinary. The idea was simple; take people out of their comfort zones. Not like Roadies, but just enough to bond them together through beautiful and authentic experiences. Happiness, as they say, is only real when shared. And share we did. <br><br>

                    The company was founded in 2014. As fresh Bachelor of Arts degree holders, companies were lining up to hire us fine gentlemen; we’re kidding. Fueled by <strike>being absolutely broke</strike> entrepreneurial zeal, we started with small events in the city like heritage walks through Bombay’s old quarters. As musicians and travellers ourselves, we decided to marry these two loves of our lives. That is how the idea for the first Fields of Sound™ came about. Since then, it has only been onwards and upwards for us. <br><br>

                    Over the last few years, we’ve made friends like family through our journey. Our little ‘Vaga’-Fam. It’s safe to say, it’s been quite an adventure. One we would like you to join :) 
                    <br><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="team">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 order-md-12">
                <div class="category-heading">
                    <h1 >The Team</h1>
                </div>
            </div>
            <div class="col-md-2 col-4 order-md-1">
                <img class="right-side-graphic py-3" src="{{ asset('/img/Expression_3.png') }}" alt="" width='30'>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-md-4 mb-3">
                <div class="card team-card">
                    <div class="card-body row">
                        <div class="col-3 align-self-center p-0">
                            <img src="{{ asset('/img/Nihar.png') }}" alt="" width="100%">
                        </div>
                        <div class="col-9">
                            <h4 class="team-title">Nihar Nair <span>Co-Founder & Head Of Operations</span></h4>
                            <p>Our operations man; be it managing the research for the experiences or making the necessary arrangements, he is your go-to guy. Nihar is responsible for our team of experience managers. He also takes care of all our live music and sound arrangements. You can find him playing football or basketball on most evenings. Also,pretty often, where there is a cat, there is a Nihar. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-md-4 mb-3">
                <div class="card team-card">
                    <div class="card-body row">
                        <div class="col-3 align-self-center p-0">
                            <img src="{{ asset('/img/Elton.png') }}" alt="" width="100%">
                        </div>
                        <div class="col-9">
                            <h4 class="team-title">Elton Dmello <span>Co-Founder & CEO</span></h4>
                            <p>Elton handles the business and accounts for all of Vagabond. He is also the CEO. All major decisions of the company go through Elton. But, don’t you even for a minute, consider him a boring accountant. When it comes to it, Elton has set many a dance floor on fire. In some circles, he is also known as the King of Four Chords; owing to his ability to play pretty much any song using just four chords. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-md-4 mb-3">
                <div class="card team-card">
                    <div class="card-body row">
                        <div class="col-3 align-self-center p-0">
                            <img src="{{ asset('/img/Shan.png') }}" alt="" width="100%">
                        </div>
                        <div class="col-9">
                            <h4 class="team-title">Shannon Fernandes <span>Co-Founder & Head of Sales and Marketing</span></h4>
                            <p>Our in-house expert when it comes to everything from graphic design to social media to sales. Shannon dons many caps at the Vagabond office. He’s the unofficial face of Vagabond. All the cool design language on our badges, caps and other merchandise is designed by this man. He’s also a mad football goalkeeper. However, most people remember Shannon for that baritone that’s smoother than scotch. He’ll serenade you through the night and who knows, you might just fall in love. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-md-4 mb-3">
                <div class="card team-card">
                    <div class="card-body row">
                        <div class="col-3 align-self-center p-0">
                            <img src="{{ asset('/img/Jinx.png') }}" alt="" width="100%">
                        </div>
                        <div class="col-9">
                            <h4 class="team-title">Shajin ‘Jinks’ Shaji<span> Co-Founder</span></h4>
                            <p>This guy put the vagabond in Vagabond Experiences. One of the original members; Jinks is our reconnaissance expert. An excellent cook and a master of jugaad. When in the hills, he is just as much home as the mountain goats. <br><br><br><br><br></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-md-4 mb-3">
                <div class="card team-card">
                    <div class="card-body row">
                        <div class="col-3 align-self-center p-0">
                            <img src="{{ asset('/img/Md.png') }}" alt="" width="100%">
                        </div>
                        <div class="col-9">
                            <h4 class="team-title">Mariella Dsilva <span> Sales & Marketing Executive</span></h4>
                            <p>Mariella came for her first Vagabond experience in 2017. A year later, she joined the team as a social media and sales representative. With a uniquely diverse taste in music and undying loyalty for Apple products, she brings some style into the otherwise boys club that is the Vagabond office.<br><br></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-md-4 mb-3">
                <div class="card team-card">
                    <div class="card-body row">
                        <div class="col-3 align-self-center p-0">
                            <img src="{{ asset('/img/jonathan.png') }}" alt="" width="100%">
                        </div>
                        <div class="col-9">
                            <h4 class="team-title">Jonathan Kale<span> Experience Manager</span></h4>
                            <p>A friend of the boys since college days, Jonathan started off as a regular customer at the Vagabond treks. Soon enough, when the need arose, we didn’t have to look too far to find the perfect guide. Through the weekdays, Jonathan is a Sports PR Professional, but on the weekends he doubles up as our superguide. He’s also a known lover of alternative thinking games.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-md-4 mb-3">
                <div class="card team-card">
                    <div class="card-body row">
                        <div class="col-3 align-self-center p-0">
                            <img src="{{ asset('/img/Adwait.png') }}" alt="" width="100%">
                        </div>
                        <div class="col-9">
                            <h4 class="team-title">Adwait Bhattacharya <span> Experience Manager</span></h4>
                            <p>He may be an engineer by profession, but on the weekends, Adwait is the most talkative trip guide we’ve ever had. He is great with people and numbers, but at the same time, he’s also really bad with jokes and one-liners. He, like the others, was a customer, who became a friend, and is now part of the team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
	
@endsection



