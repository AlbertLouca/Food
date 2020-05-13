@extends('layout')
@section('content')


    
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_2.html" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_3.html" class="bs-wizard-dot"></a>
                </div>  
		</div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Category</a></li>
                <li>Page active</li>
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
		<div class="row">
			<div class="col-md-3">
            
				<div class="box_style_2 hidden-xs info">
					<h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
					<p>
						Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
					</p>
					<hr>
					<h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
					<p>
						Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
					</p>
				</div><!-- End box_style_1 -->
                
				<div class="box_style_2 hidden-xs" id="help">
					<i class="icon_lifesaver"></i>
					<h4>Need <span>Help?</span></h4>
					<a href="tel://004542344599" class="phone">+45 423 445 99</a>
					<small>Monday to Friday 9.00am - 7.30pm</small>
				</div>
                
			</div><!-- End col-md-3 -->


        
			<div class="col-md-6">
       
     <form method="post" action="{{ route('cart') }}">

 @csrf
			<div class="box_style_2" id="order_process">
                  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif

					<h2 class="inner">Your order details</h2>

				

 
<div class="form-group">
<h4> Please Enter a new address or select a previous one</h4>
<label>select previous address</label>
<br>
	<select  name='PreviousAddress'>
 <option></option>
@foreach ($address as $i)
    <option value="{{$i->id}}.{{$i->BuildingNo}}.{{$i->StreetName}}.{{$i->City}}.{{$i->Area}}.{{$i->Floor}}.{{$i->Appartement}}.{{$i->Landmark}}">{{$i->BuildingNo}}{{$i->StreetName}}  {{$i->City}}  {{$i->Area}} Floor {{$i->Floor}} Apt{{$i->Appartement}}	</option>
    
  @endforeach
</select>
</div>

                     <div class="form-group">
						<label>Street Name</label>
						<input type="text" class="form-control"  name="StreetName" placeholder="Street Name">
					</div>
					<div class="form-group">
						<label>Area</label>
						<input type="text" class="form-control"  name="Area" placeholder="Area">
					</div>
					<div class="form-group">
						<label>Building Number</label>
						<input type="text" id="tel_order" name="BuildingNo" class="form-control" placeholder="Building Number">
                        
                    
					</div>
					<div class="form-group">
						<label>Floor</label>
						<input type="text"  name="Floor" class="form-control" placeholder="Floor">
                      
					</div>
					<div class="form-group">
						<label>Appartment Number</label>
						<input type="text"   name="Appartement" class="form-control" placeholder="Appartment Number ">
					</div>
                    <div class="form-group">
						<label>Landmark</label>
						<input type="text"  name="Landmark" class="form-control" placeholder="Landmark ">
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>City</label>
								<input type="text"  name="City" class="form-control" placeholder="Your city">
							</div>
                          
						</div>
						<div class="col-md-6 col-sm-6">
							 <button class="btn_full"  type="submit" >Go to checkout</button>
                       
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							
						</div>
						

					</div>
					<hr>
					<div class="row">
                     
					</div>
      
 </form>
				</div><!-- End box_style_1 -->
			</div><!-- End col-md-6 -->
            
			<div class="col-md-3" id="sidebar">
            <div class="theiaStickySidebar">
				<div id="cart_box" >
					<h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
			<?php	$order=Session::has('order') ? Session::get('order') :null;
use App\selectedfood; ?>
				
				
				
					<table class="table table_summary">
						<?php $total=0; ?>
						@if ($order)
							
						
							@foreach ($order->items as $orderitem)
					 <tbody>
					  <tr> 
						  <!-- orderitem= object of type selected food -->
						<td>
						<a href={{ route('removefromcart',['item'=> $orderitem->id]) }} class="remove_item"><i class="icon_minus_alt"></i></a> <strong> {{$orderitem->Quantity}} x</strong> {{$orderitem->Name}}
						</td>
						<td>
						<strong class="pull-right">EGP {{$orderitem->Price*$orderitem->Quantity}}</strong> <?php $total = $total + $orderitem->Quantity*$orderitem->Price ?>  
						</td>
					  </tr>
					  @endforeach
				 	
					 </tbody>
					 </table>
				 	
				    	
                    
					  <hr> <hr>
				    	<table class="table table_summary">
				    	<tbody>
				     	<tr>
						<td>
							 Subtotal <span class="pull-right"> EGP <?php echo $total ?> </span>
						</td>
					</tr>
					<tr>
						<td>
							 Tax 24% <span class="pull-right"> EGP <?php echo $total*0.24;$total=$total+($total*0.24) ; ?></span>
						</td>
					</tr>
					<tr>
						<td class="total">
							 TOTAL <span class="pull-right"> EGP <?php echo $total ;?> </span>
						</td>
						
						@else
						<tr>
							<td class="" >
								Your Cart is empty
							</td>
						@endif
					</tr>
					</tbody>
					</table>
					<hr>
					
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
			</div><!-- End col-md-3 -->
            
		</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

@endsection
