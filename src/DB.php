<?php


namespace MiroslavSapic\DB;


use MiroslavSapic\DB\Constants\OutputType;
use MiroslavSapic\DB\Interfaces\Database;
use PDO;

final class DB implements Database
{
    private $pdo;

    private function __construct(PDO $pdoInstance)
    {
        $this->pdo = $pdoInstance;
    }

    public static function fromPdo(PDO $pdoInstance): self
    {
        return new static($pdoInstance);
    }

    public static function fromDsn(PdoDsn $pdoDsn): self
    {
        $pdo = new PDO($pdoDsn->getDsn(), $pdoDsn->getUsername(), $pdoDsn->getPassword(), $pdoDsn->getOptions());

        return new static($pdo);
    }

    public function select(string $query, array $bindValues = null, int $outputType = OutputType::OBJECT)
    {
        // TODO: Implement select() method.
    }

    public function val(string $query, array $bindValues = null)
    {
        // TODO: Implement val() method.
    }

    public function col(string $query, array $bindValues = null)
    {
        // TODO: Implement col() method.
    }

    public function row(string $query, array $bindValues = null, int $outputType = OutputType::OBJECT)
    {
        // TODO: Implement row() method.
    }

    public function insert(string $tableName, array $dataMap, array $format = null)
    {
        // TODO: Implement insert() method.
    }

    public function update(string $tableName, array $dataMap, array $whereMap, array $dataFormat = null, array $whereFormat = null)
    {
        // TODO: Implement update() method.
    }

    public function delete(string $tableName, array $whereMap)
    {
        // TODO: Implement delete() method.
    }

    public function exec(string $query, array $bindValues = null)
    {
        // TODO: Implement exec() method.
    }

    public function insertId()
    {
        // TODO: Implement insertId() method.
    }
}