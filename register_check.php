<?php  
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")  
    {  
        $user = $_POST["user_name"];  
        $psw = $_POST["password"];  
        $psw_confirm = $_POST["confirm"];
        $birthday = $_POST["birthday"];
        $email = $_POST["email"];
        $phone_number = $_POST["phone_number"];

        if($user == "" || $psw == "" || $psw_confirm == "" || $birthday == "" || $email == "" || $phone_number == "")  
        {  
            echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
        }  
        else  
        {  
            if($psw == $psw_confirm)  
            {  
                mysql_connect("localhost","root","root");   
                mysql_select_db("math");  
                mysql_query("set names 'utf-8'"); 
                $sql = "select user_name from user where user_name = '$_POST[user_name]'"; 
                $result = mysql_query($sql);    
                $num = mysql_num_rows($result); 
                if($num)   
                {  
                    echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
                }  
                else   
                {  
                    $sql_insert = "insert into user (user_name,password,birthday,email,phone_number) values('$_POST[user_name]','$_POST[password]','$_POST[birthday]','$_POST[email]','$_POST[phone_number]')";  
                    $res_insert = mysql_query($sql_insert);  
                    //$num_insert = mysql_num_rows($res_insert);  
                    if($res_insert)  
                    {  
                        echo "<script>alert('注册成功！'); history.go(-1);</script>";  
                    }  
                    else  
                    {  
                        echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                    }  
                }  
            }  
            else  
            {  
                echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
?>  