
<?php 
$fName = "Jan Frederik";
$mName = "Coching";
$lName = "Santos";
$address = "Pembo, Makati City";
$age = 21 ;
$food = "Doesn't Matter what food as long as it is Delicious";
$color = "black";
$religion = "Catholic";
$year = "4th year";
$school = "University of Makati";
$course = "BSIT - Information and Network Security";
$hobbies = "Watching Anime, Playing Video Games, Video Editing";


echo  "Name: " . $fName . " " . substr($mName, 0, -6) . ". " . $lName . "\n";
echo "Age: " . $age . "\n";
echo "Address: " . $address . "\n";
echo "Favorite Color: " . $color . "\t Favorite Food: " . $food . "\n";
echo "Religion: " . $religion . "\n";
echo "School: " . $school . "\n";
echo "Course: " . $course . "\t Year: " . $year . "\n";
echo "Hobbies: " . $hobbies;

echo "\n Test Output >w< \n";
$b = 5;
$d = 1;
for($a = 0;$a < 5; $a++){

    for($c = 0; $c < $b; $c++){
        echo " ";
    }

    for($e = 0; $e < $d; $e++){
        echo "*";
    }
    echo "\n";
    $b--;
    $d += 2;
}

?>



