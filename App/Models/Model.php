<?php
    namespace App\Models;
    use App\Database\DB;

    class Model extends DB{
        public static function getAll(){
            $db = self::connect();
            $query = $db->query("SELECT * FROM " . static::$table);
            return $query->fetchAll();
        }

        public static function create($data){
            $db = self::connect();
            $sql = "INSERT INTO " . static::$table . " (";
            $columns = implode(",", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));
            $sql .= $columns . ") VALUES (" . $values . ")";
            $query = $db->prepare($sql);
            return $query->execute($data);
        }

        public static function delete($id){
            $db = self::connect();
            $query = $db->prepare("DELETE FROM " . static::$table . " WHERE id = :id");
            return $query->execute(['id' => $id]);
        }

        public static function update($id, $data){
            $db = self::connect();
            $sql = "UPDATE " . static::$table . " SET ";
            foreach($data as $key => $value){
                $sql .= $key . " = :" . $key . ",";
            }
            $sql = rtrim($sql, ",");
            $sql .= " WHERE id = :id";
            $data['id'] = $id;
            $query = $db->prepare($sql);
            return $query->execute($data);
        }
    }
?>