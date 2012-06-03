<div>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
<script src="bootstrap/js/jquery.js"></script>
<script src="js/jquery/jquery.tablesorter.min.js"></script>
<script >
	$(document).ready(function(){
	
	    //  Adds sort_header class to ths
	    $(".sortable th").addClass("sort_header");
	
	    //  Adds alternating row coloring to table.
	    $(".sortable").tablesorter({widgets: ["zebra"]}); 
	
	    //  Adds "over" class to rows on mouseover
	    $(".sortable tr").mouseover(function(){
	      $(this).addClass("over");
	    });
	
	    //  Removes "over" class from rows on mouseout
	    $(".sortable tr").mouseout(function(){
	      $(this).removeClass("over");
	    });
	    
	    $(".tablesorter").trigger("update");
		var sorting = [[8, 1]];
		$("table").trigger("sorton", [sorting]);
	});	
</script>

<style type="text/css">
table.sortable
  { margin-left: auto;
    margin-right: auto;
    border: 1px solid #000000;
    background-color: #FFFFFF;
    border-collapse: collapse; 
    font-size: 80%;
    color: #000000;
    }
table.sortable td, table.sortable th
  { border: 1px solid #000000;
    padding: 3px;
    }

table.sortable th
  { font-size: 110%;
    font-weight: 600;
    color: #FFFFFF;
    background-color: #3E577B;
    }
    

table.sortable th.sort_header
  { text-decoration: underline;
    cursor: pointer;
    }

tr{
	font-size: 120%;
   font-weight: 600;
}

tr.odd
  { background-color: #E0E0E0; 
}

tr.over td
  { background-color:#FFFF99;
}
</style>



	<?php if (!empty($nimimerkki)){?>
		<p><b>Kiitos veikkauksen jättämisestä! Alla voit tarkastella jätettyjä veikkauksia.</b></p>	
	<?php }else{?>
	<p><b>Ole hyvä ja valitse veikkaus jota haluat tarkastella:</b></p>
<?php echo CHtml::beginForm(); ?>
<?php echo CHtml::dropDownList('veikkaus', $veikkausValinta, $veikkaus, array( 
	'onChange'=>'this.form.submit()'));?>
<?php echo CHtml::endForm(); ?>
<?php }?>
Turnauksen tilanteen näkee hyvin esimerkiksi <a href="http://www.uefa.com/uefaeuro/season=2012/standings/index.html">Uefan sivulta</a>.
<br/>
Alla tämän hetkisen tilanteen mukaiset pisteet:
<br/><br/>
<table class="sortable">
<thead>
<tr><th>Veikkaaja</th><th>1.</th><th>2.</th><th>3./4.</th><th>Lohko A</th><th>Lohko B</th><th>Lohko C</th><th>Lohko D</th><th>Pisteet</th></tr>
</thead>
<?php foreach($rivit as $rivi){;?>
	<tr>
	<td><?php echo ucfirst($rivi->veikkaaja->NimiMerkki); ?></td>
	<td><?php echo $idToCodes[$rivi->voittajaVeikkaus[0]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->voittajaVeikkaus[1]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->voittajaVeikkaus[2]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->lohkoVeikkaus[0]->JoukkueID].", ".$idToCodes[$rivi->lohkoVeikkaus[1]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->lohkoVeikkaus[2]->JoukkueID].", ".$idToCodes[$rivi->lohkoVeikkaus[3]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->lohkoVeikkaus[4]->JoukkueID].", ".$idToCodes[$rivi->lohkoVeikkaus[5]->JoukkueID]; ?></td>
	<td><?php echo $idToCodes[$rivi->lohkoVeikkaus[6]->JoukkueID].", ".$idToCodes[$rivi->lohkoVeikkaus[7]->JoukkueID]; ?></td>
	<td><?php echo $rivi->pisteet; ?></td>
	</tr>
<?php }?>
</table>

<br/>
Pisteet pyritään päivittämään mahdollisimman nopeasti otteluiden edetessä. Huomioi että lohkovaiheen ja välieränvaiheen
ollessa kesken pisteet ovat tietyissä tilanteissa epätarkkoja. Esimerkiksi jos kaksi joukkuetta on tasapistein lohkokärjessä
(molemmat sijalla yksi), tulee täydet pisteet siinä vaiheessa vain siitä joukkueesta jonka on veikannut ykköseksi. Kun
lohkovaihe etenee, tulee lohkolle yksiselitteiset sijoitukset. Välierän vaiheen pisteet lasketaan vasta kun joukkueen
lopullinen sijoitus on varmistunut.
</div>