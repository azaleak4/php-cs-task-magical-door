<?php
// Define some colors to style the moodboard
$textColor = "#465454"; // Dark Gray
$highlightColor = "rgba(0, 0, 0, 0.3)"; // Orange Red
$startColor = "#ebe7bc"; // Coral color
 $middleColor = "#bcd5eb";
$endColor = "#bcebc2"; // Indigo color

$navBackgroundColor = "#333";
$linkColor = "#ffffff";
$linkHoverColor = "#ff5733";

$navItems = [
    "Home" => "index.php",
    "About" => "about.php",
    "Contact" => "contact.php"
];

header("Content-Type: text/html");
#f1d793
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The First Door</title>
    <style>
        body {
            background: url('elf.png');
            background-size: cover;
            color: <?php echo $textColor; ?>;
            font-family: Lucida;
            font-size: 150%;
            padding: 10px 20px;

        }
        .container {
            padding: 20px;
            max-width: 800px;
         
        }
        .story {
            background-color: <?php echo $highlightColor; ?>;
            padding: 10px 20px;
            color: white;
            margin: -20px ;
            margin left: -20px;
            width: 101.4%;
            position: relative;
            position: fixed;
            left: 0px; 
            display: flex;
            gap: 30%;
            font-family:Lucida handwriting, serif;
            border-radius : bottom right 25px;
            box-shadow: 0 10px 12px rgba(100, 130, 155, 0.2);
      
        }
        .moodboard {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .moodboard img {
            width: 100%;
            max-width: 180px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: <?php echo $highlightColor; ?>;
        }

        .navbar {
            display: flex;
            gap: 14%;
            position: relative;
            top: 35px;
        }
        .navbar a {
            color: <?php echo $linkColor; ?>;
            text-decoration: none;
            font-size: 125%;
            font-family:Lucida handwriting, serif;

        }

        head{
        
        }
    </style>
     <div class="story">
            <h4 data-aos="fade-up">Eryndra: The start of a memorable journey</h4>
            <div class="navbar" data-aos="fade-up">
            <?php

$navItems = [
    "Home" => "Doors of Stories.html",
];
        // Loop through navigation items and create links
        foreach ($navItems as $name => $link) {
            echo "<a href='$link'>$name</a>";
        }
        ?>

    </div>
        </div>
</head>

<body>
<?php
echo('<br/><br/><br/><br/><br/><br/><br/>The sun filtered through the ancient canopy of the Whispering Glade, casting a golden glow on the mossy ground below. Eryndra, an elf of ageless beauty and wisdom, walked in silence, her silver hair catching the light like spun moonlight. She had seen centuries pass like fleeting moments, and her heart bore the weight of countless memories, both cherished and sorrowful. <br/><br/>

In her hand, she held a staff of twisted oak, its tip glowing faintly with an emerald light. Eryndra had heard whispers—literal whispers—emanating from the glade. They spoke of a place beyond the veil of life and death, a realm where the spirits of the departed lingered. The thought of reuniting with her long-lost human companions filled her with a bittersweet longing.<br/><br/>

At her side walked Lyran, a young human warrior who had pledged to accompany her on this journey. His steadfast loyalty and mortal perspective offered her a glimpse of the fleeting beauty of humanity.<br/><br/>

“Are you sure this is the way?” Lyran asked, his eyes scanning the shadowed forest. <br/><br/>

“The glade speaks to those who listen,” Eryndra replied, her voice melodic and calm. “It leads us to a choice.” <br/><br/>

Ahead, the path split in two. To the left, a dark tunnel of ancient trees beckoned with an eerie glow. To the right, a sunlit meadow stretched endlessly, dotted with vibrant wildflowers. The glade’s whispers grew louder, urging them to decide. Each path promised a different journey—and a different meaning. <br/><br/>

“Two paths,” Lyran murmured. “Which will lead you to the ones you seek?” <br/><br/>

Eryndra closed her eyes, her mind racing. The choice would determine not only her fate but also the nature of the reunion she so desperately sought. With a deep breath, she prepared to choose. <br/><br/> Eryndra’s gaze lingered on the sunlit meadow. “We take the right path. Light often holds the answers we seek.”

The meadow embraced them with warmth, its gentle breeze carrying the scent of blossoms. As they walked, the surroundings began to shimmer. Suddenly, the scene shifted, and Eryndra found herself in a village reminiscent of her happiest days with her human companions.

Laughter echoed around her. There they were—her friends, not as spirits but as they had been in life, vibrant and whole. Time seemed to stretch, allowing her to join them in an idyllic reunion. They shared stories, laughter, and even a song beneath the setting sun.

“How is this possible?” Lyran asked, marveling at the surreal beauty of the moment.

“It is a gift,” Eryndra said softly, tears glistening in her eyes. “A chance to say goodbye, one last time.”

As the day turned to night, the village began to fade. Her friends, one by one, bid her farewell with words of love and gratitude.

When the meadow returned to its tranquil state, Eryndra stood silent for a moment, her heart both heavy and light.

“They’re gone,” Lyran said.

“No,” Eryndra replied. “They live on, in me.”

With that, she turned to the horizon, her steps firm and her purpose clear. The journey continued, but she carried with her the enduring love of her companions, and the certainty that her path forward was illuminated by their memories. <br/><br/>');

 echo"<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";

?>
       
    </body>

<script>
    AOS.init();
    </script>

</html>


