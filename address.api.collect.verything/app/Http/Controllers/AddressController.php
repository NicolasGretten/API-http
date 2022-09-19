<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function retrieve(Request $request): JsonResponse
    {
        try{
            $this->validate($request, [
                'addressId' => 'string'
            ]);

            $address = Address::where('id', $request->addressId)->first();

            return response()->json($address, 200);

        } catch(Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }
}
