<?php
require_once ("../view/functions/connect.php");

$sql = "SELECT * FROM hike INNER JOIN area ON hike.areaid=area.areaid ORDER BY hike.areaid;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $area = " ";
    $tmpcount = 1;
?>

  <script>
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
    <?php while($row = $result->fetch_assoc()) : ?>
    <?php if (strcmp($row["areaname"],$area) != 0 && $tmpcount != 1) : ?>
    </ul>
    <?php endif ?>
    <?php if (strcmp($row["areaname"],$area) != 0) : ?>
    <h4 class="hikeheader" >
            <?php echo $row["areaname"] ?>
    </h4>
    <ul class="hikelist">
    <?php $tmpcount++; endif ?>
        <li class="hike tile" id="tile<?php echo $row['id'] ?>" >
                <div onclick="flip(<?php echo "tile" . $row['id'] ?>)">
                    <p class="fronttile">
                        <span class="hiketitle"><?php echo $row["name"] ?></span>
                        </br>
                        Difficulty: <?php echo $row["difficulty"] ?>
                        </br>
                        Distance: <?php echo $row["distance"] ?> Miles
                    </p>
                </div>
                <div onclick="flip(<?php echo "tile" . $row['id'] ?>)">
                    <table class="backtile">
                        <tr class="hikedescription"><td >
                            <?php echo $row["description"] ?>
                        </td></tr>
                        <tr><td class="coldirections">
                        <a class="directions" href="<?php echo $row["location"] ?>">Directions</a>
                        </td></tr>
                    </table>
                </div>
        </li>
    <?php $area = $row["areaname"]; endwhile ?>
</div>
    <?php $conn->close(); ?>
<?php } ?>
<?php
$fib = [1,0];
for($i=0; $i<30; $i++) {
    $next = array_sum($fib);
    array_shift($fib);
    array_push($fib,$next);
    echo $next.", ";
    //This is a change
}
?>


