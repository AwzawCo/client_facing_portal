<div class="container-fluid" style="max-width: 1500px">
  <h2>Active Leads</h2>
  <table class="table table-hover" id="activeLeadTable" width="100%">
    <thead>
      <tr>
        <th id="leadHDR" onclick="createSearchBox(this,leadSearchBox,leadSearchInput)">Lead ID</th>
        <th id="leadSearchBox" hidden><input type="text" id="leadSearchInput" onkeyup="search(this,0)" placeholder="Search" size="7"><i class="glyphicon glyphicon-remove" onclick="clearInput(leadSearchInput,leadSearchBox,leadHDR)"></i></th>

        <th id="locationHDR" onclick="createSearchBox(this,locationSearchBox,locationSearchInput)">Location</th>
        <th id="locationSearchBox" hidden><input type="text" id="locationSearchInput" onkeyup="search(this,1)" placeholder="Search" size="16"  ><i class="glyphicon glyphicon-remove" onclick="clearInput(locationSearchInput,locationSearchBox,locationHDR)"></i></th>
        <!-- onblur="restoreHDR(locationSearchBox,locationHDR)" -->

        <th id="moveInHDR" onclick="createSearchBox(this,moveInSearchBox,moveInSearchInput)">Move In</th>
        <th id=moveInSearchBox hidden><input type="text" id="moveInSearchInput" onkeyup="search(this,2)" placeholder="Search" size="10"><i class="glyphicon glyphicon-remove" onclick="clearInput(moveInSearchInput,moveInSearchBox,moveInHDR)"></i></th>

        <th id="moveOutHDR" onclick="createSearchBox(this,moveOutSearchBox,moveOutSearchInput)">Move Out/Length of Stay</th>
        <th id=moveOutSearchBox hidden><input type="text" id="moveOutSearchInput" onkeyup="search(this,3)" placeholder="Search" size="10"><i class="glyphicon glyphicon-remove" onclick="clearInput(moveOutSearchInput,moveOutSearchBox,moveOutHDR)"></i></th>


        <!-- <th id="sourceHDR" onclick="createSearchBox(this,sourceSearchBox,sourceSearchInput)">Lead Source</th>
        <th id=sourceSearchBox hidden><input type="text" id="sourceSearchInput" onkeyup="search(this,4)" placeholder="Search" size="10"><i class="glyphicon glyphicon-remove" onclick="clearInput(sourceSearchInput,sourceSearchBox,sourceHDR)"></i></th> -->
        <th><a href="<?php echo site_url("dashboard/createLead") ?>" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Create Lead&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-file"></a></th>
      </tr>
    </thead>
    <tbody>
    <?php
    if(isset($res)){
      $res = json_decode($res);
      for ($i=0; $i < sizeof($res) ; $i++) { 
        echo "<tr>";
        echo "<td class=\"col-md-1\">".$res[$i]->leadID."</td>";
        echo "<td class=\"col-md-3\">".$res[$i]->locale."</td>";
        echo "<td class=\"col-md-2\">".$res[$i]->moveIn."</td>";
        echo "<td class=\"col-md-2\">".$res[$i]->moveOut."</td>";
        $header = '?id='.$res[$i]->leadID.'&s='.$res[$i]->source;
        echo "<td class=\"col-md-2\"><a href=\"".site_url('dashboard/createBid').$header."\" class=\"btn btn-info\" role=\"button\">Create Bid for this Lead</a>";
        if($res[$i]->source == "Regency") echo "<a href=\"#\" class=\"glyphicon glyphicon-trash btn btn-danger\" role=\"button\" data-toggle=\"tooltip\" title=\"Mark this lead as inactive\" onclick=\"warning(this)\" id=\"".$res[$i]->leadID."\"></a>";
        // echo "<td><a href=\"#\" class=\"glyphicon glyphicon-file btn btn-danger\" role=\"button\"></a>";
        // echo "<td><span class=\"glyphicon glyphicon-trash\"></span>&nbsp;</td>";
        echo "</tr>";
      }
    }
    ?>
    </tbody>
  </table>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

  function createSearchBox(elm1, elm2, input){
    elm1.hidden=true;
    elm2.hidden=false;
    input.focus();
  }

  function clearInput(elm, box, hdr){
    elm.value="";
    var table = document.getElementById("activeLeadTable");
    var tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      tr[i].style.display = "";
    }
    box.hidden=true;
    hdr.hidden=false;
  }

  function search(elm, index){
    var filter = elm.value.toUpperCase();
    var table = document.getElementById("activeLeadTable");
    var tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[index];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

  function warning(elm){
    //Are you sure?
    if(confirm("Are you sure you want to mark this lead as inactive?")){
      elm.href = "<?php echo site_url('dashboard/markLeadAsInactive') ?>?id="+elm.id;
    }

  }
</script>

<!-- <input type="text" id="myInput" placeholder="Location Search"> -->