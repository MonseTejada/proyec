<?php

interface Select {
    public const SELECT_MODEL = '../../models/request/select_models.php';
    public function select($query, $config);
}

?>