<x-layout_main>
    <section class="section--default padding--default border">
        <h1 class="text-heading text-center mb-16">Create Account</h1>
        <div class="border w-1/2 min-w-[400px] mx-auto bg-white p-4"> 
            <form action="/create-account" method="POST" class="text-base">

                @csrf
                <div class="mb-4 border">
                    <label for="signup-email">Email</label>
                    <input value="{{old('email')}}" autocomplete="off" id="signup-email" placeholder="Email" type="email" name="email">
                    @error('email')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4 border">
                    <label for="signup-first_name">First Name</label>
                    <input value="{{old('first_name')}}" autocomplete="off" id="signup-first_name" placeholder="Name" type="text" name="first_name">
                    @error('first_name')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4 border">
                    <label for="signup-last_name">Last Name</label>
                    <input value="{{old('last_name')}}" autocomplete="off" id="signup-last_name" placeholder="Name" type="text" name="last_name">
                    @error('last_name')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4 border">
                    <label for="signup-stagename">Stage Name (Username)</label>
                    <input value="{{old('stage_name')}}" autocomplete="off" id="signup-stagename" placeholder="Stage Name" type="text" name="stage_name">
                    @error('stagename')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4 border">
                    <label for="signup-password">Password</label>
                    <input autocomplete="off" id="signup-password" placeholder="******" type="password" name="password">
                    @error('password')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4 border">
                    <label for="signup-password_confirmation">Confirm Password</label>
                    <input autocomplete="off" id="signup-password_confirmation" placeholder="******" type="password" name="password_confirmation">
                    @error('password_confirmation')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4 border">
                    <label for="signup-birthday">Birthday</label>
                    <span class="block opacity-75">This will be private and not publicly shown.</span>
                    <input value="{{old('birthday')}}" class="cursor-pointer" autocomplete="off" id="signup-birthday" placeholder="******" type="date" name="birthday">
                    @error('birthday')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4 border">
                    <label for="signup-terms-of-use">Terms of Use</label>
                    <input value="1" class="cursor-pointer" autocomplete="off" id="signup-terms-of-use" type="checkbox" name="terms_of_use">
                    @error('terms_of_use')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4 text-center">
                    <input class="cursor-pointer" type="submit" value="Create Account">
                </div>
            </form>
        </div>
    </section>
</x-layout_main>