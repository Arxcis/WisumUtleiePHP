<!-- 
	File: kunder_ny.php
	Author: Jonas Solsvik
	Created: 02/07/16        -->

<?php include 'snippets/top.php';?>

<form class="form-horizontal" action="../controller/ny_kunde.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Ny kunde</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Fornavn">Fornavn</label>  
  <div class="col-md-4">
  <input id="Fornavn" name="kunde[Fornavn]" type="text" placeholder="" class="form-control input-md" required=""/>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Etternavn">Etternavn</label>  
  <div class="col-md-4">
  <input id="Etternavn" name="kunde[Etternavn]" type="text" placeholder="" class="form-control input-md" required=""/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Telefon">Telefon</label>  
  <div class="col-md-4">
  <input id="Telefon" name="kunde[Telefon]" type="text" placeholder="" class="form-control input-md"/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="E-post">E-post</label>  
  <div class="col-md-4">
  <input id="E-post" name="kunde[Epost]" type="text" placeholder="" class="form-control input-md"/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gateadresse">Gateadresse</label>  
  <div class="col-md-4">
  <input id="Gateadresse" name="kunde[Gate]" type="text" placeholder="" class="form-control input-md" required=""/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Postnummer">Postnummer</label>  
  <div class="col-md-2">
  <input id="Postnummer" name="kunde[Postnummer]" type="text" placeholder="" class="form-control input-md" required=""/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Poststed">Poststed</label>  
  <div class="col-md-2">
  <input id="Poststed" name="kunde[Poststed]" type="text" placeholder="" class="form-control input-md"/>
    
  </div>
</div>

<div class="col-md-4">
  <button id="submit" type="submit" name="submit" class="btn btn-success">Submit</button>
</div>


</fieldset>
</form>


<?php include 'snippets/bottom.php';?>