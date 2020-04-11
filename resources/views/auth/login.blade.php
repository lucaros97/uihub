@extends('layouts.base')

@section('content')
  <div class="relative min-h-screen overflow-hidden bg-gray-800"> 
    <div class="hidden lg:block absolute scroll-bg" style="height:400%;width:400%;top:-25%;left:-100%;background-size:800px auto;background-image:url(https://www.tailwindui.com/components.4b326ba8.png);"></div> 
      <div class="relative min-h-screen lg:min-w-3xl xl:min-w-4xl lg:flex lg:items-center lg:justify-center lg:w-3/5 lg:py-20 lg:pl-8 lg:pr-8 bg-no-repeat bg-white" style="background-size:100% auto;background-position:-5px -5px;"> 
      <div class="lg:pb-16"> 
        <div class="px-6 pt-16 pb-12 md:max-w-3xl md:mx-auto lg:max-w-full lg:pt-0"> 
          <img class="h-10 lg:h-12" src="/images/logo.svg" alt="Tailwind UI"> 
          <div class="mt-8 lg:mt-16"> 
            <h1 class="mt-2 text-4xl leading-tight xl:text-4xl font-bold font-display text-gray-800">Sign in for inspiration.</h1> 
          </div> 
          <div class="mt-10">
            
          <form method="POST" action="{{ route('login') }}">
              @csrf
                <div class="md:flex md:items-center mb-6">
                    <div class="w-full">
                        <input id="email" type="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-500 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="w-full">
                        <input id="password" type="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-500 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="md:flex md:items-center mb-6">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="form-check-input" class="ml-2">Remember me</label>
                </div>
                <div class="md:flex md:items-end">
                    <div class="w-full">
                        <button type="submit" class="shadow bg-yellow-500 hover:bg-yellow-400 focus:shadow-outline focus:outline-none font-bold py-2 px-10 rounded">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
          </div>
        </div>
        <div class="relative h-64 overflow-hidden lg:hidden">
          <div class="absolute scroll-bg" style="height:400%;width:400%;top:-100%;left:-100%;background-size:400px auto;background-image:url(https://www.tailwindui.com/components.4b326ba8.png);"></div> 
        </div>
      </div>
    </div>
</div>
@endsection
