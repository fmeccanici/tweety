<x-master>
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border-gray-300 rounded-lg">
        <div class="col-md-8">
            <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Username
                        </label>

                        <input 
                            class="border border-gray-400 p-2 w-full"
                            type="text"
                            name="username"
                            id="username"
                            autocomplete="username"
                            value="{{ old('username') }}"
                            required
                    >
                    </div>

                    <div class="mb-6">
                        <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Name
                        </label>

                        <input 
                            class="border border-gray-400 p-2 w-full"
                            type="text"
                            name="name"
                            id="name"
                            autocomplete="name"
                            value="{{ old('name') }}"
                            required
                    >
                    </div>


                    <div class="mb-6">
                        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Email
                        </label>

                        <input 
                            class="border border-gray-400 p-2 w-full"
                            type="text"
                            name="email"
                            id="email"
                            autocomplete="email"
                            value="{{ old('email') }}"
                            required
                    >
                    </div>


                    <div class="mb-6">
                        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Password
                        </label>

                        <input 
                            class="border border-gray-400 p-2 w-full"
                            type="password"
                            name="password"
                            id="password"
                            autocomplete="current-password"
                            value="{{ old('password') }}"
                            required
                    >
                    </div>


                    <div class="mb-6">
                        <label for="password-confirm" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Confirm Password
                        </label>

                        <input 
                            class="border border-gray-400 p-2 w-full"
                            type="password"
                            name="password_confirmation"
                            id="password-confirm"
                            autocomplete="new-password"
                            required
                    >
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-50 mr-2">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
    </div>
</div>
</x-master>
