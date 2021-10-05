<?php
namespace App\Repositories;
use App\Models\UserInfo;

class UserInfoRepository implements UserInfoInterface{

    public function UserInfoTableData(){
        return UserInfo::get();
    }
    public function get($id){
        return "somethings";
    }
    public function store(array $data){
        return "somethings";
    }
    public function update($id, array $data){
        return "somethings";
    }
    public function delete($id){
        return "somethings";
    }

}
