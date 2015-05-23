<?
	$xml = simplexml_load_file("../model/hike_database.xml") or die ("Error: Cannot create object");
?>
<div id="secondpage" >
  <h1>Day Hikes</h1>
</div>
  <div class="blackcontainer">
    <p class="bluemessage">Near Provo there are several canyons worth seeing along with some other hikes.
    There are many canyons near Provo such as Provo Canyon, Rock Canyon, Slate Canyon and
    other hikes. Here I have collected all of the hikes I have found so far. There are a
    total of 27 hikes (and counting) listed on this page.</p>
  </div>
<div>
<ul class="hikecategory">
    <? foreach ($xml->children() as $area) { ?>
    <li><h4 class="hikeheader">
            <? echo $area['name'] ?>
        </h4>
        <ul class="hikelist">
            <li>
                <? foreach ($area->hike as $hike) { ?>
    <table class="hike">
            <tr>
        <th colspan="2" class="hiketitle">
            <? echo $hike->name ?>
        </th>
            </tr>
            <tr>
        <td>Difficulty:</br> 
            <? echo $hike->difficulty ?>
        </td>
        <td>Distance:</br>
            <? echo $hike->distance ?> Miles
        </td>
            </tr>
            <tr>
        <td colspan="2" class="hikedescription">
            <? echo $hike->description ?>
        </td>
            </tr>
            <tr>
        <td colspan="2" class="coldirections"><a class="directions" href="<? echo $hike->location ?>">Directions</a></td>
            </tr>
                </table>
                <? } ?>
            </li>
        </ul>
    </li>
    <? } ?>
</ul>
</div>