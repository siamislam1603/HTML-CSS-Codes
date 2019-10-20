<html>
    <head>
        <link rel="stylesheet" href="./css/mystylesheet.css"/>
    </head>
    <?php
        if(!empty($_POST)){
            $file='form.csv';
            $handle=fopen($file,'a');
            fputcsv($handle,$_POST);
            fclose($handle);
        }
    ?>
<body>
    <h1>Sign Up</h1>
    <h1>It's free and anyone can join</h1>
    <form action="" method="POST">
        <div id="firstName">
            <div>First Name:</div>
            <input type="" name="firstName" class="lg-input" placeholder="First name"/>
        </div>

        <div id="laststName">
            <div>Last Name:</div>
            <input type="" name="lastName" class="lg-input" placeholder="Last name"/>
        </div>

        <div id="email">
            <div>Your Email:</div>
            <input type="email" name="user_email" value="" class="lg-input" placeholder="E.g: example@email.com"/>
        </div>

        <div id="password">
            <div>New password:</div>
            <input type="password" name="user_password" value="" class="lg-input"/>
        </div>

        <div>
            <div>I am:</div>
            <select name="gender" class="lg-input">
                <option value="">Select Sex:</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div>
            <div>Birthday:</div>
            <?php
                echo "<select name='month' class='birthday'>
                    <option value=''>Month:</option>";
                for($i=1;$i<=12;$i++){
                    echo "<option value=".$i.">$i</option>";
                }
                echo "</select> ";

                echo "<select name='day' class='birthday'>
                    <option value=''>Day:</option>";
                for($i=1;$i<=31;$i++){
                    echo "<option value=".$i.">$i</option>";
                }
                echo "</select> ";

                echo "<select name='year' class='birthday'>
                    <option value=''>Year:</option>";
                for($i=1990;$i<=2019;$i++){
                    echo "<option value=".$i.">$i</option>";
                }
                echo "</select>";
            ?>
        </div>

        <form action="csvassignment.php" method="post" enctype="multipart/form-data">
        <input type="submit" value="Send" id="sendBtn"/>
        <input type="button" value="Show CSV" id="csvBtn" onclick="window.location.href='index2.php'" />
    </form>
</body>

</html>