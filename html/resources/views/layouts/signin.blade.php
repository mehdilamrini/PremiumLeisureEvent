<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Premium Leisure & Events | Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>

   <!--  <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/loader-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/signin.css')}}">






    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('assets/ico/minus.png')}}">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <div class="container">

    	@yield('content')


        <div style="text-align:center;margin:0 auto;">
            <h6 style="color:#fff;">© Premium Leisure & Events 2018</h6>
        </div>

    </div>
    <div id="test1" class="gmap3"></div>



    <!--  END OF PAPER WRAP -->




    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="{{asset('assets/js/preloader.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/load.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCK3BwwUxXhL3dwKLtVNcvceeiWovsU_ac" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('assets/js/map/gmap3.js')}}"></script>
    <script type="text/javascript">
    $(function() {

        $("#test1").gmap3({
            marker: {
                latLng: [38.418196, -90.352026],
                options: {
                    draggable: true
                },
                events: {
                    dragend: function(marker) {
                        $(this).gmap3({
                            getaddress: {
                                latLng: marker.getPosition(),
                                callback: function(results) {
                                    var map = $(this).gmap3("get"),
                                        infowindow = $(this).gmap3({
                                            get: "infowindow"
                                        }),
                                        content = results && results[1] ? results && results[1].formatted_address : "no address";
                                    if (infowindow) {
                                        infowindow.open(map, marker);
                                        infowindow.setContent(content);
                                    } else {
                                        $(this).gmap3({
                                            infowindow: {
                                                anchor: marker,
                                                options: {
                                                    content: content
                                                }
                                            }
                                        });
                                    }
                                }
                            }
                        });
                    }
                }
            },
            map: {
                options: {
                    zoom: 15
                }
            }
        });

    });
    </script>




</body>

</html>