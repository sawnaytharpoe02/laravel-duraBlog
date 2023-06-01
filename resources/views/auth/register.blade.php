<x-layout>
  <section class="w-4/6 lg:w-2/6 mx-auto my-20">
    <form method="POST" class="sign-form-gps grid grid-cols-1 gap-8">
      @csrf
      <div class="space-y-5">
        <h3 class="text-3xl font-semibold text-darkSteelBlue">Register For Our Blog</h3>
        <h5 class="text-gray-600 text-base">Stay ahead of the curve – register for our blog and get the latest news,
          trends, and insights in your inbox</h5>
      </div>
      <div class="form-gp">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{old('name')}}" class="focus:border-transparent focus:ring-0"
          required>
        <x-error name="name" />
      </div>
      <div class="form-gp">
        <label for="username">User Name</label>
        <input type="text" name="username" id="username" value="{{old('username')}}"
          class="focus:border-transparent focus:ring-0" required>
        <x-error name="username" />
      </div>
      <div class="form-gp">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" value="{{old('email')}}"
          class="focus:border-transparent focus:ring-0">
        <x-error name="email" />
      </div>
      <div class="form-gp">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="focus:border-transparent focus:ring-0" required>
        <x-error name="password" />
      </div>
      <button type="submit" class="py-3 rounded-lg bg-gray-900 text-white cursor-pointer">Register</button>
      <div>
        <a href="/login" class="underline">Already a user? <span class="font-normal text-lightBlue">Log In</span></a>
      </div>
    </form>
  </section>
</x-layout>