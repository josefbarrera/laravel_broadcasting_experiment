<?php

namespace App\Models;

use App\Events\EmitScriptOutput;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Exception\ProcessTimedOutException;

class BashScript extends Model
{
    public function execute() {
        $data = json_encode(['message' => 'Scan started']);
        event(new EmitScriptOutput($data));
        //$process = (new Process())->setTimeout(null);
    }
}
