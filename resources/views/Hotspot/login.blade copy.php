<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="-1" />
    <title>NetMtaani Hotspot Login | Laravel</title>
    <link href="{{ asset('assets/hotspot/css/bootstrap.min.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="{{ asset('assets/hotspot/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/hotspot/style.css') }}">
    <script data-ad-client="ca-pub-4299607748553845" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body>

    <div class="modal fade" id="admodal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        tabindex="-1">
        <div class="modal-dialog modal-fullscreen modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="progress" id="adtimediv" style="height: 20px;">
                    <div class="progress-bar bg-success" id="adtime" role="progressbar" style="width: 1%"
                        aria-valuenow="5" aria-valuemin="0" aria-valuemax="10"></div>
                </div>
                <div class="mt-0 pt-0">
                    <button id="btnad" type="button" class="btn btn-success hidden" data-bs-dismiss="modal"
                        onclick=countDown2()>Close Ad</button>
                </div>
                <div class="modal-body">
                    <!-- <div class="container-fluid"> -->
                    <div class="row">
                        <div id="adCarousel1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="adauto">
                                <div class="carousel-item active">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div id="adCarousel2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>

                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>

                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>

                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>

                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>

                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>

                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>

                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>

                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>

                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                                <div class="carousel-item">
                                    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
                                    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                                                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                                                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                                                alt="ylliX - Online Advertising Network" /></a></noscript>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="redtop pb-5" id="top"><img src="{{ asset('assets/hotspot/img/netmtaani2.jpeg') }}"
            width="100%" alt="">

    </div>
    <div id="login">
        <!-- <h3 class="text-center text-white pt-5">Login form</h3> -->
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <!-- if chap-id login form  -->
                        @if (session('hostpotInfo.chapid'))
                            <form name="sendin" action="{{ session('hostpotInfo.linkloginonly') }}" method="post">
                                <input type="hidden" name="username" />
                                <input type="hidden" name="password" />
                                <input type="hidden" name="dst" value="{{ session('hostpotInfo.linkorig') }}" />
                                <input type="hidden" name="popup" value="true" />
                            </form>

                            <script type="text/javascript" src="./md5.js"></script>
                            {{-- <script type="text/javascript">
                            function doLogin() {
                                @if (strlen(session('hostpotInfo.chapid')) < 1)
                                    {{return true}}
                                document.sendin.username.value = document.login.username.value;
                                document.sendin.password.value = hexMD5({{session('hostpotInfo.chapid')}} + document.login.password.value +
                                    '{{session('hostpotInfo.chapchallenge')}}');
                                document.sendin.submit();
                                return false;
                            }
                        </script> --}}
                        @endif

                        <!-- login form to dispaly -->
                        <form name="login" action="{{ session('hostpotInfo.linkloginonly') }}" method="post"
                            onSubmit="return doLogin()">
                            <h3 class="text-center text-info">Login to use NetMtaani service
                                {{ session('hostpotInfo.mac') }}</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control"
                                    value="{{ session('hostpotInfo.username') }}">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div><br>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            @if (session('hostpotInfo.error'))
                                <br />
                                <div style="color: #FF8080; font-size: 9px">{{ session('hostpotInfo.error') }}</div>
                            @endif
                        </form>
                        @if (session('hostpotInfo.trial') == 'yes')
                        @endif
                        <h1 class="free-trial">Free trial available,
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a class="btn btn-success btn-lg hidden" type="button" id="btntrial"
                                    href="page2.php?link={{ session('hostpotInfo.linkloginonly') }}&dst={{ session('hostpotInfo.linkorigesc') }}&username=T-{{ session('hostpotInfo.macesc') }}">click
                                    here</a>
                            </div>
                            </h5>

                    </div>
                </div>
                <div id="bottom"></div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/hotspot/script.js') }}"></script>
    <script src="{{ asset('assets/hotspot/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/hotspot/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/hotspot/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        adModal = 0;

        function showad() {
            if (adModal == 0) {
                setTimeout(function() {
                    $('#adauto').find('.carousel-item').first().addClass('active');
                    $('#admodal').modal('show');
                    $('#btntrial').removeClass('hidden');
                }, 5000);

                $("#buttonSuccess").click(function(e) {
                    e.preventDefault();
                    var url = $(this).attr("href");
                    var win = window.open(url, '_blank');
                    $('#admodal').modal('hide');
                })
                adModal = 1;
            }
        }
        var myCarousel = document.getElementById('adCarousel1')

        myCarousel.addEventListener('slide.bs.carousel', function() {
            countDown();
            $('.carousel-item').attr('data-bs-interval', 1200);
        })

        // var adcar=document.getElementById('adauto')
        // for (let index = 0; index < 30; index++) {
        //     adcar.innerHTML += `<div class="carousel-item">\
    //                                         <img src="https://evoton.co.ke/static/public/img/feature/sd.jpg" class="d-block w-100" alt="...">\
    //                                     </div>`
        // }
        showad();
    </script>

    <!--yllix ads tags-->
    <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=253847&format=300x250&ga=g"></script>
    <noscript><a href="https://yllix.com/publishers/253847" target="_blank"><img
                src="//ylx-aff.advertica-cdn.com/pub/300x250.png"
                style="border:none;margin:0;padding:0;vertical-align:baseline;"
                alt="ylliX - Online Advertising Network" /></a></noscript>

    <script type="text/javascript" src="https://goraps.com/pun.php?section=General&pt=6&pub=253847&ga=g"></script>

    <script type="text/javascript" src="https://uprimp.com/slider.php?section=General&pub=253847&ga=g&side=right"></script>
    <!-- info links ads-->
    <script type="text/javascript">
        var infolinks_pid = 3330135;
        var infolinks_wsid = 0;
    </script>
    <script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>


</body>

</html>
