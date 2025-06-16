@extends('layouts.app')
@section('content')
    @include('layouts.partials.nav')
    @include('layouts.partials.bredcrumbs')
    <section class="property_details pt_120 xs_pt_100 pb_105 xs_pb_85">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class=" col-xl-12">
                    <div class="property_details_slider">
                        <div class="row slider-for2">
                            <div class="col-12">
                                <div class="property_details_large_img">
                                    <img src="assets/images/property_details_img_1.jpg" alt="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="property_details_large_img">
                                    <img src="assets/images/property_details_img_2.jpg" alt="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="property_details_large_img">
                                    <img src="assets/images/property_details_img_3.jpg" alt="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="property_details_large_img">
                                    <img src="assets/images/property_details_img_4.jpg" alt="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="property_details_large_img">
                                    <img src="assets/images/property_details_img_3.jpg" alt="img-fluid w-100">
                                </div>
                            </div>
                        </div>

                        <div class="row slider-nav2">
                            <div class="col-xl-4">
                                <div class="property_details_small_img">
                                    <img src="assets/images/property_details_img_1.jpg" alt="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="property_details_small_img">
                                    <img src="assets/images/property_details_img_2.jpg" alt="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="property_details_small_img">
                                    <img src="assets/images/property_details_img_3.jpg" alt="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="property_details_small_img">
                                    <img src="assets/images/property_details_img_4.jpg" alt="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="property_details_small_img">
                                    <img src="assets/images/property_details_img_3.jpg" alt="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt_50">
                <div class="col-lg-8">
                    <div class="single_property_details mt_25 wow fadeInUp" data-wow-duration="1.5s">
                        <h4>Description</h4>
                        <p class=" property_dtls_decription">Découvrez cette charmante maison située dans un environnement
                            paisible, idéale pour une famille à la recherche de confort et de fonctionnalité.

                            Édifiée sur un terrain bien aménagé, cette propriété offre de beaux volumes avec un salon
                            lumineux, une cuisine moderne entièrement équipée, plusieurs chambres spacieuses, des salles de
                            bain élégantes, ainsi qu’un espace extérieur agréable parfait pour vos moments de détente ou de
                            convivialité.

                            Bénéficiant d'une construction solide et de finitions soignées, cette maison allie confort
                            moderne et cadre de vie serein. Elle se trouve à proximité des écoles, commerces et axes
                            routiers, tout en offrant un havre de paix à ses occupants.

                            Un bien rare à visiter sans tarder.</p>

                    </div>
                    <div class="single_property_details mt_25 wow fadeInUp" data-wow-duration="1.5s">
                        <h4>Details</h4>
                        <ul class=" property_apartment_details d-flex flex-wrap mt_10">
                            <li>
                                <p>ID:<span>F257481</span></p>
                            </li>
                            <li>
                                <p>Chambres:<span>5</span></p>
                            </li>
                            <li>
                                <p>Status:<span>En vente</span></p>
                            </li>
                            <li>
                                <p>Garages:<span>2</span></p>
                            </li>
                            <li>
                                <p>Douches:<span>2</span></p>
                            </li>
                        </ul>
                        {{-- <div class="property_facilities">
                            <h4>Facilities</h4>
                            <ul class="d-flex flex-wrap">
                                <li>Air Cond</li>
                                <li>balcony</li>
                                <li>Internet</li>
                                <li>lawn</li>
                                <li>Dishwasher</li>
                                <li>bedding</li>
                                <li>Cable TV</li>
                                <li>gym</li>
                                <li>Parking</li>
                                <li>pool</li>
                                <li>Fridge</li>
                                <li>Swimming Pool</li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="single_property_details mt_25 wow fadeInUp" data-wow-duration="1.5s">
                        <h4> Plans</h4>
                        <div class=" apertment_layout">
                            <img src="assets/images/layout.jpg" alt="img" class="img-fluid w-100">
                        </div>
                    </div>
                    {{-- <div class="single_property_details mt_25 wow fadeInUp" data-wow-duration="1.5s">
                        <h4>Map Location</h4>
                        <div class=" apertment_map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.83187883983!2d90.33728804060513!3d23.780975728310533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1701892197304!5m2!1sen!2sbd"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div> --}}
                    <div class="single_property_details mt_25 wow fadeInUp" data-wow-duration="1.5s">
                        <h4>Video</h4>
                        <div class=" apertment_video">
                            <iframe src="https://www.youtube.com/embed/ec_fXMrD7Ow?si=E-z18uXLa_wbsPXg"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sticky_sidebar">
                        <div class="property_details_sidebar">
                            <h4>Planifier une visite</h4>
                            <form action="#" class="schedule_form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="schedule_input">
                                            <input type="text" placeholder="Date">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="schedule_input">
                                            <input type="text" placeholder="Heure">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="schedule_input">
                                            <input type="text" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="schedule_input">
                                            <input type="text" placeholder="Téléphonne">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="schedule_input">
                                            <input type="email" placeholder="Adresse Email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="schedule_input">
                                            <textarea rows="5" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="schedule_input">
                                            <a href="#" class="common_btn">Soumettre</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="related_property">
            <div class="container">
                <div class="row mt_115 xs_mt_95">
                    <div class="row wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" col-xl-6">
                            <div class="section_heading section_heading_left mb_25">
                                <h2>Related Properties</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row related_property_slider">
                    <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" single_property">
                            <div class="single_property_img">
                                <img src="assets/images/property_4.jpg" alt="img" class="img-fluid w-100">
                                <a class="feature_link" href="#">for sale</a>
                                <ul class="d-flex flex-wrap">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="single_property_text">
                                <div class="single_property_top">
                                    <a class='item_title ' href='property_details.html'>Stunning mansion in Reno</a>
                                    <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <span><img src="assets/images/bad.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            6 Beds
                                        </li>
                                        <li>
                                            <span><img src="assets/images/bathtab.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            4 Baths
                                        </li>
                                        <li>
                                            <span><img src="assets/images/squre.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            2500 Sq Ft
                                        </li>
                                    </ul>
                                </div>
                                <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                    <a class='read_btn' href='property_details.html'>More Details<i
                                            class="fas fa-arrow-right"></i></a>
                                    <p>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>4.5</span>
                                    </p>
                                </div>
                                <span class="property_price">$24,000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" single_property">
                            <div class="single_property_img">
                                <img src="assets/images/property_5.jpg" alt="img" class="img-fluid w-100">
                                <a class="feature_link" href="#">for rent</a>
                                <a class="feature_link feature" href="#">Featured</a>
                                <ul class="d-flex flex-wrap">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="single_property_text">
                                <div class="single_property_top">
                                    <a class='item_title' href='property_details.html'>Beautiful Condo in London</a>
                                    <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <span><img src="assets/images/bad.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            4 Beds
                                        </li>
                                        <li>
                                            <span><img src="assets/images/bathtab.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            3 Baths
                                        </li>
                                        <li>
                                            <span><img src="assets/images/squre.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            2200 Sq Ft
                                        </li>
                                    </ul>
                                </div>
                                <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                    <a class='read_btn' href='property_details.html'>More Details<i
                                            class="fas fa-arrow-right"></i></a>
                                    <p>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>4.5</span>
                                    </p>
                                </div>
                                <span class="property_price">$9,000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" single_property">
                            <div class="single_property_img">
                                <img src="assets/images/property_3.jpg" alt="img" class="img-fluid w-100">
                                <a class="feature_link" href="#">for rent</a>
                                <a class="feature_link feature" href="#">Featured</a>
                                <ul class="d-flex flex-wrap">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="single_property_text">
                                <div class="single_property_top">
                                    <a class='item_title' href='property_details.html'>South Side Garden House</a>
                                    <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <span><img src="assets/images/bad.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            5 Beds
                                        </li>
                                        <li>
                                            <span><img src="assets/images/bathtab.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            4 Baths
                                        </li>
                                        <li>
                                            <span><img src="assets/images/squre.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            2300 Sq Ft
                                        </li>
                                    </ul>
                                </div>
                                <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                    <a class='read_btn' href='property_details.html'>More Details<i
                                            class="fas fa-arrow-right"></i></a>
                                    <p>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>4.5</span>
                                    </p>
                                </div>
                                <span class="property_price">$29,000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" single_property">
                            <div class="single_property_img">
                                <img src="assets/images/property_8.jpg" alt="img" class="img-fluid w-100">
                                <a class="feature_link" href="#">for rent</a>
                                <a class="feature_link feature" href="#">Featured</a>
                                <ul class="d-flex flex-wrap">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="single_property_text">
                                <div class="single_property_top">
                                    <a class='item_title' href='property_details.html'>Beautiful Condo in London</a>
                                    <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <span><img src="assets/images/bad.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            4 Beds
                                        </li>
                                        <li>
                                            <span><img src="assets/images/bathtab.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            3 Baths
                                        </li>
                                        <li>
                                            <span><img src="assets/images/squre.png" alt="img"
                                                    class="img-fluid w-100"></span>
                                            2200 Sq Ft
                                        </li>
                                    </ul>
                                </div>
                                <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                    <a class='read_btn' href='property_details.html'>More Details<i
                                            class="fas fa-arrow-right"></i></a>
                                    <p>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>4.5</span>
                                    </p>
                                </div>
                                <span class="property_price">$9,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
@endsection
