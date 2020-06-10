<?php
declare(strict_types=1);


namespace MiroslavSapic\DB\Interfaces;


use MiroslavSapic\DB\Constants\OutputType;

interface Database
{
    public function select(string $query, array $bindValues = null, int $outputType = OutputType::OBJECT);

    public function val(string $query, array $bindValues = null);

    public function col(string $query, array $bindValues = null);

    public function row(string $query, array $bindValues = null, int $outputType = OutputType::OBJECT);

    public function insert(string $tableName, array $dataMap, array $format = null);

    public function update(string $tableName, array $dataMap, array $whereMap, array $dataFormat = null, array $whereFormat = null);

    public function delete(string $tableName, array $whereMap);

    public function exec(string $query, array $bindValues = null);

    public function insertId();
}