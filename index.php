<?php 
require './vendor/autoload.php';

use App\DesignPatterns\Decorator\Car\Car;
use App\DesignPatterns\Decorator\Car\Feature1;
use App\DesignPatterns\Decorator\Car\Feature2;
use App\DesignPatterns\Decorator\Car\Feature3;
use App\DesignPatterns\Decorator\Message\Email;
use App\DesignPatterns\Decorator\Message\Message;
use App\DesignPatterns\Decorator\Message\Sms;
use App\DesignPatterns\Facade\UserFacade;
use App\DesignPatterns\Observer\Observer1;
use App\DesignPatterns\Observer\Observer2;
use App\DesignPatterns\Observer\Subject;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="padding: 20px;">
    <?php
        

        // *********************** Observer Design Pattern
        echo "<h2>Observer Design Pattern</h2>";
        $subject = new Subject();
        $subject->attach(new Observer1());
        $subject->attach(new Observer2());
        $subject->notify();

        echo '<br>';


        // *********************** Decorator Design Pattern  -  1
        echo "<h2>Decorator Design Pattern  -  Example 1</h2>";
        $messgae = new Message();
        $messgae = new Email($messgae);
        $messgae = new Sms($messgae);
        $message = $messgae->sendMessage();
        echo $message;


        // *********************** Decorator Design Pattern  -  2
        echo "<h2>Decorator Design Pattern  -  Example 2</h2>";
        $car = new Car();
        $car = new Feature2($car);
        $car = new Feature3($car);
        echo '<h4>Car Options :</h4>';
        echo '<ul>';
        foreach( $car->getOptions() as $option )
        {
            echo '<li>' . $option . '</li>';
        }
        echo '</ul>';
        

        // *********************** Facade Design Pattern
        echo "<h2>Facade Design Pattern</h2>";
        $user = new UserFacade();
        $user->create( 'Sedighe' , 's.rahimi@gmail.com' , '123456');
        var_dump($user->get());
        echo '<br>';

        $newUserData = [
            'email'     => 'ss.rahimi8667@gmail.com',
            'password'  => '987654'
        ];
        $user->update($newUserData);
        var_dump($user->get());



    ?>

</body>
</html>