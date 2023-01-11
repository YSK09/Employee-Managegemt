@extends('layouts.main')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">City</h1>
</div>
<div class="row">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Register') }}</div> --}}
                    <div class="card-header">Create New City
                        <a href="{{route('cities.index')}}" class="float-right" >Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('cities.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="state_id" class="col-md-4 col-form-label text-md-end">{{ __('State') }}</label>

                                <div class="col-md-6">
                                    <select class="form-select form-control @error('state_id') is-invalid @enderror" name="state_id" value="{{ old('state_id') }}">
                                        <option selected>Select State Name</option>
                                        @foreach ($states as $state )
                                            <option value="{{$state->id }}">{{ $state->name}}</option>
                                        @endforeach
                                    </select>
                                    {{-- <input id="country_code" type="text" class="form-control @error('country_code') is-invalid @enderror" name="country_code" value="{{ old('country_code') }}"  autofocus> --}}

                                    @error('state_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Store') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
