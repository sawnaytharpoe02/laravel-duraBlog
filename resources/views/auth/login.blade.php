<x-layout>
  <section class="w-4/6 lg:w-2/6 mx-auto my-20">
    <form method="POST" class="sign-form-gps grid grid-cols-1 gap-8">
      @csrf
      <div class="space-y-5">
        <h3 class="text-3xl font-semibold text-darkSteelBlue">Log In To Your Account</h3>
        <h5 class="text-gray-600 text-base">Log in to your account to access exclusive blog content and stay up-to-date
          on the latest news and insights</h5>
      </div>
      <div class="form-gp">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{old('email')}}"
          class="focus:ring-0 focus:border-transparent" placeholder="name@email.com" required>
        <x-error name="email" />
      </div>
      <div class="form-gp">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="{{old('password')}}"
          class="focus:ring-0 focus:border-transparent" placeholder="password" required>
        <x-error name="password" />
      </div>
      {{--<div class="flex justify-between items-center">
        <div><input type="checkbox" id="remember-me" class="focus:ring-0"><label for="remember-me" class="ml-2">Remember
            me</label></div>
        <a href="./forgot.html" class="underline text-sm">Forgot your password?</a>
      </div>--}}
      <button class="py-3 rounded-lg bg-gray-900 text-white cursor-pointer">Log In</button>
      <div>
        <a href="/register" class="underline">Don't have an account? <span class="font-semibold">Register</span></a>
      </div>
    </form>
  </section>
</x-layout>