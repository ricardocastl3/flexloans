<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Exceptions\ExceptionController;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateWalletRequest;
use App\Models\Wallet;

use Illuminate\Http\Request;

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
        $wallets = Wallet::latest()->paginate();
        return view('admin.pages.wallet.index', compact('wallets'));
    }
    /*
     * Generate Unique Card Number
     */
    public function generateUniqueCardNumber()
    {
        do {
            $card_number = random_int(10000000000000,9999999999999999);
        } while (Wallet::where("card_number", "=", $card_number)->first());

        return $card_number;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateWalletRequest $request)
    {
        try{

            $datas = $request->validated();
            $card_number = $this->generateUniqueCardNumber();

            $wallet = $this->repository->create([
                "name" => $datas["name"],
                "balance" => $datas["balance"],
                "card_number" => $card_number,
                "user_id" => auth()->user()->id,
            ]);
            $wallet->user()->associate(auth()->user());
            session()->flash('success','Carteira adicionada com sucesso');
            return redirect()->back();

        }catch (\Exception $ex)
        {
            return ExceptionController::ExceptionOnRequestCustom($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        try{

            $wallet = Wallet::findOrFail($uuid);

            if($wallet != null)
            {
                return view('admin.pages.wallet.delete', compact('wallet'));

            }else{
                return ExceptionController::ExceptionOnRequestCustom("Carteira não encontrada!");
            }

        }catch (\Exception $ex)
        {
            return ExceptionController::ExceptionErrorOnRequest();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $uuid)
    {
        try{
            $wallet = Wallet::findOrFail($uuid);

            if($wallet != null)
            {
                return view('admin.pages.wallet.modals.edit', compact('wallet'));
            }else{
                return ExceptionController::ExceptionOnRequestCustom("Carteira não encontrada!"); 
            }
        }catch(\Exception $ex)
        {
            return ExceptionController::ExceptionErrorOnRequest();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateWalletRequest $request, string $uuid)
    {
        try{

            $wallet = Wallet::findOrFail($uuid);

            if($wallet != null)
            {
                $datas = $request->validated();
                $wallet->update($datas);
                session()->flash('success', 'Carteira atualizada com êxito!');
                return redirect()->route('wallet.index');

            }else{
                return ExceptionController::ExceptionOnRequestCustom("Carteira não encontrada!");
            }

        }catch (\Exception $ex)
        {
            return ExceptionController::ExceptionErrorOnRequest();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        try{

            $wallet = Wallet::findOrFail($uuid);

            if($wallet != null)
            {
                $wallet->delete();
                session()->flash('success', 'Carteira eliminada com êxito!');
                return redirect()->route('wallet.index');
                
            }else{
                return ExceptionController::ExceptionOnRequestCustom("Carteira não encontrada!"); 
            }

        }catch(\Exception $ex)
        {
            return ExceptionController::ExceptionErrorOnRequest(); 
        }
    }
}
