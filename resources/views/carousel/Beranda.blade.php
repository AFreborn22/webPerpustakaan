@extends('layout.main')

@section('container')
    <br>
    <br>

    <!-- carousel -->
    <div class="carousel-brd">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                
                @foreach ($editCarousel as $carousel)
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="{{ asset('storage/' . $carousel->url_gambar) }}" class="d-block w-100" alt="slide1">
                    </div>
                @endforeach

                
            </div>
            <div class="tombol">
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>




    <article class="membaca">
        <div class="yuk">
            <h2>Yuk Mulai <span>Membaca</span> !</h2>
        </div>
        <div class="yuk-baca">
            <p>Tertarik dengan keajaiban kata-kata? Mari kita mulai petualangan <span>membaca</span> bersama!</p>
        </div>
        <button type="button" class="btn btn-primary">Ayo Mulai !</button>
        <div class="bacabuku">
            <style>
                svg#freepik_stories-library:not(.animated) .animable {
                    opacity: 0;
                }

                svg#freepik_stories-library.animated #freepik--shelf-2--inject-2 {
                    animation: 1.5s Infinite linear floating;
                    animation-delay: 0s;
                }

                svg#freepik_stories-library.animated #freepik--shelf-1--inject-2 {
                    animation: 1.5s Infinite linear floating;
                    animation-delay: 0s;
                }

                svg#freepik_stories-library.animated #freepik--character-2--inject-2 {
                    animation: 1.5s Infinite linear floating;
                    animation-delay: 0s;
                }

                svg#freepik_stories-library.animated #freepik--speech-bubble--inject-2 {
                    animation: 1.5s Infinite linear shake;
                    animation-delay: 0s;
                }

                svg#freepik_stories-library.animated #freepik--character-1--inject-2 {
                    animation: 1.5s Infinite linear floating;
                    animation-delay: 0s;
                }

                @keyframes floating {
                    0% {
                        opacity: 1;
                        transform: translateY(0px);
                    }

                    50% {
                        transform: translateY(-10px);
                    }

                    100% {
                        opacity: 1;
                        transform: translateY(0px);
                    }
                }

                @keyframes shake {

                    10%,
                    90% {
                        transform: translate3d(-1px, 0, 0);
                    }

                    20%,
                    80% {
                        transform: translate3d(2px, 0, 0);
                    }

                    30%,
                    50%,
                    70% {
                        transform: translate3d(-4px, 0, 0);
                    }

                    40%,
                    60% {
                        transform: translate3d(4px, 0, 0);
                    }
                }
            </style>
            <svg class="animated" id="freepik_stories-library" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"
                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                <g id="freepik--Floor--inject-2" class="animable" style="transform-origin: 250px 344.19px;">
                    <ellipse id="freepik--floor--inject-2" cx="250" cy="344.19" rx="243.71" ry="135.5"
                        style="fill: rgb(245, 245, 245); transform-origin: 250px 344.19px;" class="animable"></ellipse>
                </g>
                <g id="freepik--Shadows--inject-2" class="animable" style="transform-origin: 250.34px 352.902px;">
                    <path id="freepik--Shadow--inject-2"
                        d="M445.19,350.68,341.87,291.05a1.32,1.32,0,0,1,0-2.5l36.64-21.13a4.79,4.79,0,0,1,4.33,0l103.31,59.64a1.32,1.32,0,0,1,0,2.5l-36.63,21.12A4.79,4.79,0,0,1,445.19,350.68Z"
                        style="fill: rgb(224, 224, 224); transform-origin: 414.01px 309.05px;" class="animable"></path>
                    <path id="freepik--shadow--inject-2"
                        d="M55.49,350.09l103.32-59.64a1.31,1.31,0,0,0,0-2.49l-36.64-21.13a4.79,4.79,0,0,0-4.33,0L14.53,326.46a1.32,1.32,0,0,0,0,2.5l36.63,21.13A4.79,4.79,0,0,0,55.49,350.09Z"
                        style="fill: rgb(224, 224, 224); transform-origin: 86.6733px 308.46px;" class="animable"></path>
                    <path id="freepik--shadow--inject-2"
                        d="M189.23,443.66,233,418.37l54.4,31.31,97.48-56.29L295.55,341.8l39.82-23c7.17-4.14,7.17-10.86,0-15L312.6,290.67c-7.17-4.14-18.81-4.14-26,0l-39.82,23-32.49-18.77-97.49,56.29,67.54,39-43.88,25.33c-7.17,4.14-7.17,10.86,0,15l22.76,13.14C170.42,447.8,182.05,447.8,189.23,443.66Z"
                        style="fill: rgb(224, 224, 224); transform-origin: 250.84px 368.622px;" class="animable"></path>
                    <path id="freepik--shadow--inject-2"
                        d="M189.6,260.29c9.62,5.56,9.62,14.56,0,20.12s-25.22,5.55-34.84,0-9.62-14.56,0-20.12S180,254.74,189.6,260.29Z"
                        style="fill: rgb(224, 224, 224); transform-origin: 172.18px 270.35px;" class="animable"></path>
                </g>
                <g id="freepik--Plant--inject-2" class="animable" style="transform-origin: 174px 213.641px;">
                    <g id="freepik--plant--inject-2" class="animable" style="transform-origin: 174px 213.641px;">
                        <g id="freepik--Pot--inject-2" class="animable" style="transform-origin: 174px 213.641px;">
                            <g id="freepik--pot--inject-2" class="animable" style="transform-origin: 172.17px 248.366px;">
                                <path
                                    d="M186.62,272.35c7.72-8,12.25-40.4,4.72-46.72H153c-7.53,6.32-3,38.74,4.72,46.71l.21.22.27.26c.22.21.45.42.7.63l.18.14c.19.15.38.31.58.45a8.41,8.41,0,0,0,1,.64c6.35,3.71,16.65,3.71,23,0h0a10.14,10.14,0,0,0,1-.65c.19-.13.36-.27.54-.41l.23-.18c.24-.2.46-.4.67-.61l.31-.3Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 172.17px 251.546px;"
                                    id="elizwc6azo8cn" class="animable"></path>
                                <path
                                    d="M156.35,223.09c-8.74,5.1-8.74,13.38,0,18.49s22.92,5.1,31.66,0,8.75-13.39,0-18.49S165.09,218,156.35,223.09Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 172.182px 232.339px;"
                                    id="elb2fe6hvnc6c" class="animable"></path>
                                <path
                                    d="M160.56,225.54c-6.43,3.75-6.42,9.83,0,13.58s16.83,3.75,23.25,0,6.42-9.83,0-13.58S167,221.8,160.56,225.54Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 172.183px 232.332px;"
                                    id="elkl8ecq402r" class="animable"></path>
                                <path
                                    d="M183.81,232c-6.42-3.75-16.83-3.75-23.25,0a10.64,10.64,0,0,0-3.85,3.56,10.65,10.65,0,0,0,3.85,3.57c6.42,3.75,16.83,3.75,23.25,0a10.7,10.7,0,0,0,3.84-3.57A10.68,10.68,0,0,0,183.81,232Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 172.18px 235.565px;"
                                    id="el83gyfi1fsdv" class="animable"></path>
                            </g>
                            <g id="freepik--Plants--inject-2" class="animable"
                                style="transform-origin: 174px 194.135px;">
                                <path
                                    d="M155,165.83l14.55,11.53-14.07-6.49a38.86,38.86,0,0,0,2.45,13.33,86.6,86.6,0,0,1,11,7.76l-10.79-4.26s-.74,7.11,2.22,18c.78,2.84,4,8.26,6,12.32a48.5,48.5,0,0,0,3.13,5.41l.22.32q3.7-2.12,7.69-4.1c1.73-3.65,4-12.65,4.81-20,3.1-28.23-18.24-44.41-35.41-49.83A51,51,0,0,1,155,165.83Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 164.656px 186.785px;"
                                    id="el0fqwjt5ygi2t" class="animable"></path>
                                <path
                                    d="M167.16,167c3,3,4.7,6.92,6,10.84a57.43,57.43,0,0,1,2.58,12.22,52.91,52.91,0,0,1-3.08,24.51h0a.4.4,0,0,0,.23.53.41.41,0,0,0,.53-.23h0A53.65,53.65,0,0,0,176.19,190a57.55,57.55,0,0,0-2.8-12.23C172,173.87,170.18,170,167.16,167Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 171.882px 191.064px;"
                                    id="el4ybmvopzvl" class="animable"></path>
                                <path
                                    d="M218,180.63l0,0A221.2,221.2,0,0,0,202.74,202L188,204.39l10.89,1.9L193,215.55l-14.53,3,11.35,1.85s-3.15,11.07-11.27,15.68c-4.49,2.55-6.68,2.94-8,1.66-.94-.89-1.16-6.2-2-10.94s-.84-12.45,3.63-21.74a28.81,28.81,0,0,1,4.65-6.84C187.62,186.25,207.93,180.49,218,180.63Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 193.059px 209.539px;"
                                    id="elh4sxo442l5l" class="animable"></path>
                                <path
                                    d="M202.52,185.46A60.22,60.22,0,0,0,182,199.64a40.33,40.33,0,0,0-7,10.44,38.1,38.1,0,0,0-3.21,12.13s0,0,0,0a.07.07,0,0,0,.05,0,49.1,49.1,0,0,1,3.87-11.79,44.76,44.76,0,0,1,6.78-10.35,61.15,61.15,0,0,1,20.07-14.54,0,0,0,0,0,0-.06S202.54,185.45,202.52,185.46Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 187.175px 203.836px;"
                                    id="el3t3zo4t5a1m" class="animable"></path>
                                <path
                                    d="M130,186.73h0a29.06,29.06,0,0,1,3.71.17,59.46,59.46,0,0,1,14.21,3.45c1.7.64,3.4,1.35,5.07,2.15.84.4,1.67.82,2.49,1.27A41,41,0,0,1,166.38,202a25.61,25.61,0,0,1,3.75,5.26c.13.25.28.49.4.74h0c.32.65.6,1.29.87,1.92a35.49,35.49,0,0,1,3.21,17.48c-.15,4.24-1.6,9.08-2.42,9.88a2,2,0,0,1-.37.27c-1.21.77-3.13.32-6.72-1.69-7.19-4-10-14.21-10-14.21l10-1.7-12.84-2.56L147,209.25l9.6-1.74-13-2A192.88,192.88,0,0,0,130,186.74Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 152.35px 212.315px;"
                                    id="elz2lxww87hz" class="animable"></path>
                                <path
                                    d="M133.73,186.9a59.46,59.46,0,0,1,14.21,3.45c1.7.64,3.4,1.35,5.07,2.15.84.4,1.67.82,2.49,1.27A41,41,0,0,1,166.38,202a25.61,25.61,0,0,1,3.75,5.26c.13.25.28.49.4.74h0c.32.65.6,1.29.87,1.92a35.49,35.49,0,0,1,3.21,17.48c-.15,4.24-1.6,9.08-2.42,9.88a2,2,0,0,1-.37.27,2.08,2.08,0,0,1-.79.29c.89-6.57-2.34-23.22-7.24-30.07-5.08-7.13-17.16-17.46-33.75-21h0A28.45,28.45,0,0,1,133.73,186.9Z"
                                    style="fill: rgb(230, 230, 230); transform-origin: 152.37px 212.299px;"
                                    id="elgz3d691aa68" class="animable"></path>
                                <path
                                    d="M171.07,237.84a56.61,56.61,0,0,0-.94-14.52,46.8,46.8,0,0,0-4.82-13.78,40.89,40.89,0,0,0-9.75-10.89,54.93,54.93,0,0,0-12.52-7.5s0,0,0,0,0,0,0,0a71,71,0,0,1,12,8.06,52.32,52.32,0,0,1,5.29,4.92,31.66,31.66,0,0,1,4.41,5.66,46.67,46.67,0,0,1,5,13.53A56.45,56.45,0,0,1,171,237.84a0,0,0,0,0,.08,0Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 157.113px 214.495px;"
                                    id="elr7fa3pjxv1q" class="animable"></path>
                            </g>
                        </g>
                    </g>
                </g>
                <g id="freepik--shelf-2--inject-2" class="animable" style="transform-origin: 414.06px 196.075px;">
                    <g id="freepik--Bookcase--inject-2" class="animable" style="transform-origin: 414.06px 196.075px;">
                        <polygon
                            points="347.53 286.75 381.2 267.31 480.59 324.7 480.59 327.47 446.92 346.91 347.53 289.53 347.53 286.75"
                            style="fill: rgb(235, 235, 235); transform-origin: 414.06px 307.11px;" id="el94j1m4uo27i"
                            class="animable"></polygon>
                        <polygon points="446.92 344.13 347.53 286.75 381.2 267.31 480.59 324.7 446.92 344.13"
                            style="fill: rgb(245, 245, 245); transform-origin: 414.06px 305.72px;" id="el8un6bixfpa"
                            class="animable"></polygon>
                        <polygon points="446.92 344.13 446.92 346.91 480.59 327.47 480.59 324.7 446.92 344.13"
                            style="fill: rgb(224, 224, 224); transform-origin: 463.755px 335.805px;" id="elx4flbw03ppj"
                            class="animable"></polygon>
                        <polygon
                            points="347.53 67.45 381.2 48.01 383.6 49.4 383.6 268.7 349.94 288.14 347.53 286.75 347.53 67.45"
                            style="fill: rgb(235, 235, 235); transform-origin: 365.565px 168.075px;" id="elooeihzb0cl"
                            class="animable"></polygon>
                        <polygon points="383.6 268.7 349.94 288.14 349.94 68.84 383.6 49.4 383.6 268.7"
                            style="fill: rgb(224, 224, 224); transform-origin: 366.77px 168.77px;" id="elu3w29nziln"
                            class="animable"></polygon>
                        <polygon points="374.77 233.05 355.48 244.2 355.48 287.4 374.77 276.26 374.77 233.05"
                            style="fill: rgb(224, 224, 224); transform-origin: 365.125px 260.225px;" id="el9o7o8on6jz"
                            class="animable"></polygon>
                        <path
                            d="M356.1,244.81l18.68-10.72a7.85,7.85,0,0,0,4.27,2.34L360.53,247.1A18.61,18.61,0,0,1,356.1,244.81Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 367.575px 240.595px;" id="el2d6t83onoe7"
                            class="animable"></path>
                        <path
                            d="M362.32,247a4,4,0,0,1-3.59,0l-3.14-1.81a1.09,1.09,0,0,1,0-2.06L374,232.61l.78.44-18.11,10.46a.65.65,0,0,0,0,1.23l2.93,1.66a2.39,2.39,0,0,0,2.15,0L379.85,236l.88.5Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 367.793px 240.018px;" id="elaqzmaj32hbu"
                            class="animable"></path>
                        <path
                            d="M380.73,236.47v43.21l-18.41,10.56a4,4,0,0,1-3.59,0l-3.14-1.81a1.23,1.23,0,0,1-.74-1V244.2a1.25,1.25,0,0,0,.74,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 367.79px 263.568px;" id="elw0vhjeeswsh"
                            class="animable"></path>
                        <path
                            d="M360.53,247.46a3.77,3.77,0,0,1-1.8-.42l-3.14-1.81a1.25,1.25,0,0,1-.74-1v43.2a1.23,1.23,0,0,0,.74,1l3.14,1.81a3.77,3.77,0,0,0,1.8.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 357.69px 267.445px;" id="el0w9z42bcghd"
                            class="animable"></path>
                        <polygon points="382.67 237.58 363.37 248.73 363.37 291.94 382.67 280.79 382.67 237.58"
                            style="fill: rgb(235, 235, 235); transform-origin: 373.02px 264.76px;" id="elnsk9x80p1ps"
                            class="animable"></polygon>
                        <path
                            d="M364,249.34l18.68-10.72a7.89,7.89,0,0,0,4.27,2.34l-18.52,10.67A18.61,18.61,0,0,1,364,249.34Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 375.475px 245.125px;" id="elujnbog1wzmb"
                            class="animable"></path>
                        <path
                            d="M370.21,251.57a4,4,0,0,1-3.58,0l-3.15-1.81a1.09,1.09,0,0,1,0-2.06l18.41-10.56.78.44L364.56,248a.65.65,0,0,0,0,1.23l2.93,1.66a2.39,2.39,0,0,0,2.15,0l18.1-10.43.88.5Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 375.683px 244.566px;" id="el6ibszwpltgx"
                            class="animable"></path>
                        <path
                            d="M388.62,241v43.21l-18.41,10.56a4,4,0,0,1-3.58,0L363.48,293a1.25,1.25,0,0,1-.74-1v-43.2a1.26,1.26,0,0,0,.74,1l3.15,1.81a4,4,0,0,0,3.58,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 375.68px 268.096px;" id="el57838j2jgpv"
                            class="animable"></path>
                        <path
                            d="M368.42,252a3.7,3.7,0,0,1-1.79-.42l-3.15-1.81a1.26,1.26,0,0,1-.74-1v43.2a1.25,1.25,0,0,0,.74,1l3.15,1.81a3.7,3.7,0,0,0,1.79.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 365.58px 271.99px;" id="elxvpzp4fbvep"
                            class="animable"></path>
                        <polygon points="391.11 249.18 371.81 260.32 371.81 297.04 391.11 285.89 391.11 249.18"
                            style="fill: rgb(224, 224, 224); transform-origin: 381.46px 273.11px;" id="elro1hjz5o31"
                            class="animable"></polygon>
                        <path
                            d="M372.43,260.93l18.68-10.72a7.79,7.79,0,0,0,4.27,2.34l-18.52,10.67A18.61,18.61,0,0,1,372.43,260.93Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 383.905px 256.715px;" id="el51rrx37xdgn"
                            class="animable"></path>
                        <path
                            d="M378.65,263.16a4,4,0,0,1-3.59,0l-3.14-1.81a1.09,1.09,0,0,1,0-2.06l18.41-10.56.78.44L373,259.63a.65.65,0,0,0,0,1.23l2.93,1.66a2.39,2.39,0,0,0,2.15,0l18.1-10.43.88.5Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 384.123px 256.158px;" id="elcszcz7fwewm"
                            class="animable"></path>
                        <path
                            d="M397.06,252.59v36.72l-18.41,10.56a4,4,0,0,1-3.59,0l-3.14-1.81a1.25,1.25,0,0,1-.74-1V260.32a1.25,1.25,0,0,0,.74,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 384.12px 276.443px;" id="elqgk1qe7053d"
                            class="animable"></path>
                        <path
                            d="M376.86,263.59a3.77,3.77,0,0,1-1.8-.43l-3.14-1.81a1.25,1.25,0,0,1-.74-1V297a1.25,1.25,0,0,0,.74,1l3.14,1.81a3.77,3.77,0,0,0,1.8.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 374.02px 280.29px;" id="el24ca668e3u"
                            class="animable"></path>
                        <polygon points="399 253.71 379.7 264.85 379.7 301.57 399 290.42 399 253.71"
                            style="fill: rgb(235, 235, 235); transform-origin: 389.35px 277.64px;" id="elc94lsci6obu"
                            class="animable"></polygon>
                        <path
                            d="M380.32,265.46,399,254.74a7.83,7.83,0,0,0,4.27,2.34l-18.52,10.67A18.61,18.61,0,0,1,380.32,265.46Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 391.795px 261.245px;" id="eldfrry5h5h78"
                            class="animable"></path>
                        <path
                            d="M386.55,267.69a4,4,0,0,1-3.59,0l-3.15-1.81a1.09,1.09,0,0,1,0-2.06l18.41-10.56.78.45-18.11,10.45c-.59.34-.59.89,0,1.24l2.92,1.65a2.39,2.39,0,0,0,2.15,0l18.1-10.43.88.5Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 392.008px 260.688px;" id="el282z9jkjwyq"
                            class="animable"></path>
                        <path
                            d="M405,257.12v36.72l-18.4,10.56a4,4,0,0,1-3.59,0l-3.15-1.81a1.25,1.25,0,0,1-.74-1V264.85a1.25,1.25,0,0,0,.74,1l3.15,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 392.06px 280.973px;" id="elt4wmxvoamdd"
                            class="animable"></path>
                        <path
                            d="M384.75,268.12a3.7,3.7,0,0,1-1.79-.43l-3.15-1.81a1.25,1.25,0,0,1-.74-1v36.71a1.25,1.25,0,0,0,.74,1L383,304.4a3.7,3.7,0,0,0,1.79.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 381.93px 284.85px;" id="elc2utyi52mo7"
                            class="animable"></path>
                        <polygon points="406.88 260.41 387.59 271.56 393.58 309.38 412.88 298.23 406.88 260.41"
                            style="fill: rgb(235, 235, 235); transform-origin: 400.235px 284.895px;" id="elis13zxfbemh"
                            class="animable"></polygon>
                        <path
                            d="M388.35,272.08,407,261.36a10.23,10.23,0,0,0,5,1.93L393.49,274A24.07,24.07,0,0,1,388.35,272.08Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 400.175px 267.68px;" id="elrjdzr8bmjao"
                            class="animable"></path>
                        <path
                            d="M395.42,273.82a5,5,0,0,1-3.89.17l-3.67-1.5c-1.16-.47-1.29-1.31-.3-1.88L406,260l.91.37-18.1,10.45c-.59.34-.51.85.18,1.13l3.41,1.38a3,3,0,0,0,2.34-.11l18.1-10.43,1,.42Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 400.368px 267.152px;" id="el606thtx3jb"
                            class="animable"></path>
                        <path
                            d="M413.84,263.25l6,37.82-18.41,10.57a5,5,0,0,1-3.9.17l-3.67-1.5c-.58-.23-.9-.56-1-.9l-6-37.83c.06.35.38.67,1,.91l3.67,1.5a5,5,0,0,0,3.89-.17Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 403.35px 287.688px;" id="elun3cuze41w"
                            class="animable"></path>
                        <path
                            d="M393.54,274.3a4.86,4.86,0,0,1-2-.31l-3.67-1.5c-.58-.24-.9-.56-1-.91l6,37.83c.05.34.37.67,1,.9l3.67,1.5a4.88,4.88,0,0,0,2,.31Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 393.205px 291.854px;" id="ellpjrp0eno19"
                            class="animable"></path>
                        <polygon points="420.65 259.82 401.35 270.96 401.35 314.17 420.65 303.02 420.65 259.82"
                            style="fill: rgb(224, 224, 224); transform-origin: 411px 286.995px;" id="el7epejlh01tq"
                            class="animable"></polygon>
                        <path
                            d="M402,271.57l18.68-10.71a7.88,7.88,0,0,0,4.27,2.33L406.4,273.86A18.85,18.85,0,0,1,402,271.57Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 413.475px 267.36px;" id="el2tyml48b51a"
                            class="animable"></path>
                        <path
                            d="M408.2,273.8a4,4,0,0,1-3.59,0L401.46,272a1.09,1.09,0,0,1,0-2.06l18.41-10.56.78.45-18.1,10.45a.65.65,0,0,0,0,1.24l2.92,1.65a2.41,2.41,0,0,0,2.16,0l18.09-10.43.88.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 413.663px 266.803px;" id="ely6wy891x01i"
                            class="animable"></path>
                        <path
                            d="M426.6,263.23v43.21L408.2,317a4,4,0,0,1-3.59,0l-3.15-1.8a1.27,1.27,0,0,1-.74-1V271a1.25,1.25,0,0,0,.74,1l3.15,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 413.66px 290.328px;" id="el3ngachlr2t9"
                            class="animable"></path>
                        <path
                            d="M406.4,274.23a3.59,3.59,0,0,1-1.79-.43L401.46,272a1.25,1.25,0,0,1-.74-1v43.21a1.27,1.27,0,0,0,.74,1l3.15,1.8a3.59,3.59,0,0,0,1.79.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 403.56px 294.22px;" id="elzqlhgz184z8"
                            class="animable"></path>
                        <polygon points="428.54 264.35 409.25 275.5 409.25 318.7 428.54 307.55 428.54 264.35"
                            style="fill: rgb(235, 235, 235); transform-origin: 418.895px 291.525px;" id="eleuju2v1br1"
                            class="animable"></polygon>
                        <path
                            d="M409.87,276.1l18.67-10.71a7.92,7.92,0,0,0,4.27,2.33L414.3,278.39A18.61,18.61,0,0,1,409.87,276.1Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 421.34px 271.89px;" id="elr587ickkv8b"
                            class="animable"></path>
                        <path
                            d="M416.09,278.33a4,4,0,0,1-3.59,0l-3.14-1.81a1.09,1.09,0,0,1,0-2.06l18.4-10.56.78.45-18.1,10.45a.66.66,0,0,0,0,1.24l2.92,1.65a2.38,2.38,0,0,0,2.16,0l18.09-10.43.89.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 421.563px 271.328px;" id="elr5pff965va"
                            class="animable"></path>
                        <path
                            d="M434.5,267.76V311l-18.41,10.56a4,4,0,0,1-3.59,0l-3.14-1.8a1.26,1.26,0,0,1-.75-1V275.49a1.24,1.24,0,0,0,.75,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 421.555px 294.873px;" id="el5edyddwsr"
                            class="animable"></path>
                        <path
                            d="M414.3,278.76a3.66,3.66,0,0,1-1.8-.43l-3.14-1.81a1.24,1.24,0,0,1-.75-1V318.7a1.26,1.26,0,0,0,.75,1l3.14,1.8a3.66,3.66,0,0,0,1.8.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 411.455px 298.725px;" id="el0197telk8dyxn"
                            class="animable"></path>
                        <polygon points="445.13 280.15 425.83 291.3 425.83 328.01 445.13 316.87 445.13 280.15"
                            style="fill: rgb(224, 224, 224); transform-origin: 435.48px 304.08px;" id="eltkd9t49wi1"
                            class="animable"></polygon>
                        <path
                            d="M426.45,291.91l18.68-10.72a7.83,7.83,0,0,0,4.27,2.34L430.88,294.2A18.85,18.85,0,0,1,426.45,291.91Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 437.925px 287.695px;" id="elzoghysjdg4"
                            class="animable"></path>
                        <path
                            d="M432.68,294.14a4,4,0,0,1-3.59,0l-3.15-1.81a1.09,1.09,0,0,1,0-2.06l18.41-10.56.78.44L427,290.61c-.6.34-.6.89,0,1.23L430,293.5a2.39,2.39,0,0,0,2.15,0l18.1-10.43.88.5Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 438.168px 287.138px;" id="elqoh7qjgkf6r"
                            class="animable"></path>
                        <path
                            d="M451.08,283.57v36.71l-18.4,10.57a4,4,0,0,1-3.59,0L425.94,329a1.25,1.25,0,0,1-.74-1V291.3a1.25,1.25,0,0,0,.74,1l3.15,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 438.14px 307.423px;" id="el9rb0myjstpd"
                            class="animable"></path>
                        <path
                            d="M430.88,294.56a3.7,3.7,0,0,1-1.79-.42l-3.15-1.81a1.25,1.25,0,0,1-.74-1V328a1.25,1.25,0,0,0,.74,1l3.15,1.81a3.7,3.7,0,0,0,1.79.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 428.04px 311.28px;" id="elvcnrf9ui48"
                            class="animable"></path>
                        <polygon points="453.02 284.68 433.72 295.83 433.72 332.55 453.02 321.4 453.02 284.68"
                            style="fill: rgb(235, 235, 235); transform-origin: 443.37px 308.615px;" id="elrck30ybnzud"
                            class="animable"></polygon>
                        <path
                            d="M434.35,296.44,453,285.72a7.83,7.83,0,0,0,4.27,2.34l-18.52,10.67A18.73,18.73,0,0,1,434.35,296.44Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 445.81px 292.225px;" id="el0hd4lv46vya"
                            class="animable"></path>
                        <path
                            d="M440.57,298.67a4,4,0,0,1-3.59,0l-3.14-1.81a1.08,1.08,0,0,1,0-2.06l18.4-10.56.78.44-18.1,10.46c-.6.34-.6.89,0,1.23l2.92,1.66a2.41,2.41,0,0,0,2.16,0l18.09-10.43.89.5Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 446.032px 291.668px;" id="elsf2zh7g7n5"
                            class="animable"></path>
                        <path
                            d="M459,288.1v36.72l-18.4,10.56a4,4,0,0,1-3.59,0l-3.15-1.81a1.25,1.25,0,0,1-.74-1V295.83a1.25,1.25,0,0,0,.74,1l3.15,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 446.06px 311.953px;" id="elpi4hy2er09"
                            class="animable"></path>
                        <path
                            d="M438.77,299.1a3.73,3.73,0,0,1-1.79-.43l-3.15-1.81a1.25,1.25,0,0,1-.74-1v36.71a1.25,1.25,0,0,0,.74,1l3.15,1.81a3.73,3.73,0,0,0,1.79.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 435.93px 315.83px;" id="el68qck8c5tkl"
                            class="animable"></path>
                        <polygon
                            points="349.94 232.69 383.6 213.25 480.59 269.26 480.59 272.04 446.92 291.47 349.94 235.46 349.94 232.69"
                            style="fill: rgb(235, 235, 235); transform-origin: 415.265px 252.36px;" id="elw6tvzrfesyr"
                            class="animable"></polygon>
                        <polygon points="446.92 288.7 349.94 232.69 383.6 213.25 480.59 269.26 446.92 288.7"
                            style="fill: rgb(245, 245, 245); transform-origin: 415.265px 250.975px;" id="elamid880z92e"
                            class="animable"></polygon>
                        <polygon points="446.92 288.7 446.92 291.47 480.59 272.04 480.59 269.26 446.92 288.7"
                            style="fill: rgb(224, 224, 224); transform-origin: 463.755px 280.365px;" id="elnaa85h9tn1s"
                            class="animable"></polygon>
                        <polygon points="377.54 187.03 358.24 198.18 364.24 236 383.53 224.85 377.54 187.03"
                            style="fill: rgb(235, 235, 235); transform-origin: 370.885px 211.515px;" id="elupvhq9gyims"
                            class="animable"></polygon>
                        <path d="M359,198.7,377.69,188a10.31,10.31,0,0,0,5,1.93l-18.52,10.67A23.93,23.93,0,0,1,359,198.7Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 370.845px 194.3px;" id="elvlotimmw46n"
                            class="animable"></path>
                        <path
                            d="M366.08,200.44a5,5,0,0,1-3.89.17l-3.68-1.5c-1.15-.47-1.29-1.31-.3-1.88l18.42-10.57.91.37-18.1,10.45c-.6.34-.52.85.18,1.13L363,200a3,3,0,0,0,2.33-.1l18.1-10.44,1,.42Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 370.99px 193.792px;" id="el8kqkhutxvw6"
                            class="animable"></path>
                        <path
                            d="M384.49,189.87l6,37.82-18.42,10.57a5,5,0,0,1-3.89.17l-3.67-1.5c-.58-.23-.9-.56-1-.9l-6-37.83c.05.35.38.68.95.91l3.68,1.51a5,5,0,0,0,3.89-.18Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 374px 214.307px;" id="el0b27jj28l7bf"
                            class="animable"></path>
                        <path
                            d="M364.19,200.92a5,5,0,0,1-2-.3l-3.68-1.51c-.57-.23-.9-.56-.95-.91l6,37.83c.06.34.38.67,1,.9l3.67,1.5a4.86,4.86,0,0,0,2,.31Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 363.895px 218.474px;" id="elnyh9mknwyi"
                            class="animable"></path>
                        <polygon points="402.4 198.66 383.1 209.81 383.1 246.52 402.4 235.37 402.4 198.66"
                            style="fill: rgb(235, 235, 235); transform-origin: 392.75px 222.59px;" id="el3dahuf13zc3"
                            class="animable"></polygon>
                        <path
                            d="M383.72,210.42,402.4,199.7a7.82,7.82,0,0,0,4.27,2.33L388.15,212.7A18.39,18.39,0,0,1,383.72,210.42Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 395.195px 206.2px;" id="eldaihu1oqf5n"
                            class="animable"></path>
                        <path
                            d="M390,212.64a4,4,0,0,1-3.59,0l-3.15-1.8a1.09,1.09,0,0,1,0-2.06l18.41-10.57.78.45-18.1,10.45a.65.65,0,0,0,0,1.24l2.92,1.66a2.41,2.41,0,0,0,2.16,0l18.09-10.44.89.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 395.468px 205.638px;" id="el8ws2s9y3fx6"
                            class="animable"></path>
                        <path
                            d="M408.35,202.08v36.71L390,249.35a4,4,0,0,1-3.59,0l-3.15-1.8a1.27,1.27,0,0,1-.74-1V209.8a1.25,1.25,0,0,0,.74,1l3.15,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 395.435px 225.928px;" id="elsnjdrfdao8"
                            class="animable"></path>
                        <path
                            d="M388.15,213.07a3.59,3.59,0,0,1-1.79-.43l-3.15-1.81a1.25,1.25,0,0,1-.74-1v36.72a1.27,1.27,0,0,0,.74,1l3.15,1.8a3.59,3.59,0,0,0,1.79.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 385.31px 229.806px;" id="el8ne1iw64fx"
                            class="animable"></path>
                        <polygon points="412.24 197.79 392.94 208.93 392.94 252.14 412.24 240.99 412.24 197.79"
                            style="fill: rgb(224, 224, 224); transform-origin: 402.59px 224.965px;" id="el85q4b1apty7"
                            class="animable"></polygon>
                        <path
                            d="M393.56,209.54l18.68-10.71a7.84,7.84,0,0,0,4.27,2.33L398,211.83A18.61,18.61,0,0,1,393.56,209.54Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 405.035px 205.33px;" id="eld0cx31kzyg"
                            class="animable"></path>
                        <path
                            d="M399.78,211.77a4,4,0,0,1-3.59,0L393.05,210a1.09,1.09,0,0,1,0-2.06l18.4-10.56.79.45-18.11,10.45a.66.66,0,0,0,0,1.24l2.92,1.65a2.41,2.41,0,0,0,2.16,0l18.1-10.43.88.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 405.253px 204.788px;" id="ela6nz03dptp6"
                            class="animable"></path>
                        <path
                            d="M418.19,201.2v43.21L399.78,255a4,4,0,0,1-3.59,0l-3.14-1.8a1.25,1.25,0,0,1-.74-1V208.93a1.23,1.23,0,0,0,.74,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 405.25px 228.313px;" id="el9i21286rvf"
                            class="animable"></path>
                        <path
                            d="M398,212.2a3.77,3.77,0,0,1-1.8-.43L393.05,210a1.23,1.23,0,0,1-.74-1v43.21a1.25,1.25,0,0,0,.74,1l3.14,1.8a3.66,3.66,0,0,0,1.8.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 395.155px 232.22px;" id="el41r0grduyrs"
                            class="animable"></path>
                        <polygon points="420.13 202.32 400.83 213.46 400.83 256.67 420.13 245.52 420.13 202.32"
                            style="fill: rgb(235, 235, 235); transform-origin: 410.48px 229.495px;" id="elmscrqevzayj"
                            class="animable"></polygon>
                        <path
                            d="M401.45,214.07l18.68-10.71a7.88,7.88,0,0,0,4.27,2.33l-18.52,10.67A18.61,18.61,0,0,1,401.45,214.07Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 412.925px 209.86px;" id="elb8cgfkf8bf7"
                            class="animable"></path>
                        <path
                            d="M407.67,216.3a4,4,0,0,1-3.59,0l-3.14-1.81a1.09,1.09,0,0,1,0-2.06l18.41-10.56.78.45L402,212.77a.66.66,0,0,0,0,1.24l2.93,1.65a2.36,2.36,0,0,0,2.15,0l18.1-10.43.88.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 413.133px 209.298px;" id="elnu293w33en"
                            class="animable"></path>
                        <path
                            d="M426.08,205.73v43.21L407.67,259.5a4,4,0,0,1-3.59,0l-3.14-1.8a1.27,1.27,0,0,1-.74-1V213.46a1.25,1.25,0,0,0,.74,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 413.14px 232.828px;" id="elilo85nsnaac"
                            class="animable"></path>
                        <path
                            d="M405.88,216.73a3.66,3.66,0,0,1-1.8-.43l-3.14-1.81a1.25,1.25,0,0,1-.74-1v43.21a1.27,1.27,0,0,0,.74,1l3.14,1.8a3.66,3.66,0,0,0,1.8.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 403.04px 236.71px;" id="elfhbypyf3cg4"
                            class="animable"></path>
                        <polygon points="429.02 209.88 407.51 222.31 414.19 264.48 435.7 252.05 429.02 209.88"
                            style="fill: rgb(235, 235, 235); transform-origin: 421.605px 237.18px;" id="el0fqgs6iopua"
                            class="animable"></polygon>
                        <path
                            d="M408.36,222.9l20.83-12a11.55,11.55,0,0,0,5.54,2.15L414.08,225A27.4,27.4,0,0,1,408.36,222.9Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 421.545px 217.95px;" id="elpw7vtfhldd"
                            class="animable"></path>
                        <path
                            d="M416.24,224.84a5.58,5.58,0,0,1-4.33.19l-4.1-1.67c-1.29-.53-1.44-1.47-.33-2.11L428,209.47l1,.41-20.18,11.66c-.66.38-.57,1,.2,1.26l3.8,1.54a3.41,3.41,0,0,0,2.61-.12l20.17-11.64,1.15.47Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 421.743px 217.424px;" id="elo0y5c0o5afa"
                            class="animable"></path>
                        <path
                            d="M436.77,213.05l6.68,42.17L422.93,267a5.61,5.61,0,0,1-4.34.19l-4.1-1.67c-.64-.26-1-.63-1.06-1l-6.68-42.17c.06.39.42.75,1.06,1l4.1,1.67a5.58,5.58,0,0,0,4.33-.19Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 425.1px 240.294px;" id="el43hm79hoylf"
                            class="animable"></path>
                        <path
                            d="M414.14,225.37a5.23,5.23,0,0,1-2.23-.34l-4.1-1.67c-.64-.27-1-.63-1.06-1l6.68,42.17c.06.38.42.75,1.06,1l4.1,1.67a5.26,5.26,0,0,0,2.24.34Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 413.79px 244.956px;" id="eljgskm943gw"
                            class="animable"></path>
                        <polygon points="443.34 216.68 424.04 227.83 424.04 270.04 443.34 258.89 443.34 216.68"
                            style="fill: rgb(224, 224, 224); transform-origin: 433.69px 243.36px;" id="el9hlxi7azfmh"
                            class="animable"></polygon>
                        <path
                            d="M424.66,228.44l18.68-10.72a7.82,7.82,0,0,0,4.27,2.33l-18.52,10.68A18.85,18.85,0,0,1,424.66,228.44Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 436.135px 224.225px;" id="elrpto5nynq6j"
                            class="animable"></path>
                        <path
                            d="M430.89,230.66a4,4,0,0,1-3.59,0l-3.15-1.8a1.09,1.09,0,0,1,0-2.06l18.41-10.57.78.45-18.1,10.45c-.6.35-.6.9,0,1.24l2.92,1.66a2.41,2.41,0,0,0,2.16,0l18.09-10.44.89.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 436.358px 223.658px;" id="ela5qgke4zwz5"
                            class="animable"></path>
                        <path
                            d="M449.29,220.1v42.21l-18.4,10.56a4,4,0,0,1-3.59,0l-3.15-1.81a1.25,1.25,0,0,1-.74-1v-42.2a1.27,1.27,0,0,0,.74,1l3.15,1.8a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 436.35px 246.698px;" id="elmiaf9b1vzd"
                            class="animable"></path>
                        <path
                            d="M429.09,231.09a3.59,3.59,0,0,1-1.79-.43l-3.15-1.8a1.27,1.27,0,0,1-.74-1V270a1.25,1.25,0,0,0,.74,1l3.15,1.81a3.7,3.7,0,0,0,1.79.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 426.25px 250.55px;" id="elpvtapyytp9"
                            class="animable"></path>
                        <polygon points="451.23 221.21 431.94 232.36 431.94 274.57 451.23 263.42 451.23 221.21"
                            style="fill: rgb(235, 235, 235); transform-origin: 441.585px 247.89px;" id="el1zymem01t7p"
                            class="animable"></polygon>
                        <path
                            d="M432.56,233l18.67-10.72a7.85,7.85,0,0,0,4.27,2.33L437,235.26A18.61,18.61,0,0,1,432.56,233Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 444.03px 228.77px;" id="elk3ds8ex8hq"
                            class="animable"></path>
                        <path
                            d="M438.78,235.19a4,4,0,0,1-3.59,0l-3.14-1.8a1.09,1.09,0,0,1,0-2.06l18.4-10.57.78.45-18.1,10.45c-.59.35-.59.9,0,1.24l2.92,1.66a2.41,2.41,0,0,0,2.16,0l18.09-10.44.89.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 444.253px 228.188px;" id="eluheldl4fsi"
                            class="animable"></path>
                        <path
                            d="M457.19,224.63v42.21L438.78,277.4a4,4,0,0,1-3.59,0l-3.14-1.8a1.26,1.26,0,0,1-.75-1V232.36a1.26,1.26,0,0,0,.75,1l3.14,1.8a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 444.245px 251.228px;" id="elbnh5kbr46wm"
                            class="animable"></path>
                        <path
                            d="M437,235.62a3.66,3.66,0,0,1-1.8-.43l-3.14-1.8a1.26,1.26,0,0,1-.75-1v42.21a1.26,1.26,0,0,0,.75,1l3.14,1.8a3.77,3.77,0,0,0,1.8.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 434.155px 255.11px;" id="el080q15quyvll"
                            class="animable"></path>
                        <polygon
                            points="349.94 177.23 383.6 157.79 480.59 213.8 480.59 216.58 446.92 236.02 349.94 180.01 349.94 177.23"
                            style="fill: rgb(235, 235, 235); transform-origin: 415.265px 196.905px;" id="el3kjj5hbm9b7"
                            class="animable"></polygon>
                        <polygon points="446.92 233.24 349.94 177.23 383.6 157.79 480.59 213.8 446.92 233.24"
                            style="fill: rgb(245, 245, 245); transform-origin: 415.265px 195.515px;" id="el3puvnyotrj7"
                            class="animable"></polygon>
                        <polygon points="446.92 233.24 446.92 236.02 480.59 216.58 480.59 213.8 446.92 233.24"
                            style="fill: rgb(224, 224, 224); transform-origin: 463.755px 224.91px;" id="elbnc6tmmakze"
                            class="animable"></polygon>
                        <polygon points="374.77 120.81 355.48 131.96 355.48 175.17 374.77 164.02 374.77 120.81"
                            style="fill: rgb(224, 224, 224); transform-origin: 365.125px 147.99px;" id="el617d65htjui"
                            class="animable"></polygon>
                        <path
                            d="M356.1,132.57l18.68-10.72a7.79,7.79,0,0,0,4.27,2.34l-18.52,10.67A18.61,18.61,0,0,1,356.1,132.57Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 367.575px 128.355px;" id="eldeefyxmc7a"
                            class="animable"></path>
                        <path
                            d="M362.32,134.8a4,4,0,0,1-3.59,0L355.59,133a1.09,1.09,0,0,1,0-2.06L374,120.37l.78.44-18.11,10.46c-.59.34-.59.89,0,1.24l2.93,1.65a2.39,2.39,0,0,0,2.15,0l18.1-10.43.88.5Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 367.793px 127.798px;" id="elgj903dyotaf"
                            class="animable"></path>
                        <path
                            d="M380.73,124.23v43.21L362.32,178a4,4,0,0,1-3.59,0l-3.14-1.8a1.25,1.25,0,0,1-.74-1V132a1.23,1.23,0,0,0,.74,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 367.79px 151.328px;" id="eluiza00u6nqc"
                            class="animable"></path>
                        <path
                            d="M360.53,135.23a3.77,3.77,0,0,1-1.8-.43L355.59,133a1.23,1.23,0,0,1-.74-1v43.21a1.25,1.25,0,0,0,.74,1l3.14,1.8a3.77,3.77,0,0,0,1.8.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 357.69px 155.22px;" id="elq7i25spsj4m"
                            class="animable"></path>
                        <polygon points="382.67 125.34 363.37 136.49 363.37 179.7 382.67 168.55 382.67 125.34"
                            style="fill: rgb(235, 235, 235); transform-origin: 373.02px 152.52px;" id="elq4idcadqupa"
                            class="animable"></polygon>
                        <path
                            d="M364,137.1l18.68-10.72a7.83,7.83,0,0,0,4.27,2.34l-18.52,10.67A18.61,18.61,0,0,1,364,137.1Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 375.475px 132.885px;" id="elb4ojy4zm74q"
                            class="animable"></path>
                        <path
                            d="M370.21,139.33a4,4,0,0,1-3.58,0l-3.15-1.81a1.09,1.09,0,0,1,0-2.06l18.41-10.56.78.45L364.56,135.8c-.59.34-.59.89,0,1.24l2.93,1.65a2.39,2.39,0,0,0,2.15,0l18.1-10.43.88.5Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 375.683px 132.326px;" id="elvop1lt38m9q"
                            class="animable"></path>
                        <path
                            d="M388.62,128.76V172l-18.41,10.56a4,4,0,0,1-3.58,0l-3.15-1.8a1.27,1.27,0,0,1-.74-1V136.49a1.25,1.25,0,0,0,.74,1l3.15,1.81a4,4,0,0,0,3.58,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 375.68px 155.871px;" id="elwr7ucnektzf"
                            class="animable"></path>
                        <path
                            d="M368.42,139.76a3.7,3.7,0,0,1-1.79-.43l-3.15-1.81a1.25,1.25,0,0,1-.74-1V179.7a1.27,1.27,0,0,0,.74,1l3.15,1.8a3.59,3.59,0,0,0,1.79.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 365.58px 159.725px;" id="ele1ykuyh7lp7"
                            class="animable"></path>
                        <polygon points="391.11 136.94 371.81 148.09 371.81 184.8 391.11 173.65 391.11 136.94"
                            style="fill: rgb(224, 224, 224); transform-origin: 381.46px 160.87px;" id="elncyuav0qovq"
                            class="animable"></polygon>
                        <path
                            d="M372.43,148.69,391.11,138a7.84,7.84,0,0,0,4.27,2.33L376.86,151A18.61,18.61,0,0,1,372.43,148.69Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 383.905px 144.5px;" id="elw5h1qkg2d7m"
                            class="animable"></path>
                        <path
                            d="M378.65,150.92a4,4,0,0,1-3.59,0l-3.14-1.81a1.08,1.08,0,0,1,0-2.05l18.41-10.57.78.45L373,147.39a.66.66,0,0,0,0,1.24l2.93,1.65a2.33,2.33,0,0,0,2.15,0l18.1-10.43.88.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 384.12px 143.918px;" id="elr8a5t49eyr"
                            class="animable"></path>
                        <path
                            d="M397.06,140.36v36.71l-18.41,10.56a4,4,0,0,1-3.59,0l-3.14-1.8a1.27,1.27,0,0,1-.74-1V148.08a1.25,1.25,0,0,0,.74,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 384.12px 164.208px;" id="elhv7tvo0p5lu"
                            class="animable"></path>
                        <path
                            d="M376.86,151.35a3.66,3.66,0,0,1-1.8-.43l-3.14-1.81a1.25,1.25,0,0,1-.74-1V184.8a1.27,1.27,0,0,0,.74,1l3.14,1.8a3.77,3.77,0,0,0,1.8.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 374.02px 168.07px;" id="elmvubut8lwzl"
                            class="animable"></path>
                        <polygon points="399 141.47 379.7 152.62 379.7 189.33 399 178.18 399 141.47"
                            style="fill: rgb(235, 235, 235); transform-origin: 389.35px 165.4px;" id="el37xpt9mfxba"
                            class="animable"></polygon>
                        <path
                            d="M380.32,153.23,399,142.51a7.82,7.82,0,0,0,4.27,2.33l-18.52,10.67A18.72,18.72,0,0,1,380.32,153.23Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 391.795px 149.01px;" id="el43toljcq8vc"
                            class="animable"></path>
                        <path
                            d="M386.55,155.45a4,4,0,0,1-3.59,0l-3.15-1.8a1.09,1.09,0,0,1,0-2.06L398.22,141l.78.45-18.11,10.45a.65.65,0,0,0,0,1.24l2.92,1.66a2.36,2.36,0,0,0,2.15,0l18.1-10.43.88.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 392.008px 148.438px;" id="elnozmytuq9jm"
                            class="animable"></path>
                        <path
                            d="M405,144.89V181.6l-18.4,10.56a4,4,0,0,1-3.59,0l-3.15-1.8a1.27,1.27,0,0,1-.74-1V152.61a1.25,1.25,0,0,0,.74,1l3.15,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 392.06px 168.738px;" id="elhbmw5b8naic"
                            class="animable"></path>
                        <path
                            d="M384.75,155.88a3.59,3.59,0,0,1-1.79-.43l-3.15-1.81a1.25,1.25,0,0,1-.74-1v36.72a1.27,1.27,0,0,0,.74,1l3.15,1.8a3.7,3.7,0,0,0,1.79.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 381.91px 172.615px;" id="elgr09k7jc5pw"
                            class="animable"></path>
                        <polygon points="413.91 143.84 394.62 154.99 394.62 198.19 413.91 187.05 413.91 143.84"
                            style="fill: rgb(224, 224, 224); transform-origin: 404.265px 171.015px;" id="eltd9ymgowlh9"
                            class="animable"></polygon>
                        <path
                            d="M395.24,155.6l18.67-10.72a7.85,7.85,0,0,0,4.27,2.33l-18.51,10.68A18.61,18.61,0,0,1,395.24,155.6Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 406.71px 151.385px;" id="elaj6m1r9dxe6"
                            class="animable"></path>
                        <path
                            d="M401.46,157.82a4,4,0,0,1-3.59,0l-3.14-1.8a1.09,1.09,0,0,1,0-2.06l18.4-10.57.78.45-18.1,10.46a.65.65,0,0,0,0,1.23l2.92,1.66a2.41,2.41,0,0,0,2.16,0L419,146.75l.89.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 406.943px 150.818px;" id="elgr6724iur1"
                            class="animable"></path>
                        <path
                            d="M419.87,147.26v43.2L401.46,201a4,4,0,0,1-3.59,0l-3.14-1.81a1.24,1.24,0,0,1-.75-1V155a1.26,1.26,0,0,0,.75,1l3.14,1.8a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 406.925px 174.343px;" id="elpnjuouwomuc"
                            class="animable"></path>
                        <path
                            d="M399.67,158.25a3.66,3.66,0,0,1-1.8-.43l-3.14-1.8a1.26,1.26,0,0,1-.75-1v43.2a1.24,1.24,0,0,0,.75,1l3.14,1.81a3.77,3.77,0,0,0,1.8.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 396.825px 178.235px;" id="el3asu8044gdk"
                            class="animable"></path>
                        <polygon points="421.81 148.37 402.51 159.52 402.51 202.72 421.81 191.58 421.81 148.37"
                            style="fill: rgb(235, 235, 235); transform-origin: 412.16px 175.545px;" id="elmq635390cq"
                            class="animable"></polygon>
                        <path
                            d="M403.13,160.13l18.68-10.72a7.78,7.78,0,0,0,4.27,2.33l-18.52,10.68A18.61,18.61,0,0,1,403.13,160.13Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 414.605px 155.915px;" id="elodn5p4aql5h"
                            class="animable"></path>
                        <path
                            d="M409.35,162.35a4,4,0,0,1-3.59,0l-3.14-1.8a1.09,1.09,0,0,1,0-2.06L421,147.93l.79.44L403.7,158.83a.65.65,0,0,0,0,1.23l2.93,1.66a2.39,2.39,0,0,0,2.15,0l18.1-10.44.88.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 414.823px 155.353px;" id="elpjoc9ezsx5"
                            class="animable"></path>
                        <path
                            d="M427.76,151.79V195l-18.41,10.57a4,4,0,0,1-3.59,0l-3.14-1.81a1.23,1.23,0,0,1-.74-1v-43.2a1.25,1.25,0,0,0,.74,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 414.82px 178.893px;" id="elfvef43gmdik"
                            class="animable"></path>
                        <path
                            d="M407.56,162.78a3.77,3.77,0,0,1-1.8-.42l-3.14-1.81a1.25,1.25,0,0,1-.74-1v43.2a1.23,1.23,0,0,0,.74,1l3.14,1.81a3.77,3.77,0,0,0,1.8.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 404.72px 182.765px;" id="eltzq4h7xe8v"
                            class="animable"></path>
                        <polygon points="430.78 156.33 409.26 168.75 415.95 210.92 437.46 198.49 430.78 156.33"
                            style="fill: rgb(235, 235, 235); transform-origin: 423.36px 183.625px;" id="eliujdnzta6tl"
                            class="animable"></polygon>
                        <path
                            d="M410.11,169.34l20.84-12a11.37,11.37,0,0,0,5.54,2.15l-20.65,11.9A27.54,27.54,0,0,1,410.11,169.34Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 423.3px 164.365px;" id="el3v8se6lj6dx"
                            class="animable"></path>
                        <path
                            d="M418,171.28a5.61,5.61,0,0,1-4.34.19l-4.09-1.67c-1.29-.53-1.44-1.47-.34-2.1l20.53-11.79,1,.42L410.59,168c-.66.38-.57,1,.21,1.26l3.8,1.54a3.38,3.38,0,0,0,2.6-.12L437.38,159l1.15.47Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 423.512px 163.864px;" id="el49xmb92rsoe"
                            class="animable"></path>
                        <path
                            d="M438.53,159.49l6.68,42.17-20.53,11.78a5.61,5.61,0,0,1-4.34.19L416.25,212c-.65-.26-1-.63-1.07-1l-6.68-42.16c.06.38.42.74,1.06,1l4.1,1.67a5.61,5.61,0,0,0,4.34-.19Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 426.855px 186.734px;" id="elzbdbe9xfnk"
                            class="animable"></path>
                        <path
                            d="M415.9,171.81a5.26,5.26,0,0,1-2.24-.34l-4.1-1.67c-.64-.27-1-.63-1.06-1L415.18,211c.06.38.42.75,1.07,1l4.09,1.67a5.28,5.28,0,0,0,2.24.34Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 415.54px 191.411px;" id="el75c2q0yjeqm"
                            class="animable"></path>
                        <polygon points="446.13 168.54 426.84 179.69 426.84 216.4 446.13 205.26 446.13 168.54"
                            style="fill: rgb(224, 224, 224); transform-origin: 436.485px 192.47px;" id="el1c8tvdw3ppu"
                            class="animable"></polygon>
                        <path
                            d="M427.46,180.3l18.67-10.72a7.86,7.86,0,0,0,4.28,2.34l-18.52,10.67A18.61,18.61,0,0,1,427.46,180.3Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 438.935px 176.085px;" id="ell7ggavywlk8"
                            class="animable"></path>
                        <path
                            d="M433.68,182.53a4,4,0,0,1-3.59,0L427,180.72a1.09,1.09,0,0,1,0-2.06l18.4-10.56.78.44L428,179a.65.65,0,0,0,0,1.23l2.92,1.66a2.41,2.41,0,0,0,2.16,0l18.1-10.43.88.5Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 439.163px 175.528px;" id="el6nc4s74a5sk"
                            class="animable"></path>
                        <path
                            d="M452.09,172v36.71l-18.41,10.57a4,4,0,0,1-3.59,0L427,217.43a1.23,1.23,0,0,1-.74-1V179.69a1.23,1.23,0,0,0,.74,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 439.175px 195.853px;" id="elgo0nmikoaz"
                            class="animable"></path>
                        <path
                            d="M431.89,183a3.77,3.77,0,0,1-1.8-.42L427,180.72a1.23,1.23,0,0,1-.74-1V216.4a1.23,1.23,0,0,0,.74,1l3.14,1.81a3.77,3.77,0,0,0,1.8.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 429.1px 199.675px;" id="el5un8le82o2o"
                            class="animable"></path>
                        <polygon points="454.03 173.07 434.73 184.22 434.73 220.94 454.03 209.79 454.03 173.07"
                            style="fill: rgb(235, 235, 235); transform-origin: 444.38px 197.005px;" id="elys4izz23j59"
                            class="animable"></polygon>
                        <path
                            d="M435.35,184.83,454,174.11a7.79,7.79,0,0,0,4.27,2.34l-18.52,10.67A18.61,18.61,0,0,1,435.35,184.83Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 446.81px 180.615px;" id="elnsyixngjkm8"
                            class="animable"></path>
                        <path
                            d="M441.57,187.06a4,4,0,0,1-3.59,0l-3.14-1.81a1.09,1.09,0,0,1,0-2.06l18.41-10.56.78.44-18.11,10.46a.65.65,0,0,0,0,1.23l2.93,1.66a2.39,2.39,0,0,0,2.15,0L459.1,176l.88.5Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 447.043px 180.058px;" id="eloeete0ogndh"
                            class="animable"></path>
                        <path
                            d="M460,176.49v36.72l-18.41,10.56a4,4,0,0,1-3.59,0L434.84,222a1.25,1.25,0,0,1-.74-1V184.22a1.25,1.25,0,0,0,.74,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 447.05px 200.343px;" id="elxrj2d5m21c"
                            class="animable"></path>
                        <path
                            d="M439.78,187.49a3.77,3.77,0,0,1-1.8-.43l-3.14-1.81a1.25,1.25,0,0,1-.74-1v36.71a1.25,1.25,0,0,0,.74,1l3.14,1.81a3.77,3.77,0,0,0,1.8.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 436.94px 204.22px;" id="elhtztg6yditq"
                            class="animable"></path>
                        <polygon
                            points="349.94 121.78 383.6 102.34 480.59 158.35 480.59 161.12 446.92 180.56 349.94 124.55 349.94 121.78"
                            style="fill: rgb(235, 235, 235); transform-origin: 415.265px 141.45px;" id="el7ncdf6ut1nu"
                            class="animable"></polygon>
                        <polygon points="446.92 177.78 349.94 121.78 383.6 102.34 480.59 158.35 446.92 177.78"
                            style="fill: rgb(245, 245, 245); transform-origin: 415.265px 140.06px;" id="eltvz5i9lvzjj"
                            class="animable"></polygon>
                        <polygon points="446.92 177.78 446.92 180.56 480.59 161.12 480.59 158.35 446.92 177.78"
                            style="fill: rgb(224, 224, 224); transform-origin: 463.755px 169.455px;" id="ela9j3hhx87xo"
                            class="animable"></polygon>
                        <polygon points="374.77 73.41 355.48 84.56 355.48 121.27 374.77 110.13 374.77 73.41"
                            style="fill: rgb(224, 224, 224); transform-origin: 365.125px 97.34px;" id="el3x4slr6pgrj"
                            class="animable"></polygon>
                        <path
                            d="M356.1,85.17l18.68-10.72a7.85,7.85,0,0,0,4.27,2.34L360.53,87.46A18.61,18.61,0,0,1,356.1,85.17Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 367.575px 80.955px;" id="ell7jf8pkkjjm"
                            class="animable"></path>
                        <path
                            d="M362.32,87.39a4,4,0,0,1-3.59,0l-3.14-1.8a1.09,1.09,0,0,1,0-2.06L374,73l.78.44L356.67,83.87a.65.65,0,0,0,0,1.23l2.93,1.66a2.39,2.39,0,0,0,2.15,0l18.1-10.44.88.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 367.793px 80.4077px;" id="elds0002yiuz"
                            class="animable"></path>
                        <path
                            d="M380.73,76.83v36.71L362.32,124.1a4,4,0,0,1-3.59,0l-3.14-1.8a1.24,1.24,0,0,1-.74-1V84.56a1.25,1.25,0,0,0,.74,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 367.79px 100.678px;" id="elvyefzmtkl"
                            class="animable"></path>
                        <path
                            d="M360.53,87.82a3.77,3.77,0,0,1-1.8-.42l-3.14-1.81a1.25,1.25,0,0,1-.74-1v36.71a1.24,1.24,0,0,0,.74,1l3.14,1.8a3.66,3.66,0,0,0,1.8.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 357.69px 104.56px;" id="elpyuwydzuf7j"
                            class="animable"></path>
                        <polygon points="382.94 81.2 363.64 92.35 369.64 130.17 388.94 119.02 382.94 81.2"
                            style="fill: rgb(235, 235, 235); transform-origin: 376.29px 105.685px;" id="elivyyi84rs4q"
                            class="animable"></polygon>
                        <path d="M364.41,92.88l18.68-10.73a10.22,10.22,0,0,0,5,1.93L369.54,94.76A25,25,0,0,1,364.41,92.88Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 376.25px 88.455px;" id="el1ynmx53t4t5"
                            class="animable"></path>
                        <path
                            d="M371.48,94.61a5,5,0,0,1-3.89.18l-3.67-1.5c-1.16-.48-1.3-1.32-.3-1.89L382,80.83l.91.37-18.1,10.46c-.6.34-.51.84.18,1.13l3.41,1.37a3,3,0,0,0,2.34-.1l18.09-10.44,1,.42Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 376.391px 87.9648px;" id="el6ecju4oitnl"
                            class="animable"></path>
                        <path
                            d="M389.89,84l6,37.82-18.42,10.57a5,5,0,0,1-3.89.18l-3.67-1.5c-.58-.24-.9-.57-1-.91l-6-37.82c.05.34.38.67,1,.9l3.68,1.51a5,5,0,0,0,3.89-.18Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 379.4px 108.44px;" id="elwpo6zrp3wk"
                            class="animable"></path>
                        <path
                            d="M369.6,95.09a5,5,0,0,1-2-.3l-3.68-1.51c-.57-.23-.9-.56-1-.9l6,37.82c.06.34.38.67,1,.91l3.67,1.5a5.06,5.06,0,0,0,2,.3Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 369.255px 112.648px;" id="ellfyxomisq6"
                            class="animable"></path>
                        <polygon points="399.88 87.95 380.59 99.1 380.59 135.81 399.88 124.67 399.88 87.95"
                            style="fill: rgb(224, 224, 224); transform-origin: 390.235px 111.88px;" id="el9jik5zjgn07"
                            class="animable"></polygon>
                        <path
                            d="M381.21,99.71,399.88,89a7.93,7.93,0,0,0,4.27,2.34L385.64,102A18.61,18.61,0,0,1,381.21,99.71Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 392.68px 95.5px;" id="ellwjjvwhl2ld"
                            class="animable"></path>
                        <path
                            d="M387.43,101.93a4,4,0,0,1-3.59,0l-3.14-1.8a1.09,1.09,0,0,1,0-2.06l18.4-10.56.78.44-18.1,10.46a.65.65,0,0,0,0,1.23l2.92,1.66a2.41,2.41,0,0,0,2.16,0L405,90.86l.89.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 392.928px 94.9327px;" id="elz21ezg9l31h"
                            class="animable"></path>
                        <path
                            d="M405.84,91.37v36.71l-18.41,10.57a4,4,0,0,1-3.59,0l-3.14-1.81a1.24,1.24,0,0,1-.75-1V99.1a1.26,1.26,0,0,0,.75,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 392.895px 115.223px;" id="eltr34rykg6k"
                            class="animable"></path>
                        <path
                            d="M385.64,102.36a3.77,3.77,0,0,1-1.8-.42l-3.14-1.81a1.26,1.26,0,0,1-.75-1v36.71a1.24,1.24,0,0,0,.75,1l3.14,1.81a3.77,3.77,0,0,0,1.8.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 382.795px 119.1px;" id="elrw6309715cf"
                            class="animable"></path>
                        <polygon points="407.78 92.48 388.48 103.63 388.48 140.34 407.78 129.2 407.78 92.48"
                            style="fill: rgb(235, 235, 235); transform-origin: 398.13px 116.41px;" id="el7cnww5z15lw"
                            class="animable"></polygon>
                        <path
                            d="M389.1,104.24l18.68-10.72a7.85,7.85,0,0,0,4.27,2.34l-18.52,10.67A18.61,18.61,0,0,1,389.1,104.24Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 400.575px 100.025px;" id="el1ayqg2b9956j"
                            class="animable"></path>
                        <path
                            d="M395.32,106.47a4,4,0,0,1-3.59,0l-3.14-1.81a1.09,1.09,0,0,1,0-2.06L407,92l.78.44-18.11,10.46a.65.65,0,0,0,0,1.23l2.93,1.66a2.39,2.39,0,0,0,2.15,0l18.1-10.43.88.5Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 400.793px 99.4477px;" id="elftzyn6z6nl4"
                            class="animable"></path>
                        <path
                            d="M413.73,95.9v36.71l-18.41,10.57a4,4,0,0,1-3.59,0l-3.14-1.81a1.23,1.23,0,0,1-.74-1V103.63a1.25,1.25,0,0,0,.74,1l3.14,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 400.79px 119.753px;" id="elm5f3zmcau7k"
                            class="animable"></path>
                        <path
                            d="M393.53,106.89a3.77,3.77,0,0,1-1.8-.42l-3.14-1.81a1.25,1.25,0,0,1-.74-1v36.71a1.23,1.23,0,0,0,.74,1l3.14,1.81a3.77,3.77,0,0,0,1.8.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 390.69px 123.63px;" id="elaw270fhv698"
                            class="animable"></path>
                        <polygon points="417.61 91.61 398.31 102.76 398.31 145.96 417.61 134.82 417.61 91.61"
                            style="fill: rgb(224, 224, 224); transform-origin: 407.96px 118.785px;" id="eln5gql8zpu59"
                            class="animable"></polygon>
                        <path
                            d="M398.93,103.37l18.68-10.72A7.82,7.82,0,0,0,421.88,95l-18.52,10.68A18.85,18.85,0,0,1,398.93,103.37Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 410.405px 99.165px;" id="el7drkg7xqyy8"
                            class="animable"></path>
                        <path
                            d="M405.16,105.59a4,4,0,0,1-3.59,0l-3.15-1.8a1.09,1.09,0,0,1,0-2.06l18.41-10.57.78.45-18.1,10.46c-.6.34-.6.89,0,1.23l2.92,1.66a2.39,2.39,0,0,0,2.15,0l18.1-10.44.88.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 410.623px 98.5877px;" id="el47e1lnn9qe4"
                            class="animable"></path>
                        <path
                            d="M423.56,95v43.2l-18.4,10.57a4,4,0,0,1-3.59,0L398.42,147a1.25,1.25,0,0,1-.74-1v-43.2a1.27,1.27,0,0,0,.74,1l3.15,1.8a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 410.62px 122.098px;" id="elmchzawpu1jc"
                            class="animable"></path>
                        <path
                            d="M403.36,106a3.59,3.59,0,0,1-1.79-.43l-3.15-1.8a1.27,1.27,0,0,1-.74-1V146a1.25,1.25,0,0,0,.74,1l3.15,1.81a3.7,3.7,0,0,0,1.79.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 400.52px 126px;" id="elvxbwa82npa"
                            class="animable"></path>
                        <polygon points="425.5 96.14 406.2 107.29 406.2 150.49 425.5 139.35 425.5 96.14"
                            style="fill: rgb(235, 235, 235); transform-origin: 415.85px 123.315px;" id="el9eb1ynceap"
                            class="animable"></polygon>
                        <path
                            d="M406.82,107.9,425.5,97.18a7.82,7.82,0,0,0,4.27,2.33l-18.52,10.68A18.85,18.85,0,0,1,406.82,107.9Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 418.295px 103.685px;" id="elqcu7rl2oloi"
                            class="animable"></path>
                        <path
                            d="M413.05,110.12a4,4,0,0,1-3.59,0l-3.15-1.8a1.09,1.09,0,0,1,0-2.06L424.72,95.7l.78.44L407.4,106.6c-.6.34-.6.89,0,1.23l2.92,1.66a2.39,2.39,0,0,0,2.15,0l18.1-10.44.88.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 418.513px 103.123px;" id="elccwh9g3a54f"
                            class="animable"></path>
                        <path
                            d="M431.45,99.56v43.2l-18.4,10.57a4,4,0,0,1-3.59,0l-3.15-1.81a1.25,1.25,0,0,1-.74-1v-43.2a1.27,1.27,0,0,0,.74,1l3.15,1.81a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 418.51px 126.658px;" id="elqvhvokp86lk"
                            class="animable"></path>
                        <path
                            d="M411.25,110.55a3.7,3.7,0,0,1-1.79-.42l-3.15-1.81a1.27,1.27,0,0,1-.74-1v43.2a1.25,1.25,0,0,0,.74,1l3.15,1.81a3.7,3.7,0,0,0,1.79.42Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 408.41px 130.535px;" id="el8qfcrv6ux77"
                            class="animable"></path>
                        <polygon points="434.4 103.71 412.88 116.14 419.57 158.3 441.08 145.88 434.4 103.71"
                            style="fill: rgb(235, 235, 235); transform-origin: 426.98px 131.005px;" id="eleg1eqj7e75k"
                            class="animable"></polygon>
                        <path
                            d="M413.73,116.73l20.84-12a11.37,11.37,0,0,0,5.54,2.15l-20.65,11.9A27.72,27.72,0,0,1,413.73,116.73Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 426.92px 111.755px;" id="elestrzx0vxz"
                            class="animable"></path>
                        <path
                            d="M421.62,118.66a5.61,5.61,0,0,1-4.34.19l-4.09-1.67c-1.29-.52-1.44-1.47-.34-2.1l20.53-11.78,1,.41-20.18,11.65c-.67.39-.58,1,.2,1.27l3.8,1.53a3.34,3.34,0,0,0,2.6-.12L441,106.41l1.15.47Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 427.132px 111.249px;" id="elt96b1pre2h8"
                            class="animable"></path>
                        <path
                            d="M442.15,106.88,448.83,149,428.3,160.82a5.61,5.61,0,0,1-4.34.2l-4.09-1.67c-.65-.27-1-.63-1.07-1l-6.68-42.16c.06.38.42.75,1.06,1l4.1,1.68a5.61,5.61,0,0,0,4.34-.2Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 430.475px 134.122px;" id="elv85w3oyb1z"
                            class="animable"></path>
                        <path
                            d="M419.52,119.19a5.44,5.44,0,0,1-2.24-.33l-4.1-1.68c-.64-.26-1-.63-1.06-1l6.68,42.16c.06.39.42.75,1.07,1L424,161a5.61,5.61,0,0,0,2.24.34Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 419.18px 138.764px;" id="el0swbg6w5i8e"
                            class="animable"></path>
                        <polygon points="448.71 116 429.42 127.15 429.42 163.86 448.71 152.71 448.71 116"
                            style="fill: rgb(224, 224, 224); transform-origin: 439.065px 139.93px;" id="elbvqhquvzh4"
                            class="animable"></polygon>
                        <path
                            d="M430,127.76,448.72,117a7.78,7.78,0,0,0,4.27,2.33l-18.52,10.68A18.61,18.61,0,0,1,430,127.76Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 441.495px 123.505px;" id="elr8nd5lfqsf"
                            class="animable"></path>
                        <path
                            d="M436.26,130a4,4,0,0,1-3.59,0l-3.14-1.8a1.09,1.09,0,0,1,0-2.06l18.41-10.57.78.45-18.11,10.46a.65.65,0,0,0,0,1.23l2.93,1.66a2.39,2.39,0,0,0,2.15,0l18.1-10.44.88.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 441.733px 122.998px;" id="el88tm7lppnnk"
                            class="animable"></path>
                        <path
                            d="M454.67,119.42v36.71l-18.41,10.56a4,4,0,0,1-3.59,0l-3.14-1.8a1.25,1.25,0,0,1-.74-1V127.15a1.25,1.25,0,0,0,.74,1l3.14,1.8a4,4,0,0,0,3.59,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 441.73px 143.268px;" id="elv2n1dn45iat"
                            class="animable"></path>
                        <path
                            d="M434.47,130.41a3.66,3.66,0,0,1-1.8-.43l-3.14-1.8a1.25,1.25,0,0,1-.74-1v36.71a1.25,1.25,0,0,0,.74,1l3.14,1.8a3.66,3.66,0,0,0,1.8.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 431.63px 147.15px;" id="el5stklok9j3b"
                            class="animable"></path>
                        <polygon points="456.61 120.53 437.31 131.68 437.31 168.39 456.61 157.25 456.61 120.53"
                            style="fill: rgb(235, 235, 235); transform-origin: 446.96px 144.46px;" id="el0eou2d5gjvpu"
                            class="animable"></polygon>
                        <path
                            d="M437.93,132.29l18.68-10.72a7.82,7.82,0,0,0,4.27,2.33l-18.52,10.68A18.61,18.61,0,0,1,437.93,132.29Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 449.405px 128.075px;" id="eljgwpnx3zgxb"
                            class="animable"></path>
                        <path
                            d="M444.15,134.51a4,4,0,0,1-3.58,0l-3.15-1.8a1.09,1.09,0,0,1,0-2.06l18.41-10.56.78.44L438.5,131a.65.65,0,0,0,0,1.23l2.93,1.66a2.39,2.39,0,0,0,2.15,0l18.1-10.44.88.51Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 449.623px 127.511px;" id="elyitld762rra"
                            class="animable"></path>
                        <path
                            d="M462.56,124v36.71l-18.41,10.56a4,4,0,0,1-3.58,0l-3.15-1.8a1.26,1.26,0,0,1-.74-1V131.68a1.27,1.27,0,0,0,.74,1l3.15,1.81a4,4,0,0,0,3.58,0Z"
                            style="fill: rgb(224, 224, 224); transform-origin: 449.62px 147.846px;" id="el00fxjnv6eohlv"
                            class="animable"></path>
                        <path
                            d="M442.36,134.94a3.7,3.7,0,0,1-1.79-.42l-3.15-1.81a1.27,1.27,0,0,1-.74-1v36.71a1.26,1.26,0,0,0,.74,1l3.15,1.8a3.59,3.59,0,0,0,1.79.43Z"
                            style="fill: rgb(240, 240, 240); transform-origin: 439.52px 151.681px;" id="elxv0kh2u77jq"
                            class="animable"></path>
                        <polygon
                            points="444.52 123.44 478.19 104.01 480.59 105.4 480.59 327.47 446.92 346.91 444.52 345.52 444.52 123.44"
                            style="fill: rgb(235, 235, 235); transform-origin: 462.555px 225.46px;" id="elcg191bhzq9"
                            class="animable"></polygon>
                        <polygon points="480.59 327.47 446.92 346.91 446.92 124.83 480.59 105.4 480.59 327.47"
                            style="fill: rgb(230, 230, 230); transform-origin: 463.755px 226.155px;" id="eldvbgtrahfgr"
                            class="animable"></polygon>
                        <polygon
                            points="347.53 64.67 381.2 45.24 480.59 102.62 480.59 105.4 446.92 124.83 347.53 67.45 347.53 64.67"
                            style="fill: rgb(235, 235, 235); transform-origin: 414.06px 85.035px;" id="el6adwj6ii3bv"
                            class="animable"></polygon>
                        <polygon points="446.92 122.06 347.53 64.67 381.2 45.24 480.59 102.62 446.92 122.06"
                            style="fill: rgb(245, 245, 245); transform-origin: 414.06px 83.65px;" id="elk58sglizkrg"
                            class="animable"></polygon>
                        <polygon points="446.92 122.06 446.92 124.83 480.59 105.4 480.59 102.62 446.92 122.06"
                            style="fill: rgb(230, 230, 230); transform-origin: 463.755px 113.725px;" id="el43eet3neavk"
                            class="animable"></polygon>
                    </g>
                </g>
                <g id="freepik--shelf-1--inject-2" class="animable" style="transform-origin: 86.165px 196.075px;">
                    <g id="freepik--bookcase--inject-2" class="animable" style="transform-origin: 86.165px 196.075px;">
                        <polygon
                            points="152.69 286.75 119.03 267.31 19.64 324.7 19.64 327.47 53.3 346.91 152.69 289.53 152.69 286.75"
                            style="fill: rgb(186, 104, 200); transform-origin: 86.165px 307.11px;" id="el24n2r1sco4x"
                            class="animable"></polygon>
                        <g id="el0772xnf77rlt">
                            <polygon
                                points="152.69 286.75 119.03 267.31 19.64 324.7 19.64 327.47 53.3 346.91 152.69 289.53 152.69 286.75"
                                style="fill: rgb(255, 255, 255); opacity: 0.75; transform-origin: 86.165px 307.11px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="53.3 344.13 152.69 286.75 119.03 267.31 19.64 324.7 53.3 344.13"
                            style="fill: rgb(186, 104, 200); transform-origin: 86.165px 305.72px;" id="el4bmjwacexo9"
                            class="animable"></polygon>
                        <g id="eldx3frh8yrwn">
                            <polygon points="53.3 344.13 152.69 286.75 119.03 267.31 19.64 324.7 53.3 344.13"
                                style="fill: rgb(255, 255, 255); opacity: 0.85; transform-origin: 86.165px 305.72px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="53.3 344.13 53.3 346.91 19.64 327.47 19.64 324.7 53.3 344.13"
                            style="fill: rgb(186, 104, 200); transform-origin: 36.47px 335.805px;" id="el1kprzvtjsn2"
                            class="animable"></polygon>
                        <g id="elj9ct9v3p3w">
                            <polygon points="53.3 344.13 53.3 346.91 19.64 327.47 19.64 324.7 53.3 344.13"
                                style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 36.47px 335.805px;"
                                class="animable"></polygon>
                        </g>
                        <polygon
                            points="152.69 67.45 119.03 48.01 116.62 49.4 116.62 268.7 150.29 288.14 152.69 286.75 152.69 67.45"
                            style="fill: rgb(186, 104, 200); transform-origin: 134.655px 168.075px;" id="elhvc56ju5ib7"
                            class="animable"></polygon>
                        <g id="elxnlnuo5g0o8">
                            <polygon
                                points="152.69 67.45 119.03 48.01 116.62 49.4 116.62 268.7 150.29 288.14 152.69 286.75 152.69 67.45"
                                style="fill: rgb(255, 255, 255); opacity: 0.75; transform-origin: 134.655px 168.075px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="116.62 268.7 150.29 288.14 150.29 68.84 116.62 49.4 116.62 268.7"
                            style="fill: rgb(186, 104, 200); transform-origin: 133.455px 168.77px;" id="elw32ca5v4jqp"
                            class="animable"></polygon>
                        <g id="eldsf9x474cz">
                            <polygon points="116.62 268.7 150.29 288.14 150.29 68.84 116.62 49.4 116.62 268.7"
                                style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 133.455px 168.77px;"
                                class="animable"></polygon>
                        </g>
                        <g id="freepik--Book--inject-2" class="animable" style="transform-origin: 132.025px 264.13px;">
                            <polygon points="125.47 240.34 143.43 250.84 143.51 285.26 125.56 274.76 125.47 240.34"
                                style="fill: rgb(38, 50, 56); transform-origin: 134.49px 262.8px;" id="elcv7zh719e6g"
                                class="animable"></polygon>
                            <path
                                d="M142.85,251.41l-17.38-10.09a7.25,7.25,0,0,1-4,2.18l17.23,10.05A17.2,17.2,0,0,0,142.85,251.41Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 132.16px 247.435px;" id="el0tj87ujipty"
                                class="animable"></path>
                            <path
                                d="M137.07,253.48a3.68,3.68,0,0,0,3.34,0l2.91-1.68a1,1,0,0,0,0-1.93l-17.13-9.95-.72.42,16.84,9.84a.61.61,0,0,1,0,1.16l-2.71,1.54a2.22,2.22,0,0,1-2,0l-16.83-9.83-.82.48Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 132.004px 246.9px;" id="el6haf3d56jei"
                                class="animable"></path>
                            <path
                                d="M120,243.53,120,278l17.12,9.94a3.68,3.68,0,0,0,3.34,0l2.91-1.68a1.17,1.17,0,0,0,.69-1L144,250.84a1.19,1.19,0,0,1-.68,1l-2.92,1.68a3.68,3.68,0,0,1-3.34,0Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 132.03px 265.935px;" id="elcdfbl6gs58h"
                                class="animable"></path>
                            <path
                                d="M138.74,253.89a3.36,3.36,0,0,0,1.67-.4l2.92-1.68a1.19,1.19,0,0,0,.68-1l.09,34.42a1.17,1.17,0,0,1-.69,1l-2.91,1.68a3.38,3.38,0,0,1-1.67.4Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 141.42px 269.56px;" id="el55p6bc102ue"
                                class="animable"></path>
                            <path d="M138.8,283.77a11.64,11.64,0,0,0,5.3-3.06v-1.6a11.73,11.73,0,0,1-5.3,3.06Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 141.45px 281.44px;" id="elxv8swnlev6"
                                class="animable"></path>
                            <path d="M138.74,261A11.74,11.74,0,0,0,144,258v-1.6a11.64,11.64,0,0,1-5.3,3.06Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 141.35px 258.7px;" id="elu12rubx1khh"
                                class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable" style="transform-origin: 123.495px 269.463px;">
                            <path d="M135,256.64v.79s-.3-.28-.32-.48S135,256.64,135,256.64Z" id="eldp3ktwlhhp"
                                class="animable" style="transform-origin: 134.84px 257.035px;"></path>
                            <path
                                d="M134.34,256.45a.82.82,0,0,0,.61,1.05c.86.27,1.4,0,1.53.24s-4.08,2.67-4.08,2.67l.8-3.48Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 134.441px 258.43px;" id="el5x4q9imhbfi"
                                class="animable"></path>
                            <g id="ellczb0h8m64">
                                <path
                                    d="M134.34,256.45a.82.82,0,0,0,.61,1.05c.86.27,1.4,0,1.53.24s-4.08,2.67-4.08,2.67l.8-3.48Z"
                                    style="opacity: 0.3; transform-origin: 134.441px 258.43px;" class="animable"></path>
                            </g>
                            <path
                                d="M132.76,289v.05l-.42-.24-18-10.42,1.59-31.27c0-.51.28-.75.62-.56l.61.36L134,256.65l0,.15Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 124.17px 267.773px;" id="ellp01fxj4s7"
                                class="animable"></path>
                            <g id="el5cayxfqs86a">
                                <path
                                    d="M132.76,289v.05l-.42-.24-18-10.42,1.59-31.27c0-.51.28-.75.62-.56l.61.36L134,256.65l0,.15Z"
                                    style="opacity: 0.2; transform-origin: 124.17px 267.773px;" class="animable"></path>
                            </g>
                            <path d="M130.31,261.37l-.89-1,4.53-2.62c.68.52,1.21.79,1.82.54Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 132.595px 259.56px;" id="elkmvk4a9xomn"
                                class="animable"></path>
                            <path
                                d="M133.72,257.23,117,247.58a1.14,1.14,0,0,0-1.05,0l-4.46,2.58,16.94,9.7a1.56,1.56,0,0,1,1.23.21c.5.4.47-.11.47-.11l3.81-2.2C133.64,257.35,133.72,257.23,133.72,257.23Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 122.715px 253.838px;"
                                id="elookoh23hhtc" class="animable"></path>
                            <path
                                d="M130,261.17c-.17-.1-.25-.22-.17-.26l.15-.09c.15-.09,0-.32-.33-.52a1.17,1.17,0,0,0-.91-.19l-.14.08c-.08.05-.38-.05-.67-.22L128,291.3l.42.24a.39.39,0,0,0,.25,0l.14-.08a1.15,1.15,0,0,1,.9.19c.34.2.49.43.33.52l-.14.09c-.08,0,0,.16.16.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 129.017px 276.245px;"
                                id="el9nixheh80i" class="animable"></path>
                            <g id="ell4kkg2lwt6i">
                                <path
                                    d="M130,261.17c-.17-.1-.25-.22-.17-.26l.15-.09c.15-.09,0-.32-.33-.52a1.17,1.17,0,0,0-.91-.19l-.14.08c-.08.05-.38-.05-.67-.22L128,291.3l.42.24a.39.39,0,0,0,.25,0l.14-.08a1.15,1.15,0,0,1,.9.19c.34.2.49.43.33.52l-.14.09c-.08,0,0,.16.16.26Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 129.017px 276.245px;"
                                    class="animable"></path>
                            </g>
                            <path d="M128.44,291.5v0l-.42-.24-18-10.41V250.52c0-.5.27-.75.61-.55l.62.36,17.23,9.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 119.25px 270.7px;" id="elathc8nbce5"
                                class="animable"></path>
                            <g id="elobujjnra94">
                                <path d="M128.44,291.5v0l-.42-.24-18-10.41V250.52c0-.5.27-.75.61-.55l.62.36,17.23,9.53Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 119.25px 270.7px;"
                                    class="animable"></path>
                            </g>
                            <path d="M129.78,292.32V261l1.12.46v31.26a1,1,0,0,1-.62-.06Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 130.34px 276.872px;"
                                id="eli1eoc0rj4dr" class="animable"></path>
                            <g id="elo2xd4721ngs">
                                <path d="M129.78,292.32V261l1.12.46v31.26a1,1,0,0,1-.62-.06Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 130.34px 276.872px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M136.93,289.07a.13.13,0,0,1,0,.06s0,0,0,0a.59.59,0,0,1,0,.08.05.05,0,0,1,0,0,.71.71,0,0,1-.1.14l-.12.13-.16.14-.1.08-.08.05a1.37,1.37,0,0,1-.2.13l-3.89,2.24a3.53,3.53,0,0,1-1.31.47V261.41l6-3.62v31.27Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 133.97px 275.19px;" id="elpcw5xcxhb2"
                                class="animable"></path>
                            <g id="el7tqmuxamsfq">
                                <g style="opacity: 0.7; transform-origin: 133.97px 275.19px;" class="animable">
                                    <path
                                        d="M136.93,289.07a.13.13,0,0,1,0,.06s0,0,0,0a.59.59,0,0,1,0,.08.05.05,0,0,1,0,0,.71.71,0,0,1-.1.14l-.12.13-.16.14-.1.08-.08.05a1.37,1.37,0,0,1-.2.13l-3.89,2.24a3.53,3.53,0,0,1-1.31.47V261.41l6-3.62v31.27Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 133.97px 275.19px;"
                                        id="elh646pojxkf" class="animable"></path>
                                </g>
                            </g>
                            <path d="M130.9,264v3.77a15.28,15.28,0,0,0,6-3.49v-3.77A15.28,15.28,0,0,1,130.9,264Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 133.9px 264.14px;" id="elp77y3xja0mg"
                                class="animable"></path>
                            <path d="M130.9,285v3.77a15.39,15.39,0,0,0,6-3.48v-3.77A15.39,15.39,0,0,1,130.9,285Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 133.9px 285.145px;"
                                id="el4awcl6b98lp" class="animable"></path>
                            <path
                                d="M132.21,260.94l-.3-.53a2.68,2.68,0,0,1-1.29.41.79.79,0,0,0-.11-.51,1.55,1.55,0,0,0-.58-.54,2.34,2.34,0,0,0-.89-.29H129a1.09,1.09,0,0,0-.54.1l-16-9.24-.55-.31-.69-.4a.38.38,0,0,0-.38,0l-.61.36a.37.37,0,0,1,.38,0h0l1.84,1.06L127.91,260c.29.17.59.27.67.22l.14-.08a.47.47,0,0,1,.32,0,1.68,1.68,0,0,1,.59.21c.34.2.48.43.33.52l-.15.08c-.08.05,0,.17.17.27l.31.17A2.45,2.45,0,0,0,132.21,260.94Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 121.22px 255.505px;"
                                id="el14bvvuqmvb7l" class="animable"></path>
                            <g id="elftqdvla7za8">
                                <path
                                    d="M132.21,260.94l-.3-.53a2.68,2.68,0,0,1-1.29.41.79.79,0,0,0-.11-.51,1.55,1.55,0,0,0-.58-.54,2.34,2.34,0,0,0-.89-.29H129a1.09,1.09,0,0,0-.54.1l-16-9.24-.55-.31-.69-.4a.38.38,0,0,0-.38,0l-.61.36a.37.37,0,0,1,.38,0h0l1.84,1.06L127.91,260c.29.17.59.27.67.22l.14-.08a.47.47,0,0,1,.32,0,1.68,1.68,0,0,1,.59.21c.34.2.48.43.33.52l-.15.08c-.08.05,0,.17.17.27l.31.17A2.45,2.45,0,0,0,132.21,260.94Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 121.22px 255.505px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M131.91,260.41l3.89-2.24.16-.1.12-.09h0a1.72,1.72,0,0,1-1.44-.22,1.49,1.49,0,0,1-.57-.53.77.77,0,0,1-.1-.57l0,0-.11-.06-15.48-8.93s-.4-.24-.89-.51l-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.1.45-.26a.34.34,0,0,1,.31,0h0l.28.16a1,1,0,0,0,.17.1l.3.17.18.11.13.08.23.13L130.63,254l3.93,2.27c.28.16.44.33.38.38l0,0-.14.08c-.17.1,0,.34.31.53a.81.81,0,0,0,.78.11l.17-.09a.28.28,0,0,1,.24,0l.09.05.2.11.24.14a.25.25,0,0,1,.13.28v0a.2.2,0,0,1,0,.08h0l0,0a1,1,0,0,1-.09.13.86.86,0,0,1-.13.14l-.16.14-.1.07-.08.06-.2.13-3.89,2.24Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 126.558px 253.516px;"
                                id="elbiuc0mgqdo6" class="animable"></path>
                            <g id="el5rkt89cvj4w">
                                <path
                                    d="M131.91,260.41l3.89-2.24.16-.1.12-.09h0a1.72,1.72,0,0,1-1.44-.22,1.49,1.49,0,0,1-.57-.53.77.77,0,0,1-.1-.57l0,0-.11-.06-15.48-8.93s-.4-.24-.89-.51l-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.1.45-.26a.34.34,0,0,1,.31,0h0l.28.16a1,1,0,0,0,.17.1l.3.17.18.11.13.08.23.13L130.63,254l3.93,2.27c.28.16.44.33.38.38l0,0-.14.08c-.17.1,0,.34.31.53a.81.81,0,0,0,.78.11l.17-.09a.28.28,0,0,1,.24,0l.09.05.2.11.24.14a.25.25,0,0,1,.13.28v0a.2.2,0,0,1,0,.08h0l0,0a1,1,0,0,1-.09.13.86.86,0,0,1-.13.14l-.16.14-.1.07-.08.06-.2.13-3.89,2.24Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 126.558px 253.516px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 113.935px 274.94px;">
                            <path d="M125.39,262.15v.78s-.3-.27-.32-.47S125.39,262.15,125.39,262.15Z" id="el18kj8jsy66z"
                                class="animable" style="transform-origin: 125.23px 262.54px;"></path>
                            <path d="M124.78,262a.83.83,0,0,0,.61,1.06c.86.27,1.4,0,1.53.24s-4.08,2.66-4.08,2.66l.8-3.48Z"
                                id="ell7nfskd9b2" class="animable" style="transform-origin: 124.881px 263.98px;">
                            </path>
                            <path
                                d="M123.2,294.51v.05l-.42-.24-18-10.42,1.59-31.28c0-.5.28-.75.62-.55l.61.36,16.87,9.73v.15Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 114.625px 273.28px;" id="elimqm24rckq"
                                class="animable"></path>
                            <path d="M120.75,266.88l-.89-1,4.53-2.61c.68.51,1.21.79,1.82.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 123.035px 265.075px;"
                                id="elto9toc89p3" class="animable"></path>
                            <path
                                d="M124.16,262.73l-16.71-9.64a1.14,1.14,0,0,0-1,0l-4.46,2.58,16.94,9.69a1.53,1.53,0,0,1,1.23.22c.5.4.47-.11.47-.11l3.81-2.2C124.08,262.85,124.16,262.73,124.16,262.73Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 113.215px 259.354px;"
                                id="el8j1si9wvk4x" class="animable"></path>
                            <path
                                d="M120.42,266.67c-.17-.1-.25-.21-.16-.26l.14-.08c.15-.09,0-.33-.33-.52a1.19,1.19,0,0,0-.91-.2l-.14.08c-.08.05-.38-.05-.66-.21l.1,31.33.42.24a.38.38,0,0,0,.25,0l.14-.08a1.15,1.15,0,0,1,.9.19c.34.19.49.43.33.52l-.14.08c-.08.05,0,.16.16.26Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 119.462px 281.75px;" id="elkr5dmjzx8y"
                                class="animable"></path>
                            <path d="M118.88,297v.05l-.42-.24-18-10.42V256c0-.5.28-.75.61-.55l.62.35,17.23,9.53Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 109.69px 276.215px;" id="elqz04pfprj9"
                                class="animable"></path>
                            <path d="M120.22,297.83V266.46l1.12.45v31.27a1.09,1.09,0,0,1-.62-.07Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 120.78px 282.329px;" id="elilcoablo4in"
                                class="animable"></path>
                            <path
                                d="M127.37,294.57v.06s0,0,0,0a.36.36,0,0,1,0,.09l0,0a.61.61,0,0,1-.1.14l-.12.13-.16.14-.1.07-.08.06-.2.13-3.89,2.24a3.72,3.72,0,0,1-1.31.47V266.91l6-3.61v31.26Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 124.41px 280.7px;" id="el43ze53ac65c"
                                class="animable"></path>
                            <path d="M121.34,270.5v3.77a15.39,15.39,0,0,0,6-3.48V267A15.39,15.39,0,0,1,121.34,270.5Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 124.34px 270.635px;"
                                id="elusb0amefpq" class="animable"></path>
                            <g id="elq0g0q6zkte">
                                <path d="M121.34,270.5v3.77a15.39,15.39,0,0,0,6-3.48V267A15.39,15.39,0,0,1,121.34,270.5Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 124.34px 270.635px;"
                                    class="animable"></path>
                            </g>
                            <path d="M121.34,275.67v1.4a15.39,15.39,0,0,0,6-3.48v-1.41A15.28,15.28,0,0,1,121.34,275.67Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 124.34px 274.625px;"
                                id="el28w34kkt4fh" class="animable"></path>
                            <g id="elm01z03s8x9">
                                <path
                                    d="M121.34,275.67v1.4a15.39,15.39,0,0,0,6-3.48v-1.41A15.28,15.28,0,0,1,121.34,275.67Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 124.34px 274.625px;"
                                    class="animable"></path>
                            </g>
                            <path d="M121.34,291.71v1.4a15.27,15.27,0,0,0,6-3.48v-1.4A15.39,15.39,0,0,1,121.34,291.71Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 124.34px 290.67px;" id="elh7kvn1xxev"
                                class="animable"></path>
                            <g id="elmxfq7v84r7g">
                                <path
                                    d="M121.34,291.71v1.4a15.27,15.27,0,0,0,6-3.48v-1.4A15.39,15.39,0,0,1,121.34,291.71Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 124.34px 290.67px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M122.65,266.45l-.3-.53a2.81,2.81,0,0,1-1.29.41.78.78,0,0,0-.11-.51,1.55,1.55,0,0,0-.58-.54,2.36,2.36,0,0,0-.88-.3h-.07a1,1,0,0,0-.54.1l-16-9.24-.55-.31-.69-.4a.38.38,0,0,0-.38,0l-.61.35a.35.35,0,0,1,.38,0h0l1.84,1.06,15.47,8.94a1.26,1.26,0,0,0,.67.22l.15-.09a.62.62,0,0,1,.32,0,2,2,0,0,1,.58.22c.34.19.48.43.33.52l-.15.08c-.08,0,0,.16.17.26l.31.18A2.53,2.53,0,0,0,122.65,266.45Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 111.65px 260.997px;" id="elekv1jziay4e"
                                class="animable"></path>
                            <path
                                d="M122.35,265.92l3.89-2.24.16-.1.12-.09h0a1.75,1.75,0,0,1-1.44-.22,1.57,1.57,0,0,1-.57-.53.78.78,0,0,1-.1-.57l0,0-.11-.06-15.48-8.94-.88-.51-.26-.14-.75-.44a.34.34,0,0,0-.34,0l.17-.1.45-.26a.34.34,0,0,1,.31,0h0l.28.16.17.1.3.17.18.11.13.07.23.13,12.29,7.1L125,261.8c.28.16.44.32.38.38l0,0-.13.08c-.18.09,0,.33.3.53a.83.83,0,0,0,.78.11l.17-.1a.27.27,0,0,1,.24,0l.09,0,.2.11.24.14a.25.25,0,0,1,.13.28s0,0,0,0l0,.08h0a.05.05,0,0,1,0,0,.67.67,0,0,1-.09.14l-.13.14-.16.13-.1.08-.08.06-.2.12-3.89,2.25Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 116.998px 259.006px;" id="elezw2pk2eqfg"
                                class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 108.125px 281.202px;">
                            <polygon points="102.28 260.09 118.23 269.42 118.31 299.98 102.36 290.66 102.28 260.09"
                                style="fill: rgb(186, 104, 200); transform-origin: 110.295px 280.035px;"
                                id="elxqgr71vcki8" class="animable"></polygon>
                            <path
                                d="M117.72,269.92l-15.44-9a6.43,6.43,0,0,1-3.52,1.93l15.31,8.93A15.13,15.13,0,0,0,117.72,269.92Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 108.24px 266.35px;"
                                id="elenxsvzk5mzo" class="animable"></path>
                            <path
                                d="M112.59,271.76a3.25,3.25,0,0,0,3,0l2.59-1.5a.9.9,0,0,0,0-1.71l-15.22-8.84-.64.37,15,8.75c.49.28.5.74,0,1l-2.4,1.38a2,2,0,0,1-1.78,0l-15-8.72-.72.42Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 108.109px 265.918px;"
                                id="elht7f9hzuagc" class="animable"></path>
                            <g id="eljk5z0tg7m4n">
                                <path
                                    d="M112.59,271.76a3.25,3.25,0,0,0,3,0l2.59-1.5a.9.9,0,0,0,0-1.71l-15.22-8.84-.64.37,15,8.75c.49.28.5.74,0,1l-2.4,1.38a2,2,0,0,1-1.78,0l-15-8.72-.72.42Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 108.109px 265.918px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M97.38,262.92l.08,30.57,15.21,8.84a3.28,3.28,0,0,0,3,0l2.59-1.5a1,1,0,0,0,.61-.86l-.08-30.56a1,1,0,0,1-.61.85l-2.59,1.5a3.25,3.25,0,0,1-3,0Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 108.125px 282.807px;"
                                id="elpgesslwz8ik" class="animable"></path>
                            <g id="elx67iz5jeus">
                                <path
                                    d="M97.38,262.92l.08,30.57,15.21,8.84a3.28,3.28,0,0,0,3,0l2.59-1.5a1,1,0,0,0,.61-.86l-.08-30.56a1,1,0,0,1-.61.85l-2.59,1.5a3.25,3.25,0,0,1-3,0Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 108.125px 282.807px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M114.07,272.12a3,3,0,0,0,1.48-.35l2.59-1.5a1,1,0,0,0,.61-.85l.08,30.56a1,1,0,0,1-.61.86l-2.59,1.5a3.08,3.08,0,0,1-1.48.35Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 116.45px 286.055px;"
                                id="elzvf1ffeyxa" class="animable"></path>
                            <g id="elwybxw68k8pk">
                                <path
                                    d="M114.07,272.12a3,3,0,0,0,1.48-.35l2.59-1.5a1,1,0,0,0,.61-.85l.08,30.56a1,1,0,0,1-.61.86l-2.59,1.5a3.08,3.08,0,0,1-1.48.35Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 116.45px 286.055px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 101.775px 284.906px;">
                            <polygon points="96.38 265.32 111.16 273.96 111.24 302.31 96.45 293.66 96.38 265.32"
                                style="fill: rgb(186, 104, 200); transform-origin: 103.81px 283.815px;"
                                id="elivyj13j26b" class="animable"></polygon>
                            <g id="elpafdkldrbrs">
                                <polygon points="96.38 265.32 111.16 273.96 111.24 302.31 96.45 293.66 96.38 265.32"
                                    style="opacity: 0.35; transform-origin: 103.81px 283.815px;" class="animable">
                                </polygon>
                            </g>
                            <path
                                d="M110.69,274.43l-14.31-8.31a5.94,5.94,0,0,1-3.26,1.8l14.19,8.27A14,14,0,0,0,110.69,274.43Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 101.905px 271.155px;"
                                id="elvhqhsp6gey" class="animable"></path>
                            <path
                                d="M105.93,276.14a3.06,3.06,0,0,0,2.75,0l2.4-1.39a.84.84,0,0,0,0-1.59L97,265l-.59.34,13.87,8.11a.5.5,0,0,1,0,.95L108,275.66a1.81,1.81,0,0,1-1.65,0L92.5,267.56l-.67.39Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 101.739px 270.733px;"
                                id="elqoni6e7gcoo" class="animable"></path>
                            <g id="elvdyk8q4aarg">
                                <path
                                    d="M105.93,276.14a3.06,3.06,0,0,0,2.75,0l2.4-1.39a.84.84,0,0,0,0-1.59L97,265l-.59.34,13.87,8.11a.5.5,0,0,1,0,.95L108,275.66a1.81,1.81,0,0,1-1.65,0L92.5,267.56l-.67.39Z"
                                    style="opacity: 0.2; transform-origin: 101.739px 270.733px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M91.83,268l.07,28.34L106,304.48a3,3,0,0,0,2.74,0l2.4-1.39a1,1,0,0,0,.57-.79L111.65,274a1,1,0,0,1-.57.79l-2.4,1.39a3,3,0,0,1-2.75,0Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 101.77px 286.406px;"
                                id="elsztn4d9qqwp" class="animable"></path>
                            <g id="elp9chceyr6gk">
                                <path
                                    d="M91.83,268l.07,28.34L106,304.48a3,3,0,0,0,2.74,0l2.4-1.39a1,1,0,0,0,.57-.79L111.65,274a1,1,0,0,1-.57.79l-2.4,1.39a3,3,0,0,1-2.75,0Z"
                                    style="opacity: 0.3; transform-origin: 101.77px 286.406px;" class="animable"></path>
                            </g>
                            <path
                                d="M107.31,276.47a2.69,2.69,0,0,0,1.37-.32l2.4-1.39a1,1,0,0,0,.57-.79l.07,28.34a1,1,0,0,1-.57.79l-2.4,1.39a2.77,2.77,0,0,1-1.37.32Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 109.515px 289.391px;"
                                id="elm20felxvond" class="animable"></path>
                            <g id="elg6uiu5d8wyw">
                                <path
                                    d="M107.31,276.47a2.69,2.69,0,0,0,1.37-.32l2.4-1.39a1,1,0,0,0,.57-.79l.07,28.34a1,1,0,0,1-.57.79l-2.4,1.39a2.77,2.77,0,0,1-1.37.32Z"
                                    style="opacity: 0.1; transform-origin: 109.515px 289.391px;" class="animable">
                                </path>
                            </g>
                            <path d="M107.31,280.25v1.13a8.08,8.08,0,0,0,4.35-2.51v-1.13A8,8,0,0,1,107.31,280.25Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 109.485px 279.56px;" id="el2kpqbl952bp"
                                class="animable"></path>
                            <path d="M107.36,299.41v1.13a8,8,0,0,0,4.35-2.51V296.9A8,8,0,0,1,107.36,299.41Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 109.535px 298.72px;" id="el8rzvdiby815"
                                class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable" style="transform-origin: 93.14px 290.873px;">
                            <polygon points="89.33 270.38 105.71 279.96 102.06 309.24 85.68 299.66 89.33 270.38"
                                id="el2buwmizhrza" class="animable" style="transform-origin: 95.695px 289.81px;">
                            </polygon>
                            <path
                                d="M105.09,280.43l-15.87-9.22a8.1,8.1,0,0,1-4.1,1.71l15.72,9.17A19.7,19.7,0,0,0,105.09,280.43Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 95.105px 276.65px;"
                                id="eltxf5w4u1p9g" class="animable"></path>
                            <path
                                d="M99.22,282a4.05,4.05,0,0,0,3.26.13l3-1.33c.95-.42,1-1.15.2-1.64l-15.63-9.08-.75.33,15.36,9c.51.29.45.73-.12,1l-2.81,1.22a2.4,2.4,0,0,1-2-.08l-15.37-9-.85.37Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 94.8748px 276.246px;" id="el9k463yg4e6"
                                class="animable"></path>
                            <path
                                d="M83.59,272.9,80,302.17l15.63,9.08a4,4,0,0,0,3.25.13l3-1.33c.48-.2.74-.49.78-.79L106.28,280c0,.3-.3.59-.77.8l-3,1.33a4.05,4.05,0,0,1-3.26-.13Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 93.14px 292.282px;" id="elyfg87v7vjk"
                                class="animable"></path>
                            <path
                                d="M100.81,282.38a3.79,3.79,0,0,0,1.67-.27l3-1.33c.47-.21.73-.5.77-.8l-3.64,29.28c0,.3-.3.59-.78.79l-3,1.33a3.94,3.94,0,0,1-1.67.28Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 101.705px 295.823px;" id="elq8fo49lfzk"
                                class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 71.2768px 299.925px;">
                            <path d="M82.75,287.13v.78s-.31-.27-.32-.47S82.75,287.13,82.75,287.13Z" id="elef2i654w33"
                                class="animable" style="transform-origin: 82.5899px 287.52px;"></path>
                            <path
                                d="M82.14,286.93a.83.83,0,0,0,.61,1.06c.86.27,1.4,0,1.53.24s-4.08,2.66-4.08,2.66l.8-3.48Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 82.2415px 288.91px;"
                                id="el4odp4h8x1st" class="animable"></path>
                            <g id="elx0e4fx862qd">
                                <path
                                    d="M82.14,286.93a.83.83,0,0,0,.61,1.06c.86.27,1.4,0,1.53.24s-4.08,2.66-4.08,2.66l.8-3.48Z"
                                    style="opacity: 0.3; transform-origin: 82.2415px 288.91px;" class="animable"></path>
                            </g>
                            <path
                                d="M80.55,319.49v.05l-.42-.24-18-10.42,1.59-31.28c0-.5.27-.75.61-.55l.62.35,16.87,9.74,0,.15Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 71.975px 298.26px;" id="elo12kkpn8q9"
                                class="animable"></path>
                            <g id="elyiiccpiiv7">
                                <path
                                    d="M80.55,319.49v.05l-.42-.24-18-10.42,1.59-31.28c0-.5.27-.75.61-.55l.62.35,16.87,9.74,0,.15Z"
                                    style="opacity: 0.2; transform-origin: 71.975px 298.26px;" class="animable"></path>
                            </g>
                            <path d="M78.1,291.86l-.88-1,4.53-2.61c.68.51,1.2.79,1.82.53Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 80.395px 290.055px;" id="el34oed11y1ai"
                                class="animable"></path>
                            <path
                                d="M81.52,287.71l-16.71-9.64a1.14,1.14,0,0,0-1.05,0l-4.47,2.58,16.95,9.69a1.56,1.56,0,0,1,1.23.21c.5.41.47-.1.47-.1l3.81-2.2C81.44,287.83,81.52,287.71,81.52,287.71Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 70.52px 284.326px;"
                                id="elms3979d8mte" class="animable"></path>
                            <path
                                d="M77.78,291.65c-.18-.1-.25-.21-.17-.26l.14-.08c.16-.09,0-.33-.33-.52a1.17,1.17,0,0,0-.9-.2l-.14.08c-.08.05-.38-.05-.67-.21l.1,31.33.43.24a.35.35,0,0,0,.24,0l.15-.08c.15-.1.56,0,.9.19s.48.43.33.52l-.15.08c-.08,0,0,.16.17.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 76.8149px 306.73px;"
                                id="elfn1arweu1wh" class="animable"></path>
                            <g id="el3ofucvn9v0a">
                                <path
                                    d="M77.78,291.65c-.18-.1-.25-.21-.17-.26l.14-.08c.16-.09,0-.33-.33-.52a1.17,1.17,0,0,0-.9-.2l-.14.08c-.08.05-.38-.05-.67-.21l.1,31.33.43.24a.35.35,0,0,0,.24,0l.15-.08c.15-.1.56,0,.9.19s.48.43.33.52l-.15.08c-.08,0,0,.16.17.26Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 76.8149px 306.73px;"
                                    class="animable"></path>
                            </g>
                            <path d="M76.24,322v0l-.42-.24-18-10.42V281c0-.5.27-.75.61-.55l.61.35,17.24,9.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 67.05px 301.19px;" id="elql9k7vacebj"
                                class="animable"></path>
                            <g id="elmpdds3ekqt">
                                <path d="M76.24,322v0l-.42-.24-18-10.42V281c0-.5.27-.75.61-.55l.61.35,17.24,9.53Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 67.05px 301.19px;"
                                    class="animable"></path>
                            </g>
                            <path d="M77.58,322.81V291.44l1.12.45v31.27a1.08,1.08,0,0,1-.62-.07Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 78.14px 307.309px;"
                                id="el9r7kudzbkbt" class="animable"></path>
                            <g id="el1771iwkv5hi">
                                <path d="M77.58,322.81V291.44l1.12.45v31.27a1.08,1.08,0,0,1-.62-.07Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 78.14px 307.309px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M84.73,319.55a.13.13,0,0,1,0,.06s0,0,0,0a.32.32,0,0,1,0,.09l0,0a1.13,1.13,0,0,1-.1.13l-.12.14-.16.14-.1.07-.09.06a1.74,1.74,0,0,1-.2.13L80,322.69a3.79,3.79,0,0,1-1.31.47V291.89l6-3.61v31.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 81.7118px 305.72px;"
                                id="el07y3ock375sl" class="animable"></path>
                            <g id="elgk64xq5xl5l">
                                <g style="opacity: 0.7; transform-origin: 81.7118px 305.72px;" class="animable">
                                    <path
                                        d="M84.73,319.55a.13.13,0,0,1,0,.06s0,0,0,0a.32.32,0,0,1,0,.09l0,0a1.13,1.13,0,0,1-.1.13l-.12.14-.16.14-.1.07-.09.06a1.74,1.74,0,0,1-.2.13L80,322.69a3.79,3.79,0,0,1-1.31.47V291.89l6-3.61v31.26Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 81.7118px 305.72px;"
                                        id="elik4vmjh1oo" class="animable"></path>
                                </g>
                            </g>
                            <path d="M78.7,294.48v3.77a15.39,15.39,0,0,0,6-3.48V291A15.39,15.39,0,0,1,78.7,294.48Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 81.7px 294.625px;" id="elo70auj6spjt"
                                class="animable"></path>
                            <path d="M78.7,315.48v3.77a15.28,15.28,0,0,0,6-3.49V312A15.39,15.39,0,0,1,78.7,315.48Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 81.7px 315.625px;" id="elj19fljz924f"
                                class="animable"></path>
                            <path
                                d="M80,291.42l-.3-.52a2.8,2.8,0,0,1-1.3.41.77.77,0,0,0-.1-.51,1.66,1.66,0,0,0-.59-.54,2.3,2.3,0,0,0-.88-.3h-.06a.88.88,0,0,0-.54.1l-16-9.24-.54-.31-.69-.4a.36.36,0,0,0-.38,0l-.61.35a.35.35,0,0,1,.38,0h0l1.83,1.06,15.48,8.94a1.26,1.26,0,0,0,.67.22l.14-.09a.63.63,0,0,1,.32,0,2,2,0,0,1,.58.21c.34.2.49.44.33.53l-.14.08c-.08.05,0,.16.17.26l.3.18A2.52,2.52,0,0,0,80,291.42Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 69.005px 285.974px;"
                                id="el0gf0ffp866zj" class="animable"></path>
                            <g id="el4jnfxwnpvwk">
                                <path
                                    d="M80,291.42l-.3-.52a2.8,2.8,0,0,1-1.3.41.77.77,0,0,0-.1-.51,1.66,1.66,0,0,0-.59-.54,2.3,2.3,0,0,0-.88-.3h-.06a.88.88,0,0,0-.54.1l-16-9.24-.54-.31-.69-.4a.36.36,0,0,0-.38,0l-.61.35a.35.35,0,0,1,.38,0h0l1.83,1.06,15.48,8.94a1.26,1.26,0,0,0,.67.22l.14-.09a.63.63,0,0,1,.32,0,2,2,0,0,1,.58.21c.34.2.49.44.33.53l-.14.08c-.08.05,0,.16.17.26l.3.18A2.52,2.52,0,0,0,80,291.42Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 69.005px 285.974px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M79.71,290.9l3.88-2.24.16-.1.13-.09a0,0,0,0,1,0,0,1.78,1.78,0,0,1-1.45-.22,1.66,1.66,0,0,1-.57-.53.83.83,0,0,1-.09-.57l-.06,0-.11-.06-15.47-8.94-.89-.51-.25-.14-.75-.44a.37.37,0,0,0-.34,0l.17-.09.44-.26a.36.36,0,0,1,.32,0h0l.27.16.18.1.29.17.19.11.13.07.23.13,12.29,7.1,3.92,2.27c.28.16.45.32.38.38l0,0-.14.08c-.17.09,0,.33.31.53a.83.83,0,0,0,.78.11l.16-.1c.09-.05.2-.07.25,0l.09.05.19.11.24.14a.24.24,0,0,1,.13.28.08.08,0,0,1,0,0s0,.05,0,.08h0l0,0a.71.71,0,0,1-.1.14.74.74,0,0,1-.12.13,1.07,1.07,0,0,1-.16.14l-.1.08-.08.06-.2.12L80,291.42Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 74.3142px 284.046px;"
                                id="elek1j9fdfhut" class="animable"></path>
                            <g id="elq2efopdai27">
                                <path
                                    d="M79.71,290.9l3.88-2.24.16-.1.13-.09a0,0,0,0,1,0,0,1.78,1.78,0,0,1-1.45-.22,1.66,1.66,0,0,1-.57-.53.83.83,0,0,1-.09-.57l-.06,0-.11-.06-15.47-8.94-.89-.51-.25-.14-.75-.44a.37.37,0,0,0-.34,0l.17-.09.44-.26a.36.36,0,0,1,.32,0h0l.27.16.18.1.29.17.19.11.13.07.23.13,12.29,7.1,3.92,2.27c.28.16.45.32.38.38l0,0-.14.08c-.17.09,0,.33.31.53a.83.83,0,0,0,.78.11l.16-.1c.09-.05.2-.07.25,0l.09.05.19.11.24.14a.24.24,0,0,1,.13.28.08.08,0,0,1,0,0s0,.05,0,.08h0l0,0a.71.71,0,0,1-.1.14.74.74,0,0,1-.12.13,1.07,1.07,0,0,1-.16.14l-.1.08-.08.06-.2.12L80,291.42Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 74.3142px 284.046px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 62.1114px 305.842px;">
                            <path d="M55.12,283.58l0,.88-.5-.53A.55.55,0,0,1,55.12,283.58Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 54.87px 284.02px;" id="elx134d1xwgfk"
                                class="animable"></path>
                            <g id="elewnkosm0hj">
                                <path d="M55.12,283.58l0,.88-.5-.53A.55.55,0,0,1,55.12,283.58Z"
                                    style="opacity: 0.5; transform-origin: 54.87px 284.02px;" class="animable"></path>
                            </g>
                            <path
                                d="M74.32,296.18a1.72,1.72,0,0,0-.79-1.36L55.86,284.61,56.07,315v.72l17.46,10.33c.44.24.79,0,.79-.46Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 65.09px 305.377px;" id="elityklirrkw"
                                class="animable"></path>
                            <path
                                d="M54.52,300v-7.11l-4-2.31v-5.36l2.69-1.55c.35-.2,1.08-.09,1.08.1a4.75,4.75,0,0,0,.71.61,6.73,6.73,0,0,0,1.46.63l.22,16.23Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 53.6px 292.402px;" id="el5nve5tdd6jh"
                                class="animable"></path>
                            <g id="el8meruk868ig">
                                <path
                                    d="M54.52,300v-7.11l-4-2.31v-5.36l2.69-1.55c.35-.2,1.08-.09,1.08.1a4.75,4.75,0,0,0,.71.61,6.73,6.73,0,0,0,1.46.63l.22,16.23Z"
                                    style="opacity: 0.15; transform-origin: 53.6px 292.402px;" class="animable"></path>
                            </g>
                            <path d="M52.12,287.19,55,285.51l-.05,0a1.66,1.66,0,0,1-.59-.54.81.81,0,0,1-.14-.48l-3.44,2Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 52.89px 285.84px;" id="ellx4nejuecyh"
                                class="animable"></path>
                            <path
                                d="M56.47,285.68a1,1,0,0,1-.61.1,1.94,1.94,0,0,1-.33-.07l-.1,0-.11-.05-.1,0-.19-.09-2.9,1.67.87.5h0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 54.3px 286.655px;" id="elaos3fegk5bb"
                                class="animable"></path>
                            <g id="eltkc0453ito">
                                <path d="M53.21,283.62c.35-.2,1.08-.09,1.08.1h0l0,.74L52,285.73H50.8l-.28-.23v-.33Z"
                                    style="opacity: 0.4; transform-origin: 52.405px 284.622px;" class="animable"></path>
                            </g>
                            <path d="M70.22,297.64l3.32-1.92a1,1,0,0,0-.37-.39l-1.94-1.12-14.76-8.53-3.49,2Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 63.26px 291.66px;" id="el1u1vhuinzm7"
                                class="animable"></path>
                            <path d="M70.66,327.23l2.51-1.45a1.15,1.15,0,0,0,.53-.91V296.24a1,1,0,0,0-.16-.52l-3,1.7Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 72.12px 311.475px;"
                                id="els9p07krbezf" class="animable"></path>
                            <path
                                d="M51.75,317.54V287l.3-.18c.17-.09.1-.37-.24-.56a1,1,0,0,0-1-.15l-.31.14v31.26a.49.49,0,0,0,.16-.05l.14-.08A1.14,1.14,0,0,1,51.75,317.54Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 51.3195px 301.789px;"
                                id="elblk09qrbkg9" class="animable"></path>
                            <g id="elr1j6if9v96f">
                                <path
                                    d="M51.75,317.54V287l.3-.18c.17-.09.1-.37-.24-.56a1,1,0,0,0-1-.15l-.31.14v31.26a.49.49,0,0,0,.16-.05l.14-.08A1.14,1.14,0,0,1,51.75,317.54Z"
                                    style="opacity: 0.1; transform-origin: 51.3195px 301.789px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M69.43,297.19l-17.28-10c-.21-.13-.39-.26-.4-.36v30.69a3.48,3.48,0,0,1,0,.35,1,1,0,0,0,.53.66l17.15,9.9c.43.25.79.05.79-.45V298.55A1.72,1.72,0,0,0,69.43,297.19Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 60.985px 307.684px;"
                                id="elxiwbur3zngj" class="animable"></path>
                            <path
                                d="M50.53,317.49V286.23a.16.16,0,0,1-.09,0l-.09-.06-.19-.11-.24-.14a.24.24,0,0,1-.13-.27s0,0,0,0a.5.5,0,0,1,.05-.13l.1-.14.12-.13.16-.14.1-.07.09-.06a1,1,0,0,1,.2-.13l-.66.38a1.63,1.63,0,0,0-.66,1.29v29.45a1.56,1.56,0,0,0,.62,1.26l.32.19h0l.14.08h0A.33.33,0,0,0,50.53,317.49Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 49.95px 301.178px;" id="elfel1pdnsaj"
                                class="animable"></path>
                            <path
                                d="M73.53,294.82l-1.06-.62-16-9.24a.94.94,0,0,1-.6.1,2.3,2.3,0,0,1-.88-.3,1.72,1.72,0,0,1-.59-.53.8.8,0,0,1-.1-.51,2.75,2.75,0,0,0-1.3.4l-.3-.52a2.46,2.46,0,0,1,1.93-.4l.3.17c.18.1.25.22.17.26l-.14.09c-.16.09,0,.32.33.52a1.2,1.2,0,0,0,.9.19l.14-.08c.08-.05.38,0,.67.22l15.48,8.93,1.67,1h0a1.68,1.68,0,0,1,.56.59l-.61.35A1.52,1.52,0,0,0,73.53,294.82Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 63.705px 289.294px;"
                                id="ela219clyg7op" class="animable"></path>
                            <g id="elgyswaiprg3n">
                                <path
                                    d="M73.53,294.82l-1.06-.62-16-9.24a.94.94,0,0,1-.6.1,2.3,2.3,0,0,1-.88-.3,1.72,1.72,0,0,1-.59-.53.8.8,0,0,1-.1-.51,2.75,2.75,0,0,0-1.3.4l-.3-.52a2.46,2.46,0,0,1,1.93-.4l.3.17c.18.1.25.22.17.26l-.14.09c-.16.09,0,.32.33.52a1.2,1.2,0,0,0,.9.19l.14-.08c.08-.05.38,0,.67.22l15.48,8.93,1.67,1h0a1.68,1.68,0,0,1,.56.59l-.61.35A1.52,1.52,0,0,0,73.53,294.82Z"
                                    style="opacity: 0.3; transform-origin: 63.705px 289.294px;" class="animable"></path>
                            </g>
                            <path
                                d="M69.44,297.19h0l-1.07-.62-12.29-7.1-3.92-2.26c-.28-.16-.45-.33-.38-.39h0l.15-.09c.17-.1,0-.34-.31-.54a.82.82,0,0,0-.77-.11l-.17.1a.3.3,0,0,1-.25,0l-.09-.06-.19-.11-.24-.14a.24.24,0,0,1-.13-.27s0,0,0,0a.32.32,0,0,1,0-.09l0,0,.1-.14.12-.13.16-.14.1-.07.09-.06a1,1,0,0,1,.2-.13l2.08-1.2.3.52-2.08,1.21-.16.1-.12.08h0a1.74,1.74,0,0,1,1.45.23,1.62,1.62,0,0,1,.57.52.91.91,0,0,1,.1.57l.05,0,.11.06,15.47,8.94,1.68,1h0a1.59,1.59,0,0,1,.54.58l-.6.35A1.62,1.62,0,0,0,69.44,297.19Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 60.157px 290.72px;"
                                id="el5ego2l5uh96" class="animable"></path>
                            <g id="elyrkvlp4p06">
                                <path
                                    d="M69.44,297.19h0l-1.07-.62-12.29-7.1-3.92-2.26c-.28-.16-.45-.33-.38-.39h0l.15-.09c.17-.1,0-.34-.31-.54a.82.82,0,0,0-.77-.11l-.17.1a.3.3,0,0,1-.25,0l-.09-.06-.19-.11-.24-.14a.24.24,0,0,1-.13-.27s0,0,0,0a.32.32,0,0,1,0-.09l0,0,.1-.14.12-.13.16-.14.1-.07.09-.06a1,1,0,0,1,.2-.13l2.08-1.2.3.52-2.08,1.21-.16.1-.12.08h0a1.74,1.74,0,0,1,1.45.23,1.62,1.62,0,0,1,.57.52.91.91,0,0,1,.1.57l.05,0,.11.06,15.47,8.94,1.68,1h0a1.59,1.59,0,0,1,.54.58l-.6.35A1.62,1.62,0,0,0,69.44,297.19Z"
                                    style="opacity: 0.3; transform-origin: 60.157px 290.72px;" class="animable"></path>
                            </g>
                            <path
                                d="M70,328.51l.61-.35a.57.57,0,0,0,.24-.5h0V298.2h0a1.79,1.79,0,0,0-.23-.78l-.61.35a1.66,1.66,0,0,1,.23.78v1.23h0V328A.52.52,0,0,1,70,328.51Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 70.4255px 312.965px;"
                                id="elym05jtilzg" class="animable"></path>
                            <g id="el1ookicpa6l9">
                                <path
                                    d="M70,328.51l.61-.35a.57.57,0,0,0,.24-.5h0V298.2h0a1.79,1.79,0,0,0-.23-.78l-.61.35a1.66,1.66,0,0,1,.23.78v1.23h0V328A.52.52,0,0,1,70,328.51Z"
                                    style="opacity: 0.2; transform-origin: 70.4255px 312.965px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M74.08,326.14l.62-.35a.54.54,0,0,0,.23-.5h0V295.83h0a1.71,1.71,0,0,0-.23-.77l-.61.35a1.6,1.6,0,0,1,.23.77v1.23h0v28.22A.52.52,0,0,1,74.08,326.14Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 74.5065px 310.6px;"
                                id="elt7fiquw22in" class="animable"></path>
                            <g id="elhvg9p50e5s">
                                <path
                                    d="M74.08,326.14l.62-.35a.54.54,0,0,0,.23-.5h0V295.83h0a1.71,1.71,0,0,0-.23-.77l-.61.35a1.6,1.6,0,0,1,.23.77v1.23h0v28.22A.52.52,0,0,1,74.08,326.14Z"
                                    style="opacity: 0.2; transform-origin: 74.5065px 310.6px;" class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 54.7745px 313.51px;">
                            <polygon points="51.43 292.99 68.06 302.72 63.5 331.94 46.87 322.22 51.43 292.99"
                                style="fill: rgb(186, 104, 200); transform-origin: 57.465px 312.465px;"
                                id="eltl4isuth3rf" class="animable"></polygon>
                            <path
                                d="M67.4,303.17l-16.1-9.35A8.69,8.69,0,0,1,47,295.49l16,9.31A20.93,20.93,0,0,0,67.4,303.17Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 57.2px 299.31px;" id="eluepaulcfdi"
                                class="animable"></path>
                            <path
                                d="M61.32,304.67a4.26,4.26,0,0,0,3.35.16l3.16-1.3c1-.41,1.11-1.14.25-1.64l-15.87-9.22-.78.32L67,302.11c.51.3.44.74-.15,1l-2.94,1.2a2.58,2.58,0,0,1-2-.1l-15.59-9.1-.89.36Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 57.0445px 298.884px;"
                                id="el570nem98369" class="animable"></path>
                            <g id="el206yildlxuy">
                                <path
                                    d="M61.32,304.67a4.26,4.26,0,0,0,3.35.16l3.16-1.3c1-.41,1.11-1.14.25-1.64l-15.87-9.22-.78.32L67,302.11c.51.3.44.74-.15,1l-2.94,1.2a2.58,2.58,0,0,1-2-.1l-15.59-9.1-.89.36Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 57.0445px 298.884px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M45.45,295.45l-4.56,29.23,15.87,9.21a4.26,4.26,0,0,0,3.35.16l3.16-1.3c.49-.2.77-.48.82-.78l4.56-29.23c-.05.3-.33.58-.82.79l-3.16,1.3a4.26,4.26,0,0,1-3.35-.16Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 54.77px 314.884px;"
                                id="elokvt5v8v1j8" class="animable"></path>
                            <g id="ell2dis3vlcjn">
                                <path
                                    d="M45.45,295.45l-4.56,29.23,15.87,9.21a4.26,4.26,0,0,0,3.35.16l3.16-1.3c.49-.2.77-.48.82-.78l4.56-29.23c-.05.3-.33.58-.82.79l-3.16,1.3a4.26,4.26,0,0,1-3.35-.16Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 54.77px 314.884px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M62.94,305.09a4.07,4.07,0,0,0,1.73-.26l3.16-1.3c.49-.21.77-.49.82-.79L64.09,332c0,.3-.33.58-.82.78l-3.16,1.3a4.07,4.07,0,0,1-1.73.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 63.515px 318.545px;"
                                id="el4tu7iwwg54k" class="animable"></path>
                            <g id="el89npt1iij7">
                                <path
                                    d="M62.94,305.09a4.07,4.07,0,0,0,1.73-.26l3.16-1.3c.49-.21.77-.49.82-.79L64.09,332c0,.3-.33.58-.82.78l-3.16,1.3a4.07,4.07,0,0,1-1.73.26Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 63.515px 318.545px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <polygon
                            points="150.28 232.69 116.62 213.25 19.64 269.26 19.64 272.04 53.3 291.47 150.28 235.46 150.28 232.69"
                            style="fill: rgb(186, 104, 200); transform-origin: 84.96px 252.36px;" id="el5ew8j795crl"
                            class="animable"></polygon>
                        <g id="elmeexv2930j">
                            <polygon
                                points="150.28 232.69 116.62 213.25 19.64 269.26 19.64 272.04 53.3 291.47 150.28 235.46 150.28 232.69"
                                style="fill: rgb(255, 255, 255); opacity: 0.75; transform-origin: 84.96px 252.36px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="53.3 288.7 150.28 232.69 116.62 213.25 19.64 269.26 53.3 288.7"
                            style="fill: rgb(186, 104, 200); transform-origin: 84.96px 250.975px;" id="eld3x7su1gj75"
                            class="animable"></polygon>
                        <g id="el5yftu0szvwb">
                            <polygon points="53.3 288.7 150.28 232.69 116.62 213.25 19.64 269.26 53.3 288.7"
                                style="fill: rgb(255, 255, 255); opacity: 0.85; transform-origin: 84.96px 250.975px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="53.3 288.7 53.3 291.47 19.64 272.04 19.64 269.26 53.3 288.7"
                            style="fill: rgb(186, 104, 200); transform-origin: 36.47px 280.365px;" id="elvwolkvgtdri"
                            class="animable"></polygon>
                        <g id="eledayalwtc9l">
                            <polygon points="53.3 288.7 53.3 291.47 19.64 272.04 19.64 269.26 53.3 288.7"
                                style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 36.47px 280.365px;"
                                class="animable"></polygon>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 132.815px 210.745px;">
                            <polygon points="127.11 187.21 144.6 197.44 144.69 230.97 125.84 221.5 127.11 187.21"
                                style="fill: rgb(186, 104, 200); transform-origin: 135.265px 209.09px;"
                                id="elj3dik3ww7oa" class="animable"></polygon>
                            <g id="el500bvjsiz52">
                                <polygon points="127.11 187.21 144.6 197.44 144.69 230.97 125.84 221.5 127.11 187.21"
                                    style="opacity: 0.35; transform-origin: 135.265px 209.09px;" class="animable">
                                </polygon>
                            </g>
                            <path
                                d="M144,198l-16.93-9.83A12.59,12.59,0,0,1,121.9,191l16.78,9.79A40.28,40.28,0,0,0,144,198Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 132.95px 194.48px;" id="elbpxxcw90ba"
                                class="animable"></path>
                            <path
                                d="M137.06,200.77a3.61,3.61,0,0,0,3.25,0l4.2-2.4a1,1,0,0,0,0-1.88l-16.68-9.69-.71.4,16.41,9.59c.54.32.54.82,0,1.13l-4,2.27a2.16,2.16,0,0,1-1.95,0l-16.41-9.57-.8.46Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 132.769px 193.978px;"
                                id="el53oicvfz5qh" class="animable"></path>
                            <g id="el1rkrtuaae48">
                                <path
                                    d="M137.06,200.77a3.61,3.61,0,0,0,3.25,0l4.2-2.4a1,1,0,0,0,0-1.88l-16.68-9.69-.71.4,16.41,9.59c.54.32.54.82,0,1.13l-4,2.27a2.16,2.16,0,0,1-1.95,0l-16.41-9.57-.8.46Z"
                                    style="opacity: 0.2; transform-origin: 132.769px 193.978px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M120.38,191.08l.08,33.53,16.69,9.69a3.59,3.59,0,0,0,3.24,0l4.2-2.4a1.14,1.14,0,0,0,.67-.94l-.08-33.53a1.16,1.16,0,0,1-.67.94l-4.2,2.4a3.58,3.58,0,0,1-3.25,0Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 132.82px 212.883px;"
                                id="ely0s6o3ubkl" class="animable"></path>
                            <g id="elv3bqz5k3odn">
                                <path
                                    d="M120.38,191.08l.08,33.53,16.69,9.69a3.59,3.59,0,0,0,3.24,0l4.2-2.4a1.14,1.14,0,0,0,.67-.94l-.08-33.53a1.16,1.16,0,0,1-.67.94l-4.2,2.4a3.58,3.58,0,0,1-3.25,0Z"
                                    style="opacity: 0.3; transform-origin: 132.82px 212.883px;" class="animable"></path>
                            </g>
                            <path
                                d="M138.68,201.16a3.22,3.22,0,0,0,1.63-.38l4.2-2.4a1.16,1.16,0,0,0,.67-.94l.08,33.53a1.14,1.14,0,0,1-.67.94l-4.2,2.4a3.37,3.37,0,0,1-1.62.38Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 141.97px 216.065px;"
                                id="elzg2rfv9t3v" class="animable"></path>
                            <g id="elatpucifprm6">
                                <path
                                    d="M138.68,201.16a3.22,3.22,0,0,0,1.63-.38l4.2-2.4a1.16,1.16,0,0,0,.67-.94l.08,33.53a1.14,1.14,0,0,1-.67.94l-4.2,2.4a3.37,3.37,0,0,1-1.62.38Z"
                                    style="opacity: 0.1; transform-origin: 141.97px 216.065px;" class="animable"></path>
                            </g>
                            <path
                                d="M138.68,205.63V207a14.93,14.93,0,0,0,6.51-3.72v-1.33A14.93,14.93,0,0,1,138.68,205.63Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 141.935px 204.475px;"
                                id="el01s9y4grssjr" class="animable"></path>
                            <path d="M138.74,228.3v1.33a14.93,14.93,0,0,0,6.51-3.72v-1.33A14.93,14.93,0,0,1,138.74,228.3Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 141.995px 227.105px;" id="ell5kxzvoixh"
                                class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 125.505px 218.778px;">
                            <polygon points="121.68 198.28 138.06 207.85 134.42 237.13 118.03 227.55 121.68 198.28"
                                id="elhhe86rlzes" class="animable" style="transform-origin: 128.045px 217.705px;">
                            </polygon>
                            <path
                                d="M137.44,208.32l-15.86-9.21a8.19,8.19,0,0,1-4.1,1.71L133.2,210A19.64,19.64,0,0,0,137.44,208.32Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 127.46px 204.555px;"
                                id="elg4nlh9rs0d7" class="animable"></path>
                            <path
                                d="M131.58,209.87a4,4,0,0,0,3.25.13l3-1.33c.95-.42,1-1.15.2-1.64L122.43,198l-.75.33,15.37,9c.5.29.45.73-.12,1l-2.82,1.22a2.4,2.4,0,0,1-2-.08l-15.36-9-.85.37Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 127.245px 204.142px;" id="elq9caz244bt"
                                class="animable"></path>
                            <path
                                d="M116,200.79l-3.65,29.28,15.63,9.08a4.09,4.09,0,0,0,3.26.12l3-1.32c.47-.21.73-.5.77-.8l3.65-29.27c0,.29-.3.58-.78.79l-3,1.33a4,4,0,0,1-3.25-.13Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 125.505px 220.171px;" id="elxjkf5yec2a"
                                class="animable"></path>
                            <path
                                d="M133.16,210.28a3.94,3.94,0,0,0,1.67-.28l3-1.33c.48-.21.74-.5.78-.79L135,237.15c0,.3-.3.59-.77.8l-3,1.32a3.94,3.94,0,0,1-1.67.28Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 134.085px 223.718px;"
                                id="el0806rntf95h" class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 118.92px 224.303px;">
                            <polygon points="115.41 205.34 130.59 214.22 127.22 241.36 112.03 232.48 115.41 205.34"
                                style="fill: rgb(186, 104, 200); transform-origin: 121.31px 223.35px;"
                                id="elgdrazkl5rlh" class="animable"></polygon>
                            <g id="el2zfdi6b0pht">
                                <polygon points="115.41 205.34 130.59 214.22 127.22 241.36 112.03 232.48 115.41 205.34"
                                    style="opacity: 0.35; transform-origin: 121.31px 223.35px;" class="animable">
                                </polygon>
                            </g>
                            <path
                                d="M130,214.65l-14.71-8.54a7.59,7.59,0,0,1-3.8,1.58l14.58,8.5A17.78,17.78,0,0,0,130,214.65Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 120.745px 211.15px;"
                                id="elv93q58ck0k" class="animable"></path>
                            <path
                                d="M124.58,216.09a3.77,3.77,0,0,0,3,.11l2.81-1.23c.88-.38,1-1.06.19-1.52L116.1,205l-.69.31,14.25,8.33c.46.27.41.68-.12.91l-2.61,1.13a2.27,2.27,0,0,1-1.81-.07l-14.24-8.32-.79.35Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 120.607px 210.73px;"
                                id="eljyrkp24i65f" class="animable"></path>
                            <g id="elm0zwwq919uk">
                                <path
                                    d="M124.58,216.09a3.77,3.77,0,0,0,3,.11l2.81-1.23c.88-.38,1-1.06.19-1.52L116.1,205l-.69.31,14.25,8.33c.46.27.41.68-.12.91l-2.61,1.13a2.27,2.27,0,0,1-1.81-.07l-14.24-8.32-.79.35Z"
                                    style="opacity: 0.2; transform-origin: 120.607px 210.73px;" class="animable"></path>
                            </g>
                            <path
                                d="M110.09,207.67l-3.38,27.14,14.49,8.42a3.81,3.81,0,0,0,3,.12l2.81-1.23c.44-.2.68-.46.72-.74l3.38-27.14c0,.27-.28.54-.72.73l-2.81,1.24a3.81,3.81,0,0,1-3-.12Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 118.91px 225.636px;"
                                id="elpo3rbjq97g" class="animable"></path>
                            <g id="elatr874w5gxj">
                                <path
                                    d="M110.09,207.67l-3.38,27.14,14.49,8.42a3.81,3.81,0,0,0,3,.12l2.81-1.23c.44-.2.68-.46.72-.74l3.38-27.14c0,.27-.28.54-.72.73l-2.81,1.24a3.81,3.81,0,0,1-3-.12Z"
                                    style="opacity: 0.3; transform-origin: 118.91px 225.636px;" class="animable"></path>
                            </g>
                            <path
                                d="M126.05,216.46a3.69,3.69,0,0,0,1.55-.25l2.81-1.24c.44-.19.68-.46.72-.73l-3.38,27.14c0,.28-.28.54-.72.74l-2.81,1.23a3.69,3.69,0,0,1-1.55.25Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 126.9px 228.923px;" id="eljcsw0ybbb9"
                                class="animable"></path>
                            <g id="elnn5vgdjyyb">
                                <path
                                    d="M126.05,216.46a3.69,3.69,0,0,0,1.55-.25l2.81-1.24c.44-.19.68-.46.72-.73l-3.38,27.14c0,.28-.28.54-.72.74l-2.81,1.23a3.69,3.69,0,0,1-1.55.25Z"
                                    style="opacity: 0.1; transform-origin: 126.9px 228.923px;" class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 102.65px 228.603px;">
                            <path d="M114.1,215.82v.79s-.31-.28-.33-.48S114.1,215.82,114.1,215.82Z" id="el2b1r17gjff7"
                                class="animable" style="transform-origin: 113.935px 216.215px;"></path>
                            <path
                                d="M113.5,215.63a.82.82,0,0,0,.61,1.05c.86.27,1.39,0,1.52.24s-4.07,2.67-4.07,2.67l.8-3.48Z"
                                id="elttey4jgb6i" class="animable" style="transform-origin: 113.596px 217.61px;">
                            </path>
                            <path
                                d="M111.91,248.19v.05l-.42-.25-18-10.41L95,206.3c0-.5.27-.75.61-.55l.62.35,16.86,9.74V216Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 103.29px 226.96px;" id="elhg1oz7tdea9"
                                class="animable"></path>
                            <path d="M109.46,220.56l-.89-1L113.1,217c.69.51,1.21.79,1.82.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 111.745px 218.78px;"
                                id="elh501nhccuas" class="animable"></path>
                            <path
                                d="M112.88,216.41l-16.71-9.65a1.21,1.21,0,0,0-1,0l-4.47,2.58,16.94,9.7a1.58,1.58,0,0,1,1.24.21c.49.4.47-.11.47-.11l3.8-2.19C112.79,216.53,112.88,216.41,112.88,216.41Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 101.925px 213.028px;"
                                id="elycq5joyd1ym" class="animable"></path>
                            <path
                                d="M109.13,220.35c-.17-.1-.24-.22-.16-.26l.14-.08c.16-.1,0-.33-.33-.53a1.2,1.2,0,0,0-.9-.19l-.14.08c-.08,0-.38-.05-.67-.22l.1,31.33.42.25a.43.43,0,0,0,.25,0l.14-.08a1.2,1.2,0,0,1,.9.19c.35.2.49.43.33.53l-.14.08c-.08,0,0,.16.17.26Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 108.173px 235.43px;" id="elqfdtwod16rg"
                                class="animable"></path>
                            <path d="M107.59,250.68v0l-.42-.25-18-10.41V209.71c0-.51.28-.75.62-.56l.61.36L107.59,219Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 98.38px 229.883px;" id="elnw069ubtqo"
                                class="animable"></path>
                            <path d="M108.94,251.5V220.14l1.12.45v31.26a1,1,0,0,1-.62-.06Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 109.5px 236.007px;" id="ela4k2r623la4"
                                class="animable"></path>
                            <path
                                d="M116.09,248.25s0,0,0,.06a.08.08,0,0,1,0,0l0,.08s0,0,0,0a1.13,1.13,0,0,1-.1.13l-.13.14-.16.13a.27.27,0,0,1-.1.08l-.08.06-.2.12-3.88,2.25a3.75,3.75,0,0,1-1.31.46V220.59l6-3.62v31.27Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 113.13px 234.365px;" id="el7j7oembqfuk"
                                class="animable"></path>
                            <path d="M110.06,224.18v3.76a15.15,15.15,0,0,0,6-3.48v-3.77A15.28,15.28,0,0,1,110.06,224.18Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 113.06px 224.315px;"
                                id="elcsom0wno4t" class="animable"></path>
                            <g id="eltycoat1gghm">
                                <path
                                    d="M110.06,224.18v3.76a15.15,15.15,0,0,0,6-3.48v-3.77A15.28,15.28,0,0,1,110.06,224.18Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 113.06px 224.315px;"
                                    class="animable"></path>
                            </g>
                            <path d="M110.06,229.34v1.41a15.28,15.28,0,0,0,6-3.49v-1.4A15.39,15.39,0,0,1,110.06,229.34Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 113.06px 228.305px;"
                                id="el2c4h9nhgliv" class="animable"></path>
                            <g id="elcpk6jyf36d6">
                                <path
                                    d="M110.06,229.34v1.41a15.28,15.28,0,0,0,6-3.49v-1.4A15.39,15.39,0,0,1,110.06,229.34Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 113.06px 228.305px;"
                                    class="animable"></path>
                            </g>
                            <path d="M110.06,245.38v1.41a15.39,15.39,0,0,0,6-3.48V241.9A15.27,15.27,0,0,1,110.06,245.38Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 113.06px 244.345px;"
                                id="el8lfrlvvjqc" class="animable"></path>
                            <g id="elr7hsomzzfwk">
                                <path
                                    d="M110.06,245.38v1.41a15.39,15.39,0,0,0,6-3.48V241.9A15.27,15.27,0,0,1,110.06,245.38Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 113.06px 244.345px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M111.37,220.12l-.31-.52a2.75,2.75,0,0,1-1.29.4.81.81,0,0,0-.11-.51,1.61,1.61,0,0,0-.58-.53,2.3,2.3,0,0,0-.88-.3h-.07a1,1,0,0,0-.54.11l-16-9.24-.54-.32-.7-.4a.36.36,0,0,0-.37,0l-.62.35a.39.39,0,0,1,.39,0h0l1.83,1.06,15.48,8.93c.29.17.59.27.67.22l.14-.08a.47.47,0,0,1,.32,0,1.78,1.78,0,0,1,.58.21c.34.2.49.43.33.52l-.14.09c-.08,0,0,.16.16.26l.31.17A2.47,2.47,0,0,0,111.37,220.12Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 100.365px 214.674px;" id="eltq4p2rk7akl"
                                class="animable"></path>
                            <path
                                d="M111.06,219.6l3.89-2.25.16-.1.12-.09h0a1.74,1.74,0,0,1-1.45-.22,1.62,1.62,0,0,1-.57-.52.91.91,0,0,1-.1-.57l0,0-.11-.06L97.5,206.81l-.89-.51-.26-.15-.75-.43a.35.35,0,0,0-.33,0l.17-.1.44-.25a.36.36,0,0,1,.32,0h0l.28.16.17.09.3.18.19.1.13.08.23.13,12.29,7.1,3.92,2.26c.28.16.45.33.38.39h0l-.14.08c-.17.1,0,.34.31.53a.8.8,0,0,0,.77.12l.17-.1a.3.3,0,0,1,.25,0l.09.06.19.11.24.13a.26.26,0,0,1,.13.28s0,0,0,0l0,.09h0s0,0,0,0l-.1.14-.12.13-.16.14-.1.07-.09.06-.2.13-3.88,2.24Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 105.688px 212.701px;" id="el8fg1sdeeirk"
                                class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 93.8859px 234.507px;">
                            <path d="M86.9,212.26l0,.88-.5-.53A.55.55,0,0,1,86.9,212.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 86.65px 212.7px;" id="eln8sqmrz3ex"
                                class="animable"></path>
                            <g id="eln30bcry2jl">
                                <path d="M86.9,212.26l0,.88-.5-.53A.55.55,0,0,1,86.9,212.26Z"
                                    style="opacity: 0.5; transform-origin: 86.65px 212.7px;" class="animable"></path>
                            </g>
                            <path
                                d="M106.1,224.86a1.74,1.74,0,0,0-.78-1.36L87.64,213.29l.21,30.43v.71l17.46,10.33c.44.25.79.05.79-.45Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 96.87px 234.079px;"
                                id="elghpax8ccjt4" class="animable"></path>
                            <path
                                d="M86.3,228.63v-7.12l-4-2.3v-5.36L85,212.3c.35-.2,1.08-.1,1.08.09a4.42,4.42,0,0,0,.71.62,6.73,6.73,0,0,0,1.46.63l.22,16.23Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 85.385px 221.03px;" id="elk7pgs8y2sr"
                                class="animable"></path>
                            <g id="el3d79y6w8kw2">
                                <path
                                    d="M86.3,228.63v-7.12l-4-2.3v-5.36L85,212.3c.35-.2,1.08-.1,1.08.09a4.42,4.42,0,0,0,.71.62,6.73,6.73,0,0,0,1.46.63l.22,16.23Z"
                                    style="opacity: 0.15; transform-origin: 85.385px 221.03px;" class="animable"></path>
                            </g>
                            <path d="M83.9,215.87l2.91-1.68,0,0a1.55,1.55,0,0,1-.58-.54.78.78,0,0,1-.15-.49l-3.44,2Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 84.725px 214.515px;" id="el9hzf9c6yg9e"
                                class="animable"></path>
                            <path
                                d="M88.25,214.36a1,1,0,0,1-.61.1,1.94,1.94,0,0,1-.33-.07l-.09,0-.12,0-.1,0-.19-.09-2.9,1.67.87.5h0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 86.08px 215.385px;" id="eljongmpqom3"
                                class="animable"></path>
                            <g id="el2jctb3j22ys">
                                <path d="M85,212.3c.35-.2,1.08-.1,1.08.09h0l0,.74-2.22,1.28H82.58l-.27-.24v-.32Z"
                                    style="opacity: 0.4; transform-origin: 84.195px 213.3px;" class="animable"></path>
                            </g>
                            <path d="M102,226.32l3.32-1.92A1,1,0,0,0,105,224L103,222.89l-14.77-8.53-3.49,2Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 95.03px 220.34px;" id="elyi6z8ghd7k9"
                                class="animable"></path>
                            <path d="M102.44,255.91l2.51-1.45a1.18,1.18,0,0,0,.53-.91V224.92a1,1,0,0,0-.16-.52l-2.94,1.7Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 103.93px 240.155px;"
                                id="el50zmpm0i29" class="animable"></path>
                            <path
                                d="M83.54,246.21V215.66l.3-.18c.17-.1.1-.37-.24-.57a1,1,0,0,0-1-.14l-.3.14v31.25a.32.32,0,0,0,.16,0l.14-.08A1.19,1.19,0,0,1,83.54,246.21Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 83.1145px 230.452px;"
                                id="elslwh26d455q" class="animable"></path>
                            <g id="elkizqi1rq8af">
                                <path
                                    d="M83.54,246.21V215.66l.3-.18c.17-.1.1-.37-.24-.57a1,1,0,0,0-1-.14l-.3.14v31.25a.32.32,0,0,0,.16,0l.14-.08A1.19,1.19,0,0,1,83.54,246.21Z"
                                    style="opacity: 0.1; transform-origin: 83.1145px 230.452px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M101.21,225.86l-17.28-10c-.21-.14-.39-.26-.4-.36v31a1,1,0,0,0,.52.66l17.15,9.9c.44.25.79.05.79-.45V227.23A1.76,1.76,0,0,0,101.21,225.86Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 92.76px 236.334px;" id="el6gm6wya5ib"
                                class="animable"></path>
                            <path
                                d="M82.31,246.16V214.91l-.1,0-.09,0-.19-.11-.24-.14a.25.25,0,0,1-.13-.28.08.08,0,0,1,0,0,.61.61,0,0,1,.05-.12.71.71,0,0,1,.1-.14.8.8,0,0,1,.13-.13l.15-.14.1-.08.09,0a1.37,1.37,0,0,1,.2-.13l-.66.38a1.66,1.66,0,0,0-.66,1.29V244.6a1.56,1.56,0,0,0,.62,1.26l.32.19h0l.14.08h0A.24.24,0,0,0,82.31,246.16Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 81.72px 229.902px;"
                                id="el2gr4o3b4x2y" class="animable"></path>
                            <path
                                d="M105.31,223.5l-1.06-.62-16-9.24a1,1,0,0,1-.6.1,2.3,2.3,0,0,1-.88-.3,1.72,1.72,0,0,1-.59-.53.81.81,0,0,1-.1-.52,2.8,2.8,0,0,0-1.3.41l-.3-.52a2.52,2.52,0,0,1,1.93-.41l.3.18c.18.1.25.21.17.26l-.14.08c-.16.09,0,.33.33.53a1.2,1.2,0,0,0,.9.19l.14-.09a1.26,1.26,0,0,1,.67.22l15.48,8.94,1.67,1h0a1.56,1.56,0,0,1,.56.58l-.61.35A1.56,1.56,0,0,0,105.31,223.5Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 95.485px 217.967px;"
                                id="el7fe82da21dx" class="animable"></path>
                            <g id="el22jx0e42as3">
                                <path
                                    d="M105.31,223.5l-1.06-.62-16-9.24a1,1,0,0,1-.6.1,2.3,2.3,0,0,1-.88-.3,1.72,1.72,0,0,1-.59-.53.81.81,0,0,1-.1-.52,2.8,2.8,0,0,0-1.3.41l-.3-.52a2.52,2.52,0,0,1,1.93-.41l.3.18c.18.1.25.21.17.26l-.14.08c-.16.09,0,.33.33.53a1.2,1.2,0,0,0,.9.19l.14-.09a1.26,1.26,0,0,1,.67.22l15.48,8.94,1.67,1h0a1.56,1.56,0,0,1,.56.58l-.61.35A1.56,1.56,0,0,0,105.31,223.5Z"
                                    style="opacity: 0.3; transform-origin: 95.485px 217.967px;" class="animable"></path>
                            </g>
                            <path
                                d="M101.22,225.87h0l-1.07-.61-12.29-7.1-3.92-2.27c-.28-.16-.45-.32-.38-.38h0l.15-.09c.17-.09,0-.33-.31-.53a.82.82,0,0,0-.77-.11l-.17.1c-.09,0-.2.07-.25,0l-.09,0-.19-.11-.24-.14a.25.25,0,0,1-.13-.28.08.08,0,0,1,0,0l0-.08,0,0a.71.71,0,0,1,.1-.14.8.8,0,0,1,.13-.13l.15-.14.1-.08.09,0a1.37,1.37,0,0,1,.2-.13l2.08-1.2.3.52L82.69,214l-.16.1-.12.09h0a1.78,1.78,0,0,1,1.45.22,1.57,1.57,0,0,1,.57.53.9.9,0,0,1,.1.57l0,0,.11.06,15.47,8.94,1.68,1h0a1.71,1.71,0,0,1,.55.58l-.61.35A1.62,1.62,0,0,0,101.22,225.87Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 91.9467px 219.445px;"
                                id="elj6hw9ates5l" class="animable"></path>
                            <g id="eleoodroqeuin">
                                <path
                                    d="M101.22,225.87h0l-1.07-.61-12.29-7.1-3.92-2.27c-.28-.16-.45-.32-.38-.38h0l.15-.09c.17-.09,0-.33-.31-.53a.82.82,0,0,0-.77-.11l-.17.1c-.09,0-.2.07-.25,0l-.09,0-.19-.11-.24-.14a.25.25,0,0,1-.13-.28.08.08,0,0,1,0,0l0-.08,0,0a.71.71,0,0,1,.1-.14.8.8,0,0,1,.13-.13l.15-.14.1-.08.09,0a1.37,1.37,0,0,1,.2-.13l2.08-1.2.3.52L82.69,214l-.16.1-.12.09h0a1.78,1.78,0,0,1,1.45.22,1.57,1.57,0,0,1,.57.53.9.9,0,0,1,.1.57l0,0,.11.06,15.47,8.94,1.68,1h0a1.71,1.71,0,0,1,.55.58l-.61.35A1.62,1.62,0,0,0,101.22,225.87Z"
                                    style="opacity: 0.3; transform-origin: 91.9467px 219.445px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M101.76,257.19l.62-.36a.55.55,0,0,0,.23-.49h0V226.88h0a1.75,1.75,0,0,0-.23-.77l-.61.35a1.66,1.66,0,0,1,.23.78v1.23h0v28.22A.54.54,0,0,1,101.76,257.19Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 102.186px 241.65px;"
                                id="el6toxaqq1kvy" class="animable"></path>
                            <g id="el80jjn9u7m2v">
                                <path
                                    d="M101.76,257.19l.62-.36a.55.55,0,0,0,.23-.49h0V226.88h0a1.75,1.75,0,0,0-.23-.77l-.61.35a1.66,1.66,0,0,1,.23.78v1.23h0v28.22A.54.54,0,0,1,101.76,257.19Z"
                                    style="opacity: 0.2; transform-origin: 102.186px 241.65px;" class="animable"></path>
                            </g>
                            <path
                                d="M105.86,254.82l.62-.35a.56.56,0,0,0,.23-.5h0V224.51h0a1.66,1.66,0,0,0-.23-.78l-.61.35a1.66,1.66,0,0,1,.23.78v1.23h0v28.22A.53.53,0,0,1,105.86,254.82Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 106.286px 239.275px;"
                                id="elzw0p6acfnda" class="animable"></path>
                            <g id="elfee53rsp8yf">
                                <path
                                    d="M105.86,254.82l.62-.35a.56.56,0,0,0,.23-.5h0V224.51h0a1.66,1.66,0,0,0-.23-.78l-.61.35a1.66,1.66,0,0,1,.23.78v1.23h0v28.22A.53.53,0,0,1,105.86,254.82Z"
                                    style="opacity: 0.2; transform-origin: 106.286px 239.275px;" class="animable">
                                </path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable" style="transform-origin: 87.65px 239.195px;">
                            <polygon points="81.79 218.06 97.74 227.38 97.82 257.95 81.87 248.63 81.79 218.06"
                                style="fill: rgb(186, 104, 200); transform-origin: 89.805px 238.005px;"
                                id="el6w9205ij7i3" class="animable"></polygon>
                            <path
                                d="M97.23,227.89l-15.44-9a6.38,6.38,0,0,1-3.51,1.94l15.3,8.92A15.23,15.23,0,0,0,97.23,227.89Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 87.755px 224.32px;"
                                id="el9gctqe7qqug" class="animable"></path>
                            <path
                                d="M92.1,229.73a3.25,3.25,0,0,0,3,0l2.59-1.49a.91.91,0,0,0,0-1.72l-15.22-8.83-.64.37,15,8.74c.49.29.5.75,0,1l-2.41,1.37a2,2,0,0,1-1.78,0l-15-8.73-.72.42Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 87.6113px 223.893px;"
                                id="elpkqftij023" class="animable"></path>
                            <g id="el0brs74zthyw8">
                                <path
                                    d="M92.1,229.73a3.25,3.25,0,0,0,3,0l2.59-1.49a.91.91,0,0,0,0-1.72l-15.22-8.83-.64.37,15,8.74c.49.29.5.75,0,1l-2.41,1.37a2,2,0,0,1-1.78,0l-15-8.73-.72.42Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 87.6113px 223.893px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M76.89,220.89,77,251.46l15.21,8.83a3.25,3.25,0,0,0,3,0l2.59-1.49a1,1,0,0,0,.61-.86l-.08-30.57a1,1,0,0,1-.61.86l-2.59,1.5a3.28,3.28,0,0,1-3,0Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 87.65px 240.773px;"
                                id="ela9rl3hcg35j" class="animable"></path>
                            <g id="elqa1y9gun4xf">
                                <path
                                    d="M76.89,220.89,77,251.46l15.21,8.83a3.25,3.25,0,0,0,3,0l2.59-1.49a1,1,0,0,0,.61-.86l-.08-30.57a1,1,0,0,1-.61.86l-2.59,1.5a3.28,3.28,0,0,1-3,0Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 87.65px 240.773px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M93.58,230.09a3.08,3.08,0,0,0,1.48-.35l2.59-1.5a1,1,0,0,0,.61-.86L98.34,258a1,1,0,0,1-.61.86l-2.59,1.49a3,3,0,0,1-1.48.35Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 95.96px 244.04px;" id="elr2km782wl8"
                                class="animable"></path>
                            <g id="el5g2fgx4ety8">
                                <path
                                    d="M93.58,230.09a3.08,3.08,0,0,0,1.48-.35l2.59-1.5a1,1,0,0,0,.61-.86L98.34,258a1,1,0,0,1-.61.86l-2.59,1.49a3,3,0,0,1-1.48.35Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 95.96px 244.04px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable" style="transform-origin: 77.67px 242.756px;">
                            <path d="M89.12,229.94v.79s-.31-.28-.33-.47S89.12,229.94,89.12,229.94Z" id="el2oqvt4hbhl6"
                                class="animable" style="transform-origin: 88.9546px 230.335px;"></path>
                            <path
                                d="M88.52,229.75a.83.83,0,0,0,.61,1.06c.85.27,1.39,0,1.52.24s-4.07,2.66-4.07,2.66l.79-3.48Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 88.6165px 231.73px;"
                                id="el21bl81ohtyz" class="animable"></path>
                            <g id="el3bfz03mv7u6">
                                <path
                                    d="M88.52,229.75a.83.83,0,0,0,.61,1.06c.85.27,1.39,0,1.52.24s-4.07,2.66-4.07,2.66l.79-3.48Z"
                                    style="opacity: 0.3; transform-origin: 88.6165px 231.73px;" class="animable"></path>
                            </g>
                            <path
                                d="M86.93,262.31v.05l-.42-.25-18-10.41,1.59-31.28c0-.5.27-.75.61-.55l.61.35L88.15,230v.15Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 78.33px 241.08px;" id="elq2815i5rr2h"
                                class="animable"></path>
                            <g id="elmo8dq16c4l">
                                <path
                                    d="M86.93,262.31v.05l-.42-.25-18-10.41,1.59-31.28c0-.5.27-.75.61-.55l.61.35L88.15,230v.15Z"
                                    style="opacity: 0.2; transform-origin: 78.33px 241.08px;" class="animable"></path>
                            </g>
                            <path d="M84.48,234.68l-.89-1,4.53-2.61c.69.51,1.21.79,1.82.53Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 86.765px 232.875px;" id="elwjke402lvap"
                                class="animable"></path>
                            <path
                                d="M87.89,230.53l-16.7-9.64a1.14,1.14,0,0,0-1,0l-4.47,2.57,16.94,9.7a1.58,1.58,0,0,1,1.24.21c.49.41.47-.1.47-.1l3.8-2.2C87.81,230.65,87.89,230.53,87.89,230.53Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 76.945px 227.152px;"
                                id="el2me1fsu3mq1" class="animable"></path>
                            <path
                                d="M84.15,234.47c-.17-.1-.24-.21-.16-.26l.14-.08c.16-.09,0-.33-.33-.53a1.2,1.2,0,0,0-.9-.19l-.14.08c-.09,0-.38-.05-.67-.21l.1,31.33.42.24a.37.37,0,0,0,.25,0l.14-.09a1.2,1.2,0,0,1,.9.19c.34.2.49.44.33.53l-.14.08c-.08,0,0,.16.17.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 83.1921px 249.55px;"
                                id="elg75gwy46kz5" class="animable"></path>
                            <g id="elqpikuihyp49">
                                <path
                                    d="M84.15,234.47c-.17-.1-.24-.21-.16-.26l.14-.08c.16-.09,0-.33-.33-.53a1.2,1.2,0,0,0-.9-.19l-.14.08c-.09,0-.38-.05-.67-.21l.1,31.33.42.24a.37.37,0,0,0,.25,0l.14-.09a1.2,1.2,0,0,1,.9.19c.34.2.49.44.33.53l-.14.08c-.08,0,0,.16.17.26Z"
                                    style="opacity: 0.4; transform-origin: 83.1921px 249.55px;" class="animable"></path>
                            </g>
                            <path d="M82.61,264.8v.05l-.42-.24-18-10.42V223.83c0-.5.28-.75.62-.55l.61.35,17.23,9.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 73.42px 244.03px;" id="el28j49k2vtt2"
                                class="animable"></path>
                            <g id="ellk51xuksel">
                                <path d="M82.61,264.8v.05l-.42-.24-18-10.42V223.83c0-.5.28-.75.62-.55l.61.35,17.23,9.53Z"
                                    style="opacity: 0.2; transform-origin: 73.42px 244.03px;" class="animable"></path>
                            </g>
                            <path d="M84,265.62V234.26l1.12.45V266a1,1,0,0,1-.62-.06Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 84.56px 250.142px;"
                                id="els26a9ij2qza" class="animable"></path>
                            <g id="elaw4r07i0w97">
                                <path d="M84,265.62V234.26l1.12.45V266a1,1,0,0,1-.62-.06Z"
                                    style="opacity: 0.2; transform-origin: 84.56px 250.142px;" class="animable"></path>
                            </g>
                            <path
                                d="M91.1,262.37v.06a.06.06,0,0,1,0,0,.2.2,0,0,1,0,.08s0,0,0,.05a.51.51,0,0,1-.09.13l-.13.14-.16.14-.1.07-.08.06-.2.12-3.88,2.25a3.75,3.75,0,0,1-1.31.46V234.71l6-3.61v31.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 88.15px 248.515px;"
                                id="el5i46q7k6vrh" class="animable"></path>
                            <path d="M85.08,239.05v3.77a15.46,15.46,0,0,0,6-3.48v-3.77A15.46,15.46,0,0,1,85.08,239.05Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 88.08px 239.195px;"
                                id="el82xibrhmu4q" class="animable"></path>
                            <g id="elbdumjv8q9ji">
                                <path
                                    d="M85.08,239.05v3.77a15.46,15.46,0,0,0,6-3.48v-3.77A15.46,15.46,0,0,1,85.08,239.05Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 88.08px 239.195px;"
                                    class="animable"></path>
                            </g>
                            <path d="M85.08,244.22v1.4a15.46,15.46,0,0,0,6-3.48v-1.41A15.35,15.35,0,0,1,85.08,244.22Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 88.08px 243.175px;"
                                id="el59qvf1n10sr" class="animable"></path>
                            <g id="el3urix7y7kng">
                                <path d="M85.08,244.22v1.4a15.46,15.46,0,0,0,6-3.48v-1.41A15.35,15.35,0,0,1,85.08,244.22Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 88.08px 243.175px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M86.39,234.24l-.31-.52a2.81,2.81,0,0,1-1.29.41.82.82,0,0,0-.11-.52,1.61,1.61,0,0,0-.58-.53,2.3,2.3,0,0,0-.88-.3h-.07a.91.91,0,0,0-.54.1l-16-9.24-.54-.31-.7-.4a.34.34,0,0,0-.37,0l-.62.35a.37.37,0,0,1,.39,0h0l1.83,1.06,15.48,8.94c.29.16.59.26.67.21l.14-.08a.53.53,0,0,1,.32,0,1.86,1.86,0,0,1,.58.21c.34.2.49.44.33.53l-.14.08c-.08,0,0,.16.16.26l.31.18A2.53,2.53,0,0,0,86.39,234.24Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 75.385px 228.794px;"
                                id="elcr44dnkzbvg" class="animable"></path>
                            <g id="eldrenkpzf20a">
                                <path
                                    d="M86.39,234.24l-.31-.52a2.81,2.81,0,0,1-1.29.41.82.82,0,0,0-.11-.52,1.61,1.61,0,0,0-.58-.53,2.3,2.3,0,0,0-.88-.3h-.07a.91.91,0,0,0-.54.1l-16-9.24-.54-.31-.7-.4a.34.34,0,0,0-.37,0l-.62.35a.37.37,0,0,1,.39,0h0l1.83,1.06,15.48,8.94c.29.16.59.26.67.21l.14-.08a.53.53,0,0,1,.32,0,1.86,1.86,0,0,1,.58.21c.34.2.49.44.33.53l-.14.08c-.08,0,0,.16.16.26l.31.18A2.53,2.53,0,0,0,86.39,234.24Z"
                                    style="opacity: 0.3; transform-origin: 75.385px 228.794px;" class="animable"></path>
                            </g>
                            <path
                                d="M86.08,233.72,90,231.47l.16-.09.12-.09h0a1.74,1.74,0,0,1-1.45-.23,1.46,1.46,0,0,1-.57-.52.91.91,0,0,1-.1-.57l-.05,0-.11-.06-15.47-8.94-.89-.51-.26-.15-.75-.43a.35.35,0,0,0-.33,0l.17-.09.44-.26a.33.33,0,0,1,.32,0h0l.28.16.17.1.3.17.19.1.13.08.23.13,12.29,7.1,3.92,2.26c.28.16.45.33.38.39h0l-.14.08c-.17.1,0,.34.31.54a.82.82,0,0,0,.77.11l.17-.1a.3.3,0,0,1,.25,0l.09.06.19.11.24.14a.25.25,0,0,1,.13.28.08.08,0,0,1,0,0l0,.08h0s0,0,0,0a.71.71,0,0,1-.1.14l-.13.13-.15.14-.1.08-.09.05a1.37,1.37,0,0,1-.2.13l-3.88,2.24Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 80.7183px 226.859px;"
                                id="eli1r6b7kdyu" class="animable"></path>
                            <g id="elcoxq2b4t1q">
                                <path
                                    d="M86.08,233.72,90,231.47l.16-.09.12-.09h0a1.74,1.74,0,0,1-1.45-.23,1.46,1.46,0,0,1-.57-.52.91.91,0,0,1-.1-.57l-.05,0-.11-.06-15.47-8.94-.89-.51-.26-.15-.75-.43a.35.35,0,0,0-.33,0l.17-.09.44-.26a.33.33,0,0,1,.32,0h0l.28.16.17.1.3.17.19.1.13.08.23.13,12.29,7.1,3.92,2.26c.28.16.45.33.38.39h0l-.14.08c-.17.1,0,.34.31.54a.82.82,0,0,0,.77.11l.17-.1a.3.3,0,0,1,.25,0l.09.06.19.11.24.14a.25.25,0,0,1,.13.28.08.08,0,0,1,0,0l0,.08h0s0,0,0,0a.71.71,0,0,1-.1.14l-.13.13-.15.14-.1.08-.09.05a1.37,1.37,0,0,1-.2.13l-3.88,2.24Z"
                                    style="opacity: 0.3; transform-origin: 80.7183px 226.859px;" class="animable">
                                </path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 68.725px 248.131px;">
                            <path d="M80.18,235.33v.79s-.3-.28-.32-.47S80.18,235.33,80.18,235.33Z" id="el8z4ii1e2m2a"
                                class="animable" style="transform-origin: 80.0196px 235.725px;"></path>
                            <path
                                d="M79.57,235.14a.83.83,0,0,0,.61,1.06c.86.27,1.4,0,1.53.24s-4.08,2.66-4.08,2.66l.8-3.48Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 79.6715px 237.12px;"
                                id="elcs79c7v4hm6" class="animable"></path>
                            <g id="el9rfebf18vjt">
                                <path
                                    d="M79.57,235.14a.83.83,0,0,0,.61,1.06c.86.27,1.4,0,1.53.24s-4.08,2.66-4.08,2.66l.8-3.48Z"
                                    style="opacity: 0.3; transform-origin: 79.6715px 237.12px;" class="animable"></path>
                            </g>
                            <path
                                d="M78,267.7v.05l-.42-.25-18-10.41,1.59-31.28c0-.5.28-.75.62-.55l.61.35,16.87,9.74,0,.15Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 69.425px 246.47px;"
                                id="el19w1hve7dcr" class="animable"></path>
                            <g id="ele9bgkb3bvn">
                                <path
                                    d="M78,267.7v.05l-.42-.25-18-10.41,1.59-31.28c0-.5.28-.75.62-.55l.61.35,16.87,9.74,0,.15Z"
                                    style="opacity: 0.2; transform-origin: 69.425px 246.47px;" class="animable"></path>
                            </g>
                            <path d="M75.53,240.07l-.88-1,4.53-2.61c.68.51,1.21.79,1.82.53Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 77.825px 238.265px;" id="elppor6p3tyac"
                                class="animable"></path>
                            <path
                                d="M79,235.92l-16.71-9.64a1.14,1.14,0,0,0-1.05,0l-4.46,2.57,16.94,9.7a1.56,1.56,0,0,1,1.23.21c.5.41.47-.1.47-.1l3.81-2.2C78.87,236,79,235.92,79,235.92Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 68.005px 232.536px;" id="elv7131fpq2"
                                class="animable"></path>
                            <path
                                d="M75.21,239.86c-.18-.1-.25-.21-.17-.26l.14-.08c.16-.09,0-.33-.33-.53a1.2,1.2,0,0,0-.9-.19l-.14.08c-.08.05-.38,0-.67-.21L73.25,270l.42.24a.39.39,0,0,0,.25,0l.14-.09a1.2,1.2,0,0,1,.9.19c.34.2.49.44.33.53l-.14.08c-.09.05,0,.16.16.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 74.2471px 254.94px;"
                                id="eltfsanxooba" class="animable"></path>
                            <g id="el57vh951oxgb">
                                <path
                                    d="M75.21,239.86c-.18-.1-.25-.21-.17-.26l.14-.08c.16-.09,0-.33-.33-.53a1.2,1.2,0,0,0-.9-.19l-.14.08c-.08.05-.38,0-.67-.21L73.25,270l.42.24a.39.39,0,0,0,.25,0l.14-.09a1.2,1.2,0,0,1,.9.19c.34.2.49.44.33.53l-.14.08c-.09.05,0,.16.16.26Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 74.2471px 254.94px;"
                                    class="animable"></path>
                            </g>
                            <path d="M73.67,270.19v.05l-.42-.24-18-10.42V229.22c0-.5.27-.75.61-.55l.62.35,17.23,9.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 64.48px 249.42px;" id="el40at3y2tpqo"
                                class="animable"></path>
                            <g id="el51x2qiil0sn">
                                <path d="M73.67,270.19v.05l-.42-.24-18-10.42V229.22c0-.5.27-.75.61-.55l.62.35,17.23,9.53Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 64.48px 249.42px;"
                                    class="animable"></path>
                            </g>
                            <path d="M75,271V239.65l1.12.45v31.26a1,1,0,0,1-.62-.06Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 75.56px 255.517px;" id="elj57v6yqn22"
                                class="animable"></path>
                            <g id="el6caqm5n0v98">
                                <path d="M75,271V239.65l1.12.45v31.26a1,1,0,0,1-.62-.06Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 75.56px 255.517px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M82.16,267.76a.13.13,0,0,1,0,.06v0a.2.2,0,0,1,0,.08l0,.05a1.13,1.13,0,0,1-.1.13.81.81,0,0,1-.12.14l-.16.14-.1.07-.08.06-.2.12-3.89,2.25a3.68,3.68,0,0,1-1.31.46V240.1l6-3.61v31.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 79.2px 253.905px;" id="elcsrhicmb2ma"
                                class="animable"></path>
                            <g id="elw9n0x04kj9i">
                                <g style="opacity: 0.7; transform-origin: 79.2px 253.905px;" class="animable">
                                    <path
                                        d="M82.16,267.76a.13.13,0,0,1,0,.06v0a.2.2,0,0,1,0,.08l0,.05a1.13,1.13,0,0,1-.1.13.81.81,0,0,1-.12.14l-.16.14-.1.07-.08.06-.2.12-3.89,2.25a3.68,3.68,0,0,1-1.31.46V240.1l6-3.61v31.26Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 79.2px 253.905px;"
                                        id="elhuf1e2cld6c" class="animable"></path>
                                </g>
                            </g>
                            <path d="M76.13,242.69v3.77a15.39,15.39,0,0,0,6-3.48v-3.77A15.39,15.39,0,0,1,76.13,242.69Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 79.13px 242.835px;"
                                id="el3zqq0nv613k" class="animable"></path>
                            <path d="M76.13,263.69v3.77a15.28,15.28,0,0,0,6-3.49V260.2A15.28,15.28,0,0,1,76.13,263.69Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 79.13px 263.83px;" id="elarrunlvyixk"
                                class="animable"></path>
                            <path
                                d="M77.44,239.63l-.3-.52a2.8,2.8,0,0,1-1.3.41.76.76,0,0,0-.1-.52,1.69,1.69,0,0,0-.58-.53,2.41,2.41,0,0,0-.89-.3h-.06a.89.89,0,0,0-.54.1l-16-9.24-.55-.31-.69-.4a.36.36,0,0,0-.38,0l-.61.35a.35.35,0,0,1,.38,0h0l1.84,1.06,15.47,8.94c.29.16.59.26.67.21l.14-.08a.54.54,0,0,1,.32,0,1.78,1.78,0,0,1,.58.21c.35.2.49.44.33.53l-.14.08c-.08.05,0,.16.17.26l.3.18A2.52,2.52,0,0,0,77.44,239.63Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 66.44px 234.185px;"
                                id="elj335pc5wnyk" class="animable"></path>
                            <g id="elciy9he8w4o">
                                <path
                                    d="M77.44,239.63l-.3-.52a2.8,2.8,0,0,1-1.3.41.76.76,0,0,0-.1-.52,1.69,1.69,0,0,0-.58-.53,2.41,2.41,0,0,0-.89-.3h-.06a.89.89,0,0,0-.54.1l-16-9.24-.55-.31-.69-.4a.36.36,0,0,0-.38,0l-.61.35a.35.35,0,0,1,.38,0h0l1.84,1.06,15.47,8.94c.29.16.59.26.67.21l.14-.08a.54.54,0,0,1,.32,0,1.78,1.78,0,0,1,.58.21c.35.2.49.44.33.53l-.14.08c-.08.05,0,.16.17.26l.3.18A2.52,2.52,0,0,0,77.44,239.63Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 66.44px 234.185px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M77.14,239.11,81,236.86l.16-.09.13-.09a0,0,0,0,1,0,0,1.72,1.72,0,0,1-1.44-.23,1.4,1.4,0,0,1-.57-.52.79.79,0,0,1-.1-.57l-.06,0-.1-.06-15.48-8.94-.89-.51-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.09.45-.26a.31.31,0,0,1,.31,0h0l.28.16.17.1.3.17.18.1.13.08.23.13,12.29,7.1L79.79,235c.28.16.44.33.37.39h0l-.14.08c-.17.1,0,.34.31.54a.83.83,0,0,0,.78.11l.17-.1a.28.28,0,0,1,.24,0l.09.06.19.11.25.14a.23.23,0,0,1,.12.28s0,0,0,0l0,.08h0l0,0a.71.71,0,0,1-.1.14l-.12.13-.16.14-.1.08-.08,0a1.37,1.37,0,0,1-.2.13l-3.89,2.24Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 71.7458px 232.214px;"
                                id="el2s0dcjhs0r9" class="animable"></path>
                            <g id="eln5jp7ewh93b">
                                <path
                                    d="M77.14,239.11,81,236.86l.16-.09.13-.09a0,0,0,0,1,0,0,1.72,1.72,0,0,1-1.44-.23,1.4,1.4,0,0,1-.57-.52.79.79,0,0,1-.1-.57l-.06,0-.1-.06-15.48-8.94-.89-.51-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.09.45-.26a.31.31,0,0,1,.31,0h0l.28.16.17.1.3.17.18.1.13.08.23.13,12.29,7.1L79.79,235c.28.16.44.33.37.39h0l-.14.08c-.17.1,0,.34.31.54a.83.83,0,0,0,.78.11l.17-.1a.28.28,0,0,1,.24,0l.09.06.19.11.25.14a.23.23,0,0,1,.12.28s0,0,0,0l0,.08h0l0,0a.71.71,0,0,1-.1.14l-.12.13-.16.14-.1.08-.08,0a1.37,1.37,0,0,1-.2.13l-3.89,2.24Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 71.7458px 232.214px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--Books--inject-2" class="animable"
                            style="transform-origin: 58.985px 257.94px;">
                            <g id="freepik--book--inject-2" class="animable"
                                style="transform-origin: 62.94px 255.615px;">
                                <polygon points="57.59 236.21 72.25 244.78 72.32 272.89 57.66 264.32 57.59 236.21"
                                    style="fill: rgb(186, 104, 200); transform-origin: 64.955px 254.55px;"
                                    id="elbm4h5we0xah" class="animable"></polygon>
                                <path
                                    d="M71.78,245.25,57.59,237a5.92,5.92,0,0,1-3.24,1.77L68.42,247A14,14,0,0,0,71.78,245.25Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 63.065px 242px;"
                                    id="elnohn6ks1fnm" class="animable"></path>
                                <path
                                    d="M67.06,246.94a3,3,0,0,0,2.72,0l2.39-1.38c.75-.43.75-1.14,0-1.58l-14-8.12-.59.34,13.75,8a.5.5,0,0,1,0,.95l-2.21,1.26a1.77,1.77,0,0,1-1.63,0l-13.75-8-.67.39Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 62.9013px 241.563px;"
                                    id="eliupvsta6zn9" class="animable"></path>
                                <g id="elpaafpwwfp">
                                    <path
                                        d="M67.06,246.94a3,3,0,0,0,2.72,0l2.39-1.38c.75-.43.75-1.14,0-1.58l-14-8.12-.59.34,13.75,8a.5.5,0,0,1,0,.95l-2.21,1.26a1.77,1.77,0,0,1-1.63,0l-13.75-8-.67.39Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 62.9013px 241.563px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M53.08,238.81l.07,28.11,14,8.12a3,3,0,0,0,2.72,0l2.38-1.37a1,1,0,0,0,.56-.79l-.07-28.11a1,1,0,0,1-.56.79L69.78,247a3,3,0,0,1-2.72,0Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 62.945px 257.088px;"
                                    id="ely31lrfh4f" class="animable"></path>
                                <g id="elyian8n8ps7a">
                                    <path
                                        d="M53.08,238.81l.07,28.11,14,8.12a3,3,0,0,0,2.72,0l2.38-1.37a1,1,0,0,0,.56-.79l-.07-28.11a1,1,0,0,1-.56.79L69.78,247a3,3,0,0,1-2.72,0Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 62.945px 257.088px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M68.42,247.27a2.82,2.82,0,0,0,1.36-.32l2.39-1.38a1,1,0,0,0,.56-.79l.07,28.11a1,1,0,0,1-.56.79l-2.38,1.37a2.76,2.76,0,0,1-1.36.32Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 70.61px 260.075px;"
                                    id="elre83jpmhv2f" class="animable"></path>
                                <g id="ellh4r1nbn09b">
                                    <path
                                        d="M68.42,247.27a2.82,2.82,0,0,0,1.36-.32l2.39-1.38a1,1,0,0,0,.56-.79l.07,28.11a1,1,0,0,1-.56.79l-2.38,1.37a2.76,2.76,0,0,1-1.36.32Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 70.61px 260.075px;"
                                        class="animable"></path>
                                </g>
                                <path d="M68.47,271.68a9.6,9.6,0,0,0,4.33-2.5v-1.31a9.6,9.6,0,0,1-4.33,2.5Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 70.635px 269.775px;"
                                    id="elkcxt46rzmr8" class="animable"></path>
                                <path d="M68.47,253a9.51,9.51,0,0,0,4.33-2.5v-1.31a9.42,9.42,0,0,1-4.33,2.5Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 70.635px 251.095px;"
                                    id="ellzemjbn64j8" class="animable"></path>
                            </g>
                            <g id="freepik--book--inject-2" class="animable"
                                style="transform-origin: 56.515px 263.015px;">
                                <polygon points="53.77 246.27 67.35 254.21 63.62 278.07 50.04 270.14 53.77 246.27"
                                    style="fill: rgb(186, 104, 200); transform-origin: 58.695px 262.17px;"
                                    id="eloh9dw2gr37f" class="animable"></polygon>
                                <g id="elhi1aswe4wro">
                                    <polygon points="53.77 246.27 67.35 254.21 63.62 278.07 50.04 270.14 53.77 246.27"
                                        style="opacity: 0.35; transform-origin: 58.695px 262.17px;" class="animable">
                                    </polygon>
                                </g>
                                <path
                                    d="M66.81,254.58l-13.15-7.64a7.06,7.06,0,0,1-3.49,1.37l13,7.6A17.07,17.07,0,0,0,66.81,254.58Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 58.49px 251.425px;"
                                    id="elzun3eh7jk7a" class="animable"></path>
                                <path
                                    d="M61.84,255.8a3.47,3.47,0,0,0,2.74.13l2.58-1.06c.81-.33.91-.93.21-1.34l-13-7.52-.64.26,12.74,7.44c.42.25.36.61-.13.81l-2.39,1a2.09,2.09,0,0,1-1.65-.08L49.61,248l-.73.3Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 58.3586px 251.081px;"
                                    id="el0b40qqolsiqj" class="animable"></path>
                                <g id="el5yy9ywbim8d">
                                    <path
                                        d="M61.84,255.8a3.47,3.47,0,0,0,2.74.13l2.58-1.06c.81-.33.91-.93.21-1.34l-13-7.52-.64.26,12.74,7.44c.42.25.36.61-.13.81l-2.39,1a2.09,2.09,0,0,1-1.65-.08L49.61,248l-.73.3Z"
                                        style="opacity: 0.2; transform-origin: 58.3586px 251.081px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M48.88,248.28l-3.72,23.86,13,7.53a3.48,3.48,0,0,0,2.73.13l2.58-1.06c.41-.17.64-.4.67-.64l3.73-23.87c0,.24-.26.47-.67.64l-2.58,1.06a3.51,3.51,0,0,1-2.74-.12Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 56.515px 264.149px;"
                                    id="el6u93z2zyr6v" class="animable"></path>
                                <g id="elgutkajpwd0r">
                                    <path
                                        d="M48.88,248.28l-3.72,23.86,13,7.53a3.48,3.48,0,0,0,2.73.13l2.58-1.06c.41-.17.64-.4.67-.64l3.73-23.87c0,.24-.26.47-.67.64l-2.58,1.06a3.51,3.51,0,0,1-2.74-.12Z"
                                        style="opacity: 0.3; transform-origin: 56.515px 264.149px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M63.17,256.15a3.43,3.43,0,0,0,1.41-.22l2.58-1.06c.41-.17.63-.4.67-.64L64.1,278.1c0,.24-.26.47-.67.64l-2.58,1.06a3.22,3.22,0,0,1-1.41.21Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 63.635px 267.125px;"
                                    id="el6x8y0xnk1wy" class="animable"></path>
                                <g id="elkt6f9feog7k">
                                    <path
                                        d="M63.17,256.15a3.43,3.43,0,0,0,1.41-.22l2.58-1.06c.41-.17.63-.4.67-.64L64.1,278.1c0,.24-.26.47-.67.64l-2.58,1.06a3.22,3.22,0,0,1-1.41.21Z"
                                        style="opacity: 0.1; transform-origin: 63.635px 267.125px;" class="animable">
                                    </path>
                                </g>
                            </g>
                        </g>
                        <polygon
                            points="150.28 177.23 116.62 157.79 19.64 213.8 19.64 216.58 53.3 236.02 150.28 180.01 150.28 177.23"
                            style="fill: rgb(186, 104, 200); transform-origin: 84.96px 196.905px;" id="el6mb0ulajytl"
                            class="animable"></polygon>
                        <g id="elu2jsoc9y4mr">
                            <polygon
                                points="150.28 177.23 116.62 157.79 19.64 213.8 19.64 216.58 53.3 236.02 150.28 180.01 150.28 177.23"
                                style="fill: rgb(255, 255, 255); opacity: 0.75; transform-origin: 84.96px 196.905px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="53.3 233.24 150.28 177.23 116.62 157.79 19.64 213.8 53.3 233.24"
                            style="fill: rgb(186, 104, 200); transform-origin: 84.96px 195.515px;" id="eliuu8dkhveaq"
                            class="animable"></polygon>
                        <g id="elr8gmolr91m">
                            <polygon points="53.3 233.24 150.28 177.23 116.62 157.79 19.64 213.8 53.3 233.24"
                                style="fill: rgb(255, 255, 255); opacity: 0.85; transform-origin: 84.96px 195.515px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="53.3 233.24 53.3 236.02 19.64 216.58 19.64 213.8 53.3 233.24"
                            style="fill: rgb(186, 104, 200); transform-origin: 36.47px 224.91px;" id="el4ge94gtl2q1"
                            class="animable"></polygon>
                        <g id="elojrsblsp5ca">
                            <polygon points="53.3 233.24 53.3 236.02 19.64 216.58 19.64 213.8 53.3 233.24"
                                style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 36.47px 224.91px;"
                                class="animable"></polygon>
                        </g>
                        <g id="freepik--books--inject-2" class="animable"
                            style="transform-origin: 127.2px 158.244px;">
                            <g id="freepik--book--inject-2" class="animable"
                                style="transform-origin: 132.05px 155.4px;">
                                <polygon points="125.47 131.63 143.43 142.13 143.51 176.54 125.56 166.05 125.47 131.63"
                                    style="fill: rgb(38, 50, 56); transform-origin: 134.49px 154.085px;"
                                    id="elxc9g4o3d47" class="animable"></polygon>
                                <path
                                    d="M142.85,142.7l-17.38-10.09a7.25,7.25,0,0,1-4,2.18l17.23,10.05A17.2,17.2,0,0,0,142.85,142.7Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 132.16px 138.725px;"
                                    id="eli0lcmb5nytf" class="animable"></path>
                                <path
                                    d="M137.07,144.77a3.68,3.68,0,0,0,3.34,0l2.91-1.68a1,1,0,0,0,0-1.93l-17.13-9.95-.72.41,16.84,9.85a.61.61,0,0,1,0,1.16l-2.71,1.54a2.22,2.22,0,0,1-2,0l-16.83-9.83-.82.48Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 132.004px 138.19px;"
                                    id="el3kmm3z1v3ug" class="animable"></path>
                                <path
                                    d="M120,134.82l.09,34.42,17.12,9.94a3.68,3.68,0,0,0,3.34,0l2.91-1.68a1.17,1.17,0,0,0,.69-1L144,142.13a1.17,1.17,0,0,1-.68,1l-2.92,1.69a3.68,3.68,0,0,1-3.34,0Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 132.075px 157.2px;"
                                    id="elzn5chqmya1e" class="animable"></path>
                                <path
                                    d="M138.74,145.18a3.36,3.36,0,0,0,1.67-.4l2.92-1.69a1.17,1.17,0,0,0,.68-1l.09,34.42a1.17,1.17,0,0,1-.69,1l-2.91,1.68a3.38,3.38,0,0,1-1.67.4Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 141.42px 160.84px;"
                                    id="elrseaqgqtcr" class="animable"></path>
                                <path d="M138.8,175.06a11.73,11.73,0,0,0,5.3-3.06v-1.6a11.73,11.73,0,0,1-5.3,3.06Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 141.45px 172.73px;"
                                    id="elop641jn3que" class="animable"></path>
                                <path d="M138.74,152.32a11.74,11.74,0,0,0,5.3-3.07v-1.6a11.64,11.64,0,0,1-5.3,3.06Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 141.39px 149.985px;"
                                    id="elwtq59k1ulc" class="animable"></path>
                            </g>
                            <g id="freepik--book--inject-2" class="animable"
                                style="transform-origin: 124.135px 164.454px;">
                                <polygon points="120.8 143.95 137.42 153.67 132.86 182.9 116.23 173.18 120.8 143.95"
                                    style="fill: rgb(186, 104, 200); transform-origin: 126.825px 163.425px;"
                                    id="elqmjnqaurtm" class="animable"></polygon>
                                <g id="el759f4kpw3jl">
                                    <polygon points="120.8 143.95 137.42 153.67 132.86 182.9 116.23 173.18 120.8 143.95"
                                        style="opacity: 0.35; transform-origin: 126.825px 163.425px;" class="animable">
                                    </polygon>
                                </g>
                                <path
                                    d="M136.77,154.13l-16.1-9.35a8.77,8.77,0,0,1-4.28,1.67l16,9.31A21.08,21.08,0,0,0,136.77,154.13Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 126.58px 150.27px;"
                                    id="elz4h8tf73zu" class="animable"></path>
                                <path
                                    d="M130.68,155.63a4.35,4.35,0,0,0,3.35.16l3.16-1.3c1-.41,1.11-1.15.26-1.64l-15.87-9.22-.78.32,15.6,9.12c.51.3.44.74-.16,1l-2.93,1.19a2.58,2.58,0,0,1-2-.09l-15.6-9.1-.89.36Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 126.42px 149.84px;"
                                    id="elby6dq6j22n7" class="animable"></path>
                                <g id="elxraybfjcya">
                                    <path
                                        d="M130.68,155.63a4.35,4.35,0,0,0,3.35.16l3.16-1.3c1-.41,1.11-1.15.26-1.64l-15.87-9.22-.78.32,15.6,9.12c.51.3.44.74-.16,1l-2.93,1.19a2.58,2.58,0,0,1-2-.09l-15.6-9.1-.89.36Z"
                                        style="opacity: 0.2; transform-origin: 126.42px 149.84px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M114.82,146.41l-4.57,29.22,15.87,9.22a4.27,4.27,0,0,0,3.35.16l3.16-1.3c.5-.2.78-.49.82-.79L138,153.7c0,.3-.32.58-.82.79l-3.16,1.3a4.27,4.27,0,0,1-3.35-.16Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 124.125px 165.844px;"
                                    id="ellxr5un0xzc" class="animable"></path>
                                <g id="elxz6ah06ix8k">
                                    <path
                                        d="M114.82,146.41l-4.57,29.22,15.87,9.22a4.27,4.27,0,0,0,3.35.16l3.16-1.3c.5-.2.78-.49.82-.79L138,153.7c0,.3-.32.58-.82.79l-3.16,1.3a4.27,4.27,0,0,1-3.35-.16Z"
                                        style="opacity: 0.3; transform-origin: 124.125px 165.844px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M132.31,156.05a4.18,4.18,0,0,0,1.72-.26l3.16-1.3c.5-.21.78-.49.82-.79l-4.56,29.22c0,.3-.32.59-.82.79l-3.16,1.3a4.23,4.23,0,0,1-1.73.26Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 132.875px 169.489px;"
                                    id="elkcn047lc1r" class="animable"></path>
                                <g id="elbg79kc0zhoq">
                                    <path
                                        d="M132.31,156.05a4.18,4.18,0,0,0,1.72-.26l3.16-1.3c.5-.21.78-.49.82-.79l-4.56,29.22c0,.3-.32.59-.82.79l-3.16,1.3a4.23,4.23,0,0,1-1.73.26Z"
                                        style="opacity: 0.1; transform-origin: 132.875px 169.489px;" class="animable">
                                    </path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 111.337px 168.268px;">
                            <path d="M122.81,155.46v.79s-.3-.28-.32-.48S122.81,155.46,122.81,155.46Z" id="el650d1fodwsb"
                                class="animable" style="transform-origin: 122.65px 155.855px;"></path>
                            <path d="M122.2,155.27a.82.82,0,0,0,.61,1c.86.27,1.4,0,1.53.24s-4.08,2.67-4.08,2.67l.8-3.48Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 122.301px 157.225px;"
                                id="elx3jjtqmfroh" class="animable"></path>
                            <g id="ell4cohv4kqjf">
                                <path
                                    d="M122.2,155.27a.82.82,0,0,0,.61,1c.86.27,1.4,0,1.53.24s-4.08,2.67-4.08,2.67l.8-3.48Z"
                                    style="opacity: 0.3; transform-origin: 122.301px 157.225px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M120.61,187.82v.05l-.42-.24-18-10.42,1.59-31.27c0-.51.28-.75.61-.56l.62.36,16.87,9.74,0,.14Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 112.035px 166.593px;"
                                id="el0q4kvusj6hr9" class="animable"></path>
                            <g id="elnlzsi2p2t2g">
                                <path
                                    d="M120.61,187.82v.05l-.42-.24-18-10.42,1.59-31.27c0-.51.28-.75.61-.56l.62.36,16.87,9.74,0,.14Z"
                                    style="opacity: 0.2; transform-origin: 112.035px 166.593px;" class="animable">
                                </path>
                            </g>
                            <path d="M118.16,160.19l-.88-1,4.53-2.62c.68.52,1.21.79,1.82.54Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 120.455px 158.38px;" id="el9o8972ipvkh"
                                class="animable"></path>
                            <path
                                d="M121.58,156.05l-16.71-9.65a1.14,1.14,0,0,0-1.05,0L99.35,149l17,9.7a1.56,1.56,0,0,1,1.23.21c.5.4.47-.11.47-.11l3.81-2.2C121.5,156.17,121.58,156.05,121.58,156.05Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 110.605px 152.668px;"
                                id="elbq8setpos7k" class="animable"></path>
                            <path
                                d="M117.84,160c-.18-.1-.25-.22-.17-.26l.14-.09c.16-.09,0-.32-.33-.52a1.2,1.2,0,0,0-.9-.19l-.14.08c-.08.05-.38,0-.67-.22l.11,31.33.42.25a.41.41,0,0,0,.24,0l.15-.08a1.2,1.2,0,0,1,.9.19c.34.2.48.43.33.52l-.14.09c-.09,0,0,.16.16.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 116.875px 175.08px;"
                                id="eldihygeiyxol" class="animable"></path>
                            <g id="elyege8p3g3yd">
                                <path
                                    d="M117.84,160c-.18-.1-.25-.22-.17-.26l.14-.09c.16-.09,0-.32-.33-.52a1.2,1.2,0,0,0-.9-.19l-.14.08c-.08.05-.38,0-.67-.22l.11,31.33.42.25a.41.41,0,0,0,.24,0l.15-.08a1.2,1.2,0,0,1,.9.19c.34.2.48.43.33.52l-.14.09c-.09,0,0,.16.16.26Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 116.875px 175.08px;"
                                    class="animable"></path>
                            </g>
                            <path d="M116.3,190.32v.05l-.42-.25-18-10.41V149.34c0-.5.27-.74.61-.55l.62.36,17.23,9.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 107.11px 169.548px;"
                                id="elor8d626ar1n" class="animable"></path>
                            <g id="ellusj1v14r2q">
                                <path d="M116.3,190.32v.05l-.42-.25-18-10.41V149.34c0-.5.27-.74.61-.55l.62.36,17.23,9.53Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 107.11px 169.548px;"
                                    class="animable"></path>
                            </g>
                            <path d="M117.64,191.14V159.78l1.12.45v31.26a1,1,0,0,1-.62-.06Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 118.2px 175.647px;"
                                id="elfmyzyrpub1a" class="animable"></path>
                            <g id="elbaye6ps6997">
                                <path d="M117.64,191.14V159.78l1.12.45v31.26a1,1,0,0,1-.62-.06Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 118.2px 175.647px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M124.79,187.89a.13.13,0,0,1,0,.06.08.08,0,0,1,0,0s0,0,0,.08,0,0,0,0a.71.71,0,0,1-.1.14.74.74,0,0,1-.12.13l-.16.14-.1.08-.08.05-.2.13L120.07,191a3.53,3.53,0,0,1-1.31.47V160.23l6-3.62v31.27Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 121.777px 174.04px;"
                                id="elpndbf8hxe6k" class="animable"></path>
                            <g id="elaef81ifu5ca">
                                <g style="opacity: 0.7; transform-origin: 121.777px 174.04px;" class="animable">
                                    <path
                                        d="M124.79,187.89a.13.13,0,0,1,0,.06.08.08,0,0,1,0,0s0,0,0,.08,0,0,0,0a.71.71,0,0,1-.1.14.74.74,0,0,1-.12.13l-.16.14-.1.08-.08.05-.2.13L120.07,191a3.53,3.53,0,0,1-1.31.47V160.23l6-3.62v31.27Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 121.777px 174.04px;"
                                        id="el18we833qzcu" class="animable"></path>
                                </g>
                            </g>
                            <path d="M118.76,162.82v3.77a15.28,15.28,0,0,0,6-3.49v-3.76A15.39,15.39,0,0,1,118.76,162.82Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 121.76px 162.965px;"
                                id="elgk1u3t2o8p" class="animable"></path>
                            <path d="M118.76,183.81v3.77a15.39,15.39,0,0,0,6-3.48v-3.77A15.39,15.39,0,0,1,118.76,183.81Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 121.76px 183.955px;"
                                id="elcnukk3tem2d" class="animable"></path>
                            <path
                                d="M120.07,159.76l-.3-.53a2.68,2.68,0,0,1-1.3.41.8.8,0,0,0-.1-.51,1.59,1.59,0,0,0-.58-.53,2.24,2.24,0,0,0-.89-.3h-.06a1.07,1.07,0,0,0-.54.1l-16-9.24-.55-.31-.69-.4a.38.38,0,0,0-.38,0l-.61.36a.37.37,0,0,1,.38,0h0l1.84,1.06,15.47,8.93c.29.17.59.27.67.22l.14-.08a.47.47,0,0,1,.32,0,1.57,1.57,0,0,1,.58.21c.34.2.49.43.33.52l-.14.08c-.08.05,0,.17.17.27l.3.17A2.46,2.46,0,0,0,120.07,159.76Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 109.07px 154.319px;"
                                id="eldjms8z2oed" class="animable"></path>
                            <g id="elc0lg0vg247d">
                                <path
                                    d="M120.07,159.76l-.3-.53a2.68,2.68,0,0,1-1.3.41.8.8,0,0,0-.1-.51,1.59,1.59,0,0,0-.58-.53,2.24,2.24,0,0,0-.89-.3h-.06a1.07,1.07,0,0,0-.54.1l-16-9.24-.55-.31-.69-.4a.38.38,0,0,0-.38,0l-.61.36a.37.37,0,0,1,.38,0h0l1.84,1.06,15.47,8.93c.29.17.59.27.67.22l.14-.08a.47.47,0,0,1,.32,0,1.57,1.57,0,0,1,.58.21c.34.2.49.43.33.52l-.14.08c-.08.05,0,.17.17.27l.3.17A2.46,2.46,0,0,0,120.07,159.76Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 109.07px 154.319px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M119.77,159.23l3.88-2.24.16-.1.13-.09a0,0,0,0,0,0,0,1.74,1.74,0,0,1-1.45-.22,1.47,1.47,0,0,1-.56-.53.76.76,0,0,1-.1-.56l-.06,0-.1-.06-15.48-8.93-.89-.51-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.1.45-.25a.33.33,0,0,1,.31,0h0l.27.16.18.1.3.17.18.11.13.08.23.13,12.29,7.1,3.92,2.26c.29.16.45.33.38.38l0,0-.14.08c-.17.1,0,.34.31.53a.81.81,0,0,0,.78.11l.17-.09a.28.28,0,0,1,.24,0l.09.05.19.12.24.13a.23.23,0,0,1,.13.28v0a.36.36,0,0,1,0,.09h0l0,0a1.13,1.13,0,0,1-.1.13.81.81,0,0,1-.12.14l-.16.14-.1.07-.08.06-.2.13-3.89,2.24Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 114.375px 152.391px;"
                                id="elq5oi6ygbtcs" class="animable"></path>
                            <g id="elex7ejwpx3rg">
                                <path
                                    d="M119.77,159.23l3.88-2.24.16-.1.13-.09a0,0,0,0,0,0,0,1.74,1.74,0,0,1-1.45-.22,1.47,1.47,0,0,1-.56-.53.76.76,0,0,1-.1-.56l-.06,0-.1-.06-15.48-8.93-.89-.51-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.1.45-.25a.33.33,0,0,1,.31,0h0l.27.16.18.1.3.17.18.11.13.08.23.13,12.29,7.1,3.92,2.26c.29.16.45.33.38.38l0,0-.14.08c-.17.1,0,.34.31.53a.81.81,0,0,0,.78.11l.17-.09a.28.28,0,0,1,.24,0l.09.05.19.12.24.13a.23.23,0,0,1,.13.28v0a.36.36,0,0,1,0,.09h0l0,0a1.13,1.13,0,0,1-.1.13.81.81,0,0,1-.12.14l-.16.14-.1.07-.08.06-.2.13-3.89,2.24Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 114.375px 152.391px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 101.795px 173.76px;">
                            <path d="M113.25,161v.78s-.3-.27-.32-.47S113.25,161,113.25,161Z" id="elhry763hbdk9"
                                class="animable" style="transform-origin: 113.09px 161.39px;"></path>
                            <path
                                d="M112.64,160.78a.82.82,0,0,0,.61,1.05c.86.27,1.4,0,1.53.24s-4.08,2.67-4.08,2.67l.8-3.49Z"
                                id="ell7imyh18od" class="animable" style="transform-origin: 112.741px 162.76px;">
                            </path>
                            <path
                                d="M111.05,193.33v0l-.42-.24-18-10.42,1.59-31.28c0-.5.28-.75.62-.55l.61.36L112.28,161l0,.15Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 102.455px 172.05px;" id="el4o6v7frrl5y"
                                class="animable"></path>
                            <path d="M108.6,165.7l-.88-1,4.53-2.61c.68.51,1.21.79,1.82.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 110.895px 163.895px;"
                                id="elzc4cye7kkmm" class="animable"></path>
                            <path
                                d="M112,161.55l-16.71-9.64a1.14,1.14,0,0,0-1,0l-4.46,2.58,16.94,9.69a1.53,1.53,0,0,1,1.23.22c.5.4.47-.11.47-.11l3.81-2.2C111.94,161.67,112,161.55,112,161.55Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 101.055px 158.174px;"
                                id="ell4m4gz38x4" class="animable"></path>
                            <path
                                d="M108.28,165.49c-.17-.1-.25-.21-.17-.26l.14-.08c.16-.09,0-.33-.33-.52a1.17,1.17,0,0,0-.9-.2l-.14.09a1.17,1.17,0,0,1-.67-.22l.11,31.33.42.24a.39.39,0,0,0,.25,0l.14-.08a1.16,1.16,0,0,1,.9.19c.34.19.49.43.33.52l-.14.08c-.09.05,0,.16.16.26Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 107.317px 180.57px;" id="elm28x5vnocz"
                                class="animable"></path>
                            <path d="M106.74,195.82v.05l-.42-.24-18-10.42V154.85c0-.5.27-.75.61-.55l.62.35,17.23,9.53Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 97.55px 175.05px;" id="elpjp93px29h"
                                class="animable"></path>
                            <path d="M108.08,196.65V165.28l1.12.45V197a1.2,1.2,0,0,1-.62-.06Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 108.64px 181.148px;" id="elcq7yhgt0dml"
                                class="animable"></path>
                            <path
                                d="M115.23,193.39a.13.13,0,0,1,0,.06v0a.36.36,0,0,1,0,.09l0,0-.1.14-.12.13-.16.14-.1.07-.08.06-.2.13-3.89,2.24a3.72,3.72,0,0,1-1.31.47V165.73l6-3.61v31.26Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 112.27px 179.52px;" id="el6lri3iqzvkm"
                                class="animable"></path>
                            <path d="M109.2,169.32v3.77a15.39,15.39,0,0,0,6-3.48v-3.77A15.39,15.39,0,0,1,109.2,169.32Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 112.2px 169.465px;"
                                id="el9ta2frcf3lc" class="animable"></path>
                            <g id="el0ef1rabs4f2w">
                                <path
                                    d="M109.2,169.32v3.77a15.39,15.39,0,0,0,6-3.48v-3.77A15.39,15.39,0,0,1,109.2,169.32Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 112.2px 169.465px;"
                                    class="animable"></path>
                            </g>
                            <path d="M109.2,174.49v1.4a15.39,15.39,0,0,0,6-3.48V171A15.28,15.28,0,0,1,109.2,174.49Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 112.2px 173.445px;"
                                id="elesml6xsar9w" class="animable"></path>
                            <g id="elwbr7elukaes">
                                <path d="M109.2,174.49v1.4a15.39,15.39,0,0,0,6-3.48V171A15.28,15.28,0,0,1,109.2,174.49Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 112.2px 173.445px;"
                                    class="animable"></path>
                            </g>
                            <path d="M109.2,190.53v1.4a15.27,15.27,0,0,0,6-3.48v-1.4A15.39,15.39,0,0,1,109.2,190.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 112.2px 189.49px;" id="el25zzima49jy"
                                class="animable"></path>
                            <g id="elmhjjf8nos4">
                                <path d="M109.2,190.53v1.4a15.27,15.27,0,0,0,6-3.48v-1.4A15.39,15.39,0,0,1,109.2,190.53Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 112.2px 189.49px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M110.51,165.27l-.3-.53a2.68,2.68,0,0,1-1.3.41.72.72,0,0,0-.1-.51,1.63,1.63,0,0,0-.58-.54,2.41,2.41,0,0,0-.89-.3h-.06a1,1,0,0,0-.54.1l-16-9.24-.55-.31-.69-.4a.38.38,0,0,0-.38,0l-.61.35a.35.35,0,0,1,.38,0h0l1.84,1.06,15.47,8.94a1.26,1.26,0,0,0,.67.22l.14-.08a.53.53,0,0,1,.32,0,1.81,1.81,0,0,1,.58.22c.35.19.49.43.33.52l-.14.08c-.08.05,0,.16.17.26l.31.18A2.53,2.53,0,0,0,110.51,165.27Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 99.51px 159.821px;" id="elssbe32e3kkc"
                                class="animable"></path>
                            <path
                                d="M110.21,164.74l3.89-2.24.15-.1.13-.09h0a1.75,1.75,0,0,1-1.44-.22,1.5,1.5,0,0,1-.57-.53.78.78,0,0,1-.1-.57l0,0-.11-.06L96.64,152l-.89-.52-.25-.14-.75-.44a.37.37,0,0,0-.34,0l.17-.1.45-.26a.34.34,0,0,1,.31,0h0l.28.16.17.1.3.17.18.11.13.07.23.13,12.29,7.1,3.93,2.27c.28.16.44.32.37.38l0,0-.14.08c-.17.09,0,.33.31.53a.83.83,0,0,0,.78.11l.17-.1a.27.27,0,0,1,.24,0l.09,0,.2.11.24.14a.25.25,0,0,1,.13.28s0,0,0,0a.3.3,0,0,1,0,.08h0s0,0,0,0a.71.71,0,0,1-.1.14,1.49,1.49,0,0,1-.12.14l-.16.13-.1.08-.08.06-.2.12-3.89,2.25Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 104.828px 157.841px;" id="elimvlt5pnnj"
                                class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable" style="transform-origin: 85.14px 183.008px;">
                            <polygon points="79.32 161.89 95.27 171.22 95.35 201.79 79.4 192.46 79.32 161.89"
                                style="fill: rgb(186, 104, 200); transform-origin: 87.335px 181.84px;"
                                id="ellpmsp70293c" class="animable"></polygon>
                            <path
                                d="M94.76,171.72l-15.44-9a6.36,6.36,0,0,1-3.52,1.93l15.31,8.93A15.37,15.37,0,0,0,94.76,171.72Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 85.28px 168.15px;" id="elq2iu73cbzuj"
                                class="animable"></path>
                            <path
                                d="M89.63,173.56a3.25,3.25,0,0,0,3,0l2.59-1.5a.9.9,0,0,0,0-1.71L80,161.52l-.64.37,15,8.75c.49.28.49.74,0,1L91.88,173a2,2,0,0,1-1.78,0l-15-8.72-.73.42Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 85.1045px 167.723px;"
                                id="elffvz7w4zbvn" class="animable"></path>
                            <g id="elqzgnp58304">
                                <path
                                    d="M89.63,173.56a3.25,3.25,0,0,0,3,0l2.59-1.5a.9.9,0,0,0,0-1.71L80,161.52l-.64.37,15,8.75c.49.28.49.74,0,1L91.88,173a2,2,0,0,1-1.78,0l-15-8.72-.73.42Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 85.1045px 167.723px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M74.42,164.73l.08,30.57,15.21,8.83a3.25,3.25,0,0,0,3,0l2.59-1.5a1,1,0,0,0,.61-.85l-.08-30.57a1,1,0,0,1-.61.85l-2.59,1.5a3.25,3.25,0,0,1-3,0Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 85.165px 184.613px;"
                                id="elcxop0i99tbo" class="animable"></path>
                            <g id="elbgdhpza994u">
                                <path
                                    d="M74.42,164.73l.08,30.57,15.21,8.83a3.25,3.25,0,0,0,3,0l2.59-1.5a1,1,0,0,0,.61-.85l-.08-30.57a1,1,0,0,1-.61.85l-2.59,1.5a3.25,3.25,0,0,1-3,0Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 85.165px 184.613px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M91.11,173.92a3,3,0,0,0,1.48-.35l2.59-1.5a1,1,0,0,0,.61-.85l.08,30.57a1,1,0,0,1-.61.85l-2.59,1.5a3.11,3.11,0,0,1-1.48.35Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 93.49px 187.855px;"
                                id="el0mtrs02bn2m" class="animable"></path>
                            <g id="elrxx5aq6vyp">
                                <path
                                    d="M91.11,173.92a3,3,0,0,0,1.48-.35l2.59-1.5a1,1,0,0,0,.61-.85l.08,30.57a1,1,0,0,1-.61.85l-2.59,1.5a3.11,3.11,0,0,1-1.48.35Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 93.49px 187.855px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable" style="transform-origin: 78.81px 186.697px;">
                            <polygon points="73.42 167.12 88.2 175.77 88.28 204.11 73.49 195.47 73.42 167.12"
                                style="fill: rgb(186, 104, 200); transform-origin: 80.85px 185.615px;"
                                id="elnkvxpzh0gof" class="animable"></polygon>
                            <g id="elnzrw5vgsr9">
                                <polygon points="73.42 167.12 88.2 175.77 88.28 204.11 73.49 195.47 73.42 167.12"
                                    style="opacity: 0.35; transform-origin: 80.85px 185.615px;" class="animable">
                                </polygon>
                            </g>
                            <path d="M87.73,176.24l-14.31-8.32a6,6,0,0,1-3.26,1.8L84.34,178A14,14,0,0,0,87.73,176.24Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 78.945px 172.96px;"
                                id="el96cmjjet42k" class="animable"></path>
                            <path
                                d="M83,177.94a3,3,0,0,0,2.75,0l2.4-1.39c.76-.44.75-1.15,0-1.59L74,166.78l-.59.34,13.87,8.11a.5.5,0,0,1,0,1l-2.23,1.28a1.81,1.81,0,0,1-1.65,0l-13.87-8.09-.67.39Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 78.7881px 172.527px;"
                                id="el3fgcnafc6m8" class="animable"></path>
                            <g id="elk0gea0xx6ud">
                                <path
                                    d="M83,177.94a3,3,0,0,0,2.75,0l2.4-1.39c.76-.44.75-1.15,0-1.59L74,166.78l-.59.34,13.87,8.11a.5.5,0,0,1,0,1l-2.23,1.28a1.81,1.81,0,0,1-1.65,0l-13.87-8.09-.67.39Z"
                                    style="opacity: 0.2; transform-origin: 78.7881px 172.527px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M68.87,169.75l.07,28.34L83,206.28a3,3,0,0,0,2.75,0l2.4-1.39a1,1,0,0,0,.57-.79l-.08-28.34a.93.93,0,0,1-.56.79L85.72,178a3,3,0,0,1-2.75,0Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 78.795px 188.182px;"
                                id="elo3ryp9k4zj" class="animable"></path>
                            <g id="elvkmqsuknbb">
                                <path
                                    d="M68.87,169.75l.07,28.34L83,206.28a3,3,0,0,0,2.75,0l2.4-1.39a1,1,0,0,0,.57-.79l-.08-28.34a.93.93,0,0,1-.56.79L85.72,178a3,3,0,0,1-2.75,0Z"
                                    style="opacity: 0.3; transform-origin: 78.795px 188.182px;" class="animable"></path>
                            </g>
                            <path
                                d="M84.34,178.28a2.82,2.82,0,0,0,1.38-.33l2.4-1.39a.93.93,0,0,0,.56-.79l.08,28.34a1,1,0,0,1-.57.79l-2.4,1.39a2.67,2.67,0,0,1-1.37.32Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 86.55px 191.191px;"
                                id="el167or9x29oe" class="animable"></path>
                            <g id="elw63s1lh7gs">
                                <path
                                    d="M84.34,178.28a2.82,2.82,0,0,0,1.38-.33l2.4-1.39a.93.93,0,0,0,.56-.79l.08,28.34a1,1,0,0,1-.57.79l-2.4,1.39a2.67,2.67,0,0,1-1.37.32Z"
                                    style="opacity: 0.1; transform-origin: 86.55px 191.191px;" class="animable"></path>
                            </g>
                            <path d="M84.34,182.05v1.13a7.94,7.94,0,0,0,4.35-2.51v-1.13A7.88,7.88,0,0,1,84.34,182.05Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 86.515px 181.36px;" id="elynjtefpntl"
                                class="animable"></path>
                            <path d="M84.4,201.22v1.12a8,8,0,0,0,4.35-2.51V198.7A8,8,0,0,1,84.4,201.22Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 86.575px 200.52px;" id="elj3q1zcspg"
                                class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 71.2792px 191.196px;">
                            <path d="M82.75,178.41v.79s-.31-.28-.32-.47S82.75,178.41,82.75,178.41Z" id="elm9u0nf8zpyj"
                                class="animable" style="transform-origin: 82.5899px 178.805px;"></path>
                            <path
                                d="M82.14,178.22a.83.83,0,0,0,.61,1.06c.86.27,1.4,0,1.53.24s-4.08,2.66-4.08,2.66l.8-3.48Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 82.2415px 180.2px;"
                                id="el158kaivpgno" class="animable"></path>
                            <g id="el9gdlb0z8lzg">
                                <path
                                    d="M82.14,178.22a.83.83,0,0,0,.61,1.06c.86.27,1.4,0,1.53.24s-4.08,2.66-4.08,2.66l.8-3.48Z"
                                    style="opacity: 0.3; transform-origin: 82.2415px 180.2px;" class="animable"></path>
                            </g>
                            <path
                                d="M80.55,210.78v.05l-.42-.24-18-10.42,1.59-31.28c0-.5.27-.75.61-.55l.62.35,16.87,9.74,0,.15Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 71.975px 189.55px;"
                                id="elii8s0vd2e9m" class="animable"></path>
                            <g id="elaigdpfq3hhu">
                                <path
                                    d="M80.55,210.78v.05l-.42-.24-18-10.42,1.59-31.28c0-.5.27-.75.61-.55l.62.35,16.87,9.74,0,.15Z"
                                    style="opacity: 0.2; transform-origin: 71.975px 189.55px;" class="animable"></path>
                            </g>
                            <path d="M78.1,183.15l-.88-1,4.53-2.61c.68.51,1.2.79,1.82.53Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 80.395px 181.345px;" id="el71gzawsis7e"
                                class="animable"></path>
                            <path
                                d="M81.52,179l-16.71-9.64a1.14,1.14,0,0,0-1.05,0l-4.47,2.57,16.95,9.7a1.56,1.56,0,0,1,1.23.21c.5.41.47-.1.47-.1l3.81-2.2C81.44,179.12,81.52,179,81.52,179Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 70.52px 175.616px;" id="elu44o1fksev"
                                class="animable"></path>
                            <path
                                d="M77.78,182.94c-.18-.1-.25-.21-.17-.26l.14-.08c.16-.09,0-.33-.33-.53a1.2,1.2,0,0,0-.9-.19l-.14.08c-.08,0-.38-.05-.67-.21l.1,31.33.43.24a.35.35,0,0,0,.24,0l.15-.09a1.17,1.17,0,0,1,.9.2c.34.19.48.43.33.52l-.15.08c-.08.05,0,.16.17.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 76.8149px 198.02px;"
                                id="ellt85vyciolh" class="animable"></path>
                            <g id="el5bdwu4qzuo">
                                <path
                                    d="M77.78,182.94c-.18-.1-.25-.21-.17-.26l.14-.08c.16-.09,0-.33-.33-.53a1.2,1.2,0,0,0-.9-.19l-.14.08c-.08,0-.38-.05-.67-.21l.1,31.33.43.24a.35.35,0,0,0,.24,0l.15-.09a1.17,1.17,0,0,1,.9.2c.34.19.48.43.33.52l-.15.08c-.08.05,0,.16.17.26Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 76.8149px 198.02px;"
                                    class="animable"></path>
                            </g>
                            <path d="M76.24,213.27v0l-.42-.24-18-10.42V172.3c0-.5.27-.75.61-.55l.61.35,17.24,9.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 67.05px 192.475px;"
                                id="ele8l2fjqz30m" class="animable"></path>
                            <g id="elx21w9n56c98">
                                <path d="M76.24,213.27v0l-.42-.24-18-10.42V172.3c0-.5.27-.75.61-.55l.61.35,17.24,9.53Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 67.05px 192.475px;"
                                    class="animable"></path>
                            </g>
                            <path d="M77.58,214.09V182.73l1.12.45v31.26a1,1,0,0,1-.62-.06Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 78.14px 198.597px;"
                                id="el7fhxyentsyv" class="animable"></path>
                            <g id="elgo6grzs29hv">
                                <path d="M77.58,214.09V182.73l1.12.45v31.26a1,1,0,0,1-.62-.06Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 78.14px 198.597px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M84.73,210.84a.13.13,0,0,1,0,.06.06.06,0,0,1,0,0,.19.19,0,0,1,0,.08l0,0a1.13,1.13,0,0,1-.1.13l-.12.14-.16.14-.1.07-.09.06-.2.13L80,214a3.79,3.79,0,0,1-1.31.47V183.18l6-3.61v31.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 81.7121px 197.02px;"
                                id="el1mynfco1u8e" class="animable"></path>
                            <g id="el0xt344gplq5">
                                <g style="opacity: 0.7; transform-origin: 81.7121px 197.02px;" class="animable">
                                    <path
                                        d="M84.73,210.84a.13.13,0,0,1,0,.06.06.06,0,0,1,0,0,.19.19,0,0,1,0,.08l0,0a1.13,1.13,0,0,1-.1.13l-.12.14-.16.14-.1.07-.09.06-.2.13L80,214a3.79,3.79,0,0,1-1.31.47V183.18l6-3.61v31.26Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 81.7121px 197.02px;"
                                        id="elzriteckkm4" class="animable"></path>
                                </g>
                            </g>
                            <path d="M78.7,185.77v3.77a15.39,15.39,0,0,0,6-3.48v-3.77A15.39,15.39,0,0,1,78.7,185.77Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 81.7px 185.915px;" id="elz2v560ei8b"
                                class="animable"></path>
                            <path d="M78.7,206.77v3.77a15.28,15.28,0,0,0,6-3.49v-3.77A15.28,15.28,0,0,1,78.7,206.77Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 81.7px 206.91px;" id="elhyv012iub2p"
                                class="animable"></path>
                            <path
                                d="M80,182.71l-.3-.52a2.8,2.8,0,0,1-1.3.41.81.81,0,0,0-.1-.52,1.72,1.72,0,0,0-.59-.53,2.3,2.3,0,0,0-.88-.3h-.06a.88.88,0,0,0-.54.1l-16-9.24-.54-.31-.69-.4a.36.36,0,0,0-.38,0l-.61.35a.35.35,0,0,1,.38,0h0l1.83,1.06,15.48,8.94a1.26,1.26,0,0,0,.67.22l.14-.09a.53.53,0,0,1,.32,0,1.78,1.78,0,0,1,.58.21c.34.2.49.44.33.53l-.14.08c-.08,0,0,.16.17.26l.3.18A2.52,2.52,0,0,0,80,182.71Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 69.005px 177.264px;"
                                id="elni6lbdpdvi" class="animable"></path>
                            <g id="el2fzqdmrhjm6">
                                <path
                                    d="M80,182.71l-.3-.52a2.8,2.8,0,0,1-1.3.41.81.81,0,0,0-.1-.52,1.72,1.72,0,0,0-.59-.53,2.3,2.3,0,0,0-.88-.3h-.06a.88.88,0,0,0-.54.1l-16-9.24-.54-.31-.69-.4a.36.36,0,0,0-.38,0l-.61.35a.35.35,0,0,1,.38,0h0l1.83,1.06,15.48,8.94a1.26,1.26,0,0,0,.67.22l.14-.09a.53.53,0,0,1,.32,0,1.78,1.78,0,0,1,.58.21c.34.2.49.44.33.53l-.14.08c-.08,0,0,.16.17.26l.3.18A2.52,2.52,0,0,0,80,182.71Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 69.005px 177.264px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M79.71,182.19,83.59,180l.16-.1.13-.09h0a1.74,1.74,0,0,1-1.45-.23,1.53,1.53,0,0,1-.57-.52.83.83,0,0,1-.09-.57l-.06,0-.11-.06L66.14,169.4l-.89-.51-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.09.44-.26a.36.36,0,0,1,.32,0h0l.27.16.18.1.29.17.19.11.13.07.23.13,12.29,7.1,3.92,2.27c.28.15.45.32.38.38l0,0-.14.07c-.17.1,0,.34.31.54a.83.83,0,0,0,.78.11l.16-.1a.3.3,0,0,1,.25,0l.09.06.19.11.24.14a.24.24,0,0,1,.13.28.08.08,0,0,1,0,0,.41.41,0,0,1,0,.08h0l0,0a.71.71,0,0,1-.1.14l-.12.13-.16.14-.1.08-.08.05-.2.13L80,182.71Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 74.3242px 175.316px;"
                                id="eluohzyowqhq" class="animable"></path>
                            <g id="ellavq1l4fi">
                                <path
                                    d="M79.71,182.19,83.59,180l.16-.1.13-.09h0a1.74,1.74,0,0,1-1.45-.23,1.53,1.53,0,0,1-.57-.52.83.83,0,0,1-.09-.57l-.06,0-.11-.06L66.14,169.4l-.89-.51-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.09.44-.26a.36.36,0,0,1,.32,0h0l.27.16.18.1.29.17.19.11.13.07.23.13,12.29,7.1,3.92,2.27c.28.15.45.32.38.38l0,0-.14.07c-.17.1,0,.34.31.54a.83.83,0,0,0,.78.11l.16-.1a.3.3,0,0,1,.25,0l.09.06.19.11.24.14a.24.24,0,0,1,.13.28.08.08,0,0,1,0,0,.41.41,0,0,1,0,.08h0l0,0a.71.71,0,0,1-.1.14l-.12.13-.16.14-.1.08-.08.05-.2.13L80,182.71Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 74.3242px 175.316px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 62.1114px 197.128px;">
                            <path d="M55.12,174.87l0,.88-.5-.53A.55.55,0,0,1,55.12,174.87Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 54.87px 175.31px;" id="elw1dknrsbyta"
                                class="animable"></path>
                            <g id="eluh2sricpepd">
                                <path d="M55.12,174.87l0,.88-.5-.53A.55.55,0,0,1,55.12,174.87Z"
                                    style="opacity: 0.5; transform-origin: 54.87px 175.31px;" class="animable"></path>
                            </g>
                            <path
                                d="M74.32,187.47a1.72,1.72,0,0,0-.79-1.36L55.86,175.9l.21,30.43v.72l17.46,10.32c.44.25.79,0,.79-.45Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 65.09px 196.685px;"
                                id="elxloke6lbt2o" class="animable"></path>
                            <path
                                d="M54.52,191.24v-7.11l-4-2.31v-5.36l2.69-1.55c.35-.2,1.08-.09,1.08.1a4.75,4.75,0,0,0,.71.61,6.73,6.73,0,0,0,1.46.63l.22,16.23Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 53.6px 183.642px;" id="elb63s9h25yqa"
                                class="animable"></path>
                            <g id="eljs6w2d5rrdl">
                                <path
                                    d="M54.52,191.24v-7.11l-4-2.31v-5.36l2.69-1.55c.35-.2,1.08-.09,1.08.1a4.75,4.75,0,0,0,.71.61,6.73,6.73,0,0,0,1.46.63l.22,16.23Z"
                                    style="opacity: 0.15; transform-origin: 53.6px 183.642px;" class="animable"></path>
                            </g>
                            <path d="M52.12,178.48,55,176.8l-.05,0a1.66,1.66,0,0,1-.59-.54.81.81,0,0,1-.14-.48l-3.44,2Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 52.89px 177.13px;" id="el67m61wn4xlm"
                                class="animable"></path>
                            <path
                                d="M56.47,177a1,1,0,0,1-.61.1,1.94,1.94,0,0,1-.33-.07l-.1,0-.11,0-.1,0L55,176.8l-2.9,1.67.87.5h0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 54.285px 177.885px;"
                                id="el02d7zhx4cbv5" class="animable"></path>
                            <g id="el8x3gdbmldq7">
                                <path d="M53.21,174.91c.35-.2,1.08-.09,1.08.1h0l0,.73L52,177H50.8l-.28-.23v-.33Z"
                                    style="opacity: 0.4; transform-origin: 52.405px 175.902px;" class="animable"></path>
                            </g>
                            <path d="M70.22,188.93,73.54,187a1,1,0,0,0-.37-.39l-1.94-1.12L56.47,177,53,179Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 63.27px 182.965px;"
                                id="eli7gd8u2xcla" class="animable"></path>
                            <path d="M70.66,218.52l2.51-1.45a1.15,1.15,0,0,0,.53-.91V187.53a1,1,0,0,0-.16-.52l-3,1.7Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 72.12px 202.765px;" id="elg11g1dsnbn"
                                class="animable"></path>
                            <path
                                d="M51.75,208.82V178.27l.3-.18c.17-.09.1-.37-.24-.57a1,1,0,0,0-1-.14l-.31.14v31.25a.32.32,0,0,0,.16,0l.14-.08A1.16,1.16,0,0,1,51.75,208.82Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 51.3195px 193.062px;"
                                id="el2lk5xq4mtvv" class="animable"></path>
                            <g id="el0z6owt9n9or">
                                <path
                                    d="M51.75,208.82V178.27l.3-.18c.17-.09.1-.37-.24-.57a1,1,0,0,0-1-.14l-.31.14v31.25a.32.32,0,0,0,.16,0l.14-.08A1.16,1.16,0,0,1,51.75,208.82Z"
                                    style="opacity: 0.1; transform-origin: 51.3195px 193.062px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M69.43,188.48l-17.28-10c-.21-.14-.39-.26-.4-.36v30.68s0,.18,0,.36a1,1,0,0,0,.53.66l17.15,9.9c.43.25.79,0,.79-.45V189.84A1.72,1.72,0,0,0,69.43,188.48Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 60.985px 198.97px;"
                                id="elll22ram1zdg" class="animable"></path>
                            <path
                                d="M50.53,208.77V177.52a.16.16,0,0,1-.09,0l-.09-.06-.19-.11-.24-.14a.24.24,0,0,1-.13-.27s0,0,0,0a.5.5,0,0,1,.05-.13.71.71,0,0,1,.1-.14l.12-.13.16-.14.1-.08.09-.05a1,1,0,0,1,.2-.13l-.66.38a1.63,1.63,0,0,0-.66,1.29v29.45a1.56,1.56,0,0,0,.62,1.26l.32.19h0l.14.07h0A.24.24,0,0,0,50.53,208.77Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 49.95px 192.465px;"
                                id="elxa987r328cm" class="animable"></path>
                            <path
                                d="M73.53,186.11l-1.06-.62-16-9.24a.94.94,0,0,1-.6.1,2.3,2.3,0,0,1-.88-.3,1.72,1.72,0,0,1-.59-.53.81.81,0,0,1-.1-.52,2.93,2.93,0,0,0-1.3.41l-.3-.52a2.46,2.46,0,0,1,1.93-.4l.3.17c.18.1.25.22.17.26L55,175c-.16.1,0,.33.33.53a1.2,1.2,0,0,0,.9.19l.14-.08c.08,0,.38.05.67.22l15.48,8.93,1.67,1h0a1.68,1.68,0,0,1,.56.59l-.61.35A1.52,1.52,0,0,0,73.53,186.11Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 63.725px 180.584px;"
                                id="elf0w52971ulq" class="animable"></path>
                            <g id="elo3fjzh5onkg">
                                <path
                                    d="M73.53,186.11l-1.06-.62-16-9.24a.94.94,0,0,1-.6.1,2.3,2.3,0,0,1-.88-.3,1.72,1.72,0,0,1-.59-.53.81.81,0,0,1-.1-.52,2.93,2.93,0,0,0-1.3.41l-.3-.52a2.46,2.46,0,0,1,1.93-.4l.3.17c.18.1.25.22.17.26L55,175c-.16.1,0,.33.33.53a1.2,1.2,0,0,0,.9.19l.14-.08c.08,0,.38.05.67.22l15.48,8.93,1.67,1h0a1.68,1.68,0,0,1,.56.59l-.61.35A1.52,1.52,0,0,0,73.53,186.11Z"
                                    style="opacity: 0.3; transform-origin: 63.725px 180.584px;" class="animable"></path>
                            </g>
                            <path
                                d="M69.44,188.48h0l-1.07-.62-12.29-7.1-3.92-2.26c-.28-.16-.45-.33-.38-.39h0l.15-.09c.17-.1,0-.34-.31-.54a.82.82,0,0,0-.77-.11l-.17.1a.3.3,0,0,1-.25,0l-.09-.06-.19-.11-.24-.14a.24.24,0,0,1-.13-.27s0,0,0,0a.32.32,0,0,1,0-.09l0,0a.71.71,0,0,1,.1-.14l.12-.13.16-.14.1-.08.09-.05a1,1,0,0,1,.2-.13l2.08-1.2.3.52-2.08,1.21-.16.09-.12.09h0a1.74,1.74,0,0,1,1.45.23,1.62,1.62,0,0,1,.57.52.91.91,0,0,1,.1.57l.05,0,.11.06,15.47,8.94,1.68,1h0a1.59,1.59,0,0,1,.54.58l-.6.35A1.62,1.62,0,0,0,69.44,188.48Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 60.157px 182.01px;" id="elfx0fbq5qv9"
                                class="animable"></path>
                            <g id="elj7ztknaepqa">
                                <path
                                    d="M69.44,188.48h0l-1.07-.62-12.29-7.1-3.92-2.26c-.28-.16-.45-.33-.38-.39h0l.15-.09c.17-.1,0-.34-.31-.54a.82.82,0,0,0-.77-.11l-.17.1a.3.3,0,0,1-.25,0l-.09-.06-.19-.11-.24-.14a.24.24,0,0,1-.13-.27s0,0,0,0a.32.32,0,0,1,0-.09l0,0a.71.71,0,0,1,.1-.14l.12-.13.16-.14.1-.08.09-.05a1,1,0,0,1,.2-.13l2.08-1.2.3.52-2.08,1.21-.16.09-.12.09h0a1.74,1.74,0,0,1,1.45.23,1.62,1.62,0,0,1,.57.52.91.91,0,0,1,.1.57l.05,0,.11.06,15.47,8.94,1.68,1h0a1.59,1.59,0,0,1,.54.58l-.6.35A1.62,1.62,0,0,0,69.44,188.48Z"
                                    style="opacity: 0.3; transform-origin: 60.157px 182.01px;" class="animable"></path>
                            </g>
                            <path
                                d="M70,219.8l.61-.36a.54.54,0,0,0,.24-.49h0V189.49h0a1.79,1.79,0,0,0-.23-.78l-.61.35a1.66,1.66,0,0,1,.23.78v1.23h0v28.22A.53.53,0,0,1,70,219.8Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 70.4257px 204.255px;"
                                id="elvgeopaolwzb" class="animable"></path>
                            <g id="elsk9xzd8c9cc">
                                <path
                                    d="M70,219.8l.61-.36a.54.54,0,0,0,.24-.49h0V189.49h0a1.79,1.79,0,0,0-.23-.78l-.61.35a1.66,1.66,0,0,1,.23.78v1.23h0v28.22A.53.53,0,0,1,70,219.8Z"
                                    style="opacity: 0.2; transform-origin: 70.4257px 204.255px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M74.08,217.43l.62-.35a.54.54,0,0,0,.23-.5h0V187.12h0a1.71,1.71,0,0,0-.23-.77l-.61.35a1.6,1.6,0,0,1,.23.77v1.23h0v28.22A.52.52,0,0,1,74.08,217.43Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 74.5065px 201.89px;"
                                id="elp0hmeetdui" class="animable"></path>
                            <g id="eluh6tipsaed9">
                                <path
                                    d="M74.08,217.43l.62-.35a.54.54,0,0,0,.23-.5h0V187.12h0a1.71,1.71,0,0,0-.23-.77l-.61.35a1.6,1.6,0,0,1,.23.77v1.23h0v28.22A.52.52,0,0,1,74.08,217.43Z"
                                    style="opacity: 0.2; transform-origin: 74.5065px 201.89px;" class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 55.9542px 203.599px;">
                            <polygon points="52.17 183.12 68.55 192.7 64.91 221.97 48.53 212.4 52.17 183.12"
                                id="elgxuen25pbbc" class="animable" style="transform-origin: 58.54px 202.545px;">
                            </polygon>
                            <path
                                d="M67.93,193.16,52.07,184a8.19,8.19,0,0,1-4.1,1.71l15.72,9.17A19.64,19.64,0,0,0,67.93,193.16Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 57.95px 189.44px;" id="elldnenwg9ih"
                                class="animable"></path>
                            <path
                                d="M62.07,194.71a4,4,0,0,0,3.25.13l3-1.33c1-.41,1.05-1.15.21-1.64l-15.64-9.08-.75.33,15.37,9c.51.3.45.74-.12,1L64.6,194.3a2.4,2.4,0,0,1-1.95-.07l-15.36-9-.85.37Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 57.7792px 188.957px;" id="el0il6jrqozio"
                                class="animable"></path>
                            <path
                                d="M46.44,185.63l-3.65,29.28L58.42,224a4.09,4.09,0,0,0,3.26.13l3-1.33c.47-.21.73-.5.77-.8l3.65-29.27c0,.3-.3.58-.78.79l-3,1.33a4,4,0,0,1-3.25-.13Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 55.945px 205.019px;" id="eldau4a70ousk"
                                class="animable"></path>
                            <path
                                d="M63.65,195.12a3.92,3.92,0,0,0,1.67-.28l3-1.33c.48-.21.74-.49.78-.79L65.48,222c0,.3-.3.59-.77.8l-3,1.33a4.1,4.1,0,0,1-1.67.27Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 64.57px 208.562px;" id="ello8cuckfet"
                                class="animable"></path>
                        </g>
                        <polygon
                            points="150.28 121.78 116.62 102.34 19.64 158.35 19.64 161.12 53.3 180.56 150.28 124.55 150.28 121.78"
                            style="fill: rgb(186, 104, 200); transform-origin: 84.96px 141.45px;" id="elgz0yi2lxenc"
                            class="animable"></polygon>
                        <g id="eljhuy7jmq1nk">
                            <polygon
                                points="150.28 121.78 116.62 102.34 19.64 158.35 19.64 161.12 53.3 180.56 150.28 124.55 150.28 121.78"
                                style="fill: rgb(255, 255, 255); opacity: 0.75; transform-origin: 84.96px 141.45px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="53.3 177.78 150.28 121.78 116.62 102.34 19.64 158.35 53.3 177.78"
                            style="fill: rgb(186, 104, 200); transform-origin: 84.96px 140.06px;" id="elwcalp8k2ig"
                            class="animable"></polygon>
                        <g id="eljk2yyeotu6">
                            <polygon points="53.3 177.78 150.28 121.78 116.62 102.34 19.64 158.35 53.3 177.78"
                                style="fill: rgb(255, 255, 255); opacity: 0.85; transform-origin: 84.96px 140.06px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="53.3 177.78 53.3 180.56 19.64 161.12 19.64 158.35 53.3 177.78"
                            style="fill: rgb(186, 104, 200); transform-origin: 36.47px 169.455px;" id="elmg54o8nc2ic"
                            class="animable"></polygon>
                        <g id="elhej0i1eerm">
                            <polygon points="53.3 177.78 53.3 180.56 19.64 161.12 19.64 158.35 53.3 177.78"
                                style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 36.47px 169.455px;"
                                class="animable"></polygon>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 132.475px 100.535px;">
                            <path d="M143.93,87.73v.79s-.31-.28-.32-.47S143.93,87.73,143.93,87.73Z" id="elq3ng6sc2bnq"
                                class="animable" style="transform-origin: 143.77px 88.125px;"></path>
                            <path
                                d="M143.32,87.54a.83.83,0,0,0,.61,1.06c.86.27,1.4,0,1.53.24s-4.08,2.66-4.08,2.66l.8-3.48Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 143.421px 89.52px;"
                                id="el9j684kfc2l8" class="animable"></path>
                            <g id="elkxj7jpzlyea">
                                <path
                                    d="M143.32,87.54a.83.83,0,0,0,.61,1.06c.86.27,1.4,0,1.53.24s-4.08,2.66-4.08,2.66l.8-3.48Z"
                                    style="opacity: 0.3; transform-origin: 143.421px 89.52px;" class="animable"></path>
                            </g>
                            <path
                                d="M141.73,120.1v.05l-.42-.24-18-10.42,1.59-31.28c0-.5.27-.75.61-.55l.62.35L143,87.75l0,.15Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 133.155px 98.8705px;"
                                id="ela8jffh1edtq" class="animable"></path>
                            <g id="elibgn8888kom">
                                <path
                                    d="M141.73,120.1v.05l-.42-.24-18-10.42,1.59-31.28c0-.5.27-.75.61-.55l.62.35L143,87.75l0,.15Z"
                                    style="opacity: 0.2; transform-origin: 133.155px 98.8705px;" class="animable">
                                </path>
                            </g>
                            <path d="M139.28,92.47l-.88-1,4.53-2.61c.68.51,1.2.79,1.82.53Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 141.575px 90.665px;" id="el8ulxb6shco3"
                                class="animable"></path>
                            <path
                                d="M142.7,88.32,126,78.68a1.14,1.14,0,0,0-1,0l-4.47,2.57L137.42,91a1.56,1.56,0,0,1,1.23.21c.5.41.47-.1.47-.1l3.81-2.2C142.62,88.44,142.7,88.32,142.7,88.32Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 131.73px 84.967px;"
                                id="elkn4ohnnzcim" class="animable"></path>
                            <path
                                d="M139,92.26c-.18-.1-.25-.21-.17-.26l.14-.08c.16-.09,0-.33-.33-.52a1.17,1.17,0,0,0-.9-.2l-.14.08c-.08,0-.38,0-.67-.21l.1,31.33.43.24a.35.35,0,0,0,.24,0l.15-.09a1.17,1.17,0,0,1,.9.2c.34.19.48.43.33.52l-.15.08c-.08,0,0,.16.17.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 138.035px 107.34px;"
                                id="elf13dhjms7lk" class="animable"></path>
                            <g id="elxn0z7l9mhf9">
                                <path
                                    d="M139,92.26c-.18-.1-.25-.21-.17-.26l.14-.08c.16-.09,0-.33-.33-.52a1.17,1.17,0,0,0-.9-.2l-.14.08c-.08,0-.38,0-.67-.21l.1,31.33.43.24a.35.35,0,0,0,.24,0l.15-.09a1.17,1.17,0,0,1,.9.2c.34.19.48.43.33.52l-.15.08c-.08,0,0,.16.17.26Z"
                                    style="opacity: 0.4; transform-origin: 138.035px 107.34px;" class="animable"></path>
                            </g>
                            <path d="M137.42,122.59v0l-.42-.24L119,112V81.62c0-.5.27-.75.61-.55l.61.35L137.42,91Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 128.21px 101.795px;"
                                id="el0ob5mvekivfh" class="animable"></path>
                            <g id="ell7oq77x5rh">
                                <path d="M137.42,122.59v0l-.42-.24L119,112V81.62c0-.5.27-.75.61-.55l.61.35L137.42,91Z"
                                    style="opacity: 0.2; transform-origin: 128.21px 101.795px;" class="animable"></path>
                            </g>
                            <path d="M138.76,123.41V92.05l1.12.45v31.27a1.08,1.08,0,0,1-.62-.07Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 139.32px 107.919px;"
                                id="elparwqdetdw" class="animable"></path>
                            <g id="elxinkylar1gr">
                                <path d="M138.76,123.41V92.05l1.12.45v31.27a1.08,1.08,0,0,1-.62-.07Z"
                                    style="opacity: 0.2; transform-origin: 139.32px 107.919px;" class="animable"></path>
                            </g>
                            <path
                                d="M145.91,120.16a.13.13,0,0,1,0,.06.06.06,0,0,1,0,0,.19.19,0,0,1,0,.08l0,0a1.13,1.13,0,0,1-.1.13l-.12.14-.16.14-.1.07-.09.06-.2.13-3.88,2.24a3.79,3.79,0,0,1-1.31.47V92.5l6-3.61v31.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 142.95px 106.285px;"
                                id="elg4vyxqrcapb" class="animable"></path>
                            <path d="M139.88,96.84v3.77a15.39,15.39,0,0,0,6-3.48V93.36A15.39,15.39,0,0,1,139.88,96.84Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 142.88px 96.985px;"
                                id="elde1vdr7bkht" class="animable"></path>
                            <g id="el3rh69uwouef">
                                <path
                                    d="M139.88,96.84v3.77a15.39,15.39,0,0,0,6-3.48V93.36A15.39,15.39,0,0,1,139.88,96.84Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 142.88px 96.985px;"
                                    class="animable"></path>
                            </g>
                            <path d="M139.88,102v1.4a15.39,15.39,0,0,0,6-3.48V98.52A15.28,15.28,0,0,1,139.88,102Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 142.88px 100.96px;" id="elkb70rwxrp5"
                                class="animable"></path>
                            <g id="el7o1fubwcji">
                                <path d="M139.88,102v1.4a15.39,15.39,0,0,0,6-3.48V98.52A15.28,15.28,0,0,1,139.88,102Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 142.88px 100.96px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M141.19,92l-.3-.52a2.8,2.8,0,0,1-1.3.41.81.81,0,0,0-.1-.52,1.72,1.72,0,0,0-.59-.53,2.3,2.3,0,0,0-.88-.3H138a.88.88,0,0,0-.54.1l-16-9.24-.54-.31-.69-.4a.36.36,0,0,0-.38,0l-.61.35a.35.35,0,0,1,.38,0h0l1.83,1.06,15.48,8.94a1.26,1.26,0,0,0,.67.22l.14-.09a.53.53,0,0,1,.32,0,1.78,1.78,0,0,1,.58.21c.34.2.49.44.33.53l-.14.08c-.08,0,0,.16.17.26l.3.18A2.52,2.52,0,0,0,141.19,92Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 130.215px 86.5513px;"
                                id="elmui0vji1v0g" class="animable"></path>
                            <g id="elrz55175lk9">
                                <path
                                    d="M141.19,92l-.3-.52a2.8,2.8,0,0,1-1.3.41.81.81,0,0,0-.1-.52,1.72,1.72,0,0,0-.59-.53,2.3,2.3,0,0,0-.88-.3H138a.88.88,0,0,0-.54.1l-16-9.24-.54-.31-.69-.4a.36.36,0,0,0-.38,0l-.61.35a.35.35,0,0,1,.38,0h0l1.83,1.06,15.48,8.94a1.26,1.26,0,0,0,.67.22l.14-.09a.53.53,0,0,1,.32,0,1.78,1.78,0,0,1,.58.21c.34.2.49.44.33.53l-.14.08c-.08,0,0,.16.17.26l.3.18A2.52,2.52,0,0,0,141.19,92Z"
                                    style="opacity: 0.3; transform-origin: 130.215px 86.5513px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M140.89,91.51l3.88-2.24.16-.1.13-.09s0,0,0,0a1.74,1.74,0,0,1-1.45-.23,1.53,1.53,0,0,1-.57-.52.83.83,0,0,1-.09-.57l-.06,0-.1-.06-15.48-8.94-.89-.51-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.09.44-.26a.36.36,0,0,1,.32,0h0l.27.16.18.1.29.17.19.11.13.07.23.13,12.29,7.1,3.92,2.27c.28.15.45.32.38.38s0,0,0,0l-.14.07c-.17.1,0,.34.31.54a.83.83,0,0,0,.78.11l.16-.1a.3.3,0,0,1,.25,0l.09.06.19.11.24.14a.23.23,0,0,1,.13.28.08.08,0,0,1,0,0,.16.16,0,0,1,0,.08h0l0,0a.71.71,0,0,1-.1.14l-.12.13-.16.14-.1.08-.08,0-.2.13L141.19,92Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 135.495px 84.6413px;"
                                id="elklr3u0c0hyh" class="animable"></path>
                            <g id="elcmjydmxywcm">
                                <path
                                    d="M140.89,91.51l3.88-2.24.16-.1.13-.09s0,0,0,0a1.74,1.74,0,0,1-1.45-.23,1.53,1.53,0,0,1-.57-.52.83.83,0,0,1-.09-.57l-.06,0-.1-.06-15.48-8.94-.89-.51-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.09.44-.26a.36.36,0,0,1,.32,0h0l.27.16.18.1.29.17.19.11.13.07.23.13,12.29,7.1,3.92,2.27c.28.15.45.32.38.38s0,0,0,0l-.14.07c-.17.1,0,.34.31.54a.83.83,0,0,0,.78.11l.16-.1a.3.3,0,0,1,.25,0l.09.06.19.11.24.14a.23.23,0,0,1,.13.28.08.08,0,0,1,0,0,.16.16,0,0,1,0,.08h0l0,0a.71.71,0,0,1-.1.14l-.12.13-.16.14-.1.08-.08,0-.2.13L141.19,92Z"
                                    style="opacity: 0.3; transform-origin: 135.495px 84.6413px;" class="animable">
                                </path>
                            </g>
                        </g>
                        <g id="freepik--books--inject-2" class="animable"
                            style="transform-origin: 120.82px 111.465px;">
                            <g id="freepik--book--inject-2" class="animable"
                                style="transform-origin: 124.77px 109.14px;">
                                <polygon points="119.41 89.73 134.07 98.3 134.14 126.41 119.48 117.84 119.41 89.73"
                                    style="fill: rgb(186, 104, 200); transform-origin: 126.775px 108.07px;"
                                    id="eloikdh05cdlq" class="animable"></polygon>
                                <path
                                    d="M133.6,98.77l-14.19-8.25a5.86,5.86,0,0,1-3.24,1.78l14.07,8.21A14,14,0,0,0,133.6,98.77Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 124.885px 95.515px;"
                                    id="el96yhb9wuzin" class="animable"></path>
                                <path
                                    d="M128.88,100.46a3,3,0,0,0,2.72,0L134,99.09c.75-.43.75-1.14,0-1.58l-14-8.12-.59.34,13.75,8a.5.5,0,0,1,0,.94L131,100a1.79,1.79,0,0,1-1.64,0l-13.75-8-.66.38Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 124.756px 95.088px;"
                                    id="elrj9xt7jv2nn" class="animable"></path>
                                <g id="elj1uzjomds4b">
                                    <path
                                        d="M128.88,100.46a3,3,0,0,0,2.72,0L134,99.09c.75-.43.75-1.14,0-1.58l-14-8.12-.59.34,13.75,8a.5.5,0,0,1,0,.94L131,100a1.79,1.79,0,0,1-1.64,0l-13.75-8-.66.38Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 124.756px 95.088px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M114.9,92.33l.07,28.11,14,8.12a3,3,0,0,0,2.73,0l2.38-1.38a1,1,0,0,0,.56-.78l-.07-28.11a1,1,0,0,1-.56.79l-2.39,1.38a3,3,0,0,1-2.72,0Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 124.77px 110.609px;"
                                    id="elpktfdg2pukj" class="animable"></path>
                                <g id="elhbzq5xzrex9">
                                    <path
                                        d="M114.9,92.33l.07,28.11,14,8.12a3,3,0,0,0,2.73,0l2.38-1.38a1,1,0,0,0,.56-.78l-.07-28.11a1,1,0,0,1-.56.79l-2.39,1.38a3,3,0,0,1-2.72,0Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 124.77px 110.609px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M130.24,100.79a2.82,2.82,0,0,0,1.36-.32L134,99.09a1,1,0,0,0,.56-.79l.07,28.11a1,1,0,0,1-.56.78l-2.38,1.38a2.76,2.76,0,0,1-1.36.32Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 132.435px 113.595px;"
                                    id="el6841d9fcvq3" class="animable"></path>
                                <g id="el5yypim9v5cu">
                                    <path
                                        d="M130.24,100.79a2.82,2.82,0,0,0,1.36-.32L134,99.09a1,1,0,0,0,.56-.79l.07,28.11a1,1,0,0,1-.56.78l-2.38,1.38a2.76,2.76,0,0,1-1.36.32Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 132.435px 113.595px;"
                                        class="animable"></path>
                                </g>
                                <path d="M130.29,125.2a9.6,9.6,0,0,0,4.33-2.5v-1.31a9.6,9.6,0,0,1-4.33,2.5Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 132.455px 123.295px;"
                                    id="elx9oa23753an" class="animable"></path>
                                <path d="M130.29,106.5a9.51,9.51,0,0,0,4.33-2.5v-1.31a9.42,9.42,0,0,1-4.33,2.5Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 132.455px 104.595px;"
                                    id="elsgty8hl21ue" class="animable"></path>
                            </g>
                            <g id="freepik--book--inject-2" class="animable"
                                style="transform-origin: 118.355px 116.535px;">
                                <polygon points="115.59 99.79 129.17 107.73 125.44 131.59 111.86 123.66 115.59 99.79"
                                    style="fill: rgb(186, 104, 200); transform-origin: 120.515px 115.69px;"
                                    id="el3u6l8fntb91" class="animable"></polygon>
                                <g id="el8yim7vmlg6x">
                                    <polygon points="115.59 99.79 129.17 107.73 125.44 131.59 111.86 123.66 115.59 99.79"
                                        style="opacity: 0.35; transform-origin: 120.515px 115.69px;" class="animable">
                                    </polygon>
                                </g>
                                <path
                                    d="M128.63,108.1l-13.15-7.64a7.15,7.15,0,0,1-3.49,1.37l13,7.6A17.32,17.32,0,0,0,128.63,108.1Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 120.31px 104.945px;"
                                    id="elrr3bdldduum" class="animable"></path>
                                <path
                                    d="M123.66,109.32a3.46,3.46,0,0,0,2.74.13l2.58-1.06c.81-.33.91-.93.21-1.34l-13-7.52-.64.26,12.74,7.44c.42.25.36.61-.13.81l-2.39,1a2.14,2.14,0,0,1-1.65-.08l-12.73-7.43-.73.3Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 120.159px 104.601px;"
                                    id="el85ztowl1kia" class="animable"></path>
                                <g id="el4ku2pwelv5d">
                                    <path
                                        d="M123.66,109.32a3.46,3.46,0,0,0,2.74.13l2.58-1.06c.81-.33.91-.93.21-1.34l-13-7.52-.64.26,12.74,7.44c.42.25.36.61-.13.81l-2.39,1a2.14,2.14,0,0,1-1.65-.08l-12.73-7.43-.73.3Z"
                                        style="opacity: 0.2; transform-origin: 120.159px 104.601px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M110.7,101.8,107,125.66l13,7.53a3.48,3.48,0,0,0,2.73.13l2.58-1.06c.41-.17.64-.4.67-.64l3.73-23.87c0,.24-.27.47-.67.64l-2.58,1.06a3.51,3.51,0,0,1-2.74-.12Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 118.355px 117.669px;"
                                    id="elxd0vrjjyn5" class="animable"></path>
                                <g id="el8tuzm6usah6">
                                    <path
                                        d="M110.7,101.8,107,125.66l13,7.53a3.48,3.48,0,0,0,2.73.13l2.58-1.06c.41-.17.64-.4.67-.64l3.73-23.87c0,.24-.27.47-.67.64l-2.58,1.06a3.51,3.51,0,0,1-2.74-.12Z"
                                        style="opacity: 0.3; transform-origin: 118.355px 117.669px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M125,109.67a3.43,3.43,0,0,0,1.41-.22l2.58-1.06c.4-.17.63-.4.67-.64l-3.73,23.87c0,.24-.26.47-.67.64l-2.58,1.06a3.22,3.22,0,0,1-1.41.21Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 125.465px 120.645px;"
                                    id="elle7laqodrqe" class="animable"></path>
                                <g id="elscnv0oid69p">
                                    <path
                                        d="M125,109.67a3.43,3.43,0,0,0,1.41-.22l2.58-1.06c.4-.17.63-.4.67-.64l-3.73,23.87c0,.24-.26.47-.67.64l-2.58,1.06a3.22,3.22,0,0,1-1.41.21Z"
                                        style="opacity: 0.1; transform-origin: 125.465px 120.645px;" class="animable">
                                    </path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 102.65px 117.876px;">
                            <path d="M114.1,105.1v.79s-.31-.28-.33-.48S114.1,105.1,114.1,105.1Z" id="el6vpuz0yq0y9"
                                class="animable" style="transform-origin: 113.935px 105.495px;"></path>
                            <path d="M113.5,104.91a.82.82,0,0,0,.61,1c.86.27,1.39,0,1.52.24s-4.07,2.67-4.07,2.67l.8-3.48Z"
                                id="el918gr09yblw" class="animable" style="transform-origin: 113.596px 106.865px;">
                            </path>
                            <path
                                d="M111.91,137.46v0l-.42-.24-18-10.42L95,95.57c0-.5.27-.75.61-.55l.62.36,16.86,9.73v.15Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 103.29px 116.205px;" id="el389i859w6g"
                                class="animable"></path>
                            <path d="M109.46,109.83l-.89-1,4.53-2.62c.69.52,1.21.79,1.82.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 111.745px 108.02px;"
                                id="el05bjg1qe8eb5" class="animable"></path>
                            <path
                                d="M112.88,105.69,96.17,96a1.14,1.14,0,0,0-1,0l-4.47,2.58,16.94,9.7a1.53,1.53,0,0,1,1.24.21c.49.4.47-.11.47-.11l3.8-2.2C112.79,105.8,112.88,105.69,112.88,105.69Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 101.925px 102.264px;"
                                id="elhbxrpnyysrj" class="animable"></path>
                            <path
                                d="M109.13,109.63c-.17-.1-.24-.22-.16-.27l.14-.08c.16-.09,0-.32-.33-.52a1.17,1.17,0,0,0-.9-.2l-.14.09a1.17,1.17,0,0,1-.67-.22l.1,31.33.42.24a.37.37,0,0,0,.25,0l.14-.08a1.15,1.15,0,0,1,.9.19c.35.2.49.43.33.52l-.14.08c-.08.05,0,.17.17.27Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 108.173px 124.705px;" id="eloew1gt7ouse"
                                class="animable"></path>
                            <path d="M107.59,140V140l-.42-.24-18-10.42V99c0-.5.28-.75.62-.55l.61.36,17.23,9.53Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 98.4px 119.19px;" id="el3xrnl21rehk"
                                class="animable"></path>
                            <path d="M108.94,140.78V109.41l1.12.45v31.27a1.1,1.1,0,0,1-.62-.06Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 109.5px 125.28px;" id="elrfzr2f2svt"
                                class="animable"></path>
                            <path
                                d="M116.09,137.52s0,0,0,.06,0,0,0,0l0,.09a.08.08,0,0,0,0,0l-.1.14-.13.13-.16.14a.44.44,0,0,1-.1.08l-.08,0a1.37,1.37,0,0,1-.2.13l-3.88,2.24a3.79,3.79,0,0,1-1.31.47V109.86l6-3.61v31.26Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 113.13px 123.625px;" id="el508ogldz8ek"
                                class="animable"></path>
                            <path d="M110.06,113.45v3.77a15.39,15.39,0,0,0,6-3.48V110A15.39,15.39,0,0,1,110.06,113.45Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 113.06px 113.61px;"
                                id="ely777w98wugr" class="animable"></path>
                            <g id="elarftgbbjtok">
                                <path
                                    d="M110.06,113.45v3.77a15.39,15.39,0,0,0,6-3.48V110A15.39,15.39,0,0,1,110.06,113.45Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 113.06px 113.61px;"
                                    class="animable"></path>
                            </g>
                            <path d="M110.06,118.62V120a15.39,15.39,0,0,0,6-3.48v-1.4A15.39,15.39,0,0,1,110.06,118.62Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 113.06px 117.56px;"
                                id="el2o9g8t0q8xc" class="animable"></path>
                            <g id="el9y01iq4y0hc">
                                <path
                                    d="M110.06,118.62V120a15.39,15.39,0,0,0,6-3.48v-1.4A15.39,15.39,0,0,1,110.06,118.62Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 113.06px 117.56px;"
                                    class="animable"></path>
                            </g>
                            <path d="M110.06,134.66v1.41a15.28,15.28,0,0,0,6-3.49v-1.4A15.39,15.39,0,0,1,110.06,134.66Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 113.06px 133.625px;"
                                id="elgf7ht8ap0de" class="animable"></path>
                            <g id="elelkhi7znj8">
                                <path
                                    d="M110.06,134.66v1.41a15.28,15.28,0,0,0,6-3.49v-1.4A15.39,15.39,0,0,1,110.06,134.66Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 113.06px 133.625px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M111.37,109.4l-.31-.53a2.68,2.68,0,0,1-1.29.41.79.79,0,0,0-.11-.51,1.55,1.55,0,0,0-.58-.54,2.3,2.3,0,0,0-.88-.3h-.07a1.09,1.09,0,0,0-.54.1l-16-9.24-.54-.31-.7-.4a.36.36,0,0,0-.37,0l-.62.36a.39.39,0,0,1,.39,0h0l1.83,1.07,15.48,8.93c.29.17.59.27.67.22l.14-.08a.47.47,0,0,1,.32,0,1.57,1.57,0,0,1,.58.21c.34.2.49.43.33.52l-.14.08c-.08,0,0,.16.16.26l.31.18A2.47,2.47,0,0,0,111.37,109.4Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 100.365px 103.953px;" id="elx9bg5iukrbe"
                                class="animable"></path>
                            <path
                                d="M111.06,108.87l3.89-2.24.16-.1.12-.09h0a1.78,1.78,0,0,1-1.45-.22,1.57,1.57,0,0,1-.57-.53.88.88,0,0,1-.1-.57l0,0L113,105,97.5,96.09l-.89-.52-.26-.14L95.6,95a.35.35,0,0,0-.33,0l.17-.1.44-.26a.36.36,0,0,1,.32,0h0l.28.16.17.1.3.17.19.11.13.07.23.13,12.29,7.1,3.92,2.27c.28.16.45.33.38.38l0,0-.14.08c-.17.1,0,.34.31.53a.82.82,0,0,0,.77.11l.17-.1a.29.29,0,0,1,.25,0l.09.05.19.11.24.14a.25.25,0,0,1,.13.28.06.06,0,0,1,0,0l0,.08h0s0,0,0,0a1.13,1.13,0,0,1-.1.13l-.12.14-.16.13-.1.08-.09.06-.2.12-3.88,2.25Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 105.688px 101.961px;" id="el2ya4ogcbh1"
                                class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 93.8912px 123.784px;">
                            <path d="M86.9,101.54l0,.87-.5-.52A.54.54,0,0,1,86.9,101.54Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 86.65px 101.975px;" id="elqp485aio0n"
                                class="animable"></path>
                            <g id="elyiica7e478f">
                                <path d="M86.9,101.54l0,.87-.5-.52A.54.54,0,0,1,86.9,101.54Z"
                                    style="opacity: 0.5; transform-origin: 86.65px 101.975px;" class="animable"></path>
                            </g>
                            <path
                                d="M106.1,114.14a1.74,1.74,0,0,0-.78-1.37l-17.68-10.2L87.85,133v.71L105.31,144c.44.25.79,0,.79-.46Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 96.87px 123.334px;" id="elox9wkfgxs2"
                                class="animable"></path>
                            <path
                                d="M86.3,117.9v-7.11l-4-2.3v-5.36L85,101.58c.35-.21,1.08-.1,1.08.09a4.14,4.14,0,0,0,.71.61,7,7,0,0,0,1.46.64l.22,16.23Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 85.385px 110.308px;"
                                id="el5qzoulr4vr" class="animable"></path>
                            <g id="eldw0k2zlkftp">
                                <path
                                    d="M86.3,117.9v-7.11l-4-2.3v-5.36L85,101.58c.35-.21,1.08-.1,1.08.09a4.14,4.14,0,0,0,.71.61,7,7,0,0,0,1.46.64l.22,16.23Z"
                                    style="opacity: 0.15; transform-origin: 85.385px 110.308px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M83.9,105.15l2.91-1.69a.09.09,0,0,1,0,0,1.45,1.45,0,0,1-.58-.53.78.78,0,0,1-.15-.49l-3.44,2Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 84.725px 103.795px;" id="elpg09r4a5wed"
                                class="animable"></path>
                            <path
                                d="M88.25,103.64a1,1,0,0,1-.61.09,1.91,1.91,0,0,1-.33-.06l-.09,0-.12,0-.1,0-.19-.1-2.9,1.68.87.5h0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 86.08px 104.66px;" id="el38ly7apr3si"
                                class="animable"></path>
                            <g id="elb2i8ozdwt2">
                                <path d="M85,101.58c.35-.21,1.08-.1,1.08.09h0l0,.74-2.22,1.28H82.58l-.27-.23v-.32Z"
                                    style="opacity: 0.4; transform-origin: 84.195px 102.578px;" class="animable"></path>
                            </g>
                            <path d="M102,115.59l3.32-1.91a1,1,0,0,0-.37-.4L103,112.16l-14.77-8.52-3.49,2Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 95.03px 109.615px;" id="elnbv0na4xlc"
                                class="animable"></path>
                            <path d="M102.44,145.19l2.51-1.45a1.18,1.18,0,0,0,.53-.91V114.19a1,1,0,0,0-.16-.51l-2.94,1.7Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 103.93px 129.435px;"
                                id="elah49kjohnym" class="animable"></path>
                            <path
                                d="M83.54,135.49V104.94l.3-.18c.17-.1.1-.38-.24-.57a1,1,0,0,0-1-.15l-.3.14v31.26a.47.47,0,0,0,.16,0l.14-.08A1.19,1.19,0,0,1,83.54,135.49Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 83.1145px 119.729px;"
                                id="elek3izturon" class="animable"></path>
                            <g id="elbyzj2w160kf">
                                <path
                                    d="M83.54,135.49V104.94l.3-.18c.17-.1.1-.38-.24-.57a1,1,0,0,0-1-.15l-.3.14v31.26a.47.47,0,0,0,.16,0l.14-.08A1.19,1.19,0,0,1,83.54,135.49Z"
                                    style="opacity: 0.1; transform-origin: 83.1145px 119.729px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M101.21,115.14l-17.28-10c-.21-.13-.39-.26-.4-.35v31a1,1,0,0,0,.52.66l17.15,9.9c.44.25.79,0,.79-.46V116.5A1.72,1.72,0,0,0,101.21,115.14Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 92.76px 125.619px;"
                                id="el11bsekmbpwf" class="animable"></path>
                            <path
                                d="M82.31,135.44V104.18a.2.2,0,0,1-.1,0l-.09,0-.19-.11-.24-.14a.25.25,0,0,1-.13-.28.06.06,0,0,1,0,0,.69.69,0,0,1,.05-.13,1.13,1.13,0,0,1,.1-.13.86.86,0,0,1,.13-.14L82,103l.1-.07.09-.06.2-.12-.66.37a1.66,1.66,0,0,0-.66,1.29v29.45a1.58,1.58,0,0,0,.62,1.27l.32.18h0l.14.08h0A.33.33,0,0,0,82.31,135.44Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 81.7299px 119.095px;"
                                id="elalo94fa6yw4" class="animable"></path>
                            <path
                                d="M105.31,112.77l-1.06-.61-16-9.24a1.08,1.08,0,0,1-.6.1,2.3,2.3,0,0,1-.88-.3,1.66,1.66,0,0,1-.59-.54.79.79,0,0,1-.1-.51,2.68,2.68,0,0,0-1.3.41l-.3-.53a2.46,2.46,0,0,1,1.93-.4l.3.18c.18.1.25.21.17.26l-.14.08c-.16.09,0,.32.33.52a1.15,1.15,0,0,0,.9.19l.14-.08c.08,0,.38,0,.67.22l15.48,8.93,1.67,1h0a1.59,1.59,0,0,1,.56.59l-.61.35A1.59,1.59,0,0,0,105.31,112.77Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 95.485px 107.244px;"
                                id="el36vqzw0vaby" class="animable"></path>
                            <g id="elq0x1wcjckh">
                                <path
                                    d="M105.31,112.77l-1.06-.61-16-9.24a1.08,1.08,0,0,1-.6.1,2.3,2.3,0,0,1-.88-.3,1.66,1.66,0,0,1-.59-.54.79.79,0,0,1-.1-.51,2.68,2.68,0,0,0-1.3.41l-.3-.53a2.46,2.46,0,0,1,1.93-.4l.3.18c.18.1.25.21.17.26l-.14.08c-.16.09,0,.32.33.52a1.15,1.15,0,0,0,.9.19l.14-.08c.08,0,.38,0,.67.22l15.48,8.93,1.67,1h0a1.59,1.59,0,0,1,.56.59l-.61.35A1.59,1.59,0,0,0,105.31,112.77Z"
                                    style="opacity: 0.3; transform-origin: 95.485px 107.244px;" class="animable"></path>
                            </g>
                            <path
                                d="M101.22,115.14h0l-1.07-.61-12.29-7.1-3.92-2.27c-.28-.16-.45-.33-.38-.38h0l.15-.09c.17-.1,0-.34-.31-.53a.79.79,0,0,0-.77-.11l-.17.09a.3.3,0,0,1-.25,0l-.09,0-.19-.11-.24-.14a.25.25,0,0,1-.13-.28.06.06,0,0,1,0,0l0-.08s0,0,0,0a1.13,1.13,0,0,1,.1-.13.86.86,0,0,1,.13-.14L82,103l.1-.07.09-.06.2-.12,2.08-1.21.3.53-2.08,1.2-.16.1-.12.09h0a1.74,1.74,0,0,1,1.45.22,1.49,1.49,0,0,1,.57.53.88.88,0,0,1,.1.57l0,0,.11.06,15.47,8.93,1.68,1h0a1.71,1.71,0,0,1,.55.58l-.61.35A1.75,1.75,0,0,0,101.22,115.14Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 91.9467px 108.62px;"
                                id="elnlxjkqbdcql" class="animable"></path>
                            <g id="elprokr3l6xz">
                                <path
                                    d="M101.22,115.14h0l-1.07-.61-12.29-7.1-3.92-2.27c-.28-.16-.45-.33-.38-.38h0l.15-.09c.17-.1,0-.34-.31-.53a.79.79,0,0,0-.77-.11l-.17.09a.3.3,0,0,1-.25,0l-.09,0-.19-.11-.24-.14a.25.25,0,0,1-.13-.28.06.06,0,0,1,0,0l0-.08s0,0,0,0a1.13,1.13,0,0,1,.1-.13.86.86,0,0,1,.13-.14L82,103l.1-.07.09-.06.2-.12,2.08-1.21.3.53-2.08,1.2-.16.1-.12.09h0a1.74,1.74,0,0,1,1.45.22,1.49,1.49,0,0,1,.57.53.88.88,0,0,1,.1.57l0,0,.11.06,15.47,8.93,1.68,1h0a1.71,1.71,0,0,1,.55.58l-.61.35A1.75,1.75,0,0,0,101.22,115.14Z"
                                    style="opacity: 0.3; transform-origin: 91.9467px 108.62px;" class="animable"></path>
                            </g>
                            <path
                                d="M101.76,146.47l.62-.36a.56.56,0,0,0,.23-.5h0V116.15h0a1.71,1.71,0,0,0-.23-.77l-.61.35a1.6,1.6,0,0,1,.23.77v1.23h0V146A.55.55,0,0,1,101.76,146.47Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 102.186px 130.925px;"
                                id="el91lqt2lwf8" class="animable"></path>
                            <g id="eli9w5jxpxwor">
                                <path
                                    d="M101.76,146.47l.62-.36a.56.56,0,0,0,.23-.5h0V116.15h0a1.71,1.71,0,0,0-.23-.77l-.61.35a1.6,1.6,0,0,1,.23.77v1.23h0V146A.55.55,0,0,1,101.76,146.47Z"
                                    style="opacity: 0.2; transform-origin: 102.186px 130.925px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M105.86,144.1l.62-.36a.53.53,0,0,0,.23-.49V113.79h0a1.63,1.63,0,0,0-.23-.77l-.61.35a1.63,1.63,0,0,1,.23.78v1.22h0v28.21A.55.55,0,0,1,105.86,144.1Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 106.286px 128.56px;"
                                id="eln9rh272ilga" class="animable"></path>
                            <g id="elx4d3o9hcsuk">
                                <path
                                    d="M105.86,144.1l.62-.36a.53.53,0,0,0,.23-.49V113.79h0a1.63,1.63,0,0,0-.23-.77l-.61.35a1.63,1.63,0,0,1,.23.78v1.22h0v28.21A.55.55,0,0,1,105.86,144.1Z"
                                    style="opacity: 0.2; transform-origin: 106.286px 128.56px;" class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 87.645px 128.468px;">
                            <polygon points="81.79 107.33 97.74 116.66 97.82 147.23 81.87 137.9 81.79 107.33"
                                style="fill: rgb(186, 104, 200); transform-origin: 89.805px 127.28px;"
                                id="elk5rmtr0f4hr" class="animable"></polygon>
                            <path
                                d="M97.23,117.16l-15.44-9a6.37,6.37,0,0,1-3.51,1.93l15.3,8.93A15.13,15.13,0,0,0,97.23,117.16Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 87.755px 113.59px;" id="elq1xfdbe33i"
                                class="animable"></path>
                            <path
                                d="M92.1,119a3.25,3.25,0,0,0,3,0l2.59-1.5c.82-.47.82-1.23,0-1.71L82.43,107l-.64.37,15,8.75a.54.54,0,0,1,0,1l-2.41,1.37a2,2,0,0,1-1.78,0l-15-8.73-.72.42Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 87.5925px 113.183px;"
                                id="elvpg2niaz5v" class="animable"></path>
                            <g id="elcp1nog56hdt">
                                <path
                                    d="M92.1,119a3.25,3.25,0,0,0,3,0l2.59-1.5c.82-.47.82-1.23,0-1.71L82.43,107l-.64.37,15,8.75a.54.54,0,0,1,0,1l-2.41,1.37a2,2,0,0,1-1.78,0l-15-8.73-.72.42Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 87.5925px 113.183px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M76.89,110.17,77,140.74l15.21,8.83a3.25,3.25,0,0,0,3,0l2.59-1.5a1,1,0,0,0,.61-.85l-.08-30.57a1,1,0,0,1-.61.85L95.06,119a3.25,3.25,0,0,1-3,0Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 87.65px 130.053px;"
                                id="elb4d57rqbxla" class="animable"></path>
                            <g id="el10ffsw90n6ho">
                                <path
                                    d="M76.89,110.17,77,140.74l15.21,8.83a3.25,3.25,0,0,0,3,0l2.59-1.5a1,1,0,0,0,.61-.85l-.08-30.57a1,1,0,0,1-.61.85L95.06,119a3.25,3.25,0,0,1-3,0Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 87.65px 130.053px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M93.58,119.36a3,3,0,0,0,1.48-.35l2.59-1.5a1,1,0,0,0,.61-.85l.08,30.57a1,1,0,0,1-.61.85l-2.59,1.5a3.08,3.08,0,0,1-1.48.35Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 95.96px 133.295px;"
                                id="elkwxz5dtv31q" class="animable"></path>
                            <g id="elrs577fy7qmh">
                                <path
                                    d="M93.58,119.36a3,3,0,0,0,1.48-.35l2.59-1.5a1,1,0,0,0,.61-.85l.08,30.57a1,1,0,0,1-.61.85l-2.59,1.5a3.08,3.08,0,0,1-1.48.35Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 95.96px 133.295px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable" style="transform-origin: 81.28px 132.131px;">
                            <polygon points="75.89 112.56 90.67 121.21 90.75 149.55 75.96 140.91 75.89 112.56"
                                style="fill: rgb(186, 104, 200); transform-origin: 83.32px 131.055px;"
                                id="elzys5r8lauil" class="animable"></polygon>
                            <g id="el4x6nm5nqagk">
                                <polygon points="75.89 112.56 90.67 121.21 90.75 149.55 75.96 140.91 75.89 112.56"
                                    style="opacity: 0.35; transform-origin: 83.32px 131.055px;" class="animable">
                                </polygon>
                            </g>
                            <path
                                d="M90.2,121.68l-14.31-8.31a6,6,0,0,1-3.26,1.79l14.19,8.28A14.57,14.57,0,0,0,90.2,121.68Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 81.415px 118.405px;"
                                id="ellmdgmi8qg5b" class="animable"></path>
                            <path
                                d="M85.44,123.38a3,3,0,0,0,2.75,0l2.4-1.39a.84.84,0,0,0,0-1.59l-14.11-8.19-.59.34,13.87,8.11c.45.27.45.69,0,1l-2.23,1.28a1.81,1.81,0,0,1-1.65,0L72,114.8l-.67.39Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 81.2444px 117.962px;"
                                id="el16kg5v95zon" class="animable"></path>
                            <g id="elmak3j86qeph">
                                <path
                                    d="M85.44,123.38a3,3,0,0,0,2.75,0l2.4-1.39a.84.84,0,0,0,0-1.59l-14.11-8.19-.59.34,13.87,8.11c.45.27.45.69,0,1l-2.23,1.28a1.81,1.81,0,0,1-1.65,0L72,114.8l-.67.39Z"
                                    style="opacity: 0.2; transform-origin: 81.2444px 117.962px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M71.34,115.19l.07,28.34,14.11,8.19a3,3,0,0,0,2.74,0l2.4-1.39a1,1,0,0,0,.57-.79l-.07-28.34a1,1,0,0,1-.57.79l-2.4,1.39a3,3,0,0,1-2.75,0Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 81.285px 133.621px;"
                                id="el8y94kuw6uq7" class="animable"></path>
                            <g id="ely6y8s3fx02l">
                                <path
                                    d="M71.34,115.19l.07,28.34,14.11,8.19a3,3,0,0,0,2.74,0l2.4-1.39a1,1,0,0,0,.57-.79l-.07-28.34a1,1,0,0,1-.57.79l-2.4,1.39a3,3,0,0,1-2.75,0Z"
                                    style="opacity: 0.3; transform-origin: 81.285px 133.621px;" class="animable"></path>
                            </g>
                            <path
                                d="M86.82,123.72a2.8,2.8,0,0,0,1.37-.33l2.4-1.39a1,1,0,0,0,.57-.79l.07,28.34a1,1,0,0,1-.57.79l-2.4,1.39a2.67,2.67,0,0,1-1.37.32Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 89.025px 136.631px;"
                                id="elq9noscppgrr" class="animable"></path>
                            <g id="el34k57fhori">
                                <path
                                    d="M86.82,123.72a2.8,2.8,0,0,0,1.37-.33l2.4-1.39a1,1,0,0,0,.57-.79l.07,28.34a1,1,0,0,1-.57.79l-2.4,1.39a2.67,2.67,0,0,1-1.37.32Z"
                                    style="opacity: 0.1; transform-origin: 89.025px 136.631px;" class="animable"></path>
                            </g>
                            <path d="M86.82,127.49v1.13a8,8,0,0,0,4.35-2.51V125A8,8,0,0,1,86.82,127.49Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 88.995px 126.81px;" id="elndj4wd3w32f"
                                class="animable"></path>
                            <path d="M86.87,146.66v1.12a8,8,0,0,0,4.35-2.51v-1.12A8.08,8.08,0,0,1,86.87,146.66Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 89.045px 145.965px;" id="elba72bnlh1dc"
                                class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 68.725px 137.388px;">
                            <path d="M80.18,124.61v.79s-.3-.28-.32-.48S80.18,124.61,80.18,124.61Z" id="elob0m3w9qwdc"
                                class="animable" style="transform-origin: 80.0196px 125.005px;"></path>
                            <path d="M79.57,124.42a.82.82,0,0,0,.61,1c.86.27,1.4,0,1.53.24s-4.08,2.67-4.08,2.67l.8-3.48Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 79.6715px 126.375px;"
                                id="elz5dx97ghi4n" class="animable"></path>
                            <g id="elskjul3rnj1">
                                <path
                                    d="M79.57,124.42a.82.82,0,0,0,.61,1c.86.27,1.4,0,1.53.24s-4.08,2.67-4.08,2.67l.8-3.48Z"
                                    style="opacity: 0.3; transform-origin: 79.6715px 126.375px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M78,157V157l-.42-.24-18-10.42,1.59-31.27c0-.51.28-.75.62-.56l.61.36,16.87,9.73,0,.15Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 69.425px 135.723px;"
                                id="elwz5xa4eokl" class="animable"></path>
                            <g id="elo7sgmqq4ny">
                                <path
                                    d="M78,157V157l-.42-.24-18-10.42,1.59-31.27c0-.51.28-.75.62-.56l.61.36,16.87,9.73,0,.15Z"
                                    style="opacity: 0.2; transform-origin: 69.425px 135.723px;" class="animable"></path>
                            </g>
                            <path d="M75.53,129.34l-.88-1,4.53-2.62c.68.52,1.21.79,1.82.54Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 77.825px 127.53px;" id="elc96baitspce"
                                class="animable"></path>
                            <path
                                d="M79,125.2l-16.71-9.65a1.14,1.14,0,0,0-1.05,0l-4.46,2.58,16.94,9.7a1.56,1.56,0,0,1,1.23.21c.5.4.47-.11.47-.11l3.81-2.2C78.87,125.32,79,125.2,79,125.2Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 68.005px 121.808px;"
                                id="elahroqfxn1wv" class="animable"></path>
                            <path
                                d="M75.21,129.14c-.18-.1-.25-.22-.17-.26l.14-.09c.16-.09,0-.32-.33-.52a1.15,1.15,0,0,0-.9-.19l-.14.08c-.08.05-.38,0-.67-.22l.11,31.33.42.25a.46.46,0,0,0,.25,0l.14-.08a1.2,1.2,0,0,1,.9.19c.34.2.49.43.33.52l-.14.09c-.09,0,0,.16.16.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 74.2471px 144.22px;"
                                id="elz9e6otzx99b" class="animable"></path>
                            <g id="el8akzyf6wqir">
                                <path
                                    d="M75.21,129.14c-.18-.1-.25-.22-.17-.26l.14-.09c.16-.09,0-.32-.33-.52a1.15,1.15,0,0,0-.9-.19l-.14.08c-.08.05-.38,0-.67-.22l.11,31.33.42.25a.46.46,0,0,0,.25,0l.14-.08a1.2,1.2,0,0,1,.9.19c.34.2.49.43.33.52l-.14.09c-.09,0,0,.16.16.26Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 74.2471px 144.22px;"
                                    class="animable"></path>
                            </g>
                            <path d="M73.67,159.47v.05l-.42-.25-18-10.41V118.49c0-.5.27-.75.61-.55l.62.36,17.23,9.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 64.48px 138.695px;"
                                id="el0th08gksch5g" class="animable"></path>
                            <g id="el0pssyhv89fbd">
                                <path d="M73.67,159.47v.05l-.42-.25-18-10.41V118.49c0-.5.27-.75.61-.55l.62.36,17.23,9.53Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 64.48px 138.695px;"
                                    class="animable"></path>
                            </g>
                            <path d="M75,160.29V128.93l1.12.45v31.26a1,1,0,0,1-.62-.06Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 75.56px 144.797px;"
                                id="el5akpsr9dpoe" class="animable"></path>
                            <g id="elehe96zohfr6">
                                <path d="M75,160.29V128.93l1.12.45v31.26a1,1,0,0,1-.62-.06Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 75.56px 144.797px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M82.16,157a.13.13,0,0,1,0,.06v0l0,.08,0,0a.71.71,0,0,1-.1.14l-.12.13-.16.14-.1.08-.08.05-.2.13-3.89,2.24a3.53,3.53,0,0,1-1.31.47V129.38l6-3.62V157Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 79.2px 143.14px;" id="elgwh39riinct"
                                class="animable"></path>
                            <g id="els9tny8b29e">
                                <g style="opacity: 0.7; transform-origin: 79.2px 143.14px;" class="animable">
                                    <path
                                        d="M82.16,157a.13.13,0,0,1,0,.06v0l0,.08,0,0a.71.71,0,0,1-.1.14l-.12.13-.16.14-.1.08-.08.05-.2.13-3.89,2.24a3.53,3.53,0,0,1-1.31.47V129.38l6-3.62V157Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 79.2px 143.14px;"
                                        id="elnc4317zprn" class="animable"></path>
                                </g>
                            </g>
                            <path d="M76.13,132v3.77a15.28,15.28,0,0,0,6-3.49v-3.76A15.39,15.39,0,0,1,76.13,132Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 79.13px 132.145px;"
                                id="elb19c41gque9" class="animable"></path>
                            <path d="M76.13,153v3.77a15.39,15.39,0,0,0,6-3.48v-3.77A15.39,15.39,0,0,1,76.13,153Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 79.13px 153.145px;"
                                id="el7l1ioqpnhf9" class="animable"></path>
                            <path
                                d="M77.44,128.91l-.3-.53a2.68,2.68,0,0,1-1.3.41.74.74,0,0,0-.1-.51,1.63,1.63,0,0,0-.58-.54,2.39,2.39,0,0,0-.89-.29h-.06a1.07,1.07,0,0,0-.54.1l-16-9.24-.55-.31-.69-.4a.38.38,0,0,0-.38,0l-.61.36a.37.37,0,0,1,.38,0h0L57.67,119l15.47,8.93c.29.17.59.27.67.22l.14-.08a.47.47,0,0,1,.32,0,1.57,1.57,0,0,1,.58.21c.35.2.49.43.33.52l-.14.08c-.08,0,0,.17.17.27l.3.17A2.46,2.46,0,0,0,77.44,128.91Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 66.44px 123.46px;" id="elz533iia86de"
                                class="animable"></path>
                            <g id="ell6xyvxt7mfm">
                                <path
                                    d="M77.44,128.91l-.3-.53a2.68,2.68,0,0,1-1.3.41.74.74,0,0,0-.1-.51,1.63,1.63,0,0,0-.58-.54,2.39,2.39,0,0,0-.89-.29h-.06a1.07,1.07,0,0,0-.54.1l-16-9.24-.55-.31-.69-.4a.38.38,0,0,0-.38,0l-.61.36a.37.37,0,0,1,.38,0h0L57.67,119l15.47,8.93c.29.17.59.27.67.22l.14-.08a.47.47,0,0,1,.32,0,1.57,1.57,0,0,1,.58.21c.35.2.49.43.33.52l-.14.08c-.08,0,0,.17.17.27l.3.17A2.46,2.46,0,0,0,77.44,128.91Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 66.44px 123.46px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M77.14,128.38,81,126.14l.16-.1.13-.09a0,0,0,0,0,0,0,1.72,1.72,0,0,1-1.44-.22,1.42,1.42,0,0,1-.57-.53.77.77,0,0,1-.1-.57l-.06,0-.1-.06L63.57,115.6s-.4-.24-.89-.51l-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.1.45-.26a.34.34,0,0,1,.31,0h0l.28.16.17.1.3.17.18.11.13.08.23.13L75.86,122l3.93,2.26c.28.16.44.33.37.38l0,0-.14.08c-.17.1,0,.34.31.53a.81.81,0,0,0,.78.11l.17-.09a.28.28,0,0,1,.24,0l.09,0,.19.12.25.13a.24.24,0,0,1,.12.28s0,0,0,0a.2.2,0,0,1,0,.08h0s0,0,0,0a1.13,1.13,0,0,1-.1.13.81.81,0,0,1-.12.14l-.16.14-.1.07-.08.06-.2.13-3.89,2.24Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 71.7598px 121.451px;"
                                id="el7kachbeejj3" class="animable"></path>
                            <g id="elcvv8uczrdye">
                                <path
                                    d="M77.14,128.38,81,126.14l.16-.1.13-.09a0,0,0,0,0,0,0,1.72,1.72,0,0,1-1.44-.22,1.42,1.42,0,0,1-.57-.53.77.77,0,0,1-.1-.57l-.06,0-.1-.06L63.57,115.6s-.4-.24-.89-.51l-.25-.15-.75-.43a.37.37,0,0,0-.34,0l.17-.1.45-.26a.34.34,0,0,1,.31,0h0l.28.16.17.1.3.17.18.11.13.08.23.13L75.86,122l3.93,2.26c.28.16.44.33.37.38l0,0-.14.08c-.17.1,0,.34.31.53a.81.81,0,0,0,.78.11l.17-.09a.28.28,0,0,1,.24,0l.09,0,.19.12.25.13a.24.24,0,0,1,.12.28s0,0,0,0a.2.2,0,0,1,0,.08h0s0,0,0,0a1.13,1.13,0,0,1-.1.13.81.81,0,0,1-.12.14l-.16.14-.1.07-.08.06-.2.13-3.89,2.24Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 71.7598px 121.451px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 60.5285px 145.933px;">
                            <polygon points="56.77 125.46 73.15 135.03 69.5 164.31 53.12 154.73 56.77 125.46"
                                id="elu2e13txgna" class="animable" style="transform-origin: 63.135px 144.885px;">
                            </polygon>
                            <path
                                d="M72.53,135.5l-15.86-9.22A8.09,8.09,0,0,1,52.56,128l15.73,9.18A19.64,19.64,0,0,0,72.53,135.5Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 62.545px 131.73px;"
                                id="elnwe1vyrploh" class="animable"></path>
                            <path
                                d="M66.67,137.05a4,4,0,0,0,3.25.13l3-1.33c1-.42,1-1.15.2-1.64l-15.63-9.08-.75.33,15.37,9c.5.29.45.73-.13,1l-2.81,1.22a2.4,2.4,0,0,1-2-.08l-15.37-9L51,128Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 62.3485px 131.297px;" id="elbhqy0udpm7c"
                                class="animable"></path>
                            <path
                                d="M51,128l-3.64,29.28L63,166.32a4,4,0,0,0,3.25.13l3-1.32c.48-.21.74-.5.78-.8l3.64-29.27c0,.29-.3.58-.77.79l-3,1.33a4,4,0,0,1-3.25-.13Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 60.515px 147.367px;" id="el1blprrpn3lr"
                                class="animable"></path>
                            <path
                                d="M68.25,137.46a3.94,3.94,0,0,0,1.67-.28l3-1.33c.47-.21.74-.5.77-.79l-3.64,29.27c0,.3-.3.59-.78.8l-3,1.32a3.92,3.92,0,0,1-1.67.28Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 69.145px 150.898px;" id="elbkt5o5sqgzd"
                                class="animable"></path>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 52.562px 151.788px;">
                            <polygon points="49.05 132.81 64.24 141.69 60.86 168.83 45.67 159.95 49.05 132.81"
                                style="fill: rgb(186, 104, 200); transform-origin: 54.955px 150.82px;" id="elho2llf2z2j"
                                class="animable"></polygon>
                            <g id="ellq6nom25rke">
                                <polygon points="49.05 132.81 64.24 141.69 60.86 168.83 45.67 159.95 49.05 132.81"
                                    style="opacity: 0.35; transform-origin: 54.955px 150.82px;" class="animable">
                                </polygon>
                            </g>
                            <path
                                d="M63.66,142.12,49,133.57a7.51,7.51,0,0,1-3.8,1.59l14.58,8.5A17.78,17.78,0,0,0,63.66,142.12Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 54.43px 138.615px;" id="elln2ui1db9"
                                class="animable"></path>
                            <path
                                d="M58.23,143.56a3.74,3.74,0,0,0,3,.11l2.81-1.23c.88-.38,1-1.07.19-1.52L49.75,132.5l-.7.31,14.25,8.32c.47.28.41.69-.12.92l-2.6,1.13a2.23,2.23,0,0,1-1.81-.08l-14.25-8.31-.79.35Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 54.252px 138.216px;"
                                id="eldwj142sylwo" class="animable"></path>
                            <g id="elzuv3hvul2s">
                                <path
                                    d="M58.23,143.56a3.74,3.74,0,0,0,3,.11l2.81-1.23c.88-.38,1-1.07.19-1.52L49.75,132.5l-.7.31,14.25,8.32c.47.28.41.69-.12.92l-2.6,1.13a2.23,2.23,0,0,1-1.81-.08l-14.25-8.31-.79.35Z"
                                    style="opacity: 0.2; transform-origin: 54.252px 138.216px;" class="animable"></path>
                            </g>
                            <path
                                d="M43.73,135.14l-3.38,27.14,14.5,8.42a3.79,3.79,0,0,0,3,.12l2.81-1.24c.44-.19.68-.45.72-.73l3.38-27.14c0,.27-.28.54-.72.73l-2.81,1.24a3.79,3.79,0,0,1-3-.12Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 52.555px 153.106px;"
                                id="elyinipcasgwk" class="animable"></path>
                            <g id="ellsb3yjunnb">
                                <path
                                    d="M43.73,135.14l-3.38,27.14,14.5,8.42a3.79,3.79,0,0,0,3,.12l2.81-1.24c.44-.19.68-.45.72-.73l3.38-27.14c0,.27-.28.54-.72.73l-2.81,1.24a3.79,3.79,0,0,1-3-.12Z"
                                    style="opacity: 0.3; transform-origin: 52.555px 153.106px;" class="animable"></path>
                            </g>
                            <path
                                d="M59.69,143.93a3.69,3.69,0,0,0,1.55-.25l2.81-1.24c.44-.19.68-.46.72-.73l-3.38,27.14c0,.28-.28.54-.72.73l-2.81,1.24a3.69,3.69,0,0,1-1.55.25Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 60.54px 156.393px;" id="elhfqbzljyh5"
                                class="animable"></path>
                            <g id="elkezlfwd1nv">
                                <path
                                    d="M59.69,143.93a3.69,3.69,0,0,0,1.55-.25l2.81-1.24c.44-.19.68-.46.72-.73l-3.38,27.14c0,.28-.28.54-.72.73l-2.81,1.24a3.69,3.69,0,0,1-1.55.25Z"
                                    style="opacity: 0.1; transform-origin: 60.54px 156.393px;" class="animable"></path>
                            </g>
                        </g>
                        <polygon
                            points="55.71 123.44 22.04 104.01 19.64 105.4 19.64 327.47 53.3 346.91 55.71 345.52 55.71 123.44"
                            style="fill: rgb(186, 104, 200); transform-origin: 37.675px 225.46px;" id="eleauvozrv1rq"
                            class="animable"></polygon>
                        <g id="elizaeh004ikf">
                            <polygon
                                points="55.71 123.44 22.04 104.01 19.64 105.4 19.64 327.47 53.3 346.91 55.71 345.52 55.71 123.44"
                                style="fill: rgb(255, 255, 255); opacity: 0.75; transform-origin: 37.675px 225.46px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="19.64 327.47 53.3 346.91 53.3 124.83 19.64 105.4 19.64 327.47"
                            style="fill: rgb(186, 104, 200); transform-origin: 36.47px 226.155px;" id="el8bq3vw9egg4"
                            class="animable"></polygon>
                        <g id="el5096lvku52j">
                            <polygon points="19.64 327.47 53.3 346.91 53.3 124.83 19.64 105.4 19.64 327.47"
                                style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 36.47px 226.155px;"
                                class="animable"></polygon>
                        </g>
                        <polygon
                            points="152.69 64.67 119.03 45.24 19.64 102.62 19.64 105.4 53.3 124.83 152.69 67.45 152.69 64.67"
                            style="fill: rgb(186, 104, 200); transform-origin: 86.165px 85.035px;" id="el9t6zqw66wtt"
                            class="animable"></polygon>
                        <g id="ely1xfove53rl">
                            <polygon
                                points="152.69 64.67 119.03 45.24 19.64 102.62 19.64 105.4 53.3 124.83 152.69 67.45 152.69 64.67"
                                style="fill: rgb(255, 255, 255); opacity: 0.75; transform-origin: 86.165px 85.035px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="53.3 122.06 152.69 64.67 119.03 45.24 19.64 102.62 53.3 122.06"
                            style="fill: rgb(186, 104, 200); transform-origin: 86.165px 83.65px;" id="el5r81109zffu"
                            class="animable"></polygon>
                        <g id="elpn7ikcnkgvi">
                            <polygon points="53.3 122.06 152.69 64.67 119.03 45.24 19.64 102.62 53.3 122.06"
                                style="fill: rgb(255, 255, 255); opacity: 0.85; transform-origin: 86.165px 83.65px;"
                                class="animable"></polygon>
                        </g>
                        <polygon points="53.3 122.06 53.3 124.83 19.64 105.4 19.64 102.62 53.3 122.06"
                            style="fill: rgb(186, 104, 200); transform-origin: 36.47px 113.725px;" id="elf7gv8mu8dr"
                            class="animable"></polygon>
                        <g id="eljmhkcvbeoas">
                            <polygon points="53.3 122.06 53.3 124.83 19.64 105.4 19.64 102.62 53.3 122.06"
                                style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 36.47px 113.725px;"
                                class="animable"></polygon>
                        </g>
                    </g>
                </g>
                <g id="freepik--character-2--inject-2" class="animable"
                    style="transform-origin: 286.336px 259.475px;">
                    <g id="freepik--Character--inject-2" class="animable"
                        style="transform-origin: 286.336px 259.475px;">
                        <g id="freepik--Chair--inject-2" class="animable"
                            style="transform-origin: 292.229px 267.51px;">
                            <path
                                d="M249.76,321.79,255.6,273l4.77-.24-8.21,49h0a.7.7,0,0,1-.32.43,1.92,1.92,0,0,1-1.7.09.6.6,0,0,1-.38-.51Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 255.065px 297.598px;" id="eljyddy444r7c"
                                class="animable"></path>
                            <path d="M255.6,273l4.77-.24L259,282a17.51,17.51,0,0,1-2.83-1.3,2.82,2.82,0,0,1-1.26-1.08Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 257.64px 277.38px;" id="el0q2fwn1dkvzo"
                                class="animable"></path>
                            <path
                                d="M319,265.89h4.78l7,46h0a.57.57,0,0,1-.35.53,1.89,1.89,0,0,1-1.7,0,.65.65,0,0,1-.34-.41h0Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 324.89px 289.256px;" id="el36w8gwpystm"
                                class="animable"></path>
                            <path d="M323.81,265.89l1.94,12.85a18.58,18.58,0,0,1-3.66,2.24L319,265.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 322.375px 273.435px;" id="elys1hx8un5lk"
                                class="animable"></path>
                            <path
                                d="M281.69,338.13l4.5-49.57,4.77-.24-6.86,49.8h0a.61.61,0,0,1-.32.43,1.89,1.89,0,0,1-1.7.09.58.58,0,0,1-.37-.51Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 286.325px 313.56px;" id="elnkaeqiy9b7s"
                                class="animable"></path>
                            <path d="M285.6,295.7l.59-7.14,4.77-.24-1,7.7A8.78,8.78,0,0,1,285.6,295.7Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 288.28px 292.24px;" id="elvlgrkgwni3"
                                class="animable"></path>
                            <path
                                d="M293,250.73h4.77l7,46h0a.55.55,0,0,1-.34.52,1.91,1.91,0,0,1-1.71,0,.63.63,0,0,1-.34-.41h0Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 298.885px 274.091px;" id="elaswf9ybmbz"
                                class="animable"></path>
                            <g id="freepik--chair--inject-2" class="animable"
                                style="transform-origin: 294.119px 244.602px;">
                                <path
                                    d="M332.7,210.15a27.15,27.15,0,0,1,1.91,8.39c.54,6.44-1.54,30.21-2.85,39.53h0c-1.9,15.57-4.21,15.59-7.59,18.2-5.8,4.48-22.48,13.27-28,15.43-10,3.93-18.15-2.13-24.24-5.13A141.93,141.93,0,0,1,255.83,277c-1.52-1.11-2.31-2.23-2.29-3.4,0-.47,0-2.38,0-2.88,0-1.5,1.32-3.11,4.11-4.92,5.16-3.35,23.8-14.22,31-18.22a.1.1,0,0,1,.06-.06c5.56-3.37,8.81-29.25,12.66-41.45.08-.26.16-.52.25-.76s.14-.38.2-.57a19.81,19.81,0,0,1,.76-1.83"
                                    style="fill: rgb(186, 104, 200); transform-origin: 294.119px 247.948px;"
                                    id="el8vkquk3ooi" class="animable"></path>
                                <path
                                    d="M253.54,270.73c0-1.5,1.32-3.11,4.12-4.92,5.15-3.35,23.79-14.22,31-18.22a.1.1,0,0,1,.06-.06c5.56-3.37,8.81-29.25,12.66-41.45a23.5,23.5,0,0,1,.81-2.25,1.11,1.11,0,0,1,.07-.16c.07-.16.14-.33.22-.5a2.72,2.72,0,0,1,.11-.25h0a11.64,11.64,0,0,1,2.57-3.71,5.35,5.35,0,0,1,1.26-.89l2.27-1.27c3.77-2.26,8.72.45,14.89,3.83,3.84,2.1,7.11,4.6,9.11,9.26h0a27.15,27.15,0,0,1,1.91,8.39c.54,6.44-1.54,30.21-2.85,39.53h0c-1.9,15.57-4.21,15.59-7.59,18.2-5.8,4.48-22.48,13.27-28,15.43-10,3.93-18.15-2.13-24.24-5.13A141.93,141.93,0,0,1,255.83,277c-1.52-1.11-2.31-2.23-2.29-3.41C253.55,273.14,253.54,271.23,253.54,270.73Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 294.114px 244.597px;"
                                    id="elk7dwfru11e" class="animable"></path>
                                <g id="el3r9116nsor3">
                                    <path
                                        d="M253.54,270.73c0-1.5,1.32-3.11,4.12-4.92,5.15-3.35,23.79-14.22,31-18.22a.1.1,0,0,1,.06-.06c5.56-3.37,8.81-29.25,12.66-41.45a23.5,23.5,0,0,1,.81-2.25,1.11,1.11,0,0,1,.07-.16c.07-.16.14-.33.22-.5a2.72,2.72,0,0,1,.11-.25h0a11.64,11.64,0,0,1,2.57-3.71,5.35,5.35,0,0,1,1.26-.89l2.27-1.27c3.77-2.26,8.72.45,14.89,3.83,3.84,2.1,7.11,4.6,9.11,9.26h0a27.15,27.15,0,0,1,1.91,8.39c.54,6.44-1.54,30.21-2.85,39.53h0c-1.9,15.57-4.21,15.59-7.59,18.2-5.8,4.48-22.48,13.27-28,15.43-10,3.93-18.15-2.13-24.24-5.13A141.93,141.93,0,0,1,255.83,277c-1.52-1.11-2.31-2.23-2.29-3.41C253.55,273.14,253.54,271.23,253.54,270.73Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 294.114px 244.597px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M272,283.66a141.33,141.33,0,0,1-16.13-9.55c-3.46-2.51-3.14-5.08,1.82-8.3,6.89-4.47,35-20.41,35-20.41s35.52,21,34,24.83-23.51,15.84-30.44,18.57C286.2,292.73,278,286.67,272,283.66Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 290.154px 267.743px;"
                                    id="elmi1gp8elrm" class="animable"></path>
                                <g id="el78fedrg0t2p">
                                    <path
                                        d="M272,283.66a141.33,141.33,0,0,1-16.13-9.55c-3.46-2.51-3.14-5.08,1.82-8.3,6.89-4.47,35-20.41,35-20.41s35.52,21,34,24.83-23.51,15.84-30.44,18.57C286.2,292.73,278,286.67,272,283.66Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 290.154px 267.743px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M306.43,198.33c3.74-2,8.6.71,14.61,4,3.85,2.11,7.13,4.61,9.12,9.29l2.54-1.47c-2-4.66-5.27-7.16-9.11-9.26-6.17-3.38-11.12-6.09-14.89-3.83Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 319.565px 203.925px;"
                                    id="elfxe8q42xuef" class="animable"></path>
                                <g id="elanihstp140c">
                                    <path
                                        d="M306.43,198.33c3.74-2,8.6.71,14.61,4,3.85,2.11,7.13,4.61,9.12,9.29l2.54-1.47c-2-4.66-5.27-7.16-9.11-9.26-6.17-3.38-11.12-6.09-14.89-3.83Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 319.565px 203.925px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M288.73,247.53s3.63,1.19,16.55,7.54c5.3,2.6,8.79,5.23,13.76,8.35,7.3,4.6,6.75,8,6.75,8,3.63-3,7.16-40.89,6.27-51.45a26.51,26.51,0,0,0-2.09-8.8c-.09-.21-.19-.41-.29-.62s-.14-.28-.22-.41a2,2,0,0,0-.11-.2,14.56,14.56,0,0,0-.92-1.47l-.24-.34-.25-.33-.26-.33-.23-.26a15.32,15.32,0,0,0-1.31-1.36l-.35-.32a21,21,0,0,0-2.31-1.76l-.37-.24-.51-.32-.43-.25-1.13-.65c-4.6-2.51-8.52-4.67-11.78-4.67a6.09,6.09,0,0,0-4.09,1.56c-2.41,2.12-3.7,6.6-3.78,6.86C297.54,218.28,294.29,244.16,288.73,247.53Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 310.465px 234.53px;"
                                    id="elbp3eep4vpr" class="animable"></path>
                                <g id="el1m59lxrnr6f">
                                    <path
                                        d="M288.73,247.53s3.63,1.19,16.55,7.54c5.3,2.6,8.79,5.23,13.76,8.35,7.3,4.6,6.75,8,6.75,8,3.63-3,7.16-40.89,6.27-51.45a26.51,26.51,0,0,0-2.09-8.8c-.09-.21-.19-.41-.29-.62s-.14-.28-.22-.41a2,2,0,0,0-.11-.2,14.56,14.56,0,0,0-.92-1.47l-.24-.34-.25-.33-.26-.33-.23-.26a15.32,15.32,0,0,0-1.31-1.36l-.35-.32a21,21,0,0,0-2.31-1.76l-.37-.24-.51-.32-.43-.25-1.13-.65c-4.6-2.51-8.52-4.67-11.78-4.67a6.09,6.09,0,0,0-4.09,1.56c-2.41,2.12-3.7,6.6-3.78,6.86C297.54,218.28,294.29,244.16,288.73,247.53Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 310.465px 234.53px;"
                                        class="animable"></path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--character--inject-2" class="animable"
                            style="transform-origin: 283.531px 259.475px;">
                            <path
                                d="M275.49,297.31a6.4,6.4,0,0,1,5.66,3.26c.25,1.07,0,3.19-1.48,5.71a18.32,18.32,0,0,0-2,8.15c0,2.41.7,8.48-2,11.3s-8.24,5-9.82.74c-.52-1.39,1.11-6,1.94-9.33,1.65-6.69,3.05-13.36,3.05-13.36Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 273.492px 313.086px;" id="ely2lia9mo4o"
                                class="animable"></path>
                            <g id="elbxrcq7ed9co">
                                <path
                                    d="M280.23,299.29c0,2.25-1.81,7.49-5.24,12.23s-8.08,10.68-9.18,14.11c0-1.61.95-4.49,1.65-7.07l.05-.17.12-.44a1.94,1.94,0,0,0,.05-.2l.15-.57v0c.51-2.09,1-4.18,1.44-6.06.34-1.51.65-2.89.9-4,.13-.57.24-1.08.33-1.52.05-.22.1-.42.13-.61l.25-1.14,4.6-6.47h.59A6.73,6.73,0,0,1,280.23,299.29Z"
                                    style="opacity: 0.15; transform-origin: 273.02px 311.505px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M276,302.8a66.5,66.5,0,0,0-1.56,9.89c-.23,3.65-1.19,6-2.57,7.5-1.53,1.69-5.08,2.41-4.37-1.3.49-2.59,3.38-15.11,3.38-15.11Z"
                                style="fill: rgb(255, 168, 167); transform-origin: 271.704px 312.185px;"
                                id="elvl1yx4cipf" class="animable"></path>
                            <path
                                d="M268.06,321.29c-.52-.36-.8-1.11-.55-2.4.11-.59.34-1.68.64-3,.4-1.66.78-3.29,1.13-4.79s.65-2.89.9-4c.13-.57.24-1.08.33-1.52.05-.22.1-.42.13-.61.16-.71.24-1.12.25-1.14h0l5.12-1a68.38,68.38,0,0,0-1.53,9.42C272.38,315.11,269.88,318.42,268.06,321.29Z"
                                style="fill: rgb(242, 143, 143); transform-origin: 271.714px 312.06px;"
                                id="elf6ufwpwo50k" class="animable"></path>
                            <polygon points="258.96 290.26 265.06 304.39 274.32 296.46 270.46 280.13 258.96 290.26"
                                style="fill: rgb(242, 143, 143); transform-origin: 266.64px 292.26px;"
                                id="elohu7mwxy5hq" class="animable"></polygon>
                            <path
                                d="M266.9,254.25c9.37-4.76,20.41-8.84,20.41-8.84l8.94,13.78-11.38,7.93-16.55,7.11a20.46,20.46,0,0,1,3,6.65,31.18,31.18,0,0,1,.68,3.47c-4.29,4.52-6.57,11.55-10.46,12.64,0,0-5.49-11.3-9.08-20.49-3.38-8.64-.91-12.43,0-13.43C255.05,260.4,256.69,259.44,266.9,254.25Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 273.492px 271.2px;" id="elmp94ohu5uo"
                                class="animable"></path>
                            <path
                                d="M264.23,290.23h0l.12-.57c0-.12,0-.25.08-.37.23-1.14.46-2.21.67-3.21l0-.09.31-1.39v0h0c.26-1.13.48-2.07.66-2.73a16.89,16.89,0,0,1,3.18-6.1,1.74,1.74,0,0,0,.1.19l.09.16c.13.25.26.51.4.8l.08.16c.14.29.28.62.42,1a1.34,1.34,0,0,1,.07.18c.15.35.29.73.42,1.12l.06.18c.08.24.15.5.23.75l-2.78,7.42h0l-1.45,3.86a17.28,17.28,0,0,1-3.87,4.73C263.42,294.27,263.83,292.2,264.23,290.23Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 267.07px 286.045px;" id="el90pa36sb3r"
                                class="animable"></path>
                            <path
                                d="M272.14,272.59c1-.93,2-1.81,3-2.64,3.74-3.15,11.87-9.58,11.87-9.58l1.95.49-7.33,7.67Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 280.55px 266.48px;" id="elnp3mnqio4a"
                                class="animable"></path>
                            <path
                                d="M264.73,330.24c.74,0,.68,1.27,1,2.91a8.23,8.23,0,0,1-.16,4.81c-.77,2-4,2.12-5.78,4.68s-4.43,7.19-10.22,8.34-10.15-.81-11.2-2.54-.07-3.34,3.65-5.4c3.94-2.19,5.06-2.83,5.06-2.83Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 251.994px 340.782px;" id="eliw2hyondtk"
                                class="animable"></path>
                            <path
                                d="M273.32,312.23c-.52.88-1.07,1.79-1.67,2.74-2.57,4.59-5.63,10.13-6.55,12.72a8.72,8.72,0,0,0-.42,3.41,3.79,3.79,0,0,1-1.05,2.32,27,27,0,0,1-2,2c-1.88,1.69-4.87,6.28-8,8.33s-8.4,1.46-9.58.19a1.12,1.12,0,0,1,0-1.72c.54-.54,2-1.77,2.67-2.45a46.06,46.06,0,0,0,7.46-9.92c1-1.87,2.68-7,4.27-12.45h0s1-4.08,2.48-9.59"
                                style="fill: rgb(255, 168, 167); transform-origin: 258.484px 326.452px;"
                                id="elphh7fbb0cop" class="animable"></path>
                            <path
                                d="M268.84,279.57c2-4.88,21.7-19.91,21.7-19.91s-2.08-8.41-3.23-14.25L319.55,250c1.14,4.09,1.69,9.81-.11,14.12-2.4,5.71-9.24,10.2-17.61,14.44-6.92,3.51-16.25,8.39-18.2,9.4-1.7.89-2.8,2.05-3.24,5.73-.42,3.5-1.27,8.67-7.07,18.5-3.88.79-10.66-2-12.4-4.44C263.57,297.67,267.55,282.74,268.84,279.57Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 290.762px 278.868px;" id="elokdkn4i5em"
                                class="animable"></path>
                            <path d="M284.58,255a10.12,10.12,0,0,0,4.34,5.91l-1.09.91A8.19,8.19,0,0,1,284.58,255Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 286.748px 258.41px;" id="eldznchpg6y86"
                                class="animable"></path>
                            <path
                                d="M311.69,200c-2.67,2.74-11.23-5.13-13.74-7.76-.7-.73-1.12-1.89-1.76-2.71a15.76,15.76,0,0,0-1.64-1.82c-1-.9-2.4-1.16-3.43-2.09a8.22,8.22,0,0,1-2.1-3.07,8.93,8.93,0,0,1,.3-7.18,10.89,10.89,0,0,1,2.35-3,17.73,17.73,0,0,1,9-4.51,19.07,19.07,0,0,1,15.89,4.8,15,15,0,0,1,4.87,12.2C321.08,192.35,314.69,197,311.69,200Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 304.939px 184.098px;" id="eltz99lmfhy1"
                                class="animable"></path>
                            <path
                                d="M319.84,177c2.8,4.86,4,20.3,2,24.17a7.84,7.84,0,0,1-6.49,3.9,6.29,6.29,0,0,0,1.62-5.08s-.47,4.41-7.11,4.67-15.75.54-17-5.6,1.36-18.61,1.36-18.61Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 307.677px 191.035px;" id="el9bck6h8z868"
                                class="animable"></path>
                            <path
                                d="M295.67,204c-9.22.54-11.92,5.26-15.07,13.23C277.75,224.47,271,241,271,241l7.43,3.2c4.56-2.81,9.45-13.28,14.36-24.15Z"
                                style="fill: rgb(255, 168, 167); transform-origin: 283.335px 224.1px;"
                                id="el0tkbqa72ho2d" class="animable"></path>
                            <path d="M280.6,217.25s2.89,13.12,1.31,18-2.34-15.43-2.34-15.43Z"
                                style="fill: rgb(242, 143, 143); transform-origin: 280.976px 226.629px;"
                                id="el1cestpi8b63" class="animable"></path>
                            <path
                                d="M280.53,202.25c.82-6.42,1.66-11.49,1-11.68-1.86-.55-2.59,2.14-3.2,5.25-.35,1.76-.54,2.81-.54,2.81,0-.15-.64-.34-.72-.37a2.36,2.36,0,0,0-.75,0,1.45,1.45,0,0,1-.79-.22c-.16-.11-.3-.24-.47-.34a1.06,1.06,0,0,0-.7-.12c-.23,0-.44.14-.67.18-.74.14-1.48-.42-2.22-.27a1.64,1.64,0,0,0-.68.35,5.14,5.14,0,0,0-.7.7l-1.05,1.19a2.44,2.44,0,0,0-.42.59,6.85,6.85,0,0,0-.43,2.24,4.87,4.87,0,0,0,0,.66A3.46,3.46,0,0,0,269,205c0,1.51-.06,3.36,1.18,4.78.77.89.77,1.77.86,4.19s-1.72,14.56-1.79,19.25.37,16,7.71,11.89c5.9-3.31,5.21-9.61,4.53-14.88-.87-6.72-2.49-17.89-1.73-19.27.49-.87,2.08-3.79,1.58-6.13A11.77,11.77,0,0,0,280.53,202.25Z"
                                style="fill: rgb(255, 168, 167); transform-origin: 275.054px 218.246px;"
                                id="elh644t3rrs2u" class="animable"></path>
                            <path
                                d="M279.92,201.52c-.61-.84-1.19-1.21-3.14-1.08a28.17,28.17,0,0,1-3.89-.17c-.64,0-1,.9-.16,1.68a7.72,7.72,0,0,0,2.75,1.28,1.92,1.92,0,0,1,1,1.24,4.44,4.44,0,0,0-2.87,3.48,4,4,0,0,1,.86-2.69c1-.95,1.29-1,1.29-1a1.15,1.15,0,0,0-.8-.81,5.2,5.2,0,0,1-2.53-1.35c-.4-.64-.7-1.6,0-1.91s1.22,0,2.81.15S279,199.53,279.92,201.52Z"
                                style="fill: rgb(242, 143, 143); transform-origin: 275.965px 204.004px;"
                                id="elu4xkem7h98" class="animable"></path>
                            <path
                                d="M269,205a3.22,3.22,0,0,0,.51.68c.12.1.93-.1.9-1a3.11,3.11,0,0,0,.48.81c.34.43,1.25-.24,1.25-.86a2.11,2.11,0,0,0,.44.84c.29.28,1.23,0,1.3-1,0,0,.19.94-.5,1.32a1,1,0,0,1-1.2-.33s-.51.69-1,.55a1.64,1.64,0,0,1-.76-.67s-.49.77-.87.64S269,205,269,205Z"
                                style="fill: rgb(242, 143, 143); transform-origin: 271.452px 205.249px;"
                                id="elmfvqcdeii08" class="animable"></path>
                            <path
                                d="M286.93,229.31a13.64,13.64,0,0,1-1.51-12.84c1.42-3.87,10.25-12.45,10.25-12.45l4.57.28a40,40,0,0,1,10.32,1.7l6.15,1.35c-1.56,5.3-1.69,7.4-1.32,10.43s3.77,8.78,3.77,8.78L317.65,232s-1.78,5-2.24,6.8c-.31,1.22.91,3.35,1.48,4.34a28.74,28.74,0,0,1,3.16,7.71c-13.18,3.17-30.51,2.64-34.37-3.13.39-2.2,1.85-4.66,2-7.05S287.22,233.51,286.93,229.31Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 302.257px 228.4px;"
                                id="el4568x0wjblt" class="animable"></path>
                            <g id="elbqdcyeectmn">
                                <path
                                    d="M286.93,229.31a13.64,13.64,0,0,1-1.51-12.84c1.42-3.87,10.25-12.45,10.25-12.45l4.57.28a40,40,0,0,1,10.32,1.7l6.15,1.35c-1.56,5.3-1.69,7.4-1.32,10.43s3.77,8.78,3.77,8.78L317.65,232s-1.78,5-2.24,6.8c-.31,1.22.91,3.35,1.48,4.34a28.74,28.74,0,0,1,3.16,7.71c-13.18,3.17-30.51,2.64-34.37-3.13.39-2.2,1.85-4.66,2-7.05S287.22,233.51,286.93,229.31Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 302.257px 228.4px;"
                                    class="animable"></path>
                            </g>
                            <g id="el363p20yqce1">
                                <path
                                    d="M296.14,230.22s2.79,3.48,8.8,2.48,7.19-5.54,7.19-5.54.35,5.83-6.83,7S296.14,230.22,296.14,230.22Z"
                                    style="fill: rgb(186, 104, 200); opacity: 0.3; transform-origin: 304.136px 230.747px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M294.24,173.94c-1.9,1.12-4.25,5.86-4,15.82.16,7.41,2.54,9.93,3.92,10.53a14.67,14.67,0,0,0,7,.44v5.07s-3.57,4.12-3.36,6.45,5.14,2.88,8.48.62a21.66,21.66,0,0,0,5.48-5.71l0-13.13s1.41,1.5,3.91-.21a4.59,4.59,0,0,0,1.19-6.67c-1.07-1.28-3.84-2.81-5.17-.83,0,0-2.83,1-8.92-1.9A16.3,16.3,0,0,1,294.24,173.94Z"
                                style="fill: rgb(255, 168, 167); transform-origin: 304.014px 194.124px;"
                                id="eljcfmk24hq4" class="animable"></path>
                            <path
                                d="M293.12,172.26c-2.17,3-2,10.66,5.81,12.4a5.64,5.64,0,0,1-1.8-3.51s2.34,3.84,11.39,5.17L308,171.9Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 300.223px 179.11px;" id="el389d1qqebcn"
                                class="animable"></path>
                            <path d="M291.4,184.54l2.42-1a1.25,1.25,0,0,0-1.66-.75A1.37,1.37,0,0,0,291.4,184.54Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 292.566px 183.618px;" id="el75nrd4e3wxa"
                                class="animable"></path>
                            <path d="M311.62,190.76h0l0-4.44H308.8v1.6A2.83,2.83,0,0,0,311.62,190.76Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 310.21px 188.54px;" id="eled5t01c7vs5"
                                class="animable"></path>
                            <path d="M300.5,186.78a1.14,1.14,0,1,0,1.15-1.17A1.16,1.16,0,0,0,300.5,186.78Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 301.64px 186.75px;" id="el27lzn2l8fjq"
                                class="animable"></path>
                            <path d="M297.33,195.39a.57.57,0,1,0,1.13,0,.57.57,0,0,0-.56-.59A.58.58,0,0,0,297.33,195.39Z"
                                style="fill: rgb(158, 103, 103); transform-origin: 297.895px 195.418px;"
                                id="el8kcqlgvjqz6" class="animable"></path>
                            <path d="M292.17,186.78a1.14,1.14,0,1,0,1.15-1.17A1.16,1.16,0,0,0,292.17,186.78Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 293.31px 186.75px;" id="eltr3bmdmnmt"
                                class="animable"></path>
                            <polygon points="297.56 186.12 297.43 192.9 293.77 191.59 297.56 186.12"
                                style="fill: rgb(242, 143, 143); transform-origin: 295.665px 189.51px;"
                                id="elvnnkh60zxe" class="animable"></polygon>
                            <path
                                d="M301.08,200.73c2.72-.35,8.31-1.94,9.18-4.15a5.71,5.71,0,0,1-2,2.82c-1.68,1.42-7.22,3-7.22,3Z"
                                style="fill: rgb(242, 143, 143); transform-origin: 305.65px 199.49px;"
                                id="elbfq8ihq6jpv" class="animable"></path>
                            <path d="M270.57,226.51a2.65,2.65,0,0,0-1.24-2.13c-1.35-1.08-3.12-2-3.61-4.54l-2,1,3,5.53Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 267.145px 223.175px;"
                                id="elvevobqlvpqo" class="animable"></path>
                            <g id="el33c0v0vbgim">
                                <path
                                    d="M270.57,226.51a2.65,2.65,0,0,0-1.24-2.13c-1.35-1.08-3.12-2-3.61-4.54l-2,1,3,5.53Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.75; transform-origin: 267.145px 223.175px;"
                                    class="animable"></path>
                            </g>
                            <path d="M270.57,226.51s2.13-1,6.67.16,8.22,2.49,17,2.64l-2.33,1.23-22.77-2.22Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 281.69px 228.325px;"
                                id="el8vvukr55rk8" class="animable"></path>
                            <g id="elagl6quff9qp">
                                <path d="M270.57,226.51s2.13-1,6.67.16,8.22,2.49,17,2.64l-2.33,1.23-22.77-2.22Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.75; transform-origin: 281.69px 228.325px;"
                                    class="animable"></path>
                            </g>
                            <polygon points="294.26 229.31 301.39 255.88 299.06 257.11 291.93 230.54 294.26 229.31"
                                style="fill: rgb(186, 104, 200); transform-origin: 296.66px 243.21px;"
                                id="elu1cydoki51q" class="animable"></polygon>
                            <g id="elul6a9u4ayq">
                                <polygon points="294.26 229.31 301.39 255.88 299.06 257.11 291.93 230.54 294.26 229.31"
                                    style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 296.66px 243.21px;"
                                    class="animable"></polygon>
                            </g>
                            <g id="el328p5vxgvdl">
                                <polygon points="294.26 229.31 301.39 255.88 299.06 257.11 291.93 230.54 294.26 229.31"
                                    style="opacity: 0.1; transform-origin: 296.66px 243.21px;" class="animable">
                                </polygon>
                            </g>
                            <g id="elepvqveccvrt">
                                <g style="opacity: 0.1; transform-origin: 275.56px 225.205px;" class="animable">
                                    <path
                                        d="M265.66,221.25a4.68,4.68,0,0,0,.89,1.52,13.32,13.32,0,0,0,1.26,1.23,9.48,9.48,0,0,1,1.24,1.21,3.2,3.2,0,0,1,.42.74,1.67,1.67,0,0,1,.13.78l.28.05a1.91,1.91,0,0,0-.18-.93,3.6,3.6,0,0,0-.49-.77,9.21,9.21,0,0,0-1.31-1.19,14.45,14.45,0,0,1-1.3-1.17A4.62,4.62,0,0,1,265.66,221.25Z"
                                        id="elh56ecla8s8l" class="animable"
                                        style="transform-origin: 267.772px 224.015px;"></path>
                                    <path
                                        d="M266,222.74a4.4,4.4,0,0,0,.67.93c.25.29.51.57.75.86a4.91,4.91,0,0,1,.66.91,2.39,2.39,0,0,1,.32,1l.28,0a2.67,2.67,0,0,0-.42-1.11,6.38,6.38,0,0,0-.73-.9c-.27-.28-.54-.54-.81-.81A4.08,4.08,0,0,1,266,222.74Z"
                                        id="el85mqn6183v" class="animable"
                                        style="transform-origin: 267.34px 224.59px;"></path>
                                    <path
                                        d="M285.46,229.16a35.94,35.94,0,0,1-3.7-.69c-1.22-.3-2.42-.65-3.63-1a17.44,17.44,0,0,0-3.73-.64,13.39,13.39,0,0,0-1.9,0,8.13,8.13,0,0,0-.95.15,2.25,2.25,0,0,0-.91.41l.19.21a2.22,2.22,0,0,1,.79-.37,6.64,6.64,0,0,1,.91-.15,14.4,14.4,0,0,1,1.86,0,17.15,17.15,0,0,1,3.7.56c1.22.31,2.43.64,3.66.91A33.82,33.82,0,0,0,285.46,229.16Z"
                                        id="elhzhf3bu8rk" class="animable"
                                        style="transform-origin: 278.05px 227.978px;"></path>
                                    <path
                                        d="M279.44,228.81c-.71-.12-1.4-.3-2.1-.46s-1.39-.32-2.1-.44a13.86,13.86,0,0,0-2.14-.22,5.93,5.93,0,0,0-2.16.31l.11.26a5.68,5.68,0,0,1,2.05-.36,12.53,12.53,0,0,1,2.12.15c.71.1,1.41.23,2.11.37S278.73,228.71,279.44,228.81Z"
                                        id="el1q4ph4o9f7kh" class="animable"
                                        style="transform-origin: 275.19px 228.247px;"></path>
                                </g>
                            </g>
                            <polygon
                                points="263.81 219.56 267.32 226.12 274.97 254.6 273.81 255.22 270.36 247.21 262.65 220.17 263.81 219.56"
                                style="fill: rgb(186, 104, 200); transform-origin: 268.81px 237.39px;"
                                id="el1dwd8g2hkoy" class="animable"></polygon>
                            <g id="eldi8zfzml9gj">
                                <polygon points="266.15 226.73 262.65 220.17 270.36 247.21 273.81 255.22 266.15 226.73"
                                    style="opacity: 0.2; transform-origin: 268.23px 237.695px;" class="animable">
                                </polygon>
                            </g>
                            <polygon
                                points="270.99 228.43 293.43 230.75 301.08 259.24 299.92 259.85 277.47 257.53 269.82 229.04 270.99 228.43"
                                style="fill: rgb(186, 104, 200); transform-origin: 285.45px 244.14px;"
                                id="elozyoo5lan6g" class="animable"></polygon>
                            <g id="els7d408et2y">
                                <polygon points="292.26 231.36 299.92 259.85 277.47 257.53 269.82 229.04 292.26 231.36"
                                    style="opacity: 0.2; transform-origin: 284.87px 244.445px;" class="animable">
                                </polygon>
                            </g>
                            <g id="eln817fc9zpl">
                                <polygon points="293.43 230.75 292.26 231.36 299.92 259.85 301.08 259.24 293.43 230.75"
                                    style="opacity: 0.35; transform-origin: 296.67px 245.3px;" class="animable">
                                </polygon>
                            </g>
                            <path d="M269.82,229l-3.67-2.31,7.66,28.49c.52,1.54,1.78,2.27,3.66,2.31Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 271.81px 242.09px;"
                                id="el6w6v25e3wye" class="animable"></path>
                            <g id="ellyqeue1z86j">
                                <path d="M269.82,229l-3.67-2.31,7.66,28.49a3.51,3.51,0,0,0,3.66,2.31Z"
                                    style="opacity: 0.35; transform-origin: 271.81px 242.099px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M267.45,226.05a3.58,3.58,0,0,1,3.12.46c1,.64,1.25,1.46.54,1.84l-1.29.69-3.67-2.31,1.17-.61Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 268.833px 227.46px;" id="elkb01rua4wqg"
                                class="animable"></path>
                            <path d="M267.32,226.12c.18,1.08,1.53,1.81,3.66,2.31l-1.16.61a4.58,4.58,0,0,1-3.67-2.31Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 268.565px 227.58px;"
                                id="elbsh6qtzal8" class="animable"></path>
                            <path
                                d="M316.71,207.35c3.38.34,7.93,2.93,9.23,9.11s2.88,26.1,3.09,28.85.19,5-6.53,6.87c-7.58,2.11-19.72,2.57-23.15,2.62-6.31.1-10.45-1.92-12.32-5.62s-2.25-8.55,3.3-6c5.91,2.72,8.43,2.88,8.43,2.88l-1-3.75c1.85.89,3.32,3.52,5.2,3.91,1.66.34,14.55-3.56,14.55-3.56l-2.78-16.78S311.23,211.74,316.71,207.35Z"
                                style="fill: rgb(255, 168, 167); transform-origin: 307.436px 231.077px;"
                                id="el6ocfeux3gkh" class="animable"></path>
                        </g>
                    </g>
                </g>
                <g id="freepik--speech-bubble--inject-2" class="animable"
                    style="transform-origin: 272.755px 145.569px;">
                    <g id="freepik--speech-bubble--inject-2" class="animable"
                        style="transform-origin: 272.755px 145.569px;">
                        <g id="freepik--speech-bubble--inject-2" class="animable"
                            style="transform-origin: 272.755px 145.569px;">
                            <path
                                d="M274.39,170.71l-3.24-6.09,2.61-7.53v-4.61l-8,4.61v4.61l3.43,5.94a.49.49,0,0,0,.23.2h0Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 270.075px 161.595px;"
                                id="elyzmc289vm2" class="animable"></path>
                            <g id="elv5a30jzxw6j">
                                <path
                                    d="M274.39,170.71l-3.24-6.09,2.61-7.53v-4.61l-8,4.61v4.61l3.43,5.94a.49.49,0,0,0,.23.2h0Z"
                                    style="opacity: 0.2; transform-origin: 270.075px 161.595px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M293.45,126.21a5.26,5.26,0,0,0-2.4-4.14l-1.94-1.13a5.32,5.32,0,0,0-4.79,0l-29.87,17.28a5.29,5.29,0,0,0-2.39,4.14v22.52a5.27,5.27,0,0,0,2.39,4.14l1.95,1.13a5.3,5.3,0,0,0,4.78,0l9.61-5.55,3.42,5.93a.52.52,0,0,0,.93-.09L278.76,160l12.3-7.12a5.29,5.29,0,0,0,2.39-4.14Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 272.755px 145.574px;"
                                id="elttp3ucbkdr" class="animable"></path>
                            <g id="elkfq1ch2nynk">
                                <path
                                    d="M252.06,164.88a5.27,5.27,0,0,0,2.39,4.14l1.95,1.13a5.32,5.32,0,0,0,4.37.19c-1.12.43-2-.21-2-1.57V146.25a4.94,4.94,0,0,1,.7-2.36L252.76,140a4.9,4.9,0,0,0-.7,2.35Z"
                                    style="opacity: 0.2; transform-origin: 256.415px 155.36px;" class="animable"></path>
                            </g>
                            <g id="elzf6m4d3m9fg">
                                <path
                                    d="M293.37,125.53c-.28-1-1.21-1.34-2.31-.7l-29.88,17.28a4.74,4.74,0,0,0-1.68,1.78L252.77,140a4.77,4.77,0,0,1,1.68-1.79l29.87-17.28a5.32,5.32,0,0,1,4.79,0l1.95,1.13A5.3,5.3,0,0,1,293.37,125.53Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 273.07px 132.125px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <path
                            d="M264.55,148.37a2.68,2.68,0,0,1,1.21-.41,1.69,1.69,0,0,1,.95.21,1.58,1.58,0,0,1,.63.65,2.06,2.06,0,0,1,.24.92.62.62,0,0,1-.07.29.38.38,0,0,1-.15.19L266,151a.4.4,0,0,1-.23.07.38.38,0,0,1-.18-.09l-.1-.1a.44.44,0,0,0-.19-.12.72.72,0,0,0-.31,0,1.27,1.27,0,0,0-.45.18,2.4,2.4,0,0,0-.7.56,1.79,1.79,0,0,0-.22.38,1.13,1.13,0,0,0-.09.45.46.46,0,0,0,.1.34.42.42,0,0,0,.33.1,2.79,2.79,0,0,0,.61-.09l.95-.25a3.09,3.09,0,0,1,1-.12,1.11,1.11,0,0,1,.7.26,1.51,1.51,0,0,1,.43.71,4.51,4.51,0,0,1,.13,1.21,5.25,5.25,0,0,1-.23,1.58,6.1,6.1,0,0,1-.67,1.47,6.55,6.55,0,0,1-1,1.28,6.29,6.29,0,0,1-1.27,1,3.09,3.09,0,0,1-1.28.45,1.76,1.76,0,0,1-1-.18,1.55,1.55,0,0,1-.66-.68,2.25,2.25,0,0,1-.24-1,.75.75,0,0,1,.06-.29.47.47,0,0,1,.15-.18l1.35-.78a.39.39,0,0,1,.23-.08.31.31,0,0,1,.17.07l.12.14a.78.78,0,0,0,.22.16.63.63,0,0,0,.35.06,1.23,1.23,0,0,0,.52-.19,3.73,3.73,0,0,0,.91-.71,1.22,1.22,0,0,0,.37-.87.35.35,0,0,0-.14-.32.73.73,0,0,0-.4-.06,4.11,4.11,0,0,0-.68.14l-1,.25a1.52,1.52,0,0,1-1.55-.27,2.87,2.87,0,0,1-.49-1.9,5.52,5.52,0,0,1,.2-1.42,6.54,6.54,0,0,1,.59-1.43,6.75,6.75,0,0,1,.92-1.29A5.11,5.11,0,0,1,264.55,148.37Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 264.606px 154.118px;" id="elxj9n795tcs"
                            class="animable"></path>
                        <path
                            d="M274.18,153.64a.74.74,0,0,1-.08.35.48.48,0,0,1-.19.24l-1.3.75a.16.16,0,0,1-.2,0,.38.38,0,0,1-.08-.26v-4a1.59,1.59,0,0,0-.22-1c-.14-.19-.37-.2-.68,0a1.52,1.52,0,0,0-.67.8,3.32,3.32,0,0,0-.21,1.22v4a.76.76,0,0,1-.09.35.48.48,0,0,1-.19.24l-1.3.75a.16.16,0,0,1-.2,0,.38.38,0,0,1-.08-.26V146.4a.84.84,0,0,1,.08-.34.49.49,0,0,1,.2-.24l1.3-.75a.14.14,0,0,1,.19,0,.32.32,0,0,1,.09.25v3.38a4.1,4.1,0,0,1,.54-1A2.74,2.74,0,0,1,272,147a2.15,2.15,0,0,1,.9-.31,1,1,0,0,1,.71.25,1.83,1.83,0,0,1,.46.87,5.74,5.74,0,0,1,.16,1.52Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 271.461px 151.074px;" id="eljph8zhs1f5r"
                            class="animable"></path>
                        <path
                            d="M280.82,149.81a.89.89,0,0,1-.08.35.61.61,0,0,1-.2.24l-1.3.75a.14.14,0,0,1-.19,0,.3.3,0,0,1-.09-.25v-4a1.68,1.68,0,0,0-.21-1c-.15-.19-.37-.2-.68,0a1.54,1.54,0,0,0-.68.8,3.32,3.32,0,0,0-.21,1.22v4a.89.89,0,0,1-.08.35.55.55,0,0,1-.2.24l-1.29.75a.15.15,0,0,1-.2,0,.3.3,0,0,1-.08-.25V142.57a.71.71,0,0,1,.08-.34.45.45,0,0,1,.2-.24l1.29-.75a.15.15,0,0,1,.2,0,.36.36,0,0,1,.08.25v3.38a4.9,4.9,0,0,1,.55-1,2.92,2.92,0,0,1,.85-.8,2.14,2.14,0,0,1,.91-.31,1,1,0,0,1,.71.25,1.93,1.93,0,0,1,.45.86,5.82,5.82,0,0,1,.17,1.53Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 278.074px 147.25px;" id="el4pcxeqpdtli"
                            class="animable"></path>
                        <path
                            d="M287.45,146a.77.77,0,0,1-.08.35.6.6,0,0,1-.19.24l-1.3.75a.15.15,0,0,1-.2,0,.34.34,0,0,1-.08-.25v-4a1.59,1.59,0,0,0-.22-1c-.14-.2-.37-.2-.68,0a1.48,1.48,0,0,0-.67.8,3.32,3.32,0,0,0-.21,1.22v4a.93.93,0,0,1-.08.35.61.61,0,0,1-.2.24l-1.3.75a.15.15,0,0,1-.2,0,.34.34,0,0,1-.08-.25V138.74a.93.93,0,0,1,.08-.35.61.61,0,0,1,.2-.24l1.3-.75a.16.16,0,0,1,.2,0,.36.36,0,0,1,.08.25v3.38a4.81,4.81,0,0,1,.54-1,2.82,2.82,0,0,1,.86-.8,2.14,2.14,0,0,1,.91-.31.93.93,0,0,1,.7.25,1.79,1.79,0,0,1,.46.86,5.82,5.82,0,0,1,.16,1.53Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 284.706px 143.427px;" id="elo38899mzpxi"
                            class="animable"></path>
                        <path
                            d="M290.48,140.82a.77.77,0,0,1-.08.35.54.54,0,0,1-.2.24l-1.29.75a.15.15,0,0,1-.2,0,.34.34,0,0,1-.08-.25v-6.84a.93.93,0,0,1,.08-.35.61.61,0,0,1,.2-.24l1.29-.75a.16.16,0,0,1,.2,0,.32.32,0,0,1,.08.25Zm0,3.41a.74.74,0,0,1-.08.35.54.54,0,0,1-.2.24l-1.29.75a.15.15,0,0,1-.2,0,.34.34,0,0,1-.08-.25v-1.6a.89.89,0,0,1,.08-.35.49.49,0,0,1,.2-.24l1.29-.75a.16.16,0,0,1,.2,0,.34.34,0,0,1,.08.26Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 289.555px 139.652px;" id="elfn4iprbwfcu"
                            class="animable"></path>
                    </g>
                </g>
                <g id="freepik--Desk--inject-2" class="animable animator-active"
                    style="transform-origin: 273.87px 328.011px;">
                    <g id="freepik--desk--inject-2" class="animable" style="transform-origin: 273.87px 328.011px;">
                        <polygon points="293.9 360.59 293.9 432.73 296.28 431.36 296.28 359.22 293.9 360.59"
                            style="fill: rgb(38, 50, 56); transform-origin: 295.09px 395.975px;" id="el3wvub58hqq7"
                            class="animable"></polygon>
                        <polygon points="293.9 360.59 293.9 432.73 291.52 431.36 291.52 359.22 293.9 360.59"
                            style="fill: rgb(55, 71, 79); transform-origin: 292.71px 395.975px;" id="el6daxulnsg4a"
                            class="animable"></polygon>
                        <polygon points="361.24 321.65 361.24 393.79 363.63 392.41 363.63 320.27 361.24 321.65"
                            style="fill: rgb(38, 50, 56); transform-origin: 362.435px 357.03px;" id="eltigrm7o78g"
                            class="animable"></polygon>
                        <polygon points="361.24 321.65 361.24 393.79 358.86 392.41 358.86 320.27 361.24 321.65"
                            style="fill: rgb(55, 71, 79); transform-origin: 360.05px 357.03px;" id="el2yi5nv7gugx"
                            class="animable"></polygon>
                        <polygon points="293.9 395.64 363.63 355.32 363.63 358.46 293.9 398.78 293.9 395.64"
                            style="fill: rgb(38, 50, 56); transform-origin: 328.765px 377.05px;" id="el0jn3v79jxwym"
                            class="animable"></polygon>
                        <polygon points="186.45 298.56 186.45 370.7 188.83 369.32 188.83 297.19 186.45 298.56"
                            style="fill: rgb(38, 50, 56); transform-origin: 187.64px 333.945px;" id="elthieea0fbt"
                            class="animable"></polygon>
                        <polygon points="186.45 298.56 186.45 370.7 184.07 369.32 184.06 297.19 186.45 298.56"
                            style="fill: rgb(55, 71, 79); transform-origin: 185.255px 333.945px;" id="elo6rmbnq0dp"
                            class="animable"></polygon>
                        <polygon points="293.9 356.35 293.9 364.83 363.63 324.51 363.63 316.03 293.9 356.35"
                            style="fill: rgb(55, 71, 79); transform-origin: 328.765px 340.43px;" id="el8c2jvlb0z2k"
                            class="animable"></polygon>
                        <polygon points="293.9 364.83 184.06 301.43 184.06 292.94 293.9 356.35 293.9 364.83"
                            style="fill: rgb(69, 90, 100); transform-origin: 238.98px 328.885px;" id="elvsorbb9vccp"
                            class="animable"></polygon>
                        <g id="freepik--desk--inject-2" class="animable"
                            style="transform-origin: 273.87px 304.435px;">
                            <polygon points="293.52 354.76 366.4 312.69 254.23 248.15 181.34 290.23 293.52 354.76"
                                style="fill: rgb(186, 104, 200); transform-origin: 273.87px 301.455px;"
                                id="ell790xdyafd" class="animable"></polygon>
                            <g id="ely63qs6fnpb">
                                <g style="opacity: 0.8; transform-origin: 273.87px 301.455px;" class="animable">
                                    <polygon points="293.52 354.76 366.4 312.69 254.23 248.15 181.34 290.23 293.52 354.76"
                                        style="fill: rgb(255, 255, 255); transform-origin: 273.87px 301.455px;"
                                        id="el3nn6xd1b2ak" class="animable"></polygon>
                                </g>
                            </g>
                            <polygon points="366.4 312.67 366.4 318.66 293.52 360.72 293.52 354.75 366.4 312.67"
                                style="fill: rgb(186, 104, 200); transform-origin: 329.96px 336.695px;"
                                id="elzvnp2lj349j" class="animable"></polygon>
                            <g id="el9bd9jqfpn15">
                                <g style="opacity: 0.5; transform-origin: 329.96px 336.695px;" class="animable">
                                    <polygon points="366.4 312.67 366.4 318.66 293.52 360.72 293.52 354.75 366.4 312.67"
                                        style="fill: rgb(255, 255, 255); transform-origin: 329.96px 336.695px;"
                                        id="elkigv9wzw5pb" class="animable"></polygon>
                                </g>
                            </g>
                            <polygon points="293.52 360.72 181.34 296.25 181.34 290.22 293.52 354.75 293.52 360.72"
                                style="fill: rgb(186, 104, 200); transform-origin: 237.43px 325.47px;"
                                id="eldjbho2jwx49" class="animable"></polygon>
                            <g id="ela80t3d7zcnw">
                                <g style="opacity: 0.65; transform-origin: 237.43px 325.47px;" class="animable">
                                    <polygon
                                        points="293.52 360.72 181.34 296.25 181.34 290.22 293.52 354.75 293.52 360.72"
                                        style="fill: rgb(255, 255, 255); transform-origin: 237.43px 325.47px;"
                                        id="elkka08borjb" class="animable"></polygon>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--Lamp--inject-2" class="animable"
                            style="transform-origin: 343.053px 291.542px;">
                            <g id="freepik--shadow--inject-2">
                                <path
                                    d="M339.69,309.73c-3.57,2-3.57,5.17,0,7.14a14.75,14.75,0,0,0,12.9,0c3.56-2,3.56-5.17,0-7.14A14.82,14.82,0,0,0,339.69,309.73Z"
                                    style="opacity: 0.1; transform-origin: 346.136px 313.304px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M340.42,277.67c-1,3.89-4.51,5.17-7.79,2.85a11.26,11.26,0,0,1-4.1-11.24c1-3.89,4.51-5.16,7.79-2.84A11.27,11.27,0,0,1,340.42,277.67Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 334.474px 273.479px;"
                                id="elm4nmy9e48ir" class="animable"></path>
                            <path
                                d="M344,266.87l1,2.76,1,2.76a15.24,15.24,0,0,1-8.65,9l-5.83-15.88C336.42,263.75,341.16,265.3,344,266.87Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 338.76px 273.06px;"
                                id="ellz24tu35jmn" class="animable"></path>
                            <g id="elnzwgq28e7hk">
                                <g style="opacity: 0.25; transform-origin: 341.399px 269.22px;" class="animable">
                                    <path
                                        d="M342.71,266.26s-2.54,2.89-1.19,5.94c0,0-1.78-2.14-1.37-4.16A2.31,2.31,0,0,1,342.71,266.26Z"
                                        id="el2syqt93itfx" class="animable"
                                        style="transform-origin: 341.399px 269.22px;"></path>
                                </g>
                            </g>
                            <path
                                d="M342.19,266.43a10.49,10.49,0,0,1,5.4-.42l.81,2.23.08.25.81,2.23a10.55,10.55,0,0,1-4.43,3.11h0a2.43,2.43,0,0,1-2.2-.43,5.26,5.26,0,0,1-1.89-5.24,2.4,2.4,0,0,1,1.43-1.74Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 344.971px 269.881px;"
                                id="el1y5a2r221g9" class="animable"></path>
                            <g id="elsttgrurqhwn">
                                <g style="opacity: 0.15; transform-origin: 344.971px 269.881px;" class="animable">
                                    <path
                                        d="M342.19,266.43a10.49,10.49,0,0,1,5.4-.42l.81,2.23.08.25.81,2.23a10.55,10.55,0,0,1-4.43,3.11h0a2.43,2.43,0,0,1-2.2-.43,5.26,5.26,0,0,1-1.89-5.24,2.4,2.4,0,0,1,1.43-1.74Z"
                                        id="els2k2kdyo46" class="animable"
                                        style="transform-origin: 344.971px 269.881px;"></path>
                                </g>
                            </g>
                            <g id="elgyqd0i2ov9g">
                                <path
                                    d="M331.56,265.54h0a14.84,14.84,0,0,1,11.16.73,10.47,10.47,0,0,1,4.83-.24l.81,2.23.08.25.81,2.23a10.66,10.66,0,0,1-3.74,2.83,14.9,14.9,0,0,1-8.16,7.87h0a5.14,5.14,0,0,1-4.76-.9,11.26,11.26,0,0,1-4.1-11.24A5.1,5.1,0,0,1,331.56,265.54Z"
                                    style="opacity: 0.15; transform-origin: 338.746px 273.229px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M349.81,269.83a1.45,1.45,0,0,1-2.4.86,3.45,3.45,0,0,1-1.25-3.46,1.44,1.44,0,0,1,2.39-.86A3.47,3.47,0,0,1,349.81,269.83Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 347.983px 268.529px;"
                                id="el10z0sdop4w3c" class="animable"></path>
                            <path
                                d="M346,272.39a1.94,1.94,0,0,1,1.58-.82.58.58,0,0,1,.57.33h0l8,16.73h0a.65.65,0,0,1-.11.58,1.94,1.94,0,0,1-1.58.82.62.62,0,0,1-.58-.33h0l-8-16.7h0A.6.6,0,0,1,346,272.39Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 351.01px 280.799px;"
                                id="el5z4cpqwrxzv" class="animable"></path>
                            <g id="ellmhl2vt61hl">
                                <g style="opacity: 0.5; transform-origin: 351.01px 280.799px;" class="animable">
                                    <path
                                        d="M346,272.39a1.94,1.94,0,0,1,1.58-.82.58.58,0,0,1,.57.33h0l8,16.73h0a.65.65,0,0,1-.11.58,1.94,1.94,0,0,1-1.58.82.62.62,0,0,1-.58-.33h0l-8-16.7h0A.6.6,0,0,1,346,272.39Z"
                                        id="elpeveasxwavc" class="animable"
                                        style="transform-origin: 351.01px 280.799px;"></path>
                                </g>
                            </g>
                            <path
                                d="M338.91,312.38a2.58,2.58,0,0,1,.06-.61,9.06,9.06,0,0,1,3.69-5.5h7.71a9,9,0,0,1,3.69,5.5,2.14,2.14,0,0,1,.06.61.77.77,0,0,1,0,.1,3.86,3.86,0,0,1-2.21,2.94,11.88,11.88,0,0,1-10.77,0,3.86,3.86,0,0,1-2.21-2.94A.77.77,0,0,1,338.91,312.38Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 346.516px 311.49px;"
                                id="el8zrk2kw542a" class="animable"></path>
                            <g id="elbnbqwsw3v">
                                <g style="opacity: 0.15; transform-origin: 346.516px 311.49px;" class="animable">
                                    <path
                                        d="M338.91,312.38a2.58,2.58,0,0,1,.06-.61,9.06,9.06,0,0,1,3.69-5.5h7.71a9,9,0,0,1,3.69,5.5,2.14,2.14,0,0,1,.06.61.77.77,0,0,1,0,.1,3.86,3.86,0,0,1-2.21,2.94,11.88,11.88,0,0,1-10.77,0,3.86,3.86,0,0,1-2.21-2.94A.77.77,0,0,1,338.91,312.38Z"
                                        id="elhffgqzb9i1" class="animable"
                                        style="transform-origin: 346.516px 311.49px;"></path>
                                </g>
                            </g>
                            <ellipse cx="346.52" cy="308.26" rx="5.17" ry="2.99"
                                style="fill: rgb(186, 104, 200); transform-origin: 346.52px 308.26px;" id="elbl7scpv3jp"
                                class="animable"></ellipse>
                            <path
                                d="M347.75,308.34A1.47,1.47,0,0,0,348,308l7.52-16.71-2.36-1.24-7.95,17.49h0c-.21.44-.22.73.25,1a2.29,2.29,0,0,0,2,0,1.21,1.21,0,0,0,.24-.2h0Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 350.296px 299.41px;"
                                id="elvd3df5h1n5h" class="animable"></path>
                            <g id="elfzs81ccomd6">
                                <path
                                    d="M347.75,308.34A1.47,1.47,0,0,0,348,308l7.52-16.71-2.36-1.24-7.95,17.49h0c-.21.44-.22.73.25,1a2.29,2.29,0,0,0,2,0,1.21,1.21,0,0,0,.24-.2h0Z"
                                    style="opacity: 0.5; transform-origin: 350.296px 299.41px;" class="animable"></path>
                            </g>
                            <path
                                d="M355.7,286.75h0a1.17,1.17,0,0,1,1.2.42,3.83,3.83,0,0,1,.88,3.34,1.24,1.24,0,0,1-.69.91h0l-2.64,1-1.32-4.71Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 355.497px 289.569px;"
                                id="ellrtldj6jim9" class="animable"></path>
                            <g id="elzgsl576lzo">
                                <g style="opacity: 0.15; transform-origin: 355.497px 289.569px;" class="animable">
                                    <path
                                        d="M355.7,286.75h0a1.17,1.17,0,0,1,1.2.42,3.83,3.83,0,0,1,.88,3.34,1.24,1.24,0,0,1-.69.91h0l-2.64,1-1.32-4.71Z"
                                        id="eljci0vqxpvdg" class="animable"
                                        style="transform-origin: 355.497px 289.569px;"></path>
                                </g>
                            </g>
                            <path
                                d="M354.29,288.15a3.83,3.83,0,0,1,.88,3.35c-.29,1.07-1.16,1.3-1.93.51a3.79,3.79,0,0,1-.88-3.35A1.05,1.05,0,0,1,354.29,288.15Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 353.763px 290.075px;"
                                id="elyfgbg0yke8" class="animable"></path>
                        </g>
                        <g id="freepik--lamp--inject-2" class="animable"
                            style="transform-origin: 242.082px 248.33px;">
                            <g id="freepik--shadow--inject-2">
                                <path
                                    d="M229,264.74c-3.56,2-3.56,5.18,0,7.15a14.84,14.84,0,0,0,12.91,0c3.56-2,3.56-5.17,0-7.15A14.84,14.84,0,0,0,229,264.74Z"
                                    style="opacity: 0.1; transform-origin: 235.455px 268.315px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M228.27,267.4a2.47,2.47,0,0,1,0-.61,9.08,9.08,0,0,1,3.7-5.5h7.71a9,9,0,0,1,3.69,5.5,3.08,3.08,0,0,1,.06.61s0,.1,0,.1a3.86,3.86,0,0,1-2.22,2.94,11.93,11.93,0,0,1-10.76,0,3.91,3.91,0,0,1-2.22-2.94A.32.32,0,0,1,228.27,267.4Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 235.83px 266.506px;"
                                id="elreya07hc4em" class="animable"></path>
                            <g id="el8wqk8lrgj16">
                                <g style="opacity: 0.15; transform-origin: 235.83px 266.506px;" class="animable">
                                    <path
                                        d="M228.27,267.4a2.47,2.47,0,0,1,0-.61,9.08,9.08,0,0,1,3.7-5.5h7.71a9,9,0,0,1,3.69,5.5,3.08,3.08,0,0,1,.06.61s0,.1,0,.1a3.86,3.86,0,0,1-2.22,2.94,11.93,11.93,0,0,1-10.76,0,3.91,3.91,0,0,1-2.22-2.94A.32.32,0,0,1,228.27,267.4Z"
                                        id="el07ck50xg5h7s" class="animable"
                                        style="transform-origin: 235.83px 266.506px;"></path>
                                </g>
                            </g>
                            <path
                                d="M239.53,261.16c2,1.17,2,3.06,0,4.23a8.13,8.13,0,0,1-7.32,0c-2-1.17-2-3.06,0-4.23A8.13,8.13,0,0,1,239.53,261.16Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 235.87px 263.275px;"
                                id="elyhbp1dw2u38" class="animable"></path>
                            <path
                                d="M234.64,263.39a1.47,1.47,0,0,1-.23-.31l-7.52-16.7,2.36-1.24,7.95,17.48h0c.21.44.22.73-.25,1a2.29,2.29,0,0,1-2,0,1.18,1.18,0,0,1-.24-.19h0Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 232.114px 254.495px;"
                                id="el2s58ke28dvj" class="animable"></path>
                            <g id="elasblcrarvph">
                                <path
                                    d="M234.64,263.39a1.47,1.47,0,0,1-.23-.31l-7.52-16.7,2.36-1.24,7.95,17.48h0c.21.44.22.73-.25,1a2.29,2.29,0,0,1-2,0,1.18,1.18,0,0,1-.24-.19h0Z"
                                    style="opacity: 0.5; transform-origin: 232.114px 254.495px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M228.34,241.86h0a1.18,1.18,0,0,1,1.2.41,3.83,3.83,0,0,1,.88,3.35,1.28,1.28,0,0,1-.69.91h0l-2.65,1-1.32-4.72Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 228.133px 244.678px;"
                                id="elx2qi2njda7" class="animable"></path>
                            <g id="elvj1rsfg2o7s">
                                <g style="opacity: 0.15; transform-origin: 228.133px 244.678px;" class="animable">
                                    <path
                                        d="M228.34,241.86h0a1.18,1.18,0,0,1,1.2.41,3.83,3.83,0,0,1,.88,3.35,1.28,1.28,0,0,1-.69.91h0l-2.65,1-1.32-4.72Z"
                                        id="elq3zw5rar039" class="animable"
                                        style="transform-origin: 228.133px 244.678px;"></path>
                                </g>
                            </g>
                            <path
                                d="M226.93,243.26a3.82,3.82,0,0,1,.88,3.35c-.29,1.07-1.15,1.29-1.93.51a3.82,3.82,0,0,1-.88-3.35C225.29,242.7,226.15,242.48,226.93,243.26Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 226.405px 245.19px;"
                                id="el70wxz3b2vvb" class="animable"></path>
                            <path
                                d="M239.94,227.74a2,2,0,0,1,1.4,1.09.58.58,0,0,1-.05.66h0l-11.85,14.25h0a.64.64,0,0,1-.57.14,2,2,0,0,1-1.4-1.09.58.58,0,0,1,.05-.66h0l11.83-14.23h0A.64.64,0,0,1,239.94,227.74Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 234.405px 235.81px;"
                                id="elnvcsrr1rlan" class="animable"></path>
                            <g id="elpdlyhfgtio">
                                <g style="opacity: 0.5; transform-origin: 234.405px 235.81px;" class="animable">
                                    <path
                                        d="M239.94,227.74a2,2,0,0,1,1.4,1.09.58.58,0,0,1-.05.66h0l-11.85,14.25h0a.64.64,0,0,1-.57.14,2,2,0,0,1-1.4-1.09.58.58,0,0,1,.05-.66h0l11.83-14.23h0A.64.64,0,0,1,239.94,227.74Z"
                                        id="elrlykgx0ng1" class="animable"
                                        style="transform-origin: 234.405px 235.81px;"></path>
                                </g>
                            </g>
                            <path
                                d="M238.24,227.79c-.66-.82-.09-2.34.67-3.21s2.19-1.65,3.1-1.11,3.73,2.87,3.73,2.87l-4.27,4.91S238.9,228.62,238.24,227.79Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 241.845px 227.271px;"
                                id="eltbxm3wdgpdl" class="animable"></path>
                            <g id="el6ompslqgcg2">
                                <path
                                    d="M238.24,227.79c-.66-.82-.09-2.34.67-3.21s2.19-1.65,3.1-1.11,3.73,2.87,3.73,2.87l-4.27,4.91S238.9,228.62,238.24,227.79Z"
                                    style="opacity: 0.25; transform-origin: 241.845px 227.271px;" class="animable">
                                </path>
                            </g>
                            <g id="el0elej52prlv5">
                                <path
                                    d="M240.33,223.53c-1,1.11-.35,4.24,2.49,6.17l-1.35,1.55s-2.57-2.63-3.23-3.46-.09-2.34.67-3.21A4.27,4.27,0,0,1,240.33,223.53Z"
                                    style="opacity: 0.15; transform-origin: 240.385px 227.39px;" class="animable">
                                </path>
                            </g>
                            <path d="M246.6,243.36c-2.82-2.46-7.4-11.76-4.11-15.54s13.13-.51,15.95,1.94"
                                style="fill: rgb(186, 104, 200); transform-origin: 249.894px 234.729px;"
                                id="el5wqpdk01bsf" class="animable"></path>
                            <g id="eldyt411e2ne">
                                <path d="M246.6,243.36c-2.82-2.46-7.4-11.76-4.11-15.54s13.13-.51,15.95,1.94"
                                    style="opacity: 0.15; transform-origin: 249.894px 234.729px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M259,233.79c1-3.78-1.07-5.6-4.67-4.07a16.44,16.44,0,0,0-8.38,9.61c-1,3.78,1.08,5.6,4.68,4.07A16.36,16.36,0,0,0,259,233.79Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 252.475px 236.56px;"
                                id="elztficacjft8" class="animable"></path>
                            <g id="el3liaeq4tojc">
                                <path
                                    d="M259,233.79c1-3.78-1.07-5.6-4.67-4.07a16.44,16.44,0,0,0-8.38,9.61c-1,3.78,1.08,5.6,4.68,4.07A16.36,16.36,0,0,0,259,233.79Z"
                                    style="opacity: 0.5; transform-origin: 252.475px 236.56px;" class="animable"></path>
                            </g>
                            <path d="M247.3,236.84l-.19-.18a18,18,0,0,1,4.82-5.51l.19.14a3.68,3.68,0,0,1-4.82,5.55Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 250.181px 234.387px;"
                                id="elt8l4mlxtw4s" class="animable"></path>
                            <g id="eldbis8jrl1uq">
                                <path d="M247.3,236.84l-.19-.18a18,18,0,0,1,4.82-5.51l.19.14a3.68,3.68,0,0,1-4.82,5.55Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 250.181px 234.387px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--book--inject-2" class="animable"
                            style="transform-origin: 249.715px 302.155px;">
                            <g id="ela6u56pb182p">
                                <polygon points="257.24 323.6 214.24 298.77 242.19 282.63 285.19 307.46 257.24 323.6"
                                    style="opacity: 0.1; transform-origin: 249.715px 303.115px;" class="animable">
                                </polygon>
                            </g>
                            <polygon points="257.28 321.6 216.77 298.22 242.65 283.28 283.15 306.66 257.28 321.6"
                                style="fill: rgb(186, 104, 200); transform-origin: 249.96px 302.44px;"
                                id="elqkikp6mrtrd" class="animable"></polygon>
                            <g id="ell4yilblxiyp">
                                <polygon points="257.28 321.6 216.77 298.22 242.65 283.28 283.15 306.66 257.28 321.6"
                                    style="opacity: 0.15; transform-origin: 249.96px 302.44px;" class="animable">
                                </polygon>
                            </g>
                            <path d="M237.56,309.6v-.72c0-.9-1.59-3.44-3.58-4.59L217.9,295v3.25Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 227.73px 302.3px;" id="elsjexryt9e2"
                                class="animable"></path>
                            <path
                                d="M217.9,295,234,304.29c2,1.15,3.58,3.7,3.58,4.59v.72l24.75-14.29h0v-.72c0-.9-1.59-3.44-3.58-4.59l-16.08-9.28h0Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 240.115px 295.16px;"
                                id="elxs6vh4inca" class="animable"></path>
                            <path
                                d="M217.9,295,234,304.29c2,1.15,3.58,3.7,3.58,4.59v.72l24.75-14.29h0v-.72c0-.9-1.59-3.44-3.58-4.59l-16.09-9.29Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 240.115px 295.155px;"
                                id="elkbe2mm794p" class="animable"></path>
                            <path d="M237.57,308.93l1.54-.89,2-1.18a4,4,0,0,0-2.5.36A2.11,2.11,0,0,0,237.57,308.93Z"
                                style="fill: rgb(240, 240, 240); transform-origin: 239.34px 307.863px;"
                                id="el0fxxzcfmi05q" class="animable"></path>
                            <path d="M237.57,308.93l1.54-.89,2-1.18a4,4,0,0,0-2.5.36A2.11,2.11,0,0,0,237.57,308.93Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 239.34px 307.863px;"
                                id="el1bddrjcvmoz" class="animable"></path>
                            <polygon points="257.27 322.28 257.28 321.6 283.15 306.66 283.15 307.33 257.27 322.28"
                                style="fill: rgb(186, 104, 200); transform-origin: 270.21px 314.47px;" id="ellxl8volvnp"
                                class="animable"></polygon>
                            <g id="el2acxhlrgdob">
                                <polygon points="257.27 322.28 257.28 321.6 283.15 306.66 283.15 307.33 257.27 322.28"
                                    style="opacity: 0.3; transform-origin: 270.21px 314.47px;" class="animable">
                                </polygon>
                            </g>
                            <polygon points="257.27 322.28 216.76 298.89 216.77 298.22 257.28 321.6 257.27 322.28"
                                style="fill: rgb(186, 104, 200); transform-origin: 237.02px 310.25px;"
                                id="elexl0dl5f8zj" class="animable"></polygon>
                            <path
                                d="M237.57,308.93c0-.89,1.63-1.64,3.62-.5l16.09,9.22V321L237.56,309.6S237.56,309.82,237.57,308.93Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 247.42px 314.426px;"
                                id="elzkenpnofb2i" class="animable"></path>
                            <polygon points="257.28 320.99 257.28 317.65 282.03 303.36 282.03 306.69 257.28 320.99"
                                style="fill: rgb(235, 235, 235); transform-origin: 269.655px 312.175px;"
                                id="elq8wam8hdhv" class="animable"></polygon>
                            <path
                                d="M241.19,308.43l.72.42,15.37,8.8L279.14,305l2.89-1.67L266,294.14c-1.46-.83-2.28-.77-2.85-.44h0L238,308.19A3.18,3.18,0,0,1,241.19,308.43Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 260.015px 305.561px;"
                                id="el3pidfeg3er2" class="animable"></path>
                            <polygon
                                points="258.4 315.14 244.71 307.23 243.98 306.82 243.46 307.13 244.18 307.54 257.88 315.44 258.4 315.14"
                                style="fill: rgb(224, 224, 224); transform-origin: 250.93px 311.13px;"
                                id="elgzy62lmwxe9" class="animable"></polygon>
                            <polygon
                                points="259.67 314.41 245.97 306.5 245.25 306.09 244.72 306.4 245.44 306.81 259.14 314.71 259.67 314.41"
                                style="fill: rgb(224, 224, 224); transform-origin: 252.195px 310.4px;"
                                id="el5heklsqo6yh" class="animable"></polygon>
                            <polygon
                                points="260.93 313.68 247.24 305.77 246.51 305.36 245.99 305.67 246.71 306.08 260.41 313.98 260.93 313.68"
                                style="fill: rgb(224, 224, 224); transform-origin: 253.46px 309.67px;"
                                id="elyhktzg6o91q" class="animable"></polygon>
                            <polygon
                                points="262.2 312.95 248.5 305.04 247.78 304.63 247.25 304.94 247.97 305.35 261.67 313.25 262.2 312.95"
                                style="fill: rgb(224, 224, 224); transform-origin: 254.725px 308.94px;"
                                id="elvv4ompvc42" class="animable"></polygon>
                            <polygon
                                points="263.46 312.22 249.76 304.31 249.04 303.9 248.52 304.2 249.24 304.62 262.94 312.52 263.46 312.22"
                                style="fill: rgb(224, 224, 224); transform-origin: 255.99px 308.21px;" id="elfohk7zkwy7"
                                class="animable"></polygon>
                            <polygon
                                points="264.73 311.49 251.03 303.58 250.31 303.17 249.78 303.48 250.5 303.89 264.2 311.79 264.73 311.49"
                                style="fill: rgb(224, 224, 224); transform-origin: 257.255px 307.48px;"
                                id="elk96n3brpeq" class="animable"></polygon>
                            <polygon
                                points="265.99 310.76 252.29 302.85 251.57 302.44 251.05 302.74 251.77 303.16 265.47 311.06 265.99 310.76"
                                style="fill: rgb(224, 224, 224); transform-origin: 258.52px 306.75px;"
                                id="elfw7oqcug54i" class="animable"></polygon>
                            <polygon
                                points="267.26 310.03 253.56 302.12 252.84 301.71 252.31 302.01 253.03 302.43 266.73 310.33 267.26 310.03"
                                style="fill: rgb(224, 224, 224); transform-origin: 259.785px 306.02px;"
                                id="eljvs7ysg5rbo" class="animable"></polygon>
                            <polygon
                                points="268.52 309.3 254.82 301.39 254.1 300.98 253.58 301.28 254.3 301.7 268 309.6 268.52 309.3"
                                style="fill: rgb(224, 224, 224); transform-origin: 261.05px 305.29px;"
                                id="el5jdt0k9h6jm" class="animable"></polygon>
                            <polygon
                                points="269.79 308.56 256.09 300.66 255.37 300.25 254.84 300.55 255.56 300.97 269.26 308.87 269.79 308.56"
                                style="fill: rgb(224, 224, 224); transform-origin: 262.315px 304.56px;"
                                id="ellf4umn0hywo" class="animable"></polygon>
                            <polygon
                                points="271.05 307.83 257.36 299.93 256.63 299.52 256.11 299.82 256.83 300.24 270.53 308.14 271.05 307.83"
                                style="fill: rgb(224, 224, 224); transform-origin: 263.58px 303.83px;"
                                id="eli5mpogkp6em" class="animable"></polygon>
                            <polygon
                                points="272.32 307.11 258.62 299.2 257.9 298.79 257.37 299.09 258.09 299.5 271.79 307.41 272.32 307.11"
                                style="fill: rgb(224, 224, 224); transform-origin: 264.845px 303.1px;"
                                id="elazhoywa96hw" class="animable"></polygon>
                            <polygon
                                points="273.58 306.37 259.88 298.47 259.16 298.06 258.64 298.36 259.36 298.77 273.06 306.68 273.58 306.37"
                                style="fill: rgb(224, 224, 224); transform-origin: 266.11px 302.37px;"
                                id="elnaf9mqkbv8m" class="animable"></polygon>
                            <polygon
                                points="274.85 305.64 261.15 297.74 260.43 297.33 259.9 297.63 260.62 298.04 274.32 305.95 274.85 305.64"
                                style="fill: rgb(224, 224, 224); transform-origin: 267.375px 301.64px;"
                                id="el0cb8dnxvz6pb" class="animable"></polygon>
                            <polygon
                                points="276.11 304.91 262.42 297.01 261.69 296.6 261.17 296.9 261.89 297.31 275.59 305.22 276.11 304.91"
                                style="fill: rgb(224, 224, 224); transform-origin: 268.64px 300.91px;" id="elq5a2ioe6re"
                                class="animable"></polygon>
                            <polygon
                                points="277.38 304.18 263.68 296.28 262.96 295.87 262.43 296.17 263.15 296.58 276.85 304.49 277.38 304.18"
                                style="fill: rgb(224, 224, 224); transform-origin: 269.905px 300.18px;"
                                id="elfir03vwf4wt" class="animable"></polygon>
                            <polygon
                                points="278.64 303.45 264.94 295.55 264.22 295.14 263.7 295.44 264.42 295.85 278.12 303.76 278.64 303.45"
                                style="fill: rgb(224, 224, 224); transform-origin: 271.17px 299.45px;"
                                id="eltng7iyfvt19" class="animable"></polygon>
                            <g id="eltyhoxzidctp">
                                <path
                                    d="M241,307.57c.3,0,.93.23,1.27.31a36.51,36.51,0,0,1,6.52,2.75c3.3,1.65,6.41,3.41,6.41,3.41L277.89,301,266,294.14a5.52,5.52,0,0,0-1.48-.61,3.09,3.09,0,0,0-1,.36l-.16-.28-.18.09L238,308.19A4.06,4.06,0,0,1,241,307.57Z"
                                    style="opacity: 0.1; transform-origin: 257.945px 303.785px;" class="animable">
                                </path>
                            </g>
                            <polygon points="257.3 318.38 254.84 317.13 257.28 318.62 259.73 317.2 257.3 318.38"
                                style="fill: rgb(230, 230, 230); transform-origin: 257.285px 317.875px;"
                                id="elb71fzp7m1fr" class="animable"></polygon>
                            <polygon points="257.27 320.05 252.77 317.45 257.27 319.87 262.34 317.12 257.27 320.05"
                                style="fill: rgb(230, 230, 230); transform-origin: 257.555px 318.585px;"
                                id="el91z2uuuqlre" class="animable"></polygon>
                            <polygon points="282.03 304.1 278.25 306.38 282.03 304.44 282.03 304.1"
                                style="fill: rgb(230, 230, 230); transform-origin: 280.14px 305.24px;"
                                id="eltlu44wxy44j" class="animable"></polygon>
                            <polygon points="282.03 305.4 276.41 308.83 282.03 305.71 282.03 305.4"
                                style="fill: rgb(230, 230, 230); transform-origin: 279.22px 307.115px;"
                                id="elv7v992hf5di" class="animable"></polygon>
                            <path
                                d="M241.14,306.86a7.5,7.5,0,0,1,1,.17,35.61,35.61,0,0,1,6.52,2.74c3.3,1.65,6.41,3.42,6.41,3.42L279.8,298.9s-9.43-5.42-13.12-6.14a5,5,0,0,0-3.45.27h0l-24.59,14.19A4,4,0,0,1,241.14,306.86Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 259.22px 302.881px;"
                                id="elmax35w47lb" class="animable"></path>
                            <path
                                d="M241.45,305.6a4,4,0,0,1,2.5-.36,7.38,7.38,0,0,1,1,.16A23.56,23.56,0,0,1,249,307c.8.37,1.64.77,2.47,1.19,2,1,3.9,2,5.11,2.69l-.56.33c-1.21-.67-3.13-1.7-5.11-2.7-.83-.41-1.67-.82-2.47-1.19a23.69,23.69,0,0,0-4.05-1.55,7.81,7.81,0,0,0-1-.17,4,4,0,0,0-2.5.36Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 248.735px 308.193px;"
                                id="eln2w8xabnpl" class="animable"></path>
                            <path
                                d="M242.72,304.87a4,4,0,0,1,2.5-.36,7.67,7.67,0,0,1,1,.16,24.57,24.57,0,0,1,4,1.55c.8.37,1.64.78,2.47,1.2,2,1,3.9,2,5.11,2.69l-.56.33c-1.21-.67-3.13-1.7-5.12-2.7-.82-.41-1.66-.82-2.47-1.19a22.82,22.82,0,0,0-4-1.55,8,8,0,0,0-1-.17,4.05,4.05,0,0,0-2.5.36Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 249.975px 307.443px;"
                                id="elmukri447468" class="animable"></path>
                            <path
                                d="M244,304.14a4,4,0,0,1,2.5-.37c.3,0,.62.09,1,.17a23.64,23.64,0,0,1,4,1.55c.81.37,1.65.78,2.47,1.19,2,1,3.91,2,5.12,2.7l-.56.33c-1.22-.67-3.13-1.71-5.12-2.7-.83-.42-1.66-.82-2.47-1.19a23.83,23.83,0,0,0-4-1.56c-.35-.07-.67-.13-1-.16a4,4,0,0,0-2.5.36Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 251.265px 306.71px;"
                                id="elnnam3j5l59i" class="animable"></path>
                            <path
                                d="M245.25,303.4a4,4,0,0,1,2.5-.36c.3,0,.62.09,1,.17a23.64,23.64,0,0,1,4,1.55c.8.37,1.64.78,2.47,1.19,2,1,3.9,2,5.12,2.7l-.57.32c-1.21-.66-3.13-1.7-5.11-2.69-.83-.42-1.67-.82-2.47-1.19a23.56,23.56,0,0,0-4-1.56,7.38,7.38,0,0,0-1-.16,4,4,0,0,0-2.5.36Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 252.515px 305.973px;"
                                id="elhttxoa4th6o" class="animable"></path>
                            <path
                                d="M246.52,302.67a4,4,0,0,1,2.5-.36,7.5,7.5,0,0,1,1,.17A22.58,22.58,0,0,1,254,304c.8.37,1.64.78,2.47,1.19,2,1,3.9,2,5.11,2.7l-.56.32c-1.21-.66-3.13-1.7-5.12-2.69-.82-.42-1.66-.83-2.47-1.2a24.52,24.52,0,0,0-4-1.55,7.67,7.67,0,0,0-1-.16,4,4,0,0,0-2.5.36Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 253.755px 305.228px;"
                                id="elatups4l1e1" class="animable"></path>
                            <path
                                d="M247.79,301.94a4,4,0,0,1,2.5-.36c.29,0,.61.09,1,.16a23.83,23.83,0,0,1,4,1.56c.81.37,1.65.78,2.47,1.19,2,1,3.91,2,5.12,2.7l-.56.32c-1.21-.67-3.13-1.7-5.12-2.7-.82-.41-1.66-.82-2.47-1.19a23.64,23.64,0,0,0-4-1.55c-.35-.08-.67-.13-1-.17a4,4,0,0,0-2.5.37Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 255.055px 304.513px;"
                                id="elyue0j2e1cip" class="animable"></path>
                            <path
                                d="M249.05,301.21a4.05,4.05,0,0,1,2.5-.36,7.81,7.81,0,0,1,1,.16,23.83,23.83,0,0,1,4,1.56c.81.37,1.64.77,2.47,1.19,2,1,3.91,2,5.12,2.69l-.56.33c-1.22-.67-3.13-1.7-5.12-2.7-.83-.41-1.67-.82-2.47-1.19a23.64,23.64,0,0,0-4-1.55c-.35-.08-.67-.13-1-.17a4,4,0,0,0-2.5.36Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 256.315px 303.784px;"
                                id="el5rmm7m6hca9" class="animable"></path>
                            <path
                                d="M250.32,300.48a4,4,0,0,1,2.5-.36,7.81,7.81,0,0,1,1,.16,24.52,24.52,0,0,1,4,1.55c.8.38,1.64.78,2.47,1.2,2,1,3.9,2,5.12,2.69l-.57.33c-1.21-.67-3.13-1.7-5.11-2.7-.83-.41-1.67-.82-2.47-1.19a22.86,22.86,0,0,0-4-1.55,7.81,7.81,0,0,0-1-.17,4,4,0,0,0-2.5.36Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 257.585px 303.053px;"
                                id="ela8m1xfmks0p" class="animable"></path>
                            <path
                                d="M253.52,299.71c.3,0,.62.09,1,.16a36.78,36.78,0,0,1,6.51,2.75c2,1,3.91,2,5.12,2.7l.56-.33c-1.21-.67-3.13-1.7-5.11-2.7a37.1,37.1,0,0,0-6.52-2.74c-.34-.08-.67-.13-1-.17a4,4,0,0,0-2.5.37l-.57.32A4.05,4.05,0,0,1,253.52,299.71Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 258.86px 302.32px;" id="eliykox3nlkb"
                                class="animable"></path>
                            <path
                                d="M254.79,299a7.81,7.81,0,0,1,1,.16,36.78,36.78,0,0,1,6.51,2.75c2,1,3.9,2,5.12,2.69l.56-.32c-1.21-.67-3.13-1.7-5.12-2.7a36.6,36.6,0,0,0-6.51-2.74c-.35-.08-.67-.13-1-.17a4.05,4.05,0,0,0-2.5.36l-.56.33A4,4,0,0,1,254.79,299Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 260.135px 301.604px;"
                                id="elyn679rbi0w9" class="animable"></path>
                            <path
                                d="M256.06,298.25a7.38,7.38,0,0,1,1,.16,36.51,36.51,0,0,1,6.52,2.75c2,1,3.9,2,5.11,2.69l.57-.32c-1.22-.67-3.13-1.7-5.12-2.7a36.6,36.6,0,0,0-6.51-2.74,8,8,0,0,0-1-.17,4,4,0,0,0-2.5.36l-.56.33A4,4,0,0,1,256.06,298.25Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 261.415px 300.853px;"
                                id="elhu3plalzca9" class="animable"></path>
                            <path
                                d="M257.33,297.51c.29,0,.62.09,1,.17a37.37,37.37,0,0,1,6.51,2.74c2,1,3.91,2,5.12,2.7l.56-.32c-1.21-.67-3.13-1.71-5.11-2.7a36.51,36.51,0,0,0-6.52-2.75,9.6,9.6,0,0,0-1-.16,4,4,0,0,0-2.5.36l-.56.33A4,4,0,0,1,257.33,297.51Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 262.675px 300.123px;"
                                id="elrzb3vf5b1nk" class="animable"></path>
                            <path
                                d="M258.59,296.78c.3,0,.62.09,1,.17a36.6,36.6,0,0,1,6.51,2.74c2,1,3.91,2,5.12,2.7l.56-.33c-1.21-.66-3.13-1.7-5.12-2.69a36.78,36.78,0,0,0-6.51-2.75,8,8,0,0,0-1-.16,4,4,0,0,0-2.5.36l-.57.32A4.05,4.05,0,0,1,258.59,296.78Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 263.93px 299.393px;"
                                id="el15n9m2n9u1g" class="animable"></path>
                            <path
                                d="M259.86,296.05a8,8,0,0,1,1,.17,36.6,36.6,0,0,1,6.51,2.74c2,1,3.9,2,5.12,2.7l.56-.33c-1.21-.66-3.13-1.7-5.12-2.69a36.78,36.78,0,0,0-6.51-2.75,7.81,7.81,0,0,0-1-.16,4.05,4.05,0,0,0-2.5.36l-.56.32A4,4,0,0,1,259.86,296.05Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 265.205px 298.664px;"
                                id="ellb4x7r1g3qb" class="animable"></path>
                            <path
                                d="M261.13,295.32c.29,0,.62.09,1,.16a36.51,36.51,0,0,1,6.52,2.75c2,1,3.9,2,5.11,2.7l.57-.33c-1.22-.67-3.13-1.7-5.12-2.7a37.37,37.37,0,0,0-6.51-2.74c-.35-.08-.67-.13-1-.17a4,4,0,0,0-2.5.37l-.56.32A4,4,0,0,1,261.13,295.32Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 266.485px 297.93px;"
                                id="eldr4ebzi9mfg" class="animable"></path>
                            <path
                                d="M262.39,294.59a7.81,7.81,0,0,1,1,.16,36.78,36.78,0,0,1,6.51,2.75c2,1,3.91,2,5.12,2.69l.56-.32c-1.21-.67-3.13-1.7-5.11-2.7a37.1,37.1,0,0,0-6.52-2.74c-.34-.08-.67-.13-1-.17a4,4,0,0,0-2.5.37l-.57.32A4.05,4.05,0,0,1,262.39,294.59Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 267.73px 297.195px;"
                                id="el8en8cg8d64" class="animable"></path>
                            <path
                                d="M263.66,293.86a7.81,7.81,0,0,1,1,.16,36.78,36.78,0,0,1,6.51,2.75c2,1,3.91,2,5.12,2.69l.56-.32c-1.21-.67-3.13-1.7-5.12-2.7a36.6,36.6,0,0,0-6.51-2.74,8,8,0,0,0-1-.17,4.05,4.05,0,0,0-2.5.36l-.56.33A4,4,0,0,1,263.66,293.86Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 269.005px 296.464px;"
                                id="elqrgm3i8sd0c" class="animable"></path>
                            <path d="M236.31,303a7.93,7.93,0,0,1,2,1.71l.51-.3a8.14,8.14,0,0,0-2-1.71l-14.42-8.31-.52.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 230.35px 299.55px;"
                                id="elwdsoctcgy1c" class="animable"></path>
                            <path d="M236.31,303a7.93,7.93,0,0,1,2,1.71l.51-.3a8.14,8.14,0,0,0-2-1.71l-14.42-8.31-.52.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 230.35px 299.55px;"
                                id="el9g4uvrxytuk" class="animable"></path>
                            <g id="el889wly4fs5x">
                                <path
                                    d="M239.23,304.44l-.21-.24a8.35,8.35,0,0,0-2.07-1.77l-14.55-8.38-1,.6,14.82,8.53a7.85,7.85,0,0,1,1.93,1.66l.14.16Z"
                                    style="fill: rgb(186, 104, 200); opacity: 0.3; transform-origin: 230.315px 299.525px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M237.57,302.22a8.23,8.23,0,0,1,2,1.72l.51-.3a8.14,8.14,0,0,0-2-1.71l-14.43-8.31-.51.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 231.61px 298.78px;"
                                id="elc3qydt5y0wk" class="animable"></path>
                            <path
                                d="M238.84,301.49a8.19,8.19,0,0,1,2,1.72l.52-.3a8.19,8.19,0,0,0-2-1.71l-14.42-8.31-.51.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 232.895px 298.05px;"
                                id="eldneoiju4mtf" class="animable"></path>
                            <path d="M240.1,300.76a8,8,0,0,1,2,1.72l.51-.3a7.93,7.93,0,0,0-2-1.71l-14.42-8.31-.52.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 234.14px 297.32px;"
                                id="el7jqymiaz38w" class="animable"></path>
                            <path d="M241.37,300a8.19,8.19,0,0,1,2,1.72l.52-.3a7.81,7.81,0,0,0-2-1.71l-14.42-8.31-.51.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 235.425px 296.56px;"
                                id="elxrjgx39m0o" class="animable"></path>
                            <path d="M242.63,299.3a8,8,0,0,1,2,1.72l.51-.3a8.19,8.19,0,0,0-2-1.72l-14.42-8.3-.52.29Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 236.67px 295.86px;" id="elj3572iq2ik"
                                class="animable"></path>
                            <path d="M243.9,298.57a8,8,0,0,1,2,1.72l.52-.3a8,8,0,0,0-2-1.72L230,290l-.51.29Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 237.955px 295.145px;"
                                id="elrbt075rl85l" class="animable"></path>
                            <path
                                d="M245.17,297.84a8.14,8.14,0,0,1,2,1.71l.51-.29a8.19,8.19,0,0,0-2-1.72l-14.42-8.3-.52.29Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 239.21px 294.395px;"
                                id="el6cskbdapbq" class="animable"></path>
                            <path
                                d="M246.43,297.11a8.19,8.19,0,0,1,2,1.71l.51-.29a8.19,8.19,0,0,0-2-1.72l-14.43-8.31-.51.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 240.47px 293.66px;" id="elefojqovbye"
                                class="animable"></path>
                            <path
                                d="M247.7,296.38a8.14,8.14,0,0,1,2,1.71l.52-.29a7.85,7.85,0,0,0-2-1.72l-14.42-8.31-.51.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 241.755px 292.93px;"
                                id="elqg5re4ycy1g" class="animable"></path>
                            <path d="M249,295.65a8,8,0,0,1,2,1.71l.51-.29a8,8,0,0,0-2-1.72L235.06,287l-.52.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 243.025px 292.18px;"
                                id="ellhcv38zeshp" class="animable"></path>
                            <path d="M250.23,294.92a8.14,8.14,0,0,1,2,1.71l.52-.3a8,8,0,0,0-2-1.71l-14.42-8.31-.51.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 244.285px 291.47px;"
                                id="elwlytz2lvp0r" class="animable"></path>
                            <path
                                d="M251.49,294.19a7.81,7.81,0,0,1,2,1.71l.51-.3a8.14,8.14,0,0,0-2-1.71l-14.42-8.31-.52.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 245.53px 290.74px;" id="elsclckm2pj6"
                                class="animable"></path>
                            <path d="M252.76,293.46a7.93,7.93,0,0,1,2,1.71l.52-.3a8,8,0,0,0-2-1.71l-14.42-8.31-.51.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 246.815px 290.01px;"
                                id="elgk32zj53b6l" class="animable"></path>
                            <path d="M254,292.72a8.19,8.19,0,0,1,2,1.72l.51-.3a8.14,8.14,0,0,0-2-1.71l-14.42-8.31-.52.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 248.04px 289.28px;"
                                id="eldh5bxkybj1q" class="animable"></path>
                            <path d="M255.29,292a8.23,8.23,0,0,1,2,1.72l.51-.3a8.14,8.14,0,0,0-2-1.71l-14.43-8.31-.51.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 249.33px 288.56px;"
                                id="elb4ilq4w4pmp" class="animable"></path>
                            <path
                                d="M256.56,291.26a8.19,8.19,0,0,1,2,1.72l.52-.3a7.81,7.81,0,0,0-2-1.71l-14.42-8.31-.51.3Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 250.615px 287.82px;"
                                id="el14dtg50x9kme" class="animable"></path>
                            <g id="el8ms6668bf2m">
                                <path
                                    d="M240.48,303.69l-.21-.23a8,8,0,0,0-2.07-1.77l-14.55-8.39-1,.6,14.81,8.53a7.92,7.92,0,0,1,1.94,1.66l.14.17Z"
                                    style="fill: rgb(186, 104, 200); opacity: 0.3; transform-origin: 231.565px 298.78px;"
                                    class="animable"></path>
                            </g>
                            <g id="eldfd2miabli">
                                <path
                                    d="M241.73,303l-.2-.24a8.53,8.53,0,0,0-2.07-1.77l-14.55-8.38-1,.59,14.81,8.54a7.5,7.5,0,0,1,1.94,1.66l.14.16Z"
                                    style="fill: rgb(186, 104, 200); opacity: 0.3; transform-origin: 232.82px 298.085px;"
                                    class="animable"></path>
                            </g>
                            <g id="elljtu1p96cj">
                                <path
                                    d="M243,302.2l-.21-.24a8.35,8.35,0,0,0-2.07-1.77l-14.55-8.38-1,.6,14.82,8.53a7.85,7.85,0,0,1,1.93,1.66l.14.16Z"
                                    style="fill: rgb(186, 104, 200); opacity: 0.3; transform-origin: 234.085px 297.285px;"
                                    class="animable"></path>
                            </g>
                            <g id="elp24ncwiim9g">
                                <path
                                    d="M250.57,297.79l-.21-.23a8,8,0,0,0-2.07-1.77l-14.55-8.39-1,.6,14.81,8.53a7.85,7.85,0,0,1,1.93,1.66l.15.16Z"
                                    style="fill: rgb(186, 104, 200); opacity: 0.3; transform-origin: 241.655px 292.875px;"
                                    class="animable"></path>
                            </g>
                            <g id="elh2vguck3jiu">
                                <path
                                    d="M251.82,297.05l-.2-.24a8.32,8.32,0,0,0-2.07-1.77L235,286.66l-1,.59,14.81,8.54a7.5,7.5,0,0,1,1.94,1.66l.14.16Z"
                                    style="fill: rgb(186, 104, 200); opacity: 0.3; transform-origin: 242.91px 292.135px;"
                                    class="animable"></path>
                            </g>
                            <g id="el7ig7x9a3l1g">
                                <path
                                    d="M253.07,296.3l-.2-.24a8.53,8.53,0,0,0-2.07-1.77l-14.55-8.38-1,.6L250,295A7.7,7.7,0,0,1,252,296.7l.14.16Z"
                                    style="fill: rgb(186, 104, 200); opacity: 0.3; transform-origin: 244.16px 291.385px;"
                                    class="animable"></path>
                            </g>
                            <polygon points="221.28 297.84 217.9 296.06 217.9 295.78 221.28 297.84"
                                style="fill: rgb(230, 230, 230); transform-origin: 219.59px 296.81px;"
                                id="el0jiqzvf9rcd" class="animable"></polygon>
                            <polygon points="217.9 297.05 223.52 300.2 217.9 296.85 217.9 297.05"
                                style="fill: rgb(230, 230, 230); transform-origin: 220.71px 298.525px;"
                                id="elt9tayx6h1qd" class="animable"></polygon>
                            <g id="elwtq2t0fmapd">
                                <path
                                    d="M275.94,296.79c-3-1.61-7.12-3.61-9.26-4a5,5,0,0,0-3.45.27h0l-24.59,14.19a4,4,0,0,1,2.5-.36s12.17-7.42,20-10A25.35,25.35,0,0,1,275.94,296.79Z"
                                    style="opacity: 0.02; transform-origin: 257.29px 299.926px;" class="animable">
                                </path>
                            </g>
                        </g>
                        <g id="freepik--books--inject-2" class="animable"
                            style="transform-origin: 293.21px 328.27px;">
                            <g id="freepik--shadow--inject-2">
                                <path
                                    d="M296.38,349l25-14.33a.31.31,0,0,0,0-.58l-30.33-17.51a1.1,1.1,0,0,0-1,0l-25,14.34c-.28.16-.28.41,0,.57L295.38,349A1.1,1.1,0,0,0,296.38,349Z"
                                    style="opacity: 0.1; transform-origin: 293.21px 332.79px;" class="animable"></path>
                            </g>
                            <g id="freepik--book--inject-2" class="animable"
                                style="transform-origin: 296.061px 328.096px;">
                                <polygon points="318.54 333.9 301.87 343.41 274.33 327.6 291 318.1 318.54 333.9"
                                    id="el1thnrro0tkg" class="animable"
                                    style="transform-origin: 296.435px 330.755px;"></polygon>
                                <path
                                    d="M301.68,342.69l16.08-9.23a6.64,6.64,0,0,1,.09-4.17l-16,9.13A15.54,15.54,0,0,0,301.68,342.69Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 309.728px 335.99px;"
                                    id="eld8vs0phbs2m" class="animable"></path>
                                <path
                                    d="M302.69,337.11a3.42,3.42,0,0,0-1.55,2.66v3.11c0,1,.7,1.38,1.55.89l15.85-9.1v-.77l-15.64,8.92c-.51.29-.92.06-.92-.53v-2.88a2.06,2.06,0,0,1,.93-1.6l15.62-8.92V328Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 309.84px 335.991px;"
                                    id="elwddutfj1f7o" class="animable"></path>
                                <path
                                    d="M318.54,328,291,312.21l-15.85,9.1A3.4,3.4,0,0,0,273.6,324v3.11a1.05,1.05,0,0,0,.46,1l27.54,15.81a1.08,1.08,0,0,1-.45-1v-3.11a3.38,3.38,0,0,1,1.55-2.66Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 296.066px 328.065px;"
                                    id="el2ovp5a4d6au" class="animable"></path>
                                <path
                                    d="M301.6,338.26a3.11,3.11,0,0,0-.46,1.51v3.11a1.08,1.08,0,0,0,.45,1l-27.54-15.81a1.05,1.05,0,0,1-.46-1V324a3.11,3.11,0,0,1,.46-1.51Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 287.591px 333.185px;"
                                    id="elalfip3q368w" class="animable"></path>
                            </g>
                            <g id="freepik--book--inject-2" class="animable"
                                style="transform-origin: 285.735px 325.964px;">
                                <polygon points="305.36 327.08 292.75 343.88 267.31 329.14 280.35 313.99 305.36 327.08"
                                    style="fill: rgb(224, 224, 224); transform-origin: 286.335px 328.935px;"
                                    id="el0emruy54cnml" class="animable"></polygon>
                                <path
                                    d="M292.38,343.09l12.26-16.43a5,5,0,0,1-.83-3L291.59,340S291.25,339.47,292.38,343.09Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 298.091px 333.375px;"
                                    id="elx6mvcxeurua" class="animable"></path>
                                <path
                                    d="M291.78,338.42a4.15,4.15,0,0,0-.29,3.13l.56,1.82c.31,1.09.95,1.46,1.43.83l12.12-16.26-.24-.86-12,16c-.29.39-.67.16-.86-.49l-.47-1.56a2.43,2.43,0,0,1,.18-1.88l12-16-.28-1Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 298.455px 333.329px;"
                                    id="elzga9ljxbzvn" class="animable"></path>
                                <g id="elz47sxedc8xr">
                                    <path
                                        d="M291.78,338.42a4.15,4.15,0,0,0-.29,3.13l.56,1.82c.31,1.09.95,1.46,1.43.83l12.12-16.26-.24-.86-12,16c-.29.39-.67.16-.86-.49l-.47-1.56a2.43,2.43,0,0,1,.18-1.88l12-16-.28-1Z"
                                        style="opacity: 0.35; transform-origin: 298.455px 333.329px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M303.91,322.17l-25.44-14.75-12.13,16.26a4.15,4.15,0,0,0-.29,3.13l.56,1.82a1.74,1.74,0,0,0,.65,1.06l25.44,14.74a1.79,1.79,0,0,1-.65-1.06l-.56-1.82a4.15,4.15,0,0,1,.29-3.13Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 284.89px 325.925px;"
                                    id="el876kiygnw64" class="animable"></path>
                                <g id="el3tfcul91y64">
                                    <path
                                        d="M303.91,322.17l-25.44-14.75-12.13,16.26a4.15,4.15,0,0,0-.29,3.13l.56,1.82a1.74,1.74,0,0,0,.65,1.06l25.44,14.74a1.79,1.79,0,0,1-.65-1.06l-.56-1.82a4.15,4.15,0,0,1,.29-3.13Z"
                                        style="opacity: 0.15; transform-origin: 284.89px 325.925px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M291.4,339.79a4.86,4.86,0,0,0,.15,1.74l.57,1.81a1.76,1.76,0,0,0,.66,1.06l-25.51-14.64a1.73,1.73,0,0,1-.65-1.05l-.57-1.82a4.79,4.79,0,0,1-.15-1.73Z"
                                    style="fill: rgb(186, 104, 200); transform-origin: 279.329px 334.78px;"
                                    id="eljh3jqz5tl6i" class="animable"></path>
                                <g id="el7bjkcw6pecs">
                                    <path
                                        d="M291.4,339.79a4.86,4.86,0,0,0,.15,1.74l.57,1.81a1.76,1.76,0,0,0,.66,1.06l-25.51-14.64a1.73,1.73,0,0,1-.65-1.05l-.57-1.82a4.79,4.79,0,0,1-.15-1.73Z"
                                        style="opacity: 0.25; transform-origin: 279.329px 334.78px;" class="animable">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
                <g id="freepik--character-1--inject-2" class="animable" style="transform-origin: 202.55px 344.125px;">
                    <g id="freepik--character--inject-2" class="animable"
                        style="transform-origin: 202.55px 344.125px;">
                        <g id="freepik--Legs--inject-2" class="animable"
                            style="transform-origin: 231.341px 374.627px;">
                            <path
                                d="M211.8,387c0-.11-1.21-6.85-1.21-6.85s.54.66,4.43,0a21.53,21.53,0,0,0,4.29-1.35l.65,4.9c.84,1.94,4.27,1.4,8,1.32.62,0,1.27-.06,1.91-.11h0c2,.07,3.88,1.44,1.66,3s-5.68,1.83-8.87,2.11C218.85,390.3,212.13,390.8,211.8,387Z"
                                style="fill: rgb(158, 103, 103); transform-origin: 221.561px 384.505px;"
                                id="eltpdaeuraep" class="animable"></path>
                            <path
                                d="M238.24,388.83a3.82,3.82,0,0,1,.09,2c-.14.73-2.18,3-5.51,4.27s-7.31,1-9.21,1.33-3.69,1.27-5.92,1.6-4.42.42-6.47-1.22a4.89,4.89,0,0,1-.52-2.26C211.08,394.24,238.24,388.83,238.24,388.83Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 224.561px 393.527px;" id="elbzakdfg330l"
                                class="animable"></path>
                            <path
                                d="M220.48,384.38c1.31,1.11,4.29.7,7.47.63,3-.07,6.43-.81,8.38.08s3.42,3.41.42,6.21a11.86,11.86,0,0,1-4.06,2.55c-3.5.91-6.54.73-8.77,1.06-2.9.45-4.57,1.56-7.22,1.62-3.43.09-5.5-1-6-1.94s-.38-8.32,1.06-8c0,0,.4,2.42,6.15.64C220.42,386.4,220.52,384.93,220.48,384.38Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 224.447px 390.458px;" id="elwnt2zxac9eg"
                                class="animable"></path>
                            <path
                                d="M229.53,389.17s0-3.12-2.25-4.14a1.19,1.19,0,0,0-1.27.05s2.09.5,2.45,4.18c0,0,.09.25.56.21C229.18,389.45,229.52,389.42,229.53,389.17Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 227.77px 387.172px;"
                                id="elyn1y42kth6" class="animable"></path>
                            <path
                                d="M224.05,385.14s0-.1.55-.16a1,1,0,0,1,.62.13s1.63.89,1.66,4.15a.58.58,0,0,1-.57.45.48.48,0,0,1-.58-.38S225.69,385.91,224.05,385.14Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 225.465px 387.348px;"
                                id="el9jqgbj5oxgo" class="animable"></path>
                            <path
                                d="M222.21,385s.12-.19.52-.15.6.26.6.26a5.83,5.83,0,0,1,.86,4.05s0,.46-.63.44-.5-.51-.5-.51S223.16,385.67,222.21,385Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 223.234px 387.223px;"
                                id="elekpxd1tv3w6" class="animable"></path>
                            <path
                                d="M216.29,343.57c1.29,9.14,3.57,36.85,3.57,36.85s-4.76,3.57-9.78,1.13c-4.18-11.44-9.71-23.78-8.66-34.49Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 210.575px 362.987px;" id="elskd1runo77t"
                                class="animable"></path>
                            <path
                                d="M232.4,393.7c-.49-.9-2.09-6.94-2.09-6.94s2.11,1.48,6,.92a9,9,0,0,0,4-2.23l1.12,5.77c.8,2,4,1.63,7.69,1.64.62,0,1.27,0,1.91-.07h0c2,.12,3.84,1.55,1.59,3s-5.72,1.7-8.92,1.9C239.91,397.92,234.23,397.05,232.4,393.7Z"
                                style="fill: rgb(158, 103, 103); transform-origin: 241.981px 391.587px;"
                                id="el2u77qeoorw5" class="animable"></path>
                            <path
                                d="M261,396.14a4.11,4.11,0,0,1,.05,2.2c-.17.77-2.42,3.21-6,4.44s-7.87.84-9.92,1.18-4,1.27-6.4,1.57-4.75.33-6.92-1.49a5.21,5.21,0,0,1-.49-2.44C231.7,401.24,261,396.14,261,396.14Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 246.246px 400.912px;" id="el14pshfrz6y7"
                                class="animable"></path>
                            <path
                                d="M242.08,390.85a7.64,7.64,0,0,0,.66.5,2.17,2.17,0,0,0,.76.23,10.49,10.49,0,0,0,1.85.21c1.56.07,3.13,0,4.7,0,3.22,0,6.92-.69,9,.31s3.79,3.76.49,6.68a14.67,14.67,0,0,1-4.3,2.69c-3.71,1.16-7.38.55-9.78.85-3.13.4-4.94,1.55-7.79,1.55-3.69,0-5.88-1.21-6.39-2.25-.29-.58.35-3.41.09-5.68-.22-1.95,0-3.25.69-3.1a3.14,3.14,0,0,0,.47.73,2.53,2.53,0,0,0,.75.71,6.34,6.34,0,0,0,1.33.59,7.9,7.9,0,0,0,2.51.58,1.27,1.27,0,0,0,.72-.15,1.48,1.48,0,0,0,.48-.83c.08-.28.17-.55.25-.83a1.4,1.4,0,0,1,.2-.43,1.19,1.19,0,0,1,.46-.3,3.7,3.7,0,0,0,1.49-.93,3.29,3.29,0,0,0,.53-1.28.39.39,0,0,1,.11-.21c.12-.07.26,0,.37.1Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 246.298px 397.166px;" id="ellmeapk0s3xc"
                                class="animable"></path>
                            <path
                                d="M251.63,396.28s0-3.35-2.3-4.51a1.29,1.29,0,0,0-1.36,0s2.23.6,2.52,4.56c0,0,.08.27.59.24C251.25,396.58,251.62,396.55,251.63,396.28Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 249.8px 394.074px;"
                                id="elbmi53av6e37" class="animable"></path>
                            <path
                                d="M245.85,391.81s0-.11.6-.15a1,1,0,0,1,.66.15s1.73,1,1.67,4.5a.61.61,0,0,1-.62.46.5.5,0,0,1-.61-.41S247.6,392.68,245.85,391.81Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 247.316px 394.218px;"
                                id="el35srps62ejx" class="animable"></path>
                            <path
                                d="M243.89,391.65s.13-.19.56-.14.64.29.64.29a6.31,6.31,0,0,1,.82,4.37s0,.49-.69.46-.53-.57-.53-.57S244.89,392.36,243.89,391.65Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 244.948px 394.066px;"
                                id="elnbflzzpc2to" class="animable"></path>
                            <path
                                d="M236.61,350.52c1.57,6.93,3.34,25.85,4.34,36.63a16.11,16.11,0,0,1-10.16,1.76c-2.45-7.65-11.84-28.22-9.31-36.79,1.6-5.41,4.45-4.39,4.45-4.39Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 231.001px 368.377px;"
                                id="el6ngscv2n5us" class="animable"></path>
                            <path d="M226.46,360.55c2.17-1.25,5.21-3.35,5.88-4.75a12.41,12.41,0,0,1-6.07,6.84Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 229.305px 359.22px;" id="elw4pa2k55tia"
                                class="animable"></path>
                        </g>
                        <path
                            d="M150.54,418.35l6.07-50.66,5-.25L153,418.35h0a.67.67,0,0,1-.33.44,1.94,1.94,0,0,1-1.77.09.61.61,0,0,1-.39-.53Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 156.06px 393.246px;" id="elqdqiy15b18l"
                            class="animable"></path>
                        <path
                            d="M218.52,363.1h5l7.23,47.84h0a.59.59,0,0,1-.36.54,1.91,1.91,0,0,1-1.77,0,.65.65,0,0,1-.35-.42h0Z"
                            style="fill: rgb(55, 71, 79); transform-origin: 224.635px 387.399px;" id="elatvfwj9lo85"
                            class="animable"></path>
                        <path d="M223.49,363.1l2,13.35a19.33,19.33,0,0,1-3.81,2.33l-3.17-15.68Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 222px 370.94px;" id="elnhn2k71r9gf"
                            class="animable"></path>
                        <path
                            d="M183.73,435.33l4.66-51.51,5-.25-7.14,51.76h0a.65.65,0,0,1-.33.44,1.94,1.94,0,0,1-1.77.09.6.6,0,0,1-.39-.53Z"
                            style="fill: rgb(55, 71, 79); transform-origin: 188.56px 409.801px;" id="elqk1dc37ykhk"
                            class="animable"></path>
                        <path d="M187.71,391.35l.68-7.53,5-.25-1.13,8.15A9,9,0,0,1,187.71,391.35Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 190.55px 387.714px;" id="elkypcvu4mcb"
                            class="animable"></path>
                        <path
                            d="M191.41,347.34h5l7.22,47.83h0a.59.59,0,0,1-.36.55,2,2,0,0,1-1.77,0,.65.65,0,0,1-.35-.43h0Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 197.52px 371.633px;" id="elgcwahasnij9"
                            class="animable"></path>
                        <path
                            d="M226.55,362.11c.69-3.91-2.5-7-8.5-11a142.25,142.25,0,0,0-17.4-9.78c-5-2.3-10.16-2.09-16.6,1.21-8.93,4.59-35.82,20.9-35.82,20.9s40.2,22.7,47.94,21.68,27.06-13.59,28.59-18S226.55,362.11,226.55,362.11Z"
                            style="fill: rgb(186, 104, 200); transform-origin: 187.436px 362.477px;" id="el2j8bqu259bw"
                            class="animable"></path>
                        <g id="elhxfza76imzr">
                            <g style="opacity: 0.6; transform-origin: 187.436px 362.477px;" class="animable">
                                <path
                                    d="M226.55,362.11c.69-3.91-2.5-7-8.5-11a142.25,142.25,0,0,0-17.4-9.78c-5-2.3-10.16-2.09-16.6,1.21-8.93,4.59-35.82,20.9-35.82,20.9s40.2,22.7,47.94,21.68,27.06-13.59,28.59-18S226.55,362.11,226.55,362.11Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 187.436px 362.477px;"
                                    id="elpnldewuxjo" class="animable"></path>
                            </g>
                        </g>
                        <path
                            d="M192.28,380.32c5.77,5.23,11.81.73,21.35-5.46,10.8-7,12.92-12.75,12.92-12.75s0,4.3-.81,6.32-2.55,4.29-10.34,9.66-13.43,8.06-18.67,9.06l-4.13-.57"
                            style="fill: rgb(186, 104, 200); transform-origin: 209.415px 374.63px;" id="el0ovoy9maw84"
                            class="animable"></path>
                        <g id="eladm5aisdlt6">
                            <path
                                d="M213.63,374.86c10.8-7,12.92-12.75,12.92-12.75s0,4.3-.81,6.32-2.55,4.29-10.34,9.66-13.43,8.06-18.67,9.06l-4.13-.57-.32-6.26C198.05,385.55,204.09,381.05,213.63,374.86Z"
                                style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 209.415px 374.63px;"
                                class="animable"></path>
                        </g>
                        <g id="freepik--Top--inject-2" class="animable"
                            style="transform-origin: 212.477px 315.368px;">
                            <path
                                d="M160.64,342.55c7.52-.75,29-6.13,34.19-7,10-1.71,12.89-1.82,15.77-.91s4.62,2.39,5.34,6.76a51.88,51.88,0,0,1,.67,7.91s-18,6.62-29.09,7.92S160.64,342.55,160.64,342.55Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 188.625px 345.69px;" id="ely9np803is9s"
                                class="animable"></path>
                            <path
                                d="M160.64,342.55c-.42,10.63-.06,20.52,5,25.86,3.43,3.6,20.67,12.95,31.79,9.26,11-3.62,33.64-20.47,35.92-22.16s3.54-3.36,3.41-4.1c-1.64-8.66-6.81-10.42-15.1-8.6-10.14,2.23-32.4,11.31-32.4,11.31Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 198.64px 360.34px;" id="elxbjn9zwdb0n"
                                class="animable"></path>
                            <polygon points="204.68 288.51 198.71 300.03 186.14 292.71 193.31 280.15 204.68 288.51"
                                style="fill: rgb(158, 103, 103); transform-origin: 195.41px 290.09px;"
                                id="eluz95r1wubun" class="animable"></polygon>
                            <path d="M216.65,274.69s2,5.12,1.57,5.49-2.69.3-2.69.3Z"
                                style="fill: rgb(135, 76, 76); transform-origin: 216.905px 277.588px;" id="ellvywbwuzk3"
                                class="animable"></path>
                            <path
                                d="M216.81,277.69a3.75,3.75,0,1,1,.86-7.39,3.75,3.75,0,0,1,2.78,4.51h0a3.76,3.76,0,0,1-3.64,2.88Zm0-6.8a3.06,3.06,0,1,0,3,3.76h0a3.06,3.06,0,0,0-2.27-3.68A2.81,2.81,0,0,0,216.8,270.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 216.785px 273.94px;" id="el8atmp1pqyq8"
                                class="animable"></path>
                            <path
                                d="M211.1,260.5c5.71,2.55,6.88,5.55,5.41,15.19-1.54,10.07-3.23,13-4.82,14-1.07.72-6-.17-8.33-1.38-2.91-1.51-9.38-5.49-11.58-11.19-2.59-6.71-1.9-14.9,2.93-17.29C201.5,256.5,208.77,259.47,211.1,260.5Z"
                                style="fill: rgb(158, 103, 103); transform-origin: 203.692px 274.121px;"
                                id="el2nyjt12quo6" class="animable"></path>
                            <path
                                d="M204.47,288.84a11.58,11.58,0,0,0,6.91,1,9.11,9.11,0,0,1-4.3-1.19c-2.29-1.28-2.54-2.24-2.54-2.24Z"
                                style="fill: rgb(135, 76, 76); transform-origin: 207.925px 288.201px;"
                                id="eljjm8milcij8" class="animable"></path>
                            <path
                                d="M219.83,266.67h0a14,14,0,0,1-6.18.58,12.07,12.07,0,0,1-2,4.52c-.6,1-2.63,4-3.55,1.86-.67-1.56-1.27-3-3.23-3.09-3.21-.2-4.48,3.68-3,6.52s3.48,2.3,3.48,2.3-.73,4.32-3.69,6.8a10.42,10.42,0,0,1-8.18-1.41c-2.74-1.68-6.13-6.45-7-9.75-2.43-9.08-.62-16.79,5.22-17.9,1.41-3.74,4.82-4.82,8.46-4.88,5-.07,9.27,4.09,14.34,3.21,1.06-.18,2.09-.56,3.17-.68a2,2,0,0,1,1.71.41,2.14,2.14,0,0,1,.42,1.48,3.8,3.8,0,0,1-.84,2.71,8.22,8.22,0,0,1,2.35-.28,2.76,2.76,0,0,1,2.07,1,2.88,2.88,0,0,1,.43,2.11A6.06,6.06,0,0,1,219.83,266.67Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 204.644px 269.338px;" id="eltksoi24n25"
                                class="animable"></path>
                            <path d="M191.28,258.38l-3.13-2.88a2.13,2.13,0,1,1,3.13,2.88Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 190.038px 256.551px;" id="el3epq0xe1tem"
                                class="animable"></path>
                            <polygon points="220.18 274.52 208.48 273.95 208.12 273.35 220.21 273.94 220.18 274.52"
                                style="fill: rgb(38, 50, 56); transform-origin: 214.165px 273.935px;" id="elso5oxp4ij2"
                                class="animable"></polygon>
                            <path
                                d="M188.83,288c-7.52-4.1-13.48-1.12-15.94,4.16-2.24,4.77-5.91,18.57-5.91,18.57C170.92,306.84,188.83,288,188.83,288Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 177.905px 298.406px;" id="elqrokiztpyo"
                                class="animable"></path>
                            <path
                                d="M188,289.85l.83-1.84c-8.49-4-15.78,2.37-20.36,13.87-4.91,12.3-7.92,26.2-8,43.21a39.17,39.17,0,0,0,15.36,11.38c10.25,4.06,24.54,2.34,29-8.28,0,0,0-7.08.32-13.21a61.81,61.81,0,0,1,4.67-18.75c2.42-5.64,5.62-16.13-1-20-1.93-1.14-3.91-1.91-6.54-3.16C196.37,295,187.22,292.23,188,289.85Z"
                                style="fill: rgb(186, 104, 200); transform-origin: 186.614px 322.651px;"
                                id="el7x9e18ypvjd" class="animable"></path>
                            <g id="elx2y34jj43rg">
                                <path
                                    d="M188,289.85l.83-1.84c-8.49-4-15.78,2.37-20.36,13.87-4.91,12.3-7.92,26.2-8,43.21a39.17,39.17,0,0,0,15.36,11.38c10.25,4.06,24.54,2.34,29-8.28,0,0,0-7.08.32-13.21a61.81,61.81,0,0,1,4.67-18.75c2.42-5.64,5.62-16.13-1-20-1.93-1.14-3.91-1.91-6.54-3.16C196.37,295,187.22,292.23,188,289.85Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 186.614px 322.651px;"
                                    class="animable"></path>
                            </g>
                            <g id="elafpcaord7v">
                                <path
                                    d="M203.7,303.34c-2.22,5.53-1.14,19.65-1.14,19.65s-2.2,11.48-2.2,17.19-2.84,11.78-10.56,9.44-13.47-7-19.77-15.67-5.73-15.37-4.66-23.19a118.22,118.22,0,0,0-4.86,34.33,39.17,39.17,0,0,0,15.36,11.38c10.25,4.06,24.54,2.34,29-8.28,0,0,0-7.08.32-13.21a61.81,61.81,0,0,1,4.67-18.75c.24-.56.49-1.17.74-1.82C207.52,309.94,205.07,299.91,203.7,303.34Z"
                                    style="fill: rgb(186, 104, 200); opacity: 0.2; transform-origin: 185.554px 330.564px;"
                                    class="animable"></path>
                            </g>
                            <g id="elizkwfssjiza">
                                <path
                                    d="M203.7,303.34c-2.22,5.53-1.14,19.65-1.14,19.65s-2.2,11.48-2.2,17.19-2.84,11.78-10.56,9.44-13.47-7-19.77-15.67-5.73-15.37-4.66-23.19a118.22,118.22,0,0,0-4.86,34.33,39.17,39.17,0,0,0,15.36,11.38c10.25,4.06,24.54,2.34,29-8.28,0,0,0-7.08.32-13.21a61.81,61.81,0,0,1,4.67-18.75c.24-.56.49-1.17.74-1.82C207.52,309.94,205.07,299.91,203.7,303.34Z"
                                    style="opacity: 0.05; transform-origin: 185.554px 330.564px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M233.74,324.37c-3.13-4.91-7.18-11.44-13-19-6.08-7.87-9.91-8.95-12.55-9.42-7.86,10.86,3.51,22.91,3.51,22.91s10.83,14.77,15.52,19.7c2.78,2.92,7.33,4.78,10.26,1.14C241.42,334.76,236.88,329.27,233.74,324.37Z"
                                style="fill: rgb(158, 103, 103); transform-origin: 222.217px 318.831px;"
                                id="elzkrokpjijvo" class="animable"></path>
                            <path
                                d="M207.87,295.64a15.8,15.8,0,0,1,7.66,3.14c2.34,1.55,4.19,4.67,7.62,9s8.4,12.29,8.4,12.29.22,2.31-4.47,6-8,4-8,4L207.92,316.3s-4.84-7.62-4.22-13A11.23,11.23,0,0,1,207.87,295.64Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 217.598px 312.855px;"
                                id="elqfkhooqs9dd" class="animable"></path>
                            <path
                                d="M226.07,337.32c6,7.19,10.05,6.53,18.62-2.83s11.57-14.23,14.16-16.62c3.08-2.83,7.15-9.37,5.06-9.91l-8.43,5c-.55-.08,0-1.7,0-4.09s.42-3.51-.71-3.64c-.76-.08-1.91,1-2.31,2-.5,1.25-1,3.12-1.49,4.24-.86,2.05-2.72,3.27-2.72,6.41s-18.73,12.7-18.73,12.7Z"
                                style="fill: rgb(158, 103, 103); transform-origin: 245.277px 323.703px;"
                                id="el4zd0uu740eu" class="animable"></path>
                            <path d="M235.64,327.25a8.58,8.58,0,0,1,1.79,5.58,6.93,6.93,0,0,0-.62-6.24Z"
                                style="fill: rgb(135, 76, 76); transform-origin: 236.77px 329.71px;" id="ely9rt4gow6vi"
                                class="animable"></path>
                        </g>
                        <path
                            d="M192.6,386.58c-3.28-.17-5.86-2.58-13.67-5.84-14.43-6-25.25-10.82-29.37-18.37s-7-41.45-6-50.89a12.3,12.3,0,0,1,.71-3.13l-1-.15,2.63-2.24h0c2.7-2.21,7.08-.24,10.39,1.56,9.44,5.14,16.83,10.13,22.67,28.16,4.39,13.57,7.29,38,13.35,44.63"
                            style="fill: rgb(186, 104, 200); transform-origin: 167.935px 345.78px;" id="el32vctfc03cj"
                            class="animable"></path>
                        <g id="elz4yhullgs3s">
                            <path
                                d="M144.26,308.35l-1-.15,2.63-2.24h0c2.7-2.21,7.08-.24,10.39,1.56,9.44,5.14,16.83,10.13,22.67,28.16,4.39,13.57,7.29,38,13.35,44.63l.32,6.26c-3.28-.17-5.86-2.58-13.67-5.84-14.43-6-25.25-10.82-29.37-18.37s-7-41.45-6-50.89A12.3,12.3,0,0,1,144.26,308.35Z"
                                style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 167.94px 345.775px;"
                                class="animable"></path>
                        </g>
                        <path
                            d="M153.76,308.74c9.44,5.14,18.32,10.76,23.32,29.25,4.95,18.29,8.15,46.07,19.65,49.16,0,0-5.2,2.07-21.14-4.68-5.08-2.14-11.23-6.05-15.28-8.32-7.92-4.45-12.73-8.1-13.49-9.46-4.19-7.52-7-41.44-6-50.89S149,306.17,153.76,308.74Z"
                            style="fill: rgb(186, 104, 200); transform-origin: 168.674px 347.063px;" id="elj67ps8j3lf"
                            class="animable"></path>
                        <g id="elsmkgr8kahq">
                            <g style="opacity: 0.4; transform-origin: 168.674px 347.063px;" class="animable">
                                <path
                                    d="M153.76,308.74c9.44,5.14,18.32,10.76,23.32,29.25,4.95,18.29,8.15,46.07,19.65,49.16,0,0-5.2,2.07-21.14-4.68-5.08-2.14-11.23-6.05-15.28-8.32-7.92-4.45-12.73-8.1-13.49-9.46-4.19-7.52-7-41.44-6-50.89S149,306.17,153.76,308.74Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 168.674px 347.063px;"
                                    id="el6gngcxswpj8" class="animable"></path>
                            </g>
                        </g>
                    </g>
                </g>
                <defs>
                    <filter id="active" height="200%">
                        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                        </feMorphology>
                        <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                        <feMerge>
                            <feMergeNode in="OUTLINE"></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                    </filter>
                    <filter id="hover" height="200%">
                        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                        </feMorphology>
                        <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                        <feMerge>
                            <feMergeNode in="OUTLINE"></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                        <feColorMatrix type="matrix"
                            values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                        </feColorMatrix>
                    </filter>
                </defs>
            </svg>

            <p>Di dalam halaman ini tersembunyi harta karun kata-kata yang menakjubkan, menanti untuk diungkap dan
                dijelajahi.
                Ketika Anda merangkai huruf-huruf ini, pikiran Anda akan terbang ke tempat-tempat jauh yang penuh dengan
                keindahan alam,
                hutan yang rimbun, dan lautan yang biru menggoda. Anda akan bertemu dengan tokoh-tokoh yang luar biasa, yang
                cerdas, pemberani,
                dan memiliki kekuatan yang tak terbatas. Cerita-cerita mengenai cinta yang mendalam, kehilangan yang
                menggetarkan hati,
                dan petualangan yang menegangkan akan memasuki aliran darah Anda dan menumbuhkan imajinasi yang liar.
                Kata-kata ini bukan hanya
                sekedar rangkaian karakter yang sederhana, melainkan kunci yang membuka pintu menuju dunia baru, di mana
                segala mungkin terjadi.
                Buku-buku adalah jendela ke dalam pikiran dan jiwa penulis yang brilian, dan melalui halaman ini, Anda
                memiliki kesempatan untuk
                melihat melalui jendela itu. Mari kita berlayar melintasi lautan kata-kata, menemukan keajaiban yang tak
                terhitung jumlahnya,
                dan terikat dalam ikatan tak terputus dengan dunia tulisan. Di sini, kata-kata adalah senjata yang kuat,
                yang mampu mengubah pandangan hidup,
                menyentuh emosi terdalam, dan membawa inspirasi yang tak terbatas. Jadi, mari kita ambil waktu sejenak,
                tenangkan pikiran, dan mulailah petualangan tak terlupakan ini.
                Biarkan kata-kata merajut cerita, dan biarkan cerita itu menjelma menjadi mimpi yang nyata dalam pikiran
                Anda. Ayo, mari kita mulai membaca dan
                mengarungi samudra pengetahuan yang luas ini bersama-sama!</p>
        </div>
    </article>

    <!-- panduan -->
    <div class="panduan-masuk">
        <a href="/PanduanMasuk">
            <h2>YUK SIMAK PANDUAN MASUK ! <i data-feather="arrow-right"></i></h2>
        </a>
    </div>

    <!-- footer -->
    <footer class="bagianbawah">
        <div class="perpustakaan">
            <h2>PERPUSTAKAAN AMIKOM <span>YOGYAKARTA</span></h2>
            <div class="jadwal">
                <p class="judul">Operasional Jam Buka :</p>
                <p>> Senin - Jum’at 08.00 - 15.00 WIB</p>
                <p>> Sabtu 09.00 - 14.00 WIB</p>
                <p>> Cuti Umum dan Hari Libur Ditutup</p>
                <p>> Pengunjung maksimal 2000 per hari</p>
            </div>
        </div>

        <div class="contact">
            <h1>Contact Us</h1>
            <div class="telp">
                <!-- <i data-feather="phone" id="icon"></i> -->
                <p><span>Telephone</span>+021 000 4567</p>
                <!-- <i data-feather="mail" id="icon"></i> -->
                <p><span>Email</span>perpus.ungu@amikom.ac.id</p>
                <!-- <i data-feather="map-pin" id="icon"></i> -->
                <p><span>Alamat</span>Kampus Terpadu : Jl. Ring Road Utara,
                    Condong Catur, Sleman, Yogyakarta</p>
            </div>
        </div>
    </footer>

    <footer class="f-bawah">
        <p>Copyright 2023 © National Library Of Indonesia</p>
    </footer>
@endsection
