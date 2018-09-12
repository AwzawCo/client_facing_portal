<div class="container-fluid" style="max-width: 1800px">
  <h2 id="header">Active Quotes for 
  <?php
    $sources = ["bridgestreet","sirva","regency"]; 
    echo "<select onchange=\"changeSource(this)\">";
    foreach ($sources as $key => $s) {
      echo "<option id='$s' value='$s' ".(($s==$source)?"selected>":">").$s."</option>";
    }
    echo "</select>";
  ?>
  <button id="inactive" type="button" style="float: right;" class="btn glyphicon glyphicon-menu-down btn-default" onclick="toggleTable('submittedQuotesTable',this)"></button>          
    </h2>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" >Open Modal</button>
  <table class="table table-hover" id="submittedQuotesTable" width="100%">
    <thead>
      <tr>
      <?php 
        foreach ($columns as $key => $header) {
          //Prepare for some ugly-ass code.
          $id = $header['id'];
          $size = $header['size'];
          $label = $header['label'];
          echo "<th id=\"".$id."HDR\" onclick=\"createSearchBox(this,".$id."SearchBox,".$id."SearchInput)\">".$label."</th>";
          echo "<th id=\"".$id."SearchBox\" hidden><input type=\"text\" id=\"".$id."SearchInput\" onkeyup=\"search(this,".$key.")\" placeholder=\"Search\" size=\"".$size."\"><i class=\"glyphicon glyphicon-remove\" onclick=\"clearInput(".$id."SearchInput,".$id."SearchBox,".$id."HDR)\"></i></th>";
        }
      ?>
      </tr>
    </thead>
    <tbody>
    <?php
      for ($i=0; $i < sizeof($res) ; $i++) {
        echo "<tr>";
        foreach ($res[$i] as $key => $value) {
          echo "<td>".$value."</td>"; //Hopefully this matches the columns!
         } 
         // echo "<td><a href=\"#\" class=\"btn btn-primary\" role=\"button\">View Lead Details</a> <a href=\"#\" class=\"btn btn-info\" role=\"button\">Create Bid</a>  <a href=\"#\" class=\"glyphicon glyphicon-trash btn btn-danger\" role=\"button\" data-toggle=\"tooltip\" title=\"Mark this lead as inactive\"></a>";
         // echo "<td><a href=\"#\" class=\"glyphicon glyphicon-file btn btn-danger\" role=\"button\"></a>";
         //  echo "<td><span class=\"glyphicon glyphicon-trash\"></span>&nbsp;</td>";
        echo "</tr>";
      }
    ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeModal()">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
   $("#regency").attr('disabled','disabled');
});

  function changeSource(obj){
    // var header = document.getElementById("test");
    // header.innerHTML += this.selected;
    window.location = "<?php echo site_url('dashboard/SubmittedQuotes')?>?source="+obj.value
  }

  function createSearchBox(elm1, elm2, input){
    elm1.hidden=true;
    elm2.hidden=false;
    input.focus();
  }

  function clearInput(elm, box, hdr){
    elm.value="";
    var table = document.getElementById("submittedQuotesTable");
    var tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      tr[i].style.display = "";
    }
    box.hidden=true;
    hdr.hidden=false;
  }

  function search(elm, index){
    var filter = elm.value.toUpperCase();
    var table = document.getElementById("submittedQuotesTable");
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

  function closeModal(){
    document.getElementById("header").innerHTML += "IT WORKS"
  }

  function toggleTable(id, btn){
    var table = document.getElementById(id);
    table.hidden = !table.hidden;
    btn.classList.toggle("glyphicon-menu-up");
  }
</script>