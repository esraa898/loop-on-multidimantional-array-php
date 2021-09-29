<?php

$users = [
      [
         "name" => ["first"=>"mohamed","last"=>"amr"],
         "skills" => [
            "soft" => ["reading"],
            "tech" => ["php","oop"]
            ]
      ],
      [
         "name" => ["first"=>"ahmed","last"=>"amr"],
         "skills" => [
            "soft" => ["reading"],
            "tech" => ["php","oop"]
            ]
      ],
      [
         "name" => ["first"=>"ibrahim","last"=>"amr"],
         "skills" => [
            "soft" => ["reading"],
            "tech" => ["php","oop"]
            ]
      ],
    ];


    
    
  function get_skill ($x){
foreach ($x as $user){
     
  foreach($user as $k=>  $new_user){



  if ($k=="skills") {
    # code...
    foreach($new_user as $k2 =>$skills){
      echo  $k2.": ";

     foreach($skills as $skill){ 
       echo $skill;
         if($skill == end($skills))
         {
            echo ".";
         }
         else{

         echo ","." ";
         }
     

     }
     echo "<br>";


    }
  }


  }
echo "<hr>";


}

}
 get_skill($users);





