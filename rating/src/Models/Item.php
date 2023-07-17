<?php
class Item
{
    private $pdo;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function getAll()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM items");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function getById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM items WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
    
    public function add($name, $description)
    {
        $stmt = $this->pdo->prepare("INSERT INTO items (name, description) VALUES (:name, :description)");
        $stmt->execute(['name' => $name, 'description' => $description]);
    }
    
    public function update($id, $name, $description)
    {
        $stmt = $this->pdo->prepare("UPDATE items SET name = :name, description = :description WHERE id = :id");
        $stmt->execute(['id' => $id, 'name' => $name, 'description' => $description]);
    }
    
    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM items WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}