<div>
	
	<?php if (!empty($nimimerkki)){?>
		<p><b>Kiitos veikkauksen jättämisestä! Alla voit tarkastella jätettyjä veikkauksia.</b></p>	
	<?php }else{?>
	<p><b>Ole hyvä ja valitse veikkaus jota haluat tarkastella:</b></p>
<?php echo CHtml::beginForm(); ?>
<?php echo CHtml::dropDownList('veikkaus', $veikkausValinta, $veikkaus, array('empty' => 'Valitse veikkaus', 
	'onChange'=>'this.form.submit()'));?>
<?php echo CHtml::endForm(); ?>
<?php }?>
<br/>
<br/>
<table>
<tr><th>Veikkaaja</th><th>1.</th><th>2.</th><th>3./4.</th><th>Lohko A</th><th>Lohko B</th><th>Lohko C</th><th>Lohko D</th><th>Pisteet</th></tr>
<?php foreach($rivit as $rivi){;?>
	<tr>
	<td><?php echo $rivi->veikkaaja->NimiMerkki; ?></td>
	<td><?php echo $idToCodes[$rivi->voittajaVeikkaus[0]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->voittajaVeikkaus[1]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->voittajaVeikkaus[2]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->lohkoVeikkaus[0]->JoukkueID].", ".$idToCodes[$rivi->lohkoVeikkaus[1]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->lohkoVeikkaus[2]->JoukkueID].", ".$idToCodes[$rivi->lohkoVeikkaus[3]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->lohkoVeikkaus[4]->JoukkueID].", ".$idToCodes[$rivi->lohkoVeikkaus[5]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->lohkoVeikkaus[6]->JoukkueID].", ".$idToCodes[$rivi->lohkoVeikkaus[7]->JoukkueID]; ?></td>
	<td>0</td>
	</tr>
<?php }?>
</table>

<br/>
Pisteet pyritään päivittämään mahdollisimman nopeasti otteluiden edetessä. 

</div>