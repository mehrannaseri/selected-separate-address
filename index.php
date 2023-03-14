<?php
function separate($address){

    $aMatch         = array();
    $pattern        = '#([a-zA-ZäöüÄÖÜß+(-{1})?(.)]+\s)+#';
    $matchResult    = preg_match($pattern, $address, $aMatch);

    $street         = (isset($aMatch[0])) ? $aMatch[0] : '';
    $number         = (isset($aMatch[2])) ? $aMatch[2] : '';

    return $street."<br>";
}
echo separate('Einsteinstr. 7');
echo separate('Einsteinstrasse 7');
echo separate('Curd-Jürgens-Str. 30');
echo separate('Perlcherstr.88 1');
echo separate('Rosenheimerstr. 14e-f');
echo separate('Bei Fußenkreuz 36');
echo separate('Sankt Georgs Kirchhof 26');
echo separate('Mallertshofener Strasse 36c');
echo separate('Rosenheimerstr. 145 e+f');
echo separate('Hof 151');
echo separate('Wald a.A. 125');
echo separate('Lindenhof 0');
echo separate('Am Elfenholt');
echo separate('Am Schießberg 35 357');
echo separate('Idlhofgasse 16A-1');
echo separate('Kreisbacherstrasse 3/1/19');
echo separate('Höpflergasse 6 / 18');
echo separate('Straße des 17. Juni');
echo separate('10th Avenue, 123');
echo separate('21B Baker St, Merylbone');
?>
