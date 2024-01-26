@extends('layouts.adminapp')

@section('content')

<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <h1>Hi <span class="text-primary">John</span>, Welcome back</h1>
      <p>Very detailed & featured admin.</p>
    </div>

    <!-- chatting -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 chart-grid mb-4">
          <div class="card card_border p-4">
            <div class="card-header chart-grid__header pl-0 pt-0">
              Chatting
            </div>
            <div class="messaging">
              <div class="inbox_msg">



                <div class="form-group">
                <label for="bank_name">Bank Name</label>
                {{ Form::selectBank("bank_name", $merchant['paymentInfo']->bank_name ?? null,["class"=>"form-control"])
                }}
              </div>




              </table>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //chatting -->
</div>
<!-- //content -->
</div>
<!-- main content end-->
</section>


@endsection