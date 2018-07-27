<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Response;

use Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function jsonResult($code,$data=[],$message='')
    {
        return Response::json([
            'code'      =>  $code,
            'msg'   =>  $message,
            'data' => $data,
        ], 200);
    }

    protected function formatValidationErrors(Validator $validator)
    {
        $message = $validator->errors()->first();
        return ['message'=>$message, 'status_code' => 500];
    }

    /**
     * 获取已定义的验证规则的错误消息。
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'body.required'  => 'A message is required',
        ];
    }
    public function debug_view ( $what ) {
        echo '<pre>';
        if ( is_array( $what ) )  {
            print_r ( $what );
        } else {
            var_dump ( $what );
        }
        echo '</pre>';
        die;
    }
}
