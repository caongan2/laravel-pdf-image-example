<div id="pf7" class="pf w0 h0" data-page-no="14">
    <div class="pc pc6 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/c.png') }}">
        <div class="t m0 x11 hb y91 ff1 fs5 fc0 sc0 ls0 ws0">C</div>
        <div class="t m0 hc y92 ff1 fs6 fc2 sc0 ls0 ws0" style="left: 150px">PHÂN TÍCH ĐƯỜNG ĐỜI</div>
        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x5 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">14</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<div id="pf7" class="pf w0 h0" data-page-no="15">
    <div class="pc pc6 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/duongdoi.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">1</div>
        @php
            $title = $data['data']['lifePathIndicator']['title'];
            $arr = explode('<span class="text-success">', $title);
            $end = end($arr);
            $final = explode('</span', $end);
            $numberLifePath = $final[0];
        @endphp
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ ĐƯỜNG ĐỜI (SỐ CHỦ ĐẠO)</div>
        <div class="t m0 x39 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0">{{ $numberLifePath }}</div>
        <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
            {!! $data['data']['lifePathIndicator']['description'] !!}
        </div>

        <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
            <div>
                {!! substr($data['data']['lifePathIndicator']['content'], 0, 1086) !!}
            </div>
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">15</div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>
</div>

<div id="pfd" class="pf w0 h0" data-page-no="16">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['lifePathIndicator']['content'], 1086) !!}
        </div>


        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">16</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<div id="pf7" class="pf w0 h0" data-page-no="17">
    <div class="pc pc6 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/duongdoi.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">2</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ SỨ MỆNH</div>
        <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 350px; top:150px;">
            {{ $data['data']['missionIndicator']['missionIndicator'] }}</div>
        <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
            {!! $data['data']['missionIndicator']['description'] !!}
        </div>

        <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px; bottom: 620px">
            {!! substr($data['data']['missionIndicator']['content'], 0, 1611) !!}
        </div>
    </div>

    <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
    @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
    <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">17</div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
</div>

<div id="pfd" class="pf w0 h0" data-page-no="18">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            <div> {!! substr($data['data']['missionIndicator']['content'], 1611, 4901) !!}
            </div>


            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">18</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>

    <div id="pfd" class="pf w0 h0" data-page-no="19">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
            <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
                {!! substr($data['data']['missionIndicator']['content'], 6512) !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">19</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="20">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">3</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TRƯỞNG THÀNH</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['maturityIndicator']['maturityIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['maturityIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 620px">
                {!! substr($data['data']['maturityIndicator']['content'], 0, 1430) !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">20</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pfd" class="pf w0 h0" data-page-no="21">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
                {!! substr($data['data']['maturityIndicator']['content'], 1430) !!}
            </div>


            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">21</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="22">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">4</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ LINH HỒN</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['soulIndicator']['soulIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['soulIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 620px">
                {!! substr($data['data']['soulIndicator']['content'], 0) !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">22</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="23">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">5</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TÍNH CÁCH</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['personalIndicator']['personalIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['personalIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 620px">
                {!! substr($data['data']['personalIndicator']['content'], 0) !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">23</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="24">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">6</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ NĂNG LỰC TỰ NHIÊN</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['dobIndicator']['dobIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['dobIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 620px">
                {!! substr($data['data']['dobIndicator']['content'], 0) !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">24</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="25">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">7</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ THÁI ĐỘ</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['attitudeIndicator']['attitudeIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['attitudeIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 620px">
                <div>
                    {!! substr($data['data']['attitudeIndicator']['content'], 0, 2931) !!} </div>
            </div>
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer')
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">25</div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>
</div>

<div id="pfd" class="pf w0 h0" data-page-no="26">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            <div>{!! substr($data['data']['attitudeIndicator']['content'], 2931) !!}
            </div>


            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">26</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="27">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">8</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ ĐAM MÊ</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 400px">
                {{ implode(', ', $data['data']['passionIndicator']['passionIndicator']) }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['passionIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 780px">
                @for ($index = 0; $index <= 1; $index++)
                    @isset($data['data']['passionIndicator']['data'][$index])
                        {!! $data['data']['passionIndicator']['data'][$index] !!}
                    @endisset
                @endfor
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">27</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pfd" class="pf w0 h0" data-page-no="28">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
                @for ($index = 2; $index <= 3; $index++)
                    @if (isset($data['data']['passionIndicator']['data'][$index]))
                        {!! $data['data']['passionIndicator']['data'][$index] !!}
                    @endif
                @endfor
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">28</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="29">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">9</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TƯ DUY LÝ TRÍ</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['thinkingIndicator']['thinkingIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['thinkingIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 780px">
                {!! $data['data']['thinkingIndicator']['content'] !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">29</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="30">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">10</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TƯ DUY CẢM XÚC</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['emotionalThinkingIndicator']['emotionalThinkingIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['emotionalThinkingIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 780px">
                {!! $data['data']['emotionalThinkingIndicator']['content'] !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">30</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="31">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 80px;">11</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ NĂNG LỰC TRỰC GIÁC</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['intuitiveThinkingIndicator']['intuitiveThinkingIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['intuitiveThinkingIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 780px">
                {!! $data['data']['intuitiveThinkingIndicator']['content'] !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">31</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="32">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">12</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TƯ DUY HÀNH ĐỘNG</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['actionThinkingIndicator']['actionThinkingIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['actionThinkingIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 780px">
                {!! $data['data']['actionThinkingIndicator']['content'] !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">32</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="33">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">13</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">SỐ BẢN CHẤT CỦA BẠN</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['natureIndicator']['natureIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['natureIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 750px">
                {!! $data['data']['natureIndicator']['data'][0] !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">33</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pfd" class="pf w0 h0" data-page-no="34">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
                {!! $data['data']['natureIndicator']['data'][1] !!}
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">34</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="35">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">14</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TIỀM THỨC</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['subconsciousPowerIndicator']['subconsciousPowerIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['subconsciousPowerIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 750px">
                {!! $data['data']['subconsciousPowerIndicator']['content'] !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">35</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="36">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/ck-duong-doi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">15</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHU KỲ ĐƯỜNG ĐỜI</div>

            <div class="t m0 x3c h13 y124 ff1 fsb fc8 sc0 ls0 ws0">3<span class="_ _1b"> </span><span
                    class="fc9">1<span class="_ _1b"> </span><span class="fca">3</span></span></div>
            <div class="t m0 x3d h8 y125 ff1 fs4 fc8 sc0 ls0 ws0">Chu kỳ 1<span class="_ _1c"> </span><span
                    class="fc9">Chu kỳ 2<span class="_ _1d"> </span><span class="fca">Chu kỳ 3</span></span>
            </div>
            <div class="t m0 x35 h14 y126 ff1 fsc fc8 sc0 ls0 ws0">GIEO HẠT<span class="_ _1e"> </span><span
                    class="fc9">CHÍN<span class="_ _1f"> </span><span class="fca">THU HOẠCH</span></span>
            </div>
            <div class="t m0 x3e h6 y127 ff3 fs2 fc2 sc0 ls0 ws0">Đầu đời - 29 tuổi (2030)<span class="_ _20">
                </span>30 - 56 tuổi (2031 - 2057)<span class="_ _21"> </span>57 tuổi về sau (2058 trở đi)</div>

            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; top: 450px">
                {!! $data['data']['lifeCircleIndicator']['description'] !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">36</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>

    </div>

    <div id="pfd" class="pf w0 h0" data-page-no="37">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
                {!! $data['data']['lifeCircleIndicator']['content'] !!}
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">37</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="38">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/kim-tu-thap.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">16</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">KIM TỰ THÁP SỐ HỌC</div>

            <div class="t m0 x12 h16 y165 ff1 fse fc2 sc0 ls0 ws0">Tháng 03</div>
            <div class="t m0 x3f h14 y166 ff1 fsc fc2 sc0 ls0 ws0">3</div>
            <div class="t m0 x40 h4 y165 ff1 fs2 fc2 sc0 ls0 ws0">Ngày 10</div>
            <div class="t m0 x41 h14 y166 ff1 fsc fc2 sc0 ls0 ws0">1</div>
            <div class="t m0 x42 h16 y165 ff1 fse fc2 sc0 ls0 ws0">2001</div>
            <div class="t m0 x43 h14 y166 ff1 fsc fc2 sc0 ls0 ws0">3</div>
            <div class="t m0 x21 h14 y167 ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstPeakIndicator'] }}</div>
            <div class="t m0 x44 h16 y168 ff1 fse fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['age'][0] .'-'. $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['age'][1] }} tuổi</div>
            <div class="t m0 x45 h5 y169 ff2 fs2 fc2 sc0 ls0 ws0">(2022 - 2030)</div>
            <div class="t m0 x46 h14 y167 ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondPeakIndicator'] }}</div>
            <div class="t m0 x47 h16 y168 ff1 fse fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['age'][0] .'-'. $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['age'][1] }} tuổi</div>
            <div class="t m0 x48 h5 y169 ff2 fs2 fc2 sc0 ls0 ws0">(2030 - 2039)</div>
            <div class="t m0 x41 h14 y16a ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdPeakIndicator'] }}</div>
            <div class="t m0 x49 h16 y16b ff1 fse fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['age'][0] .'-'. $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['age'][1] }} t</div>
            <div class="t m0 x4a h5 y16c ff2 fs2 fc2 sc0 ls0 ws0">(2039 - 2048)</div>
            <div class="t m0 x41 h14 y16d ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthPeakIndicator'] }}</div>
            <div class="t m0 x4b h16 y16e ff1 fse fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['age'][0] }} tuổi</div>
            <div class="t m0 x4c h17 y16f ff2 fse fc2 sc0 ls0 ws0">(2048 - 2057)</div>
            <div class="t m0 x21 h14 y170 ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstChallengeIndicator'] }}<span class="_ _1b"> </span>{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondChallengeIndicator'] }}</div>
            <div class="t m0 x41 h14 y171 ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdChallengeIndicator'] }}</div>
            <div class="t m0 x41 h14 y172 ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthChallengeIndicator'] }}</div>

            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 450px">
                {!! $data['data']['challengeIndicator']['description'] !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">38</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pfd" class="pf w0 h0" data-page-no="39">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
                {!! substr($data['data']['challengeIndicator']['content'], 0, 6000) !!}
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">39</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>
    <div id="pfd" class="pf w0 h0" data-page-no="40">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
            <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
                {!! substr($data['data']['challengeIndicator']['content'], 6000, 5000) !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">40</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>

    <div id="pfd" class="pf w0 h0" data-page-no="41">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
                {!! substr($data['data']['challengeIndicator']['content'], 11000, 5000) !!}
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">41</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>

    <div id="pfd" class="pf w0 h0" data-page-no="42">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
            <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
                {!! substr($data['data']['challengeIndicator']['content'], 16000, 6000) !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">42</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>

    <div id="pfd" class="pf w0 h0" data-page-no="43">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
                {!! substr($data['data']['challengeIndicator']['content'], 22000, 5000) !!}
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">43</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="44">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">17</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ LẶP</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ implode(', ', $data['data']['repeatIndicator']['repeatIndicator']) }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['repeatIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 750px">
                @foreach ($data['data']['repeatIndicator']['data'] as $item)
                    {!! $item !!}
                @endforeach
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">44</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="45">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">18</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CÁC CHỈ SỐ THIẾU</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 400px">
                {{ implode(', ', $data['data']['missIndicator']['missIndicator']) }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['missIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 750px">
                @foreach ($data['data']['missIndicator']['data'] as $item)
                    {!! $item !!}
                @endforeach
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">45</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="46">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">19</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ CÂN BẰNG</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['balanceIndicator']['balanceIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['balanceIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 700px">
                {!! substr($data['data']['balanceIndicator']['content'], 0, 2000) !!}</div>
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer')
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">46</div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>
</div>

<div id="pfd" class="pf w0 h0" data-page-no="47">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            <div>{!! substr($data['data']['balanceIndicator']['content'], 2000) !!}
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">47</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>
    <div id="pf7" class="pf w0 h0" data-page-no="48">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">20</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ KẾT NỐI ĐƯỜNG ĐỜI VÀ SỨ MỆNH</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['linkLifePathAndMission']['linkLifePathAndMission'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['linkLifePathAndMission']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 700px">
                {!! substr($data['data']['linkLifePathAndMission']['content'], 0, 2000) !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">48</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="49">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">21</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ KẾT NỐI LINH HỒN VÀ TÍNH CÁCH</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 320px; top:150px;">
                {{ $data['data']['linkSoulAndPersonalIndicator']['linkSoulAndPersonalIndicator'] }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['linkSoulAndPersonalIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 700px">
                {!! substr($data['data']['linkSoulAndPersonalIndicator']['content'], 0, 2000) !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">49</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="50">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0">22</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CÁC CHỈ SỐ NỢ NGHIỆP</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0" style="left: 400px">
                {{ implode(', ', $data['data']['karmicIndicator']['karmicIndicator']) }}</div>
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                {!! $data['data']['karmicIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 700px">
                @foreach ($data['data']['karmicIndicator']['data'] as $item)
                    {!! $item !!}
                @endforeach
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">50</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="51">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/suc-manh.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">BIỂU ĐỒ SỨC MẠNH(rất quan trọng)</div>
            @php
                $strength = new stdClass();
                foreach ($data['data']['drawStrengthChart'] as $value) {
                    $strStrength = $value[1];
                    $text = '';
                    for ($index = 1; $index <= $strStrength; $index++) {
                        $text .= $value[0];
                    }
                    $strength->{$value[0]} = $text;
                }
            @endphp
            <div class="t m0 x55 h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0">{{ $strength->{3} ?? null }}</div>
            <div class="t m0 h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 450px">{{ $strength->{6} ?? null }}</div>
            <div class="t m0 h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px">{{ $strength->{9} ?? null }}</div>
            <div class="t m0 x55 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0">{{ $strength->{2} ?? null }}</div>
            <div class="t m0 x55 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 450px">{{ $strength->{5} ?? null }}
            </div>
            <div class="t m0 x55 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px">{{ $strength->{8} ?? null }}
            </div>
            <div class="t m0 x2 h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0">{{ $strength->{1} ?? null }}</div>
            <div class="t m0 x2 h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="left: 450px">{{ $strength->{4} ?? null }}
            </div>
            <div class="t m0 x2 h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px">{{ $strength->{7} ?? null }}
            </div>
            @php
                $return = [];
                if (isset($strength->{1}) && isset($strength->{2}) && isset($strength->{3})) {
                    array_push($return, [
                        'title' => '- 1 TRỤC LẬP KẾ HOẠCH (1-2-3)',
                        'content' => 'Trục này cho thấy bạn là người có khả năng lập kế hoạch tốt và thường làm theo kế hoạch vạch ra. Bạn làm việc gì thường cũng có những bước định sẵn trong đầu rõ ràng.',
                    ]);
                } elseif (empty($strength->{1}) && empty($strength->{2}) && empty($strength->{3})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC LẬP KẾ HOẠCH (1-2-3) MÀ BẠN THIẾU',
                        'content' => 'Người thiếu cả ba số 1-2-3 trong biểu đồ ngày sinh có thể mang những đặc điểm tiêu cực như lộn xộn, rối loạn, thiếu tính tổ chức, thiếu tính kỉ luật. Công việc và cuộc sống dễ bị đảo lộn, bừa bãi hoặc bê bối. Điều này sẽ khiến họ có đạt được thành công trong cuộc sống.',
                    ]);
                }
                if (isset($strength->{4}) && isset($strength->{5}) && isset($strength->{6})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC Ý CHÍ (4-5-6)',
                        'content' => 'Đây là trục có rất ít người sở hữu, người sở hữu nó thường rất năng động, luôn thể hiện nguồn lực sống mạnh mẽ. Tuy nhiên những người này thường có xu hướng muốn áp chế người khác để khẳng định cái tôi và sức mạnh bản thân. Họ rất có bản lĩnh, có tinh thần vươn lên tự kỉ luật mình. Đây cũng là những người có tố chất của nhà lãnh đạo, thường gặp may mắn trong cuộc sống.',
                    ]);
                } elseif (empty($strength->{4}) && empty($strength->{5}) && empty($strength->{6})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC Ý CHÍ (4-5-6) MÀ BẠN THIẾU',
                        'content' => 'Thường bạn sẽ có cảm giác bực bội, thất vọng kéo dài khi bạn không làm được điều mà mình muốn hoặc người khác làm việc không đúng như ý của bạn. Lời khuyên là bạn hãy luyện tập để tăng thêm các số 4, 5 hoặc 6. Nếu tên của bạn cũng chứa những số này thì bạn dễ dàng đạt được hơn. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn.Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ.Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn.',
                    ]);
                }
                if (isset($strength->{7}) && isset($strength->{8}) && isset($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9)',
                        'content' => 'Bạn thường thụ động. Khi làm việc bạn thường dựa dẫm vào người khác nhiều hơn là tự mình làm. Lời khuyên cho bạn là hãy luyện tập để tăng các số 7, 8 hoặc 9 lên.Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạcSố 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                    ]);
                } elseif (empty($strength->{7}) && empty($strength->{8}) && empty($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9) MÀ BẠN THIẾU',
                        'content' => 'Trục này cho thấy bạn có tính hành động và chủ động cao, ít dựa dẫm vào người khác. Trong khi người khác còn đang nói hoặc nghĩ thì bạn lại muốn hành động luôn.',
                    ]);
                }
                if (isset($strength->{1}) && isset($strength->{4}) && isset($strength->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7)',
                        'content' => 'Trục này đại diện cho hoạt động của con người. Trục này quản lý lời nói, ngôn ngữ hình thể, động lực, óc tổ chức, tính kiên nhẫn, tính vật chất và sự lĩnh hội thông qua mất mát (học hỏi qua những lần vấp ngã).',
                    ]);
                } elseif (empty($strength->{1}) && empty($strength->{4}) && empty($strength->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường thiếu tính thực tế trong công việc và thường thiếu ngăn nắp, hay mơ mộng. Lời khuyên cho bạn là hãy luyện tập để tăng các số 1, 4 hoặc 7 lên. Số 1 bạn có thể tăng bằng cách tập viết nhật ký, học cách bộc lộ quan điểm, chính kiến, đặt mục tiêu rõ ràng. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn. Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm.',
                    ]);
                }
                if (isset($strength->{2}) && isset($strength->{5}) && isset($strength->{8})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TINH THẦN (2-5-8)',
                        'content' => 'Trục này đại diện cho những gì liên quan đến trái tim của con người. Trục này phụ trách toàn bộ cảm giác, bao gồm trực giác, tình yêu thương, sự tự do, các cảm xúc tích cực, các biểu đạt nghệ thuật, sự độc lập về tinh thần, và trí tuệ/sự thông thái.',
                    ]);
                } elseif (empty($strength->{2}) && empty($strength->{5}) && empty($strength->{8})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường nhạy cảm quá mức nên dễ bị tổn thương về mặt tâm lý. Lời khuyên cho bạn là hãy luyện tập để tăng các số 2, 5 hoặc 8 lên. Số 2 bạn có thể tăng bằng cách lắng nghe, cảm nhận suy nghĩ của người khác. Tập thiền hoặc tập yoga. Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạc.',
                    ]);
                }
                if (isset($strength->{3}) && isset($strength->{6}) && isset($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9)',
                        'content' => 'Trục này đại diện cho những gì liên quan đến đầu óc của con người. Trục này phụ trách trí nhớ, suy nghĩ, tư duy phân tích, lý trí, trí tưởng tượng, óc sáng tạo, tinh thần trách nhiệm, hoài bão/tham vọng và lý tưởng sống.',
                    ]);
                } elseif (empty($strength->{3}) && empty($strength->{6}) && empty($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường mau quên và gặp khó khăn trong việc học các kiến thức mới. Lời khuyên cho bạn là hãy luyện tập để tăng các số 3, 6 hoặc 9 lên. Số 3 bạn có thể tăng bằng cách tập kể chuyện cười và tham gia vào các hoạt động vui vẻ sôi nổi nhiều hơn. Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn. Số 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                    ]);
                }
                if (isset($strength->{1}) && isset($strength->{5}) && isset($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9)',
                        'content' => 'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                    ]);
                } elseif (empty($strength->{1}) && empty($strength->{5}) && empty($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9) MÀ BẠN THIẾU',
                        'content' => 'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                    ]);
                }
                if (isset($strength->{3}) && isset($strength->{5}) && isset($strength->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC NHẠY BÉN (3-5-7)',
                        'content' => 'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                    ]);
                } elseif (empty($strength->{3}) && empty($strength->{5}) && empty($strength->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC NHẠY BÉN (3-5-7) MÀ BẠN THIẾU',
                        'content' => 'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quyết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                    ]);
                }
            @endphp
            <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                @foreach ($return as $item)
                    {!! $item['title'] !!}
                    <p>{!! $item['content'] !!}</p>
                @endforeach
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x5 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">51</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pfd" class="pf w0 h0" data-page-no="52">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            @php
                $strengthTWO = [];
                $jsonStrength =
                    '[{"key":1,"title":["Bạn thuộc về tuýp người gặp một ít khó khăn trong việc tự diễn đạt bằng ngôn ngữ. Điều này không có nghĩa là bạn không nói tốt, mà là bạn khó diễn đạt được cảm xúc nội tâm mình. Bạn có thể nói rất lưu loát, mạnh mẽ về các đề tài không liên quan đến diễn đạt cảm xúc cá nhân, nhưng cảm thấy để diễn tả về mình hoặc những gì mình đang cảm thấy, thật không biết làm sao mà nói. Chỉ khi nào đủ trưởng thành và thấu hiểu mọi chuyện hơn, điều này mới được cải thiện. Đôi khi, trước một tình huống, bạn sẽ phát ra những lời nói hoàn toàn trái ngược với những gì trong lòng bạn thực nghĩ, theo một cách diễn đạt khá ‘sắc nhọn’, dễ làm người khác tổn thương hoặc thấy xúc phạm. Điều này ắt làm trầm trọng hóa vấn đề ban đầu, đưa đến những cuộc cãi vã, tranh luận gay gắt. Bạn cần học suy nghĩ cẩn trọng trước khi phát biểu, và cần học phản ứng chậm lại trước các ý kiến, lời phê bình..., bởi lời nói đã phát ra khó thu hồi lại được, mà cảm giác thương tổn cũng khó mà hàn gắn. Về cuộc sống, những người có một số 1 thường hay cảm thấy thiếu thiếu một điều gì đó trong cuộc sống, cho dẫu thoạt nhìn bạn rất đủ đầy ở một số mặt.","Người có hai số 1 (11) là người may mắn nhất trong cả nhóm, bởi sự cân bằng trời cho trong việc diễn đạt nội tâm. Đây là một đặc điểm đầy giá trị trong biểu đồ ngày sinh mà bạn nên sử dụng một cách khôn ngoan – không bao giờ lạm dụng nó cho mục đích áp đảo người khác. (Luôn nhớ ý thức tránh bực bội hay coi thường những người không được may mắn (có 11 giống bạn), đặc biệt là nếu bạn đang yêu hoặc kết hôn với một người không được có 11). Người có 11 thường có khả năng nhìn nhận các vấn đề hay các cuộc tranh luận, tranh cãi theo cả hai mặt đối lập, và vì vậy, bạn hoàn toàn có khả năng đổi hướng giữa chừng nếu trong một cuộc thảo luận, bạn cảm thấy quả thật hướng đối nghịch thực sự mang lại giá trị lớn lao hơn. Điều này khiến cho bạn không bị sa vào bảo thủ khư khư giữ ý kiến mình khiến tầm hiểu biết bị giới hạn một chiều, mà cũng không bị ‘chấp’ với những điều mình cho là ‘lỗi’, là ‘sai’ ở người, dễ tha thứ cho người. Điều này tạo cho bạn điều kiện lĩnh hội được nhiều kiến thức rộng lớn hơn, khả năng thấu hiểu lòng người cũng sâu hơn. Hệ quả là: bạn thường dễ có cuộc sống cân bằng, an vui, nói vui là “Ok I’m fine”, dẫu cho cuộc sống có thế nào. Chính vì những yếu tố tích cực và dung hòa, cân bằng này mà người có hai số 1 dễ tìm thấy trong các chính trị gia thành công hoặc những người của công chúng, người nổi tiếng. Yếu tố hai số 1 làm nổi bật khả năng nhận thức, thấu hiểu con người, cũng như khả năng diễn đạt bản thân mình, giảm thiểu khả năng bị hiểu lầm hoặc hiểu lầm người khác, và khả năng nhìn nhận các vấn đề một cách đa chiều, không phiến diện.","Với những người có ba lần số 1 trở lên được lặp lại trong ngày sinh, có hai khả năng khá đối lập xảy ra trong thực tế. Thường gặp nhất là những người... rất yêu nói, nói rất nhiều,thường có mặt trong rất nhiều hoạt động sôi nổi mà trong đó, họ trở nên nổi bật, thú vị. Nhìn chung bạn thấy cuộc sống dễ chịu và hay cố gắng chia sẻ điều đó với những người xung quanh mình.Nhóm thứ hai thuộc về một số người, cũng có ba số 1 trở lên, nhưng lại trống nguyên hàng ngang chính giữa là trục Tinh thần (tức vắng mặt các số 2,5,8). Những người này thường hay im lặng, khá hướng nội, khá bẽn lẽn, đặc biệt với người lạ. Tuy vậy những người này cũng sẽ trở nên hoạt bát và nói nhiều trong những lúc họ cảm thấy thân tình, dễ chịu, trong một nhóm bạn bè thân hay người thân trong nhà. Những người này cảm thấy họ diễn đạt những cảm xúc cá nhân hay nội tâm tốt hơn thông qua việc viết xuống tâm tình mình, bằng cách này những tư tưởng của họ liền mạch hơn, không bị sự nhạy cảm quá mức của họ làm cho cản trở. Nếu bạn thuộc nhóm này mà chưa biết sức mạnh của khả năng viết lách của mình, hãy thử nhé. Còn một khả năng nữa ở những người này đó là... tâm trạng lúc vui lúc buồn. Mà tùy theo những yếu tố khác trong biểu đồ ngày sinh tác động mà tỉ lệ ‘vui – buồn’ này gia giảm"]},{"key":2,"title":["Biểu đồ có mỗi một con 2 chỉ một mức độ trực giác cơ bản, nhưng không phải lúc nào cũng đủ trong thế giới đầy tính cạnh tranh này, đặc biệt là đối với đàn ông. Với muôn mặt xã hội hiện giờ đang chú trọng nhiều vào những giá trị nhân tạo, mỗi cá nhân cần phải tự uyển chuyển lắm mới khớp được vào guồng chung, mới mong cạnh tranh thành công. Và điều này không thể có được nếu không có một mức độ nhạy cảm cân bằng cao. Nếu không có sự cân bằng, những người mang bản chất nhạy cảm sẽ dễ dàng bị tổn thương, và thường vì thế đưa ra những phản ứng thiếu khôn ngoan. Giới đàn ông thường dễ chịu tình trạng này hơn phái nữ. Một con 2 cung cấp một nền tảng giá trị cho việc phát triển tính nhạy cảm cân bằng, nhưng giá trị cân bằng lý tưởng nhất nằm ở cặp đôi 22 nha. Phái nữ có một con 2 thì vẫn ổn, bởi trời sinh phái nữ vốn đã... đủ nhạy cảm rồi. Nhìn chung, người có một con 2 thường dễ cảm thấy họ cần nhiều thời gian để thư giãn, ở ngoài thiên nhiên và tránh xa môi trường cạnh tranh căng thẳng.","Trực giác và độ nhạy cảm lý tưởng này sẽ cho phép người có cặp 22 đạt được trí thông minh trên mức trung bình, dựa trên khả năng thấu hiểu trời cho đối với con người và vạn tình huống xảy ra. Khi cần cái gọi là ‘ấn tượng đầu tiên’, trực giác của những người này cực đáng tin cậy, với độ chính xác và nhanh chóng đáng kinh ngạc. Người khác đối với họ là chân thành hay không, họ đều nhận ra được ngay, miễn là họ không để cái tôi hay trí tưởng tưởng của họ nhảy vào và tô màu, làm biến màu trực giác nguyên thủy họ có. Sự cân bằng trong độ nhạy cảm xuất phát từ trực giác này, nếu được diễn đạt tích cực, sẽ có khuynh hướng kéo họ vào rất nhiều mặt của cuộc sống. Thường họ sẽ xử lý những việc này rất suôn sẻ, thành công, nhưng họ cũng cần để ý để tránh bị liên quan vào quá nhiều vụ việc, vì việc nào cũng đáng làm. Nếu cứ mê mải lao vào những việc đều cần làm này, hạnh phúc gia đình có thể chịu phương hại. Và nên nhớ, việc gì cũng phải nhớ giữ cân bằng, cân bằng là chìa khóa mở cửa thành công.","Một khi đã gọi là ‘vượt ngưỡng cân bằng’, chúng ta sẽ bị quá đà. Người có ba số 2 trở lên trong biểu đồ ngày sinh thường chịu sự nhạy cảm không cân bằng, một sự quá mức có thể phát triển thành một dạng gánh nặng tâm lý khó thể chịu nổi. Điều này có nghĩa là người này rất dễ bị tác động bởi tâm trạng của người khác, hậu quả là khả năng rất cao luôn bị lôi kéo sâu vào các vấn đề, các trục trặc của người khác. Để đảm bảo một chế độ tự bảo vệ đầy nhạy cảm, những người này hay bỏ nhiều thời gian chìm đắm trong thế giới riêng của mình, qua đó lộ ra vẻ đơn độc mà nếu để lâu, dần dà phát triển thành sự cô độc. Nhiều người với ba số 2 trở lên làm việc trong ngành giải trí sẽ dễ dàng chạm tới thành công khi áp mình vào khắc họa tính cách của những nhân vật khác nhau. Tuy vậy, nói nôm na là đôi khi quá nhập tâm vào các vai diễn, họ khó trả vai ra được, khiến họ luôn cảm thấy tổn thương. Từ điểm này, lúc nào họ cũng tìm cách tự vệ mình, hay phát biểu một số câu bốc đồng khiến tổn thương người khác. Trẻ có ba số 2 trở lên thường bắt chước người khác rất giỏi, và chúng luôn có bản năng tự nhiên muốn chia sẻ những cảm giác của người khác. Tuy vậy, việc cảm xúc cứ trồi trồi sụt sụt theo cảm giác, vui buồn của người khác cứ như suốt ngày nhảy lên chơi trò chơi tàu uốn lượn khiến chúng mệt mỏi và mất cân bằng, nên việc này cần được các bậc cha mẹ quan sát và hướng dẫn con cẩn thận. Bởi nhiệm vụ quan trọng của các bậc cha mẹ là giúp con có được nền tảng vững chắc về sự tự tin, cùng với định hướng đường đời theo con số chủ đạo mà ngày sinh con cộng ra."]},{"key":3,"title":["Được ví như một cái ‘mỏ neo’ trụ chặt trí nhớ, con số 3 duy nhất ở biểu đồ ngày sinh giúp cho một người có trí nhớ rất tốt và lâu dài, miễn là nó được nhớ mà mang ra sử dụng (trong quá trình tiến hóa, cái gì không được dùng thường xuyên sẽ dần bị teo lại). Con số 3 duy nhất giúp người này giữ được sự nhanh nhạy trong hoạt động trí não. Các bạn nhỏ có một số 3 sẽ rất có lợi thế trong việc học tập, cả học chính thức và học hỏi ngoài đời. Họ sẽ luôn chủ động quan tâm tới cuộc sống và môi trường họ đang sống. Người có một số 3 cũng sẽ rất linh hoạt và thường sống khá tích cực, và đem năng lượng tích cực này thổi vào hầu hết công việc mà họ làm. Họ cũng có mức tự tin trên mức trung bình, điều này cũng góp phần không nhỏ vào thành công của họ trong cuộc sống.","Nhân đôi độ nhạy về phần trí não, người có hai con ba trong biểu đồ ngày sinh dễ trở nên giàu trí tưởng tượng và tăng khả năng văn chương. Tuy vậy, những sức mạnh này cần được theo dõi chặt chẽ để có thể phát triển chúng theo hướng tích cực và cân bằng nhất, tránh khả năng đi theo hướng tiêu cực, dễ có những hành vi (phản kháng xã hội). Để kích hoạt được khả năng tự kỷ luật cho bản thân, người có hai số 3 nên thực hành thiền tĩnh tâm những khi có thể, cùng với những bài tập luyện trí nhớ, và bài tập luyện phát triển trực giác. Những điều này, nói nôm na giống như ‘kéo bớt’ người có 33 về với thực tế, với tính chất xây dựng và tích cực hơn. Chứ nếu không, đầu óc quá nhạy chiều tưởng tượng của những người này sẽ làm hỏng cái nhìn khách quan hay một tầm hiểu biết toàn diện. Mà nếu cứ tiếp tục nuông chiều óc tưởng tượng, suy diễn của mình, dần dà họ mất luôn tính thực tế. Người có hai hay ba số 3 trong biểu đồ ngày sinh thường có khả năng viết lách đáng kể. Nếu được khích lệ, họ có khả năng viết xuất sắc, khai thác được nhiều nguồn chất liệu dồi dào, và hoàn toàn có khả năng đưa kỹ năng này thành một công việc nghiêm túc có thể mang về thu nhập đáng kể","Người có ba số 3 trở lên trong biểu đồ ngày sinh có sự nhạy bén tâm trí vượt mức bình thường Họ thường nghĩ về tương lai và khó tập trung vào hiện tại. Họ thường hay bị quá căng thẳng và xao lãng, khó tin tưởng người khác cũng bởi độ nhạy bén trong tâm trí họ đã trở nên quá cao. Do đó, họ khó có bạn thân, khó có hạnh phúc. Người có ba số 3 trở lên thường dễ đắm chìm vào tâm tưởng, quên mất hiện tại."]},{"key":4,"title":["Người có một số 4 trong biểu đồ ngày sinh là những người rất chủ động, làm việc gì cũng hăng hái, thực tế, bao gồm các hoạt động có liên quan đến các khâu tổ chức, kỹ thuật, tài chánh hay hoạt động thể chất như làm vườn, các nghệ thuật tạo hình từ đôi tay, xây dựng, vv... Ở đây con số chủ đạo của họ sẽ bao trùm lên để khi bạn ghép hai yếu tố này lại, cái gì rõ nét ở cả hai yếu tố sẽ được ưu tiên chọn lựa để theo đuổi. Những người có một số 4 sẽ thích nhào vô làm việc phần thực tế hơn là ngồi nghiền ngẫm các hệ thống lý luận, và đặc biệt, những người này sẽ dễ hoài nghi, không tin nếu họ thấy hay nghe cái gì có vẻ quá mơ hồ, trừu tượng. Họ thích thực tế hơn lý thuyết, và dễ mất kiên nhẫn với những ai thất hẹn. Họ thích nhào vô xúc tiến công việc ngay lập tức và điều này gần như trở thành điều ‘bất di bất dịch’ ở họ, đặc biệt là khi họ có thêm một con số 7 nữa trong ngày sinh của mình. Nếu quan tâm quá nhiều đến khía cạnh thể chất có thể khiến những người có một số 4 trở nên hơi qua thiên về vật chất. Điều này có thể là một khía cạnh tiêu cực của số 4, mục đích là để dạy cho những người có số này học cách dùng lòng kiên nhẫn tự nhiên của mình để tránh chạy theo chủ nghĩa vật chất. Điều này đạt được cao nhất thông qua việc phát triển sự quan tâm và lòng trắc ẩn lòng thương của mình với những người khác. Nói một cách khác, bạn càng học quan tâm và thương người khác nhiều thêm chừng nào, tự nhiên dần dần bạn sẽ không còn màng nhiều đến những giá trị vật chất quanh mình nữa. Và bằng cách này, bạn sẽ đạt được tình bạn, hay hạnh phúc lâu dài.","Nhân đôi số 4 có thể làm những người có cặp số 4 trong ngày sinh dễ có cái nhìn không cân bằng về cuộc sống, trong đó họ hay quy mọi cái về các giá trị thực tế và vật chất. Vậy điều người có hai số 4 cần học là cách hài hòa mọi cái cho cân bằng giữa ba mặt: thể chất/vật chất, tinh thần, và trí não. Như vậy họ sẽ thấy thoải mái khi sống với cảm xúc hay tư duy hơn. Nếu những người này có Con số chủ đạo là một trong các trục Tâm hồn (số 2,5,8) hoặc trục Trí não (số 3,6,9), những người này có khả năng vươn lên để cảm nhận các vấn đề về tinh thần hay trí não cao hơn những người cũng có con số chủ đạo là một số thuộc trục Thể chất (các số 4,7). Nói chung, càng có nhiều số 4, càng cần phải học cách cân đối ba yếu tố đã nhắc trên, và khi chọn bạn bè, cần phải để ý tránh xa các bạn bè có khả năng tác động tiêu cực đến bạn. Ngược lại, nếu bạn chọn được những người bạn biết trân trọng những giá trị thẩm mỹ, văn hóa, đạo đức của cuộc, thì cuộc đời của bạn cũng sẽ được cân bằng nhanh về hướng tốt đẹp","Người có ba số 4 trở lên thường bị cột chặt vào vật chất, bị lôi kéo bởi các giá trị vật chất. Họ thường lao vào kiếm tiền, làm việc cực nhọc, áp lực liên tục và trở thành tôi tớ của đồng tiền."]},{"key":5,"title":["Nếu có được một con số 5 trong biểu đồ ngày sinh, người ta sẽ có cơ hội tốt nhất đạt được một cá tính cân bằng. Đây cũng là con số duy nhất đảm bảo tất cả các con số nằm ở bốn góc biểu đồ (1,3,7,9) không bị trống ba bề, để có nguy cơ rơi vào thế ‘Con số đơn độc’ (Isolated numbers). Đặc biệt, người có con số này thường kiểm soát cảm xúc rất tốt, bởi nó đảm bảo sự nhạy cảm với cuộc sống ở con người này phát triển vừa phải để làm một nguồn hướng dẫn thiên về trực giác đáng tin cậy. Điều này cho phép họ xuất sắc hơn trong việc chọn lựa những điều nên làm, hơn là bốc đồng phản ứng lại các tình huống một cách thiếu suy nghĩ. Như một rào bảo vệ đầy giá trị với sự nhạy bén, một con số 5 kích hoạt mạnh mẽ tính can trường và lòng trắc ẩn, qua đó tạo ra một cá tính đầy mạnh mẽ. Nó cũng tạo ra sức mạnh của lòng thương và tự do để thúc đẩy mạnh thêm giá trị của tất cả những hình thức biểu hiện khác. Số 5 duy nhất có mặt trong biểu đồ cũng hỗ trợ cá nhân chủ nó hiểu thấu những cảm giác của chính họ, và vì thế phát triển được một sự trân trọng sâu sắc với cảm nhận của những người khác.","Người có hai con 5 trong biểu đồ ngày sinh thường được nhận dạng bởi tính căng thẳng, thể hiện ra bên ngoài bằng đôi mắt nhìn trừng và đôi lông mày hay nhíu lại. Quyết tâm được sắt lại tạo cho họ một vẻ rất tự tin, mà đôi khi mạnh hơn thực tế. Khi họ trưởng thành, tính tự tin này nếu không có ý thức kiểm soát dễ bị phát triển thành tính tự tôn, và họ cảm thấy khó chịu được những vấn đề về tình cảm/cảm xúc, về nghề nghiệp hay gia đình... vốn thỉnh thoảng vẫn xuất hiện trong cuộc đời họ. Họ cần để ý không bị làm trầm trọng hóa các vấn đề này và giữ cho mọi việc nhẹ nhàng như nó vốn dĩ như vậy. Đôi khi mãnh lực và sự nhiệt tình ở những người có hai số 5 trở nên không thể chịu nổi, và bùng ra những sự hiểu lầm hay nổi giận nơi những người thân gần với họ. Đôi khi do quá nghiêm túc thể hiện qua thái độ hay lời nói, họ tạo ra những ‘cục rối’ cảm xúc trong môi trường họ sống rồi từ đó bị phát triển các vấn đề sức khỏe có liên quan đến khu vực bụng. Họ thường xuyên chịu chứng khó tiêu. Những người hai số 5 cần chú trọng quản lý cảm xúc, nếu không họ dễ sa đà vào các chất hay thói quen gây nghiện để giải tỏa bớt những năng lượng cảm xúc bị dồn nén của mình.","Người có ba số 5 trở lên thường mạnh mẽ kiên định, nhưng đôi lúc tự tin thái quá, dễ có xu hướng nghiêm trọng hóa vấn đề. Họ cần học cách bày tỏ, giải tỏa cảm xúc."]},{"key":6,"title":["Là một con số chỉ óc sáng tạo, diễn đạt phổ biến nhất của những người có một con 6 là tình yêu sâu đậm với gia đình, hoặc mái ấm nhà mình. Tuy vậy, khi diễn đạt thành hành động hay thái độ cụ thể, nó có thể diễn dịch thành những điều nghệ thuật hơn, như sáng tác, biểu diễn, vẽ tranh, làm gốm... về những đề tài gia đình. Người có một số 6 rất tập trung và có trách nhiệm với gia đình. Tuy vậy, khi trưởng thành hơn, những người này cảm thấy chỉ trách nhiệm với gia đình thôi chưa đủ. Và họ sẽ tỏa sức mạnh của họ ra thêm nhiều lĩnh vực nữa để diễn đạt cho thỏa tính sáng tạo của mình, hoặc họ sẽ tiếp tục thắc mắc vì sao họ mãi vẫn chưa nhận được điều có thể thỏa những gì họ khát khao. Khi họ phát hiện ra các thể loại nghệ thuật phù hợp với họ và đặc biệt sức mạnh sáng tạo của âm nhạc, cuộc sống của họ sẽ thăng hoa một cách đáng kinh ngạc.","Tùy thuộc vào con số chủ đạo và nhiều yếu tố khác nữa trong ngày sinh của mỗi người, mà người có hai con 6 trong biểu đồ ngày sinh chịu một trong hai khả năng: hoặc là một người tính khá ‘bướng’, hoặc là một người chịu khuyết tật hoặc bệnh tật về một mặt nào đó. Và cũng tùy thuộc vào các yếu tố môi trường sống, đặc biệt là ảnh hưởng của cha mẹ lên con cái trong giai đoạn đầu đời, mà mỗi cá nhân của trường hợp này có thể vượt qua điều này thế nào. Với người có ý thức kém hơn, những khía cạnh tiêu cực thể hiện khá rõ nét, như sự lo lắng, bồn chồn, stress, dễ nóng giận, đặc biệt là ở nhà hay ở chỗ làm. Những người thân những người thương xung quanh họ cảm nhận sự tiêu cực này rõ nhất, và bởi vì tất cả đều liên quan với nhau, điều này tạo ra môi trường khá căng thẳng thần kinh, thậm chí bệnh tật. Để hóa giải điều này, tốt nhất là hướng mối quan tâm của họ vượt ra ngoài những ngưỡng giới hạn trong gia đình để vươn tới những lĩnh vực sáng tạo đa dạng hơn, bất kể là dạng gì, đều tốt cả. Nghề nghiệp của những người có hai số 6 trong ngày sinh nên theo những ngành chú trọng tính sáng tạo, được gợi cảm hứng bởi sự tự tin và thấu hiểu sâu về một vấn đề. Họ cần được hướng dẫn nhẹ nhàng trong mọi trường hợp, không bao giờ được hối thúc hay đe dọa họ. Với họ, lúc nào cũng cần những lời ăn tiếng nói nhẹ nhàng, đầy yêu thương và thấu hiểu, xoa dịu nhẹ hệ thống dây thần kinh rất nhạy của họ. Những người này cần thư giãn nghỉ ngơi nhiều nhất, bởi họ tiêu hao rất nhiều năng lượng thần kinh vào những hoạt động sáng tạo hay hoạt động thường ngày. Họ cần tập tĩnh tâm, hoặc thiền càng tốt, hàng ngày trước khi đi ngủ, để đảm bảo giấc ngủ của họ thực sự được thư giãn. Họ cũng cần những giấc ngủ trưa mỗi khi có thể, điều này thì dĩ nhiên tốt cho mọi người rồi, nhưng với những người có hai số 6, điều này là đặc biệt cần thiết.","Người có ba số 6 trở lên thường căng thẳng trong chuyện gia đình, nhất là đối với phụ nữ. Họ dễ bị kiểm soát người thân quá mức, khiến mọi người xung quanh cảm thấy khó chịu."]},{"key":7,"title":["Nếu có một con số 7 trong biểu đồ ngày sinh, những sự hy sinh trong một trong ba lĩnh vực sau đây: sức khỏe, tiền tài hay tình yêu sẽ hoặc đã xuất hiện trong cuộc đời bạn như một phần thiết yếu trong tiến trình học hỏi của vòng đời này. Những đau thương, hy sinh này là một phần để tâm hồn bạn chịu ‘hé mở’, kiểu như con trai ngọc phải chịu cái đau cắt thịt của hạt cát rạch vào trong thịt mới tiết ra được chất ngọc. Nhưng thông thường, những người chịu tổn thất, hy sinh này hay rên xiết, đau khổ mà không nhận ra bản chất của bài học dạng này chính là “buông bỏ để đạt được”. Về mặt tiền tài vật chất, khi chúng ta chấp nhận buông bỏ những giá trị sở hữu, chúng ta học được sự khác biệt giữa cảm giác ‘thích có thì hay’ và ‘bắt buộc phải có’. Về mặt sức khỏe hay tình yêu, bất kỳ sự mất mát nào về mặt này đều để trui rèn hay thanh lọc thái độ hay thói quen sống của ta. Nếu chúng ta ý thức rằng đàng nào chúng ta cũng cần phải hoàn thành mục đích sống của ta khi đến với trái đất này, ở vòng đời này, chúng ta phải đảm bảo rằng sức khỏe của chúng ta được trưởng dưỡng lành mạnh. Trong tình yêu, ta thường hay nhầm lẫn sự thèm muốn (có được tình yêu) với một dạng tình yêu vô điều kiện. Hãy nhớ rằng, nếu chúng ta thực hành yêu vô điều kiện, ta sẽ chẳng bao giờ mất mát gì cả, bởi vốn dĩ ta đâu có đặt ra ‘cầu mong’ gì đâu mà mất! Tuy vậy, thực tế là nhiều người trong chúng ta hiếm khi duy trì được tình yêu dài lâu, bởi chúng ta cứ gắn kèm chữ ‘tình yêu’ với biết bao là đòi hỏi, kỳ vọng về cảm xúc cần phải được đáp lại.","Hai con số 7 ngầm chỉ mức độ ‘bài học’ trong cuộc đời của một người sẽ được ‘tô đậm’ lên thêm gấp hai lần. Những người có hai số 7 trong biểu đồ ngày sinh sẽ thấy những bài học tổn thất, thương đau trong cuộc đời họ xuất hiện ở hai trong số ba khía cạnh cơ bản của đời sống: sức khỏe, tình cảm, hay tiền tài. Những loại trải nghiệm thương đau này nhằm để nhắc nhở người có hai số 7 để ý cố mà thấu hiểu những triết lý sống sâu sắc ở đời. Những tổn thất đau thương này làm cho họ rốt cục phải quan tâm đến các vấn đề tâm linh (vì sao ta lại chịu như vậy, vì sao ta lại ra nông nỗi này...), rồi từ sự quan tâm và tìm hiểu các vấn đề tâm linh cao hơn những gì mắt thấy tai nghe thông thường, họ sẽ đạt được những tầng thấu cảm nhất định, từ đó đạt được những năng lực chữa lành, định hướng và lòng từ ái, cho cả bản thân và cho người khác. Nếu họ không nhận ra những giá trị sâu xa này, người có hai số 7 sẽ dễ rơi vào trạng thái sống tiêu cực, và không ngừng than vãn về những mất mát đau thương xảy đến trong cuộc đời họ, trách móc mọi người về các vấn đề của họ, và lên án cuộc đời sao bất công với họ. Họ sẽ trở thành những người cộc cằn, xấu tính mà hầu như ai cũng muốn né.","Người có ba số 7 trở lên sẽ gặp phải sự mất mát ở 3 khía cạnh: sức khỏe, tình yêu, sự nghiệp. Nếu họ vượt qua được bài học trên thì họ sẽ có cảm nhận sâu sắc về cuộc đời, sở hữu trí tuệ thông thái, trở thành bậc thầy chia sẻ."]},{"key":8,"title":["Khi có một con 8 trong biểu đồ ngày sinh, người tích cực sẽ có tính tỉ mỉ, hệ thống đâu ra đó. Nếu không được tích cực, người có một số 8 sẽ tỏ ra hờ hững, hay không ổn định. Tính ngăn nắp, tỉ mỉ, chú ý vào chi tiết và quan tâm đến hiệu quả của từng chi tiết nhỏlà một bản chất tự nhiên của những người này. Đây là những khía cạnh của trí tuệ thực tiễn được nằm dưới sự phát triển tính độc lập của họ. Tuy nhiên, nếu những người này chọn hướng tiêu cực, họ trở nên lắt lay cảm xúc, dễ bực bội và bức xúc, hệ quả đưa đến nhiều thay đổi trong công việc, đổi nhà, thay đổi cả những mối quan hệ.","Độ sắc bén của năng lực thể hiện của hai con số 8 trên biểu đồ ngày sinh có thể cực kỳ có lợi hoặc cực kỳ chênh chao, tùy thuộc vào mỗi cá nhân sống tích cực đến độ nào. Nếu nói về tính tỉ mỉ, đi vào từng chi tiết, những người này có độ xuất sắc khó ai bì kịp. Nhưng những người này cũng ý thức rằng độ tinh nhạy mà họ có được trong lĩnh vực này không được làm họ trở nên độc tài từ sự quá tự tin. Điều này sẽ dẫn đến mâu thuẫn cảm xúc nội tại, gây ra sự bất ổn định tinh thần và cực kỳ bứt rứt. Nhu cầu tìm đến bản chất sự thật đến cùng, cũng như khát khao đạt được trí tuệ cũng có thể kích thích sự bứt rứt tương tự, nhưng theo một hướng tích cực. Nó sẽ làm cho những người này rất muốn đi đó đi đây, mà qua đó, họ sẽ lượm lặt được nhiều kinh nghiệm và kiến thức, và trí tuệ. Nếu lúc trẻ họ không đi nhiều, sự ẩn ức từ trong lòng có thể phát triển, trở thành sự bức xúc ngày càng trầm trọng. Điều này có thể gây ra một cảm giác bị trói buộc, và chỉ khi nào họ có cơ hội đi đó đây, họ mới có thể tìm lại được chút cảm giác an yên trong tâm trí.","Ở người có ba số 8 trở lên, cảm giác bồn chồn khó chịu đưa đến khía cạnh tiêu cực thường gặp hơn đối với khía cạnh tích cực. Họ hay cảm thấy cuộc sống thiếu định hướng và đáng tức giận, và trở thành nạn nhân của sự bi quan cùng cực. Vì vậy những người này cần rất nhiều tình yêu thương và sự hướng dẫn để khuyến khích họ tập có cái nhìn rộng mở và lạc quan hơn về cuộc đời. Suy cho cùng, cái mà họ cần hiểu thấu là cuộc sống này vẫn tiếp diễn, cho dù họ tích cực hay tiêu cực, có thưởng thức được nó hay không. Tất cả điều họ cần làm là thay đổi thái độ và, thay vì ngồi than thở về cái ‘bể khổ’ Với người có ba số 8 trở lên biết hướng về hướng tích cực, mỗi ngày họ sống là một ngày ngập tràn năng lượng tích cực, cảm giác độc lập và lĩnh hội được nhiều điều mở mang trí tuệ thật tuyệt vời. Ngay cả mặc dù họ luôn thích di chuyển, rất năng động, họ vẫn có một sự bình ổn và niềm vui chan chứa từ bên trong, khiến cho họ có rất nhiều bạn bè."]},{"key":9,"title":["Nói ngay cho dễ nhớ: số 9 mang ba giá trị lớn: tham vọng/hoài bão, trách nhiệm, và lý tưởng. Bởi ai sinh ra cũng có ba giá trị này ‘giắt túi’, nên sức mạnh này từng là nền tảng cho sự phát triển của xã hội thế kỷ trước, thúc đẩy chúng ta tìm hiểu cuộc sống rõ hơn và cũng kiểm soát, chế ngự nó nhiều hơn. Theo tác giả David A. Phillips, đừng cho rằng ôm ba giá trị lớn này, chúng ta đã thành công. Mặc dù chúng ta có vẻ đã hiểu nhiều hơn về môi trường sống và những gì xung quanh con người, hơn hẳn từ chặng đầu thế kỷ 20 trở về trước, thế nhưng cái giá đi kèm cũng thật quá đắt: chúng ta đã làm môi trường xuống cấp, bệnh tật nhiều hơn, nạn đói nghèo cũng diễn ra nhiều hơn. Vậy điều ‘sai sai’ nằm ở đâu? Phải chăng chúng ta đã đặt quá nhiều trọng tâm vào tham vọng và không chú trọng đủ đến hai yếu tố còn lại: trách nhiệm và lý tưởng? Để phát huy sức mạnh của một con số 9 lành mạnh, hiệu quả nhất, chúng ta cần học cách cân bằng ba giá trị này, tạo thành thế hài hòa, như kiềng ba chân. Bất kỳ sự cố gắng đền bù quá mức nào cũng chỉ tổ làm lệch thế cân bằng này, dẫn đến những điều tệ hại khác mà thôi. Ở đây việc duy trì sự hài hòa cân bằng là tối quan trọng, như Pythagoras từng dạy.","Mức lý tưởng hóa cao độ và nhiệt tâm theo đuổi lý tưởng được tăng cao, đi kèm với những suy nghĩ cực kỳ nghiêm túc, đó là những khái niệm để mô tả những người có hai số 9 trong biểu đồ ngày sinh. Họ thường bày tỏ sự hoàn hảo lý tưởng đáng ghen tị, nhưng sau đó thường quá lý tưởng để trở thành thực tế. Họ cần cẩn thận giữ sự cân bằng giữa tính thực tế và lý tưởng. Nếu muốn tìm thấy hạnh phúc, an lạc trong cuộc sống, những người này cần tránh tối đa khuynh hướng hay phê bình người khác có khả năng yếu lý tưởng hơn mình, hoặc đã có thì ráng vượt qua. Tuy vậy những người này thường là những người có tư duy sâu sắc, làm việc với tất cả sự nhiệt tâm, và họ ước mong được hữu ích khi giúp người. Chỉ cần ráng nhớ diễn đạt ý của mình cho rõ ràng, và tránh lòng tốt mình bị coi như đương nhiên nhé.","Với ba số 9 trở lên trong biểu đồ ngày sinh, sức mạnh lý tưởng và tham vọng/hoài bão vượt trội khiến họ khó mà kiểm soát được, và đôi khi tạo ra sự mất cân bằng với những ai không nhận ra sức mạnh của họ. Vấn đề này cần được tránh bằng cách nhận dạng trẻ em có ba số 9 trở lên ngay từ các em còn bé, và dạy các em diễn đạt đồng đều trên cả ba trục: thể chất, tâm hồn và trí não, hơn là chỉ tập trung diễn đạt mọi cái trên trục Trí não. Thêm vào đó, ở những người này còn hay gặp thêm khuynh hướng này đây: khi họ sống tiêu cực, họ hay bị tình trạng ‘chuyện bé xé ra to’, dẫn đến nhiều trận bộc phát, mất kiểm soát cảm xúc, thậm chí có khi còn đưa tới tình trạng mất cân bằng trí não đáng nguy hại. Bài học cần thiết cho những người nhóm này là tập nhìn mọi việc một cách khách quan và chi tiết theo giá trị đúng của họ. Điều này sẽ giúp giải tỏa sự phán xét họ hay áp đặt lên mọi điều, và cho phép họ chấp nhận tách rời khỏi những hệ thống lý tưởng khá cứng chắc của họ"]}]';
                $arrData = json_decode($jsonStrength);
                foreach ($data['data']['drawStrengthChart'] as $item) {
                    $check = array_filter($arrData, function ($value) use ($item) {
                        return $value->key == $item[0];
                    });
                    $check = array_values($check)[0];
                    switch ($item[1]) {
                        case 1:
                            array_push($strengthTWO, $check->title[0]);
                            break;
                        case 2:
                            array_push($strengthTWO, $check->title[1]);
                            break;
                        case 3:
                            array_push($strengthTWO, $check->title[2]);
                            break;
                    }
                }
            @endphp
            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px; top: 0px">
                @foreach ($strengthTWO as $item)
                    {!! $item !!}
                @endforeach
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">41</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="53">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/ngay-sinh.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">BIỂU ĐỒ TỔNG HỢP NGÀY SINH, HỌ TÊN VÀ NGHỆ DANH</div>
            <div class="t m0 x51 h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0">{{ $name->{3} ?? null }}<span class="_ _24">
                </span>{{ $name->{6} ?? null }}<span class="_ _24"> </span>{{ $name->{9} ?? null }}<span
                    class="_ _22"> </span>{{ $summary->{3} ?? null }}<span class="_ _24">
                </span>{{ $summary->{6} ?? null }}
                <span class="_ _24"> </span>{{ $summary->{9} ?? null }}
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0">{{ $name->{2} ?? null }}<span class="_ _24">
                </span>{{ $name->{5} ?? null }}<span class="_ _24"> </span>{{ $name->{8} ?? null }}<span
                    class="_ _22"> </span>{{ $summary->{2} ?? null }}<span class="_ _24">
                </span>{{ $summary->{5} ?? null }}
                <span class="_ _24"> </span>{{ $summary->{8} ?? null }}
            </div>
            <div class="t m0 x51 h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0">{{ $name->{1} ?? null }}<span class="_ _24">
                </span>{{ $name->{4} ?? null }}<span class="_ _24"> </span>{{ $name->{7} ?? null }}<span
                    class="_ _22"> </span>{{ $summary->{1} ?? null }}<span class="_ _24">
                </span>{{ $summary->{4} ?? null }}
                <span class="_ _24"> </span>{{ $summary->{7} ?? null }}
            </div>

            @php
                $return = [];
                if (isset($summary->{1}) && isset($summary->{2}) && isset($summary->{3})) {
                    array_push($return, [
                        'title' => '- 1 TRỤC LẬP KẾ HOẠCH (1-2-3)',
                        'content' => 'Trục này cho thấy bạn là người có khả năng lập kế hoạch tốt và thường làm theo kế hoạch vạch ra. Bạn làm việc gì thường cũng có những bước định sẵn trong đầu rõ ràng.',
                    ]);
                } elseif (empty($summary->{1}) && empty($summary->{2}) && empty($summary->{3})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC LẬP KẾ HOẠCH (1-2-3) MÀ BẠN THIẾU',
                        'content' => 'Người thiếu cả ba số 1-2-3 trong biểu đồ ngày sinh có thể mang những đặc điểm tiêu cực như lộn xộn, rối loạn, thiếu tính tổ chức, thiếu tính kỉ luật. Công việc và cuộc sống dễ bị đảo lộn, bừa bãi hoặc bê bối. Điều này sẽ khiến họ có đạt được thành công trong cuộc sống.',
                    ]);
                }
                if (isset($summary->{4}) && isset($summary->{5}) && isset($summary->{6})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC Ý CHÍ (4-5-6)',
                        'content' => 'Đây là trục có rất ít người sở hữu, người sở hữu nó thường rất năng động, luôn thể hiện nguồn lực sống mạnh mẽ. Tuy nhiên những người này thường có xu hướng muốn áp chế người khác để khẳng định cái tôi và sức mạnh bản thân. Họ rất có bản lĩnh, có tinh thần vươn lên tự kỉ luật mình. Đây cũng là những người có tố chất của nhà lãnh đạo, thường gặp may mắn trong cuộc sống.',
                    ]);
                } elseif (empty($summary->{4}) && empty($summary->{5}) && empty($summary->{6})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC Ý CHÍ (4-5-6) MÀ BẠN THIẾU',
                        'content' => 'Thường bạn sẽ có cảm giác bực bội, thất vọng kéo dài khi bạn không làm được điều mà mình muốn hoặc người khác làm việc không đúng như ý của bạn. Lời khuyên là bạn hãy luyện tập để tăng thêm các số 4, 5 hoặc 6. Nếu tên của bạn cũng chứa những số này thì bạn dễ dàng đạt được hơn. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn.Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ.Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn.',
                    ]);
                }
                if (isset($summary->{7}) && isset($summary->{8}) && isset($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9)',
                        'content' => 'Bạn thường thụ động. Khi làm việc bạn thường dựa dẫm vào người khác nhiều hơn là tự mình làm. Lời khuyên cho bạn là hãy luyện tập để tăng các số 7, 8 hoặc 9 lên.Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạcSố 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                    ]);
                } elseif (empty($summary->{7}) && empty($summary->{8}) && empty($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9) MÀ BẠN THIẾU',
                        'content' => 'Trục này cho thấy bạn có tính hành động và chủ động cao, ít dựa dẫm vào người khác. Trong khi người khác còn đang nói hoặc nghĩ thì bạn lại muốn hành động luôn.',
                    ]);
                }
                if (isset($summary->{1}) && isset($summary->{4}) && isset($summary->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7)',
                        'content' => 'Trục này đại diện cho hoạt động của con người. Trục này quản lý lời nói, ngôn ngữ hình thể, động lực, óc tổ chức, tính kiên nhẫn, tính vật chất và sự lĩnh hội thông qua mất mát (học hỏi qua những lần vấp ngã).',
                    ]);
                } elseif (empty($summary->{1}) && empty($summary->{4}) && empty($summary->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường thiếu tính thực tế trong công việc và thường thiếu ngăn nắp, hay mơ mộng. Lời khuyên cho bạn là hãy luyện tập để tăng các số 1, 4 hoặc 7 lên. Số 1 bạn có thể tăng bằng cách tập viết nhật ký, học cách bộc lộ quan điểm, chính kiến, đặt mục tiêu rõ ràng. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn. Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm.',
                    ]);
                }
                if (isset($summary->{2}) && isset($summary->{5}) && isset($summary->{8})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TINH THẦN (2-5-8)',
                        'content' => 'Trục này đại diện cho những gì liên quan đến trái tim của con người. Trục này phụ trách toàn bộ cảm giác, bao gồm trực giác, tình yêu thương, sự tự do, các cảm xúc tích cực, các biểu đạt nghệ thuật, sự độc lập về tinh thần, và trí tuệ/sự thông thái.',
                    ]);
                } elseif (empty($summary->{2}) && empty($summary->{5}) && empty($summary->{8})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường nhạy cảm quá mức nên dễ bị tổn thương về mặt tâm lý. Lời khuyên cho bạn là hãy luyện tập để tăng các số 2, 5 hoặc 8 lên. Số 2 bạn có thể tăng bằng cách lắng nghe, cảm nhận suy nghĩ của người khác. Tập thiền hoặc tập yoga. Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạc.',
                    ]);
                }
                if (isset($summary->{3}) && isset($summary->{6}) && isset($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9)',
                        'content' => 'Trục này đại diện cho những gì liên quan đến đầu óc của con người. Trục này phụ trách trí nhớ, suy nghĩ, tư duy phân tích, lý trí, trí tưởng tượng, óc sáng tạo, tinh thần trách nhiệm, hoài bão/tham vọng và lý tưởng sống.',
                    ]);
                } elseif (empty($summary->{3}) && empty($summary->{6}) && empty($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường mau quên và gặp khó khăn trong việc học các kiến thức mới. Lời khuyên cho bạn là hãy luyện tập để tăng các số 3, 6 hoặc 9 lên. Số 3 bạn có thể tăng bằng cách tập kể chuyện cười và tham gia vào các hoạt động vui vẻ sôi nổi nhiều hơn. Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn. Số 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                    ]);
                }
                if (isset($summary->{1}) && isset($summary->{5}) && isset($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9)',
                        'content' => 'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                    ]);
                } elseif (empty($summary->{1}) && empty($summary->{5}) && empty($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9) MÀ BẠN THIẾU',
                        'content' => 'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                    ]);
                }
                if (isset($summary->{3}) && isset($summary->{5}) && isset($summary->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC NHẠY BÉN (3-5-7)',
                        'content' => 'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                    ]);
                } elseif (empty($summary->{3}) && empty($summary->{5}) && empty($summary->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC NHẠY BÉN (3-5-7) MÀ BẠN THIẾU',
                        'content' => 'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quyết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                    ]);
                }
            @endphp


            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                style="white-space: normal; width: 2000px; bottom: 700px">
                @foreach ($return as $item)
                    {!! $item['title'] !!}
                    <p>{!! $item['content'] !!}</p>
                @endforeach
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">52</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pfd" class="pf w0 h0" data-page-no="54">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-phai.png') }}">

            @php
                $arr = ['con số của sự độc lập, quyết đoán (biểu đồ của bạn còn có khả năng tạo được cặp số đẹp 11).', 'con số của sự nhẹ nhàng, hợp tác và cảm xúc (biểu đồ của bạn còn có khả năng tạo được cặp số đẹp 22).', 'con số của trí tuệ sáng tạo, vui vẻ và hoạt ngôn.', 'con số của sự cẩn thận và thực tế, kiên trì và chăm chỉ.', 'con số của tự do, khám phá và thay đổi linh hoạt.', 'con số của trí tuệ cảm xúc và quan tâm người khác.', 'con số của tri thức và khả năng tự học hỏi.', 'con số của khả năng nhạy bén tài chính và quyền lực.', 'con số của lý tưởng, sự cho đi và đức hy sinh.'];
                $missing = [];
                foreach (range(1, 9) as $item) {
                    if (empty($summary->{$item})) {
                        array_push($missing, $arr[$item - 1]);
                    }
                }
            @endphp


            <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
                @foreach ($missing as $item)
                    {!! $item !!}
                @endforeach
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">42</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
        </div>
    </div>

    @isset($data['isCouple'])
        <div id="pf7" class="pf w0 h0" data-page-no="53">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt=""
                    src="{{ asset('/' . $path . '/vochong.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0"></div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TƯƠNG HỢP VỢ CHỒNG</div>
                <div class="t m0 x5 hf ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px; top: 200px">
                    @switch($data['data']['coupleIndicator'])
                        @case(0)
                            Hai bạn cực kì hợp nhau và có thể sẽ có những bước tiến mới trong mối quan hệ này.
                        @break

                        @case(1)
                            Nếu bạn có một hoặc hai cặp số Thách thức xuất hiện trong So sánh Biểu đồ Thần số học thì cũng
                            không phải vấn đề to tát gì. Các bạn sẽ tìm ra được cách thỏa hiệp, bởi những điều Tích cực luôn
                            đánh bại những Tiêu cực trong mối quan hệ. Lưu ý: có một ngoại lệ nếu tuân theo quy tắc này. Nếu
                            người đó đang lạm dụng chất kích thích, thì bạn nên dừng lại! Cho dù So sánh Biểu đồ Thần số học
                            có tốt như thế nào, thì nó cũng sẽ bị bóp méo bởi các chất gây nghiện.
                        @break

                        @case(2)
                            Nếu bạn có một hoặc hai cặp số Thách thức xuất hiện trong So sánh Biểu đồ Thần số học thì cũng
                            không phải vấn đề to tát gì. Các bạn sẽ tìm ra được cách thỏa hiệp, bởi những điều Tích cực luôn
                            đánh bại những Tiêu cực trong mối quan hệ. Lưu ý: có một ngoại lệ nếu tuân theo quy tắc này. Nếu
                            người đó đang lạm dụng chất kích thích, thì bạn nên dừng lại! Cho dù So sánh Biểu đồ Thần số học
                            có tốt như thế nào, thì nó cũng sẽ bị bóp méo bởi các chất gây nghiện.
                        @break

                        @case(3)
                            Nếu bạn có ba cặp số Thách thức trong So sánh Biểu đồ Thần số học, mối quan hệ này sẽ rất dễ đứt
                            gánh giữa đường. Nếu bạn sẵn lòng cam kết và thấu hiểu xem cả hai khác biệt nhau ở điểm nào,và
                            tìm cách chấp nhận, thì mối quan hệ này có thể dịu đi nhiều phần.
                        @break

                        @default
                            Nếu có bốn hoặc nhiều hơn các cặp số Thách thức xuất hiện khi So sánh Biểu đồ Thần số học, bạn
                            thực sự phải tự hỏi bản thân, “Mối quan hệ này có đáng không?”. Trừ khi bạn là loài bò sát máu
                            lạnh sống trên đỉnh núi và không cần lo lắng về bất kì điều gì trên đời, bằng không thì mối quan
                            hệ đó sẽ rất hỗn độn. Việc các bạn thu hút lẫn nhau hoàn toàn có thể hiểu được như cách con ngài
                            lao vào ngọn lửa. Con số Thách thức hầu như luôn là chất xúc tác mà bạn không thể cưỡng lại. Tuy
                            nhiên, khi cuộc sống bạn trở nên khó khăn, người với bốn con số Thách thức kia sẽ đứng trơ mắt
                            nhìn và không hề giúp đỡ bạn. Tôi cũng từng gặp được một đôi vợ chồng có bốn hoặc nhiều con số
                            Thách thức trong biểu đồ và bởi cả hai đều đang sống ở phía Tích cực của Rung động, họ thành
                            công giữ cho mối quan hệ hiệu quả thông qua việc tôn trọng nhau. Tuy nhiên, điều này là rất hiếm
                            khi xảy ra. Nghiên cứu kỹ chương này để ghi nhớ các cặp số Hòa hợp Tự nhiên, Tương thích và
                            Thách thức. Sau đó, bạn sẽ có thể tự tin tìm thấy tình yêu mà mình mong muốn, hoặc khiến các mối
                            quan hệ bạn phong phú hơn.
                        @break
                    @endswitch
                </div>

                <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer')
                <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">53</div>
                <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
                </div>
            </div>
        </div>
    @endisset

    @isset($data['phones'])
        <div id="pf7" class="pf w0 h0" data-page-no="54">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt=""
                    src="{{ asset('/' . $path . '/vochong.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0"></div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TƯƠNG HỢP SỐ ĐIỆN THOẠI</div>
                <div class="t m0 x5 hf ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px; top: 100px">
                    @foreach ($data['data']['phoneIndicator']['data'] as $item)
                        {!! $item !!}
                    @endforeach
                </div>

                <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer')
                <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">54</div>
                <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
                </div>
            </div>
        </div>
    @endisset
