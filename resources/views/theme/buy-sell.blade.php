@extends('layouts.dash')

@section('content')



   <div class="row">

   	<div class="col-lg-7">
   		<img src="theme/images/buy-sell-color.svg">
   		
   	</div>

    <div class="col-lg-5">
   		<h3>Introducing Buy & Sell</h3>
<p>You can now buy & sell bitcoin directly from your wallet and have the exchanged funds deposited into your bank account.
Select your location below, verify your identity, and before you know it, you'll be on your way to making your crypto dreams a reality!</p>
<p>Select your country:</p>

<form>
	
	<select class="selectpicker" data-live-search="true">
		<option>Select Country</option>
		<option>United States</option>
	</select>
	<br>
	<br>
<select class="selectpicker" data-live-search="true">
 <option>Select State</option>
		<option>United States</option>
</select>
</form>
   	</div>   	

   </div>


@endsection