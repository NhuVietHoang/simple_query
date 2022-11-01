<?php
namespace  Viethoang\Query\Interfaces;
use Viethoang\Query\QueryBuilder\QueryBuilder;

interface  IQueryBulider{
    public  function  table(string $table = ''):QueryBuilder;
    public  function  select():QueryBuilder;
    public  function  where(): QueryBuilder;
    public  function  get();
    public  function  first();
    public  function  count();
}