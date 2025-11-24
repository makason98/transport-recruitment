<?php

require_once __DIR__ . '/vendor/autoload.php';

$route = new \Klein\Klein();

$app_url_dash = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
$app_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";


$con = mysqli_connect("","","","");

// Check connection
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
global $assets, $foreign;
$assets = 'yes';
$foreign = "no";

// Using range behaviors via if/else
$route->onHttpError(function ($code, $router) {
    if ($code >= 400 && $code < 500) {
        $router->response()->body(
            'Oh no, a bad error happened that caused a '. $code
        );
    } elseif ($code >= 500 && $code <= 599) {
        error_log('uhhh, something bad happened');
    }
});

$route->with('/de', function () use ($route) {
    
    $route->respond('GET', '/form', function ($request, $response, $service) {
        $service->render('view/page/form_de.phtml');
        global $assets;
        $assets = 'no';
    });

    $route->respond('*', function ($request, $response, $service) { global $assets; if(!isset($_GET["headless"]) && $assets=="yes")$service->render('view/general/header_de.phtml'); });

    $route ->respond('GET', '/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $foreign = "yes";
        $service->render('view/page/home_de.phtml');
    });

    $route->respond('GET', '/contact?/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $foreign = "yes";
        $service->render('view/page/contact_de.phtml');
    });
    
    $route->respond('GET', '/about?/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $foreign = "yes";
        $service->render('view/page/about_de.phtml');
    });

    $route->respond('GET', '/jobs?/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $foreign = "yes";
        $service->render('view/page/jobs_de.phtml');
    });

    $route->respond('GET', '/thank-you?/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $foreign = "yes";
        $service->render('view/page/thank-you_de.phtml');
    });

    $route->respond('POST', '/thank-you?/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $foreign = "yes";
        $service->render('view/page/thank-you_de.phtml');
    });

    $route->respond('*', function ($request, $response, $service) { global $assets; if(!isset($_GET["headless"]) && $assets=="yes")$service->render('view/general/footer_de.phtml'); });

});


$route->with('/en', function () use ($route) {
    
    $route->respond('GET', '/form', function ($request, $response, $service) {
        $service->render('view/page/form_en.phtml');
        global $assets;
        $assets = 'no';
    });

    $route->respond('GET', '/thank-you?/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $assets = "no";
        $service->render('view/page/thank-you_en.phtml');
    });

    $route->respond('*', function ($request, $response, $service) { global $assets; if(!isset($_GET["headless"]) && $assets=="yes")$service->render('view/general/header_en.phtml'); });

    $route ->respond('GET', '/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $foreign = "yes";
        $service->render('view/page/home_en.phtml');
    });

    $route->respond('GET', '/job/[:id]?/?', function ($request, $response, $service) {
        global $assets, $foreign, $con;
        $foreign = "yes";
        $service->render('view/page/job_en.phtml', array('id'=>$request->id));
    });

    $route->respond('GET', '/contact?/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $foreign = "yes";
        $service->render('view/page/contact_en.phtml');
    });
    
    $route->respond('GET', '/about?/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $foreign = "yes";
        $service->render('view/page/about_en.phtml');
    });

    $route->respond('GET', '/jobs?/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $foreign = "yes";
        $service->render('view/page/jobs_en.phtml');
    });

    $route->respond('POST', '/thank-you?/?', function ($request, $response, $service) {
        global $assets, $foreign;
        $foreign = "yes";
        $service->render('view/page/thank-you_en.phtml');
    });

    $route->respond('*', function ($request, $response, $service) { global $assets; if(!isset($_GET["headless"]) && $assets=="yes")$service->render('view/general/footer_en.phtml'); });

});


$route->respond('GET', '/form', function ($request, $response, $service) {
    $service->render('view/page/form_ro.phtml');
    global $assets;
    $assets = 'no';
});

$route->respond('GET', '/admin', function ($request, $response, $service) {
    $service->render('view/admin/main.php');
    global $assets;
    $assets = 'no';
});

$route->respond('*', function ($request, $response, $service) { global $assets, $foreign; if(!isset($_GET["headless"]) && $assets=="yes" && $foreign=="no")$service->render('view/general/header.phtml'); });

$route->respond('GET', '/?', function ($request, $response, $service) {
    $service->render('view/page/home_ro.phtml');
});

$route->respond('GET', '/contact?/?', function ($request, $response, $service) {
    $service->render('view/page/contact_ro.phtml');
});

$route->respond('GET', '/about?/?', function ($request, $response, $service) {
    $service->render('view/page/about_ro.phtml');
});

$route->respond('GET', '/jobs?/?', function ($request, $response, $service) {
    $service->render('view/page/jobs_ro.phtml');
});

$route->respond('POST', '/apply?/?', function ($request, $response, $service) {
    $service->render('view/page/apply_ro.phtml');
});

$route->respond('GET', '/job/[:id]?/?', function ($request, $response, $service) {
    $service->render('view/page/job_ro.phtml', array('id'=>$request->id));
});

$route->respond('GET', '/thank-you?/?', function ($request, $response, $service) {
    $service->render('view/page/thank-you_ro.phtml');
});

$route->respond('POST', '/thank-you?/?', function ($request, $response, $service) {
    global $assets, $foreign;
    $foreign = "yes";
    $service->render('view/page/thank-you_ro.phtml');
    
});


$route->respond('*', function ($request, $response, $service) { global $assets, $foreign; if(!isset($_GET["headless"])  && $assets=="yes" && $foreign=="no")$service->render('view/general/footer.phtml'); });

$route->dispatch();



 ?>
