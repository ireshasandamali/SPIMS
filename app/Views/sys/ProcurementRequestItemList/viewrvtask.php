<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-7">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW NEW PROCUREMENT ITEM</h1>       
            </div>
            <div class="col-5">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">Procurement Item</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Procurement Item</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div>
        <!-- End Page Title -->

        <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Procurement Item List</div>
            <div class="card-body">

                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <?= form_open('ProcurementRequestItemList/viewrvtask') ?>
                    <div class="row g-3">                              
                       <div class="col-md-3">
                            <label for="entries" class="form-label">Vote </label>
                        </div>
                        <div class="col-md-3">
                            <label for="entries" class="form-label">Vote Description </label>
                        </div>
                        <div class="col-md-3">
                            <label for="entries" class="form-label">Item Category </label>
                        </div>
                        <div class="col-md-3">
                            <label for="entries" class="form-label">Item Name </label>
                        </div>
                        </div>
                     <div class="row g-3">     
                          <div class="col-md-3">
 <select style="border-radius: 40px;border: 1px solid  #000066"  id="Vote" class="form-select" name="Vote">
                            <option value="" selected=""></option>
                            <option value="1201" <?php
                            if (set_value('Vote') == '1201') {
                                echo 'selected';
                            }
                            ?> > 1201</option>
                            <option value="1203" <?php
                            if (set_value('Vote') == '1203') {
                                echo 'selected';
                            }
                            ?> >1203</option>
                            <option value="1204" <?php
                            if (set_value('Vote') == '1204') {
                                echo 'selected';
                            }
                            ?> >1204</option> 
                            <option value=" 1205" <?php
                            if (set_value('Vote') == ' 1205') {
                                echo 'selected';
                            }
                            ?> > 1205</option>
                            <option value="2102" <?php
                            if (set_value('Vote') == '2102') {
                                echo 'selected';
                            }
                            ?> >2102</option>
                            <option value="2103" <?php
                            if (set_value('Vote') == '2103') {
                                echo 'selected';
                            }
                            ?> > 2103</option>
                            <option value="2509" <?php
                            if (set_value('Vote') == '2509') {
                                echo 'selected';
                            }
                            ?> >2509</option>
                        </select>
                       <span class="text-danger"><?= service('validation')->getError('Vote') ?></span>
                        </div>
                        <div class="col-md-3">
                            <input style="border-radius: 40px;border: 1px solid  #000066" type="text" class="form-control" id="Description" name="Description" placeholder="Vote Discription">
                            <span class="text-danger"><?= service('validation')->getError('Description') ?></span>
                    </div>
                        <div class="col-md-3">
                            <input style="border-radius: 40px;border: 1px solid  #000066" type="text" class="form-control" id="ICatergory" name="ICatergory" placeholder="Item Category">
                            <span class="text-danger"><?= service('validation')->getError('ICatergory') ?></span>
                    </div>
                        <div class="col-md-3">
                            <input style="border-radius: 40px;border: 1px solid  #000066" type="text" class="form-control" id="ItemName" name="ItemName" placeholder="Item Name">
                            <span class="text-danger"> <?= service('validation')->getError('ItemName') ?></span>
                        </div>
                        
                       
                    </div>
                    <br><br>
                    <div class="row g-3">                              
                        <!-- check -->
                        <!-- Add this code before the table -->

                        <div class="col-md-1">
                            <label for="entries" class="form-label">Show </label>
                        </div>
                        <div class="col-md-2">
                            <select style="border-radius: 40px;border: 1px solid  #000066" id="entries" class="form-select" onchange="changeEntries(this.value)">
                                <option value="5">5</option>
                                <option value="10" selected>10</option>
                                <option value="15">15</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                           <div class="col-md-3">
                            <label for="entries" class="form-label">Entries </label>
                        </div>
                        <div class="col-md-3">
                            <button style="border-radius: 40px;border: 1px solid  #000066"  type="submit" class="btn btn-primary">
                                Search
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbtJREFUSEvV1UuITnEYx/HPkJUMKYmd2dq4bS0kIxuXmoRSQkmR5JZZDKVoynWmJoqkRBaKjShZYCe3srOxsnArYmEWM/6P/m+deZvznqP3nYX/6jyn83++z/V3ukzx6Zpi/8oA83AYy7EkB/EaL3AeX+oGNhlgO4Yxu8TJN+zE/TqQZsB+DOWLdzGCJ9lenSLfh43Z3obbVZAioAfvMS2X51zJ5RPp/Un8wiJ8bgUpAiLavbiDLRWRPcRaDOBUXcBHLMhNfVsB6MUjvMSKuoBRzEgRTU+RjVUA5uIrfrQYhr8uiiX6iZmYlXoQz61ON77jE+bXzeAdFmMlnlcAVuXpeow1dQGncTz14B42VQCi/tGH2JmbdQEL8SH34QjOllwcxFHEZi/7lz2Ib3fgemHRLuFZtjdgD9Zl+0Lel5YDMZlUbE7jegVzSqKLybmcs4i+HcODskzKxC4m41AWu6WpN7/xCk9xLYtdCF9jB0K7DmC8GdSOXK9vEryLaXQPdhIQvm5ha8HpGfQXIe1kEH5i8wPSV3AaJdzdsNsFNPxcxa5sTMiiU4CQ+BvpX/EmSc0Eme8UoHTf/n/AH9BmShm5CxJHAAAAAElFTkSuQmCC"/>
                            </button>
                        </div>
                        <div class="col-md-3">
                            <a style="border-radius: 40px;border: 1px solid  #000066" type="reset" class="btn btn-secondary"href="<?= site_url('ProcurementRequestItemList/view') ?>">
                                Reset
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAcpJREFUSEu11T+oj3EUx/HXTflvQaGITSiEJN2FhcLAouRvslHMysJsuQw20l1uXVEGBhkkoQwiBiEzBixMnqPz+/X0cJ/f98n9faen5/v9nvc553PO+Y4Y8hoZsn1dAPNwBSe6OFUKWIM7WIlZ0w04mZ7PTsPf8BaPMIFnbcCSCI7iGnqApr0AncbLf4FKAHFvHSaxCqHFrtRiP2bgFw7idhNSCoh78zNVx2tGluEqAvQDG/C+DukCaEv1OA7hIXYOAzAHH7AkAQH6s7pEMIZeeq7jTCOkc7icKQvROwHCeP9S3o2mq0O24Hkl9puqfNd2BXxPketOh6gLaj8WVU58TrH7/5sp+oKFiMNfa5dLAFFlcS5sLJ4qgqfYim2I794qSVH0yquqR55g+1SAmzhcNc9FXGiIOEjk87hUNWMUQH8gNlO0B3czl8vxs634a3tRpp8yNbtxv03kmC2juFEry0Gc8PpYaaOtyAm5FLdwqiF4HRbVEsYPpMCbqhS/K+nk9XiQIUfpRQNFjb/AzGqobcSOHHDxRnzEXrxuhtrWyasRM2bzgPw8xpEcFX8dLRkV+3A2X7OYnnPT03vT9eAMErh1vySC/wL8BrLNURk1ZlSoAAAAAElFTkSuQmCC"/>
                            </a>
                        </div> 

                    </div>
                    <!-- End Multi Columns Form -->
                    <?= form_close() ?>

                </div>
            </div>
        </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <!-- Table Variants -->
                        <table class="table" id="ItemTable">
                            <thead>
                                <tr>
                                    <th scope="col">Item No</th>
                                    <th scope="col">Vote</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Item Category</th>
                                    <th scope="col">Item Name</th>
                                      <?php if((session()->get('UserType'))=='Procurement Planning Officer'){ ?>
                                    <th scope="col">Action</th>
                                      <?php }?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($list as $key => $result) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $i ?> </th>
                                        <td><?= $result['Vote'] ?></td>
                                        <td><?= $result['Description'] ?></td>
                                        <td><?= $result['ICatergory'] ?></td>
                                        <td><?= $result['ItemName'] ?></td>
                                         <?php if((session()->get('UserType'))=='Procurement Planning Officer'){ ?>
                                        <td>  
                                           
                                            <!-- delete confirmation message -->
                                            <input type="hidden" name="id" value="<?= $result['id'] ?>">
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $result['id'] ?>" onclick="confirmDeleteModal('<?= $result['id'] ?>')">Delete</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal<?= $result['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?= $result['id'] ?>" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel<?= $result['id'] ?>">Confirm Deletion</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body" id="msg<?= $result['id'] ?>"></div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <a class="btn btn-danger" id="confirmDelete<?= $result['id'] ?>" href="<?= site_url('ProcurementRequestItemList/removeItem/' . $result['id']) ?>">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                          <?php }?>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>

                            </tbody>
                        </table>
                        <!-- End Table Variants -->

                    </div>
                </div>
                </section>
                </main>

                <script>
                    function getCurrentTime() {
                        const now = new Date();
                        const timeString = now.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});
                        return timeString;
                    }


                    function confirmDeleteModal(Itemid) {
                        // Construct the ID of the modal and its related elements using the vote ID
                        var modalId = "#deleteModal" + Itemid;
                        var msgId = "#msg" + Itemid;
                        var confirmDeleteId = "#confirmDelete" + Itemid;

                        // Set the item ID in the modal body
                        $(msgId).html("Are you sure you want to delete item ID: " + Itemid + "?");

                        // Set the delete button's click event handler
                        $(confirmDeleteId).off("click").on("click", function () {
                            // Perform the deletion logic here
                            console.log("Deleting item ID: " + Itemid);

                            // Close the modal
                            var deleteModal = bootstrap.Modal.getInstance(document.getElementById(modalId.substring(1)));
                            deleteModal.hide();

                          
                        });
                    }

                </script>



                <script>
                    function changeEntries(entries) {
                        // Get all table rows
                        var rows = document.querySelectorAll('#ItemTable tbody tr');

                        // Hide all rows
                        rows.forEach(row => {
                            row.style.display = 'none';
                        });

                        // Show the specified number of entries
                        for (var i = 0; i < entries; i++) {
                            if (rows[i]) {
                                rows[i].style.display = '';
                            }
                        }
                    }
                </script>