<?php
include "includes/admin_header.php";

?>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php   
        include "includes/admin_navigation.php";
        ?>        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            welcome admin
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">
                           <?php 
                            //BElow code is to add category
                            insert_categories();
                            ?>
                            
<!--                        below form is to add category-->
                       
                       
                        <form action="" method="post">
                            <div class="form-group">
                               <label for="cat-title">Add category</label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add category">
                            </div>
                        </form>
                        
                        <?php   //UPDATE INCLUDE QUERY(CAT CHANGE KARREH H)
                            if(isset($_GET['edit'])){
                                $cat_id=$_GET['edit'];
                                include "includes/update_categories.php";
                            }
                            
                            ?>
                                       
                        </div>
                        
                        <div class="col-xs-6">
                            
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
<!--                                   find all category-->
                                <?php 
                                    
                                    findAllCategories();
                                
                                    ?>
                                    
<!--                                    will delete the cat-->
                                    <?php
                                    deleteCategories();
                                    
                                    ?>

                                </tbody>
                            </table>
                        
                        </div>
                     
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
                <!-- /#page-wrapper -->
<?php
include "includes/admin_footer.php";
?>