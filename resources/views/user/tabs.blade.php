<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Creating Dynamic Tabs in Bootstrap 4 via Data Attributes</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/css/css.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg btn-c">

        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/user-ongoing-order"><img src="/images/nav.png" class="nav-img" alt="">
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user-transcript-current"><img src="/images/nav2.png" class="nav-img"
                        alt=""> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user-payment"><img src="/images/nav4.png" class="nav-img" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user-raise"><img src="/images/nav6.png" class="nav-img" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user-raise"><img src="/images/nav6.png" class="nav-img" alt="">
                    </a>
                </li>
            </ul>
            <ul class="flex-r navbar-nav">
                <li class="nav-item">
                    <a class="nav-link white user-name" href="/user-profile">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout"><img src="/images/nav5.png" class="nav-img" alt=""></a>
                </li>
            </ul>
                
        </div>
      </nav>
    
    
    
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
            <h4 class="mt-2">Home tab content</h4>
            <p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
        </div>
        <div class="tab-pane fade" id="profile">
            <h4 class="mt-2">Profile tab content</h4>
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
        <div class="tab-pane fade" id="messages">
            <h4 class="mt-2">Messages tab content</h4>
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
        </div>
    </div>

</body>
</html>