<x-app-layout>

<x-slot name="title">
    - صفحه بازیابی رمز عبور
</x-slot>

<main class="bg--white">
    <div class="container">
        <div class="sign-page">
            <h1 class="sign-page__title">بازیابی رمز عبور</h1>

            <form class="sign-page__form" action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <input type="text" name="email" class="text text--left" placeholder="ایمیل" value="{{ $request->email }}">
                @error('email')
                    <p style="margin-bottom: 1rem;
                            color: #D8000C;
                            text-align: right;"
                    >
                        {{ $message }}
                    </p>
                @enderror

                <input type="password" name="password" class="text text--left" placeholder="رمز عبور جدید">
                @error('password')
                    <p style="margin-bottom: 1rem;
                            color: #D8000C;
                            text-align: right;"
                    >
                        {{ $message }}
                    </p>
                @enderror
                <input type="password" name="password_confirmation" class="text text--left" placeholder="تایید رمز عبور">
                @error('password_confirmation')
                    <p style="margin-bottom: 1rem;
                            color: #D8000C;
                            text-align: right;"
                    >
                        {{ $message }}
                    </p>
                @enderror

                <button class="btn btn-primary width-100 " style="margin-top: 20px;">بازیابی</button>
                <div class="sign-page__footer">
                    <span>کاربر جدید هستید؟</span>
                    <a href="{{ route('register') }}" class="color--46b2f0" style="margin-bottom: 15px; margin-top: 15px;">صفحه ثبت نام</a>

                </div>
            </form>
        </div>
    </div>
</main>
</x-app-layout>