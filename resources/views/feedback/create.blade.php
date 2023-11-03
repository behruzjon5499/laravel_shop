<x-main>

    <x-slot:title>
        Feedback
    </x-slot:title>


    <!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs sec-color">
        <div class="breadcrumbs-image">
            <img src="../images/breadcrumbs/contact.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">Contact</h1>
                        <ul class="breadcrumbs-subtitle">
                            <li><a href="{{route('site.index')}}"><i class="fa fa-home"></i>  Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Start -->
    <section id="rs-contact" class="rs-contact contact-section gray-color pb-100">
        <!-- About Icon Start -->
        <div id="rs-about-icon" class="rs-about-icon pt-100 pb-80">
            <div class="container">
                <div class="icon-section">
                    <div class="single-icon">
                        <div class="icon-part">
                            <a href="#"><i class="fa fa-phone"></i></a>
                        </div>
                        <div class="icon-text">
                            <h3 class="icon-title">Call Us</h3>
                            <a class="icon-info" href="tel:+(+088)589-8745">(+088)589-8745</a>
                        </div>
                    </div>
                    <div class="single-icon">
                        <div class="icon-part">
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                        <div class="icon-text">
                            <h3 class="icon-title">Mail Us</h3>
                            <a class="icon-info" href="mailto:support@rstheme.com">support@rstheme.com</a>
                        </div>
                    </div>
                    <div class="single-icon">
                        <div class="icon-part">
                            <a href="#"><i class="fa fa-fax"></i></a>
                        </div>
                        <div class="icon-text">
                            <h3 class="icon-title">Fax</h3>
                            <p>+3301-341-0476</p>
                        </div>
                    </div>
                    <div class="single-icon margin-0">
                        <div class="icon-part">
                            <a href="#"><i class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="icon-text after-none">
                            <h3 class="icon-title">Address</h3>
                            <p>Bstart Pro, 103, NY </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Icon End -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form">
                        <div id="form-messages"></div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form   method="post" action="{{route('feedbacks.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <input type="text" placeholder="Name" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <input
                                               class="masked prefixed form-control"
                                               type="tel"
                                               name="phone"
                                               data-pattern="+***(**) ***-**-**"
                                               data-prefix="+998"
                                               placeholder="+998(__) ___-__-__"
                                               id="phone_number"
                                               required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-field">
                                <textarea placeholder="Your Message Here" rows="7" id="message" name="message" required></textarea>
                            </div>
                            <div class="form-button">
                                <button type="submit" class="readon">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    <!-- Map Section Start -->
    <section id="rs-map" class="rs-map">
        <div id="googleMap"></div>
    </section>
    <!-- Map Section End -->
</div>

</x-main>

