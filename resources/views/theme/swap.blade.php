@extends('layouts.dash')

@section('content')



   <div class="row">

   	
 <div class="col-lg-2">
     </div>
  
   <div class="col-lg-8">
       <div class="card" style="width: 100%; border: 20px solid white;;">
  
  <div class="card-body">
<div class="row">
					<div class="col-8">
				<div class="row">
					<div class="col-12">
						
						<div class="row">
					<div class="col-8">
					    <br>
					    <label>Enter Amount</label>
					    
					    <input type="text" class="form-control" name="coins-exchange" placeholder="You send" value="">
					    
					    </div>
					    <div class="col-4"><br>
					        <label>&nbsp;</label>
					    
				<select class="form-control" name="state" tabindex="-1" aria-hidden="true">
							   <option value="BTC">BTC</option>
							   <option value="BTC">Ethereum</option>
							   <option value="Ripple">Ripple</option>
							   <option value="Ripple">Bitcoin Cash</option>
							   <option value="Ripple">Cardano</option>
							   <option value="Ripple">Litecoin</option>
							   <option value="Ripple">NEO</option>
							   <option value="Ripple">Stellar</option>
							   <option value="Ripple">EOS</option>
							   <option value="Ripple">NEM</option>
							</select>
					    
					    </div>
					    
					    </div>
					</div>
					
				</div>
				<br>
				<div class="row">
					<div class="col-8">
					    
					    <i class="fa fa-exchange" style="cursor:pointer;font-size:20px;float:right;transform: rotate(90deg);"></i>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-12">
						
						<div class="row">
					<div class="col-8">
					    
					    <input type="text" class="form-control" name="coins-exchange" placeholder="You get" value="10.1548">
					    
					    </div>
					    <div class="col-4">
					    
				<select class="form-control" name="state" tabindex="-1" aria-hidden="true">
							   <option value="BTC">BTC</option>
							   <option value="BTC">Ethereum</option>
							   <option value="Ripple">Ripple</option>
							   <option value="Ripple">Bitcoin Cash</option>
							   <option value="Ripple">Cardano</option>
							   <option value="Ripple">Litecoin</option>
							   <option value="Ripple">NEO</option>
							   <option value="Ripple">Stellar</option>
							   <option value="Ripple">EOS</option>
							   <option value="Ripple">NEM</option>
							</select>
					    
					    </div>
					    
					    </div>
					</div>

				</div>
				<br>
				<button style="width:100%" class="btn btn-success">Next Step</button>
</div>
<style>
    .d{
        line-height: .2;
        font-size:14px;
        
    }
    
    .r{
        font-weight: bold;
    }
    .rightf{
        margin-left:35px;
    }
    
</style>
<div class="col-4 " ><br>
<div class="rightf">
   <label>Details</label>
					     <p class="d" style='font-size:12px'>Expected exchange rate</p>
					    <p class="d r">1 BTC = 776ETH</p>
					    <br>
					    <p class="d" style='font-size:12px'>Exchange Fee</p>
					    <p class="d r">0.0906 ETH</p><br>
					    <p class="d" style='font-size:12px'>Network Fee</p>
					    <p class="d r">0.0906 ETH</p><br>
					    <p class="d" style='font-size:12px'>Estimated arrival</p>
					    <p class="d r">0.0906 ETH</p>
					    
					    </div>
					   
					</div>
</div>
    
  </div>
</div>
             
       
       
   </div>
	<div class="col-2">
					     
					   
					</div>
	

   </div>


@endsection