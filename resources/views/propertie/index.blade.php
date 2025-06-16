@extends('layouts.app')
@section('content')
    @include('layouts.partials.nav')
    @include('layouts.partials.bredcrumbs')

    <section class="property_list_view pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-7 order-2 order-xl-0">
                    <div class="property_sidebar sticky_sidebar">
                        <div class="sidebar_search sidebar_wizerd">
                            <h3>Recherche</h3>
                            <form action="#">
                                <input type="text" placeholder="Rechercher">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Type</h3>
                            <select class="select_2" name="state">
                                <option value="">Selectionner le type</option>
                                <option value="">Vente</option>
                                <option value="">Location</option>
                            </select>
                        </div>
                        <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Location</h3>
                            <select class="select_2" name="state">
                                <option value="">Selectionner la ville</option>
                                <option value="">Bassam</option>
                                <option value="">Abidjan</option>
                            </select>
                        </div>

                        {{-- <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Price</h3>
                            <select class="select_2" name="state">
                                <option value="">Select Price</option>
                                <option value="">$1000 to $5000</option>
                                <option value="">$6000 to $10000</option>
                                <option value="">$11000 to $15000</option>
                                <option value="">$16000 to $20000</option>
                            </select>
                        </div> --}}

                    </div>
                </div>
                {{-- Liste des resultats de recherche --}}
                <div class="col-xl-8 property_sm_margin">
                    <div class="property_list_item wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" row">
                            <div class="col-lg-6 col-md-5">
                                <div class="single_property_img">
                                    <img src="{{ asset('assets/images/maisons/villa4.jpg') }}" alt="img"
                                        class="img-fluid w-100">
                                    <a class="feature_link" href="#">Vente</a>
                                    {{-- <a class="feature_link feature" href="#">Featured</a> --}}

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class='item_title' href='{{ route('propertie.show') }}'>Villa 151</a>
                                        <p><i class="fas fa-map-marker-alt"></i>Bassam nouveau goudron</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                8 chambres
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                3 douches
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                2400 Km <sup>2</sup>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class='read_btn' href='{{ route('propertie.show') }}'>Plus de détails<i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-7 order-2 order-xl-0">
                    <div class="property_sidebar sticky_sidebar">
                        <div class="sidebar_search sidebar_wizerd">
                            <h3>Recherche</h3>
                            <form action="#">
                                <input type="text" placeholder="Rechercher">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Type</h3>
                            <select class="select_2" name="state">
                                <option value="">Selectionner le type</option>
                                <option value="">Vente</option>
                                <option value="">Location</option>
                            </select>
                        </div>
                        <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Location</h3>
                            <select class="select_2" name="state">
                                <option value="">Selectionner la ville</option>
                                <option value="">Bassam</option>
                                <option value="">Abidjan</option>
                            </select>
                        </div>

                        {{-- <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Price</h3>
                            <select class="select_2" name="state">
                                <option value="">Select Price</option>
                                <option value="">$1000 to $5000</option>
                                <option value="">$6000 to $10000</option>
                                <option value="">$11000 to $15000</option>
                                <option value="">$16000 to $20000</option>
                            </select>
                        </div> --}}

                    </div>
                </div>
                {{-- Liste des resultats de recherche --}}
                <div class="col-xl-8 property_sm_margin">
                    <div class="property_list_item wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" row">
                            <div class="col-lg-6 col-md-5">
                                <div class="single_property_img">
                                    <img src="{{ asset('assets/images/maisons/villa5.jpg') }}" alt="img"
                                        class="img-fluid w-100">
                                    {{-- <a class="feature_link" href="#">Vente</a> --}}
                                    <a class="feature_link feature" href="#">Location</a>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class='item_title' href='{{ route('propertie.show') }}'>Villa 152</a>
                                        <p><i class="fas fa-map-marker-alt"></i>Bassam nouveau goudron</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                8 chambres
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                3 douches
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                2400 Km <sup>2</sup>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class='read_btn' href='{{ route('propertie.show') }}'>Plus de détails<i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-7 order-2 order-xl-0">
                    <div class="property_sidebar sticky_sidebar">
                        <div class="sidebar_search sidebar_wizerd">
                            <h3>Recherche</h3>
                            <form action="#">
                                <input type="text" placeholder="Rechercher">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Type</h3>
                            <select class="select_2" name="state">
                                <option value="">Selectionner le type</option>
                                <option value="">Vente</option>
                                <option value="">Location</option>
                            </select>
                        </div>
                        <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Location</h3>
                            <select class="select_2" name="state">
                                <option value="">Selectionner la ville</option>
                                <option value="">Bassam</option>
                                <option value="">Abidjan</option>
                            </select>
                        </div>

                        {{-- <div class="sidebar_dropdown sidebar_wizerd">
                            <h3>Price</h3>
                            <select class="select_2" name="state">
                                <option value="">Select Price</option>
                                <option value="">$1000 to $5000</option>
                                <option value="">$6000 to $10000</option>
                                <option value="">$11000 to $15000</option>
                                <option value="">$16000 to $20000</option>
                            </select>
                        </div> --}}

                    </div>
                </div>
                {{-- Liste des resultats de recherche --}}
                <div class="col-xl-8 property_sm_margin">
                    <div class="property_list_item wow fadeInUp" data-wow-duration="1.5s">
                        <div class=" row">
                            <div class="col-lg-6 col-md-5">
                                <div class="single_property_img">
                                    <img src="{{ asset('assets/images/maisons/villa7.jpg') }}" alt="img"
                                        class="img-fluid w-100">
                                    <a class="feature_link" href="#">Vente</a>
                                    {{-- <a class="feature_link feature" href="#">Location</a> --}}

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class='item_title' href='{{ route('propertie.show') }}'>Villa 156</a>
                                        <p><i class="fas fa-map-marker-alt"></i>Bassam nouveau goudron</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                8 chambres
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                3 douches
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100"></span>
                                                2400 Km <sup>2</sup>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class='read_btn' href='{{ route('propertie.show') }}'>Plus de détails<i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
