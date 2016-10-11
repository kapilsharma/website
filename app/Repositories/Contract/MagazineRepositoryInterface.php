<?php
namespace App\Repositories\Contract;

interface MagazineRepositoryInterface
{
    public function find($order = "asc");
    public function findBy($name, $value);
    public function getCount();
}