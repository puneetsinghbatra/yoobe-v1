@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('home') }}" class="btn btn-primary btn-sm">&lsaquo; Back</a>
                    <hr>
                    
                    <form action="{{ route('user.profile.update') }}" method="POST">
                        {{ csrf_field() }}
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="firstname" value="{{ old('firstname', $user->firstname) }}">
                        </div>
                        <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="{{ old('lastname', $user->lastname) }}">
                        </div>
                        <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" value="{{ old('city', $user->city) }}">
                        </div>
                        
                        <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                            <label>Country</label>
                            <select class="form-control" name="country">
                                @foreach(\App\Models\User::$countries as $k => $country)
                                    <option value="{{ $country }}" {{ old('country', $user->country) == $country ? 'selected' : '' }}>{{ $k }}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
