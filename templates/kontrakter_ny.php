<!-- 
	File: kontrakter_ny.php
	Author: Jonas Solsvik
	Created: 03/07/16        -->


<?php 
include 'snippets/top.php';

$filename='kontrakter_ny.php';?>

<form class="form-horizontal" action="../controller/form_kontrakt.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Ny kontrakt</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Tittel">Tittel</label>  
  <div class="col-md-4">
    <input id="Tittel" name="Tittel" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Forfatter">Forfatter</label>  
  <div class="col-md-4">
    <input id="Forfatter" name="Forfatter" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Dokument">Dokument</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Dokument" name="Dokument"></textarea>
  </div>
</div>

<div class="col-md-4">
  <button id="submit" type="submit" name="submit" class="btn btn-success">Submit</button>
</div>


</fieldset>
</form>

<?php
include 'snippets/bottom.php';

?>
