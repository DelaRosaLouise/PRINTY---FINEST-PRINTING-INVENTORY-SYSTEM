<?php

    $configs = include('config.php');
    echo json_encode($configs->app_info);

?>


<?php

return (object) array(
    'host' => 'localhost',
    'username' => 'admin',
    'pass' => 'admin',
    'database' => 'store',
    'app_info' => array(
        'appName'=>"PRINTY",
        'appURL'=> "http://localhost/PRINTY%20-%20FINEST%20PRINTING%20INVENTORY%20MANAGEMENT%20SYSTEM/"
    
?>
