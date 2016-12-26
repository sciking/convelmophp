<html>
<head>
	<title> Coniugazion di verb lombard </title>
</head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-16"> 
<body>
<h1> Coniugazion di verb lombard </h1>
<i> Basaa in sul dialett classegh de la città de Milan </i> <hr>
<!-- Dedicaa a 'na persona che soo mi... Te voeuri ben -->
<?php
$verbo = $_GET['verbo'];
$conj = $_GET[conj];
if ($conj == 1) {
echo "<b> INDICATIV <br> </b>";
echo "<b> Present <br> </b>";
echo ("Mi $verbo"."i <br>");
echo ("Ti te $verbo"."et<br>");
echo ("Lu el $verbo"."a<br>");
echo ("Num $verbo"."om<br>");
echo ("Vialter $verbo"."ee<br>");
echo ("Lor $verbo"."en<br>");
echo "<b> <br> Imperfett <br> </b>";
echo ("Mi $verbo"."avi <br>");
echo ("Ti te $verbo"."avet<br>");
echo ("Lu el $verbo"."ava<br>");
echo ("Num $verbo"."avom<br>");
echo ("Vialter $verbo"."avov<br>");
echo ("Lor $verbo"."aven<br>");
echo "<b> <br> Futur <br> </b>";
echo ("Mi $verbo"."aroo <br>");
echo ("Ti te $verbo"."aret<br>");
echo ("Lu el $verbo"."arà<br>");
echo ("Num $verbo"."aremm<br>");
echo ("Vialter $verbo"."arii<br>");
echo ("Lor $verbo"."rann<br>");
echo "<b> <br> <br> IMPERATIV <br> </b>";
echo "<b> Present <br> </b>";
echo (" $verbo"."a!<br>");
echo ("Che el $verbo"."a<br>");
echo ("$verbo"."emm!<br>");
echo ("Vialter $verbo"."ee!<br>");
echo ("Che $verbo"."en!<br>");
echo "<b>  <br> CONGIUNTIV <br> </b>";
echo "<b> Present <br> </b>";
echo ("Che mi $verbo"."i <br>");
echo ("Che ti te $verbo"."et<br>");
echo ("Che lu el $verbo"."a<br>");
echo ("Che num $verbo"."om<br>");
echo ("Che vialter $verbo"."ii<br>");
echo ("Che lor $verbo"."en<br>");
echo "<b> <br> Passaa <br> </b>";
echo ("Che mi $verbo"."assi <br>");
echo ("Che ti te $verbo"."assett<br>");
echo ("Che lu el $verbo"."ass<br>");
echo ("Che num $verbo"."assom<br>");
echo ("Che vialter $verbo"."assov<br>");
echo ("Che lor $verbo"."assen<br>");
echo "<b>  <br> CONDIZIONAL <br> </b>";
echo "<b> Present <br> </b>";
echo ("Mi $verbo"."ia <br>");
echo ("Ti te $verbo"."ariet<br>");
echo ("Lu el $verbo"."aria<br>");
echo ("Num $verbo"."ariom<br>");
echo ("Vialter $verbo"."ariov<br>");
echo ("Lor $verbo"."arien<br>");
echo (" <br> <br> <br>");
echo("Infinitiv: $verbo"."à <br>");
echo("Participi: $verbo"."aa <br>");
echo("<!-- Dedicaa a 'na persona che soo mi... Te voeuri ben -->");
} 
elseif ($conj == 2) {
echo "<b> INDICATIV <br> </b>";
echo "<b> Present <br> </b>";
echo ("Mi $verbo"."i <br>");
echo ("Ti te $verbo"."et<br>");
echo ("Lu el $verbo"."<br>");
echo ("Num $verbo"."om<br>");
echo ("Vialter $verbo"."ee<br>");
echo ("Lor $verbo"."en<br>");
echo "<b> <br> Imperfett <br> </b>";
echo ("Mi $verbo"."evi <br>");
echo ("Ti te $verbo"."evet<br>");
echo ("Lu el $verbo"."eva<br>");
echo ("Num $verbo"."evom<br>");
echo ("Vialter $verbo"."evov<br>");
echo ("Lor $verbo"."even<br>");
echo "<b> <br> Futur <br> </b>";
echo ("Mi $verbo"."aroo <br>");
echo ("Ti te $verbo"."aret<br>");
echo ("Lu el $verbo"."arà<br>");
echo ("Num $verbo"."aremm<br>");
echo ("Vialter $verbo"."arii<br>");
echo ("Lor $verbo"."rann<br>");
echo "<b> <br> <br> IMPERATIV <br> </b>";
echo "<b> Present <br> </b>";
echo (" $verbo"."!<br>");
echo ("Che el $verbo"."a<br>");
echo ("$verbo"."emm!<br>");
echo ("Vialter $verbo"."ee!<br>");
echo ("Che $verbo"."en!<br>");
echo "<b>  <br> CONGIUNTIV <br> </b>";
echo "<b> Present <br> </b>";
echo ("Che mi $verbo"."i <br>");
echo ("Che ti te $verbo"."et<br>");
echo ("Che lu el $verbo"."a<br>");
echo ("Che num $verbo"."om<br>");
echo ("Che vialter $verbo"."ii<br>");
echo ("Che lor $verbo"."en<br>");
echo "<b> <br> Passaa <br> </b>";
echo ("Che mi $verbo"."assi <br>");
echo ("Che ti te $verbo"."assett<br>");
echo ("Che lu el $verbo"."ass<br>");
echo ("Che num $verbo"."assom<br>");
echo ("Che vialter $verbo"."assov<br>");
echo ("Che lor $verbo"."assen<br>");
echo "<b>  <br> CONDIZIONAL <br> </b>";
echo "<b> Present <br> </b>";
echo ("Mi $verbo"."ia <br>");
echo ("Ti te $verbo"."ariet<br>");
echo ("Lu el $verbo"."aria<br>");
echo ("Num $verbo"."ariom<br>");
echo ("Vialter $verbo"."ariov<br>");
echo ("Lor $verbo"."arien<br>");
echo (" <br> <br> <br>");
echo("Infinitiv: $verbo"."è <br>");
echo("Participi: $verbo"."uu <br>");
} 
elseif ($conj == 3) {
} 
elseif ($conj == 4) {
} 
else {
echo "<b>Error: El lombard el gh'ha domà 4 coniugazion </b>";
}
?>
<hr>
<h6>     Hinn i or <?php echo date('H:i'); ?> del del dì <?php echo date('d/m/Y'); ?>. </h6>
</body>
