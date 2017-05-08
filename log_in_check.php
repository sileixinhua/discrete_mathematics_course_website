<?php  
    if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")  
    {  
        $user = $_POST["user_name"];  
        $psw = $_POST["password"];  
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
        }  
        else  
        {  
            mysql_connect("localhost","root","root");  
            mysql_select_db("math");  
            mysql_query("set names 'utf-8'");  
            $sql = "select user_name,password from user where user_name = '$_POST[user_name]' and password = '$_POST[password]'";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
                $row = mysql_fetch_array($result); 
                echo "<script>alert('用户登陆成功！');history.go(-1);</script>";  
            }  
            else  
            {  
                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
  
?> 