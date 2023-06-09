@if(Route::has('login'))

<div class="page-section" id="appointment">
  <div class="container">
    <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

    <form method="POST" action="{{url('appointment')}}" class="main-form">
      @csrf
      <div class="row mt-5 ">
        @auth
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input value="{{auth()->user()->name}}" name="name" type="text" class="form-control" placeholder="Full name">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input value="{{auth()->user()->email}}" name="email" type="text" class="form-control"
            placeholder="Email address..">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input required name="date" type="datetime-local" class="form-control">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select required name="doctor" id="doctor" class="custom-select">
            <option>Select a Doctor</option>
            @foreach($doctors as $doctor)
            <option value="{{$doctor->name}}">{{$doctor->name}}--{{$doctor->specialty}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <input value="{{auth()->user()->phone}}" name="phone" type="text" class="form-control" placeholder="Number..">
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
        </div>
        @else
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input name="name" type="text" class="form-control" placeholder="Full name">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input name="email" type="text" class="form-control" placeholder="Email address..">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input name="date" type="datetime-local" class="form-control">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select name="doctor" id="doctor" class="custom-select">
            @foreach($doctors as $doctor)
            <option value="{{$doctor->name}}">{{$doctor->name}}--{{$doctor->specialty}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <input name="phone" type="text" class="form-control" placeholder="Number..">
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
        </div>
        @endauth
      </div>

      <button type="submit" class="btn btn-primary form-control"
        style="background-color : #4e73df ; color : white;">Submit Request</button>
    </form>
  </div>
</div>
@endif