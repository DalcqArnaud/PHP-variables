<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables exo</title>
</head>
<body>
    <?php $myName = "Arnaud Dalcq" ?>
    <?php $myAge = 24 ?>
    <?php $myEyesColor = "brown" ?>
    <?php $myFamilyMembers = array(0 => "Muriel Wullus", 1 => "Xavier Petre", 2 => "Thomas Dalcq", 3 => "Marie Dalcq") ?>
    <?php $hungry = true ?>


    <p> Hi! My name is <?php echo $myName; ?>.</p>
    <p> I am <?php echo $myAge; ?> years old.</p>
    <p> My eyes are <?php echo $myEyesColor; ?>.</p>
    <p> The first person in my family is <?php echo $myFamilyMembers[0]; ?>.</p>
    <p> I am hungry? <?php if($hungry){echo "yes";}else{echo "no";}; ?>.</p>

</body>
</html>