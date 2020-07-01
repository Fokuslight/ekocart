<section class="tab p-0 mt-n15">
    <div class="container-fluid pr-sm-0">
        <div class="row">
            <div class="col-lg-10 col-md-11 ml-auto">
                <div class="shadow p-sm-8 p-3 bg-white">
                    <div class="row align-items-end mb-6">
                        <div class="col-lg-6">
                            <div>
                                <h6 class="text-primary mb-1">
                                    — New Collection
                                </h6>
                                <h2 class="mb-0">Our Products</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-right mt-4 mt-lg-0">
                            <!-- Nav tabs -->
                            <nav>
                                <div class="nav nav-tabs d-inline-block justify-content-md-end" id="nav-tab"
                                     role="tablist"><a class="nav-item nav-link active" id="nav-tab1" data-toggle="tab"
                                                       href="#tab1-1" role="tab" aria-selected="true">Top Rated</a>
                                    <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab1-2"
                                       role="tab" aria-selected="false">New Product</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- Tab panes -->
                            <div class="tab-content p-0" id="nav-tabContent">
                                <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                                    <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true"
                                         data-items="3" data-lg-items="3" data-md-items="2" data-sm-items="1">
                                        @foreach($productsRated as $product)
                                            <div class="item">
                                                @include('shop.includes.product-card')
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab1-2">
                                    <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true"
                                         data-items="3" data-lg-items="3" data-md-items="2" data-sm-items="1">
                                        @foreach($products as $product)
                                            <div class="item">
                                                @include('shop.includes.product-card')
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
