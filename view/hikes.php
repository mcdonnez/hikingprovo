<?php
	$xml = simplexml_load_file("../model/hike_database.xml") or die ("Error: Cannot create object");
?>
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
    <h4 class="hikeheader">
            <?php echo $area['name'] ?>
    </h4>
    <ul class="hikelist">
        <li>
            <?php foreach ($area->hike as $hike) { ?>
                <table class="hike">
                    <tr>
                        <th colspan="2" class="hiketitle">
                        <?php echo $hike->name ?>
                        </th>
                    </tr>
                    <tr>
                        <td>Difficulty:</br> 
                        <?php echo $hike->difficulty ?>
                        </td>
                        <td>Distance:</br>
                        <?php echo $hike->distance ?> Miles
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="hikedescription">
                        <?php echo $hike->description ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="coldirections"><a class="directions" href="<?php echo $hike->location ?>">Directions</a></td>
                    </tr>
                </table>
            <?php } ?>
        </li>
        </ul>
    <?php } ?>
</div>