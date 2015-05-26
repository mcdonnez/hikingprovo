<?php
	$xml = simplexml_load_file("../model/hike_database.xml") or die ("Error: Cannot create object");
?>

  <script>
$( document ).ready(function() {

var $tile1 = $("#tile1").liveTile({ repeatCount: 0, delay:0 });
$("#tile1").click(function(){
    $(this).liveTile('play');
});
});
function flip(tile) {
    if(tile.className.match(/(?:^|\s)slideTextUp(?!\S)/)) {
        tile.className = tile.className.replace( /(?:^|\s)slideTextUp(?!\S)/g , '' );
    } else {
        tile.className += " slideTextUp";
    }
}
</script>

<div id="secondpage" >
  <h1>Day Hikes</h1>
</div>
<div class="blackcontainer">
    <p class="bluemessage">Near Provo there are several canyons w seeing along with some other hikes.
    There are many canyons near Provo such as Provo Canyon, Rock Canyon, Slate Canyon and
    other hikes. Here I have collected all of the hikes I have found so far. There are a
    total of 27 hikes (and counting) listed on this page.</p>
</div>
<div id="accordion" class="hikecategory">
    <?php foreach ($xml->children() as $area) { ?>
    <h4 class="hikeheader" >
            <?php echo $area['name'] ?>
    </h4>
    <ul class="hikelist">
            <?php foreach ($area->hike as $hike) { ?>
                <li class="hike tile" id="tile<?php echo $hike['id'] ?>" >
                <div onclick="flip(<?php echo "tile" . $hike['id'] ?>)">
                    <p class="fronttile">
                        <span class="hiketitle"><?php echo $hike->name ?></span>
                        </br>
                        Difficulty: <?php echo $hike->difficulty ?>
                        </br>
                        Distance: <?php echo $hike->distance ?> Miles
                    </p>
                </div>
                <div onclick="flip(<?php echo "tile" . $hike['id'] ?>)">
                    <table class="backtile">
                        <tr class="hikedescription"><td >
                            <?php echo $hike->description ?>
                        </td></tr>
                        <tr><td class="coldirections">
                        <a class="directions" href="<?php echo $hike->location ?>">Directions</a>
                        </td></tr>
                    </table>
                </div>
                </li>
            <?php } ?>
    </ul>
    <?php } ?>
</div>