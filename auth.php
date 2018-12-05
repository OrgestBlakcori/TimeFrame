<?php

// echo '$_GET<br>';
// var_dump($_GET); 
// echo "<br>";


// if(isset($_GET["name"])){
//     echo "Emri: {$_GET['name']}";
// }
// else{
//     echo "Variabla emri mungon";
// }
// echo '$_POST<br>';
// var_dump($_POST); 


//ding
echo VerifyUser($_POST["email"],$_POST["password"]);

function VerifyUser($email,$password){

    $users = array(
        array(
        
            "email" => "enistocilla@gmail.com",
            "password" => "qwerty"
        ),
        array(
        
            "email" => "drenimeraj@gmail.com",
            "password" => "123456"
        ),

    );


    $users[] = array(
        
        "email" => "gzimbegolli@gmail.com",
        "password" => "123456"
    );
    // $auth = false;
    // for($i=0;$i<count($users);$i++){
    //     if($email == $users[$i]["email"] && $users[$i]["password"]){
    //         echo "Welcome " . $users[$i]["email"];
    //         $auth = true;
    //         break;
    //     }


    // }
    // if(!$auth){
    //     echo "Wrong username/password";
    // }

    // var_dump($users);


    if(in_array(array(
        
        "email" => $email,
        "password" => $password
    ),$users)){
        echo "Welcome";
    }
    else{
        echo "Wrong username/password";
    }


}

class Person{
    public $name;
}

$person = new Person;
$person->name;

?>
