<style>
	.nav{
		flex-wrap: inherit;
	}
	 .nav-group-sub{
		background-color: #3d4252 !important;
		color: #ffff !important;
		
	}
	
	
</style>
<div class="menu">
    <div class="menu-header">
        <a href="index.html" class="menu-header-logo">
            <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
        </a>
        <a href="index.html" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="{{ asset('backend/assets/images/user/man_avatar3.jpg') }}" 
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold"> Welcome,{{ auth()->user() ? auth()->user()->name: '' }} !!!</div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a>
				<div>
                    <form class=" " method="POST" action="{{ route('signout') }}">
                        @csrf
                        <button type="submit" class="btn" style="padding:0" >
						<a class="dropdown-item d-flex align-items-center text-danger" target="_blank">
							<i class="bi bi-box-arrow-right dropdown-item-icon "></i>
							Logout</a>
						</button>
                    </form>
				</div>
            </div>
        </div>
        <ul>
            <li>
                <a  href="{{ route('dashboard') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-truck"></i>
                    </span>
                    <span>Products</span>
                </a>
                <ul>
                    <li>
                        <a  href="product-list.html">List
                            View</a>
                    </li>
                    <li>
                        <a  href="product-grid.html">Grid
                            View</a>
                    </li>
                    <li>
                        <a  href="product-detail.html">Product Detail</a>
                    </li>
                    <li>
                        <a  href="shopping-cart.html">Shopping
                            Cart</a>
                    </li>
                    <li>
                        <a  href="checkout.html">Checkout</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Buyer</span>
                </a>
                <ul>
                    <li>
                        <a href="buyer-dashboard.html">Dashboard</a>
                    </li>
                    <li>
                        <a  href="buyer-orders.html">Orders</a>
                    </li>
                    <li>
                        <a  href="buyer-addresses.html">Addresses</a>
                    </li>
                    <li>
                        <a  href="buyer-wishlist.html">Wishlist</a>
                    </li>
                </ul>
            </li>
            <li>
                <a  href="{{ route('booking') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-person-badge"></i>
                    </span>
                    <span>Booking Approval</span>
                </a>
            </li>
          
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-person-circle"></i>
                    </span>
                    <span>Passengers</span>
                </a>
                <ul>
                    <li><a  href="user-list.html">List View</a></li>
                    <li><a  href="user-grid.html">Grid View</a></li>
                </ul>
            </li>
          
         
           
        </ul>
    </div>
</div>
  <script>
    var mimes = {
        'jpeg': 'data:image/jpeg;base64,'
    };
   

    //   AWS.config.update({
    //       signatureVersion: 'v4',
    //       region: '{{ env('AWS_DEFAULT_REGION') }}',
    //       accessKeyId: '{{ env('AWS_ACCESS_KEY_ID') }}',
    //       secretAccessKey: '{{ env('AWS_SECRET_ACCESS_KEY') }}'
    //   });

   

      function encode(data)
      {
          var str = data.reduce(function(a,b){ return a+String.fromCharCode(b) },'');
          return btoa(str).replace(/.{76}(?=.)/g,'$&\n');
      }

      function getUrlByFileName(fileName,mimeType) {
     
          return new Promise(
              function (resolve, reject) {
                  bucket.getObject({Key: fileName}, function (err, file) {
                      var result =  mimeType + encode(file.Body);
                      resolve(result)
                  });
              }
          );
         
      }

      function openInNewTab(url) {
          var redirectWindow = window.open(url, '_blank');
          redirectWindow.location;
      }
    
       
    
   


  </script>
		