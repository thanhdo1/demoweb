@extends('master')
@section('content')
<div class="container" ng-controller="SanPhamController">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Tìm kiếm</h4>
							<div class="beta-products-details">
								<div class="clearfix"></div>
							</div>

							<div class="row">

								<div class="col-sm-3" ng-repeat="x in sanphams">
									<div class="single-item">
										<div class="single-item-header">
											<a href=""><img src="source/image/product/<% x.image %>" height="250px" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><% x.name%></p>
											<p class="single-item-price" style="font-size: 18px">

											<span class="flash-sale"><% x.unit_price %> đồng</span>

											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>

							</div>
							
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
@endsection