<?php
    setcookie("CoupnNumber","",time()-1);
    setcookie("CoupunValue","",time()-1);
    print("<pre>\n");
    print("2 cookies were delivered with past times.\n");

    $count = count($_COOKIE);
    print("$count cookies received.\n");
    foreach ($_COOKIE as $name => $value) {
        print " $name = $value\n";
    }
    print("</pre>\n");
?>