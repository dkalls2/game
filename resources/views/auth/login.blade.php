@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-200 m-b-200">
        <div class="card">
            <div class="card-content">
                <h4 class="title">Login</h4>
                <hr>
                
                <form action="{{'login'}}" method="POST" role="form">
                    {{csrf_field()}}
                    <div class="field">
                        <label for="email" class="label">Email Address</label>
                        <p class="control">
                            <input type="text" class="input {{$errors->has('email') ? 'is-danger' : ''}}" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                        </p>
                        @if ($errors->has('email'))
                            <p class="class help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label for="password" class="password">Password</label>
                        <p class="control">
                            <input type="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}" name="password" id="password">
                        </p>
                        @if ($errors->has('password'))
                            <p class="class help is-danger">{{$errors->first('password')}}</p>
                        @endif
                    </div>

                    <b-checkbox name = "remember" class="m-t-20">Remember Me</b-checkbox>

                    <button class="button is-primary is-outlined is-fullwidth m-t-30">Log In</button>
                </form>
            </div> <!-- end of .card-content-->
        </div> <!-- end of .card-->

        <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Forgot Your Passsword?</a></h5>
    </div>
</div>

@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {}
    });
  </script>
@endsection