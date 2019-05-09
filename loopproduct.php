<style>
.product_box{
    display: inline-block;
    width: 200px;
    height: 200px;
    background-color: lightcoral;
    margin: 10px;
}
.roe
{
    overflow: hidden;
}
    </style>
<?php
for ($i = 1; $i <= 12; $i++)
{

    if ($i % 4 == 1)
    {
        echo "<div class='row'>";
    }
    if ($i % 4 == 0)
    {
        echo "<div class='product_box '>Product", $i, "</div>";
        echo "</div>";
    }
    else
    {
        echo "<div class='product_box '>Product", $i, "</div>";
    }

}