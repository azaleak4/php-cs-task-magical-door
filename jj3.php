<?php
// Define some colors to style the moodboard

$textColor = "#000000"; // Dark Gray
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
    <title>The Third Door</title>
    <style>
        body {
            background: url('city.png');
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
            gap: 40%;
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
            <h2 data-aos="fade-up">Symphony of Shadows</h2>
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
echo('<br/><br/><br/><br/><br/><br/><br/>In the heart of the city of Cadence, where cobblestone streets twisted like the grooves of a record, a forgotten concert hall stood shrouded in ivy and shadow. They called it the House of Echoes, a place once alive with music so moving it could make even the stars weep. Now, it lay in ruins, its grandeur faded but not forgotten.

Aurelia Knox, a composer of middling renown, stood at its gates. She had spent her life chasing the elusive muse, her melodies praised as “promising” but never reaching greatness. The rumors of the House of Echoes haunted her dreams: music written in its halls could shape reality. It was said the last conductor had vanished mid-performance, leaving only a symphony half-written and a city forever changed.

Driven by equal parts desperation and curiosity, Aurelia pushed the gates open. The air inside was thick with dust and silence. As she stepped into the cavernous space, her breath caught. Despite its decay, the hall’s acoustics were perfect. A whisper carried like a symphony.

At the center of the stage lay a conductor’s baton, polished and pristine despite the years. Aurelia felt an irresistible pull and, against her better judgment, reached for it. As her fingers closed around the wood, the silence shattered. A single, haunting note resonated through the hall, and the shadows around her began to move. <br/><br/> The shadows coalesced into figures, each translucent yet vividly detailed, as if drawn from memory. They were musicians, their spectral forms gripping instruments long forgotten. A violinist tuned her strings, a percussionist adjusted his timpani, and the ethereal conductor raised a hand to Aurelia.

“Finish it,” the ghostly figure whispered, its voice layered with countless others. “The symphony must be completed.”

Aurelia trembled but nodded. She took her place at the conductor’s stand, baton in hand. Before her, the spectral orchestra waited, poised to play. Sheets of music materialized on the stand, the notes shifting like living things. They were unfinished, chaotic—a puzzle of sound and silence.

As she raised the baton, the first note emerged, a mournful melody that resonated deep in her chest. The orchestra followed, their playing both flawless and otherworldly. But the further they played, the more the world outside began to shift. Cobblestones realigned, buildings grew taller or crumbled into dust, and the moon overhead split into fragments.

“What is happening?” Aurelia cried.

The ghostly conductor stepped closer, its face obscured by shadow. “This symphony shapes reality. Each note is a thread in the fabric of existence. Your composition will decide what remains and what is lost.”

Aurelia’s heart raced. This was not just music; it was creation and destruction. The power to reshape the world lay in her hands, but every choice came with a cost. <br/><br/>');

 echo"<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";

?>
       
    </body>
</html>


<script>
AOS.init();
</script>