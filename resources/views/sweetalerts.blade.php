@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/app.css">

	<div class="container spark-screen">
		<div class="row">
			<div class="col col-lg-12">
				<div class="box">
					<div class="box-header">
						<h1>Pricing table with Bootstrap</h1><br/>
						<div class="row">

							<div class="col col-xs-3">
								<form role="form" action="sentContactEmail" method="post" enctype="plain">
									{{csrf_field()}}
									<button type="submit" class="btn btn-default btn-lg button btn-block">SUBMIT</button>
								</form>
							</div>
							<div class="col col-xs-3 ">
								<button type="submit" class="btn btn-default btn-lg button btn-block" onclick="option()">SUBMIT</button>
							</div>
							<div class="col col-xs-3 ">
								<button type="submit" class="btn btn-default btn-lg button btn-block" onclick="option2()">SUBMIT</button>
							</div>
							<div class="col col-xs-3 ">
								<button type="submit" class="btn btn-default btn-lg button btn-block" onclick="option()">SUBMIT</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script>
		function option() {
			swal({   title: "Are you sure?",
				text: "You will not be able to recover this imaginary file!",
				type: "warning",   showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				cancelButtonText: "No, cancel plx!",
				closeOnConfirm: false,
				closeOnCancel: false },
					function(isConfirm){
						if (isConfirm) {
							swal("Deleted!", "Your imaginary file has been deleted.", "success");
						} else {
							swal("Cancelled", "Your imaginary file is safe :)", "error");
						}
					}
			);
		}
	function option2(){
		swal({   title: "Sweet!",   text: "Here's a custom image.",   imageUrl: "https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/like-128.png" });
	}function option3(){
			swal({   title: "Ajax request example",   text: "Submit to run ajax request",   type: "info",   showCancelButton: true,   closeOnConfirm: false,   showLoaderOnConfirm: true, }, function(){   setTimeout(function(){     swal("Ajax request finished!");   }, 2000); });
		}
	</script>

	@include('layouts.messages.flash')
@endsection