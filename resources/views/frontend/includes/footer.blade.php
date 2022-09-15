<div class="footer color-it" id="footer">
    <div class="container">
        <footer class="pt-3 pb-0 py-md-4">
            <div class="row">
                <div class="col-md-4 col-12 text-center text-md-left align-self-center pb-2">
                    <img class="logo-style" src="{{ asset('img/vagalogo.png') }}" alt="">
                    <!-- <small class="d-block mb-3 text-muted">© 2017-2019</small> -->
                </div>
                <div class="col-md-5 d-none d-md-block pt-3">
                    <!-- <h5 class="footer-title">Experiences</h5> -->
                    <ul class="list-unstyled text-small footer-ul">
                        <li><a class="yellow" href="{{ route('vagafam') }}">Vagafam</a></li>
                        <li><a href="http://blog.vagabondexperiences.com/">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>     
                        <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                        <!-- <li><a href="">Privacy Policy</a></li> -->
                    </ul>
                </div>
                <div class="col-md-3 d-none d-md-block pt-3">
                    <!-- <h5 class="footer-title">Extras</h5> -->
                    <ul class="list-unstyled text-small footer-ul">
                        <li><a target="_blank" href="https://www.facebook.com/vagabondexperiences">Facebook</a></li>
                        <li><a target="_blank" href="https://www.instagram.com/vagabondexperiences">Instagram</a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UC0witQA0PjvH8ZCf2FLqJsg">Youtube</a></li>
                    </ul>
                </div>
                <div class="col-4 d-block d-md-none">
                    <ul class="list-unstyled text-small footer-ul text-left">
                        <li><a target="_blank" href="https://www.facebook.com/vagabondexperiences">Facebook</a></li>
                        <li><a class="yellow" href="{{ route('vagafam') }}">Vagafam</a></li>
                    </ul>
                </div>
                <div class="col-4 d-block d-md-none">
                    <ul class="list-unstyled text-small footer-ul text-center">
                        <li><a target="_blank" href="https://www.instagram.com/vagabondexperiences">Instagram</a></li>
                        <li><a href="http://blog.vagabondexperiences.com/">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-4 d-block d-md-none">
                    <ul class="list-unstyled text-small footer-ul text-right">
                        <li><a target="_blank" href="https://www.youtube.com/channel/UC0witQA0PjvH8ZCf2FLqJsg">Youtube</a></li>
                        <li><a href="{{ route('terms') }}">Terms</a></li>
                        <!-- <li><a href="#">Privacy</a></li> -->
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
@if(Route::currentRouteName() == 'contact')
<div class="extra-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center justify-content-lg-end">
                <a href="http://lightbulb.co.in" target="_blank" class="credits">Designed And Developed by Lightbulb</a>
            </div>
        </div>
    </div>
</div>
@endif
