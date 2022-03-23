<!-- Our_Menu -->
<section class="ftco-section">
    <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
                <span class="subheading">Specialties</span>
                <h2 class="mb-4">Our Menu</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($menus as $menus)
            <div class="col-md-6 col-lg-4 menu-wrap">
                <div class="menus d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
                    <div class="text">
                        <div class="d-flex">
                            <div class="one-half">
                                <h3>{{$menus->name}}</h3>
                            </div>
                            <div class="one-forth">
                                <span class="price">${{$menus->price}}</span>
                            </div>
                        </div>
                    <p>{{$menus->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
