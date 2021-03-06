@if(isset($price))
	<div class="type_16_make_reservation">
		<div style="" class="vc_row wpb_row vc_row-fluid">
			<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-sm-offset-3">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<div class="wpb_text_column wpb_content_element  text-left">
							<div class="wpb_wrapper">
								<h2 style="text-align: center;">PRICES
									<div id="line"></div>
								</h2>
								<table class="table table-responsive">
									<tbody>
									@foreach($price as $value)
										<tr>
											<td class="text-left"><strong>{{ $value['price_detail'] }}</strong></td>
											<td class="text-right">${{ $value['price_rate'] }}</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
						<div class="text-center">
							<input type="button" id="reservation" class="btn btn-primary" name="Make Reservation" value="Make Reservation">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- The Modal -->
	<div id="myModal" class="modal">
	  <!-- Modal content -->
	  	<div class="modal-content">
	    	<span class="close">&times;</span>
		    <div class="booking">
				<h2>Reservation
					<small>Fields marked with an 
						<span class="red-symbol">*</span> are required
					</small>
				</h2>
				{!! Form::open(['method' => 'GET', 'route' => 'reservation', 'enctype' => 'multipart/form-data', 'class' => 'booking-form']) !!}
					<div class="col-md-6 col-xs-12">
						<label for="name">First Name <span class="red-symbol">*</span></label>
						{!! Form::text('name', null, array('autofocus')) !!}
					</div>
					<div class="col-md-6 col-xs-12">
						<label for="email">Email <span class="red-symbol">*</span></label>
						{!! Form::text('email') !!}
					</div>
					<div class="col-md-6 col-xs-12">
						<label for="arrival_date">Arrival Date <span class="red-symbol">*</span></label>
						{!! Form::date('arrival_date') !!}
					</div>
					<div class="col-md-6 col-xs-12">
						<label for="departure_date">Departure Date <span class="red-symbol">*</span></label>
						{!! Form::date('departure_date') !!}
					</div>
					<div class="col-md-6 col-xs-12">
						<label for="type">Room Type <span class="red-symbol">*</span></label>
						{!! Form::select('type', $typeReservation, 'default', array('class' => 'cmb_booking')) 
						!!}
					</div>
					<div class="col-md-6 col-xs-12">
						<label for="adult">Adults <span class="red-symbol">*</span></label>
						{!! Form::select('adult', [
								'1 Adult' => '1 Adult',
								'2 Adults' => '2 Adults',
								'3 Adults' => '3 Adults',
								'4 Adults' => '4 Adults'
								], 'default', array('class' => 'cmb_booking')) 
						!!}
					</div>
					<div class="col-md-6 col-xs-12 under_form">
						{!! Form::submit('Make Reservation', array('class' => 'btn_submit', 'id' => 'Make Reservation')) !!}
					</div>
					<div class="col-md-6 col-xs-12 under_form">
						<p>Price / Room / Night: 100.00</p>
					</div>
				{!! Form::close()!!}
				<div class="clearfix"></div>			
			</div>
	  	</div>
	</div>
@endif