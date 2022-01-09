<?php

include_once '../utils/MySQLUtils.php';

class Product {

    private int $productId;
    private string $productName;
    private string $productDesc;
    private float $priceCurrent;
    private string $img;
    private float $priceSale;
    private int $category;

    public function __construct($productName, $productDesc, $priceCurrent, $img, $priceSale, $category, $productId = 0) {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productDesc = $productDesc;
        $this->priceCurrent = $priceCurrent;
        $this->img = $img;
        $this->priceSale = $priceSale;
        $this->category = $category;
    }


    public function getProductId() {
        return $this->productId;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function setProductName($productName) {
        $this->productName = $productName;
    }

    public function getProductDesc() {
        return $this->productDesc;
    }

    public function setProductDesc($productDesc) {
        $this->productDesc = $productDesc;
    }

    public function getPriceCurrent() {
        return $this->priceCurrent;
    }

    public function setPriceCurrent($priceCurrent) {
        $this->priceCurrent = $priceCurrent;
    }

    public function getImg() {
        return $this->img;
    }

    public function setImg($img) {
        $this->img = $img;
    }

    public function getPriceSale() {
        return $this->priceSale;
    }

    public function setPriceSale($priceSale) {
        $this->priceSale = $priceSale;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function insertProduct() {
        $dbCon = new MySQLUtils();
        $query = "INSERT INTO product (product_name, product_info, product_price, product_img, product_price_discount, category) 
        VALUES (:product_name, :product_desc, :price_current, :img, :price_sale, :category_id)";
        $param = [
            ":product_name" => $this->productName,
            ":product_desc" => $this->productDesc,
            ":price_current" => $this->priceCurrent,
            ":img" => $this->img,
            ":price_sale" => $this->priceSale,
            ":category_id" => $this->category
        ];
        $dbCon->insertData($query, $param);
        $dbCon->disconnect();
    }

    public function getAllProduct() {
        $dbCon = new MySQLUtils();
        $query = "select * from product";
        $data = $dbCon->getData($query);
        $dbCon->disconnect();
        return $data;
    }

    public function getProductById() {
        $dbCon = new MySQLUtils();
        $query = "select * from product where id = :id";
        $param = [":id" => $this->productId];
        $data = $dbCon->getData($query, $param);
        $dbCon->disconnect();
        return $data;
    }

    public function updateProduct() {
        $dbCon = new MySQLUtils();
        $query = "UPDATE product set
            product_name = :product_name,
            product_info = :product_desc, 
            product_price = :price_current, 
            product_img = :img, 
            product_price_discount = :price_sale, 
            category  = :category_id
            where id = :id";
        $param = [
            ":product_name" => $this->productName,
            ":product_desc" => $this->productDesc,
            ":price_current" => $this->priceCurrent,
            ":img" => $this->img,
            ":price_sale" => $this->priceSale,
            ":category_id" => $this->category,
            ":id" => $this->productId
        ];
        $count = $dbCon->updateData($query, $param);
        $dbCon->disconnect();
        return $count;
    }

    public function deleteProduct() {
        $dbCon = new MySQLUtils();
        $query = "delete from product where id = :id";
        $param = [":id" => $this->productId];
        $count = $dbCon->deleteData($query, $param);
        $dbCon->disconnect();
        return $count;
    }

}
