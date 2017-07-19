	<div class="container" ng-controller="SanPhamController">
		
		<center><h2>Danh Sách Sản phẩm</h2></center>
		
			
		<div class="row"  >
			<div class="col-sm-3" ng-repeat="x in sanphams">
				<div class="single-item">
					<div class="single-item-header">
						<a href="product.html"><img src="template/image/{{x.image}} ?>" alt="" height="250px"></a>
					</div>
				<div class="single-item-body" >
					<p class="single-item-title">{{x.name}}</p>
					<p class="single-item-price">
					<span>{{x.unit_price}}</span>
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