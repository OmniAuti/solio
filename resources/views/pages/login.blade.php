<x-layout_main>
    <section class="section--default padding--default border">
        <h1 class="text-heading text-center mb-16">Login</h1>
        <div class="border w-1/2 min-w-[400px] mx-auto bg-white p-4 mb-16"> 
            <form method="POST" action="/login" class="text-base">
                @csrf
                <div class="mb-4">
                    <label for="email"></label>
                    <input value="{{old('email')}}" autocomplete="email" id="email" placeholder="Email or email" type="text" name="email">
                    @error('email')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password"></label>
                    <input autocomplete="current-password" id="password" placeholder="******" type="password" name="password">
                    @error('password')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4 text-center">
                    <input class="cursor-pointer" type="submit" value="Log In">
                </div>
            </form>
        </div>
        <div>
            <a class="text-base text-center block" href="/create-account">Don't have an account?</a>
        </div>
    </section>
</x-layout_main>