<?php

class Pagination {

    private const SELECT_MODELS = '../../models/request/select_models.php';

    private const BASE_QUERY = 'SELECT count(*) ';

    private $page;
    private $limit;
    private $data;
    private $limitQuery;

    function __construct($page, $limit) {
        $this->page = $page;
        $this->limit = $limit;
        $this->data = [
            'num_of_rows' => 0,
            'num_of_pages' => 0,
            'book' => [],
            'start' => 0
        ];
        $this->limitQuery = '';
    }

    public function update($table, $config) {
        $this->data['num_of_rows'] = $this->countNumOfRows($table, $config);
        $this->pagination();
    }

    public function pagination() {
        if ($this->data['num_of_rows'] > 0) {
            $this->data['num_of_pages'] = $this->calcNumOfPages($this->data['num_of_rows']);
            $this->data['book'] = $this->createBook($this->data['num_of_pages']);
            $this->data['start'] = $this->calcStart();
            $this->limitQuery = 'LIMIT '.$this->data['start'].', '.$this->limit;
        }
    }

    public function countNumOfRows($table, $config) {
        require_once self::SELECT_MODELS;
        $this->select = new SelectModels();
        $result = $this->select->selectBy(self::BASE_QUERY.$table, $config);
        return (!is_null($result)) ? $result[0] : 0;
    }

    public function calcNumOfPages($numOfRows) {
        return ceil(($numOfRows / $this->limit));
    }

    public function createBook($numOfPages) {
        $book = [];
        for ($i = 0; $i < $numOfPages; $i++) {
            $book[$i] = $i+1;
        }
        return $book;
    }

    public function calcStart() {
        return ($this->page - 1) * $this->limit;
    }

    public function setNumOfRows($numOfRows) {
        $this->data['num_of_rows'] = $numOfRows;
    }

    public function getNumOfRows() {
        return $this->data['num_of_rows'] ;
    }

    public function getStart() {
        return $this->data['start'] ;
    }

    public function getData() {
        return $this->data;
    }

    public function getLimitQuery() {
        return $this->limitQuery;
    }

}

?>
