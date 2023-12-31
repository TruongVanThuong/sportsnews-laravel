<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Họ tên')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- {{-- Nghề nghiệp --}}
            <div>
                <x-label for="nghenghiep" :value="__('Nghề nghiệp')" />

                <x-input id="nghenghiep" class="block mt-1 w-full" type="text" name="nghenghiep" :value="old('nghenghiep')" required autofocus />
            </div> -->
            <!-- {{-- Phái --}}
            <div>
                <x-label for="phai" :value="__('Phái')" />

                <x-input id="phai"  type="radio" name="phai" :value="0" required autofocus />Nam
                <x-input id="phai"  type="radio" name="phai" :value="1" required autofocus />Nữ
            </div> -->

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Địa chỉ Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mật khẩu')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Nhập lại mật khẩu')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Đã có tài khoản?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('ĐĂNG KÍ') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
