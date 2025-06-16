@extends('layouts.app')
@section('content')
    @include('layouts.partials.nav')
    @include('layouts.partials.bredcrumbs')
    <section class="contact_area pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xxl-4 col-lg-5 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="contact_address">
                        <h4>Entrer en contact avec nous</h4>
                        <ul>
                            <li>
                                <span><img src="assets/images/location.png" alt="icon" class="img-fluid w-100"></span>
                                <div class="contact_address_text">
                                    <p>Adresse</p>
                                    <a class="item_title" href="#">Marcory Résidentiel</a>
                                </div>
                            </li>
                            <li>
                                <span><img src="assets/images/call.png" alt="icon" class="img-fluid w-100"></span>
                                <div class="contact_address_text">
                                    <p>Telephone</p>
                                    <a class="item_title" href="#">+225 0584621919</a>
                                </div>
                            </li>
                            <li>
                                <span><img src="assets/images/massage_3.png" alt="icon" class="img-fluid w-100"></span>
                                <div class="contact_address_text">
                                    <p>Email</p>
                                    <a class="item_title" href="#">leslysdemarie@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-7 col-lg-7 wow fadeInRight" data-wow-duration="1.5s">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="contact_input">
                                    <input type="text" placeholder="Votre nom">
                                    <span class="contact_input_icon">
                                        <img src="assets/images/user_icon_3.png" alt="icon" class="img-fluid w-100">
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="contact_input">
                                    <input type="email" placeholder="Your Email">
                                    <span class="contact_input_icon">
                                        <img src="assets/images/massage_4.png" alt="icon" class="img-fluid w-100">
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="contact_input">
                                    <input type="text" placeholder="Téléphone">
                                    <span class="contact_input_icon">
                                        <img src="assets/images/call_2.png" alt="icon" class="img-fluid w-100">
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="contact_input">
                                    <select class="select_2" name="state">
                                        <option value="">Selectionner un service</option>
                                        <option value="">Aménagement foncier</option>
                                        <option value="">Génie Civil</option>
                                        <option value="">Contruction</option>
                                        <option value="">Réhabitation </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact_input">
                                    <textarea rows="6" placeholder="Entrer votre message..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact_input">
                                    <button class="common_btn">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.7969041543047!2d-3.9950104000000004!3d5.2943596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebf1149e5a93%3A0x1e97c4a2433a529e!2sLES%20LYS%20DE%20MARIE!5e0!3m2!1sfr!2sci!4v1750045662141!5m2!1sfr!2sci"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
