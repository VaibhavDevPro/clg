@extends('home_layouts.app')

@section('content')
<div class="hero-wrapper" data-aos="fade-up">
    <div class="bg-img"></div>
    <div class="bg-amination">
        <header class="header-navigation py-4">
            <div class="container flex justify-between items-center mx-auto">
                <div class="logo">
                    <img src="{{ asset('assets/media/home/logo-white.png') }}" alt="">
                </div>
                <div class="menu text-white flex items-center gap-6">
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item has-children"><a href="#">Home<span class="dd-trigger"><i
                                            class="far fa-angle-down"></i></span></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home Restaurant</a></li>
                                    <li><a href="index-burger.html">Home Burger</a></li>
                                    <li><a href="index-sushi.html">Home Sushi</a></li>
                                    <li><a href="index-pizza.html">Home Pizza</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="#">Menu<span class="dd-trigger"><i
                                            class="far fa-angle-down"></i></span></a>
                                <ul class="sub-menu">
                                    <li><a href="menu-v1.html">Menu List One</a></li>
                                    <li><a href="menu-v2.html">Menu List Two</a></li>
                                    <li><a href="menu-v3.html">Menu Grid</a></li>
                                    <li><a href="menu-details.html">Menu Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="#">Pages<span class="dd-trigger"><i
                                            class="far fa-angle-down"></i></span></a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="history.html">Our history</a></li>
                                    <li><a href="chefs.html">Our Chefs</a></li>
                                    <li><a href="gallery.html">Our Gallery</a></li>
                                    <li><a href="faq.html">Faqs</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="#">Shop<span class="dd-trigger"><i
                                            class="far fa-angle-down"></i></span></a>
                                <ul class="sub-menu">
                                    <li><a href="products.html">Our Shop</a></li>
                                    <li><a href="menu-details.html">Product Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="#">Blog<span class="dd-trigger"><i
                                            class="far fa-angle-down"></i></span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-classic.html">Blog Standard</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <button class="btn btn-primary">
                        Book A Table
                    </button>
                    <div class="box-52 btn btn-secondary flex justify-center items-center">
                        <span class="material-symbols-outlined text-3xl">
                            shopping_cart
                        </span>
                    </div>
                </div>
            </div>
        </header>


        <div class="hero-section py-16">
            <div class="container  mx-auto">
                <div class="flex items-center justify-between">
                    <div class="content flex-col gap-16">
                        <p class="text-orange text-xl font-hanken font-semibold uppercase">Hot for every Sunday</p>
                        <p class="text-white text-[115px] font-bold uppercase leading-[124px] mb-4">Enjoy our
                            <span class="text-red">delicius</span> food
                        </p>
                        <p class="text-white text-xl font-hanken font-medium leading-[30px]">Savor the taste of our
                            delicious, expertly crafted dishes made with the finest ingredients, offering a perfect
                            blend of flavors.</p>
                        <div class="btn btn-primary w-fc mt-8 font-hanken">
                            Order Now
                        </div>
                    </div>
                    <img src="{{ asset('assets/media/home/hero-img.png') }}" class="w-[590px] h-[590px] rounded-full"
                        alt="">
                </div>
            </div>
        </div>

    </div>
</div>

<section class="pt-[120px]" data-aos="fade-up">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <h2 class="text-color font-bold uppercase text-6xl">our Categories</h2>
            <a class="btn btn-primary-blank font-hanken text-color-secondary text-xl">
                See More
            </a>
        </div>
        <div class="row mt-8">
            <div class="col-md-3 col-12" data-aos="fade-bottom">
                <div class="rounded flex gap-3 iconic-box style-four mb-0 wow fadeInUp">
                    <div class="box-36 w-[36px] h-[36px] flex items-center justify-center rounded-full bg-[#fff]">
                        <span class="material-symbols-outlined">
                            lunch_dining
                        </span>
                    </div>
                    <div class="content">
                        <h4 class="title text-color font-bold text-2xl">Delish Burger</h4>
                        <span class="font-hanken text-color-secondary text-md">25 Items</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12" data-aos="fade-top">
                <div class="rounded flex gap-3 iconic-box style-four mb-0 wow fadeInUp">
                    <div class="box-36 w-[36px] h-[36px] flex items-center justify-center rounded-full bg-[#fff]">
                        <span class="material-symbols-outlined">
                            local_pizza
                        </span>
                    </div>
                    <div class="content">
                        <h4 class="title text-color font-bold text-2xl">Tasty Pizza</h4>
                        <span class="font-hanken text-color-secondary text-md">15 Items</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12" data-aos="fade-bottom">
                <div class="rounded flex gap-3 iconic-box style-four mb-0 wow fadeInUp">
                    <div class="box-36 w-[36px] h-[36px] flex items-center justify-center rounded-full bg-[#fff]">
                        <span class="material-symbols-outlined">
                            coffee
                        </span>
                    </div>
                    <div class="content">
                        <h4 class="title text-color font-bold text-2xl">Fresh Coffee</h4>
                        <span class="font-hanken text-color-secondary text-md">10 Items</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12" data-aos="fade-top">
                <div class="rounded flex gap-3 iconic-box style-four mb-0 wow fadeInUp">
                    <div class="box-36 w-[36px] h-[36px] flex items-center justify-center rounded-full bg-[#fff]">
                        <span class="material-symbols-outlined">
                            lunch_dining
                        </span>
                    </div>
                    <div class="content">
                        <h4 class="title text-color font-bold text-2xl">Delish Burger</h4>
                        <span class="font-hanken text-color-secondary text-md">25 Items</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="pt-[120px]">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <img src="{{ asset('assets/media/home/hero-img.png') }}" class="w-[590px] h-[590px] rounded-full" alt=""
                data-aos="fade-right">
            <div class="content flex flex-col gap-2" data-aos="fade-left">
                <p class="text-orange flex gap-1 items-center">
                    <span class="material-symbols-outlined">
                        room_service
                    </span>
                    About Us
                </p>
                <p class="text-color text-6xl font-[800] uppercase leading-[60px] mb-4">
                    Delicia's about fresh flavorful dining
                </p>
                <p class="text-color-secondary font-hanken">
                    We are passionate about serving fresh, flavorful dishes crafted with the finest ingredients. Every
                    meal is thoughtfully prepared to deliver a memorable dining experience you'll love.
                </p>

                <div class="flex items-center gap-4 mt-8">
                    <div class="w-[280px] h-[100px] bg-[#f2f2f2] rounded-xl flex items-center gap-3 ps-4 pe-4 py-12">
                        <img src="{{asset('assets/media/home/burger.svg')}}" alt="">
                        <div class="flex flex-col gap-0">
                            <h3 class="text-color font-bold text-3xl">1500+</h3>
                            <p class="text-color-secondary font-normal font-hanken">Total Food Items+</p>
                        </div>
                    </div>

                    <div class="w-[280px] h-[100px] bg-[#f2f2f2] rounded-xl flex items-center gap-3 ps-4 pe-4 py-12">
                        <img src="{{asset('assets/media/home/branchs.svg')}}" alt="">
                        <div class="flex flex-col gap-0">
                            <h3 class="text-color font-bold text-3xl">500+</h3>
                            <p class="text-color-secondary font-normal font-hanken">Branch office</p>
                        </div>
                    </div>
                </div>

                <a href="javascript:void(0)" class="btn btn-primary w-fc mt-8 font-hanken">
                    Read More
                </a>
            </div>
        </div>

    </div>
</section>

<section class="pt-[120px]" data-aos="fade-top">
    <div class="offer">
        <div class="container mx-auto">
            <div class="flex items-center">
                <div class="col-md-6">
                    <div class="content flex flex-col gap-2 aos-init aos-animate"">
                        <p class=" font-semibold text-orange flex gap-1 items-center">
                        <span class="material-symbols-outlined">
                            room_service
                        </span>
                        Get 25% Discount
                        </p>
                        <p class="text-white text-7xl font-[800] uppercase leading-[72px] mb-4">
                            Today our special Combo offers
                        </p>

                        <div class="flex items-center gap-8">
                            <div
                                class="time-box bg-[#2A2A2A] rounded-xl w-[72px] h-[82px] flex items-center justify-center flex-col">
                                <p id="days" class="text-white text-3xl font-semibold">0</p>
                                <p class="text-[#bdbdbd] font-hanken font-normal">Days</p>
                            </div>
                            <div
                                class="time-box bg-[#2A2A2A] rounded-xl w-[72px] h-[82px] flex items-center justify-center flex-col">
                                <p id="hours" class="text-white text-3xl font-semibold">0</p>
                                <p class="text-[#bdbdbd] font-hanken font-normal">Hours</p>
                            </div>
                            <div
                                class="time-box bg-[#2A2A2A] rounded-xl w-[72px] h-[82px] flex items-center justify-center flex-col">
                                <p id="minutes" class="text-white text-3xl font-semibold">0</p>
                                <p class="text-[#bdbdbd] font-hanken font-normal">Minutes</p>
                            </div>
                            <div
                                class="time-box bg-[#2A2A2A] rounded-xl w-[72px] h-[82px] flex items-center justify-center flex-col">
                                <p id="seconds" class="text-white text-3xl font-semibold">0</p>
                                <p class="text-[#bdbdbd] font-hanken font-normal">Seconds</p>
                            </div>
                        </div>


                        <a href="javascript:void(0)" class="btn btn-primary w-fc mt-8 font-hanken">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('assets/media/home/offer-img1.png')}}" class="img-fluid" alt="">
                    <img src="{{asset('assets/media/home/bn-img-6.png')}}" class="offer-absolute" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-[120px]" data-aos="fade-bottom">
    <div class="container mx-auto">
        <div class="flex flex-col items-center gap-2 aos-init aos-animate" data-aos="fade-bottom">
            <p class="text-orange flex gap-1 items-center">
                <span class="material-symbols-outlined">
                    room_service
                </span>
                Why choose us
            </p>
            <p class="text-color text-6xl font-[800] uppercase leading-[60px] mb-4">
                Why We’re Your Best Choice
            </p>


            <div class="row items-center mt-8">
                <div class="col-md-3 col-12" data-aos="fade-top">
                    <div class="best-choose-box">
                        <span class="material-symbols-outlined choose-icon">
                            fastfood
                        </span>
                        <div class="flex flex-col gap-1">
                            <h3 class="choose-title text-center font-bold text-3xl">Hygienic Food</h3>
                            <p class="choose-para text-center font-normal font-hanken">We are passionate about serving
                                fresh, flavorful</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" data-aos="fade-bottom">
                    <div class="best-choose-box">
                        <span class="material-symbols-outlined choose-icon">
                            local_florist
                        </span>
                        <div class="flex flex-col gap-1">
                            <h3 class="choose-title text-center font-bold text-3xl">Fresh Environment</h3>
                            <p class="choose-para text-center font-normal font-hanken">We are passionate about serving
                                fresh, flavorful</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" data-aos="fade-top">
                    <div class="best-choose-box">
                        <span class="material-symbols-outlined choose-icon">
                            skillet
                        </span>
                        <div class="flex flex-col gap-1">
                            <h3 class="choose-title text-center font-bold text-3xl">Skilled Chefs</h3>
                            <p class="choose-para text-center font-normal font-hanken">We are passionate about serving
                                fresh, flavorful</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" data-aos="fade-bottom">
                    <div class="best-choose-box">
                        <span class="material-symbols-outlined choose-icon">
                            cake
                        </span>
                        <div class="flex flex-col gap-1">
                            <h3 class="choose-title text-center font-bold text-3xl">Event & Party</h3>
                            <p class="choose-para text-center font-normal font-hanken">We are passionate about serving
                                fresh, flavorful</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-[120px]" data-aos="fade-top">
    <div class="offer">
        <div class="container mx-auto">
            <div class="flex items-center">
                <div class="col-md-6 col-12" data-aos="fade-top">
                    <div class="content flex flex-col gap-2 aos-init aos-animate"">
                        <p class=" font-semibold text-orange flex gap-1 items-center">
                        <span class="material-symbols-outlined">
                            room_service
                        </span>
                        Reservation
                        </p>

                        <p class="text-white text-7xl font-[800] uppercase leading-[72px] mb-4">
                            Need reservation? booking your table now
                        </p>

                        <p class=" font-semibold text-orange flex gap-1 items-center">
                            Order online
                        </p>

                        <a href="tel:7054913163" class="btn btn-secondary w-fc mt-8 font-hanken has-icon-btn">
                            <span class="material-symbols-outlined">
                                phone_in_talk
                            </span>
                            7054913163
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-12"  data-aos="fade-bottom">
                    <form action="">
                        <div class="call-form">
                            <h4 class="text-white font-semibold text-2xl text-center">Create An Booking Table</h4>
                            <div class="row mt-6">
                                <div class="col-md-6 col-12 position-relative">
                                    <input type="text" class="form-control has-icon-left" placeholder="Enter Your Name">
                                    <span class="material-symbols-outlined call-from-icon">
                                        person
                                    </span>
                                </div>
                                <div class="col-md-6 col-12 mt-4 mt-md-0 position-relative">
                                    <input type="text" class="form-control has-icon-left"
                                        placeholder="Enter Your Email">
                                    <span class="material-symbols-outlined call-from-icon">
                                        mail
                                    </span>
                                </div>
                                <div class="col-md-6 col-12 mt-4  position-relative">
                                    <input type="text" class="form-control has-icon-left"
                                        placeholder="Enter Your Phone">
                                    <span class="material-symbols-outlined call-from-icon">
                                        call
                                    </span>
                                </div>
                                <div class="col-md-6 col-12 mt-4  position-relative">
                                    <input type="text" class="form-control from-today has-icon-left"
                                        placeholder="Date of Reservation">
                                    <span class="material-symbols-outlined call-from-icon">
                                        concierge
                                    </span>
                                </div>
                                <div class="col-md-12 col-12 mt-4 ">
                                    <select class="form-control select2-people" name="people">
                                        <option value="" disabled selected>Select number of people</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-12 mt-4 flex justify-center">
                                    <div class="btn btn-warning w-100 flex justify-center text-2xl rounded-2xl">
                                        Book a Table
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <img src="{{asset('assets/media/home/bn-img-6.png')}}" class="offer-absolute" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-[120px] pb-[120px]" data-aos="fade-bottom">
    <div class="container mx-auto">
        <div class="flex flex-col items-center gap-2 aos-init aos-animate" data-aos="fade-bottom">
            <p class="text-orange flex gap-1 items-center">
                <span class="material-symbols-outlined">
                    room_service
                </span>
                Delicious Menu
            </p>

            <p class="text-color text-6xl font-[800] uppercase leading-[60px] mb-4">
                Explore Our Delicious
            </p>

            <p class="text-color text-5xl font-[800] uppercase leading-[60px] mb-4">
                Menu
            </p>


            <div class="row items-center mt-8">
                <div class="col-md-6 col-12" data-aos="fade-top">
                    <div class="menu-box">
                        <img src="{{asset('assets/media/home/menu-thumb1.png')}}" alt="">

                        <div class="flex flex-col gap-2">
                            <div class="menu-title font-bold text-2xl">Truffle Mac and Cheese</div>
                            <div class="menu-para font-normal font-hanken">Indulgent mac and cheese with truffle essence.</div>
                        </div>

                        <h4 class="text-red text-2xl font-semibold text-semibold menu-price">$24</h4>
                    </div>
                </div>

                <div class="col-md-6 col-12" data-aos="fade-top">
                    <div class="menu-box">
                        <img src="{{asset('assets/media/home/menu-thumb2.png')}}" alt="">

                        <div class="flex flex-col gap-2">
                            <div class="menu-title font-bold text-2xl">Grilled Ribeye Steak</div>
                            <div class="menu-para font-normal font-hanken">Perfectly grilled ribeye steak with savory seasoning.</div>
                        </div>

                        <h4 class="text-red text-2xl font-semibold text-semibold menu-price">$24</h4>
                    </div>
                </div>

                <div class="col-md-6 col-12 mt-8" data-aos="fade-top">
                    <div class="menu-box">
                        <img src="{{asset('assets/media/home/menu-thumb3.png')}}" alt="">

                        <div class="flex flex-col gap-2">
                            <div class="menu-title font-bold text-2xl">Honey-Glazed Salmon</div>
                            <div class="menu-para font-normal font-hanken">Sweet and savory honey-glazed salmon fillet.</div>
                        </div>

                        <h4 class="text-red text-2xl font-semibold text-semibold menu-price">$24</h4>
                    </div>
                </div>

                <div class="col-md-6 col-12 mt-8" data-aos="fade-top">
                    <div class="menu-box">
                        <img src="{{asset('assets/media/home/menu-thumb4.png')}}" alt="">

                        <div class="flex flex-col gap-2">
                            <div class="menu-title font-bold text-2xl">Thai Coconut Curry</div>
                            <div class="menu-para font-normal font-hanken">Fragrant Thai coconut curry with vibrant vegetables.</div>
                        </div>

                        <h4 class="text-red text-2xl font-semibold text-semibold menu-price">$24</h4>
                    </div>
                </div>

                <div class="col-md-6 col-12 mt-8" data-aos="fade-top">
                    <div class="menu-box">
                        <img src="{{asset('assets/media/home/menu-thumb5.png')}}" alt="">

                        <div class="flex flex-col gap-2">
                            <div class="menu-title font-bold text-2xl">Gourmet Mushroom Risotto</div>
                            <div class="menu-para font-normal font-hanken">Rich, creamy risotto with gourmet mushrooms</div>
                        </div>

                        <h4 class="text-red text-2xl font-semibold text-semibold menu-price">$24</h4>
                    </div>
                </div>

                <div class="col-md-6 col-12 mt-8" data-aos="fade-top">
                    <div class="menu-box">
                        <img src="{{asset('assets/media/home/menu-thumb6.png')}}" alt="">

                        <div class="flex flex-col gap-2">
                            <div class="menu-title font-bold text-2xl">Margarita Shrimp Tacos</div>
                            <div class="menu-para font-normal font-hanken">Zesty shrimp tacos with fresh margarita flavor.</div>
                        </div>

                        <h4 class="text-red text-2xl font-semibold text-semibold menu-price">$24</h4>
                    </div>
                </div>

                <div class="col-md-6 col-12 mt-8" data-aos="fade-top">
                    <div class="menu-box">
                        <img src="{{asset('assets/media/home/menu-thumb5.png')}}" alt="">

                        <div class="flex flex-col gap-2">
                            <div class="menu-title font-bold text-2xl">BBQ Bacon Burger</div>
                            <div class="menu-para font-normal font-hanken">Juicy burger topped with BBQ sauce and bacon.</div>
                        </div>

                        <h4 class="text-red text-2xl font-semibold text-semibold menu-price">$24</h4>
                    </div>
                </div>

                <div class="col-md-6 col-12 mt-8" data-aos="fade-top">
                    <div class="menu-box">
                        <img src="{{asset('assets/media/home/menu-thumb6.png')}}" alt="">

                        <div class="flex flex-col gap-2">
                            <div class="menu-title font-bold text-2xl">Spicy Tuna Roll</div>
                            <div class="menu-para font-normal font-hanken">Spicy tuna roll with a bold, flavorful kick.</div>
                        </div>

                        <h4 class="text-red font-4xl font-semibold font-hanken menu-price">$24</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('home_scripts')
<script>
AOS.init({
    duration: 1200,
})
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// Initial countdown time in seconds (e.g., 1 day = 86400 seconds)
let countdownTime = 86400; // Adjust this to your desired start time

// Check if there's saved countdown data in localStorage
if (localStorage.getItem("countdown")) {
    countdownTime = parseInt(localStorage.getItem("countdown"), 10);
}

// Function to calculate days, hours, minutes, and seconds from total seconds
function formatTime(seconds) {
    const days = Math.floor(seconds / (3600 * 24));
    const hours = Math.floor((seconds % (3600 * 24)) / 3600);
    const minutes = Math.floor((seconds % 3600) / 60);
    const secs = seconds % 60;
    return {
        days,
        hours,
        minutes,
        secs
    };
}

// Function to update the countdown display
function updateCountdown() {
    const {
        days,
        hours,
        minutes,
        secs
    } = formatTime(countdownTime);

    $("#days").text(days);
    $("#hours").text(hours);
    $("#minutes").text(minutes);
    $("#seconds").text(secs);
}

// Initialize countdown display
updateCountdown();

// Countdown function that runs every second
setInterval(function() {
    if (countdownTime > 0) {
        countdownTime--; // Decrease countdown time by 1 second
        localStorage.setItem("countdown", countdownTime); // Save to localStorage
        updateCountdown(); // Update display
    }
}, 1000);
</script>

@endpush
@endsection