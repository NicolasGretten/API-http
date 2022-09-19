<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function retrieve(Request $request): JsonResponse
    {
        try{
            $this->validate($request, [
                'accountId' => 'string'
            ]);

            $account = Account::where('id', $request->accountId)->first();

            return response()->json($account, 200);

        } catch(Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }
}
