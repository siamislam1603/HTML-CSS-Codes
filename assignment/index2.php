<html>
<body>
    <table width ="100%" border="1px">
            <thead>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>New Password</th>
                <th>Sex</th>
                <th>Birth-Month</th>
                <th>Birth-Day</th>
                <th>Birth-Year</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $handle=fopen('form.csv','r');
                    $i=1;
                    if($handle!==false){
                        while(!feof($handle)){
                            $data=fgetcsv($handle,1000,',');                           
                            if($data[0]||$data[1]||$data[2]||$data[3]||$data[4]||$data[5]||$data[6]||$data[7]){
                                ++$i;
                                if($i%2===0){
                                    $color="#F2F2F2";
                                }
                                else{
                                    $color="#FFFFFF";
                                }
                                echo "<tr style='background:".$color.";'>
                                    <td>".$data[0]."</td>
                                    <td>".$data[1]."</td>
                                    <td>".$data[2]."</td>
                                    <td>".$data[3]."</td>
                                    <td>".$data[4]."</td>
                                    <td>".$data[5]."</td>
                                    <td>".$data[6]."</td>
                                    <td>".$data[7]."</td>
                                    </tr>";
                                
                            }
                        }
                        fclose($handle);
                    }
                ?>
            </tbody>
            </table>

    </body>
</html>