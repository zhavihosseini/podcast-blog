<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 footer-links" style="text-align: right">
                            <h4 style="font-weight: bolder;font-size: 15px;padding: 8px">دسترسی سریع</h4>
                            <ul>
                                <li style="padding: 8px"><i class="bx bx-chevron-right"></i> <a href="{{route('dashboard')}}">داشبورد<i class="fas fa-angle-left" style="margin: 0px 3px"></i></a></li>
                                <li style="padding: 8px"><i class="bx bx-chevron-right"></i> <a href="{{route('dashboard')}}">عضویت ویژه<i class="fas fa-angle-left" style="margin: 0px 3px"></i></a></li>
{{--
                                <li style="padding: 8px"><i class="bx bx-chevron-right"></i> <a href="{{route('getscons',['var'=>'entrepreneurship','sort'=>'newest'])}}">کارآفرینی<i class="fas fa-angle-left" style="margin: 0px 3px"></i></a></li>
--}}
{{--
                                <li style="padding: 8px"><i class="bx bx-chevron-right"></i> <a href="#">در باره ما<i class="fas fa-angle-left" style="margin: 0px 3px"></i></a></li>
--}}
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-links" style="text-align: right">
                            <h4 style="font-weight: bolder;font-size: 15px;padding: 8px">منابع</h4>
                            @php
                            $alllink = \Illuminate\Support\Facades\DB::table('links')->limit(4)->get()->toArray();
                            @endphp
                            <ul style="direction: rtl">
                                @foreach($alllink as $item)
                                    @php
                                        $link = $item->link;
$name = $item->slug;
                                    @endphp
                                <li style="padding: 8px"> <a href="{{route('getscons',['var'=>$name,'sort'=>'newest'])}}">{{$link}}</a></li>
                                    @endforeach
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-links">
                            <h4 style="text-align: right"><span style="font-size: 15px;margin: 0px 15px;font-weight: bold">Zhavi</span><img src="{{asset('lls.jpg')}}" style="border-radius: 50%;width:30px"></h4>
                            <p style="font-weight: bold;font-size: 13px;text-align: right;direction: rtl">مجموعه ی ژاوی به شما دوستان عزیز کمک میکنه تا در هر سن و سالی که هستید کسب و کار آنلاین خودتون رو با بهینه ترین روش راه اندازی کنید🚀</p>
                            <p style="text-align: right;direction: rtl"><strong>تلفن :</strong> +1 5589 55488 55 <br></p>
                            <p style="text-align: right;direction: rtl"><strong>ایمیل :</strong> info@example.com<br></p>
                            <div class="social-links mt-3" style="direction: rtl;text-align: right">
                                <a href="#" class="twitter"><i class="fab fa-youtube" style="padding: 8px;border: 1px solid lightgrey;margin: 0px 5px;border-radius: 50%"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram" style="padding: 8px;border: 1px solid lightgrey;margin: 0px 5px;border-radius: 50%"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <p class="copyright">© تمامی حقوق برای مجموعه ژاوی محفوض است 1400</p>
        </div>
    </footer>
</div>
