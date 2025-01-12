@include('home.layout.head', ['title' =>'Kontak Kami'])

<body>
    <div class="preloader">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_one"></div>
                <div class="object object_two"></div>
                <div class="object object_three"></div>
            </div>
        </div>
    </div>
    <div class="wrapper fix">
        @include('home.layout.header')
        <div class="page-banner-area overlay overlay-black overlay-70">
            <div class="container">
                <div class="row">
                    <div class="page-banner text-center col-12">
                        <h1>Kontak Kami</h1>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><span>Kontak Kami</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact-area" class="contact-area bg-gray">
            <div class="container pb-90 pt-90">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-45">
                        <h3 class="heading">Hubungi Kami</h3>
                        <div class="excerpt">
                            <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, hubungi kami melalui formulir dibawah ini. Tim kami siap membantu dan akan segera merespons.</p>
                        </div>
                        <i class="icofont icofont-traffic-light"></i>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="row">
                    <div class="contact-form form text-left col-lg-12 col-sm-12 col-12">
                        <form action="{{ route('home.contact.post') }}" method="post">
                            @csrf
                            <div class="input-2 mb-3">
                                <div class="input"><input type="text" name="name" placeholder="Name" class="form-control" /></div>
                                <div class="input"><input type="text" name="no_wa" placeholder="No WhatsApp" class="form-control" /></div>
                            </div>
                            <div class="input mb-3"><input type="text" name="subject" placeholder="Subject" class="form-control" /></div>
                            <div class="input textarea mb-3"><textarea name="message" placeholder="Message" class="form-control"></textarea></div>
                            <div class="input input-submit">
                                <input type="submit" value="Send Message" class="btn btn-primary" />
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
<br>
                <!-- Google Map iframe -->
                <div class="row">
                    <div class="col-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509167.4326324688!2d121.91191374755181!3d-4.435194014894255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da231434fc74773%3A0xec4c6a894d7c0d7c!2sSMPN%201%20MALIGANO!5e0!3m2!1sen!2sid!4v1736662910867!5m2!1sen!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        @include('home.layout.footer')
