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
                <li>Page active</li>
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
		<div class="row">
        
			<div class="col-md-3">
            	<p><a href="list_page.php" class="btn_side">Back to search</a></p>
				<div class="box_style_1">
					<ul id="cat_nav">
						<li><a href="#starters" class="active">Starters <span>(141)</span></a></li>
						<li><a href="#main_courses">Main Courses <span>(20)</span></a></li>
						<li><a href="#beef">Beef <span>(12)</span></a></li>
						<li><a href="#desserts">Desserts <span>(11)</span></a></li>
						<li><a href="#drinks">Drinks <span>(20)</span></a></li>
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
					<h3 class="nomargin_top" id="starters">Starters</h3>
					<p>
						Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
					</p>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/218e32081ed5a1823dd92337e3a7dc09.jpg" alt="thumb"></figure>
							<h5>1. Mexican Enchiladas</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 9,40</strong>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/218e32081ed5a1823dd92337e3a7dc09.jpg" alt="thumb"></figure>
							<h5>2. Fajitas</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 6,80</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_2" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_2" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_2" >Extra Large <span>+ $8.30</span>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/218e32081ed5a1823dd92337e3a7dc09.jpg" alt="thumb"></figure>
							<h5>3. Royal Fajitas</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 5,70</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_3" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_3" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_3" >Extra Large <span>+ $8.30</span>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/218e32081ed5a1823dd92337e3a7dc09.jpg" alt="thumb"></figure>
							<h5>4. Chicken Enchilada Wrap</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 5,20</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_4" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_4" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_4" >Extra Large <span>+ $8.30</span>
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
					</tbody>
					</table>
					<hr>
					<h3 id="main_courses">Main courses</h3>
					<p>
						Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
					</p>
					<table class="table table-striped cart-list ">
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-5.jpg" alt="thumb"></figure>
							<h5>5. Cheese Quesadilla</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 12,00</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_5" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_5" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_5" >Extra Large <span>+ $8.30</span>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-6.jpg" alt="thumb"></figure>
							<h5>6. Chorizo & Cheese</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 24,71</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_6" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_6" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_6" >Extra Large <span>+ $8.30</span>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-7.jpg" alt="thumb"></figure>
							<h5>7. Beef Taco</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 8,70</strong>
						</td>
						<td class="options">
							<a href="#0"><i class="icon_plus_alt2"></i></a>
						</td>
					</tr>
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-8.jpg" alt="thumb"></figure>
							<h5>8. Minced Beef Double Layer</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 6,30</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_7" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_7" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_7" >Extra Large <span>+ $8.30</span>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-9.jpg" alt="thumb"></figure>
							<h5>9. Piri Piri Chicken</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 7,40</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_8" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_8" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_8" >Extra Large <span>+ $8.30</span>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-10.jpg" alt="thumb"></figure>
							<h5>10. Burrito Al Pastor</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 7,70</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_9" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_9" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_9" >Extra Large <span>+ $8.30</span>
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
					</tbody>
					</table>
					<hr>
					<h3 id="beef">Beef</h3>
					<p>
						Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
					</p>
					<table class="table table-striped cart-list ">
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-11.jpg" alt="thumb"></figure>
							<h5>11. Beef Enchilada Wrap</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 11,70</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_10" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_10" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_10" >Extra Large <span>+ $8.30</span>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-12.jpg" alt="thumb"></figure>
							<h5>12. Chicken Fillet Taco</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 12,40</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_11" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_11" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_11" >Extra Large <span>+ $8.30</span>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-13.jpg" alt="thumb"></figure>
							<h5>13. Tiger Prawn & Chorizo</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 24,71</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_12" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_12" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_12" >Extra Large <span>+ $8.30</span>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-14.jpg" alt="thumb"></figure>
							<h5>14. Fillet Steak & Chorizo</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 15,30</strong>
						</td>
						<td class="options">
							<a href="#0"><i class="icon_plus_alt2"></i></a>
						</td>
					</tr>
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-15.jpg" alt="thumb"></figure>
							<h5>15. Burrito's with Rice</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 9,70</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_13" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_13" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_13" >Extra Large <span>+ $8.30</span>
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-16.jpg" alt="thumb"></figure>
							<h5>16. Mexican Burger</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 8,30</strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" value="option1" name="options_14" checked>Medium <span>+ $3.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option2" name="options_14" >Large <span>+ $5.30</span>
                                </label>
                                <label>
                                <input type="radio" value="option3" name="options_14" >Extra Large <span>+ $8.30</span>
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
					</tbody>
					</table>
					<hr>
					<h3 id="desserts">Desserts</h3>
					<p>
						Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
					</p>
					<table class="table table-striped cart-list ">
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-17.jpg" alt="thumb"></figure>
							<h5>17. Chocolate Fudge Cake</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 24,71</strong>
						</td>
						<td class="options">
							<a href="#0"><i class="icon_plus_alt2"></i></a>
						</td>
					</tr>
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-18.jpg" alt="thumb"></figure>
							<h5>18. Cheesecake</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 7,50</strong>
						</td>
						<td class="options">
							<a href="#0"><i class="icon_plus_alt2"></i></a>
						</td>
					</tr>
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-19.jpg" alt="thumb"></figure>
							<h5>19. Apple Pie & Custard</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 9,70</strong>
						</td>
						<td class="options">
							<a href="#0"><i class="icon_plus_alt2"></i></a>
						</td>
					</tr>
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-20.jpg" alt="thumb"></figure>
							<h5>20. Profiteroles</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 12,00</strong>
						</td>
						<td class="options">
							<a href="#0"><i class="icon_plus_alt2"></i></a>
						</td>
					</tr>
					</tbody>
					</table>
					<hr>
					<h3 id="drinks">Drinks</h3>
					<p>
						Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
					</p>
					<table class="table table-striped cart-list ">
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
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-21.jpg" alt="thumb"></figure>
							<h5>21. Coke 0.33L</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 5,70</strong>
						</td>
						<td class="options">
							<a href="#0"><i class="icon_plus_alt2"></i></a>
						</td>
					</tr>
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-22.jpg" alt="thumb"></figure>
							<h5>2. Diet Coke 0.33L</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 2,70</strong>
						</td>
						<td class="options">
							<a href="#0"><i class="icon_plus_alt2"></i></a>
						</td>
					</tr>
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-23.jpg" alt="thumb"></figure>
							<h5>3. Diet Coke 1L</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 5,70</strong>
						</td>
						<td class="options">
							<a href="#0"><i class="icon_plus_alt2"></i></a>
						</td>
					</tr>
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="img/menu-thumb-24.jpg" alt="thumb"></figure>
							<h5>4. Fanta Orange 0.33L</h5>
							<p>
								Fuisset mentitum deleniti sit ea.
							</p>
						</td>
						<td>
							<strong>€ 2,70</strong>
						</td>
						<td class="options">
							<a href="#0"><i class="icon_plus_alt2"></i></a>
						</td>
					</tr>
					</tbody>
					</table>
				</div><!-- End box_style_1 -->
			</div><!-- End col-md-6 -->
            
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