<section class="banner_area" style="background: url(assets/images/banner_bg.jpg);">
    {{-- <section class="banner_area" style="background: url({{ asset('assets/images/maisons/banner.jpg') }});"> --}}
    <div class="container container_large">
        <div class="row wow fadeInUp" data-wow-duration="1.5s">
            <div class="col-xl-11 col-xxl-9">
                <div class="banner_contant">
                    <div class="banner_text">
                        <h1>Construire des maisons où l'on se sent comme chez soi - avec nous.</h1>

                    </div>
                    <div class="banner_search">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">En vente</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">En location</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <form action="#">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <label>Villes</label>
                                            <select class="select_2" name="state">
                                                <option value="">Selectionner une ville</option>
                                                <option value="">Abidjan</option>
                                                <option value="">Bassam</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Type</label>
                                            <select class="select_2" name="state">
                                                <option value="">Selectionner le type</option>
                                                <option value="">Appartment</option>
                                                <option value="">Villa</option>
                                            </select>
                                        </li>
                                        {{-- <li>
                                            <label>Prix (FCFA)</label>
                                            <select class="select_2" name="state">
                                                <option value="">Selectionner le prix</option>
                                                <option value="">1000 à 5000</option>
                                                <option value="">6000 à 10000</option>
                                                <option value="">11000 à 15000</option>
                                                <option value="">16000 à 20000</option>
                                            </select>
                                        </li> --}}
                                        <li>
                                            <input type="text" placeholder="Entrer un mot clé...">
                                        </li>
                                    </ul>
                                    <button class="common_btn banner_input_btn" type="submit">Rechercher</button>
                                    {{-- <div class="adv_search_icon adv_search_icon_1"><i class="far fa-ellipsis-v"></i>
                                    </div> --}}
                                    {{-- <div class="adv_search_area">
                                        <div class="adv_search_close adv_search_close_1"><i class="fal fa-times"></i>
                                        </div>
                                        <h3>aminities</h3>
                                        <div class="row">
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Air Conditioning
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault2">
                                                    <label class="form-check-label" for="flexCheckDefault2">
                                                        Barbeque
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault3">
                                                    <label class="form-check-label" for="flexCheckDefault3">
                                                        Dryer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault4">
                                                    <label class="form-check-label" for="flexCheckDefault4">
                                                        gym
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault5">
                                                    <label class="form-check-label" for="flexCheckDefault5">
                                                        laundry
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault6">
                                                    <label class="form-check-label" for="flexCheckDefault6">
                                                        Lawn
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault7">
                                                    <label class="form-check-label" for="flexCheckDefault7">
                                                        Microwave
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault12">
                                                    <label class="form-check-label" for="flexCheckDefault12">
                                                        Outdoor Shower
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault8">
                                                    <label class="form-check-label" for="flexCheckDefault8">
                                                        Refrigerator
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault9">
                                                    <label class="form-check-label" for="flexCheckDefault9">
                                                        Sauna
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault10">
                                                    <label class="form-check-label" for="flexCheckDefault10">
                                                        Swimming Pool
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault11">
                                                    <label class="form-check-label" for="flexCheckDefault11">
                                                        TV Cable
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt_15">
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Bedroom</option>
                                                    <option value="">01</option>
                                                    <option value="">02</option>
                                                    <option value="">03</option>
                                                    <option value="">04</option>
                                                    <option value="">05</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Barthroom</option>
                                                    <option value="">01</option>
                                                    <option value="">02</option>
                                                    <option value="">03</option>
                                                    <option value="">04</option>
                                                    <option value="">05</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Built Year</option>
                                                    <option value="">2015</option>
                                                    <option value="">2016</option>
                                                    <option value="">2017</option>
                                                    <option value="">2018</option>
                                                    <option value="">2019</option>
                                                    <option value="">2020</option>
                                                    <option value="">2021</option>
                                                    <option value="">2022</option>
                                                    <option value="">2024</option>
                                                    <option value="">2024</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">built-up Area</option>
                                                    <option value="">Adana</option>
                                                    <option value="">Ankara</option>
                                                    <option value="">Antalya</option>
                                                    <option value="">Bursa</option>
                                                    <option value="">Bodrum</option>
                                                    <option value="">Gaziantep</option>
                                                    <option value="">İstanbul</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <form action="#">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <label>Villes</label>
                                            <select class="select_2" name="state">
                                                <option value="">Selectionner le ville</option>
                                                <option value="">Bassam</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Type</label>
                                            <select class="select_2" name="state">
                                                <option value="">Selectionner le type</option>
                                                <option value="">Appartment</option>
                                                <option value="">Villa</option>
                                            </select>
                                        </li>
                                        {{-- <li>
                                            <label>Price</label>
                                            <select class="select_2" name="state">
                                                <option value="">Select Price</option>
                                                <option value="">$1000 to $5000</option>
                                                <option value="">$6000 to $10000</option>
                                                <option value="">$11000 to $15000</option>
                                                <option value="">$16000 to $20000</option>
                                            </select>
                                        </li> --}}
                                        <li>
                                            <input type="text" placeholder="Entrer un mot clé...">
                                        </li>
                                    </ul>
                                    <button class="common_btn banner_input_btn" type="submit">Rechercher</button>
                                    {{-- <div class="adv_search_icon adv_search_icon_1"><i class="far fa-ellipsis-v"></i>
                                    </div>
                                    <div class="adv_search_area">
                                        <div class="adv_search_close adv_search_close_2"><i class="fal fa-times"></i>
                                        </div>
                                        <h3>aminities</h3>
                                        <div class="row">
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault20">
                                                    <label class="form-check-label" for="flexCheckDefault20">
                                                        Air Conditioning
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault21">
                                                    <label class="form-check-label" for="flexCheckDefault21">
                                                        Barbeque
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault22">
                                                    <label class="form-check-label" for="flexCheckDefault22">
                                                        Dryer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault23">
                                                    <label class="form-check-label" for="flexCheckDefault23">
                                                        gym
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault24">
                                                    <label class="form-check-label" for="flexCheckDefault24">
                                                        laundry
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault25">
                                                    <label class="form-check-label" for="flexCheckDefault25">
                                                        Lawn
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault26">
                                                    <label class="form-check-label" for="flexCheckDefault26">
                                                        Microwave
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault27">
                                                    <label class="form-check-label" for="flexCheckDefault27">
                                                        Outdoor Shower
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault28">
                                                    <label class="form-check-label" for="flexCheckDefault28">
                                                        Refrigerator
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault29">
                                                    <label class="form-check-label" for="flexCheckDefault29">
                                                        Sauna
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault30">
                                                    <label class="form-check-label" for="flexCheckDefault30">
                                                        Swimming Pool
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault31">
                                                    <label class="form-check-label" for="flexCheckDefault31">
                                                        TV Cable
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt_15">
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Bedroom</option>
                                                    <option value="">01</option>
                                                    <option value="">02</option>
                                                    <option value="">03</option>
                                                    <option value="">04</option>
                                                    <option value="">05</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Barthroom</option>
                                                    <option value="">01</option>
                                                    <option value="">02</option>
                                                    <option value="">03</option>
                                                    <option value="">04</option>
                                                    <option value="">05</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">Built Year</option>
                                                    <option value="">2015</option>
                                                    <option value="">2016</option>
                                                    <option value="">2017</option>
                                                    <option value="">2018</option>
                                                    <option value="">2019</option>
                                                    <option value="">2020</option>
                                                    <option value="">2021</option>
                                                    <option value="">2022</option>
                                                    <option value="">2024</option>
                                                    <option value="">2024</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <select class="select_2" name="state">
                                                    <option value="">built-up Area</option>
                                                    <option value="">Adana</option>
                                                    <option value="">Ankara</option>
                                                    <option value="">Antalya</option>
                                                    <option value="">Bursa</option>
                                                    <option value="">Bodrum</option>
                                                    <option value="">Gaziantep</option>
                                                    <option value="">İstanbul</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
