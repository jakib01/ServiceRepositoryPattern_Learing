<?php
namespace App\Repositories;

interface UserInfoInterface{

    public function UserInfoTableData();
    public function get($id);
    public function userInfoStore(array $data);
    public function update($id, array $data);
    public function delete($id);

}
