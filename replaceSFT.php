<?php
    $filereplacementlist = glob('approved/*.png');
    $filereplacement = array_rand($filereplacementlist);
    $replacement = $filereplacementlist[$filereplacement];
    $newfile = 'live/SFT.png';

    if (!copy($replacement, $newfile)) {
    echo "failed to copy";
}
?>