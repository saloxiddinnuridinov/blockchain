<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\Parser\Block\BlockContinue;

class BlockchainController extends Controller
{
    public $data;
    public $previousHash;
    public $hash;
    public $block = [];
    public $chain = [];

    public function __construct(Request $request)
    {
        $this->data = $request->data;
        $this->previousHash = $request->previousHash;
        $this->hash = $this->calculateHash();
        $this->block = [
            $this->data,
            $this->previousHash,
            $this->hash,
        ];
    }

    public function calculateHash()
    {
        return hash('sha256', $this->data . $this->previousHash);
    }
    public function addBlock($block)
    {
        $this->chain[] = $block;
    }
    public function calculateHashForBlock($block)
    {
        return $block->calculateHash();
    }

    public function verifyChain()
    {
        for ($i = 1; $i < count($this->chain); $i++) {
            $currentBlock = $this->chain[$i];
            $previousBlock = $this->chain[$i - 1];

            if ($currentBlock->hash !== $currentBlock->calculateHash()) {
                return false;
            }

            if ($currentBlock->previousHash !== $previousBlock->hash) {
                return false;
            }
        }

        //return $this->chain;
        return true;
    }
    public function main()
    {
        $blockchain = $this->block;

        return view('portfolio-details', ['model' => $blockchain]);
       // return redirect()->w('salom')->with(['model' => $blockchain]);

        echo "salom";
        $blockchain = $this->block;
        if($this->verifyChain()){
            file_put_contents('blockchain.txt', serialize($blockchain));
            return redirect()->route('salom')->with(['model' => $blockchain]);
        }else{
            return redirect()->route('salom')->with(['model' => $blockchain]);
        }

    }

}
