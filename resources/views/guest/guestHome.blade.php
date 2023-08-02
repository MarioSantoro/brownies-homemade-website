@extends('layout.app')

@section('main-content')
    <section>
        <div class="jumbotron">
            <div class="title">
                <h1 class="text-uppercase">Cashew</h1>
                <h2>Brownie</h2>
            </div>
            <div class="spacer"></div>
            <div class="elementor">
                <p>Meet the famous chocolate <br><span class="lie">Brownies</span> in Calicut
                </p>
            </div>
            <div class="button">
                <button class="btn-cs">Shop Now</button>
            </div>
        </div>
    </section>
    <section>
        <div class="about d-flex">
            <div class="about-content col-cs">
                <div class="title mb-3">
                    <h1 class="text-uppercase">About</h1>
                    <h2><span class="lie">Us</span></h2>
                </div>
                <div class=" about-text text-white">
                    <p>
                        <span class="w">W</span>e’re a group of passionate chocolate brownie lovers in Calicut who have
                        come together to create the
                        perfect brownie. Our handcrafted chocolate brownies are made using only the finest ingredients
                        available, and we take great care to ensure that each brownie is packed with flavor and
                        deliciousness.
                    </p>
                    <p>
                        As a small business in Calicut, we are committed to creating a truly amazing brownie experience for
                        our customers. We believe that our brownies have the power to bring people together and create
                        moments of joy, and we take great pride in our product.
                    </p>
                    <p>
                        Our mission is to spread joy through the power of brownies in Calicut, and we hope that you will
                        join us in our journey. Thank you for choosing us as your go-to source for the ultimate fudgy, rich
                        chocolate brownies in Calicut!
                    </p>
                </div>
                <div class="button">
                    <button class="btn-cs">Read More</button>
                </div>
            </div>
            <div class="col-cs wrapper"></div>
        </div>
    </section>
    <section>
        <div class="bestsellers container-cs">
            <div class="row mt-5">
                <div class="col-12">
                    <div class="title text-center">
                        <h1 class="text-uppercase">Our</h1>
                        <h2>Bestsellers</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-between align-items-center">
                @foreach ($newBrownie as $brownie)
                    <div class="col-cs ">
                        <div class="card-cs d-flex flex-column justify-content-center align-items-center">
                            <div class="header-card">
                                <img src="{{ $brownie->thumb }}" alt="">
                            </div>
                            <div class="type">
                                <h2>{{ $brownie->type }}</h2>
                            </div>
                            <div class="description text-center text-white mt-3">
                                <p>{{ $brownie->description }}</p>
                            </div>
                            <div class="button mt-2">
                                <a
                                    class="btn-cs text-decoration-none text-white"href="{{ route('guest.show', $brownie->id) }}">Shop
                                    Now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="questions">
            <div class="questions container-cs">
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="title text-center">
                            <h1 class="text-uppercase">Frequently Asked</h1>
                            <h2>Questions</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-content mt-5">
                <div class="container-accordion">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    What flavors of brownies do you offer?​
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    We have a wide range of flavors to choose from, including classic chocolate brownies,
                                    salted caramel, peanut butter, cookies and cream, mint chocolate, and more. Check out
                                    our menu for the complete list of flavors.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    How should I store the brownies?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Our brownies are best stored in an airtight container at room temperature. They will
                                    stay fresh for up to five days. If you’d like to extend their shelf life, you can
                                    refrigerate them for up to two weeks or freeze them for up to three months.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Can I customize my brownie order?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Absolutely! We offer customization options for our chocolate brownies. Whether you’d
                                    like to add toppings, include a personalized message, or have specific dietary
                                    requirements, we’ll do our best to accommodate your requests. Just let us know your
                                    preferences when placing the order.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                    How far in advance should I place my order?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    We recommend placing your order at least 48 hours in advance to ensure availability.
                                    However, during busy periods, such as holidays or special events, it’s best to book your
                                    brownies as early as possible to secure your desired date and time.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="contact container">
            <div class="title text-center mt-5">
                <h1 class="text-uppercase">Contact</h1>
                <h2>Us</h2>
            </div>
            <div class="row my-5">
                <div class="col-4 text-center">
                    <div class="content">
                        <i class="fa-solid fa-envelope mb-3"></i>
                        <p>brashbrownie@gmail.com</p>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="content">
                        <i class="fa-solid fa-square-phone mb-3"></i>
                        <p>+91 8089641013</p>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="content">
                        <i class="fa-solid fa-location-dot mb-3"></i>
                        <p>Ariyallur, Malappuram
                            Kerala-676312</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-cs text-center">
                    <input type="text" placeholder="Name" required>
                </div>
                <div class="col-cs text-center">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="col-cs text-center">
                    <input type="text" placeholder="Phone" required>
                </div>
                <div class="col-12">
                    <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required mt-5"
                        aria-required="true" aria-invalid="false" placeholder="Your message" name="textarea-439"></textarea>
                </div>
                <div class="col-12 d-flex justify-content-between align-items-center mt-2">
                    <div class="button mt-2">
                        <button class="btn-cs">Send now</button>
                    </div>
                    <p class="text-white m-0">We look forward to converting your ideas into our dreams</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@vite('resources/js/app.js')
