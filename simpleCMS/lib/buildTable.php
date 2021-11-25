<?php


function buildStandardTable (): string
{

    $res = "<tbody>";
    for ($r = 0; $r < 10; $r++) {
        $res.="\n<tr>";
        for ($c=0; $c < 10; $c++){
            $res.= "<td>" . $r . " | " . $c . "</td>";
        }
        $res.= "</tr>";
    }
    $res.= "</tbody>";

    $res = "<table>" . $res . "</table>";
    return $res;
}
