<?php

namespace Viethoang\Query;

use http\QueryString;
use Viethoang\Query\Data;
use Viethoang\Query\QueryBuilder\QueryBuilder;

abstract class Model extends Data
{
    public $query;
    protected $table = '';

    public function __construct()
    {

        $this->query = new QueryBuilder($this->table);

    }

    public function __call(string $name, array $arguments)
    {
        return $this->{"pre" . $name}(...$arguments);

    }

    public static function __callStatic(string $name, array $arguments)
    {
        // TODO: Implement __callStatic() method.

        return (new static)->{"pre" . $name}(...$arguments);
    }

    public function preselect(array $fields)
    {

        $this->query->select($fields);
        return $this;
    }

    public function prewhere(...$array)
    {

        $this->query->where($array);
        return $this;

    }
    public function preget()
    {
        $result = $this->query->get();
        return $result === null ? $result :  static::collection($result);
    }
 public  function  prefirst(){
        $result = $this->query->first();
        return  $result === null ? $result : static::collection([$result]) ;
 }
    public function prelimit($limit, $offset = 0)
    {
        $this->query->limit($limit, $offset);
        return $this;
    }
    public  function  precount(){
        return $this->query->count();
    }
    public function getstr()
    {
        return $this->query->getPrepareString();
    }
    public  function  preinsert( array $data){
        $this->query->insert($data);

    }
    public  function preupdate(array $data)
    {
        $this->query->update($data);

    }
    public function  prewherenot(array $array){
        $this->query->wherenot($array);
    }

    public function predelete()
    {
       return  $this->query->delete();

    }
    public  function  precreate(array $array ){
        $keys = array_keys($array);
        $vals= array_values($array);
        $this->query->insert($array);


    }

}