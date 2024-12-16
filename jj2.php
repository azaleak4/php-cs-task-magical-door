<?php
// Define some colors to style the moodboard

$textColor = "#c5d9ebb3"; // Dark Gray
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
    <title>The Second Door</title>
    <style>
        body {
            background: url('damsel.png');
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
            gap: 28%;
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
            <h2 data-aos="fade-up">The Avenging Damsel</h2>
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
echo('<br/><br/><br/><br/><br/><br/><br/> The battlefield lay silent, the air heavy with smoke and the scent of blood. Arinella, the betrayed queen of the kingdom of Elaris, knelt in the mud, her once-radiant armor dulled and battered. A blade protruded from her chest, the weapon of a traitor—her closest ally, Duke Kael of the rival kingdom of Dravenmoor. The betrayal cut deeper than the wound, and as the world dimmed around her, her last thought was a vow whispered through trembling lips.

“This is not the end.”

As her vision faded, the world seemed to ripple, bending like water disturbed by a pebble. Darkness enveloped her, and for what felt like an eternity, there was nothing. Then, a voice called her name, soft yet commanding, and light burst forth.

Arinella awoke, gasping, in a grand hall she recognized instantly: the royal throne room of Elaris. Sunlight poured through the stained-glass windows, casting vibrant hues across the marble floor. Her heart raced as she realized where—and when—she was. This was her coronation day, years before her betrayal.

“Your Majesty?” a voice called. It was Eddric, her loyal steward, alive and well. His expression was one of gentle concern. “Are you all right? The ceremony begins soon.”

Arinella’s mind spun. The gods had granted her a second chance, a chance to rewrite her fate. But this time, she would not be the naive queen who trusted blindly. This time, she would ensure Dravenmoor paid for their treachery.
  <br/><br/> Arinella’s first months as queen were marked by quiet, calculated moves. She strengthened alliances, forging secret pacts with kingdoms long overlooked by Elaris. She sought out the disenfranchised, offering them a voice and a place in her army. Beneath the surface of royal pageantry, she built a network of spies and informants, their eyes fixed on Dravenmoor.

At night, she pored over maps and documents, uncovering the schemes that would one day lead to her downfall. Her memories of the future were vivid, and with each passing day, she unraveled the threads of Duke Kael’s plot.

One evening, her trusted steward, Eddric, entered her chambers. “Your Majesty, word from the eastern border. Dravenmoor troops are amassing.”

Arinella nodded, her expression steely. “Let them. They will find we are not the kingdom they once knew.”

The time for preparation was nearing its end. As the shadow of war loomed, Arinella revealed her plans to her closest allies. Her council, once filled with sycophants and traitors, now consisted of those who shared her vision for a stronger, united Elaris.

“We will not wait for their blade to strike again,” she declared, standing before her war council. “We will take the fight to Dravenmoor. They think us weak, but we will show them the strength of a queen who does not forgive betrayal.”<br/><br/>');

 echo"<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";

?>
       
    </body>
</html>

<script>
AOS.init();
</script>
