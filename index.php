<?php
    // echo "Hello world";
    // echo '</br>';

    // // define('PI', 3.1416); // Defining Constant
    // // echo PI
    // $number1 = 100;
    // $number2 = 20;
    // echo $number1 + $number2;


    // // Basic Operators
    // echo '</br>';
    // $name = "SHOHAN";
    // $name .= " KAZI";
    // echo $name;
    // echo '</br>';
    // var_dump(10>5);

    // ----- IF ELSE CONDITION -----
    
    // $day = 'Sunday';
    // if ($day === 'Friday' || $day === 'Sunday') {
    //     echo "We can go on a tour today";
    // } else {
    //     echo "You can't go anywhere";
    // }
    
    // ------ ARRAY DATA TYPE ------
    
    // $array = ['Shohan','Kazi',34,35,36];
    // echo $array[3];

    // ------ Associative Array -------
    // $array = [
    //     'first_name'=>'Shohan',
    //     'last_name'=>'Kazi',
    //     'age'=>21,
    //     'mobile_number'=>'01829-705957',
    //     'email'=>'Shohankazi012@gmail.com'];

    //     echo $array['first_name'];

    // ------- Multi Dimensional Array --------
    $array = [
        'first_name' => 'Shohan',
        'last_name' => 'Kazi',
        'age' => 21,
        'date_of_birth' => '06-03-2002',
        'Permanent Address' => [
            'care_of'=> 'Kazi bari',
            'Village' => 'Mobarakdi',
            'Post_office' => 'Boroddia',
            'Post_code' => 4001,
            'Police_Station' => 'Motolob',
            'District' => 'Chandpur',
            
        ],
        'Present Address' => [
            'care_of' => 'Soudia Building',
            'Street_name' => 'Tella Pukur Par',
            'Ward_No' => 38,
            'District' => 'Chattogram'
        ]
        ];
print_r($array);
    // echo $array['Present_address'['care_of']];
?>