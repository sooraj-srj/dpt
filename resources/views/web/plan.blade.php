@extends('web.layouts.template')
@section('content')
    <div class="detail-img-div"></div>
    <div class="clearfix"></div>
    <div class="details-booking-div">
        <div class="booking-inn-div">
            <div class="container">
                <div class="col-md-3">
                    <div class="price-decoration block-after-indent  screen-only">
                        <!--<div class="price-decoration__value"> <i class="fa fa-tag"></i> <span class="amount"><small>AED </small>580</span> <span class="amount"><small>USD </small>159</span> </div>-->
                        <div class="price-decoration__label"><h4>Select Your Package</h4></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="left-package-list">
                        <ul id="mainNav" class="list-product-ul">
                            <li class="mainNavItem active">
                                <div id="navItem1">6 Hours Seasonal Dubai Tour<br>
                                    ( November - March )
                                </div>
                            </li>
                            <li class="mainNavItem">
                                <div id="navItem2">6 Hours Seasonal Dubai Tour<br>
                                    ( November - March )
                                </div>
                            </li>
                            <li class="mainNavItem">
                                <div id="navItem3">6 Hours Seasonal Dubai Tour<br>
                                    ( November - March )
                                </div>
                            </li>
                            <li class="mainNavItem">
                                <div id="navItem4">6 Hours Seasonal Dubai Tour<br>
                                    ( November - March )
                                </div>
                            </li>
                            <li class="mainNavItem">
                                <div id="navItem5">6 Hours Seasonal Dubai Tour<br>
                                    ( November - March )
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <img src="images/003.jpg" class="img-responsive">
                    <br>
                    <img src="images/7fdc3fb083f48a1.jpg" class="img-responsive">
                    <br>
                    <img src="images/004.jpg" class="img-responsive">
                    <br>
                    <img src="images/005.jpg" class="img-responsive">


                </div>
                <div class="col-md-9">


                    <div class="row">
                        <div id="content-wrap1">
                            <div class="price-decoration2 block-after-indent  screen-only">
                                <div class="price-decoration__value"><i class="fa fa-tag"></i> <span class="amount"><small>AED </small>580</span>
                                    <span class="amount"><small>USD </small>159</span></div>
                                <div class="price-decoration__label"><i class="td-clock-2"></i> Duration 4 Hours</div>
                            </div>
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1default" data-toggle="tab">Book This Tour</a>
                                        </li>
                                        <li><a href="#tab2default" data-toggle="tab">Details</a></li>
                                        <li><a href="#tab3default" data-toggle="tab">Ask Questions</a></li>
                                        <li><a href="#tab4default" data-toggle="tab">Photos</a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1default">
                                            <div class="col-md-12">
                                                <h4><b>Booking Details</h4>
                                                </b></div>
                                            <form>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="arrival">Tour Date *</label>
                                                        <input type="text" class="form-control input-sm datepicker"
                                                               id="arrival" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Pickup Time*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Location*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">End Location*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="row">
                                                                    <div class="form-group col-md-7 col-sm-6">
                                                                        <label for="name">Preferred Guide
                                                                            Language*</label>
                                                                        <select class="form-control input-sm"
                                                                                id="months">
                                                                            <option>-- Select No of Month --</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                            <option>7</option>
                                                                            <option>8</option>
                                                                            <option>9</option>
                                                                            <option>10</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-5 col-sm-6">
                                                                        <label for="name">Payment Option*</label>
                                                                        <select class="form-control input-sm"
                                                                                id="months">
                                                                            <option>-- Select No of Month --</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                            <option>7</option>
                                                                            <option>8</option>
                                                                            <option>9</option>
                                                                            <option>10</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6 col-sm-6">
                                                                        <label for="gender">Pref.currency</label>
                                                                        <select class="form-control input-sm"
                                                                                id="months">
                                                                            <option>-- Select No of Month --</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                            <option>7</option>
                                                                            <option>8</option>
                                                                            <option>9</option>
                                                                            <option>10</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-sm-6">
                                                                        <label for="gender">Payment Mode *</label>
                                                                        <select class="form-control input-sm"
                                                                                id="months">
                                                                            <option>-- Select No of Month --</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                            <option>7</option>
                                                                            <option>8</option>
                                                                            <option>9</option>
                                                                            <option>10</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-4">
                                                                <label for="name">Adults*</label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="name" placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-4">
                                                                <label for="name">Children</label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="name" placeholder="Age 5-12">
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-4">
                                                                <label for="name">Infants</label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="name" placeholder="Age < 5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <br>
                                                    <div class="col-md-12">
                                                        <h4><b>Personal Details</h4>
                                                        </b></div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">First Name*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Last Name*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Email*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Confirm Email*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="email">Nationality*</label>
                                                        <select class="form-control input-sm" id="years">
                                                            <option>-- Select No of Year --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 col-sm-6">
                                                                <label for="city">Cell No *</label>
                                                                <select class="form-control input-sm" id="years">
                                                                    <option>-- Select No of Year --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-9 col-sm-6">
                                                                <label for="city"></label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="city" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 col-sm-6">
                                                                <label for="city">Cell No2 *</label>
                                                                <select class="form-control input-sm" id="years">
                                                                    <option>-- Select No of Year --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-9 col-sm-6">
                                                                <label for="city"></label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="city" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="email">How Did You Discover Us *</label>
                                                        <select class="form-control input-sm" id="years">
                                                            <option>-- Select No of Year --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="address">Special Requests</label>
                                                        <textarea class="form-control input-sm" id="address"
                                                                  rows="5"></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="button" class="btn main-btn-style">Confirm
                                                            Booking
                                                        </button>
                                                        &nbsp;
                                                        <button type="button" class="btn main-btn-style">Clear</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="tab2default">
                                            <h3> What is Lorem Ipsum?</h3>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting, remaining essentially unchanged. It
                                            was popularised in the 1960s with the release of Letraset sheets containing
                                            Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum. <br>
                                            <h3>Why do we use it?</h3>
                                            It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English. Many desktop publishing packages and web page editors now use Lorem
                                            Ipsum as their default model text, and a search for 'lorem ipsum' will
                                            uncover many web sites still in their infancy. Various versions have evolved
                                            over the years, sometimes by accident, sometimes on purpose (injected humour
                                            and the like).
                                        </div>
                                        <div class="tab-pane fade" id="tab3default">
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">First Name*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Last Name*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Email*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Phone Number</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="email">Nationality*</label>
                                                <select class="form-control input-sm" id="years">
                                                    <option>-- Select No of Year --</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="address">Message:</label>
                                                <textarea class="form-control input-sm" id="address"
                                                          rows="5"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="button" class="btn main-btn-style">Send</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4default">
                                            <div id="jssor_1"
                                                 style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                                                <!-- Loading Screen -->
                                                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                                    <div style="position:absolute;display:block;background:url('images/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                                </div>
                                                <div data-u="slides"
                                                     style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
                                                    <div data-p="144.50"><img data-u="image" src="images/img/01.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-01.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/02.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-02.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/03.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-03.jpg"/></div>
                                                    <a data-u="any" href="http://www.jssor.com" style="display:none">Image
                                                        Gallery</a>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/04.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-04.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/05.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-05.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/06.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-06.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/07.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-07.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/08.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-08.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/09.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-09.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/10.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-10.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/11.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-11.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/12.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-12.jpg"/></div>
                                                </div>
                                                <!-- Thumbnail Navigator -->
                                                <div data-u="thumbnavigator" class="jssort01"
                                                     style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;"
                                                     data-autocenter="1">
                                                    <!-- Thumbnail Item Skin Begin -->
                                                    <div data-u="slides" style="cursor: default;">
                                                        <div data-u="prototype" class="p">
                                                            <div class="w">
                                                                <div data-u="thumbnailtemplate" class="t"></div>
                                                            </div>
                                                            <div class="c"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Thumbnail Item Skin End -->
                                                </div>
                                                <!-- Arrow Navigator -->
                                                <span data-u="arrowleft" class="jssora05l"
                                                      style="top:158px;left:8px;width:40px;height:40px;"></span> <span
                                                        data-u="arrowright" class="jssora05r"
                                                        style="top:158px;right:8px;width:40px;height:40px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="details-share-div"><a class="share-btn share-btn-branded share-btn-twitter"
                                                              href="#"
                                                              title="Share on Twitter"> <span
                                            class="share-btn-icon"></span> <span class="share-btn-text"><i
                                                class="fa fa-twitter" aria-hidden="true"></i> Twitter</span> </a>

                                <!-- Branded Facebook button -->
                                <a class="share-btn share-btn-branded share-btn-facebook"
                                   href="#"
                                   title="Share on Facebook"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</span>
                                </a>

                                <!-- Branded Google+ button -->
                                <a class="share-btn share-btn-branded share-btn-googleplus"
                                   href="#"
                                   title="Share on Google+"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-google-plus" aria-hidden="true"></i> Google+</span>
                                </a>

                                <!-- Branded LinkedIn button -->
                                <a class="share-btn share-btn-branded share-btn-linkedin"
                                   href="#"
                                   title="Share on LinkedIn"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</span>
                                </a>

                                <!-- Branded Pinterest button -->
                                <a class="share-btn share-btn-branded share-btn-pinterest"
                                   href="#"
                                   title="Share on Pinterest"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pinterest</span>
                                </a></div>
                        </div>
                        <div id="content-wrap2">
                            <div class="price-decoration2 block-after-indent  screen-only">
                                <div class="price-decoration__value"><i class="fa fa-tag"></i> <span class="amount"><small>AED </small>580</span>
                                    <span class="amount"><small>USD </small>159</span></div>
                                <div class="price-decoration__label"><i class="td-clock-2"></i> Duration 4 Hours</div>
                            </div>
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab5default" data-toggle="tab">Book This Tour</a>
                                        </li>
                                        <li><a href="#tab6default" data-toggle="tab">Details</a></li>
                                        <li><a href="#tab7default" data-toggle="tab">Ask Questions</a></li>
                                        <li><a href="#tab8default" data-toggle="tab">Photos</a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab5default">
                                            <div class="col-md-12">
                                                <h4><b>Booking Details</h4>
                                                </b></div>
                                            <form>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="arrival">Tour Date *</label>
                                                        <input type="text" class="form-control input-sm datepicker"
                                                               id="arrival" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Pickup Time*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Location*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">End Location*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Guide Language*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="gender">Pref.currency</label>
                                                                <select class="form-control input-sm" id="months">
                                                                    <option>-- Select No of Month --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="gender">Payment Mode *</label>
                                                                <select class="form-control input-sm" id="months">
                                                                    <option>-- Select No of Month --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Adults*</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Children</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="Age 5-12">
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Infants</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="Age < 5">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <br>
                                                    <div class="col-md-12">
                                                        <h4><b>Personal Details</h4>
                                                        </b></div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">First Name*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Last Name*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Email*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Confirm Email*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="email">Nationality*</label>
                                                        <select class="form-control input-sm" id="years">
                                                            <option>-- Select No of Year --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 col-sm-6">
                                                                <label for="city">Cell No *</label>
                                                                <select class="form-control input-sm" id="years">
                                                                    <option>-- Select No of Year --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-9 col-sm-6">
                                                                <label for="city"></label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="city" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 col-sm-6">
                                                                <label for="city">Cell No2 *</label>
                                                                <select class="form-control input-sm" id="years">
                                                                    <option>-- Select No of Year --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-9 col-sm-6">
                                                                <label for="city"></label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="city" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="email">How Did You Discover Us *</label>
                                                        <select class="form-control input-sm" id="years">
                                                            <option>-- Select No of Year --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="address">Special Requests</label>
                                                        <textarea class="form-control input-sm" id="address"
                                                                  rows="5"></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="button" class="btn main-btn-style">Confirm
                                                            Booking
                                                        </button>
                                                        &nbsp;
                                                        <button type="button" class="btn main-btn-style">Clear</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="tab6default">
                                            <h3> What is Lorem Ipsum?</h3>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting, remaining essentially unchanged. It
                                            was popularised in the 1960s with the release of Letraset sheets containing
                                            Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum. <br>
                                            <h3>Why do we use it?</h3>
                                            It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English. Many desktop publishing packages and web page editors now use Lorem
                                            Ipsum as their default model text, and a search for 'lorem ipsum' will
                                            uncover many web sites still in their infancy. Various versions have evolved
                                            over the years, sometimes by accident, sometimes on purpose (injected humour
                                            and the like).
                                        </div>
                                        <div class="tab-pane fade" id="tab7default">
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">First Name*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Last Name*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Email*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Phone Number</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="email">Nationality*</label>
                                                <select class="form-control input-sm" id="years">
                                                    <option>-- Select No of Year --</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="address">Message:</label>
                                                <textarea class="form-control input-sm" id="address"
                                                          rows="5"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="button" class="btn main-btn-style">Send</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab8default">
                                            <div id="jssor_1"
                                                 style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                                                <!-- Loading Screen -->
                                                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                                    <div style="position:absolute;display:block;background:url('images/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                                </div>
                                                <div data-u="slides"
                                                     style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
                                                    <div data-p="144.50"><img data-u="image" src="images/img/01.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-01.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/02.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-02.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/03.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-03.jpg"/></div>
                                                    <a data-u="any" href="http://www.jssor.com" style="display:none">Image
                                                        Gallery</a>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/04.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-04.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/05.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-05.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/06.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-06.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/07.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-07.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/08.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-08.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/09.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-09.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/10.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-10.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/11.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-11.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/12.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-12.jpg"/></div>
                                                </div>
                                                <!-- Thumbnail Navigator -->
                                                <div data-u="thumbnavigator" class="jssort01"
                                                     style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;"
                                                     data-autocenter="1">
                                                    <!-- Thumbnail Item Skin Begin -->
                                                    <div data-u="slides" style="cursor: default;">
                                                        <div data-u="prototype" class="p">
                                                            <div class="w">
                                                                <div data-u="thumbnailtemplate" class="t"></div>
                                                            </div>
                                                            <div class="c"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Thumbnail Item Skin End -->
                                                </div>
                                                <!-- Arrow Navigator -->
                                                <span data-u="arrowleft" class="jssora05l"
                                                      style="top:158px;left:8px;width:40px;height:40px;"></span> <span
                                                        data-u="arrowright" class="jssora05r"
                                                        style="top:158px;right:8px;width:40px;height:40px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="details-share-div"><a class="share-btn share-btn-branded share-btn-twitter"
                                                              href="#"
                                                              title="Share on Twitter"> <span
                                            class="share-btn-icon"></span> <span class="share-btn-text"><i
                                                class="fa fa-twitter" aria-hidden="true"></i> Twitter</span> </a>

                                <!-- Branded Facebook button -->
                                <a class="share-btn share-btn-branded share-btn-facebook"
                                   href="#"
                                   title="Share on Facebook"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</span>
                                </a>

                                <!-- Branded Google+ button -->
                                <a class="share-btn share-btn-branded share-btn-googleplus"
                                   href="#"
                                   title="Share on Google+"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-google-plus" aria-hidden="true"></i> Google+</span>
                                </a>

                                <!-- Branded LinkedIn button -->
                                <a class="share-btn share-btn-branded share-btn-linkedin"
                                   href="#"
                                   title="Share on LinkedIn"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</span>
                                </a>

                                <!-- Branded Pinterest button -->
                                <a class="share-btn share-btn-branded share-btn-pinterest"
                                   href="#"
                                   title="Share on Pinterest"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pinterest</span>
                                </a></div>
                        </div>

                        <div id="content-wrap3">
                            <div class="price-decoration2 block-after-indent  screen-only">
                                <div class="price-decoration__value"><i class="fa fa-tag"></i> <span class="amount"><small>AED </small>580</span>
                                    <span class="amount"><small>USD </small>159</span></div>
                                <div class="price-decoration__label"><i class="td-clock-2"></i> Duration 4 Hours</div>
                            </div>
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab9default" data-toggle="tab">Book This Tour</a>
                                        </li>
                                        <li><a href="#tab10default" data-toggle="tab">Details</a></li>
                                        <li><a href="#tab11default" data-toggle="tab">Ask Questions</a></li>
                                        <li><a href="#tab12default" data-toggle="tab">Photos</a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab9default">
                                            <div class="col-md-12">
                                                <h4><b>Booking Details</h4>
                                                </b></div>
                                            <form>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="arrival">Tour Date *</label>
                                                        <input type="text" class="form-control input-sm datepicker"
                                                               id="arrival" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Pickup Time*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Location*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">End Location*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Guide Language*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="gender">Pref.currency</label>
                                                                <select class="form-control input-sm" id="months">
                                                                    <option>-- Select No of Month --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="gender">Payment Mode *</label>
                                                                <select class="form-control input-sm" id="months">
                                                                    <option>-- Select No of Month --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Adults*</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Children</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="Age 5-12">
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Infants</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="Age < 5">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <br>
                                                    <div class="col-md-12">
                                                        <h4><b>Personal Details</h4>
                                                        </b></div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">First Name*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Last Name*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Email*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Confirm Email*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="email">Nationality*</label>
                                                        <select class="form-control input-sm" id="years">
                                                            <option>-- Select No of Year --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 col-sm-6">
                                                                <label for="city">Cell No *</label>
                                                                <select class="form-control input-sm" id="years">
                                                                    <option>-- Select No of Year --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-9 col-sm-6">
                                                                <label for="city"></label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="city" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 col-sm-6">
                                                                <label for="city">Cell No2 *</label>
                                                                <select class="form-control input-sm" id="years">
                                                                    <option>-- Select No of Year --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-9 col-sm-6">
                                                                <label for="city"></label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="city" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="email">How Did You Discover Us *</label>
                                                        <select class="form-control input-sm" id="years">
                                                            <option>-- Select No of Year --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="address">Special Requests</label>
                                                        <textarea class="form-control input-sm" id="address"
                                                                  rows="5"></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="button" class="btn main-btn-style">Confirm
                                                            Booking
                                                        </button>
                                                        &nbsp;
                                                        <button type="button" class="btn main-btn-style">Clear</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="tab10default">
                                            <h3> What is Lorem Ipsum?</h3>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting, remaining essentially unchanged. It
                                            was popularised in the 1960s with the release of Letraset sheets containing
                                            Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum. <br>
                                            <h3>Why do we use it?</h3>
                                            It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English. Many desktop publishing packages and web page editors now use Lorem
                                            Ipsum as their default model text, and a search for 'lorem ipsum' will
                                            uncover many web sites still in their infancy. Various versions have evolved
                                            over the years, sometimes by accident, sometimes on purpose (injected humour
                                            and the like).
                                        </div>
                                        <div class="tab-pane fade" id="tab11default">
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">First Name*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Last Name*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Email*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Phone Number</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="email">Nationality*</label>
                                                <select class="form-control input-sm" id="years">
                                                    <option>-- Select No of Year --</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="address">Message:</label>
                                                <textarea class="form-control input-sm" id="address"
                                                          rows="5"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="button" class="btn main-btn-style">Send</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab12default">
                                            <div id="jssor_1"
                                                 style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                                                <!-- Loading Screen -->
                                                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                                    <div style="position:absolute;display:block;background:url('images/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                                </div>
                                                <div data-u="slides"
                                                     style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
                                                    <div data-p="144.50"><img data-u="image" src="images/img/01.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-01.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/02.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-02.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/03.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-03.jpg"/></div>
                                                    <a data-u="any" href="http://www.jssor.com" style="display:none">Image
                                                        Gallery</a>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/04.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-04.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/05.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-05.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/06.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-06.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/07.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-07.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/08.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-08.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/09.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-09.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/10.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-10.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/11.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-11.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/12.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-12.jpg"/></div>
                                                </div>
                                                <!-- Thumbnail Navigator -->
                                                <div data-u="thumbnavigator" class="jssort01"
                                                     style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;"
                                                     data-autocenter="1">
                                                    <!-- Thumbnail Item Skin Begin -->
                                                    <div data-u="slides" style="cursor: default;">
                                                        <div data-u="prototype" class="p">
                                                            <div class="w">
                                                                <div data-u="thumbnailtemplate" class="t"></div>
                                                            </div>
                                                            <div class="c"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Thumbnail Item Skin End -->
                                                </div>
                                                <!-- Arrow Navigator -->
                                                <span data-u="arrowleft" class="jssora05l"
                                                      style="top:158px;left:8px;width:40px;height:40px;"></span> <span
                                                        data-u="arrowright" class="jssora05r"
                                                        style="top:158px;right:8px;width:40px;height:40px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="details-share-div"><a class="share-btn share-btn-branded share-btn-twitter"
                                                              href="#"
                                                              title="Share on Twitter"> <span
                                            class="share-btn-icon"></span> <span class="share-btn-text"><i
                                                class="fa fa-twitter" aria-hidden="true"></i> Twitter</span> </a>

                                <!-- Branded Facebook button -->
                                <a class="share-btn share-btn-branded share-btn-facebook"
                                   href="#"
                                   title="Share on Facebook"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</span>
                                </a>

                                <!-- Branded Google+ button -->
                                <a class="share-btn share-btn-branded share-btn-googleplus"
                                   href="#"
                                   title="Share on Google+"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-google-plus" aria-hidden="true"></i> Google+</span>
                                </a>

                                <!-- Branded LinkedIn button -->
                                <a class="share-btn share-btn-branded share-btn-linkedin"
                                   href="#"
                                   title="Share on LinkedIn"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</span>
                                </a>

                                <!-- Branded Pinterest button -->
                                <a class="share-btn share-btn-branded share-btn-pinterest"
                                   href="#"
                                   title="Share on Pinterest"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pinterest</span>
                                </a></div>
                        </div>
                        <div id="content-wrap4">
                            <div class="price-decoration2 block-after-indent  screen-only">
                                <div class="price-decoration__value"><i class="fa fa-tag"></i> <span class="amount"><small>AED </small>580</span>
                                    <span class="amount"><small>USD </small>159</span></div>
                                <div class="price-decoration__label"><i class="td-clock-2"></i> Duration 4 Hours</div>
                            </div>
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab13default" data-toggle="tab">Book This Tour</a>
                                        </li>
                                        <li><a href="#tab14default" data-toggle="tab">Details</a></li>
                                        <li><a href="#tab15default" data-toggle="tab">Ask Questions</a></li>
                                        <li><a href="#tab16default" data-toggle="tab">Photos</a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab13default">
                                            <div class="col-md-12">
                                                <h4><b>Booking Details</h4>
                                                </b></div>
                                            <form>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="arrival">Tour Date *</label>
                                                        <input type="text" class="form-control input-sm datepicker"
                                                               id="arrival" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Pickup Time*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Location*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">End Location*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Guide Language*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="gender">Pref.currency</label>
                                                                <select class="form-control input-sm" id="months">
                                                                    <option>-- Select No of Month --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="gender">Payment Mode *</label>
                                                                <select class="form-control input-sm" id="months">
                                                                    <option>-- Select No of Month --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Adults*</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Children</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="Age 5-12">
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Infants</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="Age < 5">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <br>
                                                    <div class="col-md-12">
                                                        <h4><b>Personal Details</h4>
                                                        </b></div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">First Name*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Last Name*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Email*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Confirm Email*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="email">Nationality*</label>
                                                        <select class="form-control input-sm" id="years">
                                                            <option>-- Select No of Year --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 col-sm-6">
                                                                <label for="city">Cell No *</label>
                                                                <select class="form-control input-sm" id="years">
                                                                    <option>-- Select No of Year --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-9 col-sm-6">
                                                                <label for="city"></label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="city" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 col-sm-6">
                                                                <label for="city">Cell No2 *</label>
                                                                <select class="form-control input-sm" id="years">
                                                                    <option>-- Select No of Year --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-9 col-sm-6">
                                                                <label for="city"></label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="city" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="email">How Did You Discover Us *</label>
                                                        <select class="form-control input-sm" id="years">
                                                            <option>-- Select No of Year --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="address">Special Requests</label>
                                                        <textarea class="form-control input-sm" id="address"
                                                                  rows="5"></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="button" class="btn main-btn-style">Confirm
                                                            Booking
                                                        </button>
                                                        &nbsp;
                                                        <button type="button" class="btn main-btn-style">Clear</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="tab14default">
                                            <h3> What is Lorem Ipsum?</h3>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting, remaining essentially unchanged. It
                                            was popularised in the 1960s with the release of Letraset sheets containing
                                            Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum. <br>
                                            <h3>Why do we use it?</h3>
                                            It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English. Many desktop publishing packages and web page editors now use Lorem
                                            Ipsum as their default model text, and a search for 'lorem ipsum' will
                                            uncover many web sites still in their infancy. Various versions have evolved
                                            over the years, sometimes by accident, sometimes on purpose (injected humour
                                            and the like).
                                        </div>
                                        <div class="tab-pane fade" id="tab15default">
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">First Name*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Last Name*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Email*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Phone Number</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="email">Nationality*</label>
                                                <select class="form-control input-sm" id="years">
                                                    <option>-- Select No of Year --</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="address">Message:</label>
                                                <textarea class="form-control input-sm" id="address"
                                                          rows="5"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="button" class="btn main-btn-style">Send</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab16default">
                                            <div id="jssor_1"
                                                 style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                                                <!-- Loading Screen -->
                                                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                                    <div style="position:absolute;display:block;background:url('images/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                                </div>
                                                <div data-u="slides"
                                                     style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
                                                    <div data-p="144.50"><img data-u="image" src="images/img/01.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-01.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/02.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-02.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/03.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-03.jpg"/></div>
                                                    <a data-u="any" href="http://www.jssor.com" style="display:none">Image
                                                        Gallery</a>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/04.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-04.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/05.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-05.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/06.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-06.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/07.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-07.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/08.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-08.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/09.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-09.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/10.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-10.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/11.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-11.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/12.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-12.jpg"/></div>
                                                </div>
                                                <!-- Thumbnail Navigator -->
                                                <div data-u="thumbnavigator" class="jssort01"
                                                     style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;"
                                                     data-autocenter="1">
                                                    <!-- Thumbnail Item Skin Begin -->
                                                    <div data-u="slides" style="cursor: default;">
                                                        <div data-u="prototype" class="p">
                                                            <div class="w">
                                                                <div data-u="thumbnailtemplate" class="t"></div>
                                                            </div>
                                                            <div class="c"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Thumbnail Item Skin End -->
                                                </div>
                                                <!-- Arrow Navigator -->
                                                <span data-u="arrowleft" class="jssora05l"
                                                      style="top:158px;left:8px;width:40px;height:40px;"></span> <span
                                                        data-u="arrowright" class="jssora05r"
                                                        style="top:158px;right:8px;width:40px;height:40px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="details-share-div"><a class="share-btn share-btn-branded share-btn-twitter"
                                                              href="#"
                                                              title="Share on Twitter"> <span
                                            class="share-btn-icon"></span> <span class="share-btn-text"><i
                                                class="fa fa-twitter" aria-hidden="true"></i> Twitter</span> </a>

                                <!-- Branded Facebook button -->
                                <a class="share-btn share-btn-branded share-btn-facebook"
                                   href="#"
                                   title="Share on Facebook"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</span>
                                </a>

                                <!-- Branded Google+ button -->
                                <a class="share-btn share-btn-branded share-btn-googleplus"
                                   href="#"
                                   title="Share on Google+"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-google-plus" aria-hidden="true"></i> Google+</span>
                                </a>

                                <!-- Branded LinkedIn button -->
                                <a class="share-btn share-btn-branded share-btn-linkedin"
                                   href="#"
                                   title="Share on LinkedIn"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</span>
                                </a>

                                <!-- Branded Pinterest button -->
                                <a class="share-btn share-btn-branded share-btn-pinterest"
                                   href="#"
                                   title="Share on Pinterest"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pinterest</span>
                                </a></div>
                        </div>
                        <div id="content-wrap5">
                            <div class="price-decoration2 block-after-indent  screen-only">
                                <div class="price-decoration__value"><i class="fa fa-tag"></i> <span class="amount"><small>AED </small>580</span>
                                    <span class="amount"><small>USD </small>159</span></div>
                                <div class="price-decoration__label"><i class="td-clock-2"></i> Duration 4 Hours</div>
                            </div>
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab17default" data-toggle="tab">Book This Tour</a>
                                        </li>
                                        <li><a href="#tab18default" data-toggle="tab">Details</a></li>
                                        <li><a href="#tab19default" data-toggle="tab">Ask Questions</a></li>
                                        <li><a href="#tab20default" data-toggle="tab">Photos</a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab17default">
                                            <div class="col-md-12">
                                                <h4><b>Booking Details</h4>
                                                </b></div>
                                            <form>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="arrival">Tour Date *</label>
                                                        <input type="text" class="form-control input-sm datepicker"
                                                               id="arrival" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Pickup Time*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Location*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">End Location*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="name">Preferred Guide Language*</label>
                                                        <select class="form-control input-sm" id="months">
                                                            <option>-- Select No of Month --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="gender">Pref.currency</label>
                                                                <select class="form-control input-sm" id="months">
                                                                    <option>-- Select No of Month --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="gender">Payment Mode *</label>
                                                                <select class="form-control input-sm" id="months">
                                                                    <option>-- Select No of Month --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Adults*</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Children</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="Age 5-12">
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="name">Infants</label>
                                                        <input type="text" class="form-control input-sm" id="name"
                                                               placeholder="Age < 5">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <br>
                                                    <div class="col-md-12">
                                                        <h4><b>Personal Details</h4>
                                                        </b></div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">First Name*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Last Name*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Email*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <label for="email">Confirm Email*</label>
                                                        <input type="email" class="form-control input-sm" id="email"
                                                               placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="email">Nationality*</label>
                                                        <select class="form-control input-sm" id="years">
                                                            <option>-- Select No of Year --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 col-sm-6">
                                                                <label for="city">Cell No *</label>
                                                                <select class="form-control input-sm" id="years">
                                                                    <option>-- Select No of Year --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-9 col-sm-6">
                                                                <label for="city"></label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="city" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-3 col-sm-6">
                                                                <label for="city">Cell No2 *</label>
                                                                <select class="form-control input-sm" id="years">
                                                                    <option>-- Select No of Year --</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-9 col-sm-6">
                                                                <label for="city"></label>
                                                                <input type="text" class="form-control input-sm"
                                                                       id="city" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="email">How Did You Discover Us *</label>
                                                        <select class="form-control input-sm" id="years">
                                                            <option>-- Select No of Year --</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="address">Special Requests</label>
                                                        <textarea class="form-control input-sm" id="address"
                                                                  rows="5"></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="button" class="btn main-btn-style">Confirm
                                                            Booking
                                                        </button>
                                                        &nbsp;
                                                        <button type="button" class="btn main-btn-style">Clear</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="tab18default">
                                            <h3> What is Lorem Ipsum?</h3>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting, remaining essentially unchanged. It
                                            was popularised in the 1960s with the release of Letraset sheets containing
                                            Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum. <br>
                                            <h3>Why do we use it?</h3>
                                            It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English. Many desktop publishing packages and web page editors now use Lorem
                                            Ipsum as their default model text, and a search for 'lorem ipsum' will
                                            uncover many web sites still in their infancy. Various versions have evolved
                                            over the years, sometimes by accident, sometimes on purpose (injected humour
                                            and the like).
                                        </div>
                                        <div class="tab-pane fade" id="tab19default">
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">First Name*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Last Name*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Email*</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Phone Number</label>
                                                <input type="email" class="form-control input-sm" id="email"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="email">Nationality*</label>
                                                <select class="form-control input-sm" id="years">
                                                    <option>-- Select No of Year --</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="address">Message:</label>
                                                <textarea class="form-control input-sm" id="address"
                                                          rows="5"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="button" class="btn main-btn-style">Send</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab20default">
                                            <div id="jssor_1"
                                                 style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                                                <!-- Loading Screen -->
                                                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                                    <div style="position:absolute;display:block;background:url('images/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                                </div>
                                                <div data-u="slides"
                                                     style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
                                                    <div data-p="144.50"><img data-u="image" src="images/img/01.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-01.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/02.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-02.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/03.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-03.jpg"/></div>
                                                    <a data-u="any" href="http://www.jssor.com" style="display:none">Image
                                                        Gallery</a>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/04.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-04.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/05.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-05.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/06.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-06.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/07.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-07.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/08.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-08.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/09.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-09.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/10.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-10.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/11.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-11.jpg"/></div>
                                                    <div data-p="144.50" style="display:none;"><img data-u="image"
                                                                                                    src="images/img/12.jpg"/>
                                                        <img data-u="thumb" src="images/img/thumb-12.jpg"/></div>
                                                </div>
                                                <!-- Thumbnail Navigator -->
                                                <div data-u="thumbnavigator" class="jssort01"
                                                     style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;"
                                                     data-autocenter="1">
                                                    <!-- Thumbnail Item Skin Begin -->
                                                    <div data-u="slides" style="cursor: default;">
                                                        <div data-u="prototype" class="p">
                                                            <div class="w">
                                                                <div data-u="thumbnailtemplate" class="t"></div>
                                                            </div>
                                                            <div class="c"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Thumbnail Item Skin End -->
                                                </div>
                                                <!-- Arrow Navigator -->
                                                <span data-u="arrowleft" class="jssora05l"
                                                      style="top:158px;left:8px;width:40px;height:40px;"></span> <span
                                                        data-u="arrowright" class="jssora05r"
                                                        style="top:158px;right:8px;width:40px;height:40px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="details-share-div"><a class="share-btn share-btn-branded share-btn-twitter"
                                                              href="#"
                                                              title="Share on Twitter"> <span
                                            class="share-btn-icon"></span> <span class="share-btn-text"><i
                                                class="fa fa-twitter" aria-hidden="true"></i> Twitter</span> </a>

                                <!-- Branded Facebook button -->
                                <a class="share-btn share-btn-branded share-btn-facebook"
                                   href="#"
                                   title="Share on Facebook"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</span>
                                </a>

                                <!-- Branded Google+ button -->
                                <a class="share-btn share-btn-branded share-btn-googleplus"
                                   href="#"
                                   title="Share on Google+"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-google-plus" aria-hidden="true"></i> Google+</span>
                                </a>

                                <!-- Branded LinkedIn button -->
                                <a class="share-btn share-btn-branded share-btn-linkedin"
                                   href="#"
                                   title="Share on LinkedIn"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</span>
                                </a>

                                <!-- Branded Pinterest button -->
                                <a class="share-btn share-btn-branded share-btn-pinterest"
                                   href="#"
                                   title="Share on Pinterest"> <span class="share-btn-icon"></span> <span
                                            class="share-btn-text"><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pinterest</span>
                                </a></div>
                        </div>

                        <div class="details-div-last">
                            <h3>You May Also Like</h3>
                            <br>
                            <div class="col-md-4">
                                <div class="item-main-div1"><img src="images/carous1/fit (1).jpg"
                                                                 class="img-responsive item-1-img">
                                    <div class="price-first-position">
                                        <div class="price-div-bg-text">
                                            <center>
                                                <h4><b>AED 580</b></h4>
                                                <h5><b>USD 159</b></h5>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="item-head-1">
                                        <center>
                                            <h4 class="atgrid__item__title"><a href="#">4 Hours Dubai Private Tour</a>
                                            </h4>
                                        </center>
                                    </div>
                                    <div class="item--footer-1">
                                        <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;4
                                            Hours
                                        </div>
                                        <div class="col-md-6"><a href="#">Read More <i class="fa fa-long-arrow-right"
                                                                                       aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item-main-div1"><img src="images/carous1/fit (2).jpg"
                                                                 class="img-responsive item-1-img">
                                    <div class="price-first-position">
                                        <div class="price-div-bg-text">
                                            <center>
                                                <h4><b>AED 580</b></h4>
                                                <h5><b>USD 159</b></h5>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="item-head-1">
                                        <center>
                                            <h4 class="atgrid__item__title"><a href="#">4 Hours Dubai Private Tour</a>
                                            </h4>
                                        </center>
                                    </div>
                                    <div class="item--footer-1">
                                        <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;4
                                            Hours
                                        </div>
                                        <div class="col-md-6"><a href="#">Read More <i class="fa fa-long-arrow-right"
                                                                                       aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item-main-div1"><img src="images/carous1/fit (7).jpg"
                                                                 class="img-responsive item-1-img">
                                    <div class="price-first-position">
                                        <div class="price-div-bg-text">
                                            <center>
                                                <h4><b>AED 580</b></h4>
                                                <h5><b>USD 159</b></h5>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="item-head-1">
                                        <center>
                                            <h4 class="atgrid__item__title"><a href="#">4 Hours Dubai Private Tour</a>
                                            </h4>
                                        </center>
                                    </div>
                                    <div class="item--footer-1">
                                        <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;4
                                            Hours
                                        </div>
                                        <div class="col-md-6"><a href="#">Read More <i class="fa fa-long-arrow-right"
                                                                                       aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection