@extends('layouts.dash')

@section('content')


   <div class="row">


    <div class="col-lg-12">
      <section class=" ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <h3 class="btn btn-outline-secondary">Transaction History</h3>

                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                        <div class="pt-3"></div>

                        <table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">Date</th>
      <th scope="col">Type</th>
      <th scope="col">Transaction ID</th>
      <th scope="col">Amount</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1 min ago </td>
      <td><span class="badge badge-success">Transferred </span></td>
      <td>b6acacaca6868765dacad7656567</td>
      
      <td><span class="badge badge-success">1 BTC</span></td>
    </tr>
    <tr>
      <td>1 min ago </td>
      <td><span class="badge badge-success">Sent </span></td>
      <td>b6acacaca6868765dacad7656567</td>
      
      <td><span class="badge badge-success">2 BTC</span></td>
    </tr>
    <tr>
     <td>1 min ago </td>
     <td><span class="badge badge-success">Received </span></td>
      <td>b6acacaca6868765dacad7656567</td>
     
      <td><span class="badge badge-success">1BTC </span></td>
    </tr>
  </tbody>
</table>
                      </div>

                  
                </div>
            </div>
        </div>
    </div>
</section>
      
    </div> 	

   </div>


@endsection