<?php
class AuthModel extends DB
{
   function register($name, $email, $password)
   {
      $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";
      return $this->pdo_execute_lastInsertID($sql);
   }

   function getOne($id = 0, $email = '')
   {
      $sql = "SELECT * FROM users WHERE 1";
      if ($id > 0) {
         $sql .= " AND id = '$id'";
      }
      if ($email !== '') {
         $sql .= " AND email = '$email'";
      }
      if ($this->pdo_query_one($sql)) {
         return $this->pdo_query_one($sql);
      } else {
         return [];
      }
   }

   function getAll($keyword = '')
   {
      $sql = "SELECT * FROM users WHERE 1";
      if (!empty($keyword)) {
         $sql .= " AND name like '%" . $keyword . "%' OR email like '%" . $keyword . "%' OR tel like '%" . $keyword . "%'";
      }
      return $this->pdo_query($sql);
   }
}
