<!-- 
	File: enheter_ny.php
	Author: Jonas Solsvik
	Created: 02/07/16        -->

<?php include 'snippets/top.php';

$filename='enheter_ny.php';?>


<form class="form-horizontal" action="../controller/ny_enhet.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Ny enhet</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Varenavn">Varenavn</label>  
  <div class="col-md-4">
  <input id="Varenavn" name="enhet[Varenavn]" type="text" placeholder="" class="form-control input-md" required=""/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Antall">Antall</label>  
  <div class="col-md-1">
  <input id="Antall" name="enhet[Antall]" type="text" placeholder="" class="form-control input-md" required=""/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="#QR-kode">#QR-kode</label>  
  <div class="col-md-4">
  <input id="#QR-kode" name="enhet[QRkode]" type="text" placeholder="Optional" class="form-control input-md"/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="#Serienummer">#Serienummer</label>  
  <div class="col-md-4">
  <input id="#Serienummer" name="enhet[Serienummer]" type="text" placeholder="Optional" class="form-control input-md"/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gruppe">Gruppe</label>  
  <div class="col-md-4">
  <input id="Gruppe" name="enhet[Gruppe]" type="text" placeholder="" class="form-control input-md"/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Undergruppe">Undergruppe</label>  
  <div class="col-md-4">
  <input id="Undergruppe" name="enhet[Undergruppe]" type="text" placeholder="" class="form-control input-md"/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Pris">Pris</label>  
  <div class="col-md-2">
  <input id="Pris" name="enhet[Pris]" type="text" placeholder="" class="form-control input-md" required=""/>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Beskrivelse">Beskrivelse</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Beskrivelse" name="enhet[Beskrivelse]"></textarea>
  </div>
</div>

<div class="col-md-4">
  <button id="submit" type="submit" name="submit" class="btn btn-success">Submit</button>
</div>


</fieldset>
</form>


<?php include 'snippets/bottom.php';?>