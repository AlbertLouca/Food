@extends('layout')
@section('content')

<?php
use App\item; 
use App\selectedfood;



?>
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
                <li><a href="/home">Home</a></li>
                
                <li><a href='/menu'>{{ ucfirst(Request::path())}}</a></li>
            </ul>
             </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
		<div class="row">
		
			
			<div class="col-md-3">
            	 
				<div class="box_style_1">
					<ul id="cat_nav">
						@foreach ($foodcategory as $category)
						<?php $counter=0  ?>
						
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
            <?php  ?>
			<div class="col-md-6">
				<div class="box_style_2" id="main_menu">
					<h2 class="inner">Menu</h2>
					@foreach ($foodcategory as $category)
					
					<h3 class="nomargin_top" id={{str_replace(' ', '_', $category->Name)}}>{{$category->Name}}</h3>
					<p>
						
						 {{$category->Description}}		</p>
						
							
						

					<table class="table table-striped cart-list">
					<thead>
					<tr>
						<th width='600px'>
							 Item
						</th>
						<th >
							 Price
						</th>
						<th>
							 Order
						</th>
					</tr>
					</thead>
					
						@foreach ($item as $i)
						<?php  $im=new item($i);
						
						 ;
						//$im->Name=$i->Name ;
						//$im->
						//die(gettype($im->CategoryID));
						$order=Session::has('order') ? Session::get('order') :null;
						//if ($order) die($order->items[0]->Name .$order->items[0]->CategoryID );
						?>
						@if ($i->CategoryID!=$category->id)
							@continue
						@endif
						<tbody>
					  <tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="{{$i->Photo}}" alt="thumb"></figure>
							<h5>{{$i->Name}} </h5>
							<p  style='margin-right:10px;'>
								{{$i->Description}}
							</p>
						</td>
						<td>
							<strong style='margin-right:10px;'>EGP {{$i->Price}}</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                          <!--- <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a> -->
                            <div >
								{{--  
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
								--}}
                                <h5> extra</h5>
                                
									@foreach ($extra as $ex)
										@if ($ex->ItemID==$i->id)
										<label>	
									
								
                                <input type="checkbox" value="{{$ex->Name}}">{{$ex->Name}} <span style='margin-left:40px;'> +EGP {{$ex->Price}}</span>
								</label>
									@endif
								
									
									
									@endforeach
								 
                                <a href= {{ route('addtocart',['item'=> $im->id]) }} class="add_to_basket">Add to cart</a>
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
							 TOTAL <span class="pull-right"> EGP <?php echo $total ;

                           $order->total=$total; Session::put('order',$order);?> </span>
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
					<hr>  <?php if($order) 
					echo '<a class="btn_full" href="/cart/create">Order now</a>';
?>
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
			</div><!-- End col-md-3 -->
            
		</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->
<script>
function remove_item(){
alert('test');




}


</script>
@endsection
