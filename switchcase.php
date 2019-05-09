<?php
$size = "S";
switch (strtolower($size))
// strtolower แปลงเป็นตัวพิมพ์เล็ก

{
    case "s":
        echo "small size";
        break;
    case "m":
        echo "medium size";
        break;
    case "l":
        echo "large size";
        break;
    default:
        echo "Unknown size";
        break;
}
