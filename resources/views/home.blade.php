@extends('home_layouts.app')

@section('content')
    <div class="hero-wrapper">
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

    <section class="pt-[120px]">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <h2 class="text-color font-bold uppercase text-[60px]">our Categories</h2>
                <a class="btn btn-primary-blank font-hanken text-color-secondary text-xl">
                    See More
                </a>
            </div>
            <div class="row mt-8">
                <div class="col-md-3 col-12">
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

                <div class="col-md-3 col-12">
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

                <div class="col-md-3 col-12">
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

                <div class="col-md-3 col-12">
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
                <img src="{{ asset('assets/media/home/hero-img.png') }}" class="w-[590px] h-[590px] rounded-full"
                alt="">
                <div class="content flex flex-col gap-2">
                    <p class="text-orange flex gap-1 items-center">
                        <span class="material-symbols-outlined">
                            room_service
                            </span>
                            About Us
                    </p>
                    <p class="text-color text-[60px] font-[800] uppercase leading-[60px] mb-4">
                        Delicia's about fresh flavorful dining
                    </p>
                    <p class="text-color-secondary font-hanken">
                        We are passionate about serving fresh, flavorful dishes crafted with the finest ingredients. Every meal is thoughtfully prepared to deliver a memorable dining experience you'll love.
                    </p>

                    <a href="javascript:void(0)" class="btn btn-primary w-fc mt-8 font-hanken">
                        Read More
                    </a>
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
    @endpush
@endsection
