<div id="pf7" class="pf w0 h0" data-page-no="7">
    <div class="pc pc6 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/a.png') }}">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/a.png') }}">
        <div class="t m0 x11 hb y91 ff1 fs5 fc0 sc0 ls0 ws0">B</div>
        <div class="t m0 hc y92 ff1 fs6 fc2 sc0 ls0 ws0" style="left: 232px">CHU KỲ VẬN SỐ</div>
        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x5 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">6</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
<div id="pf8" class="pf w0 h0" data-page-no="8">
    <div class="pc pc8 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/2.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">1</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHU KỲ VẬN SỐ</div>

        <div class="t m0 x30 hf yab ff2 fs9 fc2 sc0 ls0 ws0" style="width: 1500px; white-space: normal">
            {!! substr($data['data']['cycleFortune']['description'], 0) !!}
        </div>
        <div class="t m0 hf yaf ff2 fs9 fc2 sc0 ls0 ws0" style="display: flex; flex-wrap: wrap; left: 70px; bottom: 980px">
            <p>
                {!! $data['data']['cycleFortune']['content'] !!}
            </p>
        </div>
        @php
            $array = $data['data']['cycleFortune']['cycleFortune'];
            $filter = array_filter($array, function ($item) {
                return $item['year'] == 2023;
            });
            $number = array_values($filter)[0]['indicator'];
        @endphp
        <div class="t m0 hf yab ff2 fs9 fc2 sc0 ls0 ws0" style="bottom: 60%; left: -60px">
            @php
                $fileName = $number - 1;
            @endphp
            <img src="{{ asset($path . '/chuky/' . $fileName . '.png') }}" alt="" style="width: 2000px;">
        </div>

        @php
            $string = '';
            foreach ($data['data']['cycleFortune']['cycleFortune'] as $item) {
                $year = $item['year'];
                $str = $year . '<span class="_ _19"> </span>';
                if ($year == 2023) {
                    $string = $string . '<span class="ff1 fc6">' . $str . '</span>';
                } else {
                    $string = $string . $year . '<span class="_ _19"> </span>';
                }
            }
        @endphp
        <div class="t m0 h8 yb8 ff3 fs4 fc2 sc0 ls0 ws0">
            {!! $string !!}
        </div>
        <div class="t m0 x1a h9 yb9 ff4 fs4 fc2 sc0 ls0 ws0">Chu kỳ vận số của bạn</div>
        <div class="t m0 x5 h12 yba ff3 fs4 fc2 sc0 ls0 ws0">Năm<span class="_ _a"></span> nay<span
                class="_ _a"></span> 2023,<span class="_ _a"></span> bạn<span class="_ _9"></span> có<span
                class="_ _a"></span> chỉ<span class="_ _a"></span> số<span class="_ _a"></span> năm<span
                class="_ _a"></span> (vận<span class="_ _a"></span> niên<span class="_ _a"></span> cá<span
                class="_ _9"></span> nhân)<span class="_ _a"></span> là<span class="_ _a"></span> 2<span
                class="_ _a"></span> và<span class="_ _a"></span> đang<span class="_ _a"></span> ở<span
                class="_ _a"></span> giai<span class="_ _a"></span> đoạn<span class="_ _9"></span> đầu</div>
        <div class="t m0 x5 h12 ybb ff3 fs4 fc2 sc0 ls0 ws0">của<span class="_ _d"></span> chu<span
                class="_ _b"></span> kỳ<span class="_ _b"></span> vận<span class="_ _b"></span> số.<span
                class="_ _d"></span> Xem<span class="_ _b"></span> thêm<span class="_ _b"></span> Phần<span
                class="_ _b"></span> B<span class="_ _d"></span> Mục<span class="_ _b"></span> 7<span
                class="_ _b"></span> "CHỈ<span class="_ _b"></span> SỐ<span class="_ _d"></span> CÁC<span
                class="_ _b"></span> NĂM"<span class="_ _b"></span> để<span class="_ _d"></span> biết<span
                class="_ _b"></span> hướng<span class="_ _b"></span> phát</div>
        <div class="t m0 x5 h12 ybb ff3 fs4 fc2 sc0 ls0 ws0" style="bottom: 230px">triển trong năm nay và 2 năm tới!
        </div>
        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x5 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">7</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<div id="pfb" class="pf w0 h0" data-page-no="8">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/chi-so-nam.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">2</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">Chỉ số các năm</div>
        <div class="t m0 x4d h12 y64 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2023</div>
        <div class="t m0 x4e h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1120px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nowYearIndicator'] }}</div>
        <div class="t m0 x4d h12 y66 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2024</div>
        <div class="t m0 x4e h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1060px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nextYearIndicator'] }}</div>
        <div class="t m0 x4d h12 y68 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2025</div>
        <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1000px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['twoYearsLaterIndicator'] }}</div>

        <div class="t m0 x5 hf y1ca ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! $data['data']['yearIndicator']['description'] !!}
        </div>
        <div class="t m0 x5 h9 yc7 ff4 fs4 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['nowYearIndicator']['content'], 0, 1500) !!}
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">8</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

@if(substr($data['data']['yearIndicator']['nowYearIndicator']['content'], 1500, 3500) !== null)
<div id="pfc" class="pf w0 h0" data-page-no="9">
    <div class="pc pce w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
        <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['nowYearIndicator']['content'], 1500, 3500) !!}
        </div>
        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">9</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@endif
@if(substr($data['data']['yearIndicator']['nowYearIndicator']['content'], 4500) !== null)
<div id="pfc" class="pf w0 h0" data-page-no="9">
    <div class="pc pce w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
             src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
        <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['nowYearIndicator']['content'], 4500) !!}
        </div>
        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">9</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@endisset


<div id="pfd" class="pf w0 h0" data-page-no="10">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['nextYearIndicator']['content'], 0, 4000) !!}
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">10</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@if(substr($data['data']['yearIndicator']['nextYearIndicator']['content'], 4000) !== null)
<div id="pfd" class="pf w0 h0" data-page-no="10">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['nextYearIndicator']['content'], 4000) !!}
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">10</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@endif

<div id="pfd" class="pf w0 h0" data-page-no="11">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['twoYearsLaterIndicator']['content'], 0, 4000) !!}
        </div>

        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">11</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@if(substr($data['data']['yearIndicator']['twoYearsLaterIndicator']['content'], 4000) !== null)
<div id="pfd" class="pf w0 h0" data-page-no="11">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['twoYearsLaterIndicator']['content'], 4000) !!}
        </div>

        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">11</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@endif


<div id="pfd" class="pf w0 h0" data-page-no="12">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/chi-so-nam.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">3</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">Chỉ số các tháng</div>
        <div class="t m0 x4d h12 y64 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->format('m/Y') }}</div>
        <div class="t m0 x4e h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1120px">
            {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['nowMonthIndicator'] }}</div>
        <div class="t m0 x4d h12 y66 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->addMonths(1)->format('m/Y') }}</div>
        <div class="t m0 x4e h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1060px">
            {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['nextMonthIndicator'] }}</div>
        <div class="t m0 x4d h12 y68 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->addMonths(2)->format('m/Y') }}</div>
        <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1000px">
            {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['twoMonthsLaterIndicator'] }}
        </div>

        <div class="t m0 x5 hf y1ca ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! $data['data']['monthIndicator']['description'] !!}
        </div>
        <div class="t m0 x5 h9 ff4 fs4 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal; bottom: 800px">
            {!! substr($data['data']['monthIndicator']['nowMonthIndicator']['content'], 0) !!}
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">12</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<div id="pfd" class="pf w0 h0" data-page-no="13">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['monthIndicator']['nextMonthIndicator']['content'], 0) !!}
        </div>

        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">13</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<div id="pfd" class="pf w0 h0" data-page-no="11">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['monthIndicator']['twoMonthsLaterIndicator']['content'], 0) !!}
        </div>

        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">11</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<div id="pfd" class="pf w0 h0" data-page-no="12">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/bannga.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">4</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">NHÓM TÍNH CÁCH THEO BẢN NGÃ</div>

        <div class="t m0 hf ff2 fs9 fc2 sc0 ls0 ws0" style="width: 1300px; white-space: normal; top: 70px; left: 400px">
            {!! $data['data']['monthIndicator']['description'] !!}
        </div>

        <div class="t m0 x5 h8 yc3 ff1 fs4 fc2 sc0 ls0 ws0">1.1. Mạnh mẽ - Độc lập - Tự tin</div>
        <div class="t m0 x33 h10 yc4 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][0][1] }}%</div>
        <div class="t m0 x5 h8 yc5 ff1 fs4 fc2 sc0 ls0 ws0">1.2. Lắng nghe - Khéo léo - Nhạy cảm</div>
        <div class="t m0 x34 h10 yc6 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][1][1] }}%</div>
        <div class="t m0 x5 h8 yc7 ff1 fs4 fc2 sc0 ls0 ws0">1.3. Sáng tạo - Hoạt bát - Lạc quan</div>
        <div class="t m0 x35 h10 yc8 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][2][1] }}%</div>
        <div class="t m0 x5 h8 yc9 ff1 fs4 fc2 sc0 ls0 ws0">1.4. Cẩn thận - Cầu toàn - Thực tế</div>
        <div class="t m0 x34 h10 yca ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][3][1] }}%</div>
        <div class="t m0 x5 h8 ycb ff1 fs4 fc2 sc0 ls0 ws0">1.5. Năng động - Linh hoạt - Tò mò</div>
        <div class="t m0 x35 h10 ycc ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][4][1] }}%</div>
        <div class="t m0 x5 h8 ycd ff1 fs4 fc2 sc0 ls0 ws0">1.6. Quan tâm - Yêu thương - Kiểm soát</div>
        <div class="t m0 x12 h10 yce ff1 fs9 fc0 sc0 ls0 ws0">2%</div>
        <div class="t m0 x5 h8 ycf ff1 fs4 fc2 sc0 ls0 ws0">1.7. Thông thái - Khám phá - Truyền đạt</div>
        @isset($data['data']['percentIndicator'][5])
            <div class="t m0 x36 h10 yd0 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][5][1] }}%</div>
        @endisset
        @isset($data['data']['percentIndicator'][6])
            <div class="t m0 x5 h8 yd1 ff1 fs4 fc2 sc0 ls0 ws0">1.8. Công bằng - Tập trung - Lý tưởng</div>
            <div class="t m0 x12 h10 yd2 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][6][1] }}%</div>
        @endisset
        @isset($data['data']['percentIndicator'][7])
            <div class="t m0 x5 h8 yd3 ff1 fs4 fc2 sc0 ls0 ws0">1.9. Trách nhiệm - Rộng lượng - Hào phóng</div>
            <div class="t m0 x37 h10 yd4 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][7][1] }}%</div>
        @endisset
        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">14</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
