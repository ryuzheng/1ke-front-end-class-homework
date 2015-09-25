<?php
header("Content-type:text/html; charset=UTF-8");
  //判断信息是否填写完全
  if (!isset($_POST["username"])||empty($_POST["username"])
  ||!isset($_POST["psw"])||empty($_POST["psw"])
  ||!isset($_POST["mail"])||empty($_POST["mail"])
  ||!isset($_POST["website"])||empty($_POST["website"])
  ||!isset($_POST["sex"])||empty($_POST["sex"])
  ||!isset($_POST["psw"])||empty($_POST["psw"])
  ||$_POST["terms"]!="true"||$_POST["policy"]!="true"){
    echo "注册信息填写不完整";
    return;
  }

  echo "恭喜你注册成功！"."<br>"."用户名是: ".$_POST["username"]." 密码是: ".$_POST["psw"]." 邮箱是: ".$_POST["mail"].$_POST["website"]." 性别是：".$_POST["sex"];
 ?>
