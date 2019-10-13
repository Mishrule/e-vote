<?php
    include_once('votedb.php');

    if(isset($_POST['show'])){
        $showProfileMSG = '';
        $profile_Limit = mysqli_real_escape_string($conn, $_POST['profile_Limit']);

        $showProfileSQL = "SELECT * FROM candidate_registration ORDER BY full_name ASC LIMIT $profile_Limit";
        $showProfileRESULT = mysqli_query($conn, $showProfileSQL);
            $showProfileMSG .='
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th data-field="sn">s/n</th>
                            <th data-field="image">Image</th>
                            <th data-field="name">Name</th>
                            <th data-field="accountNo">Account NO.</th>
                            <th data-field="position">Position</th>
                            <th data-field="form_">Form</th>
                            <th data-field="program">Program</th>
                            <th data-field="status">Status</th>
                            <th data-field="action">Action</th>
                        </tr>
                    </thead>
                     <tbody>
            ';
            $showProfileCount = 1;
        if(mysqli_num_rows($showProfileRESULT) > 0){
            while($showProfileROW = mysqli_fetch_array($showProfileRESULT)){
                $showProfileMSG .='
                    <tr>
                        <td>'.$showProfileCount++ .'</td>
                        <td><img class="responsive-img" style="width:50px;" src="images/'.$showProfileROW['image'].'"></td>
                        <td>'.$showProfileROW['full_name'].'</td>
                        <td>'.$showProfileROW['account_number'].'</td>
                        <td>'.$showProfileROW['position'].'</td>
                        <td>'.$showProfileROW['Form_class'].'</td>
                        <td>'.$showProfileROW['program'].'</td>
                        <td>'.$showProfileROW['status'].'</td>
                        <td><!--<button type="button" id="'.$showProfileROW['account_number'].'" name="'.$showProfileROW['account_number'].'" value="'.$showProfileROW['account_number'].'" class="teal waves-effect waves-light btn-floating pulse edit">Edit</button>&nbsp;-->
                        
                        <button type="button" id="'.$showProfileROW['account_number'].'" name="'.$showProfileROW['account_number'].'" value="'.$showProfileROW['account_number'].'" class=" btn btn-floating pulse delete">Del</button></td>
                    </tr>
                
                ';
            }
        }else{
            $showProfileMSG .='
                    <tr>
                        <td colspan="9"><marquee>SORRY NO STUDENT HAS REGISTERED YET</marquee></td>
                    </tr>
                
                ';
        }

         $showProfileMSG .='
            </tbody>
            </table>
         ';
        echo $showProfileMSG;
    }

    //=================================== SET LIMIT
     if(isset($_POST['selectLimit'])){
        $limitProfileMSG = '';
        $selectLimit = mysqli_real_escape_string($conn, $_POST['selectLimit']);

        $limitProfileSQL = "SELECT * FROM candidate_registration ORDER BY full_name ASC LIMIT $selectLimit";
        $limitProfileRESULT = mysqli_query($conn, $limitProfileSQL);
            $limitProfileMSG .='
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th data-field="sn">s/n</th>
                            <th data-field="image">Image</th>
                            <th data-field="name">Name</th>
                            <th data-field="accountNo">Account NO.</th>
                            <th data-field="position">Position</th>
                            <th data-field="form_">Form</th>
                            <th data-field="program">Program</th>
                            <th data-field="status">Status</th>
                            <th data-field="action">Action</th>
                        </tr>
                    </thead>
                     <tbody>
            ';
            $limitProfileCount = 1;
        if(mysqli_num_rows($limitProfileRESULT) > 0){
            while($limitProfileROW = mysqli_fetch_array($limitProfileRESULT)){
                $limitProfileMSG .='
                    <tr>
                        <td>'.$limitProfileCount++ .'</td>
                        <td><img class="responsive-img" style="width:50px;" src="images/'.$limitProfileROW['image'].'"></td>
                        <td>'.$limitProfileROW['full_name'].'</td>
                        <td>'.$limitProfileROW['account_number'].'</td>
                        <td>'.$limitProfileROW['position'].'</td>
                        <td>'.$limitProfileROW['Form_class'].'</td>
                        <td>'.$limitProfileROW['program'].'</td>
                        <td>'.$limitProfileROW['status'].'</td>
                        <td><!--<button type="button" id="'.$limitProfileROW['account_number'].'" name="'.$limitProfileROW['account_number'].'" value="'.$limitProfileROW['account_number'].'" class="teal waves-effect waves-light btn-floating pulse edit">Edit</button>&nbsp;-->
                        
                        <button type="button" id="'.$limitProfileROW['account_number'].'" name="'.$limitProfileROW['account_number'].'" value="'.$limitProfileROW['account_number'].'" class=" btn btn-floating pulse delete">Del</button></td>
                    </tr>
                
                ';
            }
        }else{
            $limitProfileMSG .='
                    <tr>
                        <td colspan="9"><marquee>SORRY NO STUDENT HAS REGISTERED YET</marquee></td>
                    </tr>
                
                ';
        }

         $limitProfileMSG .='
            </tbody>
            </table>
         ';
        echo $limitProfileMSG;
    }

      //=================================== PROFILE SEARCH
     if(isset($_POST['profileAction'])){


        $searchProfileMSG = '';
        // $profileLimits = mysqli_real_escape_string($conn, $_POST['profileLimits']);
        $profileSearch = mysqli_real_escape_string($conn, $_POST['profileSearch']);
        

        $searchProfileSQL = "SELECT * FROM candidate_registration WHERE account_number = '$profileSearch'";
        $searchProfileRESULT = mysqli_query($conn, $searchProfileSQL);
            $searchProfileMSG .='
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th data-field="sn">s/n</th>
                            <th data-field="image">Image</th>
                            <th data-field="name">Name</th>
                            <th data-field="accountNo">Account NO.</th>
                            <th data-field="position">Position</th>
                            <th data-field="form_">Form</th>
                            <th data-field="program">Program</th>
                            <th data-field="status">Status</th>
                            <th data-field="action">Action</th>
                        </tr>
                    </thead>
                     <tbody>
            ';
            $searchProfileCount = 1;
        if(mysqli_num_rows($searchProfileRESULT) > 0){
            while($searchProfileROW = mysqli_fetch_array($searchProfileRESULT)){
                $searchProfileMSG .='
                    <tr>
                        <td>'.$searchProfileCount++ .'</td>
                         <td><img class="responsive-img" style="width:50px;" src="images/'.$searchProfileROW['image'].'"></td>
                        <td>'.$searchProfileROW['full_name'].'</td>
                        <td>'.$searchProfileROW['account_number'].'</td>
                        <td>'.$searchProfileROW['position'].'</td>
                        <td>'.$searchProfileROW['Form_class'].'</td>
                        <td>'.$searchProfileROW['program'].'</td>
                        <td>'.$searchProfileROW['status'].'</td>
                        <td><!--<button type="button" id="'.$searchProfileROW['account_number'].'" name="'.$searchProfileROW['account_number'].'" value="'.$searchProfileROW['account_number'].'" class="teal waves-effect waves-light btn-floating pulse edit">Edit</button>&nbsp;-->
                        
                        <button type="button" id="'.$searchProfileROW['account_number'].'" name="'.$searchProfileROW['account_number'].'" value="'.$searchProfileROW['account_number'].'" class=" btn btn-floating pulse delete">Del</button></td>
                    </tr>
                
                ';
            }
        }else{
            $searchProfileMSG .='
                    <tr>
                        <td colspan="9"><marquee>SORRY NO STUDENT HAS REGISTERED YET</marquee></td>
                    </tr>
                
                ';
        }

         $searchProfileMSG .='
            </tbody>
            </table>
         ';
        echo $searchProfileMSG;
    }

    //===============================| DELETE VOTER
    if(isset($_POST['actionDel'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $delStudentSQL = "DELETE FROM candidate_registration WHERE account_number = '$id'";
        $delStudentRESULT = mysqli_query($conn, $delStudentSQL);

        if($delStudentSQL){
            echo '<p>'.$id.' DELETED SUCCESSFULLY</p>';
        }else{
            echo '<p>'.$id.' FAIL TO DELETE</p>';
        }
    }
?>