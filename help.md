PHP


Coments
# or // for single line

Variables
$name = ‘Danilo’ // can be relaced
$age = 38

Constants
define(‘FULLNAME’, ‘Danilo Heraclio’) // can not be reassigned

<?php 

  echo $name; 

?>

Concatenation

// Using . and single quotes
<?php 

  echo ‘Hey, my name is ’ . $name;

?>

// Better using double quotes

<?php 

  echo “Hello my name is $name” 

?>

Out of the box functions
strlen($name);
strtoupper($name);
strtolower($name);
str_replace(‘a’, ‘e’, $name);

// indexed arrays

$peopleOne = [‘Danilo’, ‘ALana’, ‘Luana’];

$peopleTwo = array(‘Ruffus’, ’Sky’);

TIP: we can not use echo to see an array, only strings and numbers

To see a readable array at the screen we can use print_r($peopleOne);

$ages = [10, 30, 40];

$ages[0] = 20;

$ages[] = 50;

arrays_push($ages, 60);

echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);

// associative arrays (key & values pairs)

$ninjasOne = [‘shaun’ => ‘black’, ‘Mario’ => ‘orange’, ‘luigi’ => ‘brown’];
echo $ninjasOne[‘mario’];

$ninjasTwo = array(‘bowser’ => ‘green’, ‘peach’ => ‘yellow’);

$ninjasTwo[‘toad’] = ‘pink’

echo count($ninjasTwo);

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);


// Multi-dimensional arrays

$blogs = [
    [‘title’ => ‘Mario party’, ‘author’ => ‘mario’, ‘content’ => ‘lorem’, ‘likes’ => ‘30’],
    [‘title’ => ‘Mario kart cheats’, ‘author’ => ‘Toad’, ‘content’ => ‘lorem’, ‘likes’ => ‘25’],
    [‘title’ => ‘Zelda hidden chests’, ‘author’ => ‘link’, ‘content’ => ‘lorem’, ‘likes’ => ‘50’],
];

print_r($blogs[2][author]); // link

// add at the end
$blogs[] = [‘title’ => ‘Castle party’, ‘author’ => ‘peach’, ‘content’ => ‘lorem’, ‘likes’ => ‘100’];

// remove and store in a variable
$popped = array_pop($blogs);


// Loops
// For loops
$ninjas = [’shaun’, ‘ryu’, ‘Yoshi’];

for($i = 0; $i < count($ninjas); $i++){
    echo $ninjas[$i] . ‘<br />’;
}

// Foreach loops
foreach($ninjas as $ninja){
    echo $ninja . ‘<br />’;
}
