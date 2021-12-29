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
use App\DesignPatterns\Factory\BookFactory;
use App\DesignPatterns\Observer\Observer1;
use App\DesignPatterns\Observer\Observer2;
use App\DesignPatterns\Observer\Subject;
use App\DesignPatterns\Proxy\UserProxy;
use App\DesignPatterns\Template\Email as TemplateEmail;
use App\DesignPatterns\Template\Sms as TemplateSms;

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
        echo '<div style="padding:0 2rem">';
        $subject->notify();

        echo '</div>';


        // *********************** Decorator Design Pattern  -  1
        echo "<h2>Decorator Design Pattern  -  Example 1</h2>";
        $messgae = new Message();
        $messgae = new Email($messgae);
        $messgae = new Sms($messgae);
        $message = $messgae->sendMessage();
        echo '<div style="padding:0 2rem">';
        echo $message;
        echo '</div>';


        // *********************** Decorator Design Pattern  -  2
        echo "<h2>Decorator Design Pattern  -  Example 2</h2>";
        $car = new Car();
        $car = new Feature2($car);
        $car = new Feature3($car);
        echo '<div style="padding:0 2rem">';
        echo '<h4>Car Options :</h4>';
        echo '<ul>';
        foreach( $car->getOptions() as $option )
        {
            echo '<li>' . $option . '</li>';
        }
        echo '</ul>';
        echo '</div>';
        

        // *********************** Facade Design Pattern
        echo "<h2>Facade Design Pattern</h2>";
        $user = new UserFacade();
        $user->create( 'Sedighe' , 's.rahimi@gmail.com' , '123456');
        echo '<div style="padding:0 2rem">';
        var_dump($user->get());
        echo '<br>';

        $newUserData = [
            'email'     => 'ss.rahimi8667@gmail.com',
            'password'  => '987654'
        ];
        $user->update($newUserData);
        var_dump($user->get());
        echo '</div>';


        // *********************** Proxy Design Pattern
        echo "<h2>Proxy Design Pattern</h2>";
        $userInfo = new UserProxy();
        $userInfo = $userInfo->get(2);
        
        echo '<div style="padding:0 2rem">';
        echo '<h4>User Info :</h4>';
        echo '<ul>';
        foreach( $userInfo as $key => $info )
        {
            echo '<li>' . $key . ' : ' . $info . '</li>';
        }
        echo '</ul>';
        echo '</div>';
        

        // *********************** Template Design Pattern
        echo "<h2>Template Design Pattern</h2>";
        $emailMessgaeTemp = new TemplateEmail( 's.user@gmail.com' , 'Maryam' , 'Welcome' , 'Welcome Email body' );

        $smsMessgaeTemp = new TemplateSms( '09121234567' , 'Maryam' , 'Welcome' , 'Welcome SMS body' );
        
        echo '<div style="padding:0 2rem">';
        echo '<h4>Email messgae :</h4>';
        echo $emailMessgaeTemp->getMessgae();
        echo '<h4>SMS messgae :</h4>';
        echo $smsMessgaeTemp->getMessgae();
        echo '</div>';


        
        // *********************** Factory Design Pattern
        echo "<h2>Factory Design Pattern</h2>";
        $book = new BookFactory();

        $poetBook = $book->newBook( 'poet' )
                            ->setName('بوستان سعدی')
                            ->setPoet('سعدی')
                            ->setIsbn('11111111111111111');

        $novelBook = $book->newBook( 'novel' )
                            ->setName('جنایت و مکافات')
                            ->setAuthor('فئودور داستایفسکی')
                            ->setIsbn('2222222222222222');

        echo $poetBook->type . '<br>' .
             $poetBook->getInfo() . '<br>';
        echo $novelBook->type . '<br>' .
             $novelBook->getInfo();


    ?>

</body>
</html>