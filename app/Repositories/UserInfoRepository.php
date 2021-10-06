<?php
namespace App\Repositories;
use App\Models\UserInfo;

class UserInfoRepository implements UserInfoInterface{

    public function UserInfoTableData(){
        return UserInfo::get();
    }
    public function get($id){
        return UserInfo::find($id);
    }
    public function userInfoStore(array $data){
        return UserInfo::create($data);
    }
    public function update($id, array $data){
        return "somethings";
    }
    public function delete($id){
        return "somethings";
    }

}
