<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-7">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW ANNOUNCEMENT</h1>       
            </div>
            <div class="col-5">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">BID ANNOUNCEMENT</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Announcement</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->
    <section class="section dashboard">    
        <div class="card">
            <div class="card-header" style="background-color: #7070db; color: white;">
             INVITATION FOR BID
            </div>
            <div class="card-body">
                <h5 class="card-title"> </h5>
                
                    <!-- Alert Messages -->
                    <?php if (isset($msg)): ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?= $msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <!-- End of Alert Messages -->
                <!-- Multi Columns Form -->
                <?= form_open('invitation/add') ?>
                <div class="row g-3">
                    <div class="col-md-12">
                    <label for="PNumber" class="form-label">Procurement No</label>
                        <select id="PNumber" class="form-select" name="PNumber" onchange="loadDescription(this.value); loadLocation(this.value);loadTCost(this.value);loadPMethod(this.value)">
                           <option value="" selected="">...</option>
                           <?php foreach ($Tender_list as $key=> $result) { ?>
                            <?php if ($result['PType'] == 'NCB' || $result['PType'] == 'NationalShopping'): ?>
                                   <option value="<?= $result['Tenderid'] ?>">STF/LOG/C/<?= $result['Tenderid'] ?>/<?= substr($result['BStartDate'],0,4) ?></option>
                               <?php endif; ?>
                           <?php } ?>
                           <span class="text-danger"><?= service('validation')->getError('PNumber') ?></span>                   
                        </select>
                    </div> 
                    
                    <!--get Description from onchange-->   
                    <div class="col-md-12">  
                          <label for="Description" class="form-label">Tender Description</label>
                        <input type="text" class="form-control" id="result" name="Description" >
                    </div>
                    
                     <div class="col-md-12">  
                          <label for="Tcost" class="form-label">Tender Cost</label>
                        <input type="text" class="form-control" id="resulttCost" name="Tcost" >
                    </div>
                     <div class="col-md-12">  
                          <label for="Location" class="form-label">Geographic Location (for the delivery of goods)</label>
                        <input type="text" class="form-control" id="resultlocation" name="Location" >
                    </div>
                    <div class="col-md-12">  
                          <label for="PMethod" class="form-label">Procurement Method</label>
                        <input type="text" class="form-control" id="resultPMethod" name="PMethod" >
                    </div>
                   
                    <div class="col-md-6">
                        <label for="DCharges" class="form-label">Document Charges</label>
                        <input type="text" class="form-control" id="DCharges" name="DCharges">
                        <span class="text-danger"> <?= service('validation')->getError('DCharges') ?></span>
                    </div>
                    <div class="col-md-6">
                        <label for="BSecurity" class="form-label">Value of Bid Security</label>
                        <input type="text" class="form-control" id="BSecurity" name="BSecurity">
                        <span class="text-danger"> <?= service('validation')->getError('BSecurity') ?></span>
                    </div>
                  

                    <div class="text-center">
                       <input type="hidden" name="IFBId" id="IFBId" value="<?=$IFBId ?>">
                        <button type="submit" class="btn btn-outline-primary rounded">Submit</button>
                        <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                    </div>
                </div><!-- End Multi Columns Form -->
                <?= form_close() ?>

            </div>
        </div>

    </section>
</main>
<script>
    function  loadDescription(Tid) {
        var formData = "Tenderid=" + Tid + "&";
        //alert(formData);
        $.ajax({
            type: 'POST',
            url: '<?= site_url('invitation/getDescription') ?>',
            data: formData,
            success: function (response) {
                $("#result").val(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });
   }
</script>

<script>
    function  loadLocation(aid) {
        var formData = "Tenderid=" + aid + "&";
        //alert(formData);
        $.ajax({
            type: 'POST',
            url: '<?= site_url('invitation/getLocation') ?>',
            data: formData,
            success: function (response) {
                $("#resultlocation").val(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });
   }
</script>


<script>
    function  loadPMethod(aid) {
        var formData = "Tenderid=" + aid + "&";
        //alert(formData);
        $.ajax({
            type: 'POST',
            url: '<?= site_url('invitation/getPMethod') ?>',
            data: formData,
            success: function (response) {
                $("#resultPMethod").val(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });
   }
</script>

<script>
    function  loadTCost(aid) {
        //alert(aid);
        var formData = "Tenderid=" + aid + "&";
        //alert(formData);
        $.ajax({
            type: 'POST',
            url: '<?= site_url('invitation/gettotalcost') ?>',
            data: formData,
            success: function (response) {
                $("#resulttCost").val(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });
   }
</script>