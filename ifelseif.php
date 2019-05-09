<?php
$score = 89;
if ($score >= 80 && $score <= 100)
{
    echo "A";
}
elseif ($score >= 70 && $score <= 79)
{
    echo "B";
}
elseif ($score >= 60 && $score <= 69)
{
    echo "C";
}
elseif ($score >= 50 && $score <= 59)
{
    echo "D";
}
elseif ($score < 0 || $score > 100)
{
    echo "Invalid";
}
else
{
    echo "F";
}
