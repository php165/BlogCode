<?php  
namespace Home\Model;
use Think\Exception\BusinessLogicException;
use Think\Model;

class IndexModel extends Model
{
    protected $tableName = 'blogcode_test';
    protected $connection = "mysql://root:@localhost/blogcode";

    public function test($data)
    {
        try {
            $username = $data['username'];
            $password = $data['password'];
            $res = array('status' => 1,'info' => '登录成功');
            $info = $this -> where("username = '%s' and password = '%s'",array($username,$password)) -> select();
            if(empty($info))
            {
                SE('账户不存在');
            }
        } catch (BusinessLogicException $e) {
            $res = array('status' => 0,'info' => '账户不存在');
        } catch (\Exception $e) {
            \Think\Log::write($e -> getMessage());
            $res = array('status' => 0,'info' => '未知错误');
        }
        return $res;
    }
}