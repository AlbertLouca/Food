@extends ('layout') 


@section('content')

<!-- SubHeader =============================================== -->
<section class="header-video">
    <div id="hero_video">
        <div id="sub_content">
            <h1>Order Takeaway or Delivery Food</h1>
            <p>
               Choose your Order Address
            </p>
            <form method="post" action="list_page.php">
                <div id="custom-search-input">
                    <div class="input-group">
                        <input type="text" class=" search-query" placeholder="Your Address or postal code">
                        <span class="input-group-btn">
                        <input type="submit" class="btn_search" value="submit">
                        </span>
                    </div>
                </div>
            </form>
        </div><!-- End sub_content -->
    </div>
    <img src="/img/video_fix.png" alt="" class="header-video--media" data-video-src="" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
    
    </section><!-- End Header video -->
    <!-- End SubHeader ============================================ -->
    
   <!-- Content ================================================== -->
         <div class="container margin_60">
        
         <div class="main_title">
            <h2 class="nomargin_top" style="padding-top:0">How it works</h2>
            <p>
                Just follow those easy steps :)
            </p>
        </div>
        <div class="row">
            
            <div class="col-md-3">
                <div class="box_home" id="one">
                    <span>1</span>
                    <h3>Search by address</h3>
                    <p>
                        Find all restaurants available in your zone.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box_home" id="two">
                    <span>2</span>
                    <h3>Choose your order</h3>
                    <p>
                        Find your desired dish from a list of our special food
                    </p>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="box_home" id="three">
                    <span>3</span>
                    <h3>Pay by card or cash</h3>
                    <p>
                        It's quick, easy and totally secure.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box_home" id="four">
                    <span>4</span>
                    <h3>Delivery </h3>
                    <p>
                        You are lazy? Your food is coming straight for you
                    </p>
                </div>
            </div>
        </div><!-- End row -->

        
        <div id="delivery_time" class="hidden-xs">
            <strong><span>2</span><span>5</span></strong>
            <h4>The minutes that usually takes to deliver!</h4>
        </div>
        </div><!-- End container -->

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/Angelic_Grilled_Peach_Prosciutto_Arugula_Balsamic_Pizza_recipe-1200x600-min.jpg" data-natural-width="1200" data-natural-height="600">
    <div class="parallax-content">
        <div class="sub_content">
            <i class="icon_mug"></i>
            <h3>We also deliver to your office</h3>
            <p>
                Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
            </p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End Content =============================================== -->
@endsection