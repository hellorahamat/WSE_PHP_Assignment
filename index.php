<?php
$quotes = [
    "আপনার দুর্বলতাকে শক্তিতে পরিণত করার ক্ষমতা একমাত্র আল্লাহ্ তা'আলা-ই রাখেন। তাই তাঁর কাছেই প্রার্থনা করুন। - [ড. বিলাল ফিলিপ্স]",
    "কথা বলা যদি রূপা হয় তবে নীরব থাকা হচ্ছে সোনা। - [লুকমান (আ:)]",
    "আল্লাহর কাছে আপনি প্রার্থনা করা বন্ধ করে দিলে তিনি রাগান্বিত হন। অথচ আদম সন্তানের কাছে কিছু প্রার্থনা করলে সে রেগে যায়। - [ইমাম ইবনুল কাইয়্যিম (রাহিমাহুল্লাহ)]",
    "যখন আপনি কুরআন তিলাওয়াত করেন তখন মনে করবেন আপনি আল্লাহর সাথে কথোপকথন করছেন এবং তিনি সরাসরি আপনাকে বলছেন। - [ইমাম ইবনুল কায়্যিম (রহ)]",
    "দ্বীন ও দুনিয়া একসাথে অর্জন করতে কুরআন ও সুন্নাহ্ ব্যতীত অন্য কোন পথ নেই। যদিও মনে হবে দুনিয়া অপূর্ণই থেকে যাচ্ছে।  - [ড. বিলাল ফিলিপ্স]",
    "আমাদের জীবনে করা বড় ভুল কখনও কখনও আমাদেরকে পরিবর্তন করে দেয় সবচেয়ে ভালো মানুষে। - [শাইখ মুফতি ইসমাইল মেঙ্ক]",
    // Add more quotes here...
];

$randomIndex = array_rand($quotes);
$randomQuote = $quotes[$randomIndex];

// Extract the writer's name from the quote
$writer = explode(' - ', $randomQuote)[1];
$quote = explode(' - ', $randomQuote)[0];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Random Quotes</title>
    <style>
        body {
            background-color: gray;
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin-top: 50px;
            

            }
            
            .quote-container {
                text-align: center;
            }
            .container{
            
            background-color: white;
            border: 2px solid green;
            padding: 20px 20px;
            border-radius: 15px;
            width: 700px;
            display: flex;
            justify-content: center;
            /* align-items: center; */
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="quote-container">
            <blockquote class="blockquote">
                <p><strong><?php echo $quote; ?></strong></p>
                <footer class="blockquote-footer"><?php echo $writer; ?></footer>
            </blockquote>
            
        </div>
    </div>
</body>
</html>
