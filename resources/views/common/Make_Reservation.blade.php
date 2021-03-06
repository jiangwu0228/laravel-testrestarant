<!-- Make_Reservation -->
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 ftco-animate makereservation p-4 p-md-5 pt-5 pt-md-0 fadeInUp ftco-animated">
                <div class="heading-section ftco-animate mb-5 fadeInUp ftco-animated">
                    <span class="subheading">Book a table</span>
                    <h2 class="mb-4">Make Reservation</h2>
                </div>
                <form method="POST" action="/book/store">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input id="b_name" type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input id="b_email" type="text" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input id="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input id="data" type="data" class="form-control"  placeholder="Date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Time</label>
                                <input id="time" type="time" class="form-control ui-timepicker-input"
                                    placeholder="Time" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Person</label>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="person" class="form-control">
                                        <option value="">Person</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <input type="submit" value="Book Now" class="btn btn-primary py-3 px-5">
                                <a href="/book/view" class="btn btn-primary py-3 px-5">View Order</a>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
                <div id="map" style="position: relative; overflow: hidden;">
                    <div
                        style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                        <div class="gm-style"
                            style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                            <div tabindex="0"
                                style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                <div
                                    style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                            <div
                                                style="position: absolute; z-index: 993; transform: matrix(1, 0, 0, 1, -181, -34);">
                                                <div
                                                    style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div
                                                    style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div
                                                    style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div
                                                    style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div
                                                    style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div
                                                    style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div
                                                    style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div
                                                    style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div
                                                    style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div
                                                    style="position: absolute; left: -256px; top: -512px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div
                                                    style="position: absolute; left: 0px; top: -512px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                                <div
                                                    style="position: absolute; left: 256px; top: -512px; width: 256px; height: 256px;">
                                                    <div style="width: 256px; height: 256px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;">
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                            <div
                                                style="position: absolute; z-index: 993; transform: matrix(1, 0, 0, 1, -181, -34);">
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                                </div>
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;">
                                                </div>
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;">
                                                </div>
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;">
                                                </div>
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;">
                                                </div>
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;">
                                                </div>
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;">
                                                </div>
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;">
                                                </div>
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;">
                                                </div>
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -512px;">
                                                </div>
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -512px;">
                                                </div>
                                                <div
                                                    style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -512px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                        <div
                                            style="position: absolute; z-index: 993; transform: matrix(1, 0, 0, 1, -181, -34);">
                                            <div
                                                style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i37!3i48!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=53004"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div
                                                style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i36!3i48!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=15280"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div
                                                style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i36!3i47!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=49723"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div
                                                style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i37!3i47!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=87447"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div
                                                style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i38!3i47!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=125171"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div
                                                style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i38!3i48!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=90728"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div
                                                style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i38!3i49!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=56285"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div
                                                style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i37!3i49!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=18561"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div
                                                style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i36!3i49!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=111908"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div
                                                style="position: absolute; left: -256px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i36!3i46!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=84166"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div
                                                style="position: absolute; left: 0px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i37!3i46!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=121890"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div
                                                style="position: absolute; left: 256px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                <img draggable="false" alt="" role="presentation"
                                                    src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i38!3i46!4i256!2m3!1e0!2sm!3i526246824!2m3!1e2!6m1!3e5!3m17!2sen!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;token=28543"
                                                    style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gm-style-pbc"
                                    style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                    <p class="gm-style-pbt"></p>
                                </div>
                                <div
                                    style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                    <div
                                        style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                        <div
                                            style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                        </div>
                                        <div
                                            style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
                                        </div>
                                        <div
                                            style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                        </div>
                                        <div
                                            style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div><iframe aria-hidden="true" frameborder="0" tabindex="-1"
                                style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                            <div
                                style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                <a target="_blank" rel="noopener"
                                    href="https://maps.google.com/maps?ll=40.69847,-73.951442&amp;z=7&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=apiv3"
                                    title="Open this area in Google Maps (opens a new window)"
                                    style="position: static; overflow: visible; float: none; display: inline;">
                                    <div style="width: 66px; height: 26px; cursor: pointer;"><img alt=""
                                            src="http://maps.gstatic.com/mapfiles/api-3/images/google_white5_hdpi.png"
                                            draggable="false"
                                            style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                    </div>
                                </a></div>
                            <div
                                style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 179px; top: 60px;">
                                <div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Map Data
                                </div>
                                <div style="font-size: 13px;">Map data ??2020 Google</div><button draggable="false"
                                    title="Close" aria-label="Close" type="button" class="gm-ui-hover-effect"
                                    style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img
                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                        style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button>
                            </div>
                            <div class="gmnoprint"
                                style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;">
                                <div draggable="false" class="gm-style-cc"
                                    style="user-select: none; height: 14px; line-height: 14px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div
                                            style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                        </div>
                                    </div>
                                    <div
                                        style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                        <a style="text-decoration: none; cursor: pointer; display: none;">Map
                                            Data</a><span>Map data ??2020 Google</span></div>
                                </div>
                            </div>
                            <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                <div
                                    style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                    Map data ??2020 Google</div>
                            </div>
                            <div class="gmnoprint gm-style-cc" draggable="false"
                                style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div
                                        style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                    </div>
                                </div>
                                <div
                                    style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                    <a href="https://www.google.com/intl/en_US/help/terms_maps.html" target="_blank"
                                        rel="noopener"
                                        style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of
                                        Use</a></div>
                            </div><button draggable="false" title="Toggle fullscreen view"
                                aria-label="Toggle fullscreen view" type="button"
                                class="gm-control-active gm-fullscreen-control"
                                style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img
                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                    style="height: 18px; width: 18px;"><img
                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                    style="height: 18px; width: 18px;"><img
                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                    style="height: 18px; width: 18px;"></button>
                            <div draggable="false" class="gm-style-cc"
                                style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div
                                        style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                    </div>
                                </div>
                                <div
                                    style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                    <a target="_blank" rel="noopener"
                                        title="Report errors in the road map or imagery to Google"
                                        href="https://www.google.com/maps/@40.6984703,-73.9514422,7z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                        style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report
                                        a map error</a></div>
                            </div>
                            <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false"
                                controlwidth="40" controlheight="81"
                                style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;">
                                <div class="gmnoprint" controlwidth="40" controlheight="81"
                                    style="position: absolute; left: 0px; top: 0px;">
                                    <div draggable="false"
                                        style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                        <button draggable="false" title="Zoom in" aria-label="Zoom in" type="button"
                                            class="gm-control-active"
                                            style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="height: 18px; width: 18px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="height: 18px; width: 18px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="height: 18px; width: 18px;"></button>
                                        <div
                                            style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;">
                                        </div><button draggable="false" title="Zoom out" aria-label="Zoom out"
                                            type="button" class="gm-control-active"
                                            style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="height: 18px; width: 18px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="height: 18px; width: 18px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="height: 18px; width: 18px;"></button>
                                    </div>
                                </div>
                                <div class="gmnoprint" controlwidth="40" controlheight="40"
                                    style="display: none; position: absolute;">
                                    <div style="width: 40px; height: 40px;"><button draggable="false"
                                            title="Rotate map 90 degrees" aria-label="Rotate map 90 degrees"
                                            type="button" class="gm-control-active"
                                            style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="height: 18px; width: 18px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="height: 18px; width: 18px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="height: 18px; width: 18px;"></button><button draggable="false"
                                            title="Tilt map" aria-label="Tilt map" type="button"
                                            class="gm-tilt gm-control-active"
                                            style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="width: 18px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="width: 18px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="width: 18px;"></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                        <div><img alt="" src="http://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg"
                                draggable="false"
                                style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;">
                        </div>
                        <div style="line-height: 20px; margin: 15px 0px;"><span
                                style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps
                                correctly.</span></div>
                        <table style="width: 100%;">
                            <tr>
                                <td style="line-height: 16px; vertical-align: middle;"><a
                                        href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors"
                                        target="_blank" rel="noopener"
                                        style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this
                                        website?</a></td>
                                <td style="text-align: right;"><button class="dismissButton">OK</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
