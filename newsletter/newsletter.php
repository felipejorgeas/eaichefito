<?php

$subject = "Vem com @eaichefito!";
$html = file_get_contents('email_finit.html');
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";

//$emails = 'wagner.junior30@gmail.com, vitordornas13@gmail.com, Thaynanvasconcelos@hotmail.com, wilbertviana@gmail.com, tha.oliveira18@gmail.com, babiifernandes63@gmail.com, eloizamanuelle.pintoqueiroz@gmail.com, marcelle-vasconceloss@hotmail.com, rafaelacatu@hotmail.com, nandararcd@gmail.com, Fran10_ciele@hotmail.com, mivalder@hotmail.com, gabryelacandido.321@hotmail.com, asdasdsa@gmail.com, santos.ntx@gmail.com, joaopnogueiraa@gmail.com, selenemartins1@hotmail.com, ceciliacine@yahoo.com.br, hfonseca21@gmail.com, felipearimateia@gmail.com, fillipehottm@gmail.com, tirsaegla@gmail.com, thiagobh94@live.com, tatianebeatriz69@yahoo.com.br, Marcoss_lopes@hotmail.com, Camillamc10@gmail.com, Brauliogonzaga@yahoo.com.br, moharamv@gmail.com, sarareginaz.ch@gmail.com, Carezende.gn@gmail.com, Keugalo22doido@hotmail.com, helder.werneck@hotmail.com, emiliano.ceg@gmail.com, no@gmail.com, paulohenriquesusu@hotmail.com, delinhadirley@hotmail.com, miriafuly@hotmail.com, Ludmila.vsm@gmail.com, crisburok@gmail.com, george_camisa10@hotmail.com, Charles.belfort@gmail.com, Carezende.gn@gmail.com, rodrigobaia.21@hotmail.com, Charles.belfort@gmail.com, Charles.belfort@gmail.com, gdcm88@gmail.com, Thaisalvaresdias@gmail.com, carlosparreiras@yahoo.com.br, ana1123pl.santana@gmail.com, wemersonferreira21@hotmail.com, Karinenavarro31@gmail.com, julio.antuness@hotmail.com , diogosb2007@hotmail.com , laryssaventura@hotmail.com , nubetegarcia@gmail.com, evemor7@gmail.com, ysisgomessouza@yahoo.com, jeffersonfranca1@yahoo.com.BR, vagner_santiago17@hotmail.com, claudiaclass@hotmail.com.br, heloisabaiadacosta@yahoo.com.br, tehdefreitas200@gmail.com ,joycecarvalho936@gmail.com, baucosta@yahoo.com.br,raphaeladriano.cotta@gmail.com,  lucas.guerra968@hotmail.com, Leilabarbalho995@gmail.com, kennedy.araujo@live.com, renatoavila@outlook.com, caixeta.phillipe@gmail.com, danilofernandes1987@gmail.com, gustavooliveira1x1@gmail.com, thalles.martinsr@gmail.com,  lorrangrocha802@hotmail.com,afdabh@gmail.com,jockhee@hotmail.com, frederico.borges@outlook.com, valescakohl@gmail.com, lu.gosling@gmail.com ,talytasouzasantos@hotmail.com, amarolorena@icloud.com,niceleonice069@gmail.com ,Valdiviafmayrink@gmail.com, lorenzadesousa@gmail.com ,faahbarbosa16@hotmail.com, marlonnovembro@yahoo.com.br, Lenyop88@gmail.com, dal_malak@hotmail.com, amandalves@yahoo.com.br, robertasalvatico@yahoo.com.br, marcioyg@gmail.com , cintiarodrgues245@gmail.com, freirasantos882827@gmail.com, erica.oliveira@prof.una.br, marcelalimalins@gmail.com, Michel.fvtorres@yahoo.com.br ,jvitor2301@gmail.com, flavio.calado@prof.una.br, paulovitoroc@gmail.com, Caio.caladoo@gmail.com, vasantos.projetos@gmail.com, vvrodriguesmg@hotmail.com, Juninho25438@gmail.com, sjhony2@gmail.com, saracarsalade@gmail.com, lidiana.oliveira9@gmail.com, carlosjrs2005@gmail.com, simonipcoelho@gmail.com, christianalopes2@gmail.com, allissondeoliveira@hotmail.com, laisfclima@gmail.com';
$emails = 'felipe.jorge@eacsoftware.com.br, felipejorgeas@gmail.com';

$emails = explode(',', str_replace(' ', '', $emails));

$emails = array_filter($emails);
$emails = array_unique($emails);

foreach ($emails as $to) {
    $to = trim($to);
    if (empty($to)) {
        continue;
    }
    if (mail($to, $subject, $html, $headers)) {
        echo "<br/>Email enviado com sucesso! - " . $to;
    } else {
        echo "<br/>Ocorreu um erro durante o envio do email! - " . $to;
    }
}
?>