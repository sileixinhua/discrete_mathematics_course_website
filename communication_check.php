<?php  
    if(isset($_POST["submit"]) && $_POST["submit"] == "提交")  
    {  
        $topic = $_POST["topic"];  
        $content = $_POST["content"];

        if($topic == "" || $content == "")  
        {  
            echo "<script>alert('请输入标题和内容！'); history.go(-1);</script>";  
        }  
        else  
        {    
            mysql_connect("localhost","root","root");   
            mysql_select_db("math");  
            mysql_query("set names 'utf-8'"); 
            $sql = "select topic from communication where topic = '$_POST[topic]'"; 
            $result = mysql_query($sql);    
            $num = mysql_num_rows($result); 
            if($num)   
            {  
                echo "<script>alert('已有此话题存在'); history.go(-1);</script>";  
            }  
            else   
            {  
                $sql_insert = "insert into communication (topic,content,time) values('$_POST[topic]','$_POST[content]',now())";  
                $res_insert = mysql_query($sql_insert);  
                //$num_insert = mysql_num_rows($res_insert);  
                if($res_insert)  
                {  
                    echo "<script>alert('留言成功！'); history.go(-1);</script>";  
                }  
                else  
                {  
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                }  
            }    
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
?>  