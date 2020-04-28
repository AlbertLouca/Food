@extends('layout')
@section('content')

    
<!-- SubHeader =============================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="img/Angelic_Grilled_Peach_Prosciutto_Arugula_Balsamic_Pizza_recipe-1200x600-min.jpg" data-natural-width="1200" data-natural-height="600">
    <div id="subheader">
	<div id="sub_content">
 
                        <h1>Quick Food </h1>
                   </div><!-- End sub_content -->
</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Category</a></li>
                <li>{{ Request::path()}}</li>
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
		<div class="row">
		
			
			<div class="col-md-3">
            	 
				<div class="box_style_1">
					<ul id="cat_nav">
						@foreach ($foodcategory as $category)
						<?php $counter=0;?>
						
						@foreach ($item as $i)
							@if ($i->CategoryID===$category->id)
							  <?php $counter=$counter+1; ?>	
							@endif
						@endforeach
							<li><a href={{'#'.str_replace(' ', '_', $category->Name)}} class="active">{{$category->Name}} <span>(<?php echo $counter; ?>)</span></a></li>
						@endforeach
						
						
					</ul>
				</div><!-- End box_style_1 -->
                
				<div class="box_style_2 hidden-xs" id="help">
					<i class="icon_lifesaver"></i>
					<h4>Need <span>Help?</span></h4>
					<a href="tel://004542344599" class="phone">+45 423 445 99</a>
					<small>Monday to Friday 9.00am - 7.30pm</small>
				</div>
			</div><!-- End col-md-3 -->
            
			<div class="col-md-6">
				<div class="box_style_2" id="main_menu">
					<h2 class="inner">Menu</h2>
					@foreach ($foodcategory as $category)
					<h3 class="nomargin_top" id={{str_replace(' ', '_', $category->Name)}}>{{$category->Name}}</h3>
					<p>
						
						 Category Description here		</p>
						
							
						

					<table class="table table-striped cart-list">
					<thead>
					<tr>
						<th>
							 Item
						</th>
						<th>
							 Price
						</th>
						<th>
							 Order
						</th>
					</tr>
					</thead>
					<tbody>
						@foreach ($item as $i)
						@if ($i->CategoryID!=$category->id)
							@continue
						@endif
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="{{$i->Photo}}" alt="thumb"></figure>
							<h5>{{$i->Name}} </h5>
							<p>
								{{$i->Description}}
							</p>
						</td>
						<td>
							<strong>{{$i->Price}}</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_1" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_1" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_1" >Extra Large <span>+ $8.30</span>
                                </label>
                                <h5>Add ingredients</h5>
                                <label>
                                <input type="checkbox" value="">Extra Tomato <span>+ $4.30</span>
                                </label>
                                <label>
                                <input type="checkbox" value="">Extra Peppers <span>+ $2.50</span>
                                </label>
                                <a href="#0" class="add_to_basket">Add to cart</a>
                            </div>
                        </div>
                    </td>
					</tr>
					@endforeach
					
					</tbody>
					</table>
					<hr>
					
					@endforeach
				</div> 
			</div>
            
			<div class="col-md-3" id="sidebar">
            <div class="theiaStickySidebar">
				<div id="cart_box" >
					<h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
					<table class="table table_summary">
					 <tbody>
					  <tr>
						<td>
							<a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> Fajitas
						</td>
						<td>
							<strong class="pull-right">$11</strong>
						</td>
					  </tr>
				 	 <tr>
						<td>
							<a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Burrito
						</td>
						<td>
							<strong class="pull-right">$14</strong>
						</td>
					 </tr>
					 <tr>
						<td>
							<a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> Taco
						</td>
						<td>
							<strong class="pull-right">$2</strong>
						</td>
					 </tr>
					 <tr>
						<td>
							<a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Corona Beer
						</td>
						<td>
							<strong class="pull-right">$9</strong>
						</td>
					 </tr>
					 <tr>
						<td>
							<a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Cheese Cake
						</td>
						<td>
							<strong class="pull-right">$12</strong>
						</td>
					 </tr>
					 </tbody>
					 </table>
				 	 <hr>
				    	<div class="row" id="options_2">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
							<label><input type="radio" value="" checked name="option_2" class="icheck">Delivery</label>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
							<label><input type="radio" value="" name="option_2" class="icheck">Take Away</label>
						</div>
					 </div><!-- Edn options 2 -->
                    
					  <hr>
				    	<table class="table table_summary">
				    	<tbody>
				     	<tr>
						<td>
							 Subtotal <span class="pull-right">$56</span>
						</td>
					</tr>
					<tr>
						<td>
							 Delivery fee <span class="pull-right">$10</span>
						</td>
					</tr>
					<tr>
						<td class="total">
							 TOTAL <span class="pull-right">$48</span>
						</td>
					</tr>
					</tbody>
					</table>
					<hr>
					<a class="btn_full" href="/cart">Order now</a>
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
			</div><!-- End col-md-3 -->
            
		</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->
@endsection