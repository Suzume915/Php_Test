<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
require("./blogcontent.php");

$first = "React မှာ Reusable Component တွေဘယ်လိုဖန်တီးကြမလဲ?";
$second = "Fixed Value တွေအတွက်အသုံးပြုတဲ့ JavaScript Const Keyword";
$third = "Flutter ကိုအခမဲ့ လေ့လာကြရအောင်";
$fourth = "Polymorphism in OOP";
$five = "Developer Interview အတွက်ဘာတွေသိထားသင့်လဲ ? 👀";

$blog =[ 
    
       [ 
        "Title"=>$first,
        "image"=>"React.jpeg",
        "uploaded"=>"3 days ago",
        "content"=>$content_one,
        "reading duration"=>"2 minute read",
        "category"=>"Knowledge sharing",
        "Section"=>"Blogs & Tricks",
        "Page"=>"creativecodermm.com"
        ],
        [ 
        "Title"=>$second,
        "image"=>"Fixed_value.jpeg",
        "uploaded"=>"17 days ago",
        "content"=>$content_two,
        "reading duration"=>"2 minute read",
        "category"=>"Knowledge sharing",
        "Section"=>"Blogs & Tricks",
        "Page"=>"creativecodermm.com"
        ],
        [ 
        "Title"=>$third,
        "image"=>"Flutter.jpeg",
        "uploaded"=>"22 days ago",
        "content"=>$content_three,
        "reading duration"=>"2 minute read",
        "category"=>"Knowledge sharing",
        "Section"=>"Blogs & Tricks",
        "Page"=>"creativecodermm.com"
        ],
        [ 
        "Title"=>$fourth,
        "image"=>"Polymorphism.jpeg",
        "uploaded"=>"24 days ago",
        "content"=>$content_four,
        "reading duration"=>"2 minute read",
        "category"=>"Knowledge sharing",
        "Section"=>"Blogs & Tricks",
        "Page"=>"creativecodermm.com"
        ],
        [ 
            "Title"=>$five,
            "image"=>"DevInterview.jpeg",
            "uploaded"=>"25 days ago",
            "content"=>$content_five,
            "reading duration"=>"2 minute read",
            "category"=>"Knowledge sharing",
            "Section"=>"Blogs & Tricks",
            "Page"=>"creativecodermm.com"
            ]

    ];

    foreach($blog as $b) : ?>


        
        <ul>

        <h2><?=  $b["Title"] ?></h2>
        <pre>
        <li>Image_source - <?=$b["image"] ?></li>
        <li>Uploaded - <?= $b["uploaded"] ?></li>
        <li>Duration - <?= $b["reading duration"] ?></li>
        <li>Category - <?= $b["category"] ?></li>
        <li>Section - <?= $b["Section"] ?></li>
        <li>Page - <?= $b["Page"] ?></li></pre>
        <li>    <p><?= $b["content"] ?></p></li>
        <hr>
        
    <?php endforeach; ?>
        

        </ul>

?>
</body>
</html>