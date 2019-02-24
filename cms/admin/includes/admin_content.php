            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        
                        <?php
                        
                        
                        $users = User::find_all_users();
                        
                        foreach($users as $user){
                            
                            echo $user->username."<br>";
                            
                        }
                        
                        
                        /*while($row = mysqli_fetch_assoc($result)){
                            
                            echo $row['username']."<br>";
                            
                        }*/
                        
                        /*$found_user = User::find_user_by_id(2);
                        
                        $user = User::instantiation($found_user);
                        
                        
                        
                        echo $user->id;
                        echo "<br>";
                        echo $user->first_name;
                        echo $user->last_name;*/
                        ?>
                        
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>