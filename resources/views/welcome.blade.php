<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="generator" content="pdf2htmlEX" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pdf.css') }}">
    <title>test</title>
</head>
<div id="sidebar">
    <div id="outline">
    </div>
</div>
<div id="page-container">
    @php
        $path = $data['data']['lifePathIndicator']['lifePathIndicator'];
        $path = explode('/', $path)[0];
        $name = new stdClass();
        $summary = new stdClass();
        foreach ($data['data']['drawNameAndSummaryChart']['drawNameChart'] as $value) {
            $strName = $value[1];
            $text = '';
            for ($index = 1; $index <= $strName; $index++) {
                $text .= $value[0];
            }
            $name->{$value[0]} = $text;
        }
        foreach ($data['data']['drawNameAndSummaryChart']['drawSummaryChart'] as $value) {
            $strName = $value[1];
            $text = '';
            for ($index = 1; $index <= $strName; $index++) {
                $text .= $value[0];
            }
            $summary->{$value[0]} = $text;
        }
    @endphp
    @include('pages.first')
    @include('pages.chiso')
    @include('pages.vanso')
    @include('pages.duongdoi')


    <div id="pf7" class="pf w0 h0" data-page-no="54">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/vochong.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TỔNG QUAN DỮ LIỆU BÁO CÁO</div>
            <div class="t m0 x5 hf ff2 fs9 fc2 sc0 ls0 ws0" style="left: 0; top: 70px">
                <img src="{{ asset('/' . $path . '/report.png') }}" alt="" width="2000px">
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 1070px">
                {{ $name->{3} ?? null }}<span class="_ _21"></span>{{ $name->{6} ?? null }}<span class="_ _21"> </span>{{ $name->{9} ?? null }}<span class="_ _27" style="width: 1310px;"> </span>{{ $data['data']['dobIndicator']['dobIndicator'] }}
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 1000px">
                {{ $name->{2} ?? null }}<span class="_ _21"></span>{{ $name->{5} ?? null }}<span class="_ _24"> </span>{{ $name->{8} ?? null }}<span class="_ _27" style="width: 1310px;"> </span><span style="top: -60px">{{ $data['data']['personalIndicator']['personalIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 930px">
                {{ $name->{1} ?? null }}<span class="_ _21"></span>{{ $name->{4} ?? null }}<span class="_ _24"> </span>{{ $name->{7} ?? null }}<span class="_ _27" style="width: 1340px;"> </span><span style="top: -135px">{{ $data['data']['attitudeIndicator']['attitudeIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 40px;bottom: 820px">
                {{ $summary->{3} ?? null }}<span class="_ _21"></span>{{ $summary->{6} ?? null }}<span class="_ _24"> </span>{{ $summary->{9} ?? null }}<span class="_ _27" style="width: 1250px;"> </span><span style="top: -135px">{{ $data['data']['soulIndicator']['soulIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 750px">
                {{ $summary->{2} ?? null }}<span class="_ _21"></span>{{ $summary->{5} ?? null }}<span class="_ _24"> </span>{{ $summary->{8} ?? null }}<span class="_ _27" style="width: 1270px;"> </span><span style="top: -200px">{{ implode(', ', $data['data']['passionIndicator']['passionIndicator']) }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 680px">
                {{ $summary->{1} ?? null }}<span class="_ _21"></span>{{ $summary->{4} ?? null }}<span class="_ _24"> </span>{{ $summary->{7} ?? null }}<span class="_ _27" style="width: 1335px;"> </span><span style="top: -275px">{{ $data['data']['thinkingIndicator']['thinkingIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 640px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -275px">{{ $data['data']['emotionalThinkingIndicator']['emotionalThinkingIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 600px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -260px">{{ $data['data']['intuitiveThinkingIndicator']['intuitiveThinkingIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 560px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -250px">{{ $data['data']['actionThinkingIndicator']['actionThinkingIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 450px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -250px">{{ implode(', ', $data['data']['repeatIndicator']['repeatIndicator']) }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 405px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -250px">{{ implode(', ', $data['data']['missIndicator']['missIndicator']) }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 350px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -250px">{{ $data['data']['linkSoulAndPersonalIndicator']['linkSoulAndPersonalIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 300px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -250px">{{ $data['data']['balanceIndicator']['balanceIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 250px">
                <span class="_ _27" style="width: 1600px;"> </span><span style="top: -100px">{{ $data['data']['lifePathIndicator']['lifePathIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 205px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -100px">{{ $data['data']['missionIndicator']['missionIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 150px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -120px">{{ $data['data']['linkLifePathAndMission']['linkLifePathAndMission'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 105px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -120px">{{ $data['data']['maturityIndicator']['maturityIndicator'] }}</span>
            </div>

            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 355px; left: 95px">3</div>
            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 355px; left: 205px">1</div>
            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 355px; left: 315px">3</div>
            <div class="t m0 h14 y167 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 400px; left: 170px">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstPeakIndicator'] }}</div>
            <div class="t m0 h14 y167 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 400px; left: 245px">{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondPeakIndicator'] }}</div>
            <div class="t m0 h14 y16a ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 440px; left: 205px">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdPeakIndicator'] }}</div>
            <div class="t m0 h14 y16d ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 487px; left: 205px">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthPeakIndicator'] }}</div>
            <div class="t m0 h14 y170 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 310px; left: 170px">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstChallengeIndicator'] }}<span class="_ _1b" style="width: 170px;"> </span>{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondChallengeIndicator'] }}</div>
            <div class="t m0 h14 y171 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 260px; left: 205px">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdChallengeIndicator'] }}</div>
            <div class="t m0 h14 y171 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 220px; left: 205px">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthChallengeIndicator'] }}</div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">55</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>
</div>
</body>

</html>
