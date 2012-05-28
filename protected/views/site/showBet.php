<div>
	<p><b>Ole hyvä ja valitse veikkaus johon haluat osallistua:</b></p>
<br/>
<br/>
<p><b>Täytä seuraavaksi yhteystietosi:</b></p>

<table>
<tr><th>Nimi</th><th>Nimimerkki</th><th>Sähköposti</th></tr>
<tr>
<td><?php echo CHtml::label($_POST['Nimi'], "Nimi"); ?></td>
<td><?php echo CHtml::activeLabel($_POST['NimiMerkki'], "NimiMerkki"); ?></td>
<td><?php echo CHtml::label($_POST['SahkoPosti'], "SahkoPosti"); ?></td>
</tr>
</table>

<br/>
</div>