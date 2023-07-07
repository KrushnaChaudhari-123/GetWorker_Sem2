
<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive HTML Table With Pure CSS - Web Design/UI Design</title>
    <link rel="stylesheet" href="./css/workerlist.css">
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css2a/EmployerProfile1.css" />
</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>Available Workers</h1>
            
            
        </section>
        <?php
                                $con = mysqli_connect("localhost", "root", "", "job");
                                $sql = "select * from jobseeker_reg where WorkType= 'Construction'";




                                $result = mysqli_query($con, $sql);


                                //var_dump($result);
                                
                                // Loop through each records
                                while ($row = mysqli_fetch_array($result)) {
                                    $Name = $row['JobSeekerName'];
                                    $City = $row['City'];
                                    $Mobile = $row['Mobile'];

                                    $Experience = $row['Experience'];
                                    $Availability = $row['Availability'];


                                    ?>
                                    
                                        <?php if ($row['Availability'] == 'Yes'): ?>

                                            <td class="style3">
                                                <?php echo $row['Availability']; ?>
                                            </td>
                                        <?php else: ?>

                                            <td class="style3">
                                                <?php echo $row['Availability_Date']; ?>
                                            </td>

                                        <?php endif; ?>

                                    </tr>
                                    <?php
                                }
                                // Retrieve Number of records returned
                                $records = mysqli_num_rows($result);
                                ?>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Worker Name </th>
                        <th> City </th>
                        <th> Mobile Number </th>
                        <th> Experience </th>
                        <th> Availability </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        
                        <td> <?php echo $Name; ?> </td>
                        <td> <?php echo $City; ?> </td>                       
                        <td> <strong> <?php echo $Mobile; ?></strong></td>
                        <td>  <?php echo $Experience; ?> ?> </td>
                        <td> <?php echo $City; ?> </td>
                    </tr>
                    <!-- <tr>
                        <td> 2 </td>
                        <td><img src="images/Jeet Saru.jpg" alt=""> Jeet Saru </td>
                        <td> Kathmandu </td>
                        <td> 27 Aug, 2023 </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$5350.50</strong> </td>
                    </tr>
                    <tr>
                        <td> 3</td>
                        <td><img src="images/Sonal Gharti.jpg" alt=""> Sonal Gharti </td>
                        <td> Tokyo </td>
                        <td> 14 Mar, 2023 </td>
                        <td>
                            <p class="status shipped">Shipped</p>
                        </td>
                        <td> <strong>$210.40</strong> </td>
                    </tr>
                    <tr>
                        <td> 4</td>
                        <td><img src="images/Alson GC.jpg" alt=""> Alson GC </td>
                        <td> New Delhi </td>
                        <td> 25 May, 2023 </td>
                        <td>
                            <p class="status delivered">Delivered</p>
                        </td>
                        <td> <strong>$149.70</strong> </td>
                    </tr>
                    <tr>
                        <td> 5</td>
                        <td><img src="images/Sarita Limbu.jpg" alt=""> Sarita Limbu </td>
                        <td> Paris </td>
                        <td> 23 Apr, 2023 </td>
                        <td>
                            <p class="status pending">Pending</p>
                        </td>
                        <td> <strong>$399.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 6</td>
                        <td><img src="images/Alex Gonley.jpg" alt=""> Alex Gonley </td>
                        <td> London </td>
                        <td> 23 Apr, 2023 </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$399.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 7</td>
                        <td><img src="images/Alson GC.jpg" alt=""> Jeet Saru </td>
                        <td> New York </td>
                        <td> 20 May, 2023 </td>
                        <td>
                            <p class="status delivered">Delivered</p>
                        </td>
                        <td> <strong>$399.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 8</td>
                        <td><img src="images/Sarita Limbu.jpg" alt=""> Aayat Ali Khan </td>
                        <td> Islamabad </td>
                        <td> 30 Feb, 2023 </td>
                        <td>
                            <p class="status pending">Pending</p>
                        </td>
                        <td> <strong>$149.70</strong> </td>
                    </tr>
                    <tr>
                        <td> 9</td>
                        <td><img src="images/Alex Gonley.jpg" alt=""> Alson GC </td>
                        <td> Dhaka </td>
                        <td> 22 Dec, 2023 </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$249.99</strong> </td>
                    </tr> -->

                                <?php
                                // Close the connection
                                mysqli_close($con);
                                ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>