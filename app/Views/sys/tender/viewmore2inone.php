<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW TENDER</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">TENDER</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Tender</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->                   
        <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Primary Details</div>
            <div class="card-body">
                <h5 class="card-title"></h5>     

                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"> </h3>

                        <div class="box-tools pull-right">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="row">
                        <!--<div class="box-body no-padding">-->
                        <div class="card col-md-8" style="border: 2px solid #CCCCFF;width: 50%;">  
                              <h2 class="card-title lead" style="text-align:center"></h2>
                            <table class="table table-striped  ">
                                <tbody>
                                    <?php
                                    foreach ($list as $key => $result) {
                                        ?>
                                        <tr>
                                            <td style="width:30%;"> <strong>Procurement Number </strong> </td>
                                            <td> STF/LOG/C/<?= $result['Tenderid'] ?> </td>
                                        </tr>
                                        <tr>
                                            <td> <strong>Title of the Procurement </strong> </td>
                                            <td> <?= $result['Description'] ?> </td>
                                        </tr>
                                        <tr>
                                            <td> <strong> Procurement Method </strong> </td>
                                            <td> Request for Quotations /<?= $result['PType'] ?></td>
                                        </tr>
                                        <tr>
                                            <td> <strong> Vote </strong> </td>
                                            <td><?= $result['ICategory'] ?></td>
                                        </tr>
                                        <tr>
                                            <td> <strong> Geographic Location (for the delivery of goods, Works to be executed, Services to be
                                                    provided) </strong> </td>
                                            <td> <?= $result['Location'] ?> </td>
                                        </tr>
                                        <tr>
                                            <td> <strong> Priority Status </strong> </td>
                                            <td> <?= $result['PStatus'] ?> </td>
                                        </tr>
                                        <tr>
                                            <td> <strong> Bidding Process Start Date &amp; Time </strong> </td>
                                            <td> <?= $result['BStartDate'] ?>  </td>
                                        </tr>  
                                        <tr>
                                            <td> <strong>Bid Opening Date &amp; Time </strong> </td>
                                            <td> <?= $result['BOpen'] ?> </td>
                                        </tr>
                                        <tr>
                                            <td> <strong>Bid Closing Date &amp; Time </strong> </td>
                                            <td> <?= $result['BStart'] ?> To  <?= $result['BEnd'] ?> </td>
                                        </tr>

                                        <tr>
                                            <td> <strong> Funding </strong> </td>
                                            <td> Local </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!-- Compleate tis part get data from annoncement model -->

                        </div>


                        <div class="card col-md-4" style="border: 2px solid #CCCCFF;width: 50%;">
                            <div class="card-body">
                                <h2 class="card-title lead" style="text-align:center">Procurement Items</h2>
                                <hr style="height: 3px; background-color: red;">
                                <span class="text-success"><?= @$msg ?></span>

                                <!-- Table Variants -->
                                <table class="table">
                                    <thead style="text-align: center; vertical-align: middle;">
                                        <tr>    
                                            <th scope="col">Item ID</th>
                                            <th scope="col">Item</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Sample</th>

                                        </tr>
                                    </thead>
                                    <tbody  style="text-align: center; vertical-align: middle;">
                                        <?php
                                        $i = 1;
                                        foreach ($listi as $key => $resulti) {
                                            ?>
                                            <tr>
                                                <th scope="row"><?= $i ?> </th>
                                                <td><?= $resulti['Item'] ?> </td>                   
                                                <td><?= $resulti['Qty'] ?></td>
                                                <td><?= $resulti['Sample'] ?></td>

                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                        ?>

                                    </tbody>
                                </table>

                                <div class="card">                   
                                    <div class="card-body">
                                        <h5 class="card-title">Tender Documentation</h5>
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <a href="<?= site_url('tender/createSpec/' . $result['Tenderid']) ?>">
                                                    <button type="button" class="btn btn-success btn-sm" style="color: black;">Create Specification</button>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <input type="hidden" class="form-control" id="action" name="action" value="ViewItem">
                                                <a href="<?= site_url('tender/viewspec/' . $result['Tenderid']) ?>">
                                                    <button type="button" class="btn btn-warning btn-sm">View Specification</button>
                                                </a>
                                            </div>     
                                            <div class="row g-3" style="margin-top: 5px">

                                                <div class="col-md-6">
                                                    <a href="<?= site_url('tender/createcostestimate/' . $result['Tenderid']) ?>">
                                                        <button type="button" class="btn btn-success btn-sm" style="color: black;">Create Cost Estimate</button>
                                                    </a>
                                                </div>   
                                                <div class="col-md-6">
                                                    <a href="<?= site_url('tender/viewcreatecostestimate/' . $result['Tenderid']) ?>">
                                                        <button type="button" class="btn btn-warning btn-sm" >View Cost Estimate</button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <a href="<?= site_url('tender/prizeSchedule/' . $result['Tenderid']) ?>">
                                                        <button type="button" class="btn btn-success btn-sm" style="color: black; margin-left: 5px;">Create Price List</button>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">  

                                                    <a href="<?= site_url('tender/ViewprizeSchedule' . $result['Tenderid']) ?>">
                                                        <button type="button" class="btn btn-warning btn-sm" >View Price List</button>
                                                    </a>
                                                </div> 

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                                
                            <table class="table table-bordered border-primary">
                            <thead style="text-align: center; vertical-align: middle;">
                                <tr>
                                    <th scope="col">Request ID</th>
                                     <th scope="col">Description</th>
                                    <th scope="col">Request Camp</th>
                                    <th scope="col">Request Date</th>
                                    <th scope="col">View Details</th>

                                </tr>
                            </thead>
                            <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($listr as $key => $resultr) {
                                            ?>
                                    <tr>
                                        <td><?= $resultr['RequestID'] ?></td>
                                        <td><?= $resultr['Description'] ?></td>
                                        <td><?= $resultr['ReqDate'] ?></td>
                                        <td><?= $resultr['CName'] ?></td>                                      
                                        <td><a class="btn btn-primary" href="<?= site_url('tender/viewreqItem/' . $resultr['Tenderid']) ?>">View More</a></td>
                             

                                    </tr>                                                                    
                                            <?php
                                            $i++;
                                        }
                                        ?>
                            </tbody>
                        </table>
                            </div>
                        </div>              
                    </div>

                </div>
            </div>
            <!-- End Table Variants -->
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #7070db; color: white;">Request Details</div>
                <div class="card-body">
                    <h6 class="card-title"></h6>   
                    <div class="row g-3" >
                        <table class="table table-bordered border-primary">
                            <thead style="text-align: center; vertical-align: middle;">
                                <tr>
                                    <th scope="col">Request ID</th>
                                     <th scope="col">Description</th>
                                    <th scope="col">Request Camp</th>
                                    <th scope="col">Request Date</th>
                                    <th scope="col">View Details</th>

                                </tr>
                            </thead>
                            <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($listr as $key => $resultr) {
                                            ?>
                                    <tr>
                                        <td><?= $resultr['RequestID'] ?></td>
                                        <td><?= $resultr['Description'] ?></td>
                                        <td><?= $resultr['ReqDate'] ?></td>
                                        <td><?= $resultr['CName'] ?></td>                                      
                                        <td><a class="btn btn-primary" href="<?= site_url('tender/viewreqItem/' . $resultr['Tenderid']) ?>">View More</a></td>
                             

                                    </tr>                                                                    
                                            <?php
                                            $i++;
                                        }
                                        ?>
                            </tbody>
                        </table>
                        <!-- End of the Status table -->
                    </div>
                </div>   
            </div>
        </div>
    </div>           
</main>
