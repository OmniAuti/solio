<x-layout_main>
    <section class="section--default padding--default border">
        <h1 class="text-heading text-center mb-16">Create Account</h1>
        <div class="border w-1/2 min-w-[400px] mx-auto bg-white p-4"> 
            <form method="POST" action="/create-account" class="text-base">
                @csrf
                <div class="mb-4">
                    <label for="name"></label>
                    <input autocomplete="off" id="signup-name" placeholder="Name" type="text" name="name">
                    @error('email')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email"></label>
                    <input autocomplete="off" id="signup-email" placeholder="Email" type="email" name="email">
                    @error('email')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="stagename"></label>
                    <input autocomplete="off" id="signup-stagename" placeholder="Stage Name" type="text" name="stagename">
                    @error('stagename')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password"></label>
                    <input autocomplete="off" id="signup-password" placeholder="******" type="password" name="password">
                    @error('password')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password"></label>
                    <input autocomplete="off" id="signup-password_confirmation" placeholder="******" type="password" name="password_confirmation">
                    @error('password_confirmation')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4 text-center">
                    <input class="cursor-pointer" type="submit" value="Create">
                </div>
            </form>
        </div>
    </section>
</x-layout_main>