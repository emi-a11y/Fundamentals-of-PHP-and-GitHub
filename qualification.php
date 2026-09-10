<?php
echo "<h1>Hello, World !< /h1>";
echo "<br>";
print "Welcome to PHP";

echo "<h1>Student Information</h1>";

$studentName = "Juan Dela Cruz";
$age = 19;
$grade = 82;
$enrolled = true;
$suspended = false;

echo "<p>Name: " . $studentName . "</p>";
echo "<p>Age: " . $age . "</p>";
echo "<p>Grade: " . $grade . "</p>";
echo "<p>Enrolled: ". ($enrolled ? "Yes" : "No")."</p>";
echo "<p>Suspended: ". ($suspended ? "Yes" : "No")."</p>";

if ($age >= 18 && $grade >= 75 && $enrolled == true && $suspended == false) {
echo "<h2 style='color:green; '>$studentName is QUALIFIED .< /h2>";
} else {
echo "<h2 style='color:red; '>$studentName is NOT QUALIFIED .< /h2>";

}
?>