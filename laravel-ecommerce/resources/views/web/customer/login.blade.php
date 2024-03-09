@extends('layouts.web')

@section('content')
    {{-- <h1>Auth Id: {{ getAuthUserId() }} </h1> --}}

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12" style="display: flex;justify-content:center;">
                <div style="width: 60%;">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span
                            class="bg-secondary pr-3">Login</span></h5>
                    @if (session()->has('error'))
                        <p
                            style="background: #FFD333;
            padding: 15px;
            color: #000;
            font-weight: 500;">
                            {{ session()->get('error') }}</p>
                    @endif
                    @if (session()->has('success'))
                        <p
                            style="background: #FFD333;
            padding: 15px;
            color: #000;
            font-weight: 500;">
                            {{ session()->get('success') }}</p>
                    @endif
                    <div class="bg-light p-30 mb-5">
                        <form action="{{ route('customer.authenticate') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-6 form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" name="email" type="text" placeholder="Enter email">
                                    @error('email')
                                        <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    <label>Password</label>
                                    <input class="form-control" name="password" value="{{ old('password') }}" type="text"
                                        placeholder="Enter password">
                                    @error('password')
                                        <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <button type="submit" class="form-control btn btn-primary"
                                        style="width: 50%;">Login</button>
                                    <a href="{{ route('customer.create') }}" class="btn btn-primary">Create Account</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
