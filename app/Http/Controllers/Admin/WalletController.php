<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateWalletRequest;
use App\Models\Wallet;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $repository;

    public function __construct(Wallet $wallet)
    {
        $this->repository = $wallet;
    }

    public function index()
    {
        return view('admin.pages.wallet.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function generateUniqueCardNumber()
    {
        do {
            $card_number = random_int(1000000000,99999999999);
        } while (Wallet::where("card_number", "=", $card_number)->first());

        return $card_number;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateWalletRequest $request)
    {
        $datas = $request->validated();
        $card_number = $this->generateUniqueCardNumber();

        $wallet = $this->repository->create([
            "name" => $datas["name"],
            "balance" => $datas["balance"],
            "card_number" => $card_number,
            "user_id" => auth()->user()->id,
            "status" => "Pendente..."
        ]);
        $wallet->associate()->auth()->user();
        session()->flash('success','Carteira adicionada com sucesso');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
