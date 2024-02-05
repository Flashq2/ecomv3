<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SplFileInfo;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PaymentController extends Controller
{
    public function index(){

        // return $files->reduce(function (int $published, SplFileInfo $file) {
        //     file_put_contents($this->targetPath($file), file_get_contents($file->getPathname()));

        //     return $published + 1;
        // }, 0);

        // dd(__DIR__ . '/../stubs/migration.stub');
        // $this->artisan('spatie-stub:publish')->assertExitCode(0);
        return view('payment.payment');
    } 
    public function UnittestFunction(Request $request){
        return 1;
    }
}
