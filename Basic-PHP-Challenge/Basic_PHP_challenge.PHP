<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP challenge</title>
</head>

<body>

//I was not sure if the challenge asked for me to slugify the key using code or by hand. I attempted to use code but i could not get it to print. so 
    This was the method I used//
    <?php
    //words gathered from wordfinder//
    $rnd_words['dive emit chef sighting normal norwegian cool acquired wan ovarian'] = 'dive-emit-chef-sighting-normal-norwegian-cool-acquired-wan-ovarian';
    $rnd_words['wick
        fed
        grind
        wearing
        conceptualize
        auditor
        nectar
        prime
        rotten
        couch'] = 'wick-fed-grind-wearing-conceptualize-auditor-nectar-prime-rotten-couch';
    $rnd_words['preschool
        fascism
        cruelty
        lead
        workforce
        doll
        popular
        fashionable
        purported
        attempt'] = 'preschool-fascism-cruelty-lead-workforce-doll-popular-fashionable-purported-attempt';
    $rnd_words['analyse
        tort
        notorious
        downstream
        adjourn
        sequel
        gulf
        concerned
        northern
        overheated'] = 'analyse-tort-notorious-downstream-adjourn-sequel-gulf-concerned-northern-overheated';
    $rnd_words['envy
        assure
        tech
        reparation
        visitation
        team
        ruler
        tree
        pediatrician
        report'] = 'envy-assure-tech-reparation-visitation-team-ruler-tree-pediatrician-report';
    $rnd_words['anti-communist
        extradition
        socialist
        blue-eyed
        oxidation
        glassy
        canning
        rehabilitate
        vocal
        reporter'] = 'anti-communist-extradition-socialist-blue-eyed-oxidation-glassy-canning-rehabilitate-vocal-reporter';
    $rnd_words['fiberglass
        soapy
        partner
        multitude
        refute
        authorship
        sever
        horticultural
        graphic
        emigrate'] = 'fiberglass-soapy-partner-multitude-refute-authorship-sever-horticultural-graphic-emigrate';
    $rnd_words['reprint
        roulette
        unparalleled
        subsist
        overheated
        subtitle
        forestry
        remake
        outcast
        orchard'] = 'reprint-roulette-unparalleled-subsist-overheated-subtitle-forestry-remake-outcast-orchard';
    $rnd_words['vandal
        perimeter
        dictator
        situational
        smooth
        bother
        assigned
        coast
        marshmallow
        circumcision'] = 'vandal-perimeter-dictator-situational-smooth-bother-assigned-coast-marshmallow-circumcision';
    $rnd_words['flip
        servant
        cheery
        flowering
        chairman
        amend
        devious
        comb
        addiction
        subsistence'] = 'flip-servant-cheery-flowering-chairman-amend-devious-comb-addiction-subsistence';

    
    $html_table = '<table border="1" cellspacing="0" cellpadding="2"><tr>';
$nr_col = 5;       // Sets the number of columns

$i = 0;       // index used to control when to add new row (incremented to each loop)
// Traverse the array with FOREACH
foreach($rnd_words AS $key=>$val) {
  $html_table .= '<td> Value:' .$val. ' Key: '. $key. '</td>';       // adds key-value in columns in table
  $i++;

  // If the number of columns is completed for a row (rest of division of $i to $nr_col is 0)
  // Closes the current row, and begins another row
  $col_to_add = $i % $nr_col;
  if($col_to_add == 0) { $html_table .= '</tr><tr>'; }
}

// Adds empty column if the current row is not completed
if($col_to_add != 0) $html_table .= '<td colspan="'. ($nr_col - $col_to_add). '">&nbsp;</td>';

$html_table .= '</tr></table>';         // ends the last row, and the table

// Delete posible empty row (<tr></tr>) which can be created after last column
$html_table = str_replace('<tr></tr>', '', $html_table);

echo $html_table;        // display the HTML table





?>
    

</body>

</html>
