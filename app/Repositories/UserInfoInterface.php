<?php
namespace App\Repositories;

interface UserInfoInterface{

    public function userInfoTableData();
    public function get($id);
    public function store(array $data);
    public function update($id, array $data);
    public function delete($id);

}
