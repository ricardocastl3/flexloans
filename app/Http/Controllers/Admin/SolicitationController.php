<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateSolicitation;
use App\Http\Controllers\Admin\Exceptions\ExceptionController;
use App\Models\{Solicitation, Wallet};

class SolicitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solicitations = Solicitation::latest()->paginate(15);
        return view('admin.pages.solicitations.index', compact('solicitations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.solicitations.create');
    }

    /*
    * Select the Wallet to Solicitation
    */

    public function finalSolicitation(StoreUpdateSolicitation $request)
    {
        try{

            $solicit = $request->validated();
            $wallets = Wallet::select('name', 'uuid')->get(['name','uuid']);
            return view('admin.pages.solicitations.finalizing', compact('solicit', 'wallets'));

        }catch(\Exception $ex)
        {
            return ExceptionController::ExceptionOnRequestCustom($ex);
        }
  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSolicitation $request)
    {
        try{

            $datas = $request->validated();

            $req_wallet = $datas["wallet"];
            $req_balance = $datas["requested_balance"];

            $wallet = Wallet::findOrFail($req_wallet);

            if($wallet != null)
            {
                $current_balance = $wallet->balance + $req_balance;
                $wallet->balance = $current_balance;
                $wallet->update();

                $solicit = Solicitation::create([
                    "description" => "",
                    "requested_balance" => $req_balance,
                    "deadline" => $datas["deadline"],
                    "rate" => $datas["rate"],
                    "status" => "Ativo",
                    "user_id" => auth()->user()->id,
                    "wallet_id" => $wallet->uuid,
                    "date" => now()
                ]);
    
                $solicit->wallet()->associate($wallet->uuid);
                $solicit->save();
                
                session()->flash('success','Empréstimo realizado com sucesso');
                return redirect()->route('solicitation.index');

            }else{
                return ExceptionController::ExceptionOnRequestCustom("Carteira Inválida!");
            }

        }catch(\Exception $ex){
            return ExceptionController::ExceptionOnRequestCustom($ex);
        }
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
