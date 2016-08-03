<!-- 
	File: kunder_ny.php
	Author: Jonas Solsvik
	Created: 02/07/16        -->

<?php include 'snippets/top.php';?>


<form class="form-horizontal" action="../controller/form_kunde.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Ny kunde</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Fornavn">Fornavn</label>  
  <div class="col-md-4">
  <input id="Fornavn" name="Fornavn" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Etternavn">Etternavn</label>  
  <div class="col-md-4">
  <input id="Etternavn" name="Etternavn" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Telefon">Telefon</label>  
  <div class="col-md-4">
  <input id="Telefon" name="Telefon" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="E-post">E-post</label>  
  <div class="col-md-4">
  <input id="E-post" name="E-post" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gateadresse">Gateadresse</label>  
  <div class="col-md-4">
  <input id="Gateadresse" name="Gateadresse" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Postnummer">Postnummer</label>  
  <div class="col-md-2">
  <input id="Postnummer" name="Postnummer" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Poststed">Poststed</label>  
  <div class="col-md-2">
  <input id="Poststed" name="Poststed" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="col-md-4">
  <button id="submit" type="submit" name="submit" class="btn btn-success">Submit</button>
</div>


</fieldset>
</form>



<?php include 'snippets/bottom.php';?>