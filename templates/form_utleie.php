<!-- 
	File: utleie_ny.php
	Author: Jonas Solsvik
	Created: 02/07/16        -->


<?php 
include 'snippets/top.php';

$filename='utleie_ny.php';?>

<form class="form-horizontal" action="../controller/ny_utleie.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Ny utleie</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="KundeID">KundeID</label>
  <div class="col-md-4">
    <input id="KundeID" name="utleie[KundID]" type="search" placeholder="" class="form-control input-md" required=""/>
    
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="SelgerID">SelgerID</label>
  <div class="col-md-4">
    <input id="SelgerID" name="utleie[BrukID]" type="search" placeholder="" class="form-control input-md" required=""/>
    
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="KontraktID">KontraktID</label>
  <div class="col-md-4">
    <input id="KontraktID" name="utleie[KontID]" type="search" placeholder="" class="form-control input-md" required=""/>
    
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="EnhetID">EnhetID</label>
  <div class="col-md-4">
    <input id="EnhetID" name="utleie[EnheID]" type="search" placeholder="" class="form-control input-md" required=""/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Antall">Antall</label>  
  <div class="col-md-1">
  <input id="Antall" name="utleie[Antall]" type="text" placeholder="" class="form-control input-md" required=""/>
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Year</label>
  <div class="col-md-2">
    <select id="Year" name="utleie[Year]" class="form-control">
      <option value="2016">2016</option>
      <option value="2017">2017</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Month</label>
  <div class="col-md-2">
    <select id="Month" name="utleie[Month]" class="form-control">
      <option value="01">Januar</option>
      <option value="02">Februar</option>
      <option value="03">Mars</option>
      <option value="04">April</option>
      <option value="05">Mai</option>
      <option value="06">Juni</option>
      <option value="07">Juli</option>
      <option value="08">August</option>
      <option value="09">September</option>
      <option value="10">Oktober</option>
      <option value="11">November</option>
      <option value="12">Desember</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Day</label>
  <div class="col-md-2">
    <select id="Day" name="utleie[Day]" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>
</div>


<div class="col-md-4">
	<button id="submit" type="submit" name="submit" class="btn btn-success">Submit</button>
</div>



</fieldset>
</form>


<?php include 'snippets/bottom.php';?>
