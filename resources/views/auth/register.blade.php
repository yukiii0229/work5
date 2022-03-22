<x-guest-layout>
<style>
    h1{
       font-weight:bold;
       font-size:20px;
    }
    .ml-4{
        background-color:blue;
    }
    .ttl{
        font-size:30px;
        margin-left:10px;
    }
    .sab-ttl{
        margin-left:50%;
        font-size:20px;
    }
</style>
    <head>
        <h3 class="ttl">Atte</h3>
    </head>
    <x-auth-card>
        <x-slot name="logo">
            <h1>会員登録</h1>
        </x-slot>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('名前')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('メール')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('確認用パスワード')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('すでにログインしたことがある方') }}
                </a>
                

                <x-button class="ml-4">
                    {{ __('登録') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    <footer>
        <h4 class="sab-ttl">Atte.inc</h4>
    </footer>
</x-guest-layout>
