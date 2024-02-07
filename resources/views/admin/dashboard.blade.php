@extends('admin.base')

@section('content')

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar and Navbar (as shown in the previous example) -->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <!-- Content goes here -->
      <div class="mt-3">

        <!-- Dashboard Cards -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          <!-- Card 1 -->
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <p class="card-text">1200</p>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Revenue</h5>
                <p class="card-text">$50,000</p>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Orders</h5>
                <p class="card-text">300</p>
              </div>
            </div>
          </div>

          <!-- Add more cards as needed -->
        </div>
        <!-- End Dashboard Cards -->

      </div>
    </main>
  </div>
</div>
    
@endsection