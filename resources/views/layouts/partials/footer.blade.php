<footer class="footer">
    <div class="container container_large">
        <div class="row">
            <div class="col-xl-7">
                <div class="footer_left pt_100 pb_80">
                    <div class="row justify-content-between">
                        <div class="col-xl-5 col-sm-10 col-md-4 wow fadeInLeft" data-wow-duration="2s">
                            <div class="footer_description">
                                {{-- <a class='footer_logo' href='{{ route('home') }}'>
                                    <img src="{{ asset('assets/images/logos/logo-lys.jpg') }}" alt="logo"
                                        class=" w-100">
                                </a> --}}
                                <p>Aménagement Foncier -Etudes Techniques -Génie Civil- Construction -Rénovation -
                                    Réhabilitation</p>
                                <ul class="d-flex flex-wrap">
                                    <li><a href="https://web.facebook.com/profile.php?id=61565461628917"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1.5s">
                            <div class="footer_link">
                                <h4>Navigation</h4>
                                <ul>
                                    <li><a href='{{ route('home') }}'>Accueil</a></li>
                                    <li><a href='{{ route('about') }}'>A propos</a></li>
                                    <li><a href='{{ route('propertie') }}'>Propriétés</a></li>
                                    <li><a href='{{ route('contact') }}'>Contact</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-duration="1.5s">
                <div class="footer_right">
                    <h4>Contactez-nous</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer_form_input">
                                    <input type="text" placeholder="Prénoms">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer_form_input">
                                    <input type="text" placeholder="Nom">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer_form_input">
                                    <input type="email" placeholder="Adresse email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer_form_input">
                                    <input type="text" placeholder="Numéro de téléphone">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="footer_form_input">
                                    <textarea rows="2" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button class="common_btn footer_btn">Envoyez</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_right wow fadeInUp" data-wow-duration="1.5s">
        <div class="container container_large">
            <div class="row">
                <div class="col-xl-12">
                    <div class="copyright_area d-flex flex-wrap justify-content-between">
                        <p>© {{ date('Y') }}</p>
                        <ul class="d-flex flex-wrap">
                            <li><a href='#'>Copiright Les lys de Marie</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
