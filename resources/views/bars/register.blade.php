@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bar.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone_number" class="col-md-4 col-form-label text-md-right">{{ __('telephone_number') }}</label>
                            <div class="col-md-6">
                                <input id="telephone_number" type="text" class="form-control" name="telephone_number" value="{{ old('telephone_number') }}" required autocomplete="telephone_number" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="budget_min" class="col-md-4 col-form-label text-md-right">{{ __('budget_min') }}</label>
                            <div class="col-md-6">
                                <input id="budget_min" type="text" class="form-control" name="budget_min" value="{{ old('budget_min') }}" required autocomplete="budget_min" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="budget_max" class="col-md-4 col-form-label text-md-right">{{ __('budget_max') }}</label>
                            <div class="col-md-6">
                                <input id="budget_max" type="text" class="form-control" name="budget_max" value="{{ old('budget_max') }}" required autocomplete="budget_max" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="regular_holiday" class="col-md-4 col-form-label text-md-right">{{ __('regular_holiday') }}</label>
                            <div class="col-md-6">
                                <input id="regular_holiday" type="text" class="form-control" name="regular_holiday" value="{{ old('regular_holiday') }}" required autocomplete="regular_holiday" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="business_hours" class="col-md-4 col-form-label text-md-right">{{ __('business_hours') }}</label>
                            <div class="col-md-6">
                                <input id="business_hours" type="text" class="form-control" name="business_hours" value="{{ old('business_hours') }}" required autocomplete="business_hours" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="smoke_status" class="col-md-4 col-form-label text-md-right">{{ __('smoke_status') }}</label>
                            <div class="col-md-6">
                                <input id="smoke_status" type="text" class="form-control" name="smoke_status" value="{{ old('smoke_status') }}" required autocomplete="smoke_status" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service_charge" class="col-md-4 col-form-label text-md-right">{{ __('service_charge') }}</label>
                            <div class="col-md-6">
                                <input id="service_charge" type="text" class="form-control" name="service_charge" value="{{ old('service_charge') }}" required autocomplete="service_charge" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="seat_status" class="col-md-4 col-form-label text-md-right">{{ __('seat_status') }}</label>
                            <div class="col-md-6">
                                <input id="seat_status" type="text" class="form-control" name="seat_status" value="{{ old('seat_status') }}" required autocomplete="seat_status" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre_id" class="col-md-4 col-form-label text-md-right">{{ __('genre_id') }}</label>
                            <div class="col-md-6">
                                <input id="genre_id" type="text" class="form-control" name="genre_id" value="{{ old('genre_id') }}" required autocomplete="genre_id" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
