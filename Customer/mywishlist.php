
<div class="col-lg-9 col-md-9 col-sm-9">
<div class="panel panel-default">
<div class="panel-heading" style="background-color:#3C7A72">
<h1 class="text-center"  style="color:#DBF1FF">My Wishlist</h1>
<h4 class="text-center">Your all Wishlist Products on one place.</h4>
</div>




<div   style="overflow-x:auto;" class="panel-body">

<table class="table table-bordered table-hover table-responsive table-condensed table-striped ">
<thead>
<tr>
<th>Wishlist No:</th>
<th>Wishlist Produtcs:</th>
<th>Delete Wishlist:</th>
</tr>
</thead>
<tbody>



<tr>
<td>1</td>
<td><img src="img/1.jpeg" height="100px" width="100px"><a href="#"> Mens T shirt</a></td>
<td><a href="#"><i class="fa fa-trash"></i></a></td>
</tr>

</tbody>
</table>
</div>
</div>
</div>




   	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/actions.js"></script>
	<script src="js/sweetalert.min"></script>
	<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
     <script src="jquery-3.3.1.slim.min.js" ></script>
      <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
   <script src="js/function.js"></script>
   
    <script src="jquery3.1.5.mCustomScrollbar.concat.js"></script>
   










     <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlayy').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlayy').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
		$(document).ready( function() {
      
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
		 autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: true,
		responsive: [{
                breakpoint: 928,
                settings: {
                    slidesToShow: 3,
					 slidesToScroll: 1,
                }
            },  {
                breakpoint: 720,
                settings: {
                    slidesToShow:2
				}
            },
				{
                breakpoint: 520,
                settings: {
                    slidesToShow:1
                }
            }]
      });
     
    });
    </script>
    
    </body>
</html>