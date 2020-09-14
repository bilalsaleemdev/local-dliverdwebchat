@extends('layouts.app')

@section('title')
    Login
@endsection

@section('styleTag')
    <style>
        body{overflow-y: hidden;}
    </style>
@endsection

@section('content')
    <div  ng-app="loginApp">
        <div class="col-xl-12 nopadnomar col-lg-12 col-md-12">
            <div class="card o-hidden border-0">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-md-7 nopadnomar">
                            <div class="offset-md-2 col-md-8">
                                <div class="hidden-md fullwidth nopadnomar bgsky upheight">
                                    <h2 class="text-white absoloverlay">25CENE</h2>
                                    <img src="{{ asset('image/curve.png')}}" class="fullwidth heightloginimg"  alt="" />
                                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-top:2% !important" viewBox="0 0 1440 320"><path fill="#7db3ee" fill-opacity="1" d="M0,160L30,138.7C60,117,120,75,180,53.3C240,32,300,32,360,48C420,64,480,96,540,133.3C600,171,660,213,720,208C780,203,840,149,900,117.3C960,85,1020,75,1080,90.7C1140,107,1200,149,1260,186.7C1320,224,1380,256,1410,272L1440,288L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
                                </div>
                                <div class="p-5 mt-5 pt-5">
                                    <div class="text-center mt-5  hidden-sm">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Admin</h1>
                                    </div>
                                    <form class="user m-mobile p-3">
                                        <div class="input-icon-wrap ">
                                            <span class="input-icon bgbd hidden-md"><img src="{{ asset('image/envelop.png')}}" class="iconwidth" alt=""></span>
                                            <input type="text" class="input-with-icon bgbd" placeholder="Email">
                                            <span class="input-icon bgbd "><img src="{{ asset('image/envelop.png')}}" class="hidden-sm float-right iconwidth" alt=""></span>
                                        </div>
                                        <div class="input-icon-wrap mt-4">
                                            <span class="input-icon bgbd hidden-md"><img src="{{ asset('image/lock.png')}}" class="iconwidth" alt=""></span>
                                            <input type="text" class="input-with-icon bgbd" placeholder="Password">
                                            <span class="input-icon bgbd"><img src="{{ asset('image/lock.png')}}" class="hidden-sm float-right iconwidth" alt=""></span>
                                        </div>
                                        <div class="text-center mt-3">
                                            <a class="small text-decoration-underline text-gray"
                                                {{--                                       href="{{ route('Forgot') }}"--}}
                                            >Forgot your password?</a>
                                        </div>
                                        <a href="/admin" class="btn btn-primary btn-user text-uppercase col-md-6 offset-md-3 btn-shadow btn-block mt-5">
                                            <span class="hidden-sm">Sign in</span>
                                            <span class="hidden-md">Login</span>
                                        </a>
                                        <!-- <div class="ht-5h"></div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 d-none d-lg-block bg-login-image" style="background:url()">
                            <img src="{{ asset('image/loginImage.png')}}" class="fullwidth fillavailable" alt="">
                            <!-- <h2 class="text-white overlay-txt">25CENE</h2> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scriptTag')
    <script src="{{asset('/js/login.js')}}"></script>
@endsection










