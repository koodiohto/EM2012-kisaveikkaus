<div class="alert-error">
	<p><?php echo $error;?></p>
</div>
<div class="form">
	<p><b>Ole hyvä ja valitse veikkaus johon haluat osallistua. Syötä myös veikkauksen perustajan antama salasana.</b></p>
	<table>
	<tr><th>Veikkaus</th><th>Veikkauksen salasana</th><th></th></tr>

<?php echo CHtml::beginForm(); ?>
<td><?php echo CHtml::dropDownList('veikkaus', $veikkausValinta, $veikkaus, array('empty' => 'Valitse veikkaus'));?></td>
<td><?php echo CHtml::textField($salasana,""); ?></td>
<td width="30%"></td>

</table>
<br/>
<br/>
<p><b>Täytä seuraavaksi yhteystietosi:</b></p>

<table>
<tr><th>Nimi</th><th>Nimimerkki</th><th>Sähköposti</th></tr>
<tr>
<td><?php echo CHtml::activeTextField($veikkaaja,"Nimi"); ?></td>
<td><?php echo CHtml::activeTextField($veikkaaja, "NimiMerkki"); ?></td>
<td><?php echo CHtml::activeTextField($veikkaaja, "SahkoPosti"); ?></td>
</tr>
</table>

<br/>
<p><b>Valitse seuraavaksi kunkin lohkon voittaja ja kakkonen (samaa joukkuetta ei voi pelata molemille sijoille):</b></p>

<table>
<tr><th>Lohko A</th><th>Lohko B</th><th>Lohko C</th><th>Lohko D</th></tr>
<tr>
<td><?php echo CHtml::dropDownList('lohkoA1', $lohkoA1, $lohkoA, array('empty' => 'Valitse voittaja'));?></td>
<td><?php echo CHtml::dropDownList('lohkoB1', $lohkoB1, $lohkoB, array('empty' => 'Valitse voittaja'));?></td>
<td><?php echo CHtml::dropDownList('lohkoC1', $lohkoC1, $lohkoC, array('empty' => 'Valitse voittaja'));?></td>
<td><?php echo CHtml::dropDownList('lohkoD1', $lohkoD1, $lohkoD, array('empty' => 'Valitse voittaja'));?></td>
</tr>
<tr>
<td><?php echo CHtml::dropDownList('lohkoA2', $lohkoA2, $lohkoA, array('empty' => 'Valitse kakkonen'));?></td>
<td><?php echo CHtml::dropDownList('lohkoB2', $lohkoB2, $lohkoB, array('empty' => 'Valitse kakkonen'));?></td>
<td><?php echo CHtml::dropDownList('lohkoC2', $lohkoC2, $lohkoC, array('empty' => 'Valitse kakkonen'));?></td>
<td><?php echo CHtml::dropDownList('lohkoD2', $lohkoD2, $lohkoD, array('empty' => 'Valitse kakkonen'));?></td>
</tr>
</table>

<br/>
<p><b>Valitse lopuksi koko turnauksen mitalikolmikko (pitää olla kolme eri joukkuetta):</b></p>
<table>
<tr><th>Ykkönen</th><th>Kakkonen</th><th>Kolmonen</th></tr>
<tr>
<td><?php echo CHtml::dropDownList('Voittaja', $voittaja, $kaikkiJoukkueet, array('empty' => 'Valitse voittaja'));?></td>
<td><?php echo CHtml::dropDownList('Kakkonen', $kakkonen, $kaikkiJoukkueet, array('empty' => 'Valitse kakkonen'));?></td>
<td><?php echo CHtml::dropDownList('Kolmonen', $kolmonen, $kaikkiJoukkueet, array('empty' => 'Valitse kolmonen'));?></td>
</tr>
</table>


<?php echo CHtml::submitButton('Jätä veikkaus'); ?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->