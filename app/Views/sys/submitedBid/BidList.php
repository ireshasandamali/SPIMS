<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <div class="container" style=" background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%); padding: 10px;  border-radius: 10px;">        
         <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
           <ol class="breadcrumb">
               <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                <li class="breadcrumb-item"><a href="index.html">Submitted Bid</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Submitted Bit List</li>
            </ol>
        </nav>    
    </div><!-- End Page Title -->
    
        <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Submited Bit List</div>
            <div class="card-body">
                <h5 class="card-title"></h5>           
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="border: 2px solid  #ccd9ff; border-radius: 0;">
                            <div class="card-body">
                                <h5 class="card-title"></h5>

                            </div>
                        </div>
                    </div>

                    <!-- Table Variants -->
                   
                        <!-- End Table Variants -->
                         <div class="table-responsive">
                        
                    <table class="table">
                    <thead style="vertical-align: middle;">
                                        <tr>
                                            <th scope="col" class="col">Tender No</th>
                                            <th scope="col" class="col">Description</th>
                                            <th scope="col" class="col-2">Bidding Opening Date</th>
                                            <th scope="col" class="col">Company Name</th>
                                            <th scope="col" class="col">Status</th>
                                            <th scope="col" class="col"></th>                           
                                        </tr>
                                    </thead>
                                    <tbody  style="vertical-align: middle;">
                                        <?php
                                        $i = 1;
                                        foreach ($lista as $key => $resulta) {
                                            ?>
                                            <tr>
                                                <td style="font-size: 14px;">STF/LOG/C/<?= $resulta['TId'] ?> </td>
                                                <td style="font-size: 14px;"><?= $resulta['Description'] ?> </td>
                                                <td style="font-size: 14px;"><?= $resulta['BOpen'] ?></td> 
                                                <td>
                                                    <select id="UserId" class="form-select" name="UserId">
                                                            <option value="" selected="">...</option>
                                                            <?php foreach ($supplier_list as $key => $result) { ?>
                                                                <option value="<?= $result['UserId'] ?>"><?= $result['UserId'] ?></option>
                                                             <?php } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                     <?php
                                                        $Odate = $resulta['BOpen'];
                                                        $disabled = null;
                                                        $cdate = date('Y-m-d h:i');
                                                        //this change later
                                                        if ($Odate <= $cdate) {
                                                            $disabled = 'disabled';
                                                        }
                                                        ?>
                                                    <button class="btn btn-primary <?= $disabled ?>" type="button">Open</button></td>            
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

</main>