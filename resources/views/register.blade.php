@extends('layout')
@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <form class="card" method="POST" action="{{ route('register.store') }}">
            @csrf
            <div class="card-body">
                <fieldset class="fieldset">
                    <label class="label">Name</label>
                    <input type="text" name="name" class="input" placeholder="Name" />
                    <label class="label">Email</label>
                    <input type="email" name="email" class="input" placeholder="Email" />
                    <label class="label">Password</label>
                    <input type="password" name="password" class="input" placeholder="Password" />
                    <div><a class="link link-hover">Forgot password?</a></div>
                    <button type="submit" class="btn btn-neutral mt-4">Login</button>
                </fieldset>
            </div>
        </form>

    </div>
@endsection
