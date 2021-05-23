<x-app-layout>

<x-slot name="title">
    - صفحه ثبت نام
</x-slot>

<main class="bg--white" style="background-color: white;">
    <div class="container" >
        <div class="form-group" style="margin-bottom: 50px;" >
            <h3 class="sign-page__title">ثبت نام در گیلیا شاپ</h3>

            <form class="sign-page__form " action="{{ route('register.store') }}" method="POST">
                @csrf

                <div class="form-group required"  style="padding: 15px;">
                <label class="col-sm-2 control-label">نام و نام خانوادگی</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="نام و نام خانوادگی" value="" name="name">
                    </div>
                </div>
                
                    @error('name')
                         <p>{{$message}}</p>
                    @enderror 
                    
                    <div class="form-group required"  style="padding: 15px;">
                    <label class="col-sm-2 control-label">شماره موبایل</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="شماره موبایل" value="" name="mobile">
                        </div>
                    </div>

                    @error('mobile')
                        <p>{{$message}}</p>
                    @enderror

                    <div class="form-group required"  style="padding: 15px;">
                    <label class="col-sm-2 control-label">ایمیل</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="ایمیل" value="" name="email">
                        </div>
                    </div>

                    @error('email')
                        <p>{{$message}}</p>
                    @enderror   

                    <div class="form-group required" style="padding: 15px;">
                    <label class="col-sm-2 control-label">رمز عبور</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="رمزعبور" value="" name="password">
                        </div>
                    </div>

                    @error('password')
                        <p>{{$message}}</p>
                    @enderror

                    <div class="form-group required"  style="padding: 15px;">
                        <label class="col-sm-2 control-label">تکرار رمز عبور</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="تکرار رمز عبور" value="" name="password_confirmation">
                            </div>
                    </div>
                    

                    <div class="form-group"  style="padding: 15px;">
                        <div class="pull-left">
                            <input type="submit" class="btn btn-primary" value="ثبت نام">
                        </div>

                    <div class="pull-right">  
                        <span>در سایت عضو هستید؟</span>                    
                        <input type="submit" class="btn btn-primary" value="ورود ">                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
</x-app-layout>

